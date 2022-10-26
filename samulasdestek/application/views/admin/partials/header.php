
<body>

    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="spur-logo"><i class="fas fa-bolt"></i> <span>DESTEK</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="#" class="dash-nav-item">
                    <i class="fas fa-home"></i>Anasayfa</a>
                <div class="dash-nav-dropdown">
                    <a href="<?php echo base_url("admin/Admins") ?>" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-users"></i>Adminler</a>
                </div>
                <div class="dash-nav-dropdown ">
                    <a href="<?php echo base_url("admin/Features") ?>" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i> Özellikler</a>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="<?php echo base_url("admin/Content") ?>" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i>İçerikler</a>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="<?php echo base_url("admin/Contents") ?>" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-info"></i>Ağaç İçerik</a>
                </div>
            </nav>
        </div>
