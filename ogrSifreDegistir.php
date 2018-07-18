<?php

	include "baglanti.php";
	$adi=$_SESSION['ogrNo'];



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>

<form id="form1" name="form1" method="post" action="ogrSifreDegistirOnay.php">
<table width="410" height="159" border="0">
  <tr>
    <td colspan="2"><h3><center><font color="blue">Öğrenci Şifre Değiştirme Sayfası</h3></td>
  </tr>
  <tr>
    <td width="124">Öğrenci No</td>
    <td width="226">
        <label for="textfield"></label>
        : 
        <input type="text" name="textfield" id="textfield" value="<?php echo $adi; ?>" readonly="readonly"/>
    </td>
  </tr>
  <tr>
    <td>Şifre</td>
    <td>
      <label for="textfield2"></label>
      :
  <input type="password" name="sifre" id="sifre" />
   </td>
  </tr>
  <tr>
    <td>Yeni Şifre</td>
    <td>
      <label for="textfield3"></label>
      :
  <input type="password" name="sifreYeni" id="sifreYeni" />
   </td>
  </tr>
  <tr>
    <td>Yeni Şifre (Tekrar)</td>
    <td>
      <label for="textfield4"></label>
      :
  <input type="password" name="sifreYeniTekrar" id="sifreYeniTekrar" />
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="degistir" id="degistir" value="Değiştir" /></td>
  </tr>
</table>
</form>
</body>
</html>