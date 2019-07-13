-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2019 at 12:26 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemtransdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip2location_db3`
--

CREATE TABLE `ip2location_db3` (
  `ip_from` int(10) UNSIGNED DEFAULT NULL,
  `ip_to` int(10) UNSIGNED DEFAULT NULL,
  `country_code` char(2) COLLATE utf8_bin DEFAULT NULL,
  `country_name` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `region_name` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `city_name` varchar(128) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE `tbl_apply` (
  `id_apply` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text CHARACTER SET hp8 NOT NULL,
  `image` varchar(45) NOT NULL,
  `image_position` varchar(20) NOT NULL,
  `description_html` text NOT NULL,
  `details_html` text NOT NULL,
  `secondary_description_html` text NOT NULL,
  `phone_number_1` varchar(20) DEFAULT NULL,
  `phone_number_2` varchar(20) DEFAULT NULL,
  `support_indeed` tinyint(4) NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_click`
--

CREATE TABLE `tbl_click` (
  `id_click` bigint(19) UNSIGNED NOT NULL,
  `UID` varchar(64) NOT NULL,
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_click_landingpage`
--

CREATE TABLE `tbl_click_landingpage` (
  `id_click` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `path_crc` int(10) UNSIGNED NOT NULL,
  `publisher` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dedicated`
--

CREATE TABLE `tbl_dedicated` (
  `id_dedicated` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `header_logo` varchar(25) NOT NULL,
  `background` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `footer_logo` varchar(25) DEFAULT NULL,
  `heading` text NOT NULL,
  `description_html` text NOT NULL,
  `details_html` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `support_indeed` tinyint(4) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dr_january`
--

CREATE TABLE `tbl_dr_january` (
  `id_dr_january` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `body_title` text NOT NULL,
  `body_copy` text NOT NULL,
  `id_master` int(10) UNSIGNED NOT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` enum('NEWR') DEFAULT 'NEWR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flatbed`
--

CREATE TABLE `tbl_flatbed` (
  `id_flatbed` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intermodal`
--

CREATE TABLE `tbl_intermodal` (
  `id_intermodal` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `main_title` varchar(100) NOT NULL,
  `main_description` text NOT NULL,
  `benef1_caption` varchar(300) NOT NULL,
  `benef2_caption` varchar(300) NOT NULL,
  `benef3_caption` varchar(300) NOT NULL,
  `benef4_caption` varchar(300) NOT NULL,
  `benef5_caption` varchar(300) NOT NULL,
  `benef6_caption` varchar(300) NOT NULL,
  `benef1_figure` varchar(64) NOT NULL,
  `benef2_figure` varchar(64) NOT NULL,
  `benef3_figure` varchar(64) NOT NULL,
  `benef4_figure` varchar(64) NOT NULL,
  `benef5_figure` varchar(64) NOT NULL,
  `benef6_figure` varchar(64) NOT NULL,
  `benef1_caption_title` varchar(200) NOT NULL,
  `benef2_caption_title` varchar(200) NOT NULL,
  `benef3_caption_title` varchar(200) NOT NULL,
  `benef4_caption_title` varchar(200) NOT NULL,
  `benef5_caption_title` varchar(200) NOT NULL,
  `benef6_caption_title` varchar(200) NOT NULL,
  `body_copy` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL,
  `type` enum('ST1','ST2','STTeam','JJW1','TWT1','TWT2','TWT3','LP1B','D','DT','I','SO','SOR','ST1VB') NOT NULL,
  `background` varchar(60) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `ga_lp` varchar(45) DEFAULT NULL,
  `ga_tp` varchar(45) DEFAULT NULL,
  `background_mobile` varchar(60) DEFAULT NULL,
  `region_graphic` varchar(60) NOT NULL,
  `region_graphic_mobile` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_intermodal`
--

INSERT INTO `tbl_intermodal` (`id_intermodal`, `referral_code`, `intelliapp_referral_code`, `main_title`, `main_description`, `benef1_caption`, `benef2_caption`, `benef3_caption`, `benef4_caption`, `benef5_caption`, `benef6_caption`, `benef1_figure`, `benef2_figure`, `benef3_figure`, `benef4_figure`, `benef5_figure`, `benef6_figure`, `benef1_caption_title`, `benef2_caption_title`, `benef3_caption_title`, `benef4_caption_title`, `benef5_caption_title`, `benef6_caption_title`, `body_copy`, `phone`, `create_date`, `id_master`, `type`, `background`, `sub_title`, `ga_lp`, `ga_tp`, `background_mobile`, `region_graphic`, `region_graphic_mobile`) VALUES
(123, 'LACED_ST_Experienced_MediaPartner_LeadForm', 'LACED_ST_Experienced_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover good home time, 401(K), vacation time, excellent benefits, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 Transition Package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Airfare, your single-occupancy room, breakfast, and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours. Expect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. Become a driver trainer and help new drivers learn the ropes!', 'su1409kuqMOkMg7UlfucP7Fci4fVu4eC.png', '0SIozXrNRHs7n5aByvDRiVeSkDAtoxGe.png', 'lnALyAHJ5gauuLeJjLngdLddXZNlSwyA.png', 'UKZIUZHATl9OhNWzWCfy416chLPlYAC6.png', 'IDpErJONP6I0BNcjakU5LPRHvuX0VnKu.png', 'ZgzCKUU3DKz2uwLRgOb7dhxR7QYDBm9z.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	EXPERIENCED CDL-A FLATBED DRIVERS WANTED!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Good Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call <span style=\"color:#D71E26\">(888) 888-8888</span> to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from 1 truck to over 700 trucks today. We are still family-owned, and still doing things with respect and hard-earned trust. Today, we are the largest flatbed carrier based on the West Coast, with customer and driver relationships exceeding 25 years ensuring stable routes for our drivers and lasting relationships that mean something. That&rsquo;s how we do things at System Transport. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport</p>\r\n', '888 888-8888', '2019-06-06 11:09:40', 1153, 'ST1', 'k4AaclGHJ48H9LXtqVrFwGD7VFw7w2R6.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3', 'UA-60441835-5', '', 'DN71PMTtULvyG8OqeWGrqK8i0Lh3x0iK.jpg', ''),
(125, 'LACED_JJW_Experienced_BulkTransportTanker_MediaPartner_LeadForm', 'LACED_JJW_Experienced_BulkTransportTanker_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest tankers and bulk transport trucks and discover good home time, 401K, vacation time, excellent benefits, and an annual pay package you can build your life around. Hiring Experienced CDL Tanker and Bulk Transport Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 Transition Package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Airfare, your single-occupancy room, breakfast, and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours. Expect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Singles or doubles, hazmat to food - we have it all! Choose exciting routes throughout the Pacific Northwest, with complex loads to challenge you, build and improve your skills. Become a driver trainer and help new drivers learn the ropes! ', '86PTkNBrWVrY2fbobc74DiQuoJ8VTgdQ.png', '88uoIlQfqWSMCh0FgruhSeygdXQJLFLk.png', 'G14tTULTofB8aUyBn9k3WK4ehTelDTqa.png', 'I6b1NzY40F5ImOsMHZ9nEwPzuAQcqAuu.png', 'oXL73rCmfxmrgHlqolg03phUGNflpVkX.png', 'jnxrXwad3tWGtiWnNQcDTlfYiZds1EG0.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with James J. Williams', '<h2>\r\n	EXPERIENCED CDL-A BULK TRANSPORT &amp; TANKER TRUCK DRIVERS WANTED!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Bulk Transport-Tanker Route located in City, State! We are seeking Experienced CDL Bulk Transport -Tanker Truck Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to James J. Williams than any other carrier! <span style=\"font-weight: bold\">Call <span style=\"color: #005844\">(888) 888-8888</span> to learn more!</span></p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	Since 1926 we have been hauling dry and liquid bulk freight, we are 4th generation family-owned, and still doing things with respect and hard-earned trust. We specialize in the safe transportation of bulk chemical, food, and petroleum products. Our growing fleet of 80 late model trucks and 115 trailers are all outfitted with the latest safety and satellite technology. With customer and driver relationships that exceed 25 years, you can expect stable routes and lasting relationships that mean something. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with James J. Williams!</p>\r\n', '888 888-8888', '2019-06-18 13:36:12', 1156, 'JJW1', '6BJTIShJq4GTRDT1Qb2ctPaFxaIuvkms.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-4', 'UA-60441835-7', '', 'lnfuo5uS1i1GvvwxbY07xK65x43euXg8.jpg', ''),
(126, 'LACED_TWT_Experienced_Refrigerated_MediaPartner_LeadForm', 'LACED_TWT_Experienced_Refrigerated_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest Refrigerated Van Trucks and discover good home time, 401(K), vacation time, excellent benefits,&nbsp;and an annual pay package you can build your life around. We are hiring Experienced CDL Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your airfare, single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer.  Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Heavy Haul or Refrigerated Van Routes, we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose Dedicated Routes with more home time. Become a driver trainer and help new drivers learn the ropes!', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with TWT Refrigerated', '<h2>\r\n	Experienced CDL-A Reefer Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Refrigerated Van Route located in City, State, seeking Experienced CDL Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to TWT Refrigerated Service than any other carrier! <span style=\"font-weight: bold\">Call <span style=\"color: #EC9F23\">(888) 888-8888</span> to learn more!</span></p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago, and why we run over 150 trucks today. We are still family-owned, and still doing things with respect and hard-earned trust. Today, we are a temperature controlled refrigerated van line operating primarily in the 11 western states and teams servicing the southeast. In addition to our over the road fleet of refrigerated vans, we offer a northwest regional fleet providing heavy haul dry vans pulling freight up to 60,000 lbs. With customer and driver relationships that exceed 25 years, you can expect stable routes and lasting relationships that mean something. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with TWT Refrigerated Service!</p>\r\n', '888 888-8888', '2019-06-19 13:17:07', 1157, 'TWT1', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-2', 'UA-60441835-6', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(127, 'LACED_ST_Recent-CDL_MediaPartner_LeadForm', 'LACED_ST_Recent-CDL_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', 'su1409kuqMOkMg7UlfucP7Fci4fVu4eC.png', '0SIozXrNRHs7n5aByvDRiVeSkDAtoxGe.png', 'lnALyAHJ5gauuLeJjLngdLddXZNlSwyA.png', 'UKZIUZHATl9OhNWzWCfy416chLPlYAC6.png', 'IDpErJONP6I0BNcjakU5LPRHvuX0VnKu.png', 'ZgzCKUU3DKz2uwLRgOb7dhxR7QYDBm9z.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call <span style=\"color: #D71E26\">(888) 888-8888</span> to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '888 888-8888', '2019-06-06 11:09:40', 1158, 'ST2', 'k4AaclGHJ48H9LXtqVrFwGD7VFw7w2R6.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3Test', 'UA-5678', '', 'DN71PMTtULvyG8OqeWGrqK8i0Lh3x0iK.jpg', ''),
(128, 'LACED_TWT_Recent-CDL_MediaPartner_LeadForm', 'LACED_TWT_Recent-CDL_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call (888) 888-8888 to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '888 888-8888', '2019-06-19 13:17:07', 1159, 'TWT2', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It With TWT Refrigerated Service.', 'UA-60441835-3Test', 'UA-5678', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(129, 'LACED_TWT_Team_MediaPartner_LeadForm', 'LACED_TWT_Team_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work better as a team? We are looking for teams ready to run an exciting Refrigerated Van Route in City, State! Drive the newest Refrigerated Van Trucks and discover good home time, 401(K), vacation time, excellent benefits,&nbsp;and an annual pay package you can build your life around. We are hiring!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer $3,200 transition package for team drivers ($1,600 transition package per driver). You focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Your airfare, single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer.  Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Heavy Haul or Refrigerated Van Routes - we have them all! Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. Become a driver trainer and help new drivers learn the ropes!', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with TWT Refrigerated', '<h2>\r\n	Experienced CDL-A Team Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	Work better as a team? We are looking for teams ready to run now! TWT Refrigerated Service has an exciting Refrigerated Van Route located in City, State, seeking Experienced CDL Team Drivers! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to TWT Refrigerated Service than any other carrier! <span style=\"font-weight: bold\">Call <span style=\"color: #EC9F23\">(888) 888-8888</span> to learn more!</span></p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago, and why we run over 150 trucks today. We are still family-owned, and still doing things with respect and hard-earned trust. Today, we are a temperature controlled refrigerated van line operating primarily in the 11 western states and teams servicing the southeast. In addition to our over the road fleet of refrigerated vans, we offer a northwest regional fleet providing heavy haul dry vans pulling freight up to 60,000 lbs. With customer and driver relationships that exceed 25 years, you can expect stable routes and lasting relationships that mean something at TWT. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with TWT Refrigerated Service!</p>\r\n', '888 888-8888', '2019-06-19 13:17:07', 1160, 'TWT3', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-2', 'UA-60441835-6', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(133, 'LACED_ST_Team_MediaPartner_LeadForm', 'LACED_ST_Team_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work better as a team? We are looking for teams ready to run an exciting Flatbed Route in City, State!&nbsp;Drive the newest Flatbed Trucks and discover good home time, 401(K), vacation time, excellent benefits, and an annual pay package you can build your life around. We are hiring!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer $3,200 transition package for team drivers ($1,600 transition package per driver). You focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Your airfare, single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours. Expect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. Become a driver trainer and help new drivers learn the ropes!', 'su1409kuqMOkMg7UlfucP7Fci4fVu4eC.png', '0SIozXrNRHs7n5aByvDRiVeSkDAtoxGe.png', 'lnALyAHJ5gauuLeJjLngdLddXZNlSwyA.png', 'UKZIUZHATl9OhNWzWCfy416chLPlYAC6.png', 'IDpErJONP6I0BNcjakU5LPRHvuX0VnKu.png', 'ZgzCKUU3DKz2uwLRgOb7dhxR7QYDBm9z.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	EXPERIENCED CDL-A TEAM DRIVERS WANTED!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	Work better as a team? We are looking for teams ready to run now! System Transport has an exciting Flatbed Route located in City, State, seeking Experienced CDL Team Drivers! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call <span style=\"color:#D71E26\">(888) 888-8888</span> to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '888 888-8888', '2019-06-24 21:38:12', 1164, 'STTeam', 'k4AaclGHJ48H9LXtqVrFwGD7VFw7w2R6.jpg', 'Drive Like You Mean It in City, State.', 'UA-60441835-3Test', 'UA-5678', '', 'DN71PMTtULvyG8OqeWGrqK8i0Lh3x0iK.jpg', ''),
(134, 'LACED_ST_Team_AllTruckJobs_LeadForm', 'LACED_ST_Team_AllTruckJobs_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', 'su1409kuqMOkMg7UlfucP7Fci4fVu4eC.png', '0SIozXrNRHs7n5aByvDRiVeSkDAtoxGe.png', 'lnALyAHJ5gauuLeJjLngdLddXZNlSwyA.png', 'UKZIUZHATl9OhNWzWCfy416chLPlYAC6.png', 'IDpErJONP6I0BNcjakU5LPRHvuX0VnKu.png', 'ZgzCKUU3DKz2uwLRgOb7dhxR7QYDBm9z.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call <span style=\"color:#D71E26\">(888) 888-8888</span> to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '866 984-3798', '2019-06-25 03:12:14', 1165, 'ST1', 'k4AaclGHJ48H9LXtqVrFwGD7VFw7w2R6.jpg', 'Drive Like You Mean It in City, State.', 'UA-60441835-3Test', 'UA-5678', '', 'DN71PMTtULvyG8OqeWGrqK8i0Lh3x0iK.jpg', ''),
(135, 'LACED_ST_Experienced_MediaPartner_LeadForm', 'LACED_ST_Experienced_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 Transition Package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Airfare, your single-occupancy room, breakfast, and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours. Expect Medical/Dental, 401(K), home time, a stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. Become a driver trainer and help new drivers learn the ropes!', 'su1409kuqMOkMg7UlfucP7Fci4fVu4eC.png', '0SIozXrNRHs7n5aByvDRiVeSkDAtoxGe.png', 'lnALyAHJ5gauuLeJjLngdLddXZNlSwyA.png', 'UKZIUZHATl9OhNWzWCfy416chLPlYAC6.png', 'IDpErJONP6I0BNcjakU5LPRHvuX0VnKu.png', 'ZgzCKUU3DKz2uwLRgOb7dhxR7QYDBm9z.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	EXPERIENCED CDL-A FLATBED DRIVERS WANTED!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call <span style=\"color:#D71E26\">(888) 888-8888</span> to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from 1 truck to over 700 trucks today. We are still family-owned, and still doing things with respect and hard-earned trust. Today, we are the largest flatbed carrier based on the West Coast, with customer and driver relationships exceeding 25 years ensuring stable routes for our drivers and lasting relationships that mean something. That&rsquo;s how we do things at System Transport. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport</p>\r\n', '888 888-8888', '2019-06-25 19:21:36', 1166, 'ST1', 'k4AaclGHJ48H9LXtqVrFwGD7VFw7w2R6.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3Test', 'UA-5678', '', 'DN71PMTtULvyG8OqeWGrqK8i0Lh3x0iK.jpg', ''),
(136, 'LACED_TWT_Experienced_AllTruckJobs_LeadForm', 'LACED_TWT_Experienced_AllTruckJobs_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call (888) 888-8888 to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '888 888-8888', '2019-06-25 19:34:53', 1167, 'ST1', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It With TWT Refrigerated Service.', 'UA-60441835-3Test', 'UA-5678', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(137, 'LACED_TWT_Experienced_AllTuckJobs_LeadForm', 'LACED_TWT_Experienced_AllTruckJobs_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call (888) 888-8888 to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '866 984-3798', '2019-06-25 20:53:04', 1168, 'ST1', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3Test', 'UA-5678', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(138, 'LACED_TWT_Experienced_AllTruckJobs_LeadForm', 'LACED_TWT_Experienced_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call (888) 888-8888 to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '866 984-3798', '2019-06-25 20:57:09', 1169, 'ST1', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It With TWT Refrigerated Service.', 'UA-60441835-3Test', 'UA-5678', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(139, 'LACED_TWT_Team_AllTruckJobs_LeadForm', 'LACED_TWT_Team_AllTruckJobs_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call (888) 888-8888 to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '866 984-3798', '2019-06-25 21:14:11', 1170, 'ST1', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3Test', 'UA-5678', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', '');
INSERT INTO `tbl_intermodal` (`id_intermodal`, `referral_code`, `intelliapp_referral_code`, `main_title`, `main_description`, `benef1_caption`, `benef2_caption`, `benef3_caption`, `benef4_caption`, `benef5_caption`, `benef6_caption`, `benef1_figure`, `benef2_figure`, `benef3_figure`, `benef4_figure`, `benef5_figure`, `benef6_figure`, `benef1_caption_title`, `benef2_caption_title`, `benef3_caption_title`, `benef4_caption_title`, `benef5_caption_title`, `benef6_caption_title`, `body_copy`, `phone`, `create_date`, `id_master`, `type`, `background`, `sub_title`, `ga_lp`, `ga_tp`, `background_mobile`, `region_graphic`, `region_graphic_mobile`) VALUES
(140, 'LACED_TWT_Team_MediaPartner_LeadForm', 'LACED_TWT_Team_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call (888) 888-8888 to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '888 888-8888', '2019-06-25 21:32:17', 1171, 'ST1', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3Test', 'UA-5678', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(141, 'LACED_ST_Experienced_Indeed_LeadForm', 'LACED_ST_Experienced_Indeed_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 Transition Package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Airfare, your single-occupancy room, breakfast, and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours. Expect Medical/Dental, 401(K), home time, a stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. Become a driver trainer and help new drivers learn the ropes!', 'su1409kuqMOkMg7UlfucP7Fci4fVu4eC.png', '0SIozXrNRHs7n5aByvDRiVeSkDAtoxGe.png', 'lnALyAHJ5gauuLeJjLngdLddXZNlSwyA.png', 'UKZIUZHATl9OhNWzWCfy416chLPlYAC6.png', 'IDpErJONP6I0BNcjakU5LPRHvuX0VnKu.png', 'ZgzCKUU3DKz2uwLRgOb7dhxR7QYDBm9z.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	EXPERIENCED CDL-A FLATBED DRIVERS WANTED!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call <span style=\"color:#D71E26\">(888) 888-8888</span> to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from 1 truck to over 700 trucks today. We are still family-owned, and still doing things with respect and hard-earned trust. Today, we are the largest flatbed carrier based on the West Coast, with customer and driver relationships exceeding 25 years ensuring stable routes for our drivers and lasting relationships that mean something. That&rsquo;s how we do things at System Transport. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport</p>\r\n', '888 888-8888', '2019-06-25 22:12:01', 1172, 'ST1', 'k4AaclGHJ48H9LXtqVrFwGD7VFw7w2R6.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3Test', 'UA-5678', '', 'DN71PMTtULvyG8OqeWGrqK8i0Lh3x0iK.jpg', ''),
(143, 'LACED_TWT_Team_Indeed_LeadForm', 'LACED_TWT_Team_Indeed_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover a stable work/life balance with home time, 401(K), vacation time, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for an exciting route in City, State!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package including $800 for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), home time, \r\na stable work/life balance and Paid Vacation Time.', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. You may even become a trainer to help new drivers learn the ropes! ', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	Experienced CDL-A Flatbed Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call (888) 888-8888 to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from a single truck to over 700 trucks! Today, we are the largest flatbed carrier based on the West Coast; still family-owned, and still doing things with respect, and hard-earned trust. We are proud of our customer and driver relationships, most of which exceed 25 years, ensuring stable routes for our drivers and lasting relationships. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport!</p>\r\n', '888 888-8888', '2019-06-25 22:40:33', 1174, 'TWT3', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3Test', 'UA-5678', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(144, 'LACED_TWT_Experienced_HeavyHaul_MediaPartner_LeadForm', 'LACED_TWT_Experienced_HeavyHaul_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest Heavy Haul Trucks and discover good home time, 401(K), vacation time, excellent benefits,&nbsp;and an annual pay package you can build your life around. We are hiring Experienced CDL Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 transition package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest. ', 'We host you in our office in Spokane, Washington. Your airfare, single-occupancy room, breakfast and lunch are all on us – dinner is your time to explore what Spokane has to offer.  Arrive Monday, get your truck Thursday. It’s that easy! ', 'Life happens - we are here to support yours.\r\nExpect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Heavy Haul or Refrigerated Van Routes, we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose Dedicated Routes with more home time. Become a driver trainer and help new drivers learn the ropes!', '2FBmqXPoxIXsVRDdzbjobCgnNPywEjvG.png', 'Yn3tKqLLYW3AmZ5BCF0qb92W9am4RJB6.png', 'AY4cCxKlT2TfyDBVhm1S6mSnsDm2baMx.png', 'rmSXfB6sfp6aKaqwqzE7zxeEg2r3AeAh.png', 'A4hVLLXkei114BmWgwmXFt9rKWEH4tS0.png', 'LwBOn9oq65Ffzj56xQqqgWYFkWRyuK8A.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with TWT Refrigerated', '<h2>\r\n	Experienced CDL-A Heavy Haul Drivers Wanted!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Heavy Haul Truck Route located in City, State, seeking Experienced CDL Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to TWT Refrigerated Service than any other carrier! <span style=\"font-weight: bold\">Call <span style=\"color: #EC9F23\">(888) 888-8888</span> to learn more!</span></p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago, and why we run over 150 trucks today. We are still family-owned, and still doing things with respect and hard-earned trust. Today, we are a temperature controlled refrigerated van line operating primarily in the 11 western states and teams servicing the southeast. In addition to our over the road fleet of refrigerated vans, we offer a northwest regional fleet providing heavy haul dry vans pulling freight up to 60,000 lbs. With customer and driver relationships that exceed 25 years, you can expect stable routes and lasting relationships that mean something. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with TWT Refrigerated Service!</p>\r\n', '888 888-8888', '2019-06-26 03:43:34', 1175, 'TWT1', '4kw4uszXHkOdaNuy0tLR86oAeY6fbP87.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-2', 'UA-60441835-6', '', 'Dqz4KqAv5jFUrAvI5ptUnZc6pr1g6Oj7.jpg', ''),
(145, 'LACED_JJW_Experienced_Tanker_MediaPartner_LeadForm', 'LACED_JJW_Experienced_Tanker_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest tanker trucks and discover good home time, 401K, vacation time, excellent benefits, and an annual pay package you can build your life around. Hiring Experienced CDL Tanker Truck Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 Transition Package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Airfare, your single-occupancy room, breakfast, and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours. Expect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Singles or doubles, hazmat to food - we have it all! Choose exciting routes throughout the Pacific Northwest, with complex loads to challenge you, build and improve your skills. Become a driver trainer and help new drivers learn the ropes! ', '86PTkNBrWVrY2fbobc74DiQuoJ8VTgdQ.png', '88uoIlQfqWSMCh0FgruhSeygdXQJLFLk.png', 'G14tTULTofB8aUyBn9k3WK4ehTelDTqa.png', 'I6b1NzY40F5ImOsMHZ9nEwPzuAQcqAuu.png', 'oXL73rCmfxmrgHlqolg03phUGNflpVkX.png', 'jnxrXwad3tWGtiWnNQcDTlfYiZds1EG0.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with James J. Williams', '<h2>\r\n	EXPERIENCED CDL-A TANKER TRUCK DRIVERS WANTED!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Tanker Route located in City, State! We are seeking Experienced CDL Tanker Truck Drivers now! This route offers Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to James J. Williams than any other carrier! <span style=\"font-weight: bold\">Call <span style=\"color: #005844\">(888) 888-8888</span> to learn more!</span></p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	Since 1926 we have been hauling dry and liquid bulk freight, we are 4th generation family-owned, and still doing things with respect and hard-earned trust. We specialize in the safe transportation of bulk chemical, food, and petroleum products. Our growing fleet of 80 late model trucks and 115 trailers are all outfitted with the latest safety and satellite technology. With customer and driver relationships that exceed 25 years, you can expect stable routes and lasting relationships that mean something. That&rsquo;s how we do things. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with James J. Williams!</p>\r\n', '888 888-8888', '2019-06-26 05:07:16', 1176, 'JJW1', '6BJTIShJq4GTRDT1Qb2ctPaFxaIuvkms.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-4', 'UA-60441835-7', '', 'lnfuo5uS1i1GvvwxbY07xK65x43euXg8.jpg', ''),
(146, 'LACED_ST_Experienced_MediaPartner_LeadForm', 'LACED_ST_Experienced_MediaPartner_Intelliapp', 'Drive Like You Mean It<span>.</span><br /> Drive To Retire<span>.</span>', '<p>\r\n	Work in City, State! Drive the newest flatbed trucks and discover good home time, 401(K), vacation time, excellent benefits, and an annual pay package you can build your life around. Hiring Experienced CDL Flatbed Truck Drivers for this exciting route!</p>\r\n', 'Pay Packages you can plan your life around. Pick/drop pay, Tarp pay, Pay Per Mile, and more! Weekly Pay + Direct Deposit.', 'Changing jobs is never easy - that’s why our transition package invests in you. We offer a $1,600 Transition Package; $800 of which is allotted for orientation for your first 2 weeks so you can focus on driving while we take care of the rest.', 'We host you in our office in Spokane, Washington. Airfare, your single-occupancy room, breakfast, and lunch are all on us – dinner is your time to explore what Spokane has to offer. Arrive Monday, get your truck Thursday. It’s that easy!', 'Life happens - we are here to support yours. Expect Medical/Dental, 401(K), Good Home Time, Paid Vacation Time, and more!', 'Cutting-edge technologies & best-in-class equipment! Our tractors have an average age of just 2.5 years, and each is equipped with the latest safety technologies, and driver amenities like APU’s, inverters, refrigerators, and more!', 'Flatbed, Specialized, or Heavy-Haul we have them all! Drive alone or as a team. Get challenged, build, and improve your skills with complex loads for Specialized Fleets or choose dedicated routes with more home time. Become a driver trainer and help new drivers learn the ropes!', 'su1409kuqMOkMg7UlfucP7Fci4fVu4eC.png', '0SIozXrNRHs7n5aByvDRiVeSkDAtoxGe.png', 'lnALyAHJ5gauuLeJjLngdLddXZNlSwyA.png', 'UKZIUZHATl9OhNWzWCfy416chLPlYAC6.png', 'IDpErJONP6I0BNcjakU5LPRHvuX0VnKu.png', 'ZgzCKUU3DKz2uwLRgOb7dhxR7QYDBm9z.png', 'Great Pay Package', 'Transition Pay', 'Paid Orientation & Training', 'Excellent Benefits', 'Modern Equipment & Comfort', 'A Career Path with System Transport', '<h2>\r\n	EXPERIENCED CDL-A FLATBED DRIVERS WANTED!</h2>\r\n<h3>\r\n	<strong>What Drives You?</strong></h3>\r\n<p>\r\n	We have an exciting Flatbed Route located in City, State, seeking Experienced CDL Flatbed Drivers now! This route offers Good Home Time, Consistent Freight, Full Benefits, Paid Vacation, and more! Discover why more drivers refer others to System Transport than any other carrier! Call <span style=\"color:#D71E26\">(888) 888-8888</span> to learn more!</p>\r\n<h3>\r\n	<strong>We Say What We Mean and We Do What We Say.</strong></h3>\r\n<p>\r\n	That&rsquo;s how this company was built over 4 decades ago from 1 truck to over 700 trucks today. We are still family-owned, and still doing things with respect and hard-earned trust. Today, we are the largest flatbed carrier based on the West Coast, with customer and driver relationships exceeding 25 years ensuring stable routes for our drivers and lasting relationships that mean something. That&rsquo;s how we do things at System Transport. Driving means something to us here - loyalty, family, and a place to retire.</p>\r\n<h3>\r\n	<strong>Drive Like You Mean It.</strong></h3>\r\n<p>\r\n	What does driving mean to you? We are guessing a lot. Whether you are driving for better pay, excellent benefits, for your family, or just building a better life for yourself - Drive like you mean it and retire with System Transport</p>\r\n', '888 888-8888', '2019-07-09 21:24:29', 1177, 'ST1VB', 'k4AaclGHJ48H9LXtqVrFwGD7VFw7w2R6.jpg', 'Drive Like You Mean It in City, State!', 'UA-60441835-3', 'UA-60441835-5', '', 'DN71PMTtULvyG8OqeWGrqK8i0Lh3x0iK.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_landing_page`
--

CREATE TABLE `tbl_landing_page` (
  `id_landing_page` int(10) UNSIGNED NOT NULL,
  `url` text NOT NULL,
  `id_provider` int(10) UNSIGNED NOT NULL,
  `job_target_referral_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_landing_page`
--

INSERT INTO `tbl_landing_page` (`id_landing_page`, `url`, `id_provider`, `job_target_referral_code`) VALUES
(2, 'https://www.facebook.com/', 1, 'test123'),
(3, 'https://twitter.com/', 2, 'test1111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads`
--

CREATE TABLE `tbl_leads` (
  `id_lead` int(10) UNSIGNED NOT NULL,
  `referral_code` varchar(255) NOT NULL,
  `state` varchar(5) NOT NULL,
  `city` varchar(45) NOT NULL,
  `leads` int(11) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_leads`
--

INSERT INTO `tbl_leads` (`id_lead`, `referral_code`, `state`, `city`, `leads`, `date`) VALUES
(1, 'LACED_ST_Team_AllTruckJobs_LeadForm', 'ca', 'los angeles', 1, '2019-06-27'),
(2, 'LACED_ST_Team_AllTruckJobs_LeadForm', 'ca', 'los angeles', 7, '2019-06-28'),
(3, 'LACED_ST_Experienced_MediaPartner_LeadForm', 'ca', 'los angeles', 1, '2019-06-28'),
(4, 'LACED_JJW_Experienced_Tanker_MediaPartner_LeadForm', 'ca', 'los angeles', 9, '2019-07-02'),
(5, 'LACED_JJW_Experienced_Tanker_MediaPartner_LeadForm', 'ca', 'los angeles', 2, '2019-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads_archive`
--

CREATE TABLE `tbl_leads_archive` (
  `id_lead` int(10) UNSIGNED NOT NULL,
  `referral_code` varchar(255) NOT NULL,
  `state` varchar(5) NOT NULL,
  `city` varchar(45) NOT NULL,
  `leads` int(11) NOT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads_information`
--

CREATE TABLE `tbl_leads_information` (
  `id_info` int(10) UNSIGNED NOT NULL,
  `given_name` varchar(100) DEFAULT NULL,
  `family_name` varchar(100) DEFAULT NULL,
  `municipality` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `primary_phone` varchar(20) DEFAULT NULL,
  `app_referrer` varchar(100) DEFAULT NULL,
  `moving_violation` varchar(100) DEFAULT NULL,
  `cdl_field` varchar(100) DEFAULT NULL,
  `veteran_field` varchar(5) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master`
--

CREATE TABLE `tbl_master` (
  `id_master` int(10) UNSIGNED NOT NULL,
  `path` text NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `template_type` varchar(20) NOT NULL,
  `swap_base` tinyint(4) DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `id_swap` int(11) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_master`
--

INSERT INTO `tbl_master` (`id_master`, `path`, `publisher`, `title`, `template_type`, `swap_base`, `status`, `id_swap`, `create_date`) VALUES
(1153, 'systemtrans-experienced-cdl-a-drivers', 'System Trans - Exp Base', 'System Trans | Experience CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-06 04:09:40'),
(1156, 'jjw-experienced-cdl-a-bulk-transport-tanker-drivers', 'JJW - Exp - Bulk Transport Tanker Base', 'JJW | Experience CDL A Drivers | Bulk Transport Tanker', 'tbl_intermodal', 0, 1, NULL, '2019-06-18 06:36:12'),
(1157, 'twt-experienced-cdl-a-drivers-refrigerated', 'TWT Experienced Refrigerated Base', 'TWT | Experience CDL A Drivers | Refrigerated', 'tbl_intermodal', 0, 1, NULL, '2019-06-19 06:17:07'),
(1158, 'systemtrans-recent-cdl-a-drivers', 'System Trans - Recent CDL-A Base', 'System Trans | Recent CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-21 01:03:10'),
(1159, 'twt-recent-cdl-a-drivers', 'TWT Recent CDL-A Base', 'TWT | Recent CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-21 01:03:10'),
(1160, 'twt-team-cdl-a-drivers', 'TWT Team CDL-A Base', 'TWT | Team CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-21 01:03:10'),
(1164, 'systemtrans-team-cdl-a-drivers', 'System Trans - Team Base', 'System Trans | Team CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-24 21:38:12'),
(1165, 'team-cdl-a-drivers/alltruckjobs', 'All Truck Jobs', 'System Trans | Team CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-25 03:12:14'),
(1166, 'experience-cdl-a-drivers/alltruckjobs', 'All Truck Jobs', 'System Trans | Experience CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-25 19:21:36'),
(1167, 'experienced-cdl-a-drivers/alltruckjobs-versionA-oregon', 'All Truck Jobs', 'TWT | Experience CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-25 19:34:53'),
(1168, 'experience-cdl-a-drivers/alltruckjobs/california/versionA', 'All Truck Jobs', 'TWT | Experience CDL A Drivers', 'tbl_intermodal', 0, 0, NULL, '2019-06-25 20:53:04'),
(1169, 'experience-cdl-a-drivers/alltruckjobs-WA', 'All Truck Jobs', 'TWT | Experience CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-25 20:57:09'),
(1170, 'team-cdl-a-drivers/alltruckjobs', 'All Truck Jobs', 'TWT | Team CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-25 21:14:11'),
(1171, 'team-cdl-a-drivers/alltruckjobs-WA', 'TWT Team CDL-A Base - TEST', 'TWT | Team CDL A Drivers', 'tbl_intermodal', 0, 0, NULL, '2019-06-25 21:32:17'),
(1172, 'experienced-cdl-a-drivers/indeed', 'Indeed', 'System Trans | Experienced CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-25 22:12:01'),
(1174, 'team-cdl-a-drivers/indeed/alabama-1', 'Indeed', 'TWT | Team CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-06-25 22:40:33'),
(1175, 'randallreilly/twt-experienced-cdl-a-drivers-heavy-haul', 'TWT Experienced Heavy Haul Base', 'TWT | Experienced CDL A Drivers | Heavy Haul', 'tbl_intermodal', 0, 1, NULL, '2019-06-26 03:43:34'),
(1176, 'jjw-experienced-cdl-a-drivers/randallreilly/versionA', 'Randall Reilly - GA', 'JJW | Experience CDL A Drivers | Tanker', 'tbl_intermodal', 0, 1, NULL, '2019-06-26 05:07:16'),
(1177, 'systemtrans-experienced-cdl-a-drivers-version-b', 'System Trans - Exp Base Version B', 'System Trans | Experience CDL A Drivers', 'tbl_intermodal', 0, 1, NULL, '2019-07-09 21:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_output_xml`
--

CREATE TABLE `tbl_output_xml` (
  `id_output` int(10) UNSIGNED NOT NULL,
  `tenstreet_xml` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_output_xml`
--

INSERT INTO `tbl_output_xml` (`id_output`, `tenstreet_xml`, `create_date`) VALUES
(26, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-22 0:30:57</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>101927434</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 101927434 completed and inserted.</Description><TenstreetLogId>511541</TenstreetLogId></TenstreetResponse>\n', '2019-06-22 05:30:59'),
(27, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-22 0:31:23</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>101927446</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 101927446 completed and inserted.</Description><TenstreetLogId>511551</TenstreetLogId></TenstreetResponse>\n', '2019-06-22 05:31:24'),
(28, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-22 0:31:49</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>101927448</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 101927448 completed and inserted.</Description><TenstreetLogId>511552</TenstreetLogId></TenstreetResponse>\n', '2019-06-22 05:31:50'),
(29, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>132.148.196.19</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-24 21:49:35</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102080332</ApplicationId><DriverName>Trial Test</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102080332 completed and inserted.</Description><TenstreetLogId>613086</TenstreetLogId></TenstreetResponse>\n', '2019-06-25 02:49:35'),
(30, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-27 1:10:04</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102235653</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102235653 completed and inserted.</Description><TenstreetLogId>694011</TenstreetLogId></TenstreetResponse>\n', '2019-06-27 06:10:05'),
(31, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 1:20:07</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102307534</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102307534 completed and inserted.</Description><TenstreetLogId>729263</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 06:20:09'),
(32, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 1:20:49</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102307552</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102307552 completed and inserted.</Description><TenstreetLogId>729278</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 06:20:50'),
(33, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 1:21:04</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102307553</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102307553 completed and inserted.</Description><TenstreetLogId>729279</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 06:21:05'),
(34, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 1:27:24</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102307642</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102307642 completed and inserted.</Description><TenstreetLogId>729319</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 06:27:25'),
(35, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 1:28:22</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102307649</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102307649 completed and inserted.</Description><TenstreetLogId>729358</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 06:28:23'),
(36, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 1:38:40</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102307739</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102307739 completed and inserted.</Description><TenstreetLogId>729472</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 06:38:42'),
(37, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 1:39:17</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102307746</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102307746 completed and inserted.</Description><TenstreetLogId>729474</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 06:39:18'),
(38, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-06-28 2:07:25</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102308232</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102308232 completed and inserted.</Description><TenstreetLogId>729967</TenstreetLogId></TenstreetResponse>\n', '2019-06-28 07:07:26'),
(39, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-01 19:23:21</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102510802</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102510802 completed and inserted.</Description><TenstreetLogId>849753</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 00:23:23'),
(40, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-01 19:31:53</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102511339</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102511339 completed and inserted.</Description><TenstreetLogId>850066</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 00:31:53'),
(41, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-01 19:35:23</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102511467</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102511467 completed and inserted.</Description><TenstreetLogId>850152</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 00:35:23'),
(42, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-01 19:36:57</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102511552</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102511552 completed and inserted.</Description><TenstreetLogId>850220</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 00:36:58'),
(43, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-01 19:38:17</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102511589</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102511589 completed and inserted.</Description><TenstreetLogId>850233</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 00:38:17'),
(44, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-01 19:38:59</DateTime><Mode>LIVE</Mode><SSN/><ApplicationId>102511607</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102511607 completed and inserted.</Description><TenstreetLogId>850245</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 00:39:00'),
(45, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-02 3:10:19</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102528044</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102528044 completed and inserted.</Description><TenstreetLogId>862667</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 08:10:19'),
(46, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-02 3:11:04</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102528057</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102528057 completed and inserted.</Description><TenstreetLogId>862677</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 08:11:05'),
(47, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-02 3:12:10</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102528087</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102528087 completed and inserted.</Description><TenstreetLogId>862706</TenstreetLogId></TenstreetResponse>\n', '2019-07-02 08:12:10'),
(48, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-03 3:58:09</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102612746</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102612746 completed and inserted.</Description><TenstreetLogId>910516</TenstreetLogId></TenstreetResponse>\n', '2019-07-03 08:58:11'),
(49, '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<TenstreetResponse><Version>1.1</Version><SourceIpAddress>76.171.114.75</SourceIpAddress><CompanyPostedToId>806</CompanyPostedToId><DateTime>2019-07-03 3:59:22</DateTime><Mode>LIVE</Mode><SSN></SSN><ApplicationId>102612749</ApplicationId><DriverName>Alex Rodron</DriverName><Status>Accepted</Status><Description>Driver demographic data inserted. Accepted - application 102612749 completed and inserted.</Description><TenstreetLogId>910530</TenstreetLogId></TenstreetResponse>\n', '2019-07-03 08:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_missing`
--

CREATE TABLE `tbl_page_missing` (
  `id_page` int(10) UNSIGNED NOT NULL,
  `path` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provider`
--

CREATE TABLE `tbl_provider` (
  `id_provider` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_provider`
--

INSERT INTO `tbl_provider` (`id_provider`, `name`) VALUES
(1, 'Provider 1'),
(2, 'Provider 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publisher`
--

CREATE TABLE `tbl_publisher` (
  `id_publisher` int(10) UNSIGNED NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_publisher`
--

INSERT INTO `tbl_publisher` (`id_publisher`, `publisher`, `create_date`) VALUES
(1, 'simply-hired', '2015-07-17 21:07:27'),
(2, 'simplyhired', '2015-07-17 21:07:27'),
(3, 'craigslist', '2015-07-17 21:07:27'),
(4, 'yahoobing', '2015-07-17 21:07:27'),
(5, 'ziprecruiter', '2015-07-17 21:07:27'),
(6, 'google21', '2015-07-17 21:07:27'),
(7, 'google', '2015-07-17 21:07:27'),
(8, 'monster', '2015-07-17 21:07:28'),
(9, 'yahoo', '2015-07-17 21:07:28'),
(10, 'indeed', '2015-07-17 21:07:28'),
(11, 'linkup', '2015-07-17 21:07:28'),
(12, 'snagajob', '2015-07-17 21:07:28'),
(13, 'zip', '2015-07-17 21:07:28'),
(14, 'truckdrivingjobs', '2015-07-17 21:07:28'),
(15, 'truckjobseekers', '2015-07-17 21:07:28'),
(16, 'rhinolabs', '2015-07-17 21:07:28'),
(17, 'randallretargeting', '2015-07-17 21:07:28'),
(18, 'mas-lp', '2015-07-17 21:07:28'),
(19, 'juju', '2015-07-17 21:07:28'),
(20, 'jobsintrucks', '2015-07-17 21:07:28'),
(21, 'jobs2careers', '2015-07-17 21:07:28'),
(22, 'hire-veterans', '2015-07-17 21:07:28'),
(23, 'hireveterans', '2015-07-17 21:07:28'),
(24, 'adroll', '2015-07-17 21:07:28'),
(25, 'facebook', '2015-07-17 21:07:28'),
(26, 'employmentguide', '2015-07-17 21:07:28'),
(27, 'employment-network', '2015-07-17 21:07:28'),
(28, 'cdlcareernow', '2015-07-17 21:07:28'),
(29, 'cdlcareersnow', '2015-07-17 21:07:28'),
(30, 'careersingear', '2015-07-17 21:07:28'),
(31, 'careerbuilder', '2015-07-17 21:07:28'),
(32, 'appcast', '2015-07-17 21:07:28'),
(33, 'americandrivernetwork', '2015-07-17 21:07:28'),
(34, 'steelhousepilot', '2015-07-17 21:07:28'),
(35, 'rleadgen', '2015-07-17 21:07:28'),
(36, 'regionalhelpwanted', '2015-07-17 21:07:28'),
(37, 'findatruckerjob', '2015-07-17 21:07:28'),
(38, 'everytruckjob', '2015-07-17 21:07:28'),
(39, 'truckjobseekers', '2015-07-17 21:07:28'),
(40, 'sys-trans-version-a', '2019-06-05 07:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_q2_2016`
--

CREATE TABLE `tbl_q2_2016` (
  `id_q2_2016` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `main_title` varchar(45) NOT NULL,
  `main_description` text NOT NULL,
  `benef1_caption` varchar(100) NOT NULL,
  `benef2_caption` varchar(100) NOT NULL,
  `benef3_caption` varchar(100) NOT NULL,
  `benef4_caption` varchar(100) NOT NULL,
  `benef5_caption` varchar(100) NOT NULL,
  `benef6_caption` varchar(100) NOT NULL,
  `benef1_figure` varchar(64) NOT NULL,
  `benef2_figure` varchar(64) NOT NULL,
  `benef3_figure` varchar(64) NOT NULL,
  `benef4_figure` varchar(64) NOT NULL,
  `benef5_figure` varchar(64) NOT NULL,
  `benef6_figure` varchar(64) NOT NULL,
  `bottom_headline_copy` text NOT NULL,
  `bottom_body_copy` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` enum('Q2') DEFAULT 'Q2',
  `logo` varchar(45) DEFAULT NULL,
  `logo_mobile` varchar(45) DEFAULT NULL,
  `background` varchar(60) DEFAULT NULL,
  `background_mobile` varchar(60) DEFAULT NULL,
  `ga_lp` varchar(45) DEFAULT NULL,
  `ga_tp` varchar(45) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recent_student`
--

CREATE TABLE `tbl_recent_student` (
  `id_recent_student` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `main_title` varchar(45) NOT NULL,
  `main_description` text NOT NULL,
  `benef1_caption` varchar(100) NOT NULL,
  `benef2_caption` varchar(100) NOT NULL,
  `benef3_caption` varchar(100) NOT NULL,
  `benef4_caption` varchar(100) NOT NULL,
  `benef5_caption` varchar(100) NOT NULL,
  `benef6_caption` varchar(100) NOT NULL,
  `benef1_figure` varchar(64) NOT NULL,
  `benef2_figure` varchar(64) NOT NULL,
  `benef3_figure` varchar(64) NOT NULL,
  `benef4_figure` varchar(64) NOT NULL,
  `benef5_figure` varchar(64) NOT NULL,
  `benef6_figure` varchar(64) NOT NULL,
  `bottom_headline_copy` text NOT NULL,
  `bottom_body_copy` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` enum('R','RDT','S','SDT','E','EDT','D','I','REFRI','ND','ECAN') NOT NULL,
  `version` int(10) DEFAULT '1',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL,
  `background` varchar(60) DEFAULT NULL,
  `background_mobile` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rhinolabs_form`
--

CREATE TABLE `tbl_rhinolabs_form` (
  `id_form` int(10) UNSIGNED NOT NULL,
  `referral_code` text,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `street_address` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(4) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `moving_violation` varchar(45) DEFAULT NULL,
  `cdl_valid` varchar(10) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_short_hr`
--

CREATE TABLE `tbl_short_hr` (
  `id_url` int(10) UNSIGNED NOT NULL,
  `real_url` varchar(255) NOT NULL,
  `short_url` varchar(50) NOT NULL,
  `analytic_url` varchar(100) NOT NULL,
  `job_title` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id_state` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `acronym` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id_state`, `name`, `acronym`) VALUES
(62, 'ALABAMA', 'AL'),
(63, 'ALASKA', 'AK'),
(64, 'AMERICAN SAMOA', 'AS'),
(65, 'ARIZONA', 'AZ'),
(67, 'ARKANSAS', 'AR'),
(68, 'CALIFORNIA', 'CA'),
(69, 'COLORADO', 'CO'),
(70, 'CONNECTICUT', 'CT'),
(71, 'DELAWARE', 'DE'),
(72, 'DISTRICT OF COLUMBIA', 'DC'),
(73, 'FEDERATED STATES OF MICRONESIA', 'FM'),
(74, 'FLORIDA', 'FL'),
(75, 'GEORGIA', 'GA'),
(76, 'GUAM GU', 'GU'),
(77, 'HAWAII', 'HI'),
(78, 'IDAHO', 'ID'),
(79, 'ILLINOIS', 'IL'),
(80, 'INDIANA', 'IN'),
(81, 'IOWA', 'IA'),
(82, 'KANSAS', 'KS'),
(83, 'KENTUCKY', 'KY'),
(84, 'LOUISIANA', 'LA'),
(85, 'MAINE', 'ME'),
(86, 'MARSHALL ISLANDS', 'MH'),
(87, 'MARYLAND', 'MD'),
(88, 'MASSACHUSETTS', 'MA'),
(89, 'MICHIGAN', 'MI'),
(90, 'MINNESOTA', 'MN'),
(91, 'MISSISSIPPI', 'MS'),
(92, 'MISSOURI', 'MO'),
(93, 'MONTANA', 'MT'),
(94, 'NEBRASKA', 'NE'),
(95, 'NEVADA', 'NV'),
(96, 'NEW HAMPSHIRE', 'NH'),
(97, 'NEW JERSEY', 'NJ'),
(98, 'NEW MEXICO', 'NM'),
(99, 'NEW YORK', 'NY'),
(100, 'NORTH CAROLINA', 'NC'),
(101, 'NORTH DAKOTA', 'ND'),
(102, 'NORTHERN MARIANA ISLANDS', 'MP'),
(103, 'OHIO', 'OH'),
(104, 'OKLAHOMA', 'OK'),
(105, 'OREGON', 'OR'),
(106, 'PALAU', 'PW'),
(107, 'PENNSYLVANIA', 'PA'),
(108, 'PUERTO RICO', 'PR'),
(109, 'RHODE ISLAND', 'RI'),
(110, 'SOUTH CAROLINA', 'SC'),
(111, 'SOUTH DAKOTA', 'SD'),
(112, 'TENNESSEE', 'TN'),
(113, 'TEXAS', 'TX'),
(114, 'UTAH', 'UT'),
(115, 'VERMONT', 'VT'),
(116, 'VIRGIN ISLANDS', 'VI'),
(117, 'VIRGINIA', 'VA'),
(118, 'WASHINGTON', 'WA'),
(119, 'WEST VIRGINIA', 'WV'),
(120, 'WISCONSIN', 'WI'),
(121, 'WYOMING', 'WY'),
(122, 'ARMED FORCES AFRICA \\ CANADA \\ EUROPE \\ MIDDL', 'AE'),
(123, 'ARMED FORCES AMERICA (EXCEPT CANADA)', 'AA'),
(124, 'ARMED FORCES PACIFIC', 'AP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tenstreet_report`
--

CREATE TABLE `tbl_tenstreet_report` (
  `id_report` int(10) UNSIGNED NOT NULL,
  `referrer_code` varchar(100) NOT NULL,
  `new` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `reapply` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `attending_outside_school` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `attempting_contact` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `interview` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `recruiting` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `pending_investigations` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `online_course` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `awaiting_permit` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hireright_requested` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `rehire_submitted` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `ready_for_processing` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `processing` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `processing_complete` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `attending_school` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `attending_academy` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `left_sch` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `left_academy` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `dl170_testing` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `graduated_sch` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `failed_sch` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `compliance` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `driver_reactivation` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `no_show` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `left_orientation` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hold` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `ready_for_audit` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `audit` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `audit_deficiencies` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `ok_to_code` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `paf_entered` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hired` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `not_qualified` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `not_interested` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `no_response` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `duplicate_app` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `xfer_allowed` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `unqualified_da` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `do_not_contact` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `upload` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `total` mediumint(5) UNSIGNED NOT NULL DEFAULT '0',
  `id_group` int(10) UNSIGNED NOT NULL,
  `referrer_code_crc` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_truckdriver`
--

CREATE TABLE `tbl_truckdriver` (
  `id_truckdriver` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `header_html` text NOT NULL,
  `description_html` text NOT NULL,
  `background` varchar(50) NOT NULL,
  `phone_number_1` varchar(45) NOT NULL,
  `phone_number_2` varchar(45) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_truckjob`
--

CREATE TABLE `tbl_truckjob` (
  `id_truckjob` int(10) UNSIGNED NOT NULL,
  `referral_code` text NOT NULL,
  `intelliapp_referral_code` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `background` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_master` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_url_posting`
--

CREATE TABLE `tbl_url_posting` (
  `UID` varchar(64) NOT NULL,
  `id_state` int(10) UNSIGNED NOT NULL,
  `id_provider` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_url_posting`
--

INSERT INTO `tbl_url_posting` (`UID`, `id_state`, `id_provider`) VALUES
('286o7FUUg78DHda', 124, 1),
('2bHWkpOKjjobSIM', 91, 1),
('359dtl5mnbcSzKF', 78, 1),
('4H5lQegWagpoSrc', 74, 2),
('6bE9nVLutD5VI9K', 75, 2),
('6GiRB1nWam2dVXz', 96, 2),
('6WC2XZzzXXHXqpl', 123, 1),
('78iz8tS0Q6hju4R', 110, 2),
('7AIHMc8wg39vJ7U', 99, 2),
('7E4zNNhrnSL5VQw', 64, 1),
('8EDA2dTF38taNF9', 78, 2),
('92TEH4bSCoavGiV', 118, 2),
('AIkFi7tzyRrkWma', 67, 1),
('bfGpbL04Y9P4B8a', 117, 2),
('BP9obST15QvoxN3', 76, 1),
('C7wJfY4bdsQpv2E', 67, 2),
('CbYxVnu72tj6vXz', 79, 1),
('CdppxfxFIDnoibf', 118, 1),
('cj2JqOie7ZBpr8F', 88, 1),
('cKbJtrHxCV0tkwv', 69, 2),
('CnM6dNN3IWFw2bw', 62, 2),
('cpzb7aYA82p1eZb', 73, 1),
('CUBkp8ymxYHcCDv', 101, 1),
('cY0lPOdPoDNFzz9', 96, 1),
('D95ynY9zQThyY7B', 113, 2),
('DfZYV2NKAhBgNFx', 124, 2),
('dlYHAMtX4OTcA9h', 71, 1),
('DPrPyVggtTbtnwZ', 71, 2),
('dTKZrWg6UfG1z1X', 102, 1),
('eDlF3OPytRFw3hf', 122, 2),
('ELAzGp8OMhNL67w', 84, 2),
('EVLr3vnE7j6QxS3', 114, 2),
('EY4eyKEGyqXmc4u', 86, 2),
('F0IOTYElAerYfwX', 93, 2),
('F5qqQDZ1PGMdYpJ', 63, 1),
('fls8JHEzBkH24qO', 62, 1),
('G49kFcyyRBHlMu0', 80, 2),
('gfgYX2b5zr9IXSQ', 101, 2),
('gfLxcgEXZA7kkWg', 100, 1),
('gHBeexCJEEcYKHV', 81, 1),
('gI9RNRZzqYgWLuP', 94, 1),
('HkaIZEfWqe1m1uZ', 117, 1),
('HrKVJwk8Y53yVlD', 94, 2),
('I0CYu1Ek7QNtTLc', 65, 2),
('iesoziCQfN6EcZ6', 76, 2),
('IrJkGYRiIwXUvIC', 83, 1),
('IuXWCQ24nGkR1Sb', 87, 2),
('J2h4GX09wOl7lzZ', 109, 2),
('JAPZItusD4KOmce', 72, 1),
('JLlZyvMBdemz4wc', 122, 1),
('JqNjP88s5HGEORt', 116, 1),
('Jr3bhB7ySAr44PA', 73, 2),
('jRWq7sUPTmhwZR7', 111, 1),
('KKFnI9pnuxei074', 68, 2),
('KvBaVrNVtDCfQAF', 65, 1),
('kwapKIaopJPn51r', 88, 2),
('kxWZx96SsBAXhb2', 82, 1),
('lHIqSjDxNXGiPY6', 83, 2),
('lk68rkWfoEc3bef', 64, 2),
('Ln8QBQSSI0H2igj', 105, 2),
('MngtoFQ5csm2YIJ', 63, 2),
('MTAWBABRx15yo72', 119, 1),
('MuUVPz7n8ZYPkLj', 82, 2),
('mXqH5NCfxuzEo7G', 100, 2),
('nKfNaM2HsLlQaD1', 120, 1),
('NMmYb7Hlw64mu9o', 90, 2),
('o3KamsUXJbc8YLS', 107, 1),
('o5i3eFY0asEfnmp', 77, 2),
('o8pcql4vUd8XVqq', 104, 2),
('OaN7JVBCWrIdLdh', 112, 2),
('OcAokPCXydz6aPT', 114, 1),
('OHA5I8MyYHwNdT4', 92, 1),
('P0EZd7ljuIuGA4q', 80, 1),
('pkA8edCJBBxWgNj', 112, 1),
('PlSAljxBprQ6tq7', 104, 1),
('ppwcvsScnfdBEXj', 97, 1),
('PvdV4ATd9K6ri5y', 115, 2),
('Pvk8nVaKRk6Uy1R', 98, 2),
('QDSrYhzwD7vkk7Y', 103, 1),
('qgLjHKAhhepMzJU', 105, 1),
('QmM6WFGVn1doKHi', 95, 1),
('qpV0mwBYn80tHoB', 121, 1),
('qsd8T6sxDfukxkj', 85, 2),
('r2an2Hw9zZKaX1l', 84, 1),
('R6aNxigr7aNoGNg', 113, 1),
('RfNhWS5y8D3IhsQ', 102, 2),
('rFsQRScVn68w44W', 106, 2),
('rjUKoXbFYc32Dtk', 77, 1),
('RubyTmjTrh3hmFp', 119, 2),
('ryf7DvJazhahsqQ', 70, 1),
('Skr9KBKviXFr1W3', 108, 1),
('stJUCuvnZNlEfmB', 110, 1),
('Svg88V6WZsdB2Nd', 72, 2),
('SWgzTAZHki1JtTr', 93, 1),
('t6G5gCw4x0HafyL', 68, 1),
('TedGXhbEdY3GJnE', 87, 1),
('tG0EuxWLZ4VNsCA', 115, 1),
('TJuFbxayciSi8qa', 116, 2),
('U1ECQxAuTbJk9YR', 95, 2),
('U1T8IRqTvERykBW', 89, 1),
('U4fc7tS6u2y8hWu', 79, 2),
('uPkDGWtzObAweSM', 107, 2),
('V8tfOLmhlV8Mg58', 69, 1),
('vl7fwtHqrrCDAAp', 109, 1),
('VNehLppsKVzPh4Y', 92, 2),
('W9hWv6LIW9lJOVi', 98, 1),
('WJ8SfQsCA6n04Zr', 91, 2),
('wJMmIuPdXtiHhET', 74, 1),
('WNUdSAbSKIH5P2F', 111, 2),
('Wo5bBdFtj9vShNP', 81, 2),
('Wow6LyNiHnirxft', 86, 1),
('wPrpt9uE172cCJu', 120, 2),
('wRj52qg11o3qqiq', 75, 1),
('XI5dH2gS7Pjhyg9', 103, 2),
('yBZJ9T5sNxKRO7w', 121, 2),
('YgfDEYN4lhBzzCH', 70, 2),
('yjr0aiSmegtnNyr', 108, 2),
('YlHuxdXpqkEDWiB', 99, 1),
('YOg1xGQPUXPwngF', 90, 1),
('yPRyz0rEtfce61l', 123, 2),
('yRActqJ3VDfFYoD', 97, 2),
('yzgq9BKHca93hCt', 106, 1),
('ZKNI4uHVNpsLjXt', 85, 1),
('zKWwHzmJEKqYCrQ', 89, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('A','U') NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `access_token` varchar(100) NOT NULL,
  `auth_key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `first_name`, `last_name`, `password`, `email`, `role`, `status`, `create_date`, `access_token`, `auth_key`) VALUES
(1, 'admin-old', 'admin', 'admin', '$2a$13$.kFTl9NSWPRdZnbDnX2KQ.pB6VHsk22pDJZrTrJm23BStL.B/JGrK', 'admin@admin.com', 'A', 1, '2019-05-30 06:09:46', '', ''),
(3, 'admin', 'Admin', 'User', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@example.com', 'A', 1, '2019-05-30 06:09:28', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_views_archive`
--

CREATE TABLE `tbl_views_archive` (
  `id_click` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `path_crc` int(10) UNSIGNED NOT NULL,
  `publisher` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `clicks` int(11) NOT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ip2location_db3`
--
ALTER TABLE `ip2location_db3`
  ADD KEY `idx_ip_from` (`ip_from`),
  ADD KEY `idx_ip_to` (`ip_to`),
  ADD KEY `idx_ip_from_to` (`ip_from`,`ip_to`);

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`id_apply`),
  ADD KEY `fk_tbl_apply_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_click`
--
ALTER TABLE `tbl_click`
  ADD PRIMARY KEY (`id_click`),
  ADD KEY `fk_tbl_click_tbl_url_posting1_idx` (`UID`);

--
-- Indexes for table `tbl_click_landingpage`
--
ALTER TABLE `tbl_click_landingpage`
  ADD PRIMARY KEY (`id_click`),
  ADD KEY `index2` (`path_crc`);

--
-- Indexes for table `tbl_dedicated`
--
ALTER TABLE `tbl_dedicated`
  ADD PRIMARY KEY (`id_dedicated`),
  ADD KEY `fk_tbl_dedicated_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_dr_january`
--
ALTER TABLE `tbl_dr_january`
  ADD PRIMARY KEY (`id_dr_january`),
  ADD KEY `fk_tbl_dr_january_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_flatbed`
--
ALTER TABLE `tbl_flatbed`
  ADD PRIMARY KEY (`id_flatbed`),
  ADD KEY `fk_tbl_flatbed_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_intermodal`
--
ALTER TABLE `tbl_intermodal`
  ADD PRIMARY KEY (`id_intermodal`),
  ADD KEY `fk_tbl_recent_student_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_landing_page`
--
ALTER TABLE `tbl_landing_page`
  ADD PRIMARY KEY (`id_landing_page`),
  ADD KEY `fk_tbl_landing_page_tbl_provider_idx` (`id_provider`);

--
-- Indexes for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  ADD PRIMARY KEY (`id_lead`),
  ADD KEY `index1` (`referral_code`),
  ADD KEY `index2` (`state`),
  ADD KEY `index3` (`city`),
  ADD KEY `index4` (`leads`);

--
-- Indexes for table `tbl_leads_archive`
--
ALTER TABLE `tbl_leads_archive`
  ADD PRIMARY KEY (`id_lead`),
  ADD KEY `index1` (`referral_code`),
  ADD KEY `index2` (`state`),
  ADD KEY `index3` (`city`),
  ADD KEY `index4` (`leads`);

--
-- Indexes for table `tbl_leads_information`
--
ALTER TABLE `tbl_leads_information`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tbl_master`
--
ALTER TABLE `tbl_master`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `tbl_output_xml`
--
ALTER TABLE `tbl_output_xml`
  ADD PRIMARY KEY (`id_output`);

--
-- Indexes for table `tbl_page_missing`
--
ALTER TABLE `tbl_page_missing`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `tbl_provider`
--
ALTER TABLE `tbl_provider`
  ADD PRIMARY KEY (`id_provider`);

--
-- Indexes for table `tbl_publisher`
--
ALTER TABLE `tbl_publisher`
  ADD PRIMARY KEY (`id_publisher`);

--
-- Indexes for table `tbl_q2_2016`
--
ALTER TABLE `tbl_q2_2016`
  ADD PRIMARY KEY (`id_q2_2016`),
  ADD KEY `fk_tbl_q2_2016_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_recent_student`
--
ALTER TABLE `tbl_recent_student`
  ADD PRIMARY KEY (`id_recent_student`),
  ADD KEY `fk_tbl_recent_student_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_rhinolabs_form`
--
ALTER TABLE `tbl_rhinolabs_form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `tbl_short_hr`
--
ALTER TABLE `tbl_short_hr`
  ADD PRIMARY KEY (`id_url`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id_state`);

--
-- Indexes for table `tbl_tenstreet_report`
--
ALTER TABLE `tbl_tenstreet_report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `referrer_code_crc` (`referrer_code_crc`);

--
-- Indexes for table `tbl_truckdriver`
--
ALTER TABLE `tbl_truckdriver`
  ADD PRIMARY KEY (`id_truckdriver`),
  ADD KEY `fk_tbl_truckdriver_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_truckjob`
--
ALTER TABLE `tbl_truckjob`
  ADD PRIMARY KEY (`id_truckjob`),
  ADD KEY `fk_tbl_truckjobs_tbl_master1_idx` (`id_master`);

--
-- Indexes for table `tbl_url_posting`
--
ALTER TABLE `tbl_url_posting`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `fk_tbl_url_posting_tbl_state1_idx` (`id_state`),
  ADD KEY `fk_tbl_url_posting_tbl_provider1_idx` (`id_provider`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_views_archive`
--
ALTER TABLE `tbl_views_archive`
  ADD PRIMARY KEY (`id_click`),
  ADD KEY `index2` (`path_crc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `id_apply` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_click`
--
ALTER TABLE `tbl_click`
  MODIFY `id_click` bigint(19) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_click_landingpage`
--
ALTER TABLE `tbl_click_landingpage`
  MODIFY `id_click` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dedicated`
--
ALTER TABLE `tbl_dedicated`
  MODIFY `id_dedicated` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dr_january`
--
ALTER TABLE `tbl_dr_january`
  MODIFY `id_dr_january` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_flatbed`
--
ALTER TABLE `tbl_flatbed`
  MODIFY `id_flatbed` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_intermodal`
--
ALTER TABLE `tbl_intermodal`
  MODIFY `id_intermodal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `tbl_landing_page`
--
ALTER TABLE `tbl_landing_page`
  MODIFY `id_landing_page` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  MODIFY `id_lead` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_leads_archive`
--
ALTER TABLE `tbl_leads_archive`
  MODIFY `id_lead` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leads_information`
--
ALTER TABLE `tbl_leads_information`
  MODIFY `id_info` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96697;

--
-- AUTO_INCREMENT for table `tbl_master`
--
ALTER TABLE `tbl_master`
  MODIFY `id_master` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1178;

--
-- AUTO_INCREMENT for table `tbl_output_xml`
--
ALTER TABLE `tbl_output_xml`
  MODIFY `id_output` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_page_missing`
--
ALTER TABLE `tbl_page_missing`
  MODIFY `id_page` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_provider`
--
ALTER TABLE `tbl_provider`
  MODIFY `id_provider` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_publisher`
--
ALTER TABLE `tbl_publisher`
  MODIFY `id_publisher` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_q2_2016`
--
ALTER TABLE `tbl_q2_2016`
  MODIFY `id_q2_2016` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_recent_student`
--
ALTER TABLE `tbl_recent_student`
  MODIFY `id_recent_student` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rhinolabs_form`
--
ALTER TABLE `tbl_rhinolabs_form`
  MODIFY `id_form` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_short_hr`
--
ALTER TABLE `tbl_short_hr`
  MODIFY `id_url` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id_state` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tbl_tenstreet_report`
--
ALTER TABLE `tbl_tenstreet_report`
  MODIFY `id_report` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_truckdriver`
--
ALTER TABLE `tbl_truckdriver`
  MODIFY `id_truckdriver` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_truckjob`
--
ALTER TABLE `tbl_truckjob`
  MODIFY `id_truckjob` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_views_archive`
--
ALTER TABLE `tbl_views_archive`
  MODIFY `id_click` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD CONSTRAINT `fk_tbl_apply_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_click`
--
ALTER TABLE `tbl_click`
  ADD CONSTRAINT `fk_tbl_click_tbl_url_posting1` FOREIGN KEY (`UID`) REFERENCES `tbl_url_posting` (`UID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_dedicated`
--
ALTER TABLE `tbl_dedicated`
  ADD CONSTRAINT `fk_tbl_dedicated_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_dr_january`
--
ALTER TABLE `tbl_dr_january`
  ADD CONSTRAINT `fk_tbl_dr_january_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_flatbed`
--
ALTER TABLE `tbl_flatbed`
  ADD CONSTRAINT `fk_tbl_flatbed_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_intermodal`
--
ALTER TABLE `tbl_intermodal`
  ADD CONSTRAINT `fk_tbl_recent_student_tbl_master10` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_landing_page`
--
ALTER TABLE `tbl_landing_page`
  ADD CONSTRAINT `fk_tbl_landing_page_tbl_provider` FOREIGN KEY (`id_provider`) REFERENCES `tbl_provider` (`id_provider`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_q2_2016`
--
ALTER TABLE `tbl_q2_2016`
  ADD CONSTRAINT `fk_tbl_q2_2016_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_recent_student`
--
ALTER TABLE `tbl_recent_student`
  ADD CONSTRAINT `fk_tbl_recent_student_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_truckdriver`
--
ALTER TABLE `tbl_truckdriver`
  ADD CONSTRAINT `fk_tbl_truckdriver_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_truckjob`
--
ALTER TABLE `tbl_truckjob`
  ADD CONSTRAINT `fk_tbl_truckjobs_tbl_master1` FOREIGN KEY (`id_master`) REFERENCES `tbl_master` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_url_posting`
--
ALTER TABLE `tbl_url_posting`
  ADD CONSTRAINT `fk_tbl_url_posting_tbl_provider1` FOREIGN KEY (`id_provider`) REFERENCES `tbl_provider` (`id_provider`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_url_posting_tbl_state1` FOREIGN KEY (`id_state`) REFERENCES `tbl_state` (`id_state`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
