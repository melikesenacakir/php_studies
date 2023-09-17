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
  Dizideki elemanları saymak için hem count() hem de sizeof() kullanılabilir
  COUNT_RECURSIVE : Çok boyutlu dizilerde, tüm boyutlardaki elemanlar bu sayma işlemine dahil edilir
   */
    $dizi=array("kedi","köpek","hamster");
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    echo "Bu dizideki eleman sayısı => ".count($dizi);
    echo "<br>";
    echo "Bu dizideki eleman sayısı => ".sizeof($dizi);
    echo "<br>";
    $dizi2=array("kedi","köpek",array("mavi","kırmızı","yeşil"),"hamster");
    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";
    echo "Bu dizideki eleman sayısı => ".count($dizi2);
    echo "<br>";
    echo "Bu dizideki toplam eleman sayısı => ".count($dizi2,COUNT_RECURSIVE);
    
    ?>
</body>
</html>