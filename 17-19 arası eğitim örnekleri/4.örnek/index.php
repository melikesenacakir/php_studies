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
     func_num_args() : Fonksiyona gönderilen parametre sayısını bulmak için kullanılır
     func_get_args() : Fonksiyona gönderilen parametre degerlerini alarak yeni dizi oluşturur
     func_get_arg()  : Fonksiyona gönderilen parametre degerlerini bir dizi olarak kabul ederek belirtilecek olan anahtara ait değeri döndürmek için kullanılır
     */
     function bilgi(){
         $parametresayisi=func_num_args();
         echo "fonksiyona gelen parametre sayisi => ".$parametresayisi;
         $deger=func_get_args();
         echo "<pre>";
         print_r($deger);
         echo "</pre>";
         $meslek=func_get_arg(1);
         echo "meslek => ".$meslek;
         echo "<br>";

     }
     bilgi("karabük","bilgisayar mühendisliği","info@phpegitimi.com");

     $islem="deneme"; //eğer anonim olmayan bir fonksiyonu parametre üzerinden çağırmak istersek kullanırız

     function deneme(){
         echo "hello world";
     }
     $islem();

    ?>
</body>
</html>