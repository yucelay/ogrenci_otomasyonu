<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="yeniDersKayitOnay.php">
<table width="455" height="395" border="0" align="center">
  <tr>
    <td colspan="2">Yeni Ders Ekle</td>
  </tr>
  <tr>
    <td width="192">&nbsp;</td>
    <td width="221">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Ders Kodu</strong></td>
    <td>
      <input type="text" name="dersKodu" id="dersKodu" class="tb11"/>
  </td>
  </tr>
  <tr>
    <td><strong>Ders Adı</strong></td>
    <td><input type="text" name="dersAdi" id="dersAdi" class="tb11"/></td>
  </tr>
  <tr>
    <td><strong>AKTS</strong></td>
    <td><input type="text" name="akts" id="akts" class="tb11"/></td>
  </tr>
  <tr>
    <td><strong>Kredi</strong></td>
    <td><input type="text" name="kredi" id="kredi" class="tb11"/></td>
  </tr>
  <tr>
    <td><strong>Dersin İlgili Olduğu Bölüm</strong></td>
    <td><select name="bolum" id="bolum">
      <option>Bilgisayar Mühendisliği</option>
      <option>Elektrik ve Elektronik Mühendisliği</option>
      <option>Mekatronik Mühendisliği</option>
    </select></td>
  </tr>
  <tr>
    <td><strong>Dersi Veren Akademisyen</strong></td>
    <td><select name="akademisyen" id="akademisyen">
      <option>Prof. Dr Ahmet</option>
      <option>Yar.Doç Mehmet</option>
      <option>Prof. Alper</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="ogrGirisButon" id="ogrGirisButon" value="Ekle" class="myButton2"/></td>
  </tr>
</table>  </form>
</body>
</html>