<?php
//pengatur data
class Matakuliah{
    //membuat koneksi yang di config kita bikin private di class mhs
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllMatakuliah()
    {
        $query = "SELECT mata_kuliah.id_matkul, mata_kuliah.nama_matkul, mahasiswa.nama AS nama_mhs, dosen.nama AS nama_dsn FROM mata_kuliah
                JOIN mahasiswa ON mata_kuliah.npm = mahasiswa.npm
                 JOIN dosen ON mata_kuliah.id_dosen = dosen.id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMatakuliah($id_matkul, $nama_matkul, $npm, $id){
        $query="INSERT INTO mata_kuliah (id_matkul, nama_matkul, npm, id) 
        VALUES('$id_matkul', '$nama_matkul', '$npm', '$id')";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function getMatakuliahById($id_matkul)
    {
        $query = "SELECT * FROM mata_kuliah where id_matkul = $id_matkul";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMatakuliah($id_matkul, $nama_matkul, $npm, $id)
    {
        $query = "UPDATE mata_kuliah set id_matkul='$id_matkul', nama_matkul='$nama_matkul', npm='$npm', id='$id' where id_matkul='$id_matkul'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function deleteMatakuliah($id_matkul){
        $query = "DELETE FROM mata_kuliah WHERE id_matkul=$id_matkul";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result){
            return true;
        }else {
            return false;
        }
    }
}
?>