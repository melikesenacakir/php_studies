<?php
 $dosya= $_FILES["dosya"];
 echo "<pre>";
 print_r($dosya); //dosya içindekileri print_r ile yazdırabiliyoruz
 //dosyanın geçici olarak nerede tutulduğu, dosyanın adı, dosyanın türü gibi özellikler ekrana basılır
echo "gelen dosyanın adı: ".$_FILES["dosya"]["name"]; // bu şekilde dosya adını alırız
echo "</pre>";
?>