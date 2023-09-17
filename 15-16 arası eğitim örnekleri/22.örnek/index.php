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
     CASE_LOWER :Tümünü küçük harf yapar
     CASE_UPPER :Tümünü büyük harf yapar
     */
    $dizi=array("kedi"=>0,"kUş"=>1,"haMSteR"=>2,"Kedi"=>3,"keDi"=>4,"köPeK"=>5,"hamSter"=>6);

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $sonuc=array_change_key_case($dizi,CASE_LOWER); //dizi içindeki anhtarların büyük harf küçük harf dönüştürme işlemleri için kullanılır. Tekrarlanma durumunda tekrarlı olanları siler değer olarak da sonuncununkini alır
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    ?>
</body>
</html>