<?php 
include "baglanti.php";

$konu=$_POST['konu'];
$icerik=$_POST['icerik'];



if($konu=="" || $icerik==""){
	echo '<script type="text/javascript">alert("Lutfen tum alanlari doldurunuz.");</script>';
	header( "refresh:0;url=akademisyen.php?ycl=62" );
	
}
else{
$ekle=mysql_query("INSERT INTO akademisyen_duyurular(konu,icerik) VALUES('".$konu."','".$icerik."')");
	if($ekle)
{
echo '<script type="text/javascript">alert("Duyuru Basarı ile Yayınlandi ");</script>';
}
else{
	echo '<script type="text/javascript">alert("Hata olustu !!");</script>';
}


}
header( "refresh:0;url=akademisyen.php?ycl=62" );
?>