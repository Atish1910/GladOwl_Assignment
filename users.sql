-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 07:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_name`
--

CREATE TABLE `college_name` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_name`
--

INSERT INTO `college_name` (`id`, `c_name`) VALUES
(9, 'Sinhgad Institute of Technology'),
(10, 'Wadia'),
(11, 'AISSMS'),
(13, 'Morden '),
(14, 'MIT'),
(15, 'Garware college');

-- --------------------------------------------------------

--
-- Table structure for table `course_name`
--

CREATE TABLE `course_name` (
  `id` int(11) NOT NULL,
  `c_course` varchar(255) DEFAULT NULL,
  `c_college` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_name`
--

INSERT INTO `course_name` (`id`, `c_course`, `c_college`) VALUES
(11, '', 'select College'),
(12, '', 'select College'),
(13, '', 'select College'),
(14, '', 'select College'),
(15, '', 'select College'),
(16, 'B-COM', '9'),
(17, 'M-COM', '9'),
(18, 'Engineering IT', '9'),
(19, 'Law', '10'),
(20, 'MBA++', '10'),
(21, 'MCA', '10'),
(22, 'Hotel Management', '11'),
(23, 'Diploma', '11'),
(24, 'BBA', 'Wadia'),
(25, 'MBA', 'Wadia'),
(26, 'Engineering in Aeronoticals', 'Wadia'),
(27, 'Medical ', 'Morden '),
(28, 'MBA', 'Sinhgad Institute of Technology'),
(29, 'MCA', 'Sinhgad Institute of Technology'),
(30, 'B-COM', 'Garware college'),
(31, 'Diploma', 'MIT'),
(32, 'Medial', 'MIT'),
(33, 'Engineering', 'MIT'),
(34, 'B-COM', 'AISSMS'),
(35, 'M-COM', 'AISSMS'),
(36, 'MBA', 'AISSMS'),
(37, 'MCA', 'AISSMS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` int(255) DEFAULT NULL,
  `c_college` varchar(255) DEFAULT NULL,
  `c_course` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `city`, `c_college`, `c_course`) VALUES
(21, 'akshay', 'ak007@gmail.com', 'MIT', 0, 'B-TECH', '1234567890'),
(22, 'karri', 'karri@gmail.com', 'MMCOE', 0, 'M-TECH', '08888428371'),
(23, 'karri', 'karri@gmail.com', 'MMCOE', NULL, 'M-TECH', '08888428371'),
(24, 'karri', 'atishkamble398@gmail.com', 'Cusrow', NULL, 'B-TECH', '08888428371'),
(25, 'test 1', 'atishkamble398@gmail.com', 'Cusrow-Wadia', NULL, 'Law', '08888428371'),
(26, 'test 1', 'atishkamble398@gmail.com', '08888428371', NULL, 'Cusrow-Wadia', 'Law'),
(34, 'Ashish Kamble', 'atishkamble398@gmail.com', '08888428371', NULL, 'Wadia', 'Wadia'),
(35, 'Ashish Kamble', 'atishkamble', '428371', NULL, 'Wadia', 'Engineering in Aeronoticals'),
(36, 'Anushka', 'ak@gmailc.com', '1212121212', NULL, 'Morden ', 'Medical '),
(37, 'Ashish Kamble', 'atishkamble39', '08888428371', NULL, 'Wadia', 'Engineering in Aeronoticals'),
(38, 'Ashish Kamble', '12112', '08888428371111111', NULL, 'Wadia', 'MBA'),
(39, 'Ashish Kamble', 'atishkamble398', '08888428371', NULL, 'Wadia', 'MBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_name`
--
ALTER TABLE `college_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_name`
--
ALTER TABLE `course_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_name`
--
ALTER TABLE `college_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `course_name`
--
ALTER TABLE `course_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
