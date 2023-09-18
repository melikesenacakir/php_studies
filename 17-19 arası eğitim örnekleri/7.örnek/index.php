<?php

/*
 settype() : Bu fonksiyon ile herhangi bir değişkenin veri türünü değiştirebiliyoruz

 */
$deger="8";
$verituru=gettype($deger);
echo "normalde veri türü => ".$verituru;
echo "<br>";
settype($deger,"integer");
$yeniverituru=gettype($deger);
echo "yeni veri türü => ".$yeniverituru;
echo "<br>";

$deger1=(object)"3";
echo "degerimizin türü => ".gettype($deger1);
echo "<br>";
echo "degerimiz => ".$deger1->scalar;