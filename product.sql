-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2023 at 09:53 AM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_ID` int(2) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `describ` varchar(255) NOT NULL,
  `product_price` int(4) NOT NULL,
  `product_pic` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_ID`, `product_name`, `describ`, `product_price`, `product_pic`, `district`, `province`) VALUES
(1, 'Khao Soi Tad', 'Caramel Chinese Pastry', 200, 'pic/khaosoitad.png', 'Pang mooh', 'Mae Hong Son Province'),
(2, 'Khao Lam', 'Glutinous rice roasted in bamboo joints', 300, 'pic/khaolam.png', 'Natakwan', 'Phayao Province'),
(3, 'Khao Tann', 'Rice Cracker', 350, 'pic/khaotan.png', 'San Pong', 'Chiang Mai Province'),
(4, 'Khao Tom Hor Hnok', 'steamed sticky rice with banana, served with sugar and grated coconutsteamed sticky rice with banana, served with sugar and grated coconut', 300, 'pic/khaotom.png', 'Bang khoon sai', 'Sukhothai Province'),
(8, 'Khanom mo kaeng', 'egg custard', 250, 'pic/MorKhaoMorGang.jpg', 'Wang Hin', 'Tak Province'),
(10, 'Thong Muan', 'crispy crepe rool ', 250, 'pic/thongmuan.jpg', 'Wiang nhue', 'LamPang Province'),
(11, 'Sa Lee', 'Salee Cake', 340, 'pic/salee.jpg', 'Tha Ra Hud', 'Phrae Province'),
(12, 'Kha Nom Tian', 'Stuffed Dough Pyramid ', 250, 'pic/kanomtiean.png', 'KokePhra', 'Phitsanulok Province'),
(13, 'Dok Jok', 'deep-fried thin wafer made with a batter consisting of tapioca flour, wheat flour, egg, and sesame seeds.', 300, 'pic/dokjok.jpg', 'Seeda', 'Phayao Province'),
(15, 'Kha Nom Krok', 'Thai coconut pancakes topped with spring onions, corn kernels, taro or plain  ', 300, 'pic/kanomkrok.png', 'ฺBuaChet', 'Uthai Thani Province'),
(16, 'Kanom Leum Kleun', 'dessert made from mung bean flour or slime', 200, 'pic/LuemGluen.jpg', 'Leeled', 'Kamphaeng Phet Province');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
