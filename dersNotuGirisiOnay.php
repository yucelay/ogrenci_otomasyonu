<?php
	if(isset($_POST['guncelle'])){
		include "baglanti.php";
		$notID=$_POST['notID'];
		$vize=$_POST['vize'];
		$finalNotu=$_POST['finalNotu'];
		
		mysql_query("UPDATE alinan_dersler SET vize='".$vize."' , finalNotu='".$finalNotu."' WHERE id='".$notID."'");
		header("Location:akademisyen.php?ycl=64");
	}else{


	session_start();
	include "baglanti.php";
	$gelenId=$_GET['id'];
	
	$notCek=mysql_query("SELECT * FROM alinan_dersler WHERE id='".$gelenId."'");
	
	$notlar=mysql_fetch_assoc($notCek);
	
	
	$ogrBilgisi2=mysql_query("SELECT * FROM ogrenci WHERE ogrNo='".$notlar['ogrNo']."'");
	$ogrBilgisi=mysql_fetch_assoc($ogrBilgisi2);
	echo "<center><table border=2 width=400 bordercolor='blue'><tr><td align='center'><form name='abcd' action='dersNotuGirisiOnay.php' method='POST'><table border=0><tr><td colspan=2 ><h2>Not Giriş Sayfası</h2></td></tr>
	<tr><td width=50 height=50>Öğrenci Adi</td><th align='left' >",$ogrBilgisi['adi']," ",$ogrBilgisi['soyadi'],"</th></tr>
	<tr><td height=50 >Ders</td><th align='left'>",$notlar['dersAdi'],"</th></tr>
	<tr><td height=50>Öğrenci No</td><th align='left'>",$notlar['ogrNo'],"</th></tr>
	<tr><td height=50>Vize</td><th align='left'><input type='text' name='vize' size=2 value='".$notlar['vize']."'></th></tr>
	<tr><td height=50>Final</td><th align='left'><input type='text' name='finalNotu' size=2 value='".$notlar['finalNotu']."'></th></tr>
	<tr><td>&nbsp;</td><th height=50 align='left'><input type='submit' name='guncelle' size=2 value='Güncelle'>
	<input type='hidden' name='notID' value='".$notlar['id']."'>
	</th></tr></table></form></td></tr></table>";
	}
?>