-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 02 Eyl 2022, 15:59:28
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
('http://www.samulas.com.tr/destek/', 'SAMULAŞ | Destek', '<p>KLJDKJWDKLASOIJDOIWJDOIJHSDJFOIEHDFOIJWSDJPWOKLOUHSDUIGBJHCUYSDGHFLŞİLANDHKOWJklednfjklnsdkljşcnosışuhıdhbflwjhqbelıdfuhqwıuehdfğqşi</p>\r\n\r\n<p>qwoejhıdfowhcfpşwehfuıowehdfuıoşwecfhuıehdqw</p>\r\n\r\n<p>wohcfıwhfcılwughefcuıgwedcnasjkcoğ0qweu9dojhdnfjkoşedfhncfıldfqejhduıewhdıwsdşoıqohdopıhdjkoşcfqa</p>\r\n\r\n<p>lakjnlşakjncıkjdhfıhdshgfhhbdcjkdfhlşawuıdfhşjahdcşıluhdkl</p>\r\n\r\n<p>kamdcolnwc</p>\r\n', 'Copyright © 2022 SAMULAŞ A.Ş. Tüm Hakları Saklıdır.', 'Bu web sitesi samulaş çalışanları destek için yazılmıştır.', 'PHP,', 'Cahit Can ÖZGEN | Yazılım Geliştirici', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur</p>\r\n', '+90 537 XXX XX XX', 'info@mucahittopal.com', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 'samulas', 'samulas', 'samulas', 'samulas', 'samulas', '', '', 'logo.png', 'footer_logo.png', 'samulas', 'samulas', 'samulas', '587', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizlibaglanti`
--

CREATE TABLE IF NOT EXISTS `hizlibaglanti` (
`id` int(11) NOT NULL,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(10000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `hizlibaglanti`
--

INSERT INTO `hizlibaglanti` (`id`, `adi`, `url`) VALUES
(1, 'İnsan Kaynakları', 'http://samulas.com.tr/insan-kaynaklari/'),
(2, 'Sık Sorulan Sorular', 'http://samulas.com.tr/sik-sorulan-sorular/'),
(3, 'Kart Başvurusu', 'https://www.akillibiletim.com/BSV_FRM.aspx');

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
(1, 1, 'Yazılım Mimarileri', 'Layered (n-tier) architecture – Katmanlı (n-katmanlı) mimari\r\n\r\nBu yaklaşım muhtemelen en yaygın olanıdır. Java EE, Drupal ve Express gibi en büyük ve en iyi yazılım çerçevelerinin çoğu, bu yapı göz önüne alındığında inşa edildiğinden, onlarla oluşturulan pek çok uygulama doğal olarak katmanlı bir mimaride ortaya çıkmaktadır.\r\n\r\nPopüler web çerçevelerinin çoğunun sunduğu standart yazılım geliştirme yaklaşımı olan Model-View-Controller (MVC) yapısı açıkça katmanlı bir mimaridir.\r\n\r\nİlk yazılan programlar, tek katmanlı “Monolithic” olarak kodlanıyordu. Tek katmanlı uygulamalarda iş katmanı, sunum katmanı ve veritabanı katmanları tek bir bilgisayarda bulunuyorlardı. Buna en iyi örnek Adabas veritabanı sistemi verilebilir. Adabas sistemleri bir veritabanı ve bu veritabanına direkt sorgulamalar yapabilecek formlardan oluşmaktadır.\r\n\r\n \r\n\r\nBu yapıda bozulan kod bloğunun hatasının giderilmesi oldukça zordur. Çünkü o bölüm hata verdiğinde bütün sistemin çalışması durmaktadır.\r\n\r\n \r\n\r\nKatmanlı mimaride ise uygulamalar ayrı katmanlar halinde yazıldığından, yönetilebilmesi ve  değiştirilmesi oldukça kolay ve hızlıdır. Bu aslında bir çok programcının zaten bildiği fonksiyon yapısından farklı değildir ya da başka bir deyişle modüler programlama yapısı da denilebilir. Bu yapıda eğer programın çok uzun kodları olacaksa alt parçacıklara (fonksiyonlara) bölünür. Böylece hangi fonksiyonun ne iş yaptığı  belli olur ve kodlarda bir hata varsa ilgili fonksiyon değiştirilir, yazılımın tüm kodlarını değiştirmek gerekmez. Böylece kodların yönetimi kolaylaşır. MVC ile popüleritesini arttıran bir mimari olan katmanlı mimari yine en çok kullanılan yazılım mimarileri dizisinin başında gelmektedir.\r\n\r\n Event-driven architecture – Olay güdümlü mimari\r\n\r\nOlay odaklı mimari (EDA), bir sistemin durumundaki önemli değişikliklerin (olaylar olarak bilinir) üretimini, algılanmasını ve bu sisteme tepki göstermesini ve buna tepki verilmesini teşvik eden bir yazılım mimarisidir. Bu, birbirine kısmen bağlı yazılım bileşenleri ve hizmetleri arasında olayları ileten uygulamalar ve sistemlerin tasarımı ve uygulanması yoluyla gerçekleştirilir.\r\n\r\n \r\n\r\nBu mimariyi kullanan yazılımları programlama tekniğinde, olayları dinleyen fonksiyonlar yazılır. Beklenen olay numarası algılandığında, o olaya ilişkin alt işlev çağrılır. Beklenen olay karşısında bir fonksiyonun icra edilmesine olay yakalama (event capture) ya da sadece yakalama (capture) adı verilir. Beklenmeyen bir olay kodu geldiğine ise hiçbir işlem yapılmaz.\r\n\r\n \r\n\r\nMicrokernel architecture – Mikrokernel mimarisi\r\n\r\nMikrokernel mimarisi modeli (bazen eklenti mimari deseni olarak anılacaktır), ürün tabanlı uygulamaların uygulanması için doğal bir modeldir. Ürün tabanlı bir uygulama, paketlenmiş ve tipik bir üçüncü parti ürün olarak sürümlerde indirilebilecek bir uygulamadır. Bununla birlikte, birçok şirket ayrıca yazılım ürünleri gibi iç iş uygulamalarını, sürümleri, sürüm notları ve takılabilir özelliklerle eksiksiz olarak geliştirir ve yayımlar. Bunlar da bu desen için doğal bir uyum içindir. Mikrokernel mimarisi deseni, çekirdeğe eklenti olarak ek uygulama özellikleri eklemenize olanak tanır ve genişletilebilirlik özellik ayrımı ve izolasyon sağlar.\r\n\r\nMikrokernel mimari kalıbı, değişen sistem gereksinimlerine uyum sağlamalı yazılım sistemleri için geçerlidir. Minimal işlevsel bir çekirdeği genişletilmiş işlevsellikten ve müşteriye özel parçalardan ayırır. Mikrokernel aynı zamanda bu uzantıları takmak ve işbirliklerini koordine etmek için bir soket görevi görür.\r\n\r\nMicroservices architecture – Mikro hizmet mimarisi\r\n\r\nMikroservisler, SOA mimarisi ile yazılım geliştirenlerin tercih edebilecekleri bir mimaridir. Microservice Architecture olarak da bilinmektedir. Bu mimarinin de avantaj ve dezavantajları vardır.\r\nBüyük servisleri küçük parçalara ayırarak yönetilmesi , geliştirilmesi ve silinip atılması oldukça kolay olan bir yaklaşımı Mikroservis mimarisi geliştiriciye sunabilmektedir. Ancak küçük parçalara ayrılan ve birbirinden bağımsız servisler olarak çalışan mikro servislerin avantajlarının yanı sıra güçlükleri de bulunmaktadır. Mikroservisler iş mantıklarını ve kurallarını kendi içinde tutmalıdırlar. “Ne yapıldığı” servisler tarafında, “nasıl yapıldığı” ise servisleri kullanan uygulamalar tarafında olmalıdır.\r\n\r\n \r\n\r\nİş kabiliyetlerine göre ayrıştırılan servisler, tek başlarına çalışabilen servisler olmalıdır. Böylece platform, sistem, dil ya da framework bağımlılıkları kalmamaktadır. Örneğin bir e-ticaret sitesindeki ürün görsellerini sağlayan servis node.js ile kodlanırken , kategori yönetimini sağlayan servisler .NET ile geliştirilebilir. İstatistiksel verileri sağlayan kısımlar R dili ile yazılabilirken, ödeme servisleri Scala ile yapılabilir. Dolayısıyla kimi servisler Windows platformda kimi servisler Linux platformda çalışabilmektedir.\r\n\r\nSpace-based architecture-Uzay temelli mimari\r\n\r\nUzay tabanlı mimari ( SBA ), durumsal, yüksek performanslı uygulamaların doğrusal ölçeklendirilebilirliğine ulaşmak için kullanılan bir yazılım mimarisi desenidir .  REST, SOA ve EDA unsurlarının çoğunu barındırır. Uzay tabanlı bir mimari ile uygulamalar, işleme birimleri (PU) olarak bilinen kendi kendine yeterli birimlerden oluşur. Bu birimler birbirinden bağımsızdır, böylece uygulama daha fazla birim ekleyerek ölçeklendirilebilir. SBA modeli, Google, Amazon.com ve diğer tanınmış şirketler tarafından kullanılan paylaşımsız mimari (SN) gibi uygulama ölçeklenebilirlik sorununu ele alan başarılı olduğu kanıtlanmış diğer kalıplarla yakından ilişkilidir. Bu model, menkul kıymet sektöründe ölçeklenebilir elektronik menkul kıymet ticareti uygulamaları için birçok firma tarafından da uygulanmıştır.'),
(2, 2, 'E-Posta Hataları Nasıl Düzeltilir?', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid modi, repudiandae quis saepe debitis veritatis mollitia voluptates minus, ullam ipsa iste nam quaerat! Tempore corrupti nihil quia aliquid laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, quas exercitationem, sequi dolor doloribus dolorum totam sed eaque temporibus a rem, voluptas suscipit incidunt nemo quasi labore dolores molestiae veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt harum accusamus fuga ea ipsum expedita fugit vitae dignissimos non, odio dolorem natus magni porro animi ad soluta voluptatem officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi reiciendis expedita quia non similique ullam ducimus quidem ut neque. Veniam esse a cumque quia animi, aspernatur incidunt qui! Repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, culpa! Est esse necessitatibus quibusdam accusantium maiores? Quos eius, nulla itaque atque optio enim! Optio error quae magni, quasi veritatis perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias quas dolores odio iste ad, eligendi consectetur reprehenderit ex quidem eveniet maiores. Velit sed voluptatem, numquam quos minima placeat dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas unde ea autem, cupiditate mollitia sapiente placeat molestias debitis hic facere rerum dolores qui est ex fugiat dignissimos exercitationem! Facere, placeat. localtime Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quod excepturi, sit reiciendis, libero suscipit nihil error consequuntur exercitationem at perspiciatis. Ea eaque rerum esse laboriosam maiores distinctio. Molestias, laudantium! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsum adipisci eveniet, eum officiis soluta quis repellat corporis consequatur voluptatibus. Beatae nulla '),
(3, 1, 'ERP Sistemi Genel Kullanımı', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid modi, repudiandae quis saepe debitis veritatis mollitia voluptates minus, ullam ipsa iste nam quaerat! Tempore corrupti nihil quia aliquid laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, quas exercitationem, sequi dolor doloribus dolorum totam sed eaque temporibus a rem, voluptas suscipit incidunt nemo quasi labore dolores molestiae veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt harum accusamus fuga ea ipsum expedita fugit vitae dignissimos non, odio dolorem natus magni porro animi ad soluta voluptatem officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi reiciendis expedita quia non similique ullam ducimus quidem ut neque. Veniam esse a cumque quia animi, aspernatur incidunt qui! Repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, culpa! Est esse necessitatibus quibusdam accusantium maiores? Quos eius, nulla itaque atque optio enim! Optio error quae magni, quasi veritatis perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, alias quas dolores odio iste ad, eligendi consectetur reprehenderit ex quidem eveniet maiores. Velit sed voluptatem, numquam quos minima placeat dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas unde ea autem, cupiditate mollitia sapiente placeat molestias debitis hic facere rerum dolores qui est ex fugiat dignissimos exercitationem! Facere, placeat. localtime Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quod excepturi, sit reiciendis, libero suscipit nihil error consequuntur exercitationem at perspiciatis. Ea eaque rerum esse laboriosam maiores distinctio. Molestias, laudantium! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsum adipisci eveniet, eum officiis soluta quis repellat corporis consequatur voluptatibus. Beatae nulla placeat quaerat blanditiis quisquam architecto tenetur aperiam nesciunt? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis assumenda nesciunt omnis quos vero nemo repellat placeat! Deserunt beatae, sapiente delectus eos doloremque laborum nesciunt officia reprehenderit possimus quos voluptate! lorenm\r\n                         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur placeat enim assumenda fuga pariatur ratione officia debitis rem dolor culpa. Quam cumque commodi iure similique blanditiis tempore, nisi dolor maiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eos eius dolor amet modi, tempora ipsam vel! Quasi quidem iusto et quaerat optio, nihil necessitatibus maiores blanditiis ea, pariatur accusamus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam ab consequatur magnam aliquid neque sit corporis unde beatae fuga, vitae odio similique quasi, blanditiis culpa. Consectetur repellat aperiam explicabo maxime?');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

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
(52, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(53, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahit', '12234'),
(54, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(55, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(56, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahitcanozgen', '1234'),
(57, '::1', '0', '', 'WIN-S17NUBBER9T', 'cahitcanozgen', '12345'),
(58, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(59, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(60, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(61, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0'),
(62, '::1', '1', '', 'WIN-S17NUBBER9T', '0', '0');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`ID`, `KatID`, `Resim`, `ResimAdi`, `ResimAciklamasi`, `IsActive`) VALUES
(6, 6, 'aeee.jpg', 'Garaj', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(7, 6, 'BlobServer.png', ' Blob', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(8, 6, 'elektrikli-araclar-batarya-sistemi.jpg', ' Elektrikli', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(9, 4, 'tersev.jpg', ' Ters Ev', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(10, 4, 'yuksekev.jpg', ' Yüksek Ev', ' Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(11, 3, 'foto1.jpg', ' Bilgisyarlar', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur', 1),
(12, 3, 'videokapak.PNG', ' DENEME', 'Bu resim deneme resimidir.', 1);

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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yardim`
--

CREATE TABLE IF NOT EXISTS `yardim` (
`id` int(11) NOT NULL,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(10000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `yardim`
--

INSERT INTO `yardim` (`id`, `adi`, `url`) VALUES
(1, 'Kayıp Eşya', 'http://samulas.com.tr/kayip-esya/'),
(2, 'Bilgilendirme', 'http://samulas.com.tr/bilgilendirme/');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hizlibaglanti`
--
ALTER TABLE `hizlibaglanti`
 ADD PRIMARY KEY (`id`);

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
-- Tablo için indeksler `yardim`
--
ALTER TABLE `yardim`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hizlibaglanti`
--
ALTER TABLE `hizlibaglanti`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- Tablo için AUTO_INCREMENT değeri `resimkategorileri`
--
ALTER TABLE `resimkategorileri`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `videolar`
--
ALTER TABLE `videolar`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `yardim`
--
ALTER TABLE `yardim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
