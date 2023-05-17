-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2023 at 12:19 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotarykalwan`
--
CREATE DATABASE IF NOT EXISTS `rotarykalwan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rotarykalwan`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'rckalwan', '55537');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `date0` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `image`, `title`, `date0`) VALUES
(4, '1589047210award1.jpeg', 'Award of Recognition Regarding Cardiac Surgery Project', '2007'),
(5, '1589105347award2.jpeg', 'Rotary Box Cricket League Participation Award', ''),
(6, '1590326539IMG-20200523-WA0016.jpg', 'Best President Award Rtn Galib mirza ', '2017/18');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `image`) VALUES
(2, '1589041358Rotary .jpg'),
(3, '1589041557Rotary-Mission-Statement-1024x796.jpg'),
(4, '1589101218rotary2.jpeg'),
(5, '1589101234rotary3.jpeg'),
(6, '1589101247rotary4.jpeg'),
(7, '1589101260rotary5.jpeg'),
(8, '1589101274rotary6.jpeg'),
(10, '1589101320rotary7.jpeg'),
(11, '1589101336rotary8.jpeg'),
(12, '1589101355rotary9.jpeg'),
(13, '1589101369rotaryflag.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `date0` varchar(15) DEFAULT NULL,
  `time0` varchar(10) DEFAULT NULL,
  `content` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `extra_post` varchar(100) DEFAULT NULL,
  `wa` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `post`, `dob`, `phone`, `image`, `extra_post`, `wa`) VALUES
(26, 'Prof. Ravindra Murlidhar Pagar', 'pagarrm@yahoo.in', 'member', '01/09/1970', '942325876', '1595085819IMG-20200718-WA0061.jpg', 'Professor at D.S.M.S Arts College Abhona', '05/11/1995'),
(27, 'Rajesh gangadhar musale', 'rajumusale3@gmail.com', 'president', '15/8/1980', '9423070748', '15950858791588946072profile.jpeg', 'Owner: Krishna Electronics Kalwan', '16/5/2006'),
(29, 'Jitendra Bhikaji Kapadne', 'jitukapadne@gmail.com', 'treasurer', '07/04/1972', '9422754154', '1595085753IMG-20200718-WA0060.jpg', 'Assist. Governer 2020/21; Owner: Raj Selection Kalwan', '16/05/1993'),
(31, 'Vilas Dattatraya shirore', 'shirore_vilas@rediffmail.com', 'member', '07/10/1968', '9422942259', '1588948134profile8.jpeg', 'Assist. Governor 2014/15 ; Edible oil  Business', '12/05/1995'),
(32, 'Mohanlal hiralal sancheti', 'mohanlalsancheti6693@gmail.com', 'member', '01/11/1944', '9423931315', '1588952462profile (8).jpeg', 'District Officer And Cloth Merchant', '23/41966'),
(33, 'Gangadhar Dharma Gunjal', 'gunjalsir@gmail.com', 'member', '12/06/1946', '9423070645', '1588952744profile9.jpeg', 'Retired Teacher', '11/05/1971'),
(34, 'Subhash bhavarlal jain ', 'sbjain.kalwan@gmail.com', 'member', '27/2/1952', '9423928349', '1589028428profile (9).jpeg', 'Building Material Supplier', '18/01/1975'),
(35, 'Dr. Ravindra D Bhamare', 'ravindrabhambre5@gmail.com', 'member', '12/10/1962', '9421565378', '1589045890profile (5).jpeg', 'Medical Practioner', '02/06/1991'),
(36, 'Prof. Vasantrao D Sonavane', 'vds1412@gmail.com', 'member', '14/12/1959', '8668926603', '1588953320profile (4).jpeg', 'Retired Professor', '12/04/1988'),
(37, 'Dr S B sonawane', 'samadhanbsonawane@gmail.com', 'member', '10/01/1974', '8600956555', '1589045222sonavanedoc.jpeg', 'Medical Practioner', '20/06/1999'),
(38, 'Pravin Shantilal Sancheti ', 'aricomp12@yahoo.com', 'member', '24/10/1969', '9422754158', '1589045340pravinsir.jpeg', 'Owner: Arihant Computers', '14/02/1993'),
(39, 'Ravindra Harichandra Kumawat', 'bkconstruction08@gmail.com', 'member', '01/06/1966', '9423257247', '1589027935bapu1.jpg', 'Building Contractor', '12/04/1988'),
(40, 'Sanjay Waman Bage', 'sanjaybage399@gmail.com', 'member', '11/05/1977', '8888882046', '1589046230bage.jpeg', 'Owner Max Comforts Company', '10/05/2003'),
(41, 'Nimba Bhila Pagar', 'nimbapagar27.5@gmail.com', 'member', '27/05/1979', '7588195712', '1589044262nimbapag.jpeg', 'Farmer & Bricks Manufacturer', '20/03/2006'),
(42, 'CA Galib Anjum Mirza', 'cagalibmirza786@gmail.com', 'member', '24/11/1991', '7709873587', '1589027729galib.jpeg', 'Chartered Accountant', '28/12/2017'),
(43, 'Ar. Pramod Mothabhau Suryawanshi', 'rutupramod@gmail.com', 'member', '06/01/1978', '9423079151', '1589029404prmod.jpeg', 'Architect', '3/12/2005'),
(44, 'Dr Tushar Eknathrao Pagar', 'dr_tushar728@rediffmail.com', 'member', '04/03/1983', '9890605749', '1589039376tushar.jpeg', 'MBBS DMRE(Radiologist)', '27/11/2011'),
(45, 'Nilesh Kashinath Bhamare', 'bhamaren2@gmail.com', 'secretary', '19/09/1978', '7588808331', '1595085677IMG-20200718-WA0059.jpg', 'Primary Teacher Z.P. School', '29/04/2004'),
(50, 'Sambhaji Shankar Pawar', 'pawar.sambhaji537@gmail.com', 'member', '01/12/1980', '8329374523', '1589045809sambhaji.jpeg', 'Primary Teacher Z.P. School', '08/05/2004'),
(51, 'Shabbir Shakir', '', 'DG', '', '', '1595085186IMG-20200718-WA0058.jpg', '', ''),
(52, 'Chandan Jitendra Kapadne', 'chandankapadne@gmail.com', 'member', '10/06/1999', '8329190047', '1595086038IMG-20200610-WA0093__01.jpg', 'Student at PICT College Pune', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `date0` varchar(15) DEFAULT NULL,
  `place` varchar(15) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date0`, `place`, `content`) VALUES
(1, 'ICU Setup and Ventilators', '11-05-2020', 'Kalwan', 'Great News.... Happy to share that R C Kalwan, COVID-19 global grant for installation of ICU Ward & ventilators at sub-district hospital kalwan.');

-- --------------------------------------------------------

--
-- Table structure for table `outside_meetings`
--

CREATE TABLE `outside_meetings` (
  `id` int(11) NOT NULL,
  `date0` varchar(15) DEFAULT NULL,
  `time0` varchar(10) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `image4` varchar(50) DEFAULT NULL,
  `image5` varchar(50) DEFAULT NULL,
  `title` varchar(70) DEFAULT NULL,
  `date0` varchar(15) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `content` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `title`, `date0`, `place`, `content`) VALUES
(12, '1589047006post (3).jpeg', '1589047006post (2).jpeg', '1589047006post (1).jpeg', '', '', 'Sewing machine distribution', '12/05/2013', 'Kalwan', 'Rotary club of Kalwan has distributed Sewing machine to underprivileged women in our area .\r\nIn presence of AG Avtar Singh Panfair'),
(13, '1589106843pos (84).jpeg', '1589106843pos1 (1).jpeg', '1589106843pos1 (2).jpeg', '', '', 'E Learning Set Distribution', '2015', 'Kundane', 'E learning Set distribution at Z.P. School Kundane by MACCIA president Santosh Mandelecha'),
(14, '1589107422pos (63).jpeg', '1589107422pos (64).jpeg', '1589107422pos (85).jpeg', '', '', 'Polio Vaccination Campaign', '2015', 'Kalwan', 'Rotary Club of Kalwan visited Polio Booths and helped in the process of polio dose distribution'),
(15, '1589107814pos (94).jpeg', '1589107814pos (96).jpeg', '1589107814pos (97).jpeg', '1589107814pos (98).jpeg', '', 'E Learning Project', '2016', 'Kalwan', 'E learning set distribution at Jankai School Kalwan by Rotary Club of Kalwan through Chief guest P.D.G. Kishorji Kedia'),
(16, '1589108686pos (45).jpeg', '1589108686pos (101).jpeg', '', '', '', 'Water Purifier Distribution', '2013', 'Kalwan', 'Rotary Club of Kalwan distributed water purifier systems handed by P.D.G. Kishor Kedia to 20 schools in Kalwan Tal. Almost over 4000 students are getting benifited by the project. This project was done with the international partner, Rotary Club of Red Springs America under the Matching Grant Project'),
(17, '1589109271pos (69).jpeg', '1589109271pos (70).jpeg', '1589109271pos (87).jpeg', '1589109271pos (89).jpeg', '', 'Makar Sankrant Celebration With Orphans', '2014', 'Manur', 'Rotary Kalwan members celebrated Makar Sankrant with orphans at Manur Orphanage and distributed some resources'),
(18, '1589109876pos (103).jpeg', '1589109876pos (104).jpeg', '1589109876pos (105).jpeg', '1589109876pos (106).jpeg', '', 'Water Purifier Distribution', '2013', 'Kalwan', 'Rotary Club of Kalwan distributed water purifier systems handed by P.D.G. Dada Deshmukh to 20 schools in Kalwan Tal. Almost over 4000 students are getting benifited by the project. This project was done with the international partner, Rotary Club of Red Springs America under the Matching Grant Project'),
(19, '1589111528Cycle.jpg', '', '', '', '', 'Bicycle Distribution', '2012', 'Otur', 'Rotary club of kalwan has distributed bicycles for secondary school girls at Otur Highschool handed by Dr. Prashant Bhutda.'),
(20, '1589112996pos (72).jpeg', '1589112996pos2.jpeg', '', '', '', 'Help to the Victims of Nepal Earthquake', '2011', 'Nashik', 'Helped Nepal Earthquake Victims in 2011 by providing them donation of 51000 Rs. at P.D.G. Dadasaheb Deshmukhs Office, Nashik'),
(21, '1589113297pos (71).jpeg', '1589113297pos (74).jpeg', '', '', '', 'Cleaning Awareness Campaign', '2013', 'Kalwan', 'Rotary Club of Kalwan members participated in Clean India Mission by holding a Cleaning Campaign in Kalwan'),
(22, '1589114360pos3 (1).jpeg', '1589114360pos3 (2).jpeg', '1589114360pos3 (3).jpeg', '', '', 'Nation Builder Award Distribution', '2017', 'Kalwan', '30 teachers in the Kalwan Tal. were awarded with the Nation Builder Award by the chief guest Mrs. Jayashritai Pawar, Nashik Z.P. president & Rtn. Rajendraji Bhamare under the program held by Rotary and Innerwheel Club of Kalwan'),
(23, '1589114901pos (57).jpeg', '1589114901pos (58).jpeg', '1589114901pos (59).jpeg', '1589114901pos (60).jpeg', '1589114901pos (61).jpeg', 'Resource Distribution at Adhar School', '2017', 'Yeola', 'Clothes and sweets distribution at Adhar School, School for mentally retarded children at Yeola was done by Rotary Club of Kalwan'),
(24, '1589115538pos (52).jpeg', '1589115538pos (53).jpeg', '1589115538pos (54).jpeg', '1589115538pos (56).jpeg', '', 'Memmography Checkup Camp', '2018', 'Kalwan', 'Rotary, Innerwheel and Rotarct club organized cancer detection camp. Check ups of 130 women for memmography and pap smear tests were done at sub-district hospital Kalwan'),
(25, '1589116021pos (40).jpeg', '1589116021pos4 (1).jpeg', '1589116021pos4 (2).jpeg', '', '', 'Tree Plantation Campaign', '2019', 'Kalwan', '1000 tress were planted by Rotary and Innerwheel members at Lamba Dongar, Kalwan'),
(26, '1589119539pos (77).jpeg', '1589119539pos (78).jpeg', '', '', '', 'Blood Donation Camp', '2016', 'Kalwan', 'Rotary Club of Kalwan organized blood donation camp and rotary, innerwheel & rotract members participated in the same'),
(27, '1589120485pos (5).jpeg', '1589120485pos (6).jpeg', '1589120485pos (7).jpeg', '1589120485pos (10).jpeg', '1589120485pos (142).jpeg', 'Flag Exchange Program', '2019', 'Eastern India', 'Rotary and Innerwheel members visited Jagnnathpuri, Gangtok, Bhuvaneshwar, kalimpong and exchanged flags with respective rotary members'),
(28, '1589120767pos (15).jpeg', '1589120767pos (16).jpeg', '1589120767pos (17).jpeg', '', '', 'Wheelchair Distribution', '2019', 'Kalwan', 'Rotary Club of Kalwan donated wheelchairs at Kalwan Bus Stand for the physically disabled people'),
(29, '1589121160pos (35).jpeg', '1589121160pos (37).jpeg', '1589121160pos (41).jpeg', '', '', 'Clothes Distribution Program', '2019', 'Bandharpada', 'Rotary Club of Kalwan distributed clothes among the needy people of Bandharpada situated at Gujrat Maharashtra border'),
(30, '1589121398pos (46).jpeg', '1589121398pos (47).jpeg', '', '', '', 'Matru Pitru Pujan', '2019', 'Kalwan', 'Rotary club of Kalwan organized a program for Matru Pitru Pujan of elders in the families of Rotary, Innerwheel & Rotract members '),
(31, '1589121709pos5 (1).jpeg', '1589121709pos5 (2).jpeg', '1589121709pos5 (3).jpeg', '1589121709pos5 (4).jpeg', '', 'Flag Exchange Program', '2019', 'Kathmandu', 'Rtn. Vilas Shirore and rotary & innerwheel members visited Kathmandu and Pokhra and exchanged flags with DG Kiranlal Shreshta and members'),
(32, '1589122102pos (22).jpeg', '1589122102pos6 (1).jpeg', '1589122102pos6 (2).jpeg', '1589122102pos6 (3).jpeg', '', 'Regional Seminar on Public Image & New Generation', '2019', 'Kalwan', 'Rotary club of Kalwan hosted a Regional Seminar on Public Image & New Generation addressed by D.G. Rajendraji Bhamare, P.D.G. Kishor Kedia & D.G.M. Ramesh Meher'),
(33, '1589123376pos7 (13).jpeg', '1589123376pos7 (14).jpeg', '1589123376pos7 (15).jpeg', '1589123376pos7 (16).jpeg', '1589123376pos7 (18).jpeg', 'Friendship Exchange Program', '2020', 'Singapore', 'Rotary International Friendship Programme, visit to dist. 3310 by dist. 3030 from jan. 28th to feb. 6th 2020. D.G. Rajamohan Munniswami & Singapore Rotary members welcomed us and also arranged dinner & flag exchange program'),
(34, '1589124236pos7 (10).jpeg', '1589124236pos7 (11).jpeg', '1589124236pos8 (1).jpeg', '1589124236pos8 (2).jpeg', '1589124236pos8 (3).jpeg', 'Friendship Exchange Program', '2020', 'Malaysia', 'Rotary International Friendship Exchange Programme, visit to dist. 3310 by dist 3030. D.G.N. Dolly Yeap & R.F.E. Chairman, Mr. Chortek welcomed us & guided us to visit various places of Johar Behru'),
(35, '1589283629pos7 (2).jpeg', '1589283629pos7 (3).jpeg', '1589283629pos7 (6).jpeg', '1589283629pos7 (7).jpeg', '1589283629pos7 (9).jpeg', 'Visit to Pusat HemoDialysis Center Pontain', '2020', 'Malaysia', 'Rotary Club members visited the Pusat Hemodialysis center and home for handicapped and mentally disabled people at Pontain Malaysia under the friendship exchange program'),
(36, '1589284232pos7 (1).jpeg', '1589284232pos7 (19).jpeg', '1589284232pos9 (1).jpeg', '1589284232pos9 (2).jpeg', '1589284232pos9 (3).jpeg', 'Dinner meet with malaysian innerwheel members', '2020', 'Malaysia', 'Innerwheel club of Kota Kinabalu Malaysia members arranged a dinner meet with the Innerwheel and rotary club Kalwan members'),
(37, '1589284775pos10 (1).jpeg', '1589284775pos10 (2).jpeg', '1589284775pos10 (3).jpeg', '1589284775pos10 (4).jpeg', '1589284775pos10.jpeg', 'Friendship Exchange Program', '2020', 'Malaysia', 'P.D.G. Zain, Captain Ong, Mr. Chya & Rotary Club of Kota Kinabalu memberrs welcomed us and showed their culture to us'),
(38, '1589285553pos11 (1).jpeg', '1589285553pos11 (2).jpeg', '1589285553pos11 (3).jpeg', '1589285553pos11 (4).jpeg', '1589285553pos11 (5).jpeg', 'Rally for awareness regarding COVID-19', '2020', 'Kalwan', 'Rotary club of Kalwan members arranged a rally along with Sai Nursing Institute to spread awareness regarding the seriousness of Corona Virus'),
(39, '1589286084pos12 (1).jpeg', '1589286084pos12 (2).jpeg', '1589286084pos12 (3).jpeg', '1589286084pos12 (5).jpeg', '1589286084pos13 (4).jpeg', 'Masks and Sanitizer Distribution', '2020', 'Kalwan', 'Rotary Club of Kalwan members distributed masks and sanitizer among the cleaning and health workers of Nagar Panchayat'),
(40, '1589286490pos13 (3).jpeg', '1589286490pos13 (5).jpeg', '1589286490pos14 (1).jpeg', '1589286490pos14 (2).jpeg', '1589286490pos14 (3).jpeg', 'Food and Grocery Distribution', '2020', 'Kalwan', 'Rotary club of Kalwan members distributed food and grocery among the poor families to provide them enough resources during the lockdown due to corona outbreak'),
(41, '1589286984pos15 (1).jpeg', '1589286984pos15 (2).jpeg', '1589286984pos15 (3).jpeg', '1589286984pos15 (5).jpeg', '1589286984pos15 (6).jpeg', 'PPE kits Distribution', '2020', 'Kalwan', 'Rotary club of Kalwan members donated PPE kits to sub district hospital doctors'),
(43, '1590685405IMG_20200528_221215_221.jpg', '1590685405.jpg', '1590685405IMG_20200528_221215_245.jpg', '1590685405IMG_20200528_221215_246.jpg', '1590685405IMG_20200528_221215_228.jpg', ' Rotary Friendship Exchange program RID 3030&3310 in virtual meeting ', '27-5-2020', 'Kalwan', 'Shared my experience as Team Leader in  Rotary Friendship Exchange program RID 3310 in virtual meeting organized by Rotary club of Malegoan Midtown \r\nThe meeting was also  attended by 15 Rotary members from RID 3310( Singapore and Malaysia)\r\nThank you RC Malegoan Midtown for giving the opportunity'),
(44, '1592586675IMG-20200619-WA0092.jpg', '1592586675IMG-20200619-WA0093.jpg', '1592586675IMG-20200619-WA0094.jpg', '1592586675IMG-20200619-WA0091.jpg', '1592586675IMG-20200619-WA0095.jpg', 'visit sptashrungi vriddhashram Nanduri ', '19-6-2020', 'Nanduri', 'Rc kalwan members visited saptashrungi vriddhashram @ Nanduri on the occasion of birthday celebration of Rtn vilas shirores daughter, pranali. She planted a tree and whole Shirore family gave donation for development of the ashram, also distributed sweets among the residents of the ashram.'),
(46, '1593786697IMG-20200703-WA0004.jpg', '1593786697IMG-20200701-WA0044.jpg', '1593786697IMG-20200702-WA0017.jpg', '1593786697IMG-20200702-WA0015.jpg', '1593786697IMG-20200702-WA0018.jpg', 'Doctors day celebration @ sub district hospital ', '1-7-2020', 'Kalwan', 'In the background of Covid 19 the honorable doctors of Kalwan Sub-District Hospital have made invaluable contribution by providing medical services to the people. On the occasion of Doctors Day on 1st July, a ceremony was organized by Rotary Club of Kalwan to honor these 24 Corona Warriors at Sub-District Hospital, Kalwan.'),
(47, '1595084856IMG-20200708-WA0027.jpg', '1595084856IMG-20200708-WA0023.jpg', '1595084856IMG-20200710-WA0002.jpg', '1595084856IMG-20200708-WA0054.jpg', '1595084856IMG-20200711-WA0074.jpg', 'Installation Ceremony Rotary&Rotract club kalwan ', '8-7-2020', 'Kalwan', 'The installation ceremony of Rotary & Rotract club of kalwan was held on 8th july, on this occasion DG.Rajamohan munisamy R I Dist 3310, DG Shabbir shakir,AG,shantaram gunjal were present virtually.'),
(48, '1597331192IMG-20200802-WA0022.jpg', '1597331192IMG-20200802-WA0026.jpg', '1597331192IMG-20200802-WA0006.jpg', '1597331192IMG-20200802-WA0033.jpg', '1597331192IMG-20200802-WA0035.jpg', 'Tree plantation 2020/21', '2-8-2020', 'Lamba Hill', 'Rotary, innerwheel and rotract club kalwan members planted 200 trees on lamba hill with the help of Rcc club patvir members'),
(49, '1606809663IMG_20201130_135419.jpg', '', '', '', '', 'Program', '30-11-2020', 'Kalwan', 'Vilas shorore visited at secretary Nilesh bhamres  new home');

-- --------------------------------------------------------

--
-- Table structure for table `presidents`
--

CREATE TABLE `presidents` (
  `id` int(11) NOT NULL,
  `year` varchar(10) DEFAULT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presidents`
--

INSERT INTO `presidents` (`id`, `year`, `name`) VALUES
(30, '2001-2002', 'Dr S T Wagh '),
(31, '2002-2003', 'Dr P P PAGAR'),
(32, '2003-2004', 'Dr P H kothawade'),
(35, '2004-2005', 'Mohanlal Sancheti '),
(36, '2005-2006', 'Gangadhar Gunjal'),
(37, '2006-2007', 'Subhash Jain'),
(38, '2007-2008', 'vilas shirore '),
(40, '2008-2009', 'Prof N B Kothawade'),
(43, '2009-2010', 'Jitendra Kapadne '),
(44, '2010-2011', 'Dr R D Bhamare'),
(45, '2011-2012', 'Prof Vasantrao Sonawane '),
(46, '2012-2013', 'Anil Mahajan '),
(47, '2013-14', 'Dr S B Sonawane '),
(48, '2014-15', 'Prof D N Bhamare'),
(49, '2015-16', 'Ravindra Kumavat'),
(50, '2016-17', 'Sanjay Bage'),
(51, '2017-18', 'CA Galib Mirza '),
(52, '2018-19', 'Nimba B Pagar'),
(53, '2019-20', 'Prof Ravindra Pagar ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outside_meetings`
--
ALTER TABLE `outside_meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presidents`
--
ALTER TABLE `presidents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `outside_meetings`
--
ALTER TABLE `outside_meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `presidents`
--
ALTER TABLE `presidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
