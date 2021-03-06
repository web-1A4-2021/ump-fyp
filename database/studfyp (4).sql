-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 08:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `studID` varchar(10) NOT NULL,
  `sup_eva1` varchar(30) NOT NULL,
  `sup_eva2` varchar(30) NOT NULL,
  `evaluator` int(50) NOT NULL,
  `Totalsup` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`studID`, `sup_eva1`, `sup_eva2`, `evaluator`, `Totalsup`) VALUES
('CA18122', '6', '12', 0, '18');

-- --------------------------------------------------------

--
-- Table structure for table `fypstudent`
--

CREATE TABLE `fypstudent` (
  `fypid` int(11) NOT NULL,
  `matricid` varchar(10) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studemail` varchar(50) NOT NULL,
  `pcode` varchar(10) NOT NULL,
  `fypstatus` varchar(10) NOT NULL,
  `phone` int(12) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fypstudent`
--

INSERT INTO `fypstudent` (`fypid`, `matricid`, `studentname`, `studemail`, `pcode`, `fypstatus`, `phone`, `semester`) VALUES
(2, 'CD20003', 'MOHAMMAD AMIRUL SHAH BIN MOHAMAD NASIR', 'shah@gmail.com.my', 'BCG20', 'FYP 1', 111287222, 6);

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `logbookid` int(100) NOT NULL,
  `fyptitle` varchar(100) NOT NULL,
  `week` int(19) NOT NULL,
  `date` date NOT NULL,
  `logdesc` varchar(200) NOT NULL,
  `file` int(11) NOT NULL,
  `logbookfeedback` varchar(200) NOT NULL,
  `matricid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`logbookid`, `fyptitle`, `week`, `date`, `logdesc`, `file`, `logbookfeedback`, `matricid`) VALUES
(19, 'Ai Car', 1, '2022-01-28', 'Kereta Terbang Jauh', 0, 'Sila ikut format yang diberikan.Saya dah bagitahu haritu!', 'cd20003'),
(20, 'FYP system', 1, '2022-01-28', 'doing my report', 0, '', 'CB19101'),
(21, 'FYP System', 2, '2022-01-26', 'updated my erd', 0, '', 'CB19101'),
(22, 'KIds System', 1, '2022-01-31', 'Discuss with sv about title', 0, '', 'CB19100'),
(23, 'Kids System ', 2, '2022-01-29', 'I\'m doing my chapter 1 which is the inroduction, problems, objective and so on', 0, '', 'CB19100');

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
(1, 3, 220),
(2, 3, 221),
(3, 3, 222),
(4, 5, 223),
(1, 5, 224),
(9, 5, 225),
(9, 1, 226),
(5, 2, 227),
(8, 2, 228);

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
(1, 'MOHAMAD AMIRUL', 4),
(2, 'MOHAMMAD ABU', 3),
(3, 'SUUGEN RAJ', 3),
(4, 'SITI NUR AIN', 5),
(5, 'NUR HAZIQAH', 2),
(6, 'KASHVIN JEVA', 0),
(7, 'DARWISH MAT ZAIN', 0),
(8, 'MUHAMMAD AMRI', 2),
(9, 'KAVITHAA', 3),
(10, 'MUHAMAD AMAL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentsupervisor`
--

CREATE TABLE `studentsupervisor` (
  `Fypstd_ID` int(11) NOT NULL,
  `Sup_ID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsupervisor`
--

INSERT INTO `studentsupervisor` (`Fypstd_ID`, `Sup_ID`) VALUES
(1, '30010'),
(2, 'KA1112'),
(3, 'LS10001'),
(4, 'LS10001'),
(5, 'KA1112');

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
(1, 'LS10001', 'Danial Bin Isa', 'danial@gmail.com', '010-7676764', 'Faculty of computing, Floor 4, Room B-24'),
(2, 'LS10002', 'ABBAS SALIIMI BIN LOKMAN', 'abbas@ump.edu.my', '094244621', ''),
(3, 'LS10003', 'ABDUL SAHLI BIN FAKHARUDIN', 'sahli@ump.edu.my', '094244623', ''),
(5, 'LS10004', 'ADZHAR BIN KAMALUDIN', 'adzhar@ump.edu.my', '094245021', ''),
(6, 'LS10009', 'AMINATUL NOR BINTI MOHAMED SAID', 'aminatul@ump.edu.my', '092422632', ''),
(7, 'LS19001', 'ANIS FARIHANI BINTI MAT RAFFEI', 'anisfarahi@ump.edu.my', '095453222', ''),
(8, 'LS10021', 'ARIFIN BIN SALEH', 'arifin@ump.edu.my', '095492141', ''),
(9, 'LS10011', 'AZAMUDDIN BIN AD RAHMAN', 'azamuddinrahman@ump.edu.my', '', ''),
(10, 'LS12122', 'AZLEE BIN ZABIDI', 'azlee@ump.edu.my', '09559223', ''),
(11, 'LS12221', 'AZLINA BINTI ZAINUDDIN', 'azlinaz@ump.edu.my', '095492352', '');

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
(18, 'LS10002', 'super', 'sup', 'lec'),
(19, 'LS10003', 'super', 'sup', 'lec'),
(20, 'LS10004', 'super', 'sup', 'lec'),
(21, 'LS10009', 'super', 'sup', 'lec'),
(22, 'LS19001', 'super', 'sup', 'lec'),
(23, 'LS10021', 'super', 'sup', 'lec'),
(24, 'LS10011', 'super', 'sup', 'lec'),
(25, 'LS12122', 'super', 'sup', 'lec'),
(26, 'LS12221', 'super', 'sup', 'lec'),
(27, 'CO10001', 'coordinator', 'coo', 'lec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`AnnouncementID`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`studID`);

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
  MODIFY `fypid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `logbookid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `supid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
