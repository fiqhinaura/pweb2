<?php
include '../app/classes/database.php';
$db= new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dosen($_POST['nidn'], $_POST['nama'], $_POST['prodi']);
    header("location:tampil_dosen.php?status=success");
}elseif($aksi=="update"){
    $db->update_dosen($_POST['id'],$_POST['nidn'],$_POST['nama'],$_POST['prodi']);
    header("location:tampil_dosen.php");
}elseif($aksi=="hapus"){
    $db->hapus_dosen($_GET['id']);
    header("location:tampil_dosen.php");
}
?>