-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 03:29 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pial`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatable`
--

CREATE TABLE IF NOT EXISTS `datatable` (
`user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `Place` varchar(500) NOT NULL,
  `favourite` varchar(300) NOT NULL,
  `about` varchar(3000) NOT NULL,
  `image_link` varchar(2000) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datatable`
--

INSERT INTO `datatable` (`user_id`, `name`, `email`, `username`, `password`, `mobile`, `Place`, `favourite`, `about`, `image_link`, `admin`) VALUES
(7, 'Hello world', 'pialkanti2012@gmail.com', 'hello', '1234', '01676277976', 'Dhaka,Bangladesh', 'Rangamati', 'fdffgggg', 'http://localhost/Tourism site/upload/hello1425462885IMG_2524 (Copy).JPG', 0),
(12, 'Pial Kanti Samadder', 'pialkanti2012@gmail.com', 'pk', '123', '01676277976', 'Dhaka,Bangladesh', 'Kuakata', 'dadadada', 'http://localhost/Tourism site/upload/pk1425319215pial.jpg', 0),
(24, 'Pial Kanti', 'pialkantisomaddar@yahoo.com', 'Pial2013', '123', '01676277976', 'khulna', 'Kuakata', 'qwertyu', 'http://localhost/Tourism site/upload/Pial20131425321838lionel_messi_hd_wallpaper_2014_-_victory-1024x640 (1) (Copy).png', 1),
(25, 'Rajesh Bhartia', 'rb@gmail.com', 'Rajesh', '123', '01234567890', '', '', '', 'http://localhost/Tourism site/Images/1424566763_unknown-512.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatable`
--
ALTER TABLE `datatable`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatable`
--
ALTER TABLE `datatable`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
