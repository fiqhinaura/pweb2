<?php
//public bisa dipanggil diluar class
//membuat class mahasiswa
class mahasiswa{
    //property public
    public $nama;
    private $nim = "220202058"; //tdk bisa dipanggil diluar kelas tapi bisa di inheritance tapi bisa di extend classnya

    //public method
    public function tampilkan_nama(){
        //nilai kembalian
        return "Nama saya Fiqhi </br>";
    }
    function tampilkan_nim()
    {
        return "NIM saya " . $this->nim;
    }
}
//instansiasi objek mahasiswa kedalam mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();