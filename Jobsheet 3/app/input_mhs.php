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
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<h3>Tambah Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=tambah" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" name="npm" id="npm" aria-describedby="emailHelp" required>
    <div id="npm" class="form-text"></div>
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" required>
    <div id="nama" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="submit" class="btn btn-primary"value = "Simpan">
  </div>
</form>
</body>
</html>