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
    $isimler=array("melike","sena","aslı","ayşen");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    array_splice($isimler,2,count($isimler),"seda");//bu şekilde dizinin ilk iki elemanını alıp sonra sonuna yeni eleman ekleyebiliriz
   // ilk parametre değiştirilecek dizi adı ikincisi alınacak elaman sayısı üçüncğsğ silinecek eleman sayısı ve sonuncu da eklenecek eleman sayısı
    echo "<pre>"; //birden fazla eleman ekleneceği zaman elemanalr bir diziye konulup öyle buraya yazılır. Direkt yazılması halinde hata verir
    print_r($isimler);
    echo "</pre>";

    $renkler=array("mavi","yeşil","sarı","kahverengi","bordo");
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";

    array_splice($renkler,0,-2,"mor"); //hiç eleman alma sondaki 2 elemana kadar sil sonra yeni elemanı başa ekle demektir
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    ?>
</body>
</html>