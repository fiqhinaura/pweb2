<?php
require '../../index.php';
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