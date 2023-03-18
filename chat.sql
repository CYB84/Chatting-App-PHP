-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 06:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `outgoing_msg_id`, `incoming_msg_id`, `msg`) VALUES
(28, 1088055216, 1088055216, 'sda'),
(29, 1088055216, 1088055216, 'heee'),
(30, 294786314, 1088055216, 'heelo'),
(31, 294786314, 1088055216, 'hi'),
(32, 294786314, 1088055216, 'tata'),
(33, 1088055216, 294786314, 'dsad'),
(34, 294786314, 1088055216, 'tata'),
(35, 294786314, 1088055216, 'sa'),
(36, 1088055216, 294786314, 'bye'),
(37, 1088055216, 294786314, 'tat'),
(38, 1088055216, 294786314, 'tata'),
(39, 1088055216, 753386824, 'bye bye'),
(40, 1088055216, 294786314, 'sadasd'),
(41, 1088055216, 294786314, 'sadasddasd'),
(42, 1088055216, 294786314, 'sadasd'),
(43, 294786314, 753386824, 'hello'),
(44, 1088055216, 153274932, 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(9, 1088055216, 'raj', 'nandi', 'raj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1678774572RajNandi-CertifiedNetworkSecurityPractitioner(CNSP)_page-0001.jpg', 'Active now'),
(10, 753386824, 'raj', 'ddd', 'raaj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1678774956RajNandi-CertifiedNetworkSecurityPractitioner(CNSP)_page-0001.jpg', 'Offline Now'),
(11, 294786314, 'rja', 'nandi', 'nandi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1678804699img.jpg', 'Active now'),
(12, 153274932, 'rahul ', 'dey', 'dey1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1679035273IPv4CIDRChart_2015.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
