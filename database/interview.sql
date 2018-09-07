-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 10:16 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('james@gmail.com', '1234'),
('james@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `Course name` varchar(255) NOT NULL,
  `Course desc` text NOT NULL,
  `Course code` int(11) NOT NULL,
  `Entry Requirements` varchar(255) NOT NULL,
  `Course Fees` varchar(255) NOT NULL,
  `Jobs` varchar(255) NOT NULL,
  `Award` varchar(255) NOT NULL,
  `Credit` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Study Mode` varchar(255) NOT NULL,
  `Application Deadline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`Course name`, `Course desc`, `Course code`, `Entry Requirements`, `Course Fees`, `Jobs`, `Award`, `Credit`, `Duration`, `Study Mode`, `Application Deadline`) VALUES
('Applied Computing', 'Our Master of Science in Computing in DevOps is a one year, full-time or two year, part-time programme. DevOps is the practice of operations and development engineers participating together in the entire service lifestyle, from design through the development process to production support. DevOps is characterised by operations staff harnessing the same techniques as developers for their systems work. Topics the course covers include: DevOps Software Engineering, Project Management and Deployment Pipelines.\r\n\r\nProposed Module for this year are as Follows:- \r\n\r\nDevOps Software Engineering -	Mandatory\r\n\r\nOO Programming for Server Administration-Mandatory\r\n\r\nScripting the Deployment Pipeline-Mandatory\r\n\r\nDevOps Project Management-Mandatory\r\n\r\nDissertation-Mandatory', 1, '', '', '', '', '', '', '', ''),
('DevOps', 'DevOps, a new organizational and cultural way of organizing development and IT operations work, is spreading rapidly – driven by mounting evidence of its benefits to the business. But reaping these gains requires rethinking application security to deliver more secure code at DevOps speed.', 2, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `Interview ID` int(25) NOT NULL,
  `Date` datetime NOT NULL,
  `Course code` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date of Birth` datetime NOT NULL,
  `phone number` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(150) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First Name`, `Last Name`, `Gender`, `Username`, `Email`, `Date of Birth`, `phone number`, `Address`, `City`, `Country`) VALUES
('James', 'Dale', '', 'JamesD', 'JamesD@gmail.com', '1990-02-14 00:00:00', 851623467, 'Bomany', 'Letterkenny', 'Ireland'),
('Jay', 'Cole', 'male', 'JCole', 'JamesD@gmail.com', '1996-08-19 00:00:00', 851625835, 'Germ', 'aphobe', 'Iran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`Course code`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`Interview ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courselist`
--
ALTER TABLE `courselist`
  MODIFY `Course code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `Interview ID` int(25) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
