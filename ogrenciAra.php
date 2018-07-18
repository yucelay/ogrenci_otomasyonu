<?php
	include "baglanti.php";
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="aramaKutusu.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>

 <div id="kapsayici">
<form action="akademisyen.php?ycl=61" method="post">
  <div id="aramaKutusu">
  <input type="text" name="kelime" placeholder="Öğrenci No" />
<button type="submit" name="ara">Ara</button>
</div>
</form>
</div>
</body>
</html>

<?php

if((isset($_POST['kelime']))){

		   
    $a_kelime=addslashes(strip_tags(trim($_POST['kelime']))); 
    if($a_kelime!=NULL){
        $sec = mysql_query("Select * From ogrenci Where ogrNo Like '%{$a_kelime}%'");
		echo "<table cellpadding=0><tr><td width=100><b>Öğrenci No</td><td width=150><b>Adı Soyadı</td><td><b>Bölümü</td></tr></table><hr>";
        while ($row = mysql_fetch_array($sec)){
            extract($row);
            echo "<table cellpadding=0><tr><td width=100><a href='aramaSonuclari.php?id=".$ogrNo."'>".$ogrNo."</a></td><td width=150>".$adi." ".$soyadi."</td><td>".$bolum."</td></tr></table><hr>";
            
        }
		
    }else{
        echo 'Arama kısmını boş bırakmayın...';    
    }
}
	
	?>