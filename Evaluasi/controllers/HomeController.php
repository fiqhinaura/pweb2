<?php
class HomeController{
    public function home(){
        header("location:http://localhost/TugasMVC/");
    }
    public function arsip(){
        header("location:http://localhost/TugasMVC/views/mahasiswa/index.php");
    }
    public function customer(){
        header("location:http://localhost/TugasMVC/views/dosen/index.php");
    }
    public function matakuliah(){
        header("location:http://localhost/pweb2/TugasMVC/views/matakuliah/index.php");
    }
}
?>