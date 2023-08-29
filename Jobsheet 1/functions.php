<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<form method="post">  
    <?php
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }
    // function lingkaran($r)
    // {
    //     return 3.14 * $r * $r;
    // }
    ?>
    Masukkan Panjang Persegi Panjang = <input type="text" name="panjang"><br>
    <br>
    Masukkan Lebar Persegi Panjang = <input type="text" name="lebar"><br>
    <br>

    <input type="submit" name="submit" value="Submit">  
</form>
<?php
if (isset($_POST['submit'])) {
    $p = $_POST['panjang']; //mengambil variabel panjang dari input
    $l = $_POST['lebar']; //mengambil variabel lebar dari input
    

    $luas_persegi_panjang = persegi_panjang($p, $l); //menggunakan fungsi persegi_panjang dan parameter p dan l didapat dari input user dan disimpan di variabel luaspp
    echo "Luas Persegi Panjang = " . $luas_persegi_panjang . "<br>"; //menampilkan hasil yang sudah disimpan di variabel luaspp, titik digunakan untuk menggabungkan teks dan variabel dalam echo
    
    // echo "Luas Lingkaran = " . lingkaran(7) . "<br>";
}
?>
</html>