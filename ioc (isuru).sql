-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 06:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ioc`
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
  `returnedDate` varchar(15) NOT NULL DEFAULT 'Not Returned',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `car_transactions`
--

INSERT INTO `car_transactions` (`id`, `cname`, `contact`, `email`, `package`, `vehicleNo`, `amount`, `date`, `status`, `returnedDate`) VALUES
(5, 'KamAl', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'CAT4567', 4500, '2015-07-19', 'Returned', '2015-08-22'),
(6, 'fgd', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'fdgf', 4500, '2015-07-31', 'Returned', '2015-08-22'),
(8, 'zxczxc', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'xzczxczxc', 4500, '2015-08-01', 'Returned', '2015-08-01'),
(9, 'zxczxc', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'cxvxcv', 4500, '2015-08-01', 'Returned', '2015-08-22'),
(10, 'isu', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'you', 4500, '2015-08-16', 'Not Returned', 'None'),
(11, 'fg', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'fgg', 4500, '2015-08-16', 'Not Returned', 'None'),
(12, 'dfgdf', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'ghfhfg', 4500, '2015-08-20', 'Not Returned', 'None'),
(13, 'rajika', '0789164423', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', '6768', 4500, '2015-08-20', 'Not Returned', 'None'),
(14, 'rajika', '0778355666', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', 'ioipo', 4500, '2015-08-20', 'Returned', '2015-08-22');

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
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FuelType` varchar(10) NOT NULL,
  `Reading` float NOT NULL,
  `Quantity` float NOT NULL,
  `Orderamnt` int(10) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `FuelType`, `Reading`, `Quantity`, `Orderamnt`, `Date`) VALUES
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
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `time`, `price`) VALUES
(1, 'Platinum Value Car Wash', 'Ultimate value car wash with mat shampoo - Limit 4', '48', 3000),
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
(2, 'Offline'),
(3, 'Offline'),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, '');

-- --------------------------------------------------------

--
-- Table structure for table `regular_customers`
--

CREATE TABLE IF NOT EXISTS `regular_customers` (
  `cust_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `address` char(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regular_customers`
--

INSERT INTO `regular_customers` (`cust_id`, `name`, `nic`, `address`, `contact`, `email`, `date`) VALUES
('rc-1018', 'Isuru', '123456899v', 'Gampaha', '0771363825', 'isuru.dilhan@yahoo.com', '2015-07-31'),
('rc-1090', 'Dilhan', '123456789v', 'dsfdsf', '0711363825', 'isuru.dilhan@yahoo.com', '2014-02-31'),
('rc-1122', '546456', 'sdfdsf', 'sdfsdf', '0711363825', 'isuru.dilhan@yahoo.com', '2015-07-31'),
('rc-288', 'Sam Khan', '940023643v', 'Colombo', '0789164423', 'isuru.dilhan@yahoo.com', '2015-08-19'),
('rc-549', 'fgdfgdfg', 'fgdg', 'dfgdg', '0711363825', 'isuru.dilhan@yahoo.com', '2015-04-31'),
('rc-892', 'fgdfg', '950028343v', 'sdfds', '0711363825', 'isuru.dilhan@yahoo.com', '2015-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `regular_lutransactions`
--

CREATE TABLE IF NOT EXISTS `regular_lutransactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(10) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `regular_lutransactions`
--

INSERT INTO `regular_lutransactions` (`id`, `cust_id`, `package`, `vehicleNo`, `amount`, `date`) VALUES
(2, 'lc-436', 'UNDERCARRIAGE DEGREASING - GOLD', 'hyyyy', 6400, '2015-08-16'),
(4, 'lc-436', 'UNDERCARRIAGE DEGREASING - GOLD', 'fd', 6400, '2015-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `regular_transactions`
--

CREATE TABLE IF NOT EXISTS `regular_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(10) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Returned',
  `returnedDate` varchar(15) NOT NULL DEFAULT 'Not Returned',
  PRIMARY KEY (`id`,`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `regular_transactions`
--

INSERT INTO `regular_transactions` (`id`, `cust_id`, `package`, `vehicleNo`, `amount`, `date`, `status`, `returnedDate`) VALUES
(19, 'rc-892', 'Ultimate Value Car Wash', 'hyh', 3600, '2015-07-30', 'Not Returned', '2015-08-22'),
(21, 'rc-1018', 'Ultimate Value Car Wash', 'dfgdfg', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(22, 'rc-1018', 'Ultimate Value Car Wash', 'sadasd', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(23, 'rc-1018', 'Ultimate Value Car Wash', 'ddfdf', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(24, 'rc-1018', 'Ultimate Value Car Wash', 'dds', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(26, 'rc-1018', 'Ultimate Value Car Wash', 'cxvcxv', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(27, 'rc-1018', 'Ultimate Value Car Wash', 'cvcxv', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(28, 'rc-1018', 'Ultimate Value Car Wash', 'dgdg', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(29, 'rc-1090', 'Ultimate Value Car Wash', 'zxczc', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(30, 'rc-1018', 'Ultimate Value Car Wash', 'sdfdsf', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(31, 'rc-1018', 'Ultimate Value Car Wash', 'vcvd', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(32, 'rc-1090', 'Hand Wash', 'jhfkjhf', 8000, '2015-08-01', 'Returned', '2015-08-22'),
(33, 'rc-1090', 'Ultimate Value Car Wash', 'vhjghj', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(34, 'rc-1090', 'Ultimate Value Car Wash', 'cxvxcv', 3600, '2015-08-01', 'Returned', '2015-08-22'),
(36, 'rc-1018', 'Ultimate Value Car Wash', 'hyu', 3600, '2015-08-02', 'Returned', '2015-08-22'),
(37, 'rc-1090', 'Ultimate Value Car Wash', 'cat-897', 3600, '2015-08-02', 'Returned', '2015-08-22'),
(38, 'rc-1018', 'Ultimate Value Car Wash', 'CAT-4949', 3600, '2015-08-02', 'Returned', '2015-08-22'),
(39, 'rc-1090', 'Hand Wash', 'BAT-9090', 8000, '2015-08-02', 'Returned', '2015-08-22'),
(40, 'rc-1090', 'Hand Wash', 'you', 8000, '2015-08-05', 'Returned', '2015-08-22'),
(41, 'rc-1018', 'Platinum Value Car Wash', 'sdasd', 1600, '2015-08-05', 'Returned', '2015-08-22'),
(42, 'rc-1018', 'Ultimate Value Car Wash', 'xcvxv', 3600, '2015-08-05', 'Returned', '2015-08-22'),
(43, 'rc-1090', 'Ultimate Value Car Wash', 'ghdfgdd', 3600, '2015-08-16', 'Returned', '2015-08-22'),
(46, 'rc-1018', 'Ultimate Value Car Wash', 'dfsf', 3600, '2015-08-19', 'Returned', '2015-08-22'),
(47, 'rc-892', 'Ultimate Value Car Wash', 'dfdsf', 3600, '2015-08-19', 'Returned', '2015-08-22'),
(48, 'rc-1018', 'Ultimate Value Car Wash', 'zxa', 3600, '2015-08-22', 'Returned', '2015-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `product` varchar(10) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`Id`, `name`, `product`, `contact`, `email`) VALUES
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

