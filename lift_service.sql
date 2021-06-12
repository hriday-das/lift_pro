-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 04:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lift_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `contract_form`
--

CREATE TABLE `contract_form` (
  `form_id` int(255) NOT NULL,
  `name` varchar(600) NOT NULL,
  `address` varchar(600) NOT NULL,
  `state` varchar(600) NOT NULL,
  `pin` varchar(600) NOT NULL,
  `service_type` varchar(600) NOT NULL,
  `service_charge` varchar(600) NOT NULL,
  `lift_cap` varchar(600) NOT NULL,
  `serving_from` varchar(600) NOT NULL,
  `serving_to` varchar(600) NOT NULL,
  `date` date NOT NULL,
  `payment_type` varchar(600) NOT NULL,
  `agreement_from` varchar(600) NOT NULL,
  `agreement_to` varchar(600) NOT NULL,
  `building` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_form`
--

INSERT INTO `contract_form` (`form_id`, `name`, `address`, `state`, `pin`, `service_type`, `service_charge`, `lift_cap`, `serving_from`, `serving_to`, `date`, `payment_type`, `agreement_from`, `agreement_to`, `building`) VALUES
(198, 'Hriday Das', 'Jiaganj, Murshidabad', 'West Bengal', '742113', 'Standerd', '55', '6 Passenger', 'Ground Floor', '2nd Floor', '2021-06-08', 'yearly', '2021-03', '2021-11', '88'),
(199, 'Hriday Das', 'Jiaganj, Murshidabad', 'West Bengal', '742113', 'Standerd', '55', '4 Passenger', '1st Floor', '3rd Floor', '2021-06-08', 'yearly', '2021-06', '2021-11', 'tf4'),
(200, 'Hriday Das', 'Jiaganj, Murshidabad', 'West Bengal', '742113', 'Basic', '55', '4 Passenger', 'Ground Floor', '2nd Floor', '2021-06-08', 'half-yearly', '2021-06', '2021-11', '86'),
(201, 'Hriday Das', 'Jiaganj, Murshidabad', 'West Bengal', '742113', 'Basic', '55', '4 Passenger', '3rd Floor', '2nd Floor', '2021-06-09', 'yearly', '2021-06', '2021-11', 'tf4'),
(202, 'Hriday Das', 'Jiaganj, Murshidabad', 'West Bengal', '742113', 'Basic', '55', '4 Passenger', 'Ground Floor', 'Ground Floor', '2021-06-12', 'yearly', '2021-06', '2021-07', 'tf4');

-- --------------------------------------------------------

--
-- Table structure for table `lift_information`
--

CREATE TABLE `lift_information` (
  `id` int(11) NOT NULL,
  `machine_type` varchar(255) NOT NULL,
  `m_model_no` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(255) NOT NULL,
  `contract_price` varchar(600) NOT NULL,
  `contract_timeline` varchar(600) NOT NULL,
  `mobile` varchar(600) NOT NULL,
  `email` varchar(600) NOT NULL,
  `py_date` date NOT NULL,
  `proposal_no` varchar(600) NOT NULL,
  `invoice_no` varchar(600) NOT NULL,
  `fullname` varchar(600) NOT NULL,
  `address` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `service_id` int(255) NOT NULL,
  `service_type` varchar(390) NOT NULL,
  `service_price` varchar(500) NOT NULL,
  `service_ext` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`service_id`, `service_type`, `service_price`, `service_ext`) VALUES
(1, 'Basic', '6000', ''),
(3, 'Standerd', '28000', ''),
(4, 'Comprehensive', '17200', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_info`
--

CREATE TABLE `service_info` (
  `service_info_id` int(255) NOT NULL,
  `maintain_type` varchar(600) NOT NULL,
  `lift_no` varchar(600) NOT NULL,
  `serving_from` varchar(600) NOT NULL,
  `serving_to` varchar(600) NOT NULL,
  `proposal_no` varchar(600) NOT NULL,
  `contract_no` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `user_name`, `phone`, `psw`) VALUES
('abc', 'abc@abc', '1234', '81dc9bdb52d04dc20036dbd8313ed055'),
('Hriday Das', 'dashriday833@gmail.com', '8372019062', '3ddb9e38d539091ad5cb53f9ea62fc55'),
('suman', 'suman@abc', '123456', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contract_form`
--
ALTER TABLE `contract_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `lift_information`
--
ALTER TABLE `lift_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_info`
--
ALTER TABLE `service_info`
  ADD PRIMARY KEY (`service_info_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contract_form`
--
ALTER TABLE `contract_form`
  MODIFY `form_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `lift_information`
--
ALTER TABLE `lift_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_info`
--
ALTER TABLE `service_info`
  MODIFY `service_info_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
