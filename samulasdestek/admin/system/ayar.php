<?php
require_once('fonksiyon.php');
try {

    $user 	= GetInfo();
    $ip		= $user['ip'];
    $db = new PDO('mysql:host=localhost;dbname=samulasdestek;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_TO_STRING);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Query = $db->prepare("Select * From firmabilgileri limit 1");
    $Query->execute();
    $Row = $Query->fetch(PDO::FETCH_ASSOC);
        
        $SiteUrl 			= $Row["SiteUrl"];
        $Title 				= $Row["Title"];
        $Footer 			= $Row["Footer"];
        $Footer1 			= $Row["Footer1"];
        $Description 		= $Row["Description"];
        $Keywords 			= $Row["Keywords"];
        $Author 			= $Row["Author"];
        $Hakkinda 			= $Row["Hakkinda"];
        $Tel 				= $Row["Tel"];
        $Mail 				= $Row["Mail"];
        $Adres 				= $Row["Adres"];
        $Facebook 			= $Row["Facebook"];
        $Twitter 			= $Row["Twitter"];
        $Skype 				= $Row["Skype"];
        $GPlus 				= $Row["GPlus"];
        $Instagram			= $Row["Instagram"];
        $GoogleAnalytics 	= $Row["GoogleAnalytics"];
        $reCAPTCHA		 	= $Row["reCAPTCHA"];
        $UstLogo 			= $Row["UstLogo"];
        $AltLogo 			= $Row["AltLogo"];
        $SmtpHost 			= $Row["SmtpHost"];
        $SmtpUser 			= $Row["SmtpUser"];
        $SmtpPassword 		= $Row["SmtpPassword"];
        $SmtpPort 			= $Row["SmtpPort"];
        $Tema 				= $Row["Tema"];
        $IsActive 			= $Row["IsActive"];
		
} catch (PDOException $e) {

    echo 'Hata: ' . $e->getMessage();

}
?>