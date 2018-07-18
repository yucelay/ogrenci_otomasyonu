<?php
	if(isset($_POST['guncelle'])){
		include "baglanti.php";
		$devamsizlikID=$_POST['devamsizlikNo'];
		$devamsizlik=$_POST['devamsizlik'];
		mysql_query("UPDATE alinan_dersler SET devamsizlik='".$devamsizlik."' WHERE id='".$devamsizlikID."'");
		echo "Güncellendi";
		header("Location:akademisyen.php?ycl=61");
	}else{

	include "baglanti.php";
	session_start(); 
	 
	$gelenOgrNo=$_GET['id8'];

	$dersKodu=$_SESSION['dersKodu'];
	
	$ogrBilgisi=mysql_query("SELECT * FROM ogrenci WHERE ogrNo='".$gelenOgrNo."'");
	$ogrBilgisi2=mysql_fetch_assoc($ogrBilgisi);
	
	$devamsizlik=mysql_query("SELECT * FROM alinan_dersler WHERE ogrNo='".$gelenOgrNo."' AND dersKodu='".$dersKodu."'");
	$bilgiler=mysql_fetch_assoc($devamsizlik);
	
	echo "<center><table border=2 width=400 bordercolor='blue'><tr><td align='center'><form name='abc' action='devamsizlikBilgisiDers.php' method='POST'><table border=0><tr><td colspan=2 ><h2>Devamsızlık Girişi</h2></td></tr>
	<tr><td width=50 height=50>Öğrenci Adi</td><th align='left' >",$ogrBilgisi2['adi']," ",$ogrBilgisi2['soyadi'],"</th></tr>
	<tr><td height=50 >Ders</td><th align='left'>",$bilgiler['dersAdi'],"</th></tr>
	<tr><td height=50>Öğrenci No</td><th align='left'>",$ogrBilgisi2['ogrNo'],"</th></tr>
	<tr><td height=50>Devamsizlik</td><th align='left'><input type='text' name='devamsizlik' size=2 value='".$bilgiler['devamsizlik']."'></th></tr>
	<tr><td>&nbsp;</td><th height=50 align='left'><input type='submit' name='guncelle' size=2 value='Güncelle'>
	<input type='hidden' name='devamsizlikNo' value='".$bilgiler['id']."'>
	</th></tr></table></form></td></tr></table>";
	}
?>

