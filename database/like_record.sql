-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2015 at 09:49 PM
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
-- Table structure for table `like_record`
--

CREATE TABLE IF NOT EXISTS `like_record` (
`id` int(11) NOT NULL,
  `comment_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_record`
--

INSERT INTO `like_record` (`id`, `comment_id`, `username`) VALUES
(11, '47', 'Pial2013'),
(12, '47', 'Piyal'),
(13, '45', 'Piyal'),
(14, '45', 'Pial2013'),
(15, '43', 'Pial2013'),
(16, '39', 'Pial2013'),
(17, '27', 'Pial2013'),
(18, '49', 'Pial2013'),
(19, '51', 'Pial2013'),
(20, '51', 'Piyal'),
(21, '50', 'Pial2013'),
(22, '52', 'Pial2013');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `like_record`
--
ALTER TABLE `like_record`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `like_record`
--
ALTER TABLE `like_record`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
