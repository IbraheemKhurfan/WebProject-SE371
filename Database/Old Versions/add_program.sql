-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 11:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdma`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_program`
--

CREATE TABLE `add_program` (
  `id` int(11) NOT NULL,
  `Program_Name` varchar(50) NOT NULL,
  `Program_file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_program`
--

INSERT INTO `add_program` (`id`, `Program_Name`, `Program_file`) VALUES
(3, 'ProgramFile.pdf', 0x433a2f78616d70702f6874646f63732f57656250726f6a6563742d53453337312f50726f6772616d5f46696c65732f50726f6772616d46696c652e706466),
(4, 'ProgramFile.pdf', 0x433a2f78616d70702f6874646f63732f57656250726f6a6563742d53453337312f50726f6772616d5f46696c65732f50726f6772616d46696c652e706466),
(5, 'ProgramFile.pdf', 0x433a2f78616d70702f6874646f63732f57656250726f6a6563742d53453337312f50726f6772616d5f46696c65732f50726f6772616d46696c652e706466);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_program`
--
ALTER TABLE `add_program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_program`
--
ALTER TABLE `add_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
