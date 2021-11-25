-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 10:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sl` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `laptop` varchar(100) NOT NULL,
  `bag` varchar(100) DEFAULT NULL,
  `mouse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sl`, `name`, `id`, `department`, `designation`, `laptop`, `bag`, `mouse`) VALUES
(8, 'sr5thsr', 'rg346egthd', 'dhdth', 'thth', 'rehg4345', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `sl` int(11) NOT NULL,
  `assetid` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `dsn` varchar(100) NOT NULL,
  `laptopusername` varchar(100) NOT NULL,
  `maker` varchar(100) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `oskey` varchar(100) NOT NULL,
  `osversion` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `procrumentref` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `hdd` varchar(100) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `deleverydate` varchar(100) NOT NULL,
  `procurementdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`sl`, `assetid`, `model`, `dsn`, `laptopusername`, `maker`, `hostname`, `ip`, `domain`, `cpu`, `oskey`, `osversion`, `vendor`, `procrumentref`, `ram`, `hdd`, `warranty`, `deleverydate`, `procurementdate`) VALUES
(1, 'h', 'h', 'h', 'h', 'h', 'h', 'hh', 'j', 'hh', 'hh', 'h', 'j', 'h', '4', '120', '1', '2021-11-24', '2021-11-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
