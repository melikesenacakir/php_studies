<?php
session_start();
?>
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
  $_SESSION["oturum"]="melike sena"; // bunun için sayfanın en başında sessionun başlatılması lazım
  echo "Session: ".$_SESSION["oturum"];
?>

</body>
</html>