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
        $degisken1="hello";
        $degisken2=&$degisken1;  //php pointer
        echo $degisken1;
        echo "<br>";
        echo $degisken2;
        echo "<br><br>";
        $degisken1="world";
        echo $degisken1;
        echo "<br>";
        echo $degisken2;

    ?>

</body>
</html>