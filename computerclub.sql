-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2014 at 11:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `computerclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) COLLATE utf8_bin NOT NULL,
  `Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `Massage` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`UserID`, `Username`, `Name`, `Subject`, `Massage`) VALUES
(7, '', '', 'test2', 'asasfsdgshdfgfadffdff'),
(8, 'ss', 'Strom Spirit', 'test', 'tsetsetsetsetsetsetsetsetsetsetsetest'),
(9, 'ss', 'Strom Spirit', 'test', 'testtestest'),
(10, 'ss', 'Strom Spirit', 'test', 'testetswr Massage'),
(11, 'ss', 'Strom Spirit', 'teataetaetaet', 'ataetaetaetaet'),
(12, 'ss', 'Strom Spirit', 'asdasdadsasdas', 'dasdasdSGADGSCEF');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `UserID` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) COLLATE utf8_bin NOT NULL,
  `Password` varchar(20) COLLATE utf8_bin NOT NULL,
  `Name` varchar(100) COLLATE utf8_bin NOT NULL,
  `Status` enum('ADMIN','USER') COLLATE utf8_bin NOT NULL DEFAULT 'USER',
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `Status`) VALUES
(001, 'win', 'win123', 'Weerachai Nukitram', 'USER'),
(002, 'chai', 'chai123', 'Surachai Sirisart', 'ADMIN'),
(005, 'aa', 'as', 'Acid of Anchien', 'ADMIN'),
(006, 'dd', 'dd', 'Long DD', 'USER');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
