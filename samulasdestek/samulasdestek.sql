-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Eyl 2022, 15:16:28
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `samulasdestek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminFirstName` varchar(50) NOT NULL,
  `adminLastName` varchar(50) NOT NULL,
  `adminEmailAddress` varchar(80) NOT NULL,
  `adminCreateDate` date NOT NULL DEFAULT current_timestamp(),
  `adminStatus` tinyint(4) NOT NULL,
  `adminUserName` varchar(20) NOT NULL,
  `adminPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`adminId`, `adminFirstName`, `adminLastName`, `adminEmailAddress`, `adminCreateDate`, `adminStatus`, `adminUserName`, `adminPassword`) VALUES
(1, 'HAKAN', 'SİNECEK', 'hakansinecek@gmail.com', '2022-09-10', 1, 'hsinecek', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categoryDescription` varchar(255) NOT NULL,
  `categoryDate` date NOT NULL DEFAULT current_timestamp(),
  `categoryStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`, `categoryDescription`, `categoryDate`, `categoryStatus`) VALUES
(1, 'Teknik Destek', 'Bu kategori Teknik Destek kategorisidir.', '2022-09-10', 0),
(2, 'E-Posta', 'Bu kategori E-Posta kategorisidir.', '2022-09-10', 1),
(3, 'Yazılım', 'Bu kategori Yazılım kategorisidir.', '2022-09-10', 1),
(4, 'Servisler', 'Bu kategori Servisler kategorisidir.', '2022-09-10', 1),
(5, 'Web Sayfaları ve Yönetimi', 'Bu kategori Web Sayfaları ve Yönetimi kategorisidir.', '2022-09-10', 1),
(6, 'ERP Yönetim Sistemleri', 'Bu bölüm ERP Yönetim Sistemleri bölümüdür.', '2022-09-15', 0),
(7, 'Tramvay Kontrol Formu', 'Bu bölüm Tramvay Kontrol Formu bölümüdür.', '2022-09-15', 1),
(8, 'Kurum İçi Mail Gönderme', 'Bu bölüm Kurum İçi Mail Gönderme bölümüdür.', '2022-09-15', 1),
(9, 'Vatman Takip', 'Bu bölüm Vatman Takip bölümüdür.', '2022-09-15', 0),
(10, 'Eğitim Evrakları', 'Bu bölüm Eğitim Evrakları bölümüdür.', '2022-09-15', 1),
(11, 'Raylı Sistem', 'Bu bölüm Raylı Sistem bölümüdür.', '2022-09-15', 1),
(12, 'Güvenlik Amirliği', 'Bu bölüm Güvenlik Amirliği bölümüdür.', '2022-09-15', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE `content` (
  `contentId` int(11) NOT NULL,
  `contentCategory` int(11) NOT NULL,
  `contentDate` date NOT NULL DEFAULT current_timestamp(),
  `contentTitle` varchar(150) NOT NULL,
  `contentDescription` varchar(255) NOT NULL,
  `contentText` text NOT NULL,
  `contentImage1` varchar(255) NOT NULL,
  `contentImage2` varchar(255) NOT NULL,
  `contentImage3` varchar(255) NOT NULL,
  `contentImage4` varchar(255) NOT NULL,
  `contentImage5` varchar(255) NOT NULL,
  `contentImage6` varchar(255) NOT NULL,
  `contentVideo` varchar(255) NOT NULL,
  `contentStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`contentId`, `contentCategory`, `contentDate`, `contentTitle`, `contentDescription`, `contentText`, `contentImage1`, `contentImage2`, `contentImage3`, `contentImage4`, `contentImage5`, `contentImage6`, `contentVideo`, `contentStatus`) VALUES
(1, 1, '2022-09-15', 'RAM Bellek Nasıl Temizlenir?', 'Bu makalede bilgisayarlarınızdaki RAM Belleğin nasıl temizlendiği anlatılacaktır.', 'ysaugjkhwsbdfcjkhbwdkjlfcnbwdfvljkwşoslıfhdjkcvoıwskjhndvfıojkwuhnvfgwşoldksjhnflıkwsusjfhdvcblıukjwhıukewjfsipşlkodjvcfolpışkjwhdnfvcıkouwjhfd', 'image.php', '', '', '', '', '', '', 0),
(2, 1, '2022-09-16', 'Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.', 'Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.', 'Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.Bu makalede Windows 10 Yazılım Güncellemesi Nasıl Yapılır? anlatılacaktır.', '', '', '', '', '', '', '', 1),
(3, 1, '2022-09-20', 'sdewsd', 'wsdswdw', 'dwdwqdwdwd', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `quickconnection`
--

CREATE TABLE `quickconnection` (
  `quickConnectionId` int(11) NOT NULL,
  `quickConnectionName` varchar(50) NOT NULL,
  `quickConnectionLUrl` varchar(255) NOT NULL,
  `quickConnectionStatus` tinyint(4) NOT NULL,
  `quickConnectionDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `websitesettings`
--

CREATE TABLE `websitesettings` (
  `websiteLogo` varchar(255) NOT NULL,
  `websiteTitle` varchar(100) NOT NULL,
  `websiteDescription` varchar(255) NOT NULL,
  `websiteUrl` varchar(255) NOT NULL,
  `websiteFooter` varchar(255) NOT NULL,
  `websiteStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`contentId`),
  ADD KEY `contentCategory` (`contentCategory`);

--
-- Tablo için indeksler `quickconnection`
--
ALTER TABLE `quickconnection`
  ADD PRIMARY KEY (`quickConnectionId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
  MODIFY `contentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `quickconnection`
--
ALTER TABLE `quickconnection`
  MODIFY `quickConnectionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`contentCategory`) REFERENCES `category` (`categoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
