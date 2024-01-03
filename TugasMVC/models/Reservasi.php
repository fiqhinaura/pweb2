<?php
//pengatur data
class reservasi{
    //membuat koneksi yang di config kita bikin private di class mhs
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllReservasi()
    {
        $query="SELECT r.*,c.nama_cst FROM `reservasi` r JOIN customer c ON c.id_cst=r.id_cst;";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    
    public function createReservasi($id_reservasi, $id_cst, $checkin, $checkout, $jenis){
        $query="INSERT INTO reservasi (id_reservasi, id_cst, checkin, checkout, jenis) 
        VALUES('$id_reservasi', '$id_cst', '$checkin', '$checkout', '$jenis')";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function getReservasiById($id_reservasi)
    {
        $query = "SELECT * FROM reservasi where id_reservasi = $id_reservasi";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateReservasi($id_reservasi, $id_cst, $checkin, $checkout, $jenis)
    {
        $query = "UPDATE reservasi set id_cst='$id_cst', checkin='$checkin', checkout='$checkout', jenis='$jenis' where id_reservasi='$id_reservasi'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    public function deleteReservasi($id){
        $query = "DELETE FROM reservasi WHERE id_reservasi=$id";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result){
            return true;
        }else {
            return false;
        }
    }
}
?>