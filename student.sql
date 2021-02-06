-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 05:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `sno` int(20) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`sno`, `RegNo`, `Name`, `Dob`, `Mobile`, `Address`, `Email`, `tstamp`) VALUES
(11, 'bhavesh12344', 'Bhavesh', '2000-10-04', 2147483647, 'b-wing , Anand Socie', 'bhavesh@gmail.com', '2021-01-21 15:22:40'),
(12, '12345pc', 'Whizz', '2001-02-19', 2147483647, 'bhaha njaja hhssh bh', 'whizz@gmail.com', '2021-01-21 15:32:54'),
(18, '12345', 'Girish', '2000-10-07', 2147483647, 'hahakakamm hhggdd jd', 'girish@gmail.com', '2021-01-23 12:57:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
