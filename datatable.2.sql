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
  `admin` int(11) NOT NULL,
  `member_date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datatable`
--

INSERT INTO `datatable` (`user_id`, `name`, `email`, `username`, `password`, `mobile`, `Place`, `favourite`, `about`, `image_link`, `admin`, `member_date`) VALUES
(24, 'Pial Kanti', 'pialkantisomaddar@yahoo.com', 'Pial2013', '123', '01676277976', 'khulna', 'Kuakata', '“I have no special talents. I am only passionately curious.” ', 'http://localhost/Tourism site/upload/Pial20131425321838lionel_messi_hd_wallpaper_2014_-_victory-1024x640 (1) (Copy).png', 1, '10 Feb,2015'),
(26, 'Pial Kanti Samadder', 'pialkantisomaddar@yahoo.com', 'Kanti.pial', '1234', '01676277976', 'khulna,Bangladesh', 'Kuakata', 'Hello there. I am Pial Kanti Samadder. I am studing at Khulna University of Technology(KUET). I am graduating on Computer Science and Engineering(CSE). I was grow up in Dhaka. I like to watch movie, playing computer games and lisentening music.', 'http://localhost/Tourism site/upload/Kanti.pial1425831245IMG_3331 (Copy).JPG', 1, '8 Mar,2015'),
(30, 'Piyal Shuvro', 'abc@gmail.com', 'Piyal', '123', '0123', 'khulna,Bangladesh', 'Kuakata', 'à¦†à¦®à¦¿ à¦¸à¦¾à¦§à¦¾à¦°à¦£à¦¤ à¦®à¦œà¦¾ à¦•à¦°à¦¤à§‡ à¦ªà¦›à¦¨à§à¦¦ à¦•à¦°à¦¿à¥¤ à¦¨à¦¿à¦œà§‡ à¦¹à¦¾à¦¸à¦¤à§‡ à¦†à¦° à¦…à¦¨à§à¦¯à¦•à§‡ à¦¹à¦¾à¦¸à¦¿ à¦®à§à¦–à§‡ à¦¦à§‡à¦–à¦¤à§‡ à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¿à¥¤ à¦¨à¦¿à¦œà§‡à¦•à§‡ à¦¬à¦¨à§à¦§à§à¦¬à§Žà¦¸à¦² à¦¬à¦²à§‡à¦‡ à¦®à¦¨à§‡ à¦¹à§Ÿà¥¤ à¦¤à¦¬à§‡ à¦®à¦¾à¦¥à¦¾ à¦—à¦°à¦® à¦¹à¦²à§‡ à¦¨à¦¿à¦œà§‡à¦° à¦‰à¦ªà¦° à¦¨à¦¿à§Ÿà¦¨à§à¦¤à§à¦°à¦£ à¦¥à¦¾à¦•à§‡ à¦¨à¦¾à¥¤ \r\n\r\nà¦†à¦®à¦¿ à¦–à§‡à¦²à¦¾ à¦­à¦•à§à¦¤à¥¤ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦•à§à¦°à¦¿à¦•à§‡à¦Ÿ à¦¦à¦²à§‡à¦° à¦ªà§à¦°à¦¤à¦¿ à¦¬à¦¿à¦¶à§‡à¦· à¦¦à§à¦°à§à¦¬à¦²à¦¤à¦¾ à¦†à¦›à§‡à¥¤ à¦«à§à¦Ÿà¦¬à¦² à¦–à§à¦¬ à¦à¦•à¦Ÿà¦¾ à¦¦à§‡à¦–à¦¿ à¦¨à¦¾à¥¤ à¦¦à§‡à¦–à¦²à§‡ à¦¶à§à¦§à§ à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾ à¦†à¦° à¦®à§à¦¯à¦¾à¦¨à¦šà§‡à¦¸à¦Ÿà¦¾à¦° à¦‡à¦‰à¦¨à¦¾à¦‡à¦Ÿà§‡à¦¡ à¦à¦° à¦–à§‡à¦²à¦¾ à¦‡ à¦¦à§‡à¦–à¦¿à¥¤\r\n\r\nà¦–à¦¾à¦¬à¦¾à¦°à§‡à¦° à¦‰à¦ªà¦°à¦“ à¦†à¦®à¦¾à¦° à¦¦à§à¦°à§à¦¬à¦²à¦¤à¦¾ à¦†à¦›à§‡à¥¤ à¦•à¦¾à¦šà§à¦šà¦¿ à¦¬à¦¿à¦°à¦¿à§Ÿà¦¾à¦¨à¦¿, à¦–à¦¾à¦¸à¦¿à¦° à¦®à¦¾à¦‚à¦¸ à¦†à¦®à¦¾à¦° à¦ªà¦›à¦¨à§à¦¦à§‡à¦° à¦¤à¦¾à¦²à¦¿à¦•à¦¾à¦° à¦‰à¦ªà¦°à§‡à¦° à¦¦à¦¿à¦•à§‡à¥¤ à¦†à¦®à¦¾à¦° à¦šà§‡à¦¹à¦¾à¦°à¦¾ à¦¦à§‡à¦–à¦²à§‡ à¦…à¦¬à¦¶à§à¦¯ à¦¤à¦¾ à¦…à¦¨à§‡à¦•à¦Ÿà¦¾ à¦…à¦¨à§à¦®à¦¾à¦¨ à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿà¥¤\r\n\r\nà¦…à¦¨à§‡à¦•à§‡ à¦¬à¦²à§‡ à¦†à¦®à¦¾à¦•à§‡ à¦¨à¦¾à¦•à¦¿ à¦‡à¦°à§‡à¦¶ à¦œà¦¾à¦•à§‡à¦°à§‡à¦° à¦®à¦¤ à¦²à¦¾à¦—à§‡à¥¤ à¦†à¦®à¦¿ à¦†à¦¸à¦²à§‡ à¦œà¦¾à¦¨à¦¿ à¦¨à¦¾ à¦¸à§‡à¦Ÿà¦¾ à¦¸à¦¤à§à¦¯ à¦•à¦¿à¦¨à¦¾à¥¤\r\n\r\nà¦†à¦®à¦¾à¦° à¦œà§€à¦¬à¦¨à¦Ÿà¦¾ à¦•à§‡à¦Ÿà§‡à¦›à§‡ à¦¯à¦¾à¦¯à¦¾à¦¬à¦°à§‡à¦° à¦®à¦¤à¥¤ à¦¬à¦¾à¦¬à¦¾à¦° à¦šà¦¾à¦•à§à¦°à¦¿à¦° à¦¸à§à¦¬à¦¾à¦¦à§‡ à¦…à¦¨à§‡à¦• à¦¯à¦¾à§Ÿà¦—à¦¾à§Ÿ à¦˜à§à¦°à¦¤à§‡ à¦¹à§Ÿà§‡à¦›à§‡, à¦¯à¦¾à¦° à¦›à¦¾à¦ª à¦ªà¦¾à¦“à§Ÿà¦¾ à¦¯à¦¾à¦¬à§‡ à¦†à¦®à¦¾à¦° à¦¶à¦¿à¦•à§à¦·à¦¾ à¦œà§€à¦¬à¦¨à§‡à¦° à¦¸à§à¦•à§à¦² à¦—à§à¦²à§‹à¦° à¦¨à¦¾à¦® à¦ªà§œà¦²à§‡à¥¤ à¦œà§€à¦¬à¦¨à§‡ à¦•à¦¿à¦›à§ à¦¨à¦¾ à¦ªà§‡à¦²à§‡à¦“ à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦¯à¦¾à§Ÿà¦—à¦¾à§Ÿ à¦•à¦¿à¦›à§ à¦¬à¦¨à§à¦§à§ à¦ªà§‡à§Ÿà§‡à¦›à¦¿, à¦à¦Ÿà¦¾à¦‡ à¦†à¦®à¦¾à¦° à¦•à¦¾à¦›à§‡ à¦…à¦¨à§‡à¦•à¥¤\r\n\r\nà¦à¦‡ à¦¤à§‹à¥¤ à¦à¦Ÿà¦¾à¦‡ à¦†à¦®à¦¿à¥¤', 'http://localhost/Tourism site/upload/Piyal142632034311009093_10202733978230497_2220701569124749132_n.jpg', 0, '14 Mar,2015'),
(31, 'Rajesh Bhartia', 'rb@gmail.com', 'Rajesh', '123', '0123', 'khulna,Bangladesh', 'Kuakata', 'I like travelling.', 'http://localhost/Tourism site/upload/Rajesh142632014710635976_280640942133982_8661560088868571781_n.jpg', 0, '14 Mar,2015'),
(39, 'Rubel Ahmed', 'rubel@gmail.com', 'Rubel', '123', '0123', '', '', '', 'http://localhost/Tourism site/Images/1424566763_unknown-512.png', 0, '14 Mar,2015'),
(41, 'Rupayan Dhuba', 'pialkantisomaddar@yahoo.com', 'Rupayan', '123', '01676277976', '', '', '', 'http://localhost/Tourism site/Images/1424566763_unknown-512.png', 0, '16 Mar,2015');

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
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
