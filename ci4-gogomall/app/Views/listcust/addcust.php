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
        <h2>Tambah Customer</h2>
        <form action="/addcust/save" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <label for="inputState" class="form-label">Sales</label>
                    <select id="inputState" name="sales" class="form-select">
                        <option selected>--Pilih Sales--</option>
                        <?php 
                        foreach ($sales->getResult() as $row) :
                        ?>
                            <option value="<?= $row->id ?>"><?= $row->nama_sales?></option>
                        <?php 
                        endforeach;
                        ?>
                    </select>

            </div>
       
        <a href="/" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>