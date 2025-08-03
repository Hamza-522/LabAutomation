-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 10:31 AM
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
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `status`) VALUES
(2, 'Electric Motors', 'inactive'),
(3, 'Switch Gears', 'active'),
(4, 'Electrical Wiring', 'active'),
(5, 'Blub', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `subject`, `email`, `msg`) VALUES
(1, 'Hamza', 'Siddique', 'Product', 'hkmoviestudio@gmail.com', 'I hope this message finds you well. I recently came across your profile as a product tester for [Company Name], and I\'m interested in learning more about your experiences with their products.'),
(2, 'jack', 'Shift', 'Tester', 'jackshift152@gmail.com', '\"Hey there! We\'re eager to hear your thoughts on our latest products. Contact us to be part of our product testing team and help us shape the future of innovation!\"'),
(3, '222', '2222', 'issus', '22e@ds', 'adas'),
(4, 'a1121', '12121', 'dsad', 'adas@da', 'dasd'),
(5, 'a1121', '12121', 'dsad', 'adas@da', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(10) NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'approve',
  `pimg` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pdesc`, `status`, `pimg`, `cid`) VALUES
(1, 'Microphone', 'A wireless mic with Type-C  charger', '1', '22.png', 0),
(2, 'Charger', 'Portable C-type Charger', 'reject', 'j-removebg-preview.png', 0),
(3, 'Hamza', 'kdlfjkgj', 'approve', '', 0),
(4, 'Tester', 'wireless wire ', 'approve', 'freestocks-40k6ZqbsXuo-unsplash.jpg', 0),
(5, 'fddf', 'sfdsf', 'approve', '', 0),
(6, '212', 'asdasd', 'approve', 'F1RnR-qWIAAYnRW.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `num`, `img`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '0365479560', 'download.jfif', 'admin', 'admin'),
(2, 'Hamza', 'hkmoviestudio@gmail.com', '0319287290', 'image (1).png', '12345', 'user'),
(3, 'Saad', 'saadiqueen2134@gmail.com', '0319287290', '', 'hy52252', 'user'),
(4, 'Moiz', 'moizisrar542@gmail.com', '0325468634', '', '25525', 'user'),
(5, 'Tester', 'tester001@testing.com', '0347483647', 'download.jfif', 'tester1', 'tester'),
(6, 'ahrar', 'gavomi7084@rockdian.com', '032546646', '', 'ahrar1235', 'user'),
(7, 'hassan', 'hassan084@rockdian.com', '038554648', '', '52252', 'user'),
(8, 'Lal', 'lalmuhammad23@gmail.com', '03215468751', 'download.jfif', 'admin', 'admin'),
(9, 'Moiz', 'moiztester432@gmail.com', '03065516416', '', 'tester', 'tester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
