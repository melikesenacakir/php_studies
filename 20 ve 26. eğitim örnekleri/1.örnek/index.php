<?php
     //sessionlar cookielerdan daha güvenlidir
     //setcookie() fonksiyonunda 1.parametre çerez adı, 2.parametre çerez değeri, 3.parametre ise çerez süresidir. Çerez süresini belirtmezsek tarayıcı çalıştığı sürece var olur
     /*setcookie("isim","melike");
     setcookie("cerez","deneme123");*/
    $yasamsuresi=time()+15;//şuanki zamana 15dk ekleriz yani çerez 1 saat geçerli olur
    setcookie("cerez","deneme123",$yasamsuresi);
     echo "<pre>";
     print_r($_COOKIE);
     echo "</pre>";
     echo $_COOKIE["isim"]; //bu şekilde belirli bir cookie çağırabiliyoruz
    //cookie silmek istersek setcookie("isim","",0); şeklinde yazabiliriz
    setcookie("cerez","",0);//ya da sadece zaamanı time()-12 gibi tanımlayıp da silebiliriz
    setcookie("kullanici[ad]","melike");
    setcookie("kullanici[bolum]","bilgisayar müh");
    setcookie("kullanici[tel-no]",123456789);

    setcookie("sepet[ID]",1);
    setcookie("sepet[urun_sayisi]",3); //bu şekilde cookielerden dizi oluşturabiliyoruz
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";


