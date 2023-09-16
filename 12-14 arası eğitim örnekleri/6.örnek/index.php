<?php
     $dizi=array("ilk deger"=>"kedi","köpek","kuş","aslan","panda"); // $dizi=[] şeklinde de kullanılabilir
     print_r($dizi); //diziler echo ile ekrana basılmaz
     echo "<br>";
     //print_r("İlk eleman"." => ".$dizi[0]);
     print_r("İlk eleman"." => ".$dizi["ilk deger"]); // bu şekilde kendimizin tanımladığı anahtara göre de değer çağırabiliriz
     //sabit diziler oluşturmak istersek define veya const kullanırız
     echo "<br>";
     define("dizi2",array("sabit-kedi","köpek","kuş","aslan","panda"));
     print_r(dizi2[0]);
     echo "<br>";

     ?>
