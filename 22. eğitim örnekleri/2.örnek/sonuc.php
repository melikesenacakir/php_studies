<?php

$gelendosya=$_FILES["dosya"];
$dosyaadi=$_FILES["dosya"]["name"];
$dosyaturu=$_FILES["dosya"]["type"];
$dosyatemp=$_FILES["dosya"]["tmp_name"];
$hatadurumu=$_FILES["dosya"]["error"];
$boyutu=$_FILES["dosya"]["size"];
$yol="dosyalar/";
move_uploaded_file($dosyatemp,$yol.$dosyaadi);
echo "dosya yuklendi dosyalar dizini altındadır";