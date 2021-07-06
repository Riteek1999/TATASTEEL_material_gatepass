-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql107.freesite.vip
-- Generation Time: Jul 06, 2021 at 03:17 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frsiv_25740315_mgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `adminid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `adminid`, `password`) VALUES
(1, '1001', '1234'),
(2, '1002', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `gid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `m_did` int(10) NOT NULL,
  `m_sid` int(10) NOT NULL,
  `approver` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `m_tid` int(10) NOT NULL,
  `courierservice` varchar(20) DEFAULT NULL,
  `c_contactno` varchar(10) DEFAULT NULL,
  `courieremp_pno` varchar(6) DEFAULT NULL,
  `e_contactno` varchar(10) DEFAULT NULL,
  `gpid` varchar(20) NOT NULL,
  `activeindex` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`gid`, `userid`, `m_did`, `m_sid`, `approver`, `material`, `quantity`, `unit`, `m_tid`, `courierservice`, `c_contactno`, `courieremp_pno`, `e_contactno`, `gpid`, `activeindex`) VALUES
(5, 47, 3, 1, 'Rakesh Jain', 'Coal', '300', 'kg', 4, NULL, NULL, '123456', '1234567891', '4340', 'n'),
(6, 47, 3, 1, 'Rakesh Jain', 'Coal', '300', 'kg', 4, NULL, NULL, '123456', '1234567891', '9944', 'n'),
(7, 47, 3, 2, 'Sashi Rai', 'High-Speed Diesel', '20', 'kl', 3, 'xyz', '1234567891', NULL, NULL, '6614', 'n'),
(8, 46, 2, 1, 'Bipin Pal', 'Coal', '100', 'kg', 1, 'bluedart', '1234567891', NULL, NULL, '5138', 'n'),
(13, 46, 2, 4, 'Shubham', 'steel', '100', 'kg', 2, 'NULL', NULL, '127894', '8967452319', '3971', 'n'),
(18, 46, 2, 1, 'Rakesh Jain', 'steel', '500', 'kg', 1, 'NULL', NULL, NULL, NULL, '1945', 'n'),
(19, 46, 3, 1, 'Rakesh Jain', 'steel', '100', 'kg', 2, 'edhefhb', '1324421566', NULL, NULL, '2249', 'n'),
(20, 46, 3, 1, 'Rakesh Jain', 'steel', '100', 'kg', 2, 'edhefhb', '1324421566', NULL, NULL, '9146', 'n'),
(21, 46, 3, 1, 'Rakesh Jain', 'steel', '100', 'kg', 1, 'dghrfhjrk', '123', NULL, NULL, '3096', 'n'),
(23, 46, 3, 1, 'Rakesh Jain', 'steel', '100', 'kg', 1, 'ftuffg', '123', NULL, NULL, '4336', 'n'),
(26, 46, 3, 1, 'Rakesh Jain', 'steel', '130', 'kg', 1, 'frhu', '1234567891', NULL, NULL, '1370', 'y'),
(27, 46, 3, 1, 'Rakesh Jain', 'steel', '150', 'kg', 1, 'NULL', NULL, NULL, NULL, '2965', 'n'),
(28, 46, 3, 1, 'Rakesh Jain', 'steel', '150', 'kg', 1, 'NULL', NULL, '123456', '1234567891', '6426', 'y'),
(30, 46, 3, 1, 'Rakesh Jain', 'steel', '300', 'kg', 1, 'bluedart', '9876543211', NULL, NULL, '8520', 'n'),
(31, 46, 2, 1, 'Bipin Pal', 'High-Speed Diesel', '10', 'kl', 3, 'NULL', NULL, '123456', '9876543211', '1296', 'n'),
(32, 46, 3, 1, 'Rakesh Jain', 'steel', '200', 'kg', 1, 'NULL', NULL, '123456', '9876543211', '6577', 'y'),
(33, 46, 3, 1, 'Rakesh Jain', 'steel', '101', 'kg', 1, 'NULL', NULL, '123456', '9876543211', '9769', 'y'),
(34, 46, 3, 1, 'Rakesh Jain', 'steel', '107', 'kg', 1, 'NULL', NULL, '123456', '8765432999', '7750', 'y'),
(35, 46, 3, 1, 'Rakesh Jain', 'steel', '109', 'kg', 3, 'xyfd', '9876543211', NULL, NULL, '1180', 'n'),
(36, 46, 3, 1, 'Rakesh Jain', 'steel', '113', 'kg', 1, 'xyzf', '9876543211', NULL, NULL, '1211', 'n'),
(37, 46, 3, 1, 'Bipin Pal', 'High-Speed Diesel', '10', 'kl', 3, 'NULL', NULL, '125987', '9876543211', '3857', 'n'),
(38, 46, 3, 1, 'Rakesh Jain', 'steel', '103', 'kg', 1, 'NULL', NULL, '124563', '9876543211', '7398', 'n'),
(39, 46, 3, 1, 'Rakesh Jain', 'High-Speed Diesel', '3', 'kl', 7, 'NULL', NULL, '123456', '9876543211', '8098', 'n'),
(40, 46, 4, 1, 'Bipin Pal', 'High-Speed Diesel', '7', 'kl', 8, 'NULL', NULL, '123456', '9876543211', '9907', 'n'),
(41, 46, 3, 1, 'Rakesh Jain', 'Coal', '100', 'kg', 2, 'Abcd', '1236547896', NULL, NULL, '5691', 'n'),
(42, 47, 4, 1, 'Bipin Pal', 'Coal', '90', 'kg', 4, 'NULL', NULL, '123456', '1245678911', '7235', 'n'),
(43, 48, 3, 1, 'Bipin Pal', 'Coal', '500', 'kg', 8, 'Asd', '6464646464', NULL, NULL, '8944', 'n'),
(44, 46, 3, 1, 'Rakesh Jain', 'High-Speed Diesel', '6', 'kl', 3, 'NULL', NULL, '123456', '9876543211', '9033', 'n'),
(45, 46, 3, 1, 'Rakesh Jain', 'copper', '10', 'kg', 1, 'NULL', NULL, '123456', '9876543211', '3219', 'n'),
(46, 46, 3, 1, 'Rakesh Jain', 'steel', '5', 'kg', 1, 'NULL', NULL, '123456', '9876543211', '2136', 'n'),
(47, 46, 3, 1, 'Rakesh Jain', 'steel', '5', 'kg', 2, 'NULL', NULL, '126935', '9876543211', '5312', 'n'),
(48, 46, 3, 1, 'Bipin Pal', 'Coal', '7', 'kg', 5, 'NULL', NULL, '123456', '9876543211', '7776', 'n'),
(49, 46, 3, 1, 'Bipin Pal', 'copper', '2', 'kg', 2, 'NULL', NULL, '123456', '9876543211', '3835', 'y'),
(50, 46, 3, 1, 'Rakesh Jain', 'Coal', '3', 'kg', 1, 'NULL', NULL, '123459', '9876543211', '5721', 'y'),
(51, 46, 3, 1, 'Rakesh Jain', 'steel', '29', 'kg', 6, 'NULL', NULL, '123456', '9876543211', '4044', 'y'),
(52, 49, 3, 1, 'Rakesh Jain', 'steel', '34', 'kg', 3, 'NULL', NULL, '123456', '1234567890', '5475', 'y'),
(53, 50, 3, 1, 'Rakesh Jain', 'steel', '250', 'kg', 1, 'NULL', NULL, '123456', '7762943402', '5664', 'y'),
(54, 46, 2, 1, 'Bipin Pal', 'High-Speed Diesel', '40', 'kl', 7, 'NULL', NULL, '234567', '987654321', '1207', 'n'),
(55, 51, 3, 1, 'Bipin Pal', 'High-Speed Diesel', '5', 'kl', 4, 'Bludart', '9876543211', NULL, NULL, '9865', 'y'),
(56, 52, 2, 3, 'Manvir Singh', 'copper', '100', 'kg', 7, 'NULL', NULL, '777788', '8896667999', '3000', 'y'),
(57, 54, 3, 1, 'Rakesh Jain', 'copper', '69', 'kg', 5, 'Abc', '6798564321', NULL, NULL, '9761', 'y'),
(58, 54, 3, 1, 'Rakesh Jain', 'steel', '76', 'kg', 8, 'NULL', NULL, '364464', '1234567879', '8994', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `m_approval`
--

CREATE TABLE `m_approval` (
  `ma_id` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `approval1` varchar(50) NOT NULL,
  `approval2` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_approval`
--

INSERT INTO `m_approval` (`ma_id`, `sid`, `approval1`, `approval2`) VALUES
(1, 1, 'Rakesh Jain', 'Bipin Pal'),
(2, 2, 'Ravi Kumar', 'Sashi Rai'),
(3, 3, 'Satvir Singh', 'Manvir Singh'),
(4, 4, 'Aryan ', 'Shubham');

-- --------------------------------------------------------

--
-- Table structure for table `m_destination`
--

CREATE TABLE `m_destination` (
  `m_did` int(10) NOT NULL,
  `destinations` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_destination`
--

INSERT INTO `m_destination` (`m_did`, `destinations`) VALUES
(3, 'Bokaro'),
(2, 'Dhanbad'),
(1, 'Jamshedpur'),
(4, 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `m_material`
--

CREATE TABLE `m_material` (
  `m_mid` int(10) NOT NULL,
  `material` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `activeindex` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_material`
--

INSERT INTO `m_material` (`m_mid`, `material`, `quantity`, `unit`, `activeindex`) VALUES
(1, 'steel', '124', 'kg', 'y'),
(2, 'copper', '129', 'kg', 'y'),
(3, 'Coal', '490', 'kg', 'y'),
(4, 'High-Speed Diesel', '95', 'kl', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `m_source`
--

CREATE TABLE `m_source` (
  `m_sid` int(10) NOT NULL,
  `source` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_source`
--

INSERT INTO `m_source` (`m_sid`, `source`) VALUES
(3, 'Bokaro'),
(2, 'Hasaribagh'),
(1, 'Jamshedpur'),
(4, 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `m_transport`
--

CREATE TABLE `m_transport` (
  `m_tid` int(10) NOT NULL,
  `transport` varchar(50) NOT NULL,
  `transport_no` varchar(20) NOT NULL,
  `tran_track_no` varchar(20) NOT NULL,
  `activeindex` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_transport`
--

INSERT INTO `m_transport` (`m_tid`, `transport`, `transport_no`, `tran_track_no`, `activeindex`) VALUES
(1, 'Goods Truck', 'JH05A0623', '24567123', 'n'),
(2, 'Van', 'JH05A0231', '12345678', 'n'),
(3, 'Diesel Tanker', 'JH05A0811', '87654321', 'n'),
(4, 'Trailor', 'JH05A0111', '98798721', 'n'),
(5, 'Goods Truck', 'JH05B0722', '98997756', 'n'),
(6, 'Van', 'JH05B0657', '22435689', 'n'),
(7, 'Diesel Tanker', 'JH05B3789', '33435697', 'n'),
(8, 'Trailor', 'JH05B5678', '66557788', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pno` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `activeindex` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `pno`, `email`, `password`, `phonenumber`, `activeindex`) VALUES
(46, 'riteek', 'e10adc', 'r@gmail.com', 'ad2474dfce4e2e844ce8b52f6640d226', '0f7e44a922', 'y'),
(47, 'Rahul Kumar', 'e10adc', 'rahul@gmail.com', 'ad2474dfce4e2e844ce8b52f6640d226', 'e807f1fcf8', 'y'),
(48, 'Irshad', 'e10adc', 'irshad@gmail.com', '6181c213d62405aaaa8c0a70e1fd66ce', 'e807f1fcf8', 'y'),
(49, 'riteek', 'e10adc', 'sunidhisingh3199@gmail.com', 'ae28c9bafc9b8d0bbd30977d93b480f1', '3732cc3114', 'y'),
(50, 'aniket raj', 'e10adc', 'aniketraj2014@gmail.com', 'a6f32b56e52c3f9b3856c07cebdb25c8', '1f838b8904', 'y'),
(51, 'Riteek', 'e10adc', 'ri@gmail.com', 'ad2474dfce4e2e844ce8b52f6640d226', '1e39ac8b66', 'y'),
(52, 'Test', '97198b', 'naveed@yahoo.com', '3e0cd7dbf477f6da9831acd7c1d617bc', '38afba8163', 'y'),
(53, 'Niraj', '7dee0c', 'niraj.sharma@tatasteel.co.in', '3760c390722f10cc8e2a6e806f281ffb', 'fb498d7bb0', 'y'),
(54, 'JL', '00c66a', 'rhi@gmail.com', 'c397ec33f421a5d988405521ab20d763', '493f525f8a', 'y'),
(55, 'Test', '6325ae', 'mrakhter_786@yahoo.com', '3e0cd7dbf477f6da9831acd7c1d617bc', 'd7816c5c28', 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`gid`,`userid`) USING BTREE,
  ADD KEY `approval` (`approver`),
  ADD KEY `activeindex` (`activeindex`),
  ADD KEY `m_tid` (`m_tid`),
  ADD KEY `m_did` (`m_did`),
  ADD KEY `m_sid` (`m_sid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `m_approval`
--
ALTER TABLE `m_approval`
  ADD PRIMARY KEY (`ma_id`),
  ADD KEY `sid` (`sid`),
  ADD KEY `approval1` (`approval1`),
  ADD KEY `approval2` (`approval2`);

--
-- Indexes for table `m_destination`
--
ALTER TABLE `m_destination`
  ADD PRIMARY KEY (`m_did`),
  ADD UNIQUE KEY `destinations` (`destinations`);

--
-- Indexes for table `m_material`
--
ALTER TABLE `m_material`
  ADD PRIMARY KEY (`m_mid`),
  ADD KEY `material` (`material`),
  ADD KEY `activeindex` (`activeindex`);

--
-- Indexes for table `m_source`
--
ALTER TABLE `m_source`
  ADD PRIMARY KEY (`m_sid`),
  ADD UNIQUE KEY `source` (`source`);

--
-- Indexes for table `m_transport`
--
ALTER TABLE `m_transport`
  ADD PRIMARY KEY (`m_tid`),
  ADD UNIQUE KEY `transport_no_2` (`transport_no`),
  ADD KEY `activeindex` (`activeindex`),
  ADD KEY `transport_no` (`transport_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`),
  ADD KEY `email_4` (`email`),
  ADD KEY `email_5` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `gid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `m_approval`
--
ALTER TABLE `m_approval`
  MODIFY `ma_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_destination`
--
ALTER TABLE `m_destination`
  MODIFY `m_did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_material`
--
ALTER TABLE `m_material`
  MODIFY `m_mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_source`
--
ALTER TABLE `m_source`
  MODIFY `m_sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_transport`
--
ALTER TABLE `m_transport`
  MODIFY `m_tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
