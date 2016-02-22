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
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `image_link` varchar(1000) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `uploader` varchar(100) NOT NULL,
  `upload_date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_link`, `caption`, `uploader`, `upload_date`) VALUES
(1, 'http://localhost/Tourism site/upload/Pial201314265862956715313515_33fb8f40c5_b.jpg', 'Greenland â€“ Shunamgonj, Bangladesh', 'Pial2013', 'March 17, 2015, 3:58 pm'),
(2, 'http://localhost/Tourism site/upload/Pial201314265864515909290370_dbb07edf50_b.jpg', 'Yellow Dreams â€“ Manikganj, Bangladesh', 'Pial2013', 'March 17, 2015, 4:00 pm'),
(3, 'http://localhost/Tourism site/upload/Pial201314265865306243773683_1144e5edcc_b.jpg', 'Fanush â€“ Bashabo, Dhaka, Bangladesh', 'Pial2013', 'March 17, 2015, 4:02 pm'),
(6, 'http://localhost/Tourism site/upload/Pial201314265868736364171489_a4cb4647a3_b.jpg', 'Beautiful Bangladesh â€“ Shunamganj, Bangladesh', 'Pial2013', 'March 17, 2015, 4:07 pm'),
(7, 'http://localhost/Tourism site/upload/Kanti.pial14265898104437292759_0674f563c8_o.jpg', 'Pair of Devineness â€“ Tanguar Haor, Shunamganj, Bangladesh', 'Kanti.pial', 'March 17, 2015, 4:56 pm'),
(8, 'http://localhost/Tourism site/upload/Kanti.pial14265899014435419328_91d93eb64b_o.jpg', 'a walk on the green!', 'Kanti.pial', 'March 17, 2015, 4:58 pm'),
(9, 'http://localhost/Tourism site/upload/Kanti.pial14265931813686842206_4a25c182db_z.jpg', 'Bangladesh is Just Awesome â€“ Bompara Tribal Village, Bandarbans, Bangladesh', 'Kanti.pial', 'March 17, 2015, 5:53 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
