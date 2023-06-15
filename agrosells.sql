-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 10:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrosells`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`) VALUES
(6),
(19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(255) NOT NULL,
  `bname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `mno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `address` varbinary(500) NOT NULL,
  `product_name` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `quantity` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `bname`, `lname`, `mno`, `email`, `pin`, `address`, `product_name`, `quantity`, `total`, `created_at`) VALUES
(7, 'omkar', 'nalawade', '7878787878', 'mjagadale032@gmail.com', 413702, 0x626172616d617469, 'pomegranate', 5, 200, '2023-03-05 09:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `category` varchar(200) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `quantiti` int(100) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `uname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `productname`, `category`, `price`, `discount`, `quantiti`, `product_image`, `uname`) VALUES
(6, 'grape', 'fruit', 50, 45, 1, 'uploads/graps.png', '0'),
(15, 'Black grapes', 'fruit', 82, 80, 1, 'uploads/grape.png', '0'),
(19, 'pomegranate', 'fruit', 50, 40, 1, 'uploads/pomegranate.png', '0'),
(35, 'guavaa', 'fruit', 40, 30, 0, 'uploads/guavaa.png', 'onkar41'),
(38, 'bananaa', 'fruit', 45, 40, 0, 'uploads/bananaa.png', 'omii01');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(200) NOT NULL,
  `name` varchar(191) NOT NULL,
  `uname` varchar(191) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `repass` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `selected` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `uname`, `mno`, `email`, `pass`, `repass`, `address`, `selected`, `created_at`) VALUES
(21, 'Onkar', 'onkar41', '9132314141', 'onkarjagtap312@gmail.com', '4141', '4141', 'baramati', 'farme', '2023-03-05 09:15:43'),
(31, 'omii', 'omii01', '7878787878', 'mjagadale032@gmail.com', '7898', '7898', 'Indapur pune maharastra', 'buyer', '2023-03-15 17:27:59'),
(32, 'swapnil', 'swpnil31', '1234567891', 'swapni@gmail.com', '2020', '2020', 'Satara pune maharastra', 'buyer', '2023-03-15 17:47:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
