/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : rbac

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-31 16:23:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminuser` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  `logintime` int(11) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('13', 'wqeqqr卫', '8217a7d605f03f92edfa073c2aa3b623', '1535602411', null, null, '1');
INSERT INTO `admin` VALUES ('2', 'wqeq', 'd81f9c1be2e08964bf9f24b15f0e49', null, null, null, null);
INSERT INTO `admin` VALUES ('3', 'admin1', '65355ffd13a9960d7b41fad036e5e2e2', '1534409251', null, null, null);
INSERT INTO `admin` VALUES ('11', '温柔', 'd81f9c1be2e08964bf9f24b15f0e4900', '1534471130', '1534472765', null, '1');
INSERT INTO `admin` VALUES ('6', 'admin1563', 'a8dbc3537f2e7b64d4095321c5968161', '1534409303', null, null, null);
INSERT INTO `admin` VALUES ('8', 'wqeqq', '289dff07669d7a23de0ef88d2f7129e7', '1534409414', null, null, null);
INSERT INTO `admin` VALUES ('12', '温柔1', '127ab258b880b7061595b0a6202c0047', '1535597220', null, null, '1');
INSERT INTO `admin` VALUES ('10', 'admin156', 'd81f9c1be2e08964bf9f24b15f0e4900', '1534411520', null, null, null);

-- ----------------------------
-- Table structure for `app_access_log`
-- ----------------------------
DROP TABLE IF EXISTS `app_access_log`;
CREATE TABLE `app_access_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `target_url` varchar(255) DEFAULT NULL,
  `query_params` longtext,
  `ua` varchar(255) DEFAULT NULL,
  `ip` varchar(32) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `created_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of app_access_log
-- ----------------------------
INSERT INTO `app_access_log` VALUES ('1', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('2', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('3', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('4', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('5', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('6', '0', '/user/vlogin?uid=1', '{\"uid\":\"1\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('7', '1', '/', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('8', '1', '/', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('9', '1', '/', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('10', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('11', '1', '/user/set', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('12', '1', '/user/set', '{\"id\":\"0\",\"name\":\"nihao\",\"email\":\"592691858@qq.com\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('13', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('14', '1', '/role/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('15', '1', '/role/set', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('16', '1', '/role/set', '{\"id\":\"\",\"name\":\"\\u533a\\u57df\\u7ba1\\u7406\\u5458\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('17', '1', '/role/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('18', '1', '/access/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('19', '1', '/access/set', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('20', '1', '/access/set', '{\"id\":\"0\",\"title\":\"\\u7ed9\\u4f60\\u6743\\u9650\",\"urls\":\"\\/default\\/index\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('21', '1', '/access/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('22', '1', '/role/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('23', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('24', '1', '/role/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('25', '1', '/role/access?id=1', '{\"id\":\"1\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('26', '1', '/role/access', '{\"id\":\"1\",\"access_ids\":[\"1\"]}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('27', '1', '/role/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('28', '1', '/test/page1', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('29', '1', '/test/page2', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('30', '1', '/test/page3', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('31', '1', '/test/page4', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('32', '1', '/test/page5', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('33', '1', '/test/page5', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('34', '1', '/', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('35', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('36', '1', '/', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('37', '1', '/access/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('38', '1', '/role/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('39', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('40', '1', '/role/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('41', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('42', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('43', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('44', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('45', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('46', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('47', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('48', '0', '/user/vlogin?uid=1', '{\"uid\":\"1\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('49', '1', '/', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('50', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('51', '1', '/user/set?id=2', '{\"id\":\"2\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('52', '1', '/user/set', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('53', '0', '/user/login', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('54', '0', '/user/vlogin?uid=1', '{\"uid\":\"1\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('55', '1', '/', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('56', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('57', '1', '/user/set?id=2', '{\"id\":\"2\"}', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('58', '1', '/access/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('59', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('60', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('61', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('62', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('63', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('64', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('65', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');
INSERT INTO `app_access_log` VALUES ('66', '1', '/user/index', '[]', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '127.0.0.1', null, '2018');

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productid` bigint(11) NOT NULL AUTO_INCREMENT,
  `cateid` bigint(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `descr` text,
  `num` bigint(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `cover` varchar(200) DEFAULT NULL,
  `pics` text,
  `issale` enum('') DEFAULT NULL,
  `saleprice` decimal(10,0) DEFAULT NULL,
  `ishot` enum('') DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  `ison` varchar(200) DEFAULT NULL,
  `istui` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `updated_time` int(11) DEFAULT NULL,
  `created_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '超级管理员', 'apanly@163.com', '1', '1', null, null);
INSERT INTO `user` VALUES ('2', 'nihao', '592691858@qq.com', null, '1', '2018', '2018');
