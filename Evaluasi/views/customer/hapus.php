<?php
include_once '../../config.php';
include_once '../../controllers/CustomerController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_cst'])){
    $id_cst = $_GET['id_cst'];

    $customerController = new CustomerController($db);
    $result = $customerController->deleteCustomer($id_cst);

    if ($result){
        header("location:index.php");
    } else {
        echo "Gagal menghapus data";
    }
}
?>
