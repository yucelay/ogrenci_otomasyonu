<center><table width="522" height="52" border="0">
  	<tr><td><h2><b><font color="blue">İdari Duyurular</font></b><b></b></h2></td></tr>

	<?php
	include "baglanti.php";
	
	$ogrNo=$_SESSION['ogrNo'];
	$duyuru=mysql_query("SELECT * FROM idari_duyurular");
	
	if(mysql_num_rows($duyuru)!=0){
		while($oku=mysql_fetch_assoc($duyuru)){
		echo "<tr><td width=150><b>• ",$oku["konu"],"</td></tr> <tr><td>",$oku["icerik"],"</td></tr><tr><td height=20px><hr> </td></tr>";	
	
		}
	}else{
		echo "Duyuru bulunamadi!!";
			
	}
	
	
	?>
    </table>
    <center><table width="522" height="52" border="0">
  	<tr><td><h2><b><font color="blue">Akademisyen Duyuruları</font></b><b></b></h2></td></tr>
    
    
    
    <?php
	
	$duyuru2=mysql_query("SELECT * FROM akademisyen_duyurular");
	
	if(mysql_num_rows($duyuru2)!=0){
		while($oku2=mysql_fetch_assoc($duyuru2)){
		echo "<tr><td width=150><b>• ",$oku2["konu"],"</td></tr> <tr><td>",$oku2["icerik"],"</td></tr><tr><td height=20px><hr> </td></tr>";	
	
		}
	}else{
		echo "Duyuru bulunamadi!!";
			
	}

?>

</table>