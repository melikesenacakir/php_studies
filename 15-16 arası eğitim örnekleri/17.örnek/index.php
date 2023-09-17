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
      $degerler=array_fill(7,5,"melike"); //key değeri 7den başlayan 5 elemanlı ve herbir elemanı melike olan dizi oluşturur
      $hayvanlar=array("kedi","fil","aslan","panter");
      $sonuc=array_fill_keys($hayvanlar,3); //dizideki elemanları key değeri olarak alır ve belirttiğimiz değeri o keylere eleman olarak atar
      echo "<pre>";
      print_r($degerler);
      echo "</pre>";

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    ?>
</body>
</html>