-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 11:35 AM
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
-- Database: `valhalla`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `date_created`) VALUES
(1, 'sabeer', 'faisal', 'sabeerfaisal', 'sabeer@gmail.com', '12345678', '2023-11-21'),
(2, 'src', 'sabeer', 'src', 'dd@gmail.com', '12345678', '2023-11-23'),
(3, 'abc', 'src', 'sabeer', 'sa@gmail.com', '12345678', '2023-11-23'),
(4, 'sabeer', 'faisal', 'srcsabeer', 'src@gmail.com', '12345678', '2023-11-23'),
(5, 'sabeer', 'faisal', 'srcsabeer1', 'sa@fmail.com', '12345678', '2023-11-23'),
(6, 'sabeer', 'faisal', 'src1', 'sr@gmail.com', '12345678', '2023-11-26'),
(7, 'Sabeer', 'faisal', 'hjhj', 'hj@gmail.ciom', 'qwertyuio', '2023-11-26'),
(8, 'sabeer', 'faisal', 'sabeerfaisal123', 'sabeerfaisal123@gmail.com', '12345678', '2023-11-26'),
(9, 'Sabeer', 'Faisal', 'src123', 'src123@gmail.com', '12345678', '2023-11-26'),
(10, 'sabeer', 'faisal', 'src12', 'src12@gmail.com', '12345678', '2023-12-02'),
(11, 'yuu', 'yuu', 'uyu', 'yu@gmail.com', '12345678', '2023-12-02'),
(12, 'hy', 'jhj', '12', '12@gmail.com', '12345678', '2023-12-02'),
(13, 'khj', 'jkhkj', 'hjkhjkh', 'jkhjkh@gmail.com', '12345678', '2023-12-02'),
(14, 'ulii', 'uilu', 'iluil', 'liu@gmail.com', '123456789', '2023-12-02'),
(15, 'hjt', 'jtyu', 'tyutyu', 'tyutyut@gmal.com', '123456789', '2023-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE `driver_details` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `driving_license_no` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `driver_pic` varchar(255) DEFAULT NULL,
  `driving_license_pic` varchar(255) DEFAULT NULL,
  `cnic_front_pic` varchar(255) DEFAULT NULL,
  `cnic_back_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`id`, `driver_id`, `full_name`, `address`, `post_code`, `phone`, `driving_license_no`, `cnic`, `driver_pic`, `driving_license_pic`, `cnic_front_pic`, `cnic_back_pic`) VALUES
(1, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(2, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(3, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(4, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(5, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(6, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(7, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(8, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(9, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(10, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(11, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(12, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(13, 11, 'jkllkj', 'kljklj', 'kljkljkl', 'jkljl', 'jkljkljkl', 'kljlkj', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(14, 12, 'jklklklj', 'kjlk', 'jkljklj', 'klj', 'k', 'kjjkjl', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(15, 13, 'kluklj', 'jjkj', 'kljklj', 'kljkljkl', 'jkljkl', 'jkljl', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG', 'dhmfghxd.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `pending_driver_details`
--

CREATE TABLE `pending_driver_details` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `driving_license_no` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `driver_pic` varchar(255) DEFAULT NULL,
  `driving_license_pic` varchar(255) DEFAULT NULL,
  `cnic_front_pic` varchar(255) DEFAULT NULL,
  `cnic_back_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pending_vehicle_details`
--

CREATE TABLE `pending_vehicle_details` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `registration` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `seating_capacity` int(11) DEFAULT NULL,
  `front_pic` varchar(255) DEFAULT NULL,
  `back_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_vehicle_details`
--

INSERT INTO `pending_vehicle_details` (`id`, `driver_id`, `name`, `model`, `make`, `registration`, `number`, `color`, `seating_capacity`, `front_pic`, `back_pic`) VALUES
(1, 11, 'jkkl', 'kljlk', 'jkljklj', 'lkjklj', 'kljkl', 'jkljkl', 0, 'dhmfghxd.PNG', 'dhmfghxd.PNG'),
(4, 14, 'hkjk', 'jkhjk', 'hjk', 'hkjhjkhjk', 'hjkhjk', 'hjkhkj', 0, 'dhmfghxd.PNG', 'dhmfghxd.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `date_created`) VALUES
(1, 'fdgfdgfdgfdgfgf', 'dsf', 'finalgamers67@gmail.com', '12345678', '2023-11-19'),
(2, 'Sabeer', 'Faisal', 'sabeer@gmail.com', '12345678', '2023-11-19'),
(3, 'Sabeer', 'Faisal', 'sabeer1@gmail.com', '12345678', '2023-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `registration` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `seating_capacity` int(11) DEFAULT NULL,
  `front_pic` varchar(255) DEFAULT NULL,
  `back_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`id`, `driver_id`, `name`, `model`, `make`, `registration`, `number`, `color`, `seating_capacity`, `front_pic`, `back_pic`) VALUES
(1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, 'jkhj', 'hjkhjkhkj', 'hjkh', 'jkhjk', 'hkjh', '0', 0, 'dhmfghxd.PNG', 'dhmfghxd.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_details`
--
ALTER TABLE `driver_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `pending_driver_details`
--
ALTER TABLE `pending_driver_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `pending_vehicle_details`
--
ALTER TABLE `pending_vehicle_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `driver_details`
--
ALTER TABLE `driver_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pending_driver_details`
--
ALTER TABLE `pending_driver_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pending_vehicle_details`
--
ALTER TABLE `pending_vehicle_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver_details`
--
ALTER TABLE `driver_details`
  ADD CONSTRAINT `driver_details_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);

--
-- Constraints for table `pending_driver_details`
--
ALTER TABLE `pending_driver_details`
  ADD CONSTRAINT `pending_driver_details_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);

--
-- Constraints for table `pending_vehicle_details`
--
ALTER TABLE `pending_vehicle_details`
  ADD CONSTRAINT `pending_vehicle_details_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);

--
-- Constraints for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD CONSTRAINT `vehicle_details_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
