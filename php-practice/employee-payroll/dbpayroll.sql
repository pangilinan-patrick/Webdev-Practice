-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 03:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpayroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `fldindex` int(11) NOT NULL,
  `fldlastname` text NOT NULL,
  `fldfirstname` text NOT NULL,
  `fldposition` text NOT NULL,
  `fldpassword` text NOT NULL,
  `fldemployeetype` text NOT NULL,
  `fldperiod` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`fldindex`, `fldlastname`, `fldfirstname`, `fldposition`, `fldpassword`, `fldemployeetype`, `fldperiod`) VALUES
(9090, 'Broad', 'Chris', 'Manager', 'password', 'Full', 'Monthly'),
(123456, 'Bazinga', 'Joey', 'Staff', 'password', 'part', 'Monthly'),
(420690, 'Maneetapho', 'Garnt', 'Manager', 'password', 'full', 'Monthly'),
(930000, 'Colquhoun', 'Connor', 'Executive', 'password', 'part', 'Semi-Monthly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`fldindex`),
  ADD UNIQUE KEY `fldindex` (`fldindex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
