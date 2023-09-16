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
    //define("deger1","php"); burası yerine const da kullanılabilir
    const deger1="php";
    define("deger2","egitimi");
    $degisken="örnekleri";
    define("deger",deger1." ".deger2." ".$degisken); // bu şekilde 2 sabit ve 1 değişken birleştirilip 1 sabit oluşturulabilir
    echo deger;
    ?>

</body>
</html>