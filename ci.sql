-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 02:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(111) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `description1` varchar(111) NOT NULL,
  `image` varchar(222) NOT NULL,
  `type` varchar(112) NOT NULL,
  `status` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `user_id` int(111) NOT NULL,
  `menuname` varchar(150) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`user_id`, `menuname`, `status`) VALUES
(2, 'dcfvgbnm', '1'),
(3, 'xdcv', '1'),
(4, 'c', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `user_id` int(222) NOT NULL,
  `menuid` varchar(150) NOT NULL,
  `subname` varchar(200) NOT NULL,
  `status` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`user_id`, `menuid`, `subname`, `status`) VALUES
(3, 'sdfgh', 'sdfgh', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(111) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(222) NOT NULL,
  `mobile` varchar(112) NOT NULL,
  `image` varchar(110) NOT NULL,
  `status` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `email`, `mobile`, `image`, `status`) VALUES
(1, 'admin123456', '12345', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(111) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(111) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `message` varchar(112) NOT NULL,
  `image` varchar(110) NOT NULL,
  `status` varchar(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `firstname`, `lastname`, `email`, `mobile`, `message`, `image`, `status`) VALUES
(1, 'sdfg', 'dfv', 'krishna12@gmail.com', '2345678', 'dfg', '15.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `user_id` int(111) NOT NULL,
  `sitename` varchar(150) NOT NULL,
  `footername` varchar(111) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(111) NOT NULL,
  `address` varchar(222) NOT NULL,
  `description` varchar(110) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'setting',
  `image` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`user_id`, `sitename`, `footername`, `email`, `mobile`, `address`, `description`, `type`, `image`, `status`) VALUES
(1, 'Welcome', 'sdfgh', 'krishna123@gmail.com', '8103051588', '544/7 nanda nagar indore', 'sdfghbn', 'setting', 'bg72.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `user_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `user_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `user_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
