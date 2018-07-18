<?php

include "baglanti.php";
$gelenSifre=$_POST['sifre'];
$sifreYeni=$_POST['sifreYeni'];
$sifreYeniTekrar=$_POST['sifreYeniTekrar'];


	session_start();	
	
	$ogrNo2=$_SESSION['ogrNo'];
	
//	echo $ogrNo2;
	$sifreSorgu=mysql_query("SELECT sifre FROM ogrenci WHERE ogrNo='".$ogrNo2."'");
	$sifre=mysql_result($sifreSorgu,0);
	
	if(!($gelenSifre=="" || $sifreYeni=="" || $sifreYeniTekrar=="")){
		 if($sifreYeni!=$sifreYeniTekrar){
				 echo "<script type='text/javascript'>alert('Şifreniz uyuşmuyor!')</script>";
				 header( "refresh:0; url=ogrenci.php?ycl=37" );	
		}else if($gelenSifre!=$sifre){
				 echo "<script type='text/javascript'>alert('Kayıt Bulunamadi!')</script>";
				 header( "refresh:0; url=ogrenci.php?ycl=37" );
		}else {
				$sifreSorgu=mysql_query("UPDATE ogrenci SET sifre='".$sifreYeni."' WHERE ogrNo='".$ogrNo2."'");	
				 echo "<script type='text/javascript'>alert('Şifreniz Başarı ile Güncellendi!')</script>";
				 header( "refresh:0; url=ogrenci.php?ycl=37" );
		}
		
	}
	
	
	else {
		 echo "<script type='text/javascript'>alert('Lütfen Tüm alanları doldurunuz!')</script>";
		 header( "refresh:0; url=ogrenci.php?ycl=37" );
	}
	
	

		

?>