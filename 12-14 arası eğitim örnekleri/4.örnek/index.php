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
 trait ozellik1{
     function deneme1(){
         echo "Kalıtım adı => ".__TRAIT__;
     }

 }
 trait ozellik2{
   function deneme2(){
       echo "Kalıtım adı => ".__TRAIT__;
   }
 }
 class ozellikler{
     use ozellik1;
 }
 $islem=new ozellikler;
 $islem->deneme1();
?>

</body>
</html>