<?php
session_start();
//session_destroy ile sessionları silebiliriz
?>
<?php
$_SESSION["isim"]="melike";
echo "<a href='oku.php'>";
echo "oku";
echo "</a>";