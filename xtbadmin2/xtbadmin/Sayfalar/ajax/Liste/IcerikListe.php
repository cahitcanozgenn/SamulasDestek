<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';
require_once '../../../../system/fonksiyon.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$Kosul=$_POST["Like"];
	$Kosul="%".$Kosul."%"; 
 }else{
	$Kosul="%%"; 
	}
	$say=0;
	$deger=array();
	$sonuc = array();
	 
	$sql = $db->prepare("select * from icerik");
						
                         
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$icerikCategory= $row['icerikCategory'];
						$icerikBaslik= kisalt($row['icerikBaslik'],130);
						$ID = $row['icerikId'];
						
					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
								'.$ID.'
							</td>
							<td>'.$icerikCategory.'</td>
							<td>'.$icerikBaslik.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>