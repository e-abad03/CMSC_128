-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2021 at 09:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exit_program_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `likert_scale`
--

CREATE TABLE `likert_scale` (
  `ID` int(255) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `One` int(11) DEFAULT NULL,
  `Two` int(11) DEFAULT NULL,
  `Three` int(11) DEFAULT NULL,
  `Four` int(11) DEFAULT NULL,
  `Five` int(11) DEFAULT NULL,
  `NA` int(11) DEFAULT NULL,
  `Counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likert_scale`
--

INSERT INTO `likert_scale` (`ID`, `Username`, `One`, `Two`, `Three`, `Four`, `Five`, `NA`, `Counter`) VALUES
(23, '', NULL, NULL, NULL, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `UP_mail` varchar(30) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Middle_initial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`Username`, `Password`, `UP_mail`, `Last_name`, `First_name`, `Middle_initial`) VALUES
('ebabad', 'pword1234', 'ebabad2@up.edu.ph', 'Abad', 'Erick', 'Baclit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likert_scale`
--
ALTER TABLE `likert_scale`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UP_mail` (`Username`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likert_scale`
--
ALTER TABLE `likert_scale`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
