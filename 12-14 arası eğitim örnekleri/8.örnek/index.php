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
    $soyisim="çakır";
    define("ESYA","MASA");
    define("ARAC","VAPUR");
    const renk="mavi";
    $degerler=array($isim,$soyisim,ESYA,ARAC,"Renk"=>renk,"deneme"); //bu şekilde karışık bir dizi oluşturulabilir
    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
    ?>

</body>
</html>
