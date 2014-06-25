-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2014 at 01:42 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `francohaley_swa_contactlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactlist`
--

CREATE TABLE IF NOT EXISTS `contactlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'Mike',
  `friends` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `contactlist`
--

INSERT INTO `contactlist` (`id`, `email`, `name`, `friends`) VALUES
(1, 'msmotherman@fullsail.com', 'Michael', '1024'),
(2, 'jmadsen@fullsail.com', 'Jason', '1024'),
(3, 'anobody@nowhere.com', 'Anybody', '0'),
(4, 'anothernoone@nowhere.com', 'Noone', '0'),
(5, 'mikeisawesome@awesomeness.org', 'Mike', '768'),
(6, 'flashisbad@usejs.com', 'JSMan', '6656'),
(7, 'zebrafarm@zoo.gov', 'Zebras', '3'),
(8, 'complaints@fullsail.com', 'Complaints', '1'),
(9, 'lotsofemails@bull.edu', 'Emailtastic', '100'),
(10, 'somanyemails@more4u.net', 'Busy Alot', '24'),
(11, 'manyemails@arehere.com', 'Spamalot', '0'),
(12, 'myemail@spamalot.biz', 'No More Kings', '32'),
(13, 'jazzfan@hotmail.com', 'Lisa Simpson', '4'),
(14, 'mozilla@firefox.org', 'Mozilla Corporation', 'all'),
(15, 'joinme@facebook.com', 'Random Guy', '1'),
(16, 'yeswecan@obama.gov', 'Obama', 'nation'),
(17, 'about@fullsail.edu', 'Spam Me', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
