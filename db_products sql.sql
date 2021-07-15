-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 08:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` varchar(32) NOT NULL,
  `category` varchar(128) NOT NULL,
  `model` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `category`, `model`) VALUES
(12, 'Laptop', '76767', 'Laptop1', 'dell1'),
(13, 'Mobile', '67777', 'Mobile', 'Mp677'),
(14, 'Tv', '78005', 'Tv', 'Mi'),
(11, 'Desktop', '79999', 'Desktop', 'DE222'),
(15, 'Mobile', '5000', 'Readmi Mobile', 'XEF'),
(16, 'Mobile', '8000', 'Samsung', 'AWW'),
(17, 'Tv', '566666', 'Samsungtv', 'SW'),
(18, 'Mobile', '8000', 'Oppo', 'QWW'),
(19, 'Desktop', '800000', 'samsungds', 'QW De'),
(20, 'Ac2', '988882', 'AC112', 'miac2'),
(22, 'Mobile', '7000', 'Ms', 'Midual'),
(23, 'Mobile Mi', '99898', 'dual', 'mui88'),
(24, 'Tv', '8000', 'Tvmm', 'Mi1'),
(25, 'Mobiles', '98888', 'REDMI Mobiles', 'REDMI 9i '),
(26, 'Mobile', '87777', 'realme Mobiles', 'realme C21'),
(27, 'Mobile', '1225', 'Readmi Mobile', 'realme C21'),
(28, 'Mobile', '9000', 'MOTOROLA mobile', 'MOTOROLA G10 Power');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
