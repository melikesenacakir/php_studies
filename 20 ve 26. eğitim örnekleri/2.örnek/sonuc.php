
<?php
$kullaniciadi=$_POST["kullaniciadi"];
$saat=time()+10;
setcookie("kullanıcı_adı",$kullaniciadi,$saat);
echo "<a href='yaz.php'>";
echo "Mesajı Göster";
echo "</a>";
?>


