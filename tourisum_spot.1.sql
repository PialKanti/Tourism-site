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
-- Table structure for table `tourisum_spot`
--

CREATE TABLE IF NOT EXISTS `tourisum_spot` (
`No` int(11) NOT NULL,
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
  `Latitude` varchar(2000) NOT NULL,
  `Information` varchar(1000) NOT NULL,
  `address` varchar(100) NOT NULL,
  `co-ordinates` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourisum_spot`
--

INSERT INTO `tourisum_spot` (`No`, `id`, `Name`, `bangla_name`, `description`, `main_image`, `history1`, `history2`, `history3`, `history_image1`, `caption1`, `history_image2`, `caption2`, `Longitude`, `Latitude`, `Information`, `address`, `co-ordinates`) VALUES
(1, 'Dhaka', 'Lalbag Fort', 'à¦²à¦¾à¦²à¦¬à¦¾à¦—à§‡à¦° à¦•à§‡à¦²à§à¦²à¦¾', 'Lalbagh Fort(also Fort Aurangabad, in Bengali: à¦²à¦¾à¦²à¦¬à¦¾à¦—à§‡à¦° à¦•à§‡à¦²à§à¦²à¦¾) is an incomplete 17th century Mughal fort complex that stands proudly before the Buriganga River in the southwestern part of Dhaka, Bangladesh.The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah who was son of Emperor Aurangzeb and later emperor himself. His successor, Shaista Khan, did not continue the work, though he stayed in Dhaka up to 1688.', 'http://localhost/Tourism site/upload/Pial20131425542044lalbaghfort.jpg', 'Lalbagh Fort is the most popular and renowned fort and a great signature of art by Mughal Emperor in Bangladesh. It is also known as Fort Aurangabad. It is situated in Lalbagh of old Dhaka, thats why names so. It is situated by the bank of the river Buriganga in a rich red soil. It was an incomplete structure by a Mughal Emperor named Prince Muhammad Azam (third son of Aurangazeb). He started the work of the fort in 1678 during his vice-royality in Bangladesh (Previous Bengal). He stayed in Bengal for 15 months. It remained incomplete when he was called by his father Aurangazeb.', 'Shaista Khan was the new Subedar of Dhaka in that time, and he did not complete the fort. In 1684, the daughter of Shaista Khan named Iran Dukht (Pari Bibi) died there. After her death, he started to think the fort as ominous, and left the structure incomplete. Among the 3 major parts of Lalbagh Fort, one is the tomb of Pari Bibi.', 'After Shaista Khan left Dhaka, it lost its popularity. The main cause was that the capital was replaced from Dhaka to Murshidabad. After the end of royal Mughal period, the fort became abandoned. In 1844, the area achieved its name as Lalbagh replacing Aurangabad, so the fort as Lalbagh Fort.', 'http://localhost/Tourism site/upload/Pial20131425542044Lalbagh_Kella_(Lalbagh_Fort)_Dhaka_Bangladesh_2011_49.jpg', 'Kella Gateways', 'http://localhost/Tourism site/upload/Pial20131425542044019PHO0000125S3U00085000[SVC2].jpg', 'View of the south gate to Lalbagh Fort, Dhaka', '23.719146', '90.388342', '', '', ''),
(2, 'Dhaka', 'Ahsan Manzil', 'à¦†à¦¹à¦¸à¦¾à¦¨ à¦®à¦žà§à¦œà¦¿à¦²', 'Ahsan Manzil (Bengali: à¦†à¦¹à¦¸à¦¾à¦¨ à¦®à¦žà§à¦œà¦¿à¦², Ahsan Monjil) was the official residential palace and seat of the Dhaka Nawab Family.This magnificent building is situated at Kumartoli along the banks of the Buriganga River in Dhaka, Bangladesh. The construction of this palace was started in 1859 and was completed in 1872. It was constructed in the Indo-Saracenic Revival architecture. It has been designated as a national museum.', 'http://localhost/Tourism site/upload/Pial20131425650941ahsanmanjil96.jpg', 'In Mughal era, there was a garden house of Sheikh Enayet Ullah, the landlord of Jamalpur porgona (district), in this place. Sheikh Enayet Ullah was a very charming person. He acquired a very big area in Kumortuli (Kumartuli) and included it in his garden house. Here he built a beautiful palace and named it â€œRongmoholâ€ (Rangmahal). He used to enjoy here keeping beautiful girls collecting from the country and abroad, dressing them with gorgeous dresses and expensive ornaments.', 'Probably in the period of Nawab Alibardi Khan around 1740 century, Sheikh Moti Ullah, the son of Sheikh Enayet Ullah, sold the property to the French traders. There was a French trading house beside this property. The trading house became wealthier after purchasing this property. In that time, French traders could do business here without paying any taxes by a decree from the emperor Awrangajeb.', 'After the death of Khwaja Ahsanullah in 1901, the glory of Ahsan Manjil was ended. His successors couldnâ€™t continue the glory because of the internal family quarrel. They rented different parts of the palace to tenants, who actually made it a slum. In 1952, govt. acquired the property and left in supervision of the Dhaka Nawab court. In 1985, Dhaka National Museum acquired the property and made it a museum.', 'http://localhost/Tourism site/upload/Pial20131425650941Ahsan-Monzil-Dhaka--Rezowan.jpg', 'Dome of Ahsan-Monzil', 'http://localhost/Tourism site/upload/Pial20131425650941Ahsan_Manjil_in_Pink.jpg', 'Ashan Monzil ', '23.708902', '90.406229', 'Information Officers (According to the Information Right Act. 2009) \r\n2) Ahsan Manzil Museum , Dhaka \r\nDr. Mohd. Alamgir \r\nDeputy Keeper \r\nPhone : +880-2-7391122 \r\nEntry Fee for single entry:  BDT 2.00(two) only \r\nApril to September \r\nSaturday to Wednesday : 10:30  to 17:30 \r\nOctober to March \r\nSaturday to Wednesday : 09:30 to 16:30 \r\nFriday : 15:30 to 19:30 \r\n\r\nHolidays : \r\nThursday and Government holidays. ', '', ''),
(3, 'Khulna', 'Sundarbans', 'à¦¸à§à¦¨à§à¦¦à¦°à¦¬à¦¨', 'The Sundarbans (Bengali: à¦¸à§à¦¨à§à¦¦à¦°à¦¬à¦¨) is a natural region in Bengal. It is the largest single block of tidal halophytic mangrove forest in the world.The Sundarbans covers approximately 10,000 square kilometres of which 60 percent is in Bangladesh with the remainder in India. The Sundarbans is a UNESCO World Heritage Site.', 'http://localhost/Tourism site/upload/Kanti.pial1426603804Sun_in_Sunderbans.jpg', 'The Sundarban is the largest littoral mangrove belt in the world, stretching 80km into the Bangladeshi hinterland from the coast. The forests are not just mangrove swamps though; they include some of the last remaining stands of the mighty jungles which once covered the Gangetic plain.', 'Sundarban is the home to many different species of birds, mammals, insects, reptiles and fishes. Over 120 species of fishes and over 260 species of birds have been recorded in the Sundarban. The Gangetic River Dolphin (Platanista gangeticus) is common in the rivers. No less than 50 species of reptiles and eight species of amphibians are known to occur.', 'Its beauty lies in its unique natural surrounding. Thousands of meandering streams, creeks, rivers and estuaries have enhanced its charm. Sundarban is the natural habitat of the world famous Royal Bengal Tiger, spotted deer, crocodiles, jungle fowl, wild boar, lizards, theses monkey and an innumerable variety of beautiful birds.', 'http://localhost/Tourism site/upload/Kanti.pial1426603804Sundarbans_02.jpg', 'Sundari tree ', 'http://localhost/Tourism site/upload/Kanti.pial1426603804Axis_axis_Kanha_4kl.jpg', 'Chital deers', '22.333831', '89.572621', 'The name Sundarban can be literally translated as "beautiful forest" in the Bengali language (Shundor, "beautiful" and bon, "forest"). ', 'Khulna Division, Bangladesh and south 24 parganas, India.', '21° 56? 59? N, 89° 10? 59.99? E\r\n21.949722, 89.18333'),
(4, 'Khulna', 'Kuakata', 'à¦•à§à¦¯à¦¼à¦¾à¦•à¦¾à¦Ÿà¦¾', 'Kuakata (Bengali: à¦•à§à¦¯à¦¼à¦¾à¦•à¦¾à¦Ÿà¦¾) is a panoramic sea beach on the southernmost tip of Bangladesh.[Located in the Patuakhali district, Kuakata has a wide sandy beach from where one can see both the sunrise and sunset. It is about 320 Kilometers south of Dhaka, the capital, and about 70 Kilometers from the district headquarters. The Kuakata beach is 30 km long and 6 km wide. ', 'http://localhost/Tourism site/upload/Kanti.pial14266053365930658581_dc40af7752_b.jpg', 'Kuakata offers a full view of the sunrise and sunset from the same white sandy beach in the water of the Bay of Bengal.\r\n\r\nLocally known as Shagor Kannya (Daughter of the Sea), the long strip of dark, marbled sand stretches for about 30 km. The long and wide beach at Kuakata has a typical natural setting. This sandy beach has gentle slopes into the Bay of Bengal. Kuakata is also a sanctuary for migratory winter birds.', 'n the eastern end of the beach is Gongamati Reserved Forest, an evergreen mangrove forest and snippet of the original Kuakata. When the Rakhines settled in the area in 1784, Kuakata was part of the larger Sundarbans forest. However, the Sundarbans is now at a distance of one-hour by speed boat. As a mangrove forest, Gongamati, like the Sundarbans, offers some protection against tidal surges, however it too is being threatened by logging and deforestation. ', 'Kuakata is the place of pilgrimage for both Hindu and Buddhist communities. Innumerable devotees arrive here at the festival of Rush Purnima and Maghi Purnima. On these two occasions the pilgrims take holy bath at the bay and participate in the traditional fairs. One may also visit the 100 years old Buddhist Temple where the statue of Goutama Buddha and two wells of 200 years old are located.', 'http://localhost/Tourism site/upload/Kanti.pial14266053361200px-Sunrise_at_Kuakata_beach.jpg', 'Sunrise at Kuakata beach', 'http://localhost/Tourism site/upload/Kanti.pial14266053361200px-Sunset_at_Kuakata_beach.jpg', 'Sunset at Kuakata beach', '21.810301', '90.181618', 'The name Kuakata originated from the word the Bengali word for â€œWellâ€ which was dug on the sea shore by the early Rakhine settlers in quest of collecting drinking water, who landed on Kuakata coast in the eighteenth century after being expelled from Arakan (Myanmar) by the Mughals.Afterwards, it has become a tradition of digging Well in the neighborhoods of Rakhaine tribes for water.', 'Kalapara,Patuakhali,Bangladesh.', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourisum_spot`
--
ALTER TABLE `tourisum_spot`
 ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourisum_spot`
--
ALTER TABLE `tourisum_spot`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
