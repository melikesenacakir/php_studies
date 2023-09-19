<?php
session_start();
?>
<?php
$_SESSION["kullanici"]=array("isim"=>"melike","tel-no"=>123456234);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>