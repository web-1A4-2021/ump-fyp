-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 02:28 PM
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
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
