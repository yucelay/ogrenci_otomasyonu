<?php
include "baglanti.php";

echo "<form name='y8' action='dersNotuGirisiOnay.php' method='POST'><table border=0>
	<tr><td><h4>Öğrenci No</h4></td>
	<td><h4>Öğrenci Adı</h4></td>
	<td><h4>Ders Adı</h4></td>
	<td><h4>Vize</h4></td>
	<td><h4>Final</h4></td>
	<td><h4></h4></td></tr>";
	$ogrenciler=mysql_query("SELECT * FROM alinan_dersler WHERE dersKodu='".$_SESSION['dersKodu']."' ORDER BY dersAdi");
	if((mysql_num_rows($ogrenciler))!=0){
		while($oku=mysql_fetch_assoc($ogrenciler)){
			$ogrAdi5=mysql_query("SELECT adi FROM ogrenci WHERE ogrNo='".$oku['ogrNo']."'");
			echo "<tr><td width=100>",$oku['ogrNo'],
			"</td><td width=150>",mysql_result($ogrAdi5,0),
			"</td><td width=150>",$oku['dersAdi'],
			"</td><td width=50>".$oku['vize']."</td><td width=50>".$oku['finalNotu']."</td><td width=50><a href='dersNotuGirisiOnay.php?id=".$oku['id']."'>Güncelle</td></tr>";
		}	
	}
echo "</table></form>";
?>