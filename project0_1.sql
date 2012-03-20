-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2012 at 10:57 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jharvard_project0`
--

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `programID` int(11) NOT NULL AUTO_INCREMENT,
  `programName` varchar(25) NOT NULL,
  `programSummary` varchar(260) NOT NULL,
  `programLink` varchar(100) NOT NULL,
  `programFaculty` varchar(100) NOT NULL,
  `favorite` int(11) NOT NULL,
  PRIMARY KEY (`programID`),
  UNIQUE KEY `programName` (`programName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`programID`, `programName`, `programSummary`, `programLink`, `programFaculty`, `favorite`) VALUES
(1, 'Informatica', 'Over computers leren', 'www.informatica.com', 'FNWI', 0),
(2, 'Kunstmatige Intelligentie', 'Leren over robots', 'www.ai.com', 'FNWI', 0),
(3, 'Biologie', 'Plantjes en diertjes', 'www.biologie.com', 'FNWI', 0),
(4, 'Scheikunde ', 'Vooral moluculen', 'www.scheikunde.com', 'FNWI', 0),
(5, 'Psychologie', 'Geestenziektes', 'www.psychologie.com', 'FNWi', 0),
(6, 'Economie', 'Cijfers en begrotingen', 'www.economie.com', 'FNWI', 0),
(7, 'Rechten', 'Wetboeken en vrouwe justitia', 'www.rechten.com', 'FNWI', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
