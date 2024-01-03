<?php

include_once '../../config.php';
include_once '../../controllers/CustomerController.php';
include_once '../../controllers/ReservasiController.php';
require '../../index.php';
?>
<div class="col-sm-5 py-2 mx-auto">
    <div class="container-fluid">
        <?php
        $database = new database();
        $db = $database->getKoneksi();

        $customerController = new customerController($db);
        $customer = $customerController->getAllCustomer();

        $customerid = $customerController->getAllCustomer();

        if (isset($_GET['id_reservasi'])) {
            $id_reservasi = $_GET['id_reservasi'];

            $reservasiController = new ReservasiController($db);
            $reservasiData = $reservasiController->getReservasiById($id_reservasi);

            if ($reservasiData) {
                if (isset($_POST['submit'])) {
                    $id_reservasi = $_POST['id_reservasi'];
                    $id_cst = $_POST['id_cst'];
                    $checkin = $_POST['checkin'];
                    $checkout = $_POST['checkout'];
                    $jenis = $_POST['jenis'];

                    $result = $reservasiController->updateReservasi($id_reservasi, $id_cst, $checkin, $checkout, $jenis);

                    if ($result) {
                        header("location:index.php");
                    } else {
                        header("location:edit.php");
                    }
                }
            } else {
                echo "Data Tidak Ditemukan";
            }
        }
        ?>
        <h3>Edit Data Reservasi</h3>
        <?php
        if ($reservasiData) {
            $customerid = $customerController->getCustomerById($reservasiData['id_cst']);

            ?>
            <form action="" method="post">
            <div class="mb-3">
    <div class="mb-3">
                    <label for="id_reservasi" class="form-label">ID Reservasi</label>
                    <input type="text" class="form-control" name="id_reservasi" value="<?php echo $reservasiData['id_reservasi']; ?>" />
                </div>
                <div class="mb-3">
    <div class="mb-3">
    <label for="id_cst" class="form-label">Customer</label>
                <select type="text" class="form-select" name="id_cst" id="id_cst" aria-label="Default select example">

                    <option value="<?php echo $reservasiData['id_cst']; ?>" selected>
                        <?= $customerid['nama_cst'] ?>
                    </option>
                    <?php
                    $no = 1;
                    foreach ($customer as $x) {
                        ?>
                        <option value="<?= $x['id_cst'] ?>">
                            <?php echo $x['nama_cst']; ?>
                        </option>

            </div>
            <?php
                    }
                    ?>
        </select>
        <div class="mb-3">
    <div class="mb-3">
            <label for="checkin" class="form-label">Check-In</label>
            <input type="date" class="form-control" name="checkin" value="<?php echo $reservasiData['checkin']; ?>" />
        </div>

        <div class="mb-3">
    <div class="mb-3">
            <label for="checkout" class="form-label">Check-Out</label>
            <input type="date" class="form-control" name="checkout" value="<?php echo $reservasiData['checkout']; ?>" />
        </div>


        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Metode Bayar</label>
        <select type="text" class="form-select" name="jenis" id="jenis" aria-label="Default select example">
          <option selected><?php echo $reservasiData['jenis']; ?></option>
          <option value="Kartu Kredit">Kartu Kredit</option>
          <option value="Transfer Bank">Transfer Bank</option>
        </select>
      </div>
    

        <div>
            <input type="submit" class="btn btn-primary" name="submit" value="Simpan" />
        </div>


        <?php
        //perulangan untuk memanggil value di database
        foreach ($reservasiData as $d => $value) {
            ?>
            <!-- <div class="mb-3">
        <table border="0">
            <tr>
                <label for="
                    <?php
                    // echo $d;
                    ?>"
                class="form-label"><?php echo $d; ?></label>
                <td>
                    <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                </td>
            </tr> -->
            <?php
        }
        ?>

        </table>
        </form>


        <?php
        }
        ?>
    </body>

    </html>