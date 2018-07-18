<?php
include "baglanti.php";
session_start();
//$ogrKullaniciAdi=$_POST['ogrKullaniciAdi'];
//$ogrSifre=$_POST['ogrSifre'];
$kullaniciAdi=$_POST['kullaniciAdi'];
$sifre=$_POST['sifre'];
$veriCek=mysql_query("SELECT * FROM akademisyen WHERE k_adi='".$kullaniciAdi."' AND sifre='".$sifre."'");

	if(mysql_num_rows($veriCek)){
		$bilgi = mysql_fetch_assoc($veriCek);
		$_SESSION["giris"] = "yucel2";
		$_SESSION['ad']=$bilgi['ad'];
		$_SESSION['soyad']=$bilgi['soyad'];
		$_SESSION['bolum']=$bilgi['bolum'];
		$_SESSION['dersKodu']=$bilgi['ders'];
		$_SESSION['id']=$bilgi['id'];
  
		header("Location:akademisyen.php");
		echo $ogrKullaniciAdi;
	}else{
		
	echo "kayit bulunamadi";	
	}

ob_end_flush();
?>