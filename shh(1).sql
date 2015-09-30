-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2015 at 08:11 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'journo.abbas@gmail.com', 'adminisn');

-- --------------------------------------------------------

--
-- Table structure for table `gallerycats`
--

CREATE TABLE IF NOT EXISTS `gallerycats` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `galleryimgs`
--

CREATE TABLE IF NOT EXISTS `galleryimgs` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(650) NOT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `file`, `added_on`) VALUES
(8, 'ISN 1', '527203_401107.jpg', '2014-05-08'),
(9, 'ISN 2', '480126_247903.jpg', '2014-05-09'),
(10, 'ISN 3', '796478_333322.jpg', '2014-05-09'),
(11, 'ISN 4', '347741_949160.jpg', '2014-05-10'),
(12, 'ISN 5', '339776_334091.jpg', '2014-05-12'),
(13, 'ISN 6', '487817_748660.jpg', '2014-05-14'),
(14, 'ISN 7', '591473_150289.jpg', '2014-05-16'),
(15, 'ISN 8', '309729_968276.jpg', '2014-05-23'),
(16, 'ISN 9', '735943_878793.jpg', '2014-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `title`, `links`) VALUES
(1, 'Islam Dharma', 'http://islamdharma.org'),
(2, 'Islamic Research Foundataion', 'http://irf.net'),
(3, 'Islam City', 'http://www.islamicity.com/'),
(4, 'The religion of Islam', 'http://www.islamreligion.com/'),
(5, 'Islam QnA', 'http://islam.com/'),
(6, 'Islam Guide', 'http://www.islam-guide.com/'),
(7, 'Islam Sab Ke Liye', 'islamsabkeliye.com'),
(8, 'Islamic Web Duniya', 'http://islamicwebdunia.com');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
`id` int(11) NOT NULL,
  `media_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `file` varchar(255) CHARACTER SET latin1 NOT NULL,
  `youtube` text CHARACTER SET latin1 NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `media_type`, `title`, `description`, `file`, `youtube`, `added_on`) VALUES
(11, 'Print', 'Madhur Sandesh', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>', '810937_406898.pdf', '', '2014-05-04'),
(12, 'Publication', 'à¤‡à¤¸à¥à¤²à¤¾à¤® à¤µà¤¿à¤°à¥‹à¤§à¥€ à¤­à¥à¤°à¤® à¤¨à¤¿à¤µà¤¾à¤°à¤£ - Dr. Zakir Naik', '<p>à¤¯à¥‹ à¤•à¤¿à¤¤à¤¾à¤¬ à¤—à¥ˆà¤° à¤®à¥à¤¸à¥à¤²à¤¿à¤®à¤¹à¤°à¥‚ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤‰à¤¤à¥à¤ªà¤¨à¥à¤¨ à¤—à¤°à¤¿à¤à¤•à¤¾ à¤•à¥‡à¤¹à¥€ à¤­à¥à¤°à¤® à¤° à¤¸à¤‚à¤¦à¥‡à¤¹à¤¹à¤°à¥‚à¤²à¤¾à¤°à¥à¤‡ à¤ªà¥à¤°à¤®à¤¾à¤£à¤¸à¤¹à¥€à¤¤ à¤¨à¤¿à¤µà¤¾à¤°à¤£ à¤—à¤°à¥à¤›, à¤¸à¤¾à¤¥à¥ˆ à¤­à¥à¤°à¤® à¤«à¤¿à¤œà¤¾à¤‰à¤¨à¥‡ à¤¤à¤¥à¥à¤¯à¤•à¥‹ à¤µà¤¿à¤¶à¥à¤²à¥‡à¤·à¤£ à¤—à¤°à¥€ à¤¤à¥à¤¯à¤¸à¤•à¥‹ à¤…à¤¸à¤² à¤°à¥‚à¤ª à¤ªà¤¾à¤ à¤•à¤µà¤°à¥à¤— à¤¸à¤¾à¤®à¥ à¤ªà¥à¤°à¤¸à¥à¤¤à¥à¤¤ à¤—à¤°à¥à¤› à¥¤</p>', '461222_126779.pdf', '', '2014-05-12'),
(14, 'Publication', 'à¤‡à¤¸à¥à¤²à¤¾à¤® à¤¤à¤¥à¤¾ à¤¹à¤¿à¤¨à¥à¤¦à¥‚ à¤§à¤°à¥à¤® - à¤¸à¥‹à¤«à¤¿à¤¯à¤¾ à¤ªà¤°à¤µà¥€à¤¨', '<p>à¤¯à¤¸ à¤•à¤¿à¤¤à¤¾à¤¬à¤®à¤¾ à¤‡à¤¸à¥à¤²à¤¾à¤® à¤° à¤¹à¤¿à¤¨à¥à¤¦à¥‚à¤•à¥‹ à¤¸à¤®à¤¿à¤•à¥à¤·à¤¾à¤¤à¥à¤®à¤• à¤…à¤§à¥à¤¯à¤¯à¤¨ à¤ªà¥à¤°à¤¸à¥à¤¤à¥à¤¤ à¤—à¤°à¤¿à¤à¤•à¥‹ à¤›, à¤¸à¤¾à¤¥à¥ˆ à¤¦à¥à¤µà¥ˆ à¤§à¤°à¥à¤®à¤•à¤¾ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤¨à¤¹à¤°à¥‚à¤•à¥‹ à¤° à¤—à¥à¤°à¤¨à¥à¤¥à¤¹à¤°à¥‚à¤•à¥‹ à¤µà¤¿à¤¸à¥à¤¤à¤¾à¤°à¤²à¥‡ à¤ªà¥à¤°à¤®à¤¾à¤£à¤¸à¤¹à¥€à¤¤ à¤¸à¤®à¤¿à¤•à¥à¤·à¤¾ à¤—à¤¿à¤°à¤à¤•à¥‹ à¤› à¥¤</p>', '696151_371252.pdf', '', '2014-05-21'),
(17, 'Publication', 'à¤‡à¤¸à¥à¤²à¤¾à¤®à¤®à¤¾ à¤¨à¤¾à¤°à¥€ - à¤¹à¤¿à¤«à¥à¤œà¥à¤°à¥à¤°à¤¹à¤®à¤¾à¤¨ à¤à¤®.à¤à¤¸à¥à¤¸à¥€.', '<p>à¤¯à¤¸ à¤ªà¥à¤¸à¥à¤¤à¤•à¤®à¤¾ à¤®à¥à¤¸à¥à¤²à¤¿à¤® à¤®à¤¹à¤¿à¤²à¤¾à¤¹à¤°à¥‚à¤•à¤¾ à¤¹à¤•à¤¹à¥à¤•à¥‚à¤•à¤•à¥‹ à¤¬à¤¾à¤°à¥‡à¤®à¤¾ à¤µà¤¿à¤¸à¥à¤¤à¥ƒà¤¤ à¤œà¤¾à¤¨à¤•à¤¾à¤°à¥€ à¤—à¤°à¤¾à¤‡à¤à¤•à¥‹ à¤›, à¤° à¤‡à¤¸à¥à¤²à¤¾à¤®à¤²à¥‡ à¤®à¤¹à¤¿à¤²à¤¾à¤²à¤¾à¤°à¥à¤‡ à¤œà¥à¤¨ à¤¸à¤®à¥à¤®à¤¾à¤¨ à¤¦à¤¿à¤à¤› à¤¤à¥à¤¯à¤¸à¤•à¥‹ à¤µà¤°à¥à¤£à¤¨à¤•à¥‹ à¤¸à¤¾à¤¥à¥ˆ à¤¯à¤¸ à¤¸à¤®à¥à¤¬à¤¨à¥à¤§à¤¿ à¤¸à¤®à¤¸à¥à¤¤ à¤¸à¤®à¤¸à¥à¤¯à¤¾à¤¹à¤°à¥‚à¤•à¥‹ à¤¸à¤®à¤¾à¤§à¤¾à¤¨ à¤ªà¥à¤°à¤®à¤¾à¤£à¤¸à¤¹à¥€à¤¤ à¤µà¤°à¥à¤£à¤¨ à¤—à¤°à¤¿à¤à¤•à¥‹ à¤› à¥¤</p>', '362252_645972.pdf', '', '2014-05-25'),
(18, 'Publication', 'à¤®à¥ƒà¤¤à¥à¤¯à¥ à¤ªà¤›à¤¿à¤•à¥‹ à¤œà¥€à¤µà¤¨ -  à¤®à¥‹. à¤‡à¤¦à¤°à¥€à¤¸ à¤¸à¤²à¤«à¥€', '<p>à¤¯à¤¸ à¤ªà¥‚à¤¸à¥à¤¤à¤•à¤®à¤¾ à¤ªà¥à¤¨à¤°à¥à¤œà¤¨à¥à¤® à¤° à¤®à¥ƒà¤¤à¥à¤¯à¥ à¤ªà¤¶à¥à¤šà¤¾à¤¤à¤•à¥‹ à¤œà¥€à¤µà¤¨à¤•à¥‹ à¤¬à¤¾à¤°à¥‡à¤®à¤¾ à¤¸à¤‚à¤•à¥à¤·à¥‡à¤ªà¤®à¤¾ à¤µà¤°à¥à¤£à¤¨ à¤—à¤°à¤¿à¤à¤•à¥‹ à¤›, à¤¯à¤¸à¤•à¥‹ à¤¸à¤¾à¤¥à¥ˆ à¤®à¥ƒà¤¤à¥à¤¯à¥ à¤ªà¤¶à¥à¤šà¤¾à¤¤à¤•à¥‹ à¤œà¥€à¤µà¤¨à¤²à¤¾à¤°à¥à¤‡ à¤šà¤°à¤£à¤¬à¤¦à¥à¤§ à¤¤à¤°à¤¿à¤•à¤¾à¤²à¥‡ à¤µà¤°à¥à¤£à¤¨ à¤—à¤°à¥à¤¨à¥‡ à¤ªà¥à¤°à¤¯à¤¾à¤¸ à¤—à¤°à¤¿à¤à¤•à¥‹ à¤›, à¤° à¤šà¤¿à¤¹à¤¾à¤¨, à¤¸à¤¿à¤‚à¤—à¤¾, à¤¹à¤¿à¤¸à¤¾à¤¬ à¤•à¤¿à¤¤à¤¾à¤¬, à¤ªà¥à¤²à¤¸à¥‡à¤°à¤¾à¤¤... à¤…à¤¾à¤¦à¤¿à¤²à¤¾à¤°à¥à¤‡ à¤¸à¤‚à¤•à¥à¤·à¥‡à¤ªà¤®à¤¾ à¤•à¥à¤°à¤†à¤¨ à¤° à¤¹à¤¦à¥€à¤¸à¤•à¥‹ à¤ªà¥à¤°à¤•à¤¾à¤¶à¤®à¤¾ à¤µà¤°à¥à¤£à¤¨ à¤—à¤°à¤¿à¤à¤•à¥‹ à¤› à¥¤</p>', '954842_401176.doc', '', '2014-06-02'),
(19, 'Print', 'à¤ªà¤µà¤¿à¤¤à¥à¤° à¤•à¥à¤°à¤†à¤¨à¤•à¥‹ à¤¬à¤¾à¤°à¥‡à¤®à¤¾ à¤¸à¤¾à¤®à¤¾à¤¨à¥à¤¯ à¤œà¥à¤žà¤¾à¤¨ - à¤…à¤¤à¥€à¤•à¥à¤°à¥à¤°à¤¹à¤®à¤¾à¤¨ à¤®à¥‹. à¤‡à¤¦à¤°à¥€à¤¸ à¤–à¤¾à¤¨ à¤®à¤•à¥à¤•à¥€', '<p>à¤ªà¤µà¤¿à¤¤à¥à¤° à¤•à¥à¤°à¤†à¤¨ à¤…à¤²à¥à¤²à¤¾à¤¹à¤•à¥‹ à¤¸à¤¾à¤•à¥à¤·à¤¾à¤¤ à¤µà¤¾à¤£à¥€ à¤¹à¥‹ à¤° à¤¯à¥‹ à¤¤à¥à¤¯à¥‹ à¤…à¤¨à¥à¤¤à¤¿à¤® à¤—à¥à¤°à¤¨à¥à¤¥ à¤¹à¥‹ à¤œà¥à¤¨ à¤…à¤¨à¥à¤¤à¤¿à¤® à¤¸à¤¨à¥à¤¦à¥‡à¤·à¥à¤Ÿà¤¾ à¤®à¥à¤¹à¤®à¥à¤®à¤¦ à¤¸à¤²à¥à¤²à¤²à¥à¤²à¤¾à¤¹à¥‹ à¤…à¤²à¥ˆà¤¹à¥‡ à¤µà¤¸à¤²à¥à¤²à¤® à¤®à¤¾à¤¥à¤¿ à¤…à¤µà¤¤à¤°à¤¿à¤¤ à¤—à¤°à¤¿à¤¯à¥‹, à¤¯à¤¸ à¤ªà¥à¤¸à¥à¤¤à¤•à¤®à¤¾ à¤¯à¤¸à¥ˆ à¤—à¥à¤°à¤¨à¥à¤¥à¤•à¥‹ à¤¬à¤¾à¤°à¥‡à¤®à¤¾ à¤•à¥‡à¤¹à¥€ à¤²à¤¾à¤­à¤¦à¤¾à¤¯à¤• à¤•à¥à¤°à¤¾à¤¹à¤°à¥‚ à¤œà¤¸à¤°à¥€ à¤µà¤¹à¥à¤¯à¤•à¥‹ à¤…à¤°à¥à¤¥, à¤•à¥à¤°à¤†à¤¨à¤•à¥‹ à¤…à¤°à¥à¤¥, à¤¯à¤¸à¤•à¤¾ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤¨ à¤° à¤²à¥‡à¤–à¤¨à¤•à¥‹ à¤µà¤¿à¤µà¤°à¤£ ... à¤…à¤¾à¤¦à¤¿à¤²à¤¾à¤°à¥à¤‡ à¤ªà¥à¤°à¤®à¤¾à¤£à¤•à¥‹ à¤¸à¤¾à¤¥ à¤¸à¤®à¥‡à¤Ÿà¥à¤¨à¥‡ à¤ªà¥à¤°à¤¯à¤¾à¤¸ à¤—à¤°à¤¿à¤à¤•à¥‹ à¤› à¥¤</p>', '819413_175277.pdf', '', '2014-06-08'),
(20, 'Print', 'Madhur Sandesh Ashadh 2071', '<p>Ramadan Special of Madhur Sandesh (A Leading Nepali Islamic Magazine of Nepal)</p>', '558619_691244.pdf', '', '2014-08-07'),
(21, 'Print', 'Madhur Sandesh Shrawan 2071', '<p>Read Madhur Sandesh and Spread its Sandesh</p>', '531058_593814.pdf', '', '2014-08-07'),
(24, 'Print', 'IDB Scholarship Application Form 2015', '', '695782_626893.pdf', '', '2015-03-31'),
(25, 'Print', 'SEF Scholarship  Application Form 2015', '<p><strong>Announcement</strong></p><p><strong>SEF Scholarship </strong><strong>(Interest Free loan) </strong><strong>Programme 1436 H. (2015)</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>Student Education Foundation (SEF) Nepal is pleased to announce <strong>The </strong><strong>SEF Scholarship Programme </strong>for the academically meritorious but financially needy Muslim students who have enrolled in the first year course of Bachelor degree in the field of Medicine (MBBS, Dentistry, Pharmacy and Public health), Engineering, Fisheries, Agriculture, Forestry, Food technology, Administration and Management, law and Mass communication and Journalism.&nbsp; Students studying master degree in any discipline can also apply.</p><p>&nbsp;</p><p><strong><em>1. Prerequisites for the scholarship:</em></strong></p><p><!--[if !supportLists]-->&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Must be a Nepalese citizen and age not over 24 and 30 years for Bachelor and Master Degree students respectively</p><p><!--[if !supportLists]-->&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->SLC must be from Government of Nepal</p><p><!--[if !supportLists]-->&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Must have passed 10+2 and Bachelor Examination or its equivalent for Bachelor and Master respectively.</p><p><!--[if !supportLists]-->&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Should not be in receipt of any other scholarship.</p><p><!--[if !supportLists]-->&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->They and/or their parents are unable to pay for their education.</p><p><!--[if !supportLists]-->&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Must be willing to serve their community after completion of their study for a period not less than the duration of the scholarship.</p><p><!--[if !supportLists]-->&uml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->This Scholarship is an <strong>Interest free loan (Qard Hasan) </strong>to the student, must be refunded to SEF Nepal, after the completion of studies and having employment.</p><p><strong><em>2. Requirements:</em></strong></p><p><!--[if !supportLists]-->&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->The application forms (two sets),duly filled as per the given instructions, with all necessary documents including citizenship card and&nbsp; two passport size photographs</p><p><!--[if !supportLists]-->&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Students have to submit original copy of recently issued bonafide certificate (a. Joining date b. Graduation date and c. Tuition fees) of admission. They must also bring with them all the original documents at the time of interview.</p><p><!--[if !supportLists]-->&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Students who are applying must be in first year of study.</p><p><!--[if !supportLists]-->&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Students whose family member received IDB/SEF scholarship and have not fully repaid yet will not be eligible for this scholarship.</p><p><!--[if !supportLists]-->&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->SEF Nepal will provide only monthly stipend as per its rules and no other dues/expenditures/fees will be covered by the programme.</p><p><strong>3. Date and time of application form submission: 14th April to 14th May, 2015, 11 am to 1 pm, except Friday and Saturday. </strong></p><p><strong>4. Date of examination: (Thursday to Saturday), 11th, 12th and 13th June 2015.</strong></p><p><strong>5. Venue for form submission and exam: SEF Office, Jyatha,Thamel, Kathmandu, Ph: 01-4152082</strong></p><p><strong><em>6. Application Forms are also available on free of cost at:</em></strong></p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]-->SEF office, Jyatha Thamel, Kathmandu, Arman Hashmi, Ph: 01-4152082</p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]-->Islamic&nbsp; Library, Ghantaghar, Kathmandu, Ph: 9841326382</p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]-->Islamic cultural center, Nepalganj, Banke, Obaidur-Rahman, ph: 9858024606</p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]-->Islamic&nbsp; Library, Taulihawa, Kapilvastu, Tahir Mahmood , Ph. 9847040335, 076-560112</p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]-->Islamic Library, Gandak Chowk, Birganj, Muzammilulhaq Falahi, Ph;9845192034, 051-621572,</p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]-->Madrasa Iqra Littahfeez,Rajbiraj, Saptari: Abdul Manan, Mob: 9842821725</p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]-->Islamic Library, Sarochiya, Biratnagar:Tafazul &nbsp;Falahi, , Mob. 9807374661,9842251733, Ph. 021-521871</p><p><!--[if !supportLists]-->&sect;&nbsp; <!--[endif]--><strong>Download:www.islamisangh.org</strong></p><p><strong>Students&rsquo; Education Foundation (SEF) Nepal</strong></p><p>GPO Box: 13436, Kathmandu, Nepal, Ph: +977-01-4152082 Email:sef_nep@yahoo.com,sefnepal15@gmail.com</p>', '206069_839509.pdf', '', '2015-03-31'),
(26, 'Audio-Visual', 'Tapaiko Naaso Tapaiko Sewaama', '<p>Read by Murshid Aalam. Excellent Audio for Nepali Listeners. May Allah accept the effort of Brother Murshid.</p>', '', 'https://www.youtube.com/watch?v=zGkouiohZ5M', '2015-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `parent` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `parent`, `slug`) VALUES
(2, 'About Us', '<p>Social Helping Hands, Nepal was founded recently in 2015 with the purpose of striving provide utmost aid and support to poor, victims and needy of Nepal. With the slogan of &quot;Helping in need is Religion indeed&quot;, SHH is always concerned about the poors and needy through out the country.</p><p>This organization is of the firm conviction that helping the one in need alone offers the best and most suitable solution to the problems faced by our country, including the crisis of thought and action which has gripped the ethical, social, economic and political aspects of life.</p><p>Our ultimate motive is to seek the pleasure of Allah s.w.t. We strongly believe and advocate that our success in this world and Hereafter could be possible only by following the Commandments of the Holy Quran and the Sunnah.</p><p>Our belief is that the unity and brotherhood among all the Muslims and non-Musims are the pre-requisites of our victory over the evil forces. And one of the ways of building up this relation is by helping and supporting each other in the time of need.</p><p>Alhamdulillah, today this organization in its mission is working through out Nepal. SHH is now become the distinguished organization, which is truly involved in manifold activities throughout the country. It has also become a popular organization among the Muslims of Nepal because of its sincere efforts and endeavor of not being involved in conflicts, sectarian and organizational differences.</p>', 0, 'about');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL DEFAULT '0',
  `act_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `act_id`, `title`, `slug`, `description`, `image`, `added_on`) VALUES
(10, 28, 'Islamic sangh Nepal at Bhrikuti Mandap (International book fare)', 'Islamic_sangh_Nepal_at_Bhrikuti_Mandap__International_book_fare_', '<p>Subhan Allah! By Allah&#39;s grace we could see the thirst of people here in Kathmandu (International Book fare) to know Islam. We were pleased to see the huge gathering of people in our stall to get a copy of Qur&#39;an. Alhamdulillah.</p><p>It is therefore, we would like to remind Muslim brothers and sisters, that we are not doing our duty of reaching out to our non-muslims brothers and sisters. And most of our visitors commented us that it&#39;s a matter of great joy to see the Islamic books in Nepali, which shows their interest in knowing and understanding Islam.</p><p>We need to wake up, and reach out to the world with the message of Islam. Insha Allah!</p>', '646351_238162.jpg', '2014-05-30'),
(11, 23, 'Great Indian Da''ee Abdullah Tariq addessing Students at Islami Sangh Nepal', 'Great_Indian_Da_ee_Abdullah_Tariq_addessing_Students_at_Islami_Sangh_Nepal', '<p>Er. Abdullah Tariq has visited Nepal today to support and train the Muslims of Nepal in the Da&#39;waa. He will have varity of trainings and speeches in Kathmandu at various locations. He will be addressing students every evening (starting from today) at 7:30 PM in the training hall of Islami Sangh Nepal. He will further join us in the Book fare (Bhrikuti Mandap) tomorrow at 11:00 and guide us with his experience. He will also deliver a speech at Bhrikuti Mandap stage a day after tomorrow following with various of other programs.</p><p>We request all of our viewers to take full advatage of these events. An opportunity like this will not come time and again.</p><p>May Allah guide Mr. Abdullah Tariq and give him best rewards for his hard works.</p>', '967166_269928.jpg', '2014-05-31'),
(12, 22, 'Er. Abdullah Tariq at Bhrikuti Mandap (International Book Fare)', 'Er__Abdullah_Tariq_at_Bhrikuti_Mandap__International_Book_Fare_', '<p>Respected Er. Abdullah Tariq, visisted the book stall of Islami Sangh Nepal at Bhrikuti Mandap today. He spent hours of his precious time with us participating in Da&#39;waa to non Muslims and training to the members of the stall. We that him for his participation and for his guidelines for the members of the book stall.</p><p>We further would like to invite all of our viewers to participate in his speech starting from 4:00 PM tomorrow at Bhrikuti Mandap stage. The program is open for all people of any faith. This program will be followed by his training program at Islami Sangh Nepal at 7:30 PM.<br />&nbsp;</p>', '996095_225341.jpg', '2014-06-01'),
(13, 23, 'Er. Abdullah Tariq, Public lecture at Bhrikuti Mandap', 'Sample_title_5_goes_here', '<p><em>Respected Er. Abdullah Tariq, delivered a speech on the topic, &quot;Islam For All&quot; at Bhrikuti Mandap program hall today. The program was an open participation program, where more that 100 people participated. People were shocked to hear him so sound in Vedas and other Hindu scriptures. We could hear the comments from people like, &quot;This is how a program should be like!&quot;.</em></p><p><em>The program was followed by an open question and answer session where some of the visitors participated in it. As a whole the program was successful and fruitfull as well.</em></p>', '345765_347250.jpg', '2014-05-28'),
(14, 23, 'Concluded Four Days PPM at Kathmandu', 'Concluded_Four_Days_PPM_at_Kathmandy', '<p><em><strong>Four days Project, Planning and Management Program was organized at Bagbazar,Kathmandu on 14th-17th February for NGO officers and Students by Human Development Academy (HuDA) Nepal in the sponsorship of WAMY Nepal.</strong></em></p><p>&nbsp;</p>', '102951_373958.jpg', '2015-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
`id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `caption`) VALUES
(2, '2.jpg', 'SHH aid for flood victims at Eastern Nepal'),
(5, '4.jpg', 'SHH aid for flood victims at Eastern Nepal'),
(8, '3.jpg', 'SHH aid for flood victims at Eastern Nepal'),
(11, '1.JPG', 'SHH aid for flood victims at Eastern Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
`id` int(11) NOT NULL,
  `act_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `act_id`, `title`, `slug`, `description`, `image`, `added_on`) VALUES
(10, 28, 'Islamic sangh Nepal at Bhrikuti Mandap (International book fare)', 'Islamic_sangh_Nepal_at_Bhrikuti_Mandap__International_book_fare_', '<p>Subhan Allah! By Allah&#39;s grace we could see the thirst of people here in Kathmandu (International Book fare) to know Islam. We were pleased to see the huge gathering of people in our stall to get a copy of Qur&#39;an. Alhamdulillah.</p><p>It is therefore, we would like to remind Muslim brothers and sisters, that we are not doing our duty of reaching out to our non-muslims brothers and sisters. And most of our visitors commented us that it&#39;s a matter of great joy to see the Islamic books in Nepali, which shows their interest in knowing and understanding Islam.</p><p>We need to wake up, and reach out to the world with the message of Islam. Insha Allah!</p>', '167593_311431.jpg', '2014-05-30'),
(11, 23, 'Great Indian Da''ee Abdullah Tariq addessing Students at Islami Sangh Nepal', 'Great_Indian_Da_ee_Abdullah_Tariq_addessing_Students_at_Islami_Sangh_Nepal', '<p>Er. Abdullah Tariq has visited Nepal today to support and train the Muslims of Nepal in the Da&#39;waa. He will have varity of trainings and speeches in Kathmandu at various locations. He will be addressing students every evening (starting from today) at 7:30 PM in the training hall of Islami Sangh Nepal. He will further join us in the Book fare (Bhrikuti Mandap) tomorrow at 11:00 and guide us with his experience. He will also deliver a speech at Bhrikuti Mandap stage a day after tomorrow following with various of other programs.</p><p>We request all of our viewers to take full advatage of these events. An opportunity like this will not come time and again.</p><p>May Allah guide Mr. Abdullah Tariq and give him best rewards for his hard works.</p>', '223486_174075.jpg', '2014-05-31'),
(12, 22, 'Er. Abdullah Tariq at Bhrikuti Mandap (International Book Fare)', 'Er__Abdullah_Tariq_at_Bhrikuti_Mandap__International_Book_Fare_', '<p>Respected Er. Abdullah Tariq, visisted the book stall of Islami Sangh Nepal at Bhrikuti Mandap today. He spent hours of his precious time with us participating in Da&#39;waa to non Muslims and training to the members of the stall. We that him for his participation and for his guidelines for the members of the book stall.</p><p>We further would like to invite all of our viewers to participate in his speech starting from 4:00 PM tomorrow at Bhrikuti Mandap stage. The program is open for all people of any faith. This program will be followed by his training program at Islami Sangh Nepal at 7:30 PM.<br />&nbsp;</p>', '530581_727154.jpg', '2014-06-01'),
(13, 23, 'Er. Abdullah Tariq, Public lecture at Bhrikuti Mandap', 'Sample_title_5_goes_here', '<p><em>Respected Er. Abdullah Tariq, delivered a speech on the topic, &quot;Islam For All&quot; at Bhrikuti Mandap program hall today. The program was an open participation program, where more that 100 people participated. People were shocked to hear him so sound in Vedas and other Hindu scriptures. We could hear the comments from people like, &quot;This is how a program should be like!&quot;.</em></p><p><em>The program was followed by an open question and answer session where some of the visitors participated in it. As a whole the program was successful and fruitfull as well.</em></p>', '806036_531405.jpg', '2014-05-28'),
(14, 0, 'Concluded Four Days PPM at Kathmandu', 'Concluded_Four_Days_PPM_at_Kathmandy', '<p><em><strong>Four days Project, Planning and Management Program was organized at Bagbazar,Kathmandu on 14th-17th February for NGO officers and Students by Human Development Academy (HuDA) Nepal in the sponsorship of WAMY Nepal.</strong></em></p><p>&nbsp;</p>', '838610_228897.jpg', '2015-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerycats`
--
ALTER TABLE `gallerycats`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `category` (`title`,`parent_id`);

--
-- Indexes for table `galleryimgs`
--
ALTER TABLE `galleryimgs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallerycats`
--
ALTER TABLE `gallerycats`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleryimgs`
--
ALTER TABLE `galleryimgs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
