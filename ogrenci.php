<?php
session_start();
if(!(isset($_SESSION["giris"]))){
	header("Location:index.php");
}else if($_SESSION["giris"]!="yucel"){

echo "hata !! kullanici bulunamadi";

}else{

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="ogrenci.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="arkaplan">
  <div id="cerceve">
    <div id="banner">
      	<div id="profilFoto"><img src="icon/ogrenci.png" width="114" height="117" /></div>
      		<div id="bilgiler">
        <table width="681" height="120" border="0" align="center">
          <tr>
            <td width="87"><font color="#069"><strong>Öğrenci No</strong></font></td>
            <td width="191">:
              <?php  echo $_SESSION['ogrNo']; ?></td>
            <td width="78">&nbsp;</td>
            <td width="60"><font color="#069"><strong>Fakülte</strong></font></td>
            <td width="243">: Mühendislik Fakültesi</td>
          </tr>
          <tr>
            <td><font color="#069"><strong>Adı Soyadı</strong></font></td>
            <td>:
              <?php  echo $_SESSION['ogrAdi']; ?></td>
            <td>&nbsp;</td>
            <td><font color="#069"><strong>Bölüm</strong></font></td>
            <td>:
              <?php  echo $_SESSION['ogrBolum']; ?></td>
          </tr>
          <tr>
            <td><font color="#069"><strong>Sınıf</strong></font></td>
            <td>:
              <?php  echo $_SESSION['ogrSinif']; ?></td>
            <td>&nbsp;</td>
            <td><font color="#069"><strong>Dönem</strong></font></td>
            <td>: 2016-2017 Bahar Dönemi</td>
          </tr>
        </table>
      </div>
      <div id="bilgilerClear"></div>
      <div id="clearBilgiler"></div>
    </div>
    <div id="icerik">
      <div id="solMenu">
        <div id="menuCerceve">
          <ul>
            <li><a href="ogrenci.php?ycl=30">Genel Bilgiler</a></li>
            <li><a href="ogrenci.php?ycl=31">Notlar</a></li>
            <li><a href="ogrenci.php?ycl=32">Devamsızlık Bilgisi</a></li>
            <li><a href="ogrenci.php?ycl=43">Alınan Dersler</a></li>
            <li><a href="ogrenci.php?ycl=34">Danışman Bilgileri</a></li>
            <li><a href="ogrenci.php?ycl=35">Duyurular</a></li>
            <li><a href="ogrenci.php?ycl=36">Ders Kayıt</a></li>
            <li><a href="ogrenci.php?ycl=37">Şifre Değiştir</a></li>
            <li><a href="ogrenci.php?ycl=39">Çıkış Yap</a></li>
          </ul>
        </div>
      </div>
      <div id="icerikSag">
      
          <?php
  
  if(!(isset($_GET['ycl']))){
    $_GET['ycl']=1; 
  }
	if(isset($_POST['kelime'])){
		  $_GET['ycl']=7; 
	  }
	switch($_GET['ycl']){
		
	case 30: include "ogrGenelBilgiler.php";
	break;	
	
	case 31: include "notlar.php";
	break;
	
	case 32: include "ogrDevamsizlik.php";
	break;	
		
	case 43: include "alinanDersler.php";
	break;	
	
	case 34: include "ogrDanisman.php";
	break;
	
	case 35: include "duyurular.php";
	break;
	
	case 36: include "ogrDersKaydi.php";
	break;
	
	case 37: include "ogrSifreDegistir.php";
	break;
	
	case 39: include "cikis.php";
	break;
	
	default: include "ogrGenelBilgiler.php";
	break;
	}
	?>
     
      </div>
       <div id="clear"></div>
    </div>
  </div>
</div>
</body>
</html>



<?php

}

?>