<?php 
include "baglanti.php";

$konu=$_POST['konu'];
$icerik=$_POST['icerik'];



if($konu=="" || $icerik==""){
	echo '<script type="text/javascript">alert("Lutfen tum alanlari doldurunuz.");</script>';
	header( "refresh:0;url=idari.php?ycl=6" );
	
}
else{
$ekle=mysql_query("INSERT INTO idari_duyurular(konu,icerik) VALUES('".$konu."','".$icerik."')");
	if($ekle)
{
echo '<script type="text/javascript">alert("Duyuru Basarı ile Yayınlandi ");</script>';
}
else{
	echo '<script type="text/javascript">alert("Hata olustu !!");</script>';
}


}
header( "refresh:0;url=idari.php?ycl=6" );
?>