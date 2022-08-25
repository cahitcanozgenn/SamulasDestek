<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';
require_once '../../../../system/fonksiyon.php';

if($_POST){
	$islem		=$_POST['islem'];
	$Sonuc=[];
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
	if($islem=="Kayit")
    {
		$Resim			= $_POST['Video'];
		$VideoAdi		= $_POST['VideoAdi'];
		$VideoLinki= $_POST['VideoLinki'];
		if ($Resim == "")
        {
			$Sonuc["hata"]='Lütfen Resim Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
			
		$save = $db->prepare("INSERT INTO videolar (Resim,Adi,Linki,IsActive) VALUES (?,?,?,?)");
		$save->execute(array($Resim,$VideoAdi,$VideoLinki,1));
		if ( $save )
		{									   
			$Sonuc["ok"] = 'Başarı ile Güncellenmiştir !' ;
		}
		else
		{									   
			$Sonuc["hata"] = 'Güncelleme İşlemi Başarısız !' ;
		}
	}
	if($islem=="Duzenle")
    {
		$ID				= $_POST['ID'];
		$Resim			= $_POST['Video'];
		$VideoAdi		= $_POST['VideoAdi'];
		$VideoLinki= $_POST['VideoLinki'];
		
		if ($Resim == "")
        {
			$Sonuc["hata"]='Lütfen Resim Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE videolar SET Resim=?,Adi=?,Linki=?, IsActive=? WHERE ID=?");
		$save->execute(array($Resim,$VideoAdi,$VideoLinki,1,$ID));
		if ( $save )
		{									   
			$Sonuc["ok"] = 'Başarı ile Güncellenmiştir !' ;
		}
		else
		{									   
			$Sonuc["hata"] = 'Güncelleme İşlemi Başarısız !' ;
		}
	}
}
	echo json_encode($Sonuc);
	}
}
 ?>