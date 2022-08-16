-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Ağu 2022, 18:45:31
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
-- Tablo için tablo yapısı `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`categoryId` int(11) NOT NULL,
  `categoryName` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `categoryDescription` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `categoryStatus` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`, `categoryDescription`, `categoryStatus`) VALUES
(1, 'Teknik Destek', 'Bu bölüm Teknik Destek bölümüdür.', 1),
(2, 'E-Posta', 'Bu bölüm E-Posta bölümüdür.', 1),
(3, 'Servis', 'Bu bölüm Servis bölümüdür.', 1),
(4, 'Destek', 'Bu bölüm Destek bölümüdür.', 1),
(5, 'Bilgisayar Kullanımı', 'Bu bölüm Bilgisayar Kullanımı bölümür.', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE IF NOT EXISTS `content` (
`contentId` int(11) NOT NULL,
  `contentCategory` int(11) NOT NULL,
  `contentHeader` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentText` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `contentImage1` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage2` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage3` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage4` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage5` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage6` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage7` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage8` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage9` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentImage10` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentVideo` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `contentStatus` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`contentId`, `contentCategory`, `contentHeader`, `contentText`, `contentImage1`, `contentImage2`, `contentImage3`, `contentImage4`, `contentImage5`, `contentImage6`, `contentImage7`, `contentImage8`, `contentImage9`, `contentImage10`, `contentVideo`, `contentStatus`) VALUES
(1, 1, 'ERP GİRİŞ', 'İşyeri yalnızlığı, bireyin iş hayatında kurduğu zayıf ilişkilerden kaynaklanan ve stres yaratan\r\ndurum olarak tanımlanmaktadır. Diğer taraftan işkoliklik ise, genel olarak aşırı bir şekilde çalışmak\r\niçin kontrol edilemeyen ve zorlayıcı bir ihtiyaç olarak tanımlanmaktadır. Bu çalışmanın amacı işyeri\r\nyalnızlığının iki boyutu olan duygusal yalnızlık ve sosyal yalnızlığın işkolikliğin iki boyutu olan aşırı\r\nçalışma ve zorlayıcı çalışma üzerindeki etkilerini belirleyebilmektir. Bu amaç kapsamında, Kardemir\r\nA.Ş''de çalışmakta olan 413 işçi, memur ve yöneticiden anket yöntemi kullanılarak veriler elde\r\nedilmiştir. Hipotezleri test etmek amacıyla, yapısal eşitlik modellemesi kapsamında oluşturulan yol\r\nanalizinden yararlanılmıştır. Çalışmanın sonucunda, duygusal yalnızlığın aşırı çalışma ve zorlayıcı\r\nçalışma davranışlarını arttırdığı belirlenmiştir. Buna karşılık sosyal yalnızlık ile aşırı çalışma ve\r\nzorlayıcı çalışma davranışları arasında anlamlı bir ilişki tespit edilememiştir', 'image1.png', 'image2.png', 'image3.png', '', '', '', '', '', '', '', 'video.mp4', 1),
(2, 2, 'E-POSTA HATASI', 'E-posta gönderemiyorsanız gereksiz kutunuzu temizlerseniz sorun çözülecektir.', '', '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `help`
--

CREATE TABLE IF NOT EXISTS `help` (
`helpId` int(11) NOT NULL,
  `helpName` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `helpLink` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `helpStatus` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `quickconnection`
--

CREATE TABLE IF NOT EXISTS `quickconnection` (
`quickConnectionId` int(11) NOT NULL,
  `quickConnectionName` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `quickConnectionLink` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `quickConnectionStatus` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userId` int(11) NOT NULL,
  `userImage` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `userFirstName` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `userLastName` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `userEmailAddress` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `userUserName` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `userPassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `userStatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`categoryId`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`contentId`);

--
-- Tablo için indeksler `help`
--
ALTER TABLE `help`
 ADD PRIMARY KEY (`helpId`);

--
-- Tablo için indeksler `quickconnection`
--
ALTER TABLE `quickconnection`
 ADD PRIMARY KEY (`quickConnectionId`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
MODIFY `contentId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `help`
--
ALTER TABLE `help`
MODIFY `helpId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `quickconnection`
--
ALTER TABLE `quickconnection`
MODIFY `quickConnectionId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
