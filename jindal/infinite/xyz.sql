-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 03:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `post_id` int(30) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_year` varchar(100) NOT NULL,
  `company_products` varchar(300) NOT NULL,
  `company_description` varchar(5000) NOT NULL,
  `company_address` varchar(2000) NOT NULL,
  `company_website` varchar(200) NOT NULL,
  `company_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`post_id`, `company_name`, `company_year`, `company_products`, `company_description`, `company_address`, `company_website`, `company_email`) VALUES
(1, 'dacaca', 'cxC', 'CC', 'CCCXC', 'XCC', 'CZCCx', 'cCZCC');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `post_id` int(30) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `college_location` varchar(200) NOT NULL,
  `courses_offered` varchar(500) NOT NULL,
  `college_fees` varchar(200) NOT NULL,
  `college_des` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`post_id`, `college_name`, `college_location`, `courses_offered`, `college_fees`, `college_des`) VALUES
(2, 'ddddddddd', 'dddddddddd', 'ddddddddddd', 'dddddddd', 'ddddddddddddddd'),
(3, 'zckjbaSKJcjasl', 'sacnlksnclka', 'davnclasnlcka', 'cascnlkascacmn c', 'cnlasn;kcma;lsmdlaml');

-- --------------------------------------------------------

--
-- Table structure for table `qwe`
--

CREATE TABLE `qwe` (
  `post_id` int(30) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_des` varchar(1000) NOT NULL,
  `book_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwe`
--

INSERT INTO `qwe` (`post_id`, `book_name`, `book_author`, `book_des`, `book_price`) VALUES
(0, '', 'book_author', 'book_des', 'book_price'),
(2, '', 'book_author', 'book_des', 'book_price'),
(3, '', 'book_author', 'book_des', 'book_price'),
(4, '', 'book_author', 'book_des', 'book_price'),
(5, '', 'book_author', 'book_des', 'book_price'),
(6, '', 'book_author', 'book_des', 'book_price'),
(7, '', 'book_author', 'book_des', 'book_price'),
(8, '', 'book_author', 'book_des', 'book_price'),
(9, '', 'book_author', 'book_des', 'book_price'),
(10, '', 'book_author', 'book_des', 'book_price'),
(11, '', 'book_author', 'book_des', 'book_price'),
(18, 'shubham', 'sddsdsds', 'sdsdsd', 'dssdsdsd'),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, 'ssssss', 'sssssss', 'sssssssss', 'sssssssssssssssss'),
(22, 'ssssss', 'sssssss', 'sssss', 'sssssssssssssssss'),
(23, 'shubham jindal', 'ddddddd', 'dfndlkvnsdlknfvksnefknak;mfvpanvpksp', '552232'),
(24, 'jindal', 'xssssss', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'qqqq'),
(25, 'sssssssssssss', 'ssssssssssss', 'ssssssssssssssssss', 'sssssssssssssss'),
(26, 'xcv', 'xvc', 'xvcv', 'xvcv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `co`
--
ALTER TABLE `co`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `qwe`
--
ALTER TABLE `qwe`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `co`
--
ALTER TABLE `co`
  MODIFY `post_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `post_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qwe`
--
ALTER TABLE `qwe`
  MODIFY `post_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
