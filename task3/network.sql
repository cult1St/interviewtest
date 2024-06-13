-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 01:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interviewtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `net_id` int(11) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `mobile_network` varchar(100) NOT NULL,
  `message` mediumtext NOT NULL,
  `ref_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`net_id`, `phone_number`, `mobile_network`, `message`, `ref_code`) VALUES
(1, '09078177518', 'Glo', 'Hello world', 'jkhvy8jiefvhyrijvy'),
(2, '09078177518', 'Glo', 'Hello world', 'jkhvy8jiefvhyrijvy'),
(3, '09078177518', 'Glo', 'Hello world', 'jkhvy8jiefvhyrijvy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`net_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `net_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
