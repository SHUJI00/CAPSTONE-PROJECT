CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `loginacc_status` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
);

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_img` blob DEFAULT NULL,
  `date_created` date DEFAULT curdate(),
  FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE SET NULL
);

CREATE TABLE `personnel_acc` (
  `personnel_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_img` blob DEFAULT NULL,
  `date_created` date DEFAULT curdate(),
  FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE SET NULL
);

CREATE TABLE `staff_acc` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_img` blob DEFAULT NULL,
  `date_created` date DEFAULT curdate(),
  FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE SET NULL
);

CREATE TABLE `requester_acc` (
  `requester_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_img` blob DEFAULT NULL,
  `date_created` date DEFAULT curdate(),
  FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE SET NULL
);

CREATE TABLE `request_form` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `req_control_code` varchar(255) DEFAULT NULL,
  `date_requested` date DEFAULT curdate(),
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `department` text DEFAULT NULL,
  `service` text DEFAULT NULL,
  `date_needed` date DEFAULT NULL,
  `time_needed` time DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `agreement` text DEFAULT NULL
);

CREATE TABLE `req_assessment` (
  `req_assess_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `req_id` int(11) NOT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `datereq_assessment` date DEFAULT curdate(),
  `priority_level` varchar(255) NOT NULL,
  `work_complexity` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `req_status` varchar(255) NOT NULL,
  FOREIGN KEY (`req_id`) REFERENCES `request_form` (`req_id`) ON DELETE CASCADE,
  FOREIGN KEY (`personnel_id`) REFERENCES `personnel_acc` (`personnel_id`) ON DELETE SET NULL
);

CREATE TABLE `service_details` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `date_added` date DEFAULT curdate(),
  `service_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
);

