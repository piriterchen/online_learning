-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-05-25 01:29:29
-- 服务器版本： 5.6.21-log
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_class`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_chapter`
--

CREATE TABLE IF NOT EXISTS `t_chapter` (
  `m_chapterid` int(10) unsigned NOT NULL,
  `m_courseid` int(10) unsigned NOT NULL,
  `m_chapter` varchar(100) NOT NULL,
  `m_image` varchar(100) NOT NULL,
  `m_chaining` varchar(100) NOT NULL,
  `m_numconcern` int(10) unsigned NOT NULL,
  `m_chapterindex` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_chapter`
--

INSERT INTO `t_chapter` (`m_chapterid`, `m_courseid`, `m_chapter`, `m_image`, `m_chaining`, `m_numconcern`, `m_chapterindex`) VALUES
(14, 1, '绪论', './upload_dir/course_video/course.jpg', './upload_dir/course_video/course.jpg', 0, 1),
(20, 1, '绪论2', './upload_dir/course_video/course.jpg', './upload_dir/course_video/course.jpg', 0, 2),
(21, 1, 'mapreduce', './upload_dir/course_video/big_buck_bunny.jpg', './upload_dir/course_video/big_buck_bunny.jpg', 0, 3),
(22, 1, 'mapreduce2', './upload_dir/course_video/echo-hereweare.mp4', './upload_dir/course_video/echo-hereweare.mp4', 0, 4),
(23, 1, 'mapreduce 3', './upload_dir/course_video/中国现当代文学史.jpg', './upload_dir/course_video/中国现当代文学史.jpg', 0, 5);

-- --------------------------------------------------------

--
-- 表的结构 `t_chforum_body`
--

CREATE TABLE IF NOT EXISTS `t_chforum_body` (
  `postid` int(10) unsigned NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_chforum_body`
--

INSERT INTO `t_chforum_body` (`postid`, `message`) VALUES
(1, 'lalalalalala!'),
(2, 'bababababa!'),
(3, 'fdgfdgf'),
(4, 'fdgfdgdf'),
(5, '的哥哥额'),
(6, '个个股');

-- --------------------------------------------------------

--
-- 表的结构 `t_chforum_header`
--

CREATE TABLE IF NOT EXISTS `t_chforum_header` (
  `postid` int(10) unsigned NOT NULL,
  `chapterid` int(10) unsigned NOT NULL,
  `parent` int(11) NOT NULL,
  `poster` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `children` int(11) NOT NULL DEFAULT '0',
  `area` int(11) NOT NULL DEFAULT '1',
  `posted` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_chforum_header`
--

INSERT INTO `t_chforum_header` (`postid`, `chapterid`, `parent`, `poster`, `title`, `children`, `area`, `posted`) VALUES
(1, 2, 0, 'piriter', 'hi', 1, 1, '2015-05-19 13:36:18'),
(2, 2, 1, 'piriter', 'hi', 0, 1, '2015-05-19 13:36:37'),
(3, 14, 0, 'piriter', 'hi', 1, 1, '2015-05-24 11:39:56'),
(4, 14, 3, 'piriter', 'hi', 0, 1, '2015-05-24 11:40:00'),
(5, 14, 0, 'pi', 'hi', 1, 1, '2015-05-25 01:11:16'),
(6, 14, 5, 'piriter', 'hi', 0, 1, '2015-05-25 01:11:22');

-- --------------------------------------------------------

--
-- 表的结构 `t_course`
--

CREATE TABLE IF NOT EXISTS `t_course` (
  `m_courseid` int(10) unsigned NOT NULL,
  `m_course` varchar(100) NOT NULL,
  `m_type` varchar(20) NOT NULL,
  `m_content` text NOT NULL,
  `m_time` datetime NOT NULL,
  `m_image` varchar(100) NOT NULL,
  `m_numconcern` int(10) unsigned NOT NULL,
  `m_teacher` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_course`
--

INSERT INTO `t_course` (`m_courseid`, `m_course`, `m_type`, `m_content`, `m_time`, `m_image`, `m_numconcern`, `m_teacher`) VALUES
(1, '云计算', '计算机类', '该课程是关于云计算的一门课程。该课程涉及很多关于云存储，任务分工，任务集成的内容，值得一学。', '2015-05-09 19:53:20', './upload_dir/course_image/course.jpg', 1, 'who'),
(19, '管理概论', '管理类', '该课程是关于管理的一门课程。', '2015-05-11 21:34:34', './upload_dir/course_image/course.jpg', 0, 'who'),
(20, '信号与系统', '通信类', '该课程关于信号与系统的一门课。包括信号收集、分析和处理等一系列信号处理的问题。', '2015-05-11 22:07:02', './upload_dir/course_image/course.jpg', 0, 'who'),
(21, '中国特色社会主义', '政治类', '该课程是用于共产党宣传的。', '2015-05-14 13:38:53', './upload_dir/course_image/course.jpg', 1, 'who'),
(27, 'C程序设计基础及实验', '工程技术', '该课程关于C程序设计基础及实验。', '2015-05-23 15:39:07', './upload_dir/course_image/C程序设计基础及实验.jpg', 0, 'who'),
(28, 'Java程序设计', '工程技术', '该课程关于Java程序设计。', '2015-05-23 15:39:42', './upload_dir/course_image/Java程序设计.jpg', 0, 'who'),
(29, '电磁场与电磁波', '工程技术', '该课程关于电磁场与电磁波。', '2015-05-23 15:40:08', './upload_dir/course_image/电磁场与电磁波.jpg', 0, 'who'),
(30, '电子技术基础', '工程技术', '该课程关于电子技术基础。', '2015-05-23 15:40:33', './upload_dir/course_image/电子技术基础.jpg', 0, 'who'),
(31, '工程流体力学', '工程技术', '该课程关于工程流体力学。', '2015-05-23 15:40:56', './upload_dir/course_image/工程流体力学.jpg', 0, 'who'),
(32, '室内设计', '工程技术', '该课程关于室内技术。', '2015-05-23 15:41:22', './upload_dir/course_image/室内设计.jpg', 0, 'who'),
(33, '数据结构', '工程技术', '该课程关于数据结构。', '2015-05-23 15:41:47', './upload_dir/course_image/数据结构.jpg', 0, 'who'),
(34, '算法导论', '工程技术', '该课程关于算法导论。', '2015-05-23 15:42:15', './upload_dir/course_image/算法导论.jpg', 0, 'who'),
(35, '大学物理', '基础科学', '该课程关于大学物理。', '2015-05-23 15:43:50', './upload_dir/course_image/大学物理.jpg', 0, 'who'),
(36, '概率论与数理统计', '基础科学', '该课程关于概率论与数理统计。', '2015-05-23 15:44:14', './upload_dir/course_image/概率论与数理统计.jpg', 0, 'who'),
(37, '工程图学', '基础科学', '该课程关于工程图学。', '2015-05-23 15:44:49', './upload_dir/course_image/工程图学.png', 0, 'who'),
(38, '普通化学', '基础科学', '该课程关于普通化学。', '2015-05-23 15:45:14', './upload_dir/course_image/普通化学.jpg', 0, 'who'),
(39, '数学建模', '基础科学', '该课程关于数学建模。', '2015-05-23 15:45:34', './upload_dir/course_image/数学建模.jpg', 0, 'who'),
(40, '微积分', '基础课程', '该课程关于基础科学。', '2015-05-23 15:46:05', './upload_dir/course_image/微积分.jpg', 0, 'who'),
(41, '线性代数', '基础科学', '该课程关于线性代数。', '2015-05-23 15:46:29', './upload_dir/course_image/线性代数.jpg', 0, 'who'),
(42, '法理学', '经管法学', '该课程关于法理学。', '2015-05-23 15:47:24', './upload_dir/course_image/法理学.jpg', 0, 'who'),
(43, '管理学导论', '经管法学', '该课程关于管理学导论。', '2015-05-23 15:48:44', './upload_dir/course_image/管理学导论.jpg', 0, 'who'),
(44, '行政法学', '经管法学', '该课程关于行政法学。', '2015-05-23 15:49:21', './upload_dir/course_image/行政法学.jpg', 0, 'who'),
(45, '经济学导论', '经管法学', '该课程关于经济学导论。', '2015-05-23 15:49:40', './upload_dir/course_image/经济学导论.jpg', 0, 'who'),
(46, '企业战略管理', '经管法学', '该课程关于企业战略管理。', '2015-05-23 15:50:07', './upload_dir/course_image/企业战略管理.jpg', 0, 'who'),
(47, '刑法', '经管法学', '该课程关于刑法。', '2015-05-23 15:50:46', './upload_dir/course_image/刑法.jpg', 0, 'who'),
(48, '茶与健康', '农林医药', '该课程关于茶与健康。', '2015-05-23 15:51:27', './upload_dir/course_image/茶与健康.jpg', 0, 'who'),
(49, '黄帝内经', '农林医药', '该课程关于黄帝内经。', '2015-05-23 15:52:01', './upload_dir/course_image/黄帝内经.jpg', 0, 'who'),
(50, '急救知识', '农林医药', '该课程关于急救知识。', '2015-05-23 15:53:22', './upload_dir/course_image/急救知识.jpg', 0, 'who'),
(51, '生命科学导论', '农林医药', '该课程关于生命科学导论。', '2015-05-23 15:54:23', './upload_dir/course_image/生命科学导论.jpg', 0, 'who'),
(52, '生殖健康', '农林医药', '该课程关于生殖健康。', '2015-05-23 15:54:56', './upload_dir/course_image/生殖健康.jpg', 0, 'who'),
(53, '医学心理学', '农林医药', '该课程关于医学心理学。', '2015-05-23 15:55:14', './upload_dir/course_image/医学心理学.jpg', 0, 'who'),
(54, '遗传学', '农林医药', '该课程关于遗传学。', '2015-05-23 15:55:34', './upload_dir/course_image/遗传学.jpg', 0, 'who'),
(55, '植物学', '农林医药', '该课程是关于植物学。', '2015-05-23 15:55:58', './upload_dir/course_image/植物学.jpg', 0, 'who'),
(56, '论语', '文学艺术', '该课程关于论语。', '2015-05-23 15:56:32', './upload_dir/course_image/论语.jpg', 0, 'who'),
(57, '美体与健康', '文学艺术', '该课程关于美体与健康。', '2015-05-23 15:56:53', './upload_dir/course_image/美体与健康.jpg', 0, 'who'),
(58, '摄影技术与视频处理', '文学艺术', '该课程关于摄影技术与视频处理。', '2015-05-23 15:57:10', './upload_dir/course_image/摄影技术与视频处理.jpg', 0, 'who'),
(59, '物理学与人类文明', '文学艺术', '该课程关于物理学与人类文明。', '2015-05-23 15:57:32', './upload_dir/course_image/物理学与人类文明.jpg', 0, 'who'),
(60, '音乐欣赏', '文学艺术', '该课程关于音乐欣赏。', '2015-05-23 15:57:55', './upload_dir/course_image/音乐欣赏.jpg', 0, 'who'),
(61, '中国现当代诗词', '文学艺术', '该课程关于中国现当代诗词。', '2015-05-23 15:58:18', './upload_dir/course_image/中国现当代诗词.jpg', 0, 'who'),
(62, '近现代史', '哲学历史', '该课程关于近现代史。', '2015-05-23 15:58:47', './upload_dir/course_image/近现代史.jpg', 0, 'who'),
(63, '美学', '哲学历史', '该课程关于美学。', '2015-05-23 15:59:19', './upload_dir/course_image/美学.jpg', 0, 'who'),
(64, '人类文明史', '哲学历史', '该课程关于人类文明史。', '2015-05-23 16:00:01', './upload_dir/course_image/人类文明史.jpg', 0, 'who'),
(65, '外国哲学', '哲学历史', '该课程关于外国哲学。', '2015-05-23 16:00:40', './upload_dir/course_image/外国哲学.jpg', 0, 'who'),
(66, '世界文明史', '哲学历史', '该课程关于世界文明史。', '2015-05-23 16:01:03', './upload_dir/course_image/世界文明史.jpg', 0, 'who'),
(67, '哲学与人生', '哲学历史', '这课程关于哲学与人生。', '2015-05-23 16:01:28', './upload_dir/course_image/哲学与人生.jpg', 0, 'who'),
(68, '中国现当代文学史', '哲学历史', '该课程关于中国现当代文学史。', '2015-05-23 16:01:45', './upload_dir/course_image/中国现当代文学史.jpg', 0, 'who');

-- --------------------------------------------------------

--
-- 表的结构 `t_crforum_body`
--

CREATE TABLE IF NOT EXISTS `t_crforum_body` (
  `postid` int(10) unsigned NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_crforum_body`
--

INSERT INTO `t_crforum_body` (`postid`, `message`) VALUES
(1, '啦啦啦啦'),
(2, '111111111'),
(3, 'dwqdwqdwqd'),
(4, '1111111'),
(5, '2222222222222'),
(6, 'eegregre'),
(7, '程家伟dashboard');

-- --------------------------------------------------------

--
-- 表的结构 `t_crforum_header`
--

CREATE TABLE IF NOT EXISTS `t_crforum_header` (
  `postid` int(10) unsigned NOT NULL,
  `courseid` int(10) unsigned NOT NULL,
  `parent` int(11) NOT NULL,
  `poster` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `children` int(11) NOT NULL DEFAULT '0',
  `area` int(11) NOT NULL DEFAULT '1',
  `posted` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_crforum_header`
--

INSERT INTO `t_crforum_header` (`postid`, `courseid`, `parent`, `poster`, `title`, `children`, `area`, `posted`) VALUES
(1, 2, 0, 'piriter', 'hi', 1, 1, '2015-05-19 14:20:49'),
(2, 2, 1, 'piriter', 'hi', 0, 1, '2015-05-23 21:42:05'),
(3, 2, 1, 'piriter', 'hi', 0, 1, '2015-05-23 21:58:51'),
(4, 1, 0, 'piriter', 'hi', 1, 1, '2015-05-24 11:23:18'),
(5, 1, 0, 'piriter', 'hi', 0, 1, '2015-05-24 11:26:22'),
(6, 1, 4, 'piriter', 'hi', 0, 1, '2015-05-24 11:26:33'),
(7, 1, 0, 'pi', 'hi', 0, 1, '2015-05-25 01:08:57');

-- --------------------------------------------------------

--
-- 表的结构 `t_filelocation`
--

CREATE TABLE IF NOT EXISTS `t_filelocation` (
  `m_fileid` int(10) unsigned NOT NULL,
  `m_chapterid` int(10) unsigned NOT NULL,
  `m_location` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_filelocation`
--

INSERT INTO `t_filelocation` (`m_fileid`, `m_chapterid`, `m_location`) VALUES
(1, 14, './media/课程简介.mp4');

-- --------------------------------------------------------

--
-- 表的结构 `t_teacher`
--

CREATE TABLE IF NOT EXISTS `t_teacher` (
  `m_teacherid` int(10) unsigned NOT NULL,
  `m_teacher` varchar(40) NOT NULL,
  `m_description` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_teacher`
--

INSERT INTO `t_teacher` (`m_teacherid`, `m_teacher`, `m_description`) VALUES
(1, '胡兵', '我是一个很懒的老师。'),
(2, 'who', '我是很牛的人');

-- --------------------------------------------------------

--
-- 表的结构 `t_teacourse`
--

CREATE TABLE IF NOT EXISTS `t_teacourse` (
  `m_teacourseid` int(10) unsigned NOT NULL,
  `m_teacherid` int(10) unsigned NOT NULL,
  `m_courseid` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_teacourse`
--

INSERT INTO `t_teacourse` (`m_teacourseid`, `m_teacherid`, `m_courseid`) VALUES
(1, 2, 1),
(2, 2, 19),
(3, 2, 20),
(4, 2, 21),
(5, 2, 22),
(6, 2, 23),
(7, 2, 24),
(8, 2, 25),
(9, 2, 26),
(10, 2, 27),
(11, 2, 28),
(12, 2, 29),
(13, 2, 30),
(14, 2, 31),
(15, 2, 32),
(16, 2, 33),
(17, 2, 34),
(18, 2, 35),
(19, 2, 36),
(20, 2, 37),
(21, 2, 38),
(22, 2, 39),
(23, 2, 40),
(24, 2, 41),
(25, 2, 42),
(26, 2, 43),
(27, 2, 44),
(28, 2, 45),
(29, 2, 46),
(30, 2, 47),
(31, 2, 48),
(32, 2, 49),
(33, 2, 50),
(34, 2, 51),
(35, 2, 52),
(36, 2, 53),
(37, 2, 54),
(38, 2, 55),
(39, 2, 56),
(40, 2, 57),
(41, 2, 58),
(42, 2, 59),
(43, 2, 60),
(44, 2, 61),
(45, 2, 62),
(46, 2, 63),
(47, 2, 64),
(48, 2, 65),
(49, 2, 66),
(50, 2, 67),
(51, 2, 68);

-- --------------------------------------------------------

--
-- 表的结构 `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `m_userid` int(10) unsigned NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_password` varchar(40) NOT NULL,
  `m_identity` varchar(10) NOT NULL,
  `m_email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_user`
--

INSERT INTO `t_user` (`m_userid`, `m_user`, `m_password`, `m_identity`, `m_email`) VALUES
(1, 'luke', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '21431134@zju.edu.cn'),
(2, 'pi', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', 'piriter@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `t_userconcern`
--

CREATE TABLE IF NOT EXISTS `t_userconcern` (
  `m_concernid` int(10) unsigned NOT NULL,
  `m_userid` int(10) unsigned NOT NULL,
  `m_courseid` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_userconcern`
--

INSERT INTO `t_userconcern` (`m_concernid`, `m_userid`, `m_courseid`) VALUES
(44, 2, 21),
(45, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_chapter`
--
ALTER TABLE `t_chapter`
  ADD PRIMARY KEY (`m_chapterid`);

--
-- Indexes for table `t_chforum_body`
--
ALTER TABLE `t_chforum_body`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `t_chforum_header`
--
ALTER TABLE `t_chforum_header`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `t_course`
--
ALTER TABLE `t_course`
  ADD PRIMARY KEY (`m_courseid`);

--
-- Indexes for table `t_crforum_body`
--
ALTER TABLE `t_crforum_body`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `t_crforum_header`
--
ALTER TABLE `t_crforum_header`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `t_filelocation`
--
ALTER TABLE `t_filelocation`
  ADD PRIMARY KEY (`m_fileid`);

--
-- Indexes for table `t_teacher`
--
ALTER TABLE `t_teacher`
  ADD PRIMARY KEY (`m_teacherid`);

--
-- Indexes for table `t_teacourse`
--
ALTER TABLE `t_teacourse`
  ADD PRIMARY KEY (`m_teacourseid`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`m_userid`);

--
-- Indexes for table `t_userconcern`
--
ALTER TABLE `t_userconcern`
  ADD PRIMARY KEY (`m_concernid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_chapter`
--
ALTER TABLE `t_chapter`
  MODIFY `m_chapterid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `t_chforum_header`
--
ALTER TABLE `t_chforum_header`
  MODIFY `postid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_course`
--
ALTER TABLE `t_course`
  MODIFY `m_courseid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `t_crforum_header`
--
ALTER TABLE `t_crforum_header`
  MODIFY `postid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_filelocation`
--
ALTER TABLE `t_filelocation`
  MODIFY `m_fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_teacher`
--
ALTER TABLE `t_teacher`
  MODIFY `m_teacherid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_teacourse`
--
ALTER TABLE `t_teacourse`
  MODIFY `m_teacourseid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `m_userid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_userconcern`
--
ALTER TABLE `t_userconcern`
  MODIFY `m_concernid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
