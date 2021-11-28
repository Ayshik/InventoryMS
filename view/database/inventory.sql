-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 05:31 PM
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

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sl`, `name`, `id`, `department`, `designation`, `laptop`, `bag`, `mouse`, `location`) VALUES
(19, 'Minhazul Islam', '1234', 'Intern', 'IT', 'No', 'yes', '', 'Dhaka'),
(20, 'Ayshik Khan', '5432', 'Executive', 'HR', 'No', '', 'yes', 'Jessore'),
(22, 'j', 'j', 'j', 'j', 'No', 'yes', 'yes', 'j');

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

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sl`, `name`, `employeeid`, `department`, `assetid`) VALUES
('21', 'a', 'a', 'a', 'No');

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
  `Customization` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`sl`, `assetid`, `model`, `laptopusername`, `maker`, `hostname`, `ip`, `domain`, `cpu`, `oskey`, `osversion`, `vendor`, `procrumentref`, `ram`, `hdd`, `ssd`, `warranty`, `deleverydate`, `procurementdate`, `status`, `serial`, `Customization`) VALUES
(11, 'IPDC-01', 'Latitude 3800', 'Saif', 'Dell', 'IPDC', '123.234', 'ipdc.com', 'i5', '12-6554-76', 'Win 10', 'Computer Source', 'Tahan', '8', 'HDD 1024', 'SSD 128', '5', '2021-11-01', '2021-11-26', 'Free', '1234-123', 'no'),
(12, 'IPDC-02', 'Latitude 3900', 'Ayshikhgcgf', 'HP', 'ipdc', '654-88', 'ipdc', 'i7', '756-96-86', 'Win 11', 'Generic', 'Shamsher', '12', 'HDD 512', 'SSD 256', '3', '2021-11-09', '2021-11-17', 'Free', '723-654', 'no'),
(13, 'IPDC-03', 'Latitude 3500', 'Ayshik12', 'Asus', 'ipdc', '455.343.898', 'ipdc', 'i3', '445-54-64-65', 'Win 8', 'Computer source', 'Nur', '12', 'HDD 512', 'SSD 128', '3', '2021-11-10', '2021-11-25', 'Free', '456-654', 'no'),
(14, 'b', 'a', 'saad', 'a', 'a', 'c', 'b', 'a', 'b', 'a', 'a', 'a', '20', 'HDD 1024', 'SSD 256', '1', '2021-11-02', '2021-11-20', 'Free', 'a', 'yes');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
