-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 01:48 PM
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
-- Database: `my_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `cos_id` int(10) NOT NULL,
  `cos_name` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `village` text NOT NULL,
  `p_status` text NOT NULL,
  `cos_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`cos_id`, `cos_name`, `mobile`, `village`, `p_status`, `cos_address`, `date`) VALUES
(4, 'bharat lal prajapat', '8739828563', 'Khilchipur', 'due', 'sabji mandi khilchipur', '2018-09-01 13:22:58'),
(5, 'deshraj saini bhobra', '9680166585', 'Khilchipur', 'due', ' khilchipur', '2018-09-03 07:28:08'),
(7, 'dinesh prajapat', '00', 'Khilchipur', 'due', 'khilchipur', '2018-09-03 07:44:37'),
(8, 'mahaveer saini', '9089526229', 'Sherpur', 'due', 'sherpur', '2018-09-03 07:45:44'),
(9, 'chandraman saini', '9694327117', 'Sherpur', 'due', 'sherpur', '2018-09-03 07:46:53'),
(10, 'rajendra saini kabira', '9887643714', 'Khilchipur', 'due', 'khilchipur', '2018-09-03 07:48:43'),
(11, 'falya bhobra', '00', 'Khilchipur', 'due', 'khilchipur', '2018-09-03 08:49:42'),
(12, 'gajanand saini', '00', 'Sherpur', 'due', 'sherpur', '2018-09-03 08:50:50'),
(13, 'lokesh saini chacha', '9887350775', 'Sherpur', 'due', 'sherpur khilchipur', '2018-09-03 08:51:56'),
(14, 'balram saini tent', '7891260757', 'Sherpur', 'due', 'sherpur', '2018-09-03 08:52:59'),
(15, 'hanuman saini ', '00', 'Sherpur', 'due', 'hammir mohalla', '2018-09-06 11:00:51'),
(16, 'chandra mohan dholi', '00', 'Khilchipur', 'due', 'khilchipur', '2018-09-06 11:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `entery`
--

CREATE TABLE `entery` (
  `entery_id` int(50) NOT NULL,
  `cos_id` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `work` text NOT NULL,
  `wr_desc` text NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entery`
--

INSERT INTO `entery` (`entery_id`, `cos_id`, `date`, `work`, `wr_desc`, `price`) VALUES
(20, 14, '2018-09-06 10:53:07', 'mobile recharge', 'jio 398 recharge', 398),
(21, 13, '2018-09-06 10:53:46', 'light bill', 'light bill worth 500', 500),
(22, 12, '2018-09-06 10:55:04', 'forms', 'police form & ration card', 600),
(23, 11, '2018-09-06 10:55:29', 'photo', 'photo 4*6 color photo 2', 60),
(24, 10, '2018-09-06 10:56:09', 'recharge', 'application form ssc & mobile recharge', 800),
(26, 8, '2018-09-06 10:57:28', 'form', 'application form vetnary', 320),
(27, 5, '2018-09-06 10:58:10', 'mob recharge 1', 'fruits list & mobilr recharge &', 270),
(28, 7, '2018-09-06 10:58:56', 'form ', 'application from jvnl', 490),
(29, 4, '2018-09-06 10:59:42', 'copy ', '20 photo copy 2 side', 60),
(30, 15, '2018-09-06 11:01:18', 'form', 'application form', 50),
(31, 16, '2018-09-06 11:19:05', 'forms', 'application form bed', 370);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indexes for table `entery`
--
ALTER TABLE `entery`
  ADD PRIMARY KEY (`entery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `cos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `entery`
--
ALTER TABLE `entery`
  MODIFY `entery_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
