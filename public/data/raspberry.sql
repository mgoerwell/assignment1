-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 01:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raspberry`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `transaction_type` varchar(32) NOT NULL,
  `assembly` varchar(32) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `revenue` int(11) NOT NULL,
  `item_data` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `date`, `time`, `transaction_type`, `assembly`, `location`, `cost`, `revenue`, `item_data`) VALUES
(1, '2017-01-13', '15:00:00', 'purchase', '', 'Seattle, US', 100, 0, 'part_box'),
(2, '2017-01-14', '13:00:00', 'assembly', 'full', 'Vancouver, Canada', 0, 0, 'A'),
(3, '2017-01-15', '07:00:00', 'shipment', 'full', 'Dhaka, Bangladesh', 0, 50, 'A'),
(4, '2017-01-15', '15:00:00', 'assembly', 'full', 'Vancouver, Canada', 0, 0, 'M'),
(5, '2017-01-15', '07:30:00', 'assembly', 'full', 'Vancouver, Canada', 0, 0, 'B'),
(6, '2017-01-16', '10:00:00', 'shipment', 'full', 'Delhi, India', 0, 100, 'M'),
(7, '2017-01-17', '11:00:00', 'purchase', '', 'Shanghai, China', 100, 0, 'part_box'),
(8, '2017-01-20', '11:00:00', 'shipment', 'full', 'Calgary, Canada', 0, 50, 'B'),
(9, '2017-01-20', '13:00:00', 'assembly', 'mix', 'Vancouver, Canada', 0, 0, 'motley'),
(10, '2017-01-21', '14:00:00', 'shipment', 'mix', 'Moscow, Russia', 0, 25, 'motley'),
(11, '2017-01-17', '11:00:00', 'purchase', '', 'Shanghai, China', 100, 0, 'part_box'),
(12, '2017-01-20', '13:00:00', 'assembly', 'full', 'Vancouver, Canada', 0, 0, 'R'),
(13, '2017-01-20', '13:00:00', 'assembly', 'mix', 'Vancouver, Canada', 0, 0, 'motley'),
(14, '2017-01-20', '13:00:00', 'assembly', 'mix', 'Vancouver, Canada', 0, 0, 'companion'),
(15, '2017-01-20', '13:00:00', 'shipment', 'full', 'London, England', 0, 50, 'R'),
(16, '2017-01-20', '11:00:00', 'shipment', 'mix', 'Berlin, Germany', 0, 25, 'motley'),
(17, '2017-01-20', '13:00:00', 'assembly', 'mix', 'Vancouver, Canada', 0, 0, 'butler'),
(18, '2017-01-20', '13:00:00', 'assembly', 'full', 'Vancouver, Canada', 0, 0, 'A'),
(19, '2017-01-20', '13:00:00', 'assembly', 'full', 'Vancouver, Canada', 0, 0, 'W'),
(20, '2017-01-20', '11:00:00', 'shipment', 'mix', 'Toronto, Canada', 0, 100, 'companion'),
(21, '2017-01-20', '11:00:00', 'shipment', 'mix', 'New York, US', 0, 50, 'butler'),
(22, '2017-01-20', '11:00:00', 'shipment', 'full', 'Houston, US', 0, 50, 'A'),
(23, '2017-01-20', '11:00:00', 'shipment', 'full', 'Venice, Italy', 0, 200, 'W'),
(30, '2017-04-02', '23:23:47', 'purchase', '', 'PRC', 100, 0, 'part_box');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `certificate` varchar(8) NOT NULL,
  `line_type` varchar(10) NOT NULL,
  `part_code` varchar(2) NOT NULL,
  `part_type` varchar(5) NOT NULL,
  `date_acquired` datetime NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`certificate`, `line_type`, `part_code`, `part_type`, `date_acquired`, `available`) VALUES
('234239', 'Butler', 'm3', 'feet', '2017-03-05 00:00:00', 0),
('234249', 'Butler', 'm2', 'torso', '2017-03-05 00:00:00', 0),
('234289', 'Butler', 'm1', 'head', '2017-03-05 00:00:00', 0),
('654616', 'Household', 'a3', 'feet', '2017-03-05 00:00:00', 1),
('754216', 'Household', 'a1', 'head', '2017-03-30 00:00:00', 1),
('754616', 'Household', 'a2', 'torso', '2017-03-05 00:00:00', 1),
('839221', 'Companion', 'w3', 'feet', '2017-03-05 00:00:00', 1),
('839281', 'Companion', 'w1', 'head', '2017-03-05 00:00:00', 1),
('839288', 'Companion', 'w2', 'torso', '2017-03-05 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

CREATE TABLE `robots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head_part` varchar(8) NOT NULL,
  `torso_part` varchar(8) NOT NULL,
  `leg_part` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robots`
--

INSERT INTO `robots` (`id`, `head_part`, `torso_part`, `leg_part`) VALUES
(1, '234289', '234249', '234239');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`certificate`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `robots`
--
ALTER TABLE `robots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
