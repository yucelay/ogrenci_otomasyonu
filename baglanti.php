<?php

$vt_host       = "localhost";
$vt_kullanici  = "root";
$vt_sifre      = "";
$vt_adi        = "ogrenci_otomasyonu";
$dbconnect = @mysql_connect($vt_host,$vt_kullanici,$vt_sifre) or die("Veritabani baglantisi saglanamadi!");
mysql_select_db($vt_adi,$dbconnect) or die("Veritabani bulunamadi!");

mysql_query('SET NAMES UTF8'); 
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'"); 
?>