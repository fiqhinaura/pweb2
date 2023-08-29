<?php

//membuat class
class mahasiswa{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;


    // method untuk menampilkan nama
    function tampil_nama(){
        return "Nama Mahasiswa : Fiqhi Naura";
    }

    // method untuk menampilkan alamat
    function tampil_alamat(){
        return "</br> Alamat Mahasiswa : Jl. Pepaya No. 10</br>";
    }

    // method untuk menampilkan alamat
    function tampil_nim(){
        return "</br>NIM : 220202058";
    }
}

// membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

// menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_nim();
echo $nama_mahasiswa->tampil_alamat();

//membuat class dosen
class dosen{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nama
    function tampil_nama(){
        return "</br>Nama Dosen : Hasna";
    }

    // method untuk menampilkan nidn
    function tampil_nidn(){
        return "</br>NIDN Dosen : 227163729";
    }

    // method untuk menampilkan prodi
    function tampil_prodi(){
        return "</br>Prodi Dosen : Teknik Informatika";
    }

}

//membuat objek nama
$nama_dosen = new dosen();
//menampilkan objek
echo $nama_dosen->tampil_nama();
echo $nama_dosen->tampil_nidn();
echo $nama_dosen->tampil_prodi();



