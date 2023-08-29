<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan For bilangan genap 1 hingga 10 </br>";
    for($x=2;$x<=10;$x+=2)
    echo "$x </br>";
    echo "</br>Perulangan While bilangan ganjil 1 hingga 10 </br>";
    $y = 1;
    while ($y<=10){
        echo "$y </br>";
        $y += 2;
    }
    ?>
   <?php
   echo "</br>Bilangan Prima Kurang dari 20 dengan Perulangan Do While: </br>";
   $angka = 2; // Angka pertama yang akan diperiksa apakah bilangan prima
   do {
    $pembagi = 0; // Jumlah pembagi untuk setiap angka

    // Mengecek apakah angka bisa dibagi dengan angka lain selain 1 dan dirinya sendiri
    for ($i = 1; $i <= $angka; $i++) {
        if ($angka % $i == 0) { //sisa dari pembagian dua bilangan harus 0
            $pembagi++;
        }
    }

    // Jika angka hanya punya 2 pembagi (1 dan dirinya sendiri), maka itu bilangan prima
    if ($pembagi == 2) {
        echo $angka . "</br>";
    }

    $angka++;

} while ($angka < 20); // Melanjutkan perulangan sampai angka mencapai 20
?>
</body>
</html>