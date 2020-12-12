-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 12:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_name`, `admin_password`) VALUES
('admin1', 'sanket@gmail.com', 'Saket Kamble', 'Sanket@1234');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(10) NOT NULL,
  `NGO` varchar(50) NOT NULL,
  `item_type` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `made_on` date DEFAULT NULL,
  `expires_on` date DEFAULT NULL,
  `people_can_be_served` varchar(10) DEFAULT NULL,
  `photos` varchar(500) NOT NULL,
  `condition_of_item` varchar(10) NOT NULL,
  `message_about_item` varchar(500) NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `NGO`, `item_type`, `timestamp`, `made_on`, `expires_on`, `people_can_be_served`, `photos`, `condition_of_item`, `message_about_item`, `seen`, `user_id`) VALUES
(20, 'The_Akansha_Foundation', 'Furniture', '2020-12-09 12:53:48', NULL, NULL, NULL, './charity_items/p2.jpg', 'Yes', 'jhfhfjh', 1, 1),
(21, 'The_Akansha_Foundation', 'Cloths', '2020-12-09 12:57:05', NULL, NULL, NULL, './charity_items/v2.jpg', 'Yes', 'sdfsd', 1, 1),
(22, 'The_Akansha_Foundation', 'Food', '2020-12-12 11:23:19', '2020-12-05', '2020-12-13', '5', './charity_items/goku.jpg', 'Yes', 'dgdfhdfg', 1, 1),
(23, 'The_Akansha_Foundation', 'Shoes', '2020-12-12 11:42:02', '0000-00-00', '0000-00-00', '', './charity_items/goku.jpg', 'Yes', 'dfhfhfd', 1, 1),
(24, 'Global_Vision_NGO', 'Food', '2020-12-12 11:46:29', '2020-12-05', '2020-12-19', '10', './charity_items/goku.jpg', 'Yes', 'drgrgrth', 1, 1),
(25, 'Childrens_Future_India', 'Cloths', '2020-12-12 11:46:29', '0000-00-00', '0000-00-00', '', './charity_items/goku.jpg', 'Yes', 'frterte', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` varchar(50) NOT NULL,
  `ngo_email` varchar(100) NOT NULL,
  `good_to_have` varchar(200) NOT NULL,
  `urgently_needed` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngo_id`, `ngo_name`, `ngo_email`, `good_to_have`, `urgently_needed`) VALUES
(1, 'The_Akansha_Foundation', 'akanshango@gmail.com', 'Fan,TV', 'Bed,Table,Chairs'),
(2, 'Children\'s_Future_India', 'childrenngo@gmail.com', 'Cabinet,Stool,Cushion', 'Fan,TV,Bedsheets'),
(3, 'Global_Vision_NGO', 'globalvisionngo@gmail.com', 'Pillow,Rug,Worktable', 'Desk,Ladder,Mirror');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Himanshu Bohra', 'himanshupbohra@gmail.com', 'Himansbu'),
(2, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngo_id`),
  ADD UNIQUE KEY `ngo_email` (`ngo_email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
