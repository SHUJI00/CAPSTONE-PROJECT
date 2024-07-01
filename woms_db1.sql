-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 11:23 PM
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
-- Database: `woms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `profile_img` blob DEFAULT NULL,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `loginacc_status` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `personnel_acc` (
  `personnel_id` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `profile_img` blob DEFAULT NULL,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `request_form` (
  `req_id` int(11) NOT NULL,
  `req_control_code` varchar(255) DEFAULT NULL,
  `date_requested` date DEFAULT curdate(),
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `mobile_num` varchar(11) NOT NULL,
  `department` text DEFAULT NULL,
  `service` text DEFAULT NULL,
  `date_needed` date DEFAULT NULL,
  `time_needed` time DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `agreement` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `req_assessment` (
  `req_assess_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  `datereq_assessment` date DEFAULT curdate(),
  `priority_level` varchar(255) NOT NULL,
  `work_complexity` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `req_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `sample` (
  `id` int(11) NOT NULL,
  `personnel` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `service_details` (
  `service_id` int(11) NOT NULL,
  `date_added` date DEFAULT curdate(),
  `service_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `staff_acc` (
  `staff_id` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `profile_img` blob DEFAULT NULL,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `personnel_acc`
--
ALTER TABLE `personnel_acc`
  ADD PRIMARY KEY (`personnel_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `request_form`
--
ALTER TABLE `request_form`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `req_assessment`
--
ALTER TABLE `req_assessment`
  ADD PRIMARY KEY (`req_assess_id`),
  ADD KEY `req_id` (`req_id`),
  ADD KEY `personnel_id` (`personnel_id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `staff_acc`
--
ALTER TABLE `staff_acc`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `login_id` (`login_id`);

--
-- TRUNCATE tables
--

TRUNCATE TABLE `admin_acc`;
TRUNCATE TABLE `login`;
TRUNCATE TABLE `personnel_acc`;
TRUNCATE TABLE `request_form`;
TRUNCATE TABLE `req_assessment`;
TRUNCATE TABLE `sample`;
TRUNCATE TABLE `service_details`;
TRUNCATE TABLE `staff_acc`;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `personnel_acc`
--
ALTER TABLE `personnel_acc`
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `request_form`
--
ALTER TABLE `request_form`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `req_assessment`
--
ALTER TABLE `req_assessment`
  MODIFY `req_assess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `staff_acc`
--
ALTER TABLE `staff_acc`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD CONSTRAINT `admin_acc_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);

--
-- Constraints for table `personnel_acc`
--
ALTER TABLE `personnel_acc`
  ADD CONSTRAINT `personnel_acc_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);

--
-- Constraints for table `req_assessment`
--
ALTER TABLE `req_assessment`
  ADD CONSTRAINT `req_assessment_ibfk_1` FOREIGN KEY (`req_id`) REFERENCES `request_form` (`req_id`),
  ADD CONSTRAINT `req_assessment_ibfk_2` FOREIGN KEY (`personnel_id`) REFERENCES `personnel_acc` (`personnel_id`);

--
-- Constraints for table `staff_acc`
--
ALTER TABLE `staff_acc`
  ADD CONSTRAINT `staff_acc_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
