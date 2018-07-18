<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="590" border="0">
  <tr>
    <td width="100"><b>Ders Kodu</td>
    <td width="100"><b>Ders Adi</td>
    <td width="100"><b>Vize</td>
    <td width="100"><b>Final</td>
    <td width="100"><b>Ortalama</td>
    <td width="100"><b>Harf Notu</td>
  </tr>
  
  <?php
	include "baglanti.php";
	
	$ogrNo=$_SESSION['ogrNo'];
	$notlar=mysql_query("SELECT * FROM alinan_dersler WHERE ogrNo='".$ogrNo."'");
	$i=0;
	if(mysql_num_rows($notlar)!=0){
		while($oku=mysql_fetch_assoc($notlar)){
			if($i%2==0){
				echo "<tr bgcolor='#7CC8FF'>";
			}else{
				
				echo "<tr bgcolor='#9FF'>";
			}
		$i++;
		echo "<td width=150>• ",$oku["dersKodu"],
		"</td><td width=200>",$oku["dersAdi"],
		"</td><td width=150> ",$oku["vize"],"</td>
		
		</td><td width=150> ",$oku["finalNotu"],"</td>
		</td><td width=150>",$ortalama=ceil(($oku['vize']*0.4)+($oku['finalNotu']*0.6)),"</td>
		</td><td width=150>";
		
		if($ortalama<50){
			echo "FF";	
		}else if($ortalama>50 && $ortalama<=60){
			echo "CC";	
		}else if($ortalama>60 && $ortalama<=70){
			echo "CB";	
		}else if($ortalama>70 && $ortalama<=80){
			echo "BA";	
		}else if($ortalama>80 && $ortalama<=100){
			echo "AA";	
		}
		
		echo "</td>
		
		</tr>";	
	
		}
	}else{
		echo "Devamsizlik Bilgisi Bulunmamaktadır!!";
			
	}

?>
  
  
  
  
</table>
</body>
</html>