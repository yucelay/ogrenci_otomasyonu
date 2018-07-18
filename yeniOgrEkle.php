<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="yeniOgrKayitOnay.php">
<table width="320" height="414" border="0" align="center">
  <tr>
    <td colspan="2">Yeni Öğrenci Kaydı</td>
  </tr>
  <tr>
    <td width="92">&nbsp;</td>
    <td width="221">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Öğrenci No</strong></td>
    <td>
      <input type="text" name="ogrNo" id="ogrNo" class="tb11"/>
  </td>
  </tr>
  <tr>
    <td><strong>Adı</strong></td>
    <td><input type="text" name="adi" id="adi" class="tb11"/></td>
  </tr>
  <tr>
    <td><strong>Soyadı</strong></td>
    <td><input type="text" name="soyadi" id="soyadi" class="tb11"/></td>
  </tr>
  <tr>
    <td><strong>Sınıfı</strong></td>
    <td>
      <label for="select"></label>
      <select name="sinifi" id="sinifi">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </td>
  </tr>
  <tr>
    <td><strong>Fakültesi</strong></td>
    <td><select name="fakulte" id="fakulte">
      <option>Mühendislik Fakültesi</option>
      <option>Eğitim Fakültesi</option>
      <option>Teknoloji Fakültesi</option>
    </select></td>
  </tr>
  <tr>
    <td><strong>Bölüm</strong></td>
    <td><select name="bolum" id="bolum">
      <option>Bilgisayar Mühendisliği</option>
      <option>Elektrik ve Elektronik Mühendisliği</option>
      <option>Mekatronik Mühendisliği</option>
    </select></td>
  </tr>
  <tr>
    <td><strong>Şifre</strong></td>
    <td><input type="password" name="sifre" id="sifre" class="tb11"/></td>
  </tr>
  <tr>
    <td><strong>Danışman</strong></td>
    <td><select name="danisman" id="danisman">
      <option>Prof.Dr A</option>
      <option>Prof.Dr B</option>
      <option>Yar.Doç C</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td><input type="submit" name="ogrGirisButon" id="ogrGirisButon" value="Ekle" class="myButton2"/></td>
  </tr>
</table>  
</form>
</body>
</html>