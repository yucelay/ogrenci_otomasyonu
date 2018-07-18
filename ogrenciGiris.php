<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="ogrTasarim.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="cerceveOgrForm">
  <div id="bannerOgrGiris">
  <table width="351" height="91" border="0" align="center">
    <tr>
      <td width="92" rowspan="3"><img src="icon/ogrenci.png" width="86" height="74" /></td>
      <td width="10">&nbsp;</td>
      <td width="235" rowspan="3"><h1>Öğrenci Girişi</h1></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td height="23">&nbsp;</td>
      </tr>
  </table></div>
  <div id="icerikOgrGiris">
    <div id="icerikSol">
    <form id="form1" name="form1" method="post" action="ogrenciGirisKontrol.php">
     <table width="312" height="113" border="0" align="center">
      <tr>
        <td width="98">&nbsp;</td>
        <td width="204">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Kullanıcı Adı</strong></td>
        <td>
          <input type="text" name="ogrKullaniciAdi" id="ogrKullaniciAdi" class="tb11"/>
       </td>
      </tr>
      <tr>
        <td><strong>Şifre</strong></td>
        <td><input type="password" name="ogrSifre" id="ogrSifre" class="tb11"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <a href="#">Şifremi Unuttum</a>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="ogrGirisButon" id="ogrGirisButon" value="Giriş Yap" class="myButton2"/> </td>
      </tr>
     </table>
    
    </form>
    </div>
    <div id="icerikSag">
      <div id="ogrGirisDuyuruBaslik">
        <h3><center>Genel Duyurular</h3><hr /><?php
        include "baglanti.php";
	echo "<marquee direction='up' behavior='scroll'>";
		$duyuru=mysql_query("SELECT * FROM idari_duyurular");
	if(mysql_num_rows($duyuru)!=0){
		while($oku=mysql_fetch_assoc($duyuru)){
		echo "<a href='#'><b><center>•",$oku["konu"],"</b>","</br>",$oku["icerik"],"</a></center><hr>";	
	
		}
	}
	
	else{
		echo "Duyuru bulunamadi!!";
	}
	echo "</marquee>";
  
		?>
		
		</center></h3>
      </div>
    </div>
    <div id="clearOgricerik"></div>
  </div>
  <div id="clearOgrGiris"></div>
</div>
<div id="arkaplan"></div>
</body>
</html>