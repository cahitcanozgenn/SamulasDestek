-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 19 Ağu 2022, 17:21:20
-- Sunucu sürümü: 5.6.20-log
-- PHP Sürümü: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `samulasdestek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firmabilgileri`
--

CREATE TABLE IF NOT EXISTS `firmabilgileri` (
  `SiteUrl` varchar(150) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Footer` varchar(500) DEFAULT NULL,
  `Footer1` varchar(100) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL,
  `Keywords` varchar(250) DEFAULT NULL,
  `Author` varchar(100) DEFAULT NULL,
  `Hakkinda` longtext,
  `Tel` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Adres` varchar(500) DEFAULT NULL,
  `Facebook` varchar(50) DEFAULT NULL,
  `Twitter` varchar(50) DEFAULT NULL,
  `Skype` varchar(50) DEFAULT NULL,
  `GPlus` varchar(50) DEFAULT NULL,
  `Instagram` varchar(50) DEFAULT NULL,
  `GoogleAnalytics` varchar(500) DEFAULT NULL,
  `reCAPTCHA` varchar(200) DEFAULT NULL,
  `UstLogo` varchar(150) DEFAULT NULL,
  `AltLogo` varchar(150) DEFAULT NULL,
  `SmtpHost` varchar(100) DEFAULT NULL,
  `SmtpUser` varchar(50) DEFAULT NULL,
  `SmtpPassword` varchar(50) DEFAULT NULL,
  `SmtpPort` varchar(50) DEFAULT NULL,
  `Tema` int(11) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `firmabilgileri`
--

INSERT INTO `firmabilgileri` (`SiteUrl`, `Title`, `Footer`, `Footer1`, `Description`, `Keywords`, `Author`, `Hakkinda`, `Tel`, `Mail`, `Adres`, `Facebook`, `Twitter`, `Skype`, `GPlus`, `Instagram`, `GoogleAnalytics`, `reCAPTCHA`, `UstLogo`, `AltLogo`, `SmtpHost`, `SmtpUser`, `SmtpPassword`, `SmtpPort`, `Tema`, `IsActive`) VALUES
('http://www.samulas.com.tr/destek/', 'SAMULAŞ | Destek', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur</p>\r\n', '2022 © Copyright SAMULAŞ A.Ş. Tüm Hakları Saklıdır.', 'Bu web sitesi samulaş çalışanları destek için yazılmıştır.', 'PHP,', 'Cahit Can ÖZGEN | Yazılım Geliştirici', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur</p>\r\n', '+90 537 XXX XX XX', 'info@mucahittopal.com', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 'samulas', 'samulas', 'samulas', 'samulas', 'samulas', '', '', 'logo.png', 'footer_logo.png', 'samulas', 'samulas', 'samulas', '587', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE IF NOT EXISTS `icerik` (
`icerikId` int(11) NOT NULL,
  `icerikCategory` int(11) NOT NULL,
  `icerikBaslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerikYazi` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerikId`, `icerikCategory`, `icerikBaslik`, `icerikYazi`) VALUES
(1, 1, 'ERP SİSTEMİNE NASIL GİRİŞ YAPARIM?', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid modi, repudiandae quis saepe debitis veritatis mollitia voluptates minus, ullam ipsa iste nam quaerat! Tempore corrupti nihil quia aliquid laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, quas exercitationem, sequi dolor doloribus dolorum totam sed eaque temporibus a rem, voluptas suscipit incidunt nemo quasi labore dolores molestiae veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt harum accusamus fuga ea ipsum expedita fugit vitae dignissimos non, odio dolorem natus magni porro animi ad soluta voluptatem officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi reiciendis expedita quia non similique ullam ducimus quidem ut neque. Veniam esse a cumque quia animi, aspernatur incidunt qui! Repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, culpa! Est esse necessitatibus quibusdam accusantium maiores? Quos eius, nulla itaque atque optio enim! Optio error quae magni, quasi veritatis perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias quas dolores odio iste ad, eligendi consectetur reprehenderit ex quidem eveniet maiores. Velit sed voluptatem, numquam quos minima placeat dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas unde ea autem, cupiditate mollitia sapiente placeat molestias debitis hic facere rerum dolores qui est ex fugiat dignissimos exercitationem! Facere, placeat. localtime Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quod excepturi, sit reiciendis, libero suscipit nihil error consequuntur exercitationem at perspiciatis. Ea eaque rerum esse laboriosam maiores distinctio. Molestias, laudantium! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsum adipisci eveniet, eum officiis soluta quis repellat corporis consequatur voluptatibus. Beatae nulla placeat quaerat blanditiis quisquam architecto tenetur aperiam nesciunt? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis assumenda nesciunt omnis quos vero nemo repellat placeat! Deserunt beatae, sapiente delectus eos doloremque laborum nesciunt officia reprehenderit possimus quos voluptate! lorenm\r\n                         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur placeat enim assumenda fuga pariatur ratione officia debitis rem dolor culpa. Quam cumque commodi iure similique blanditiis tempore, nisi dolor maiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eos eius dolor amet modi, tempora ipsam vel! Quasi quidem iusto et quaerat optio, nihil necessitatibus maiores blanditiis ea, pariatur accusamus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam ab consequatur magnam aliquid neque sit corporis unde beatae fuga, vitae odio similique quasi, blanditiis culpa. Consectetur repellat aperiam explicabo maxime?'),
(2, 2, 'E-POSTA HATALARI', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid modi, repudiandae quis saepe debitis veritatis mollitia voluptates minus, ullam ipsa iste nam quaerat! Tempore corrupti nihil quia aliquid laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, quas exercitationem, sequi dolor doloribus dolorum totam sed eaque temporibus a rem, voluptas suscipit incidunt nemo quasi labore dolores molestiae veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt harum accusamus fuga ea ipsum expedita fugit vitae dignissimos non, odio dolorem natus magni porro animi ad soluta voluptatem officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi reiciendis expedita quia non similique ullam ducimus quidem ut neque. Veniam esse a cumque quia animi, aspernatur incidunt qui! Repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, culpa! Est esse necessitatibus quibusdam accusantium maiores? Quos eius, nulla itaque atque optio enim! Optio error quae magni, quasi veritatis perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias quas dolores odio iste ad, eligendi consectetur reprehenderit ex quidem eveniet maiores. Velit sed voluptatem, numquam quos minima placeat dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas unde ea autem, cupiditate mollitia sapiente placeat molestias debitis hic facere rerum dolores qui est ex fugiat dignissimos exercitationem! Facere, placeat. localtime Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quod excepturi, sit reiciendis, libero suscipit nihil error consequuntur exercitationem at perspiciatis. Ea eaque rerum esse laboriosam maiores distinctio. Molestias, laudantium! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsum adipisci eveniet, eum officiis soluta quis repellat corporis consequatur voluptatibus. Beatae nulla '),
(3, 1, 'YAZILIM SERVİSLERİ', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid modi, repudiandae quis saepe debitis veritatis mollitia voluptates minus, ullam ipsa iste nam quaerat! Tempore corrupti nihil quia aliquid laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, quas exercitationem, sequi dolor doloribus dolorum totam sed eaque temporibus a rem, voluptas suscipit incidunt nemo quasi labore dolores molestiae veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt harum accusamus fuga ea ipsum expedita fugit vitae dignissimos non, odio dolorem natus magni porro animi ad soluta voluptatem officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi reiciendis expedita quia non similique ullam ducimus quidem ut neque. Veniam esse a cumque quia animi, aspernatur incidunt qui! Repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, culpa! Est esse necessitatibus quibusdam accusantium maiores? Quos eius, nulla itaque atque optio enim! Optio error quae magni, quasi veritatis perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias quas dolores odio iste ad, eligendi consectetur reprehenderit ex quidem eveniet maiores. Velit sed voluptatem, numquam quos minima placeat dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas unde ea autem, cupiditate mollitia sapiente placeat molestias debitis hic facere rerum dolores qui est ex fugiat dignissimos exercitationem! Facere, placeat. localtime Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quod excepturi, sit reiciendis, libero suscipit nihil error consequuntur exercitationem at perspiciatis. Ea eaque rerum esse laboriosam maiores distinctio. Molestias, laudantium! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsum adipisci eveniet, eum officiis soluta quis repellat corporis consequatur voluptatibus. Beatae nulla placeat quaerat blanditiis quisquam architecto tenetur aperiam nesciunt? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis assumenda nesciunt omnis quos vero nemo repellat placeat! Deserunt beatae, sapiente delectus eos doloremque laborum nesciunt officia reprehenderit possimus quos voluptate! lorenm\r\n                         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur placeat enim assumenda fuga pariatur ratione officia debitis rem dolor culpa. Quam cumque commodi iure similique blanditiis tempore, nisi dolor maiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eos eius dolor amet modi, tempora ipsam vel! Quasi quidem iusto et quaerat optio, nihil necessitatibus maiores blanditiis ea, pariatur accusamus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam ab consequatur magnam aliquid neque sit corporis unde beatae fuga, vitae odio similique quasi, blanditiis culpa. Consectetur repellat aperiam explicabo maxime?');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`kategoriId` int(11) NOT NULL,
  `kategoriAdi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategoriAciklama` varchar(1000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategoriId`, `kategoriAdi`, `kategoriAciklama`) VALUES
(1, 'Destek', 'Bu bölüm destek bölümüdür.'),
(2, 'Yazılım', 'Bu bölüm yazılım bölümüdür.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
`UserID` int(11) NOT NULL,
  `Adi` varchar(50) NOT NULL DEFAULT '0',
  `Soyadi` varchar(50) NOT NULL DEFAULT '0',
  `TelNo` varchar(50) NOT NULL DEFAULT '0',
  `Email` varchar(50) NOT NULL DEFAULT '0',
  `Adres` varchar(100) NOT NULL DEFAULT '0',
  `KullaniciAdi` varchar(50) NOT NULL DEFAULT '0',
  `Sifre` varchar(50) NOT NULL DEFAULT '0',
  `Yetki` varchar(50) NOT NULL DEFAULT 'Personel',
  `IsActive` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`UserID`, `Adi`, `Soyadi`, `TelNo`, `Email`, `Adres`, `KullaniciAdi`, `Sifre`, `Yetki`, `IsActive`) VALUES
(1, 'Cahit Can', 'ÖZGEN', '0535 XXX XX XX', 'cahitcanozgen@gmail.com', 'SAMSUN', 'cahit', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Admin', 1),
(6, 'Hakan', 'SİNECEK', '0532 XXX XX XX', 'hakansinecek@gmail.com', 'SAMSUN', 'hsinecek', '69ca01aa8e773fec2ced6b7a0aa2c65e090d4c45', 'Admin', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oturumtakip`
--

CREATE TABLE IF NOT EXISTS `oturumtakip` (
`ID` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL DEFAULT '0',
  `basarili` varchar(50) NOT NULL DEFAULT '0',
  `proxy` varchar(50) NOT NULL DEFAULT '0',
  `hostadi` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Tablo döküm verisi `oturumtakip`
--

INSERT INTO `oturumtakip` (`ID`, `ip`, `basarili`, `proxy`, `hostadi`, `username`, `password`) VALUES
(44, '::1', '1', '', 'root-mtlive', '0', '0'),
(43, '::1', '1', '', 'root-mtlive', '0', '0'),
(42, '::1', '0', '', 'root-mtlive', 'admin', '12541254'),
(41, '::1', '1', '', 'root-mtlive', '0', '0'),
(45, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(46, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(47, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahitcanozgen', '1234'),
(48, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahitcanozgen', '123456'),
(49, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahitcanozgen', '12345'),
(50, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahi', '123456'),
(51, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahi', '123456'),
(52, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimkategorileri`
--

CREATE TABLE IF NOT EXISTS `resimkategorileri` (
`ID` int(11) NOT NULL,
  `KategoriAdi` varchar(50) DEFAULT NULL,
  `Aciklama` text,
  `IsActive` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `resimkategorileri`
--

INSERT INTO `resimkategorileri` (`ID`, `KategoriAdi`, `Aciklama`, `IsActive`) VALUES
(3, 'Bilgisayarlar', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(4, 'Evler', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(6, ' Araçlar', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE IF NOT EXISTS `resimler` (
`ID` int(11) NOT NULL,
  `KatID` int(11) DEFAULT NULL,
  `Resim` text,
  `ResimAdi` varchar(50) DEFAULT NULL,
  `ResimAciklamasi` longtext,
  `IsActive` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`ID`, `KatID`, `Resim`, `ResimAdi`, `ResimAciklamasi`, `IsActive`) VALUES
(6, 6, 'aeee.jpg', 'Garaj', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(7, 6, 'BlobServer.png', ' Blob', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(8, 6, 'elektrikli-araclar-batarya-sistemi.jpg', ' Elektrikli', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(9, 4, 'tersev.jpg', ' Ters Ev', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(10, 4, 'yuksekev.jpg', ' Yüksek Ev', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(11, 3, 'foto1.jpg', ' Bilgisyarlar', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videolar`
--

CREATE TABLE IF NOT EXISTS `videolar` (
`ID` int(11) NOT NULL,
  `Adi` varchar(50) NOT NULL DEFAULT '0',
  `Linki` varchar(200) NOT NULL DEFAULT '0',
  `Resim` varchar(200) NOT NULL DEFAULT '0',
  `IsActive` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `videolar`
--

INSERT INTO `videolar` (`ID`, `Adi`, `Linki`, `Resim`, `IsActive`) VALUES
(4, ' Sagopa Kajmer - Söylenecek Çok Şey Var (2017)', 'https://www.youtube.com/watch?v=IDKlHRqISNw', 'Adsiz.jpg', 1),
(5, ' Inna - Gimme Gimme', 'https://www.youtube.com/watch?v=Jr4TMIU9oQ4', 'inna.jpg', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
 ADD PRIMARY KEY (`icerikId`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kategoriId`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
 ADD PRIMARY KEY (`UserID`);

--
-- Tablo için indeksler `oturumtakip`
--
ALTER TABLE `oturumtakip`
 ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `resimkategorileri`
--
ALTER TABLE `resimkategorileri`
 ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
 ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `videolar`
--
ALTER TABLE `videolar`
 ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
MODIFY `icerikId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
MODIFY `kategoriId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `oturumtakip`
--
ALTER TABLE `oturumtakip`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- Tablo için AUTO_INCREMENT değeri `resimkategorileri`
--
ALTER TABLE `resimkategorileri`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `videolar`
--
ALTER TABLE `videolar`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
