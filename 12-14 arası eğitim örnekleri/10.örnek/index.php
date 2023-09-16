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
     $degisken=array("mavi","sarı",array("kedi","köpek"),array("masa","kalem")); //bunlara çok boyutlu diziler denir
     echo "<pre>";
     print_r($degisken);
     echo "</pre>";
     print_r($degisken[2][0]); // bu şekilde içiçe dizilerdeki elemanlara ulaşırız
    ?>

</body>
</html>