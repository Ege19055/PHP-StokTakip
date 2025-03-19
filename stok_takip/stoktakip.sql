/*
Navicat MySQL Data Transfer

Source Server         : KURS
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : stoktakip

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-04-15 15:25:50
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `duyuru_tablosu`
-- ----------------------------
DROP TABLE IF EXISTS `duyuru_tablosu`;
CREATE TABLE `duyuru_tablosu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duyuru_metni` text DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of duyuru_tablosu
-- ----------------------------
INSERT INTO `duyuru_tablosu` VALUES ('1', 'fvdfbdgfb', '2024-04-15 15:03:39');

-- ----------------------------
-- Table structure for `kullanici`
-- ----------------------------
DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(44) DEFAULT NULL,
  `soyisim` varchar(44) DEFAULT NULL,
  `rol` varchar(44) DEFAULT NULL,
  `email` varchar(44) DEFAULT NULL,
  `sifre` varchar(44) DEFAULT NULL,
  `hesap_tarih` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kullanici
-- ----------------------------
INSERT INTO `kullanici` VALUES ('1', 'ege', 'koca', 'admin', 'ege@gmail.com', '123456', '2024-03-06');
INSERT INTO `kullanici` VALUES ('4', 'Tuwce', 'Yalcın', 'uye', 'tuwce@gmail.com', '123456', '2024-04-15');

-- ----------------------------
-- Table structure for `kullanici_log`
-- ----------------------------
DROP TABLE IF EXISTS `kullanici_log`;
CREATE TABLE `kullanici_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `giris` datetime DEFAULT NULL,
  `cikis` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kullanici_log
-- ----------------------------
INSERT INTO `kullanici_log` VALUES ('1', 'asfasf', 'sercol@gmail.com', '2024-03-01 20:00:33', null);
INSERT INTO `kullanici_log` VALUES ('2', 'Ege', 'asd@gmail.com', '2024-03-30 22:52:50', null);
INSERT INTO `kullanici_log` VALUES ('3', 'ege', 'ege@gmail.com', '2024-03-30 23:43:49', null);
INSERT INTO `kullanici_log` VALUES ('4', 'ege', 'ege@gmail.com', '2024-03-30 23:44:21', null);
INSERT INTO `kullanici_log` VALUES ('5', 'ege', 'ege@gmail.com', '2024-03-30 23:44:22', null);
INSERT INTO `kullanici_log` VALUES ('6', 'ege', 'ege@gmail.com', '2024-03-30 23:44:22', null);
INSERT INTO `kullanici_log` VALUES ('7', 'ege', 'ege@gmail.com', '2024-03-30 23:44:22', null);
INSERT INTO `kullanici_log` VALUES ('8', 'ege', 'ege@gmail.com', '2024-03-30 23:44:23', null);
INSERT INTO `kullanici_log` VALUES ('9', 'ege', 'ege@gmail.com', '2024-03-31 00:01:32', null);
INSERT INTO `kullanici_log` VALUES ('10', 'ege', 'ege@gmail.com', '2024-03-31 00:02:01', null);
INSERT INTO `kullanici_log` VALUES ('11', 'ege', 'ege@gmail.com', '2024-03-31 00:02:02', null);
INSERT INTO `kullanici_log` VALUES ('12', 'ege', 'ege@gmail.com', '2024-03-31 00:02:03', null);
INSERT INTO `kullanici_log` VALUES ('13', 'ege', 'ege@gmail.com', '2024-03-31 00:02:03', null);
INSERT INTO `kullanici_log` VALUES ('14', 'ege', 'ege@gmail.com', '2024-03-31 00:02:23', null);
INSERT INTO `kullanici_log` VALUES ('15', 'ege', 'ege@gmail.com', '2024-03-31 00:02:24', null);
INSERT INTO `kullanici_log` VALUES ('16', 'ege', 'ege@gmail.com', '2024-03-31 00:02:24', null);
INSERT INTO `kullanici_log` VALUES ('17', 'ege', 'ege@gmail.com', '2024-03-31 00:02:24', null);
INSERT INTO `kullanici_log` VALUES ('18', 'ege', 'ege@gmail.com', '2024-03-31 00:02:24', null);
INSERT INTO `kullanici_log` VALUES ('19', 'ege', 'ege@gmail.com', '2024-03-31 00:02:25', null);
INSERT INTO `kullanici_log` VALUES ('20', 'ege', 'ege@gmail.com', '2024-03-31 00:03:08', null);
INSERT INTO `kullanici_log` VALUES ('21', 'ege', 'ege@gmail.com', '2024-03-31 00:03:31', null);
INSERT INTO `kullanici_log` VALUES ('22', 'ege', 'ege@gmail.com', '2024-03-31 00:03:32', null);
INSERT INTO `kullanici_log` VALUES ('23', 'ege', 'ege@gmail.com', '2024-03-31 00:03:32', null);
INSERT INTO `kullanici_log` VALUES ('24', 'ege', 'ege@gmail.com', '2024-03-31 00:03:32', null);
INSERT INTO `kullanici_log` VALUES ('25', 'ege', 'ege@gmail.com', '2024-03-31 00:07:28', null);
INSERT INTO `kullanici_log` VALUES ('26', 'ege', 'ege@gmail.com', '2024-03-31 00:07:54', null);
INSERT INTO `kullanici_log` VALUES ('27', 'ege', 'ege@gmail.com', '2024-03-31 00:08:10', null);
INSERT INTO `kullanici_log` VALUES ('28', 'ahmet', 'asd@gmail.com', '2024-03-31 00:08:44', null);
INSERT INTO `kullanici_log` VALUES ('29', 'ahmet', 'asd@gmail.com', '2024-03-31 00:09:36', null);
INSERT INTO `kullanici_log` VALUES ('30', 'ege', 'ege@gmail.com', '2024-03-31 00:20:13', null);
INSERT INTO `kullanici_log` VALUES ('31', 'ege', 'ege@gmail.com', '2024-03-31 10:09:11', null);
INSERT INTO `kullanici_log` VALUES ('32', 'ege', 'd@gmail.com', '2024-03-31 10:09:44', null);
INSERT INTO `kullanici_log` VALUES ('33', 'ege', 'd@gmail.com', '2024-03-31 10:13:01', null);
INSERT INTO `kullanici_log` VALUES ('34', 'ege', 'd@gmail.com', '2024-03-31 10:29:40', null);
INSERT INTO `kullanici_log` VALUES ('35', 'ege', 'ege@gmail.com', '2024-04-01 19:37:55', null);
INSERT INTO `kullanici_log` VALUES ('36', 'ege', 'd@gmail.com', '2024-04-01 19:48:49', null);
INSERT INTO `kullanici_log` VALUES ('37', 'ege', 'ege@gmail.com', '2024-04-01 20:21:39', null);
INSERT INTO `kullanici_log` VALUES ('38', 'ege', 'ege@gmail.com', '2024-04-01 20:23:56', null);
INSERT INTO `kullanici_log` VALUES ('39', 'ege', 'd@gmail.com', '2024-04-01 21:00:09', null);
INSERT INTO `kullanici_log` VALUES ('40', 'ege', 'd@gmail.com', '2024-04-15 10:32:55', null);
INSERT INTO `kullanici_log` VALUES ('41', 'ege', 'ege@gmail.com', '2024-04-15 10:34:06', null);
INSERT INTO `kullanici_log` VALUES ('42', 'ege', 'ege@gmail.com', '2024-04-15 10:37:57', null);
INSERT INTO `kullanici_log` VALUES ('43', 'ege', 'd@gmail.com', '2024-04-15 11:10:59', null);
INSERT INTO `kullanici_log` VALUES ('44', 'ege', 'ege@gmail.com', '2024-04-15 11:20:17', null);
INSERT INTO `kullanici_log` VALUES ('45', 'Tuwce', 'tuwce@gmail.com', '2024-04-15 11:20:49', null);
INSERT INTO `kullanici_log` VALUES ('46', 'ege', 'ege@gmail.com', '2024-04-15 12:35:20', null);
INSERT INTO `kullanici_log` VALUES ('47', 'ege', 'ege@gmail.com', '2024-04-15 12:45:15', null);
INSERT INTO `kullanici_log` VALUES ('48', 'Tuwce', 'tuwce@gmail.com', '2024-04-15 12:45:45', null);
INSERT INTO `kullanici_log` VALUES ('49', 'Tuwce', 'tuwce@gmail.com', '2024-04-15 12:50:17', null);
INSERT INTO `kullanici_log` VALUES ('50', 'ege', 'ege@gmail.com', '2024-04-15 13:00:15', null);
INSERT INTO `kullanici_log` VALUES ('51', 'ege', 'ege@gmail.com', '2024-04-15 13:08:40', null);
INSERT INTO `kullanici_log` VALUES ('52', 'ege', 'ege@gmail.com', '2024-04-15 13:17:12', null);
INSERT INTO `kullanici_log` VALUES ('53', 'ege', 'ege@gmail.com', '2024-04-15 13:54:11', null);
INSERT INTO `kullanici_log` VALUES ('54', 'Tuwce', 'tuwce@gmail.com', '2024-04-15 13:55:46', null);
INSERT INTO `kullanici_log` VALUES ('55', 'ege', 'ege@gmail.com', '2024-04-15 13:56:14', null);
INSERT INTO `kullanici_log` VALUES ('56', 'Tuwce', 'tuwce@gmail.com', '2024-04-15 13:56:30', null);
INSERT INTO `kullanici_log` VALUES ('57', 'ege', 'ege@gmail.com', '2024-04-15 14:01:40', null);
INSERT INTO `kullanici_log` VALUES ('58', 'Tuwce', 'tuwce@gmail.com', '2024-04-15 14:03:52', null);

-- ----------------------------
-- Table structure for `marka`
-- ----------------------------
DROP TABLE IF EXISTS `marka`;
CREATE TABLE `marka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marka_ad` varchar(55) DEFAULT NULL,
  `kategori` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of marka
-- ----------------------------
INSERT INTO `marka` VALUES ('13', 'asa', 'harry poterdsf');

-- ----------------------------
-- Table structure for `urunler`
-- ----------------------------
DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_ad` varchar(55) DEFAULT NULL,
  `urun_adet` varchar(55) DEFAULT NULL,
  `img_url` varchar(55) DEFAULT NULL,
  `urun_fiyat` varchar(55) DEFAULT NULL,
  `kategori` varchar(55) DEFAULT NULL,
  `urun_kodu` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of urunler
-- ----------------------------
INSERT INTO `urunler` VALUES ('2', 'hgfhgfdfbf', '3243564', 'cc57af193824347.65f1f849d1331.png', '3243', 'asa - harry poterdsf', '9077042');
