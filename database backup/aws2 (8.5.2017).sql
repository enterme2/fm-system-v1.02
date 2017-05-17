-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 07:14 PM
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
  `ID` int(11) NOT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `complaintNo` varchar(32) DEFAULT NULL,
  `dateRequested` date DEFAULT NULL,
  `timeRequested` time DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `complaintDetails` varchar(255) DEFAULT NULL,
  `actionTaken` varchar(255) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `dateCompleted` date DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`ID`, `hospital`, `complaintNo`, `dateRequested`, `timeRequested`, `reference`, `complaintDetails`, `actionTaken`, `name`, `dateCompleted`, `status`) VALUES
(2, 'Likas', '915/2017/04/005306', '2017-04-17', '11:18:00', '915/2017/04/002107', 'EXPIRED PPM STICKER DATE FOR LCD TV (915009296) DUE DATE 29/01/2017 AT GYNEA ONCO CLINIC', 'PPM done as per checklist', 'Abd Jabbar', '2017-04-17', 'Closed');

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
  `dateRequested` date DEFAULT NULL,
  `timeRequested` time DEFAULT NULL,
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
  `justificationOutstanding` varchar(255) DEFAULT NULL,
  `pendingJustification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `preventivemaintenance`
--

INSERT INTO `preventivemaintenance` (`ID`, `hospital`, `wrNo`, `dateRequested`, `timeRequested`, `targetdate`, `ageing`, `status`, `type`, `assetNo`, `assetDesc`, `workgroup`, `details`, `taskDesc`, `startDatetime`, `endDatetime`, `actionTaken`, `actualclosedDate`, `justificationOutstanding`, `pendingJustification`) VALUES
(3, 'Keningau', 'PMW914/17/001947', '0000-00-00', '12:56:00', '0000-00-00', '', 'Pending', 'Scheduled', '914001027', 'Audio-Visual, Equipment, Television\r\n', 'eFEMS', 'Preventive Work Request', 'Audio-visual, MATV System\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 'Reschedule'),
(4, 'Sipitang', 'PMW897/17/000727', '2017-03-25', '00:00:00', '0000-00-00', '', 'Closed', 'Scheduled', '897000657', 'Audio-Visual, Projector, Multimedia\r\n', '', 'Preventive Work Request', 'Audio-visual Equipment\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `workrequest`
--

CREATE TABLE `workrequest` (
  `ID` int(11) NOT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `wrNo` varchar(32) DEFAULT NULL,
  `dateRequested` date DEFAULT NULL,
  `timeRequested` time DEFAULT NULL,
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
  `justificationOutstanding` varchar(255) DEFAULT NULL,
  `pendingJustification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workrequest`
--

INSERT INTO `workrequest` (`ID`, `hospital`, `wrNo`, `dateRequested`, `timeRequested`, `targetDate`, `ageing`, `status`, `requestor`, `category`, `assetNo`, `workgroup`, `details`, `startDatetime`, `endDatetime`, `actionTaken`, `actualclosedDate`, `justificationOutstanding`, `pendingJustification`) VALUES
(1, 'Tambunan', 'MWR895/17/000218', '2017-05-01', '00:00:00', '0000-00-00', NULL, 'Closed', 'RANDY JAFARIN', 'Corrective', '895002291', '', 'SCM - CCTV LOSS CONNECTION\r\n', '2017-03-30 14:00:00', '2017-03-30 16:30:00', 'ADD SOCKET AND ADAPTER, CCTV FUNCTIONING,\r\n', '2017-03-30', '', 'Parts'),
(13, 'Tambunan', 'MWR895/17/000247', '0000-00-00', '00:00:00', '0000-00-00', NULL, 'Closed', 'RANDY JAFARIN', 'Corrective', '895002267', 'eFEMS', 'CM -TO CHECK CCTV AT TAMAN TERAPUTIK AREA', '2017-03-30 17:10:00', '2017-03-30 19:30:00', 'ADD SOCKET AND ADAPTER, CCTV FUNCTIONING AND WORK DONE', '0000-00-00', '', 'Parts'),
(14, 'Sipitang', 'MWR897/17/001009', '2017-03-24', '00:00:00', '0000-00-00', NULL, 'Closed', 'Sr. Ajar Lakim', 'Corrective', '897000619', '', 'NURSES CALLING SYSTEM NOT FUNCTIONING', '2017-03-24 18:40:00', '2017-03-24 20:40:00', 'CHECK NURSE CALL CONTROL PANEL, CHECK RECEIVER, CHECK POWER SUPPLY, CHECK MAIN POWER SUPPLY, CHECK VOLTAGE SUPPLY', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `preventivemaintenance`
--
ALTER TABLE `preventivemaintenance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `workrequest`
--
ALTER TABLE `workrequest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
