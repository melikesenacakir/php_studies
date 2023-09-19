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
    <form action="sonuc.php" method="post">
        Adınız Soyadınız: <input type="text" name="adsoyad"><br>
        Email: <input type="email" name="email"><br>
        Cinsiyetiniz: <input type="radio" name="cinsiyet" value="erkek">Erkek <input type="radio" name="cinsiyet" value="kadın"> Kadın<br>
        Yaşınız: <select name="yas">
            <option value=""></option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>

        </select><br>
        Hobileriniz:<br>
        <input type="checkbox" value="alışveriş" name="hobi[]">Alışveriş
        <input type="checkbox" value="kitap okumak" name="hobi[]">Kitap okumak
        <input type="checkbox" value="resim çizmek" name="hobi[]">Resim Çizmek
        <input type="checkbox" value="koşu" name="hobi[]">Koşu
        <input type="checkbox" value="yüzme" name="hobi[]">Yüzme
        <br><button>Gönder</button>

    </form>

</body>
</html>