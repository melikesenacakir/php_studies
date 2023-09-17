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
     sort()   : Dizinin elemanlarını case sensitive olacak şekilde sıralar
     rsort()  : Dizinin elemanlarını case sensitive olacak şekilde tersten sıralar
     asort()  : Dizinin elemanlarını case sensitive olacak şekilde ve anahtarlarını bozmayacak şekilde sıralar
     arsort() : Dizinin elemanlarını case sensitive olacak şekilde ve anahtarlarını bozmayacak şekilde tersten sıralar
     */
    $dizi=array("kedi","kuş","hamster","Kedi","keDi","Köpek","Hamster");
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    sort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    rsort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    asort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    arsort($dizi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    ?>
</body>
</html>