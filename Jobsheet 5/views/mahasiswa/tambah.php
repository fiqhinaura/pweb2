<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
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
<h3>Tambah Data Mahasiswa</h3>
<form action="proses_tambah.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" name="npm" id="npm" aria-describedby="emailHelp">
    <div id="npm" class="form-text"></div>
  </div>
  <div class="mb-3">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
          <div id="nama" class="form-text"></div>
        </div>
  <div class="mb-3">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" aria-describedby="emailHelp">
          <div id="tempat_lahir" class="form-text"></div>
        </div>
      <!-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" name="teanggal_lahir" id="tanggal_lahir" aria-describedby="emailHelp">
          <div id="tanggal_lahir" class="form-text"></div>
        </div> -->
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
          <select type="text" class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
              <option selected>Pilih Jenis Kelamin</option>
              <option value="Perempuan">Perempuan</option>
              <option value="Laki-laki">Laki-laki</option>
          </select>
        </div>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Agama</label>
          <!-- <input type="select" class="form-control" name="teanggal_lahir" id="tanggal_lahir" aria-describedby="emailHelp"> -->
          <select type="text" class="form-select" name="agama" id="agama" aria-label="Default select example">
              <option selected>Pilih Agama</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katholik">Katholik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Konghuchu">Konghuchu</option>
          </select>
        </div>
      <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
      </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="submit" class="btn btn-primary" name="submit" value = "Simpan">
  </div>
</form>
</body>
</html>