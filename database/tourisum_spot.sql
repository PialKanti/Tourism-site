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
-- Table structure for table `tourisum_spot`
--

CREATE TABLE IF NOT EXISTS `tourisum_spot` (
`No.` int(11) NOT NULL,
  `id` varchar(1000) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `bangla_name` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `main_image` varchar(1000) NOT NULL,
  `history1` varchar(10000) NOT NULL,
  `history2` varchar(10000) NOT NULL,
  `history3` varchar(10000) NOT NULL,
  `history_image1` varchar(1000) NOT NULL,
  `caption1` varchar(1000) NOT NULL,
  `history_image2` varchar(1000) NOT NULL,
  `caption2` varchar(1000) NOT NULL,
  `Longitude` varchar(2000) NOT NULL,
  `Latitude` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourisum_spot`
--

INSERT INTO `tourisum_spot` (`No.`, `id`, `Name`, `bangla_name`, `description`, `main_image`, `history1`, `history2`, `history3`, `history_image1`, `caption1`, `history_image2`, `caption2`, `Longitude`, `Latitude`) VALUES
(1, 'Dhaka', 'Lalbag Fort', 'à¦²à¦¾à¦²à¦¬à¦¾à¦—à§‡à¦° à¦•à§‡à¦²à§à¦²à¦¾', 'Lalbagh Fort(also Fort Aurangabad, in Bengali: à¦²à¦¾à¦²à¦¬à¦¾à¦—à§‡à¦° à¦•à§‡à¦²à§à¦²à¦¾) is an incomplete 17th century Mughal fort complex that stands proudly before the Buriganga River in the southwestern part of Dhaka, Bangladesh.The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah who was son of Emperor Aurangzeb and later emperor himself. His successor, Shaista Khan, did not continue the work, though he stayed in Dhaka up to 1688.', 'http://localhost/Tourism site/upload/Pial20131425542044lalbaghfort.jpg', 'Lalbagh Fort is the most popular and renowned fort and a great signature of art by Mughal Emperor in Bangladesh. It is also known as Fort Aurangabad. It is situated in Lalbagh of old Dhaka, thats why names so. It is situated by the bank of the river Buriganga in a rich red soil. It was an incomplete structure by a Mughal Emperor named Prince Muhammad Azam (third son of Aurangazeb). He started the work of the fort in 1678 during his vice-royality in Bangladesh (Previous Bengal). He stayed in Bengal for 15 months. It remained incomplete when he was called by his father Aurangazeb.', 'Shaista Khan was the new Subedar of Dhaka in that time, and he did not complete the fort. In 1684, the daughter of Shaista Khan named Iran Dukht (Pari Bibi) died there. After her death, he started to think the fort as ominous, and left the structure incomplete. Among the 3 major parts of Lalbagh Fort, one is the tomb of Pari Bibi.', 'After Shaista Khan left Dhaka, it lost its popularity. The main cause was that the capital was replaced from Dhaka to Murshidabad. After the end of royal Mughal period, the fort became abandoned. In 1844, the area achieved its name as Lalbagh replacing Aurangabad, so the fort as Lalbagh Fort.', 'http://localhost/Tourism site/upload/Pial20131425542044Lalbagh_Kella_(Lalbagh_Fort)_Dhaka_Bangladesh_2011_49.jpg', 'Kella Gateways', 'http://localhost/Tourism site/upload/Pial20131425542044019PHO0000125S3U00085000[SVC2].jpg', 'View of the south gate to Lalbagh Fort, Dhaka', '23.719146', '90.388342'),
(2, 'Dhaka', 'Ahsan Manzil', 'à¦†à¦¹à¦¸à¦¾à¦¨ à¦®à¦žà§à¦œà¦¿à¦²', 'Ahsan Manzil (Bengali: à¦†à¦¹à¦¸à¦¾à¦¨ à¦®à¦žà§à¦œà¦¿à¦², Ahsan Monjil) was the official residential palace and seat of the Dhaka Nawab Family.This magnificent building is situated at Kumartoli along the banks of the Buriganga River in Dhaka, Bangladesh. The construction of this palace was started in 1859 and was completed in 1872. It was constructed in the Indo-Saracenic Revival architecture. It has been designated as a national museum.', 'http://localhost/Tourism site/upload/Pial20131425650941ahsanmanjil96.jpg', 'In Mughal era, there was a garden house of Sheikh Enayet Ullah, the landlord of Jamalpur porgona (district), in this place. Sheikh Enayet Ullah was a very charming person. He acquired a very big area in Kumortuli (Kumartuli) and included it in his garden house. Here he built a beautiful palace and named it â€œRongmoholâ€ (Rangmahal). He used to enjoy here keeping beautiful girls collecting from the country and abroad, dressing them with gorgeous dresses and expensive ornaments.', 'Probably in the period of Nawab Alibardi Khan around 1740 century, Sheikh Moti Ullah, the son of Sheikh Enayet Ullah, sold the property to the French traders. There was a French trading house beside this property. The trading house became wealthier after purchasing this property. In that time, French traders could do business here without paying any taxes by a decree from the emperor Awrangajeb.', 'After the death of Khwaja Ahsanullah in 1901, the glory of Ahsan Manjil was ended. His successors couldnâ€™t continue the glory because of the internal family quarrel. They rented different parts of the palace to tenants, who actually made it a slum. In 1952, govt. acquired the property and left in supervision of the Dhaka Nawab court. In 1985, Dhaka National Museum acquired the property and made it a museum.', 'http://localhost/Tourism site/upload/Pial20131425650941Ahsan-Monzil-Dhaka--Rezowan.jpg', 'Dome of Ahsan-Monzil', 'http://localhost/Tourism site/upload/Pial20131425650941Ahsan_Manjil_in_Pink.jpg', 'Ashan Monzil ', '23.708902', '90.406229'),
(3, '', '', '', '', 'http://localhost/Tourism site/upload/Pial20131425743529', '', '', '', 'http://localhost/Tourism site/upload/Pial20131425743529', '', 'http://localhost/Tourism site/upload/Pial20131425743529', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourisum_spot`
--
ALTER TABLE `tourisum_spot`
 ADD PRIMARY KEY (`No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourisum_spot`
--
ALTER TABLE `tourisum_spot`
MODIFY `No.` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
