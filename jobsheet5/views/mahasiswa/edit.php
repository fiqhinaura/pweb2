<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
<?php
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['npm'])){
    $npm = $_GET['npm'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($npm);

    if ($mahasiswaData){
        if (isset($_POST['submit'])){
            $npm = $_POST['npm'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);
            
            if($result){
                header("location: /pweb2/jobsheet5/mahasiswa");
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
            <input type="submit" class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </td>
    </tr>        
        </table>
</form>


    <?php    
}
?>
</body>
</html>