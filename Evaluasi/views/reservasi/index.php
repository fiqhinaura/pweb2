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
    include_once '../../controllers/ReservasiController.php';
    require '../../index.php';

    //instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $reservasiController = new reservasiController($db);
    $reservasi = $reservasiController->getAllReservasi();
    //sekarang sudah bisamengambil data2 di file rvp



    ?>
    <div class="col-sm-10 py-2 mx-auto">
        <div class="container-fluid">
            <h3>Data Reservasi</h3>
            <a href="tambah.php" class="btn btn-success">Tambah Reservasi</a>
            <br>
            <br>
            <table class="table table-striped table-sm">
                <tr>
                    <th>No</th>
                    <th>ID Reservasi</th>
                    <th>ID Customer</th>
                    <th>Nama</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Metode</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($reservasi as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['id_reservasi'] ?></td>
                        <td><?php echo $x['id_cst'] ?></td>
                        <td><?php echo $x['nama_cst'] ?></td>
                        <td><?php echo $x['checkin'] ?></td>                        
                        <td><?php echo $x['checkout'] ?></td>
                        <td><?php echo $x['jenis'] ?></td>
                        <td>
                            <a class="btn btn-outline-primary" href="edit.php?id_reservasi=<?php echo $x['id_reservasi']; ?>">Edit</a>
                            <a class="btn btn-outline-danger" href="hapus.php?id=<?php echo $x['id_reservasi']; ?>"
                            onclick="return confirm ('Apakah yakin akan menghapus..?')" >Hapus</a>
                        </td>
                    </tr>
        </div>
    <?php
                }
    ?>
    </table>
</body>

</html>