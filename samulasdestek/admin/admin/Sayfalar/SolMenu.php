<aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">Menüler</li>
        <li><a href="Home.php"><i class="fa fa-home"></i> <span>Anasayfa</span></a></li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-share-alt"></i>
            <span>Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="KategoriEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="KategoriListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa  fa-pencil-square-o"></i>
            <span>İçerik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="IcerikEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="IcerikListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li>
	
		<li class="treeview">
		<?php $ResimQuery=$db->query("SELECT count(1) AS Sonuc FROM resimler WHERE IsActive=1");
				$ResimRow = $ResimQuery->fetch(PDO::FETCH_ASSOC);
				$ResimSonuc=$ResimRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-image "></i>
            <span>Resimler</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$ResimSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ResimEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="ResimListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
			<li class="">
                  <a href="#"><i class="fa fa-th-large"></i> Kategoriler
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu" style="display: none;">
                    <li><a href="ResimKatEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
                    <li><a href="ResimKatListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
                  </ul>
            </li>
          </ul>
        </li>
		
		<li class="treeview">
		<?php $VideoQuery=$db->query("SELECT count(1) AS Sonuc FROM videolar WHERE IsActive=1");
				$VideoRow = $VideoQuery->fetch(PDO::FETCH_ASSOC);
				$VideoSonuc=$VideoRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-video-camera "></i>
            <span>Videolar</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$VideoSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="VideoEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="VideoListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
			
          </ul>
        </li>
		

		<li class="treeview">
		<?php $KullQuery=$db->query("SELECT count(1) AS Sonuc FROM kullanicilar WHERE IsActive=1");
				$KullRow = $KullQuery->fetch(PDO::FETCH_ASSOC);
				$KullSonuc=$KullRow['Sonuc']; ?>
          <a href="#">
            <i class="fa  fa-users "></i>
            <span>Kullacılar</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$KullSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="KullaniciEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="KullaniciListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cogs"></i>
            <span>Site Ayarları</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="AyarGenel.php"><i class="fa fa-cog"></i> Genel Ayarlar</a></li>
            <li><a href="AyarMail.php"><i class="fa fa-envelope-o"></i> Mail Ayarları</a></li>
            <li><a href="AyarSosyalMedya.php"><i class="fa fa-share-alt"></i> Sosyal Medya</a></li>
            <li><a href="AyarAltBilgi.php"><i class="fa fa-pencil-square-o"></i> Alt Bilgi</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
