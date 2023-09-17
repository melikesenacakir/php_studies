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
     ksort()  : Dizinin anahtar değerlerini case sensitive olacak şekilde sıralar
     krsort() : Dizinin anahtar değerlerini case sensitive olacak şekilde tersten sıralar
     */
    $dizi=array("kedi"=>0,"kuş"=>1,"hamster"=>2,"Kedi"=>3,"keDi"=>4,"Köpek"=>5,"Hamster"=>6);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    ksort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    krsort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    ?>
</body>
</html>