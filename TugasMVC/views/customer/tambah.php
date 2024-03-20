<?php
require '../../index.php';
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<h3>Tambah Data Customer</h3>
<form action="proses_tambah.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Customer</label>
    <input type="text" class="form-control" name="id_cst" id="id_cst" aria-describedby="emailHelp" required>
    <div id="id_cst" class="form-text"></div>
  </div>
  <div class="mb-3">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama_cst" id="nama_cst" aria-describedby="emailHelp" required>
          <div id="nama_cst" class="form-text"></div>
        </div>
      <div class="mb-3"> 
          <label for="exampleInputEmail1" class="form-label">No. HP</label>
          <input type="text" maxlength="13" class="form-control" name="nohp_cst" id="nohp_cst" aria-describedby="emailHelp" required>
          <div id="nohp_cst" class="form-text"></div>
        </div>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="text" class="form-control" name="email_cst" id="email_cst" aria-describedby="emailHelp" required>
          <div id="email_cst" class="form-text"></div>
        </div>
  <!-- <div class="mb-3">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Prodi</label>
          <input type="text" class="form-control" name="prodi" id="prodi" aria-describedby="emailHelp">
          <div id="prodi" class="form-text"></div>
        </div> -->
  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="submit" class="btn btn-primary" name="submit" value = "Simpan">
  </div>
</form>
</body>
</html>