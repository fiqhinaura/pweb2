<!-- <!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
    <script src="../public/assets/js/bootstrap.min.js"></script>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
   crossorigin="anonymous"></script>
    --->
    <?php
    //memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/Mata_kuliahController.php';
    require '../../index.php';

    //instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $matakuliahController = new matakuliahController($db);
    $matakuliah = $matakuliahController->getAllMatakuliah();
    //sekarang sudah bisamengambil data2 di file matkul



    ?>
    <div class="col-sm-8 py-2 mx-auto">
        <div class="container-fluid">
            <h3>Data Matakuliah</h3>
            <a href="tambah.php" class="btn btn-primary">Tambah Matakuliah</a>
            <br>
            <br>
            <table class="table table-striped table-sm">
                <tr>
                    <th>No</th>
                    <th>No Matkul</th>
                    <th>Nama Matkul</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Dosen</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($matakuliah as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['id_matkul'] ?></td>
                        <td><?php echo $x['nama_matkul'] ?></td>
                        <td><?php echo $x['nama_mhs'] ?></td>
                        <td><?php echo $x['nama_dsn'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit.php?npm=<?php echo $x['id_matkul']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $x['id_matkul']; ?>"
                            onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
                        </td>
                    </tr>
        </div>
    <?php
                }
    ?>
    </table>
</body>

</html>