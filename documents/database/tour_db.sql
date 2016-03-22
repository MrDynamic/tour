-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 21, 2016 at 05:52 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(11) NOT NULL,
  `package_type_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_desc` text NOT NULL,
  `pdf_path` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `expire_date` datetime NOT NULL,
  `travel_date` datetime DEFAULT NULL COMMENT 'วันเดินทาง',
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N',
  `u_date` datetime NOT NULL,
  `c_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_image`
--

CREATE TABLE `tbl_package_image` (
  `package_img_id` int(11) NOT NULL,
  `image_title` varchar(100) DEFAULT NULL,
  `image_description` text,
  `image_path` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_type`
--

CREATE TABLE `tbl_package_type` (
  `package_type_id` int(11) NOT NULL,
  `package_type_name` varchar(200) NOT NULL,
  `package_type_desc` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'N=NO,Y=Yes',
  `c_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_type`
--

INSERT INTO `tbl_package_type` (`package_type_id`, `package_type_name`, `package_type_desc`, `thumbnail`, `delete_flag`, `c_date`, `u_date`) VALUES
(1, '3 วัน 2 คืน', '', NULL, 'N', '2016-03-19 16:06:22', '2016-03-18 17:00:00'),
(2, '5 วัน 4 คือ', '', NULL, 'N', '2016-03-19 16:10:46', '2016-03-18 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_package_image`
--
ALTER TABLE `tbl_package_image`
  ADD PRIMARY KEY (`package_img_id`);

--
-- Indexes for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  ADD PRIMARY KEY (`package_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_image`
--
ALTER TABLE `tbl_package_image`
  MODIFY `package_img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `package_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
