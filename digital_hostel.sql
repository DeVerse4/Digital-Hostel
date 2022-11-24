-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 08:40 PM
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
-- Table structure for table `tblcomplaint`
--

CREATE TABLE `tblcomplaint` (
  `sno` int(10) NOT NULL,
  `collegeid` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `lastmodified` datetime NOT NULL,
  `complaint_status` varchar(50) NOT NULL DEFAULT 'PENDING',
  `resolvemessage` varchar(255) NOT NULL,
  `resolve_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcomplaint`
--

INSERT INTO `tblcomplaint` (`sno`, `collegeid`, `subject`, `message`, `lastmodified`, `complaint_status`, `resolvemessage`, `resolve_date`) VALUES
(5, '0205cse213', 'Pani', 'Water supply line not working', '2022-11-20 02:58:32', 'RESOLVED', 'ok', '2022-11-21 21:46:00'),
(6, '0205cse213', 'Food', 'Messs food is very bad', '2022-11-20 02:58:32', 'RESOLVED', '5 star me aaye ho', '2022-11-20 03:05:01'),
(7, '0205cse213', 'girl', 'Why girls are not allowed in hosstel??', '2022-11-20 02:58:32', 'RESOLVED', 'ok', '2022-11-21 21:46:09'),
(9, '0205cse213', 'room', 'Broken wall of my room plz repair it', '2022-11-20 02:58:32', 'PENDING', '', '0000-00-00 00:00:00'),
(10, '0205cse213', 'furniture', 'I have only one table in my room', '2022-11-20 02:58:32', 'PENDING', '', '0000-00-00 00:00:00'),
(11, '0205cse213', 'electricity', 'Eletricity is not properly reach on 2nd floor sr. wing', '2022-11-20 02:58:32', 'PENDING', '', '0000-00-00 00:00:00'),
(12, '0205cse213', 'roommate', 'sir, what is the procedure for changing the room', '2022-11-20 02:58:32', 'RESOLVED', 'ok', '2022-11-21 21:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `sno` int(10) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `contact_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`sno`, `name`, `email`, `subject`, `message`, `contact_datetime`) VALUES
(5, 'Gyan prakash', 'gyan@gyan.com', 'Mujhe ghr jana h', 'Ye kaha phansa diye jiii', '2022-11-22 00:19:29');

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

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`s.No`, `collegeid`, `photo`, `phototag`, `upload_date`) VALUES
(1, '0205cse213', '', 'Select a tag', '2022-11-21 20:28:36'),
(2, '0205cse213', '', 'Select a tag', '2022-11-21 21:39:58');

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
('0205cse045', '456', 'student', '2022-11-18 01:48:03'),
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
-- Indexes for table `tblcomplaint`
--
ALTER TABLE `tblcomplaint`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`sno`);

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
-- AUTO_INCREMENT for table `tblcomplaint`
--
ALTER TABLE `tblcomplaint`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `s.No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
