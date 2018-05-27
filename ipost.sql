-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2016 at 06:19 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipost`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `idrecords` int(11) NOT NULL AUTO_INCREMENT,
  `origin` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `zone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idrecords`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`idrecords`, `origin`, `destination`, `zone`, `weight`, `cost`) VALUES
(1, 'aba', 'ABAKALIKI', '2', '1', '2650'),
(2, 'aba', 'ABEOKUTA', '4', '2.5', '6350');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
