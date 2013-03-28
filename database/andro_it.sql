-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2013 at 09:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `andro_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `pass` text CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `event_detail`
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
-- Stand-in structure for view `evet_view_1_class`
--
CREATE TABLE IF NOT EXISTS `evet_view_1_class` (
`title` text
,`body` text
,`priority` varchar(255)
,`class` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `evet_view_2_class`
--
CREATE TABLE IF NOT EXISTS `evet_view_2_class` (
`title` text
,`body` text
,`priority` varchar(255)
,`class` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `evet_view_3_class`
--
CREATE TABLE IF NOT EXISTS `evet_view_3_class` (
`title` text
,`body` text
,`priority` varchar(255)
,`class` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `evet_view_4_class`
--
CREATE TABLE IF NOT EXISTS `evet_view_4_class` (
`title` text
,`body` text
,`priority` varchar(255)
,`class` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `evet_view_5_class`
--
CREATE TABLE IF NOT EXISTS `evet_view_5_class` (
`title` text
,`body` text
,`priority` varchar(255)
,`class` varchar(5)
);
-- --------------------------------------------------------

--
-- Table structure for table `instructor`
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `inumber` (`inumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`inumber`, `name`, `surname`, `email`, `birthdate`, `faculty`, `department`, `id`) VALUES
(112358, 'Yunus', 'Ekiz', 'ynsekiz@gmail.com', '16-02-2012', 'Faculty Of Engineering', 'Department Of Software Engineering', 10),
(112363, 'Cagri', 'Yeni', 'cgr@cagri.com', '12-02-2012', 'Faculty Of Engineering', 'Department Of Mathematics', 11);

-- --------------------------------------------------------

--
-- Table structure for table `student`
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `snumber` (`snumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`snumber`, `name`, `surname`, `email`, `birthdate`, `faculty`, `department`, `class`, `id`) VALUES
(80308021, 'cagri', 'yeni', 'cagri@gmail.com', '10-02-2012', 'Faculty Of Engineering', 'Department Of Mechanical Engineering', 4, 11),
(80308025, 'nadir', 'karatay', 'nadir@ndr.com', '14-09-2011', 'Faculty Of Engineering', 'Department Of Software Engineering', 4, 12);

-- --------------------------------------------------------

--
-- Structure for view `evet_view_1_class`
--
DROP TABLE IF EXISTS `evet_view_1_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `evet_view_1_class` AS select `event_detail`.`event_title` AS `title`,`event_detail`.`event_body` AS `body`,`event_detail`.`event_priority` AS `priority`,`event_detail`.`event_class_1` AS `class` from `event_detail` where (`event_detail`.`event_class_1` = 'TRUE');

-- --------------------------------------------------------

--
-- Structure for view `evet_view_2_class`
--
DROP TABLE IF EXISTS `evet_view_2_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `evet_view_2_class` AS select `event_detail`.`event_title` AS `title`,`event_detail`.`event_body` AS `body`,`event_detail`.`event_priority` AS `priority`,`event_detail`.`event_class_2` AS `class` from `event_detail` where (`event_detail`.`event_class_2` = 'TRUE');

-- --------------------------------------------------------

--
-- Structure for view `evet_view_3_class`
--
DROP TABLE IF EXISTS `evet_view_3_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `evet_view_3_class` AS select `event_detail`.`event_title` AS `title`,`event_detail`.`event_body` AS `body`,`event_detail`.`event_priority` AS `priority`,`event_detail`.`event_class_3` AS `class` from `event_detail` where (`event_detail`.`event_class_3` = 'TRUE');

-- --------------------------------------------------------

--
-- Structure for view `evet_view_4_class`
--
DROP TABLE IF EXISTS `evet_view_4_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `evet_view_4_class` AS select `event_detail`.`event_title` AS `title`,`event_detail`.`event_body` AS `body`,`event_detail`.`event_priority` AS `priority`,`event_detail`.`event_class_4` AS `class` from `event_detail` where (`event_detail`.`event_class_4` = 'TRUE');

-- --------------------------------------------------------

--
-- Structure for view `evet_view_5_class`
--
DROP TABLE IF EXISTS `evet_view_5_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `evet_view_5_class` AS select `event_detail`.`event_title` AS `title`,`event_detail`.`event_body` AS `body`,`event_detail`.`event_priority` AS `priority`,`event_detail`.`event_class_5` AS `class` from `event_detail` where (`event_detail`.`event_class_5` = 'TRUE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
