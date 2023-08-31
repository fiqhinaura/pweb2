<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
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
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<h3>Tambah Data Dosen</h3>
<form action="proses_tambah.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIDN</label>
    <input type="text" class="form-control" name="nidn" id="nidn" aria-describedby="emailHelp">
    <div id="nidn" class="form-text"></div>
  </div>
  <div class="mb-3">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
          <div id="nama" class="form-text"></div>
        </div>
  <!-- <div class="mb-3">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Prodi</label>
          <input type="text" class="form-control" name="prodi" id="prodi" aria-describedby="emailHelp">
          <div id="prodi" class="form-text"></div>
        </div> -->
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Prodi</label>
          <select type="text" class="form-select" name="prodi" id="prodi" aria-label="Default select example">
              <option selected>Pilih Prodi</option>
              <option value="TI">TI</option>
              <option value="RKS">RKS</option>
              <option value="TM">TM</option>
              <option value="TE">TE</option>
              <option value="MM">MM</option>
              <option value="PPA">PPA</option>
              <option value="TPPL">TPPL</option>
          </select>
        </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="submit" class="btn btn-primary" name="submit" value = "Simpan">
  </div>
</form>
</body>
</html>