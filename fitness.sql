-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2021 at 06:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(60) NOT NULL,
  `coach_id` int(13) NOT NULL,
  `name` varchar(200) NOT NULL,
  `level` int(13) NOT NULL,
  `description` varchar(200) NOT NULL,
  `class_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `coach_id`, `name`, `level`, `description`, `class_image`) VALUES
(1, 2, 'Zumba', 1, 'Zumba is a fitness program that combines Latin and international music with dance moves.', '---'),
(2, 2, 'Aerobic beginner', 1, 'Aerobics is a form of physical exercise that combines rhythmic aerobic exercise with stretching and strength training routines with the goal of improving all elements of fitness.', '---'),
(3, 2, 'cycling ', 3, 'Cycling is mainly an aerobic activity, which means that your heart, blood vessels and lungs all get a workout. ', '---');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(13) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `speciality` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `username`, `password`, `name`, `email`, `speciality`) VALUES
(2, 'c_W', '$2y$10$giP7kTE21/BwR8ap6CwZoehVqPax/1H.dEOlngqTlD4SKSYQmmEji', 'William', 'William@gmail.com', 'everything');

-- --------------------------------------------------------

--
-- Table structure for table `enrolment`
--

CREATE TABLE `enrolment` (
  `id` int(13) NOT NULL,
  `trainee_id` int(13) NOT NULL,
  `class_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrolment`
--

INSERT INTO `enrolment` (`id`, `trainee_id`, `class_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 1),
(5, 4, 2),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(13) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `username`, `password`, `name`, `email`) VALUES
(1, 'razan', '$2y$10$BQeY6bRusRYuLLlG1dKnyuHnmYJrfYNWyxWN4N5/w777bGCrYLZaO', 'Razan', 'razan@gmail.com'),
(2, 'Lama', '$2y$10$eCFoNLSqM/qqS0Xsq/HB9OejByx.mKYIiDTM.FgPFX0Hnfm7x8sty', 'Lama', 'lama@gmail.com'),
(3, 'yara', '$2y$10$aTUnjLj6wLq4g7m/EaPGPuQ8m.GRBdACWsBcCfoOZU8l.TRBmBBgC', 'Yara', 'yara@gmail.com'),
(4, 'shatha', '$2y$10$7Z9avihWGhQlgDbFBdhkeecAD1q0mZTuGc3xqtHm8TfJKHkugFabS', 'shatha', 'shatha@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coach_id` (`coach_id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainee_id` (`trainee_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`coach_id`) REFERENCES `coach` (`id`);

--
-- Constraints for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD CONSTRAINT `enrolment_ibfk_1` FOREIGN KEY (`trainee_id`) REFERENCES `trainee` (`id`),
  ADD CONSTRAINT `enrolment_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
