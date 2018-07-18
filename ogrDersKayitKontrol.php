<?php 
include "baglanti.php";
session_start();
//$dersKodu=$_POST['derskodu'];
$ogrNo=$_SESSION['ogrNo'];

$onay=0;
if(isset($_POST['dersler'])) {
    $secilenDersler = $_POST['dersler'];
 
  
    foreach($secilenDersler as $ders) {
		
		$dersBilgileri=mysql_query("SELECT dersKodu FROM dersler WHERE dersAdi='".$ders."'");
		$dersKodu=mysql_result($dersBilgileri,0);
		mysql_query("INSERT INTO alinan_dersler(ogrNo,dersKodu,dersAdi,onay) 
		VALUES('".$ogrNo."','".$dersKodu."','".$ders."','".$onay."')");
		header("Location:ogrenci.php?ycl=43");
    }
} else {
    echo 'Hic ders secmediniz.';
}



/*

if($ad=="" || $soyad=="" || $ogrNo=="" || $sifre==""){
	echo '<script type="text/javascript">alert("Lutfen tum alanlari doldurunuz.");</script>';
	header( "refresh:0;url=idari.php" );
	
}
else{
$ekle=mysql_query("INSERT INTO ogrenci(adi,soyadi,ogrNo,sinif,sifre,fakulte,bolum,devamsizlik,danisman) VALUES('".$ad."','".$soyad."','".$ogrNo."','".$sinif."','".$sifre."','".$fakulte."','".$bolum."','".$devamsizlik."','".$danisman."')");
	if($ekle)
{
echo '<script type="text/javascript">alert("Başarı ile Kaydedildi");</script>';
}
else{
	echo '<script type="text/javascript">alert("Kayıt işlemi başarısız !!");</script>';
}
header( "refresh:0;url=idari.php" );

}
*/

?>