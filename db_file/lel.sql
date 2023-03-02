-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 25, 2022 at 02:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'yuuki', 'admin', 'password'),
(2, 'johnlloyd', 'user', '123'),
(3, 'zac', 'qwerty', '123');

-- --------------------------------------------------------

--
-- Table structure for table `display_image`
--

CREATE TABLE `display_image` (
  `display_id` int(11) NOT NULL,
  `image_name` varchar(45) NOT NULL,
  `image_file` text NOT NULL,
  `image_details` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display_image`
--

INSERT INTO `display_image` (`display_id`, `image_name`, `image_file`, `image_details`, `user`) VALUES
(3, 'Legazpi Boulevard', '628707604a1719.02625548.jpg', 'the view in the morning', 'yuuki'),
(4, 'Legazpi Capitol', '62886e4eec1a72.96854755.jpg', 'you can visit this', 'Anonymous'),
(6, 'facebook', '6291bc50123f28.00033833.png', 'facebook.com', 'zac ');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `req_id` int(11) NOT NULL,
  `image_name` varchar(45) NOT NULL,
  `image_file` text NOT NULL,
  `image_details` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`req_id`, `image_name`, `image_file`, `image_details`, `user`) VALUES
(9, 'miyamura', '628c6bbcb238e9.77347688.jpg', 'helo', 'Anonymous'),
(10, 'dasdasdas', '628c6fd16cf331.37102507.png', 'dasdasdas', 'Anonymous'),
(12, 'yt', '628dc5e6e7fff6.44562185.png', 'youtube', 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `comment` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user`, `comment`, `date`) VALUES
(5, 'yuuki', 'hello', '2022/05/25'),
(6, 'Anonymous', 'souka', '2022/08/19');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(45) NOT NULL,
  `video_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `video_file`) VALUES
(20, 'Legazpi Hymn', '628730e84077b1.17563073.mp4'),
(22, 'festival', '628e313f6df837.60999560.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `display_image`
--
ALTER TABLE `display_image`
  ADD PRIMARY KEY (`display_id`);

--
-- Indexes for table `req`
--
ALTER TABLE `req`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `display_image`
--
ALTER TABLE `display_image`
  MODIFY `display_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
