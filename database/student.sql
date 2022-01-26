-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 11:11 AM
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
  `semester` int(10) NOT NULL,
  `svid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `matricid`, `studentname`, `studemail`, `pcode`, `fypstatus`, `phone`, `semester`, `svid`) VALUES
(1, 'CB19101', 'MOHAMAD ABU BIN MOHAMMAD ALBAB', 'abu@gmail.com', 'BCN18', 'FYP 2', 111283722, 7, 'LS10001'),
(2, 'CD20003', 'MOHAMMAD AMIRUL SHAH BIN MOHAMAD NASIR', 'shah@gmail.com', 'BCG20', 'FYP 2', 111287222, 6, 'KA1112'),
(3, 'CB19100', 'MOHAMAD ALI', 'ali@gmail.com', 'BCN18', 'FYP 1', 111283722, 7, 'LS10001'),
(4, 'CE42032', 'SITI NUR AIN BINTI MOHD NAZRI', 'ain@gmail.com', 'BCA19', 'FYP 2', 126547362, 6, 'LS10001'),
(5, 'CA18122', 'NUR HAZIQAH BINTI SAAT', 'haziqah@gmail.com', 'BCN18', 'FYP 1', 12252424, 6, 'KA1112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
