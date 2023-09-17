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
    next()  : Dizinin göstericisi konumundaki elemanı bir ileri almak için kullanılır
    prev()  : Bir geri almak için kullanılır
    reset() : eski konumuna döndürmek için kullanılır
     */
    $renkler = array("ilk renk"=>"sarı","yeşil","lila",array("turuncu","lacivert","mor"));
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";

    $varsayilan = current($renkler);
    echo "varsayılan gösterici elemanı => ".$varsayilan;
    echo "<br>";

    $varsayilananahtar=key($renkler);
    echo "varsayılan gösterici anahtarı => ".$varsayilananahtar;
    echo  "<br><br>";

    next($renkler);
    echo "varsayılan gösterici elemanı => ".current($renkler);
    echo "<br>";

    $varsayilananahtar=key($renkler);
    echo "yeni gösterici anahtarı => ".$varsayilananahtar;
    echo "<br><br>";

    next($renkler);
    echo "varsayılan gösterici elemanı => ".current($renkler);
    echo "<br>";

    $varsayilananahtar=key($renkler);
    echo "yeni gösterici anahtarı => ".$varsayilananahtar;
    echo "<br><br>";

    prev($renkler);
    echo "varsayılan gösterici elemanı => ".current($renkler);
    echo "<br>";

    $varsayilananahtar=key($renkler);
    echo "yeni gösterici anahtarı => ".$varsayilananahtar;
    echo "<br><br>";

    reset($renkler);
    echo "varsayılan gösterici elemanı => ".current($renkler);
    echo "<br>";

    $varsayilananahtar=key($renkler);
    echo "yeni gösterici anahtarı => ".$varsayilananahtar;
    echo  "<br><br>";
    ?>
</body>
</html>