<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
    <script src="../public/assets/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include'header.html';
?>
<?php
//memanggil class daabase
include '../app/classes/database.php';
//instansiasi class database
$db= new database; 
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<h3>Data Mahasiswa</h3>
<a href="input_mhs.php" class="btn btn-primary">Tambah Mahasiswa</a>
<br>
<br>
<!-- <div class="d-flex justify-content-center"> -->
<table class="table table-striped table-sm">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_mahasiswa() as $x){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['npm'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a href="edit_mhs.php?id=<?php echo $x['npm'];?>&aksi=edit" class="btn btn-warning">Edit</a>
                <a href="proses_mhs.php?id=<?php echo $x['npm'];?>&aksi=hapus" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    </div>
    <?php    
    }
    ?>
</table>
</body>
</html>