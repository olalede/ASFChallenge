SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
  
 CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NULL,
  `user_password` varchar(255) NOT NULL,
  `user_cpassword` VARCHAR(255) NOT NULL,
  `user_city` VARCHAR(250)  NULL,
  `user_state` VARCHAR (250) NULL,
  `user_country` VARCHAR (250) NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NULL,
  `user_shortbio` text NULL,
  `user_username` varchar(255) NOT NULL,
  `user_website` varchar(255) DEFAULT NULL,
  `user_graduate` varchar(245) NOT NULL,
  `user_profession` text NULL,
  `user_major` varchar(150) NOT NULL,
  `user_backgroundpicture` varchar(255) DEFAULT NULL,
  `user_joindate` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `domain_websiteaddress` varchar(255) DEFAULT NULL,
  `user_feedback` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `recovery_keys`;
CREATE TABLE `recovery_keys` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `valid` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `confirm`;
CREATE TABLE `confirm` (
`cid` int(10) NOT NULL AUTO_INCREMENT,
`email` varchar(50) NOT NULL,
`confirm_key` varchar(300) NOT NULL,
PRIMARY KEY (`cid`),
UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
