# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: book
# Generation Time: 2015-04-17 05:58:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL DEFAULT '',
  `passwd` char(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;

INSERT INTO `admin` (`uid`, `username`, `passwd`)
VALUES
	(1,'admin','21232f297a57a5a743894a0e4a801fc3');

/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table book
# ------------------------------------------------------------

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
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

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;

INSERT INTO `book` (`bid`, `title`, `author`, `press`, `date`, `isbn`, `cid`, `type`, `stock`, `rent`, `info`, `thumb`, `time`)
VALUES
	(44,'中国古代史','袁腾飞','湖南人民出版社','2014-01-01','123-456-789',15,1,7,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015030219183954f4470f71e94.png',1425295119),
	(45,'中国近代史','袁腾飞','湖南人民出版社','2014-01-01','123-456-789',15,2,101,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015030218595654f442acb5801.png',1425294005),
	(47,'Linux 私房菜1','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1423408507),
	(48,'Linux 私房菜2','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1423408507),
	(49,'Linux 私房菜3','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,1,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1426580027),
	(50,'Linux 私房菜4','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,1,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1426580031),
	(51,'Linux 私房菜5','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1426580031),
	(52,'Linux 私房菜6','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,1,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1426580031),
	(53,'Linux 私房菜7','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1426580031),
	(54,'Linux 私房菜8','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1426580032),
	(55,'Linux 私房菜9','鸟哥','湖南人民出版社','2014-01-01','123-456-789',16,2,100,1,'我们知道Linux这玩意儿是在计算机上面运作的，所以说Linux就是一组软件。问题是这个软件是操作系统还是应用程序？ 且Linux可以在哪些种类的计算机上面运作？而Linux源自哪里？为什么 Linux 还不用钱？这些我们都得来谈一谈先！','2015020823150754d77d7b8e30b.jpg',1426580032);

/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table borrow
# ------------------------------------------------------------

DROP TABLE IF EXISTS `borrow`;

CREATE TABLE `borrow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `idcard` char(20) NOT NULL DEFAULT '' COMMENT '身份证号',
  `phone` char(15) NOT NULL DEFAULT '' COMMENT '电话号码',
  `borrow_time` int(10) unsigned NOT NULL COMMENT '借阅时间',
  `borrow_days` tinyint(3) unsigned NOT NULL COMMENT '借阅天数',
  `bid` int(10) unsigned NOT NULL COMMENT '图书ID',
  `num` tinyint(3) unsigned NOT NULL COMMENT '数量',
  `deposit` smallint(5) unsigned NOT NULL COMMENT '押金',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `borrow` WRITE;
/*!40000 ALTER TABLE `borrow` DISABLE KEYS */;

INSERT INTO `borrow` (`id`, `name`, `idcard`, `phone`, `borrow_time`, `borrow_days`, `bid`, `num`, `deposit`)
VALUES
	(1,'张三','371202199201021231','13111111111',1427790111,3,44,1,100),
	(2,'张三','371202199201021231','13111111111',1427790111,3,44,1,100),
	(3,'张三','371202199201021231','13111111111',1427790111,4,44,1,100),
	(4,'张三','371202199201021231','13111111111',1427790111,3,44,1,100);

/*!40000 ALTER TABLE `borrow` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`cid`, `cname`)
VALUES
	(15,'历史类书籍'),
	(16,'科技类书籍');

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `mid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;

INSERT INTO `message` (`mid`, `uid`, `content`, `time`)
VALUES
	(1,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(8,3,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(9,3,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(10,3,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(11,2,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(12,2,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(13,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(14,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(15,4,'这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容这里是内容',1425294678),
	(16,0,'你好',1427855020);

/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '''''',
  `password` char(32) NOT NULL DEFAULT '''''',
  `gender` varchar(4) NOT NULL DEFAULT '男',
  `age` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `address` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`uid`, `username`, `password`, `gender`, `age`, `address`, `time`)
VALUES
	(1,'user1','202cb962ac59075b964b07152d234b70','男',20,'北京市丰台区',1424746408),
	(2,'user2','202cb962ac59075b964b07152d234b70','女',20,'北京市丰台区',1424746408),
	(3,'user3','202cb962ac59075b964b07152d234b70','男',20,'北京市丰台区',1424746408),
	(4,'user4','202cb962ac59075b964b07152d234b70','女',20,'北京市丰台区',1424746408),
	(5,'user5','202cb962ac59075b964b07152d234b70','男',20,'北京市丰台区',1424746408);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
