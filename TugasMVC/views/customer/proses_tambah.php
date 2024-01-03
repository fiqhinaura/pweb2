<?php
include_once '../../config.php';
include_once '../../controllers/CustomerController.php';
include_once '../../controllers/ReservasiController.php';

$database = new database;
$db = $database->getKoneksi();

$customerController = new customerController($db);
$customerController = new customerController($db);

if (isset($_POST['submit'])) {
    $id_cst = $_POST['id_cst'];
    $nama_cst = $_POST['nama_cst'];
    $nohp_cst = $_POST['nohp_cst'];
    $email_cst = $_POST['email_cst'];

    $result = $customerController->createCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data customer.";
    }
}
?>
