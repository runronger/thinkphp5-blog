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

 Date: 05/06/2018 19:17:55
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
INSERT INTO `cn_admin` VALUES (5, 'admin', '2d2a21b2754a45c815efa9d2e1be8459', 1, '18729309523', 'rongqiu', 'xian', 'sss', 1, '2048', 1, 'ssss', '2018-06-05 14:22:26', '127.0.0.1', '2018-06-05 14:22:26', '2018-06-05 14:22:26');

-- ----------------------------
-- Table structure for cn_advertisement
-- ----------------------------
DROP TABLE IF EXISTS `cn_advertisement`;
CREATE TABLE `cn_advertisement`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` smallint(6) NOT NULL,
  `ad_url` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ad_description` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ad_image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ad_image_alt` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `author` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` datetime(0) NULL DEFAULT NULL,
  `update_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_advertisement
-- ----------------------------
INSERT INTO `cn_advertisement` VALUES (1, 1, 'http://tp5.com/admin/advertisement/advertisementEdit.html', '这是百度跳转', '/upload/advertisement/20180605/de2ea706b4fb976368fe1f81a5b84631.jpg', '八度图片', 0, 'admin', '2018-06-05 17:32:59', '2018-06-05 19:10:34');

-- ----------------------------
-- Table structure for cn_advertisement_type
-- ----------------------------
DROP TABLE IF EXISTS `cn_advertisement_type`;
CREATE TABLE `cn_advertisement_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `create_time` datetime(0) NULL DEFAULT NULL,
  `update_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_advertisement_type
-- ----------------------------
INSERT INTO `cn_advertisement_type` VALUES (1, 'index', 'admin', 0, '2018-06-05 15:36:26', NULL);
INSERT INTO `cn_advertisement_type` VALUES (2, 'banner', 'admin', 0, '2018-06-05 15:54:45', '2018-06-05 16:07:40');
INSERT INTO `cn_advertisement_type` VALUES (3, 'product', 'admin', 0, '2018-06-05 16:07:27', NULL);

-- ----------------------------
-- Table structure for cn_article
-- ----------------------------
DROP TABLE IF EXISTS `cn_article`;
CREATE TABLE `cn_article`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` smallint(6) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keywords` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_top` tinyint(1) NOT NULL,
  `add_time` datetime(0) NULL DEFAULT NULL,
  `container` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT 0,
  `create_time` datetime(0) NULL DEFAULT '0000-00-00 00:00:00',
  `update_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_article
-- ----------------------------
INSERT INTO `cn_article` VALUES (11, 10, 'PHP is a popular general-purpose scripting language that is especially suited to web development.', 'The PHP development team announces the immediate availability of PHP 7.1.18. All PHP 7.1 users are encouraged to upgrade to this version.', 'The PHP development team announces the immediate availability of PHP 7.1.18. All PHP 7.1 users are encouraged to upgrade to this version.', 'admin', '/upload/images/20180605/33029b8a8a1873ea9727c7c13e641877.png', 0, '2018-06-05 11:11:15', '<p>The PHP development team announces the immediate availability of PHP\r\n &nbsp; &nbsp; &nbsp; 7.1.18.\r\n &nbsp; &nbsp; \r\n &nbsp; &nbsp; &nbsp; All PHP 7.1 users are encouraged to upgrade to this version.</p><p>For source downloads of PHP 7.1.18 please visit our <a href=\"http://www.php.net/downloads.php\">downloads page</a>,\r\n &nbsp; &nbsp; &nbsp; Windows source and binaries can be found on <a href=\"http://windows.php.net/download/\">windows.php.net/download/</a>.\r\n &nbsp; &nbsp; &nbsp; The list of changes is recorded in the <a href=\"http://www.php.net/ChangeLog-7.php#7.1.18\">ChangeLog</a>.</p><p><br/></p>', 0, '2018-06-05 11:11:15', NULL);
INSERT INTO `cn_article` VALUES (12, 11, 'The BLOB and TEXT Types', 'The BLOB and TEXT Types', 'The BLOB and TEXT Types', 'admin', '/upload/images/20180605/47ef19dc2fb08eeb248f0a89a6e74374.png', 0, '2018-06-05 11:43:28', '<p>A <code class=\"literal\">BLOB</code> is a binary large object that can hold\r\n &nbsp; &nbsp; &nbsp; &nbsp;a variable amount of data. The four <code class=\"literal\">BLOB</code>\r\n &nbsp; &nbsp; &nbsp; &nbsp;types are <code class=\"literal\">TINYBLOB</code>, <code class=\"literal\">BLOB</code>, &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">MEDIUMBLOB</code>, and <code class=\"literal\">LONGBLOB</code>.\r\n &nbsp; &nbsp; &nbsp; &nbsp;These differ only in the maximum length of the values they can\r\n &nbsp; &nbsp; &nbsp; &nbsp;hold. The four <code class=\"literal\">TEXT</code> types are &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TINYTEXT</code>, <code class=\"literal\">TEXT</code>, &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">MEDIUMTEXT</code>, and <code class=\"literal\">LONGTEXT</code>.\r\n &nbsp; &nbsp; &nbsp; &nbsp;These correspond to the four <code class=\"literal\">BLOB</code> types and\r\n &nbsp; &nbsp; &nbsp; &nbsp;have the same maximum lengths and storage requirements. See &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/storage-requirements.html\" title=\"11.8&nbsp;Data Type Storage Requirements\">Section&nbsp;11.8, “Data Type Storage Requirements”</a>.</p><p><code class=\"literal\">BLOB</code> values are treated as binary strings\r\n &nbsp; &nbsp; &nbsp; &nbsp;(byte strings). They have the <code class=\"literal\">binary</code>\r\n &nbsp; &nbsp; &nbsp; &nbsp;character set and collation, and comparison and sorting are\r\n &nbsp; &nbsp; &nbsp; &nbsp;based on the numeric values of the bytes in column values. &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TEXT</code> values are treated as nonbinary strings\r\n &nbsp; &nbsp; &nbsp; &nbsp;(character strings). They have a character set other than &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">binary</code>, and values are sorted and compared\r\n &nbsp; &nbsp; &nbsp; &nbsp;based on the collation of the character set.</p><p>If strict SQL mode is not enabled and you assign a value to a &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">BLOB</code> or <code class=\"literal\">TEXT</code> column that\r\n &nbsp; &nbsp; &nbsp; &nbsp;exceeds the column&#39;s maximum length, the value is truncated to\r\n &nbsp; &nbsp; &nbsp; &nbsp;fit and a warning is generated. For truncation of nonspace\r\n &nbsp; &nbsp; &nbsp; &nbsp;characters, you can cause an error to occur (rather than a\r\n &nbsp; &nbsp; &nbsp; &nbsp;warning) and suppress insertion of the value by using strict SQL\r\n &nbsp; &nbsp; &nbsp; &nbsp;mode. See <a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/sql-mode.html\" title=\"5.1.10&nbsp;Server SQL Modes\">Section&nbsp;5.1.10, “Server SQL Modes”</a>.</p><p>Truncation of excess trailing spaces from values to be inserted\r\n &nbsp; &nbsp; &nbsp; &nbsp;into <a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/blob.html\" title=\"11.4.3&nbsp;The BLOB and TEXT Types\"><code class=\"literal\">TEXT</code></a> columns always\r\n &nbsp; &nbsp; &nbsp; &nbsp;generates a warning, regardless of the SQL mode.</p><p>For <code class=\"literal\">TEXT</code> and <code class=\"literal\">BLOB</code> columns,\r\n &nbsp; &nbsp; &nbsp; &nbsp;there is no padding on insert and no bytes are stripped on\r\n &nbsp; &nbsp; &nbsp; &nbsp;select.</p><p>If a <code class=\"literal\">TEXT</code> column is indexed, index entry\r\n &nbsp; &nbsp; &nbsp; &nbsp;comparisons are space-padded at the end. This means that, if the\r\n &nbsp; &nbsp; &nbsp; &nbsp;index requires unique values, duplicate-key errors will occur\r\n &nbsp; &nbsp; &nbsp; &nbsp;for values that differ only in the number of trailing spaces.\r\n &nbsp; &nbsp; &nbsp; &nbsp;For example, if a table contains <code class=\"literal\">&#39;a&#39;</code>, an\r\n &nbsp; &nbsp; &nbsp; &nbsp;attempt to store <code class=\"literal\">&#39;a&nbsp;&#39;</code> causes a\r\n &nbsp; &nbsp; &nbsp; &nbsp;duplicate-key error. This is not true for &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">BLOB</code> columns.</p><p>In most respects, you can regard a <code class=\"literal\">BLOB</code>\r\n &nbsp; &nbsp; &nbsp; &nbsp;column as a <a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/binary-varbinary.html\" title=\"11.4.2&nbsp;The BINARY and VARBINARY Types\"><code class=\"literal\">VARBINARY</code></a> column that\r\n &nbsp; &nbsp; &nbsp; &nbsp;can be as large as you like. Similarly, you can regard a &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TEXT</code> column as a &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/char.html\" title=\"11.4.1&nbsp;The CHAR and VARCHAR Types\"><code class=\"literal\">VARCHAR</code></a> column. &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">BLOB</code> and <code class=\"literal\">TEXT</code> differ from &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/binary-varbinary.html\" title=\"11.4.2&nbsp;The BINARY and VARBINARY Types\"><code class=\"literal\">VARBINARY</code></a> and &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/char.html\" title=\"11.4.1&nbsp;The CHAR and VARCHAR Types\"><code class=\"literal\">VARCHAR</code></a> in the following ways:</p><ul class=\"itemizedlist list-paddingleft-2\" style=\"list-style-type: disc;\"><li><p>For indexes on <code class=\"literal\">BLOB</code> and &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TEXT</code> columns, you must specify an index\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;prefix length. For <a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/char.html\" title=\"11.4.1&nbsp;The CHAR and VARCHAR Types\"><code class=\"literal\">CHAR</code></a> and &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/char.html\" title=\"11.4.1&nbsp;The CHAR and VARCHAR Types\"><code class=\"literal\">VARCHAR</code></a>, a prefix length is\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;optional. See <a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/column-indexes.html\" title=\"8.3.5&nbsp;Column Indexes\">Section&nbsp;8.3.5, “Column Indexes”</a>.</p></li><li><p><a class=\"indexterm\"></a>\r\n\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"indexterm\"></a>\r\n\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"indexterm\"></a>\r\n\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">BLOB</code> and <code class=\"literal\">TEXT</code> columns\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;cannot have <code class=\"literal\">DEFAULT</code> values.</p></li></ul><p>If you use the <code class=\"literal\">BINARY</code> attribute with a &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TEXT</code> data type, the column is assigned the\r\n &nbsp; &nbsp; &nbsp; &nbsp;binary (<code class=\"literal\">_bin</code>) collation of the column\r\n &nbsp; &nbsp; &nbsp; &nbsp;character set.</p><p><code class=\"literal\">LONG</code> and <code class=\"literal\">LONG VARCHAR</code> map\r\n &nbsp; &nbsp; &nbsp; &nbsp;to the <code class=\"literal\">MEDIUMTEXT</code> data type. This is a\r\n &nbsp; &nbsp; &nbsp; &nbsp;compatibility feature.</p><p>MySQL Connector/ODBC defines <code class=\"literal\">BLOB</code> values as &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">LONGVARBINARY</code> and <code class=\"literal\">TEXT</code>\r\n &nbsp; &nbsp; &nbsp; &nbsp;values as <code class=\"literal\">LONGVARCHAR</code>.</p><p>Because <code class=\"literal\">BLOB</code> and <code class=\"literal\">TEXT</code>\r\n &nbsp; &nbsp; &nbsp; &nbsp;values can be extremely long, you might encounter some\r\n &nbsp; &nbsp; &nbsp; &nbsp;constraints in using them:</p><ul class=\"itemizedlist list-paddingleft-2\" style=\"list-style-type: disc;\"><li><p>Only the first &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_sort_length\"><code class=\"literal\">max_sort_length</code></a> bytes of\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;the column are used when sorting. The default value of &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_sort_length\"><code class=\"literal\">max_sort_length</code></a> is 1024.\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;You can make more bytes significant in sorting or grouping\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;by increasing the value of &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_sort_length\"><code class=\"literal\">max_sort_length</code></a> at server\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;startup or runtime. Any client can change the value of its\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;session <a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_sort_length\"><code class=\"literal\">max_sort_length</code></a>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;variable:</p><pre class=\"programlisting line-numbers  language-sql\">mysql&gt;&nbsp;SET&nbsp;max_sort_length&nbsp;=&nbsp;2000;mysql&gt;&nbsp;SELECT&nbsp;id,&nbsp;comment&nbsp;FROM&nbsp;t&nbsp;&nbsp;&nbsp;&nbsp;-&gt;&nbsp;ORDER&nbsp;BY&nbsp;comment;</pre></li><li><p>Instances of <code class=\"literal\">BLOB</code> or &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TEXT</code> columns in the result of a query\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;that is processed using a temporary table causes the server\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;to use a table on disk rather than in memory because the &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">MEMORY</code> storage engine does not support\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;those data types (see &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/internal-temporary-tables.html\" title=\"8.4.4&nbsp;Internal Temporary Table Use in MySQL\">Section&nbsp;8.4.4, “Internal Temporary Table Use in MySQL”</a>). Use of disk\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;incurs a performance penalty, so include &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">BLOB</code> or <code class=\"literal\">TEXT</code> columns\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;in the query result only if they are really needed. For\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;example, avoid using &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/select.html\" title=\"13.2.10&nbsp;SELECT Syntax\"><code class=\"literal\">SELECT *</code></a>,\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;which selects all columns.</p></li><li><p>The maximum size of a <code class=\"literal\">BLOB</code> or &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TEXT</code> object is determined by its type,\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;but the largest value you actually can transmit between the\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;client and server is determined by the amount of available\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;memory and the size of the communications buffers. You can\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;change the message buffer size by changing the value of the &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_allowed_packet\"><code class=\"literal\">max_allowed_packet</code></a>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;variable, but you must do so for both the server and your\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;client program. For example, both <a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/mysql.html\" title=\"4.5.1&nbsp;mysql — The MySQL Command-Line Tool\"><span class=\"command\"><strong>mysql</strong></span></a>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;and <a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/mysqldump.html\" title=\"4.5.4&nbsp;mysqldump — A Database Backup Program\"><span class=\"command\"><strong>mysqldump</strong></span></a> enable you to change the\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;client-side &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_allowed_packet\"><code class=\"literal\">max_allowed_packet</code></a> value.\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;See <a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/server-configuration.html\" title=\"5.1.1&nbsp;Configuring the Server\">Section&nbsp;5.1.1, “Configuring the Server”</a>, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/mysql.html\" title=\"4.5.1&nbsp;mysql — The MySQL Command-Line Tool\">Section&nbsp;4.5.1, “<span class=\"command\"><strong>mysql</strong></span> — The MySQL Command-Line Tool”</a>, and <a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/mysqldump.html\" title=\"4.5.4&nbsp;mysqldump — A Database Backup Program\">Section&nbsp;4.5.4, “<span class=\"command\"><strong>mysqldump</strong></span> — A Database Backup Program”</a>.\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;You may also want to compare the packet sizes and the size\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;of the data objects you are storing with the storage\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;requirements, see <a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/storage-requirements.html\" title=\"11.8&nbsp;Data Type Storage Requirements\">Section&nbsp;11.8, “Data Type Storage Requirements”</a></p></li></ul><p>Each <code class=\"literal\">BLOB</code> or <code class=\"literal\">TEXT</code> value is\r\n &nbsp; &nbsp; &nbsp; &nbsp;represented internally by a separately allocated object. This is\r\n &nbsp; &nbsp; &nbsp; &nbsp;in contrast to all other data types, for which storage is\r\n &nbsp; &nbsp; &nbsp; &nbsp;allocated once per column when the table is opened.</p><p>In some cases, it may be desirable to store binary data such as\r\n &nbsp; &nbsp; &nbsp; &nbsp;media files in <code class=\"literal\">BLOB</code> or &nbsp; &nbsp; &nbsp; &nbsp;<code class=\"literal\">TEXT</code> columns. You may find MySQL&#39;s string\r\n &nbsp; &nbsp; &nbsp; &nbsp;handling functions useful for working with such data. See &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"xref\" href=\"https://dev.mysql.com/doc/refman/8.0/en/string-functions.html\" title=\"12.5&nbsp;String Functions\">Section&nbsp;12.5, “String Functions”</a>. For security and other\r\n &nbsp; &nbsp; &nbsp; &nbsp;reasons, it is usually preferable to do so using application\r\n &nbsp; &nbsp; &nbsp; &nbsp;code rather than giving application users the &nbsp; &nbsp; &nbsp; &nbsp;<a class=\"link\" href=\"https://dev.mysql.com/doc/refman/8.0/en/privileges-provided.html#priv_file\"><code class=\"literal\">FILE</code></a> privilege. You can discuss\r\n &nbsp; &nbsp; &nbsp; &nbsp;specifics for various languages and platforms in the MySQL\r\n &nbsp; &nbsp; &nbsp; &nbsp;Forums (<a class=\"ulink\" href=\"http://forums.mysql.com/\" target=\"_top\">http://forums.mysql.com/</a>).</p><p><br/></p>', 0, '2018-06-05 11:43:28', NULL);

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
-- Table structure for cn_config
-- ----------------------------
DROP TABLE IF EXISTS `cn_config`;
CREATE TABLE `cn_config`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` tinyint(1) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keywords` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `icp` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` datetime(0) NULL DEFAULT NULL,
  `update_time` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_config
-- ----------------------------
INSERT INTO `cn_config` VALUES (1, 0, 'cnit8', 'cnit8', '测试的', '陕ICP10110号', 'admin', '2018-06-04 15:21:05', '2018-06-04 17:03:56');

-- ----------------------------
-- Table structure for cn_gallery
-- ----------------------------
DROP TABLE IF EXISTS `cn_gallery`;
CREATE TABLE `cn_gallery`  (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `type_id` smallint(6) NOT NULL,
  `image_url` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `alt` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_delete` tinyint(1) NOT NULL,
  `create_time` datetime(0) NULL DEFAULT NULL,
  `update_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 63 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_gallery
-- ----------------------------
INSERT INTO `cn_gallery` VALUES (59, 5, '/upload/gallery/20180605/db98721381082d7cfaa6038aea2f7851.jpg', '', 0, '2018-06-05 11:40:13', NULL);
INSERT INTO `cn_gallery` VALUES (60, 5, '/upload/gallery/20180605/7a7043220012f890b58d98d166b66d75.jpg', '', 0, '2018-06-05 11:40:13', NULL);
INSERT INTO `cn_gallery` VALUES (61, 5, '/upload/gallery/20180605/d3ef60c050eeb6536df1804835246ebb.jpg', '', 0, '2018-06-05 11:40:13', NULL);
INSERT INTO `cn_gallery` VALUES (62, 5, '/upload/gallery/20180605/a485fe8da6d1f13c21f26d863f2773d2.jpg', '', 0, '2018-06-05 11:40:13', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_gallery_type
-- ----------------------------
INSERT INTO `cn_gallery_type` VALUES (1, '我的图库', '/upload/images/20180528/b132eedf0f7eb58593ee82e1fd8e97ce.jpg', '我的图片', 'admin', 0, '2018-05-30 18:09:39', NULL);
INSERT INTO `cn_gallery_type` VALUES (2, '旅行', NULL, NULL, 'admin', 0, '2018-05-30 18:29:01', NULL);
INSERT INTO `cn_gallery_type` VALUES (3, '测试1', NULL, NULL, 'admin', 0, '2018-05-30 18:49:29', '2018-05-30 18:49:50');
INSERT INTO `cn_gallery_type` VALUES (4, '日志', NULL, NULL, 'admin', 0, '2018-05-31 16:34:32', NULL);
INSERT INTO `cn_gallery_type` VALUES (5, 'cesss', NULL, NULL, 'admin', 0, '2018-06-01 18:49:41', NULL);

-- ----------------------------
-- Table structure for cn_site
-- ----------------------------
DROP TABLE IF EXISTS `cn_site`;
CREATE TABLE `cn_site`  (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `site_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `author` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` datetime(0) NULL DEFAULT NULL,
  `update_time` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cn_site
-- ----------------------------
INSERT INTO `cn_site` VALUES (1, 'http://www.tp5.com', 'tp5', 'composer require', 'admin', '2018-06-04 16:52:04', '0000-00-00 00:00:00');

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
