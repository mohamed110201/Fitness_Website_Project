-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 11:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `brosplitcode`
--

CREATE TABLE `brosplitcode` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pplcode`
--

CREATE TABLE `pplcode` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uplocode`
--

CREATE TABLE `uplocode` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `password`, `phone`, `gmail`, `date`, `gender`, `age`) VALUES
(30309020, 'Mohamed', '$2y$10$XCbTP7KJa0z1vS7v6dLZwuNkBhQsnNEgm/Kt8mRy5aBODh/F6aNxS', 1100103274, 'aahmedanwar1234@gmail.com', '2023-05-22', 'male', 0),
(30309040, 'Mohamed', '$2y$10$Fox89YQr3Hm7Ad3hnHEQwu/HQioSJS8bRaarISFm.XQf8UgQWEqUO', 1100103285, 'mohamedanwarrr123@gmail.com', NULL, NULL, NULL),
(30309060, 'omar', '$2y$10$NTYSQrgMwHMjm1THfbQP1.jstuC9eAyGgaHYsELYKSW3G0f0F/O9u', 1100106132, 'moahamedanwar082@gmail.com', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brosplitcode`
--
ALTER TABLE `brosplitcode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_fff` (`userid`);

--
-- Indexes for table `pplcode`
--
ALTER TABLE `pplcode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_f` (`userid`);

--
-- Indexes for table `uplocode`
--
ALTER TABLE `uplocode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_ff` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brosplitcode`
--
ALTER TABLE `brosplitcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pplcode`
--
ALTER TABLE `pplcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `uplocode`
--
ALTER TABLE `uplocode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brosplitcode`
--
ALTER TABLE `brosplitcode`
  ADD CONSTRAINT `c_fff` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `pplcode`
--
ALTER TABLE `pplcode`
  ADD CONSTRAINT `c_f` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `uplocode`
--
ALTER TABLE `uplocode`
  ADD CONSTRAINT `c_ff` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
