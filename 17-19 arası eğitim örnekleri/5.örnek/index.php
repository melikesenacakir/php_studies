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
    /*($islem=function (){// eğer fonksiyonun başına ( ve sonuna ) yazarsak o zaman bu otomatik çalışan bir fonksiyon olur. Ancak php 7den itibaren desteklenmemekte
           echo "hello world";
       })();*/
    error_reporting(E_ALL);
    function deneme($deger){
       if($deger>0){
           echo $deger."<br>";
           deneme($deger-1);
       }
   }
   deneme(10);
    ?>
</body>
</html>