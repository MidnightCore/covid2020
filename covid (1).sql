-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2020 at 08:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `fname`, `lname`, `role`) VALUES
('admin', 'admin', 'palm', 'hngeng', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `save_med`
--

CREATE TABLE `save_med` (
  `id` int(10) NOT NULL,
  `need` text NOT NULL,
  `piece` int(11) NOT NULL,
  `place` text NOT NULL,
  `applicant` text NOT NULL,
  `contact` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `save_med`
--

INSERT INTO `save_med` (`id`, `need`, `piece`, `place`, `applicant`, `contact`, `status`) VALUES
(1, 'sd', 444, 'asfasf', 'asfa', 'asfasf', 'asfasf'),
(2, 'sd', 444, 'asfasf', 'asfa', 'asfasf', 'asfasf'),
(3, 'wefwef', 4, 'wef', 'sdg', 'sd', 'รอรับบริจาค'),
(4, 'wefwef', 4, 'wef', 'sdg', 'sd', 'รอรับบริจาค');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_med`
--
ALTER TABLE `save_med`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `save_med`
--
ALTER TABLE `save_med`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
