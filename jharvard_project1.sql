-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2012 at 11:30 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jharvard_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite_parties`
--

CREATE TABLE IF NOT EXISTS `favorite_parties` (
  `partyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite_parties`
--

INSERT INTO `favorite_parties` (`partyID`, `userID`) VALUES
(1, 0),
(2, 0),
(2, 0),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `going`
--

CREATE TABLE IF NOT EXISTS `going` (
  `partyID` int(11) NOT NULL,
  `username` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `going`
--

INSERT INTO `going` (`partyID`, `username`) VALUES
(2, '1234'),
(1, '1234'),
(1, 'sammy'),
(1, 'sammy'),
(1, 'sammy'),
(1, 'sammy'),
(1, 'sammy'),
(1, 'sammy'),
(1, 'sammy'),
(1, 'sammy');

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE IF NOT EXISTS `parties` (
  `partyID` int(11) NOT NULL AUTO_INCREMENT,
  `partyName` varchar(25) NOT NULL,
  `partyLocation` varchar(100) NOT NULL,
  `partyDate` date NOT NULL,
  `partyGenre` varchar(25) NOT NULL,
  `partyInformation` text NOT NULL,
  `partyRating` int(11) NOT NULL,
  PRIMARY KEY (`partyID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `partyinfo`
--

CREATE TABLE IF NOT EXISTS `partyinfo` (
  `partyID` int(11) NOT NULL AUTO_INCREMENT,
  `partyName` varchar(255) NOT NULL,
  `partyLocation` varchar(255) NOT NULL,
  `partyDate` date NOT NULL,
  `partyGenre` varchar(255) NOT NULL,
  `partyDescription` text NOT NULL,
  PRIMARY KEY (`partyID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `partyinfo`
--

INSERT INTO `partyinfo` (`partyID`, `partyName`, `partyLocation`, `partyDate`, `partyGenre`, `partyDescription`) VALUES
(1, 'Viafeest', 'Melkweg', '2012-06-30', 'Awesome', 'tralalala party description 1\r\nAwesome party VIA VIA VIA'),
(2, 'Noodlanding', 'Paradiso', '2012-06-21', 'Pop', 'paradiso noodlanding test test description.\r\n\r\nBlablabalbalablaa blablabla nanananna'),
(3, 'testParty', 'nowhere', '2012-05-13', 'Techno', 'blabalbalakla\r\nnananannanan\r\ngeen creatieve gedachten om hier op te schrijven. awesome feest'),
(4, 'nepParty', 'somewhere', '2012-05-13', 'Metal', 'tralalallaa nananannana blablabalabla nepparty op dezelfde dag als de testparty'),
(5, 'DubstepTrouw', 'Trouw', '2012-05-08', 'Dubstep', '1234'),
(6, 'UpperdePup', 'Club Up', '2012-05-18', 'House', 'Houseyeahhouse'),
(7, 'test', 'Club Up', '2012-04-09', 'Techno', 'lsadkjfasdf'),
(8, 'test1', 'Studio 80', '2012-04-10', 'Trance', 'lasdkjflasjkdf;aslkjdf'),
(9, '90s Now!', 'Melkweg', '2012-04-12', '90s', ''),
(10, 'Techno in the house', 'Trouw', '2012-04-13', 'Techno', '');

-- --------------------------------------------------------

--
-- Table structure for table `recently_viewed`
--

CREATE TABLE IF NOT EXISTS `recently_viewed` (
  `programID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(19, '1234', '1234'),
(20, 'sammy', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'nynke', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
