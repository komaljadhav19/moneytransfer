-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 04:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customerview`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sid` int(4) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sid`, `sender`, `receiver`, `amount`) VALUES
(1, 'Komal Jadhav', 'Shruti yeram', 500),
(2, 'yash sakapal', 'komal jadhav', 2000),
(3, 'mehak chudhary', 'nikita dhavda', 1000),
(4, 'nikita dhavda', 'tanvi pawar', 50),
(5, 'komal jadhav', 'nikita dhavda', 200),
(6, 'komal jadhav', 'mehak chudhary', 500),
(7, 'komal jadhav', 'pranav jadhav', 200),
(8, 'pranav jadhav', 'komal jadhav', 200),
(9, 'snehal Jadhav', 'komal jadhav', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'komal jadhav', 'komal@gmail.com', 8300),
(2, 'mehak chudhary', 'mehak@gmail.com', 3500),
(3, 'admin executive', 'kajuadhav3715@gmail.com', 5000),
(4, 'pranav jadhav', 'kajaljadhav1997@gmail.com', 2000),
(5, 'tanvi pawar', 'tanvipawar@gmail.com', 4050),
(6, 'nikita dhavda', 'nikita@gmail.com', 7150),
(7, 'saadhavi Rasam', 'saadhavi@gmail.com', 4000),
(8, 'yash sakapal', 'sakapalyash@gmail.com', 4000),
(9, 'snehal Jadhav', 'snehal@gmail.com', 5000),
(10, 'Panju shinde', 'panju45@gmail.com', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `sid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
