<?php

class Dosen{
    //membuat koneksi yang di config kita bikin private di class dosen
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllDosen()
    {
        $query="SELECT * FROM dosen";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    
    public function createDosen($id, $nidn, $nama, $prodi){
        $query="INSERT INTO dosen (nidn, nama, prodi) 
        VALUES('$nidn', '$nama', '$prodi')";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function getDosenById($id)
    {
        $query = "SELECT * FROM dosen where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDosen($id, $nidn, $nama, $prodi)
    {
        $query = "UPDATE dosen set nidn='$nidn', nama='$nama', prodi='$prodi' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function deleteDosen($id){
        $query = "DELETE FROM dosen WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result){
            return true;
        }else {
            return false;
        }
    }
    
}
?>