-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 05:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalogue_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(3, 'Kurti'),
(4, 'Jeans'),
(5, 'Frok'),
(6, 'Legins');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `subcategory` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `frontImage_src` varchar(100) NOT NULL,
  `backImage_src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_id`, `company_name`, `category`, `subcategory`, `size`, `price`, `count`, `frontImage_src`, `backImage_src`) VALUES
(21, 'Green Pant', '45A', 'ABC', 'Kurti', 'long', '12', 250, 6, 'uploads/45A_frontImage.jpg', 'uploads/45A_backImage.jpg'),
(22, 'Blue Jeans', '240A', 'BCD', 'Jeans', 'medium', '18', 670, 8, 'uploads/240A_frontImage.jpg', 'uploads/240A_backImage.jpg'),
(23, 'Long legins', '32A', 'XYZ', 'Legins', 'short', '405', 780, 8, 'uploads/32A_frontImage.jpg', 'uploads/32A_backImage.jpg'),
(24, 'Helmen t-shirt', '76A', 'Nam Kora Company', 'Kurti', 'long', '408', 850, 4, 'uploads/76A_frontImage.jpg', 'uploads/76A_backImage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(20) NOT NULL,
  `size_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size_name`) VALUES
(18, 'S'),
(19, 'M'),
(20, 'L'),
(21, 'XL'),
(22, 'XXL'),
(23, 'XXXL'),
(24, 'XXXXL'),
(25, 'XXXXXL'),
(26, '0'),
(27, '12'),
(28, '14'),
(29, '16'),
(30, '16'),
(31, '18'),
(32, '20'),
(33, '22'),
(34, '24'),
(35, '26'),
(36, '28'),
(37, '30'),
(38, '32'),
(39, '34'),
(40, '36'),
(41, '38'),
(42, '40');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategory_name`) VALUES
(7, 'long'),
(8, 'short'),
(9, 'medium');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'P@ssw0rd'),
(2, 'user', 'User@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
