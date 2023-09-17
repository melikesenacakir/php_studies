<?php
    $isim= !empty($_GET["isim"]) ? $_GET["isim"] : "HATA" ; //?? php 7 de kullanılamıyor
    $soyisim= !empty($_GET["soyisim"]) ? $_GET["soyisim"] : "HATA";
    echo $isim."<br>";
    echo $soyisim;
    ?>
