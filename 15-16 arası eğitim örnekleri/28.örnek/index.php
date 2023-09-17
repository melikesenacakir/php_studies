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
    $deger="melike";
    $sonuc= ($deger=="sena") ? "dogru" : "yanlis"; //buna ternay operatörü denir
    echo $sonuc."<br>";
    $d1="merhaba sena";
    $d2="merhaba melike";
    echo ($deger=="sena") ? $d1 : $d2;
    ?>
</body>
</html>