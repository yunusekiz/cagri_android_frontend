-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Haz 2013, 20:53:12
-- Sunucu sürümü: 5.5.27
-- PHP Sürümü: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `andro_it`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `pass` text CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `alert_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(32) CHARACTER SET utf8 NOT NULL,
  `department` varchar(32) CHARACTER SET utf8 NOT NULL,
  `clas` varchar(32) CHARACTER SET utf8 NOT NULL,
  `faculty` varchar(32) CHARACTER SET utf8 NOT NULL,
  `body` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`alert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `alert`
--

INSERT INTO `alert` (`alert_id`, `type`, `department`, `clas`, `faculty`, `body`, `date`) VALUES
(8, 'Urgent', 'Department Of Software Engineeri', '4', 'Faculty Of Engineering', 'Nadir naber?', '06/06/2013'),
(9, 'Normal', 'Department Of Software Engineeri', '2', 'Faculty Of Engineering', 'naber apo!', '06/06/2013');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `event_detail`
--

CREATE TABLE IF NOT EXISTS `event_detail` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_category` varchar(255) NOT NULL,
  `event_title` text NOT NULL,
  `event_body` text NOT NULL,
  `event_priority` varchar(255) NOT NULL,
  `event_class_1` varchar(5) DEFAULT NULL,
  `event_class_2` varchar(5) DEFAULT NULL,
  `event_class_3` varchar(5) DEFAULT NULL,
  `event_class_4` varchar(5) DEFAULT NULL,
  `event_class_5` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evet_view_1_class`
--

CREATE TABLE IF NOT EXISTS `evet_view_1_class` (
  `title` text,
  `body` text,
  `priority` varchar(255) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evet_view_2_class`
--

CREATE TABLE IF NOT EXISTS `evet_view_2_class` (
  `title` text,
  `body` text,
  `priority` varchar(255) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evet_view_3_class`
--

CREATE TABLE IF NOT EXISTS `evet_view_3_class` (
  `title` text,
  `body` text,
  `priority` varchar(255) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evet_view_4_class`
--

CREATE TABLE IF NOT EXISTS `evet_view_4_class` (
  `title` text,
  `body` text,
  `priority` varchar(255) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evet_view_5_class`
--

CREATE TABLE IF NOT EXISTS `evet_view_5_class` (
  `title` text,
  `body` text,
  `priority` varchar(255) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `providerId` int(10) unsigned NOT NULL DEFAULT '0',
  `requestId` int(10) unsigned NOT NULL DEFAULT '0',
  `status` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Index_3` (`providerId`,`requestId`),
  KEY `Index_2` (`providerId`,`requestId`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='providerId is the Id of the users who wish to be friend with' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `inumber` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` varchar(26) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inumber` (`inumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `instructor`
--

INSERT INTO `instructor` (`inumber`, `name`, `surname`, `email`, `birthdate`, `faculty`, `department`, `id`, `password`) VALUES
(112358, 'Yunus', 'Ekiz', 'ynsekiz@gmail.com', '16-02-2012', 'Faculty Of Engineering', 'Department Of Software Engineering', 10, '21312'),
(112363, 'Cagri', 'Yeni', 'cgr@cagri.com', '12-02-2012', 'Faculty Of Engineering', 'Department Of Mathematics', 11, '213213'),
(123156, 'asdadas', 'sadsadsad', 'asdasdas', '12-02-2012', 'Faculty Of Science', 'Department Of Mechanical Engineering', 12, '123124'),
(12314, 'asdadadafa', 'qwreqew', 'adada', '12-02-2012', '1234567', 'Faculty Of Engineering', 13, '5645'),
(213124, 'aar', 'arar', 'arara', '12-02-2012', 'Faculty Of Engineering', 'Department Of Mechanical Engineering', 14, 'araw1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pnumber` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `department` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `profile`
--

INSERT INTO `profile` (`name`, `surname`, `age`, `email`, `pnumber`, `id`, `department`) VALUES
('Nadir', 'Karatay', 28, 'nadirkaratay@gmail.com', '05379144274', 1, 'Software Engineering');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `snumber` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` varchar(26) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `authenticationTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userKey` varchar(32) NOT NULL DEFAULT '',
  `IP` varchar(45) NOT NULL DEFAULT '',
  `port` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `snumber` (`snumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Tablo döküm verisi `student`
--

INSERT INTO `student` (`snumber`, `name`, `surname`, `email`, `birthdate`, `faculty`, `department`, `class`, `password`, `id`, `date`, `status`, `authenticationTime`, `userKey`, `IP`, `port`) VALUES
(1234, 'Arif Abdullah', 'akpınar', 'asda@asda.com', '12-02-2012', 'Faculty Of Science', 'Department Of Mechanical Engineering', 2, '1231412', 24, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '', 0),
(12345, 'asr', 'arwq', 'a@g.com', '12-02-2012', '12356', 'Faculty Of Science', 0, '213412', 25, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '', 0),
(89478, 'aaaaaaa', 'aaaaaaa', 'a@a.com', '01-02-2012', 'Faculty Of Science', 'Department Of Mechanical Engineering', 3, '123456', 26, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
