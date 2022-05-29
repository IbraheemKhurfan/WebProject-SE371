-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 11:27 PM
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
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`id`, `name`, `university`, `country`) VALUES
(1, 'Aafaque Khan', 'University of Toronto', 'Canada'),
(2, 'AbdulKarim Doufene', 'Massachusetts Institute of Technology', 'USA'),
(3, 'Abdulrahman Abu Elkhail', 'Michigan University at Dearborn', 'USA'),
(4, 'Adel Ammar', 'Prince Sultan University', 'Saudi Arabia'),
(5, 'Ahmad Taher Azar', 'Prince Sultan University', 'Saudi Arabia'),
(6, 'Ahmed Reda Mahlous', 'Prince Sultan University', 'Saudi Arabia'),
(7, 'Alam Noor', 'Polytechnic of Porto', 'Portugal'),
(8, 'Alexander Gelbukh', 'Instituto PolitÃ©cnico Nacional', 'Mexico'),
(9, 'Ali Hassani', 'Michigan University at Dearborn', 'USA'),
(10, 'Ali Javed', 'Taxila University', 'Pakistan'),
(11, 'Alireza Mohammadi', 'Michigan University at Dearborn', 'USA'),
(12, 'Amjad Rehman', 'Prince Sultan University', 'Saudi Arabia'),
(13, 'Anis Koubaa', 'Prince Sultan University', 'Saudi Arabia'),
(14, 'Atif Shah', 'Oulu University', 'Finland'),
(15, 'Aun Irtaza', 'Taxila University', 'Pakistan'),
(16, 'Azzedine Zerguine', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(17, 'Basit Qureshi', 'Prince Sultan University', 'Saudi Arabia'),
(18, 'Bilel Benjdira', 'Prince Sultan University', 'Saudi Arabia'),
(19, 'Fahad Alruwaili', 'Shaqra University', 'Saudi Arabia'),
(20, 'Faisal Nawab', 'University of California at Irvine', 'USA'),
(21, 'Fatos Xhafa', 'Technical University of Catalonia', 'Spain'),
(22, 'Fikret Gurgen', 'BoGhazi Univesrity', 'Turkey'),
(23, 'Francesco Folino', 'ICAR-CNR', 'Italy'),
(24, 'Galal Bin Makhashen', 'KFUPM', 'Saudi Arabia'),
(25, 'Hafiz Malik', 'University of Michigan-Dearborn', 'USA'),
(26, 'Hamdi Aljamimi', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(27, 'Hammad Dilpazir', 'Michigan University at Dearborn', 'USA'),
(28, 'Hamzah Luqman', 'KFUPM', 'Saudi Arabia'),
(29, 'Hashim Ali', 'Michigan University at Dearborn', 'USA'),
(30, 'Hassan Abbas', 'King Saud University', 'Saudi Arabia'),
(31, 'Imad Rida', 'Compiegne University', 'France'),
(32, 'Imane Boudellioua', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(33, 'Ingrid Fischer', 'University of Konstanz', 'Germany'),
(34, 'Iqbal H. Sarker', 'International AIQT Foundation', 'Switzerland'),
(35, 'Irfan Ahmad', 'KFUPM', 'Saudi Arabia'),
(36, 'Issam H. Laradji', 'ServiceNow Inc.', 'Canada'),
(37, 'Junaid Farooq', 'Michigan University at Dearborn', 'USA'),
(38, 'Khaled Alotaibi', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(39, 'Khalid Mahmood', 'Oaklan University', 'USA'),
(40, 'Lahouari Ghouti', 'Prince Sultan University', 'Saudi Arabia'),
(41, 'Liyakathunisa Syed', 'Taibah University', 'Saudi Arabia'),
(42, 'Louai Al-Awami', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(43, 'Majed Aljefri', 'LearningBranch Inc.', 'Canada'),
(44, 'Mashaan Alshammari', 'University of Hail', 'Saudi Arabia'),
(45, 'Moataz Ahmed', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(46, 'Moayad Alnammi', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(47, 'Mohamed Al-Affendi', 'Prince Sultan University', 'Saudi Arabia'),
(48, 'Mohamed Alkanhal', 'Prince Sultan University', 'Saudi Arabia'),
(49, 'Mohamed Deriche', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(50, 'Mohamed Elbadrashiny', 'Aixplain Inc.', 'USA'),
(51, 'Mohamed-Chaker Larabi', 'UniversitÃ© de Poitiers', 'France'),
(52, 'Mohamed-Rafik Bouguelia', 'Halmstad University', 'Sweden.'),
(53, 'Muazzam Siddiqui', 'King Abdulaziz University', 'Saudi Arabia'),
(54, 'Muhamad Felemban', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(55, 'Muhammad Imam', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(56, 'Muna Al-Razgan', 'King Saud University', 'Saudi Arabia'),
(57, 'Nada Lachtar', 'Michigan University at Dearborn', 'USA'),
(58, 'Panos Kalnis', 'King Abdullah University of Science and Technology', 'Saudi Arabia'),
(59, 'Paul Watta', 'Michigan University at Dearborn', 'USA'),
(60, 'Pedro Henriques Abreu', 'FCTUC-DEI/CISUC', 'Portugal'),
(61, 'Rabeah Alzaidy', 'King Fahd University of Petroleum and Minerals', 'Saudi Arabia'),
(62, 'Raed Seetan', 'Slippery Rock University of Pennsylvania', 'USA'),
(63, 'Rafi Ud Daula Refat', 'Michigan University at Dearborn', 'USA'),
(64, 'Raghavendar Raghu Changalvala', 'Michigan University at Dearborn', 'USA'),
(65, 'Rami S. Alkhawaldeh', 'University of Jordan', 'Jordan'),
(66, 'Rehman Khan', 'Prince Sultan University', 'Saudi Arabia'),
(67, 'Samir Rawashdeh', 'Michigan University at Dearborn', 'USA'),
(68, 'Sarab Almuhaideb', 'King Saud University', 'Saudi Arabia'),
(69, 'Sergio A Velastin', 'Universidad Carlos III de Madrid', 'Spain'),
(70, 'Tanzila Saba', 'Prince Sultan University', 'Saudi Arabia'),
(71, 'Turgay Celik', 'University of the Witwatersand', 'South Africa'),
(72, 'Usman Naseem', 'Sydney University', 'Australia'),
(73, 'Uthman Baroudi', 'KFUPM', 'Saudi Arabia'),
(74, 'Wadii Boulila', 'Prince Sultan University', 'Saudi Arabia'),
(75, 'Yacine Rebahi', 'Fraunhofer Fokus', 'Germany'),
(76, 'Yousef Elarian', 'Cambrian College', 'Canada'),
(77, 'Zahid Khan', 'Prince Sultan University', 'Saudi Arabia'),
(78, 'Zaid El-Shair', 'Michigan University at Dearborn', 'USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
