<?php
include "baglanti.php";
session_start();
$vizeNotu3=$_GET['vize'];
$finalNotu3=$_GET['finalNotu'];
$devamsizlik3=$_GET['devamsizlik'];


$secilenOgrNo3=$_SESSION['secilenOgrNo'];
$secilenDersKodu3=$_SESSION['secilenDers'];

$notGuncelle=mysql_query("UPDATE alinan_dersler SET vize='".$vizeNotu3."',finalNotu='".$finalNotu3."' ,devamsizlik='".$devamsizlik3."' WHERE ogrNo='".$secilenOgrNo3."' AND dersKodu='".$secilenDersKodu3."'");
echo '<script type="text/javascript">alert("Başarı ile Güncellendi !!");</script>';
header( "refresh:0; url=akademisyen.php?ycl=65" );




?>