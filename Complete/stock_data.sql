-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 12:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teststock`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock_data`
--

CREATE TABLE `stock_data` (
  `stock_symbol` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `company_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bid_price` float NOT NULL,
  `bid_volume` int(11) NOT NULL,
  `offer_price` float NOT NULL,
  `offer_volume` int(11) NOT NULL,
  `last_price` float NOT NULL,
  `change_value` float NOT NULL,
  `percent_change` float NOT NULL,
  `lastest_close_price` float NOT NULL,
  `ceiling_price` float NOT NULL,
  `flooring_price` float NOT NULL,
  `high_price` float NOT NULL,
  `low_price` float NOT NULL,
  `total_volume` int(11) NOT NULL,
  `total_value` float NOT NULL,
  `market_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock_data`
--

INSERT INTO `stock_data` (`stock_symbol`, `timestamp`, `company_name`, `bid_price`, `bid_volume`, `offer_price`, `offer_volume`, `last_price`, `change_value`, `percent_change`, `lastest_close_price`, `ceiling_price`, `flooring_price`, `high_price`, `low_price`, `total_volume`, `total_value`, `market_type`) VALUES
('BANPU', '2018-05-23 03:00:00.000000', 'BANPU Company', 21.4, 2758400, 21.5, 2049400, 21.4, 0.1, 0.47, 21.3, 27.5, 15, 21.6, 21.2, 59412056, 1275160, 'SET'),
('BCPG', '0000-00-00 00:00:00.000000', 'BCPG Company', 20.1, 391800, 20.2, 563800, 20.1, 0.4, 2.03, 19.7, 25.5, 13.8, 20.3, 19.7, 19863884, 397794, 'SET'),
('CK', '2018-05-23 03:00:00.000000', 'CK Company', 26, 742300, 26.25, 1382400, 26, 0.75, 2.97, 25.25, 32.75, 17.7, 26.5, 25.5, 22838356, 593288, 'SET'),
('EA', '2018-05-23 03:00:00.000000', 'EA Company', 38.75, 378100, 39, 3170400, 38.75, 1, 2.65, 37.75, 49, 26.5, 39, 37.5, 37371474, 1436740, 'SET'),
('KTB', '2018-05-23 03:00:00.000000', 'KTB Company', 17.6, 539900, 17.7, 5767700, 17.6, -0.1, -0.56, 17.7, 23, 12.4, 17.9, 17.5, 45633065, 806234, 'SET'),
('PTT', '2018-05-23 03:00:00.000000', 'PTT Company', 53.5, 1703900, 53.75, 217900, 53.5, -1.75, -3.17, 55.25, 71.75, 38.75, 54.25, 52.75, 277604324, 14853400, 'SET'),
('PTTEP', '2018-05-23 03:00:00.000000', 'PTTEP Company', 144.5, 50700, 145, 140500, 144.5, -5, -3.34, 149.5, 194, 105, 148.5, 142.5, 22703491, 3299950, 'SET'),
('SUPER', '2018-05-23 03:00:00.000000', 'SUPER Energy Cooperation', 1.29, 1256400, 1.3, 67995300, 1.29, 0.06, 4.88, 1.23, 1.59, 0.87, 1.3, 1.24, 713377383, 903969, 'SET'),
('TRUE', '2018-05-23 03:00:00.000000', 'TRUE Cooperation', 7.15, 3697100, 7.2, 5095900, 7.2, 0.1, 1.41, 7.1, 9.2, 4.98, 7.25, 7, 103784579, 740252, 'SET'),
('WHA', '2018-05-23 03:00:00.000000', 'WHA Cooperation', 4.38, 42700, 4.4, 23113500, 4.4, 0.1, 2.33, 4.3, 5.55, 3.02, 4.4, 4.28, 220678199, 960587, 'SET');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock_data`
--
ALTER TABLE `stock_data`
  ADD PRIMARY KEY (`stock_symbol`,`timestamp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
