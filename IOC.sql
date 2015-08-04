-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2015 at 08:40 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `IOC`
--

-- --------------------------------------------------------

--
-- Table structure for table `eveningstocks`
--

CREATE TABLE IF NOT EXISTS `eveningstocks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fueltype` varchar(2) NOT NULL,
  `reading` float NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Lubricants`
--

CREATE TABLE IF NOT EXISTS `Lubricants` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Supplier` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Lubricants`
--

INSERT INTO `Lubricants` (`Id`, `Name`, `Price`, `Quantity`, `Supplier`) VALUES
(2, 'T2', 780, 4, 'T2 dude');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FuelType` varchar(10) NOT NULL,
  `Reading` float NOT NULL,
  `Quantity` float NOT NULL,
  `Orderamnt` int(10) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Id`, `FuelType`, `Reading`, `Quantity`, `Orderamnt`, `Date`) VALUES
(77, 'Diesel', 200, 400, 6600, '2015-08-02'),
(78, 'SDiesel', 1200, 2400, 19800, '2015-08-02'),
(79, 'Petrol', 0, 0, 6600, '2015-08-02'),
(80, 'SPetrol', 0, 0, 6600, '2015-08-02'),
(81, 'Diesel', 0, 0, 6600, '2015-08-02'),
(82, 'SDiesel', 0, 0, 6600, '2015-08-02'),
(83, 'Petrol', 700, 1400, 19800, '2015-08-02'),
(84, 'SPetrol', 0, 0, 6600, '2015-08-02'),
(85, 'Diesel', 0, 0, 6600, '2015-08-02'),
(86, 'SDiesel', 0, 0, 6600, '2015-08-02'),
(87, 'Petrol', 700, 1400, 19800, '2015-08-02'),
(88, 'SPetrol', 200, 400, 19800, '2015-08-02'),
(89, 'Diesel', 700, 1400, 6600, '2015-08-02'),
(90, 'SDiesel', 1200, 2400, 19800, '2015-08-02'),
(91, 'Petrol', 200, 400, 19800, '2015-08-02'),
(92, 'SPetrol', 700, 1400, 19800, '2015-08-02'),
(93, 'Diesel', 700, 1400, 6600, '2015-08-02'),
(94, 'SDiesel', 200, 400, 19800, '2015-08-02'),
(95, 'Petrol', 200, 400, 19800, '2015-08-02'),
(96, 'SPetrol', 700, 1400, 19800, '2015-08-02'),
(97, 'Diesel', 0, 0, 6600, '2015-08-02'),
(98, 'SDiesel', 0, 0, 6600, '2015-08-02'),
(99, 'Petrol', 0, 0, 6600, '2015-08-02'),
(100, 'SPetrol', 0, 0, 6600, '2015-08-02'),
(101, 'Diesel', 0, 0, 6600, '2015-08-02'),
(102, 'SDiesel', 0, 0, 6600, '2015-08-02'),
(103, 'Petrol', 0, 0, 6600, '2015-08-02'),
(104, 'SPetrol', 0, 0, 6600, '2015-08-02'),
(105, 'Diesel', 0, 0, 6600, '2015-08-02'),
(106, 'SDiesel', 0, 0, 6600, '2015-08-02'),
(107, 'Petrol', 200, 400, 19800, '2015-08-02'),
(108, 'Petrol', 200, 400, 19800, '2015-08-02'),
(109, 'SPetrol', 700, 1400, 19800, '2015-08-02'),
(110, 'SPetrol', 700, 1400, 19800, '2015-08-02'),
(111, 'Diesel', 700, 1400, 6600, '2015-08-02'),
(112, 'Diesel', 700, 1400, 6600, '2015-08-02'),
(113, 'SDiesel', 1200, 2400, 19800, '2015-08-02'),
(114, 'SDiesel', 1200, 2400, 19800, '2015-08-02'),
(115, 'Petrol', 200, 400, 19800, '2015-08-02'),
(116, 'SPetrol', 700, 1400, 19800, '2015-08-02'),
(117, 'Diesel', 700, 1400, 6600, '2015-08-02'),
(118, 'SDiesel', 1200, 2400, 19800, '2015-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `pumpreadings`
--

CREATE TABLE IF NOT EXISTS `pumpreadings` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Reading` float NOT NULL,
  `1` float NOT NULL,
  `2` float NOT NULL,
  `3` float NOT NULL,
  `4` float NOT NULL,
  `5` float NOT NULL,
  `6` float NOT NULL,
  `7` float NOT NULL,
  `8` float NOT NULL,
  `9` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pumpstatus`
--

CREATE TABLE IF NOT EXISTS `pumpstatus` (
  `PumpNo` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`PumpNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pumpstatus`
--

INSERT INTO `pumpstatus` (`PumpNo`, `Status`) VALUES
(1, 'Online'),
(2, 'Online'),
(3, 'Offline'),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, '');

-- --------------------------------------------------------

--
-- Table structure for table `Suppliers`
--

CREATE TABLE IF NOT EXISTS `Suppliers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `product` varchar(10) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `Suppliers`
--

INSERT INTO `Suppliers` (`Id`, `name`, `product`, `contact`, `email`) VALUES
(41, 'T2 dude', 'lubricant', 717479370, 't2dude@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('rajika', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
