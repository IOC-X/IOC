-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2015 at 07:33 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=485 ;

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
(484, 'PM-638', NULL, NULL, '2015', '08', '18', NULL, '#ff0000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_transactions`
--

CREATE TABLE IF NOT EXISTS `car_transactions` (
`id` int(11) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Returned'
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
('MG-453', 'gfhg', 'hgfhgfhg', '', '', '', '', '', 'Admin', '', '', ''),
('MG-795', 'damman', 'man', '', '', '', '', '', 'Admin', '', '', ''),
('PM-155', 'rajika', 'kakak', 'lol', '930152400v', '0718122424', '2015-08-20', '2015-07-31', 'Pump Staff', 'nullnull', 'nullNull123', 'Share2015-07-07-00f4417c7a22057f8d99dbd9c8260929ad19ef94401ef73cb8ba8a79a6de5806-Picture.jpg'),
('PM-368', 'ghfhgf', 'hgfhgfhg', 'fhgfhgfhg', 'fhgfhgfhgf', 'hgfhgfhg', '2015-07-22', '2015-06-30', 'Pump Staff', 'nullnull', 'nullNull123', 'Screenshot (52).png'),
('PM-453', 'sunil', 'abeysekara', 'hkjhkjh', '930512400v', '0716010860', '2015-07-13', '2015-07-21', 'Pump Staff', 'nullnull', 'nullNull123', 'Screenshot (50).png'),
('PM-638', 'Kavi', 'Oshan', 'kollupitiya', '150512488v', '0716010860', '2015-07-27', '2015-07-21', 'Pump Staff', 'nullnull', 'nullNull123', '');

-- --------------------------------------------------------

--
-- Table structure for table `eveningstocks`
--

CREATE TABLE IF NOT EXISTS `eveningstocks` (
`Id` int(11) NOT NULL,
  `FuelType` varchar(2) NOT NULL,
  `Reading` float NOT NULL,
  `Quantity` float NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `eveningstocks`
--

INSERT INTO `eveningstocks` (`Id`, `FuelType`, `Reading`, `Quantity`, `Date`) VALUES
(1, 'Pe', 200, 400, '2015-08-17'),
(2, 'SP', 700, 1400, '2015-08-17'),
(3, 'Di', 0, 0, '2015-08-17'),
(4, 'SD', 0, 0, '2015-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `lubricants`
--

CREATE TABLE IF NOT EXISTS `lubricants` (
`Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Supplier` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lubricants`
--

INSERT INTO `lubricants` (`Id`, `Name`, `Price`, `Quantity`, `Supplier`) VALUES
(2, 'T2', 780, 4, 'T2 dude'),
(4, 'K3', 1, 5, 'T2 dude');

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
  `date` varchar(15) NOT NULL
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
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
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
`id` int(11) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(15) NOT NULL
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
`Id` int(11) NOT NULL,
  `FuelType` varchar(10) NOT NULL,
  `Reading` float NOT NULL,
  `Quantity` float NOT NULL,
  `Orderamnt` int(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `FuelType`, `Reading`, `Quantity`, `Orderamnt`, `Date`) VALUES
(143, 'Petrol', 200, 44, 19800, '2015-08-17'),
(144, 'SPetrol', 700, 1400, 19800, '2015-08-17'),
(145, 'Diesel', 200, 400, 6600, '2015-08-17'),
(146, 'SDiesel', 700, 1400, 19800, '2015-08-17'),
(151, 'Petrol', 200, 400, 19800, '2015-08-17'),
(152, 'SPetrol', 700, 1400, 19800, '2015-08-17'),
(153, 'Diesel', 700, 1400, 6600, '2015-08-17'),
(154, 'SDiesel', 1200, 2400, 19800, '2015-08-17'),
(155, 'Petrol', 200, 400, 19800, '2015-08-17'),
(156, 'SPetrol', 700, 1400, 19800, '2015-08-17'),
(157, 'Diesel', 700, 1400, 6600, '2015-08-17'),
(158, 'SDiesel', 200, 400, 19800, '2015-08-17');

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
('SH-147', '7 hour', '7.00', '750', 'orange'),
('SH-193', '8 hours', '8.00', '500', 'yellow'),
('SH-256', '12hour', '12.00', '1000', 'green'),
('SH-725', '10 hour', '10.00', '1500', 'blue');

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
-- Indexes for table `car_transactions`
--
ALTER TABLE `car_transactions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
 ADD PRIMARY KEY (`employeeCode`);

--
-- Indexes for table `eveningstocks`
--
ALTER TABLE `eveningstocks`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lubricants`
--
ALTER TABLE `lubricants`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lu_customers`
--
ALTER TABLE `lu_customers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lu_packages`
--
ALTER TABLE `lu_packages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonreglu_transactions`
--
ALTER TABLE `nonreglu_transactions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`Id`);

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
MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=485;
--
-- AUTO_INCREMENT for table `car_transactions`
--
ALTER TABLE `car_transactions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `eveningstocks`
--
ALTER TABLE `eveningstocks`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lubricants`
--
ALTER TABLE `lubricants`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lu_packages`
--
ALTER TABLE `lu_packages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nonreglu_transactions`
--
ALTER TABLE `nonreglu_transactions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
