<?php
include '../app/classes/database.php';
$db= new database();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="update.php?aksi=update" method="post">
    <?php
    //membuat perulangan
    foreach($db->edit($_GET['id']) as $d) {
        ?>
        <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['npm']?>">
                <input type="text" name="npm" value="<?php echo $d['npm']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama']?>"</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5" ><?php echo $d['alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value = "Simpan"></td>
        </tr>
    </table>
<?php
}
?>
</form>