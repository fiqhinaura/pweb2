<?php

include_once '../../config.php';
include_once '../../controllers/ReservasiController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $reservasiController=new ReservasiController($db);
    $result = $reservasiController->deleteReservasi($id);

    if ($result){
        header("location:index.php");
    }else {
        echo "Gagal menghapus data";
    }
}