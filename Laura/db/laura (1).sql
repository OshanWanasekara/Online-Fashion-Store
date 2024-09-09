-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 12:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Adidas', '...', '2023-06-11 00:27:09', NULL),
(9, 'nike', '...', '2023-06-11 00:27:20', NULL),
(10, 'Zara', '...', '2023-06-11 00:27:49', NULL),
(11, 'Moose', '....', '2023-06-11 00:28:06', NULL),
(12, 'Levis', '..', '2023-06-11 02:45:39', NULL),
(13, 'Frugy', '...', '2023-06-11 02:46:40', NULL),
(14, 'Puma', '...', '2023-06-11 02:46:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Women', '....', '2023-06-11 00:23:10', NULL),
(6, 'Men', '....', '2023-06-11 00:22:53', NULL),
(8, 'Kids', '....', '2023-06-11 00:23:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  `qty` int(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_code`, `qty`, `brand`, `category`, `created_at`, `updated_at`) VALUES
(14, 'Davidoff Solid Colour Slim Fit Shirt', ' 2,000', '6484c83f4dd83_s100.jpeg', 's100', 100, 'Moose', 'Men', '2023-06-11 00:30:15', NULL),
(16, 'Mango Womens Jaca Dress', '2400', '6484eb88f3656_pn200.jpeg', 'w100', 10, 'Zara', 'Women', '2023-06-11 00:48:14', '2023-06-11 03:00:49'),
(17, 'OVS Boys Short Sleeve T-Shirt', '3990', '6484cebe01971_k100.jpeg', 'k100', 100, 'Moose', 'Kids', '2023-06-11 00:57:58', NULL),
(18, 'Mango Womens Jane Dress', '5000', '6484e4b7456a3_D300.jpeg', 'D200', 100, 'Zara', 'Women', '2023-06-11 02:31:43', NULL),
(19, 'Closet White Long sleeve Top', '1000', '6484e5617e503_P300.jpeg', 'P300', 50, 'Zara', 'Women', '2023-06-11 02:34:33', NULL),
(20, 'Levis 512 Slim Fit Blue Mens Jean', '8000', '6484e61e4b766_O800.jpeg', 'O800', 200, 'Moose', 'Men', '2023-06-11 02:37:42', NULL),
(21, 'LeviS Mens Trim Shirts', '4000', '6484e8db17c33_v400.jpeg', 'v400', 600, 'Levis', 'Men', '2023-06-11 02:49:23', NULL),
(22, 'Odel Girls Charcoal Marl Printed Dress', '2900', '6484e9e4b248e_K500.jpeg', 'K500', 75, 'Puma', 'Kids', '2023-06-11 02:53:48', NULL),
(23, ' Mothercare Boys Novelty Koala Cap', '800', '6484eb0dafcc4_K400.jpeg', 'K400', 45, 'Frugy', 'Kids', '2023-06-11 02:58:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `user_type` varchar(5) DEFAULT 'user',
  `reg_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `address`, `city`, `phone`, `user_type`, `reg_date`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, 'admin', '2023-06-11 01:30:03'),
(2, 'oshan', '1234', 'Oshan', 'oshan@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 01:31:53'),
(3, 'vikum', '5678', 'bhashitha', 'vikum@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:38:42'),
(23, 'Savith', '9101', 'Olitha', 'Savith@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:42:14'),
(25, 'Danisha', '1111', 'vishvani', 'rodrigo@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:44:48'),
(26, 'pulni', '2222', 'wijebandara', 'percy@gmail.com', NULL, NULL, NULL, 'user', '2023-06-11 03:45:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
