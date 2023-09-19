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
    <!-move_uploaded_file() fonksiyonu ile dosyayı belitilen dizine yükleyebiliyoruz->

    <form action="sonuc.php" method="post" enctype="multipart/form-data">
        Yüklenecek dosyayı seçiniz: <input type="file" name="dosya"><br>
        <button>Yükle</button>

    </form>


</body>
</html>