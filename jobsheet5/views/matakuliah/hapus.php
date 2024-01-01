<?php

include_once '../../config.php';
include_once '../../controllers/Mata_kuliahController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $matakuliahController=new MatakuliahController($db);
    $result = $matakuliahController->deleteMatakuliah($id);

    if ($result){
        header("location:index.php");
    }else {
        echo "Gagal menghapus data";
    }
}