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
include '../app/classes/database.php';
$db= new database();
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">

<h3>Edit Data Dosen</h3>
<form action="proses_dosen.php?aksi=update" method="post">
    <?php
    //membuat perulangan
    foreach($db->edit_dosen($_GET['id']) as $d) {
        ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIDN</label>
        <input type="hidden" name="id" value="<?php echo $d['id']?>">
        <input type="text" class="form-control" name="nidn" value="<?php echo $d['nidn']?>">
        <div id="nidn" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']?>">
        <div id="nama" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Prodi</label>
        <input type="text" class="form-control" name="prodi" value="<?php echo $d['prodi']?>">
        <div id="prodi" class="form-text"></div>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="submit" class="btn btn-primary"value = "Simpan">
  </div>
<?php
}
?>
</form>
</body>
</html>