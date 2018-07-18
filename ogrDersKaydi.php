<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form8" name="form8" method="post" action="ogrDersKayitKontrol.php">
  
 
<?php

include "baglanti.php";
$sec = mysql_query("Select * From dersler");
		echo "<table cellpadding=0><tr><td width=50><b></td><td width=150><b>DERS KODU</td><td width=150><b>DERS ADI</td><td width=150><b>KREDİ</td><td width=150><b>AKTS</td></tr></table><hr>";
        while ($row = mysql_fetch_array($sec)){
            extract($row);
            echo "<table cellpadding=0><tr>
			<td width=50><b><input type='checkbox' name='dersler[]' value='".$dersAdi."' id='".$dersKodu."' /></td>
			<td width=150>".$dersKodu."</td>
			<td width=150>".$dersAdi."</td>
			<td width=150> ".$kredi."</td>
			<td width=150>".$akts."</td> </tr></table><hr>";
			
		}
	?>
    <br />
    <input type="submit" value="Onayla"  />
</form>
</body>
</html>