-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 03:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `appoid` int(11) NOT NULL,
  `pid` varchar(30) DEFAULT NULL,
  `apponum` int(3) DEFAULT NULL,
  `scheduleid` int(10) DEFAULT NULL,
  `appodate` date DEFAULT NULL,
  `docid` varchar(40) NOT NULL,
  `consultation` varchar(100) NOT NULL,
  `appotime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`appoid`, `pid`, `apponum`, `scheduleid`, `appodate`, `docid`, `consultation`, `appotime`) VALUES
(46, 'reshma', 1, 13, '2023-05-27', 'sharan', 'Stomach Ache', '10:30:00'),
(47, 'dinesh', 1, 15, '2023-05-29', 'sujin', 'Back Pain', '16:26:00'),
(48, 'haripriya', 2, 13, '2023-05-27', 'sharan', 'Head Ache', '10:30:00'),
(50, 'reshma', 1, 17, '2023-09-11', 'sujin', 'Back Pain', '06:30:00'),
(51, 'haripriya', 1, 18, '2023-09-11', 'prakash', 'Head Ache', '07:00:00'),
(52, 'reshma', 2, 18, '2023-09-11', 'prakash', 'Vomiting', '07:00:00'),
(53, 'reshma', 2, 17, '2023-09-11', 'sujin', 'Vomiting', '06:30:00'),
(54, 'reshma', 3, 13, '2023-05-27', 'sharan', 'Back Pain', '10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `email`, `message`) VALUES
('Raghu', 'raghu@gmail.com', 'Thank You for Your Channelling');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `specialist` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`firstname`, `lastname`, `gender`, `mobile`, `specialist`, `emailid`, `loginid`, `password`) VALUES
('Lakshmana', 'Prakash', 'Male', '9999912337', 'Dermatology', 'prakash@gmail.com', 'prakash', '6da6f7b89b159919cbe9ae9dc168e66f'),
('Siva', 'Prem', 'Male', '9988776659', 'Allergology', 'prem@gmail.com', 'prem', 'f0c17eb77a937d973f1625f0441d02b6'),
('Shanmuga', 'Priya', 'Female', '9911883389', 'Cardiology', 'priya@gmail.com', 'priya', '48467d2cc726e8847fbc51f5b0bdc1d1'),
('Siva', 'Rakshitha', 'Female', '9999912337', 'Accident and emergency medicine', 'rakshitha@gmail.com', 'rakshitha', '1c5c88a561417ca8352548db4f12e7bf'),
('Sai', 'Sharan', 'Male', '9991234566', 'Biological hematology', 'sharan@gmail.com', 'sharan', '4be62997360cd7126b8f336ae04a99d1'),
('Sri', 'Janaki', 'Female', '9999123456', 'Cardiology', 'sri@gmail.com', 'sri', '296c2075a196aef15e372a68ae77477b'),
('Vijayendra', 'Sujin', 'Male', '8989712345', 'Child psychiatry', 'sujin@gmail.com', 'sujin', '153e57262c2b0f0ead5c493e39b348d0');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleid` int(11) NOT NULL,
  `docid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `scheduledate` date DEFAULT NULL,
  `scheduletime` time DEFAULT NULL,
  `nop` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `docid`, `title`, `scheduledate`, `scheduletime`, `nop`) VALUES
(12, 'prem', 'Schedule2', '2023-05-26', '09:30:00', 10),
(14, 'rakshitha', 'Schedule3', '2023-05-29', '10:45:00', 10),
(15, 'sujin', 'Schedule4', '2023-05-29', '16:26:00', 15),
(17, 'sujin', 'Schedule 6', '2023-09-11', '06:30:00', 10),
(18, 'prakash', 'Schedule 7', '2023-09-11', '07:00:00', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `gender`, `mobile`, `emailid`, `pid`, `password`) VALUES
('Ajay', 'Rathnam', 'Male', '9988112876', 'ajay@gmail.com', 'ajay', 'ajay123'),
('Dinesh', 'Kumar', 'Male', '9988007788', 'dinesh@gmail.com', 'dinesh', 'dinesh123'),
('Hari', 'Priya', 'Female', '9911889911', 'haripriya@gmail.com', 'haripriya', 'haripriya123'),
('Siva', 'Kala', 'Female', '9900887760', 'kala@gmail.com', 'kala', 'kala123'),
('Reshma', 'Sri', 'Female', '9900880175', 'reshma@gmail.com', 'reshma', 'reshma123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`appoid`),
  ADD KEY `loginid` (`pid`),
  ADD KEY `scheduleid` (`scheduleid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `appoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
