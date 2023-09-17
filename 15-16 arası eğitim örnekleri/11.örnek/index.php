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
     array_combine() : Dizilerdeki elemanları birleştirmek için kullanılır ama yazılan ilk dizi elemanları anahtar değer ikinci dizi elemanları ise yeni elemanalr olarak yazılır
     array_slice()   : Dizinin belirli bölümlerini alarak yeni bir dizi oluşturmak için kullanılır
     */
     $dizi1=array(1,2,3,4);
     $dizi2=array("ilkbahar","sonbahar","yaz","kış");//bunlara anahtar değeri yazsak da combine onları görmezden gelir
     $yenidizi=array_combine($dizi1,$dizi2);
     echo "<pre>";
     print_r($yenidizi);
     echo "</pre>";
     $yenidizi2=array_slice($yenidizi,1,2,true); //hangi elemandan itibaren almaya başlayacağını yazarız sonrasında ise o elemandan sonra kaç adet eleman alınacağını belirtmek istersek de 3. parametre olarak yazarız
     echo "<pre>"; //eğer sondan elemanları almaya başlasın istersek de - ile offset değeri yazılır. Eğer anahtarların korunmasını istersek 4.parametre olarak da true ekleriz
     print_r($yenidizi2);
     echo "</pre>";
    ?>
</body>
</html>