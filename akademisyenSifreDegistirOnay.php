<?php

include "baglanti.php";
session_start();
$gelenSifre=$_POST['sifre'];
$sifreYeni=$_POST['sifreYeni'];
$sifreYeniTekrar=$_POST['sifreYeniTekrar'];
$id=$_SESSION['id'];
	$sifreSorgu=mysql_query("SELECT sifre FROM akademisyen WHERE id='".$id."'");
	$sifre=mysql_result($sifreSorgu,0);
	
	if(!($gelenSifre=="" || $sifreYeni=="" || $sifreYeniTekrar=="")){
		 if($sifreYeni!=$sifreYeniTekrar){
				 echo "<script type='text/javascript'>alert('Şifreniz uyuşmuyor!')</script>";
				 header( "refresh:0; url=akademisyen.php?ycl=65" );	
		}else if($gelenSifre!=$sifre){
				 echo "<script type='text/javascript'>alert('Kayıt Bulunamadi!')</script>";
				 header( "refresh:0; url=akademisyen.php?ycl=65" );
		}else {
				$sifreSorgu=mysql_query("UPDATE akademisyen SET sifre='".$sifreYeni."' WHERE id='".$id."'");	
				 echo "<script type='text/javascript'>alert('Şifreniz Başarı ile Güncellendi!')</script>";
				 header( "refresh:0; url=akademisyen.php?ycl=65" );
		}
		
	}
	
	
	else {
		 echo "<script type='text/javascript'>alert('Lütfen Tüm alanları doldurunuz!')</script>";
		 header( "refresh:0; url=akademisyen.php?ycl=65" );
	}
	
	

		

?>