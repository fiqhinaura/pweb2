<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
    <script src="../public/assets/js/bootstrap.min.js"></script>
</head>
<body>

<?php
//memanggil class daabase
include '../../app/classes/database.php';
//instansiasi class database
$db= new database; 
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<h3>Data Pasien</h3>
<a href="tambah_pasien.php" class="btn btn-primary">Tambah Pasien</a>
<br>
<br>
<table border="1">
    <tr>
        <th>No</th>
        <th>No RM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_informasi() as $x){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['no_rm'] ?></td>
            <td><?php echo $x['nama_pasien'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td><?php echo $x['usia'] ?></td>
            <td>
                <a href="edit_pasien.php?id=<?php echo $x['no_rm'];?>&aksi=update" class="btn btn-warning">Edit</a>
                <a href="proses_pasien.php?id=<?php echo $x['no_rm'];?>&aksi=hapus" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php    
    }
    ?>
</table>
</body>
</html>