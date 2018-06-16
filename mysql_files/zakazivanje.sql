-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2018 at 09:02 PM
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
-- Database: `servis`
--

-- --------------------------------------------------------

--
-- Table structure for table `zakazivanje`
--

CREATE TABLE `zakazivanje` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zakazivanje`
--

INSERT INTO `zakazivanje` (`id`, `date`, `name`, `email`, `phone`, `job`) VALUES
(1, '06/26/2018 11:47 AM', 'nenad', 'zmajnex@yahoo.com', '+381637731959', 'Pregled'),
(5, '06/30/2018 7:09 AM', 'Goran', 'mika@gmail.com', '06478898989', 'Zamena'),
(6, '06/17/2018 8:35 PM', 'admin', 'admin@yahoo.com', '06478898989', 'Popravka'),
(7, '06/06/2018 9:56 PM', 'nenad', 'mika@gmail.com', '+381637731959', 'Pregled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zakazivanje`
--
ALTER TABLE `zakazivanje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zakazivanje`
--
ALTER TABLE `zakazivanje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
