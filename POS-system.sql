-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 04:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `POS-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `IVID` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_subType` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `unit_price` float NOT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`IVID`, `product_name`, `product_type`, `product_subType`, `brand`, `in_stock`, `description`, `cost`, `unit_price`, `vendor_id`) VALUES
(1, 'Dairy Pure', 'Dairy', 'Milk', 'Fat Free', 10, 'Half and Half', 6.99, 8.99, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_ticket`
--

CREATE TABLE `orders_ticket` (
  `OTID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  `tax` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `cash` float DEFAULT NULL,
  `credit` float DEFAULT NULL,
  `status` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_system`
--

CREATE TABLE `ticket_system` (
  `ticket_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `tax` float NOT NULL,
  `discount` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `cash` float DEFAULT NULL,
  `credit` float DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VID` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `phone_number` double NOT NULL,
  `fax_number` double NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`IVID`);

--
-- Indexes for table `orders_ticket`
--
ALTER TABLE `orders_ticket`
  ADD PRIMARY KEY (`OTID`);

--
-- Indexes for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `IVID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_ticket`
--
ALTER TABLE `orders_ticket`
  MODIFY `OTID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_system`
--
ALTER TABLE `ticket_system`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
