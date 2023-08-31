<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="rumahsakit";
    var $koneksi;

    //membuat method
    function __construct() //jika memanggil file database.php (include) di file lain function yang ter construct pasti akan langsung ikut
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }
    //database mahasiswa
    function tampil_informasi(){
        $data=mysqli_query($this->koneksi,"select * from pasien"); //data langsung diisi tetap didapat pakai mysqli query
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tambah_pasien($no_rm,$nama_pasien,$alamat,$usia){
        mysqli_query($this->koneksi, "insert into pasien (no_rm,nama_pasien,alamat,usia) values('$no_rm','$nama_pasien','$alamat','$usia')");
    }

    function edit_pasien($id)
    {
        $data = mysqli_query($this->koneksi, "select * from pasien where no_rm = '$id'");
        //buat perulangan
        $hasil = array();
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update_pasien($no_rm,$nama_pasien,$alamat,$usia){
        mysqli_query($this->koneksi,"update pasien set no_rm='$no_rm', nama_pasien='$nama_pasien', alamat='$alamat', usia='$usia' where no_rm='$no_rm'");
    }

    function hapus_pasien($id){
        mysqli_query($this->koneksi,"delete from pasien where no_rm='$id'");
    }
}

?>