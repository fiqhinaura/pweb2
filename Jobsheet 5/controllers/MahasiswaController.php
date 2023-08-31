<?php
include_once __DIR__ . '/../models/Mahasiswa.php';


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

    public function getMahasiswaById($id)
    {
        return $this->model->getMahasiswaById($id);
    }

    public function updateMahasiswa($id, $npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->updateMahasiswa($id, $npm, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function deleteMahasiswa($id)
    {
        return $this->model->deleteMahasiswa($id);
    }
}
?>