-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 05:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aws2`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `complaintNo` varchar(32) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `complaintDetails` varchar(255) DEFAULT NULL,
  `actionTaken` varchar(255) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `dateCompleted` date DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `wrNo` varchar(32) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `targetdate` date DEFAULT NULL,
  `ageing` varchar(255) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `assetNo` varchar(32) DEFAULT NULL,
  `assetDesc` varchar(255) DEFAULT NULL,
  `workgroup` varchar(32) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `taskDesc` varchar(255) DEFAULT NULL,
  `startDatetime` datetime DEFAULT NULL,
  `endDatetime` datetime DEFAULT NULL,
  `actionTaken` varchar(255) DEFAULT NULL,
  `actualclosedDate` date DEFAULT NULL,
  `justificationOutstanding` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `workrequest`
--

CREATE TABLE `workrequest` (
  `ID` int(11) NOT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `wrNo` varchar(32) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `targetDate` date DEFAULT NULL,
  `ageing` int(5) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `requestor` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `assetNo` varchar(255) DEFAULT NULL,
  `workgroup` varchar(32) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `startDatetime` datetime DEFAULT NULL,
  `endDatetime` datetime DEFAULT NULL,
  `actionTaken` varchar(255) DEFAULT NULL,
  `actualclosedDate` date DEFAULT NULL,
  `justificationOutstanding` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workrequest`
--

INSERT INTO `workrequest` (`ID`, `hospital`, `wrNo`, `datetime`, `targetDate`, `ageing`, `status`, `requestor`, `category`, `assetNo`, `workgroup`, `details`, `startDatetime`, `endDatetime`, `actionTaken`, `actualclosedDate`, `justificationOutstanding`) VALUES
(1, 'Tambunan', 'MWR895/17/000218', '2017-03-23 10:20:00', '0000-00-00', NULL, 'Open', 'RANDY JAFARIN', 'Corrective', '895002291', 'eFEMS', 'SCM - CCTV LOSS CONNECTION\r\n', '2017-03-30 14:00:00', '2017-03-30 16:30:00', 'ADD SOCKET AND ADAPTER, CCTV FUNCTIONING,\r\n', '2017-03-30', ''),
(13, 'Tambunan', 'MWR895/17/000247', '2017-03-31 00:00:00', '0000-00-00', NULL, 'Closed', 'RANDY JAFARIN', 'Corrective', '895002267', 'eFEMS', 'CM -TO CHECK CCTV AT TAMAN TERAPUTIK AREA', '2017-03-30 17:10:00', '2017-03-30 19:30:00', 'ADD SOCKET AND ADAPTER, CCTV FUNCTIONING AND WORK DONE', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `preventivemaintenance`
--
ALTER TABLE `preventivemaintenance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workrequest`
--
ALTER TABLE `workrequest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
