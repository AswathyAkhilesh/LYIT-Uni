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
-- Table structure for table `courses`
--
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `coursecode` varchar(10) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `bannerdescription` varchar(500) NOT NULL,
  `coursedetails` varchar(1000) NOT NULL,
  `entryrequirements` varchar(700) NOT NULL,
  `coursefees` varchar(500) CHARACTER SET utf8 NOT NULL,
  `jobs` varchar(800) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `studymode` varchar(50) NOT NULL,
  `award` varchar(10) NOT NULL,
  `credit` int(11) NOT NULL,
  `applicationdeadline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `coursecode`, `coursename`, `bannerdescription`, `coursedetails`, `entryrequirements`, `coursefees`, `jobs`, `duration`, `studymode`, `award`, `credit`, `applicationdeadline`) VALUES
(1, 'COOD1', 'Master of Science in DevOps', 'DevOps, a new organizational and cultural way of organizing development and IT operations work, is spreading rapidly, driven by mounting evidence of its benefits to the business. But reaping these gains requires rethinking application security to deliver more secure code at DevOps speed.', '<br><br><b>Our Master of Science in Computing in DevOps is a one year, full-time or two year, part-time programme. DevOps is the practice of operations and development engineers participating together in the entire service lifestyle, from design through the development process to production support.\r\n         DevOps is characterised by operations staff harnessing the same techniques as developers for their systems work. Topics the course covers include: DevOps Software Engineering, Project Management and Deployment Pipelines.</b><br><br> Proposed Module for this year are as Follows:-  <br><br> DevOps Software Engineering -	Mandatory<br><br>OO Programming for Server Administration-Mandatory<br><br>Scripting the Deployment Pipeline-Mandatory<br><br>DevOps Project Management-Mandatory<br><br>Dissertation-Mandatory', '<b><br>Minimum Entry Requirements</b><br><br>\r\n         - Level 8 Honours Degree in Computing, or equivalent, second class honours (2.2), or Higher Diploma in Computing (Conversion Course into Computing).<br> \r\n         -If you do not have an honours degree but have relevant experience you may also be eligible to apply via Recognition of Prior Learning (RPL).  \r\n         <br><br>\r\n         <table class=\"cao-table\">\r\n            <tbody>\r\n               <tr>\r\n                  <th>Number of Places</th>\r\n                  <th>15</th>\r\n               </tr>\r\n            </tbody>\r\n         </table>', '<br><div style=\"padding-bottom:15px\"><b>The EU and NON EU citizens have got different fee structure</b></div>\r\n         <div style=\"color:#22206f;font-size:15px;padding-bottom:10px\">EU Fees: &euro;5,000.00</div>\r\n         <div style=\"color:#22206f;font-size:15px\">Non-EU Fees: &euro;9,000.00</div><br>', '<br>\r\n         <div>Career Pathways</div>\r\n         <p>The main employers are:</p>\r\n         <ul style=\"margin-left:30px;font-size:14px\">\r\n            <li>Software Companies</li>\r\n            <li>Multinational Companies</li>\r\n         </ul>\r\n		 <br>\r\n         <div>Graduate Careers</div>\r\n         <p>Former graduates are employed in the following capacities:</p>\r\n         <ul style=\"margin-left:30px;font-size:14px\">\r\n            <li>DevOps Engineer</li>\r\n            <li>Cloud DevOps Engineer</li>\r\n            <li>Systems Software Engineer</li>\r\n         </ul>', '1 and 2 year', 'Full-time and Part-time', 'Masters', 30, '24 august');

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
