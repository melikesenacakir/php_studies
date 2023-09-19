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
if(!$_GET){
?>
    <form action="index.php" method="get">
        Ad-soyad: <input type="text" name="adsoyad"><br><br>
        Tel No: <input type="number" name="telno"><br><br>
        Email: <input type="email" name="email"><br><br>
        Mesajınız:<br>
        <textarea name="mesaj"></textarea><br><br>
        <button>Gönder</button>
    </form>
<?php
}else{
     $adsyoad=$_GET["adsoyad"];
     $email=$_GET["email"];
     $telno=$_GET["telno"];
     $mesaj=$_GET["mesaj"];

     echo "adsoyad: ".$adsyoad;
     echo "<br>";
     echo "email: ".$email;
     echo "<br>";
     echo "telno: ".$telno;
     echo "<br>";
     echo "mesaj: ".$mesaj;
     echo "<br>";
     echo "<a href='index.php'>";
     echo "forma dön";
     echo "</a>";
}
?>
</body>
</html>