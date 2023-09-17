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
     natsort()     : Dizinin elemanlarını case sensitive olacak şekilde ve anahtar değerlerini bozmadan sıralar
     natcasesort() : Dizinin elemanlarını case sensitive olmayacak şekilde ve anahtar değerlerini bozmadan sıralar
     */
    $dizi=array("kedi","kuş","hamster","Kedi","keDi","Köpek","Hamster");
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    natsort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    natcasesort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    ?>
</body>
</html>