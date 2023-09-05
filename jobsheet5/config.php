<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    //MEMBUAT KONEKSI
    function getKoneksi(){ //method ini dibungkus dalam variabel koneksi
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if (!$this->koneksi){
            die("Koneksi database gagal : ".mysqli_connect_error());
        }
        return $this->koneksi;
        //jika koneksi database tidak ditemukan akan muncul alert koneksi gagal jika ditemukan maka akan terhubung ke database konoeksi

    }
}
?>