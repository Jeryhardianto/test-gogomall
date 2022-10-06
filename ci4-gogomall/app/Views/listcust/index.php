<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI4-Test_Gogomall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">
        <a href="/addcust" class="btn btn-primary">Tambah Customer</a>
        <a href="/addsales" class="btn btn-primary">Tambah Sales</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Customer</th>
                    <th scope="col">No telpon customer</th>
                    <th scope="col">Nama customer</th>
                    <th scope="col">Nama sales</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $count= 1;
                 foreach ($customer->getResultArray() as $row) :
                ?>
                <tr>
                    <th scope="row"><?= $count++ ?></th>
                    <td><?= $row['id_customer'] ?></td>
                    <td><?= $row['no_telpon'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nama_sales'] ?></td>
                
                </tr>
                <?php 
                endforeach;
                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>