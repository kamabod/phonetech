-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 09:55 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `phonetech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` varchar(15) NOT NULL,
  `storage` varchar(10) NOT NULL,
  `colour` varchar(10) NOT NULL,
  `display` varchar(25) NOT NULL,
  `camera` varchar(30) NOT NULL,
  `processor` varchar(20) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `storage`, `colour`, `display`, `camera`, `processor`, `image`) VALUES
(1, 'Apple iphone 11 Pro', '1100', '256 GB', 'Silver', '5.8 inch ', '12 MP triple camera ', 'Apple A13 Bionic', 'apple11Silver.png'),
(2, 'Apple iphone 11', '800', '64 GB', 'Green', '6.1  inch ', '12 MP dual camera  ', 'Apple A13 Bionic', 'Iphone11green.png'),
(3, 'Samsung Galaxy S10 Plus', '700', '128 GB ', 'Black', '6.4 inch', '12 MP + 10 MP cameras', 'Snapdragon 855', 'galaxy.png'),
(4, 'LG G8 ThinQ', '650', '128 GB', 'Black', '6.1 inch ', '16 MP + 12 MP cameras', 'Snapdragon 855', 'lg.png'),
(5, 'Apple iphone Xr', '650', '64 GB', 'Black', '6.1 inch ', '12 MP + 7 MP cameras', 'Apple A12 Bionic', 'appleXR.png'),
(6, 'Apple iphone 11', '800', '64 GB', 'Purple', '6.1 inch ', '12 MP dual camera', 'Apple A13 Bionic', 'apple11purple.png'),
(7, 'One Plus 7 Pro', '750', '256GB', 'Blue', '6.67 inch ', '48 MP triple camera', 'Snapdragon 855', 'oneplus7pro.png'),
(8, 'One Plus 7T', '600', '128 GB', 'Blue', '6.55 inch ', '48 MP triple camera', 'Snapdragon 855 ', 'oneplus7.png');

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
  MODIFY `product_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
