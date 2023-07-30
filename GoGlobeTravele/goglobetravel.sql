-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2023 at 11:15 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goglobetravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_ID` varchar(20) NOT NULL,
  `images` text,
  `user_ID` varchar(20) DEFAULT NULL,
  `reviews` text,
  `ratings` decimal(5,2) DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`blog_ID`),
  KEY `user_ID` (`user_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_imgs`
--

DROP TABLE IF EXISTS `blog_imgs`;
CREATE TABLE IF NOT EXISTS `blog_imgs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `blog_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog_imgs`
--

INSERT INTO `blog_imgs` (`id`, `blog_id`, `user_id`, `img`) VALUES
(1, 9, 0, 'sigiriya.jpg'),
(2, 9, 0, 'udawalawa.jpg'),
(3, 10, 6, 'sigiriya.jpg'),
(4, 10, 6, 'udawalawa.jpg'),
(5, 11, 6, 'sigiriya.jpg'),
(6, 11, 6, 'udawalawa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_ID` int NOT NULL AUTO_INCREMENT,
  `user_ID` int DEFAULT NULL,
  `package_ID` int DEFAULT NULL,
  PRIMARY KEY (`cart_ID`),
  KEY `user_ID` (`user_ID`),
  KEY `package_ID` (`package_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_ID`, `user_ID`, `package_ID`) VALUES
(18, 6, 10),
(17, 6, 13),
(16, 6, 13),
(15, 6, 13),
(14, 6, 13),
(13, 6, 13),
(12, 6, 13),
(11, 6, 13),
(10, 6, 13),
(19, 6, 10),
(20, 3, 13),
(21, 3, 13),
(22, 3, 15),
(23, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE IF NOT EXISTS `destinations` (
  `destination_id` int NOT NULL AUTO_INCREMENT,
  `destination_name` varchar(255) DEFAULT NULL,
  `description` text,
  `location` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `main_img` text,
  PRIMARY KEY (`destination_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`destination_id`, `destination_name`, `description`, `location`, `category`, `rating`, `main_img`) VALUES
(1, 'sdcs', 'qwsx', 'xs', 'City', '0.01', 'uploads/Screenshot (7).png'),
(2, 'sdcs', 'qwsx', 'xs', 'City', '0.01', 'uploads/Screenshot (7).png'),
(3, 'sdcs', 'asxc', 'axs', 'City', '4.98', 'uploads/Screenshot (8).png'),
(4, 'sdcs', 'asxc', 'axs', 'City', '4.98', 'uploads/Screenshot (8).png');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'first event', '2023-07-22 11:08:37', '2023-07-23 05:38:37'),
(3, 'second event', '2023-07-19 00:00:00', '2023-07-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

DROP TABLE IF EXISTS `guides`;
CREATE TABLE IF NOT EXISTS `guides` (
  `emp_ID` varchar(20) NOT NULL,
  `cv_file` blob,
  `salary` decimal(10,2) DEFAULT NULL,
  `job_Type` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `fb_link` text,
  `youtube_link` text,
  `inst_link` text,
  `profile_desc` text,
  `name` varchar(20) DEFAULT NULL,
  `prof_pic` text,
  `reviews` text,
  `ratings` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`emp_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_ID` int NOT NULL AUTO_INCREMENT,
  `pack_ID` int DEFAULT NULL,
  `user_ID` int DEFAULT NULL,
  `check_in_date` date DEFAULT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `car_Number` varchar(255) DEFAULT NULL,
  `policy` tinyint(1) DEFAULT NULL,
  `payment_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`invoice_ID`),
  KEY `pack_ID` (`pack_ID`),
  KEY `user_ID` (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_ID`, `pack_ID`, `user_ID`, `check_in_date`, `Fname`, `Email`, `phone`, `car_Number`, `policy`, `payment_status`) VALUES
(1, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(2, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(3, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(4, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(5, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(6, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(7, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(8, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(9, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(10, 13, 6, '0000-00-00', '', '', '', '123', 1, 1),
(11, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(12, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(13, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(14, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(15, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(16, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(17, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(18, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(19, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(20, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(21, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(22, 13, 6, '0000-00-00', '', '', '', '', 0, 1),
(23, 10, 6, '0000-00-00', 'Thisara Dilshan', 'thisaradilshanba@gma', '0761302240', '213433', 1, 1),
(24, 10, 6, '0000-00-00', 'Thisara Dilshan', 'thisaradilshanba@gma', '0761302240', '232', 0, 1),
(25, 13, 3, '0000-00-00', 'Thisara Dilshan', 'thisaradilshanba@gma', '0761302240', '', 0, 1),
(26, 13, 3, '0000-00-00', 'Thisara Dilshan', 'thisaradilshanba@gma', '0761302240', '', 0, 1),
(27, 13, 3, '0000-00-00', 'Thisara Dilshan', 'thisaradilshanba@gma', '0761302240', '', 0, 1),
(28, 15, 3, '0000-00-00', '', '', '', '', 0, 1),
(29, 10, 3, '0000-00-00', 'Thisara Dilshan', 'thisaradilshanba@gma', '0761302240', '123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `packageoffers`
--

DROP TABLE IF EXISTS `packageoffers`;
CREATE TABLE IF NOT EXISTS `packageoffers` (
  `offer_ID` varchar(20) NOT NULL,
  `package_ID` varchar(255) DEFAULT NULL,
  `offer_Percentage` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`offer_ID`),
  KEY `package_ID` (`package_ID`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `pack_ID` int NOT NULL AUTO_INCREMENT,
  `title` text,
  `pack_description` text,
  `grp_size` int DEFAULT NULL,
  `duration_days` int DEFAULT NULL,
  `duration_nights` int DEFAULT NULL,
  `category` enum('vacation package','honeymoon package','holiday package','weekend package') DEFAULT NULL,
  `thumb_image` text,
  `populer` tinyint(1) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `reg_price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `ratings` float(2,1) DEFAULT NULL,
  `reviews` int DEFAULT NULL,
  `programm` text,
  `location` text,
  `program` text,
  `city` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `pack_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pack_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pack_ID`, `title`, `pack_description`, `grp_size`, `duration_days`, `duration_nights`, `category`, `thumb_image`, `populer`, `keywords`, `sale_price`, `reg_price`, `discount`, `ratings`, `reviews`, `programm`, `location`, `program`, `city`, `status`, `pack_type`) VALUES
(7, 'Temple of tooth relic', 'Unveil the divine aura of the Temple of the Tooth Relic, a sacred sanctuary where the sacred tooth relic of Lord Buddha resides. Immerse yourself in centuries of spiritual heritage, witnessing the profound reverence and exquisite architecture. Experience a moment of serenity and embrace the timeless significance of this revered site.', 8, 5, 4, 'weekend package', 'sunset.jpeg', 0, 'galle', '1800.00', '1800.00', '20.00', 4.2, NULL, NULL, NULL, NULL, 'Kandy', 1, NULL),
(5, 'Vacation to the water city of Galle', 'Escape to the enchanting water city of Galle. Immerse yourself in history, culture, and coastal beauty. Discover the captivating charm of ancient fortifications, pristine beaches, and delightful cuisine. Galle awaits, ready to make your vacation unforgettable.', 6, 6, 5, 'holiday package', 'temple of tooth relic.jpeg', 0, 'galle', '1400.00', '1400.00', '20.00', 0.0, NULL, NULL, NULL, NULL, 'Galle', 0, NULL),
(8, 'All Inclusive Sigiriya & Dambulla Day Tour from Colombo', 'Experience two of Sri Lanka’s UNESCO-listed treasures on this tour from Colombo—Sigiriya Rock and Dambulla’s art-filled cave-temples. Leave transport worries behind as you’re picked up from your hotel by private air-conditioned vehicle and travel to both sights in turn. At Sigiriya, enjoy time to climb to the rocktop and inspect the wall paintings along the way, and at Dambulla, explore the dazzling caves packed with Buddha statues and images. Your tour includes admissions and a local curry-and-rice lunch.', 10, 1, 0, 'holiday package', 'sigiriya.jpg', 1, 'historical', '190.00', '190.00', '999.99', 4.9, NULL, NULL, NULL, NULL, 'Kandy', 0, NULL),
(10, 'All Inclusive Udawalawa National Park Day Tour from Colombo', 'If you are one of those people glued to the animal life and wildlife shows on television, the Udawalawe jeep safari is definitely going to be an exciting one for you.', 15, 2, 1, 'holiday package', 'udawalawa.jpg', 1, 'historical', '255.00', '255.00', '0.00', 4.8, NULL, NULL, NULL, NULL, 'Udawalawa', 1, NULL),
(14, 'Galle', 'abcd', 12, 2, 1, 'holiday package', 'sunset.jpeg', 0, '', '1200.00', '1200.00', '0.00', 0.0, NULL, NULL, NULL, NULL, 'Galle', 0, NULL),
(13, 'Sea Turtle Farm Galle Mahamodara', 'Welcome to Sea Turtle Hatchery - Mahamodara. We rescue turtles who are in danger of losing their lives to the fishing industry whether they are caught in nets or hunted for meat. We currently have 40 turtles, including 4 types of turtle. All are welcome to come and visit to see and learn about Tara turtles here in Sri Lanka.', 10, 1, 0, 'weekend package', 'seeturtle.jpg', 1, 'historical', '200.00', '200.00', '0.00', 4.4, NULL, NULL, NULL, NULL, 'Galle', 0, NULL),
(15, 'Athugala rock', 'travel to athugala rock', 5, 7, 6, 'holiday package', 'certificate- Intro to Deep Learning.png', 0, 'historical', '2000.00', '2000.00', '0.00', 4.5, NULL, NULL, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pack_booking`
--

DROP TABLE IF EXISTS `pack_booking`;
CREATE TABLE IF NOT EXISTS `pack_booking` (
  `user_ID` varchar(20) DEFAULT NULL,
  `billing_email` varchar(20) DEFAULT NULL,
  `to_pay_amount` decimal(10,2) DEFAULT NULL,
  `billing_date` date DEFAULT NULL,
  `check_in_date` date DEFAULT NULL,
  `booking_ID` int NOT NULL AUTO_INCREMENT,
  `tourGuide` tinyint(1) NOT NULL DEFAULT '0',
  `insurance` tinyint(1) NOT NULL DEFAULT '0',
  `dinner` tinyint(1) NOT NULL DEFAULT '0',
  `bikeRent` tinyint(1) NOT NULL DEFAULT '0',
  `pack_ID` int DEFAULT NULL,
  `booking_person` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`booking_ID`),
  KEY `user_ID` (`user_ID`),
  KEY `pack_ID` (`pack_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pack_booking`
--

INSERT INTO `pack_booking` (`user_ID`, `billing_email`, `to_pay_amount`, `billing_date`, `check_in_date`, `booking_ID`, `tourGuide`, `insurance`, `dinner`, `bikeRent`, `pack_ID`, `booking_person`, `phone`) VALUES
('6', '', '200.00', '2023-07-20', '0000-00-00', 17, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-20', '0000-00-00', 16, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-19', '0000-00-00', 15, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-19', '0000-00-00', 14, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-19', '0000-00-00', 13, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-19', '0000-00-00', 12, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-19', '0000-00-00', 11, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-19', '0000-00-00', 10, 0, 0, 0, 0, 13, '', ''),
('6', '', '200.00', '2023-07-18', '0000-00-00', 9, 0, 0, 0, 0, 13, '', ''),
('6', 'thisaradilshanba@gma', '255.00', '2023-07-21', '0000-00-00', 18, 0, 0, 0, 0, 10, 'Thisara Dilshan', '0761302240'),
('6', 'thisaradilshanba@gma', '255.00', '2023-07-21', '0000-00-00', 19, 0, 0, 0, 0, 10, 'Nethmi n', '0761302240'),
('3', 'thisaradilshanba@gma', '200.00', '2023-07-21', '0000-00-00', 20, 0, 0, 0, 0, 13, 'Thisara Dilshan', '0761302240'),
('3', '', '200.00', '2023-07-22', '0000-00-00', 21, 0, 0, 0, 0, 13, '', ''),
('3', '', '2000.00', '2023-07-22', '0000-00-00', 22, 0, 0, 0, 0, 15, '', ''),
('3', 'thisaradilshanba@gma', '255.00', '2023-07-22', '0000-00-00', 23, 0, 0, 0, 0, 10, 'Thisara Dilshan', '0761302240');

-- --------------------------------------------------------

--
-- Table structure for table `pack_images`
--

DROP TABLE IF EXISTS `pack_images`;
CREATE TABLE IF NOT EXISTS `pack_images` (
  `pack_img_id` int NOT NULL AUTO_INCREMENT,
  `pack_ID` varchar(20) DEFAULT NULL,
  `pack_image_path` text NOT NULL,
  PRIMARY KEY (`pack_img_id`),
  KEY `pack_ID` (`pack_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pack_review`
--

DROP TABLE IF EXISTS `pack_review`;
CREATE TABLE IF NOT EXISTS `pack_review` (
  `rev_ID` int NOT NULL AUTO_INCREMENT,
  `user_ID` int DEFAULT NULL,
  `pack_ID` int DEFAULT NULL,
  `ratings` int DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `review` text,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`rev_ID`),
  KEY `user_ID` (`user_ID`),
  KEY `pack_ID` (`pack_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pack_review`
--

INSERT INTO `pack_review` (`rev_ID`, `user_ID`, `pack_ID`, `ratings`, `subject`, `review`, `date`) VALUES
(1, 6, 13, 0, 'dd', '', '2023-07-20'),
(2, 6, 13, 0, 'dd', '', '2023-07-20'),
(3, 6, 13, 0, 'dd', '', '2023-07-20'),
(4, 6, 13, 0, 'dd', '', '2023-07-20'),
(5, 6, 13, 0, 'dds', '', '2023-07-20'),
(6, 6, 13, 0, 'dds', '', '2023-07-20'),
(7, 6, 13, 0, 'dds', '', '2023-07-20'),
(8, 6, 10, 1, 'sdcs', 'saxsx', '2023-07-20'),
(9, 6, 10, 1, 'sdcs', 'saxsx', '2023-07-20'),
(10, 6, 10, 1, 'sdcs', 'saxsx', '2023-07-20'),
(11, 6, 10, 1, 'aaaaaaa', 'saxsx', '2023-07-20'),
(12, 6, 10, 1, 'aaaaaaa', 'saxsx', '2023-07-20'),
(13, 6, 10, 1, 'aaaaaaa', 'saxsx', '2023-07-20'),
(14, 3, 8, 1, 'xs', 'xs', '2023-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_ID` varchar(20) NOT NULL,
  `reviewer_ID` varchar(20) DEFAULT NULL,
  `post_ID` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`review_ID`),
  KEY `reviewer_ID` (`reviewer_ID`),
  KEY `post_ID` (`post_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` int NOT NULL AUTO_INCREMENT,
  `fName` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `profile_pic` text,
  PRIMARY KEY (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `fName`, `Lname`, `mobile`, `password_hash`, `email`, `username`, `country`, `city`, `age`, `profile_pic`) VALUES
(1, 'Thisara', 'Dilshan', '0761302240', '$2y$10$tkPrievmohl5n/TshaH4qOS034ER4RVKNs5RWL.cQlY.dmClccH9e', 'thisaradilshanba@gmail.com', '', 'Sri Lanka', 'galle', NULL, 'Screenshot (7).png'),
(2, 'Thisara', 'Dilshan', '0761302240', '$2y$10$w54maSfRVQMmo9QK9pPoeOKEzM3l6vzi3Xz/SmQ1dY/3/JmDEqzjy', 'thisaradilshanba@gmail.com', '', 'Sri Lanka', 'galle', NULL, 'Screenshot (7).png'),
(3, 'Thisara', 'Dilshan', '0761302240', '$2y$10$0HJpGlw58oRV0n/WZHx/Pu6MqdJ2refCtDBQeSCCtxbNcbIUZrd/a', 'thisaradilshanba@gmail.com', 'Te', 'Sri Lanka', 'galle', 23, 'Screenshot (8).png'),
(4, 'Thisara', 'Dilshan', '0761302240', '$2y$10$IuYGpRdxNNlaBTPnSihkN.l6tJN0QLX2XPzoz/NOEI8G/11sbgVL6', 'thisaradilshanba@gmail.com', 'nameesha.san@gmail.com', 'Sri Lanka', 'galle', 29, 'Screenshot (2).png'),
(5, 'Thisara', 'Dilshan', '0761302240', '$2y$10$1Kf8hAGX3S7FBOuw2nolfuDEi4bfwlaaB2PO6PLAqXLvLV7jyPuGq', 'thisaradilshanba@gmail.com', 'Te', 'Sri Lanka', 'galle', 34, 'Screenshot (8).png'),
(6, 'Thisara', 'Dilshan', '0761302240', '$2y$10$4JhDkhIHAnkZp5jDfFwDWOh6VoozAY./WldRZpoqCCZIIR2mee5K.', 'thisaradilshanba@gmail.com', 'thisara', 'Sri Lanka', 'galle', 22, 'Screenshot (8).png'),
(7, 'Thisara', 'Dilshan', '0761302240', '$2y$10$ZIMCwdVmBkor/ny/Iqkwa.rl2uRFfu4lbLMoIBt86wtaN1F0A.T9S', 'thisaradilshanba@gmail.com', 'thiZ', 'Sri Lanka', 'galle', 23, 'sigiriya.jpg'),
(8, 'Thisara', 'Dilshan', '0761302240', '$2y$10$8OdZKmQTIexy25cu1AofG.2gYe6ISonk8nUSKPkEoiOInHUh7WQr2', 'thisaradilshanba@gmail.com', 'thiZ', 'Sri Lanka', 'galle', 23, 'sigiriya.jpg'),
(9, 'Thisara', 'Dilshan', '0761302240', '$2y$10$0Ur8mEn7v1tuZjwbUiIFp.gyM1va9.7ABUXxDBhDcJKVnn4iEl2g6', 'thisaradilshanba@gmail.com', 'thisara', 'Sri Lanka', 'galle', 23, 'udawalawa.jpg'),
(10, 'Thisara', 'Dilshan', '0761302240', '$2y$10$aMQMinsZAsuUrjsMYLC4/.R4F1PDTerkQ4Y3IDrX31d57wUucjTEC', 'thisaradilshanba@gmail.com', 'thisara', 'Sri Lanka', 'galle', 23, 'udawalawa.jpg'),
(11, 'Nethmi ', 'shihari', '0717887560', '$2y$10$ak0EUkfg8E3QSqcdS3RPBu08UeVoaOH5N2GnACPjFNWolzyUOuQvO', 'thisaradilshanba@gmail.com', 'choco', 'Sri Lanka', 'Mathara', 24, 'WhatsApp Image 2023-06-22 at 11.08.48.jpg'),
(12, 'ABC', 'def', '0876554432', '$2y$10$aIlbfZrw7vHQINAlQt5SRuPSo/ICW3ivJ0svpbNkzF5hiKkGK9Tf.', 'thisaradilshanba@gmail.com', 'abcd', 'australia', 'Jaffna', 45, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_blog`
--

DROP TABLE IF EXISTS `user_blog`;
CREATE TABLE IF NOT EXISTS `user_blog` (
  `blog_ID` int NOT NULL AUTO_INCREMENT,
  `user_ID` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `blog_quote` text,
  `personal_about` text,
  `location` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `Gallery` text,
  `thumb_image` text,
  `Posteddate` date DEFAULT NULL,
  PRIMARY KEY (`blog_ID`),
  KEY `user_ID` (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_blog`
--

INSERT INTO `user_blog` (`blog_ID`, `user_ID`, `title`, `description`, `blog_quote`, `personal_about`, `location`, `category`, `Gallery`, `thumb_image`, `Posteddate`) VALUES
(1, 6, '', '', '', '', '', '', '', '', NULL),
(2, 6, 'aaa', 'bbb', 'ccc', 'ddd', 'galle', 'D', 'certificate- Intro to Deep Learning.png', 'certificate- Intro to Deep Learning.png', NULL),
(3, 6, 'aaa', 'bbb', 'ccc', 'ddd', 'galle', 'D', 'certificate- Intro to Deep Learning.png', 'certificate- Intro to Deep Learning.png', NULL),
(4, 6, 'dsx', 'asx', 'asx', 'hiiiiiii', 'galle', 'A', 'certificate - Pandas.png', '', NULL),
(5, 6, 'dsx', 'asx', 'asx', 'hiiiiiii', 'galle', 'A', 'certificate - Pandas.png', '', NULL),
(6, 0, 'hi', 'hi', '', '', 'galle', 'A', '', '', NULL),
(7, 0, 'hi', 'hi', 'thisara', 'dilshan', 'galle', 'A', '', '', NULL),
(8, 6, 'hi', 'hi', 'thisara', 'dilshan', 'galle', 'A', '', '', NULL),
(9, 6, 'hi', 'hi', 'thisara', 'dilshan', 'galle', 'A', '', '', NULL),
(10, 6, 'hi', 'hi', 'thisara', 'dilshan', 'galle', 'A', '', '', NULL),
(11, 6, 'hiooo', 'hi', 'thisara', 'dilshan', 'galle', 'A', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `user_Id` int NOT NULL,
  `pack_Id` int NOT NULL,
  `date_added` date DEFAULT NULL,
  PRIMARY KEY (`user_Id`,`pack_Id`),
  KEY `pack_Id` (`pack_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
