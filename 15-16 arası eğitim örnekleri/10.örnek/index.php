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
    list(): Dizideki elemanalrı değişkene atamak için kullanılır
     */
    $dizi=array("kedi","köpek","fare","salyangoz");
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    list($bir,$iki,$uc,$dort)=$dizi; //eğer elemanlardan değişkene atamak istemediğimiz olursa onu boş geçebiliriz list($bir, ,$iki) gibi
    echo "ilk eleman => ".$bir;//çok boyutlu elemanı değişkene atayacağımız zaman list içinde list kullanırız

    ?>
</body>
</html>