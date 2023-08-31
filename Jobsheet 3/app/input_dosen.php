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
<h3>Tambah Data Dosen</h3>
<form action="proses_dosen.php?aksi=tambah" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIDN</label>
    <input type="text" class="form-control" name="nidn" id="nidn" aria-describedby="emailHelp">
    <div id="nidn" class="form-text"></div>
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
    <div id="nama" class="form-text"></div>
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prodi</label>
    <input type="text" class="form-control" name="prodi" id="prodi" aria-describedby="emailHelp">
    <div id="prodi" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="submit" class="btn btn-primary"value = "Simpan">
  </div>
  <script>
    //memanggil status alert
    var alertStatus = sessionStorage.getItem('alertStatus');

    //fungsi method untuk menampilkan alert
    function showAlert(){
      var myAlert = document.getElementById('success-alert');
      if (alertStatus==='true'){
        myAlert.style.display = 'block';
      }
    }
    //memanggil fungsi untuk nampilin alert saat halaman dimuat
    showAlert();
  </script>
</form>
</body>
</html>