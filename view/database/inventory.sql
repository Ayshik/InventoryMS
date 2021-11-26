-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 06:53 PM
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
  `mouse` varchar(100) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sl`, `name`, `id`, `department`, `designation`, `laptop`, `bag`, `mouse`) VALUES
(14, 'Saif', 'Saif112', 'HR', 'MD', 'No', 'yes', 'yes'),
(17, 'Saad', '2342-23423', 'Staff', 'HR', 'No', '', '');

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
('10', 'gg', 'ggg', 'gg', 'No'),
('11', 'hh', 'd', 'd', 'No'),
('12', 'ayshik', 'Ayshik112', 'Executive', 'dell-i6545678'),
('16', 'Ayshik', '2342-324523', 'Intern', 'dell-i6545678'),
('15', 'SaifMinhaz', '12345', 'Intern', 'dell-i6545678');

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
  `procurementdate` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `serial` varchar(100) NOT NULL,
  `Customization` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`sl`, `assetid`, `model`, `dsn`, `laptopusername`, `maker`, `hostname`, `ip`, `domain`, `cpu`, `oskey`, `osversion`, `vendor`, `procrumentref`, `ram`, `hdd`, `warranty`, `deleverydate`, `procurementdate`, `status`, `serial`, `Customization`) VALUES
(1, 'dell-i6545678', 'h', 'g', 'rr', 'h', 'g', 'g', 'g', 'hh', 'g', 'ss', 'j', 'h', '24', 'HDD 120', '1', '2021-11-24', '2021-11-12', 'Free', '3456789', 'yes'),
(2, 'hp-545555', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'hh', 'h', 'h', 'j', 'h', '8', 'SSD 1024', '1', '2021-11-24', '2021-11-12', 'Free', '3456789', 'yes'),
(7, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '4', 'HDD 120', '1', '2021-11-02', '2021-11-20', 'Free', 'aa', 'no'),
(8, 'IPDC-224', 'HP', 'kuhdef', 'SaifMinhaz', 'HP', 'sfkesgf', '234.3423.234.234', 'ipdcbd', '8 core', '324582-4325-25-253', '19H2', 'HP', 'weflihew', '4', 'HDD 120', '1', '2021-11-24', '2021-11-25', 'Free', '65364', 'no'),
(9, 'IPDC-224', 'HP', 'kuhdef', 'SaifMinhaz', 'HP', 'sfkesgf', '234.3423.234.234', 'ipdcbd', '8 core', '324582-4325-25-253', '19H2', 'HP', 'weflihew', '4', 'HDD 120', '1', '2021-11-24', '2021-11-25', 'Free', '65364', 'no'),
(10, 'IPDC-200', '', 'sefsfes', 'Ayshik', '', 'sfe', 'sfe', 'sge', '', 'sgg', 'sgr', '', '', '4', 'HDD 120', '1', '', '', 'Faulty', '', 'yes');

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
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
