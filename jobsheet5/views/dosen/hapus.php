<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $dosenController=new DosenController($db);
    $result = $dosenController->deleteDosen($id);

    if ($result){
        header("location:/pweb2/jobsheet5/dosen");
    }else {
        echo "Gagal menghapus data";
    }
}