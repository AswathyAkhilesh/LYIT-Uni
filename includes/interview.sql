-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 10:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` int(11) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminPass`) VALUES
(1, 0, 'james@gmail.com', '1234'),
(2, 0, 'james@gmail.com', '1234'),
(3, 0, 'liamwho@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `courseID` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `courseDesc` text NOT NULL,
  `entryRequirements` varchar(255) NOT NULL,
  `courseFees` varchar(255) NOT NULL,
  `jobs` varchar(255) NOT NULL,
  `award` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `studyMode` varchar(255) NOT NULL,
  `appDeadline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`courseID`, `courseName`, `courseDesc`, `entryRequirements`, `courseFees`, `jobs`, `award`, `credit`, `duration`, `studyMode`, `appDeadline`) VALUES
(1, 'Applied Computing', 'Our Master of Science in Computing in DevOps is a one year, full-time or two year, part-time programme. DevOps is the practice of operations and development engineers participating together in the entire service lifestyle, from design through the development process to production support. DevOps is characterised by operations staff harnessing the same techniques as developers for their systems work. Topics the course covers include: DevOps Software Engineering, Project Management and Deployment Pipelines.\r\n\r\nProposed Module for this year are as Follows:- \r\n\r\nDevOps Software Engineering -	Mandatory\r\n\r\nOO Programming for Server Administration-Mandatory\r\n\r\nScripting the Deployment Pipeline-Mandatory\r\n\r\nDevOps Project Management-Mandatory\r\n\r\nDissertation-Mandatory', '', '', '', '', '', '', '', ''),
(2, 'DevOps', 'DevOps, a new organizational and cultural way of organizing development and IT operations work, is spreading rapidly – driven by mounting evidence of its benefits to the business. But reaping these gains requires rethinking application security to deliver more secure code at DevOps speed.', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `interviewID` int(25) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `courseID` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` datetime NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(150) NOT NULL,
  `county` varchar(255) NOT NULL,
  `eirCode` varchar(7) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `firstName`, `lastName`, `gender`, `email`, `dob`, `phoneNumber`, `address`, `city`, `county`, `eirCode`, `country`) VALUES
(1, 'liamwho', 'password', 'Liam', 'Whorriskey', 'male', 'liamwho@gmail.com', '1976-10-28 00:00:00', 864562252, 'Perase Rd', 'Letterkenny', '', '', 'Ireland');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`interviewID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courselist`
--
ALTER TABLE `courselist`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `interviewID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
