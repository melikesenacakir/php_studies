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
    array_shift() : Dizinin ilk elemanını silmek için kullanılır ve silinen elemanın değerini döndürür
    array_pop()   : Dizinin son elemanını silmek için kullanılır ve silinen elemanın değerini döndürür
     */
    $renkler = array("sarı","yeşil","lila",array("turuncu","lacivert","mor"));
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    $eleman = array_shift($renkler);
    echo "diziden silinen elaman => ".$eleman;
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    $eleman = array_shift($renkler[2]);
    echo "diziden silinen elaman => ".$eleman;
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    $eleman = array_pop($renkler[2]);
    echo "diziden silinen elaman => ".$eleman;
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    ?>
</body>
</html>