<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTK-PHP</title>
</head>
<body>
    <?php
    /*
    phpinfo()          : Phpnin o anki durumu hakkındaki bilgilerin ekran çıktılarını sağlamak için kullanılır
    Değerler           : INFO_ALL | INFO_LICENSE | INFO_GENERAL | INFO_CONFIGURATION | INFO_MODULES | INFO_ENVIROMENT | INFO VARIABLES
    INFO_ALL           : TÜM BİLGİLER(ÖN TANIMLI DEĞERDİR)
    INFO_LICENSE       : LİSANS BİLGİLERİ
    INFO_CREDITS       : KATKIDA BULUNANLARIN BİLGİLERİ
    INFO_CONFIGURATION : KONFİGRASYON BİLGİLERİ
    INFO_GENERAL       : GENEL BİLGİLER
    INFO_MODULES       : MODÜL BİLGİLERİ
    INFO_ENVIRONMENT   : ORTAM BİLGİLERİ
    INFO_VARIABLES     : $_SERVER SÜPER GLOBALİ / ÖNTANIMLI DEĞİŞKEN BİLGİLERİ
    */
    phpinfo(INFO_CONFIGURATION);
    phpinfo();
    ?>

</body>
</html>