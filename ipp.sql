-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 07:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipp`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `INVIGILATOR_NAME` varchar(20) NOT NULL,
  `ROOM_NO` varchar(20) NOT NULL,
  `TIMING` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`INVIGILATOR_NAME`, `ROOM_NO`, `TIMING`) VALUES
('SAM', 'G01', '9.15AM'),
('QWE', 'G01', '9.15AM'),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', ''),
('', 'G02', '');

-- --------------------------------------------------------

--
-- Table structure for table `roomg01`
--

CREATE TABLE `roomg01` (
  `Rows` int(11) DEFAULT NULL,
  `col1` bigint(20) DEFAULT NULL,
  `col2` bigint(20) DEFAULT NULL,
  `col3` bigint(20) DEFAULT NULL,
  `col4` bigint(20) DEFAULT NULL,
  `col5` bigint(20) DEFAULT NULL,
  `col6` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomg01`
--

INSERT INTO `roomg01` (`Rows`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`) VALUES
(1, 25, 45, 26, 46, 27, 47),
(2, 48, 28, 49, 29, 50, 30),
(3, 31, 51, 99, 52, 33, 98),
(4, 54, 34, 55, 35, 56, 36),
(5, 37, 57, 38, 58, 39, 59);

-- --------------------------------------------------------

--
-- Table structure for table `roomg02`
--

CREATE TABLE `roomg02` (
  `Rows` int(11) DEFAULT NULL,
  `col1` bigint(20) DEFAULT NULL,
  `col2` bigint(20) DEFAULT NULL,
  `col3` bigint(20) DEFAULT NULL,
  `col4` bigint(20) DEFAULT NULL,
  `col5` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomg02`
--

INSERT INTO `roomg02` (`Rows`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES
(1, 1406001, 1405001, 1406002, 1405002, 1406003),
(2, 1406004, 1405003, 1406005, 1405004, 1406006),
(3, 1406007, 1405005, 1406008, 1405006, 1406009),
(4, 1406010, 1405007, 1406011, 1405008, 1406012),
(5, 1405009, NULL, 1405010, NULL, 1405011);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ROLL_NO` varchar(10) NOT NULL,
  `ROOM_NO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ROLL_NO`, `ROOM_NO`) VALUES
('25', 'G01'),
('26', 'G01'),
('27', 'G01'),
('28', 'G01'),
('29', 'G01'),
('30', 'G01'),
('31', 'G01'),
('32', 'G01'),
('33', 'G01'),
('34', 'G01'),
('35', 'G01'),
('36', 'G01'),
('37', 'G01'),
('38', 'G01'),
('39', 'G01'),
('45', 'G01'),
('46', 'G01'),
('47', 'G01'),
('48', 'G01'),
('49', 'G01'),
('50', 'G01'),
('51', 'G01'),
('52', 'G01'),
('53', 'G01'),
('54', 'G01'),
('55', 'G01'),
('56', 'G01'),
('57', 'G01'),
('58', 'G01'),
('59', 'G01'),
('34', 'G02'),
('35', 'G02'),
('36', 'G02'),
('37', 'G02'),
('38', 'G02'),
('39', 'G02'),
('40', 'G02'),
('41', 'G02'),
('42', 'G02'),
('43', 'G02'),
('44', 'G02'),
('45', 'G02'),
('12', 'G02'),
('13', 'G02'),
('14', 'G02'),
('15', 'G02'),
('16', 'G02'),
('17', 'G02'),
('18', 'G02'),
('19', 'G02'),
('20', 'G02'),
('21', 'G02'),
('22', 'G02'),
('23', 'G02'),
('24', 'G02'),
('25', 'G02'),
('26', 'G02'),
('27', 'G02'),
('28', 'G02'),
('29', 'G02'),
('30', 'G02'),
('31', 'G02'),
('32', 'G02'),
('33', 'G02'),
('34', 'G02'),
('35', 'G02'),
('36', 'G02'),
('37', 'G02'),
('38', 'G02'),
('39', 'G02'),
('40', 'G02'),
('41', 'G02'),
('42', 'G02'),
('43', 'G02'),
('44', 'G02'),
('45', 'G02'),
('46', 'G02'),
('47', 'G02'),
('48', 'G02'),
('49', 'G02'),
('50', 'G02'),
('51', 'G02'),
('52', 'G02'),
('53', 'G02'),
('54', 'G02'),
('55', 'G02'),
('56', 'G02'),
('34', 'G02'),
('35', 'G02'),
('36', 'G02'),
('37', 'G02'),
('38', 'G02'),
('39', 'G02'),
('40', 'G02'),
('41', 'G02'),
('42', 'G02'),
('43', 'G02'),
('44', 'G02'),
('45', 'G02'),
('34', 'G02'),
('35', 'G02'),
('36', 'G02'),
('37', 'G02'),
('38', 'G02'),
('39', 'G02'),
('40', 'G02'),
('41', 'G02'),
('42', 'G02'),
('43', 'G02'),
('44', 'G02'),
('45', 'G02'),
('1405001', 'G02'),
('1405002', 'G02'),
('1405003', 'G02'),
('1405004', 'G02'),
('1405005', 'G02'),
('1405006', 'G02'),
('1405007', 'G02'),
('1405008', 'G02'),
('1405009', 'G02'),
('1405010', 'G02'),
('1405011', 'G02'),
('1405012', 'G02'),
('1405001', 'G02'),
('1405002', 'G02'),
('1405003', 'G02'),
('1405004', 'G02'),
('1405005', 'G02'),
('1405006', 'G02'),
('1405007', 'G02'),
('1405008', 'G02'),
('1405009', 'G02'),
('1405010', 'G02'),
('1405011', 'G02'),
('1405012', 'G02'),
('1406001', 'G02'),
('1406002', 'G02'),
('1406003', 'G02'),
('1406004', 'G02'),
('1406005', 'G02'),
('1406006', 'G02'),
('1406007', 'G02'),
('1406008', 'G02'),
('1406009', 'G02'),
('1406010', 'G02'),
('1406011', 'G02'),
('1406012', 'G02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `field` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `field`, `username`, `password`) VALUES
(1, 'gsv@g.com', 'gsv', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitors` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitors`) VALUES
('127.0.0.1'),
('127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `field` (`field`),
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
