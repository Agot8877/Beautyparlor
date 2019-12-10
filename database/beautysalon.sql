-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 04:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautysalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `Contact_no.` varchar(20) NOT NULL,
  `purok` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zipcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `middle_name`, `last_name`, `Contact_no.`, `purok`, `barangay`, `city`, `zipcode`) VALUES
('1', 'joel', 'agot', 'Agot', '9957118738', 'asd', 'sadas', 'Oroquieta City', 7204);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `Employee_JobID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `FirstName`, `LastName`, `MiddleName`, `Employee_JobID`) VALUES
(6, 'Joel', 'Agot', 'T', 1),
(7, 'Earl John', 'Banez', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `JobID` int(11) NOT NULL,
  `JobName` varchar(30) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JobID`, `JobName`, `Description`) VALUES
(1, 'HairDressers', 'tig alot ug tig rebond'),
(2, 'Manicurist', 'hinlo koko'),
(4, 'beautician', 'beauty'),
(5, 'cut', 'makoy'),
(6, 'Silhig', 'tig shampoo');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `EmployeeID` int(11) NOT NULL,
  `salaryID` int(11) NOT NULL,
  `salary` decimal(18,2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` varchar(100) NOT NULL,
  `Serv_Name` varchar(100) NOT NULL,
  `Price` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `Serv_Name`, `Price`) VALUES
('1', 'Hair Rebonding With Keratin Oil', '1000.00'),
('2', 'haircut', '50.00'),
('3', 'Hair Rebonding With Hair Reborn', '1500.00'),
('4', 'manicure', '60.00');

-- --------------------------------------------------------

--
-- Table structure for table `services_availed`
--

CREATE TABLE `services_availed` (
  `reciept_no` varchar(30) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_availed`
--

INSERT INTO `services_availed` (`reciept_no`, `customer_id`, `timestamp`) VALUES
('111', '1', '2019-09-10 07:05:26'),
('2', '1', '2019-03-26 05:36:16'),
('321', '1', '2019-09-11 07:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `service_item`
--

CREATE TABLE `service_item` (
  `service_item_id` int(11) NOT NULL,
  `reciept_no` varchar(30) NOT NULL,
  `Services_checked` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tools_employee`
--

CREATE TABLE `tools_employee` (
  `tool_id` int(10) NOT NULL,
  `tool_empID` int(11) NOT NULL,
  `id_no` int(11) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools_employee`
--

INSERT INTO `tools_employee` (`tool_id`, `tool_empID`, `id_no`, `quantity`, `timestamp`) VALUES
(3, 7, 1, 20, '2019-10-28 03:31:12'),
(5, 6, 1, 20, '2019-10-28 03:31:53'),
(6, 7, 1, 10, '2019-10-28 03:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `tools_item`
--

CREATE TABLE `tools_item` (
  `id_no` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text NOT NULL,
  `amount` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools_item`
--

INSERT INTO `tools_item` (`id_no`, `timestamp`, `description`, `amount`, `quantity`, `unit`) VALUES
(1, '2019-10-28 03:32:14', 'pulbos', 20, 50, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit`) VALUES
(3, 'kg'),
(2, 'liters'),
(4, 'mg'),
(1, 'mm'),
(5, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'admin', 'admin@gmail.coms', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'asd', 'mariel@email.com', '7815696ecbf1c96e6894b779456d330e'),
(11, 'joelagot', 'joeltumandaagot@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(12, 'jol', 'joeltumandaagt@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'jol', 'joeltumandaagt@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `Employee_JobID` (`Employee_JobID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JobID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salaryID`),
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Indexes for table `services_availed`
--
ALTER TABLE `services_availed`
  ADD PRIMARY KEY (`reciept_no`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `service_item`
--
ALTER TABLE `service_item`
  ADD PRIMARY KEY (`service_item_id`),
  ADD KEY `reciept_no` (`reciept_no`),
  ADD KEY `Services_checked` (`Services_checked`),
  ADD KEY `Services_checked_2` (`Services_checked`);

--
-- Indexes for table `tools_employee`
--
ALTER TABLE `tools_employee`
  ADD PRIMARY KEY (`tool_id`),
  ADD KEY `FK_id_no` (`id_no`),
  ADD KEY `tool_empID` (`tool_empID`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `tools_item`
--
ALTER TABLE `tools_item`
  ADD PRIMARY KEY (`id_no`),
  ADD KEY `unit` (`unit`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit` (`unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `JobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salaryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_item`
--
ALTER TABLE `service_item`
  MODIFY `service_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tools_employee`
--
ALTER TABLE `tools_employee`
  MODIFY `tool_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tools_item`
--
ALTER TABLE `tools_item`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`Employee_JobID`) REFERENCES `job` (`JobID`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `Salary_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`);

--
-- Constraints for table `services_availed`
--
ALTER TABLE `services_availed`
  ADD CONSTRAINT `Services_availed_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `service_item`
--
ALTER TABLE `service_item`
  ADD CONSTRAINT `service_item_ibfk_1` FOREIGN KEY (`Services_checked`) REFERENCES `services` (`ServiceID`),
  ADD CONSTRAINT `service_item_ibfk_2` FOREIGN KEY (`reciept_no`) REFERENCES `services_availed` (`reciept_no`);

--
-- Constraints for table `tools_employee`
--
ALTER TABLE `tools_employee`
  ADD CONSTRAINT `tools_employee_ibfk_1` FOREIGN KEY (`tool_empID`) REFERENCES `employee` (`EmployeeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tools_employee_ibfk_2` FOREIGN KEY (`id_no`) REFERENCES `tools_item` (`id_no`) ON UPDATE CASCADE;

--
-- Constraints for table `tools_item`
--
ALTER TABLE `tools_item`
  ADD CONSTRAINT `Tools_Item_ibfk_1` FOREIGN KEY (`unit`) REFERENCES `unit` (`unit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
