# ************************************************************
# Sequel Pro SQL dump
# Version 3348
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9-log)
# Database: francohaley_portfolio
# Generation Time: 2011-10-23 02:22:34 -0400
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryDesc` varchar(45) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `imageId` int(11) NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(225) NOT NULL DEFAULT '',
  `imageURL` varchar(255) NOT NULL DEFAULT '',
  `imageLargePath` varchar(255) NOT NULL DEFAULT '',
  `imageAltLargePath` varchar(255) NOT NULL DEFAULT '',
  `imageThirdLargePath` varchar(255) NOT NULL DEFAULT '',
  `imageTitle` varchar(100) NOT NULL DEFAULT '',
  `imageAltTitle` varchar(100) NOT NULL DEFAULT '',
  `imageThirdTitle` varchar(100) NOT NULL DEFAULT '',
  `imageBody` text NOT NULL,
  `urlLink` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`imageId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`imageId`, `imagePath`, `imageURL`, `imageLargePath`, `imageAltLargePath`, `imageThirdLargePath`, `imageTitle`, `imageAltTitle`, `imageThirdTitle`, `imageBody`, `urlLink`)
VALUES
	(1,'uploads/thumb/tn_down_under_logo.gif','down_under_logo','uploads/large/lg_down_under_logo.gif','uploads/large/outline_down_under_logo.gif','','Down Under Logo','Down Under Logo &#40;outline view&#41;','','<p>Testing</p>',''),
	(2,'uploads/thumb/tn_album_cd_cover.jpg','album_cd_cover','uploads/large/lg_album_cd_cover_front.jpg','uploads/large/lg_album_cd_cover_back.jpg','','Album CD Cover','Album CD Cover &#40;back cover&#41;','','<p>Nice cover</p>',''),
	(3,'uploads/thumb/tn_mechanical_object.jpg','machanical_object','uploads/large/lg_machanical_object.jpg','uploads/large/outline_machanical_object.gif','','Machanical Object','Machanical Object &#40;outline view&#41;','','<p>Digital Recorder</p>',''),
	(4,'uploads/thumb/tn_magazine_article.jpg','magazine_article','uploads/large/lg_magazine_article.jpg','','','Magazine Article','','','<p>Panda and bear.</p>',''),
	(5,'uploads/thumb/tn_event_poster.jpg','event_poster','uploads/large/lg_event_poster.jpg','uploads/large/outline_event_poster.gif','','Event Poster','Event Poster &#40;outline view&#41;','','<p>Battlefield Bad Company 2</p>',''),
	(6,'uploads/thumb/tn_waveflections_logo.jpg','waveflections_logo','uploads/large/lg_waveflecion_studios_logo.gif','uploads/large/outline_waveflecion_studios_logo.gif','','Waveflections Logo','Waveflections Logo &#40;outline view&#41;','','<p>DAW Software</p>',''),
	(7,'uploads/thumb/tn_elevator_user_interface.jpg','elevator_user_interface','uploads/large/lg_elevator_user_interface.jpg','uploads/large/outline_elevator_user_interface.gif','','Elevator User Interface','Elevator User Interface &#40;outline view&#41;','','<p>Elevator UI</p>',''),
	(8,'uploads/thumb/tn_worldsurf_site.jpg','worldsurf_site','uploads/large/lg_worldsurf_site_home.jpg','uploads/large/lg_worldsurf_site_signup.jpg','uploads/large/lg_worldsurf_site_destination.jpg','Worldsurf Site','Worldsurf Site &#40;signup page&#41;','Worldsurf Site &#40;destination page&#41;','<p>First Web Project</p>',''),
	(9,'uploads/thumb/tn_paintball_site.jpg','paintball_site','uploads/large/lg_paintball_site.jpg','','','Paintball Site','','','<p>Paintball Journal</p>',''),
	(10,'uploads/thumb/tn_driving_tutorial_site.jpg','driving_tutorial_site','uploads/large/lg_driving_tutorial_home.jpg','uploads/large/lg_driving_tutorial_chapter.jpg','','Driving Tutorial Site','Driving Tutorial Site &#40;chapter page&#41;','','<p>Driving Online School</p>',''),
	(11,'uploads/thumb/tn_travel_site.jpg','travel_site','uploads/large/lg_travel_site.jpg','','','Travel Site','','','<p>Get Away Travel</p>',''),
	(12,'uploads/thumb/tn_movie_database_site.jpg','movie_database_site','uploads/large/lg_movie_database_site_home.jpg','uploads/large/lg_movie_database_site_article.jpg','uploads/large/lg_movie_database_site_bio.jpg','Movie Database Site','Movie Database Site &#40;article page&#41;','Movie Database Site &#40;biography page&#41;','<p>ACME movies</p>',''),
	(13,'uploads/thumb/tn_information_portal_site.jpg','information_portal_site','uploads/large/lg_information_portal_site.jpg','','','Information Portal Site','','','<p>Game On  site</p>','information_portal_site/'),
	(14,'uploads/thumb/tn_javascript_app_site.jpg','javascript_app_site','uploads/large/lg_javascript_app_site.jpg','','','Javascript Application Site','','','<p>Scripting for Web Applications Site</p>',''),
	(15,'uploads/thumb/tn_cms_site.jpg','content_management_system_site','uploads/large/lg_cms_site_landing.jpg','uploads/large/lg_cms_site_app.jpg','','Content Management System','Content Management System (application page)','','<p>Taskstratum Task Managing Website</p>',''),
	(16,'uploads/thumb/tn_wbmb_logo.jpg','wbmb_logo','uploads/large/lg_wbmb_logo.jpg','uploads/large/outline_wbmb_logo.gif','','WBMB Logo','WBMB Logo  &#40;outline view&#41;','','<p>WBMB Logo</p>','');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(45) NOT NULL,
  `postBody` varchar(45) NOT NULL DEFAULT '',
  `postDate` datetime NOT NULL,
  `userID` int(11) NOT NULL,
  `imageID` int(11) NOT NULL,
  `displayDateTime` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`postID`),
  KEY `fk_posts_users` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`postID`, `postTitle`, `postBody`, `postDate`, `userID`, `imageID`, `displayDateTime`)
VALUES
	(1,'Testing','I am testing this page.','0000-00-00 00:00:00',1,0,''),
	(2,'Checking Time','I\'m Looking to see if the time is correct.','0000-00-00 00:00:00',1,0,''),
	(3,'Hello','My name is Franco.','2011-10-16 16:23:25',1,0,''),
	(4,'Need To Change the Size','Title font is too small.','2011-10-16 16:51:47',1,0,''),
	(5,'Hi','Hope this works.','2011-10-16 17:14:02',1,0,''),
	(6,'Start Pagination','I hope this works too.','2011-10-16 17:14:33',1,0,''),
	(7,'Awesome Andre','Sup','2011-10-17 16:01:20',1,0,''),
	(8,'Hope This Works','True that.','2011-10-23 10:37:28',1,0,'October 23, 2011, 1:37 am'),
	(9,'Hi','I think I got this.','2011-10-23 10:42:34',1,0,'October 23, 2011, 1:42 am'),
	(10,'OK.  This Is It','I am so happy I figured this out all by mysel','2011-10-23 10:42:58',1,0,'October 23, 2011, 1:42 am'),
	(11,'Looking At The News','I like watching Local 6.','2011-10-23 10:01:38',1,0,'October 23, 2011, 2:01 am');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `userFirstName` varchar(45) NOT NULL,
  `userLastName` varchar(45) NOT NULL,
  `userEmail` varchar(45) NOT NULL DEFAULT '',
  `userPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
