<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
<form method="post">  
    Masukkan bilangan yang akan di cek : <br> 
    <input type="number" name="x" /><br><br>    
    <input  type="submit" name="submit" value="Submit">  
    </form>
    <?php  
    if(isset($_POST['submit'])) //ketika submit akan menampilkan 
    {
        $x = $_POST['x']; //mengambil nilai x yang diinputkan dan disimpan di variabel $x
 
    if($x > 0){
        echo "$x adalah bilangan Positif";
    }
    elseif($x < 0){
        echo "$x adalah bilangan Negatif";
    }
    else {
        echo "$x adalah bilangan Nol";
    }
}
    ?>
</body>
</html>