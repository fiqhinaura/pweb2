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
include '../classes/database.php';
$db= new database();
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">

<h3>Edit Data Pasien</h3>
<form action="proses_pasien.php?aksi=update" method="post">
    <?php
    //membuat perulangan
    foreach($db->edit_pasien($_GET['id']) as $d) {
        ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Rekam Medis</label>
        <input type="hidden" name="id" value="<?php echo $d['no_rm']?>">
        <input type="text" class="form-control" name="no_rm" value="<?php echo $d['no_rm']?>">
        <div id="no_rm" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama_pasien" value="<?php echo $d['nama_pasien']?>">
        <div id="nama_pasien" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <textarea type="text" class="form-control" name="alamat" cols="30" rows="5" ><?php echo $d['alamat']?></textarea>
        <div id="alamat" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usia</label>
        <input type="text" class="form-control" name="usia" value="<?php echo $d['usia']?>">
        <div id="usia" class="form-text"></div>
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