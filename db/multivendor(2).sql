-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 05:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multivendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `attributes_id` int(11) NOT NULL,
  `attributes_name` varchar(100) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`attributes_id`, `attributes_name`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'S', 1, 0, '2022-08-03 03:33:09', '0000-00-00 00:00:00', 1),
(2, 'M', 1, 0, '2022-08-03 03:34:51', '0000-00-00 00:00:00', 1),
(3, 'L', 1, 0, '2022-08-03 03:34:57', '0000-00-00 00:00:00', 1),
(4, 'XL', 1, 0, '2022-08-03 03:35:02', '0000-00-00 00:00:00', 1),
(5, 'XXL', 1, 1, '2022-08-02 18:35:46', '2022-08-03 03:35:46', 1),
(6, 'RED', 1, 0, '2022-08-03 03:42:42', '0000-00-00 00:00:00', 1),
(7, 'YELLOW', 1, 0, '2022-08-03 03:42:50', '0000-00-00 00:00:00', 1),
(8, 'PINK', 1, 0, '2022-08-03 03:42:55', '0000-00-00 00:00:00', 1),
(9, 'BLUE', 1, 0, '2022-08-03 03:43:01', '0000-00-00 00:00:00', 1),
(10, 'BLACK', 1, 0, '2022-08-03 03:43:10', '0000-00-00 00:00:00', 1),
(11, 'WHITE', 1, 0, '2022-08-03 03:43:16', '0000-00-00 00:00:00', 1),
(12, 'OARNAGE', 1, 0, '2022-08-03 03:43:29', '0000-00-00 00:00:00', 1),
(13, 'BROWN', 1, 0, '2022-08-03 03:43:48', '0000-00-00 00:00:00', 1),
(14, 'COTTON', 1, 0, '2022-08-03 03:46:05', '0000-00-00 00:00:00', 1),
(15, 'POLYESTER', 1, 0, '2022-08-03 03:46:24', '0000-00-00 00:00:00', 1),
(16, 'SILK', 1, 0, '2022-08-03 03:46:35', '0000-00-00 00:00:00', 1),
(17, 'BAMBOO', 1, 0, '2022-08-03 03:46:46', '0000-00-00 00:00:00', 1),
(18, 'HEMP', 1, 0, '2022-08-03 03:46:55', '0000-00-00 00:00:00', 1),
(19, 'WOOL', 1, 0, '2022-08-03 03:47:02', '0000-00-00 00:00:00', 1),
(20, 'LINEN', 1, 0, '2022-08-03 03:47:10', '0000-00-00 00:00:00', 1),
(21, 'KHADI', 1, 0, '2022-08-03 03:47:50', '0000-00-00 00:00:00', 1),
(22, 'DENIM', 1, 0, '2022-08-03 03:48:02', '0000-00-00 00:00:00', 1),
(23, 'SATIN', 1, 0, '2022-08-03 03:48:19', '0000-00-00 00:00:00', 1),
(24, 'ORGANZA', 1, 0, '2022-08-03 03:48:43', '0000-00-00 00:00:00', 1),
(25, 'CREPE', 1, 0, '2022-08-03 03:48:57', '0000-00-00 00:00:00', 1),
(26, 'GEORGETTE', 1, 0, '2022-08-03 03:49:19', '0000-00-00 00:00:00', 1),
(27, 'CANVAS', 1, 0, '2022-08-03 03:49:31', '0000-00-00 00:00:00', 1),
(28, 'CHIFFON', 1, 0, '2022-08-03 03:50:25', '0000-00-00 00:00:00', 1),
(29, 'JERSEY', 1, 0, '2022-08-03 03:51:06', '0000-00-00 00:00:00', 1),
(30, 'POLY-COTTON BLEND', 1, 0, '2022-08-03 03:51:45', '0000-00-00 00:00:00', 1),
(31, 'LYCRA', 1, 0, '2022-08-03 03:52:12', '0000-00-00 00:00:00', 1),
(32, 'TWILL', 1, 0, '2022-08-03 03:53:25', '0000-00-00 00:00:00', 1),
(33, 'HALF SLEEVE', 1, 0, '2022-08-03 03:56:22', '0000-00-00 00:00:00', 1),
(34, 'LONG SLEEVE', 1, 0, '2022-08-03 03:56:33', '0000-00-00 00:00:00', 1),
(35, 'POLO COLLAR', 1, 0, '2022-08-03 03:56:41', '0000-00-00 00:00:00', 1),
(36, 'V-NECK', 1, 0, '2022-08-03 03:56:49', '0000-00-00 00:00:00', 1),
(37, 'WIDE NECK', 1, 0, '2022-08-03 03:56:58', '0000-00-00 00:00:00', 1),
(38, 'YOKE NECK', 1, 0, '2022-08-03 03:57:09', '0000-00-00 00:00:00', 1),
(39, 'DOUCHE BAG NECK', 1, 0, '2022-08-03 03:57:19', '0000-00-00 00:00:00', 1),
(40, 'HENLEY COLLAR', 1, 0, '2022-08-03 03:57:26', '0000-00-00 00:00:00', 1),
(41, 'BASEBALL', 1, 0, '2022-08-03 03:57:34', '0000-00-00 00:00:00', 1),
(42, 'RAGLAN SLEEVE', 1, 0, '2022-08-03 03:57:41', '0000-00-00 00:00:00', 1),
(43, 'TURTLE NECK', 1, 0, '2022-08-03 03:57:49', '0000-00-00 00:00:00', 1),
(44, 'RINGER', 1, 0, '2022-08-03 03:57:58', '0000-00-00 00:00:00', 1),
(45, 'CAP SLEEVE', 1, 0, '2022-08-03 03:58:06', '0000-00-00 00:00:00', 1),
(46, 'CHEST/SHOULDER FIT', 1, 0, '2022-08-03 04:00:08', '0000-00-00 00:00:00', 1),
(47, 'NECK FIT', 1, 0, '2022-08-03 04:00:18', '0000-00-00 00:00:00', 1),
(48, 'SLEEVE FIT', 1, 0, '2022-08-03 04:00:28', '0000-00-00 00:00:00', 1),
(49, 'WAIST FIT', 1, 0, '2022-08-03 04:00:36', '0000-00-00 00:00:00', 1),
(50, 'SLIM FIT.', 1, 0, '2022-08-03 04:01:35', '0000-00-00 00:00:00', 1),
(51, 'REGULAR FIT.', 1, 0, '2022-08-03 04:01:45', '0000-00-00 00:00:00', 1),
(52, 'SKINNY FIT', 1, 0, '2022-08-03 04:01:58', '0000-00-00 00:00:00', 1),
(53, '24 INCH', 1, 0, '2022-08-03 04:05:39', '0000-00-00 00:00:00', 1),
(54, '26 INCH', 1, 0, '2022-08-03 04:05:51', '0000-00-00 00:00:00', 1),
(55, '28 INCH', 1, 0, '2022-08-03 04:05:58', '0000-00-00 00:00:00', 1),
(56, '30 INCH', 1, 0, '2022-08-03 04:06:07', '0000-00-00 00:00:00', 1),
(57, '40 INCH', 1, 0, '2022-08-03 04:06:15', '0000-00-00 00:00:00', 1),
(58, '42 INCH', 1, 0, '2022-08-03 04:06:22', '0000-00-00 00:00:00', 1),
(59, '44 INCH', 1, 0, '2022-08-03 04:06:29', '0000-00-00 00:00:00', 1),
(60, '46 INCH', 1, 0, '2022-08-03 04:06:36', '0000-00-00 00:00:00', 1),
(61, '2 GB', 1, 0, '2022-08-03 04:09:57', '0000-00-00 00:00:00', 1),
(62, '4 GB', 1, 0, '2022-08-03 04:10:07', '0000-00-00 00:00:00', 1),
(63, '8 GB', 1, 0, '2022-08-03 04:10:14', '0000-00-00 00:00:00', 1),
(64, '16 GB', 1, 0, '2022-08-03 04:10:21', '0000-00-00 00:00:00', 1),
(65, '32 GB', 1, 0, '2022-08-03 04:10:30', '0000-00-00 00:00:00', 1),
(66, '216 GB', 1, 0, '2022-08-03 04:10:43', '0000-00-00 00:00:00', 1),
(67, '512 GB', 1, 0, '2022-08-03 04:10:50', '0000-00-00 00:00:00', 1),
(68, '1 TB', 1, 0, '2022-08-03 06:04:48', '0000-00-00 00:00:00', 1),
(69, '1.5 TB', 1, 0, '2022-08-03 06:04:55', '0000-00-00 00:00:00', 1),
(70, '2 TB', 1, 0, '2022-08-03 06:05:02', '0000-00-00 00:00:00', 1),
(71, '4 TB', 1, 0, '2022-08-03 06:05:10', '0000-00-00 00:00:00', 1),
(72, '5 TB', 1, 0, '2022-08-03 06:05:15', '0000-00-00 00:00:00', 1),
(73, 'G', 1, 0, '2022-08-03 06:26:49', '0000-00-00 00:00:00', 1),
(74, 'KG', 1, 0, '2022-08-03 06:26:59', '0000-00-00 00:00:00', 1),
(75, 'ML', 1, 0, '2022-08-03 06:27:11', '0000-00-00 00:00:00', 1),
(76, 'L', 1, 0, '2022-08-03 06:27:15', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL COMMENT 'unique id to identify the row of this table',
  `blog_title` text COMMENT 'title of the blog',
  `short_code` text,
  `blog_author` varchar(45) DEFAULT NULL COMMENT 'owner of the blog',
  `blog_date` timestamp NULL DEFAULT NULL COMMENT 'date of the blog',
  `blog_image` varchar(45) DEFAULT NULL COMMENT 'image of the blog',
  `short_description` text NOT NULL,
  `description` text COMMENT 'content of the blog',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` text,
  `created_by` int(11) DEFAULT NULL COMMENT 'id of user who inserted this data',
  `modified_by` int(11) DEFAULT NULL COMMENT 'id of user who updated this data',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data inserted date',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'data updated date',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'field Is Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='blog details';

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(9) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `brand_logo` text,
  `created_by` int(9) NOT NULL,
  `modified_by` int(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `short_code`, `brand_logo`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'Brand -1', 'brand-1', '', 1, 1, '2022-07-23 04:53:50', '2022-07-30 06:48:52', 1),
(2, 'Brand -2', 'brand-2', '', 1, 0, '2022-07-23 04:53:57', '0000-00-00 00:00:00', 1),
(3, 'Brand -3', 'brand-3', '', 1, 0, '2022-07-23 04:54:03', '0000-00-00 00:00:00', 1),
(4, 'Brand -4', 'brand-4', '', 1, 0, '2022-07-23 04:54:09', '0000-00-00 00:00:00', 1),
(5, 'Brand -5', 'brand-5', '', 1, 0, '2022-07-23 04:54:17', '0000-00-00 00:00:00', 1),
(6, 'Brand -6', 'brand-6', 'ugl1.png', 1, 1, '2022-07-26 04:16:22', '2022-07-29 03:01:35', 1),
(7, 'Brand -6', 'brand-6', 'tur.png', 3, 3, '2022-07-30 01:59:12', '2022-07-30 02:12:25', 1),
(8, 'Brand -7', 'brand-7', '', 2, 2, '2022-07-30 04:13:31', '2022-07-31 02:09:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(9) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `child_category` text,
  `hierarchy` text,
  `brand_id` varchar(100) DEFAULT NULL,
  `element_id` text,
  `top_menu` tinyint(1) DEFAULT NULL,
  `menu_position` int(5) DEFAULT NULL,
  `description` text,
  `category_image` text,
  `created_by` int(9) NOT NULL,
  `modified_by` int(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `short_code`, `parent_category_id`, `child_category`, `hierarchy`, `brand_id`, `element_id`, `top_menu`, `menu_position`, `description`, `category_image`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'Category -1', 'category-1', 0, '5,6,7,23', '1', '', '1,2,3,4,5,6', NULL, NULL, 'Category -1', 'coronavirus_1638032825.png', 1, 1, '2022-08-02 06:32:50', '2022-08-03 04:37:43', 1),
(2, 'Category-2', 'category-2', 0, '8,9,10,10', '2', '', '9', NULL, NULL, 'Category-2', '', 1, 1, '2022-08-02 06:34:12', '2022-08-03 07:34:34', 1),
(3, 'Category -3', 'category-3', 0, '11,12,13', '3', '', '8', NULL, NULL, 'Category -3', '', 1, 1, '2022-08-02 06:34:31', '2022-08-03 07:34:45', 1),
(4, 'Category-4', 'category-4', 0, '14,15,16', '4', '', '7', NULL, NULL, 'Category-4', '', 1, 1, '2022-08-02 06:34:54', '2022-08-03 07:35:00', 1),
(5, 'Category-1.1', 'category-1.1', 1, '17,18,19', '1,5', '', NULL, NULL, NULL, 'Category-1.1', '', 1, 1, '2022-08-02 06:35:51', '2022-08-01 21:46:18', 1),
(6, 'Category-1.2', 'category-1.2', 1, NULL, '1,6', '', NULL, NULL, NULL, 'Category-1.2', '', 1, 0, '2022-08-02 06:37:59', '2022-08-01 21:39:54', 1),
(7, 'Category-1.3', 'category-1.3', 1, NULL, '1,7', '', NULL, NULL, NULL, '', '', 1, 0, '2022-08-02 06:39:31', '2022-08-01 21:39:31', 1),
(8, 'Category-2.1', 'category-2.1', 2, '20,21,22', '2,8', '', NULL, NULL, NULL, 'Category-2.1', '', 1, 0, '2022-08-02 06:40:15', '2022-08-01 21:47:58', 1),
(9, 'Category-2.2', 'category-2.2', 2, NULL, '2,9', '', NULL, NULL, NULL, 'Category-2.2', '', 1, 0, '2022-08-02 06:41:17', '2022-08-01 21:41:17', 1),
(10, 'Category-2.3', 'category-2.3', 2, NULL, '2,10', '', NULL, NULL, NULL, 'Category-2.3', '', 1, 1, '2022-08-02 06:41:40', '2022-08-02 06:41:53', 1),
(11, 'Category-3.1', 'category-3.1', 3, NULL, '3,11', '', NULL, NULL, NULL, 'Category-3.1', '', 1, 0, '2022-08-02 06:42:20', '2022-08-01 21:42:20', 1),
(12, 'Category-3.2', 'category-3.2', 3, NULL, '3,12', '', NULL, NULL, NULL, 'Category-3.2', '', 1, 0, '2022-08-02 06:42:32', '2022-08-01 21:42:32', 1),
(13, 'Category-3.3', 'category-3.3', 3, NULL, '3,13', '', NULL, NULL, NULL, 'Category-3.3', '', 1, 0, '2022-08-02 06:42:45', '2022-08-01 21:42:45', 1),
(14, 'Category-4.1', 'category-4.1', 4, NULL, '4,14', '', NULL, NULL, NULL, 'Category-4.1', '', 1, 0, '2022-08-02 06:43:02', '2022-08-01 21:43:02', 1),
(15, 'Category-4.2', 'category-4.2', 4, NULL, '4,15', '', NULL, NULL, NULL, 'Category-4.2', '', 1, 0, '2022-08-02 06:43:19', '2022-08-01 21:43:19', 1),
(16, 'Category-4.3', 'category-4.3', 4, NULL, '4,16', '', NULL, NULL, NULL, 'Category-4.3', '', 1, 0, '2022-08-02 06:43:30', '2022-08-01 21:43:30', 1),
(17, 'Category-1.1.1', 'category-1.1.1', 5, NULL, '1,5,17', '', NULL, NULL, NULL, 'Category-1.1.1', '', 1, 0, '2022-08-02 06:44:48', '2022-08-01 21:44:48', 1),
(18, 'Category-1.1.2', 'category-1.1.2', 5, NULL, '1,5,18', '', NULL, NULL, NULL, 'Category-1.1.2', '', 1, 0, '2022-08-02 06:46:03', '2022-08-01 21:46:03', 1),
(19, 'Category-1.1.3', 'category-1.1.3', 5, NULL, '1,5,19', '', NULL, NULL, NULL, 'Category-1.1.3', '', 1, 0, '2022-08-02 06:46:18', '2022-08-01 21:46:18', 1),
(20, 'Category-2.1.1', 'category-2.1.1', 8, NULL, '2,8,20', '', NULL, NULL, NULL, 'Category-2.1.1', '', 1, 0, '2022-08-02 06:47:24', '2022-08-01 21:47:24', 1),
(21, 'Category-2.1.2', 'category-2.1.2', 8, NULL, '2,8,21', '', NULL, NULL, NULL, 'Category-2.1.2', '', 1, 0, '2022-08-02 06:47:39', '2022-08-01 21:47:39', 1),
(22, 'Category-2.1.3', 'category-2.1.3', 8, NULL, '2,8,22', '', NULL, NULL, NULL, 'Category-2.1.3', '', 1, 0, '2022-08-02 06:47:57', '2022-08-01 21:47:58', 1),
(23, 'rr', 'rr', 1, NULL, '1,23', '', '', NULL, NULL, '', '', 1, 1, '2022-08-03 07:32:55', '2022-08-03 08:01:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `address` text,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pincode` int(7) DEFAULT NULL,
  `country` int(7) DEFAULT NULL,
  `address_type` varchar(100) DEFAULT NULL,
  `created_by` int(5) DEFAULT NULL,
  `modified_by` int(5) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_cart`
--

CREATE TABLE `customer_cart` (
  `cart_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `net_price` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `show_password` text,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`customer_id`, `customer_name`, `gender`, `mobile`, `email`, `password`, `show_password`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'Roshni Mistry', 'female', '1472583699', 'roshni123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, NULL, '2022-07-29 04:05:23', '0000-00-00 00:00:00', 1),
(2, 'Dainik Tandel', 'male', '8527419663', 'dainik@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', NULL, NULL, '2022-07-28 22:56:03', '2022-07-29 07:35:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_status`
--

CREATE TABLE `delivery_status` (
  `delivery_status_id` int(11) NOT NULL COMMENT 'delivery status unique identification number',
  `delivery_status` varchar(45) NOT NULL COMMENT 'delivery_status name',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'save delivery status active or deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='delivery status table';

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `invoice_id` int(7) NOT NULL,
  `customer_id` int(9) NOT NULL,
  `order_id` int(5) NOT NULL,
  `invoice_number` varchar(45) NOT NULL,
  `invoice_no` varchar(45) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `menu_link` varchar(50) COLLATE utf8_bin NOT NULL,
  `menu_icon` varchar(100) COLLATE utf8_bin NOT NULL,
  `menu_position` int(10) DEFAULT NULL,
  `submenu_id` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `submenu_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `role_id` int(10) NOT NULL,
  `menu_add_by` int(10) NOT NULL,
  `menu_update_by` int(10) NOT NULL,
  `menu_add_date` datetime NOT NULL,
  `menu_update_date` datetime NOT NULL,
  `menu_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`menu_id`, `menu_name`, `menu_link`, `menu_icon`, `menu_position`, `submenu_id`, `submenu_name`, `role_id`, `menu_add_by`, `menu_update_by`, `menu_add_date`, `menu_update_date`, `menu_status`) VALUES
(1, 'Brand', '#', 'tag', 1, '1,2', '', 0, 1, 1, '2022-07-21 01:28:33', '2022-07-22 00:17:09', 1),
(2, 'category', '#', 'list', 2, '3,4', '', 0, 1, 1, '2022-07-21 01:28:55', '2022-07-26 20:35:58', 1),
(3, 'Elements', '#', 'slack', 3, '5,6', '', 0, 1, 1, '2022-07-21 20:13:47', '2022-08-02 19:04:35', 1),
(4, 'Unit', '#', 'thermometer', 4, '7,8', '', 0, 1, 1, '2022-07-21 20:13:56', '2022-07-26 20:40:09', 1),
(5, 'attributes', '#', 'shield', 5, '9,10', '', 0, 1, 1, '2022-07-21 20:14:10', '2022-08-02 20:14:47', 1),
(6, 'Product', '#', 'package', 6, '11,12', '', 0, 1, 1, '2022-07-21 23:58:06', '2022-07-26 20:43:07', 1),
(7, 'Order', '#', 'shopping-cart', 7, '13', '', 0, 1, 1, '2022-07-21 23:58:22', '2022-07-26 20:43:54', 1),
(8, 'Blog', '#', 'rss', 8, '14,15', '', 0, 1, 1, '2022-07-21 23:58:39', '2022-07-26 21:01:20', 1),
(9, 'Testimonial', '#', 'book-open', 9, '16,17', '', 0, 1, 1, '2022-07-22 00:00:41', '2022-07-26 20:48:25', 1),
(10, 'Setting', '#', 'settings', 11, '18,19,20,23', '', 0, 1, 1, '2022-07-24 11:08:15', '2022-07-26 20:49:36', 1),
(11, 'Vendor', 'vendor', 'users', 10, '21,22', '', 0, 1, 1, '2022-07-26 01:29:16', '2022-07-27 00:46:19', 1),
(12, 'Slider', 'slider', 'sliders', 12, NULL, '', 0, 1, 1, '2022-07-29 01:19:18', '2022-07-29 01:23:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(5) NOT NULL,
  `order_number` int(10) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `total_quantity` int(5) NOT NULL,
  `total_amount` varchar(45) NOT NULL,
  `gst_amount` varchar(45) DEFAULT NULL,
  `ship_amount` varchar(45) DEFAULT NULL,
  `grand_total` varchar(45) DEFAULT NULL,
  `bill_id` int(7) NOT NULL COMMENT 'Order bill address unique number',
  `order_date` date NOT NULL,
  `delivery_status_id` int(11) NOT NULL COMMENT 'delivery status unique identification number',
  `created_by` int(5) NOT NULL,
  `modified_by` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orderdetail_id` int(7) NOT NULL,
  `order_id` int(7) NOT NULL,
  `product_id` int(7) NOT NULL,
  `quantity` int(7) NOT NULL,
  `net_price` varchar(20) NOT NULL,
  `created_by` int(7) NOT NULL,
  `modified_by` int(7) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(7) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `orderID` text,
  `order_id` int(11) NOT NULL,
  `total_pay_amount` varchar(45) NOT NULL,
  `payment_date` date NOT NULL,
  `pay_status` varchar(45) NOT NULL,
  `created_by` int(7) NOT NULL,
  `modified_by` int(7) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(9) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_code` varchar(45) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text,
  `vendor_id` int(11) DEFAULT NULL,
  `brand_id` int(9) DEFAULT NULL,
  `category_id` int(9) NOT NULL,
  `element_id` text,
  `attributes_id` text,
  `mrp_price` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `net_price` varchar(45) DEFAULT NULL,
  `tag` varchar(150) DEFAULT NULL,
  `tax` varchar(45) DEFAULT NULL,
  `image` text,
  `is_new_product` int(2) DEFAULT NULL,
  `is_popular_product` int(2) DEFAULT NULL,
  `is_feature_product` int(2) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` text,
  `created_by` int(9) NOT NULL,
  `modified_by` int(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_code`, `short_code`, `short_description`, `description`, `vendor_id`, `brand_id`, `category_id`, `element_id`, `attributes_id`, `mrp_price`, `discount`, `net_price`, `tag`, `tax`, `image`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'product-1', '2807197673632', 'product-1', 'Lorem ipsum dolor sit amet', '<p><span style=\'color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis tortor ligula, nec iaculis nulla fringilla eu. Sed id ultricies magna, sed lobortis neque. Nam gravida ultricies dui, feugiat ornare nisl consectetur at.</span></p>', 1, 1, 17, NULL, NULL, '1000', '', '1000', NULL, '0', '04.png', 1, 1, NULL, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,dfdfdtrr', 1, 1, '2022-07-23 06:36:13', '2022-08-03 04:42:29', 1),
(2, 'Product 2', 'PROD234TTRED$', 'product-2', 'fdsfsdfdsfsdfds', '<p>fdfdsfds</p>', NULL, 1, 17, NULL, NULL, '500', '50', '250', NULL, '0', 'Mustard Oil 5 ltr 1.png|Mustard Oil 5 ltr 2.png', 1, 1, 1, '', '', '', 1, 0, '2022-08-03 04:03:03', '2022-08-03 07:33:05', 1),
(3, 'Product 3', 'PRO123OUUER', 'product-3', 'Pruu udso fsdklnfds', '<p>dfs fds fdgdf hd bfgbdfgrf</p>', NULL, 2, 17, NULL, NULL, '500', '50', '250', NULL, '0', 'Mustard Oil 5 ltr 1.png|Mustard Oil 5 ltr 2.png', 1, 1, 0, '', '', '', 1, 0, '2022-08-03 04:54:18', '2022-08-03 08:24:19', 1),
(4, 'ttttttttttttt', 'tttt', 'ttttttttttttt', 'ttttttttttttt', '<p>ttttttttttttttttttttttt</p>', 1, 1, 17, NULL, NULL, '500', '50', '250', NULL, '0', 'Mustard Oil 5 ltr 1.png', 0, 0, 0, '', '', '', 1, 0, '2022-08-04 00:18:33', '2022-08-04 03:48:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_elements`
--

CREATE TABLE `product_elements` (
  `element_id` int(11) NOT NULL,
  `element_name` varchar(45) NOT NULL,
  `attributes` text,
  `display_name` text,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_elements`
--

INSERT INTO `product_elements` (`element_id`, `element_name`, `attributes`, `display_name`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'Size', '1,2,3,4,5', 'Size', 1, 1, '2022-08-02 19:58:36', '2022-08-03 04:58:36', 1),
(2, 'Color', '6,7,8,9,10,11,12,13', 'Color', 1, 0, '2022-08-03 05:39:11', '0000-00-00 00:00:00', 1),
(3, 'Fabric', '14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'Marerial', 1, 0, '2022-08-03 05:40:52', '0000-00-00 00:00:00', 1),
(4, 'T-shirt Type', '33,34,35,36,37,38,39,40,41,42,43,44,45', 'Type', 1, 1, '2022-08-02 20:58:28', '2022-08-03 05:58:28', 1),
(5, 'T-shirt Fits', '46,47,48,49,50,51,52', 'Fits', 1, 0, '2022-08-03 05:59:49', '0000-00-00 00:00:00', 1),
(6, 'Wiast Size (jeans)', '53,54,55,56,57,58,59,60', 'Size', 1, 0, '2022-08-03 06:01:52', '0000-00-00 00:00:00', 1),
(7, 'Capacity', '61,62,63,64,65,66,67,75,76', 'Capacity', 1, 1, '2022-08-02 21:32:49', '2022-08-03 06:32:49', 1),
(8, 'Storage', '62,63,64,65', 'Storage', 1, 1, '2022-08-02 21:05:34', '2022-08-03 06:05:34', 1),
(9, 'Quantity', '73,74,75,76', 'Quantity', 1, 0, '2022-08-03 06:29:17', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_elements_attributes`
--

CREATE TABLE `product_elements_attributes` (
  `elements_attributes_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `attributes_id` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_elements_attributes`
--

INSERT INTO `product_elements_attributes` (`elements_attributes_id`, `product_id`, `element_id`, `attributes_id`, `created`) VALUES
(1, 2, 1, '1,2,3', '2022-08-03 04:03:05'),
(2, 2, 2, '6,7', '2022-08-03 04:03:05'),
(3, 2, 3, '14,15,16', '2022-08-03 04:03:05'),
(4, 2, 4, '33,35', '2022-08-03 04:03:05'),
(5, 2, 5, '46,48', '2022-08-03 04:03:05'),
(6, 3, 2, '6,7,8', '2022-08-03 04:54:19'),
(7, 3, 3, '30,31,32', '2022-08-03 04:54:19'),
(8, 3, 4, '43,44,45', '2022-08-03 04:54:19'),
(9, 3, 5, '49,51', '2022-08-03 04:54:19'),
(10, 3, 6, '54,55', '2022-08-03 04:54:19'),
(11, 4, 1, '2,3', '2022-08-04 00:18:34'),
(12, 4, 2, '7', '2022-08-04 00:18:34'),
(13, 4, 3, '14,15', '2022-08-04 00:18:34'),
(14, 4, 5, '46,47', '2022-08-04 00:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `role_description` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_description`, `created_by`, `updated_by`, `create_at`, `update_at`, `is_active`) VALUES
(1, 'Admin', 'test', 1, 1, '2022-07-19 11:01:04', '2022-07-29 21:49:04', 1),
(2, 'Developer', '#', 1, 1, '2022-07-21 23:25:39', '2022-07-29 01:19:36', 1),
(3, 'Vendor', '#', 1, 1, '2022-07-21 23:26:03', '2022-07-29 21:58:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role_details`
--

CREATE TABLE `role_details` (
  `role_details_id` int(11) NOT NULL,
  `role_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `menu_id` varchar(100) COLLATE utf8_bin NOT NULL,
  `submenu_id` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `role_details`
--

INSERT INTO `role_details` (`role_details_id`, `role_id`, `menu_id`, `submenu_id`, `created_by`, `updated_by`, `create_at`, `update_at`, `is_active`) VALUES
(119, '2', '1', '1,2', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(120, '2', '2', '3,4', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(121, '2', '3', '5,6', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(122, '2', '4', '7,8', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(123, '2', '5', '9,10', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(124, '2', '6', '11,12', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(125, '2', '7', '13', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(126, '2', '8', '14,15', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(127, '2', '9', '16,17', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(128, '2', '10', '18,19,20,23', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(129, '2', '11', '21,22', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(130, '2', '12', '', 1, NULL, '2022-07-29 01:19:36', NULL, 1),
(138, '1', '1', '1,2', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(139, '1', '2', '3', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(140, '1', '3', '5,6', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(141, '1', '4', '7,8', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(142, '1', '5', '9,10', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(143, '1', '6', '11,12', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(144, '1', '7', '13', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(145, '1', '8', '14,15', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(146, '1', '9', '16,17', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(147, '1', '11', '', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(148, '1', '12', '', 1, NULL, '2022-07-29 21:49:04', NULL, 1),
(149, '3', '1', '1,2', 1, NULL, '2022-07-29 21:58:08', NULL, 1),
(150, '3', '2', '3,4', 1, NULL, '2022-07-29 21:58:08', NULL, 1),
(151, '3', '3', '5,6', 1, NULL, '2022-07-29 21:58:08', NULL, 1),
(152, '3', '4', '7,8', 1, NULL, '2022-07-29 21:58:08', NULL, 1),
(153, '3', '5', '9,10', 1, NULL, '2022-07-29 21:58:08', NULL, 1),
(154, '3', '6', '11,12', 1, NULL, '2022-07-29 21:58:08', NULL, 1),
(155, '3', '7', '13', 1, NULL, '2022-07-29 21:58:08', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(100) DEFAULT NULL,
  `slider_title` text,
  `short_description` text,
  `position` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_title`, `short_description`, `position`, `is_active`) VALUES
(1, 'slider-1.jpg', 'Lorem ipsum dolor sit amet,', NULL, 1, 1),
(2, 'slider-2.jpg', 'Lorem ipsum dolor sit amet,', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(7) NOT NULL COMMENT 'unique identification number',
  `product_id` int(7) NOT NULL COMMENT 'product table unique identification number',
  `onhand_quantity` varchar(20) NOT NULL COMMENT 'total on hand quantity',
  `created_by` int(7) NOT NULL COMMENT 'User unique number when add data',
  `modified_by` int(7) NOT NULL COMMENT 'User unique number when update data',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data add date time save',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'data update date time save',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'stock status : 0 - Deactive,  1 - active, 2 - delete  '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `onhand_quantity`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 1, '100', 1, 0, '2022-07-23 06:36:14', '2022-07-22 21:36:14', 1),
(2, 2, '154', 1, 0, '2022-08-03 04:03:05', '2022-08-03 07:33:05', 1),
(3, 3, '784', 1, 0, '2022-08-03 04:54:19', '2022-08-03 08:24:19', 1),
(4, 4, '12', 1, 0, '2022-08-04 00:18:34', '2022-08-04 03:48:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `stock_details_id` int(7) NOT NULL COMMENT 'unique identification number',
  `stock_id` int(7) NOT NULL COMMENT 'stock master unique id',
  `status` int(2) NOT NULL COMMENT 'save status : 1 - Add new stock, 2 - Order stock or minus stock',
  `quantity` int(10) NOT NULL COMMENT 'Quantity',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Add date time when data added'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stock details ';

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`stock_details_id`, `stock_id`, `status`, `quantity`, `created`) VALUES
(1, 1, 1, 100, '2022-07-23 06:36:14'),
(2, 2, 1, 154, '2022-08-03 04:03:05'),
(3, 3, 1, 784, '2022-08-03 04:54:19'),
(4, 4, 1, 12, '2022-08-04 00:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `submenu_details`
--

CREATE TABLE `submenu_details` (
  `submenu_id` int(10) NOT NULL,
  `submenu_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `submenu_link` varchar(100) COLLATE utf8_bin NOT NULL,
  `submenu_icon` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '<i class="append-icon fa fa-fw fa-circle-thin"></i>',
  `submenu_position` int(5) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submenu_details`
--

INSERT INTO `submenu_details` (`submenu_id`, `submenu_name`, `submenu_link`, `submenu_icon`, `submenu_position`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'add brand', 'add-brand', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 06:03:57', '2022-07-22 07:10:02', 1),
(2, 'brand', 'brand', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 1, '2022-07-22 06:04:13', '2022-07-22 07:10:32', 1),
(3, 'add category', 'add-category', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 06:04:24', '2022-07-23 04:53:08', 1),
(4, 'category', 'category', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 1, '2022-07-22 06:04:34', '2022-07-23 04:53:05', 1),
(5, 'add element', 'add-elements', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 06:04:47', '2022-08-03 02:05:11', 1),
(6, 'elements', 'elements', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 1, '2022-07-22 06:05:01', '2022-08-03 02:05:43', 1),
(7, 'add unit', 'add-unit', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 06:05:14', '2022-07-23 04:52:52', 1),
(8, 'unit', 'unit', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 1, '2022-07-22 06:05:26', '2022-07-23 04:52:34', 1),
(9, 'add attributes', 'add-attributes', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 06:05:38', '2022-08-03 03:15:14', 1),
(10, 'attributes', 'attributes', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 1, '2022-07-22 06:05:50', '2022-08-03 03:15:46', 1),
(11, 'add product', 'add-product', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 07:14:08', '2022-07-23 04:51:58', 1),
(12, 'product', 'all-product', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 1, '2022-07-22 07:14:21', '2022-07-29 17:30:11', 1),
(13, 'order', 'order', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 07:14:31', '2022-07-23 04:51:39', 1),
(14, 'Add Blog', '#', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 0, '2022-07-22 07:14:51', '2022-07-29 03:06:00', 1),
(15, 'blog', '#', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 0, '2022-07-22 07:15:03', '2022-07-29 03:05:52', 1),
(16, 'add testimonial', 'add-testimonial', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 1, '2022-07-22 07:15:20', '2022-07-23 04:51:17', 1),
(17, 'testimonial', 'testimonial', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 1, '2022-07-22 07:15:31', '2022-07-26 08:49:49', 1),
(18, 'Menu', 'menu', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 0, '2022-07-27 01:40:54', NULL, 1),
(19, 'Submenu', 'submenu', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 0, '2022-07-27 01:41:24', NULL, 1),
(20, 'Role', 'role', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 3, 1, 0, '2022-07-27 01:41:34', NULL, 1),
(21, 'Vendor', 'vendor', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 2, 1, 0, '2022-07-27 02:05:27', NULL, 1),
(22, 'Add Vendor', 'add-vendor', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 1, 1, 0, '2022-07-27 02:05:40', NULL, 1),
(23, 'User', 'user', '<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>', 4, 1, 0, '2022-07-27 02:29:43', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL COMMENT 'unique id to identify the row of this table',
  `customer_name` varchar(45) DEFAULT NULL COMMENT 'customer name',
  `company_name` varchar(45) DEFAULT NULL COMMENT 'customer''s company name',
  `designation` varchar(100) DEFAULT NULL,
  `customer_review` text COMMENT 'customer''s review',
  `customer_image` varchar(45) DEFAULT NULL COMMENT 'image of the customer',
  `testimonial_date` timestamp NULL DEFAULT NULL COMMENT 'date the customer gave review',
  `created_by` int(11) DEFAULT NULL COMMENT 'id of user who inserted this data',
  `modified_by` int(11) DEFAULT NULL COMMENT 'id of user who updated this data',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data inserted date',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'data updated date',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'field Is Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='review details of client';

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_in` varchar(45) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_in`, `unit`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) VALUES
(1, 'Liter', '1 Ltr', 1, 0, '2022-07-01 10:49:07', '0000-00-00 00:00:00', 1),
(2, 'Liter', '5 Ltr', 1, 0, '2022-07-01 10:49:27', '0000-00-00 00:00:00', 1),
(3, 'Liter', '15 Ltr', 1, 0, '2022-07-01 10:49:41', '0000-00-00 00:00:00', 1),
(4, 'Milliliter', '50 ML', 1, 1, '2022-07-01 10:50:14', '2022-07-01 10:50:29', 1),
(5, 'Milliliter', '100 ML', 1, 0, '2022-07-01 10:50:48', '0000-00-00 00:00:00', 1),
(6, 'Milliliter', '200 ML', 1, 0, '2022-07-01 10:51:03', '0000-00-00 00:00:00', 1),
(7, 'Milliliter', '500 ML', 1, 0, '2022-07-01 10:51:16', '0000-00-00 00:00:00', 1),
(8, 'Milliliter', '1000 ML', 1, 1, '2022-07-01 10:51:32', '2022-07-26 06:04:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `role_id`, `email`, `username`, `password`, `profile_photo`, `created`, `modified`, `last_login`, `last_logout`, `is_active`) VALUES
(1, 'Admin', 2, 'devloperproactii@gmail.com', 'devloper', '21232f297a57a5a743894a0e4a801fc3', NULL, '2022-04-13 06:05:19', '2022-08-04 03:46:55', '2022-08-04 05:46:55', '0000-00-00 00:00:00', 1),
(2, 'Roshni mistry', 1, 'mistryroshni13@gmil.com', 'roshnimistry', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-07-22 08:38:58', '2022-07-29 19:49:14', '2022-07-29 21:49:14', '0000-00-00 00:00:00', 1),
(3, 'dainik tandel', 3, 'dainik.tandel@gmail.com', 'dainiktandel', '21232f297a57a5a743894a0e4a801fc3', NULL, '2022-07-22 08:56:35', '2022-07-29 16:53:58', '2022-07-29 18:53:58', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `gstin_no` varchar(100) DEFAULT NULL,
  `pan_no` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `is_active` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `name`, `email`, `phone`, `password`, `role_id`, `company`, `gstin_no`, `pan_no`, `category`, `address`, `city`, `state`, `pin_code`, `country`, `created`, `modified`, `last_login`, `is_active`) VALUES
(1, 'vendor-1', 'vendor1@gmail.com', '9898989898', NULL, NULL, 'Company-1', '05ABDCE1234F1Z2', 'ABCTY1234D', NULL, 'Char Rasta', 'Vapi', 'Gujarat', 396321, 'IN', '2022-07-23 04:10:06', '2022-07-23 04:22:02', NULL, 1),
(2, 'vendor-2', 'vendor2@gmail.com', '9696969696', '7c3613dba5171cb6027c67835dd3b9d4', NULL, 'Company-2', '05ABDCE1234F1Z2', 'ABCTY1234D', NULL, 'gunjan', 'vapi', 'gujarat', 396321, 'IN', '2022-07-23 04:27:16', '2022-07-30 03:48:54', '2022-07-31 01:40:03', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`attributes_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `customer_cart`
--
ALTER TABLE `customer_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD PRIMARY KEY (`delivery_status_id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderdetail_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_elements`
--
ALTER TABLE `product_elements`
  ADD PRIMARY KEY (`element_id`);

--
-- Indexes for table `product_elements_attributes`
--
ALTER TABLE `product_elements_attributes`
  ADD PRIMARY KEY (`elements_attributes_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_details`
--
ALTER TABLE `role_details`
  ADD PRIMARY KEY (`role_details_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`stock_details_id`);

--
-- Indexes for table `submenu_details`
--
ALTER TABLE `submenu_details`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `attributes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id to identify the row of this table';

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_cart`
--
ALTER TABLE `customer_cart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_status`
--
ALTER TABLE `delivery_status`
  MODIFY `delivery_status_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'delivery status unique identification number';

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `invoice_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orderdetail_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_elements`
--
ALTER TABLE `product_elements`
  MODIFY `element_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_elements_attributes`
--
ALTER TABLE `product_elements_attributes`
  MODIFY `elements_attributes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_details`
--
ALTER TABLE `role_details`
  MODIFY `role_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(7) NOT NULL AUTO_INCREMENT COMMENT 'unique identification number', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `stock_details_id` int(7) NOT NULL AUTO_INCREMENT COMMENT 'unique identification number', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submenu_details`
--
ALTER TABLE `submenu_details`
  MODIFY `submenu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id to identify the row of this table';

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
