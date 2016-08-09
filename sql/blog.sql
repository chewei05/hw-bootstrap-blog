-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.11 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5083
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blog`;

-- Dumping structure for table blog.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `Index` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `Message` varchar(250) DEFAULT NULL COMMENT '內容',
  PRIMARY KEY (`Index`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='訊息';

-- Dumping data for table blog.messages: ~0 rows (approximately)
DELETE FROM `messages`;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`Index`, `Message`) VALUES
	(1, 'Test Successed! 測試成功！');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table blog.page
CREATE TABLE IF NOT EXISTS `page` (
  `Index` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `Heading` varchar(100) NOT NULL COMMENT '主標題',
  `SubHeading` varchar(100) DEFAULT NULL COMMENT '副標題',
  `Note` varchar(250) DEFAULT NULL COMMENT '備註',
  PRIMARY KEY (`Index`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='頁面';

-- Dumping data for table blog.page: ~1 rows (approximately)
DELETE FROM `page`;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` (`Index`, `Heading`, `SubHeading`, `Note`) VALUES
	(1, '最新公告', '最新消息及最新公告', NULL);
/*!40000 ALTER TABLE `page` ENABLE KEYS */;

-- Dumping structure for table blog.post
CREATE TABLE IF NOT EXISTS `post` (
  `Index` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `Title` varchar(100) NOT NULL COMMENT '文章標題',
  `AuthorIndex` int(10) unsigned NOT NULL COMMENT '作者編號',
  `PostDatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '發佈時間',
  `LastUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最後更新時間',
  `Content` longtext COMMENT '內容',
  `Note` varchar(250) DEFAULT NULL COMMENT '備註',
  PRIMARY KEY (`Index`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='文章';

-- Dumping data for table blog.post: ~2 rows (approximately)
DELETE FROM `post`;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`Index`, `Title`, `AuthorIndex`, `PostDatetime`, `LastUpdate`, `Content`, `Note`) VALUES
	(1, '8/4 PHP 框架Laravel 工作坊 上課注意事項', 1, '2016-08-03 19:16:35', '2016-08-09 19:43:16', '<p>各位學員大家好,</p>\r\n<p>提醒各位明日 8/4 要上課囉，請於 10:00 以前到達教室準備環境，以下提醒您相關的注意事項：</p>\r\n<ol>\r\n<li>因電腦教室每次開機後會重置環境，<wbr />請於每次參與課程時攜帶一個容量至少 2GB 的 USB 隨身碟，用來儲存實作成果。</li>\r\n<li>課程使用到的軟體、講義與素材位於：&nbsp;https://goo.gl/xxxxxxx，請於<span style="color: #c00000;">上課前下載於<wbr />隨身碟</span>或提前至電腦教室進行下載。</li>\r\n<li>本課程將使用 SourceTree 應用程式來學習 Git 版本控制系統，請先至&nbsp;<a style="color: #1155cc;" href="https://my.atlassian.com/" target="_blank" rel="nofollow" data-saferedirecturl="https://www.google.com/url?hl=zh-TW&amp;q=https://my.atlassian.com/&amp;source=gmail&amp;ust=1470828433749000&amp;usg=AFQjCNFv4WHcZkF9IiaJV3InOGoTX0-XmA">https://my.atlassian.com/</a>&nbsp;<span style="color: #c00000;">註冊帳號</span>以登入 SourceTree 應用程式。</li>\r\n<li>請參與學員先至 Github 平台<span style="color: #c00000;">註冊帳號</span>，並完成帳號認證。<wbr />請務必在參與課程前確認可成功登入。</li>\r\n<li>課程結束前請提供您Facebook的帳號，<wbr />用來邀請您加入課程群組進行討論之用。</li>\r\n<li>本課程提供代訂中餐服務，若有需要請記得於上課調查時提出，<wbr />電腦教室中不可飲水與用餐，<wbr />隔壁會議室將提供各位中午用餐與休息之用。</li>\r\n</ol>\r\n<p>轉載自電算中心承辦人</p>', NULL),
	(2, '8/4 第一次上課，上課筆記。', 1, '2016-08-04 14:23:00', '2016-08-09 19:43:27', '<ul>\r\n<li><span style="font-size: 11px;">基本設定、偏好設定</span></li>\r\n<ul>\r\n<li><span style="font-size: 11px;">設定使用者</span></li>\r\n<ul>\r\n<li><span style="font-size: 11px;">$ <strong>git config --global user.name "{your name}"</strong></span></li>\r\n<li><span style="font-size: 11px;">$ <strong>git config --global user.email "{your email}"</strong></span></li>\r\n</ul>\r\n<li><span style="font-size: 11px;">隱私設定 https://help.github.com/articles/keeping-your-email-address-private/</span></li>\r\n<ul>\r\n<li><span style="font-size: 11px;">$ <strong>git config --global user.email "username@users.noreply.github.com"</strong></span></li>\r\n<li><span style="font-size: 11px;">$ <strong>git config --global -l</strong></span></li>\r\n</ul>\r\n<li><span style="font-size: 11px;">設定別名</span></li>\r\n<ul>\r\n<li><span style="font-size: 11px;">$ <strong>git config --global alias.st statu</strong>s (用 st 取代 status)</span></li>\r\n</ul>\r\n</ul>\r\n</ul>', NULL),
	(3, '8/8 今天父親節!!', 1, '2016-08-08 10:23:52', '2016-08-09 19:43:34', '<p>祝我自己及全天下的父親，爸爸節快樂！</p>\r\n<p>爸爸節快樂！</p>\r\n<p><span style="font-size: 11px;">爸爸節快樂！</span></p>\r\n<p><span style="font-size: 11px;">爸爸節快樂！</span></p>\r\n<p>很重要，所以說三次。</p>', NULL),
	(4, '練習至目前為止的感想....', 1, '2016-08-09 17:25:02', '2016-08-09 19:42:26', '<p>雖然 git 及 github 已經有些許概念了，但是有關 composer 的部份還是有些不了解。</p>\r\n<p>composer 使用 require 及 install 指令後，會產生 vendor 的資料夾，但網路上的資料大都建議將 vendor 納入 .gitignore 檔案內，那麼我要如何在本地的專案內使用 composer 下載的檔案呢？一樣也是 <em><strong>require __DIR__ . \'/vendor/autoload.php\';</strong></em> 就可以了嗎？</p>\r\n<p>疑問，待釐清...</p>\r\n<p>&nbsp;</p>', NULL);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table blog.user
CREATE TABLE IF NOT EXISTS `user` (
  `Index` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '會員編號(流水號)',
  `Username` varchar(50) NOT NULL COMMENT '帳號',
  `Password` varchar(32) NOT NULL COMMENT '密碼',
  `Realname` varchar(10) NOT NULL COMMENT '真實姓名',
  `Nickname` varchar(30) DEFAULT NULL COMMENT '名稱、暱稱',
  `Email` varchar(50) NOT NULL COMMENT '電子郵件帳號',
  `CreateDatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '建立時間',
  PRIMARY KEY (`Index`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='使用者、作者、會員';

-- Dumping data for table blog.user: ~0 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`Index`, `Username`, `Password`, `Realname`, `Nickname`, `Email`, `CreateDatetime`) VALUES
	(1, 'admin', 'admin', '系統管理員', '神一樣的人', 'admin@localhost', '2016-08-06 17:07:24');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
