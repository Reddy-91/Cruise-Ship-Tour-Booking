-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 04:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruise_ship`
--
CREATE DATABASE IF NOT EXISTS `cruise_ship` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cruise_ship`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sl_no` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `Rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_subject`
--

CREATE TABLE `contact_subject` (
  `sub_id` int(20) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_subject`
--

INSERT INTO `contact_subject` (`sub_id`, `subject`) VALUES
(1, 'Happy'),
(2, 'Sad');

-- --------------------------------------------------------

--
-- Table structure for table `curisecurise_details`
--

CREATE TABLE `curisecurise_details` (
  `curise_deatils_id` int(20) NOT NULL,
  `name_of_curise` varchar(100) NOT NULL,
  `curise_code` int(100) NOT NULL,
  `curise_description` varchar(100) NOT NULL,
  `curise_launch_date` date NOT NULL,
  `curise_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curisecurise_details`
--

INSERT INTO `curisecurise_details` (`curise_deatils_id`, `name_of_curise`, `curise_code`, `curise_description`, `curise_launch_date`, `curise_image`) VALUES
(5, 'Sunrise River', 100101, 'Happy to enjoy', '2018-01-01', 'img1.jpg'),
(6, 'Party Cruise', 100102, 'Party special Boat ', '2018-02-01', 'img2.jpg'),
(7, ' Luxury Cruise', 100103, 'romantic cruise in goa', '2018-03-01', 'img3.jpg'),
(8, 'Evening River', 100104, 'Vibes of sunset', '2018-04-01', 'img4.jpg'),
(9, 'Moon Light', 100105, 'Full Moon Cruises in the Evening', '2018-06-01', 'img5.jpg'),
(10, 'Safari Cruises', 100106, 'Special Views in the sea', '2018-07-01', 'img6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `curise_booking_details`
--

CREATE TABLE `curise_booking_details` (
  `curise_booking_id` int(20) NOT NULL,
  `package_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `no_of_adults` int(20) NOT NULL,
  `no_of_children` int(20) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(20) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_name`, `address`, `email_id`, `contact_no`, `gender`, `DOB`) VALUES
(8, 'Arjun', 'Gangavathi', 'medisettyarjunbabu@gmail.com', 6362655765, 'Male', '2024-10-20'),
(9, 'Abhishek', 'Biligi', 'abhishekbalulad@gmail.com', 9742884219, 'Male', '2002-09-06'),
(10, 'Satya', 'Kartaigi', 'ellursatish35@gmail.com', 9880898591, 'Male', '2002-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `security_question` varchar(100) NOT NULL,
  `security_answer` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `password`, `type`, `security_question`, `security_answer`, `status`) VALUES
(1, 'admin', 'Karnika@1122', 'admin', 'who i am', 'admin', 'Active'),
(9, 'medisettyarjunbabu@gmail.com', 'Arjun@1122', 'customer', 'Enter Your Email ID', 'medisettyarjunbabu@gmail.com', 'Active'),
(10, 'abhishekbalulad@gmail.com', 'Abhi@1122', 'customer', 'Enter Your Email ID', 'abhishekbalulad@gmail.com', 'Active'),
(11, 'ellursatish35@gmail.com', 'Satya@1', 'customer', 'Enter Your Email ID', 'ellursatish35@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `route_details`
--

CREATE TABLE `route_details` (
  `route_details_id` int(20) NOT NULL,
  `curise_id` int(20) NOT NULL,
  `route_from` varchar(100) NOT NULL,
  `route_to` varchar(100) NOT NULL,
  `charges` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route_details`
--

INSERT INTO `route_details` (`route_details_id`, `curise_id`, `route_from`, `route_to`, `charges`) VALUES
(5, 5, 'Colva', 'thirty km from colva', 40000),
(7, 6, 'Your Destination', 'Firty km around on sea', 70000),
(8, 7, 'GOA', 'MUMBAI', 220000),
(9, 8, 'Colva', 'Grand Island', 37000),
(10, 9, 'Colva', 'ten km around', 13000),
(11, 10, 'Colva', 'Eight km from colva', 20000),
(12, 7, 'MUMBAI', 'GOA', 220000);

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `tour_package_id` int(20) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `curise_id` int(20) NOT NULL,
  `adult_fees` int(20) NOT NULL,
  `child_fees` int(20) NOT NULL,
  `package_date` date NOT NULL,
  `package_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`tour_package_id`, `package_name`, `curise_id`, `adult_fees`, `child_fees`, `package_date`, `package_status`) VALUES
(3, 'ENTERTAINTMENT  PACKAGE', 6, 4500, 1500, '2019-02-01', 'Active'),
(4, 'FAMILY RIDE', 8, 4500, 1500, '2019-04-22', 'Active'),
(5, 'UNIQUE', 5, 4500, 1500, '2019-01-01', 'Active'),
(6, 'LONG RIDE', 7, 6000, 2500, '2019-03-01', 'Active'),
(7, 'HOLIDAY RIDES', 10, 4500, 1500, '2019-06-01', 'Active'),
(8, 'COUPLE RIDE', 9, 7000, 1000, '2019-05-01', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `contact_subject`
--
ALTER TABLE `contact_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `curisecurise_details`
--
ALTER TABLE `curisecurise_details`
  ADD PRIMARY KEY (`curise_deatils_id`);

--
-- Indexes for table `curise_booking_details`
--
ALTER TABLE `curise_booking_details`
  ADD PRIMARY KEY (`curise_booking_id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `route_details`
--
ALTER TABLE `route_details`
  ADD PRIMARY KEY (`route_details_id`),
  ADD KEY `curise_id` (`curise_id`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`tour_package_id`),
  ADD KEY `cruise_id` (`curise_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sl_no` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_subject`
--
ALTER TABLE `contact_subject`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `curisecurise_details`
--
ALTER TABLE `curisecurise_details`
  MODIFY `curise_deatils_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `curise_booking_details`
--
ALTER TABLE `curise_booking_details`
  MODIFY `curise_booking_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `route_details`
--
ALTER TABLE `route_details`
  MODIFY `route_details_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `tour_package_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `curise_booking_details`
--
ALTER TABLE `curise_booking_details`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer_details` (`customer_id`),
  ADD CONSTRAINT `package_id` FOREIGN KEY (`package_id`) REFERENCES `tour_packages` (`tour_package_id`) ON UPDATE CASCADE;

--
-- Constraints for table `route_details`
--
ALTER TABLE `route_details`
  ADD CONSTRAINT `curise_id` FOREIGN KEY (`curise_id`) REFERENCES `curisecurise_details` (`curise_deatils_id`);

--
-- Constraints for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD CONSTRAINT `cruise_id` FOREIGN KEY (`curise_id`) REFERENCES `curisecurise_details` (`curise_deatils_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
