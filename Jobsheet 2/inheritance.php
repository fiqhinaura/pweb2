<?php

//membuat class
class manusia{
    //property public
    public $nama_saya;

    //methode manusia
    function panggil_nama($saya){
        $this->nama_saya=$saya;
    }
}
//class turunan atau sub class dari manusia untuk mahasiswa
class mahasiswa extends manusia{
    //property mahasiswa
    public $nama_mahasiswa;
    //methode mahasiswa
    //method ini berfungsi untuk mengisi properti namamhs
    //dengan nilai yg diberikan saat method panggil mhs dipanggil
    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//BUAT CLASS DOSEN
class dosen extends manusia{ //turunan dari manusia
    //property dosen
    protected $nidn; //hanya bisa diakses kelas titu sendiri dan turunannya
    private $prodi; //hanaya bisa diakses didalam dikelas dosen

    //methode dosen
    function panggil_nidn($nidn){ //mengisi property nidn
        $this->nidn = $nidn;
    }
    //method public prodi
    //buat method untuk bisa memanggil prodi
    public function panggil_prodi($prodi){ //mengisi property prodi
        $this->prodi = $prodi;
    }
    // digunakan untuk mengambil nilai yang telah diatur sebelumnya menggunakan panggil_prodi(). 
    //getprodi public method yang mengembalikkan nilai properti prodi yang tadiya privat
    function getprodi(){
        return $this->prodi;
    }

    //mencetak informasi dosen termasuk nama yang diambil dari class manusia, nidn dan prodi dari dosen extends manusia
    function tampilkan_dosen(){
        echo "</br>Nama Dosen : " . $this->nama_saya . "</br>";
        //mengacu pada property nama_saya yang ada di dalam class manusia
        //class dosen adala extends dari manusia maka bisa diwarisi propertinya
        //this untuk mengakses property yang dieksekusi
        echo "NIDN Dosen : " . $this->nidn . "</br>";
        echo "Prodi Dosen : " . $this->getprodi();
    }
}
//instansiasi class mahasiswa
//membuat objek informatika dari class mahasiswa dan memanggil semua method yang diperlukan (panggil etc) untuk mengisi property nama 
$informatika=new mahasiswa();
$informatika->panggil_nama("Fiqhi");
$informatika->panggil_mahasiswa("Naura</br>");

//instansiasi class dosen
//membuat objek DOSEN dari class dosen dengan memanggil method (panggil etc) untuk mengisi property
$DOSEN= new dosen();
$DOSEN->panggil_nama("Aleena");
$DOSEN->panggil_nidn("4132517");
$DOSEN->panggil_prodi("Teknik Informatika");

//tampilkan isi dari property mahasiswa
//mencetak dengan menggunakan objek informatika yang tadi dibuat
echo "Nama Depan Saya : ". $informatika->nama_saya. "</br>";
echo "Nama Belakang Saya : ". $informatika->nama_mahasiswa;

//tampilkan isi property dosen
$DOSEN->tampilkan_dosen();
//DOSEN merupakan instansiasi dari dosen (new line 60) 
//panah untuk mengakses method tampilkan_dosen
