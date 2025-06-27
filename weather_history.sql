-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 27, 2025 at 01:42 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weather_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `weather_history`
--

CREATE TABLE `weather_history` (
  `id` int NOT NULL,
  `timestamp` datetime NOT NULL,
  `current_temp` float NOT NULL,
  `feels_like` float NOT NULL,
  `weather_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `weather_history`
--

INSERT INTO `weather_history` (`id`, `timestamp`, `current_temp`, `feels_like`, `weather_description`) VALUES
(1, '2025-06-26 14:42:45', 19.95, 20.59, 'heavy intensity rain'),
(2, '2025-06-26 14:45:18', 19.95, 20.59, 'moderate rain'),
(3, '2025-06-27 10:51:29', 18.75, 19.19, 'overcast clouds'),
(4, '2025-06-27 11:03:58', 18.75, 19.19, 'overcast clouds'),
(5, '2025-06-27 11:10:00', 18.75, 19.19, 'overcast clouds'),
(6, '2025-06-27 11:15:00', 18.75, 19.19, 'overcast clouds'),
(7, '2025-06-27 12:26:42', 18.62, 19.02, 'overcast clouds'),
(8, '2025-06-27 12:30:01', 18.55, 18.92, 'overcast clouds'),
(9, '2025-06-27 12:35:01', 18.55, 18.92, 'overcast clouds'),
(10, '2025-06-27 12:40:01', 18.55, 18.92, 'overcast clouds'),
(11, '2025-06-27 13:15:01', 18.55, 18.92, 'overcast clouds'),
(12, '2025-06-27 14:30:04', 18.32, 18.56, 'overcast clouds'),
(13, '2025-06-27 14:35:01', 18.32, 18.56, 'overcast clouds'),
(14, '2025-06-27 14:40:00', 18.32, 18.56, 'overcast clouds'),
(15, '2025-06-27 14:45:00', 18.32, 18.56, 'overcast clouds'),
(16, '2025-06-27 14:50:01', 18.32, 18.56, 'overcast clouds'),
(17, '2025-06-27 14:55:01', 18.32, 18.56, 'overcast clouds'),
(18, '2025-06-27 15:00:00', 18.32, 18.56, 'overcast clouds'),
(19, '2025-06-27 15:05:00', 18.32, 18.56, 'overcast clouds'),
(20, '2025-06-27 15:10:01', 18.32, 18.56, 'overcast clouds'),
(21, '2025-06-27 15:15:00', 18.32, 18.56, 'overcast clouds'),
(22, '2025-06-27 15:20:00', 18.32, 18.56, 'overcast clouds'),
(23, '2025-06-27 15:25:00', 18.32, 18.56, 'overcast clouds'),
(24, '2025-06-27 15:30:01', 18.51, 18.74, 'overcast clouds'),
(25, '2025-06-27 15:35:01', 18.51, 18.74, 'overcast clouds'),
(26, '2025-06-27 15:40:01', 18.51, 18.74, 'overcast clouds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weather_history`
--
ALTER TABLE `weather_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weather_history`
--
ALTER TABLE `weather_history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
