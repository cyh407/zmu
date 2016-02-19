CREATE DATABASE `zmustudent` DEFAULT CHARACTER SET utf8;

/*新闻表*/
CREATE TABLE IF NOT EXISTS `zmu_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL DEFAULT 0,
  `time` int(10) unsigned NOT NULL DEFAULT 0,
  `title` varchar(30) NOT NULL DEFAULT '请填写名字',
  `content` text,
  `delete` tinyint(2) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

/*用户表*/
CREATE TABLE `zmu_user` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`username` char(20) NOT NULL,
	`password` char(32) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
	`logintime` int(10) unsigned NOT NULL DEFAULT '0',
	`dutyid` smallint(3) NOT NULL DEFAULT '0',/*1=管理员；2=学生*/
	`loginip` char(20) NOT NULL,
	`delete` smallint(6) unsigned NOT NULL DEFAULT '0',/*0=不删除；1=删除*/
	PRIMARY KEY (`id`),
	UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*插入管理员用户*/
insert into `zmu_user` (`username`,`password`,`loginip`,`dutyid`) values
('admin',md5('admin'),'127.0.0.1',1),
('student',md5('student'),'127.0.0.1',2);

/*学生基本信息表*/
CREATE TABLE `zmu_student` (
	`studyno` char(10),/*学号*/
  `name` char(10) NOT NULL DEFAULT '无名氏',
  `grade` int not null default 2016,/*年级*/
  `class` char(8) not null default '医信',/*班级*/
  `gender` char(2) DEFAULT '女',
  `nation` char(10) DEFAULT '汉',
  `political` char(20),
  `birthday` int(10),
  `no` char(18),/*身份证号码*/
  `address` varchar(50),/*家庭住址*/
  `homephone` char(11),/*家庭电话*/
  `phone` char(11),/**个人电话*/
  `roomno` char(10),/*寝室号*/
  `speciality` varchar(20),/*特长 爱好*/
  `score` tinyint(6),/*高考成绩*/
  `loan` tinyint(2),/*是否贷款*/
  `isdelete` tinyint(2) not null default 0,
  `addtime` int(10) not null default 0,
	PRIMARY KEY (`studyno`),
  UNIQUE KEY `studyno` (`studyno`)
  /*FOREIGN KEY (`userid`) REFERENCES `zmu_user` (`id`)*/
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*学生干部表*/
CREATE TABLE `zmu_duty` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  PRIMARY KEY (`id`)
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*学生干部职务表*/
CREATE TABLE `zmu_master` (
  `id` int(10) unsigned NOT NULL,
  `studyno` char(10)/*学号*/
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*学生获奖表*/
CREATE TABLE `zmu_certificate` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(19) not null,/*获奖名称*/
  `studyno` char(10),/*学号*/
  `image` varchar(50),/*奖状或证书图片的地址*/
  `smallImage` varchar(50)/*缩略图名称*/
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
