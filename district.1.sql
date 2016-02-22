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
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
`id_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_link` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id_no`, `name`, `description`, `image_link`) VALUES
(3, 'Dhaka', 'Dhaka (Bengali: à¦¢à¦¾à¦•à¦¾, also known as Dacca, especially formerly) is the capital city of Bangladesh. It is the headquarters of Dhaka Division and Dhaka District. Dhaka is the most populous city in Bangladesh and the tenth-largest city in the world, with a population of over 15 million inhabitants. It is the only megacity in Bangladesh. It is the center of the Greater Dhaka conurbation. Standing on the east bank of the Buriganga River, Dhaka is the political, economic and cultural heart of Bangladesh. It is one of the major cities of South Asia. Historically known as the City of Mosques, it is also nicknamed as the Rickshaw Capital of the World, with its daily traffic of over 500,000 cycle rickshaws.', 'http://localhost/Tourism site/upload/Pial20131426442956Dhaka_Bd (1).jpg'),
(10, 'Khulna', 'Khulna (Bengali: à¦–à§à¦²à¦¨à¦¾ ) is the third-largest city in Bangladesh. It is the administrative seat of Khulna District and Khulna Division. The city has a population of more than 1.4 million people.[3]\r\n\r\nKhulna is an old river port located on the Rupsha River. It is an important hub of Bangladeshi industry and hosts many national companies. It is served by Port of Mongla, the second largest seaport in the country. It is also one of the two principal naval command centres of the Bangladesh Navy.', 'http://localhost/Tourism site/upload/Pial20131426444071Khulna-City1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
 ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
