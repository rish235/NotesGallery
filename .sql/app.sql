-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 10:32 AM
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
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `notes` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`sno`, `username`, `title`, `notes`, `date`) VALUES
(1, '', 'hello world', 'my first notes', '2021-02-04'),
(2, '', 'hw', 'first notes\r\n', '2021-02-04'),
(3, '', 'second program', 'my notes', '2021-02-04'),
(4, '', 'ndck', 'dcvbdfhb', '2021-02-04'),
(5, 'rythm', 'title', 'notes', '2021-02-22'),
(6, 'shinjo', 'rock and roll ', 'rock yeah\r\n', '26-05-24 10:10:26'),
(7, 'Sachin', 'God is One', 'India is a Democratic,Secular Country\r\n', '30-05-24 10:19:29'),
(8, 'Sachin', 'Veggies', 'Bring Tomatoes,Cuccumber,Onion and Potatoes', '30-05-24 10:26:02'),
(9, 'Devendra', 'CN Assignment', 'Network and Transport Layer', '30-05-24 10:30:10'),
(10, 'Devendra', 'CD Test', 'Parsers LR LALR', '30-05-24 10:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `password`, `phone`) VALUES
(1, 'rerv', 'rbhandari2203@gmail.com', '14253789', 2147483647),
(2, 'Levi', 'levvivi2@gmail.com', '9876542', 2147483647),
(3, 'Champak', 'chammpak@yahoo.com', 'champakkl', 42516738),
(4, 'shinjo', 'shinjo@gmail.com', 'shinshinshinjo', 245315987),
(5, 'Sachin', 'sachinss@gmail.com', 'SachinSachin', 2147483647),
(6, 'Sachin', 'sachinss@gmail.com', 'SachinSachin', 2147483647),
(7, 'Sachin', 'sachinss@gmail.com', 'SachinSachin', 2147483647),
(8, 'Sachin', 'sachinss@gmail.com', 'SachinSachin', 2147483647),
(9, 'Krishna', 'kk@gmail.com', '2451639', 2147483647),
(10, 'Garv', 'garv@gmail.com', 'garv4321', 2147483647),
(11, 'Grazia', 'grazingres@gmail.com', '32451', 434261773),
(12, 'Grazia', 'grazingres@gmail.com', '4321', 434261773),
(14, 'Faizal', 'khanfaizal@gmail.com', '675849', 434261723),
(15, 'Devendra', 'Devendradev@gmail.com', 'Believe@become1', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
