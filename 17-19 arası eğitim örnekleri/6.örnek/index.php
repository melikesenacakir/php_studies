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
      //yield: fonksiyonlarda değer döndürmk için kullanılır. Returnden farkı fonksiyon durmuyor sadece değeri döndürüyor sonra devam ediyor
    function islem($deger)
    {
        while ($deger > 500) {
            yield $deger;
            $deger--;
        }
    }
    $sonuc=islem(550);
    foreach ($sonuc as $s){
        echo $s."<br>";
    }

    $bellektuketimi=memory_get_usage();
    echo "kullanılan bellek alanı => ".$bellektuketimi."byte";
    ?>
</body>
</html>