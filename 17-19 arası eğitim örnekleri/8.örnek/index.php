<?php
/*
 declare(strict_types=1) : Kodlama dosyası içerisindeki tüm kodlamaların kural yapısını belirler. Kodlama dosyasının en üstüne yazılır. Php yeni sürümü ile artık strict_types kullanılamıyor
 var_dump()              : Herhangi bir değişkene ait tüm yapıya ulaşmak için kullanılır
 serialize()             : Herhangi bir değeri saklanabilir veri türüne dönüştürür ve o değeri de geri döndürür
 unserialize()           : Yapılan dönüşümleri geri alır
 */
$deger="Melike Sena Çakır";
var_dump($deger);

$dizi=array("kedi","köpek","aslan","panter","ayı");
echo "<pre>";
print_r($dizi);
echo "</pre>";

$sonuc=serialize($dizi);
echo $sonuc."<br>";

$yenisonuc=unserialize($sonuc);
echo "<pre>";
print_r($yenisonuc);
echo "</pre>";