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
       $GLOBALS["isim"]= "Melike";
        function Deneme(){
            echo $GLOBALS["isim"]; //eğer globals global alanda tanımlıysa  $isim olarak çağırılamıyor buradaki gibi yazılması gerekiyor veya global alanda $isim olarak tanımlanıp localde yine $GLOBALS["isim"] olarak kullanılabiliyor
        }
        Deneme();
    ?>
</body>
</html>