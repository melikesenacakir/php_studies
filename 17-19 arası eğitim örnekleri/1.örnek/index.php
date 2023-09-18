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
     $renkler=array("birinci"=>"mavi","kırmızı","sarı","turuncu","sonuncu"=>"siyah");
     foreach ($renkler as $anahtar=>$deger){
         echo "anahtar => ".$anahtar." deger => ".$deger;
         echo "<br>";
     }
    ?>
</body>
</html>