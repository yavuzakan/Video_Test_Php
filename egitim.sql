-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 31 Ara 2022, 08:34:03
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `egitim`
--
CREATE DATABASE IF NOT EXISTS `egitim` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `egitim`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `ans1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `ans2` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `ans3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `ans4` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `answer`
--

INSERT INTO `answer` (`id`, `ans1`, `ans2`, `ans3`, `ans4`) VALUES
(50, '', '17', 'Başlat-Sağ tık-Yeni', '20221226131128'),
(51, '', '17', 'Basla-Ayarlar-Denetim Masası', '20221226131139'),
(52, '', '17', 'Baslat-Programlar-Donatılar', '20221226131148'),
(53, '', '17', 'Baslat-Ayarlar', '20221226131157'),
(54, '', '17', 'Baslat-Tüm Uygulamalar-Office', '20221226131208'),
(55, '', '18', 'Görünüm', '20221226131246'),
(56, '', '18', 'Açıklama', '20221226131252'),
(57, '', '18', 'Simge', '20221226131257'),
(58, '', '18', 'Sütun', '20221226131302'),
(59, '', '18', 'Satır', '20221226131307'),
(60, '', '19', 'Veri', '20221226131348'),
(61, '', '19', 'Tablo', '20221226131352'),
(62, '', '19', 'Sol Tık-Eklemek ', '20221226131401'),
(63, '', '19', 'Sağ Tık-Ekle', '20221226131408'),
(64, '', '19', 'Biçim', '20221226131415'),
(65, '', '20', 'Görünüm', '20221226131445'),
(66, '', '20', 'Araçlar', '20221226131450'),
(67, '', '20', 'Kes', '20221226131455'),
(68, '', '20', 'Düzen', '20221226131459'),
(69, '', '20', 'Dosya', '20221226131504'),
(70, '', '21', '1000', '20221226131532'),
(71, '', '21', '200', '20221226131535'),
(72, '', '21', '250', '20221226131539'),
(73, '', '21', '500', '20221226131542'),
(74, '', '21', '400', '20221226131546');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders`
--

CREATE TABLE `ders` (
  `id` int(11) NOT NULL,
  `ders1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `ders2` text COLLATE utf8mb4_bin NOT NULL,
  `ders3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `ders4` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `ders5` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `ders`
--

INSERT INTO `ders` (`id`, `ders1`, `ders2`, `ders3`, `ders4`, `ders5`) VALUES
(5, 'EĞER (IF) Fonksiyonu  Excel Dersleri', 'EĞER (IF) Fonksiyonu  Excel Dersleri', 'yavuz.akan@gmail.com', '2022/12/26 12:56:28', 'EĞER (IF) Fonksiyonu  Excel Dersleri.mp4'),
(6, 'EĞERYOKSA (IFNA) Fonksiyonu  Excel Dersleri', 'EĞERYOKSA (IFNA) Fonksiyonu  Excel Dersleri', 'yavuz.akan@gmail.com', '2022/12/26 12:57:27', 'EĞERYOKSA (IFNA) Fonksiyonu  Excel Dersleri.mp4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersata`
--

CREATE TABLE `dersata` (
  `id` int(11) NOT NULL,
  `dersid` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `userid` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `aktif` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `kontrol` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `dk` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `dersata`
--

INSERT INTO `dersata` (`id`, `dersid`, `userid`, `date`, `aktif`, `kontrol`, `dk`) VALUES
(37, '5', '7', '2022/12/26 12:57:14', '2022/12/26 14:43:19', '5-7', '278.357162'),
(38, '5', '6', '2022/12/26 12:57:16', '0', '5-6', '0'),
(39, '5', '5', '2022/12/26 12:57:17', '0', '5-5', '0'),
(40, '6', '7', '2022/12/26 14:36:35', '2022/12/26 14:57:35', '6-7', '38.721872'),
(41, '6', '5', '2022/12/26 14:36:35', '0', '6-5', '0'),
(42, '6', '6', '2022/12/26 14:36:35', '0', '6-6', '0'),
(43, '6', '1', '2022/12/26 14:36:35', '2022/12/26 14:37:33', '6-1', '37.042963'),
(47, '5', '1', '2022/12/26 14:36:41', '0', '5-1', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersbasla`
--

CREATE TABLE `dersbasla` (
  `id` int(11) NOT NULL,
  `dersid` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `userid` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `tarih` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `bitir` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `dersbasla`
--

INSERT INTO `dersbasla` (`id`, `dersid`, `userid`, `tarih`, `bitir`, `username`) VALUES
(104, '6', '1', '2022/12/26 14:36:44', '2022/12/26 14:37:33', 'yavuz.akan@gmail.com'),
(105, '5', '7', '2022/12/26 14:38:25', '2022/12/26 14:43:19', 'ali.arslan@fps.com'),
(106, '6', '7', '2022/12/26 14:56:47', '2022/12/26 14:57:35', 'ali.arslan@fps.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `file1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `file2` text COLLATE utf8mb4_bin NOT NULL,
  `file3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `file4` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `file5` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `file6` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `file7` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `file8` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `file9` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `file`
--

INSERT INTO `file` (`id`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `file9`) VALUES
(9, 'Ehliyet', 'Yavuz Akan Ehliyet', '20221226151001.jpg', 'yavuz.akan@gmail.com', '2022/12/26 15:10:01', 'yeni-tip-ehliyetler.jpg', '', '0', '20221226151001.jpg'),
(10, 'Diploma - Lise', 'Lise Diploması', '20221226151147.jpg', 'yavuz.akan@gmail.com', '2022/12/26 15:11:47', '6b54d-lise-diploma.jpg', '', '0', '20221226151147.jpg'),
(11, 'Üniversite Diploması.', '', '20221226151209.jpg', 'yavuz.akan@gmail.com', '2022/12/26 15:12:09', 'eimzadiplomaornek_kmu2.jpg', '', '0', '20221226151209.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `info1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info2` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info4` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info5` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `info`
--

INSERT INTO `info` (`id`, `info1`, `info2`, `info3`, `info4`, `info5`) VALUES
(5, 'Okul', 'BöLüm', 'Durum', 'Yıl 1', 'Yıl 2'),
(6, 'Ehliyet', 'Sınıf', 'Yıl ', '', ''),
(7, 'Sertifika', 'Sınıf', 'Kurum', 'Yıl 1', 'Yıl 2'),
(8, 'Askerlik Durumu', 'Durum', 'Tecil Yılı', 'Terhis Yılı', 'Rapor Durumu'),
(9, 'Yabancı Dil', 'Okuma', 'Yazma', 'Konuşma', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `infoperson`
--

CREATE TABLE `infoperson` (
  `id` int(11) NOT NULL,
  `infoid` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `personid` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `info1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info2` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info4` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `info5` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `infoperson`
--

INSERT INTO `infoperson` (`id`, `infoid`, `personid`, `info1`, `info2`, `info3`, `info4`, `info5`) VALUES
(15, '9', '1', 'İngilizce', 'B1', 'B1', 'A2', ''),
(16, '8', '1', 'Yapıldı.', 'Yapıldı.', '-', '2012', '-'),
(17, '6', '1', 'Ehliyet', 'B', '2019', '', ''),
(18, '5', '1', 'Hadımköy Lisesi', 'Bilgisayar Yazılım', 'MEZUN', '2003', '2006'),
(19, '5', '1', 'Çanakkale Onsekiz Mart Üniversitesi', 'e-Ticaret', 'MEZUN', '2006', '2008'),
(20, '5', '1', 'Anadolu Üniversitesi', 'İşletme', 'MEZUN', '2008', '2010');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `que1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `que2` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `que3` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `question`
--

INSERT INTO `question` (`id`, `que1`, `que2`, `que3`) VALUES
(17, 'Microsoft Excel uygulamasını başlatmanın yolu aşağıdakilerden hangisidir?', '6', '2022/12/26 13:10:55'),
(18, 'Klavyeden yazamadığımız özel karakterler veya sembollerin eklenmesini sağlayan komut asağıdakilerden hangisinde doğru olarak verilmistir?', '6', '2022/12/26 13:12:28'),
(19, 'Satır ve Sütun eklemek için asağıdaki menülerden hangisi kullanılmalıdır?', '6', '2022/12/26 13:13:20'),
(20, 'Asağıdaki seçeneklerden hangisi Excel program menüsü değildir?', '6', '2022/12/26 13:14:30'),
(21, 'Görünüm Menüsünde yer alan “Yakınlastır” komutu ile görünüm en fazla yüzde kaç oranında büyültülebilir?', '6', '2022/12/26 13:15:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `res1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res2` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res4` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res5` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res6` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res7` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res8` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `res9` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `result`
--

INSERT INTO `result` (`id`, `res1`, `res2`, `res3`, `res4`, `res5`, `res6`, `res7`, `res8`, `res9`) VALUES
(14, 'yavuz.akan@gmail.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Microsoft Excel uygulamasını başlatmanın yolu aşağıdakilerden hangisidir?', '17', 'Baslat-Tüm Uygulamalar-Office', 'yavuz.akan@gmail.com', '2022/12/26 13:16:29', '6-17-1'),
(15, 'yavuz.akan@gmail.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Klavyeden yazamadığımız özel karakterler veya sembollerin eklenmesini sağlayan komut asağıdakilerden hangisinde doğru olarak verilmistir?', '18', 'Simge', 'yavuz.akan@gmail.com', '2022/12/26 13:16:35', '6-18-1'),
(16, 'yavuz.akan@gmail.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Satır ve Sütun eklemek için asağıdaki menülerden hangisi kullanılmalıdır?', '19', 'Sol Tık-Eklemek ', 'yavuz.akan@gmail.com', '2022/12/26 13:16:37', '6-19-1'),
(17, 'yavuz.akan@gmail.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Asağıdaki seçeneklerden hangisi Excel program menüsü değildir?', '20', 'Araçlar', 'yavuz.akan@gmail.com', '2022/12/26 13:16:40', '6-20-1'),
(18, 'yavuz.akan@gmail.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Görünüm Menüsünde yer alan “Yakınlastır” komutu ile görünüm en fazla yüzde kaç oranında büyültülebilir?', '21', '400', 'yavuz.akan@gmail.com', '2022/12/26 13:16:45', '6-21-1'),
(19, 'ali.arslan@fps.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Microsoft Excel uygulamasını başlatmanın yolu aşağıdakilerden hangisidir?', '17', 'Baslat-Ayarlar', 'ali.arslan@fps.com', '2022/12/26 14:58:09', '6-17-7'),
(20, 'ali.arslan@fps.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Klavyeden yazamadığımız özel karakterler veya sembollerin eklenmesini sağlayan komut asağıdakilerden hangisinde doğru olarak verilmistir?', '18', 'Sütun', 'ali.arslan@fps.com', '2022/12/26 14:58:17', '6-18-7'),
(21, 'ali.arslan@fps.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Satır ve Sütun eklemek için asağıdaki menülerden hangisi kullanılmalıdır?', '19', 'Sağ Tık-Ekle', 'ali.arslan@fps.com', '2022/12/26 14:58:23', '6-19-7'),
(22, 'ali.arslan@fps.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Asağıdaki seçeneklerden hangisi Excel program menüsü değildir?', '20', 'Kes', 'ali.arslan@fps.com', '2022/12/26 14:58:31', '6-20-7'),
(23, 'ali.arslan@fps.com', 'EXCEL ÇALIŞMA SORULARI', '6', 'Görünüm Menüsünde yer alan “Yakınlastır” komutu ile görünüm en fazla yüzde kaç oranında büyültülebilir?', '21', '400', 'ali.arslan@fps.com', '2022/12/26 14:58:34', '6-21-7');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `testata`
--

CREATE TABLE `testata` (
  `id` int(11) NOT NULL,
  `testid` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `userid` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `aktif` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `kontrol` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `testata`
--

INSERT INTO `testata` (`id`, `testid`, `userid`, `date`, `aktif`, `kontrol`) VALUES
(94, '4', '3', '2022/07/25 13:55:19', '2022/07/25 15:21:59', '4-3'),
(95, '4', '4', '2022/07/25 13:55:19', '2022/07/26 22:31:46', '4-4'),
(96, '4', '2', '2022/07/25 13:55:19', '0', '4-2'),
(97, '4', '1', '2022/07/25 13:55:19', '2022/12/22 14:28:03', '4-1'),
(102, '6', '7', '2022/12/26 13:16:09', '2022/12/26 14:58:39', '6-7'),
(103, '6', '5', '2022/12/26 13:16:09', '0', '6-5'),
(104, '6', '6', '2022/12/26 13:16:09', '0', '6-6'),
(105, '6', '1', '2022/12/26 13:16:09', '2022/12/26 14:59:36', '6-1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `testname`
--

CREATE TABLE `testname` (
  `id` int(11) NOT NULL,
  `testname1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `testname2` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `testname3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `testname4` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `testname`
--

INSERT INTO `testname` (`id`, `testname1`, `testname2`, `testname3`, `testname4`) VALUES
(6, 'EXCEL ÇALIŞMA SORULARI', 'yavuz.akan@gmail.com', '2022/12/26', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user1` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `user2` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `user3` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `user4` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `user5` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `user6` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `user1`, `user2`, `user3`, `user4`, `user5`, `user6`) VALUES
(1, 'yavuz.akan@gmail.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'yavuz çağatay akan', 'admin', '2022/05/26 10:51:05', '1'),
(5, 'damla.onur@fps.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Yağmur Damla Onur SAVAŞ', 'user', '2022/12/23 11:21:52', '1'),
(6, 'huseyin.yilmaz@fps.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Hüseyin Yılmaz', 'user', '2022/12/23 11:22:28', '1'),
(7, 'ali.arslan@fps.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Ali Arslan', 'user', '2022/12/23 11:22:54', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `time` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `video` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `tarih` varchar(250) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ders`
--
ALTER TABLE `ders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dersata`
--
ALTER TABLE `dersata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kontrol` (`kontrol`);

--
-- Tablo için indeksler `dersbasla`
--
ALTER TABLE `dersbasla`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `infoperson`
--
ALTER TABLE `infoperson`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `testata`
--
ALTER TABLE `testata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kontrol` (`kontrol`);

--
-- Tablo için indeksler `testname`
--
ALTER TABLE `testname`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user1` (`user1`);

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Tablo için AUTO_INCREMENT değeri `ders`
--
ALTER TABLE `ders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `dersata`
--
ALTER TABLE `dersata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `dersbasla`
--
ALTER TABLE `dersbasla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Tablo için AUTO_INCREMENT değeri `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `infoperson`
--
ALTER TABLE `infoperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `testata`
--
ALTER TABLE `testata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Tablo için AUTO_INCREMENT değeri `testname`
--
ALTER TABLE `testname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
