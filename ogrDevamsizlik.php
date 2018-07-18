<center><table width="582" height="52" border="0">
  	<tr><td width=194><h2><b>Ders Adı</b></h2></td><td width="372"><h2><b>Devamsızlık</b></h2></td></tr>

	<?php
	include "baglanti.php";
	
	$ogrNo=$_SESSION['ogrNo'];
	$devamsizlikBigisi=mysql_query("SELECT * FROM alinan_dersler WHERE ogrNo='".$ogrNo."'");
	
	if(mysql_num_rows($devamsizlikBigisi)!=0){
		while($oku=mysql_fetch_assoc($devamsizlikBigisi)){
		echo "<tr><td width=150>",$oku["dersAdi"],"</td><td> ",$oku["devamsizlik"],"</td></tr>";	
	
		}
	}else{
		echo "Devamsizlik Bilgisi Bulunmamaktadır!!";
			
	}

?>

</table>