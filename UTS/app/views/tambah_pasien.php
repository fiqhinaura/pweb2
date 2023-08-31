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
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<h3>Tambah Data Pasien</h3>
<form action="proses_pasien.php?aksi=tambah" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rekam Medis</label>
    <input type="text" class="form-control" name="no_rm" id="no_rm" aria-describedby="emailHelp">
    <div id="no_rm" class="form-text"></div>
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" aria-describedby="emailHelp">
    <div id="nama_pasien" class="form-text"></div>
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="emailHelp">
    <div id="alamat" class="form-text"></div>
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usia</label>
    <input type="text" class="form-control" name="usia" id="usia" aria-describedby="emailHelp">
    <div id="usia" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="submit" class="btn btn-primary"value = "Simpan">
  </div>
</form>
</body>
</html>