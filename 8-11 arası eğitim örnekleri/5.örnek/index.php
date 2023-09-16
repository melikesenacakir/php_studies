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
       function Deneme(){
           $GLOBALS["isim"]= "Melike";
       }
       Deneme();
       echo $isim; //bu şekilde localde globals tanımlanınca içerisindeki değer değişken olarak global alanda kullanılabiliyor
    ?>

</body>
</html>