<?php
include_once __DIR__ . '/../models/Mahasiswa.php';

//pengatur aksi
class MahasiswaController
{
    //membuat property
    private $model;

    public function __construct($db)
    {
        $this->model = new mahasiswa($db);
    }

    public function getAllMahasiswa(){
        return $this->model->getAllMahasiswa(); //agar bisa menarik semua file yang ada di mahasiswa
    }

    public function createMahasiswa($npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat){
        return $this->model->createMahasiswa($npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function getMahasiswaById($npm)
    {
        return $this->model->getMahasiswaById($npm);
    }

    public function updateMahasiswa($npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->updateMahasiswa($npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function deleteMahasiswa($id)
    {
        return $this->model->deleteMahasiswa($id);
    }
}
?>