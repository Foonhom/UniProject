-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2023 at 09:52 AM
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
-- Table structure for table `order_d`
--

CREATE TABLE `order_d` (
  `order_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_qty` int(4) NOT NULL,
  `product_price` int(4) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_d`
--

INSERT INTO `order_d` (`order_id`, `user_id`, `product_name`, `product_qty`, `product_price`, `price`, `order_date`) VALUES
(26, 12, 'Khao Soi Tud', 2, 200, '400.00', '2023-03-07'),
(27, 12, 'Khao Lam', 2, 300, '600.00', '2023-03-07'),
(28, 12, 'Khao Soi Tud', 2, 200, '400.00', '2023-03-07'),
(31, 17, 'Khao Tann', 10, 350, '3500.00', '2023-03-08'),
(32, 17, 'Khao Soi Tad', 3, 200, '600.00', '2023-03-08'),
(38, 17, 'Khao Lam', 2, 300, '600.00', '2023-03-09'),
(67, 78, 'Sa Lee', 5, 340, '1700.00', '2023-03-12'),
(71, 79, 'Khao Tom Hor Hnok', 6, 300, '1800.00', '2023-03-13'),
(73, 65, 'Khao Tom Hor Hnok', 5, 300, '1500.00', '2023-03-13'),
(74, 65, 'Thong Muan', 9, 250, '2250.00', '2023-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_d`
--
ALTER TABLE `order_d`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_d`
--
ALTER TABLE `order_d`
  MODIFY `order_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
