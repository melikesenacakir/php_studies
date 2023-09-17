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
    array_unshift() : Dizinin en başına eleman veya elemanlar eklemek için kullanılır. Ekledikten sonra da toplam eleman sayısını döndürür
    array_push()    : Dizinin en sonuna eleman veya elemanlar eklemek için kullanılır. Ekledikten sonra da toplam eleman sayısını döndürür
     */
     $renkler = array(0=>"sarı","yeşil","lila",array("turuncu","lacivert"));
     echo "<pre>";
     print_r($renkler);
     echo "</pre>";
     $sayi=array_unshift($renkler,"turkuaz");
     echo "yeni eleman sayısı => ".$sayi;
     echo "<pre>";
     print_r($renkler);
     echo "</pre>";

     $sayi=array_push($renkler,"mor","mavi");
     echo "yeni eleman sayısı => ".$sayi;
     echo "<pre>";
     print_r($renkler);
     echo "</pre>";
     array_push($renkler[4],"siyah","gri");
     echo "<pre>";
     print_r($renkler);
     echo "</pre>";
     //push ve unshift methodları kullanılarak eleman eklendiğinde anahtar eklemesi de yapılamaz
    ?>
</body>
</html>