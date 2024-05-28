-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 01:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cat-j`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(50) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `date`, `message`) VALUES
(209, '24', '21', '2023-10-12 11:08:57', 'HI JOSH ITS ME TONY'),
(210, '21', '24', '2023-10-12 11:09:54', 'Hey josh here'),
(211, '21', '24', '2023-10-12 11:10:26', 'have you heard from kathy'),
(212, '24', '21', '2023-10-12 11:11:51', 'no i will text her now'),
(213, '21', '24', '2023-10-12 11:11:59', 'aiit'),
(214, '24', '21', '2023-10-12 11:12:10', 'ttyl'),
(215, '24', '23', '2023-10-12 11:12:29', 'yo xup kath'),
(216, '23', '24', '2023-10-12 11:12:57', 'hmmm who you calling kat'),
(217, '22', '25', '2023-10-12 11:13:48', 'text me when you are back');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `online_status` varchar(255) NOT NULL,
  `profile_dirr` varchar(255) NOT NULL,
  `mode` varchar(50) NOT NULL DEFAULT 'dark'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fname`, `email`, `password`, `online_status`, `profile_dirr`, `mode`) VALUES
(21, 'Joshua lee', 'oghenekevwejoshualee@gmail.com', '$2y$10$9wnPDSAbG3jEzgZuVp68nuMKXA0sToBD/Y3rFlL/7Bz3uJAYqL4ty', '1', 'asset/uploads/Joshua lee6527cc6117d4e.jpg', 'dark'),
(22, 'George martin', 'georgemartx@gmail.com', '$2y$10$ZXmX/L9sJN6znjSD7dJl3.1gr.6RDrWW2nqVpV5LnD0TEIUELhaUW', '1', 'asset/uploads/George martin6527cdab2f94d.jpg', 'dark'),
(23, 'Kathy gregg', 'kathy@gmail.com', '$2y$10$rMWPd4jyfM/xGWLKwZBMmOQeYDGRwzhDfCdF6k6.zNb7tTz/wQ83C', '1', 'asset/uploads/Kathy gregg6527d019a17bb.jpg', 'dark'),
(24, 'Tony fricher', 'tony@gmail.com', '$2y$10$XzRLha/zqmW7tjeeb1M7JucoEq1WFA5y7OIKG39Zo0r.VXJ5e84I2', '1', 'asset/uploads/Tony fricher6527d142809da.jpeg', 'dark'),
(25, 'Happy joseph', 'happy@gmail.com', '$2y$10$.kL.YmFLyaGQv01Fghd3WuRCNqTMoDkgZ/sUdCUaIYdbvSPMtRs9S', '0', 'asset/uploads/Happy joseph6527d207700dd.jpeg', 'dark'),
(26, 'chidi ball', 'chidi@gmail.com', '$2y$10$3/PM.N0nexquQna6vG5YSOAwdze5J9sGsPXTQ/f3Puumoca.nk1iO', '0', 'asset/uploads/chidi ball6527d2f3c277c.jpg', 'dark');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
