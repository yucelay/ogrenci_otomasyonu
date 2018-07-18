
	<?php
	include "baglanti.php";
	

	$ogrNo=$_SESSION['ogrNo'];
	$danisman=mysql_query("SELECT danisman FROM ogrenci WHERE ogrNo='".$ogrNo."'");
	$oku=mysql_fetch_assoc($danisman);
	

		echo "<center><h1><font color='blue'>Danışman</h1><br>",$oku["danisman"];	
	
		

?>

