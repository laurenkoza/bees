-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 02:30 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bees`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` smallint(10) UNSIGNED NOT NULL,
  `faq_question` varchar(250) NOT NULL,
  `faq_answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(1, 'What is a bee?', 'Bees are cool little pollinators!'),
(2, 'Are bees the blue ones?', 'No, they\'re the yellow ones.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(140) NOT NULL,
  `product_desc` varchar(400) NOT NULL,
  `product_size` varchar(30) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_photo` varchar(150) NOT NULL,
  `product_thumb` varchar(153) NOT NULL,
  `product_category` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `service_id` smallint(5) UNSIGNED NOT NULL,
  `service_name` varchar(140) NOT NULL,
  `service_price` varchar(150) NOT NULL,
  `service_visits` varchar(100) NOT NULL,
  `service_desc` text NOT NULL,
  `service_benefit` text NOT NULL,
  `services_photo` varchar(150) NOT NULL,
  `services_thumb` varchar(153) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`service_id`, `service_name`, `service_price`, `service_visits`, `service_desc`, `service_benefit`, `services_photo`, `services_thumb`) VALUES
(1, 'The "Rookie Bee"', '$65.00/Mo. Based upon 12 months for 1 hive. Add a hive for $30.', '6 Visits included.', 'Hives are delivered to you in Spring & removed in the fall.  During the season a master bee keeper  visits your yard 6 times providing, not only “a Bee’s –eye- view” into the hive but the Safety gear for you so the whole family can partake!', '40lbs Honey Guaranteed \nJoin in extraction \n1lb of wax', 'beekeeper.svg', 'rookie_th.jpg'),
(2, 'The "Bee Guardian"', '$50.00/Mo. Based upon 12 months for 1 hive. Add a hive for $30.', '4 Visits included', 'Bee Guardian program can be a monthly rental or permanent placement of a hive.    \nThis is for the more hands on bee keeper, or one who knows they want hive(s); but still need a little help along the way.\n4 visits with a Master Bee Keeper. Services include installation, Summer check up, fall harvest (up to 5 hives) & winter preparations.\n', 'Your own honey, harvested and returned. Summer "treatment" Fall "treatment" Wrap', 'beekeeper2.svg', 'guardian_th.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` smallint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `service_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
