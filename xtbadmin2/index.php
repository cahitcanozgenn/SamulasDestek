<?php require_once 'system/ayar.php'; ?>
<!-- 
Bismillahirrahmanirrahim
Bu Sistem Mücahit TOPAL tarafından Kodlanmıştır.
info@mucahittopal.com
www.mucahittopal.com
-->
<!DOCTYPE html>

<html lang="tr">
<head>
    <title><?= $Title ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?= $Description ?>"/>
    <meta name="keywords" content="<?= $Keywords ?>"/>
    <meta name="author" content="<?= $Author ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<ul>
    <li>
        <a href="<?= $Facebook ?>">Facebook</a>
    </li>
    <li>
        <a href="<?= $Twitter ?>">Twitter</a>
    </li>
    <li>
        <a href="<?= $Skype ?>">Skype</a>
    </li>
    <li>
        <a href="<?= $GPlus ?>">GPlus</a>
    </li>
    <li>
        <a href="<?= $Instagram ?>">Instagram</a>
    </li>
</ul>

<div>
    <ul>
        <li>
            <a href="mailto:<?= $Mail ?>" style="color:#e0e0e0;" target="_top"><?= $Mail ?></a>
        </li>
        <li>
            <a href="tel:<?= $Tel ?>" style="color:#e0e0e0;" target="_top"><?= $Tel ?></a>
        </li>
    </ul>
</div>

<a href="#Anasayfa"><img width="200px" style="margin-top:10px;" src="images/<?= $UstLogo ?>" alt="">
</a>

<section>
    <div>
        <?= $Hakkinda ?>
    </div>
</section>

<section>
    <div>
        <?php
        $SqlNedenBiz = $db->prepare("SELECT * FROM nedenbiz WHERE IsActive=1");
        $SqlNedenBiz->execute();
        $NedenBizIDSay = 0;
        foreach ($SqlNedenBiz as $RowNedenBiz) {
            $NedenBizIDSay++;
            $Baslik = $RowNedenBiz['Baslik'];
            $Icerik = $RowNedenBiz['Icerik'];

            ?>
            <section id="item<?= $NedenBizIDSay ?>" class="ac_hidden">
                <p class="pointer">&#9654;</p>
                <h2><a href="#"><?= $Baslik ?></a></h2>
                <h4><?= $Icerik ?></h4>
            </section>
        <?php } ?>
</section>

<section>
    <div>
        <?php
        $SqlHizmetler = $db->prepare("SELECT * FROM hizmetler WHERE IsActive=1");
        $SqlHizmetler->execute();
        $HizmetlerIDSay = 0;
        foreach ($SqlHizmetler as $RowHizmetler) {
            $HizmetlerIDSay++;
            $Baslik = $RowHizmetler['Baslik'];
            $Icerik = $RowHizmetler['Icerik'];
            ?>
            <h5 class="serv-left"><?= $Baslik ?> </h5>
            <div class="serv-info"><?= $Icerik ?></div>
        <?php } ?>
    </div>
</section>

<section>
    <div>
        <div>
            <ul>
                <li>Tümü</li>
                <?php
                $ResimKategoriSql = $db->prepare("SELECT * FROM resimkategorileri WHERE IsActive=1");
                $ResimKategoriSql->execute();
                foreach ($ResimKategoriSql as $Row) {
                    $ID = $Row['ID'];
                    $KategoriAdi = $Row['KategoriAdi'];
                    $Aciklama = $Row['Aciklama'];
                    ?>
                    <li class="filter hvr-underline-from-center" data-filter=".category-<?= $ID ?>"><i
                                class="fa fa-file-image-o"></i><?= $KategoriAdi ?></li>
                <?php } ?>
            </ul>
        </div>
        <div>
            <div>
                <?php
                $ResimlerSql = $db->prepare("SELECT resimler.ID, resimler.KatID, resimler.Resim, resimler.ResimAdi, resimler.ResimAciklamasi, resimkategorileri.KategoriAdi FROM resimler 
INNER JOIN resimkategorileri on resimler.KatID = resimkategorileri.ID
WHERE resimler.IsActive=1 and resimkategorileri.IsActive=1
");
                $ResimlerSql->execute();
                foreach ($ResimlerSql as $Row) {
                    $ID = $Row['ID'];
                    $KatID = $Row['KatID'];
                    $Resim = $Row['Resim'];
                    $ResimAdi = $Row['ResimAdi'];
                    $ResimAciklamasi = $Row['ResimAciklamasi'];
                    $KategoriAdi = $Row['KategoriAdi'];
                    ?>
                    <div class="category-<?= $KatID ?>" data-myorder="<?= $ID ?>">
                        <div>
                            <div class="items"><img alt="<?= $ResimAdi ?>" class="" width="250px" height="200px"
                                                    src="images/thumbnail/<?= $Resim ?>"></div>
                            <div class="mask2">
                                <a href="#Galeri" class="filter " data-filter=".category-<?= $KatID ?>">
                                    <h4><?= $KategoriAdi ?></h4></a>
                                <a class="info2" data-lightbox="AnaSayfaResimGaleri"
                                   data-title="<?= $ResimAciklamasi ?>" href="images/<?= $Resim ?>">
                                    <p><?= $ResimAdi ?></p></a>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div>
        <?php
        $SqlYorumlar = $db->prepare("SELECT * FROM yorumlar WHERE Onaylandi AND IsActive=1");
        $SqlYorumlar->execute();
        $YorumlarIDSay = 0;
        if ($SqlYorumlar->rowCount()) {
            foreach ($SqlYorumlar as $RowYorumlar) {
                $YorumlarIDSay++;
                $AdSoyad = $RowYorumlar['AdSoyad'];
                $Yorum = $RowYorumlar['Yorum'];
                ?>
                <div>
                    <div>
                        <p>
                            <?= $Yorum ?>
                        </p>
                    </div>
                    <div>
                        <span> <?= $AdSoyad ?></span>
                    </div>
                </div>
            <?php }
        } ?>
    </div>
</section>
<section>
    <div>
        <img width="250px" src="images/<?= $AltLogo ?>" alt="">
    </div>
    <footer>
        <p><a href="#Anasayfa"><?= $Footer1 ?></a></p>
        <p><?= $Footer ?></p>
    </footer>
</section>

</body>
</html>