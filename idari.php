
<?php
session_start();
if(!(isset($_SESSION["giris"]))){
	header("Location:index.php");
}else if($_SESSION["giris"]!="yucel3"){
echo "hata !! kullanici bulunamadi";

}else{
include "baglanti.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="idari.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="arkaplan">
  <div id="cerceve">
    <div id="banner">
      <div id="profilFoto"><img src="icon/idaripersonel.png" width="114" height="122" /></div>
      <div id="bilgiler">
        <table width="698" height="110" border="0" align="right">
          <tr>
            <td width="121" height="37">&nbsp;</td>
            <td width="157">&nbsp;</td>
            <td width="152">&nbsp;</td>
            <td width="250">
                <div id="kapsayici">
<form action="idari.php" method="post">
  <div id="aramaKutusu">
  <input type="text" name="kelime" placeholder="Öğrenci No" />
<button type="submit" name="ara">Ara</button>
</div>
</form>
</div>
            
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><font color="#069"><strong>İdari Personel Id</strong></font></td>
            <td>: 52236</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><font color="#069"><strong>Adı Soyadı</strong></font></td>
            <td>: İdari</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
    </div>
    <div id="icerik">
      <div id="solMenu">
        <div id="menuCerceve">
          <ul>
            <li><a href="idari.php?ycl=2">Yeni Öğrenci Ekle</a></li>
            <li><a href="idari.php?ycl=5">Yeni Ders Ekle</a></li>
            <li><a href="idari.php?ycl=6">Duyuru Yap</a></li>
            <li><a href="idari.php?ycl=9">Çıkış Yap</a></li>
          </ul>
        </div>
      </div>
      <div id="icerikSag">
        <p>
          <?php
  
  if(!(isset($_GET['ycl']))){
	//include "anasayfa.php";
    $_GET['ycl']=1; 
  }
	if(isset($_POST['kelime'])){
		  $_GET['ycl']=7; 
	  }
	switch($_GET['ycl']){	
	case 1: include "yeniOgrEkle.php";
	break;
	
	case 2: include "yeniOgrEkle.php";
	break;
	
	case 3: include "fotografliPaylasimlar.php";
	break;
	
	case 4: include "girisyap.php";
	break;
	
	case 5: include "yeniDersEkle.php";
	break;
	
	case 6: include "idariDuyuru.php";
	break;
	
	case 9: include "cikis.php";
	break;
	
	case 7: {
   
    $a_kelime=addslashes(strip_tags(trim($_POST['kelime']))); 
    if($a_kelime!=NULL){
        $sec = mysql_query("Select * From ogrenci Where ogrNo Like '%{$a_kelime}%'");
		echo "<table cellpadding=0><tr><td width=100><b>Öğrenci No</td><td width=150><b>Adı Soyadı</td><td><b>Bölümü</td></tr></table><hr>";
        while ($row = mysql_fetch_array($sec)){
            extract($row);
            echo "<table cellpadding=0><tr><td width=100>".$ogrNo."</td><td width=150>".$adi." ".$soyadi."</td><td>".$bolum."</td></tr></table><hr>";
            
        }
		
    }else{
        echo 'Arama kısmını boş bırakmayın...';    
    }
	}
	break;
	}
	?>
        </p>
      </div>
      <div id="clear"></div>
      <div id="clearOgr"></div>
    </div>
  </div>
</div>
</body>
</html>
<?php

}

?>


  