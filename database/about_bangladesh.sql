-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 05:06 PM
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
-- Table structure for table `about_bangladesh`
--

CREATE TABLE IF NOT EXISTS `about_bangladesh` (
`id` int(11) NOT NULL,
  `Description1` varchar(20000) NOT NULL,
  `Description2` varchar(20000) NOT NULL,
  `Description3` varchar(20000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_bangladesh`
--

INSERT INTO `about_bangladesh` (`id`, `Description1`, `Description2`, `Description3`) VALUES
(6, 'Bangladesh(????????), officially the People''s Republic of Bangladesh (?????????????? ???????? Gônôprôjatôntri Bangladesh), is a country in South Asia; and is bordered by India to its west, north and east; Burma to its southeast and separated from Nepal and Bhutan by the Chicken’s Neck corridor. To its south, it faces the Bay of Bengal. Bangladesh is the world''s eighth-most populous country, with over 160 million people, and among the most densely populated countries. It forms part of the ethno-linguistic region of Bengal, along with the neighbouring Indian states of West Bengal and Tripura.', 'The present-day borders of Bangladesh took shape during the Partition of Bengal and British India in 1947, when the region used to be known as East Pakistan, as a part of the newly formed state of Pakistan. It was separated from West Pakistan by 1,400 km of Indian territory. Due to political exclusion, ethnic and linguistic discrimination and economic neglect by the politically dominant western wing, nationalism, popular agitation and civil disobedience led to the Bangladesh Liberation War and independence in 1971. After independence, the new state endured poverty, famine, political turmoil and military coups. The restoration of democracy in 1991 has been followed by relative calm and economic progress. In 2014, the Bangladeshi general election was boycotted by major opposition parties, resulting in a parliament and government dominated by the Awami League and its smaller coalition partners.', 'Bangladesh is a unitary parliamentary republic with an elected parliament called the Jatiyo Sangshad. The native Bengalis form the country''s largest ethnic group, along with indigenous peoples in northern and southeastern districts. Geographically, the country is dominated by the fertile Bengal delta, the world''s largest delta. This also gives Bangladesh a unique name tag "The land of rivers".');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_bangladesh`
--
ALTER TABLE `about_bangladesh`
 ADD PRIMARY KEY (`id`), ADD FULLTEXT KEY `Description` (`Description1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_bangladesh`
--
ALTER TABLE `about_bangladesh`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
