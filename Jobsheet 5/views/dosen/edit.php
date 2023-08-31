
<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
    <?php
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData){
        if (isset($_POST['submit'])){
            $nidn = $_POST['nidn$nidn'];
            $nama = $_POST['$nama'];
            $prodi = $_POST['prodi'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $prodi);
            
            if($result){
                header("location:index.php");
            }else {
                header("location:edit.php");
            }
        }
    }else {
        echo "Dosen Tidak Ditemukan";
    }
}
?>
<h3>Edit Data Dosen</h3>
<?php 
if ($dosenData) {
?>
<form action="" method="post">
    <?php
    //perulangan untuk memanggil value di database
    foreach ($dosenData as $d => $value){
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