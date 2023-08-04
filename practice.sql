-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 08:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `username`, `email`, `password`, `date_created`, `date_updated`) VALUES
(1, 'Dick', 'lomibao', 'lomibao123@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-08-02 21:25:38', '2023-08-02 21:25:38'),
(2, 'Dick', 'asda', 'dicksorianolomibao@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-08-02 21:31:42', '2023-08-02 21:31:42'),
(3, 'asda', 'asdad', 'aAsd@gmail.com', '7815696ecbf1c96e6894b779456d330e', '2023-08-02 21:34:51', '2023-08-02 21:34:51'),
(4, 'sadasda', 'da', 'asd@asd.com', '7815696ecbf1c96e6894b779456d330e', '2023-08-02 21:35:17', '2023-08-02 21:35:17'),
(5, 'asdas', 'DIck', 'asdadd@gmauk.com', '202cb962ac59075b964b07152d234b70', '2023-08-02 21:52:03', '2023-08-02 21:52:03'),
(6, 'asdad', 'dickdick', 'dickss@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '2023-08-04 14:17:00', '2023-08-04 14:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `user_id`, `code`, `date_created`, `date_updated`) VALUES
(5, 1, 'hznsmCKEmw', '2023-08-02 22:58:47', '2023-08-02 22:58:47'),
(7, 1, 'hA74euyCAV', '2023-08-02 22:58:48', '2023-08-02 22:58:48'),
(8, 1, 'TIUXnWWX3H', '2023-08-02 22:58:49', '2023-08-02 22:58:49'),
(9, 1, 'Z05O4R7TWf', '2023-08-02 22:58:50', '2023-08-02 22:58:50'),
(10, 1, 'cnkHIFbvPs', '2023-08-02 22:58:50', '2023-08-02 22:58:50'),
(17, 6, 'qF6kAQAOhW', '2023-08-04 14:17:13', '2023-08-04 14:17:13');

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
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
