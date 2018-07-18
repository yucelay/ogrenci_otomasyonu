<?php
session_start();
if(!(isset($_SESSION["giris"]))){
	header("Location:index.php");
}else if($_SESSION["giris"]!="yucel2"){

echo "hata !! kullanici bulunamadi";

}else{

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="akademisyen.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="arkaplan">
  <div id="cerceve">
    <div id="banner">
      <div id="profilFoto"><img src="icon/akademisyen.png" width="114" height="117" /></div>
      <div id="bilgiler">
        <table width="662" height="120" border="0" align="center">
          <tr>
            <td width="166"><font color="#069"><strong>Akademik Personel ID</strong></font></td>
            <td width="112">: 123456</td>
            <td width="61">&nbsp;</td>
            <td width="77"><font color="#069"><strong>Fakülte</strong></font></td>
            <td width="224">: Mühendislik Fakültesi</td>
          </tr>
          <tr>
            <td><font color="#069"><strong>Adı Soyadı</strong></font></td>
            <td>: Akademisyen</td>
            <td>&nbsp;</td>
            <td><font color="#069"><strong>Bölüm</strong></font></td>
            <td>: Bilgisayar Mühendisliği</td>
          </tr>
        </table>
      </div>
    </div>
    <div id="icerik">
      <div id="solMenu">
        <div id="menuCerceve">
          <ul>
            <li><a href="akademisyen.php?ycl=60">Öğrenci Ara</a></li>
            <li><a href="akademisyen.php?ycl=61">Devamsızlık Bilgisi Gir</a>
            <li><a href="akademisyen.php?ycl=62">Duyuru Ekle</a></li>
            <li><a href="akademisyen.php?ycl=64">Ders Notu Girişi</a></li>
            <li><a href="akademisyen.php?ycl=65">Şifre Değiştir</a></li>
            <li><a href="akademisyen.php?ycl=66">Çıkış Yap</a></li>
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
	case 61: include "devamsizlikBilgisiGir.php";
	break;
		
	case 62: include "akademisyenDuyuru.php";
	break;
	
	case 64: include "dersNotuGirisi.php";
	break;
	
	case 66: include "cikis.php";
	break;
	
	case 65: include "akademisyenSifreDegistir.php";
	break;
	
	default: include "ogrenciAra.php";
	break;
	}
	?>
      
      </div>
      <div id="clearOgr"></div>
    </div>
  </div>
</div>
</body>
</html>

<?php

}

?>