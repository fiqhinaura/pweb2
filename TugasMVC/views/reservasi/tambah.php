<?php
require '../../index.php';
include_once '../../controllers/CustomerController.php';
include_once '../../config.php';
//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$customerController = new customerController($db);
$customer = $customerController->getAllCustomer();

?>
<div class="col-sm-5 py-2 mx-auto">
  <div class="container-fluid">
    <h3>Tambah Data Reservasi</h3>
    <form action="proses_tambah.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID Reservasi</label>
        <input type="text" class="form-control" name="id_reservasi" id="id_reservasi" aria-describedby="emailHelp" required>
        <div id="id_reservasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID Customer</label>
        <select type="text" class="form-select" name="id_cst" id="id_cst" aria-label="Default select example" required>

          <option selected required>-------</option>
          <?php
          $no = 1;
          foreach ($customer as $x) {
            ?>
          <option value="<?= $x['id_cst'] ?>"><?php echo $x['nama_cst']; ?></option>

        </div>
        <?php
          }
          ?>
      </select>
  </div>
  <div class="mb-3">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Check-In</label>
      <input type="date" class="form-control" name="checkin" id="checkin" aria-describedby="emailHelp" required>
      <div id="checkin" class="form-text"></div>
    </div>
    <div class="mb-3">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Check-Out</label>
        <input type="date" class="form-control" name="checkout" id="checkout" aria-describedby="emailHelp" required>
        <div id="checkout" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Metode Bayar</label>
        <select type="text" class="form-select" name="jenis" id="jenis" aria-label="Default select example" required>
          <option selected>Pilih Metode Bayar</option>
          <option value="Kartu Kredit">Kartu Kredit</option>
          <option value="Transfer Bank">Transfer Bank</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"></label>
        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
      </div>
    
            </form>
            </body>

            </html>