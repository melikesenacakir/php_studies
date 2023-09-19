<?php
require_once("ayar.php"); //bu şekilde session_start demekten kurtulmuş oluruz
?>
<?php

$gelenkadi=$_POST["kullaniciadi"];
$gelensifre=$_POST["sifre"];

if($gelenkadi!="" && $gelensifre!=""){
    $_SESSION["adi"]=$gelenkadi;
    $_SESSION["sifresi"]=$gelensifre;
    echo "merhaba ".$gelenkadi." siteye giriş yaptınız";
    echo "<br>"."<a href='cikis.php'>";
    echo "çıkış yap";
    echo "</a>";
}else{
 echo "formda herhangi bir alanı boş bırakmayın";
    echo "<br>"."<a href='index.php'>";
    echo "forma dön";
    echo "</a>";
}