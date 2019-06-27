/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50547
 Source Host           : localhost:3306
 Source Schema         : myweb

 Target Server Type    : MySQL
 Target Server Version : 50547
 File Encoding         : 65001

 Date: 26/06/2019 20:12:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for android_message
-- ----------------------------
DROP TABLE IF EXISTS `android_message`;
CREATE TABLE `android_message`  (
  `no` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of android_message
-- ----------------------------
INSERT INTO `android_message` VALUES (2, 'iii', '2019-06-10 07:30:00');
INSERT INTO `android_message` VALUES (3, 'iii', '2019-06-10 07:24:00');
INSERT INTO `android_message` VALUES (4, 'q1', '2019-06-10 07:30:00');
INSERT INTO `android_message` VALUES (5, 'q1', '2019-06-10 07:55:00');

-- ----------------------------
-- Table structure for android_user
-- ----------------------------
DROP TABLE IF EXISTS `android_user`;
CREATE TABLE `android_user`  (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of android_user
-- ----------------------------
INSERT INTO `android_user` VALUES ('id_lijie1', '李杰');
INSERT INTO `android_user` VALUES ('iii', 'wangjunqian');
INSERT INTO `android_user` VALUES ('q1', 'audi');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `summary` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` datetime NOT NULL,
  `img` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `imgsum` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL,
  `love` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `isfirst` int(11) NOT NULL DEFAULT 0,
  `retain3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `viewtime` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 49 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (31, 'www', 'sumtudou', '我是简介', '<p>我是正文部分，目前没写.....qqqqqqqqqqqqqq</p>', '2019-06-10 07:30:00', '/blogImg/zd01.jpg', 1, 0, 0, 0, NULL, 1);
INSERT INTO `article` VALUES (32, '哈哈哈', 'sumtudou', '嘎嘎嘎', '<p>厚大司考换个卡收到货付款拉斯法</p>', '2019-05-31 09:05:00', '', 0, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (43, 'qqqqqqqqqqqqqqqqqqqqqq', 'sumtudou', 'wwwwwwwwwww', '<p>gggggggggggg</p>', '2019-06-05 05:21:00', 'ddddddd', 1, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (47, 'gggggggggggggggg', 'sumtudou', 'gggggggggggggggg', '<p>\n    ggggggggggggggggggg<img src=\"/ueditor/php/upload/image/20190504/1556972863135313.jpg\" alt=\"1556972863135313.jpg\"/>\n</p>', '2019-06-10 07:34:00', '/ueditor/php/upload/image/20190504/1556972863135313.jpg', 1, 1, 0, 2, NULL, 0);
INSERT INTO `article` VALUES (6, 'tittle_7', 'sumtudou', '真的没啥啊', 'zanshimeiyou', '2019-05-01 16:38:58', '/blogImg/bi02.jpg', 1, 1, 14, 0, NULL, 3);
INSERT INTO `article` VALUES (7, 'tittle_8', 'sumtudou', '真的没啥啊', '<p>zanshimeiyouaaaaaaaaaaaaaa</p>', '2019-05-31 09:49:00', '', 0, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (8, 'tittle_9', 'sumtudou', '真的没啥啊', '<p>zanshimeiyouqqq</p>', '2019-05-31 09:48:00', '', 0, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (9, 'tittle_10', 'sumtudou', '真的没啥啊', '<p>zanshimeiyou</p><p>版权声明：本文为博主原创文章，未经博主允许不得转载。 https://blog.csdn.net/u013594477/article/details/79259320</p><p>解决方案：将数据提交到saveReport（form的action指向）页面，但是页面又不进行跳转，即保持当前页面不变呢？利用jquery的ajaxSubmit函数以及form的onsubmit函数完成</p><p>一般的写法为：</p><p><br/></p><p>&lt;form action=&quot;saveReport.htm&quot; method=&quot;post&quot;&gt;&nbsp;</p><p>……&nbsp;</p><p>&lt;input type=&quot;submit&quot; value=&quot;保存报告&quot;/&gt;&nbsp;</p><p>&lt;/form&gt;&nbsp;</p><p>1</p><p>2</p><p>3</p><p>4</p><p>点击submit按钮或直接回车可以将数据提交到saveReport页面，但是提交后也会跳转到saveReport页面 ，如何做到&nbsp;</p><p>将数据提交到saveReport（form的action指向）页面，但是页面又不进行跳转，即保持当前页面不变呢？？</p><p><br/></p><p>利用jquery的ajaxSubmit函数以及form的onsubmit函数完成，如下：</p><p><br/></p><p>&lt;form id=&quot;saveReportForm&quot; action=&quot;saveReport.htm&quot; method=&quot;post&quot; onsubmit=&quot;return saveReport();&quot;&gt;&nbsp;</p><p>&nbsp; &nbsp; &lt;input type=&quot;submit&quot; value=&quot;保存报告&quot;/&gt;&nbsp;</p><p>---------------------&nbsp;</p><p>作者：haha_ying_haha&nbsp;</p><p>来源：CSDN&nbsp;</p><p>原文：https://blog.csdn.net/u013594477/article/details/79259320&nbsp;</p><p>版权声明：本文为博主原创文章，转载请附上博文链接！</p><p>版权声明：本文为博主原创文章，未经博主允许不得转载。 https://blog.csdn.net/u013594477/article/details/79259320</p><p>解决方案：将数据提交到saveReport（form的action指向）页面，但是页面又不进行跳转，即保持当前页面不变呢？利用jquery的ajaxSubmit函数以及form的onsubmit函数完成</p><p>一般的写法为：</p><p><br/></p><p>&lt;form action=&quot;saveReport.htm&quot; method=&quot;post&quot;&gt;&nbsp;</p><p>……&nbsp;</p><p>&lt;input type=&quot;submit&quot; value=&quot;保存报告&quot;/&gt;&nbsp;</p><p>&lt;/form&gt;&nbsp;</p><p>1</p><p>2</p><p>3</p><p>4</p><p>点击submit按钮或直接回车可以将数据提交到saveReport页面，但是提交后也会跳转到saveReport页面 ，如何做到&nbsp;</p><p>将数据提交到saveReport（form的action指向）页面，但是页面又不进行跳转，即保持当前页面不变呢？？</p><p><br/></p><p>利用jquery的ajaxSubmit函数以及form的onsubmit函数完成，如下：</p><p><br/></p><p>&lt;form id=&quot;saveReportForm&quot; action=&quot;saveReport.htm&quot; method=&quot;post&quot; onsubmit=&quot;return saveReport();&quot;&gt;&nbsp;</p><p>&nbsp; &nbsp; &lt;input type=&quot;submit&quot; value=&quot;保存报告&quot;/&gt;&nbsp;</p><p>---------------------&nbsp;</p><p>作者：haha_ying_haha&nbsp;</p><p>来源：CSDN&nbsp;</p><p>原文：https://blog.csdn.net/u013594477/article/details/79259320&nbsp;</p><p>版权声明：本文为博主原创文章，转载请附上博文链接！</p><p><br/></p>', '2019-05-29 11:33:00', '/blogImg/toppic01.jpg', 1, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (10, '最新改的呢', 'sumtudou', '我是简介', '<p>我是正文部分，目前没写</p>', '2019-06-20 07:37:00', '/blogImg/zd01.jpg', 1, 1, 0, 2, NULL, 0);
INSERT INTO `article` VALUES (35, '啊啊啊啊啊啊啊啊啊啊啊·', 'sumtudou', '2222222222222222222', '<p>\n    <img src=\"/ueditor/php/upload/image/20190531/1559312175123113.png\" title=\"1559312175123113.png\" alt=\"22.png\"/>\n</p>', '2019-05-31 10:16:00', '/ueditor/php/upload/image/20190531/1559312175123113.png', 1, 1, 0, 0, NULL, 1);
INSERT INTO `article` VALUES (36, '最新', 'sumtudou', '2222', '<p>\n    <img src=\"/ueditor/php/upload/image/20190531/1559312568616129.png\" title=\"1559312568616129.png\" alt=\"ww.png\"/>\n</p>', '2019-05-31 10:23:00', 'src=\"/ueditor/php/upload/image/20190531/1559312568616129.png', 1, 1, 0, 0, NULL, 3);
INSERT INTO `article` VALUES (37, 'aaaaaaaaaaaa', 'sumtudou', 'sssss', '<p>fddddddddddddffffffffffffffffffffff</p>', '2019-06-02 09:00:00', 'gsdgvdvdv', 1, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (44, '222222222333311', 'sumtudou', '111111111', '<p>wssssssssssss</p>', '2019-06-05 06:29:00', '2222222222', 1, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (45, '333333333', 'sumtudou', '44444', '<p>ffffffffffffffffffff</p>', '2019-06-05 18:30:00', '', 0, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (46, '3zuixjsssjjj', 'sumtudou', '44444', '<p>ffffffffffffffffffff</p>', '2019-06-05 07:09:00', '', 0, 1, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (17, 'wwwqqqqqqq', 'sumtudou', 'fffffaaaaaaaaa', '<p>gfdsgergaefdsgs<img src=\"/ueditor/php/upload/image/20190506/1557128466431049.jpeg\" title=\"1557128466431049.jpeg\" alt=\"back.jpeg\"/></p>', '2019-06-10 07:30:00', '/ueditor/php/upload/image/20190506/1557128466431049.jpeg', 1, 0, 0, 0, NULL, 0);
INSERT INTO `article` VALUES (48, 'qqqqqqqqqqqq', 'sumtudou', 'wwwwwwwwwww', '<p>fffffffffffffddddddddddd<img src=\"/ueditor/php/upload/image/20190610/1560166407137822.png\" title=\"1560166407137822.png\" alt=\"T6F`T(XDE$FP4C[[VPZT`CB.png\"/></p>', '2019-06-10 07:33:00', '/ueditor/php/upload/image/20190610/1560166407137822.png', 1, 1, 0, 1, NULL, 1);

-- ----------------------------
-- Table structure for jobchange
-- ----------------------------
DROP TABLE IF EXISTS `jobchange`;
CREATE TABLE `jobchange`  (
  `pid` int(11) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `newjob` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `depart` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `newdepart` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `money` int(11) NOT NULL,
  `newmoney` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `newname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobchange
-- ----------------------------
INSERT INTO `jobchange` VALUES (8, 1, '临时员工', '正式员工', '手一部', '手扶拖拉机部', 500, 2000, '手三', '手三');
INSERT INTO `jobchange` VALUES (8, 2, '正式员工', '正式员工', '手扶拖拉机部', '手扶拖拉机部', 2000, 3000, '手三', '手三');
INSERT INTO `jobchange` VALUES (12, 3, '部门经理', '部门经理', '母猪配种及产后护理部', '母猪配种及产后护理部', 20000, 20000, '王俊凯', '王俊谦');

-- ----------------------------
-- Table structure for leavemsg
-- ----------------------------
DROP TABLE IF EXISTS `leavemsg`;
CREATE TABLE `leavemsg`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 47 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of leavemsg
-- ----------------------------
INSERT INTO `leavemsg` VALUES (1, 'haha', '哇，博主好帅，我要给博主生猴子', '2392998472@qq.com', '2019-06-04 21:39:45');
INSERT INTO `leavemsg` VALUES (2, '王俊谦', '真的好帅耶，但是没有王俊谦帅啊。', '2392998472@qq.com', '2019-06-04 21:47:28');
INSERT INTO `leavemsg` VALUES (27, '博主的小迷妹', '哇哇哇，博主真是帅。', '', '2019-06-05 19:25:41');
INSERT INTO `leavemsg` VALUES (37, 'gggg', '<p>核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲核发的沙拉酱和发生大可视对讲</p>', '', '2019-06-10 23:49:29');
INSERT INTO `leavemsg` VALUES (36, 'gggg', 'hhhh<img src=\"http://localhost/static/layui/layui/images/face/1.gif\" alt=\"[嘻嘻]\">ddddddddddddddddddddddddddddddddddddddsssssssssssssssssssssssssssssssssssssssssssaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaffffffffffffffffffffffffffffffffffffddddddddddddd', '', '2019-06-10 23:49:10');
INSERT INTO `leavemsg` VALUES (35, 'gggg', 'hhhh<img src=\"http://localhost/static/layui/layui/images/face/1.gif\" alt=\"[嘻嘻]\">', '', '2019-06-10 23:48:07');
INSERT INTO `leavemsg` VALUES (38, 'gggg', '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', '', '2019-06-10 23:49:48');
INSERT INTO `leavemsg` VALUES (39, 'gggg', '<p>一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一一</p>', '', '2019-06-10 23:50:05');
INSERT INTO `leavemsg` VALUES (40, 'gggg', '<p>一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五一二三四五</p>', '', '2019-06-10 23:50:22');
INSERT INTO `leavemsg` VALUES (41, 'gggg', '<p>11111111111</p>', '', '2019-06-10 23:50:48');
INSERT INTO `leavemsg` VALUES (42, 'fdsfsd', '毒贩夫妇付付付付付付付多所所<img src=\"http://localhost/static/layui/layui/images/face/42.gif\" alt=\"[抓狂]\">', '', '2019-06-10 23:52:19');
INSERT INTO `leavemsg` VALUES (43, 'fdsfsd', '111111111111111', '', '2019-06-10 23:52:27');
INSERT INTO `leavemsg` VALUES (44, 'qqq', 'ddddddddddddd', '', '2019-06-10 23:52:39');
INSERT INTO `leavemsg` VALUES (45, 'qqqfff', 'ggggggggggggg', '', '2019-06-10 23:52:46');
INSERT INTO `leavemsg` VALUES (46, 'zhouencai1', '李杰最帅了', '', '2019-06-10 23:53:03');

-- ----------------------------
-- Table structure for padmin
-- ----------------------------
DROP TABLE IF EXISTS `padmin`;
CREATE TABLE `padmin`  (
  `id` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of padmin
-- ----------------------------
INSERT INTO `padmin` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `padmin` VALUES ('root', '63a9f0ea7bb98050796b649e85481845');

-- ----------------------------
-- Table structure for pdepart
-- ----------------------------
DROP TABLE IF EXISTS `pdepart`;
CREATE TABLE `pdepart`  (
  `departid` int(11) NOT NULL,
  `dname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `departsum` int(11) NOT NULL,
  `manager` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`departid`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pdepart
-- ----------------------------
INSERT INTO `pdepart` VALUES (10003, '母猪配种及产后护理部', 3, '王俊谦', 3);
INSERT INTO `pdepart` VALUES (10001, '挖掘机部', 3, '江青山', 1);
INSERT INTO `pdepart` VALUES (10002, '手扶拖拉机部', 4, '周恩财', 2);

-- ----------------------------
-- Table structure for puser
-- ----------------------------
DROP TABLE IF EXISTS `puser`;
CREATE TABLE `puser`  (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `ppassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '123456',
  `departid` int(11) NOT NULL,
  `job` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `money` int(11) NOT NULL,
  `pname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `psex` int(11) NOT NULL,
  `pbirthday` date NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `departname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`pid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of puser
-- ----------------------------
INSERT INTO `puser` VALUES (1, '123456', 10001, '部门经理', 20000, '江青山', 1, '1990-02-13', '18456321459', '挖掘机部');
INSERT INTO `puser` VALUES (2, '123456', 10002, '部门经理', 20000, '周恩财', 1, '1996-01-23', '18710659057', '手扶拖拉机部	');
INSERT INTO `puser` VALUES (4, '123456', 10001, '正式员工', 3000, '挖一', 1, '1979-12-30', '18390215593', '挖掘机部');
INSERT INTO `puser` VALUES (5, '123456', 10001, '正式员工', 3000, '挖二', 1, '1980-01-19', '14785236954', '挖掘机部');
INSERT INTO `puser` VALUES (14, '123456', 10002, '正式员工', 5000, '李铁柱', 1, '1989-01-25', '18390215593', '手扶拖拉机部');
INSERT INTO `puser` VALUES (8, '123456', 10002, '正式员工', 3000, '手三', 1, '1988-01-21', '147234678523', '手扶拖拉机部');
INSERT INTO `puser` VALUES (10, '123456', 10003, '正式员工', 3000, '母二', 0, '1921-01-21', '138234254523', '母猪配种及产后护理部');
INSERT INTO `puser` VALUES (15, '123456', 10003, '正式员工', 3000, '王麻子', 1, '1980-01-21', '18878965426', '母猪配种及产后护理部');
INSERT INTO `puser` VALUES (12, '123456', 10003, '部门经理', 20000, '王俊谦', 1, '1961-01-21', '138234254567', '母猪配种及产后护理部');

-- ----------------------------
-- Table structure for recruit
-- ----------------------------
DROP TABLE IF EXISTS `recruit`;
CREATE TABLE `recruit`  (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sex` int(255) NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hopedepart` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `birthday` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hopemoney` int(11) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of recruit
-- ----------------------------
INSERT INTO `recruit` VALUES (19, '技术篇', 1, '147852369', '手一部', '1980-01-08', 2000, '是有任何备用胎的这个1');

-- ----------------------------
-- Table structure for reward
-- ----------------------------
DROP TABLE IF EXISTS `reward`;
CREATE TABLE `reward`  (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `reason` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reward
-- ----------------------------
INSERT INTO `reward` VALUES (7, 8, '连续加班一个月', '奖励人民币5000元', '2019-01-01');

-- ----------------------------
-- Table structure for train
-- ----------------------------
DROP TABLE IF EXISTS `train`;
CREATE TABLE `train`  (
  `pid` int(11) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `begin` datetime NOT NULL,
  `end` datetime NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of train
-- ----------------------------
INSERT INTO `train` VALUES (1, 4, '2019-01-01 00:00:00', '2019-01-02 00:00:00', '挖掘机的基本使用方式', '江青山');
INSERT INTO `train` VALUES (2, 5, '2019-01-01 00:00:00', '2019-01-10 00:00:00', '手扶拖拉机的正确使用步骤', '周恩财');

SET FOREIGN_KEY_CHECKS = 1;
