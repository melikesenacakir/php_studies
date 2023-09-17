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
      array_chunk() : Dizinin belirli bölümlerini alıp yeni çok boyutlu dizi oluşturmak için kullanılır
      */
    $dizi=array("ilkeleman"=>"türkçe","almanca","fransızca","italyanca","rusça","ispanyolca");
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $yenidizi=array_chunk($dizi,2,true);//her 2 elamanda bir boyut oluştur demektir. Eğer 3.parametre olarak true yazarsak bu key değerlerini dekoru demektir
    echo "<pre>";
    print_r($yenidizi);
    echo "</pre>";

    ?>
</body>
</html>