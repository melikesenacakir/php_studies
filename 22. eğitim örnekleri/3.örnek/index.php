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
<form action="sonuc.php" method="post" enctype="multipart/form-data">
    Yüklenecek dosyaları seçiniz: <input type="file" name="dosyalar[]" multiple><br> <!-//çoklu dosya yüklemesi yapılacağı zaman buradaki name dizi olmalı ve multiple yazarız->
    <button>Yükle</button>

</form>


</body>
</html>