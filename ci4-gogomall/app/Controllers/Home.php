<?php

namespace App\Controllers;

use App\Models\CustModel;

class Home extends BaseController
{
    protected $customer;
    public function __construct()
    {
        $customer = new CustModel();
    }
    public function index()
    {
        $db = db_connect();
        $builder = $db->query("SELECT c.id as id_customer, c.no_telpon as no_telpon,c.nama as nama, s.nama_sales as nama_sales FROM customer as c JOIN sales as s ON (c.id_sales=s.id)");
        $data = [
            'customer' => $builder
        ];
        return view('listcust/index', $data);
    }

    public function addCust(){
        $db = db_connect();
        $sales = $db->query("SELECT * FROM sales");
        $data = [
            'sales' => $sales
        ];

        return view('listcust/addcust', $data);
        // echo 'Hello World';
    }

    public function save(){
        $db = db_connect();
        $pQuery = $db->prepare(static function ($db) {
            return $db->table('customer')->insert([
                'nama' => 'x',
                'no_telpon' => 'x',
                'id_sales' => 'x'
            ]);
        });

        $results = $pQuery->execute($_POST['nama'],$_POST['nohp'],$_POST['sales']);
        return redirect()->to('/');
    }

    public function AddSales(){
      
        return view('listcust/addsales');
        // echo 'Hello World';
    }

    public function saveSales(){
        $db = db_connect();
        $pQuery = $db->prepare(static function ($db) {
            return $db->table('sales')->insert([
                'nama_sales' => 'x',
            ]);
        });

        $results = $pQuery->execute($_POST['nama']);
        return redirect()->to('/');
    }


}