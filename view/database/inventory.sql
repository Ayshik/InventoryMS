-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:08 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl` int(11) NOT NULL,
  `adname` varchar(100) NOT NULL,
  `addepartment` varchar(100) NOT NULL,
  `ademail` varchar(100) NOT NULL,
  `admobile` varchar(100) NOT NULL,
  `adpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl`, `adname`, `addepartment`, `ademail`, `admobile`, `adpassword`) VALUES
(1, 'Ayshik', 'EEE', 'Ayshikmee@gmail.com', '01775503498', '@Ayshikmee!!'),
(3, 'Saif', 'IT', 'Saif@gmail.com', '12345678', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `sl` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `employeeid` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `assetid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `laptop` varchar(100) DEFAULT NULL,
  `bag` varchar(100) DEFAULT 'No',
  `mouse` varchar(100) DEFAULT 'No',
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sl` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `employeeid` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `assetid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `sl` int(11) NOT NULL,
  `assetid` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
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
  `ssd` varchar(100) DEFAULT NULL,
  `warranty` varchar(100) NOT NULL,
  `deleverydate` varchar(100) NOT NULL,
  `procurementdate` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `serial` varchar(100) NOT NULL,
  `Customization` varchar(10) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
