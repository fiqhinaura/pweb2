<?php 

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database= new database ();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $mahasiswaController= new MahasiswaController($db);
    $result=$mahasiswaController->createMahasiswa($npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);

    if($result){
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}
?>