<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    $x = "Selamat Belajar PHP!</br>"; //Teks yang akan dimanipulasi
    echo "Teks = $x</br>"; //Menampilkan teks
    echo strtoupper($x); //Teks menjadi kapital\
    echo "</br>";
    echo strtolower($x); //Teks kecil
    echo "</br>";
    echo substr($x, 0, 7); //Menampilkan 7 huruf awal atau memotong string
    ?>
</body>
</html>