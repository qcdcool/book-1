# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.19)
# Database: book
# Generation Time: 2015-03-02 12:37:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table book_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `book_admin`;

CREATE TABLE `book_admin` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL DEFAULT '',
  `passwd` char(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `book_admin` WRITE;
/*!40000 ALTER TABLE `book_admin` DISABLE KEYS */;

INSERT INTO `book_admin` (`uid`, `username`, `passwd`)
VALUES
	(1,'admin','21232f297a57a5a743894a0e4a801fc3');

/*!40000 ALTER TABLE `book_admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table book_book
# ------------------------------------------------------------

DROP TABLE IF EXISTS `book_book`;

CREATE TABLE `book_book` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(155) NOT NULL DEFAULT '' COMMENT '书名',
  `author` varchar(50) NOT NULL DEFAULT '' COMMENT '作者',
  `press` varchar(50) NOT NULL DEFAULT '' COMMENT '出版社',
  `date` date NOT NULL COMMENT '出版日期',
  `isbn` varchar(50) NOT NULL DEFAULT '' COMMENT '书号 ISBN',
  `cid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '类别',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '等级  1普通 2推荐',
  `stock` smallint(6) NOT NULL DEFAULT '0' COMMENT '库存',
  `rent` tinyint(4) NOT NULL DEFAULT '0' COMMENT '租金',
  `info` varchar(155) NOT NULL DEFAULT '' COMMENT '摘要',
  `thumb` varchar(200) NOT NULL DEFAULT '' COMMENT '缩略图',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '插入时间',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `book_book` WRITE;
/*!40000 ALTER TABLE `book_book` DISABLE KEYS */;

INSERT INTO `book_book` (`bid`, `title`, `author`, `press`, `date`, `isbn`, `cid`, `type`, `stock`, `rent`, `info`, `thumb`, `time`)
VALUES
	(44,'中国古代史','袁腾飞','湖南人民出版社','2014-01-01','123-456-789',15,2,100,1,'无','2015030219183954f4470f71e94.png',1425295119),
	(45,'中国近代史','袁腾飞','湖南人民出版社','2014-01-01','123-456-789',15,2,100,1,'无','2015030218595654f442acb5801.png',1425294005),
	(47,'Linux 私房菜','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'无','2015020823150754d77d7b8e30b.jpg',1423408507),
	(48,'Linux 私房菜','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'无','2015020823150754d77d7b8e30b.jpg',1423408507);

/*!40000 ALTER TABLE `book_book` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table book_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `book_category`;

CREATE TABLE `book_category` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `book_category` WRITE;
/*!40000 ALTER TABLE `book_category` DISABLE KEYS */;

INSERT INTO `book_category` (`cid`, `cname`)
VALUES
	(15,'历史类书籍'),
	(16,'科技类书籍');

/*!40000 ALTER TABLE `book_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table book_message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `book_message`;

CREATE TABLE `book_message` (
  `mid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `book_message` WRITE;
/*!40000 ALTER TABLE `book_message` DISABLE KEYS */;

INSERT INTO `book_message` (`mid`, `uid`, `content`, `time`)
VALUES
	(1,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(8,3,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(9,3,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(10,3,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(11,2,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(12,2,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(13,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(14,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(15,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678);

/*!40000 ALTER TABLE `book_message` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table book_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `book_user`;

CREATE TABLE `book_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '''''',
  `password` char(32) NOT NULL DEFAULT '''''',
  `gender` varchar(4) NOT NULL DEFAULT '男',
  `age` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `address` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `book_user` WRITE;
/*!40000 ALTER TABLE `book_user` DISABLE KEYS */;

INSERT INTO `book_user` (`uid`, `username`, `password`, `gender`, `age`, `address`, `time`)
VALUES
	(1,'user1','202cb962ac59075b964b07152d234b70','男',20,'北京市丰台区',1424746408),
	(2,'user2','202cb962ac59075b964b07152d234b70','女',20,'北京市丰台区',1424746408),
	(3,'user3','202cb962ac59075b964b07152d234b70','男',20,'北京市丰台区',1424746408),
	(4,'user4','202cb962ac59075b964b07152d234b70','女',20,'北京市丰台区',1424746408),
	(5,'user5','202cb962ac59075b964b07152d234b70','男',20,'北京市丰台区',1424746408);

/*!40000 ALTER TABLE `book_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
