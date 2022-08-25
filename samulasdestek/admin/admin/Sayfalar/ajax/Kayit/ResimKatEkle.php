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
		$KategoriAdi		= $_POST['KategoriAdi'];
		$Aciklama= $_POST['Aciklama'];
		if ($KategoriAdi == "")
        {
			$Sonuc["hata"]='Lütfen Kategori Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
			
		$save = $db->prepare("INSERT INTO resimkategorileri (KategoriAdi,Aciklama,IsActive) VALUES (?,?,?)");
		$save->execute(array($KategoriAdi,$Aciklama,1));
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
		$KategoriAdi		= $_POST['KategoriAdi'];
		$Aciklama= $_POST['Aciklama'];
		
		if ($KategoriAdi == "")
        {
			$Sonuc["hata"]='Lütfen Kategori Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE resimkategorileri SET KategoriAdi=?,Aciklama=?, IsActive=? WHERE ID=?");
		$save->execute(array($KategoriAdi,$Aciklama,1,$ID));
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