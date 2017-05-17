-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 07:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aws`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `nameEmployee` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(8) NOT NULL,
  `usertype` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nameEmployee`, `username`, `password`, `usertype`) VALUES
(1, 'Alexzender Marunsai', 'alexzendermarunsai', 'miau1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `preventivemaintenance`
--

CREATE TABLE `preventivemaintenance` (
  `ID` int(11) NOT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `workNo` varchar(255) DEFAULT NULL,
  `dateTime1` datetime DEFAULT NULL,
  `workGroup` varchar(255) DEFAULT NULL,
  `wrType` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `assetNo` varchar(255) DEFAULT NULL,
  `typeCode` varchar(255) DEFAULT NULL,
  `assetName` varchar(255) DEFAULT NULL,
  `locationName` varchar(255) DEFAULT NULL,
  `locationCode` varchar(255) DEFAULT NULL,
  `departmentName` varchar(255) DEFAULT NULL,
  `assetStatus` varchar(255) DEFAULT NULL,
  `assetCritically` varchar(255) DEFAULT NULL,
  `variationStatus` varchar(255) DEFAULT NULL,
  `assetCondition` varchar(255) DEFAULT NULL,
  `brandModel` varchar(255) DEFAULT NULL,
  `serialNo` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `vendor` varchar(255) DEFAULT NULL,
  `serviceAgent` varchar(255) DEFAULT NULL,
  `serviceLife` varchar(255) DEFAULT NULL,
  `contactPerson` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(255) DEFAULT NULL,
  `pWorkDate` date DEFAULT NULL,
  `pRepairDate` date DEFAULT NULL,
  `taskNo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `targetDate` date DEFAULT NULL,
  `next` varchar(255) DEFAULT NULL,
  `statusTask` varchar(255) DEFAULT NULL,
  `requestedDetails` varchar(255) DEFAULT NULL,
  `cWarrantyInformation` varchar(255) DEFAULT NULL,
  `cCompanyName` varchar(255) DEFAULT NULL,
  `cwStartDate` date DEFAULT NULL,
  `cwEndDate` date DEFAULT NULL,
  `telNo` varchar(255) DEFAULT NULL,
  `pdetailsDesc1` varchar(255) DEFAULT NULL,
  `uom1` varchar(255) DEFAULT NULL,
  `qUsedReturned1` varchar(255) DEFAULT NULL,
  `pdetailsDesc2` varchar(255) DEFAULT NULL,
  `uom2` varchar(255) DEFAULT NULL,
  `qUsedReturned2` varchar(255) DEFAULT NULL,
  `pdetailsDesc3` varchar(255) DEFAULT NULL,
  `uom3` varchar(255) DEFAULT NULL,
  `qUsedReturned3` varchar(255) DEFAULT NULL,
  `employeeNo1` varchar(255) DEFAULT NULL,
  `nameEmployee1` varchar(255) DEFAULT NULL,
  `taskCode1` varchar(255) DEFAULT NULL,
  `dateEmDetails1` varchar(255) DEFAULT NULL,
  `startTime1` varchar(255) DEFAULT NULL,
  `endTime1` varchar(255) DEFAULT NULL,
  `prepHours1` varchar(255) DEFAULT NULL,
  `employeeNo2` varchar(255) DEFAULT NULL,
  `nameEmployee2` varchar(255) DEFAULT NULL,
  `taskCode2` varchar(255) DEFAULT NULL,
  `dateEmDetails2` varchar(255) DEFAULT NULL,
  `startTime2` varchar(255) DEFAULT NULL,
  `endTime2` varchar(255) DEFAULT NULL,
  `prepHours2` varchar(255) DEFAULT NULL,
  `employeeNo3` varchar(255) DEFAULT NULL,
  `nameEmployee3` varchar(255) DEFAULT NULL,
  `taskCode3` varchar(255) DEFAULT NULL,
  `dateEmDetails3` varchar(255) DEFAULT NULL,
  `startTime3` varchar(255) DEFAULT NULL,
  `endTime3` varchar(255) DEFAULT NULL,
  `prepHours3` varchar(255) DEFAULT NULL,
  `performanceTest` varchar(255) DEFAULT NULL,
  `eSafetyTest` varchar(255) DEFAULT NULL,
  `ppmAgreedDate` date DEFAULT NULL,
  `dateTimeStarted` datetime DEFAULT NULL,
  `dateTimeCompleted` datetime DEFAULT NULL,
  `downtimeHours` varchar(255) DEFAULT NULL,
  `actionTaken` varchar(255) DEFAULT NULL,
  `completedBy` varchar(255) DEFAULT NULL,
  `dateCompleted` date DEFAULT NULL,
  `verifiedBy` varchar(255) DEFAULT NULL,
  `dateVerified` varchar(255) DEFAULT NULL,
  `timeCompleted` time DEFAULT NULL,
  `timeVerified` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preventivemaintenance`
--

INSERT INTO `preventivemaintenance` (`ID`, `hospital`, `status`, `workNo`, `dateTime1`, `workGroup`, `wrType`, `period`, `assetNo`, `typeCode`, `assetName`, `locationName`, `locationCode`, `departmentName`, `assetStatus`, `assetCritically`, `variationStatus`, `assetCondition`, `brandModel`, `serialNo`, `manufacturer`, `vendor`, `serviceAgent`, `serviceLife`, `contactPerson`, `phoneNo`, `pWorkDate`, `pRepairDate`, `taskNo`, `description`, `targetDate`, `next`, `statusTask`, `requestedDetails`, `cWarrantyInformation`, `cCompanyName`, `cwStartDate`, `cwEndDate`, `telNo`, `pdetailsDesc1`, `uom1`, `qUsedReturned1`, `pdetailsDesc2`, `uom2`, `qUsedReturned2`, `pdetailsDesc3`, `uom3`, `qUsedReturned3`, `employeeNo1`, `nameEmployee1`, `taskCode1`, `dateEmDetails1`, `startTime1`, `endTime1`, `prepHours1`, `employeeNo2`, `nameEmployee2`, `taskCode2`, `dateEmDetails2`, `startTime2`, `endTime2`, `prepHours2`, `employeeNo3`, `nameEmployee3`, `taskCode3`, `dateEmDetails3`, `startTime3`, `endTime3`, `prepHours3`, `performanceTest`, `eSafetyTest`, `ppmAgreedDate`, `dateTimeStarted`, `dateTimeCompleted`, `downtimeHours`, `actionTaken`, `completedBy`, `dateCompleted`, `verifiedBy`, `dateVerified`, `timeCompleted`, `timeVerified`) VALUES
(4, 'Queen Elizabeth', 'Open', 'TESTING', '2017-04-22 13:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', '00:00:00', '00:00:00'),
(6, 'Queen Elizabeth', 'Pending', 'TESTING', '2017-04-20 02:14:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', '00:00:00', '00:00:00'),
(7, 'Queen Elizabeth', 'Pending', 'TESTING', '2017-04-17 02:14:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', '00:00:00', '00:00:00'),
(8, 'Queen Elizabeth', 'Closed', 'TESTING', '2017-04-08 01:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', '00:00:00', '00:00:00'),
(9, 'Sipitang', 'Open', 'HOD/HOD/HOD', '2017-04-20 03:21:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `workrequest`
--

CREATE TABLE `workrequest` (
  `ID` int(11) NOT NULL,
  `status` varchar(8) DEFAULT NULL,
  `reqDateTime` datetime DEFAULT NULL,
  `hospitalName` varchar(32) DEFAULT NULL,
  `wrNo` varchar(255) DEFAULT NULL,
  `requestedBy` varchar(255) DEFAULT NULL,
  `jobTitle` varchar(255) DEFAULT NULL,
  `Ref` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(255) DEFAULT NULL,
  `Dept` varchar(255) DEFAULT NULL,
  `AssetNo` varchar(255) DEFAULT NULL,
  `AssetName` varchar(255) DEFAULT NULL,
  `LocationCode` varchar(255) DEFAULT NULL,
  `LocationName` varchar(255) DEFAULT NULL,
  `WorkGroup` varchar(255) DEFAULT NULL,
  `VariationStatus` varchar(255) DEFAULT NULL,
  `WorkCategory` varchar(255) DEFAULT NULL,
  `ConditionStatus` varchar(255) DEFAULT NULL,
  `RequestedDetails` varchar(255) DEFAULT NULL,
  `IDName` varchar(255) DEFAULT NULL,
  `TargetDate` date DEFAULT NULL,
  `rSignature` varchar(255) DEFAULT NULL,
  `dTime` datetime DEFAULT NULL,
  `aDetails` varchar(255) DEFAULT NULL,
  `amStatus` varchar(255) DEFAULT NULL,
  `lProvided` varchar(255) DEFAULT NULL,
  `aInfo` varchar(255) DEFAULT NULL,
  `lStartDateTime` datetime DEFAULT NULL,
  `lEndDateTime` datetime DEFAULT NULL,
  `lReceivedBy` varchar(255) DEFAULT NULL,
  `lReturnBy` varchar(255) DEFAULT NULL,
  `d1` varchar(255) DEFAULT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `q1` varchar(255) DEFAULT NULL,
  `d2` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `q2` varchar(255) DEFAULT NULL,
  `d3` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `q3` varchar(255) DEFAULT NULL,
  `eNo1` varchar(255) DEFAULT NULL,
  `eN1` varchar(255) DEFAULT NULL,
  `tC1` varchar(255) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `sTime1` time DEFAULT NULL,
  `eTime1` time DEFAULT NULL,
  `rHour1` varchar(255) DEFAULT NULL,
  `eNo2` varchar(255) DEFAULT NULL,
  `eN2` varchar(255) DEFAULT NULL,
  `tC2` varchar(255) DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `sTime2` time DEFAULT NULL,
  `eTime2` time DEFAULT NULL,
  `rHour2` varchar(255) DEFAULT NULL,
  `eNo3` varchar(255) DEFAULT NULL,
  `eN3` varchar(255) DEFAULT NULL,
  `tC3` varchar(255) DEFAULT NULL,
  `date3` date DEFAULT NULL,
  `sTime3` time DEFAULT NULL,
  `eTime3` time DEFAULT NULL,
  `rHour3` varchar(255) DEFAULT NULL,
  `eNo4` varchar(255) DEFAULT NULL,
  `eN4` varchar(255) DEFAULT NULL,
  `tC4` varchar(255) DEFAULT NULL,
  `date4` date DEFAULT NULL,
  `sTime4` time DEFAULT NULL,
  `eTime4` time DEFAULT NULL,
  `rHour4` varchar(255) DEFAULT NULL,
  `dtwS` datetime DEFAULT NULL,
  `dtwC` datetime DEFAULT NULL,
  `aTaken` varchar(255) DEFAULT NULL,
  `esTest` varchar(255) DEFAULT NULL,
  `pTest` varchar(255) DEFAULT NULL,
  `qcppm` varchar(255) DEFAULT NULL,
  `qcuptime` varchar(255) DEFAULT NULL,
  `nameCompleted` varchar(255) DEFAULT NULL,
  `sCompleted` varchar(255) DEFAULT NULL,
  `nameVerified` varchar(255) DEFAULT NULL,
  `sVerified` varchar(255) DEFAULT NULL,
  `dVerified` varchar(255) DEFAULT NULL,
  `dateCompleted` date DEFAULT NULL,
  `timeCompleted` time DEFAULT NULL,
  `dateVerified` date DEFAULT NULL,
  `timeVerified` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `workrequest`
--

INSERT INTO `workrequest` (`ID`, `status`, `reqDateTime`, `hospitalName`, `wrNo`, `requestedBy`, `jobTitle`, `Ref`, `ContactNo`, `Dept`, `AssetNo`, `AssetName`, `LocationCode`, `LocationName`, `WorkGroup`, `VariationStatus`, `WorkCategory`, `ConditionStatus`, `RequestedDetails`, `IDName`, `TargetDate`, `rSignature`, `dTime`, `aDetails`, `amStatus`, `lProvided`, `aInfo`, `lStartDateTime`, `lEndDateTime`, `lReceivedBy`, `lReturnBy`, `d1`, `u1`, `q1`, `d2`, `u2`, `q2`, `d3`, `u3`, `q3`, `eNo1`, `eN1`, `tC1`, `date1`, `sTime1`, `eTime1`, `rHour1`, `eNo2`, `eN2`, `tC2`, `date2`, `sTime2`, `eTime2`, `rHour2`, `eNo3`, `eN3`, `tC3`, `date3`, `sTime3`, `eTime3`, `rHour3`, `eNo4`, `eN4`, `tC4`, `date4`, `sTime4`, `eTime4`, `rHour4`, `dtwS`, `dtwC`, `aTaken`, `esTest`, `pTest`, `qcppm`, `qcuptime`, `nameCompleted`, `sCompleted`, `nameVerified`, `sVerified`, `dVerified`, `dateCompleted`, `timeCompleted`, `dateVerified`, `timeVerified`) VALUES
(4, 'Open', '2017-04-01 00:00:00', '', 'HELLO', 'ABDUL MALIK', 'PT', '', '135', 'A02/Administration', '88605GF001', 'Inventory Asset', '05GF001', 'ADMINISTRATION - MEETING ROOM', 'eFEMS', 'Existing', 'Corrective', 'Good', 'TO CHECK EXT TELEPHONE NOT FUNCTIONING', 'MOHD FADHIL KHAMSHAH', '0000-00-00', 'MOHDFADHIL', '0000-00-00 00:00:00', 'Junction box broken', 'Functioning', 'Yes', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '11', '1pcs', '', '', '', '', '', '', 'TFM88603', 'MOHD FADHIL KHAMSHAH', 'FSC500', '2017-04-23', '12:35:00', '01:05:00', '0.5', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Change junction box. Testes working normal', 'Not Applicable', 'Not Applicable', '', '', 'MOHD FADHIL KHAMSHAH', 'MOHDFADHIL', 'ABDUL MALIK BIN MD JAN', 'ABDULMALIK', 'PERDANA MENTERI', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(7, 'Pending', '2017-04-16 12:32:00', '', 'MWR897/17/001042', 'Sr Hasnah Ahmad', 'Sister', '', '227', 'A01/ Accident & Emergency', '897002367 (QAP Asset)', 'Security Door Access Control, Electronic/Digital', '11GF400', 'Ambulance Porch', 'eFEMS', 'Added', 'User Requests', 'Good', 'Access door not functioning properly', 'AHMAD FAIZAL BIN NOR', '0000-00-00', '', '0000-00-00 00:00:00', 'Door access magnet problem', '', '', '', NULL, NULL, '', '', NULL, '', '', '', '', '', '', '', '', '', 'AHMAD FAIZAL BIN NUR', 'F50000', '2028-03-17', '17:50:00', '19:50:00', '2', '', '', '', '0000-00-00', NULL, NULL, '', '', '', '', '0000-00-00', NULL, NULL, '', '', '', '', '0000-00-00', NULL, NULL, '', '2028-03-17 17:50:00', '2028-03-17 19:50:00', 'Check magnetic door. Fixed and Tested.', '', '', '', '', '', '', '', '', '', '0000-00-00', NULL, '0000-00-00', NULL),
(20, 'Open', '2017-04-18 16:55:00', '', 'WH/HO/JA/12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', NULL, '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(21, 'Open', '2017-04-19 01:03:00', '', 'TIMETEST', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(22, 'Open', '2017-04-20 16:04:00', '', '2ndTEST for TIME', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(23, 'Open', '2017-04-14 04:02:00', '', '3rd test time', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(24, 'Open', '2009-04-23 04:01:00', '', '4th trial', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(25, 'Open', '2009-04-23 04:01:00', '', 'NEW', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0000-00-00', '00:00:00', '00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preventivemaintenance`
--
ALTER TABLE `preventivemaintenance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `workrequest`
--
ALTER TABLE `workrequest`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `preventivemaintenance`
--
ALTER TABLE `preventivemaintenance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `workrequest`
--
ALTER TABLE `workrequest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
