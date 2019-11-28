-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2019 at 03:18 PM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `email`, `text`, `status`) VALUES
(1, 'Ольга', 'olga@keypage.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada pellentesque quam, vel ornare nisi gravida ac. Nunc risus dolor. ', 1),
(2, 'Виктор', 'viktor@keypage.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nunc neque, eleifend vitae imperdiet vel, posuere eu quam. Vivamus at varius justo, in.', 1),
(3, 'Наталья', 'nataly@keypage.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus justo, aliquam a vestibulum sed, mattis in velit. Duis laoreet ante vitae elit venenatis, ac varius mi mattis. Suspendisse fringilla. ', NULL),
(4, 'Александр', 'alex@keypage.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper vulputate lorem, quis ultrices nibh tincidunt quis. Nullam. ', NULL),
(5, 'Андрей', 'andy@keypage.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi metus mi, maximus nec est ac, condimentum auctor est. Praesent metus sem, feugiat quis. ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
