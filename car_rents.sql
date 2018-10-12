-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 12:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_rents`
--

CREATE TABLE `car_rents` (
  `id` int(20) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `rent` int(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `renter_by` varchar(50) NOT NULL,
  `rent_to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_rents`
--

INSERT INTO `car_rents` (`id`, `car_name`, `rent`, `quantity`, `renter_by`, `rent_to`) VALUES
(1, 'Toyota', 5000, 1, 'Mr. Hashid Hameed', 'Nitya Mahata'),
(3, 'Honda', 7000, 2, 'XYZ Traders', 'Mr. Ram'),
(5, 'Suzuki', 10000, 2, 'XYZ Traders', 'Md Amir'),
(9, 'Nissan', 15000, 2, 'XYZ Traders', 'Md Amir'),
(10, 'Nissan', 15000, 2, 'XYZ Traders', 'Md Amir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_rents`
--
ALTER TABLE `car_rents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_rents`
--
ALTER TABLE `car_rents`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
