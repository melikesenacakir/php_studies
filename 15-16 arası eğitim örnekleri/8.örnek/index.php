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
    explode(): Bir metni parçalamak için kullanılır
     */
    $metin= "hello world";
    $parcalanmis=explode("o",$metin,2); // bu şekilde eleman sınırı da verilebilir. Eğer bu değer - olursa diziden silinecek eleman sayısını belirtmiş oluruz
    echo "Metnin ilk hali => ".$metin;
    echo "<br><br>";
    echo "Metnin yeni hali => ";
    echo "<pre>";
    print_r($parcalanmis);
    echo "</pre>";

    ?>
</body>
</html>