-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studfyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `AnnouncementID` int(11) NOT NULL,
  `Title` varchar(70) NOT NULL,
  `Date` date NOT NULL,
  `Content` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`AnnouncementID`, `Title`, `Date`, `Content`) VALUES
(5, 'Welcome message', '2022-01-26', 'Welcome to the new academic year, hopefully we shall start our new semester with refreshing hopes and positive mindset. The lecture will be conducted ');

-- --------------------------------------------------------

--
-- Table structure for table `fypstudent`
--

CREATE TABLE `fypstudent` (
  `fypid` int(11) NOT NULL,
  `matricid` varchar(10) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `pcode` varchar(10) NOT NULL,
  `phone` int(12) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `logbookid` int(100) NOT NULL,
  `fyptitle` varchar(100) NOT NULL,
  `week` int(100) NOT NULL,
  `date` date NOT NULL,
  `logdesc` varchar(200) NOT NULL,
  `file` varchar(50) NOT NULL,
  `logbookfeedback` varchar(200) NOT NULL,
  `studentid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`logbookid`, `fyptitle`, `week`, `date`, `logdesc`, `file`, `logbookfeedback`, `studentid`) VALUES
(1, 'FYP SYSTEM', 1, '2022-01-20', 'discuss with lecturer about the use case diagram', '0', '', 1),
(2, 'UMP Taska System', 1, '2022-01-21', 'update report', '0', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `studentid` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`studentid`, `rating`, `id`) VALUES
(1, 4, 195),
(3, 3, 196),
(2, 2, 197),
(4, 3, 198),
(5, 4, 199),
(6, 3, 200),
(7, 2, 201),
(8, 3, 202),
(9, 3, 203),
(1, 3, 204);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `matricid` varchar(20) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studemail` varchar(30) NOT NULL,
  `pcode` varchar(10) NOT NULL,
  `fypstatus` varchar(5) NOT NULL,
  `phone` int(12) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `matricid`, `studentname`, `studemail`, `pcode`, `fypstatus`, `phone`, `semester`) VALUES
(1, 'CB19101', 'MOHAMAD ABU BIN MOHAMMAD ALBAB', 'abu@gmail.com', 'BCN18', 'FYP 2', 111283722, 7),
(2, 'CD20003', 'MOHAMMAD AMIRUL SHAH BIN MOHAMAD NASIR', 'shah@gmail.com', 'BCG20', 'FYP 2', 111287222, 6),
(3, 'CB19100', 'MOHAMAD ALI', 'ali@gmail.com', 'BCN18', 'FYP 1', 111283722, 7),
(4, 'CE42032', 'SITI NUR AIN BINTI MOHD NAZRI', 'ain@gmail.com', 'BCA19', 'FYP 2', 126547362, 6),
(5, 'CA18122', 'NUR HAZIQAH BINTI SAAT', 'haziqah@gmail.com', 'BCN18', 'FYP 1', 12252424, 6);

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `average_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`id`, `name`, `average_rating`) VALUES
(1, 'Raj', 4),
(2, 'Tinesh', 2),
(3, 'Sathes', 3),
(4, 'Prem', 3),
(5, 'Ram', 4),
(6, 'Mahen', 3),
(7, 'Nitesh', 2),
(8, 'Dinesh', 3),
(9, 'Kashvin', 3),
(10, 'Ramthanaraj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentsupervisor`
--

CREATE TABLE `studentsupervisor` (
  `studentid` int(10) NOT NULL,
  `sup_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsupervisor`
--

INSERT INTO `studentsupervisor` (`studentid`, `sup_id`) VALUES
(1, 'LS10001');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supid` int(11) NOT NULL,
  `sup_id` varchar(10) NOT NULL,
  `supname` varchar(50) NOT NULL,
  `supemail` varchar(50) NOT NULL,
  `supphone` varchar(11) NOT NULL,
  `suproom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`supid`, `sup_id`, `supname`, `supemail`, `supphone`, `suproom`) VALUES
(1, 'LS10001', 'Danial Bin Isa', 'danial@gmail.com', '010-7676762', 'Faculty of computing, Floor 4, Room B-24'),
(2, 'KA1112', 'Amirul Sufi Bin Saifuddin', 'amirulsufi@gmail.com', '010-544122', 'Faculty of computing, Floor 2, Room A-13'),
(3, 'LA1113', 'Ali Bin Baba', '', '', ''),
(4, 'LS10004', 'Mat Abu Bin Ayub', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL,
  `matricid` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` varchar(11) DEFAULT NULL,
  `usertype` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `matricid`, `password`, `userrole`, `usertype`) VALUES
(1, 'AD10001', 'admin', 'adm', 'lec'),
(2, 'LS10001', 'super', 'sup', 'lec'),
(3, 'CB19100', 'student', 'std', 'std'),
(4, 'CB19101', 'student', 'fyp1', 'std'),
(5, 'CB19102', 'student', 'fyp2', 'std'),
(6, 'CB19103', 'student', 'fyp1', 'std'),
(7, 'CB19104', 'student', 'fyp1', 'std'),
(8, 'CB19105', 'student', 'fyp1', 'std'),
(9, 'CB19106', 'student', 'fyp1', 'std'),
(10, 'EU10001', 'external', 'ext', 'ext'),
(11, 'EV10001', 'evaluator', 'eva', 'lec'),
(12, 'CB10121', 'student', 'std', 'std'),
(13, 'CD20003', 'abc123', 'std', 'std'),
(14, 'KA1112', 'super1', 'sup', 'lec'),
(15, 'LA1113', 'super', 'sup', 'lec'),
(16, 'LS10004', 'super', 'sup', 'lec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`AnnouncementID`);

--
-- Indexes for table `fypstudent`
--
ALTER TABLE `fypstudent`
  ADD PRIMARY KEY (`fypid`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`logbookid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`supid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `AnnouncementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fypstudent`
--
ALTER TABLE `fypstudent`
  MODIFY `fypid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `logbookid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `supid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
