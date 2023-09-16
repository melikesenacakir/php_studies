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
    //$dizi=[] kullanımından kaçınmak daha iyi olucaktır.Array() kullanmak daha iyi
    $isimler=array("melike","sena");
    $renkler=array("renk1"=>"mavi","renk2"=>"siyah");
    $sonuc=$renkler+$isimler;//iki dizi bu şekilde birleştirilir
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    ?>

</body>
</html>
