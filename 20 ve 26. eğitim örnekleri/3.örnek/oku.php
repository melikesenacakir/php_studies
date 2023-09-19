<?php
session_start();
?>
<?php
echo $_SESSION["isim"]."<br>";
echo "<a href='sil.php'>";
echo "session sil";
echo "</a>";