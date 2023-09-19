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
    $gelenler=$_FILES["dosyalar"];
    echo "<pre>";
    print_r($gelenler);
    echo "</pre>";
    foreach ($gelenler["tmp_name"] as $key=>$value) {
            $dosyaadi=$gelenler["name"][$key];
            $gecicidizin=$gelenler["tmp_name"][$key];
            $yenidizin="dosyalar/".$dosyaadi;
            echo $dosyaadi."<br>";
            move_uploaded_file($gecicidizin,$yenidizin);
    }
    ?>

</body>
</html>