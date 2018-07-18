<?php
	session_start();
	include "baglanti.php";
	$gelenNo=$_GET['id'];
	$_SESSION['secilenOgrNo']=$gelenNo;
	$ogrAdi=mysql_query("SELECT adi FROM ogrenci WHERE ogrNo='".$gelenNo."'");
	$ogrSoyadi=mysql_query("SELECT soyadi FROM ogrenci WHERE ogrNo='".$gelenNo."'");
	$ogrBilgisi=mysql_query("SELECT * FROM alinan_dersler WHERE ogrNo='".$gelenNo."'");
	echo "<table width=590 border=0 height=200>
  <tr><td colspan=5>",$gelenNo," ",mysql_result($ogrAdi,0)," ",mysql_result($ogrSoyadi,0),"<br>Not ve Devamsızlık Bilgisi Girmek İstediğin Derse Tıklayınız..</td>
  </tr>
  <tr>
    <td>Ders Kodu</td>
    <td>Ders Adı</td>
	<td>Vize</td>
    <td>Final</td>
	<td>Devamsızlık</td> </tr>";
    
 

	if((mysql_num_rows($ogrBilgisi))!=0){
		while($bilgiler=mysql_fetch_assoc($ogrBilgisi)){
		echo "<tr><td>",$bilgiler['dersKodu'],
			"</td><td><a href='dersNotuGir2.php?dersKodu=".$bilgiler['dersKodu']."'  target='_parent'>",$bilgiler['dersAdi'],
			"</a></td><td>",$bilgiler['vize'],
			"</td><td>",$bilgiler['finalNotu'],
			"<td>",$bilgiler['devamsizlik'],"</td></tr>";	
		}
		
		
		
	}
	

?>