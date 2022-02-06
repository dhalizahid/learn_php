-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 03:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parsonal_wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `incames`
--

CREATE TABLE `incames` (
  `id` bigint(20) NOT NULL,
  `catagory_id` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `incame_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incames`
--

INSERT INTO `incames` (`id`, `catagory_id`, `amount`, `description`, `incame_date`) VALUES
(1, 'lunch', 549191, 'dupurar kuadua', '0061-06-05'),
(2, 'lunch', 15591, 'dupurar kuadu', '0061-05-15'),
(3, 'lunch', 15591, 'dupurar kuadu', '0061-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incames`
--
ALTER TABLE `incames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incames`
--
ALTER TABLE `incames`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
