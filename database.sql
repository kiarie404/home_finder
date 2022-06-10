-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 12:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project x`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(256) NOT NULL,
  `admin_mail` varchar(256) NOT NULL,
  `admin_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_name`, `admin_mail`, `admin_password`) VALUES
(1, 'sun', 'sun254@gmail.com', '123'),
(3, 'james', 'james254@gmail.com', '123'),
(5, 'michael', 'michael254@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_filters_relation`
--

CREATE TABLE `admin_filters_relation` (
  `relation_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_filters_relation`
--

INSERT INTO `admin_filters_relation` (`relation_id`, `admin_id`, `filter_id`) VALUES
(2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `buyer_feedback_relation`
--

CREATE TABLE `buyer_feedback_relation` (
  `relation_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `feedback_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_filters_relation`
--

CREATE TABLE `buyer_filters_relation` (
  `relation_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_filters_relation`
--

INSERT INTO `buyer_filters_relation` (`relation_id`, `buyer_id`, `filter_id`) VALUES
(5, 5, 26);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `filter_id` int(11) NOT NULL,
  `filter_description` varchar(256) NOT NULL,
  `starting_price` double NOT NULL,
  `ending_price` double NOT NULL,
  `least_bedrooms_number` int(11) NOT NULL,
  `highest_bedrooms_number` int(11) NOT NULL,
  `county` varchar(256) NOT NULL,
  `estate` varchar(256) NOT NULL,
  `listing_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`filter_id`, `filter_description`, `starting_price`, `ending_price`, `least_bedrooms_number`, `highest_bedrooms_number`, `county`, `estate`, `listing_type`) VALUES
(2, 'DEFAULT', 0, 999999999, 0, 100, 'Any', 'Any\r\n', 'ANY'),
(3, 'CUSTOM', 20, 20, 34, 45, 'Nakuru', 'Wendani', 'Net listing'),
(26, 'CUSTOM', 0, 99999999, 0, 50, 'Any', 'Any', '');

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE `pics` (
  `pic_id` int(11) NOT NULL,
  `pic_path` text NOT NULL,
  `pic_caption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`pic_id`, `pic_path`, `pic_caption`) VALUES
(58, '/try1/admin_pages/uploads/610dd6385eb64.png', NULL),
(59, '/try1/admin_pages/uploads/610dd5fae5d0f.png', NULL),
(60, '/try1/admin_pages/uploads/611157156a453.webp', NULL),
(61, '/try1/admin_pages/uploads/611157156b5c3.webp', NULL),
(62, '/try1/admin_pages/uploads/611156c29de61.webp', NULL),
(63, '/try1/admin_pages/uploads/611156c2e8620.webp', NULL),
(64, '/try1/admin_pages/uploads/61149cee2d524.webp', NULL),
(65, '/try1/admin_pages/uploads/61149cee4af8c.webp', NULL),
(66, '/try1/admin_pages/uploads/6114bb84c3cd9.webp', NULL),
(67, '/try1/admin_pages/uploads/6114bb84d6cc4.webp', NULL),
(68, '/try1/admin_pages/uploads/6114bc45b5f24.webp', NULL),
(69, '/try1/admin_pages/uploads/6114bc460393c.webp', NULL),
(70, '/try1/admin_pages/uploads/6114bd2001e7e.webp', NULL),
(71, '/try1/admin_pages/uploads/6114bd20251a6.webp', NULL),
(72, '/try1/admin_pages/uploads/6114bdd745fea.webp', NULL),
(73, '/try1/admin_pages/uploads/6114bdf52fffb.webp', NULL),
(74, '/try1/admin_pages/uploads/6114c445b036b.webp', NULL),
(75, '/try1/admin_pages/uploads/6114c44694dda.webp', NULL),
(76, '/try1/admin_pages/uploads/6114cf62e28bd.webp', NULL),
(77, '/try1/admin_pages/uploads/6114cf630983e.webp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `property_basic_info` int(11) NOT NULL,
  `property_economic_info` int(11) NOT NULL,
  `property_interior_info` int(11) NOT NULL,
  `property_exterior_info` int(11) NOT NULL,
  `property_market_availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_basic_info`, `property_economic_info`, `property_interior_info`, `property_exterior_info`, `property_market_availability`) VALUES
(72, 88, 83, 80, 82, 1),
(73, 89, 84, 81, 83, 1),
(74, 90, 85, 82, 84, 1),
(75, 91, 86, 83, 85, 1),
(76, 92, 87, 84, 86, 1),
(77, 93, 88, 85, 87, 1),
(78, 94, 89, 86, 88, 1),
(79, 95, 90, 87, 89, 1),
(80, 96, 91, 88, 90, 1),
(81, 97, 92, 89, 91, 1),
(82, 98, 93, 90, 92, 1),
(83, 99, 94, 91, 93, 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_basic_info`
--

CREATE TABLE `property_basic_info` (
  `basic_info_id` int(11) NOT NULL,
  `property_description` text DEFAULT NULL,
  `property_type` varchar(256) DEFAULT NULL,
  `county` varchar(256) NOT NULL,
  `estate` varchar(256) NOT NULL,
  `year_built_start` date NOT NULL,
  `year_built_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_basic_info`
--

INSERT INTO `property_basic_info` (`basic_info_id`, `property_description`, `property_type`, `county`, `estate`, `year_built_start`, `year_built_end`) VALUES
(88, '      this is the first house  ', 'bungalow', 'Mombasa', 'kisau', '2021-08-20', '2021-08-14'),
(89, 'stay by the beach ... and think of how much time you are wasting... instead of pursuing Knowledge and immortality ha ha ha', 'ranch style house', 'Mombasa', 'mwisho', '2021-08-20', '2021-08-26'),
(90, '        Enjoy the beach or something...', 'townhouse', 'Mombasa', 'mwingi', '2021-08-12', '2021-08-28'),
(91, '        Enjoy the beach or something...', 'townhouse', 'Mombasa', 'mwingi', '2021-08-12', '2021-08-28'),
(92, '        stay by the beach and enjoy tha sand', 'bungalow', 'Mombasa', 'kileleni', '2021-08-20', '2021-08-26'),
(93, '    Price reduced !!!! 2 bedroom apartment\r\n2 Bedroom Apartment for sale in mtwapa with large spacious living area, Dining area, 24 hrs guards, perimeter wall with electrical fence, CCTV camera, a walking distance to the beach, banks and supermarkets.    ', 'townhouse', 'Mombasa', 'Mtwapa', '2018-06-21', '2020-02-12'),
(94, '       The 8 acre Sunset Paradise gated community enclave, exclusive estate by design, offers a sanctuary of relaxation where you unwind by the pool as you look yonder on the abundant green areas. Located in Serena 500 M on the Tarmac road towards Serena Beach hotel, it is a reward of your success. The design, construction and quality of finishing are details that make you want to own a sunset paradise apartment. We on our part are proud to make you own a treasure. ', 'duplex', 'Mombasa', 'shanzu', '2019-02-13', '2021-01-13'),
(95, '        5bedroom located links plaza Nyali land size is 1/4 acre selling at Ksh 90m Negotiable', 'mansion', 'Mombasa', 'Nyali', '2020-01-25', '2021-08-20'),
(96, '       2 Bedroom Apartment for sale in prime part of mtwapa heart with a swimming pool, Large spacious living ', 'mansion', 'Nairobi', 'Don ', '2020-08-05', '2021-08-19'),
(97, 'Modern brand new 2 Bedroom Apartment with swimming pool\r\nModern brand new 2 Bedroom Apartment for sale with swimming pool, large spacious living area, Dining area, Spacious kitchen fully fitted with cupboard , Borehole water, store area, eye catching finishing, Ample parking space, 24 hours guards.', 'bungalow', 'Nairobi', 'Kahawa', '2020-05-06', '2021-08-04'),
(98, 'Modern brand new 2 Bedroom Apartment with swimming pool\r\nModern brand new 2 Bedroom Apartment for sale with swimming pool, large spacious living area, Dining area, Spacious kitchen fully fitted with cupboard , Borehole water, store area, eye catching finishing, Ample parking space, 24 hours guards.', 'bungalow', 'Lamu', 'Wendani', '2019-11-19', '2021-07-21'),
(99, '        Enjoy the suburbs, away from the city buzz', 'townhouse', 'Nairobi', 'Garudo', '2019-11-13', '2021-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `property_economic_info`
--

CREATE TABLE `property_economic_info` (
  `economic_info_id` int(11) NOT NULL,
  `sellers_id` int(11) NOT NULL,
  `property_price` double NOT NULL,
  `listing_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_economic_info`
--

INSERT INTO `property_economic_info` (`economic_info_id`, `sellers_id`, `property_price`, `listing_type`) VALUES
(83, 82, 34, 'Net listing'),
(84, 83, 1000000, 'Open listing'),
(85, 84, 10, 'Net listing'),
(86, 85, 10, 'Net listing'),
(87, 86, 1000000, 'Net listing'),
(88, 87, 4000000, 'Net listing'),
(89, 88, 10000000, 'Open listing'),
(90, 89, 90000000, 'Exclusive agency listing'),
(91, 90, 120, 'Net listing'),
(92, 91, 4500000, 'Net listing'),
(93, 92, 50000000, 'Net listing'),
(94, 93, 1000000, 'Exclusive agency listing');

-- --------------------------------------------------------

--
-- Table structure for table `property_exterior_info`
--

CREATE TABLE `property_exterior_info` (
  `exterior_info_id` int(11) NOT NULL,
  `roof_type` varchar(256) DEFAULT NULL,
  `porch_type` varchar(256) DEFAULT NULL,
  `fence_type` varchar(256) DEFAULT NULL,
  `pools_number` int(11) DEFAULT NULL,
  `garages_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_exterior_info`
--

INSERT INTO `property_exterior_info` (`exterior_info_id`, `roof_type`, `porch_type`, `fence_type`, `pools_number`, `garages_number`) VALUES
(82, 'gable roof', NULL, 'unparalleled', 1, 1),
(83, 'gable roof', NULL, 'stone wall', 1, 1),
(84, 'gable roof', NULL, 'stone wall', 1, 1),
(85, 'gable roof', NULL, 'stone wall', 1, 1),
(86, 'gable roof', NULL, 'stone wall', 1, 1),
(87, 'asphalt shingle', NULL, 'stone wall', 0, 1),
(88, 'dutch gable roof', NULL, 'stone wall', 1, 1),
(89, 'clerestory', NULL, 'stone wall', 0, 2),
(90, 'saw-tooth roof', NULL, 'stone wall', 0, 0),
(91, 'butterfly roof', NULL, 'stone wall', 0, 1),
(92, 'gable roof', NULL, 'stone wall', 1, 1),
(93, 'gable roof', NULL, 'mixed', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `property_interior_info`
--

CREATE TABLE `property_interior_info` (
  `interior_info_id` int(11) NOT NULL,
  `rooms_number` int(11) NOT NULL,
  `bathrooms_number` int(11) NOT NULL,
  `bedrooms_number` int(11) NOT NULL,
  `floor` text DEFAULT NULL,
  `walls` text DEFAULT NULL,
  `air_conditioning` tinyint(1) NOT NULL,
  `water_system` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_interior_info`
--

INSERT INTO `property_interior_info` (`interior_info_id`, `rooms_number`, `bathrooms_number`, `bedrooms_number`, `floor`, `walls`, `air_conditioning`, `water_system`) VALUES
(80, -15, 2, 2, NULL, NULL, 0, 0),
(81, 8, 1, 3, NULL, NULL, 0, 0),
(82, 10, 2, 3, NULL, NULL, 1, 1),
(83, 10, 2, 3, NULL, NULL, 1, 1),
(84, 6, 1, 2, NULL, NULL, 0, 0),
(85, 8, 2, 2, NULL, NULL, 0, 0),
(86, 7, 1, 2, NULL, NULL, 1, 1),
(87, 13, 2, 4, NULL, NULL, 1, 1),
(88, 7, 2, 2, NULL, NULL, 1, 1),
(89, 9, 2, 2, NULL, NULL, 0, 0),
(90, 8, 1, 3, NULL, NULL, 0, 0),
(91, 8, 1, 2, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_pic_relation`
--

CREATE TABLE `property_pic_relation` (
  `relation_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `pic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_pic_relation`
--

INSERT INTO `property_pic_relation` (`relation_id`, `property_id`, `pic_id`) VALUES
(46, 72, 58),
(47, 72, 59),
(48, 73, 60),
(49, 73, 61),
(50, 75, 62),
(51, 75, 63),
(52, 76, 64),
(53, 76, 65),
(54, 78, 66),
(55, 78, 67),
(56, 79, 68),
(57, 79, 69),
(58, 80, 70),
(59, 80, 71),
(60, 81, 72),
(61, 81, 73),
(62, 82, 74),
(63, 82, 75),
(64, 83, 76),
(65, 83, 77);

-- --------------------------------------------------------

--
-- Table structure for table `reg_buyers_details`
--

CREATE TABLE `reg_buyers_details` (
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(256) NOT NULL,
  `buyer_mail` varchar(256) NOT NULL,
  `buyer_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_buyers_details`
--

INSERT INTO `reg_buyers_details` (`buyer_id`, `buyer_name`, `buyer_mail`, `buyer_password`) VALUES
(2, 'feb', 'feb254@gmail.com', '$2y$10$Nuru3wvaFZrkaYRF2ScA7ewOxegDoKvWIscSp0rmlBE/SGph/ksMC'),
(3, 'march', 'mar@gmail.com', '$2y$10$SXCd0marHjhOBAGY3q6LpuLoEapvts3W4H8/92Zc3Euuw/pFA0OE6'),
(4, 'michael muchai', 'michmuchai123@gmail.com', '$2y$10$N9A7dkR1BdDO/TB2BEfQ/.0/qjlR2K0r0/S0uBj5FrNA8SUrSz4ku'),
(5, 'jan praise', 'jan123@gmail.com', '$2y$10$bulsWSqX13GRlmMX4UpaYO3evMGXKlszXlMT8IBVkeGMS4VWHO6..'),
(7, 'Tom Kennoly', 'tom254@gmail.com', '$2y$10$JY67E49AMRqETOvWj5q34uMU3App85iPMnzDFuUhFJoaTz1ES3knC');

-- --------------------------------------------------------

--
-- Table structure for table `seller_details`
--

CREATE TABLE `seller_details` (
  `sellers_id` int(11) NOT NULL,
  `sellers_name` varchar(256) NOT NULL,
  `sellers_email` varchar(256) DEFAULT NULL,
  `sellers_tel` varchar(256) DEFAULT NULL,
  `sellers_website` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_details`
--

INSERT INTO `seller_details` (`sellers_id`, `sellers_name`, `sellers_email`, `sellers_tel`, `sellers_website`) VALUES
(1, 'adon', 'adon404@gmail.com', '0715', NULL),
(2, 'adon', 'adon404@gmail.com', '0715', NULL),
(3, 'adon', 'adon404@gmail.com', '0715', NULL),
(4, 'pettans', 'pettans@gmail.com', '123', NULL),
(5, 'pettans', 'pettans@gmail.com', '123', NULL),
(6, 'pettans', 'pettans@gmail.com', '123', NULL),
(7, 'pettans', 'pettans@gmail.com', '123', NULL),
(8, 'john', 'kiarie404@gmail.com', '0715', NULL),
(9, 'john', 'kiarie404@gmail.com', '0715', NULL),
(10, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(11, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(12, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(13, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(14, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(15, 'ndirangu', 'kiarie404@gmail.com', '345', NULL),
(16, 'ndirangu', 'kiarie404@gmail.com', '345', NULL),
(17, 'jared', 'jared254@gmail.com', '177', NULL),
(18, 'jared', 'jared254@gmail.com', '177', NULL),
(19, 'adasdsa', 'kiarie404@gmail.com', '0715', NULL),
(20, 'hasbulla', 'hasbulla@gmail.com', '0712345678', NULL),
(21, 'adasdsa', 'kiarie404@gmail.com', '0715', NULL),
(22, 'ddw', 'kiarie404@gmail.com', '0715', NULL),
(23, 'ddw', 'kiarie404@gmail.com', '0715', NULL),
(24, 'vice city', 'vice city @gmail.com', '000', NULL),
(25, 'vice city', 'vice city @gmail.com', '000', NULL),
(26, 'ndirangu', 'kiarie404@gmail.com', 'asda', NULL),
(27, 'ty', 'kiarie404@gmail.com', '222', NULL),
(28, 'ndirangu', 'kiarie404@gmail.com', '2', NULL),
(29, '45', '45', '45', NULL),
(30, 'ndirangu', 'ndirangu254@gmail.com', '0712345678', NULL),
(31, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(32, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(33, 'ndirangu', 'ndirangu254@gmail.com', '0726646032', NULL),
(34, 'john sellers', 'kiarie404@gmail.com', '123', NULL),
(35, '8', '8', '8', NULL),
(36, '9', '9', '9', NULL),
(37, '9', '9', '9', NULL),
(38, '9', '9', '9', NULL),
(39, '9', '9', '9', NULL),
(40, '99999', '999999', '999999', NULL),
(41, '99999', '999999', '999999', NULL),
(42, '6', '6', '6', NULL),
(43, '3333', '3333', '3333', NULL),
(44, '4444', '4444', '4444', NULL),
(45, '4444', '4444', '4444', NULL),
(46, '4444', '4444', '4444', NULL),
(47, '4444', '4444', '4444', NULL),
(48, '4444', '4444', '4444', NULL),
(49, '4444', '4444', '4444', NULL),
(50, '4444', '4444', '4444', NULL),
(51, '444', '44444', '44444', NULL),
(52, '444', '44444', '44444', NULL),
(53, '222', '222', '2222', NULL),
(54, '222', '222', '2222', NULL),
(55, '222', '222', '2222', NULL),
(56, '4444', '4444', '44444', NULL),
(57, '5555', '55555', '5555', NULL),
(58, '5555', '55555', '5555', NULL),
(59, '444', '444', '444', NULL),
(60, '444', '444', '444', NULL),
(61, '7777', '777', '7777', NULL),
(62, '6666', '666666', '666666', NULL),
(63, '6666', '666666', '666666', NULL),
(64, '22222', '222', '22', NULL),
(65, '22222', '222', '22', NULL),
(66, '444', '444', '444', NULL),
(67, '333', '333', '333', NULL),
(68, '333', '333', '333', NULL),
(69, '3', '3', '3', NULL),
(70, '3', '3', '3', NULL),
(71, '2', '2', '2', NULL),
(72, '2', 'kiarie404@gmail.com', '0715', NULL),
(73, '2', 'kiarie404@gmail.com', '0715', NULL),
(74, '2', 'kiarie404@gmail.com', '0715', NULL),
(75, '222', 'kiarie404@gmail.com', '9', NULL),
(76, '2', '2', '2', NULL),
(77, '2', '2', '2', NULL),
(78, '2', '2', '2', NULL),
(79, '2', 'look my email', '2', NULL),
(80, '2', '2', '2', NULL),
(81, '2', 'lslkldnskldncksdnvkl', '2', NULL),
(82, 'ndirangu', 'kiarie404@gmail.com', '0726646032', NULL),
(83, 'ndirangu', 'kiarie404@gmail.com', '0726646032', NULL),
(84, 'enveil realtors', 'enveil@gmail.com', '0726646033', NULL),
(85, 'enveil realtors', 'enveil@gmail.com', '0726646033', NULL),
(86, 'ndirangu', 'kiarie404@gmail.com', '0726646032', NULL),
(87, 'Kimachas Entreprises', 'kimachas@gmail.com', '0718888223', NULL),
(88, 'Kimachas Entreprises', 'kimachas@gmail.com', '0726646032', NULL),
(89, 'Kimachas Entreprises', 'kimachas@gmail.com', '0726646032', NULL),
(90, 'Kimachas Entreprises', 'kimachas@gmail.com', '0726646032', NULL),
(91, 'Kimachas Entreprises', 'kimachas@gmail.com', '0726646032', NULL),
(92, 'Kimachas Entreprises', 'kimachas@gmail.com', '0726646032', NULL),
(93, 'Kimachas Entreprises', 'kimachas@gmail.com', '0726646032', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unregistered_users_details`
--

CREATE TABLE `unregistered_users_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unregistered_users_details`
--

INSERT INTO `unregistered_users_details` (`user_id`, `user_name`) VALUES
(2, 'MXsHgbfnUM'),
(3, 'DYVCFe6ivx'),
(4, 'jwhkuZJRRt'),
(5, 'wAa5rfcS6y'),
(6, 'P95NhCIAYQ'),
(7, 'KjnPa8RycP'),
(8, 'ffg0xZmwko'),
(9, 'NuGMzkF4Cx'),
(10, 'aT536gn5jY'),
(11, 'ShSvxJwmpt'),
(12, 'bBceDKQtTN'),
(13, 'D8bXxsiXfj'),
(14, 'gCysN0U204');

-- --------------------------------------------------------

--
-- Table structure for table `unregistered_users_filters_relation`
--

CREATE TABLE `unregistered_users_filters_relation` (
  `relation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video_details`
--

CREATE TABLE `video_details` (
  `video_id` int(11) NOT NULL,
  `video_caption` text DEFAULT NULL,
  `video_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_filters_relation`
--
ALTER TABLE `admin_filters_relation`
  ADD PRIMARY KEY (`relation_id`),
  ADD KEY `admin_id_fk` (`admin_id`),
  ADD KEY `filter_id_fk` (`filter_id`);

--
-- Indexes for table `buyer_feedback_relation`
--
ALTER TABLE `buyer_feedback_relation`
  ADD PRIMARY KEY (`relation_id`),
  ADD KEY `buyer_id_fk` (`buyer_id`),
  ADD KEY `feedback_id` (`feedback_id`);

--
-- Indexes for table `buyer_filters_relation`
--
ALTER TABLE `buyer_filters_relation`
  ADD PRIMARY KEY (`relation_id`),
  ADD KEY `buyer_id_fk` (`buyer_id`),
  ADD KEY `filter_id` (`filter_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`filter_id`);

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `basic_info_fk` (`property_basic_info`),
  ADD KEY `economic_info_fk` (`property_economic_info`),
  ADD KEY `interior_info_fk` (`property_interior_info`),
  ADD KEY `exterior_info_fk` (`property_exterior_info`);

--
-- Indexes for table `property_basic_info`
--
ALTER TABLE `property_basic_info`
  ADD PRIMARY KEY (`basic_info_id`);

--
-- Indexes for table `property_economic_info`
--
ALTER TABLE `property_economic_info`
  ADD PRIMARY KEY (`economic_info_id`),
  ADD KEY `sellers_id_fk` (`sellers_id`);

--
-- Indexes for table `property_exterior_info`
--
ALTER TABLE `property_exterior_info`
  ADD PRIMARY KEY (`exterior_info_id`);

--
-- Indexes for table `property_interior_info`
--
ALTER TABLE `property_interior_info`
  ADD PRIMARY KEY (`interior_info_id`);

--
-- Indexes for table `property_pic_relation`
--
ALTER TABLE `property_pic_relation`
  ADD PRIMARY KEY (`relation_id`),
  ADD KEY `property_id_fk` (`property_id`),
  ADD KEY `pic_id_fk` (`pic_id`);

--
-- Indexes for table `reg_buyers_details`
--
ALTER TABLE `reg_buyers_details`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `seller_details`
--
ALTER TABLE `seller_details`
  ADD PRIMARY KEY (`sellers_id`);

--
-- Indexes for table `unregistered_users_details`
--
ALTER TABLE `unregistered_users_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `unregistered_users_filters_relation`
--
ALTER TABLE `unregistered_users_filters_relation`
  ADD PRIMARY KEY (`relation_id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `filter_id_fk` (`filter_id`);

--
-- Indexes for table `video_details`
--
ALTER TABLE `video_details`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_filters_relation`
--
ALTER TABLE `admin_filters_relation`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `buyer_feedback_relation`
--
ALTER TABLE `buyer_feedback_relation`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer_filters_relation`
--
ALTER TABLE `buyer_filters_relation`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `filter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `property_basic_info`
--
ALTER TABLE `property_basic_info`
  MODIFY `basic_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `property_economic_info`
--
ALTER TABLE `property_economic_info`
  MODIFY `economic_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `property_exterior_info`
--
ALTER TABLE `property_exterior_info`
  MODIFY `exterior_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `property_interior_info`
--
ALTER TABLE `property_interior_info`
  MODIFY `interior_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `property_pic_relation`
--
ALTER TABLE `property_pic_relation`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `reg_buyers_details`
--
ALTER TABLE `reg_buyers_details`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller_details`
--
ALTER TABLE `seller_details`
  MODIFY `sellers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `unregistered_users_details`
--
ALTER TABLE `unregistered_users_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `unregistered_users_filters_relation`
--
ALTER TABLE `unregistered_users_filters_relation`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_details`
--
ALTER TABLE `video_details`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_filters_relation`
--
ALTER TABLE `admin_filters_relation`
  ADD CONSTRAINT `admin_filters_relation_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin_details` (`admin_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_filters_relation_ibfk_2` FOREIGN KEY (`filter_id`) REFERENCES `filters` (`filter_id`) ON UPDATE CASCADE;

--
-- Constraints for table `buyer_feedback_relation`
--
ALTER TABLE `buyer_feedback_relation`
  ADD CONSTRAINT `buyer_feedback_relation_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `reg_buyers_details` (`buyer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `buyer_feedback_relation_ibfk_2` FOREIGN KEY (`feedback_id`) REFERENCES `feedback` (`feedback_id`) ON UPDATE CASCADE;

--
-- Constraints for table `buyer_filters_relation`
--
ALTER TABLE `buyer_filters_relation`
  ADD CONSTRAINT `buyer_filters_relation_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `reg_buyers_details` (`buyer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buyer_filters_relation_ibfk_2` FOREIGN KEY (`filter_id`) REFERENCES `filters` (`filter_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`property_basic_info`) REFERENCES `property_basic_info` (`basic_info_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `property_ibfk_2` FOREIGN KEY (`property_economic_info`) REFERENCES `property_economic_info` (`economic_info_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `property_ibfk_3` FOREIGN KEY (`property_exterior_info`) REFERENCES `property_exterior_info` (`exterior_info_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `property_ibfk_4` FOREIGN KEY (`property_interior_info`) REFERENCES `property_interior_info` (`interior_info_id`) ON UPDATE CASCADE;

--
-- Constraints for table `property_economic_info`
--
ALTER TABLE `property_economic_info`
  ADD CONSTRAINT `property_economic_info_ibfk_1` FOREIGN KEY (`sellers_id`) REFERENCES `seller_details` (`sellers_id`) ON UPDATE CASCADE;

--
-- Constraints for table `property_pic_relation`
--
ALTER TABLE `property_pic_relation`
  ADD CONSTRAINT `property_pic_relation_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `property_pic_relation_ibfk_2` FOREIGN KEY (`pic_id`) REFERENCES `pics` (`pic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `unregistered_users_filters_relation`
--
ALTER TABLE `unregistered_users_filters_relation`
  ADD CONSTRAINT `unregistered_users_filters_relation_ibfk_1` FOREIGN KEY (`filter_id`) REFERENCES `filters` (`filter_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unregistered_users_filters_relation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `unregistered_users_details` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
