-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 01:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdocrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `Name`, `email`, `phone`) VALUES
(1, 'samsi Zaman Khushbu', 'khushbu@gmail.com', '8987566'),
(3, 'Shazzad Hossain Shawon', 'shawon@gmail.com', '0174338435'),
(4, 'Zohirul', 'zohirul@gmail.com', '0243483548'),
(5, 'Ashaduzzaman', 'ashad@gmail.com', '0123834737'),
(6, 'shomick', 'shomick@gmail.com', '0243483548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
