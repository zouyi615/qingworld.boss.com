/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : qingworld

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2014-02-22 18:36:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `q_forums`
-- ----------------------------
DROP TABLE IF EXISTS `q_forums`;
CREATE TABLE `q_forums` (
  `fid` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '版块ID',
  `fup` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级版块ID',
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '版块的类型(0,父节点；1,第一个子节点)',
  `name` varchar(50) NOT NULL COMMENT '版块名称',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否在论坛上显示',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0' COMMENT '各版块显示顺序',
  `threads` mediumint(8) DEFAULT '0' COMMENT '主题信息统计',
  `posts` mediumint(8) DEFAULT '0' COMMENT '贴子信息统计',
  `todayposts` mediumint(8) DEFAULT '0' COMMENT '今日帖子统计',
  `lastpost` varchar(110) DEFAULT NULL COMMENT '最后发帖用户名，发帖时间，标题这三个信息组成的字串',
  `allowsmilies` tinyint(1) DEFAULT '0' COMMENT '是否允许使用表情',
  `allowhtml` tinyint(1) DEFAULT '0' COMMENT '是否允许使用HTML代码',
  `allowimgcode` tinyint(1) DEFAULT '0' COMMENT '是否允许使用IMG代码',
  `allowanonymous` tinyint(1) DEFAULT '0' COMMENT '是否允许匿名发帖',
  `alloweditrules` tinyint(1) DEFAULT '0' COMMENT '是否允许版主编辑版规',
  `recyclebin` tinyint(1) DEFAULT '0' COMMENT '是否开启回收站',
  `modnewposts` tinyint(1) DEFAULT '0' COMMENT '是否开启审核新帖',
  `disablewatermark` tinyint(1) DEFAULT '0' COMMENT '是否使用图片水印功能',
  `autoclose` smallint(6) DEFAULT '0' COMMENT '是否自动关闭主题，0为不关闭',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of q_forums
-- ----------------------------

-- ----------------------------
-- Table structure for `q_posts`
-- ----------------------------
DROP TABLE IF EXISTS `q_posts`;
CREATE TABLE `q_posts` (
  `pid` int(10) NOT NULL AUTO_INCREMENT COMMENT '回复ID',
  `tid` mediumint(8) NOT NULL COMMENT '贴子所在主题的ID',
  `author` varchar(15) NOT NULL COMMENT '回复者的会员名称',
  `authorid` int(8) NOT NULL COMMENT '回复者的会员UID编号',
  `dateline` datetime NOT NULL COMMENT '回复日期',
  `message` mediumtext NOT NULL COMMENT '回复内容',
  `useip` varchar(15) NOT NULL COMMENT '回复者的IP',
  `invisible` tinyint(1) NOT NULL COMMENT '回复状态（是否审核中或者是否在回收站）',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of q_posts
-- ----------------------------

-- ----------------------------
-- Table structure for `q_themes`
-- ----------------------------
DROP TABLE IF EXISTS `q_themes`;
CREATE TABLE `q_themes` (
  `typeid` smallint(6) NOT NULL COMMENT '类型ID',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0' COMMENT '显示顺序',
  `name` varchar(255) NOT NULL COMMENT '类型名称',
  `description` varchar(255) NOT NULL COMMENT '类型描述',
  `state` tinyint(1) NOT NULL COMMENT '主题状态',
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of q_themes
-- ----------------------------

-- ----------------------------
-- Table structure for `q_topics`
-- ----------------------------
DROP TABLE IF EXISTS `q_topics`;
CREATE TABLE `q_topics` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '贴子的ID',
  `fid` smallint(6) NOT NULL COMMENT '贴子所在版块的ID',
  `tid` mediumint(8) NOT NULL COMMENT '贴子所在主题的ID',
  `author` varchar(15) NOT NULL COMMENT '贴子的发表者的会员名称',
  `authorid` mediumint(8) NOT NULL COMMENT '贴子的发表者的会员UID编号',
  `subject` varchar(80) NOT NULL COMMENT '贴子的标题',
  `dateline` datetime NOT NULL COMMENT '发表贴子的日期',
  `lastpost` datetime NOT NULL COMMENT '最后发表日期',
  `lastposter` char(15) NOT NULL COMMENT '最后发表的会员名称',
  `message` mediumtext NOT NULL COMMENT '贴子的内容',
  `displayorder` tinyint(1) DEFAULT '0' COMMENT '显示顺序',
  `digest` tinyint(1) DEFAULT '0' COMMENT '是否为精华贴',
  `itemid` mediumint(8) NOT NULL DEFAULT '0' COMMENT '是否为推荐主题',
  `useip` varchar(15) NOT NULL COMMENT '发表者的IP',
  `invisible` tinyint(1) NOT NULL COMMENT '帖子状态（是否审核中或者是否在回收站）',
  `attachment` tinyint(1) DEFAULT NULL COMMENT '是否有附件',
  `attadir` varchar(20) DEFAULT NULL COMMENT '附件地址',
  `views` int(10) NOT NULL DEFAULT '0' COMMENT '浏览次数',
  `replies` mediumint(8) NOT NULL DEFAULT '0' COMMENT '回复数量',
  `rate` smallint(6) NOT NULL COMMENT '本帖被评分总数',
  `rateimes` tinyint(3) NOT NULL COMMENT '被评分次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of q_topics
-- ----------------------------

-- ----------------------------
-- Table structure for `q_userfields`
-- ----------------------------
DROP TABLE IF EXISTS `q_userfields`;
CREATE TABLE `q_userfields` (
  `uid` mediumint(8) NOT NULL COMMENT '用户的UID编号',
  `nickname` varchar(30) DEFAULT NULL COMMENT '用户昵称',
  `qq` varchar(12) DEFAULT NULL COMMENT 'QQ号码',
  `location` varchar(30) DEFAULT NULL COMMENT '来自',
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `signature` text COMMENT '个人签名',
  PRIMARY KEY (`uid`),
  CONSTRAINT `userfields_id` FOREIGN KEY (`uid`) REFERENCES `q_userinfo` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of q_userfields
-- ----------------------------

-- ----------------------------
-- Table structure for `q_userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `q_userinfo`;
CREATE TABLE `q_userinfo` (
  `uid` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '用户的UID编号',
  `username` char(15) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '登录密码（MD5加密方式）',
  `gender` tinyint(1) DEFAULT '0' COMMENT '性别',
  `adminid` tinyint(1) DEFAULT NULL COMMENT 'adminid--tinyint(1)--管理组ID（1为管理员、2为超级版主、3为版主、0表示否，即非管理组，-1表示特殊组及除了1，2，3以外的系统组（即4，5，6，7，8组））',
  `groupid` smallint(6) DEFAULT NULL COMMENT '用户组ID',
  `regip` char(15) DEFAULT NULL COMMENT '注册时的IP记录',
  `regdate` datetime DEFAULT NULL COMMENT '注册日期',
  `lastip` char(15) DEFAULT NULL COMMENT '上次访问的IP记录',
  `lastvisit` datetime DEFAULT NULL COMMENT '上次访问的时间',
  `lastpost` datetime DEFAULT NULL COMMENT '最后发帖时间',
  `posts` smallint(8) DEFAULT NULL COMMENT '总贴数',
  `digestposts` smallint(6) DEFAULT NULL COMMENT '精华帖数',
  `credits` int(10) DEFAULT NULL COMMENT '总积分',
  `email` char(50) DEFAULT NULL COMMENT '电子信箱地址',
  `phone` char(11) DEFAULT NULL COMMENT '电话',
  `bday` date DEFAULT NULL COMMENT '生日',
  `accessmasks` tinyint(1) DEFAULT NULL COMMENT '该用户是否对某些板块指定了特别的权限',
  `sigstatus` tinyint(1) DEFAULT NULL COMMENT '是否显示签名',
  `ustate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户状态-1,禁用;0默认',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of q_userinfo
-- ----------------------------
