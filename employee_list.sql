-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 06:37 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `employee_list`
--

CREATE TABLE IF NOT EXISTS `employee_list` (
  `employeeCode` varchar(50) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `nicNumber` varchar(50) DEFAULT NULL,
  `mobilePhone` varchar(50) DEFAULT NULL,
  `birthDate` varchar(50) DEFAULT NULL,
  `hireDate` varchar(50) DEFAULT NULL,
  `emptype` varchar(50) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `userFile` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`employeeCode`, `firstName`, `lastName`, `address`, `nicNumber`, `mobilePhone`, `birthDate`, `hireDate`, `emptype`, `userName`, `userPassword`, `userFile`) VALUES
('MG-789', 'Isuru', 'Dilhan', 'Gampaha', '953605469V', '0722353042', '1995-02-01', '2015-08-12', 'Admin', 'isurudilhan', 'Isurudilhan1', '1 (7).jpg'),
('MG-790', 'Rajika', 'IMal', 'Kegalle', '917589068v', '0762011103', '1991-09-19', '2015-08-27', 'Manager', 'rajikaimal', 'RajikaImal123/', '1 (5).jpg'),
('PM-237', 'Sam', 'Abeysekara', 'Colombo', '930512400v', '0716010860', '1993-02-20', '2015-08-19', 'Pump Staff', 'nullnull', 'nullNull123', 'ironman.jpg'),
('PM-406', 'Lahiru', 'Witharama', 'Rathnapura', '920837006V', '0725429611', '1992-09-19', '2015-08-02', 'Pump Staff', 'nullnull', 'nullNull123', '1 (1).jpg'),
('PM-168', 'kaveendra', 'oshan', 'kollupitiya', '930512400v', '0716010860', '1992-12-02', '2015-01-01', 'Pump Staff', 'nullnull', 'nullNull123', '1 (4).jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
