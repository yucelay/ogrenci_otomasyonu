<?php 
include "baglanti.php";

$dersKodu=$_POST['dersKodu'];
$dersAdi=$_POST['dersAdi'];
$akts=$_POST['akts'];
$kredi=$_POST['kredi'];
$bolum=$_POST['bolum'];
$akademisyen=$_POST['akademisyen'];


if($dersKodu=="" || $dersAdi=="" || $akts=="" || $kredi=="" || $bolum=="" || $akademisyen==""){
	echo '<script type="text/javascript">alert("Lutfen tum alanlari doldurunuz.");</script>';
	header( "refresh:0;url=idari.php" );
	
}
else{
$ekle=mysql_query("INSERT INTO dersler(dersKodu,dersAdi,akademisyen,bolum,kredi,akts) VALUES('".$dersKodu."','".$dersAdi."','".$akademisyen."','".$bolum."','".$kredi."','".$akts."')");
	if($ekle)
{
echo '<script type="text/javascript">alert("Ders Başarı ile Eklendi ");</script>';
}
else{
	echo '<script type="text/javascript">alert("Ders Ekleme Başarısız !!");</script>';
}
header( "refresh:0;url=idari.php" );

}

?>