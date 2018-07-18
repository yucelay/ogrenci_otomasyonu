<center><table width="539" border="0">
      <tr>
        <td width="213"><h4>Ders Kodu</td>
        <td width="361"><h4>Ders Adı</td>
      </tr>
	
	<?php
	include "baglanti.php";
	

	$ogrNo=$_SESSION['ogrNo'];
	$alinanDersler=mysql_query("SELECT * FROM alinan_dersler WHERE ogrNo='".$ogrNo."'");
	
	if((mysql_num_rows($alinanDersler))!=0){
		while($oku=mysql_fetch_assoc($alinanDersler)){
		echo "<tr><td>",$oku["dersKodu"],"</td> <td>",$oku["dersAdi"],"</td></tr>";	
	
		}
	}else{
		echo "Seçilmiş Ders Kaydınız Bulunmamaktadır!!";
			
	}

?>


    
</table>
