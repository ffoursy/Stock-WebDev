-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 01:38 PM
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
-- Table structure for table `stock_market`
--

CREATE TABLE `stock_market` (
  `market_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `market_index` float NOT NULL,
  `high_index` float NOT NULL,
  `low_idex` float NOT NULL,
  `market_volume` int(11) NOT NULL,
  `market_value` float NOT NULL,
  `change_value` float NOT NULL,
  `percent_change` float NOT NULL,
  `market_increase` int(11) NOT NULL,
  `market_equal` int(11) NOT NULL,
  `market_decrease` int(11) NOT NULL,
  `status` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock_market`
--

INSERT INTO `stock_market` (`market_type`, `timestamp`, `market_index`, `high_index`, `low_idex`, `market_volume`, `market_value`, `change_value`, `percent_change`, `market_increase`, `market_equal`, `market_decrease`, `status`) VALUES
('mai', '2018-05-23 03:00:00.000000', 471.95, 474.31, 470.74, 412492, 684.39, -1.4, -0.3, 8473126, 1820371, 4785944, 'Closed'),
('SET', '2018-05-23 03:00:00.000000', 1753.6, 1761.61, 1747.75, 24691257, 64209.5, -7.11, -0.4, 8473126, 1820371, 4785944, 'Closed'),
('SET100', '2018-05-23 03:00:00.000000', 2566.61, 2581.07, 2557.9, 3118133, 53848.3, -16.11, -0.62, 8473126, 1820371, 4785944, 'Closed'),
('SET50', '2018-05-23 03:00:00.000000', 1156.18, 1162.95, 1152.06, 1482407, 45532.6, -8.86, -0.76, 8473126, 1820371, 4785944, 'Closed'),
('SETHD', '2018-05-23 03:00:00.000000', 1306.72, 1314.55, 1300.17, 892954, 24774.2, -13.12, -0.99, 8473126, 1820371, 4785944, 'Closed'),
('sSET', '2018-05-23 03:00:00.000000', 954.41, 954.41, 942.26, 2098966, 1157.5, 10.9, 1.16, 8473126, 1820371, 4785944, 'Closed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock_market`
--
ALTER TABLE `stock_market`
  ADD PRIMARY KEY (`market_type`,`timestamp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
