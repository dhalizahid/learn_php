-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 03:38 AM
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
-- Table structure for table `incames_catagory`
--

CREATE TABLE `incames_catagory` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incames_catagory`
--

INSERT INTO `incames_catagory` (`id`, `name`) VALUES
(1, 'Cpik indestrial toor'),
(2, 'Cpik indestrial toor'),
(3, 'Cpik indestrial toor'),
(4, 'Cpik indestrial toor'),
(5, 'Cpik indestrial toor'),
(6, 'nagor solution'),
(7, 'sdc'),
(8, 'sdcasds'),
(9, 'sedwer'),
(10, 'clsoe'),
(11, 'Cpik indestrial toor'),
(12, 'nagor solution'),
(13, 'Cpik indestrial toor'),
(14, 'Cpik indestrial toor'),
(15, 'Cpik indestrial toor'),
(16, 'nagor solution'),
(17, 'Cpik indestrial toor'),
(18, 'Cpik indestrial toor'),
(19, 'Cpik indestrial toor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incames_catagory`
--
ALTER TABLE `incames_catagory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incames_catagory`
--
ALTER TABLE `incames_catagory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
