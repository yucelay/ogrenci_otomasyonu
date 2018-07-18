<?php
	
	include "baglanti.php";
	$dersKodu=$_SESSION['dersKodu'];
	
	
	
	$ogrListe=mysql_query("SELECT * FROM alinan_dersler WHERE dersKodu='".$dersKodu."'");
	echo "<center><table width=500 border=0 height=200>
  <tr><td colspan=4 align='center'><h2><font color='blue'>".$dersKodu." Dersi<br>Devamsızlık Bilgisi Giriş Ekranı</td>
  </tr>
  <tr>
    <td width=100><b>Öğrenci No</td>
    <td width=100><b>Öğrenci Adi</td>
	<td width=100><b>Soyadi</td>
	<td width=100><b>Devamsizlik</td>
	</tr>";
    
 

	if((mysql_num_rows($ogrListe))!=0){
		while($bilgiler=mysql_fetch_assoc($ogrListe)){
			$ogrAdi=mysql_query("SELECT adi FROM ogrenci WHERE ogrNo='".$bilgiler['ogrNo']."'");
			$ogrSoyadi=mysql_query("SELECT soyadi FROM ogrenci WHERE ogrNo='".$bilgiler['ogrNo']."'");
		echo "<tr><td><a href='devamsizlikBilgisiDers.php?id8=".$bilgiler['ogrNo']."'>",$bilgiler['ogrNo'],
			"</a></td><td>",mysql_result($ogrAdi,0),
			"</td><td>",mysql_result($ogrSoyadi,0),"</td>
			</td><td>",$bilgiler['devamsizlik'],
			"</td></tr>";	
		}
		
		
		echo "</table>";
	}
	

?>