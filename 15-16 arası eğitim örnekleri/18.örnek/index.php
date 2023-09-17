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
    $soyisim="cakir";
    $dogumtarihi="2001";
    $bilgiler=array("isim","soyisim","dogumtarihi");
    $sonuc=compact($bilgiler); //bunun ile aynı isimde değişken varsa dizi içindeki değer anahtar olarak atanız ve değişkenin değeri eleman olarak atanır
    echo "<pre>"; // elemanalrın dizinin içinde bulunması şart değil direkt compact("isim","soyisim","dogumtarihi") olarak da yazılabilir
    print_r($sonuc);
    echo "</pre>";

    ?>
</body>
</html>