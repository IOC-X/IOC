-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2015 at 06:40 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `IOC2`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`atid`, `empCode`, `shiftCode`, `shiftprice`, `atyear`, `atmonth`, `atdate`, `startTime`, `colour`, `endTime`, `pumps`) VALUES
(10, 'MG-795', 'SH-268', '95', '2015', '07', '26', '01:00', 'orange', NULL, 'SH-268'),
(13, 'MG-795', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(14, 'PM-368', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(16, 'PM-638', 'SH-147', '750', '2015', '07', '27', '03:00', 'orange', NULL, 'SH-147'),
(458, 'PM-368', 'SH-147', '750', '2015', '07', '28', '02:01', 'orange', NULL, 'SH-147'),
(459, 'MG-453', 'SH-725', '1500', '2015', '07', '29', '14:02', 'blue', NULL, 'SH-725'),
(460, 'MG-453', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(461, 'PM-453', 'SH-147', '750', '2015', '07', '26', '03:00', 'orange', NULL, 'SH-147'),
(462, 'PM-368', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(463, 'PM-638', 'SH-256', '1000', '2015', '07', '28', '01:00', 'green', NULL, 'SH-147'),
(464, 'PM-638', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(465, 'MG-453', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(466, 'PM-638', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(467, 'MG-795', 'SH-147', '750', '2015', '07', '30', '02:00', 'orange', NULL, 'SH-147'),
(468, 'MG-453', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(469, 'PM-368', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(470, 'MG-453', NULL, NULL, '2015', '08', '6', NULL, '#ff0000', NULL, NULL),
(471, 'MG-453', NULL, NULL, '2015', '07', '15', NULL, '#ff0000', NULL, NULL),
(472, 'MG-453', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-147'),
(473, 'MG-795', NULL, NULL, '2015', '08', '15', NULL, '#ff0000', NULL, NULL),
(474, 'PM-368', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-193'),
(475, 'PM-155', 'SH-147', '750', '2015', '08', '16', '01:00', 'orange', NULL, 'SH-193'),
(476, 'MG-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(477, 'PM-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(478, 'MG-453', 'SH-193', '500', '2015', '08', '17', '01:00', 'yellow', NULL, 'SH-147'),
(479, 'MG-795', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(480, 'PM-155', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(481, 'PM-368', 'SH-193', '500', '2015', '08', '18', '02:01', 'yellow', '12:57', 'SH-147'),
(482, 'MG-453', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(483, 'PM-453', 'SH-193', '500', '2015', '08', '18', '18:01', 'yellow', '15:59', 'SH-147'),
(484, 'PM-638', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(10, 'MG-795', 'SH-268', '95', '2015', '07', '26', '01:00', 'orange', NULL, 'SH-268'),
(13, 'MG-795', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(14, 'PM-368', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(16, 'PM-638', 'SH-147', '750', '2015', '07', '27', '03:00', 'orange', NULL, 'SH-147'),
(458, 'PM-368', 'SH-147', '750', '2015', '07', '28', '02:01', 'orange', NULL, 'SH-147'),
(459, 'MG-453', 'SH-725', '1500', '2015', '07', '29', '14:02', 'blue', NULL, 'SH-725'),
(460, 'MG-453', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(461, 'PM-453', 'SH-147', '750', '2015', '07', '26', '03:00', 'orange', NULL, 'SH-147'),
(462, 'PM-368', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(463, 'PM-638', 'SH-256', '1000', '2015', '07', '28', '01:00', 'green', NULL, 'SH-147'),
(464, 'PM-638', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(465, 'MG-453', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(466, 'PM-638', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(467, 'MG-795', 'SH-147', '750', '2015', '07', '30', '02:00', 'orange', NULL, 'SH-147'),
(468, 'MG-453', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(469, 'PM-368', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(470, 'MG-453', NULL, NULL, '2015', '08', '6', NULL, '#ff0000', NULL, NULL),
(471, 'MG-453', NULL, NULL, '2015', '07', '15', NULL, '#ff0000', NULL, NULL),
(472, 'MG-453', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-147'),
(473, 'MG-795', NULL, NULL, '2015', '08', '15', NULL, '#ff0000', NULL, NULL),
(474, 'PM-368', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-193'),
(475, 'PM-155', 'SH-147', '750', '2015', '08', '16', '01:00', 'orange', NULL, 'SH-193'),
(476, 'MG-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(477, 'PM-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(478, 'MG-453', 'SH-193', '500', '2015', '08', '17', '01:00', 'yellow', NULL, 'SH-147'),
(479, 'MG-795', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(480, 'PM-155', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(481, 'PM-368', 'SH-193', '500', '2015', '08', '18', '02:01', 'yellow', '12:57', 'SH-147'),
(482, 'MG-453', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(483, 'PM-453', 'SH-193', '500', '2015', '08', '18', '18:01', 'yellow', '15:59', 'SH-147'),
(484, 'PM-638', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(10, 'MG-795', 'SH-268', '95', '2015', '07', '26', '01:00', 'orange', NULL, 'SH-268'),
(13, 'MG-795', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(14, 'PM-368', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(16, 'PM-638', 'SH-147', '750', '2015', '07', '27', '03:00', 'orange', NULL, 'SH-147'),
(458, 'PM-368', 'SH-147', '750', '2015', '07', '28', '02:01', 'orange', NULL, 'SH-147'),
(459, 'MG-453', 'SH-725', '1500', '2015', '07', '29', '14:02', 'blue', NULL, 'SH-725'),
(460, 'MG-453', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(461, 'PM-453', 'SH-147', '750', '2015', '07', '26', '03:00', 'orange', NULL, 'SH-147'),
(462, 'PM-368', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(463, 'PM-638', 'SH-256', '1000', '2015', '07', '28', '01:00', 'green', NULL, 'SH-147'),
(464, 'PM-638', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(465, 'MG-453', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(466, 'PM-638', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(467, 'MG-795', 'SH-147', '750', '2015', '07', '30', '02:00', 'orange', NULL, 'SH-147'),
(468, 'MG-453', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(469, 'PM-368', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(470, 'MG-453', NULL, NULL, '2015', '08', '6', NULL, '#ff0000', NULL, NULL),
(471, 'MG-453', NULL, NULL, '2015', '07', '15', NULL, '#ff0000', NULL, NULL),
(472, 'MG-453', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-147'),
(473, 'MG-795', NULL, NULL, '2015', '08', '15', NULL, '#ff0000', NULL, NULL),
(474, 'PM-368', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-193'),
(475, 'PM-155', 'SH-147', '750', '2015', '08', '16', '01:00', 'orange', NULL, 'SH-193'),
(476, 'MG-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(477, 'PM-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(478, 'MG-453', 'SH-193', '500', '2015', '08', '17', '01:00', 'yellow', NULL, 'SH-147'),
(479, 'MG-795', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(480, 'PM-155', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(481, 'PM-368', 'SH-193', '500', '2015', '08', '18', '02:01', 'yellow', '12:57', 'SH-147'),
(482, 'MG-453', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(483, 'PM-453', 'SH-193', '500', '2015', '08', '18', '18:01', 'yellow', '15:59', 'SH-147'),
(484, 'PM-638', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(10, 'MG-795', 'SH-268', '95', '2015', '07', '26', '01:00', 'orange', NULL, 'SH-268'),
(13, 'MG-795', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(14, 'PM-368', NULL, NULL, '2015', '07', '27', NULL, '#ff0000', NULL, NULL),
(16, 'PM-638', 'SH-147', '750', '2015', '07', '27', '03:00', 'orange', NULL, 'SH-147'),
(458, 'PM-368', 'SH-147', '750', '2015', '07', '28', '02:01', 'orange', NULL, 'SH-147'),
(459, 'MG-453', 'SH-725', '1500', '2015', '07', '29', '14:02', 'blue', NULL, 'SH-725'),
(460, 'MG-453', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(461, 'PM-453', 'SH-147', '750', '2015', '07', '26', '03:00', 'orange', NULL, 'SH-147'),
(462, 'PM-368', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(463, 'PM-638', 'SH-256', '1000', '2015', '07', '28', '01:00', 'green', NULL, 'SH-147'),
(464, 'PM-638', NULL, NULL, '2015', '07', '26', NULL, '#ff0000', NULL, NULL),
(465, 'MG-453', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(466, 'PM-638', NULL, NULL, '2015', '07', '30', NULL, '#ff0000', NULL, NULL),
(467, 'MG-795', 'SH-147', '750', '2015', '07', '30', '02:00', 'orange', NULL, 'SH-147'),
(468, 'MG-453', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(469, 'PM-368', NULL, NULL, '2015', '07', '31', NULL, '#ff0000', NULL, NULL),
(470, 'MG-453', NULL, NULL, '2015', '08', '6', NULL, '#ff0000', NULL, NULL),
(471, 'MG-453', NULL, NULL, '2015', '07', '15', NULL, '#ff0000', NULL, NULL),
(472, 'MG-453', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-147'),
(473, 'MG-795', NULL, NULL, '2015', '08', '15', NULL, '#ff0000', NULL, NULL),
(474, 'PM-368', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', NULL, 'SH-193'),
(475, 'PM-155', 'SH-147', '750', '2015', '08', '16', '01:00', 'orange', NULL, 'SH-193'),
(476, 'MG-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(477, 'PM-453', NULL, NULL, '2015', '08', '16', NULL, '#ff0000', NULL, NULL),
(478, 'MG-453', 'SH-193', '500', '2015', '08', '17', '01:00', 'yellow', NULL, 'SH-147'),
(479, 'MG-795', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(480, 'PM-155', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(481, 'PM-368', 'SH-193', '500', '2015', '08', '18', '02:01', 'yellow', '12:57', 'SH-147'),
(482, 'MG-453', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(483, 'PM-453', 'SH-193', '500', '2015', '08', '18', '18:01', 'yellow', '15:59', 'SH-147'),
(484, 'PM-638', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL),
(500, NULL, NULL, NULL, '2015', '08', '24', NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, '2015', '08', '24', NULL, NULL, NULL, NULL),
(1000, NULL, NULL, NULL, '2015', '08', '24', NULL, NULL, NULL, NULL),
(1450, NULL, NULL, NULL, '2015', '08', '25', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Id`, `Name`, `Description`, `Address`) VALUES
(1, 'Emma haha', 'Emma !', 'California'),
(2, 'NYC', 'NYC branch ', 'New york');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `car_transactions`
--

INSERT INTO `car_transactions` (`id`, `cname`, `contact`, `email`, `package`, `vehicleNo`, `amount`, `date`, `status`, `returnedDate`) VALUES
(5, 'KamAl', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'CAT4567', 4500, '2015-07-19', 'Returned', '2015-08-22'),
(6, 'fgd', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'fdgf', 4500, '2015-07-31', 'Returned', '2015-08-22'),
(8, 'zxczxc', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'xzczxczxc', 4500, '2015-08-01', 'Returned', '2015-08-01'),
(9, 'zxczxc', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'cxvxcv', 4500, '2015-08-01', 'Returned', '2015-08-22'),
(10, 'isu', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'you', 4500, '2015-08-16', 'Returned', '2015-08-22'),
(11, 'fg', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'fgg', 4500, '2015-08-16', 'Returned', '2015-08-22'),
(12, 'dfgdf', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'ghfhfg', 4500, '2015-08-20', 'Returned', '2015-08-24'),
(13, 'rajika', '0789164423', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', '6768', 4500, '2015-08-20', 'Not Returned', 'None'),
(14, 'rajika', '0778355666', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', 'ioipo', 4500, '2015-08-20', 'Returned', '2015-08-22'),
(15, 'isuru', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', '788j', 4500, '2015-08-22', 'Returned', '2015-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` varchar(50) NOT NULL DEFAULT '',
  `client_fname` varchar(100) DEFAULT NULL,
  `client_lname` varchar(100) DEFAULT NULL,
  `client_address` varchar(200) DEFAULT NULL,
  `client_nic` varchar(50) DEFAULT NULL,
  `client_phone` varchar(100) DEFAULT NULL,
  `client_purchase_date` varchar(50) DEFAULT NULL,
  `client_purchase_amount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_fname`, `client_lname`, `client_address`, `client_nic`, `client_phone`, `client_purchase_date`, `client_purchase_amount`) VALUES
('0', 'J.R', 'Jayawardane', 'Colombo', '221821298V', '011-8965250', '2015-06-01', '80000'),
('1', 'Mahinda ', 'Rajapakshe', 'Hambanthota', '481821298V', '77', '2015-07-01', '50,000'),
('2', 'Ranil ', 'Wickramasinghe', 'Colombo', '456321258V', '077-9898987', '2015-07-01', '100000'),
('fe', 'e', 'e', 'e', '324234', '2342', '2015-08-12', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `client_transactions`
--

CREATE TABLE IF NOT EXISTS `client_transactions` (
  `clientid` varchar(50) NOT NULL,
  `clientfirstname` varchar(50) NOT NULL,
  `clientlastname` varchar(50) NOT NULL,
  `updateddate` varchar(100) NOT NULL,
  `fullamount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emergencytransport`
--

CREATE TABLE IF NOT EXISTS `emergencytransport` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `vehicleno` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `emergencytransport`
--

INSERT INTO `emergencytransport` (`Id`, `fullname`, `nic`, `vehicleno`, `contact`, `description`, `email`, `date`) VALUES
(11, 'Test', '1212121212', 'SG-4187878', 71793727, 'test', 'test@gmail.com', '2015-08-19'),
(14, 'Jason', '874514872V', 'WP-778787988', 717479370, 'Hehmm\n', 'tippa@gmail.com', '2015-08-19'),
(16, 'Test1112', '789456123V', '787', 717478370, 'bbb', 's@gmail.com', '2015-08-20'),
(18, 'test', '123456345V', '23', 717479377, '232', 'raemiyoung@gmail.com', '2015-08-23');

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
  `userFile` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`employeeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`employeeCode`, `firstName`, `lastName`, `address`, `nicNumber`, `mobilePhone`, `birthDate`, `hireDate`, `emptype`, `userName`, `userPassword`, `userFile`) VALUES
('MG-453', 'Tiffany', 'Hwang', 'yay', '747842458v', '', '', '', 'Admin', 'Tiffany', '123', ''),
('MG-795', 'damman', 'man', '', '', '', '', '', 'Admin', '', '', ''),
('PM-155', 'rajika', 'kakak', 'lol', '930152400v', '0718122424', '2015-08-20', '2015-07-31', 'Pump Staff', 'nullnull', 'nullNull123', 'Share2015-07-07-00f4417c7a22057f8d99dbd9c8260929ad19ef94401ef73cb8ba8a79a6de5806-Picture.jpg'),
('PM-453', 'sunil', 'abeysekara', 'hkjhkjh', '930512400v', '0716010860', '2015-07-13', '2015-07-21', 'Pump Staff', 'nullnull', 'nullNull123', 'Screenshot (50).png'),
('PM-638', 'Kavi', 'Oshan', 'kollupitiya', '150512488v', '0716010860', '2015-07-27', '2015-07-21', 'Pump Staff', 'nullnull', 'nullNull123', '');

-- --------------------------------------------------------

--
-- Table structure for table `eveningstocks`
--

CREATE TABLE IF NOT EXISTS `eveningstocks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FuelType` varchar(2) NOT NULL,
  `Reading` float NOT NULL,
  `Quantity` float NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `eveningstocks`
--

INSERT INTO `eveningstocks` (`Id`, `FuelType`, `Reading`, `Quantity`, `Date`) VALUES
(1, 'Pe', 200, 400, '2015-08-17'),
(2, 'SP', 700, 1400, '2015-08-17'),
(3, 'Di', 0, 0, '2015-08-17'),
(4, 'SD', 0, 0, '2015-08-17'),
(5, 'Pe', 200, 400, '2015-08-19'),
(6, 'SP', 200, 400, '2015-08-19'),
(7, 'Di', 700, 1400, '2015-08-19'),
(8, 'SD', 200, 400, '2015-08-19'),
(9, 'Pe', 200, 400, '2015-08-19'),
(10, 'SP', 200, 400, '2015-08-19'),
(11, 'Di', 700, 1400, '2015-08-19'),
(12, 'SD', 700, 1400, '2015-08-19'),
(13, 'Pe', 700, 1400, '2015-08-20'),
(14, 'SP', 200, 400, '2015-08-20'),
(15, 'Di', 700, 1400, '2015-08-20'),
(16, 'SD', 1200, 2400, '2015-08-20'),
(17, 'Pe', 1, 99, '2015-08-22'),
(18, 'SP', 4.5, 342, '2015-08-22'),
(19, 'Di', 2, 199, '2015-08-22'),
(20, 'SD', 4, 304, '2015-08-22'),
(21, 'Pe', 1.5, 149, '2015-08-22'),
(22, 'SP', 6.5, 495, '2015-08-22'),
(23, 'Di', 7.5, 745, '2015-08-22'),
(24, 'SD', 5.5, 419, '2015-08-22'),
(25, 'Pe', 3, 298, '2015-08-26'),
(26, 'SP', 8, 609, '2015-08-26'),
(27, 'Di', 6.5, 646, '2015-08-26'),
(28, 'SD', 8.5, 647, '2015-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_expense`
--

CREATE TABLE IF NOT EXISTS `fuel_expense` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `expfueltype` varchar(10) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `fuelpayment` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fuel_expense`
--

INSERT INTO `fuel_expense` (`Id`, `expfueltype`, `capacity`, `date`, `fuelpayment`) VALUES
(1, 'Petrol', '19800', '2015-08-24', '3434'),
(3, 'Diesel', '6600', '2015-08-24', '5000'),
(4, 'SPetrol', '19800', '2015-08-25', '75800'),
(5, 'SPetrol', '19800', '2015-08-25', '4500'),
(9, 'Petrol', '19800', '2015-08-25', '1600'),
(10, 'SPetrol', '19800', '2015-08-26', '1750');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_income`
--

CREATE TABLE IF NOT EXISTS `fuel_income` (
  `incomeID` int(4) NOT NULL AUTO_INCREMENT,
  `empID` varchar(50) NOT NULL,
  `empName` varchar(50) NOT NULL,
  `fueltype` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  `fuelincome` float NOT NULL,
  PRIMARY KEY (`incomeID`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Lubricants`
--

INSERT INTO `Lubricants` (`Id`, `Name`, `Price`, `Quantity`, `Supplier`) VALUES
(2, 'T2', 780, 4, 'T2 dude'),
(4, 'Abc', 1, 5, 'T2 dude'),
(6, 'Just test 2', 11, 3, 'T2 dude'),
(7, 'test2', 333, 33, 'T2 dude'),
(8, 'Test', 124, 45, 'T2 dude');

-- --------------------------------------------------------

--
-- Table structure for table `lubricanttransport`
--

CREATE TABLE IF NOT EXISTS `lubricanttransport` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Driver` varchar(30) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Vehicleno` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lubricanttransport`
--

INSERT INTO `lubricanttransport` (`Id`, `Date`, `Driver`, `Branch`, `Product`, `Vehicleno`) VALUES
(3, '2015-08-20', 'Jack', 'Heaven', '87878', 'Batmobile '),
(4, '2015-08-20', 'Tom', 'NYC2', '8', 'WP7845'),
(6, '2015-08-23', 'Tom', 'NYC', '232', '787878');

-- --------------------------------------------------------

--
-- Table structure for table `lubricant_expense`
--

CREATE TABLE IF NOT EXISTS `lubricant_expense` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bquantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lubricant_expense`
--

INSERT INTO `lubricant_expense` (`Id`, `product`, `price`, `supplier`, `quantity`, `bquantity`, `total`, `date`) VALUES
(1, 'T2', 780, 'T2 dude', 4, 5, 3900, '2015-08-25'),
(2, 'T2', 780, 'T2 dude', 4, 5, 3900, '2015-08-25'),
(3, 'Greese', 1, 'T2 dude', 5, 4, 4, '2015-08-25'),
(4, 'T2', 780, 'T2 dude', 4, 6, 4680, '2015-08-25'),
(5, 'Just test 2', 11, 'T2 dude', 3, 7, 77, '2015-08-25'),
(6, 'T2', 780, 'T2 dude', 4, 5, 3900, '2015-08-25'),
(7, 'T2', 780, 'T2 dude', 4, 4, 3120, '2015-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `lubricant_income`
--

CREATE TABLE IF NOT EXISTS `lubricant_income` (
  `prdIncomeID` int(11) NOT NULL AUTO_INCREMENT,
  `prdType` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `supplier` varchar(30) DEFAULT NULL,
  `sellingqty` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `lubricantincome` float DEFAULT NULL,
  PRIMARY KEY (`prdIncomeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `description` varchar(200) NOT NULL,
  `duration` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lu_packages`
--

INSERT INTO `lu_packages` (`id`, `name`, `price`, `description`, `duration`) VALUES
(1, 'QUICK LUBRICATION - GOLD', 8000, 'A total lubricating service in only 30 minutes. It covers every essential aspect of a professional car service at a most economical price. Top up to optimal capacity or completely change it using high', '30'),
(2, 'UNDERCARRIAGE DEGREASING - GOLD', 8000, 'Completely degrease the undercarriage of the automobile, removing accumulated oil and grit using the application of pressure washes with advanced pressure sensors.', '20'),
(3, 'VACUUM FLOOR / SEATS & TRUNK- GOLD', 8000, 'Vacuum the cabin interior, seats and trunk to ensure removal of dust and particle accumulation', '20'),
(4, 'WINDSCREEN & GLASS CLEANING- GOLD', 8000, 'Glass treatment improves wet weather driving visibility. The treatment uses a non-streaking formula, ammonia free and safe for tinted windows. This is ideal for high humidity conditions.', '30'),
(5, 'QUICK LUBRICATION - SILVER', 5000, 'Restore the true colour and natural gloss to the dashboard and leaves tyres looking new.', '30'),
(6, 'UNDERCARRIAGE DEGREASING - SILVER', 5000, 'A total lubricating service in only 30 minutes. It covers every essential aspect of a professional car service at a most economical price. Top up to optimal capacity or completely change it using high', '30'),
(7, 'VISUAL SAFETY CHECK - SILVER', 5000, '', ''),
(10, ' EXTERIOR WAXING - GOLD', 8000, '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=375 ;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Id`, `FuelType`, `Reading`, `Quantity`, `Orderamnt`, `Date`) VALUES
(253, 'Diesel', 23, 6767, 13200, '2015-08-22'),
(256, 'SPetrol', 5, 723, 6600, '2015-08-22'),
(262, 'SDiesel', 151.5, 11530, 13200, '2015-08-22'),
(264, 'SPetrol', 146, 11111, 13200, '2015-08-22'),
(268, 'SPetrol', 7, 533, 19800, '2015-08-22'),
(269, 'Diesel', 6, 596, 6600, '2015-08-22'),
(276, 'SPetrol', 0, 0, 6600, '2015-08-22'),
(280, 'SPetrol', 0, 0, 6600, '2015-08-22'),
(284, 'SPetrol', 1.5, 114, 19800, '2015-08-22'),
(288, 'SPetrol', 8.5, 647, 19800, '2015-08-22'),
(289, 'Diesel', 8, 795, 6600, '2015-08-22'),
(290, 'SDiesel', 9.5, 723, 19800, '2015-08-22'),
(291, 'Petrol', 117.5, 11675, 19800, '2015-08-22'),
(292, 'SPetrol', 145, 11035, 19800, '2015-08-22'),
(293, 'Diesel', 43, 4272, 6600, '2015-08-22'),
(294, 'SDiesel', 161.5, 12291, 19800, '2015-08-22'),
(296, 'SPetrol', 51.5, 3919, 19800, '2015-08-22'),
(297, 'Diesel', 60, 5962, 6600, '2015-08-22'),
(298, 'SDiesel', 95, 7230, 19800, '2015-08-22'),
(300, 'SPetrol', 119.5, 9094, 19800, '2015-08-22'),
(301, 'Diesel', 70, 6955, 6600, '2015-08-22'),
(302, 'SDiesel', 157, 11948, 19800, '2015-08-22'),
(303, 'Petrol', 64.5, 6409, 19800, '2015-08-23'),
(304, 'SPetrol', 7, 533, 19800, '2015-08-23'),
(305, 'Diesel', 8, 795, 6600, '2015-08-23'),
(306, 'SDiesel', 2, 152, 19800, '2015-08-23'),
(307, 'Petrol', 119.5, 11873, 19800, '2015-08-23'),
(308, 'SPetrol', 126, 9589, 19800, '2015-08-23'),
(309, 'Diesel', 45, 4471, 6600, '2015-08-23'),
(310, 'SDiesel', 111.5, 8486, 19800, '2015-08-23'),
(311, 'Petrol', 5, 497, 19800, '2015-08-23'),
(312, 'SPetrol', 7, 533, 13200, '2015-08-23'),
(313, 'Diesel', 8, 795, 6600, '2015-08-23'),
(314, 'SDiesel', 8.5, 647, 19800, '2015-08-23'),
(315, 'Petrol', 2, 199, 19800, '2015-08-23'),
(316, 'SPetrol', 6, 457, 19800, '2015-08-23'),
(317, 'Diesel', 7, 696, 6600, '2015-08-23'),
(318, 'SDiesel', 7.5, 571, 19800, '2015-08-23'),
(319, 'Petrol', 3, 298, 13200, '2015-08-23'),
(320, 'SPetrol', 3.5, 266, 6600, '2015-08-23'),
(321, 'Diesel', 6.5, 646, 6600, '2015-08-23'),
(322, 'SDiesel', 3.5, 266, 19800, '2015-08-23'),
(323, 'Petrol', 0.5, 50, 19800, '2015-08-23'),
(324, 'SPetrol', 8.5, 647, 19800, '2015-08-23'),
(325, 'Diesel', 5.5, 546, 6600, '2015-08-23'),
(326, 'SDiesel', 1.5, 114, 19800, '2015-08-23'),
(327, 'Petrol', 1, 99, 19800, '2015-08-23'),
(328, 'SPetrol', 6.5, 495, 19800, '2015-08-23'),
(329, 'Diesel', 6.5, 646, 6600, '2015-08-23'),
(330, 'SDiesel', 6.5, 495, 19800, '2015-08-23'),
(331, 'Petrol', 7.5, 745, 19800, '2015-08-23'),
(332, 'SPetrol', 8, 609, 6600, '2015-08-23'),
(333, 'Diesel', 8.5, 845, 6600, '2015-08-23'),
(334, 'SDiesel', 5.5, 419, 19800, '2015-08-23'),
(335, 'Petrol', 1, 99, 19800, '2015-08-24'),
(336, 'SPetrol', 7, 533, 19800, '2015-08-24'),
(337, 'Diesel', 7, 696, 6600, '2015-08-24'),
(338, 'SDiesel', 6.5, 495, 19800, '2015-08-24'),
(339, 'Petrol', 3.5, 348, 19800, '2015-08-25'),
(340, 'SPetrol', 7.5, 571, 19800, '2015-08-25'),
(341, 'Diesel', 5.5, 546, 6600, '2015-08-25'),
(342, 'SDiesel', 1.5, 114, 19800, '2015-08-25'),
(343, 'Petrol', 2.5, 248, 19800, '2015-08-25'),
(344, 'SPetrol', 1.5, 114, 19800, '2015-08-25'),
(345, 'Diesel', 4, 397, 6600, '2015-08-25'),
(346, 'SDiesel', 5, 381, 19800, '2015-08-25'),
(347, 'Petrol', 7, 696, 19800, '2015-08-25'),
(348, 'SPetrol', 5, 381, 19800, '2015-08-25'),
(349, 'Diesel', 8, 795, 6600, '2015-08-25'),
(350, 'SDiesel', 7, 533, 19800, '2015-08-25'),
(351, 'Petrol', 104.5, 10383, 19800, '2015-08-25'),
(352, 'SPetrol', 95, 7230, 13200, '2015-08-25'),
(353, 'Diesel', 104.5, 10383, 6600, '2015-08-25'),
(354, 'SDiesel', 78, 5936, 19800, '2015-08-25'),
(355, 'Petrol', 3.5, 348, 19800, '2015-08-26'),
(356, 'SPetrol', 7.5, 571, 19800, '2015-08-26'),
(357, 'Diesel', 8.5, 845, 6600, '2015-08-26'),
(358, 'SDiesel', 6, 457, 19800, '2015-08-26'),
(359, 'Petrol', 199.5, 19822, 19800, '2015-08-26'),
(360, 'SPetrol', 6, 457, 19800, '2015-08-26'),
(361, 'Diesel', 5, 497, 6600, '2015-08-26'),
(362, 'SDiesel', 9, 685, 19800, '2015-08-26'),
(363, 'Petrol', 0, 0, 6600, '2015-08-26'),
(364, 'SPetrol', 210.5, 16020, 19800, '2015-08-26'),
(365, 'Diesel', 0, 0, 6600, '2015-08-26'),
(366, 'SDiesel', 0, 0, 6600, '2015-08-26'),
(367, 'Petrol', 226, 22455, 19800, '2015-08-26'),
(368, 'SPetrol', 8.5, 647, 19800, '2015-08-26'),
(369, 'Diesel', 86, 8545, 6600, '2015-08-26'),
(370, 'SDiesel', 95, 7230, 19800, '2015-08-26'),
(371, 'Petrol', 200, 19872, 19800, '2015-08-26'),
(372, 'SPetrol', 188.5, 14346, 19800, '2015-08-26'),
(373, 'Diesel', 207.5, 20617, 6600, '2015-08-26'),
(374, 'SDiesel', 179.5, 13661, 19800, '2015-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `other_expenses`
--

CREATE TABLE IF NOT EXISTS `other_expenses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `expense` float NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `other_expenses`
--

INSERT INTO `other_expenses` (`Id`, `description`, `expense`, `date`) VALUES
(1, 'test', 23, '2015-08-25'),
(2, 'Paint', 458, '2015-08-25'),
(3, 'Just a test', 7820, '2015-08-25'),
(4, 'Just a test', 7820, '2015-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `overallexpense`
--

CREATE TABLE IF NOT EXISTS `overallexpense` (
  `ovrlexpID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `fuel_exp` float NOT NULL,
  `lub_exp` float NOT NULL,
  `other_exp` float NOT NULL,
  PRIMARY KEY (`ovrlexpID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `overallincome`
--

CREATE TABLE IF NOT EXISTS `overallincome` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `fuelincome` float NOT NULL,
  `lubricantincome` float NOT NULL,
  `regularCw` float NOT NULL,
  `nonregularCw` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'Platinum Value Car Wash', 'Ultimate value car wash with mat shampoo - Limit 4', '48', 3000),
(2, 'Ultimate Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant, underbody wash, tire shine, rim cleaning wheel bright, triple foam polish wax, rust inhibitor and interior fragrance spray.', '48', 5500),
(4, 'Hand Wash', 'smooth washing\nhee', '2', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `empID` varchar(50) NOT NULL,
  `empName` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `paid` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `empID`, `empName`, `date`, `paid`) VALUES
(1, 'MG-795', 'damman man', '2015-08-25', '1500'),
(4, 'MG-795', 'damman man', '2015-08-25', '1500');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `pumpreadings`
--

INSERT INTO `pumpreadings` (`Id`, `Date`, `Reading`, `PumpNo`) VALUES
(1, '2015-08-16', 3, 0),
(2, '2015-08-16', 34, 0),
(3, '2015-08-16', 45, 0),
(4, '2015-08-16', 56, 0),
(7, '2015-08-21', 56, 3),
(8, '2015-12-16', 5, 4),
(12, '2015-08-16', 8, 2),
(31, '2015-08-22', 23435, 3),
(32, '2015-08-23', 3434, 1),
(33, '2015-08-23', 454, 3),
(34, '2015-08-23', 5656, 4),
(35, '2015-08-23', 676, 5),
(36, '2015-08-23', 5656, 6),
(38, '2015-08-25', 34, 1),
(39, '2015-08-25', 34, 1),
(40, '2015-08-25', 45, 3),
(41, '2015-08-25', 67, 4),
(42, '2015-08-25', 87, 5),
(43, '2015-08-25', 34, 1),
(44, '2015-08-25', 45, 3),
(45, '2015-08-25', 4534, 4),
(46, '2015-08-25', 23, 1),
(47, '2015-08-25', 34, 3),
(48, '2015-08-25', 45, 4),
(49, '2015-08-25', 56, 5),
(50, '2015-08-25', 67, 6),
(51, '2015-08-25', 78, 7),
(52, '2015-08-25', 8, 8),
(53, '2015-08-25', 89, 9),
(54, '2015-08-25', 90, 10),
(55, '2015-08-25', 23, 1),
(56, '2015-08-25', 34, 3),
(57, '2015-08-25', 5, 4),
(58, '2015-08-25', 45, 5),
(59, '2015-08-25', 45, 6),
(60, '2015-08-25', 45, 7),
(61, '2015-08-25', 45, 8),
(62, '2015-08-25', 45, 9),
(63, '2015-08-25', 45, 10),
(64, '2015-08-26', 1754, 1),
(65, '2015-08-26', 4785, 3),
(66, '2015-08-26', 5872, 4),
(67, '2015-08-26', 5879, 5),
(68, '2015-08-26', 4569, 6),
(69, '2015-08-26', 7854, 7),
(70, '2015-08-26', 1254, 8),
(71, '2015-08-26', 4785, 9),
(72, '2015-08-26', 12457, 10);

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
(2, 'Offline', ''),
(3, 'Online', 'Petrol'),
(4, 'Online', 'SuperPetrol'),
(5, 'Online', 'Diesel'),
(6, 'Online', 'SuperDiesel'),
(7, 'Online', 'Diesel'),
(8, 'Online', 'SuperDiesel'),
(9, 'Online', 'Petrol'),
(10, 'Online', 'SuperPetrol');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

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
(48, 'rc-1018', 'Ultimate Value Car Wash', 'zxa', 3600, '2015-08-22', 'Returned', '2015-08-22'),
(49, 'rc-1090', 'Hand Wash', 'yui', 8000, '2015-08-22', 'Returned', '2015-08-22');

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
('SH-147', '7 hour', '7.00', '750', 'orange'),
('SH-193', '8 hours', '8.00', '500', 'yellow'),
('SH-256', '12hour', '12.00', '1000', 'green'),
('SH-725', '10 hour', '10.00', '1500', 'blue');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `Suppliers`
--

INSERT INTO `Suppliers` (`Id`, `name`, `product`, `contact`, `email`) VALUES
(41, 'T2 dude', 'lubricant', 717479370, 't2dude@gmail.com'),
(45, 't3', 'fuel', 717479370, 'ram@gmail.com'),
(46, 'sup', 'lubricant', 717778782, 'sup@gmail.com'),
(47, 'Wassup', 'lubricant', 717973705, 'wassup@gmail.com'),
(48, 'sda', 'fuel', 474799729, 'rae@gmail.com'),
(49, 'ga', 'fuel', 717479370, 'erae@gmail.com'),
(50, 'New', 'fuel', 717479370, 'new@gmail.com'),
(51, 'New2', 'lubricant', 717479370, 'new2@gmail.com'),
(52, 'New4', 'fuel', 717479370, 'new4@gmali.com'),
(53, 'Ne5', 'fuel', 717493702, 'ne5@gmail.com'),
(54, 'Ne9', 'fuel', 717499370, 'nei@gmali.com'),
(55, 'Hekki', 'fuel', 717479370, 'hek@gmail.com'),
(56, 'Jkjk', 'fuel', 717493702, 'Jij@gmail.com'),
(57, 'Hak', 'fuel', 717479370, 'hak@gmali.com'),
(58, 'Kmk', 'fuel', 717479370, 'kmk@gmal.com'),
(59, 'Kmk', 'lubricant', 717479370, 'kmk@gmal.com'),
(60, 'Mlak', 'fuel', 717479370, 'kj@gmail.com'),
(61, 'Mlak', 'lubricant', 717479370, 'kj@gmail.com'),
(62, 'Sf', 'fuel', 717493702, 'sd@gmailc.ocmo'),
(63, 'Sf', 'lubricant', 717493702, 'sd@gmailc.ocmo'),
(64, 'Adsad', 'lubricant', 717937042, 'asd@gmail.com'),
(65, 'Ad', 'fuel', 717479370, 'ak@gmail.com'),
(66, 'Ad', 'fuel', 717479370, 'ak@gmail.com'),
(67, 'Ad', 'lubricant', 717479370, 'ak@gmail.com'),
(68, 'OP', 'fuel', 717479372, 'op@gmail.com'),
(69, 'OP', 'fuel', 717479372, 'op@gmail.com'),
(70, 'OP', 'lubricant', 717479372, 'op@gmail.com'),
(71, 'Just', 'fuel', 717479370, 'just@gmail.com'),
(72, 'Just2', 'lubricant', 717493702, 'Just2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tanks`
--

CREATE TABLE IF NOT EXISTS `tanks` (
  `Id` int(11) NOT NULL,
  `Petrol` float NOT NULL,
  `SPetrol` float NOT NULL,
  `Diesel` float NOT NULL,
  `SDiesel` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanks`
--

INSERT INTO `tanks` (`Id`, `Petrol`, `SPetrol`, `Diesel`, `SDiesel`) VALUES
(1, 19872, 14346, 20617, 13661);

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
