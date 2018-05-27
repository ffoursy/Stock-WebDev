-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2018 at 08:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `order_number` int(10) NOT NULL,
  `time_stamp` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `matched_volume` int(10) NOT NULL,
  `cancelled_volume` int(10) NOT NULL DEFAULT '0',
  `matched_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`order_number`, `time_stamp`, `matched_volume`, `cancelled_volume`, `matched_price`) VALUES
(1, '2018-05-03 13:03:30', 200, 0, 500),
(1, '2018-05-03 13:33:30', 500, 0, 500),
(1, '2018-05-26 04:49:53am', 0, 300, 0),
(2, '2018-05-03 13:12:30', 1500, 1000, 450),
(2, '2018-05-03 13:13:30', 1500, 100, 450),
(2, '2018-05-25 10:07:30pm', 0, 1000, 0),
(2, '2018-05-26 04:54:04am', 0, 900, 0),
(3, '2018-02-03 11:03:30', 0, 0, 200),
(3, '2018-02-03 13:03:30', 20, 0, 200),
(3, '2018-05-04 13:03:30', 300, 0, 200),
(3, '2018-05-26 04:45:48am', 0, 3675, 0),
(4, '2018-05-03 13:13:30', 200, 0, 450),
(4, '2018-05-25 10:42:00pm', 0, 0, 0),
(4, '2018-05-26 03:57:38am', 0, 475, 0),
(5, '2018-05-26 03:52:54am', 0, 1000, 0),
(5, '2018-05-26 10:47:30pm', 0, 1000, 0),
(6, '2018-05-26 03:48:07am', 0, 0, 0),
(6, '2018-05-26 10:45:52pm', 0, 10000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_number`,`time_stamp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `fk_ordernum_his_and_order` FOREIGN KEY (`order_number`) REFERENCES `stock_order` (`order_number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
