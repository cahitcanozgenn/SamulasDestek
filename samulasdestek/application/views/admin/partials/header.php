
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">
	<header class="main-header">
		<nav class="navbar navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<a href="/" class="navbar-brand"><b>SAMULAŞ</b>Destek</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
 
				<!--div class="collapse navbar-collapse pull-left" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Yönetim <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/liste/1">Talepler</a></li>
								<li><a href="/liste/2">İptaller</a></li>
								<li class="divider"></li>
								<li><a href="/arsiv/1">Talep Arşivi</a></li>
								<li><a href="/arsiv/2">İptal Arşivi</a></li>
								<li class="divider"></li>
								<li><a href="/ayarlar">Ayarlar</a></li>
							</ul>
						</li>
						
					</ul>
				</div-->
	
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
		
						<!-- User Account Menu -->
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->
							<ul class="dropdown-menu">
								<!-- The user image in the menu -->

							
								<!-- Menu Footer-->
								<li class="user-footer">
									<!--div class="pull-left">
										<a href="/yonetim" class="btn btn-info btn-flat"><i class="fa fa-gears"></i> Yönetim</a>
									</div-->
									<div class="pull-right">
										<a href="/saml2/logout" class="btn btn-danger btn-flat"><i class="fa fa-sign-out"></i> Çıkış</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /.navbar-custom-menu -->
			</div>
			<!-- /.container-fluid -->
		</nav>
  </header> 	<!-- Full Width Column -->
	<div class="content-wrapper">
		<div class="container">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					
					<small></small>
				</h1>
				<ol class="breadcrumb">
                <a href="<?php echo base_url("admin/Content/") ?>" class="btn btn-danger">
							     <i class="fa fa-pencil"></i> Makaleler
						      </a> 

                              <a href="<?php echo base_url("admin/Category/add") ?>" class="btn btn-danger">
							     <i class="fa fa-gear"></i> Web Site Ayarları
						      </a> 
                              <a href="<?php echo base_url("admin/Category/add") ?>" class="btn btn-danger">
							     <i class="fa fa-user"></i> Admin Ayarları
						      </a> 
                              <a href="<?php echo base_url("admin/Category/add") ?>" class="btn btn-danger">
							     <i class="fa fa-home"></i> Siteyi Görüntüle
						      </a> 

					
					<li  class="active" ><a href="/"></a></li>
				</ol>
			</section>
			