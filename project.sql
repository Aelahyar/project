/*
 Navicat Premium Data Transfer

 Source Server         : anonim
 Source Server Type    : MariaDB
 Source Server Version : 101105
 Source Host           : localhost:3306
 Source Schema         : project

 Target Server Type    : MariaDB
 Target Server Version : 101105
 File Encoding         : 65001

 Date: 28/11/2023 07:54:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for departemen
-- ----------------------------
DROP TABLE IF EXISTS `departemen`;
CREATE TABLE `departemen`  (
  `DepartemenID` int(11) NOT NULL,
  `NamaDepartemen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`DepartemenID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departemen
-- ----------------------------
INSERT INTO `departemen` VALUES (1, 'IT');
INSERT INTO `departemen` VALUES (2, 'Finance');
INSERT INTO `departemen` VALUES (3, 'Logistic');
INSERT INTO `departemen` VALUES (4, 'Purchasing');
INSERT INTO `departemen` VALUES (5, 'HR');

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `NIK` int(11) NOT NULL,
  `Nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `TTL` date NULL DEFAULT NULL,
  `Pendidikan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `DepartemenID` int(11) NULL DEFAULT NULL,
  `Level` int(11) NULL DEFAULT NULL,
  `Grade` int(11) NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `DepartemenID`(`DepartemenID`) USING BTREE,
  CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`DepartemenID`) REFERENCES `departemen` (`DepartemenID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (102, 'Jane Doe', 'Jl. XYZ No. 456', '1988-05-20', 'S2 Akuntansi', 'Aktif', 2, 4, 5, 2, 'super', 'admin');
INSERT INTO `karyawan` VALUES (103, 'Bob Smith', 'Jl. MNO No. 789', '1995-08-10', 'D3 Logistik', 'Aktif', 5, 2, 3, 3, 'bob', '123');
INSERT INTO `karyawan` VALUES (104, 'Alice Johnson', 'Jl. PQR No. 567', '1992-03-25', 'S1 Manajemen', 'Aktif', 4, 1, 2, 4, 'alice', 'admin');
INSERT INTO `karyawan` VALUES (105, 'Charlie Brown', 'Jl. DEF No. 321', '1998-11-05', 'D4 Sumber Daya Manusia', 'Aktif', 3, 5, 5, 5, 'charlie', '123');
INSERT INTO `karyawan` VALUES (101, 'Mas', 'Jl. MNO No. 789', '2000-05-30', 'S1 Sistem Informasi', 'Aktif', 5, 5, 4, 15, 'admin', '1234');

SET FOREIGN_KEY_CHECKS = 1;
