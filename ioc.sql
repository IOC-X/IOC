-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2015 at 03:07 AM
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
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
`atid` int(11) NOT NULL,
  `empCode` varchar(50) DEFAULT NULL,
  `shiftCode` varchar(50) DEFAULT NULL,
  `shiftprice` varchar(100) DEFAULT NULL,
  `atyear` varchar(50) DEFAULT NULL,
  `atmonth` varchar(50) DEFAULT NULL,
  `atdate` varchar(50) DEFAULT NULL,
  `startTime` varchar(50) DEFAULT NULL,
  `colour` varchar(50) DEFAULT NULL,
  `endTime` varchar(50) DEFAULT NULL,
  `pumps` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`atid`, `empCode`, `shiftCode`, `shiftprice`, `atyear`, `atmonth`, `atdate`, `startTime`, `colour`, `endTime`, `pumps`) VALUES
(1, 'MG-796', 'SH-268', '95', '2015', '07', '22', '02:02', '', NULL, 'SH-268');

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
('MG-796', 'ghjg', 'jhghjg', 'hjgjhg', 'jhghjg', 'hjgjhghjgjhg', '2015-07-30', '2015-07-02', 'Admin', 'gfgf', 'hgfhgf', 'Screenshot (52).png'),
('MG-96', 'kavi', 'shami', 'kolluppitiya', 'fuck ', 'HLHJL', '2015-07-09', '2015-07-18', 'Admin', 'GFHG', 'FHGFHGFHGFH', '11049114_678877828909297_5216348248500013051_n.jpg'),
('PM-368', 'ghfhgf', 'hgfhgfhg', 'fhgfhgfhg', 'fhgfhgfhgf', 'hgfhgfhg', '2015-07-22', '2015-06-30', 'Pump Staff', 'nullnull', 'nullNull123', 'Screenshot (52).png');

-- --------------------------------------------------------

--
-- Table structure for table `lubricants`
--

CREATE TABLE IF NOT EXISTS `lubricants` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lubricants`
--

INSERT INTO `lubricants` (`Id`, `Name`, `Price`, `Quantity`, `Supplier`) VALUES
(0, ' hgf', 0, 5454, 'Le Dude');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `time`, `price`) VALUES
(1, 'Ultimate Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant, underbody wash, tire shine, rim cleaning wheel bright, triple foam polish wax, rust inhibitor and interior fragrance spray, 48 hour guarantee, return within 2 days and receive a free exterior only wash with receipt with matching license plate', '3', '3000'),
(2, 'Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant and underbody wash', '2', '200');

-- --------------------------------------------------------

--
-- Table structure for table `regular_customers`
--

CREATE TABLE IF NOT EXISTS `regular_customers` (
  `cust_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `address` char(100) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regular_customers`
--

INSERT INTO `regular_customers` (`cust_id`, `name`, `nic`, `address`, `contact`) VALUES
('1', 'chooty putha', '1234', 'marawila', '119'),
('123', 'Maaravila Roxz', '123456789v', 'No.1,Maravila,Negambo', '0712345678');

-- --------------------------------------------------------

--
-- Table structure for table `shiftdb`
--

CREATE TABLE IF NOT EXISTS `shiftdb` (
  `shiftId` varchar(50) NOT NULL,
  `shiftName` varchar(50) NOT NULL,
  `shiftDuration` varchar(50) NOT NULL,
  `shiftRate` varchar(50) NOT NULL,
  `shiftcolor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shiftdb`
--

INSERT INTO `shiftdb` (`shiftId`, `shiftName`, `shiftDuration`, `shiftRate`, `shiftcolor`) VALUES
('SH-268', 'fako', 'sam', '95', NULL),
('SH-482', '', '', '', NULL),
('SH-722', 'kjh', 'ojk', '45', NULL),
('SH-894', '', '', '', 'green'),
('SH-950', '', '', '', 'yellow');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `managerCode` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`managerCode`, `fname`) VALUES
('as', 'jkjkljkl');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('rajika', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`atid`);

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
 ADD PRIMARY KEY (`employeeCode`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_customers`
--
ALTER TABLE `regular_customers`
 ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `shiftdb`
--
ALTER TABLE `shiftdb`
 ADD PRIMARY KEY (`shiftId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
