-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2020 at 02:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisayofunds_dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tranz_tb`
--

CREATE TABLE `tranz_tb` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `tranzCode` varchar(50) NOT NULL,
  `created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tranz_tb`
--

INSERT INTO `tranz_tb` (`sn`, `name`, `email`, `mobile`, `price`, `tranzCode`, `created`) VALUES
(2, 'OtomewoOluwatobi@gmail.com', 'OtomewoOluwatobi@gmail.com', ' 449033280747', '1000', 'SAU1718543329574', '07 Wed, Oct 2020'),
(3, 'OtomewoOluwatobi@gmail.com', 'OtomewoOluwatobi@gmail.com', ' 449033280747', '5000', 'SAU1718363657276', '07 Wed, Oct 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tranz_tb`
--
ALTER TABLE `tranz_tb`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `tranzCode` (`tranzCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tranz_tb`
--
ALTER TABLE `tranz_tb`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
