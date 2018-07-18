<?php
include "baglanti.php";
session_start();
//$ogrKullaniciAdi=$_POST['ogrKullaniciAdi'];
//$ogrSifre=$_POST['ogrSifre'];
$kullaniciAdi=$_POST['kullaniciAdi'];
$sifre=$_POST['sifre'];
$veriCek=mysql_query("SELECT * FROM idari WHERE k_adi='".$kullaniciAdi."' AND sifre='".$sifre."'");

	if(mysql_num_rows($veriCek)){
		$bilgi = mysql_fetch_assoc($veriCek);
		$_SESSION["giris"] = "yucel3";
		$_SESSION['ad']=$bilgi['ad'];
		$_SESSION['soyad']=$bilgi['soyad'];
		
		
  
		header("Location:idari.php");
		echo $ogrKullaniciAdi;
	}else{
		
	echo "kayit bulunamadi";	
	}

ob_end_flush();
?>