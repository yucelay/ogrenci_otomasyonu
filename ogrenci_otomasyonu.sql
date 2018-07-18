-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Ara 2016, 13:12:44
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ogrenci_otomasyonu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `akademisyen`
--

CREATE TABLE IF NOT EXISTS `akademisyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `k_adi` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(10) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ders` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bolum` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `akademisyen`
--

INSERT INTO `akademisyen` (`id`, `ad`, `soyad`, `k_adi`, `sifre`, `ders`, `bolum`) VALUES
(1, 'Ahmet', 'aaa', 'ahmet', '8', 'Matematik', 'Bilgisayar Mühendisliği');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `akademisyen_duyurular`
--

CREATE TABLE IF NOT EXISTS `akademisyen_duyurular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `konu` varchar(50) NOT NULL,
  `icerik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alinan_dersler`
--

CREATE TABLE IF NOT EXISTS `alinan_dersler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ogrNo` int(11) NOT NULL,
  `dersKodu` varchar(10) NOT NULL,
  `dersAdi` varchar(20) NOT NULL,
  `onay` int(11) NOT NULL,
  `devamsizlik` int(11) NOT NULL,
  `vize` int(11) NOT NULL,
  `finalNotu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Tablo döküm verisi `alinan_dersler`
--

INSERT INTO `alinan_dersler` (`id`, `ogrNo`, `dersKodu`, `dersAdi`, `onay`, `devamsizlik`, `vize`, `finalNotu`) VALUES
(61, 14260807, 'MAT272', 'Matematik', 0, 1, 46, 89),
(62, 14260807, 'FIZ104', 'Fizik', 0, 0, 25, 88),
(63, 89760805, 'FIZ104', 'Fizik', 0, 0, 0, 0),
(64, 89760805, '124fgh', 'kljlaks', 0, 0, 0, 0),
(65, 14260807, '124fgh', 'kljlaks', 0, 0, 0, 0),
(66, 14260807, '124fgh', 'kljlaks', 0, 0, 0, 0),
(67, 14260807, 'Vt456', 'Veri Taban?', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE IF NOT EXISTS `dersler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dersKodu` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `dersAdi` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `akademisyen` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bolum` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kredi` int(11) NOT NULL,
  `akts` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`id`, `dersKodu`, `dersAdi`, `akademisyen`, `bolum`, `kredi`, `akts`) VALUES
(4, 'MAT272', 'Matematik', 'Ali gfg', 'Bilgisayar Mühendisliği', 4, 6),
(5, 'FIZ104', 'Fizik', 'Veli abc', 'Bilgisayar Mühendisliği', 4, 4),
(6, '124fgh', 'kljlaks', 'Ali gfg', 'Bilgisayar Mühendisliği', 2, 5),
(7, 'Vt456', 'Veri Tabanı', 'Veli abc', 'Bilgisayar Mühendisliği', 4, 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `idari`
--

CREATE TABLE IF NOT EXISTS `idari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `k_adi` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `idari`
--

INSERT INTO `idari` (`id`, `ad`, `soyad`, `k_adi`, `sifre`) VALUES
(1, 'idariAAA', 'idariAbc', 'idari', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `idari_duyurular`
--

CREATE TABLE IF NOT EXISTS `idari_duyurular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `konu` text NOT NULL,
  `icerik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `idari_duyurular`
--

INSERT INTO `idari_duyurular` (`id`, `konu`, `icerik`) VALUES
(1, 'fsdgsdg', 'fsdgsdg'),
(2, 'kkkkkkkk', 'kkkkkkkkkkhgj'),
(3, '123333sdafsda', 'dsafasfasfasfasfasf\r\nsadfl?kasfljasdkljfklsdajfklajsdflkas\r\nasdl?fjlkasdjfklsad'),
(4, 'konusu', 'kljsadklfjksaljfklasjfklsa?jfl524545\r\nsdal?fkjklsajfklsajfklasjfkljasklfjaskl'),
(5, 'dsafsafsdafasf', 'sdafasfsadfasd'),
(6, 'sadfaf', 'sadfasfsaf\r\nsdafljkdsaklfl?sadjflkasd\r\nsadlkfjlksadjfkl755454\r\n'),
(7, 'hhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhh'),
(8, '7777777777', 'dfhdghhhdhdhdh');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE IF NOT EXISTS `ogrenci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ogrNo` int(10) NOT NULL,
  `adi` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sinif` int(10) NOT NULL,
  `fakulte` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bolum` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `donem` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `devamsizlik` int(11) NOT NULL,
  `danisman` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `profilFoto` varchar(60) NOT NULL,
  `sifre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `ogrNo`, `adi`, `soyadi`, `sinif`, `fakulte`, `bolum`, `donem`, `devamsizlik`, `danisman`, `profilFoto`, `sifre`) VALUES
(1, 14260807, 'Yücel', 'AY', 3, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '2016-2017 Bahar Dönemi', 0, 'ddd', '', '123'),
(2, 13260805, 'aaa', 'aa', 0, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '', 8, 'Bilgisayar Mühendisliği', '', '8'),
(3, 11260809, 'eeee', 'eeee', 2, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '', 7, 'Bilgisayar Mühendisliği', '', '77'),
(4, 18256321, 'dsfgdfsg', 'fsdgfsdg', 1, 'Eğitim Fakültesi', 'Elektrik ve Elektronik Mühendisliği', '', 6, 'Mekatronik Mühendisliği', '', '6'),
(5, 25260805, 'kkkk', 'fdsg', 2, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '', 5, 'Bilgisayar Mühendisliği', '', '5'),
(6, 13265265, 'yyy', 'sdaf', 1, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '', 2, 'Bilgisayar Mühendisliği', '', '2'),
(7, 15690805, 'eeee', 'eeee', 1, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '', 0, 'Bilgisayar Mühendisliği', '', 'e'),
(8, 89760805, 'yyyy', 'yy', 1, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '', 9, 'Bilgisayar Mühendisliği', '', '8'),
(9, 15634805, 'ty', 'tty', 1, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', '', 0, 'Bilgisayar Mühendisliği', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
