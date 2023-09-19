<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTK-PHP</title>
</head>
<body>
<?php
    $adsoyad=$_POST["adsoyad"];
    $cinsiyet=$_POST["cinsiyet"];
    $yas=$_POST["yas"];
    $email=$_POST["email"];
    $hobi=$_POST["hobi"];

    echo "ADSOYAD: ".$adsoyad;
    echo "<br>";
    echo "cinsiyet: ".$cinsiyet;
    echo "<br>";
    echo "yas: ".$yas;
    echo "<br>";
    echo "email: ".$email;
    echo "<br>";
    echo "Hobiler: ";
foreach ($hobi as $i) {
    echo $i.", ";
    }

?>

</body>
</html>