-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 06:38 PM
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
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `semester1cse`
--

CREATE TABLE `semester1cse` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester1cse`
--

INSERT INTO `semester1cse` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(1, 'MA101 ', 'Mathematics I ', 3, 1, 0, 8),
(1, 'CS101', 'Computer Programming ', 3, 1, 0, 8),
(1, 'CS110 ', 'Computer Programming Lab ', 0, 0, 3, 3),
(1, 'EC101 ', 'Digital Design ', 3, 1, 0, 8),
(1, 'EC110 ', 'Digital Design Lab ', 0, 0, 3, 3),
(1, 'EC102 ', 'Electrical Circuit Analysis', 3, 1, 0, 8),
(1, 'CS102', 'IT Workshop I ', 2, 3, 0, 7),
(1, 'HS101 ', 'English (Pass / Not Pass) ', 2, 0, 0, 4),
(1, '', 'TOTAL', 16, 4, 9, 49),
(1, '', 'Contact Hours / Week', 29, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester1ece`
--

CREATE TABLE `semester1ece` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester1ece`
--

INSERT INTO `semester1ece` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(1, 'MA101 ', 'Mathematics I ', 3, 1, 0, 8),
(1, 'CS101', 'Computer Programming ', 3, 1, 0, 8),
(1, 'CS110 ', 'Computer Programming Lab ', 0, 0, 3, 3),
(1, 'EC101 ', 'Digital Design ', 3, 1, 0, 8),
(1, 'EC110 ', 'Digital Design Lab ', 0, 0, 3, 3),
(1, 'EC102 ', 'Electrical Circuit Analysis', 3, 1, 0, 8),
(1, 'CS102', 'IT Workshop I ', 2, 3, 0, 7),
(1, 'HS101 ', 'English (Pass / Not Pass) ', 2, 0, 0, 4),
(1, '', 'TOTAL', 16, 4, 9, 49),
(1, '', 'Contact Hours / Week', 29, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester2cse`
--

CREATE TABLE `semester2cse` (
  `Semester` int(1) NOT NULL,
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester2cse`
--

INSERT INTO `semester2cse` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(2, 'MA102', 'Mathematics II', 3, 1, 0, 8),
(2, 'CS103 ', 'Data Structures', 3, 1, 0, 8),
(2, 'CS111', 'Data Structures Lab ', 0, 0, 3, 3),
(2, 'CS104', 'Computer Organization', 3, 1, 0, 8),
(2, 'EC103', 'Basic Electronic Circuits', 3, 1, 0, 8),
(2, 'EC111', 'Basic Electronics Lab ', 0, 0, 3, 3),
(2, 'HS102', 'Economics', 3, 0, 0, 6),
(2, '', 'TOTAL', 15, 4, 6, 44),
(2, '', 'Contact Hours / Week', 25, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester2ece`
--

CREATE TABLE `semester2ece` (
  `Semester` int(1) NOT NULL,
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester2ece`
--

INSERT INTO `semester2ece` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(2, 'MA102', 'Mathematics II', 3, 1, 0, 8),
(2, 'CS103 ', 'Data Structures', 3, 1, 0, 8),
(2, 'CS111', 'Data Structures Lab ', 0, 0, 3, 3),
(2, 'CS104', 'Computer Organization', 3, 1, 0, 8),
(2, 'EC103', 'Basic Electronic Circuits', 3, 1, 0, 8),
(2, 'EC111', 'Basic Electronics Lab ', 0, 0, 3, 3),
(2, 'HS102', 'Economics', 3, 0, 0, 6),
(2, '', 'TOTAL', 15, 4, 6, 44),
(2, '', 'Contact Hours / Week', 25, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester3cse`
--

CREATE TABLE `semester3cse` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester3cse`
--

INSERT INTO `semester3cse` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(3, 'MA203', 'Mathematics III', 3, 0, 0, 6),
(3, 'MA205', 'Discrete Mathematics', 3, 0, 0, 6),
(3, 'CS201 ', 'Algorithms', 3, 0, 0, 6),
(3, 'CS251', 'IT Workshop II ', 2, 0, 3, 7),
(3, 'CS231 ', 'Operating Systems', 3, 0, 0, 6),
(3, 'CS232 ', 'Operating Systems Lab', 0, 0, 4, 4),
(3, 'SC201', 'Physics I', 3, 0, 0, 6),
(3, 'HS ', 'HSS Course', 3, 0, 0, 6),
(3, '', 'TOTAL', 20, 0, 7, 47),
(3, '', 'Contact Hours / Week', 27, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester3ece`
--

CREATE TABLE `semester3ece` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester3ece`
--

INSERT INTO `semester3ece` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(3, 'MA203', 'Mathematics III ', 3, 0, 0, 6),
(3, 'EC201', 'Analog Circuits', 3, 1, 0, 8),
(3, 'EC202 ', 'Analog Circuits Lab', 0, 0, 3, 3),
(3, 'EC241', 'Signals and Systems', 3, 0, 0, 6),
(3, 'EC242 ', 'Signals and Systems Lab', 0, 0, 3, 3),
(3, 'CS231', 'Operating Systems', 3, 0, 0, 6),
(3, 'CS232 ', 'Operating Systems lab ', 0, 0, 4, 4),
(3, 'SC201 ', 'Physics I ', 3, 0, 0, 6),
(3, 'HS ', 'HSS Elective', 3, 0, 0, 6),
(3, '', 'TOTAL', 18, 1, 10, 48),
(3, '', 'Contact Hours / Week', 29, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester4cse`
--

CREATE TABLE `semester4cse` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester4cse`
--

INSERT INTO `semester4cse` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(4, 'CS210 ', 'Formal Languages and Automata', 3, 0, 0, 6),
(4, 'CS240', 'Database Management Systems ', 3, 0, 0, 6),
(4, 'CS241 ', 'DBMS Lab ', 0, 0, 4, 4),
(4, 'CS252', 'Computer Networks', 3, 0, 0, 6),
(4, 'CS253', 'Computer Networks Lab ', 0, 0, 4, 4),
(4, 'CS200 ', 'Project-I ', 0, 0, 6, 6),
(4, 'SC202', 'Chemistry', 3, 0, 0, 6),
(4, 'HS ', 'HSS Elective', 3, 0, 0, 6),
(4, '', 'TOTAL', 15, 0, 14, 44),
(4, '', 'Contact Hours / Week', 29, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester4ece`
--

CREATE TABLE `semester4ece` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester4ece`
--

INSERT INTO `semester4ece` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(4, 'MA204', 'Mathematics IV', 3, 0, 0, 6),
(4, 'EC251 ', 'Principles of Communication', 3, 1, 0, 8),
(4, 'EC252', 'Communications Lab ', 0, 0, 3, 3),
(4, 'EC243 ', 'Digital Signal Processing', 3, 0, 0, 6),
(4, 'EC244', 'Digital Signal Processing Lab', 0, 0, 3, 3),
(4, 'EC260 ', 'Semiconductor Devices ', 3, 0, 0, 6),
(4, 'SC202', 'Chemistry ', 3, 0, 0, 6),
(4, 'HS', 'HSS Elective ', 3, 0, 0, 6),
(4, '', 'TOTAL', 18, 1, 6, 44),
(4, '', 'Contact Hours / Week', 25, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester5cse`
--

CREATE TABLE `semester5cse` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester5cse`
--

INSERT INTO `semester5cse` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(5, 'CS301', 'Theory of Computation', 3, 0, 0, 6),
(5, 'CS320 ', 'Compilers', 3, 1, 0, 8),
(5, 'CS321', 'Compilers Lab ', 0, 0, 3, 3),
(5, 'CS302', 'Data Communication', 3, 0, 0, 6),
(5, 'CS303', 'Distributed Systems', 3, 0, 0, 6),
(5, 'CS351', 'IT Workshop III: Cloud Computing ', 1, 0, 3, 5),
(5, 'SC301', 'Biology', 3, 0, 0, 6),
(5, 'HS ', 'HSS Elective ', 3, 0, 0, 6),
(5, '', 'TOTAL', 19, 1, 6, 46),
(5, '', 'Contact Hours / Week', 36, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester5ece`
--

CREATE TABLE `semester5ece` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester5ece`
--

INSERT INTO `semester5ece` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(5, 'EC351 ', 'Digital Communication', 3, 1, 0, 8),
(5, 'EC352', 'Digital Communication Lab', 0, 0, 3, 3),
(5, 'EC301', 'Analog Integrated Circuits', 3, 0, 0, 6),
(5, 'EC302 ', 'Analog Integrated Circuit Lab ', 0, 0, 3, 3),
(5, 'EC370 ', 'Electromagnetics', 3, 1, 0, 8),
(5, 'EC380', 'Control Systems', 3, 1, 0, 8),
(5, 'SC301', 'Biology', 3, 0, 0, 6),
(5, 'HS ', 'HSS Elective', 3, 0, 0, 6),
(5, '', 'TOTAL', 18, 3, 6, 48),
(5, '', 'Contact Hours / Week', 27, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester6cse`
--

CREATE TABLE `semester6cse` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester6cse`
--

INSERT INTO `semester6cse` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(6, 'MA305', 'Optimization Techniques', 3, 0, 0, 6),
(6, 'CS330', 'Software Engineering', 3, 0, 0, 6),
(6, 'CS331', 'Software Engineering Lab', 0, 0, 3, 3),
(6, 'CS340', 'Computer Graphics', 3, 0, 0, 6),
(6, 'CS341', 'Computer Graphics Lab ', 0, 0, 3, 3),
(6, 'CS306 ', 'Machine Learning', 3, 0, 0, 6),
(6, 'CS36X ', 'Elective I ', 3, 0, 0, 6),
(6, 'CS300 ', 'Project II(Optional) ', 0, 0, 6, 6),
(6, 'HS302', 'Language, Cognition & Culture', 3, 0, 0, 6),
(6, '', 'TOTAL', 18, 0, 12, 48),
(6, '', 'Contact Hours / Week', 30, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester6ece`
--

CREATE TABLE `semester6ece` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester6ece`
--

INSERT INTO `semester6ece` (`Semester`, `Code`, `Coursename`, `L`, `T`, `P`, `C`) VALUES
(6, 'EC353', 'Information Theory and Coding', 3, 0, 0, 6),
(6, 'EC361', 'VLSI Design', 3, 0, 0, 6),
(6, 'EC362', 'VLSI Design Lab', 0, 0, 3, 3),
(6, 'EC371 ', 'Microwave Engineering', 3, 0, 0, 6),
(6, 'EC372', 'Microwave Engineering Lab ', 0, 0, 3, 3),
(6, 'EC381 ', 'Embedded Systems', 3, 0, 0, 6),
(6, 'EC382', 'Embedded Systems Lab ', 0, 0, 3, 3),
(6, 'EC354', 'Communication Networks', 3, 0, 0, 6),
(6, 'HS302', 'Language, Cognition & Culture', 3, 0, 0, 6),
(6, '', 'TOTAL', 18, 0, 9, 45),
(6, '', 'Contact Hours / Week', 27, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester7cse`
--

CREATE TABLE `semester7cse` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester7ece`
--

CREATE TABLE `semester7ece` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester8cse`
--

CREATE TABLE `semester8cse` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester8ece`
--

CREATE TABLE `semester8ece` (
  `Semester` int(11) NOT NULL DEFAULT '1',
  `Code` varchar(6) NOT NULL,
  `Coursename` varchar(80) NOT NULL,
  `L` int(2) NOT NULL,
  `T` int(2) NOT NULL,
  `P` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
