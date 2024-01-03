<?php 

include_once '../../config.php';
include_once '../../controllers/ReservasiController.php';

$database= new database ();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $id_reservasi = $_POST['id_reservasi'];
    $id_cst = $_POST['id_cst'];
    $checkin = $_POST['checkin'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];
    $checkout = $_POST['checkout'];
    $jenis = $_POST['jenis'];
   

    $reservasiController= new ReservasiController($db);
    $result=$reservasiController->createReservasi($id_reservasi, $id_cst, $checkin, $checkout, $jenis);

    if($result){
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}
?>