-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 11:28 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawbiker`
--

-- --------------------------------------------------------

--
-- Table structure for table `brakes`
--

CREATE TABLE `brakes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brakes`
--

INSERT INTO `brakes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rubber', 'April 03, 2018 11:37:40am', 'April 03, 2018 11:37:40am'),
(2, 'Aluminium', 'April 03, 2018 11:37:56am', 'April 03, 2018 11:37:56am');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bicycles', 'April 02, 2018 05:50:36pm', 'April 02, 2018 05:50:36pm'),
(2, 'Accessories', 'April 02, 2018 05:56:45pm', 'April 02, 2018 05:56:45pm'),
(3, 'Parts', 'April 02, 2018 06:37:04pm', 'April 02, 2018 06:37:04pm'),
(4, 'Demo categ', 'May 02, 2018 11:18:21am', 'May 02, 2018 11:18:21am'),
(5, 'New Category', 'July 28, 2018 10:47:54am', 'July 28, 2018 10:47:54am');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `no_of_gears` int(11) NOT NULL,
  `brake_id` int(11) NOT NULL,
  `brake_name` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_name`, `category_id`, `subcategory_name`, `subcategory_id`, `product_id`, `name`, `price`, `img_name`, `no_of_gears`, `brake_id`, `brake_name`, `created_at`, `updated_at`) VALUES
(1, ' Bicycles ', 1, ' Mountain Bikes ', 3, ' BI-76525', 'Spiderman', '1234.45', '5b5c342a11edc2.94818485.jpeg', 4, 1, '  Rubber ', 'July 28, 2018 11:15:22am', 'July 28, 2018 11:15:22am');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `category_name`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, ' Bicycles ', 'BMX', 'April 02 , 2018 07:37:23pm', 'April 02 , 2018 07:37:23pm'),
(2, 1, ' Bicycles ', 'Racing Bikes', 'April 02 , 2018 07:37:37pm', 'April 02 , 2018 07:37:37pm'),
(3, 1, ' Bicycles ', 'Mountain Bikes', 'April 02 , 2018 07:37:47pm', 'April 02 , 2018 07:37:47pm'),
(4, 2, ' Accessories ', 'Gloves', 'April 02 , 2018 07:38:00pm', 'April 02 , 2018 07:38:00pm'),
(5, 2, ' Accessories ', 'Water Bottles', 'April 02 , 2018 07:38:18pm', 'April 02 , 2018 07:38:18pm'),
(6, 3, ' Parts ', 'Gears', 'April 02 , 2018 07:38:25pm', 'April 02 , 2018 07:38:25pm'),
(7, 3, ' Parts ', 'Tyres', 'April 02 , 2018 07:38:53pm', 'April 02 , 2018 07:38:53pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brakes`
--
ALTER TABLE `brakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brakes`
--
ALTER TABLE `brakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
