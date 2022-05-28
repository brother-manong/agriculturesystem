/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : messageboard

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 27/10/2021 14:07:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for binghai
-- ----------------------------
DROP TABLE IF EXISTS `binghai`;
CREATE TABLE `binghai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` text CHARACTER SET gbk COLLATE gbk_chinese_ci NULL,
  `bname` varchar(255) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `bimage` varchar(255) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `shijian` datetime NOT NULL,
  `zhengzhuang` varchar(1000) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `fangzhi` varchar(1000) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = gbk COLLATE = gbk_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of binghai
-- ----------------------------
INSERT INTO `binghai` VALUES (1, '101', '脐腐病', 'upload/1.jpg', '2021-10-04 16:07:03', '番茄果实的底部出现凹陷并有腐烂的斑点，然后逐渐腐烂。', '可以在土壤中拌入一定的石灰，以改善土壤的PH值以及补充一定的钙元素；另外不要过度施氮肥，高氮的肥料会使土壤板结而导致钙也无法被番茄吸收。');
INSERT INTO `binghai` VALUES (2, '102', '裂果', 'upload/2.jpg', '2021-10-09 14:06:09', '快成熟的番茄从果蒂的根部开始逐渐开裂，开裂的番茄必须摘到，不然容易吸引昆虫，也容易感染其它果实。', '挑选一些优质的不易开裂的番茄品种，另外在番茄结果时控制好浇水频率，多雨季节要注意防涝。');
INSERT INTO `binghai` VALUES (3, '103', '烟草花叶病', 'upload/3.jpg', '2021-10-09 14:06:48', '患有烟草花叶病的番茄叶子会呈现黄、绿交替的性状，绿色的叶片也可能会变鼓或者是起泡。', '如果你吸烟的话，在接触番茄时必须彻底把手清洗干净，目前烟草花叶病没有彻底的根治方法，如果一旦番茄感染，就必须铲除植株会销毁，并且避免在同一区域再种植番茄。');
INSERT INTO `binghai` VALUES (4, '104', '炭疽病', 'upload/4.jpg', '2021-10-09 14:08:39', '炭疽病是一种非常严重的传染性病害，它可以通过番茄成熟的果实以及叶子上面的斑点来辨别，传染很快。', '一旦发生感染要把植株多菜园中移除并销毁，另外每年秋季的一些枯枝枯叶都需要处理掉。');
INSERT INTO `binghai` VALUES (5, '105', '枯萎病', 'upload/5.jpg', '2021-10-09 14:09:16', '番茄枯萎病主要由两种真菌感染（镰刀菌和轮枝菌），这两种真菌会导致番茄的叶子枯萎、变黄、死亡。', '镰刀菌和轮枝菌从土壤中消失需要4-6年的时间，因此需要把番茄移到其它的地方。');
INSERT INTO `binghai` VALUES (6, '106', '叶斑病', 'upload/6.jpg', '2021-10-09 14:12:01', '叶斑病也是一种真菌感染造成的疾病，感染叶班病的番茄它的叶片上会出现棕色至黑色的斑点，并最终脱落而影响番茄的正常光合作用。', '保持番茄植株之间的通风，在种植番茄的时候保留足够的间距，另外浇水的时候要避免浇到叶片，可以采用根灌或者是用塑料花天薄膜覆盖地表，也能够提高番茄抗病性。');

-- ----------------------------
-- Table structure for chat_message
-- ----------------------------
DROP TABLE IF EXISTS `chat_message`;
CREATE TABLE `chat_message`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT '用户id',
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '聊天内容',
  `img` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isDelete` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no' COMMENT '软删除',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 78 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '聊天信息' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chat_message
-- ----------------------------
INSERT INTO `chat_message` VALUES (67, 1, '你好你好', 'chatimg/1.jpg', 'no');
INSERT INTO `chat_message` VALUES (66, 2, '你好', 'chatimg/1.jpg', 'no');
INSERT INTO `chat_message` VALUES (68, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (69, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (70, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (71, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (72, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (73, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (74, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (75, 2, '111', '', 'yes');
INSERT INTO `chat_message` VALUES (76, 2, '请问你有什么问题呢？', '', 'no');
INSERT INTO `chat_message` VALUES (77, 2, '是害虫方面还是病害方面呢', '', 'no');

-- ----------------------------
-- Table structure for chat_user
-- ----------------------------
DROP TABLE IF EXISTS `chat_user`;
CREATE TABLE `chat_user`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `userPass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '用户密码',
  `userIcon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '用户头像',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '聊天用户' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chat_user
-- ----------------------------
INSERT INTO `chat_user` VALUES (1, 'admin', 'admin', '暗黑修女梅丽莎_icon.png');
INSERT INTO `chat_user` VALUES (2, 'jack', '123456', '八神庵_icon.png');

-- ----------------------------
-- Table structure for chonghai
-- ----------------------------
DROP TABLE IF EXISTS `chonghai`;
CREATE TABLE `chonghai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` text CHARACTER SET gbk COLLATE gbk_chinese_ci NULL,
  `cname` varchar(255) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `cimage` varchar(255) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `shijian` datetime NOT NULL,
  `zhengzhuang` varchar(1000) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `fangzhi` varchar(1000) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = gbk COLLATE = gbk_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of chonghai
-- ----------------------------
INSERT INTO `chonghai` VALUES (1, '201', '根结线虫病', 'upload/1.jpg', '2019-12-11 00:00:00', '根结线虫病是番茄的一种重要根部病害。在棚室中发生较重。发病田块植株生长缓慢，严重影响果实品质和产量，减量可达30～50%，有的甚至造成绝产。番茄根结线虫病主要危害番茄根部，从苗期到成株期均可造成为害。', '　1、无土栽培番茄不仅杜绝了虫源，同时又可减少土传病害的发生。轮作2～3年，降低土中根结线虫量；重病田与禾本科作物轮作效果好，尤其是水旱轮作。根结线虫多分布在3～9cm表土层，将土壤深翻25～30cm，把虫卵翻入深层。收获后，条件允许时，可灌水淹地几个月。\r\n\r\n　　2、在前茬作物清田后，结合翻耕每亩用10%阿维菌素悬浮剂1000~1500毫升对水60~75千克均匀喷洒，或撒施1.8%根线散（阿维菌素）微胶囊缓施颗粒1~2千克精耕细耙，利用高温季节的晴好天气密闭棚膜7~10天，可有效防止根结线虫病对棚内蔬菜的为害。\r\n\r\n　　3、科学施肥，利用根结线虫喜欢酸性土壤的特性，结合整地对土壤酸化的地块，每亩撒施生石灰100~150千克，调节土壤PH值，制约根结线虫的活动性，减轻根结线虫的为害；在施用有机肥及动物粪便前要进行高温发酵，充分发酵腐熟后再施用。');
INSERT INTO `chonghai` VALUES (2, '202', '瓜蚜', 'upload/2.jpg', '2021-10-09 14:19:26', '为害茄果类蔬菜的蚜虫主要是瓜蚜。成虫和若虫在瓜叶背面和嫩梢、嫩茎上吸食汁液。嫩叶及生长点被害后，叶片卷缩，生长停滞，甚至全株萎蔫死亡；老叶受害时不卷缩，但提前干枯。', '用2.5%溴氰菊酯乳油2000～3000倍喷雾，安全间隔期2天或10%吡虫啉可湿性粉剂2000～3000倍喷雾，安全间隔期7天。');
INSERT INTO `chonghai` VALUES (3, '203', '白粉虱', 'upload/3.jpg', '2021-10-09 14:21:33', '。白粉虱成虫和若虫吸食蔬菜汁液，被害叶片褪绿、变黄、萎蔫，甚至全株枯死。此外，由于其繁殖力强，繁殖速度快，种群数量庞大，群聚为害，并分泌大量蜜液，严重污染叶片和果实，往往引起煤污病的大发生，使蔬菜失去商品价值。', '用2.5%联苯菊酯乳油3000倍喷雾，安全间隔期4天。');
INSERT INTO `chonghai` VALUES (4, '204', '潜叶蝇', 'upload/4.jpg', '2021-10-09 14:22:32', '嗜食番茄、瓜类、莴苣和豆类，是杂食性害虫。幼虫孵化后潜食叶肉，呈曲折蜿蜒的食痕，苗期2~7叶受害多，严重的潜痕密布，致叶片发黄、枯焦或脱落，使植株发育退出，甚至使作物致死。', '用1.8%齐墩螨素乳油2000～3000倍喷雾，安全间隔期7天。');

-- ----------------------------
-- Table structure for liuyan
-- ----------------------------
DROP TABLE IF EXISTS `liuyan`;
CREATE TABLE `liuyan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `content` varchar(1000) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = gbk COLLATE = gbk_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of liuyan
-- ----------------------------
INSERT INTO `liuyan` VALUES (1, '魏欣', 1858206343, '你的名字');
INSERT INTO `liuyan` VALUES (2, '张三', 1666666666, '菜叶有蚜虫，喷洒杀虫剂无效，怎么回事呢？');
INSERT INTO `liuyan` VALUES (3, '李四', 123456789, '菜虫对杀虫剂免疫力怎么办？');
INSERT INTO `liuyan` VALUES (4, '王麻子', 189666222, '叶子有很多虫洞');

-- ----------------------------
-- Table structure for lolhero
-- ----------------------------
DROP TABLE IF EXISTS `lolhero`;
CREATE TABLE `lolhero`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `heroName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `iconUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 142 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of lolhero
-- ----------------------------
INSERT INTO `lolhero` VALUES (1, '派克', 'http://img4.dwstatic.com/lol/1809/401384353295/1537429162285.png');
INSERT INTO `lolhero` VALUES (2, '卡莎', 'http://img3.dwstatic.com/lol/1804/387389921796/1523593002068.png');
INSERT INTO `lolhero` VALUES (3, '佐伊', 'http://img2.dwstatic.com/lol/1712/376328607492/1512373414710.jpg');
INSERT INTO `lolhero` VALUES (4, '奥恩', 'http://img2.dwstatic.com/lol/1805/389357632840/1525402436139.png');
INSERT INTO `lolhero` VALUES (5, '凯隐', 'http://img1.dwstatic.com/lol/1809/401447870467/1537492678259.png');
INSERT INTO `lolhero` VALUES (6, '霞', 'http://img1.dwstatic.com/lol/1809/401447870467/1537492678329.png');
INSERT INTO `lolhero` VALUES (7, '洛', 'http://img2.dwstatic.com/lol/1809/401447870467/1537492678399.png');
INSERT INTO `lolhero` VALUES (8, '卡蜜尔', 'http://img3.dwstatic.com/lol/1809/401386725929/1537431594819.png');
INSERT INTO `lolhero` VALUES (9, '艾翁', 'http://img1.dwstatic.com/lol/1609/338393194134/1474437997425.png');
INSERT INTO `lolhero` VALUES (10, '克烈', 'http://img2.dwstatic.com/lol/1809/401448103802/1537493086901.png');
INSERT INTO `lolhero` VALUES (11, '塔莉垭', 'http://img4.dwstatic.com/lol/1605/328023671635/1464068536867.png');
INSERT INTO `lolhero` VALUES (12, '索尔', 'http://img.dwstatic.com/lol/1809/401447870467/1537492678211.png');
INSERT INTO `lolhero` VALUES (13, '烬', 'http://img4.dwstatic.com/lol/1602/320083658274/1456128461876.png');
INSERT INTO `lolhero` VALUES (14, '俄洛伊', 'http://img3.dwstatic.com/lol/1511/311181024943/1447226977586.png');
INSERT INTO `lolhero` VALUES (15, '千珏', 'http://img3.dwstatic.com/lol/1509/306348781099/1442393587190.jpg');
INSERT INTO `lolhero` VALUES (16, '塔姆', 'http://img3.dwstatic.com/lol/1809/401448103802/1537493016569.png');
INSERT INTO `lolhero` VALUES (17, '艾克', 'http://img5.dwstatic.com/lol/1809/401448103802/1537493016470.png');
INSERT INTO `lolhero` VALUES (18, '巴德', 'http://img5.dwstatic.com/lol/1503/289477079770/1425521886799.jpg');
INSERT INTO `lolhero` VALUES (19, '雷克赛', 'http://img3.dwstatic.com/lol/1412/281530572893/1417575385364.jpg');
INSERT INTO `lolhero` VALUES (20, '卡莉丝塔', 'http://img4.dwstatic.com/lol/1411/279641746944/1415686553224.jpg');
INSERT INTO `lolhero` VALUES (21, '阿兹尔', 'http://img3.dwstatic.com/lol/1409/273519298897/1409564119766.jpg');
INSERT INTO `lolhero` VALUES (22, '纳尔', 'http://img.dwstatic.com/lol/1408/273091424599/1409136231951.png');
INSERT INTO `lolhero` VALUES (23, '布隆', 'http://img2.dwstatic.com/lol/1809/401386725929/1537431594752.png');
INSERT INTO `lolhero` VALUES (24, '维克兹', 'http://img.dwstatic.com/lol/1402/256326391926/1392371196098.jpg');
INSERT INTO `lolhero` VALUES (25, '亚索', 'http://img3.dwstatic.com/lol/1311/249491473153/1385536285032.png');
INSERT INTO `lolhero` VALUES (26, '金克丝', 'http://img4.dwstatic.com/lol/1310/245353650426/1381398467886.png');
INSERT INTO `lolhero` VALUES (27, '卢锡安', 'http://img5.dwstatic.com/lol/1308/240574668479/1376619482925.png');
INSERT INTO `lolhero` VALUES (28, '亚托克斯', 'http://img1.dwstatic.com/lol/1809/401385892592/1537430699759.png');
INSERT INTO `lolhero` VALUES (29, '丽桑卓', 'http://img1.dwstatic.com/lol/1305/231871544650/231871561051.png');
INSERT INTO `lolhero` VALUES (30, '扎克', 'http://img2.dwstatic.com/lol/1303/228242985967/228242993255.png');
INSERT INTO `lolhero` VALUES (31, '奎因', 'http://img3.dwstatic.com/lol/1302/225381420352/225382419902.png');
INSERT INTO `lolhero` VALUES (32, '锤石', 'http://img5.dwstatic.com/lol/1301/222714364061/222714396868.png');
INSERT INTO `lolhero` VALUES (33, '蔚', 'http://pic.duowan.com/lol/1212/219251307713/219251317038.png');
INSERT INTO `lolhero` VALUES (34, '娜美', 'http://pic.duowan.com/lol/1211/218041518261/218041566099.jpg');
INSERT INTO `lolhero` VALUES (35, '劫', 'http://pic.duowan.com/lol/1211/216813960863/216813987373.jpg');
INSERT INTO `lolhero` VALUES (36, '伊莉丝', 'http://pic.duowan.com/lol/1210/215627370104/215627419666.png');
INSERT INTO `lolhero` VALUES (37, '卡兹克', 'http://pic3.duowan.com/lol/1209/212665448739/212665677660.jpg');
INSERT INTO `lolhero` VALUES (38, '辛德拉', 'http://pic.duowan.com/lol/1208/210247342385/210247356941.png\r\n');
INSERT INTO `lolhero` VALUES (39, '雷恩加尔', 'http://img4.dwstatic.com/lol/1411/279647578275/1415693006769.png');
INSERT INTO `lolhero` VALUES (40, '黛安娜', 'http://pic.duowan.com/lol/1208/207845244716/207847215830.jpg');
INSERT INTO `lolhero` VALUES (41, '婕拉', 'http://pic.duowan.com/lol/1207/207224467449/207225320108.png');
INSERT INTO `lolhero` VALUES (42, '杰斯', 'http://pic.duowan.com/lol/1207/205773506081/205773517075.png');
INSERT INTO `lolhero` VALUES (43, '德莱文', 'http://pic1.duowan.com/lol/1206/202991040456/203015268342.gif');
INSERT INTO `lolhero` VALUES (44, '德莱厄斯', 'http://img2.dwstatic.com/lol/1605/327431848757/1463477081676.png');
INSERT INTO `lolhero` VALUES (45, '韦鲁斯', 'http://pic.duowan.com/lol/1204/198079462173/198079477246.jpg');
INSERT INTO `lolhero` VALUES (46, '赫卡里姆', 'http://img.dwstatic.com/lol/1305/231871544650/231872989399.png');
INSERT INTO `lolhero` VALUES (47, '璐璐', 'http://pic.duowan.com/lol/1203/196696818878/196703018435.png');
INSERT INTO `lolhero` VALUES (48, '菲奥娜', 'http://img4.dwstatic.com/lol/1508/304453491146/1440498302852.png');
INSERT INTO `lolhero` VALUES (49, '诺提勒斯', 'http://pic.duowan.com/lol/1202/193328146015/193333009937.gif');
INSERT INTO `lolhero` VALUES (50, '吉格斯', 'http://pic.duowan.com/lol/1202/192131965665/192131975792.gif');
INSERT INTO `lolhero` VALUES (51, '瑟庄妮', 'http://img5.dwstatic.com/lol/1305/231871544650/231872781396.png');
INSERT INTO `lolhero` VALUES (52, '维克托', 'http://img.dwstatic.com/lol/1410/278074218098/1414119027670.png');
INSERT INTO `lolhero` VALUES (53, '阿狸', 'http://img2.dwstatic.com/lol/1605/327431848757/1463477114973.png');
INSERT INTO `lolhero` VALUES (54, '沃利贝尔 ', 'http://pic.duowan.com/lol/1111/186599851229/186599920512.jpg');
INSERT INTO `lolhero` VALUES (55, '菲兹', 'http://pic.duowan.com/lol/1111/185550440004/185552341067.gif');
INSERT INTO `lolhero` VALUES (56, '希瓦娜', 'http://img5.dwstatic.com/lol/1409/275653745481/1411698550859.png');
INSERT INTO `lolhero` VALUES (57, '格雷福斯', 'http://img4.dwstatic.com/lol/1411/279647578275/1415692717334.png');
INSERT INTO `lolhero` VALUES (58, '泽拉斯', 'http://img1.dwstatic.com/lol/1310/246295394773/1382341114891.png');
INSERT INTO `lolhero` VALUES (59, '锐雯', 'http://img2.dwstatic.com/lol/1310/246296550427/1382341365723.png');
INSERT INTO `lolhero` VALUES (60, '泰隆', 'http://img4.dwstatic.com/lol/1411/279649187628/1415694426798.png');
INSERT INTO `lolhero` VALUES (61, '斯卡纳', 'http://pic3.duowan.com/lol/1108/178647387266/178647406694.jpg');
INSERT INTO `lolhero` VALUES (62, '悟空', 'http://img5.dwstatic.com/lol/1411/279649187628/1415694802272.png');
INSERT INTO `lolhero` VALUES (63, '蕾欧娜', 'http://img.dwstatic.com/lol/1809/401385892592/1537431024361.png');
INSERT INTO `lolhero` VALUES (64, '约里克', 'http://img1.dwstatic.com/lol/1608/335991104611/1472035909137.png');
INSERT INTO `lolhero` VALUES (65, '布兰德', 'http://img3.dwstatic.com/lol/1305/231871544650/231873147386.png');
INSERT INTO `lolhero` VALUES (66, '兰博', 'http://img1.dwstatic.com/lol/1411/279647578275/1415693077770.png');
INSERT INTO `lolhero` VALUES (67, '薇恩', 'http://img.dwstatic.com/lol/1809/401386725929/1537431594689.png');
INSERT INTO `lolhero` VALUES (68, '奥莉安娜', 'http://img3.dwstatic.com/lol/1410/277214494112/1413259306099.png');
INSERT INTO `lolhero` VALUES (69, '娑娜', 'http://img2.dwstatic.com/lol/1310/246295394773/1382341114754.png');
INSERT INTO `lolhero` VALUES (70, '斯维因', 'http://img.dwstatic.com/lol/1809/401386725929/1537431594888.png');
INSERT INTO `lolhero` VALUES (71, '拉克丝', 'http://img3.dwstatic.com/lol/1407/269888611908/1405934522153.png');
INSERT INTO `lolhero` VALUES (72, '乐芙兰', 'http://img4.dwstatic.com/lol/1305/231871544650/231873618947.png');
INSERT INTO `lolhero` VALUES (73, '艾瑞莉亚', 'http://img1.dwstatic.com/lol/1804/387389921796/1523592968266.png');
INSERT INTO `lolhero` VALUES (74, '特朗德尔', 'http://img5.dwstatic.com/lol/1305/231871544650/231872653626.png');
INSERT INTO `lolhero` VALUES (75, '卡西奥佩娅', 'http://img5.dwstatic.com/lol/1409/275654100149/1411698909355.png');
INSERT INTO `lolhero` VALUES (76, '凯特琳', 'http://img4.dwstatic.com/lol/1407/269517769163/1405562576193.png');
INSERT INTO `lolhero` VALUES (77, '雷克顿', 'http://img5.dwstatic.com/lol/1409/275654100149/1411698914143.png');
INSERT INTO `lolhero` VALUES (78, '李青', 'http://img4.dwstatic.com/lol/1809/401385892592/1537430814373.png');
INSERT INTO `lolhero` VALUES (79, '卡尔玛', 'http://img3.dwstatic.com/lol/1310/246296550427/1382341365785.png');
INSERT INTO `lolhero` VALUES (80, '茂凯', 'http://img.dwstatic.com/lol/1608/333990023252/1470034827234.jpg');
INSERT INTO `lolhero` VALUES (81, '嘉文四世', 'http://img.dwstatic.com/lol/1411/279647578275/1415692869825.png');
INSERT INTO `lolhero` VALUES (82, '魔腾', 'http://img4.dwstatic.com/lol/1412/282065522028/1418110347375.jpg');
INSERT INTO `lolhero` VALUES (83, '厄运女郎', 'http://img1.dwstatic.com/lol/1407/269888611908/1405934761751.png');
INSERT INTO `lolhero` VALUES (84, '厄加特', 'http://img1.dwstatic.com/lol/1809/401385892592/1537430932088.png');
INSERT INTO `lolhero` VALUES (85, '加里奥', 'http://img.dwstatic.com/lol/1809/401385892592/1537430932016.png');
INSERT INTO `lolhero` VALUES (86, '弗拉基米尔', 'http://img2.dwstatic.com/lol/1407/269888611908/1405934827815.png');
INSERT INTO `lolhero` VALUES (87, '赵信', 'http://img3.dwstatic.com/lol/1809/401385892592/1537430931956.png');
INSERT INTO `lolhero` VALUES (88, '瑞兹', 'undefined');
INSERT INTO `lolhero` VALUES (89, '卡特琳娜', 'http://img3.dwstatic.com/lol/1605/327431848757/1463476917030.png');
INSERT INTO `lolhero` VALUES (90, '科加斯', 'http://img2.dwstatic.com/lol/1809/401388774348/1537433652031.png');
INSERT INTO `lolhero` VALUES (91, '努努', 'http://img.dwstatic.com/lol/1809/401385892592/1537430699644.png');
INSERT INTO `lolhero` VALUES (92, '阿木木', 'http://img1.dwstatic.com/lol/1408/271538842297/1407583646022.png');
INSERT INTO `lolhero` VALUES (93, '维迦', 'http://img2.dwstatic.com/lol/1411/279649187628/1415694680759.png');
INSERT INTO `lolhero` VALUES (94, '辛吉德', 'http://img1.dwstatic.com/lol/1411/279649187628/1415694348156.png');
INSERT INTO `lolhero` VALUES (95, '泰达米尔', 'http://img3.dwstatic.com/lol/1407/269888611908/1405934286526.png');
INSERT INTO `lolhero` VALUES (96, '蒙多医生', 'http://pic3.duowan.com/lol/1205/200657192402/200657210773.png');
INSERT INTO `lolhero` VALUES (97, '普朗克', 'http://img2.dwstatic.com/lol/1605/327431848757/1463477233977.png');
INSERT INTO `lolhero` VALUES (98, '墨菲特', 'http://img.dwstatic.com/lol/1809/401385892592/1537430931853.png');
INSERT INTO `lolhero` VALUES (99, '希维尔', 'http://img2.dwstatic.com/lol/1410/278074218098/1414119108556.png');
INSERT INTO `lolhero` VALUES (100, '费德提克', 'http://img3.dwstatic.com/lol/1605/327431848757/1463476955213.png');
INSERT INTO `lolhero` VALUES (101, '凯尔', 'http://img5.dwstatic.com/lol/1411/279647578275/1415692934837.png');
INSERT INTO `lolhero` VALUES (102, '艾尼维亚', 'http://img3.dwstatic.com/lol/1605/327431848757/1463477136452.png');
INSERT INTO `lolhero` VALUES (103, '提莫', 'http://img2.dwstatic.com/lol/1310/246295394773/1382341114833.png');
INSERT INTO `lolhero` VALUES (104, '艾希', 'http://img2.dwstatic.com/lol/1305/231871544650/231872031019.png');
INSERT INTO `lolhero` VALUES (105, '安妮', 'http://img.dwstatic.com/lol/1310/246296550427/1382341365515.png');
INSERT INTO `lolhero` VALUES (106, '崔丝塔娜', 'http://img5.dwstatic.com/lol/1605/327431848757/1463476681702.png');
INSERT INTO `lolhero` VALUES (107, '贾克斯', 'http://img3.dwstatic.com/lol/1310/246295394773/1382341114670.png');
INSERT INTO `lolhero` VALUES (108, '易', 'http://img4.dwstatic.com/lol/1310/246296550427/1382341588085.png');
INSERT INTO `lolhero` VALUES (109, '库奇', 'http://img2.dwstatic.com/lol/1310/246295394773/1382341114450.png');
INSERT INTO `lolhero` VALUES (110, '阿利斯塔', 'http://img4.dwstatic.com/lol/1501/285778790953/1421825277654.jpg');
INSERT INTO `lolhero` VALUES (111, '布里茨', 'http://img2.dwstatic.com/lol/1411/279731654279/1415781858743.png');
INSERT INTO `lolhero` VALUES (112, '索拉卡', 'http://img5.dwstatic.com/lol/1305/231871544650/231872754143.png');
INSERT INTO `lolhero` VALUES (113, '内瑟斯', 'http://img.dwstatic.com/lol/1405/264160344403/1400205147348.png');
INSERT INTO `lolhero` VALUES (114, '沃里克', 'http://img.dwstatic.com/lol/1605/327431848757/1463477413939.png');
INSERT INTO `lolhero` VALUES (115, '莫甘娜', 'http://img4.dwstatic.com/lol/1407/269888611908/1405934265741.png');
INSERT INTO `lolhero` VALUES (116, '拉莫斯', 'http://img5.dwstatic.com/lol/1605/327431848757/1463476821956.png');
INSERT INTO `lolhero` VALUES (117, '卡萨丁', 'http://img3.dwstatic.com/lol/1410/276710213760/1412756511788.png');
INSERT INTO `lolhero` VALUES (118, '赛恩', 'http://img4.dwstatic.com/lol/1410/277753050551/1413797864676.png');
INSERT INTO `lolhero` VALUES (119, '塔里克', 'http://img4.dwstatic.com/lol/1604/325604644560/1461649813559.png');
INSERT INTO `lolhero` VALUES (120, '迦娜', 'http://img5.dwstatic.com/lol/1809/401447870467/1537492678141.png');
INSERT INTO `lolhero` VALUES (121, '基兰', 'http://img1.dwstatic.com/lol/1411/279649187628/1415694905444.png');
INSERT INTO `lolhero` VALUES (122, '崔斯特', 'http://img.dwstatic.com/lol/1305/231871544650/231873225306.png');
INSERT INTO `lolhero` VALUES (123, '伊芙琳', 'http://img.dwstatic.com/lol/1605/327431848757/1463477047695.png');
INSERT INTO `lolhero` VALUES (124, '卡尔萨斯', 'http://img4.dwstatic.com/lol/1407/269606339574/1405651153711.png');
INSERT INTO `lolhero` VALUES (125, '图奇', 'http://img2.dwstatic.com/lol/1410/276710213760/1412756788167.jpg');
INSERT INTO `lolhero` VALUES (126, '萨科', 'http://img.dwstatic.com/lol/1411/279649187628/1415693994078.png');
INSERT INTO `lolhero` VALUES (127, '黑默丁格', 'http://img1.dwstatic.com/lol/1809/401386725929/1537431594580.png');
INSERT INTO `lolhero` VALUES (128, '阿卡丽', 'http://img5.dwstatic.com/lol/1809/401385892592/1537430699694.png');
INSERT INTO `lolhero` VALUES (129, '乌迪尔', 'http://img.dwstatic.com/lol/1411/279649187628/1415694612797.png');
INSERT INTO `lolhero` VALUES (130, '盖伦', 'http://img3.dwstatic.com/lol/1410/276707403146/1412752217106.png');
INSERT INTO `lolhero` VALUES (131, '凯南', 'http://img.dwstatic.com/lol/1605/327431848757/1463476890582.png');
INSERT INTO `lolhero` VALUES (132, '克格莫', 'http://img2.dwstatic.com/lol/1809/401447870467/1537492677897.png');
INSERT INTO `lolhero` VALUES (133, '玛尔扎哈', 'http://img.dwstatic.com/lol/1605/327431848757/1463476853235.png');
INSERT INTO `lolhero` VALUES (134, '莫德凯撒', 'http://img3.dwstatic.com/lol/1410/276710213760/1412755019210.jpg');
INSERT INTO `lolhero` VALUES (135, '奈德丽', 'http://img3.dwstatic.com/lol/1305/231871544650/231873517836.png');
INSERT INTO `lolhero` VALUES (136, '伊泽瑞尔', 'http://img.dwstatic.com/lol/1411/279647578275/1415692576539.png');
INSERT INTO `lolhero` VALUES (137, '古拉加斯', 'http://img3.dwstatic.com/lol/1411/279647578275/1415692632471.png');
INSERT INTO `lolhero` VALUES (138, '奥拉夫', 'http://img1.dwstatic.com/lol/1407/269888611908/1405934460434.png');
INSERT INTO `lolhero` VALUES (139, '潘森', 'http://img.dwstatic.com/lol/1407/269888611908/1405934598070.png');
INSERT INTO `lolhero` VALUES (140, '波比', 'http://img4.dwstatic.com/lol/1809/401447870467/1537492678044.png');
INSERT INTO `lolhero` VALUES (141, '慎', 'http://img5.dwstatic.com/lol/1411/279649187628/1415694139441.png');

-- ----------------------------
-- Table structure for pinfo
-- ----------------------------
DROP TABLE IF EXISTS `pinfo`;
CREATE TABLE `pinfo`  (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `password` varchar(10) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `name` varchar(30) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = gbk COLLATE = gbk_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pinfo
-- ----------------------------
INSERT INTO `pinfo` VALUES (1, 'qqq', 'qqq', 'qqq', NULL, NULL, '2021-09-30 10:13:14');

-- ----------------------------
-- Table structure for yinyang
-- ----------------------------
DROP TABLE IF EXISTS `yinyang`;
CREATE TABLE `yinyang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imageUrl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of yinyang
-- ----------------------------

-- ----------------------------
-- Table structure for zuowu
-- ----------------------------
DROP TABLE IF EXISTS `zuowu`;
CREATE TABLE `zuowu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` text CHARACTER SET gbk COLLATE gbk_chinese_ci NULL,
  `name` varchar(80) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `image` varchar(80) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `grow` varchar(1000) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL,
  `zhucang` varchar(1000) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = gbk COLLATE = gbk_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zuowu
-- ----------------------------
INSERT INTO `zuowu` VALUES (1, '101', '番茄', 'upload/1.jpg', '番茄是一种喜温性的蔬菜，在正常条件下，同化作用最适温度为20～25℃，根系生长最适土温为20～22℃。喜光，光饱和点为70000lx，适宜光照强度为30000～50000lx。也是短日照植物，番茄喜水，一般以土壤湿度60%～80%、空气湿度45%～50%为宜。\r\n番茄对土壤条件要求不太严苛，在土层深厚，排水良好，富含有机质的肥沃壤土生长良好。土壤酸碱度以pH6～7为宜。', '（一）一般贮藏\r\n\r\n使用通风贮藏库、地下室、防空洞、土窖等阴凉的地方，可以夏、秋两季得到较低的温度。把番茄装在浅筐或木箱中平放于地面，或将果实堆放在菜架上，每层架放2~3层果。贮藏过程中需要经常进行检查，挑选出已经完全成熟的果实或者不适合继续贮藏的果实这种方法可贮藏20~30天，可以作为调剂市场余缺、增加产值的有效手段。\r\n\r\n（二）气调贮藏\r\n\r\n如果需要长期的贮藏或者遇到高温天气，尤其是高品质的果实贮藏，适合选择气调贮藏。番茄气调垛的容量多为750~1000千克，也可达2000千克。由于番茄自然完熟速度很快，所以使用快速降氧法最佳。用薄膜封闭番茄时，容易导致垛内的温度升高，从而引发疾病。需设法降低温度，可用无水氯化钙或硅胶作吸湿剂，用防腐剂抑制病菌活动，目前较为普遍使用的气体是氯气，一般每3~4天喷施1次，每次的使用量约为垛内空气总体积的0.2%，但氯气有毒，使用不方便，过量时产生药害。北京等地使用0.5%的过氧乙酸，置盘中放到垛内，其效果和氯气类似。上海等地习惯用漂白粉作为氯气的替代品，一般148每1000千克的帐内每月施用0.5千克，有效期约10天。');

SET FOREIGN_KEY_CHECKS = 1;
