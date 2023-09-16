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
try {
    //setcookie("Melike","btk php egitimi");  bu şekilde websiteye cookie ekleyebiliriz. Ekledikten sonra ise aşağıdaki gibi ekrana basarız
    $cerez = $_COOKIE["Melike"];
    echo $cerez;
}catch (Exception $e){
    echo $e;
}
?>

</body>
</html>