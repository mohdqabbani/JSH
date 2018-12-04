-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 02:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'JSH@2018');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(3) NOT NULL,
  `blog_date` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_date`, `image`, `title`, `text`) VALUES
(3, '22 Oct', '2.jpg', 'Provide the clean water for the poor people.', 'Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'),
(4, '22 Oct', '2.jpg', 'Provide the clean water for the poor people.', 'Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(3) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_desc` text NOT NULL,
  `event_image` varchar(200) NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `event_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_desc`, `event_image`, `event_date`, `event_location`) VALUES
(1, 'Big Sale', 'Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nam convallis vestibulum purus ac egestas....', '4.jpg', '12:00 PM, 18 November, 2017 ', 'Amman'),
(2, 'Huge Meeting', 'Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nam convallis vestibulum purus ac egestas....', 'com.jpg', '12:00 PM, 20 July, 2017 ', '25 Newyork City.'),
(3, 'How Can Solve Problems', 'Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nam convallis vestibulum purus ac egestas....', '4.jpg', '12:00 PM, 18 October, 2017 ', 'Jabal Amman'),
(4, '10 Way`s to improve your business ', 'Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nam convallis vestibulum purus ac egestas....', '4.jpg', '12:00 PM, 18 October, 2017 ', 'Al-madina Street');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photo_id` int(3) NOT NULL,
  `photo_name` varchar(20) NOT NULL,
  `photo_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `photo_name`, `photo_cat`) VALUES
(1, 'Education', 'a:3:{i:0;s:9:\"edu1.jpeg\";i:1;s:8:\"edu2.jpg\";i:2;s:8:\"edu3.jpg\";}'),
(2, 'Food Help', 'a:3:{i:0;s:9:\"food1.jpg\";i:1;s:9:\"food2.jpg\";i:2;s:9:\"food3.jpg\";}'),
(3, 'Homeless', 'a:3:{i:0;s:13:\"homeless1.jpg\";i:1;s:13:\"homeless2.jpg\";i:2;s:13:\"homeless3.jpg\";}');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `mag_id` int(10) NOT NULL,
  `mag_name` varchar(50) NOT NULL,
  `mag_desc` varchar(150) NOT NULL,
  `mag_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`mag_id`, `mag_name`, `mag_desc`, `mag_file`) VALUES
(2, 'bein sport', 'We are confident to confirm that all members in Charity are professionals in the charity. ', 'product-excel.php');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(3) NOT NULL,
  `news_day` int(3) NOT NULL,
  `news_month` varchar(5) NOT NULL,
  `news_title` text NOT NULL,
  `news_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_day`, `news_month`, `news_title`, `news_text`) VALUES
(1, 22, 'Nov', 'How Can Reduce The Disease', 'Great pleasure to take a trivial example, which of us undertakes laborious soprt the orgnization.'),
(2, 29, 'Nov', 'Children ', 'Great pleasure to take a trivial example, which of us undertakes laborious soprt the orgnization.'),
(3, 24, 'July', 'Earthquake', 'Great pleasure to take a trivial example, which of us undertakes laborious soprt the orgnization.');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(3) NOT NULL,
  `partner_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_image`) VALUES
(1, '1.png'),
(2, '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(3) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_title` text NOT NULL,
  `slide_subtitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_image`, `slide_title`, `slide_subtitle`) VALUES
(2, 'image-2.jpg', 'jordanian Socaity of Hematology-JSH ', 'We are ready for provide better service to   make the world happy'),
(3, 'image-4.jpg', 'Help Homeless People.', 'We are ready for provide better service to   make the world happy');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `tip_id` int(3) NOT NULL,
  `tip_title` text NOT NULL,
  `tip_position` text NOT NULL,
  `tip_text` text NOT NULL,
  `tip_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`tip_id`, `tip_title`, `tip_position`, `tip_text`, `tip_image`) VALUES
(1, 'Mohammad Qabbani', 'Business Unit Manager', 'Moluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt Moluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'author.jpg'),
(2, 'Slameh Yassin ', 'Team Leader', 'Moluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt Moluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'author.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`mag_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`tip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photo_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `mag_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `tip_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
