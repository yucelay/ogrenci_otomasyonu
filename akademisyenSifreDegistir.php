<?php

	include "baglanti.php";
	


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>

<form id="form1" name="form1" method="post" action="akademisyenSifreDegistirOnay.php">
<table width="410" height="159" border="0">
  <tr>
    <td colspan="2"><h3><center>
      <strong><font color="blue">Akademisyen Şifre Değiştirme Sayfası</strong></h3></td>
  </tr>
  <tr>
    <td width="124">ID</td>
    <td width="226">
        <label for="textfield">:<?php echo $_SESSION['id'];  ?></label></td>
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