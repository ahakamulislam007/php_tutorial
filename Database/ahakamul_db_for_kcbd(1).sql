-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2024 at 05:51 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahakamul_db_for_kcbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cus_info_kcbd`
--

DROP TABLE IF EXISTS `cus_info_kcbd`;
CREATE TABLE IF NOT EXISTS `cus_info_kcbd` (
  `invoice_no` int NOT NULL AUTO_INCREMENT,
  `invoice_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` int NOT NULL,
  `cus_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`invoice_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cus_info_kcbd`
--

INSERT INTO `cus_info_kcbd` (`invoice_no`, `invoice_date`, `customer_name`, `phone_no`, `cus_email`, `address`) VALUES
(1, '2024-08-08 09:10:46', 'Ahakamul Islam', 1615919710, 'ahakamul@gmail.com', 'Mirpur, Dhaka, Bangladesh.'),
(2, '2024-08-08 09:33:20', 'ttr', 14, 'hhg@rr', 'Mirpur, Dhaka, Bangladesh.');

-- --------------------------------------------------------

--
-- Table structure for table `item_info_kcbd`
--

DROP TABLE IF EXISTS `item_info_kcbd`;
CREATE TABLE IF NOT EXISTS `item_info_kcbd` (
  `sl_no` int NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_qty` int NOT NULL DEFAULT '0',
  `item_price` int NOT NULL DEFAULT '0',
  `item_total_price` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test', '$2y$10$zhDujuj1ZEbqsJ8iwTmS7.BZpZcWP6pIoVQ.Fq1R6Ek20rTtJgqmi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
