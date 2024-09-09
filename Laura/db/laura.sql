-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2023 at 09:12 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laura`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `products` varchar(255) DEFAULT NULL,
  `paid_amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_code`, `qty`) VALUES
(1, 'bracelet', '200', 'bracelet.png', 'p1000', NULL),
(2, 'scating', '500', 'scating.jpg', 'p1001', NULL),
(3, 'men-fotware', '250', 'men-fotware.jpg', 'p1002', NULL),
(4, 'sunglass', '100', 'sunglass.png', 'p1003', NULL),
(5, 'shirt', '400', 'shirt.jpg', 'p1004', NULL),
(6, 'women-fotware', '700', 'women-fotware.jpg', 'p1005', NULL),
(7, 'gh', '12', '648390598217e_bmw_x6_m_competition_2020_5k-1280x720-1-750x430.jpg', '12', 12),
(8, 'hgjgh', '4245', '6483907226e72_pexels-craig-adderley-1563356.jpg', '45', 4532);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `dob` varchar(11) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `address`, `city`, `phone`, `dob`, `profile_pic`, `reg_date`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, 'user@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'user1', '1234', NULL, 'user1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'a', 'a', 'a', 'a@a.com', NULL, NULL, NULL, NULL, NULL, '2023-06-10 00:24:10'),
(4, 'b', 'b', 'b', 'b@email.com', NULL, NULL, NULL, NULL, NULL, '2023-06-10 02:10:58'),
(5, 'hweranmadhuka@gmail.com', '1234', 'a', 'hweranmadhuka@gmail.com', NULL, NULL, NULL, NULL, NULL, '2023-06-10 02:18:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
