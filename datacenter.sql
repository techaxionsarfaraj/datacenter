-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 11:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datacenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `orderType` enum('daily','sometime') DEFAULT NULL,
  `status` enum('active','deactive','closed') DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `mobile`, `email`, `address`, `orderType`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sarfaraj', 'sipai', '9016726614', 'sarfaraj@gmail.com', 'viramgam', '', 'active', '2024-08-03 13:14:38', '2024-08-03 14:32:43'),
(2, 'abc', 'xyz', '9898098980', 'abc@gmail.com', 'viramgam', '', 'closed', '2024-08-03 13:15:39', '2024-08-03 14:32:31'),
(3, 'ramesh test', 'patel test', '0000000000', 'sarfaraj.sipai@techaxion.com', 'AHmedabad', NULL, NULL, '2024-08-08 15:35:18', '2024-08-08 15:35:18'),
(4, 'rakehs', 'rako', '98789789798', 'rakho@gmail.com', 'asdfasdf', NULL, NULL, '2024-08-08 15:39:12', '2024-08-08 15:39:12'),
(7, 'test', '', '000000001', 'sarfaraj.test@techaxion.com', 'AHmedabad', NULL, NULL, '2024-08-08 15:40:00', '2024-08-08 15:40:00'),
(8, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL, '2024-08-08 15:42:02', '2024-08-08 15:42:02'),
(9, '111', '111', '111', '111', '111', NULL, NULL, '2024-08-08 15:42:12', '2024-08-08 15:42:12'),
(10, '222', '222', '222', '222', '222', NULL, 'active', '2024-08-08 15:43:06', '2024-08-08 15:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_no` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `login_status` tinyint(1) NOT NULL DEFAULT 0,
  `last_login_time` datetime NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email_address`, `mobile_no`, `status`, `login_status`, `last_login_time`, `created_date`, `updated_date`) VALUES
(1, 'sarfaraj sipai', 'sarfaraj', '$2y$10$K3wkoeDORSOGA7kVxY43beHHBW4Jv1Dsvt5pSsvrDJPiUEn0P.fFW', 'sarfaraj@gmail.com', 0, 1, 1, '2024-12-02 05:27:17', '2024-07-06 05:53:17', '2024-12-02 05:27:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
