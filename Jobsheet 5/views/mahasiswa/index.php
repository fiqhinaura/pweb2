<!DOCTYPE html>
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
    <?php
    include '../../header.html';
    ?>
    <?php
    //memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';

    //instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $mahasiswaController = new mahasiswaController($db);
    $mahasiswa = $mahasiswaController->getAllMahasiswa();
    //sekarang sudah bisamengambil data2 di file mahasiswa



    ?>
    <div class="col-sm-8 py-2 mx-auto">
        <div class="container-fluid">
            <h3>Data Mahasiswa</h3>
            <a href="tambah.php" class="btn btn-primary">Tambah Mahasiswa</a>
            <br>
            <br>
            <!-- <div class="d-flex justify-content-center"> -->
            <table class="table table-striped table-sm">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <!-- <th>Tanggal Lahir</th> -->
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($mahasiswa as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['npm'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['tempat_lahir'] ?></td>
                        <!-- <td><?php echo $x['tanggal_lahir'] ?></td> -->
                        <td><?php echo $x['jenis_kelamin'] ?></td>
                        <td><?php echo $x['agama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $x['npm']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $x['npm']; ?>"
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