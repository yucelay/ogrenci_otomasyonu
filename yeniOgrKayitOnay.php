<?php 
include "baglanti.php";

$ad=$_POST['adi'];
$soyad=$_POST['soyadi'];
$ogrNo=$_POST['ogrNo'];
$sinif=$_POST['sinifi'];
$sifre=$_POST['sifre'];
$fakulte=$_POST['fakulte'];
$bolum=$_POST['bolum'];
$devamsizlik=$_POST['devamsizlik'];
$danisman=$_POST['danisman'];

if($ad=="" || $soyad=="" || $ogrNo=="" || $sifre==""){
	echo '<script type="text/javascript">alert("Lutfen tum alanlari doldurunuz.");</script>';
	header( "refresh:0;url=idari.php" );
	
}
else{
$ekle=mysql_query("INSERT INTO ogrenci(adi,soyadi,ogrNo,sinif,sifre,fakulte,bolum,devamsizlik,danisman) VALUES('".$ad."','".$soyad."','".$ogrNo."','".$sinif."','".$sifre."','".$fakulte."','".$bolum."','".$devamsizlik."','".$danisman."')");
	if($ekle)
{
echo '<script type="text/javascript">alert("Başarı ile Kaydedildi");</script>';
}
else{
	echo '<script type="text/javascript">alert("Kayıt işlemi başarısız !!");</script>';
}
header( "refresh:0;url=idari.php" );

}

?>