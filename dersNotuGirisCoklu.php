<?php
	session_start();
	include "baglanti.php";
	$gelenId=$_GET['id'];
	
	$vizeNotu="vize".$gelenId;
	$gelenVize=$_GET[$vizeNotu];
	echo $gelenId,"<br>";
	echo $gelenVize,"<br>";
	echo $vizeNotu,"<br>";
	
	echo $_SESSION[$vize3];
	
	echo $_SESSION['vize4'];
	
?>