-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2024 at 09:31 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logo`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `id` varchar(10) NOT NULL COMMENT 'it will store id',
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contectNumber` int NOT NULL,
  `institute` varchar(10) NOT NULL,
  `timeStamp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `email`, `contectNumber`, `institute`, `timeStamp`) VALUES
('d23dce158', 'Shahsvat rajyaguru', 'rajyagurushashvat@gmail.com', 2147483647, 'DEPSTAR', '2024-02-21'),
('d23dce159', 'Shahsvat rajyaguru', 'rajyagurushashvat@gmail.com', 2147483647, 'DEPSTAR', '2024-02-21'),
('d23dce174', 'Shahsvat rajyaguru', 'rajyagurushashvat@gmail.com', 2147483647, 'DEPSTAR', '2024-02-21'),
('d23dce174', 'Shahsvat rajyaguru', 'rajyagurushashvat@gmail.com', 2147483647, 'DEPSTAR', '2024-02-21'),
('d23dce112', 'shashvat', 'rajyagurushashvat@gmail.com', 0, 'DEPSTAR', '2024-02-21'),
('d23dce112', 'shashvat', 'rajyagurushashvat@gmail.com', 0, 'DEPSTAR', '2024-02-21'),
('d23dce112', 'shasvat', 'rajyagurushashvat@gmail.com', 0, 'DEPSTAR', '2024-02-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
