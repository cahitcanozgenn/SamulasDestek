<?php 
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../system/ayar.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SAMULAŞ Destek | Admin Panel</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="shortcut icon" href="/samulasdestek/admin/admin/Sayfalar/dist/img/samulaslogo2.png">
  <link rel="stylesheet" href="plugins/bootstrap-dialog.min.css">
<style>
        td {white-space: nowrap; }
        tr :hover{font-weight: bold ; }
        .ResimSekil img{height: 25px; width: 25px;display: block; margin: auto;}
        .ResimSekil :hover {height: 100px; width: auto;display: block; margin: auto;}
        #contextMenu { position: absolute;  display:none; }
      </style>

</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="Home.php" class="logo">
     
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SAMULAŞ</b>Destek</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user">
              <span class="hidden-xs"><?=$_SESSION['Adi'] ?> <?=$_SESSION['Soyadi'] ?></span> </i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
			  <br /><br />
                <p><?=$_SESSION['Adi'] ?>  <?=$_SESSION['Soyadi'] ?>
					
                      <small><?= $_SESSION["Yetki"] ?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="KullaniciEkle.php?islem=Duzenle&ID=<?=$_SESSION['UserID']?>" class="btn btn-success btn-flat">Profile Git</a>
                </div>
                <div class="pull-right">
                  <a href="OturumKapat.php" class="btn btn-success btn-flat">Oturumu Kapat</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button 
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
		   -->
        </ul>
      </div>
    </nav>
  </header>
  
<?php } ?>