-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 04:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `un` varchar(30) NOT NULL,
  `ps` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`un`, `ps`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `dis` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cindate` varchar(50) DEFAULT NULL,
  `coutdate` varchar(50) DEFAULT NULL,
  `member` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `address`, `city`, `dis`, `state`, `email`, `cindate`, `coutdate`, `member`) VALUES
(1, 'Again try', NULL, 'Dhaka', 'Chattogram', 'Rajshahi', 'seaim76@gmail.com', '7/24/23', '7/26/23', '10'),
(3, ' Seaim', NULL, 'Dhaka', 'Chattogram', 'Chattogram', 'seaim@gmail.com', '2023-07-24', '2023-07-24', '2'),
(6, 'Xyz', NULL, 'Dhaka', 'Dhaka', 'Dhaka', 'xyz@gmail.com', '2023-07-18', '2023-07-25', '5'),
(111, 'Tanzimul Haque Seaim', NULL, 'Dhaka', 'Dhaka', 'Chattogram', 'seaim76@gmail.com', '7/24/23', '', '2'),
(112, 'Arpon', NULL, 'Dhaka', 'Chattogram', 'Rajshahi', 'arpon@gmail.com', '2023-07-18', '2023-07-25', '6'),
(7789006, 'monir', NULL, 'Dhaka', 'Chattogram', 'Chattogram', 'monir@gmail.com', '2023-07-26', '2023-07-29', '6'),
(56879000, 'Khulna', NULL, 'Dhaka', 'Dhaka', 'Dhaka', 'khulna@gmail.com', '2023-07-25', '2023-07-26', '3');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `rno` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'unBook'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `rno`, `type`, `price`, `status`) VALUES
(3, '1', 'AC', 1500, 'unBook'),
(4, '2', 'Non-Ac', 1000, 'unBook'),
(5, '4', 'Non-Ac', 1200, 'unBook'),
(6, '3', 'AC', 2500, 'unBook'),
(7, '5', 'Non-Ac', 900, 'unBook'),
(8, '7', 'AC', 2566, 'unBook');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56879001;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
