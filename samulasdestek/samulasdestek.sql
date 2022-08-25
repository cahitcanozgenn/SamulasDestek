-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Ağu 2022, 07:26:11
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

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
 ADD PRIMARY KEY (`icerikId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
MODIFY `icerikId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
