<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    //membuat method
    function __construct() //jika memanggil file database.php (include) di file lain function yang ter construct pasti akan langsung ikut
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa(){
        $data=mysqli_query($this->koneksi,"select * from mahasiswa"); //data langsung diisi tetap didapat pakai mysqli query
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tambah_mhs($npm,$nama,$alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa (npm,nama,alamat) values('$npm','$nama','$alamat')");
    }

    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where npm = '$id'");
        //buat perulangan
        $hasil = array();
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
}

?>