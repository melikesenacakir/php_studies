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
        $adsyoad=$_GET["adsoyad"];
        $email=$_GET["email"];
        $telno=$_GET["telno"];

        $gelentumdegerler=$_GET; //bu şekilde sonuçları dizi olarak da alabiliriz. Dosyaları bu şekilde alamayız
    foreach ($gelentumdegerler as $key=>$value) {
         echo $key.": ".$value;
         echo "<br>";
        }
    ?>
</body>
</html>