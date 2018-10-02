/*
Navicat MySQL Data Transfer

Source Server         : 1
Source Server Version : 50641
Source Host           : localhost:3306
Source Database       : first_db

Target Server Type    : MYSQL
Target Server Version : 50641
File Encoding         : 65001

Date: 2018-10-02 18:27:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for creators
-- ----------------------------
DROP TABLE IF EXISTS `creators`;
CREATE TABLE `creators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(255) CHARACTER SET ascii DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of creators
-- ----------------------------
INSERT INTO `creators` VALUES ('1', 'Konovalov');
INSERT INTO `creators` VALUES ('2', 'Sidorov');
INSERT INTO `creators` VALUES ('3', 'Ivanenko');
INSERT INTO `creators` VALUES ('4', 'Johnson');
INSERT INTO `creators` VALUES ('5', 'unknown');

-- ----------------------------
-- Table structure for film
-- ----------------------------
DROP TABLE IF EXISTS `film`;
CREATE TABLE `film` (
  `film` varchar(255) NOT NULL,
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(4) DEFAULT NULL,
  `crid` int(4) DEFAULT NULL,
  PRIMARY KEY (`film_id`),
  KEY `f` (`crid`) USING BTREE,
  CONSTRAINT `crid` FOREIGN KEY (`crid`) REFERENCES `creators` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of film
-- ----------------------------
INSERT INTO `film` VALUES ('sad_film', '1', '1996', '4');
INSERT INTO `film` VALUES ('good_film', '2', '2018', '2');
INSERT INTO `film` VALUES ('horror_film', '3', '2004', '3');
INSERT INTO `film` VALUES ('a_fantastic_film', '4', '2008', '1');
INSERT INTO `film` VALUES ('documental_film', '5', '1985', '5');

-- ----------------------------
-- Table structure for filmsstyles
-- ----------------------------
DROP TABLE IF EXISTS `filmsstyles`;
CREATE TABLE `filmsstyles` (
  `films` int(4) DEFAULT NULL,
  `styles` int(4) DEFAULT NULL,
  KEY `ff_user_index` (`films`) USING BTREE,
  KEY `fs_user_index` (`styles`) USING BTREE,
  CONSTRAINT `key_fr_film` FOREIGN KEY (`films`) REFERENCES `film` (`film_id`) ON DELETE CASCADE,
  CONSTRAINT `key_fr_styles` FOREIGN KEY (`styles`) REFERENCES `styles` (`style_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of filmsstyles
-- ----------------------------
INSERT INTO `filmsstyles` VALUES ('1', '2');
INSERT INTO `filmsstyles` VALUES ('1', '3');
INSERT INTO `filmsstyles` VALUES ('5', '2');

-- ----------------------------
-- Table structure for styles
-- ----------------------------
DROP TABLE IF EXISTS `styles`;
CREATE TABLE `styles` (
  `style_id` int(4) NOT NULL AUTO_INCREMENT,
  `style` varchar(255) NOT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of styles
-- ----------------------------
INSERT INTO `styles` VALUES ('1', 'comedy');
INSERT INTO `styles` VALUES ('2', 'drama');
INSERT INTO `styles` VALUES ('3', 'horror');
INSERT INTO `styles` VALUES ('4', 'documental');
INSERT INTO `styles` VALUES ('5', 'melodrama');
SET FOREIGN_KEY_CHECKS=1;
