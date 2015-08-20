-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2015 at 12:25 PM
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
  `empCode` varchar(50) NOT NULL,
  `shiftCode` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `month` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `startTime` varchar(50) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `endTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
`countid` int(100) NOT NULL,
  `employeeCode` varchar(50) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `nicNumber` varchar(50) DEFAULT NULL,
  `homePhone` varchar(50) DEFAULT NULL,
  `mobilePhone` varchar(50) DEFAULT NULL,
  `birthDate` varchar(50) DEFAULT NULL,
  `hireDate` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `userFile` varchar(250) DEFAULT NULL,
  `userTextarea` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`countid`, `employeeCode`, `firstName`, `lastName`, `address`, `nicNumber`, `homePhone`, `mobilePhone`, `birthDate`, `hireDate`, `email`, `userName`, `userPassword`, `userFile`, `userTextarea`) VALUES
(9, 'MG-841', '', '', '', '', '', '', '', '', '', '', '', NULL, ''),
(10, 'MG-726', '', '', '', '', '', '', '2015-07-16', '', '', '', '', NULL, ''),
(11, 'MG-440', '', '', '', '', '', '', '', '', '', '', '', NULL, '');

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
  `shiftRate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shiftdb`
--

INSERT INTO `shiftdb` (`shiftId`, `shiftName`, `shiftDuration`, `shiftRate`) VALUES
('SH-751', '', '', ''),
('SH115124', '7hours One', '7', 'Rs:280'),
('SH248', '', '', 'Rs:');

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
 ADD PRIMARY KEY (`countid`);

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
-- AUTO_INCREMENT for table `car_transactions`
--
ALTER TABLE `car_transactions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
MODIFY `countid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
