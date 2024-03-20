<?php
include_once __DIR__ . '/../models/Reservasi.php';

//pengatur aksi
class ReservasiController
{
    //membuat property
    private $model;

    public function __construct($db)
    {
        $this->model = new reservasi($db);
    }

    public function getAllReservasi(){
        return $this->model->getAllReservasi(); //agar bisa menarik semua file yang ada di Reservasi
    }

    public function createReservasi($id_reservasi, $nama_cst, $checkin, $checkout, $metode){
        return $this->model->createReservasi($id_reservasi, $nama_cst, $checkin, $checkout, $metode);
    }

    public function getReservasiById($id_reservasi)
    {
        return $this->model->getReservasiById($id_reservasi);
    }

    public function updateReservasi($id_reservasi, $nama_cst, $checkin, $checkout, $metode)
    {
        return $this->model->updateReservasi($id_reservasi, $nama_cst, $checkin, $checkout, $metode);
    }

    public function deleteReservasi($id)
    {
        return $this->model->deleteReservasi($id);
    }
}
?>