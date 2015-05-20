-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2014 at 10:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soru_cevap`
--

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_ismi` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `rol_ismi`) VALUES
(1, 'Ogrenci'),
(2, 'Ogretmen'),
(3, 'Editor'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `secenekler`
--

CREATE TABLE IF NOT EXISTS `secenekler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `secenek` varchar(50) NOT NULL,
  `soru_fk` int(11) NOT NULL,
  `dogru_mu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `secenekler`
--

INSERT INTO `secenekler` (`id`, `secenek`, `soru_fk`, `dogru_mu`) VALUES
(1, 'as', 0, 0),
(2, 'd', 0, 0),
(3, 'dfg', 0, 0),
(4, 'fghj', 0, 1),
(5, 'fghjk', 0, 0),
(6, 'gfc', 2, 1),
(7, 'cg', 2, 0),
(8, 'c', 2, 0),
(9, 'cgc', 2, 0),
(10, 'gc', 2, 0),
(11, 'vv', 3, 0),
(12, 'vv', 3, 0),
(13, 'vv', 3, 0),
(14, 'vvf', 3, 0),
(15, 'vf', 3, 1),
(16, 'jhmjh', 4, 0),
(17, 'reytyujk', 4, 0),
(18, 'erdtfhyghjk', 4, 0),
(19, 'wertyjk', 4, 0),
(20, 'wertghj', 4, 0),
(21, 'fgsdfgh', 5, 0),
(22, 'fghg', 5, 0),
(23, 'jhgs', 5, 0),
(24, 'jkl', 5, 0),
(25, 'vcmönçmnb', 5, 1),
(26, 'fgsdfgh', 6, 0),
(27, 'fghg', 6, 0),
(28, 'jhgs', 6, 0),
(29, 'jkl', 6, 0),
(30, 'vcmönçmnb', 6, 1),
(31, 'rfrg', 7, 0),
(32, 'bfbfd', 7, 0),
(33, 'dfd', 7, 0),
(34, 'ffgfg', 7, 0),
(35, 'fdgfg', 7, 0),
(36, 'fgfg', 8, 0),
(37, 'fgfgf', 8, 0),
(38, 'fgfgfg', 8, 0),
(39, 'fgfgfd', 8, 0),
(40, 'dfgfdgf', 8, 1),
(41, 'asdfghjkl', 9, 0),
(42, 'sdfghjk', 9, 0),
(43, 'dfghjkl', 9, 0),
(44, 'dfghjklluytre', 9, 1),
(45, 'ertyu&#305;o&#305;uytrewq', 9, 0),
(46, 'gergtgt', 10, 0),
(47, 'tgtgtgt', 10, 0),
(48, 'tgtggtg', 10, 0),
(49, 't', 10, 1),
(50, 'bg', 10, 0),
(51, 'fef', 11, 0),
(52, 'fefee', 11, 0),
(53, 'efe', 11, 0),
(54, 'fe', 11, 0),
(55, 'fef', 11, 0),
(56, 'efef', 12, 0),
(57, 'efefe', 12, 0),
(58, 'ffef', 12, 0),
(59, 'efefef', 12, 1),
(60, 'ef', 12, 0),
(61, 'fefe', 13, 0),
(62, 'fefefef', 13, 0),
(63, 'fefefefef', 13, 0),
(64, 'eeffe', 13, 0),
(65, 'fefefef', 13, 1),
(66, 'sdsd', 14, 0),
(67, 'sdsds', 14, 1),
(68, 'sds', 14, 0),
(69, 'dsdsd', 14, 0),
(70, 'dsds', 14, 0),
(71, 'fdf', 15, 0),
(72, 'fdff', 15, 0),
(73, 'd', 15, 0),
(74, 'dfdffdf', 15, 1),
(75, 'ddfdfd', 15, 0),
(76, '123', 16, 1),
(77, '500', 16, 0),
(78, '666', 16, 0),
(79, '9999', 16, 0),
(80, '4455788', 16, 0),
(81, '', 17, 0),
(82, '', 17, 0),
(83, '', 17, 0),
(84, '', 17, 0),
(85, '', 17, 0),
(86, '', 18, 0),
(87, '', 18, 0),
(88, '', 18, 0),
(89, '', 18, 0),
(90, '', 18, 0),
(91, 'h&#305;hu&#305;', 19, 0),
(92, 'gjjo&#305;', 19, 1),
(93, 'j&#305;ok', 19, 0),
(94, 'j&#305;huh&#305;', 19, 0),
(95, 'hg8o', 19, 0),
(96, '7', 20, 0),
(97, 'y7y7y', 20, 0),
(98, 't6t6t', 20, 0),
(99, 'y8huh', 20, 1),
(100, 'uuh', 20, 0),
(101, 'sss', 21, 0),
(102, 'sss', 21, 0),
(103, 'ssss', 21, 0),
(104, 'ssss', 21, 0),
(105, 'sss', 21, 1),
(106, 'gugu', 22, 0),
(107, 'ggyugyu', 22, 0),
(108, 'gftgyugy', 22, 0),
(109, 'fgygfgygy', 22, 0),
(110, 'ygygytf', 22, 1),
(111, 'fdfdfdf', 23, 0),
(112, 'fdfdfd', 23, 0),
(113, 'fdfdfd', 23, 0),
(114, 'fdfdfdf', 23, 1),
(115, 'dfd59555', 23, 0),
(116, 'koko', 24, 0),
(117, 'okok', 24, 0),
(118, 'ok', 24, 0),
(119, 'koko', 24, 1),
(120, 'kok', 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `soru`
--

CREATE TABLE IF NOT EXISTS `soru` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `zorluk_derecesi_fk` int(11) NOT NULL,
  `soru` text NOT NULL,
  `soru_kategori_fk` int(2) NOT NULL,
  `ekleyen_fk` int(5) NOT NULL,
  `onay` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  FULLTEXT KEY `soru` (`soru`),
  FULLTEXT KEY `soru_2` (`soru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `soru`
--

INSERT INTO `soru` (`id`, `zorluk_derecesi_fk`, `soru`, `soru_kategori_fk`, `ekleyen_fk`, `onay`) VALUES
(1, 0, ' asdfghjkl&#351;i', 2, 1, 1),
(2, 0, ' wzsdcghc', 1, 1, 1),
(3, 0, 'vvv', 1, 1, 1),
(4, 0, ' tgfb', 2, 1, 1),
(5, 0, ' wrehg', 4, 1, 1),
(6, 0, ' wrehg', 4, 1, 1),
(24, 3, ' ok', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `soru_kategorileri`
--

CREATE TABLE IF NOT EXISTS `soru_kategorileri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ismi` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `soru_kategorileri`
--

INSERT INTO `soru_kategorileri` (`id`, `kategori_ismi`) VALUES
(1, 'mat'),
(2, 'fen'),
(3, 'kim'),
(4, 'biy'),
(5, 'tur');

-- --------------------------------------------------------

--
-- Table structure for table `soru_puan`
--

CREATE TABLE IF NOT EXISTS `soru_puan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soru_fk` int(11) NOT NULL,
  `begeni` tinyint(1) NOT NULL,
  `oylayan_fk` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(25) NOT NULL,
  `soyad` varchar(25) NOT NULL,
  `uye_adi` varchar(15) NOT NULL,
  `eposta` varchar(30) NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `cep_tel` int(11) NOT NULL,
  `sifre` varchar(32) NOT NULL,
  `rol_fk` int(2) NOT NULL,
  `onay_kodu` int(15) NOT NULL DEFAULT '0',
  `aktif_mi` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `uye_adi`, `eposta`, `dogum_tarihi`, `cep_tel`, `sifre`, `rol_fk`, `onay_kodu`, `aktif_mi`) VALUES
(2, '2', '1', 'kkk', '1', '0000-00-00', 3, 'c9f0f895fb98ab9159f51fd0297e236d', 1, 30656, 0),
(3, 'an', 'so', 'ok', 'kan', '0000-00-00', 3, '444bcb3a3fcf8389296c49467f27e1d6', 1, 9972, 0),
(55, 'mustafa', 'iran', 'miran', 'm@ma.com', '0000-00-00', 9007788, '202cb962ac59075b964b07152d234b70', 1, 1521, 0),
(56, 'ali', '1', 'ok', 'fgh', '0000-00-00', 22, '444bcb3a3fcf8389296c49467f27e1d6', 2, 28969, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uye_kategori`
--

CREATE TABLE IF NOT EXISTS `uye_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_fk` int(11) NOT NULL,
  `kategori_fk` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `zorluk_derecesi`
--

CREATE TABLE IF NOT EXISTS `zorluk_derecesi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zorluk` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `zorluk_derecesi`
--

INSERT INTO `zorluk_derecesi` (`id`, `zorluk`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
