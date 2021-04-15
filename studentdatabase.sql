-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 06:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Rollno` int(8) NOT NULL,
  `Programme` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Category` varchar(8) NOT NULL,
  `Disable` varchar(4) NOT NULL,
  `Modeofpayment` varchar(6) NOT NULL,
  `Dateofpayment` date NOT NULL,
  `Referenceno` varchar(25) NOT NULL,
  `Statusofpayment` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentpaymentdetails`
--

CREATE TABLE `studentpaymentdetails` (
  `Firstname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `RollNumber` int(8) NOT NULL,
  `Programme` varchar(11) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `Semester` int(2) NOT NULL,
  `Category` varchar(3) NOT NULL,
  `Disability` varchar(3) NOT NULL,
  `Modeofpayment` varchar(5) NOT NULL,
  `Dateofpayment` date NOT NULL,
  `Referenceno` varchar(25) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentpaymentdetails`
--

INSERT INTO `studentpaymentdetails` (`Firstname`, `Middlename`, `Lastname`, `RollNumber`, `Programme`, `Department`, `Semester`, `Category`, `Disability`, `Modeofpayment`, `Dateofpayment`, `Referenceno`, `Status`) VALUES
('Viyan', 'vv', 'verma', 1234, 'PhD', 'ECE', 4, 'SC', 'on', 'IMPS', '2020-09-16', '2252', 0),
('TTT', 'we', 'eqew', 13123, 'B.Tech', 'CSE', 4, 'OBC', 'on', 'IMPS', '2020-07-25', '121414', 1),
('Ramesh', 'mi', 'misra', 123236, 'B.Tech', 'CSE', 1, 'Gen', 'on', 'NEFT', '2020-07-31', '132311', 0),
('lala', 'vv', 'verma', 1234535, 'PhD', 'ECE', 4, 'SC', 'on', 'IMPS', '2020-09-16', '2252', 1),
('Shubham', 'ku', 'shan', 1241414, 'PhD', 'ECE', 2, 'SC', 'on', 'NEFT', '2020-07-22', '1314124141', 0),
('Shashank', 'Kumar ', 'Verma', 17010108, 'B.Tech', 'CSE', 6, 'OBC', 'on', 'NEFT', '2020-07-28', '3123123', 1),
('pranav ', 'vir', 'pathak', 17010112, 'B.Tech', 'CSE', 7, 'Gen', 'on', 'NEFT', '2020-07-12', '1123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` varchar(8) NOT NULL COMMENT 'Student ID',
  `fName` varchar(20) NOT NULL,
  `mName` varchar(20) DEFAULT NULL,
  `lName` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `fatherName` varchar(30) NOT NULL,
  `motherName` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `caste` varchar(3) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `mobileNoParents` varchar(10) NOT NULL,
  `emailID` varchar(30) NOT NULL,
  `emailIDParents` varchar(30) DEFAULT NULL,
  `batch` varchar(9) NOT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `fName`, `mName`, `lName`, `dob`, `gender`, `fatherName`, `motherName`, `address`, `caste`, `religion`, `mobileNo`, `mobileNoParents`, `emailID`, `emailIDParents`, `batch`, `PASSWORD`) VALUES
('17010108', 'Shashank', NULL, 'Verma', '1997-02-09', 'Male', 'Satish Kumar Verma', 'Kavita Verma', 'E352, 2nd floor, Mandir Marg number-4, Chajjupur, Babarpur, Delhi-110032', 'OBC', 'Hindu', '9540628585', '9911387400', 'shashank@iiitmanipur.ac.in', 'satishmansi1602@yahoo.co.in', '2017-21', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Rollno`);

--
-- Indexes for table `studentpaymentdetails`
--
ALTER TABLE `studentpaymentdetails`
  ADD PRIMARY KEY (`RollNumber`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
