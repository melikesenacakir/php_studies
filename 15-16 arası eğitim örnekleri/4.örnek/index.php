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
    key() : Dizinin göstericisi konumundaki elemanın anahtarının değerini bulmak için kullanılır
     */
    $renkler = array("ilk renk"=>"sarı","yeşil","lila",array("turuncu","lacivert","mor"));
    $dizi = array(array("ilk hayvan"=>"kedi","köpek"),"kuş");
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    $anahtar= key($renkler);
    echo $anahtar."<br>";
    $anahtar=key($dizi[0]);
    echo $anahtar;

    ?>
</body>
</html>