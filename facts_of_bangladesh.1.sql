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
-- Table structure for table `facts_of_bangladesh`
--

CREATE TABLE IF NOT EXISTS `facts_of_bangladesh` (
  `id` varchar(100) NOT NULL,
  `capital` varchar(100) NOT NULL,
  `population` varchar(100) NOT NULL,
  `gdp` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `ethnic` varchar(100) NOT NULL,
  `drives` varchar(100) NOT NULL,
  `call_code` varchar(100) NOT NULL,
`no` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facts_of_bangladesh`
--

INSERT INTO `facts_of_bangladesh` (`id`, `capital`, `population`, `gdp`, `time`, `languages`, `religion`, `ethnic`, `drives`, `call_code`, `no`) VALUES
('Bangladesh', 'Dhaka', '156.6 million (2013)', '957.82 USD â€Ž(2013)', 'BST (UTC+6)', 'Bengali', 'Islam,Hindusium,Buddist,Christan', '98% Bengali,2% other', 'left', '+088', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facts_of_bangladesh`
--
ALTER TABLE `facts_of_bangladesh`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facts_of_bangladesh`
--
ALTER TABLE `facts_of_bangladesh`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
