-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2023 at 09:54 AM
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
-- Database: `954246`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` int(6) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `email`, `phone`, `country`, `address`, `username`, `password`, `level`) VALUES
(15, 'Gem', 'PP', 'xexexen05@gmail.com', '0902144477', '', '18 7 RR', '', 0, 0),
(16, 'Bua', 'PP', 'bounacklie@gmail.com', '0902144477', '', 'LA 102 CCC', '24iwore', 222222, 1),
(17, 'Bua', 'PP', 'xexexen05@gmail.com', '0902144477', '', 'LA 102 CCC', 'usertest', 666666, 1),
(30, 'eiei', 'Homo', 'bounacklie@gmail.com', '0613512799', '', '18 ม.7', 'usertest', 444444, 1),
(65, 'owner', 'owner', 'owner@gmail.com', '0689754685', 'Thailand', 'xxx', 'owner', 3333, 3),
(66, 'admin', 'admin', 'admin@gmail.com', '0845789652', 'Thailand', 'xxx', 'admin', 2222, 2),
(76, 'TEST', 'TEST', '55@RR.COM', '5555555555', 'Netherlands', 'PP 55', 'TEST', 5555, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
