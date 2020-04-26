-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 04:53 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(25) NOT NULL,
  `client_id` int(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_id` int(25) NOT NULL,
  `product_id` int(25) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` float NOT NULL,
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
(1, 'Apple iphone 11 Pro', 1100, '256 GB', 'Silver', '5,8 inch Super Retina dis', '12 MP triple camera + 12 MP ca', 'Apple A13 Bionic', ''),
(2, 'Apple iphone 11', 800, '64 GB', 'Green', '6,1 inch Liquid Retina di', '12 MP camera + 12 MP camera + ', 'Apple A13 Bionic', ''),
(3, 'Samsung Galaxy S10 Plus', 700, '128 GB ', 'Black', '6,4 inch WQHD-display', '12 MP camera + 10 MP camera(fr', '2,7 GHz Octa-core pr', ''),
(4, 'LG G8x ThinQ', 650, '128 GB', 'Black', '6,39 inch OLED-display', '32 MP camera(front) + 12 MP + ', 'Octa-core processor', ''),
(5, 'Apple iphone Xr', 650, '64 GB', 'Black', '6,1 inch Liquid Retina di', '12 MP camera + 7 MP camera(fro', 'Apple A12 Bionic', ''),
(6, 'Apple iphone 11', 800, '128 GB', 'Purple', '6.1 inch Liquid Retina di', '12MP camera + 12 MP camera + 1', 'Apple A13 Bionic', ''),
(7, 'One Plus 8 Pro', 900, '128 GB', 'Green', '120 Hz Fluid Display', '48 MP Quad camera', 'Qualcomm® Snapdragon', ''),
(8, 'One Plus 7T', 600, '128 GB', 'Blue', '90 Hz Fluid Display', '48 MP triple Camera', 'Snapdragon 855 Plus', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_USER` (`client_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `FK_PRODUCT` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`client_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `FK_ORDER` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
