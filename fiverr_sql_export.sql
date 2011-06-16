-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2011 at 10:52 AM
-- Server version: 5.5.9
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fiverr`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `ADMINID` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ADMINID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` VALUES(1, 'firefox.anderson@gmail.com', 'admin', 'd7ac957657f4e51dd05cac4448cae8b7');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `AID` bigint(30) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL DEFAULT '',
  `code` text NOT NULL,
  `active` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` VALUES(1, '468 x 60 pixels', '<div style="width:468px; height:60px; border:1px solid #DFDFDF;" align="center"><br/>Insert Your<br/>Advertisement Here</div>', '1');
INSERT INTO `advertisements` VALUES(2, '120 x 728 pixels', '<div style="width:120px; height:728px; border:1px solid #DFDFDF;" align="center"><br/><br/>Insert Your Advertisement Here</div>', '1');
INSERT INTO `advertisements` VALUES(3, '600 x 30 pixels', '<div style="width:600px; height:30px; border:1px solid #DFDFDF;" align="center"><div style="padding-top: 5px">Insert Your Advertisement Here</div></div>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `AID` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USERID` (`USERID`,`AID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `archive`
--


-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `BID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`BID`),
  UNIQUE KEY `USERID` (`USERID`,`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` VALUES(1, 1, 1, '1308167250');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CATID` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL DEFAULT '',
  `seo` varchar(200) NOT NULL,
  PRIMARY KEY (`CATID`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` VALUES(1, 'Gift Ideas', 'Gift-Ideas');
INSERT INTO `categories` VALUES(2, 'Fun &amp; Bizarre', 'Fun-Bizarre');
INSERT INTO `categories` VALUES(3, 'Graphics', 'Graphics');
INSERT INTO `categories` VALUES(4, 'Social Marketing', 'Social-Marketing');
INSERT INTO `categories` VALUES(5, 'Writing', 'Writing');
INSERT INTO `categories` VALUES(6, 'Advertising', 'Advertising');
INSERT INTO `categories` VALUES(7, 'Music &amp; Audio', 'Music-Audio');
INSERT INTO `categories` VALUES(8, 'Tips &amp; Advice', 'Tips-Advice');
INSERT INTO `categories` VALUES(9, 'Business', 'Business');
INSERT INTO `categories` VALUES(10, 'Technology', 'Technology');
INSERT INTO `categories` VALUES(11, 'Programming', 'Programming');
INSERT INTO `categories` VALUES(12, 'Other', 'Other');
INSERT INTO `categories` VALUES(13, 'Silly Stuff', 'Silly-Stuff');
INSERT INTO `categories` VALUES(14, 'Video', 'Video');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `setting` varchar(60) NOT NULL DEFAULT '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` VALUES('site_email', 'firefox.anderson@gmail.com');
INSERT INTO `config` VALUES('site_name', 'Diverr');
INSERT INTO `config` VALUES('max_syndicate_results', '25');
INSERT INTO `config` VALUES('maximum_results', '1000000');
INSERT INTO `config` VALUES('emailsender', 'Admin');
INSERT INTO `config` VALUES('max_suggest', '14');
INSERT INTO `config` VALUES('items_per_page', '10');
INSERT INTO `config` VALUES('site_slogan', 'Things people do for money');
INSERT INTO `config` VALUES('approve_stories', '1');
INSERT INTO `config` VALUES('metadescription', 'Dubai people do for money.');
INSERT INTO `config` VALUES('metakeywords', 'fiverr, dubai, duberr');
INSERT INTO `config` VALUES('price', '5');
INSERT INTO `config` VALUES('ver', '1.6');
INSERT INTO `config` VALUES('price_mode', '0');
INSERT INTO `config` VALUES('approve_suggests', '0');
INSERT INTO `config` VALUES('view_rel_max', '7');
INSERT INTO `config` VALUES('view_more_max', '7');
INSERT INTO `config` VALUES('paypal_email', 'payments@yourdomain.com');
INSERT INTO `config` VALUES('notify_email', 'notify@yourdomain.com');
INSERT INTO `config` VALUES('currency', 'USD');
INSERT INTO `config` VALUES('days_before_withdraw', '14');
INSERT INTO `config` VALUES('commission', '1');
INSERT INTO `config` VALUES('FACEBOOK_APP_ID', '');
INSERT INTO `config` VALUES('FACEBOOK_SECRET', '');
INSERT INTO `config` VALUES('enable_fc', '0');
INSERT INTO `config` VALUES('commission_percent', '20');
INSERT INTO `config` VALUES('short_urls', '1');
INSERT INTO `config` VALUES('twitter', 'carbonr');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(400) NOT NULL DEFAULT '',
  `time` varchar(20) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL,
  `s` varchar(100) NOT NULL,
  PRIMARY KEY (`FID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `files`
--


-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `MID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MSGTO` bigint(20) NOT NULL DEFAULT '0',
  `MSGFROM` bigint(20) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `FID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) NOT NULL DEFAULT '',
  `unread` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`MID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `inbox2`
--

CREATE TABLE `inbox2` (
  `MID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MSGTO` bigint(20) NOT NULL DEFAULT '0',
  `MSGFROM` bigint(20) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `OID` bigint(20) NOT NULL DEFAULT '0',
  `FID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) NOT NULL DEFAULT '',
  `start` bigint(1) NOT NULL DEFAULT '0',
  `action` varchar(100) NOT NULL,
  `cancel` bigint(1) NOT NULL DEFAULT '0',
  `ctime` varchar(20) NOT NULL,
  `CID` bigint(20) NOT NULL DEFAULT '0',
  `reject` bigint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`MID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inbox2`
--


-- --------------------------------------------------------

--
-- Table structure for table `inbox_reports`
--

CREATE TABLE `inbox_reports` (
  `RID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MID` bigint(20) NOT NULL DEFAULT '0',
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`RID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inbox_reports`
--


-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `USERID` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL DEFAULT '',
  `pemail` varchar(100) NOT NULL,
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL,
  `funds` decimal(9,2) NOT NULL,
  `afunds` bigint(10) NOT NULL,
  `withdrawn` bigint(10) NOT NULL,
  `used` bigint(10) NOT NULL,
  `fullname` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `ratingcount` bigint(10) NOT NULL DEFAULT '0',
  `profileviews` int(20) NOT NULL DEFAULT '0',
  `addtime` varchar(20) NOT NULL DEFAULT '',
  `lastlogin` varchar(20) NOT NULL DEFAULT '',
  `verified` char(1) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `profilepicture` varchar(100) NOT NULL DEFAULT '',
  `remember_me_key` varchar(32) DEFAULT NULL,
  `remember_me_time` datetime DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `lip` varchar(20) NOT NULL,
  PRIMARY KEY (`USERID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` VALUES(1, 'firefox.anderson@gmail.com', '', 'carbonr', 'd7ac957657f4e51dd05cac4448cae8b7', 'suckcock', 0.00, 0, 0, 0, '', '', 0, 0, 0, '1308165765', '1308205889', '0', '1', '', NULL, NULL, 'fe80::1', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `members_passcode`
--

CREATE TABLE `members_passcode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_passcode`
--


-- --------------------------------------------------------

--
-- Table structure for table `members_verifycode`
--

CREATE TABLE `members_verifycode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_verifycode`
--

INSERT INTO `members_verifycode` VALUES(1, 'nUpjI1308165765');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `stime` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0',
  `cltime` varchar(20) NOT NULL,
  PRIMARY KEY (`OID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `packs`
--

CREATE TABLE `packs` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `pprice` bigint(10) NOT NULL,
  `pcom` bigint(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `packs`
--

INSERT INTO `packs` VALUES(1, 5, 20);
INSERT INTO `packs` VALUES(2, 10, 20);
INSERT INTO `packs` VALUES(3, 15, 20);
INSERT INTO `packs` VALUES(4, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL,
  `OID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) DEFAULT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0',
  `t` bigint(1) NOT NULL,
  `PAYPAL` bigint(20) NOT NULL,
  `cancel` bigint(1) NOT NULL DEFAULT '0',
  `wd` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `payments`
--


-- --------------------------------------------------------

--
-- Table structure for table `paypal_table`
--

CREATE TABLE `paypal_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payer_id` varchar(60) DEFAULT NULL,
  `payment_date` varchar(50) DEFAULT NULL,
  `txn_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `payer_email` varchar(75) DEFAULT NULL,
  `payer_status` varchar(50) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `memo` tinytext,
  `item_name` varchar(127) DEFAULT NULL,
  `item_number` varchar(127) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `mc_gross` decimal(9,2) DEFAULT NULL,
  `mc_currency` char(3) DEFAULT NULL,
  `address_name` varchar(255) NOT NULL DEFAULT '',
  `address_street` varchar(255) NOT NULL DEFAULT '',
  `address_city` varchar(255) NOT NULL DEFAULT '',
  `address_state` varchar(255) NOT NULL DEFAULT '',
  `address_zip` varchar(255) NOT NULL DEFAULT '',
  `address_country` varchar(255) NOT NULL DEFAULT '',
  `address_status` varchar(255) NOT NULL DEFAULT '',
  `payer_business_name` varchar(255) NOT NULL DEFAULT '',
  `payment_status` varchar(255) NOT NULL DEFAULT '',
  `pending_reason` varchar(255) NOT NULL DEFAULT '',
  `reason_code` varchar(255) NOT NULL DEFAULT '',
  `txn_type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `txn_id` (`txn_id`),
  KEY `txn_id_2` (`txn_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `paypal_table`
--


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `PID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `gtitle` text NOT NULL,
  `gtags` text NOT NULL,
  `gdesc` text NOT NULL,
  `ginst` text NOT NULL,
  `category` bigint(20) NOT NULL DEFAULT '0',
  `days` bigint(10) NOT NULL DEFAULT '0',
  `youtube` varchar(200) NOT NULL,
  `feat` bigint(1) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT '0000-00-00',
  `active` char(1) NOT NULL DEFAULT '',
  `last_viewed` varchar(20) NOT NULL DEFAULT '',
  `rating` float NOT NULL DEFAULT '0',
  `viewcount` bigint(20) NOT NULL DEFAULT '0',
  `pip` varchar(20) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` varchar(20) NOT NULL,
  `price` bigint(10) NOT NULL DEFAULT '0',
  `rev` bigint(20) NOT NULL DEFAULT '0',
  `ctp` bigint(10) NOT NULL DEFAULT '0',
  `short` varchar(20) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` VALUES(1, 1, 'make a iphone application demo video for your website', 'iphone, video, demo', 'I will create a demo video for your iphone application for your educate your users with the options in the iphone application for placing in website\\''s etc', 'Just send me the link to the application on the app store and its a paid please suggest the best solution', 6, 3, '', 0, '1308166835', '2011-06-15', '1', '', 0, 7, 'fe80::1', '1-1.png', '', '', 5, 0, 1, '71493');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `RID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `OID` bigint(20) NOT NULL DEFAULT '0',
  `RATER` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `good` bigint(1) NOT NULL DEFAULT '0',
  `bad` bigint(1) NOT NULL DEFAULT '0',
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`RID`),
  UNIQUE KEY `OID` (`OID`,`RATER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ratings`
--


-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `ID` bigint(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `value` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `static`
--

INSERT INTO `static` VALUES(1, 'Terms Of Use', 0x496e7365727420796f7572207465726d73206f662075736520696e666f726d6174696f6e20686572652e3c62723e3c62723e0d0a0d0a48544d4c2069732061636365707465642e);
INSERT INTO `static` VALUES(2, 'Privacy Policy', 0x496e7365727420796f7572207072697661637920706f6c69637920696e666f726d6174696f6e20686572652e3c62723e3c62723e0d0a0d0a48544d4c2069732061636365707465642e);
INSERT INTO `static` VALUES(3, 'About Us', 0x496e7365727420796f75722061626f757420757320696e666f726d6174696f6e20686572652e3c62723e3c62723e0d0a0d0a48544d4c2069732061636365707465642e);
INSERT INTO `static` VALUES(4, 'Advertising', 0x496e7365727420796f7572206164766572746973696e6720696e666f726d6174696f6e20686572652e3c62723e3c62723e0d0a0d0a48544d4c2069732061636365707465642e);
INSERT INTO `static` VALUES(5, 'Contact Us', 0x496e7365727420796f757220636f6e7461637420757320696e666f726d6174696f6e20686572652e3c62723e3c62723e0d0a0d0a48544d4c2069732061636365707465642e);

-- --------------------------------------------------------

--
-- Table structure for table `wants`
--

CREATE TABLE `wants` (
  `WID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `want` text NOT NULL,
  `category` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT '0000-00-00',
  `active` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`WID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wants`
--


-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `WID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`WID`),
  UNIQUE KEY `USERID` (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `withdraw_requests`
--

