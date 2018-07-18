<?php
include "baglanti.php";
session_start();
//$ogrKullaniciAdi=$_POST['ogrKullaniciAdi'];
//$ogrSifre=$_POST['ogrSifre'];
$ogrSifre=$_POST['ogrSifre'];
$ogrKullaniciAdi=$_POST['ogrKullaniciAdi'];
$veriCek=mysql_query("SELECT * FROM ogrenci WHERE ogrNo='".$ogrKullaniciAdi."' AND sifre='".$ogrSifre."'");

	if(mysql_num_rows($veriCek)){
		$bilgi = mysql_fetch_assoc($veriCek);
		$_SESSION["giris"] = "yucel";
		$_SESSION['ogrNo']=$bilgi['ogrNo'];
		$_SESSION['ogrAdi']=$bilgi['adi'];
		$_SESSION['ogrSoyadi']=$bilgi['sayadi'];
		$_SESSION['ogrSinif']=$bilgi['sinif'];
		$_SESSION['ogrFakulte']=$bilgi['fakulte'];
		$_SESSION['ogrBolum']=$bilgi['bolum'];
		
		
  
		header("Location:ogrenci.php");
		echo $ogrKullaniciAdi;
	}else{
		
	echo "kayit bulunamadi";	
	}

ob_end_flush();
?>