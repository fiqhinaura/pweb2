<?php
include_once __DIR__ . '/../models/Customer.php';


class CustomerController
{
    //membuat property
    private $model;
    
    public function __construct($db)
    {
        $this->model = new customer($db);
    }

    public function getAllCustomer(){
        return $this->model->getAllCustomer(); //agar bisa menarik semua file yang ada di dosen
    }

    // private $listProdi = array('Prodi A', 'Prodi B', 'Prodi C');


    public function createCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst){
        return $this->model->createCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst);
    }

    public function getCustomerById($id_cst)
    {
        return $this->model->getCustomerById($id_cst);
    }

    public function updateCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst)
    {
        return $this->model->updateCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst);
    }

    public function deleteCustomer($id)
    {
        return $this->model->deleteCustomer($id);
    }
}
?>