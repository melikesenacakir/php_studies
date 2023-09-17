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
     array_filter() : Dizinin içindeki boş elemanları filre ederek yeni bir dizi oluşturur
     */
    $isimler=array("","melike","","sena","aslı","ayşen","");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    $sonuc=array_filter($isimler);
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    ?>
    </body>
</html>