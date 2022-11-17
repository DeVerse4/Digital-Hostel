-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 10:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `s.No` int(10) NOT NULL,
  `collegeid` varchar(10) NOT NULL,
  `photo` longblob NOT NULL,
  `phototag` varchar(100) NOT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `collegeid` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `wmode` varchar(10) NOT NULL DEFAULT 'student',
  `lastmodified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`collegeid`, `pass`, `wmode`, `lastmodified`) VALUES
('0205cse045', '456', '', '2022-11-18 01:48:03'),
('0205cse213', '123', 'student', '2022-11-17 23:54:24'),
('1234war123', '789', 'admin', '2022-11-18 01:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblphoto`
--

CREATE TABLE `tblphoto` (
  `userid` varchar(20) DEFAULT NULL,
  `photo` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `collegeid` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(14) DEFAULT NULL,
  `mailid` varchar(40) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `lastmodified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`collegeid`, `name`, `dob`, `mobile`, `mailid`, `address`, `lastmodified`) VALUES
('0205cse213', 'Gyan prakash', NULL, NULL, 'gyan@gmail.com', NULL, '2022-11-17 23:54:24'),
('1234war123', 'Raj Bali Patel', NULL, NULL, 'rajbali@patel.com', NULL, '2022-11-18 01:44:01'),
('0205cse045', 'Shujauddin Q', NULL, NULL, 'shuju@gmail.com', NULL, '2022-11-18 01:48:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`s.No`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`collegeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `s.No` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
