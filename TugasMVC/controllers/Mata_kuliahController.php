<?php
include_once __DIR__ . '/../models/Mata_kuliah.php';

//pengatur aksi
class MatakuliahController
{
    //membuat property
    private $model;

    public function __construct($db)
    {
        $this->model = new matakuliah($db);
    }

    public function getAllMatakuliah(){
        return $this->model->getAllMatakuliah(); //agar bisa menarik semua file yang ada di matakuliah
    }

    public function createMatakuliah($id_matkul, $nama_matkul, $npm, $id){
        return $this->model->createMatakuliah($id_matkul, $nama_matkul, $npm, $id);
    }

    public function getMatakuliahById($id_matkul)
    {
        return $this->model->getMatakuliahById($id_matkul);
    }

    public function updateMatakuliah($id_matkul, $nama_matkul, $npm, $id)
    {
        return $this->model->updateMatakuliah($id_matkul, $nama_matkul, $npm, $id);
    }

    public function deleteMatakuliah($id_matkul)
    {
        return $this->model->deleteMatakuliah($id_matkul);
    }
}
?>