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
     array_column() : Dizi içerisinden belirli bir anahara sahip elemanları çeken method
     */
    $dizi=array(array("Kurulusyili"=>1907,"Takimadi"=>"Fenerbahçe"),array("Kurulusyili"=>1905,"Takimadi"=>"Galatasaray"),array("Kurulusyili"=>1903,"Takimadi"=>"Beşiktaş"));
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $yenidizi=array_column($dizi,"Takimadi","Kurulusyili");//yazılan 3.parametre anahtar olacak değerdir
    echo "<pre>";
    print_r($yenidizi);
    echo "</pre>";
    ?>
</body>
</html>