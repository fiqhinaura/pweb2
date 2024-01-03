<?php

class Customer{
    //membuat koneksi yang di config kita bikin private di class dosen
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllCustomer()
    {
        $query="SELECT * FROM customer";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    
    public function createCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst){
        $query="INSERT INTO customer (id_cst, nama_cst, nohp_cst, email_cst) 
        VALUES('$id_cst', '$nama_cst', '$nohp_cst', '$email_cst')";
        $result=mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
    

    public function getCustomerById($id_cst)
    {
        $query = "SELECT * FROM customer where id_cst = $id_cst";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateCustomer($id_cst, $nama_cst, $nohp_cst, $email_cst)
    {
        $query = "UPDATE customer set id_cst='$id_cst', nama_cst='$nama_cst', nohp_cst='$nohp_cst', email_cst='$email_cst' where id_cst='$id_cst'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else {
            return false;
        }
    }

    // Pada class Customer
    public function deleteCustomer($id){
        $query = "DELETE FROM customer WHERE id_cst=$id";
        $result = mysqli_query($this->koneksi, $query);
        
        if ($result){
            return true;
        }else {
            return false;
        }
    }
    
}
?>