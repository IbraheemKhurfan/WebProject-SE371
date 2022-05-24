-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:41 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phonenum` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `Is_Admin` tinyint(1) NOT NULL,
  `registration` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phonenum`, `email`, `password`, `Is_Admin`, `registration`) VALUES
(1, 'Ibrahim Khurfan', 505740978, 'ibraheemkhurfan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(2, 'Fouad ', 123456789, '218110075@psu.edu.sa', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0),
(3, 'Ibrahim Kh', 123, 'g@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0),
(8, 'Khaled Nour', 123456, 'khaled@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0),
(9, 'Fahed', 123, 'ss@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0),
(10, 'Sara Al Otibe', 5556, 'sara@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0),
(11, 'Mohammed Skaik', 123, '218110540@psu.edu.sa', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0),
(12, 'Fouad Majed', 966534678, '123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
