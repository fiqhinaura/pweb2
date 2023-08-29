<?php

//membuat class
class mahasiswa{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    
    function __construct() //konstruksi pertama
    {
        echo "Saya Mahasiswa Teknik Informatika</br>";
        echo "</br>";
    }
    
    function __destruct()
    {
        echo "</br></br>Politeknik Negeri Cilacap";
    }

    // method untuk menampilkan nama
    function tampil_nama(){
        return "Nama Saya Fiqhi Naura";
    }

    //method baru
    function tampil_mahasiswa(){
        return "</br>Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }
    
    // method untuk menampilkan alamat
    function tampil_alamat(){
        // isi method
    }
}

// membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

// menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();

//membuat class dosen
class dosen{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nama
    function tampil_nama(){
        return "</br>Nama dosen : Lian";
    }
    // method untuk menampilkan prodi
    function tampil_prodi(){
        //isi method
    }
}

//membuat objek nama
$nama_dosen = new dosen();
//menampilkan objek
echo $nama_dosen->tampil_nama();

