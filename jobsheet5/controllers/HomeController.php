<?php
class HomeController{
    public function home(){
        header("location:http://localhost/jobsheet5/");
    }
    public function mahasiswa(){
        header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
    }
    public function dosen(){
        header("location:http://localhost/jobsheet5/views/dosen/index.php");
    }
    public function matakuliah(){
        header("location:http://localhost/pweb2/jobsheet5/views/matakuliah/index.php");
    }
}
?>