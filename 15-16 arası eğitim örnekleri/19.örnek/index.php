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
    $dizi=array("kedi","kuş","hamster");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $sonuc=array_pad($dizi,10,"deneme"); //diziyi 10 elemanlı hale getirir ve fazladan elemanları deneme olarak yazar(sondan doldurma)
    $sonuc2=array_pad($dizi,-10,"deneme"); //bu da baştan doldurma
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    echo "<pre>";
    print_r($sonuc2);
    echo "</pre>";
    ?>
</body>
</html>