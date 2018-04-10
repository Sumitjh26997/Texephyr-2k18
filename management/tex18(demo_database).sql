-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2018 at 10:00 PM
-- Server version: 5.7.18-ndb-7.6.3
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tex18`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`c_id`, `c_name`, `c_place`) VALUES
  (1, 'Other...', 'NULL'),
  (2, 'Maharashtra Institute Of Technology', 'Kothrud Pune'),
  (3, 'Sinhagad College of Engineering', 'Bodruk Pune'),
  (4, 'AISSM College of Engineering', 'Viman Putla'),
  (5, 'COEP', 'Shivajinagar');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_submissions`
--

CREATE TABLE `contact_us_submissions` (
  `con_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_submissions`
--

INSERT INTO `contact_us_submissions` (`con_id`, `name`, `email`, `message`, `timestamp`) VALUES
  (1, 'Abdul Noushad Sheikh', 'bitwiseabdul@gmail.com', 'This is a message Text.', '2018-01-10 20:21:05'),
  (2, 'Rahul Shekhar', 'rahul@gmail.com', 'hello', '2018-01-10 20:46:18'),
  (3, 'Abhay Kumar', 'rahul@gmail.com', 'hello', '2018-01-10 20:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(2) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
  (1, 'Computer'),
  (2, 'Mechanical'),
  (3, 'ENTC'),
  (4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(5) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `e_description` text NOT NULL,
  `e_fees` int(4) NOT NULL,
  `e_participant_no` int(2) NOT NULL,
  `e_date` date NOT NULL,
  `e_time` time NOT NULL,
  `e_head` varchar(40) NOT NULL,
  `e_head_phone` bigint(10) NOT NULL,
  `e_round` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `e_name`, `e_description`, `e_fees`, `e_participant_no`, `e_date`, `e_time`, `e_head`, `e_head_phone`, `e_round`) VALUES
  (17, 'Roborace', 'dfg', 250, 3, '2017-01-20', '22:12:00', 'gh', 34, 3),
  (18, 'Robowars', 'gh', 300, 5, '0012-12-12', '23:12:00', 'ef', 234, 2),
  (19, 'Line Adepto', 'j', 200, 3, '0012-12-12', '12:12:00', 'eij', 34, 2),
  (20, 'Rallymania', 'gfb', 300, 5, '0012-12-12', '12:12:00', 'et', 1234, 2),
  (21, 'Mr. Mechanix', 'h', 120, 2, '0012-12-12', '12:12:00', 'sdf', 234, 2),
  (22, 'Contraption', 'bjhbj', 200, 4, '0067-06-07', '06:59:00', 'saj', 678, 1),
  (23, 'Brain Booster', 'uu', 100, 2, '0067-06-07', '06:06:00', 'hhg', 6786, 3),
  (24, 'IDEATE-Topic Presentation', 'jgk', 0, 2, '0676-07-06', '06:59:00', 'hjh', 7686, 3),
  (25, 'Algoholics', 'hgj', 200, 2, '0007-06-07', '06:07:00', 'gyjg', 76576, 3),
  (26, 'BE Project', 'iu', 300, 3, '0007-06-06', '06:59:00', 'jhj', 68768, 2),
  (27, 'TE Project', 'feaf', 200, 3, '0066-06-06', '06:06:00', 'hh', 7686, 2),
  (28, 'Circiutrix', 'hjjk', 100, 2, '0076-06-07', '07:59:00', 'ghg', 676, 2),
  (29, 'Code-Break', 'df', 200, 2, '0012-12-12', '12:12:00', 'sdf', 234, 3),
  (30, 'Codestorm', 'df', 200, 2, '0011-11-11', '11:11:00', 'erg', 234, 3),
  (31, 'Designer Pro', 'wef', 100, 1, '0001-11-11', '11:11:00', 'wef', 345, 3),
  (32, 'Relay Coding', 'dcv', 100, 2, '0001-11-11', '11:11:00', 'df', 23, 2),
  (33, 'Google It', 'fv', 100, 2, '0011-11-11', '11:11:00', 'dfv', 23, 2),
  (34, 'Hotkeys', 'df', 100, 1, '0001-02-11', '12:12:00', 'dfg', 123, 2),
  (35, 'Junkyard Wars', 'fv', 200, 2, '0012-12-12', '11:11:00', 'df', 234, 2),
  (36, 'Tech Roadies', 'sdf', 125, 1, '0121-02-12', '23:23:00', 'ef', 234, 2),
  (37, 'Paparazzi', 'DF', 100, 1, '0034-03-23', '12:12:00', 'D', 23, 1),
  (38, 'Blitz Chess', 'df', 50, 1, '0012-12-12', '12:12:00', '23', 34, 2),
  (39, 'Box Cricket', 'e', 300, 7, '0012-12-12', '12:12:00', '23', 23, 1),
  (40, 'Box Soccer', 'cfv', 350, 5, '0012-12-12', '12:12:00', 'fb', 34, 1),
  (41, 'Inquizzitive', 'c', 100, 2, '0001-11-11', '11:11:00', 'dfh', 38, 2),
  (42, 'Android Development', '', 0, 1, '0012-12-12', '12:12:00', 'vgh', 876, 0),
  (43, 'C-DAC', '', 0, 1, '0012-12-12', '12:12:00', 'u', 9, 0),
  (44, 'Vehicle Overhauling', '', 0, 1, '0008-08-08', '03:23:00', 'h', 8, 0),
  (45, '3D - Printing', '', 0, 1, '0001-01-01', '01:11:00', 'j', 8, 0),
  (46, 'Qwerty', 'afesrgdthfjggdfs', 200, 2, '2018-12-19', '18:06:00', 'Abdul', 98765432, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(10) NOT NULL,
  `login_username` varchar(20) NOT NULL,
  `login_password` varchar(20) NOT NULL,
  `login_access` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`, `login_access`) VALUES
  (1, 'admin', 'default', 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_id` int(20) NOT NULL,
  `r_event_id` int(5) NOT NULL,
  `r_volunteer_id` int(5) NOT NULL,
  `r_visit_id` int(11) DEFAULT NULL,
  `r_p_college_id` int(5) NOT NULL,
  `r_p_college_name` varchar(200) DEFAULT NULL,
  `r_p_name` varchar(40) NOT NULL,
  `r_p_phone` bigint(10) NOT NULL,
  `r_fees` int(4) NOT NULL,
  `r_paid` int(4) NOT NULL,
  `r_partial_status` tinyint(1) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `r_status_del` tinyint(1) NOT NULL DEFAULT '0',
  `r_p_email` varchar(30) NOT NULL,
  `transaction_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `r_event_id`, `r_volunteer_id`, `r_visit_id`, `r_p_college_id`, `r_p_college_name`, `r_p_name`, `r_p_phone`, `r_fees`, `r_paid`, `r_partial_status`, `r_date`, `r_time`, `r_status_del`, `r_p_email`, `transaction_id`) VALUES
  (2, 21, 33, NULL, 2, '', 'Rohan Rajurkar', 9876543210, 200, 100, 1, '2018-01-11', '00:57:17', 1, 'rohan@gmail.com', 1),
  (3, 32, 33, NULL, 3, '', 'Omkar Deshpande', 87654321425, 100, 100, 0, '2018-01-11', '00:58:29', 0, 'omkar@gmai.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `visit_id` int(11) NOT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date NOT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time NOT NULL,
  `college_id` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `cash_recieved` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visit_volunteer_map`
--

CREATE TABLE `visit_volunteer_map` (
  `vv_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `visit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `v_id` int(5) NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_dept_id` int(2) NOT NULL,
  `visit_id` int(11) DEFAULT NULL,
  `activity_status` tinyint(1) NOT NULL DEFAULT '0',
  `v_roll` int(6) NOT NULL,
  `v_phone` bigint(10) NOT NULL,
  `v_email` varchar(50) NOT NULL,
  `v_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`v_id`, `v_name`, `v_dept_id`, `visit_id`, `activity_status`, `v_roll`, `v_phone`, `v_email`, `v_password`) VALUES
  (32, 'Rahul Shekhar', 3, NULL, 0, 303021, 9766294461, 'rahul@gmail.com', 'rahul'),
  (33, 'Abdul Noushad Sheikh', 1, NULL, 0, 303078, 9766294462, 'bitwiseabdul@gmail.com', 'abdul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_us_submissions`
--
ALTER TABLE `contact_us_submissions`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `r_e_id` (`r_event_id`),
  ADD KEY `r_v_id` (`r_volunteer_id`),
  ADD KEY `r_p_college_id` (`r_p_college_id`),
  ADD KEY `r_visit_id` (`r_visit_id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`visit_id`),
  ADD KEY `college_id` (`college_id`),
  ADD KEY `pr_id` (`pr_id`);

--
-- Indexes for table `visit_volunteer_map`
--
ALTER TABLE `visit_volunteer_map`
  ADD PRIMARY KEY (`vv_id`),
  ADD KEY `volunteer_id` (`volunteer_id`),
  ADD KEY `visit_id` (`visit_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `v_email` (`v_email`),
  ADD KEY `v_dept_id` (`v_dept_id`),
  ADD KEY `visit_id` (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact_us_submissions`
--
ALTER TABLE `contact_us_submissions`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visit_volunteer_map`
--
ALTER TABLE `visit_volunteer_map`
  MODIFY `vv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `v_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`r_event_id`) REFERENCES `event` (`e_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`r_p_college_id`) REFERENCES `college` (`c_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_4` FOREIGN KEY (`r_visit_id`) REFERENCES `visit` (`visit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visit`
--
ALTER TABLE `visit`
  ADD CONSTRAINT `visit_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `visit_ibfk_2` FOREIGN KEY (`pr_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visit_volunteer_map`
--
ALTER TABLE `visit_volunteer_map`
  ADD CONSTRAINT `visit_volunteer_map_ibfk_1` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteer` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `visit_volunteer_map_ibfk_2` FOREIGN KEY (`visit_id`) REFERENCES `visit` (`visit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`v_dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `volunteer_ibfk_2` FOREIGN KEY (`visit_id`) REFERENCES `visit` (`visit_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;