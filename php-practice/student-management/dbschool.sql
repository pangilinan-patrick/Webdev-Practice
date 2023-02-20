-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 07:42 AM
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
-- Database: `dbschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `fIdindex` int(11) NOT NULL,
  `fIdstudentno` varchar(50) NOT NULL,
  `fIdlastname` varchar(100) NOT NULL,
  `fIdfirstname` varchar(100) NOT NULL,
  `fIdmiddlename` varchar(100) NOT NULL,
  `fIdgender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`fIdindex`, `fIdstudentno`, `fIdlastname`, `fIdfirstname`, `fIdmiddlename`, `fIdgender`) VALUES
(1, '1001', 'Rocamora', 'Nelia', 'Camo', 'Female'),
(2, '1002', 'Chavez', 'Rodante', 'San Pedro', 'Male'),
(3, '1003', 'Flores', 'Ramon', 'Mayo', 'Male'),
(4, '1004', 'Garcia', 'Donna', 'Cruz', 'Female'),
(5, '1005', 'De Vera', 'Mark', 'Anthony', 'Male'),
(6, '1006', 'Pangilinan', 'Patrick', 'Acedilla', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`fIdindex`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `fIdindex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
