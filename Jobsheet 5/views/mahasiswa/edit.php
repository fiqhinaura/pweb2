<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
    <script src="../public/assets/js/bootstrap.min.js"></script>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
   crossorigin="anonymous"></script>
    <?php
    include '../../header.html';
    ?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData){
        if (isset($_POST['submit'])){
            $npm = $_POST['npm'];
            $nama = $_POST['$nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);
            
            if($result){
                header("location:index.php");
            }else {
                header("location:edit.php");
            }
        }
    }else {
        echo "Mahasiswa Tidak Ditemukan";
    }
}
?>
<h3>Edit Data Mahasiswa</h3>
<?php 
if ($mahasiswaData) {
?>
<form action="" method="post">
    <?php
    //perulangan untuk memanggil value di database
    foreach ($mahasiswaData as $d => $value){
        ?>
        <div class="mb-3">
        <table border="0">
            <tr>
                <label for="
                    <?php
                    echo $d;
                    ?>"
                class="form-label"><?php echo $d; ?></label>
                <td>
                    <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                </td>
            </tr>
            <?php
    }
    ?>
    <tr>
        <td>
            <input type="submit" class="btn btn-primary" type="submit" name="submt" value="Simpan">
        </td>
    </tr>        
        </table>
</form>


    <?php    
}
?>
</body>
</html>