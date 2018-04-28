-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2018 at 04:09 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment11`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'james', '$2y$10$PnLoK7tKVuLCgnPuN4TCGOImz6IUbOSObrHtu8mt8LgvSnn6ZF21C', '2018-04-11 10:58:10'),
(2, 'mark', '$2y$10$biNUX./NW3ZNZjLB5/RMCO9YyVYWZEM/lyFFtnw.TkLDcPJZuG0ia', '2018-04-11 10:58:53'),
(3, 'Peter', '$2y$10$YiIAum7rRylUEIp3ylHeGu95g4X3ryVuUHOHhPRyaeKlMv3H3O/JO', '2018-04-11 10:59:14'),
(4, 'Smith', '$2y$10$h4.zHuPQnhlXWXwJOkTZheKqcPbgPVsHUC9Pdp3qnhHfMU6HsNXx2', '2018-04-11 11:08:09'),
(5, 'test', '$2y$10$Qg7GAt00V6u2nhO5a9gsROdofSfp6JWL5ERxKWk0TIAJs6x8dBdeq', '2018-04-11 11:10:07'),
(6, 'dfdf', '$2y$10$YYHjRSb2dUyHl7Vz1xC9GuvJfGdNgq1gy5qGc1aknsR1z89FrcfLK', '2018-04-25 10:31:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
