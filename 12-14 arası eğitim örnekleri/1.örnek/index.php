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
        //define("isim","melike sena çakır"); echo isim; bu şekilde yazdığımızda isim adında bir değişken tanımlamış oluruz ve başına $ koymadan bu sabiti kullanabiliriz.
        //sabit tanımlarken tamamen büyük harf kullanımı daha iyidir
        //define("isim","melike sena çakır",true);3. parametre büyük harf küçük harf duyarlılığını kaldırır ancak artık desteklenmiyor
        function deneme(){
            //eğer const ile bu alanda sabit tanımlanırsa buna global alanda erişilemez define kullanılması lazım
            define("isim","melike");
        }
        deneme();
        echo isim;
    ?>

</body>
</html>