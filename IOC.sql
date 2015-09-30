-- PHP MySQL Dump
--
-- Host: localhost
-- Generated: Wed, 30 Sep 2015 13:35:49 +0200
-- PHP Version: 5.5.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ioc`
--

-- ------------------------------------------------------------

--
-- Table structure for table `asupplier`
--

CREATE TABLE `asupplier` (
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Company` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PNumber` varchar(50) DEFAULT NULL,
  `NIC` varchar(20) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asupplier`
--

INSERT INTO `asupplier` (`Fname`, `Lname`, `Company`, `Address`, `Email`, `PNumber`, `NIC`, `Type`, `id`) VALUES
('Sarasi', 'Aththanayake', 'ABCD', '28,Samam Pedesa , Ratnapura', 'isuru.dilhan@yahoo.com', '+94719816220', '930400998V', 'Grease Pump', '1'),
('Nirmal', 'Chanaka', 'Ultra', '01,School Rd , Colombo', 'inbox.rajika@gmail.com', '+94769815670', '940405998V', 'Hydraulic Hoists', '2'),
('Lahiru', 'Witharama', 'Nexmo', '89,Rathmal Uyana , Gampaha', 'isuru.dilhan@yahoo.com', '+94729926220', '920600978V', 'Oil Drainer', '3'),
('Sam', 'Vitharana', 'Apex', '08,Jayanthi place , Rathmalana', 'samTk@gmail.com', '+94759205284', '917650999V', 'Grease Pump', '14');

-- ------------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `atid` int(11) NOT NULL AUTO_INCREMENT,
  `empCode` varchar(50) DEFAULT NULL,
  `shiftCode` varchar(50) DEFAULT NULL,
  `shiftprice` varchar(100) DEFAULT NULL,
  `atyear` varchar(50) DEFAULT NULL,
  `atmonth` varchar(50) DEFAULT NULL,
  `atdate` varchar(50) DEFAULT NULL,
  `startTime` varchar(50) DEFAULT NULL,
  `colour` varchar(50) DEFAULT NULL,
  `endTime` varchar(50) DEFAULT NULL,
  `pumps` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`atid`)
) ENGINE=InnoDB AUTO_INCREMENT=495 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`atid`, `empCode`, `shiftCode`, `shiftprice`, `atyear`, `atmonth`, `atdate`, `startTime`, `colour`, `endTime`, `pumps`) VALUES
('0', 'MG-790', '', '', '2014', '08', '20', '', '#ff0000', '', ''),
('13', 'MG-790', '', '', '2015', '08', '26', '', '#ff0000', '', ''),
('14', 'MG-790', '', '', '2013', '08', '25', '', '#ff0000', '', ''),
('16', 'MG-789', 'SH-147', '750', '2015', '09', '01', '03:00', 'orange', '', 'SH-147'),
('458', 'MG-789', 'SH-147', '750', '2015', '09', '03', '02:01', 'orange', '', 'SH-147'),
('459', 'MG-789', 'SH-725', '1500', '2015', '09', '04', '14:02', 'blue', '', 'SH-725'),
('461', 'MG-790', 'SH-147', '750', '2015', '09', '23', '03:00', 'orange', '', 'SH-147'),
('462', 'MG-790', '', '', '2015', '09', '21', '', '#ff0000', '', ''),
('463', 'MG-789', 'SH-256', '1000', '2015', '08', '02', '01:00', 'green', '', 'SH-147'),
('464', 'MG-790', '', '', '2015', '08', '24', '', '#ff0000', '', ''),
('465', 'MG-789', '', '', '2015', '08', '05', '', '#ff0000', '', ''),
('466', 'MG-789', '', '', '2015', '08', '06', '', '#ff0000', '', ''),
('467', 'MG-789', 'SH-147', '750', '2015', '09', '07', '02:00', 'orange', '', 'SH-147'),
('468', 'MG-789', '', '', '2015', '09', '08', '', '#ff0000', '', ''),
('469', 'MG-790', '', '', '2015', '09', '03', '', '#ff0000', '', ''),
('470', 'MG-790', '', '', '2015', '09', '04', '', '#ff0000', '', ''),
('471', 'MG-790', '', '', '2015', '09', '05', '', '#ff0000', '', ''),
('472', 'MG-790', 'SH-147', '750', '2015', '09', '13', '01:00', 'orange', '', 'SH-147'),
('473', 'MG-790', '', '', '2015', '08', '06', '', '#ff0000', '', ''),
('474', 'MG-790', 'SH-147', '750', '2015', '08', '14', '01:00', 'orange', '', 'SH-193'),
('475', 'MG-790', 'SH-147', '750', '2015', '09', '15', '01:00', 'orange', '', 'SH-193'),
('476', 'MG-790', '', '', '2015', '08', '07', '', '#ff0000', '', ''),
('477', 'MG-790', '', '', '2015', '09', '08', '', '#ff0000', '', ''),
('478', 'MG-790', 'SH-193', '500', '2015', '09', '16', '01:00', 'yellow', '', 'SH-147'),
('479', 'MG-790', '', '', '2015', '09', '10', '', '#ff0000', '', ''),
('480', 'MG-790', '', '', '2015', '09', '11', '', '#ff0000', '', ''),
('481', 'MG-790', 'SH-193', '500', '2015', '09', '18', '02:01', 'yellow', '12:57', 'SH-147'),
('482', 'MG-790', '', '', '2015', '09', '12', '', '#ff0000', '', ''),
('483', 'MG-790', 'SH-193', '500', '2015', '09', '17', '18:01', 'yellow', '15:59', 'SH-147'),
('485', 'MG-790', '', '', '2015', '09', '02', '', '#ff0000', '', ''),
('486', 'MG-790', '', '', '2015', '09', '01', '', '#ff0000', '', ''),
('487', 'MG-789', 'SH-147', '750', '2015', '09', '29', '07:07', 'orange', '21:36', '1'),
('488', 'PM-237', 'SH-147', '750', '2015', '09', '29', '05:55', 'orange', '21:38', '4'),
('489', 'MG-789', 'SH-147', '750', '2015', '09', '30', '18:59', 'orange', '10:10', '1'),
('490', 'PM-406', 'SH-147', '750', '2015', '09', '30', '23:13', 'orange', '10:08', '3'),
('491', 'MG-790', 'SH-147', '750', '2015', '09', '30', '12:31', 'orange', '10:11', '3'),
('493', 'PM-237', 'SH-193', '2000', '2015', '09', '30', '02:00', 'yellow', '', '4'),
('494', 'PM-168', '', '', '2015', '09', '30', '', '#ff0000', '', '');

-- ------------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Id`, `Name`, `Description`, `Address`) VALUES
('1', 'IOC', 'Handels a carwash also.', 'Gampaha'),
('2', 'IOC', 'Handels lubricants. ', 'Colombo'),
('3', 'ABC', 'ddfgd', 'malabe');

-- ------------------------------------------------------------

--
-- Table structure for table `car_transactions`
--

CREATE TABLE `car_transactions` (
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_transactions`
--

INSERT INTO `car_transactions` (`id`, `cname`, `contact`, `email`, `package`, `vehicleNo`, `amount`, `date`, `status`, `returnedDate`) VALUES
('5', 'Kamal', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'CAT-4567', '4500', '2015-07-19', 'Returned', '2015-08-20'),
('6', 'Isuru', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'CT-8967', '4500', '2015-07-31', 'Returned', '2015-07-05'),
('8', 'Rajika', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'AT-4002', '4500', '2015-08-01', 'Returned', '2015-08-01'),
('9', 'Sam', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'BAT-5567', '4500', '2015-08-01', 'Returned', '2015-08-01'),
('10', 'Lahiru', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'UT-9012', '4500', '2015-08-16', 'Returned', '2015-07-05'),
('11', 'Sarasi', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'DA-1234', '4500', '2015-08-16', 'Returned', '2015-08-28'),
('12', 'Kaveendra', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'LS-0987', '4500', '2015-08-20', 'Returned', '2015-09-30'),
('13', 'Nirmal', '0789164423', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', 'TT-1947', '4500', '2015-08-20', 'Not Returned', 'None'),
('14', 'Dumindu', '0778355666', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', 'DAA-1045', '4500', '2015-08-20', 'Returned', '2015-07-01'),
('15', 'Amal', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'SPD-1134', '4500', '2015-08-22', 'Returned', '2015-08-20'),
('16', 'isuru', '0711363825', 'isuru.dilhan@yahoo.com', 'Platinum Value Car Wash', 'AA-1234', '3000', '2015-09-29', 'Returned', '2015-09-29'),
('17', 'gfdgdg', '0711363825', 'isuru.dilhan@yahoo.com', 'Platinum Value Car Wash', 'AA-1234', '3000', '2015-09-30', 'Not Returned', 'Not Returned'),
('18', 'rajika', '0711363825', 'isuru.dilhan@yahoo.com', 'Hand Wash', 'AA-1234', '10000', '2015-09-30', 'Returned', '2015-09-30'),
('19', 'rajika', '0711363825', 'isuru.dilhan@yahoo.com', 'Hand Wash', 'AA-1212', '10000', '2015-09-30', 'Returned', '2015-09-30');

-- ------------------------------------------------------------

--
-- Table structure for table `client_transactions`
--

CREATE TABLE `client_transactions` (
  `client_name` varchar(50) DEFAULT NULL,
  `client_pump_vechicle` varchar(50) DEFAULT NULL,
  `client_pumper` varchar(50) DEFAULT NULL,
  `pump_date` varchar(50) DEFAULT NULL,
  `client_pump_no` varchar(100) DEFAULT NULL,
  `client_pump_liters` varchar(100) DEFAULT NULL,
  `pump_value` varchar(100) DEFAULT NULL,
  `trcusid` varchar(200) DEFAULT NULL,
  `trtype` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_transactions`
--

INSERT INTO `client_transactions` (`client_name`, `client_pump_vechicle`, `client_pumper`, `pump_date`, `client_pump_no`, `client_pump_liters`, `pump_value`, `trcusid`, `trtype`) VALUES
('Nimal', 'JA-8767', 'Wimal', '2015-08-27', 'Pump 2', '8', '4500', 'C002', 'Diesel');

-- ------------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` varchar(50) NOT NULL DEFAULT '',
  `client_fname` varchar(100) DEFAULT NULL,
  `client_lname` varchar(100) DEFAULT NULL,
  `client_address` varchar(200) DEFAULT NULL,
  `client_nic` varchar(50) DEFAULT NULL,
  `client_phone` varchar(100) DEFAULT NULL,
  `client_purchase_date` varchar(50) DEFAULT NULL,
  `client_purchase_amount` varchar(100) DEFAULT NULL,
  `profile` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_fname`, `client_lname`, `client_address`, `client_nic`, `client_phone`, `client_purchase_date`, `client_purchase_amount`, `profile`) VALUES
('C001', 'Sahan', 'Dilshan', 'Malabe', '821541214V', '0715394520', '2015-08-30', '5000', 'albrecht.png'),
('C002', 'Nimal', 'Fernando', 'Panadura', '548541201V', '0715394521', '2015-08-31', '5000', 'diego-inigo-large.jpg'),
('C003', 'Kasun', 'Rathnayake', 'Gampaha', '987654321V', '0714526987', '2015-08-30', '5000', 'charles-leisure-large.jpg');

-- ------------------------------------------------------------

--
-- Table structure for table `emergencytransport`
--

CREATE TABLE `emergencytransport` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `vehicleno` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergencytransport`
--

INSERT INTO `emergencytransport` (`Id`, `fullname`, `nic`, `vehicleno`, `contact`, `description`, `email`, `date`) VALUES
('11', 'Namal', '920837006V', 'SG-4187', '0717937272', 'Break Down', 'test@gmail.com', '2015-08-19'),
('14', 'Jayantha', '874514872V', 'WP-7787', '0717479370', 'Empty Fuel\n', 'tippa@gmail.com', '2015-08-19'),
('16', 'Angelo', '789456123V', 'BAT-7872', '0717479198', 'Engine Down', 's@gmail.com', '2015-08-20'),
('20', 'Sarasi', '101245789V', 'KM-3434', '0717479234', 'Tyre down', 'inbox.rajika@gmail.com', '2015-08-23');

-- ------------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
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
('MG-789', 'Isuru', 'Dilhan', 'Gampaha', '953605469V', '0722353042', '1995-02-01', '2015-08-12', 'Admin', 'isurudilhan', 'Isurudilhan1', '1 (7).jpg'),
('MG-790', 'Rajika', 'IMal', 'Kegalle', '917589068v', '0762011103', '1991-09-19', '2015-08-27', 'Manager', 'rajikaimal', 'RajikaImal123/', '1 (5).jpg'),
('PM-168', 'kaveendra', 'oshan', 'kollupitiya', '930512400v', '0716010860', '1992-12-02', '2015-01-01', 'Pump Staff', 'nullnull', 'nullNull123', '1 (4).jpg'),
('PM-237', 'Sam', 'Abeysekara', 'Colombo', '930512400v', '0716010860', '1993-02-20', '2015-08-19', 'Pump Staff', 'nullnull', 'nullNull123', 'sam.jpg'),
('PM-406', 'Lahiru', 'Witharama', 'Rathnapura', '920837006V', '0725429611', '1992-09-19', '2015-08-02', 'Pump Staff', 'nullnull', 'nullNull123', '1 (1).jpg');

-- ------------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `procode` varchar(10) DEFAULT NULL,
  `momake` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `mdate` date NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `procode`, `momake`, `category`, `mdate`, `name`) VALUES
('11', 'EQ-225', 'Tailand', 'Grease Pump', '2015-10-02', 'lahiru'),
('13', 'EQ-225', 'Tailand', 'Hydraulic Hoists', '2015-08-05', 'lahiru');

-- ------------------------------------------------------------

--
-- Table structure for table `eveningstocks`
--

CREATE TABLE `eveningstocks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FuelType` varchar(2) NOT NULL,
  `Reading` float NOT NULL,
  `Quantity` float NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eveningstocks`
--

INSERT INTO `eveningstocks` (`Id`, `FuelType`, `Reading`, `Quantity`, `Date`) VALUES
('1', 'Pe', '200', '400', '2015-08-17'),
('2', 'SP', '700', '1400', '2015-08-17'),
('3', 'Di', '0', '0', '2015-08-17'),
('4', 'SD', '0', '0', '2015-08-17'),
('5', 'Pe', '200', '400', '2015-08-19'),
('6', 'SP', '200', '400', '2015-08-19'),
('7', 'Di', '700', '1400', '2015-08-19'),
('8', 'SD', '200', '400', '2015-08-19'),
('9', 'Pe', '200', '400', '2015-08-19'),
('10', 'SP', '200', '400', '2015-08-19'),
('11', 'Di', '700', '1400', '2015-08-19'),
('12', 'SD', '700', '1400', '2015-08-19'),
('13', 'Pe', '700', '1400', '2015-08-20'),
('14', 'SP', '200', '400', '2015-08-20'),
('15', 'Di', '700', '1400', '2015-08-20'),
('16', 'SD', '1200', '2400', '2015-08-20'),
('17', 'Pe', '1', '99', '2015-08-22'),
('18', 'SP', '4.5', '342', '2015-08-22'),
('19', 'Di', '2', '199', '2015-08-22'),
('20', 'SD', '4', '304', '2015-08-22'),
('21', 'Pe', '1.5', '149', '2015-08-22'),
('22', 'SP', '6.5', '495', '2015-08-22'),
('23', 'Di', '7.5', '745', '2015-08-22'),
('24', 'SD', '5.5', '419', '2015-08-22'),
('25', 'Pe', '2', '199', '2015-09-29'),
('26', 'SP', '4', '304', '2015-09-29'),
('27', 'Di', '3.5', '348', '2015-09-29'),
('28', 'SD', '5.5', '419', '2015-09-29');

-- ------------------------------------------------------------

--
-- Table structure for table `fuel_expense`
--

CREATE TABLE `fuel_expense` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `expfueltype` varchar(10) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `fuelpayment` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel_expense`
--

INSERT INTO `fuel_expense` (`Id`, `expfueltype`, `capacity`, `date`, `fuelpayment`) VALUES
('1', 'Petrol', '19800', '2015-08-24', '3434'),
('3', 'Diesel', '6600', '2015-08-24', '5000'),
('4', 'SPetrol', '19800', '2015-08-25', '75800'),
('5', 'SPetrol', '19800', '2015-08-25', '4500'),
('9', 'Petrol', '19800', '2015-08-25', '1600');

-- ------------------------------------------------------------

--
-- Table structure for table `fuel_income`
--

CREATE TABLE `fuel_income` (
  `incomeID` int(4) NOT NULL AUTO_INCREMENT,
  `empID` varchar(50) NOT NULL,
  `empName` varchar(50) NOT NULL,
  `fueltype` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  `fuelincome` float NOT NULL,
  PRIMARY KEY (`incomeID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel_income`
--

INSERT INTO `fuel_income` (`incomeID`, `empID`, `empName`, `fueltype`, `amount`, `date`, `fuelincome`) VALUES
('1', 'PM-237', '', 'petrol', '50', '2015-09-29', '0'),
('2', 'PM-237', '', 'diesel', '20', '2015-09-29', '0'),
('3', 'PM-237', '', 'diesel', '45', '2015-09-30', '0'),
('4', 'MG-789', '', 'petrol', '20', '2015-09-30', '0');

-- ------------------------------------------------------------

--
-- Table structure for table `lu_customers`
--

CREATE TABLE `lu_customers` (
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

-- ------------------------------------------------------------

--
-- Table structure for table `lu_packages`
--

CREATE TABLE `lu_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `duration` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lu_packages`
--

INSERT INTO `lu_packages` (`id`, `name`, `price`, `description`, `duration`) VALUES
('1', 'QUICK LUBRICATION - GOLD', '8000', 'A total lubricating service in only 30 minutes. It covers every essential aspect of a professional car service at a most economical price. Top up to optimal capacity or completely change it using high', '30'),
('2', 'UNDERCARRIAGE DEGREASING - GOLD', '8000', 'Completely degrease the undercarriage of the automobile, removing accumulated oil and grit using the application of pressure washes with advanced pressure sensors.', '20'),
('3', 'VACUUM FLOOR / SEATS & TRUNK- GOLD', '8000', 'Vacuum the cabin interior, seats and trunk to ensure removal of dust and particle accumulation', '20'),
('4', 'WINDSCREEN & GLASS CLEANING- GOLD', '8000', 'Glass treatment improves wet weather driving visibility. The treatment uses a non-streaking formula, ammonia free and safe for tinted windows. This is ideal for high humidity conditions.', '30'),
('5', 'QUICK LUBRICATION - SILVER', '5000', 'Restore the true colour and natural gloss to the dashboard and leaves tyres looking new.', '30'),
('6', 'UNDERCARRIAGE DEGREASING - SILVER', '5000', 'A total lubricating service in only 30 minutes. It covers every essential aspect of a professional car service at a most economical price. Top up to optimal capacity or completely change it using high', '30'),
('7', 'VISUAL SAFETY CHECK - SILVER', '5000', 'test', '7'),
('10', ' EXTERIOR WAXING - GOLD', '8000', '', ''),
('11', 'oli change', '1400', 'hixs', '24');

-- ------------------------------------------------------------

--
-- Table structure for table `lubricant_expense`
--

CREATE TABLE `lubricant_expense` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bquantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lubricant_expense`
--

INSERT INTO `lubricant_expense` (`Id`, `product`, `price`, `supplier`, `quantity`, `bquantity`, `total`, `date`) VALUES
('1', 'T2', '780', 'T2 dude', '4', '5', '3900', '2015-08-25'),
('2', 'T2', '780', 'T2 dude', '4', '5', '3900', '2015-08-25'),
('3', 'Greese', '1', 'T2 dude', '5', '4', '4', '2015-08-25'),
('4', 'T2', '780', 'T2 dude', '4', '6', '4680', '2015-08-25'),
('5', 'Just test 2', '11', 'T2 dude', '3', '7', '77', '2015-08-25'),
('6', 'T2', '780', 'T2 dude', '4', '5', '3900', '2015-08-25'),
('7', 'T2', '780', 'T2 dude', '4', '4', '3120', '2015-08-25');

-- ------------------------------------------------------------

--
-- Table structure for table `lubricant_income`
--

CREATE TABLE `lubricant_income` (
  `prdIncomeID` int(11) NOT NULL AUTO_INCREMENT,
  `prdType` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `supplier` varchar(30) DEFAULT NULL,
  `sellingqty` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `lubricantincome` float DEFAULT NULL,
  PRIMARY KEY (`prdIncomeID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lubricant_income`
--

INSERT INTO `lubricant_income` (`prdIncomeID`, `prdType`, `quantity`, `supplier`, `sellingqty`, `price`, `date1`, `lubricantincome`) VALUES
('1', 'KJ', '5', 'T2 dude', '2', '10000', '2015-09-29', '20000'),
('2', 'KJ', '5', 'T2 dude', '2', '1000', '2015-09-29', '2000'),
('3', 'KJ', '5', 'T2 dude', '2', '1000', '2015-09-29', '2000'),
('4', 'KJ', '5', 'T2 dude', '2', '10000', '2015-09-29', '20000'),
('5', 'KJ', '5', 'T2 dude', '2', '1000', '2015-09-29', '2000'),
('6', 'KJ', '5', 'T2 dude', '2', '1000', '2015-09-29', '2000'),
('7', 'KJ', '5', 'T2 dude', '2', '1000', '2015-09-29', '2000'),
('8', '', '0', '', '0', '0', '2015-09-29', '0'),
('9', 'Just test 2', '3', 'T2 dude', '3', '1111', '2015-09-29', '3333'),
('10', 'test2', '33', 'T2 dude', '2', '333333', '2015-09-29', '666666'),
('11', '', '0', '', '0', '0', '2015-09-30', '0');

-- ------------------------------------------------------------

--
-- Table structure for table `lubricants`
--

CREATE TABLE `lubricants` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Supplier` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lubricants`
--

INSERT INTO `lubricants` (`Id`, `Name`, `Price`, `Quantity`, `Supplier`) VALUES
('2', 'T22', '780', '4', 'T2 dude'),
('4', 'KJ', '1', '5', 'T2 dude'),
('5', 'T2', '475', '20', 'T2 dude'),
('6', 'Just test 2', '11', '3', 'T2 dude'),
('7', 'test2', '333', '33', 'T2 dude'),
('8', 'Test', '124', '45', 'T2 dude');

-- ------------------------------------------------------------

--
-- Table structure for table `lubricanttransport`
--

CREATE TABLE `lubricanttransport` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Driver` varchar(30) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Vehicleno` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lubricanttransport`
--

INSERT INTO `lubricanttransport` (`Id`, `Date`, `Driver`, `Branch`, `Product`, `Vehicleno`) VALUES
('3', '2015-08-20', 'Jack', 'Heaven', '87878', 'Batmobile '),
('4', '2015-08-20', 'Tom', 'NYC2', '8', 'WP7845'),
('6', '2015-08-23', 'Tom', 'NYC', '232', '787878');

-- ------------------------------------------------------------

--
-- Table structure for table `nonreglu_transactions`
--

CREATE TABLE `nonreglu_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonreglu_transactions`
--

INSERT INTO `nonreglu_transactions` (`id`, `cname`, `contact`, `email`, `package`, `vehicleNo`, `amount`, `date`) VALUES
('1', 'isuru', '0711363825', 'isuru.dilhan@yahoo.com', 'VACUUM FLOOR / SEATS & TRUNK- GOLD', 'hy', '8000', '2015-08-17');

-- ------------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FuelType` varchar(10) NOT NULL,
  `Reading` float NOT NULL,
  `Quantity` float NOT NULL,
  `Orderamnt` int(10) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=491 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `FuelType`, `Reading`, `Quantity`, `Orderamnt`, `Date`) VALUES
('77', 'Diesel', '200', '400', '6600', '2015-08-02'),
('78', 'SDiesel', '1200', '2400', '19800', '2015-08-02'),
('79', 'Petrol', '0', '0', '6600', '2015-08-02'),
('80', 'SPetrol', '0', '0', '6600', '2015-08-02'),
('81', 'Diesel', '0', '0', '6600', '2015-08-02'),
('82', 'SDiesel', '0', '0', '6600', '2015-08-02'),
('83', 'Petrol', '700', '1400', '19800', '2015-08-02'),
('84', 'SPetrol', '0', '0', '6600', '2015-08-02'),
('85', 'Diesel', '0', '0', '6600', '2015-08-02'),
('86', 'SDiesel', '0', '0', '6600', '2015-08-02'),
('87', 'Petrol', '700', '1400', '19800', '2015-08-02'),
('88', 'SPetrol', '200', '400', '19800', '2015-08-02'),
('89', 'Diesel', '700', '1400', '6600', '2015-08-02'),
('90', 'SDiesel', '1200', '2400', '19800', '2015-08-02'),
('91', 'Petrol', '200', '400', '19800', '2015-08-02'),
('92', 'SPetrol', '700', '1400', '19800', '2015-08-02'),
('93', 'Diesel', '700', '1400', '6600', '2015-08-02'),
('94', 'SDiesel', '200', '400', '19800', '2015-08-02'),
('95', 'Petrol', '200', '400', '19800', '2015-08-02'),
('96', 'SPetrol', '700', '1400', '19800', '2015-08-02'),
('97', 'Diesel', '0', '0', '6600', '2015-08-02'),
('98', 'SDiesel', '0', '0', '6600', '2015-08-02'),
('99', 'Petrol', '0', '0', '6600', '2015-08-02'),
('100', 'SPetrol', '0', '0', '6600', '2015-08-02'),
('101', 'Diesel', '0', '0', '6600', '2015-08-02'),
('102', 'SDiesel', '0', '0', '6600', '2015-08-02'),
('103', 'Petrol', '0', '0', '6600', '2015-08-02'),
('104', 'SPetrol', '0', '0', '6600', '2015-08-02'),
('105', 'Diesel', '0', '0', '6600', '2015-08-02'),
('106', 'SDiesel', '0', '0', '6600', '2015-08-02'),
('107', 'Petrol', '200', '400', '19800', '2015-08-02'),
('108', 'Petrol', '200', '400', '19800', '2015-08-02'),
('109', 'SPetrol', '700', '1400', '19800', '2015-08-02'),
('110', 'SPetrol', '700', '1400', '19800', '2015-08-02'),
('111', 'Diesel', '700', '1400', '6600', '2015-08-02'),
('112', 'Diesel', '700', '1400', '6600', '2015-08-02'),
('113', 'SDiesel', '1200', '2400', '19800', '2015-08-02'),
('114', 'SDiesel', '1200', '2400', '19800', '2015-08-02'),
('115', 'Petrol', '200', '400', '19800', '2015-08-02'),
('116', 'SPetrol', '700', '1400', '19800', '2015-08-02'),
('117', 'Diesel', '700', '1400', '6600', '2015-08-02'),
('118', 'SDiesel', '1200', '2400', '19800', '2015-08-02'),
('253', 'Diesel', '23', '6767', '13200', '2015-08-22'),
('256', 'SPetrol', '5', '723', '6600', '2015-08-22'),
('262', 'SDiesel', '151.5', '11530', '13200', '2015-08-22'),
('264', 'SPetrol', '146', '11111', '13200', '2015-08-22'),
('268', 'SPetrol', '7', '533', '19800', '2015-08-22'),
('269', 'Diesel', '6', '596', '6600', '2015-08-22'),
('276', 'SPetrol', '0', '0', '6600', '2015-08-22'),
('280', 'SPetrol', '0', '0', '6600', '2015-08-22'),
('284', 'SPetrol', '1.5', '114', '19800', '2015-08-22'),
('288', 'SPetrol', '8.5', '647', '19800', '2015-08-22'),
('289', 'Diesel', '8', '795', '6600', '2015-08-22'),
('290', 'SDiesel', '9.5', '723', '19800', '2015-08-22'),
('291', 'Petrol', '117.5', '11675', '19800', '2015-08-22'),
('292', 'SPetrol', '145', '11035', '19800', '2015-08-22'),
('293', 'Diesel', '43', '4272', '6600', '2015-08-22'),
('294', 'SDiesel', '161.5', '12291', '19800', '2015-08-22'),
('296', 'SPetrol', '51.5', '3919', '19800', '2015-08-22'),
('297', 'Diesel', '60', '5962', '6600', '2015-08-22'),
('298', 'SDiesel', '95', '7230', '19800', '2015-08-22'),
('300', 'SPetrol', '119.5', '9094', '19800', '2015-08-22'),
('301', 'Diesel', '70', '6955', '6600', '2015-08-22'),
('302', 'SDiesel', '157', '11948', '19800', '2015-08-22'),
('303', 'Petrol', '64.5', '6409', '19800', '2015-08-23'),
('304', 'SPetrol', '7', '533', '19800', '2015-08-23'),
('305', 'Diesel', '8', '795', '6600', '2015-08-23'),
('306', 'SDiesel', '2', '152', '19800', '2015-08-23'),
('307', 'Petrol', '119.5', '11873', '19800', '2015-08-23'),
('308', 'SPetrol', '126', '9589', '19800', '2015-08-23'),
('309', 'Diesel', '45', '4471', '6600', '2015-08-23'),
('310', 'SDiesel', '111.5', '8486', '19800', '2015-08-23'),
('311', 'Petrol', '4', '397', '19800', '2015-08-23'),
('312', 'SPetrol', '7', '533', '13200', '2015-08-23'),
('313', 'Diesel', '8', '795', '6600', '2015-08-23'),
('314', 'SDiesel', '8.5', '647', '19800', '2015-08-23'),
('315', 'Petrol', '2', '199', '19800', '2015-08-23'),
('316', 'SPetrol', '6', '457', '19800', '2015-08-23'),
('317', 'Diesel', '7', '696', '6600', '2015-08-23'),
('318', 'SDiesel', '7.5', '571', '19800', '2015-08-23'),
('319', 'Petrol', '3', '298', '13200', '2015-08-23'),
('320', 'SPetrol', '3.5', '266', '6600', '2015-08-23'),
('321', 'Diesel', '6.5', '646', '6600', '2015-08-23'),
('322', 'SDiesel', '3.5', '266', '19800', '2015-08-23'),
('323', 'Petrol', '0.5', '50', '19800', '2015-08-23'),
('324', 'SPetrol', '8.5', '647', '19800', '2015-08-23'),
('325', 'Diesel', '5.5', '546', '6600', '2015-08-23'),
('326', 'SDiesel', '1.5', '114', '19800', '2015-08-23'),
('327', 'Petrol', '1', '99', '19800', '2015-08-23'),
('328', 'SPetrol', '6.5', '495', '19800', '2015-08-23'),
('329', 'Diesel', '6.5', '646', '6600', '2015-08-23'),
('330', 'SDiesel', '6.5', '495', '19800', '2015-08-23'),
('331', 'Petrol', '7.5', '745', '19800', '2015-08-23'),
('332', 'SPetrol', '8', '609', '6600', '2015-08-23'),
('333', 'Diesel', '8.5', '845', '6600', '2015-08-23'),
('334', 'SDiesel', '5.5', '419', '19800', '2015-08-23'),
('335', 'Petrol', '1', '99', '19800', '2015-08-24'),
('336', 'SPetrol', '7', '533', '19800', '2015-08-24'),
('337', 'Diesel', '7', '696', '6600', '2015-08-24'),
('338', 'SDiesel', '6.5', '495', '19800', '2015-08-24'),
('339', 'Petrol', '3.5', '348', '19800', '2015-08-25'),
('340', 'SPetrol', '7.5', '571', '19800', '2015-08-25'),
('341', 'Diesel', '5.5', '546', '6600', '2015-08-25'),
('342', 'SDiesel', '1.5', '114', '19800', '2015-08-25'),
('343', 'Petrol', '2.5', '248', '19800', '2015-08-25'),
('344', 'SPetrol', '1.5', '114', '19800', '2015-08-25'),
('345', 'Diesel', '4', '397', '6600', '2015-08-25'),
('346', 'SDiesel', '5', '381', '19800', '2015-08-25'),
('347', 'Petrol', '7', '696', '19800', '2015-08-25'),
('348', 'SPetrol', '5', '381', '19800', '2015-08-25'),
('349', 'Diesel', '8', '795', '6600', '2015-08-25'),
('350', 'SDiesel', '7', '533', '19800', '2015-08-25'),
('351', 'Petrol', '104.5', '10383', '19800', '2015-08-25'),
('352', 'SPetrol', '95', '7230', '13200', '2015-08-25'),
('353', 'Diesel', '104.5', '10383', '6600', '2015-08-25'),
('354', 'SDiesel', '78', '5936', '19800', '2015-08-25'),
('355', 'Petrol', '3.5', '348', '19800', '2015-08-26'),
('356', 'SPetrol', '7.5', '571', '19800', '2015-08-26'),
('357', 'Diesel', '8.5', '845', '6600', '2015-08-26'),
('358', 'SDiesel', '6', '457', '19800', '2015-08-26'),
('359', 'Petrol', '199.5', '19822', '19800', '2015-08-26'),
('360', 'SPetrol', '6', '457', '19800', '2015-08-26'),
('361', 'Diesel', '5', '497', '6600', '2015-08-26'),
('362', 'SDiesel', '9', '685', '19800', '2015-08-26'),
('363', 'Petrol', '0', '0', '6600', '2015-08-26'),
('364', 'SPetrol', '210.5', '16020', '19800', '2015-08-26'),
('365', 'Diesel', '0', '0', '6600', '2015-08-26'),
('366', 'SDiesel', '0', '0', '6600', '2015-08-26'),
('367', 'Petrol', '226', '22455', '19800', '2015-08-26'),
('368', 'SPetrol', '8.5', '647', '19800', '2015-08-26'),
('369', 'Diesel', '86', '8545', '6600', '2015-08-26'),
('370', 'SDiesel', '95', '7230', '19800', '2015-08-26'),
('371', 'Petrol', '200', '19872', '19800', '2015-08-26'),
('372', 'SPetrol', '188.5', '14346', '19800', '2015-08-26'),
('373', 'Diesel', '207.5', '20617', '6600', '2015-08-26'),
('374', 'SDiesel', '179.5', '13661', '19800', '2015-08-26'),
('375', 'Petrol', '0', '0', '6600', '2015-08-26'),
('376', 'SPetrol', '0', '0', '6600', '2015-08-26'),
('377', 'Diesel', '0', '0', '6600', '2015-08-26'),
('378', 'SDiesel', '0', '0', '6600', '2015-08-26'),
('379', 'Petrol', '5', '497', '19800', '2015-08-26'),
('380', 'SPetrol', '8.5', '647', '19800', '2015-08-26'),
('381', 'Diesel', '8', '795', '6600', '2015-08-26'),
('382', 'SDiesel', '8', '609', '19800', '2015-08-26'),
('383', 'Petrol', '240', '23846', '13200', '2015-08-26'),
('384', 'SPetrol', '182.5', '13889', '6600', '2015-08-26'),
('385', 'Diesel', '113', '11228', '6600', '2015-08-26'),
('386', 'SDiesel', '154', '11720', '13200', '2015-08-26'),
('387', 'Petrol', '2.5', '248', '19800', '2015-08-27'),
('388', 'SPetrol', '6', '457', '19800', '2015-08-27'),
('389', 'Diesel', '5', '497', '6600', '2015-08-27'),
('390', 'SDiesel', '2.5', '190', '19800', '2015-08-27'),
('391', 'Petrol', '6', '596', '13200', '2015-08-31'),
('392', 'SPetrol', '6', '457', '19800', '2015-08-31'),
('393', 'Diesel', '7', '696', '6600', '2015-08-31'),
('394', 'SDiesel', '5', '381', '19800', '2015-08-31'),
('395', 'Petrol', '6', '596', '19800', '2015-09-02'),
('396', 'SPetrol', '7.5', '571', '19800', '2015-09-02'),
('397', 'Diesel', '5.5', '546', '6600', '2015-09-02'),
('398', 'SDiesel', '5.5', '419', '19800', '2015-09-02'),
('399', 'Petrol', '234.5', '23300', '13200', '2015-09-02'),
('400', 'SPetrol', '77.5', '5898', '19800', '2015-09-02'),
('401', 'Diesel', '9', '894', '6600', '2015-09-02'),
('402', 'SDiesel', '171.5', '13052', '19800', '2015-09-02'),
('404', 'SPetrol', '60', '4566', '19800', '2015-09-03'),
('405', 'Diesel', '7.5', '745', '6600', '2015-09-03'),
('406', 'SDiesel', '9.5', '723', '19800', '2015-09-03'),
('408', 'SPetrol', '0', '0', '6600', '2015-09-03'),
('409', 'Diesel', '0', '0', '6600', '2015-09-03'),
('410', 'SDiesel', '0', '0', '6600', '2015-09-03'),
('412', 'SPetrol', '8.5', '647', '19800', '2015-09-03'),
('413', 'Diesel', '8', '795', '6600', '2015-09-03'),
('414', 'SDiesel', '8', '609', '19800', '2015-09-03'),
('415', 'Petrol', '4.5', '447', '19800', '2015-09-03'),
('416', 'SPetrol', '111', '8448', '19800', '2015-09-03'),
('417', 'Diesel', '138.5', '13761', '6600', '2015-09-03'),
('418', 'SDiesel', '7.5', '571', '19800', '2015-09-03'),
('419', 'Petrol', '121.5', '12072', '6600', '2015-09-03'),
('420', 'SPetrol', '210', '15982', '19800', '2015-09-03'),
('421', 'Diesel', '61.5', '6111', '6600', '2015-09-03'),
('422', 'SDiesel', '172.5', '13128', '19800', '2015-09-03'),
('423', 'Petrol', '0', '0', '6600', '2015-09-05'),
('424', 'Petrol', '0', '0', '6600', '2015-09-05'),
('425', 'SPetrol', '0', '0', '6600', '2015-09-05'),
('426', 'SPetrol', '0', '0', '6600', '2015-09-05'),
('427', 'Diesel', '0', '0', '6600', '2015-09-05'),
('428', 'Diesel', '0', '0', '6600', '2015-09-05'),
('429', 'SDiesel', '0', '0', '6600', '2015-09-05'),
('430', 'SDiesel', '0', '0', '6600', '2015-09-05'),
('431', 'Petrol', '0', '0', '6600', '2015-09-05'),
('432', 'SPetrol', '0', '0', '6600', '2015-09-05'),
('433', 'Diesel', '0', '0', '6600', '2015-09-05'),
('434', 'SDiesel', '0', '0', '6600', '2015-09-05'),
('435', 'Petrol', '0', '0', '6600', '2015-09-05'),
('436', 'SPetrol', '0', '0', '6600', '2015-09-05'),
('437', 'Diesel', '0', '0', '6600', '2015-09-05'),
('438', 'SDiesel', '0', '0', '6600', '2015-09-05'),
('439', 'Petrol', '219', '21760', '13200', '2015-09-21'),
('440', 'SPetrol', '106.5', '8105', '6600', '2015-09-21'),
('441', 'Diesel', '235.5', '23399', '6600', '2015-09-21'),
('442', 'SDiesel', '208', '15830', '19800', '2015-09-21'),
('443', 'Petrol', '196.5', '19524', '19800', '2015-09-22'),
('445', 'Diesel', '137', '13612', '6600', '2015-09-22'),
('446', 'SDiesel', '154.5', '11758', '19800', '2015-09-22'),
('471', 'Petrol', '243.5', '24194', '19800', '2015-09-26'),
('472', 'SPetrol', '209.5', '15944', '19800', '2015-09-26'),
('473', 'Diesel', '153.5', '15252', '6600', '2015-09-26'),
('474', 'SDiesel', '146', '11111', '19800', '2015-09-26'),
('475', 'Petrol', '0.5', '50', '19800', '2015-09-29'),
('476', 'SPetrol', '2.5', '190', '19800', '2015-09-29'),
('477', 'Diesel', '8', '795', '6600', '2015-09-29'),
('478', 'SDiesel', '7', '533', '19800', '2015-09-29'),
('479', 'Petrol', '2.5', '248', '19800', '2015-09-29'),
('480', 'SPetrol', '1.5', '114', '19800', '2015-09-29'),
('481', 'Diesel', '6.5', '646', '6600', '2015-09-29'),
('482', 'SDiesel', '1.5', '114', '19800', '2015-09-29'),
('483', 'Petrol', '0.5', '50', '19800', '2015-09-30'),
('484', 'SPetrol', '0.5', '38', '19800', '2015-09-30'),
('485', 'Diesel', '6', '596', '6600', '2015-09-30'),
('486', 'SDiesel', '5', '381', '19800', '2015-09-30'),
('487', 'Petrol', '243.5', '24194', '19800', '2015-09-30'),
('488', 'SPetrol', '0', '0', '6600', '2015-09-30'),
('489', 'Diesel', '0', '0', '6600', '2015-09-30'),
('490', 'SDiesel', '0', '0', '6600', '2015-09-30');

-- ------------------------------------------------------------

--
-- Table structure for table `other_expenses`
--

CREATE TABLE `other_expenses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `expense` float NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_expenses`
--

INSERT INTO `other_expenses` (`Id`, `description`, `expense`, `date`) VALUES
('1', 'test', '23', '2015-08-25'),
('2', 'Paint', '458', '2015-08-25'),
('3', 'Just a test', '7820', '2015-08-25'),
('4', 'Just a test', '7820', '2015-08-25');

-- ------------------------------------------------------------

--
-- Table structure for table `overallexpense`
--

CREATE TABLE `overallexpense` (
  `ovrlexpID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `fuel_exp` float NOT NULL,
  `lub_exp` float NOT NULL,
  `other_exp` float NOT NULL,
  PRIMARY KEY (`ovrlexpID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overallexpense`
--

;

-- ------------------------------------------------------------

--
-- Table structure for table `overallincome`
--

CREATE TABLE `overallincome` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `fuelincome` float NOT NULL,
  `lubricantincome` float NOT NULL,
  `regularCw` float NOT NULL,
  `nonregularCw` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overallincome`
--

;

-- ------------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `time`, `price`) VALUES
('1', 'Platinum Value Car Wash', 'Ultimate value car wash with mat shampoo - Limit 4', '48', '3000'),
('2', 'Ultimate Value Car Wash', 'Full service wash, clear coat shine, cleat coat protectant, underbody wash, tire shine, rim cleaning wheel bright, triple foam polish wax, rust inhibitor and interior fragrance spray.', '48', '5500'),
('4', 'Hand Wash', 'smooth washing\nhee', '2', '10000');

-- ------------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `empID` varchar(50) NOT NULL,
  `empName` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `paid` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `empID`, `empName`, `date`, `paid`) VALUES
('1', 'MG-795', 'damman man', '2015-08-25', '1500'),
('4', 'MG-795', 'damman man', '2015-08-25', '1500');

-- ------------------------------------------------------------

--
-- Table structure for table `pumpreadings`
--

CREATE TABLE `pumpreadings` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Reading` float NOT NULL,
  `PumpNo` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pumpreadings`
--

INSERT INTO `pumpreadings` (`Id`, `Date`, `Reading`, `PumpNo`) VALUES
('1', '2015-08-16', '3', '0'),
('2', '2015-08-16', '34', '0'),
('3', '2015-08-16', '45', '0'),
('4', '2015-08-16', '56', '0'),
('7', '2015-08-21', '56', '3'),
('8', '2015-12-16', '5', '4'),
('12', '2015-08-16', '0', '2'),
('31', '2015-08-22', '23435', '3'),
('32', '2015-08-23', '3434', '1'),
('33', '2015-08-23', '454', '3'),
('34', '2015-08-23', '5656', '4'),
('35', '2015-08-23', '676', '5'),
('36', '2015-08-23', '5656', '6'),
('39', '2015-08-25', '34', '1'),
('40', '2015-08-25', '45', '3'),
('41', '2015-08-25', '67', '4'),
('42', '2015-08-25', '87', '5'),
('43', '2015-08-25', '34', '1'),
('44', '2015-08-25', '45', '3'),
('45', '2015-08-25', '4534', '4'),
('46', '2015-08-25', '23', '1'),
('47', '2015-08-25', '34', '3'),
('48', '2015-08-25', '45', '4'),
('49', '2015-08-25', '56', '5'),
('50', '2015-08-25', '67', '6'),
('51', '2015-08-25', '78', '7'),
('52', '2015-08-25', '8', '8'),
('53', '2015-08-25', '89', '9'),
('54', '2015-08-25', '90', '10'),
('55', '2015-08-25', '23', '1'),
('56', '2015-08-25', '34', '3'),
('57', '2015-08-25', '5', '4'),
('58', '2015-08-25', '45', '5'),
('59', '2015-08-25', '45', '6'),
('60', '2015-08-25', '45', '7'),
('61', '2015-08-25', '45', '8'),
('62', '2015-08-25', '45', '9'),
('63', '2015-08-25', '45', '10'),
('64', '2015-08-26', '1754', '1'),
('65', '2015-08-26', '4785', '3'),
('66', '2015-08-26', '5872', '4'),
('67', '2015-08-26', '5879', '5'),
('68', '2015-08-26', '4569', '6'),
('69', '2015-08-26', '7854', '7'),
('70', '2015-08-26', '1254', '8'),
('71', '2015-08-26', '4785', '9'),
('72', '2015-08-26', '12457', '10'),
('73', '2015-09-21', '2450', '1'),
('74', '2015-09-21', '1212', '3'),
('75', '2015-09-21', '1225', '4'),
('76', '2015-09-21', '4551', '5'),
('77', '2015-09-21', '45455', '6'),
('78', '2015-09-21', '12125', '7'),
('79', '2015-09-21', '1214', '8'),
('80', '2015-09-21', '21214', '9'),
('81', '2015-09-21', '455', '10'),
('82', '2015-09-24', '1450', '1'),
('83', '2015-09-24', '1450', '3'),
('84', '2015-09-24', '1450', '4'),
('85', '2015-09-24', '1450', '5'),
('86', '2015-09-24', '1450', '6'),
('88', '2015-09-24', '1450', '8'),
('89', '2015-09-26', '1051', '1'),
('90', '2015-09-26', '1212', '3'),
('91', '2015-09-26', '1212', '4'),
('92', '2015-09-26', '12', '5'),
('93', '2015-09-26', '121211', '6'),
('94', '2015-09-26', '454', '7'),
('95', '2015-09-26', '1212', '8');

-- ------------------------------------------------------------

--
-- Table structure for table `pumpstatus`
--

CREATE TABLE `pumpstatus` (
  `PumpNo` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Fuel` varchar(20) NOT NULL,
  PRIMARY KEY (`PumpNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pumpstatus`
--

INSERT INTO `pumpstatus` (`PumpNo`, `Status`, `Fuel`) VALUES
('1', 'Online', 'SuperPetrol'),
('2', 'Offline', ''),
('3', 'Online', 'Petrol'),
('4', 'Online', 'SuperPetrol'),
('5', 'Online', 'Diesel'),
('6', 'Online', 'SuperDiesel'),
('7', 'Online', 'Diesel'),
('8', 'Online', 'SuperDiesel'),
('9', 'Online', 'Petrol'),
('10', 'Online', 'SuperPetrol');

-- ------------------------------------------------------------

--
-- Table structure for table `regular_customers`
--

CREATE TABLE `regular_customers` (
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
('rc-1013', 'sadadasd', '123456896v', 'sfsdfsd', '0711363825', 'isuru.dilhn@yahoo.co', '2015-09-28'),
('rc-1018', 'Isuru', '123456899v', 'Gampaha', '0771363825', 'isuru.dilhan@yahoo.com', '2015-07-31'),
('rc-1090', 'Dilhan', '123456789v', 'Katunayake', '0711363825', 'isuru.dilhan@yahoo.com', '2014-02-31'),
('rc-1106', 'isuru', '950021643v', 'Gampaha', '0711363825', 'inbox.rajika@gmail.com', '2015-09-29'),
('rc-1122', 'Rajika', '940028343v', 'Kegalle', '0711363825', 'isuru.dilhan@yahoo.com', '2015-07-31'),
('rc-288', 'Sam Khan', '930023643v', 'Colombo', '0789164423', 'isuru.dilhan@yahoo.com', '2015-08-19'),
('rc-305', 'gdfgdfg', '950023643v', 'dfgdfg', '0711363825', 'isuru.dilhan@yahoo.com', '2015-09-28'),
('rc-470', 'fgdfg', '923456899v', 'dfgdfg', '0711363825', 'isuru.dilhan@yahoo.comm', '2015-09-28'),
('rc-549', 'Lahiru', '920028343v', 'Rathnapura', '0711363825', 'isuru.dilhan@yahoo.com', '2015-04-31'),
('rc-590', 'sdfsdf', '123456889v', 'dgsdfsdf', '0711363825', 'isuru.dilhann@yahoo.com', '2015-09-28'),
('rc-712', 'sdfsf', '', 'sdfsdf', '0711363823', 'isuru.dilhan@yahoo.co', '2015-09-28'),
('rc-892', 'Dumindu', '960028343v', 'Kiribathgoda', '0711363825', 'isuru.dilha@yahoo.com', '2015-07-31');

-- ------------------------------------------------------------

--
-- Table structure for table `regular_lutransactions`
--

CREATE TABLE `regular_lutransactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(10) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regular_lutransactions`
--

INSERT INTO `regular_lutransactions` (`id`, `cust_id`, `package`, `vehicleNo`, `amount`, `date`) VALUES
('2', 'lc-436', 'UNDERCARRIAGE DEGREASING - GOLD', 'hyyyy', '6400', '2015-08-16'),
('4', 'lc-436', 'UNDERCARRIAGE DEGREASING - GOLD', 'fd', '6400', '2015-08-17'),
('5', 'lc-120', 'WINDSCREEN & GLASS CLEANING- GOLD', 'AA-1236', '6400', '2015-09-30');

-- ------------------------------------------------------------

--
-- Table structure for table `regular_transactions`
--

CREATE TABLE `regular_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(10) NOT NULL,
  `package` varchar(50) NOT NULL,
  `vehicleNo` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Returned',
  `returnedDate` varchar(15) NOT NULL DEFAULT 'Not Returned',
  PRIMARY KEY (`id`,`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regular_transactions`
--

INSERT INTO `regular_transactions` (`id`, `cust_id`, `package`, `vehicleNo`, `amount`, `date`, `status`, `returnedDate`) VALUES
('19', 'rc-892', 'Platinum Value Car Wash', 'TT-1557', '3600', '2015-07-30', 'Returned', '2015-09-30'),
('21', 'rc-1122', 'Platinum Value Car Wash', 'TUB-1648', '3600', '2015-08-01', 'Returned', '2015-08-29'),
('22', 'rc-892', 'Hand Wash', 'AA-8947', '3600', '2015-08-01', 'Returned', '2015-09-30'),
('23', 'rc-1018', 'Hand Wash', 'DAA-1933', '3600', '2015-08-01', 'Returned', '2015-08-20'),
('24', 'rc-549', 'Platinum Value Car Wash', 'SPD-5949', '3600', '2015-08-01', 'Returned', '2015-08-20'),
('26', 'rc-1018', 'Platinum Value Car Wash', 'ITP-1959', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('27', 'rc-1018', 'Hand Wash', 'DB-4947', '3600', '2015-08-01', 'Returned', '2015-07-22'),
('28', 'rc-1018', 'Platinum Value Car Wash', 'IPE-1447', '3600', '2015-08-01', 'Not Returned', '2015-05-15'),
('29', 'rc-1090', 'Ultimate Value Car Wash', 'SE-5945', '3600', '2015-08-01', 'Returned', '2015-08-20'),
('30', 'rc-1018', 'Platinum Value Car Wash', 'MIT-1937', '3600', '2015-08-01', 'Returned', '2015-08-05'),
('31', 'rc-1018', 'Ultimate Value Car Wash', 'KA-3957', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('32', 'rc-1090', 'Hand Wash', 'TT-1947', '8000', '2015-08-01', 'Returned', '2015-07-28'),
('33', 'rc-1090', 'Ultimate Value Car Wash', 'ST-4967', '3600', '2015-08-01', 'Returned', '2015-09-29'),
('34', 'rc-1090', 'Platinum Value Car Wash', 'JI-1940', '3600', '2015-08-01', 'Returned', '2015-08-22'),
('36', 'rc-1018', 'Ultimate Value Car Wash', 'KO-4947', '3600', '2015-08-02', 'Not Returned', '2015-08-22'),
('37', 'rc-1090', 'Platinum Value Car Wash', 'CAB-8978', '3600', '2015-08-02', 'Not Returned', '2015-08-22'),
('38', 'rc-1018', 'Platinum Value Car Wash', 'CAT-4449', '3600', '2015-08-02', 'Returned', '2015-08-22'),
('39', 'rc-1090', 'Hand Wash', 'BAT-9090', '8000', '2015-08-02', 'Returned', '2015-08-22'),
('40', 'rc-1090', 'Hand Wash', 'OT-1447', '8000', '2015-08-05', 'Returned', '2015-08-22'),
('41', 'rc-1018', 'Platinum Value Car Wash', 'LK-1947', '1600', '2015-08-05', 'Returned', '2015-09-30'),
('42', 'rc-1018', 'Hand Wash', 'LI-5948', '3600', '2015-08-05', 'Returned', '2015-08-22'),
('43', 'rc-1090', 'Hand Wash', 'PO-6944', '3600', '2015-08-16', 'Returned', '2015-09-29'),
('46', 'rc-1018', 'Ultimate Value Car Wash', 'BIN-2941', '3600', '2015-08-19', 'Returned', '2015-08-22'),
('47', 'rc-892', 'Platinum Value Car Wash', 'TU-6942', '3600', '2015-08-19', 'Not Returned', '2015-08-22'),
('48', 'rc-1018', 'Hand Wash', 'SE-1944', '3600', '2015-08-22', 'Returned', '2015-08-22'),
('49', 'rc-1090', 'Hand Wash', 'IT-8945', '8000', '2015-08-22', 'Returned', '2015-08-22');

-- ------------------------------------------------------------

--
-- Table structure for table `shiftdb`
--

CREATE TABLE `shiftdb` (
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
('SH-193', '24 hour', '24.00', '2000', 'yellow'),
('SH-256', '12hour', '12.00', '1000', 'green'),
('SH-725', '10 hour', '10.00', '1500', 'blue');

-- ------------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `product` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`Id`, `name`, `product`, `contact`, `email`) VALUES
('41', 'Nexmo', 'lubricant', '0717479370', 'isuru.dilhan@yahoo.com'),
('45', 'IOT', 'fuel', '0717479370', 'ram@gmail.com'),
('46', 'SEP', 'lubricant', '0717778782', 'sup@gmail.com'),
('47', 'KTL', 'lubricant', '0717973705', 'wassup@gmail.com'),
('48', 'CALTEX', 'fuel', '0774799729', 'rae@gmail.com'),
('49', 'ga', 'fuel', '717479370', 'erae@gmail.com'),
('50', 'New', 'fuel', '717479370', 'new@gmail.com'),
('51', 'New2', 'lubricant', '717479370', 'new2@gmail.com'),
('52', 'New4', 'fuel', '717479370', 'new4@gmali.com'),
('53', 'Ne5', 'fuel', '717493702', 'ne5@gmail.com'),
('54', 'Ne9', 'fuel', '717499370', 'nei@gmali.com'),
('55', 'Hekki', 'fuel', '717479370', 'hek@gmail.com'),
('56', 'Jkjk', 'fuel', '717493702', 'Jij@gmail.com'),
('57', 'Hak', 'fuel', '717479370', 'hak@gmali.com'),
('58', 'Kmk', 'fuel', '717479370', 'kmk@gmal.com'),
('59', 'Kmk', 'lubricant', '717479370', 'kmk@gmal.com'),
('60', 'Mlak', 'fuel', '717479370', 'kj@gmail.com'),
('61', 'Mlak', 'lubricant', '717479370', 'kj@gmail.com'),
('62', 'Sf', 'fuel', '717493702', 'sd@gmailc.ocmo'),
('63', 'Sf', 'lubricant', '717493702', 'sd@gmailc.ocmo'),
('64', 'Adsad', 'lubricant', '717937042', 'asd@gmail.com'),
('65', 'Ad', 'fuel', '717479370', 'ak@gmail.com'),
('66', 'Ad', 'fuel', '717479370', 'ak@gmail.com'),
('67', 'Ad', 'lubricant', '717479370', 'ak@gmail.com'),
('68', 'OP', 'fuel', '717479372', 'op@gmail.com'),
('69', 'OP', 'fuel', '717479372', 'op@gmail.com'),
('70', 'OP', 'lubricant', '717479372', 'op@gmail.com'),
('71', 'Just', 'fuel', '717479370', 'just@gmail.com'),
('72', 'Just2', 'lubricant', '717493702', 'Just2@gmail.com'),
('73', 'Rajika123', 'fuel', '717479370', 'rae@gmakl.com'),
('74', 'Rajika', 'fuel', '717479370', 'rajika@gmail.com'),
('75', 'Ceypetco', 'fuel', '717479370', 'c2@gmail.com'),
('76', 'Testetst', 'fuel', '717479370', 'io@gmail.com');

-- ------------------------------------------------------------

--
-- Table structure for table `tanks`
--

CREATE TABLE `tanks` (
  `Id` int(11) NOT NULL,
  `Petrol` float NOT NULL,
  `SPetrol` float NOT NULL,
  `Diesel` float NOT NULL,
  `SDiesel` float NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanks`
--

INSERT INTO `tanks` (`Id`, `Petrol`, `SPetrol`, `Diesel`, `SDiesel`, `Date`) VALUES
('1', '3000', '4000', '0', '0', '2015-09-30');

-- ------------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `managerCode` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`managerCode`, `fname`) VALUES
('as', 'jkjkljkl');

-- ------------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('rajika', '123');
