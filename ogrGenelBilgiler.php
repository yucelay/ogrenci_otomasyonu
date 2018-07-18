
	<?php
	include "baglanti.php";
	

	$ogrNo=$_SESSION['ogrNo'];
	$ogrBilgiler=mysql_query("SELECT * FROM ogrenci WHERE ogrNo='".$ogrNo."'");
	
	if((mysql_num_rows($ogrBilgiler))!=0){
		while($oku=mysql_fetch_assoc($ogrBilgiler)){
		$adi=$oku["adi"];
		$soyadi=$oku["soyadi"];
		$sinif=$oku["sinif"];
		$bolum=$oku["bolum"];
		$fakulte=$oku["fakulte"];
	
		}
	}else{
		echo "ogrenci kaydi bulunamadi";
	}

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>





<center>
<table width="405" height="211" border="0">
  <tr>
    <td height="49" colspan="2"><h2><center><font color="blue">Öğrenci Bilgileri</center></h2></td>
    </tr>
  <tr>
    <td width="64"><pre><strong>Ad </strong></pre></td>
    <td width="510">:<b> <?php echo $adi; ?></b></td>
  </tr>
  <tr>
    <td><pre><strong>Soyad</strong></pre></td>
    <td>: <b> <?php echo $soyadi; ?></b> </td>
  </tr>
  <tr>
    <td><pre><strong>Sınıf</strong></pre></td>
    <td>:<b> <?php echo $sinif; ?></b></td>
  </tr>
  <tr>
    <td><pre><strong>Bölüm</strong></pre></td>
    <td>: <b><?php echo $bolum; ?></b></td>
  </tr>
  <tr>
    <td><pre><strong>Fakülte</strong></pre></td>
    <td>:<b> <?php echo $fakulte; ?></b></td>
  </tr>
</table>
</center>
</body>
</html>