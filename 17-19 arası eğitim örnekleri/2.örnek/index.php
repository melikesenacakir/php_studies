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
        $renkler=array("mavi","kırmızı","sarı",array("yesil","pembe","gri"),"turuncu","siyah");
        foreach ($renkler as $deger){
            if(is_array($deger)){
                foreach ($deger as $yenideger){
                    echo " İç dizideki deger => ".$yenideger;
                    echo "<br>";
                }
            }else{
                echo " deger => ".$deger;
                echo "<br>";
            }
        }
    ?>
</body>
</html>