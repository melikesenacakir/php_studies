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
    $dizi=array("kedi","kuş","hamster","kedi","kedi","köpek","hamster");

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    $sonuc=array_count_values($dizi); //dizi içindeki elemanların kaçar defa tekrarlandığını bulmamıza yarar
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    ?>
</body>
</html>