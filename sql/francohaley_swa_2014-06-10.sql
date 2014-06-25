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
-- Database: `francohaley_swa`
--

-- --------------------------------------------------------

--
-- Table structure for table `myblog`
--

CREATE TABLE IF NOT EXISTS `myblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `datetime` text NOT NULL,
  `categories` text NOT NULL,
  `content` text NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `myblog`
--

INSERT INTO `myblog` (`id`, `title`, `author`, `datetime`, `categories`, `content`) VALUES
(1, 'My First Post', 'Mike', '0/00/00, 00:00am', 'random', 'If you can see this entry, then it would seem your ajax is working successfully!  Well done, you.  Now to move on to the harder part, making the backend.  Don''t forget to use form validation!'),
(2, 'My Second Post', 'Mike', '00/00/00, 00:00am', 'random', 'Another post already?  But it''s only 00 o''clock!?'),
(4, 'Another Post', 'Not Mike', '3/14/09, 5:12pm', 'Random', 'Making all of these posts sure is a tedious task.'),
(5, 'Yet Another Post', 'Not Mike', '3/14/09, 5:18pm', 'Random', 'Another post is I.'),
(6, 'More Posts', 'Not Mike', '3/14/09, 5:50pm', 'Random', 'Will these posts seriously ever end?'),
(7, 'More Posts', 'Not Mike', '3/14/09, 6:15pm', 'Random', 'Are you having fun coding JavaScript?'),
(8, 'PHP Later', 'Mike', '3/14/09, 6:25pm', 'Random', 'You havent learned the php that drives this blog yet, but don''t worry, you will soon.'),
(9, 'Lord of the Posts', 'Mike', '3/14/09, 6:42pm', 'Random', 'One post to rule them all, and in the archives bind them.'),
(10, 'Entry Names', 'Mike', '3/14/09, 6:48pm', 'Random', 'Are you sick of my entry names yet?'),
(11, 'Entry Names', 'Mike', '3/14/09, 6:54pm', 'Random', 'You will be, after starting at them for several, several hours.'),
(12, 'Enough Already', 'Mike', '3/14/09, 6:58pm', 'Random', 'I believe it is time to officially call this the last post.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
