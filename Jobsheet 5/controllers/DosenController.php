<?php
include_once __DIR__ . '/../models/Dosen.php';


class DosenController
{
    //membuat property
    private $model;

    public function __construct($db)
    {
        $this->model = new dosen($db);
    }

    public function getAllDosen(){
        return $this->model->getAllDosen(); //agar bisa menarik semua file yang ada di dosen
    }

    public function createDosen($id, $nidn, $nama, $prodi){
        return $this->model->createDosen($id, $nidn, $nama, $prodi);
    }

    public function getDosenById($id)
    {
        return $this->model->getDosenById($id);
    }

    public function updateDosen($id, $nidn, $nama, $prodi)
    {
        return $this->model->updateDosen($id, $nidn, $nama, $prodi);
    }

    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }
}
?>