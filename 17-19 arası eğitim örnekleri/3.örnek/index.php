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
    $isim="melike";
    function deneme(){
        global $isim; //bu şekilde global alanda tanımlı değişkeni localde kullanabiliyoruz
        echo $isim."<br>";
    }
    deneme();

    //eğer anonim fonksiyon oluşturmak istersek fonksiyonu bir değişkene atmamız gerekir
    $deger=function (){
        echo "hello world";
        echo "<br>";
    };
    $deger(); // anonim fonksiyonları bu şekilde çağırırız

    //dizi içerisinde fonksiyon tanımlamak istersek anonim fonksiyon olarak tanımlamalıyız
    $degisken=array("sari","mavi","kırmızı",function(){ echo "anonim degeri siyah";},"mor");
    print_r($degisken);
    echo "<br>";
    $degisken[3]();
    ?>
</body>
</html>