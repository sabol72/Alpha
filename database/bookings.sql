-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 11:05 AM
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
-- Database: `bbcmaintainance`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `sub_service` varchar(255) NOT NULL,
  `hours` int(11) NOT NULL,
  `workers` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `card_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `location`, `service_type`, `sub_service`, `hours`, `workers`, `booking_date`, `booking_time`, `customer_name`, `customer_email`, `customer_phone`, `payment_method`, `card_number`) VALUES
(1, 'Dubai', 'AC Service', 'Maintenance', 3, 3, '2024-06-06', '12:56:00', '0', 'yamapradeep846@gmail.com', 'adsfasdf', 'cod', NULL),
(2, 'Dubai', 'AC Service', 'Maintenance', 3, 3, '2024-06-06', '12:56:00', '0', 'yamapradeep846@gmail.com', 'adsfasdf', 'cod', NULL),
(3, 'Abu Dhabi', 'AC Service', 'Installation', 3, 3, '2024-06-06', '12:56:00', '0', 'yamapradeep846@gmail.com', 'adsfasdf', 'debit_card', '123456789'),
(4, 'Abu Dhabi', 'AC Service', 'Installation', 3, 3, '2024-06-06', '12:56:00', '0', 'yamapradeep846@gmail.com', 'adsfasdf', 'debit_card', '123456789'),
(5, 'Abu Dhabi', 'AC Service', 'Installation', 3, 3, '2024-06-06', '12:56:00', '0', 'yamapradeep846@gmail.com', 'adsfasdf', 'debit_card', '123456789'),
(7, 'Abu Dhabi', 'Cleaning', 'Mattress Cleaning', 3, 3, '2024-06-15', '13:59:00', '0', 'abiralshahthaquree@gmail.com', 'adsfasdf', 'cod', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
