<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/CustomerController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$customerController = new customerController($db);
$customer = $customerController->getAllCustomer();
//sekarang sudah bisamengambil data2 di file dosen

?>

<div class="col-sm-8 py-2 mx-auto">
    <div class="container-fluid">

        <form action="index.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
        </form>

         <div class="d-flex justify-content-center"> -->
        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : " . $cari . "</b>";
        }
        ?>
 <?php
?>
<h3>Data Customer</h3>
<a href="tambah.php" class="btn btn-success">Tambah Customer</a>
<br>
<br>

<table class="table table-striped table-sm">
    <tr>
        <th>No</th>
        <th>ID Customer</th>
        <th>Nama</th>
        <th>No. HP</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    
    $no = 1;
    foreach ($customer as $x) {
        ?>
     <?php
     if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $result = mysqli_query($db, "SELECT * FROM customer WHERE nama_cst LIKE '%$cari%'");
    } else {
        $result = mysqli_query($db, "SELECT * FROM customer");
    }
    $no = 1;
    while ($d = mysqli_fetch_array($result)) {
    ?>
            <?php
            $no = 1;
            foreach ($customer as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        <?php echo $x['id_cst'] ?>
                    </td>
                    <td>
                        <?php echo $x['nama_cst'] ?>
                    </td>
                    <td>
                        <?php echo $x['nohp_cst'] ?>
                    </td>
                    <td>
                        <?php echo $x['email_cst'] ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-primary" href="edit.php?id_cst=<?php echo $x['id_cst']; ?>">Edit</a>
                        <a class="btn btn-outline-danger" href="hapus.php?id_cst=<?php echo $x['id_cst']; ?>"
                            onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
                    </td>
                </tr>
            
            <?php }} ?>
            
        </table>
    </div>
</div>
</body>
</html>