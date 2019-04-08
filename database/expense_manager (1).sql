-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 05:18 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_master`
--

CREATE TABLE `account_master` (
  `id` int(11) NOT NULL,
  `account_owner` varchar(50) NOT NULL,
  `account_number` bigint(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_master`
--

INSERT INTO `account_master` (`id`, `account_owner`, `account_number`, `bank_name`, `ifsc_code`, `type`, `status`) VALUES
(1, 'Sanjay', 123456789, 'SBI', 'SBIN00012456', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_transaction`
--

CREATE TABLE `account_transaction` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `credit` double NOT NULL,
  `debit` double NOT NULL,
  `date_of_transaction` date NOT NULL,
  `type` int(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_transaction`
--

INSERT INTO `account_transaction` (`id`, `account_id`, `credit`, `debit`, `date_of_transaction`, `type`, `deleted`) VALUES
(1, 1, 5000, 2400, '2018-12-28', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Vehicles', 'Active', 0, '2018-10-20 16:09:23', '2018-10-20 16:08:15'),
(2, 'Electronics', 'Active', 0, '2018-10-20 16:45:08', '2018-10-20 16:45:08'),
(3, 'Grocery', 'Active', 0, '2018-10-21 06:53:05', '2018-10-21 06:53:05'),
(4, 'Food', 'Active', 0, '2018-11-03 17:18:11', '2018-11-03 17:18:11'),
(5, 'Self Development', 'Active', 0, '2018-11-03 17:18:36', '2018-11-03 17:18:36'),
(6, 'Household', 'Active', 0, '2018-11-03 17:19:03', '2018-11-03 17:19:03'),
(7, 'Apparel', 'Active', 0, '2018-11-03 18:27:28', '2018-11-03 18:27:28'),
(8, 'Beauty', 'Active', 0, '2018-11-03 18:27:39', '2018-11-03 18:27:39'),
(9, 'Health', 'Active', 0, '2018-11-03 18:27:45', '2018-11-03 18:27:45'),
(10, 'Education', 'Active', 0, '2018-11-03 18:27:51', '2018-11-03 18:27:51'),
(11, 'Premium', 'Active', 0, '2018-11-03 18:27:59', '2018-11-03 18:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `collectiontype_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `collectiontype_id`, `name`, `deleted`) VALUES
(1, 1, 'Litres', 0),
(2, 1, 'KG', 0),
(4, 1, 'Piece', 0),
(5, 1, 'Pounds', 0),
(6, 2, 'Cash', 0),
(7, 2, 'Netbanking', 0),
(8, 2, 'Debit Card', 0),
(9, 2, 'Cheque', 0),
(10, 2, 'Online Transfer', 0),
(11, 1, 'Other', 0),
(12, 1, 'EMI', 0),
(13, 1, 'Premium', 0),
(14, 3, 'Savings', 0),
(15, 3, 'Current', 0);

-- --------------------------------------------------------

--
-- Table structure for table `collection_type`
--

CREATE TABLE `collection_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_type`
--

INSERT INTO `collection_type` (`id`, `name`, `status`, `deleted`) VALUES
(1, 'unit', 'Active', 0),
(2, 'transaction_type', 'Active', 0),
(3, 'Account Type', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `receipt_url` varchar(255) DEFAULT NULL,
  `receipt_name` varchar(255) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `user_id`, `category_id`, `quantity`, `unit`, `purchase_date`, `receipt_url`, `receipt_name`, `remark`, `amount`, `deleted`) VALUES
(5, 1, 9, 2, 2, '2018-11-04', '', '', '', 54, 0),
(6, 1, 2, 1, 1, '2017-09-02', '', '', '', 100, 0),
(7, 1, 29, 1, 4, '2017-09-04', '', '', '', 1700, 0),
(8, 1, 2, 2, 1, '2017-09-06', '', '', '', 200, 0),
(9, 1, 7, 1, 4, '2017-09-11', '', '', '', 399, 0),
(10, 1, 2, 1, 1, '2017-09-12', '', '', '', 200, 0),
(11, 1, 11, 1, 4, '2017-09-14', '', '', 'Dal Bati', 160, 0),
(12, 1, 15, 1, 4, '2017-09-07', '', '', '', 250, 0),
(13, 1, 11, 1, 4, '2017-09-18', '', '', 'Dal Bati', 260, 0),
(14, 1, 38, 1, 4, '2017-09-18', '', '', 'Dentist Fees', 10000, 0),
(15, 1, 2, 1, 1, '2017-09-19', '', '', '', 200, 0),
(16, 1, 23, 1, 4, '2017-09-19', '', '', 'Plastic Box', 60, 0),
(17, 1, 47, 0, 4, '2017-09-19', '', '', 'Swati College Fees', 3500, 0),
(18, 1, 2, 1, 4, '2017-09-25', '', '', '', 200, 0),
(19, 1, 11, 1, 4, '2017-09-27', '', '', '', 200, 0),
(20, 1, 31, 1, 4, '2017-09-30', '', '', '', 1650, 0),
(21, 1, 2, 1, 1, '2018-11-02', '', '', '', 200, 0),
(22, 1, 48, 1, 1, '2018-11-02', '', '', '', 20, 0),
(23, 1, 49, 3, 1, '2018-11-02', '', '', '', 33, 0),
(25, 2, 2, 1, 1, '2018-11-08', '', '', '', 200, 0),
(26, 1, 37, 1, 4, '2018-11-09', '', '', '', 100, 0),
(27, 1, 14, 1, 13, '2019-04-10', 'http://localhost/exp/assets/uploads/attachments/1554311843_IMG_3092.jpg', '1554311843_IMG_3092.jpg', 'Test', 50, 0),
(28, 1, 3, 1, 4, '2019-03-22', 'http://localhost/exp/assets/uploads/attachments/1554311919_BHAMASHAH.PNG', '1554311919_BHAMASHAH.PNG', 'Apple iPhone', 19900, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Insurance', 'Active', 0, '2018-10-20 16:12:33', '2018-10-20 16:12:06'),
(2, 1, 'Petrol', 'Active', 0, '2018-10-20 16:13:22', '2018-10-20 16:13:22'),
(3, 2, 'Mobile', 'Active', 0, '2018-10-20 16:45:32', '2018-10-20 16:45:32'),
(7, 2, 'Mobile Recharge', 'Active', 0, '2018-10-21 08:49:19', '2018-10-21 08:49:19'),
(9, 3, 'Sugar', 'Active', 0, '2018-10-21 09:06:22', '2018-10-21 09:06:22'),
(10, 2, 'TV Recharge', 'Active', 0, '2018-10-21 09:11:10', '2018-10-21 09:11:10'),
(11, 4, 'Lunch', 'Active', 0, '2018-11-03 18:29:13', '2018-11-03 18:29:13'),
(12, 4, 'Dinner', 'Active', 0, '2018-11-05 04:27:50', '2018-11-05 04:27:50'),
(13, 4, 'Eating Out', 'Active', 0, '2018-11-05 04:27:57', '2018-11-05 04:27:57'),
(14, 4, 'Beverages', 'Active', 0, '2018-11-05 04:28:09', '2018-11-05 04:28:09'),
(15, 4, 'Vegetables', 'Active', 0, '2018-11-05 04:28:18', '2018-11-05 04:28:18'),
(16, 4, 'Coconut Juice', 'Active', 0, '2018-11-05 04:28:27', '2018-11-05 04:28:27'),
(17, 4, 'Dahi', 'Active', 0, '2018-11-05 04:28:36', '2018-11-05 04:28:36'),
(18, 5, 'Coaching', 'Active', 0, '2018-11-05 04:31:57', '2018-11-05 04:31:57'),
(19, 1, 'BUs', 'Active', 0, '2018-11-05 04:32:21', '2018-11-05 04:32:21'),
(20, 1, 'Taxi', 'Active', 0, '2018-11-05 04:32:29', '2018-11-05 04:32:29'),
(21, 1, 'Cab', 'Active', 0, '2018-11-05 04:32:35', '2018-11-05 04:32:35'),
(22, 1, 'Bike Maintainence', 'Active', 0, '2018-11-05 04:32:52', '2018-11-05 04:32:52'),
(23, 6, 'Appliances', 'Active', 0, '2018-11-05 04:33:23', '2018-11-05 04:33:23'),
(24, 6, 'Furniture', 'Active', 0, '2018-11-05 04:33:30', '2018-11-05 04:33:30'),
(25, 6, 'Toiletries', 'Active', 0, '2018-11-05 04:33:41', '2018-11-05 04:33:41'),
(26, 6, 'Photo Frames', 'Active', 0, '2018-11-05 04:33:51', '2018-11-05 04:33:51'),
(27, 7, 'Clothing', 'Active', 0, '2018-11-05 04:34:11', '2018-11-05 04:34:11'),
(28, 7, 'Fashion', 'Active', 0, '2018-11-05 04:34:17', '2018-11-05 04:34:17'),
(29, 7, 'Shoes', 'Active', 0, '2018-11-05 04:34:22', '2018-11-05 04:34:22'),
(30, 7, 'Laundry', 'Active', 0, '2018-11-05 04:34:29', '2018-11-05 04:34:29'),
(31, 8, 'Cosmentics', 'Active', 0, '2018-11-05 04:34:42', '2018-11-05 04:34:42'),
(32, 8, 'Makeup', 'Active', 0, '2018-11-05 04:34:53', '2018-11-05 04:34:53'),
(33, 8, 'Accessories', 'Active', 0, '2018-11-05 04:35:00', '2018-11-05 04:35:00'),
(34, 9, 'Health', 'Active', 0, '2018-11-05 04:35:27', '2018-11-05 04:35:27'),
(35, 9, 'Hospital', 'Active', 0, '2018-11-05 04:35:34', '2018-11-05 04:35:34'),
(36, 9, 'Test Checkup', 'Active', 0, '2018-11-05 04:35:56', '2018-11-05 04:35:56'),
(37, 9, 'Medicine', 'Active', 0, '2018-11-05 04:36:04', '2018-11-05 04:36:04'),
(38, 9, 'Dentist', 'Active', 0, '2018-11-05 04:36:10', '2018-11-05 04:36:10'),
(39, 10, 'School Fess', 'Active', 0, '2018-11-05 04:36:33', '2018-11-05 04:36:33'),
(40, 10, 'Taxi Fare', 'Active', 0, '2018-11-05 04:36:39', '2018-11-05 04:36:39'),
(41, 10, 'Books notebooks', 'Active', 0, '2018-11-05 04:36:47', '2018-11-05 04:36:47'),
(42, 10, 'Stationary', 'Active', 0, '2018-11-05 04:36:54', '2018-11-05 04:36:54'),
(43, 10, 'Uniform', 'Active', 0, '2018-11-05 04:37:10', '2018-11-05 04:37:10'),
(44, 11, 'LIC Premium', 'Active', 0, '2018-11-05 04:37:32', '2018-11-05 04:37:32'),
(45, 11, 'House Premium', 'Active', 0, '2018-11-05 04:37:44', '2018-11-05 04:37:44'),
(46, 11, 'Mobile Premium', 'Active', 0, '2018-11-05 04:37:52', '2018-11-05 04:37:52'),
(47, 10, 'College Fees', 'Active', 0, '2018-11-05 07:27:21', '2018-11-05 07:27:21'),
(48, 4, 'Milk', 'Active', 0, '2018-11-05 15:33:25', '2018-11-05 15:33:25'),
(49, 4, 'Butter Milk', 'Active', 0, '2018-11-05 15:34:24', '2018-11-05 15:34:24'),
(50, 4, 'Wheat Flour', 'Active', 0, '2018-11-08 08:07:17', '2018-11-08 08:07:17'),
(51, 4, 'Cake', 'Active', 0, '2019-03-25 17:59:57', '2019-03-25 17:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `user_type`, `profile_pic`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Sanjay', 'Kumar', 'engineer.sanjay20@gmail.com', '202cb962ac59075b964b07152d234b70', '7014568025', 2, '', 1, 0, '2018-10-14', '2018-10-14'),
(2, 'Ram Murat', 'Chaurasia', 'rammurat@gmail.com', '$2y$10$ZhhfxU9a3ctEauJfrLyxOOK8HCqYYY4BueufnPtfqB1FjZYNQiiOa', '9413741807', 2, '', 1, 0, '2018-11-08', '2018-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `userlogged`
--

CREATE TABLE `userlogged` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phpsessid` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `logged_in` varchar(50) NOT NULL,
  `logged_out` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogged`
--

INSERT INTO `userlogged` (`id`, `user_id`, `phpsessid`, `ip_address`, `logged_in`, `logged_out`) VALUES
(1, 1, '0', '0', '0', ''),
(2, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-14 22:17:14', '2018-10-21 12:24:00'),
(3, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-14 22:18:34', '2018-10-21 12:24:00'),
(4, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-15 21:36:33', '2018-10-21 12:24:00'),
(5, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-15 21:50:28', '2018-10-21 12:24:00'),
(6, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-16 22:15:07', '2018-10-21 12:24:00'),
(7, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-16 22:26:44', '2018-10-21 12:24:00'),
(8, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-16 22:33:53', '2018-10-21 12:24:00'),
(9, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-16 22:36:57', '2018-10-21 12:24:00'),
(10, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-20 12:21:49', '2018-10-21 12:24:00'),
(11, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-20 19:30:53', '2018-10-21 12:24:00'),
(12, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-20 20:24:43', '2018-10-21 12:24:00'),
(13, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-20 21:27:06', '2018-10-21 12:24:00'),
(14, 1, 'nnln3hc7t35eq86ftqcck1u6e3', '::1', '2018-10-21 12:24:05', ''),
(15, 1, 'fp4kj5g372jd5t4ikjou01t9f3', '::1', '2018-10-22 20:56:58', '2018-10-25 22:45:16'),
(16, 1, 'fp4kj5g372jd5t4ikjou01t9f3', '::1', '2018-10-25 22:45:27', ''),
(17, 1, 'beh632mu2qjq46o2ioheicmcb6', '::1', '2018-11-03 17:46:34', ''),
(18, 1, 'beh632mu2qjq46o2ioheicmcb6', '::1', '2018-11-03 21:56:04', ''),
(19, 1, 'i50k2747789u4epefegu4mv1q4', '::1', '2018-11-04 21:31:47', ''),
(20, 1, 'ehh4ttgup2ot9c3as12di7hq12', '::1', '2018-11-05 12:13:02', ''),
(21, 1, '5evbqghugbd5sb3g2mr85vk437', '::1', '2018-11-06 22:59:44', ''),
(22, 1, 'l4gea5n7ma43k9970thdrerkn6', '::1', '2018-11-08 09:55:56', '2018-11-08 20:32:47'),
(23, 1, 'l4gea5n7ma43k9970thdrerkn6', '::1', '2018-11-08 13:38:21', '2018-11-08 20:32:47'),
(24, 1, 'l4gea5n7ma43k9970thdrerkn6', '::1', '2018-11-08 13:38:36', '2018-11-08 20:32:47'),
(25, 2, 'l4gea5n7ma43k9970thdrerkn6', '::1', '2018-11-08 20:33:00', '2018-11-08 20:35:27'),
(26, 1, 'l4gea5n7ma43k9970thdrerkn6', '::1', '2018-11-08 20:35:32', ''),
(27, 1, 'vqu10v0t3eig2skp1786oe4945', '192.168.225.230', '2018-11-08 23:38:27', ''),
(28, 1, '59uuev31nvveviudr67t5p6at1', '::1', '2018-11-16 11:11:54', ''),
(29, 1, '5bp8fi5qqpveba1dsr9hlgtn83', '::1', '2018-12-06 21:01:40', ''),
(30, 1, 'kjgjfhp5b9boj7fsmgq4c1bea2', '::1', '2018-12-29 18:25:39', '2018-12-29 18:26:13'),
(31, 1, 'kjgjfhp5b9boj7fsmgq4c1bea2', '::1', '2018-12-29 19:07:49', ''),
(32, 1, 'qc699t6gaeeipcs0md33lc6j02', '::1', '2019-03-06 19:56:36', ''),
(33, 1, '2ak2otkinr51bbk8he0c7qe3a6', '::1', '2019-03-17 21:05:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_master`
--
ALTER TABLE `account_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `account_transaction`
--
ALTER TABLE `account_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collectiontype_id` (`collectiontype_id`);

--
-- Indexes for table `collection_type`
--
ALTER TABLE `collection_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit` (`unit`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id` (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type` (`user_type`);

--
-- Indexes for table `userlogged`
--
ALTER TABLE `userlogged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_master`
--
ALTER TABLE `account_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_transaction`
--
ALTER TABLE `account_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `collection_type`
--
ALTER TABLE `collection_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlogged`
--
ALTER TABLE `userlogged`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_master`
--
ALTER TABLE `account_master`
  ADD CONSTRAINT `account_master_ibfk_1` FOREIGN KEY (`type`) REFERENCES `collections` (`id`);

--
-- Constraints for table `account_transaction`
--
ALTER TABLE `account_transaction`
  ADD CONSTRAINT `account_transaction_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_master` (`id`);

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_ibfk_1` FOREIGN KEY (`collectiontype_id`) REFERENCES `collection_type` (`id`);

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_type` (`id`);

--
-- Constraints for table `userlogged`
--
ALTER TABLE `userlogged`
  ADD CONSTRAINT `userlogged_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
