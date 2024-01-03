
<?php

include_once '../../config.php';
include_once '../../controllers/CustomerController.php';
require '../../index.php';
?>
<div class="col-sm-5 py-2 mx-auto">
<div class="container-fluid">
    <?php
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_cst'])){
    $id_cst = $_GET['id_cst'];

    $customerController = new CustomerController($db);
    $customerData = $customerController->getCustomerById($id_cst);

    if ($customerData){
        if (isset($_POST['submit'])){
            $id_cst = $_POST['id_cst'];
            $nama_cst = $_POST['nama_cst'];
            $nohp_cst = $_POST['nohp_cst'];
            $email_cst = $_POST['email_cst'];

            $result = $customerController->updateCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst);
            
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
<h3>Edit Data Customer</h3>
<?php 
if ($customerData) {
?>
<form action="edit.php?id_cst=<?php echo $id_cst; ?>" method="post"> 
    <?php
    //perulangan untuk memanggil value di database
    foreach ($customerData as $d => $value){
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