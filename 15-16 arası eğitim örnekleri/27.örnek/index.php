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
     array_multisort() : Bir vea birden fazla dizinin elemanlarını gelişmiş olarak çok yönlü sıralamak için kullanılır
     SORT_ASC     : Küçükten büyüğe
     SORT_DESC    : Büyükten küçüğe
     SORT_REGULAR : Standart sıralama
     SORT_NUMERIC : Rakamsal sıralama
     SORT_STRING  : String sıralama
     SORT_NATURAL : Doğal string sıralama
     */
    $dizi=array("kedi","kuş","hamster","Kedi","fare","penguen","balık","Köpek","Hamster");
    $dizi2=array(23,56.8,99,76,454,23);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    array_multisort($dizi,SORT_STRING);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    array_multisort($dizi2,SORT_ASC);
    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";


    ?>
</body>
</html>