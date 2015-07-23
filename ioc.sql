-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 06:29 PM
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
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `time`, `price`) VALUES
(1, 'Platinum Value Car Wash', 'Ultimate value car wash with mat shampoo - Limit 4', '22', 15),
(2, 'Ultimate Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant, underbody wash, tire shine, rim cleaning wheel bright, triple foam polish wax, rust inhibitor and interior fragrance spray, 48 hour guarantee, return within 2 days and receive a free exterior only wash with receipt with matching license plate', '48', 4444),
(3, 'Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant and underbody wash', '3', 20005),
(4, 'Super Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant, underbody wash, tire shine and rim cleaning wheel bright', '3333', 3000),
(5, 'hy', 'hy', '7', 626);

-- --------------------------------------------------------

--
-- Table structure for table `regular_customers`
--

CREATE TABLE IF NOT EXISTS `regular_customers` (
  `cust_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `address` char(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regular_customers`
--

INSERT INTO `regular_customers` (`cust_id`, `name`, `nic`, `address`, `contact`) VALUES
('1', 'chooty puthaaaaa', '1234456456', 'marawilaaaa', '1199'),
('123', 'Maaravila Roxz', '123456789v', 'No.1,Maravila,Negambo', '0712345678');

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
  PRIMARY KEY (`id`,`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `regular_transactions`
--

INSERT INTO `regular_transactions` (`id`, `cust_id`, `package`, `vehicleNo`, `amount`, `date`) VALUES
(3, '1', 'Ultimate Value Car Wash', 'hy001', 3555, '2015-07-16'),
(4, '123', 'Super Value Car Wash', 'io', 2400, '2015-07-16'),
(5, '1', 'Ultimate Value Car Wash', 'hy', 3555, '2015-07-16'),
(6, '1', 'Ultimate Value Car Wash', 'uo', 3555.2, '2015-07-16'),
(7, '1', 'hy', 'hy', 500.8, '2015-07-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
