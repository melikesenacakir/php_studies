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
    /*
     array_intersect()       : 2 ya da daha fazla dizide kesişen elemanlardan yeni dizi oluşturur. Anahtar değerleri dizide belirtilirse ilk dizidekine göre alınır
     array_intersect_key()   : 2 ya da daha fazla dizideki anahtarlar kesişiyorsa bunlardan yeni dizi oluşturur. Elemanlar ilk dizininkine göre alınır
     array_intersect_assoc() : 2 ya da daha fazla dizideki elemanlar ve anahtar değerleri kesişiyorsa yeni dizi oluşturur
     eğer intersect yerine diff yazsaydı dizideki farklı olan değerleri alırdı
     */

    $dizi1=array("harf"=>"a","s","y","d","f","anahtar"=>"x");
    $dizi2=array("a","y","s","harf"=>"b","anahtar"=>"x","c");
    $sonuc=array_intersect($dizi1,$dizi2);
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $sonuc2=array_intersect_key($dizi1,$dizi2);
    echo "<pre>";
    print_r($sonuc2);
    echo "</pre>";

    $sonuc3=array_intersect_assoc($dizi1,$dizi2);
    echo "<pre>";
    print_r($sonuc3);
    echo "</pre>";
    $sonuc4=array_diff_assoc($dizi1,$dizi2);
    echo "<pre>";
    print_r($sonuc4);
    echo "</pre>";

    ?>
</body>
</html>