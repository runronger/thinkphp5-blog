/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MariaDB
 Source Server Version : 100213
 Source Host           : localhost:3306
 Source Schema         : cnit8

 Target Server Type    : MariaDB
 Target Server Version : 100213
 File Encoding         : 65001

 Date: 30/05/2018 18:55:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cn_admin
-- ----------------------------
DROP TABLE IF EXISTS `cn_admin`;
CREATE TABLE `cn_admin`  (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `phone` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `real_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(140) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `auth_id` int(5) NOT NULL,
  `safety_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `work_status` tinyint(1) NOT NULL,
  `token` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_time` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `last_ip` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_admin
-- ----------------------------
INSERT INTO `cn_admin` VALUES (5, 'admin', '2d2a21b2754a45c815efa9d2e1be8459', 1, '18729309523', 'rongqiu', 'xian', 'sss', 1, '2048', 1, 'ssss', '2018-05-30 16:49:09', '127.0.0.1', '2018-05-30 16:49:09', '2018-05-30 16:49:09');

-- ----------------------------
-- Table structure for cn_article
-- ----------------------------
DROP TABLE IF EXISTS `cn_article`;
CREATE TABLE `cn_article`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(2) NOT NULL,
  `title` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(450) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_top` tinyint(1) NOT NULL,
  `add_time` datetime(0) NULL DEFAULT NULL,
  `container` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_delete` tinyint(1) NULL DEFAULT 0,
  `create_time` datetime(0) NULL DEFAULT '0000-00-00 00:00:00',
  `update_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_article
-- ----------------------------
INSERT INTO `cn_article` VALUES (2, 0, '测试', '彩色', 'asd', '/upload/images/20180522/cf028dd868428827641ff19c86c9c019.png', 0, '2018-05-28 16:34:27', '<p>asdasdasda你打没打adadad那什么大事啊啊所大所<img src=\"/upload/ueditImage/20180522/1526970662637664.jpg\" title=\"1526970662637664.jpg\" alt=\"pic.jpg\"/>adadagg</p>', 0, '2018-05-25 10:40:30', '2018-05-28 16:34:27');
INSERT INTO `cn_article` VALUES (3, 0, '测试', '彩色', 'admin', '/upload/images/20180522/0016005d9ee08dc9f02c25829d9a87a7.png', 0, '2018-05-23 18:04:18', '<p>爱仕达所大<img src=\"/upload/ueditImage/20180522/1526970759244993.jpg\" title=\"1526970759244993.jpg\" alt=\"tp.jpg\"/></p>', 0, '2018-05-23 18:04:18', '2018-05-23 18:04:18');
INSERT INTO `cn_article` VALUES (4, 0, 'adasd', 'aadsa', 'dasda', '/upload/images/20180523/acb5a19eddf467225aaa5ff9b598c411.png', 0, '2018-05-23 17:49:58', '<p>adasdasda<br/></p>', 0, '2018-05-23 17:49:58', '2018-05-23 17:49:58');
INSERT INTO `cn_article` VALUES (5, 11, 'mysql', 'mysql配置了数据库连接信息后，我们就可以直接使用数据库运行原生SQL操作了，支持query（查询操作）和execute（写入操作）方法，并且支持参数绑定。', '邓荣秋', '/upload/images/20180528/bc0deeae90fee229d18552ccea28381c.jpg', 1, '2018-05-28 17:12:09', '<p>mysql是很不错的<br/></p>', 0, '2018-05-28 17:12:09', '2018-05-28 17:14:25');
INSERT INTO `cn_article` VALUES (6, 10, 'PHP', 'php是最好的语言', 'admin', '/upload/images/20180528/91933a22e61ad1cd1851e08211c6150e.jpg', 0, '2018-05-28 17:28:25', '<p>php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言</p>', 0, '2018-05-28 17:28:25', NULL);
INSERT INTO `cn_article` VALUES (7, 10, 'php是最好的语言', 'php是最好的语言', 'admin', '/upload/images/20180528/fe57ba294bd7b234ba0633f8bae2afe7.png', 1, '2018-05-28 17:29:44', '<p>php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言php是最好的语言</p>', 0, '2018-05-28 17:29:44', NULL);
INSERT INTO `cn_article` VALUES (8, 10, 'html测试', 'html测试', 'admin', '/upload/images/20180528/74889c25d69b120a32efcecdf6e5b3b7.jpg', 0, '2018-05-28 18:38:51', '<p>html测试html测试html测试html测试html测试</p>', 0, '2018-05-28 18:38:51', '2018-05-28 18:40:36');
INSERT INTO `cn_article` VALUES (9, 10, 'html测试', 'html测试', 'admin', '/upload/images/20180528/b132eedf0f7eb58593ee82e1fd8e97ce.jpg', 0, '2018-05-28 18:44:15', '<p>asdasdasdasdasasdasdas<img src=\"/upload/ueditImage/20180528/1527504234119804.jpg\" title=\"1527504234119804.jpg\" alt=\"pic.jpg\"/></p>', 0, '2018-05-28 18:44:15', NULL);

-- ----------------------------
-- Table structure for cn_article_type
-- ----------------------------
DROP TABLE IF EXISTS `cn_article_type`;
CREATE TABLE `cn_article_type`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `create_user` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_delete` tinyint(1) NOT NULL DEFAULT 0,
  `create_time` datetime(0) NULL DEFAULT NULL,
  `update_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_article_type
-- ----------------------------
INSERT INTO `cn_article_type` VALUES (10, 'php', 'admin', 0, '2018-05-28 16:27:58', NULL);
INSERT INTO `cn_article_type` VALUES (11, 'mysqli', 'admin', 0, '2018-05-28 16:30:13', '2018-05-28 18:00:45');
INSERT INTO `cn_article_type` VALUES (12, 'javascript', 'admin', 0, '2018-05-28 16:30:31', '2018-05-28 18:39:45');
INSERT INTO `cn_article_type` VALUES (13, 'java', 'admin', 0, '2018-05-28 17:59:23', NULL);
INSERT INTO `cn_article_type` VALUES (14, 'html', 'admin', 0, '2018-05-28 18:38:17', NULL);

-- ----------------------------
-- Table structure for cn_gallery
-- ----------------------------
DROP TABLE IF EXISTS `cn_gallery`;
CREATE TABLE `cn_gallery`  (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(1) NOT NULL,
  `image_url` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `alt` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_delete` tinyint(1) NOT NULL,
  `create_time` datetime(0) NOT NULL,
  `update_time` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for cn_gallery_type
-- ----------------------------
DROP TABLE IF EXISTS `cn_gallery_type`;
CREATE TABLE `cn_gallery_type`  (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image_url` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alt` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_user` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `create_time` datetime(0) NULL DEFAULT NULL,
  `update_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_gallery_type
-- ----------------------------
INSERT INTO `cn_gallery_type` VALUES (1, '我的图库', '/upload/images/20180528/b132eedf0f7eb58593ee82e1fd8e97ce.jpg', '我的图片', 'admin', 0, '2018-05-30 18:09:39', NULL);
INSERT INTO `cn_gallery_type` VALUES (2, '旅行', NULL, NULL, 'admin', 0, '2018-05-30 18:29:01', NULL);
INSERT INTO `cn_gallery_type` VALUES (3, '测试1', NULL, NULL, 'admin', 0, '2018-05-30 18:49:29', '2018-05-30 18:49:50');

-- ----------------------------
-- Table structure for it_admin
-- ----------------------------
DROP TABLE IF EXISTS `it_admin`;
CREATE TABLE `it_admin`  (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'di主键',
  `loginName` varchar(36) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '登录名',
  `passWord` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `realName` varchar(36) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '真实姓名',
  `sex` tinyint(1) NOT NULL DEFAULT 1 COMMENT '性别',
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '邮箱',
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '手机',
  `workStatus` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态',
  `lastIP` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastTime` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp() COMMENT '创建时时间',
  `updated_at` timestamp(0) NOT NULL DEFAULT current_timestamp() COMMENT '升级时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of it_admin
-- ----------------------------
INSERT INTO `it_admin` VALUES (1, 'admin', 'eyJpdiI6InVmT3hcLytVMWlHRENxZlZuV1BLMkRBPT0iLCJ2YWx1ZSI6ImZhN1BIM3dKVGRheE1pRnZ5N3lpSlE9PSIsIm1hYyI6ImNkZmU5NmZmZGNmNjQzOGRiMDhjNjI3MTRkODhmOTkxYmY4ZjM0Njk4N2E5NTgyODU2ZjI2MGM1ODhmNDMxNDMifQ==', 'admin', 1, '375170667@qq.com', '', 1, '127.0.0.1', '2018-05-11 06:23:36', '2018-03-07 19:02:31', '0000-00-00 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
