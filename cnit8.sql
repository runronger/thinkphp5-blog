/*
Navicat MariaDB Data Transfer

Source Server         : localhost_3306
Source Server Version : 100213
Source Host           : localhost:3306
Source Database       : cnit8

Target Server Type    : MariaDB
Target Server Version : 100213
File Encoding         : 65001

Date: 2018-05-23 17:52:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cn_admin
-- ----------------------------
DROP TABLE IF EXISTS `cn_admin`;
CREATE TABLE `cn_admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `real_name` varchar(40) NOT NULL,
  `address` varchar(140) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `auth_id` int(5) NOT NULL,
  `safety_code` varchar(10) NOT NULL,
  `work_status` tinyint(1) NOT NULL,
  `token` varchar(512) NOT NULL,
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `last_ip` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_admin
-- ----------------------------
INSERT INTO `cn_admin` VALUES ('5', 'admin', '2d2a21b2754a45c815efa9d2e1be8459', '1', '18729309523', 'rongqiu', 'xian', 'sss', '1', '2048', '1', 'ssss', '2018-05-23 17:34:40', '127.0.0.1', '2018-05-23 17:34:40', '2018-05-23 17:34:40');

-- ----------------------------
-- Table structure for cn_article
-- ----------------------------
DROP TABLE IF EXISTS `cn_article`;
CREATE TABLE `cn_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(2) NOT NULL,
  `title` varchar(120) NOT NULL,
  `description` varchar(450) NOT NULL,
  `author` varchar(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `is_top` tinyint(2) NOT NULL,
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `container` mediumtext NOT NULL,
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_article
-- ----------------------------
INSERT INTO `cn_article` VALUES ('2', '0', '测试', '彩色', 'asd', '/upload/images/20180522/cf028dd868428827641ff19c86c9c019.png', '0', '2018-05-23 17:49:16', '<p>asdasdasda你打没打adadad那什么大事啊啊所大所<img src=\"/upload/ueditImage/20180522/1526970662637664.jpg\" title=\"1526970662637664.jpg\" alt=\"pic.jpg\"/>adada</p>', '2018-05-23 17:49:16', '2018-05-23 17:49:16');
INSERT INTO `cn_article` VALUES ('3', '0', '测试', '彩色', 'admin', '/upload/images/20180522/0016005d9ee08dc9f02c25829d9a87a7.png', '0', '2018-05-22 14:33:53', '<p>爱仕达所大<img src=\"/upload/ueditImage/20180522/1526970759244993.jpg\" title=\"1526970759244993.jpg\" alt=\"tp.jpg\"/></p>', '2018-05-22 14:33:53', '2018-05-22 14:33:53');
INSERT INTO `cn_article` VALUES ('4', '0', 'adasd', 'aadsa', 'dasda', '/upload/images/20180523/acb5a19eddf467225aaa5ff9b598c411.png', '0', '2018-05-23 17:49:58', '<p>adasdasda<br/></p>', '2018-05-23 17:49:58', '2018-05-23 17:49:58');

-- ----------------------------
-- Table structure for cn_article_type
-- ----------------------------
DROP TABLE IF EXISTS `cn_article_type`;
CREATE TABLE `cn_article_type` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_article_type
-- ----------------------------

-- ----------------------------
-- Table structure for it_admin
-- ----------------------------
DROP TABLE IF EXISTS `it_admin`;
CREATE TABLE `it_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'di主键',
  `loginName` varchar(36) NOT NULL DEFAULT '' COMMENT '登录名',
  `passWord` varchar(255) NOT NULL,
  `realName` varchar(36) NOT NULL DEFAULT '真实姓名',
  `sex` tinyint(1) NOT NULL DEFAULT 1 COMMENT '性别',
  `email` varchar(40) NOT NULL DEFAULT '' COMMENT '邮箱',
  `phone` varchar(15) NOT NULL DEFAULT '' COMMENT '手机',
  `workStatus` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态',
  `lastIP` varchar(30) NOT NULL,
  `lastTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '创建时时间',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '升级时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of it_admin
-- ----------------------------
INSERT INTO `it_admin` VALUES ('1', 'admin', 'eyJpdiI6InVmT3hcLytVMWlHRENxZlZuV1BLMkRBPT0iLCJ2YWx1ZSI6ImZhN1BIM3dKVGRheE1pRnZ5N3lpSlE9PSIsIm1hYyI6ImNkZmU5NmZmZGNmNjQzOGRiMDhjNjI3MTRkODhmOTkxYmY4ZjM0Njk4N2E5NTgyODU2ZjI2MGM1ODhmNDMxNDMifQ==', 'admin', '1', '375170667@qq.com', '', '1', '127.0.0.1', '2018-05-11 06:23:36', '2018-03-07 19:02:31', '0000-00-00 00:00:00');
SET FOREIGN_KEY_CHECKS=1;
