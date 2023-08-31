<?php

class Mahasiswa{
    //membuat koneksi yang di config kita bikin private di class mhs
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllMahasiswa()
    {
        $query="SELECT * FROM mahasiswa";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    
    public function createMahasiswa($npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat){
        $query="INSERT INTO mahasiswa (npm, nama, tempat_lahir, jenis_kelamin, agama, alamat) 
        VALUES('$npm', '$nama', '$tempat_lahir', '$jenis_kelamin', '$agama', '$alamat')";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function getMahasiswaById($npm)
    {
        $query = "SELECT * FROM mahasiswa where npm = $npm";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($id, $npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat)
    {
        $query = "UPDATE mahasiswa set npm='$npm', nama='$nama', tempat_lahir='$tempat_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' where id='$npm'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function deleteMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE npm=$id";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result){
            return true;
        }else {
            return false;
        }
    }
}
?>