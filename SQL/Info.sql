-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2018 at 12:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `Info`
--

CREATE TABLE `Info` (
  `Name` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Info`
--

INSERT INTO `Info` (`Name`, `contact`, `Dob`, `Email`, `password`) VALUES
('Bharat Arya', '7742885311', '1997-03-31', 'arya.bharat@rocketmail.com', '$2y$10$cWkOlAEyLo8fcxoGRpDP7OUvRVThcOK8s.t5JSnWJFbjyQgo0Takq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Info`
--
ALTER TABLE `Info`
  ADD PRIMARY KEY (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
