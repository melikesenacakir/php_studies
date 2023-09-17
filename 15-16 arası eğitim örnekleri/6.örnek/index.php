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
    end(): Dizinin göstericisi konumundaki son elemanı bulmak için kullanılır
     */
    $renkler = array("ilk renk"=>"sarı","yeşil","lila",array("turuncu","lacivert","mor"));
    $dizi = array(array("ilk hayvan"=>"kedi","köpek"),"kuş");
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    $eleman=end($renkler);
    echo "dizinin son gösterici elemanı => ";
    echo "<pre>";
    print_r($eleman);
    echo "</pre>";
    echo "<br>";
    $eleman=end($dizi[0]);
    echo "dizinin son gösterici elemanı => ".$eleman;
    ?>
</body>
</html>