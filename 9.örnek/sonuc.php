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
    echo "Name:  ".$_REQUEST["kullaniciadi"]; //isteğin türünü belirtmeden get de olsa post da olsa alsın istersek bunu kullanabiliriz
    echo "<br><br>";
    echo "Surname:  ".$_REQUEST["sifre"];
    ?>

</body>
</html>