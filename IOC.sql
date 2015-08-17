-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2015 at 03:42 PM
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
-- Table structure for table `car_transactions`
--

CREATE TABLE IF NOT EXISTS `car_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Returned',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `car_transactions`
--

INSERT INTO `car_transactions` (`id`, `cname`, `contact`, `email`, `package`, `vehicleNo`, `amount`, `date`, `status`) VALUES
(5, 'KamAl', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'CAT4567', 4500, '2015-07-19', 'Returned'),
(6, 'fgd', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'fdgf', 4500, '2015-07-31', 'Returned'),
(8, 'zxczxc', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'xzczxczxc', 4500, '2015-08-01', 'Returned'),
(9, 'zxczxc', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'cxvxcv', 4500, '2015-08-01', 'Returned'),
(10, 'isu', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'you', 4500, '2015-08-16', 'Returned'),
(11, 'fg', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'fgg', 4500, '2015-08-16', 'Returned'),
(12, 'fdsfds', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'uiyu', 5000, '2015-08-17', 'Not Returned');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Lubricants`
--

INSERT INTO `Lubricants` (`Id`, `Name`, `Price`, `Quantity`, `Supplier`) VALUES
(2, 'T2', 780, 4, 'T2 dude'),
(4, 'K3', 1, 5, 'T2 dude');

-- --------------------------------------------------------

--
-- Table structure for table `lubricants`
--

CREATE TABLE IF NOT EXISTS `lubricants` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Supplier` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lubricants`
--

INSERT INTO `lubricants` (`Id`, `Name`, `Price`, `Quantity`, `Supplier`) VALUES
(2, 'T2', 780, 4, 'T2 dude');

-- --------------------------------------------------------

--
-- Table structure for table `lu_customers`
--

CREATE TABLE IF NOT EXISTS `lu_customers` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lu_customers`
--

INSERT INTO `lu_customers` (`id`, `name`, `address`, `contact`, `email`, `date`) VALUES
('lc-120', 'hy', 'hy', '0789164423', 'isuru.dilhan@yahoo.com', '2015-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `lu_packages`
--

CREATE TABLE IF NOT EXISTS `lu_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lu_packages`
--

INSERT INTO `lu_packages` (`id`, `name`, `price`) VALUES
(1, ' QUICK LUBRICATION - GOLD', 8000),
(2, ' UNDERCARRIAGE DEGREASING - GOLD', 8000),
(3, 'VACUUM FLOOR / SEATS & TRUNK- GOLD', 8000),
(4, 'WINDSCREEN & GLASS CLEANING- GOLD', 8000),
(5, 'QUICK LUBRICATION - SILVER', 5000),
(6, 'UNDERCARRIAGE DEGREASING - SILVER', 5000),
(7, 'VISUAL SAFETY CHECK - SILVER', 5000),
(9, ' TYRE & DASH DRESSING- GOLD', 8000),
(10, ' EXTERIOR WAXING - GOLD', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `nonreglu_transactions`
--

CREATE TABLE IF NOT EXISTS `nonreglu_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nonreglu_transactions`
--

INSERT INTO `nonreglu_transactions` (`id`, `cname`, `contact`, `email`, `package`, `vehicleNo`, `amount`, `date`) VALUES
(1, 'isuru', '0711363825', 'isuru.dilhan@yahoo.com', 'VACUUM FLOOR / SEATS & TRUNK- GOLD', 'hy', 8000, '2015-08-17');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Id`, `FuelType`, `Reading`, `Quantity`, `Orderamnt`, `Date`) VALUES
(143, 'Petrol', 200, 400, 19800, '2015-08-17'),
(144, 'SPetrol', 700, 1400, 19800, '2015-08-17'),
(145, 'Diesel', 200, 400, 6600, '2015-08-17'),
(146, 'SDiesel', 700, 1400, 19800, '2015-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `time`, `price`) VALUES
(1, 'Platinum Value Car Wash', 'Ultimate value car wash with mat shampoo - Limit 4', '48', 2000),
(2, 'Ultimate Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant, underbody wash, tire shine, rim cleaning wheel bright, triple foam polish wax, rust inhibitor and interior fragrance spray.', '48', 4500),
(4, 'Hand Wash', 'smooth washing\nhee', '2', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pumpreadings`
--

CREATE TABLE IF NOT EXISTS `pumpreadings` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Reading` float NOT NULL,
  `PumpNo` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pumpreadings`
--

INSERT INTO `pumpreadings` (`Id`, `Date`, `Reading`, `PumpNo`) VALUES
(1, '2015-08-16', 3, 0),
(2, '2015-08-16', 34, 0),
(3, '2015-08-16', 45, 0),
(4, '2015-08-16', 56, 0),
(7, '2015-08-16', 56, 3),
(8, '2015-12-16', 34, 4),
(9, '2015-08-16', 22, 7),
(10, '2015-08-16', 33, 9),
(12, '2015-08-16', 78, 2),
(20, '2015-08-16', 88, 4),
(27, '2012-02-01', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pumpstatus`
--

CREATE TABLE IF NOT EXISTS `pumpstatus` (
  `PumpNo` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Fuel` varchar(20) NOT NULL,
  PRIMARY KEY (`PumpNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pumpstatus`
--

INSERT INTO `pumpstatus` (`PumpNo`, `Status`, `Fuel`) VALUES
(1, 'Online', 'SuperPetrol'),
(2, 'Online', ''),
(3, 'Offline', 'Petrol'),
(4, 'Offline', 'SuperPetrol'),
(5, 'Offline', 'Diesel'),
(6, 'Offline', 'SuperDiesel'),
(7, 'Online', 'Diesel'),
(8, 'Offline', 'SuperDiesel'),
(9, 'Offline', 'Petrol'),
(10, 'Offline', 'SuperPetrol');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `Suppliers`
--

INSERT INTO `Suppliers` (`Id`, `name`, `product`, `contact`, `email`) VALUES
(41, 'T2 dude', 'lubricant', 717479370, 't2dude@gmail.com'),
(42, 'T3 dude', 'lubricant', 717479370, 't3dude@gmail.com');

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
