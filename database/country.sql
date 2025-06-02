-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2023 at 09:51 AM
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
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(2, 'Cambodia'),
(3, 'South Korea'),
(6, 'China'),
(7, 'Thailand'),
(8, 'Myanmar'),
(9, 'Philippines'),
(10, 'Malaysia'),
(11, 'Laos'),
(12, 'Vietnam'),
(13, 'United Arab Emirates'),
(14, 'Singapore'),
(15, 'India'),
(16, 'Indonesia'),
(17, 'New Zealand'),
(18, 'Papua New Guinea'),
(19, 'Australia'),
(20, 'Greece'),
(21, 'Croatia'),
(22, 'Denmark'),
(23, 'Norway'),
(24, 'Netherlands'),
(25, 'Belgium'),
(26, 'Portugal'),
(27, 'Poland'),
(28, 'France'),
(29, 'Finland'),
(30, 'Switzerland'),
(31, 'United Kingdom'),
(32, 'Canada'),
(33, 'United States of America'),
(34, 'Mexico'),
(35, 'Bolivia'),
(36, 'Argentina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
