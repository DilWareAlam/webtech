-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 05:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse408`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `a_age` int(11) NOT NULL,
  `a_address` varchar(30) NOT NULL,
  `a_cont` int(11) NOT NULL,
  `a_pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_age`, `a_address`, `a_cont`, `a_pass`) VALUES
(1, '0', '0', 12, '0', 123456, 123),
(2, '0', '0', 12, '0', 1234, 123),
(3, 'nai', 'nai', 17, 'nai', 123, 123),
(4, 'DhakaBashi', 'Dhaka@email.com', 35, 'Street of Dhaka', 911, 123);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL,
  `c_text` text NOT NULL,
  `c_date` datetime NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `u_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `c_text`, `c_date`, `u_id`, `u_name`) VALUES
(1, 'hello', '2017-07-02 02:50:54', 3, ''),
(2, 't439ruerewrewu', '2017-08-01 12:47:43', 3, ''),
(3, 'hi\r\n', '2017-08-15 12:50:07', 4, ''),
(4, 'hii', '2017-08-15 14:30:57', 4, ''),
(5, 'hii', '2017-08-15 14:42:01', 4, ''),
(6, 'hi', '2017-08-22 09:05:15', 4, ''),
(7, 'hi', '2017-08-22 09:06:12', 4, 'alam'),
(8, 'kmn asso', '2017-08-22 09:06:27', 4, 'alam'),
(9, 'hlw every one', '2017-08-22 09:07:27', 5, 'alvee');

-- --------------------------------------------------------

--
-- Table structure for table `comment2`
--

CREATE TABLE `comment2` (
  `ac_id` int(11) NOT NULL,
  `ac_text` text NOT NULL,
  `ac_date` datetime NOT NULL,
  `a_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment2`
--

INSERT INTO `comment2` (`ac_id`, `ac_text`, `ac_date`, `a_id`) VALUES
(1, 'hello', '2017-07-03 23:01:34', 3),
(2, 'hello', '2017-07-03 23:02:05', 3),
(3, 'hello', '2017-07-03 23:02:08', 3),
(4, 'hello', '2017-07-03 23:02:14', 3),
(5, 'hello', '2017-07-15 14:04:36', 4),
(6, 'hello', '2017-07-15 14:04:43', 4),
(7, 'hello', '2017-07-15 14:04:48', 4);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `i_id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `text` text NOT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`i_id`, `image`, `text`, `u_id`) VALUES
(1, 0x53637265656e73686f74202831292e706e67, 'hello balfala', 3),
(2, 0x53637265656e73686f74202831292e706e67, 'hello balfala', 3),
(3, 0x53637265656e73686f74202831292e706e67, 'hello balfala', 3),
(4, 0x53637265656e73686f74202832292e706e67, 'hello deenur', 4),
(5, 0x53637265656e73686f74202831292e706e67, 'screen short', 4),
(6, 0x31333930333432335f313738313331303234323135333738355f373034373833303139373739343437393736355f6e2e6a7067, 'alvee', 4),
(7, 0x31373230303833335f313738353532383936343830363330315f3439303939333834305f6f2e6a7067, 'tha', 4);

-- --------------------------------------------------------

--
-- Table structure for table `image2`
--

CREATE TABLE `image2` (
  `ai_id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `text` text NOT NULL,
  `a_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image2`
--

INSERT INTO `image2` (`ai_id`, `image`, `text`, `a_id`) VALUES
(1, 0x53637265656e73686f74202832292e706e67, 'hello', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_age` int(11) NOT NULL,
  `u_address` varchar(30) NOT NULL,
  `u_cont` varchar(100) NOT NULL,
  `u_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_age`, `u_address`, `u_cont`, `u_pass`) VALUES
(3, 'Sanjib', 'sanjib@gmail.com', 24, 'dhaka', '0', '123'),
(4, 'alam', 'alam@gmail.com', 20, 'rajshahi', '0', '123'),
(5, 'alvee', 'a@gmail.com', 10, 'dhaka', '01744', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `u_name` (`u_name`);

--
-- Indexes for table `comment2`
--
ALTER TABLE `comment2`
  ADD PRIMARY KEY (`ac_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `image2`
--
ALTER TABLE `image2`
  ADD PRIMARY KEY (`ai_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comment2`
--
ALTER TABLE `comment2`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `image2`
--
ALTER TABLE `image2`
  MODIFY `ai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `comment2`
--
ALTER TABLE `comment2`
  ADD CONSTRAINT `comment2_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `image2`
--
ALTER TABLE `image2`
  ADD CONSTRAINT `image2_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
