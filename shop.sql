-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 07:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'javed', 'javed@hotmail.com', '$2y$10$rTC7iDtonlLuOP67LqSsAeU3tjnSbQy5aFyPAb/d/Kt7PKDVafUvO'),
(2, 'akbar', 'akbar@gmail.com', '$2y$10$lJiqpVBPD2OmAEKXOciAfegjpVWnsylVPy3yZFPk4vdIPJsZD5Y0m'),
(3, 'kamran', 'kamran@gmail.com', '$2y$10$iPQboD4dbdowKcE00P79OeVNptGPFQ7UuDvSuVUcGUrr2ZaQ8eire'),
(4, 'aziz', 'aziz@gmail.com', '$2y$10$Um8wM/CVqv4K.OXTyQ5DPOdx421Ps1ImYcoXQ8BLHLa/32.OKqX/G'),
(5, 'karim', 'karim@gmail.com', '$2y$10$qnKggRWE4WYgZueF9p4vROfec6e/9yM3cWJy6nAr3EonES8XsYqoy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
