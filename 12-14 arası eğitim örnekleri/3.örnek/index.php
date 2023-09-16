<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTK-PHP</title>
</head>
<body>
    <?php
    /*
     __LINE__      : Hangi satırda olduğumuzu öğrenmek için kullanabiliriz
     __DIR__       : Çalışan php dosyasının dizin bilgisini döndürür
     __FILE__      : Çalışan php dosyasının dizin bilgisini dosya adıyla beraber döndürür
     __FUNCTION__  : İçinde bulunduğu fonksiyonun adını döndürür
     __CLASS__     : İçinde bulunduğu classın adını döndürür
     __METHOD__    : Class içindeki fonksiyonun adını döndürür
     __TRAIT__     : Class içinde kullanılacak olan özelliğin yani kalıtımın adını bilgisini döndürür
     __NAMESPACE__ : Classların isim uzayı bilgisini döndürür
    Bunlar Magic constants yani ön tanımlı sabitlerdir
     */
    $satir=__LINE__;
    echo "kodun bulunduğu satır numarası => ".$satir;
    echo "<br>";
    $dizin=__DIR__;
    echo "php dosyasının bulunduğu dizin => ".$dizin;
    echo "<br>";
    $dosya=__FILE__;
    echo "php dosyasının bulunduğu tam dosya yolu =>".$dosya;
    echo "<br>";
    function deneme(){
        $fonksiyon=__FUNCTION__;
        echo " fonksiyonun adı => ".$fonksiyon;
    }
    deneme();
    echo "<br>";

    class sinif{
       function fonk(){
            echo  "Sınıf adı => ".__CLASS__;
       }
        function fonk2(){
            echo "Sınıf içindeki fonksiyonun adı => ".__METHOD__;
       }
    }
    $islem=new sinif;
    $islem->fonk();
    echo "<br>";
    $islem->fonk2();
    echo "<br>";

    ?>



</body>
</html>