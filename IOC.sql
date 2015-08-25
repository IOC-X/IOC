-- PHP MySQL Dump
--
-- Host: localhost
-- Generated: Tue, 25 Aug 2015 19:58:09 +0200
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
('Sarasi', 'Aththanayake', 'ABC', '28,Samam Pedesa , Ratnapura', 'lahiruwitharama09@gmail.com', '+94719816220', '930400998V', 'Grease Pump', '1'),
('Nirmal', 'Chanaka', 'Ultra', '01,School Rd , Colombo', 'inbox.rajika@gmail.com', '+94769815670', '940405998V', 'Hydraulic Hoists', '2'),
('Lahiru', 'Witharama', 'Nexmo', '89,Rathmal Uyana , Gampaha', 'isuru.dilhan@yahoo.com', '+94729926220', '920600978V', 'Oil Drainer', '3'),
('Sam', 'Vitharana', 'Apex', '08,Jayanthi place , Rathmalana', 'samTk@gmail.com', '+94759205284', '917650999V', 'Grease Pump', '14');

-- ------------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
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
  `pumps` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`atid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`atid`, `empCode`, `shiftCode`, `shiftprice`, `atyear`, `atmonth`, `atdate`, `startTime`, `colour`, `endTime`, `pumps`) VALUES
('10', 'MG-795', 'SH-268', '95', '2015', '07', '26', '01:00', 'orange', '', 'SH-268'),
('13', 'MG-795', '', '', '2015', '07', '27', '', '#ff0000', '', ''),
('14', 'PM-368', '', '', '2015', '07', '27', '', '#ff0000', '', ''),
('16', 'PM-638', 'SH-147', '750', '2015', '07', '27', '03:00', 'orange', '', 'SH-147'),
('458', 'PM-368', 'SH-147', '750', '2015', '07', '28', '02:01', 'orange', '', 'SH-147'),
('459', 'MG-453', 'SH-725', '1500', '2015', '07', '29', '14:02', 'blue', '', 'SH-725'),
('460', 'MG-453', '', '', '2015', '07', '26', '', '#ff0000', '', ''),
('461', 'PM-453', 'SH-147', '750', '2015', '07', '26', '03:00', 'orange', '', 'SH-147'),
('462', 'PM-368', '', '', '2015', '07', '26', '', '#ff0000', '', ''),
('463', 'PM-638', 'SH-256', '1000', '2015', '07', '28', '01:00', 'green', '', 'SH-147'),
('464', 'PM-638', '', '', '2015', '07', '26', '', '#ff0000', '', ''),
('465', 'MG-453', '', '', '2015', '07', '30', '', '#ff0000', '', ''),
('466', 'PM-638', '', '', '2015', '07', '30', '', '#ff0000', '', ''),
('467', 'MG-795', 'SH-147', '750', '2015', '07', '30', '02:00', 'orange', '', 'SH-147'),
('468', 'MG-453', '', '', '2015', '07', '31', '', '#ff0000', '', ''),
('469', 'PM-368', '', '', '2015', '07', '31', '', '#ff0000', '', ''),
('470', 'MG-453', '', '', '2015', '08', '6', '', '#ff0000', '', ''),
('471', 'MG-453', '', '', '2015', '07', '15', '', '#ff0000', '', ''),
('472', 'MG-453', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', '', 'SH-147'),
('473', 'MG-795', '', '', '2015', '08', '15', '', '#ff0000', '', ''),
('474', 'PM-368', 'SH-147', '750', '2015', '08', '15', '01:00', 'orange', '', 'SH-193'),
('475', 'PM-155', 'SH-147', '750', '2015', '08', '16', '01:00', 'orange', '', 'SH-193'),
('476', 'MG-453', '', '', '2015', '08', '16', '', '#ff0000', '', ''),
('477', 'PM-453', '', '', '2015', '08', '16', '', '#ff0000', '', ''),
('478', 'MG-453', 'SH-193', '500', '2015', '08', '17', '01:00', 'yellow', '', 'SH-147'),
('479', 'MG-795', '', '', '2015', '08', '18', '', '#ff0000', '', ''),
('480', 'PM-155', '', '', '2015', '08', '18', '', '#ff0000', '', ''),
('481', 'PM-368', 'SH-193', '500', '2015', '08', '18', '02:01', 'yellow', '12:57', 'SH-147'),
('482', 'MG-453', '', '', '2015', '08', '18', '', '#ff0000', '', ''),
('483', 'PM-453', 'SH-193', '500', '2015', '08', '18', '18:01', 'yellow', '15:59', 'SH-147'),
('484', 'PM-638', '', '', '2015', '08', '18', '', '#ff0000', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Id`, `Name`, `Description`, `Address`) VALUES
('1', 'IOC', 'Handels a carwash also.', 'Gampaha'),
('2', 'IOC', 'Handels lubricants. ', 'Colombo');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_transactions`
--

INSERT INTO `car_transactions` (`id`, `cname`, `contact`, `email`, `package`, `vehicleNo`, `amount`, `date`, `status`, `returnedDate`) VALUES
('5', 'Kamal', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'CAT-4567', '4500', '2015-07-19', 'Returned', '2015-08-22'),
('6', 'Isuru', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'CT-8967', '4500', '2015-07-31', 'Returned', '2015-08-22'),
('8', 'Rajika', '0711363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'AT-4002', '4500', '2015-08-01', 'Returned', '2015-08-01'),
('9', 'Sam', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'BAT-5567', '4500', '2015-08-01', 'Returned', '2015-08-22'),
('10', 'Lahiru', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'UT-9012', '4500', '2015-08-16', 'Returned', '2015-08-22'),
('11', 'Sarasi', '0779164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'DA-1234', '4500', '2015-08-16', 'Returned', '2015-08-22'),
('12', 'Kaveendra', '0789164423', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'LS-0987', '4500', '2015-08-20', 'Not Returned', 'None'),
('13', 'Nirmal', '0789164423', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', 'TT-1947', '4500', '2015-08-20', 'Not Returned', 'None'),
('14', 'Dumindu', '0778355666', 'inbox.rajika@gmail.com', 'Ultimate Value Car Wash', 'DAA-1045', '4500', '2015-08-20', 'Returned', '2015-08-22'),
('15', 'Amal', '0771363825', 'isuru.dilhan@yahoo.com', 'Ultimate Value Car Wash', 'SPD-1134', '4500', '2015-08-22', 'Returned', '2015-08-22');

-- ------------------------------------------------------------

--
-- Table structure for table `client_transactions`
--

CREATE TABLE `client_transactions` (
  `clientid` varchar(50) NOT NULL,
  `clientfirstname` varchar(50) NOT NULL,
  `clientlastname` varchar(50) NOT NULL,
  `updateddate` varchar(100) NOT NULL,
  `fullamount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_transactions`
--

;

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
  `client_purchase_amount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_fname`, `client_lname`, `client_address`, `client_nic`, `client_phone`, `client_purchase_date`, `client_purchase_amount`) VALUES
('0', 'J.R', 'Jayawardane', 'Colombo', '221821298V', '011-8965250', '2015-06-01', '80000'),
('1', 'Mahinda ', 'Rajapakshe', 'Hambanthota', '481821298V', '071-2398802', '2015-07-01', '50,000'),
('2', 'Ranil ', 'Wickramasinghe', 'Colombo', '456321258V', '077-9898987', '2015-07-01', '100000'),
('3', 'Kamal', 'Rathnayake', 'Gampaha', '566321978V', '078-9698987', '2015-08-12', '4444');

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
('18', 'Samantha', '123456345V', 'ST-7723', '0717479567', 'Empty Fuel', 'raemiyoung@gmail.com', '2015-08-23'),
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
  `userFile` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`employeeCode`, `firstName`, `lastName`, `address`, `nicNumber`, `mobilePhone`, `birthDate`, `hireDate`, `emptype`, `userName`, `userPassword`, `userFile`) VALUES
('MG-789', 'Isuru', 'Dilhan', 'Gampaha', '953605469V', '0722353042', '1995-02-01', '2015-08-12', 'Admin', 'isurudilhan', 'Isurudilhan1', 'download (4).jpg'),
('MG-790', 'Rajika', 'IMal', 'Kegalle', '917589068v', '0762011103', '1991-09-19', '2015-08-27', 'Manager', 'rajikaimal', 'RajikaImal123/', 'download (5).jpg'),
('PM-237', 'Sam', 'Karunarathne', 'Colombo', '938660345V', '0717594328', '1993-08-29', '2015-08-19', 'Pump Staff', 'nullnull', 'nullNull123', 'Construction Worker.png'),
('PM-406', 'Lahiru', 'Witharama', 'Rathnapura', '920837006V', '0725429611', '1992-09-19', '2015-08-02', 'Pump Staff', 'nullnull', 'nullNull123', 'images.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

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
('24', 'SD', '5.5', '419', '2015-08-22');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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
('7', 'VISUAL SAFETY CHECK - SILVER', '5000', '', ''),
('10', ' EXTERIOR WAXING - GOLD', '8000', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=335 DEFAULT CHARSET=latin1;

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
('334', 'SDiesel', '5.5', '419', '19800', '2015-08-23');

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
-- Table structure for table `pumpreadings`
--

CREATE TABLE `pumpreadings` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Reading` float NOT NULL,
  `PumpNo` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

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
('36', '2015-08-23', '5656', '6');

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
('rc-1018', 'Isuru', '123456899v', 'Gampaha', '0771363825', 'isuru.dilhan@yahoo.com', '2015-07-31'),
('rc-1090', 'Dilhan', '123456789v', 'Katunayake', '0711363825', 'isuru.dilhan@yahoo.com', '2014-02-31'),
('rc-1122', 'Rajika', '940028343v', 'Kegalle', '0711363825', 'isuru.dilhan@yahoo.com', '2015-07-31'),
('rc-288', 'Sam Khan', '930023643v', 'Colombo', '0789164423', 'isuru.dilhan@yahoo.com', '2015-08-19'),
('rc-549', 'Lahiru', '920028343v', 'Rathnapura', '0711363825', 'isuru.dilhan@yahoo.com', '2015-04-31'),
('rc-892', 'Dumindu', '960028343v', 'Kiribathgoda', '0711363825', 'isuru.dilhan@yahoo.com', '2015-07-31');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regular_lutransactions`
--

INSERT INTO `regular_lutransactions` (`id`, `cust_id`, `package`, `vehicleNo`, `amount`, `date`) VALUES
('2', 'lc-436', 'UNDERCARRIAGE DEGREASING - GOLD', 'hyyyy', '6400', '2015-08-16'),
('4', 'lc-436', 'UNDERCARRIAGE DEGREASING - GOLD', 'fd', '6400', '2015-08-17');

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
('19', 'rc-892', 'Ultimate Value Car Wash', 'TT-1557', '3600', '2015-07-30', 'Not Returned', '2015-08-22'),
('21', 'rc-1122', 'Ultimate Value Car Wash', 'TUB-1648', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('22', 'rc-892', 'Ultimate Value Car Wash', 'AA-8947', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('23', 'rc-1018', 'Ultimate Value Car Wash', 'DAA-1933', '3600', '2015-08-01', 'Returned', '2015-08-22'),
('24', 'rc-549', 'Ultimate Value Car Wash', 'SPD-5949', '3600', '2015-08-01', 'Returned', '2015-08-22'),
('26', 'rc-1018', 'Ultimate Value Car Wash', 'ITP-1959', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('27', 'rc-1018', 'Ultimate Value Car Wash', 'DB-4947', '3600', '2015-08-01', 'Returned', '2015-08-22'),
('28', 'rc-1018', 'Ultimate Value Car Wash', 'IPE-1447', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('29', 'rc-1090', 'Ultimate Value Car Wash', 'SE-5945', '3600', '2015-08-01', 'Returned', '2015-08-22'),
('30', 'rc-1018', 'Ultimate Value Car Wash', 'MIT-1937', '3600', '2015-08-01', 'Returned', '2015-08-22'),
('31', 'rc-1018', 'Ultimate Value Car Wash', 'KA-3957', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('32', 'rc-1090', 'Hand Wash', 'TT-1947', '8000', '2015-08-01', 'Returned', '2015-08-22'),
('33', 'rc-1090', 'Ultimate Value Car Wash', 'ST-4967', '3600', '2015-08-01', 'Not Returned', '2015-08-22'),
('34', 'rc-1090', 'Ultimate Value Car Wash', 'JI-1940', '3600', '2015-08-01', 'Returned', '2015-08-22'),
('36', 'rc-1018', 'Ultimate Value Car Wash', 'KO-4947', '3600', '2015-08-02', 'Not Returned', '2015-08-22'),
('37', 'rc-1090', 'Ultimate Value Car Wash', 'CAB-8978', '3600', '2015-08-02', 'Not Returned', '2015-08-22'),
('38', 'rc-1018', 'Ultimate Value Car Wash', 'CAT-4449', '3600', '2015-08-02', 'Returned', '2015-08-22'),
('39', 'rc-1090', 'Hand Wash', 'BAT-9090', '8000', '2015-08-02', 'Returned', '2015-08-22'),
('40', 'rc-1090', 'Hand Wash', 'OT-1447', '8000', '2015-08-05', 'Returned', '2015-08-22'),
('41', 'rc-1018', 'Platinum Value Car Wash', 'LK-1947', '1600', '2015-08-05', 'Not Returned', '2015-08-22'),
('42', 'rc-1018', 'Ultimate Value Car Wash', 'LI-5948', '3600', '2015-08-05', 'Returned', '2015-08-22'),
('43', 'rc-1090', 'Ultimate Value Car Wash', 'PO-6944', '3600', '2015-08-16', 'Not Returned', '2015-08-22'),
('46', 'rc-1018', 'Ultimate Value Car Wash', 'BIN-2941', '3600', '2015-08-19', 'Returned', '2015-08-22'),
('47', 'rc-892', 'Ultimate Value Car Wash', 'TU-6942', '3600', '2015-08-19', 'Not Returned', '2015-08-22'),
('48', 'rc-1018', 'Ultimate Value Car Wash', 'SE-1944', '3600', '2015-08-22', 'Returned', '2015-08-22'),
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
('SH-193', '8 hours', '8.00', '500', 'yellow'),
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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`Id`, `name`, `product`, `contact`, `email`) VALUES
('41', 'Nexmo', 'lubricant', '0717479370', 't2dude@gmail.com'),
('45', 'IOT', 'fuel', '0717479370', 'ram@gmail.com'),
('46', 'SEP', 'lubricant', '0717778782', 'sup@gmail.com'),
('47', 'KTL', 'lubricant', '0717973705', 'wassup@gmail.com'),
('48', 'CALTEX', 'fuel', '0774799729', 'rae@gmail.com');

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
