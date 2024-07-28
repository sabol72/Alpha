-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 12:55 PM
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
-- Database: `login-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `privacy_policy` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `username`, `email`, `password`, `dob`, `phone`, `address`, `privacy_policy`, `created_at`) VALUES
(1, 'John', 'Doe', 'male', 'johndoe', 'johndoe@example.com', 'password1', '1990-01-01', '1234567890', '123 Main St, Anytown, USA', 1, '2024-07-28 09:16:48'),
(2, 'Jane', 'Smith', 'female', 'janesmith', 'janesmith@example.com', 'password2', '1992-02-02', '0987654321', '456 Elm St, Anytown, USA', 1, '2024-07-28 09:16:48'),
(3, 'Alex', 'Johnson', 'other', 'alexjohnson', 'alexjohnson@example.com', 'password3', '1985-03-03', '5678901234', '789 Oak St, Anytown, USA', 0, '2024-07-28 09:16:48'),
(4, 'Chris', 'Brown', 'male', 'chrisbrown', 'chrisbrown@example.com', 'password4', '1988-04-04', '2345678901', '101 Pine St, Anytown, USA', 1, '2024-07-28 09:16:48'),
(5, 'Pat', 'Taylor', 'female', 'pattaylor', 'pattaylor@example.com', 'password5', '1995-05-05', '3456789012', '202 Maple St, Anytown, USA', 0, '2024-07-28 09:16:48'),
(7, 'sabal', 'kc', 'male', 'sabal911', 'sabal@example.com', '$2y$10$SXnt.SBx8Jzm/jnMD92Eketev.MBBvYCQgxEs.zMq.KqpL9t.Vv/a', '1990-01-01', '1234567890', '123 Main St, Anytown, USA', 1, '2024-07-28 09:21:24'),
(8, 'Sabal', 'Khatri', 'male', 'Sabol_91', 'sabal72sc@gmail.com', '$2y$10$//QhIV302Vy/njmIOhpOnOW6L.VjczZ5rdp63WrcrBfgb6dMg5MNy', '2005-03-23', '+977 9846459592', 'PANAUTI-12, kavrepalanchowk', 1, '2024-07-28 10:25:26'),
(9, 'Sabal', 'Khatri', 'male', '112sabol', 'sabal@lastdoor.co', '$2y$10$5uA6A9K3tpmwMGUP21UyY.mvSpEfMWUNjYXLIlajtPfxNJFOeZlSS', '2024-07-31', '32165151321', 'asd', 1, '2024-07-28 10:32:25'),
(14, 'Sabal', 'Khatri', 'male', '112saboll', 'sabal@g.co', '$2y$10$XN1.G.jfHVy3RGt9EwK5VuSnnCPjFDQkRa1D8rVFoF5q4xnABBsAu', '2024-07-03', '32165151321', 'asd', 1, '2024-07-28 10:50:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
