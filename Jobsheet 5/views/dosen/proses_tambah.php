<?php 

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database= new database ();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $nidn = $_POST['id'];
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $dosenController= new DosenController($db);
    $result=$dosenController->createDosen($id, $nidn, $nama, $prodi);

    if($result){
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}
?>