-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 23, 2016 at 08:11 AM
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
-- Table structure for table `tbl_amphur`
--

CREATE TABLE `tbl_amphur` (
  `AMPHUR_ID` int(5) NOT NULL,
  `AMPHUR_CODE` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `AMPHUR_NAME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `POSTCODE` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(5) NOT NULL DEFAULT '0',
  `PROVINCE_ID` int(5) NOT NULL DEFAULT '0',
  `delete_flag` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE `tbl_area` (
  `area_id` int(1) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `DISTRICT_ID` int(5) NOT NULL,
  `DISTRICT_CODE` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `DISTRICT_NAME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `AMPHUR_ID` int(5) NOT NULL DEFAULT '0',
  `PROVINCE_ID` int(5) NOT NULL DEFAULT '0',
  `GEO_ID` int(5) NOT NULL DEFAULT '0',
  `delete_flag` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `additional` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `paymentTypeId` int(5) NOT NULL,
  `status` varchar(2) NOT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_detail_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `package_id` int(5) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` double NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(11) NOT NULL,
  `area_id` int(1) NOT NULL,
  `package_type_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_desc` text NOT NULL,
  `pdf_path` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `expire_date` datetime NOT NULL,
  `travel_date` datetime DEFAULT NULL COMMENT 'วันเดินทาง',
  `price` double NOT NULL COMMENT 'price per sit',
  `discount` double NOT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N',
  `u_date` datetime NOT NULL,
  `c_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_picture`
--

CREATE TABLE `tbl_package_picture` (
  `package_img_id` int(11) NOT NULL,
  `package_id` int(5) NOT NULL,
  `image_title` varchar(100) DEFAULT NULL,
  `image_description` text,
  `image_path` varchar(255) NOT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N',
  `u_date` datetime NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `portfolio_id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_province`
--

CREATE TABLE `tbl_province` (
  `PROVINCE_ID` int(5) NOT NULL,
  `PROVINCE_CODE` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `PROVINCE_NAME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(5) NOT NULL DEFAULT '0',
  `delete_flag` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_tour`
--

CREATE TABLE `tbl_request_tour` (
  `request_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `travel_date` datetime NOT NULL,
  `request_desc` text NOT NULL,
  `status_code` varchar(2) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_date` datetime NOT NULL,
  `remark` text NOT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(2) NOT NULL,
  `status_type` int(1) NOT NULL,
  `status_code` varchar(2) NOT NULL,
  `status_name` varchar(50) NOT NULL,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'USER',
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `province_id` int(3) NOT NULL,
  `amphur_id` int(3) NOT NULL,
  `district_id` int(3) DEFAULT NULL,
  `postalcode` int(5) NOT NULL,
  `c_date` datetime NOT NULL,
  `u_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_flag` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_amphur`
--
ALTER TABLE `tbl_amphur`
  ADD PRIMARY KEY (`AMPHUR_ID`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`DISTRICT_ID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_package_picture`
--
ALTER TABLE `tbl_package_picture`
  ADD PRIMARY KEY (`package_img_id`);

--
-- Indexes for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  ADD PRIMARY KEY (`package_type_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `tbl_province`
--
ALTER TABLE `tbl_province`
  ADD PRIMARY KEY (`PROVINCE_ID`);

--
-- Indexes for table `tbl_request_tour`
--
ALTER TABLE `tbl_request_tour`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `status_code` (`status_code`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_amphur`
--
ALTER TABLE `tbl_amphur`
  MODIFY `AMPHUR_ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `area_id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `DISTRICT_ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_detail_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_picture`
--
ALTER TABLE `tbl_package_picture`
  MODIFY `package_img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `package_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `portfolio_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_province`
--
ALTER TABLE `tbl_province`
  MODIFY `PROVINCE_ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_request_tour`
--
ALTER TABLE `tbl_request_tour`
  MODIFY `request_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
