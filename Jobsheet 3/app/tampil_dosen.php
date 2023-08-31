<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
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
<h3>Data Dosen</h3>

<?php
//memeriksa apakah ada status success dari URL contoh saat input
if (isset($_GET['status']) && $_GET['status'] === 'success') 
?>
<div class="alert alert-success" id="success-alert" role="alert">
Berhasil Menambahkan Data
</div>
<?php 
?>
<a href="input_dosen.php" class="btn btn-primary">Tambah Dosen</a>
<br>
<br>
<table class="table table-striped table-sm">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_dosen() as $x){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['prodi'] ?></td>
            <td>
                <a href="edit_dosen.php?id=<?php echo $x['id'];?>&aksi=edit" class="btn btn-warning">Edit</a>
                <a href="proses_dosen.php?id=<?php echo $x['id'];?>&aksi=hapus" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php    
    }
    ?>
</table>
</body>
</html>