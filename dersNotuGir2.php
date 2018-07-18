<?php
include "baglanti.php";
session_start();

$ogrNo=$_SESSION['secilenOgrNo'];
$dersKodu=$_GET['dersKodu'];

$_SESSION['secilenDers']=$dersKodu;
$ogrAdi=mysql_query("SELECT adi FROM ogrenci WHERE ogrNo='".$ogrNo."'");
$ogrSoyadi=mysql_query("SELECT soyadi FROM ogrenci WHERE ogrNo='".$ogrNo."'");
$vizeNotu=mysql_query("SELECT vize FROM alinan_dersler WHERE ogrNo='".$ogrNo."' AND dersKodu='".$dersKodu."'");
$finalNotu=mysql_query("SELECT finalNotu FROM alinan_dersler WHERE ogrNo='".$ogrNo."' AND dersKodu='".$dersKodu."'");
$devamsizlik=mysql_query("SELECT devamsizlik FROM alinan_dersler WHERE ogrNo='".$ogrNo."' AND dersKodu='".$dersKodu."'");
$dersAdi=mysql_query("SELECT dersAdi FROM alinan_dersler WHERE ogrNo='".$ogrNo."' AND dersKodu='".$dersKodu."'");
?>
<form name="yy2" action="dersNotuOnay2.php" method="get">
<table width=477 border=0>
  <tr>
    <td colspan=3><h2><center>Not ve Devamsızlık Bilgisi Girişi</center></h2>
    <h2><center>mat () Dersi</center></h2></td>
  </tr>
  <tr>
    <td width="132"><strong>Öğrenci Adi</strong></td>
    <td colspan="2">:<?php echo mysql_result($ogrAdi,0);  ?></td>
  </tr>
  <tr>
    <td><strong>Soyadi</strong></td>
    <td colspan="2">:<?php echo mysql_result($ogrSoyadi,0);  ?></td>
  </tr>
  <tr>
    <td><strong>No</strong></td>
    <td colspan="2">:<?php echo $ogrNo;  ?></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td width="134">&nbsp;</td>
    <td width="197">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Vize</strong></td>
    <td><strong>Final </strong></td>
    <td><strong>Devamsızlık</strong></td>
  </tr>
  <tr>
    <td><input name="vize" type="text" id="vize" size="6" value="<?php echo mysql_result($vizeNotu,0); ?>"></td>
    <td><input name="finalNotu" type="text" id="finalNotu" size="6" value="<?php echo mysql_result($finalNotu,0); ?>"></td>
    <td><input name="devamsizlik" type="text" id="devamsizlik" size="6" value="<?php echo mysql_result($devamsizlik,0); ?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Güncelle"></td>
  </tr>
</table>
</form>
