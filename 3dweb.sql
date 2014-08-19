-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 年 08 月 20 日 02:00
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `3dweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `studentid` varchar(10) NOT NULL,
  `major` varchar(255) NOT NULL,
  `vote` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`, `studentid`, `major`, `vote`) VALUES
(1, 'demo', 'demo@uic.edu.hk', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '111', '111', 0),
(6, 'hejing', 'hejing@uic.edu.hk', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'b630300008', 'CST', 0),
(7, 'jack', 'jack@uic.edu.hk', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'b630300012', 'cst', 0);

-- --------------------------------------------------------

--
-- 表的结构 `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `createtime` varchar(14) NOT NULL,
  `category` varchar(50) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `threedfilename` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `voted` int(50) NOT NULL,
  `competition` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `work`
--

INSERT INTO `work` (`id`, `title`, `createtime`, `category`, `imagename`, `threedfilename`, `description`, `publisher`, `voted`, `competition`, `status`) VALUES
(1, 'Alabama', '20140818203427', 'something', 'hejing_20140818203427.jpg', 'hejing_20140818203427.obj', 'Alabama', 'hejing', 0, 1, 1),
(2, 'BMW', '20140818203720', 'something', 'hejing_20140818203720.jpg', 'hejing_20140818203720.obj', 'BMW', 'hejing', 0, 1, 1),
(3, 'hotel', '20140818203758', 'something', 'hejing_20140818203758.jpg', 'hejing_20140818203758.obj', 'hotel', 'hejing', 0, 1, 1),
(4, 'XIAO MI', '20140818203836', 'something', 'hejing_20140818203836.jpg', 'hejing_20140818203836.obj', 'phone', 'hejing', 0, 1, 1),
(5, 'Girl', '20140818203919', 'something', 'hejing_20140818203919.jpg', 'hejing_20140818203919.obj', 'girl', 'hejing', 0, 1, 1),
(6, 'sailing boat', '20140818203950', 'something', 'hejing_20140818203950.jpg', 'hejing_20140818203950.obj', 'boat', 'hejing', 0, 1, 1),
(7, 'Girl', '20140819160257', 'something', 'demo_20140819160257.jpg', 'demo_20140819160257.obj', 'GirlGirlGirlGirlGirlGirlGirl', 'demo', 0, 1, 1),
(8, 'Tree', '20140819160741', 'something', 'hejing_20140819160741.jpg', 'hejing_20140819160741.obj', 'Tree', 'hejing', 0, 1, 1),
(9, 'Flower', '20140819191105', '3', 'demo_20140819191105.jpg', 'demo_20140819191105.obj', 'Flower Flower Flower Flower Flower Flower Flower F', 'demo', 2, 1, 1),
(10, 'North Carolina', '20140819192545', 'something', 'demo_20140819192545.jpg', 'demo_20140819192545.obj', 'HELLO hello hello hello hello hello hello hello he', 'demo', 2, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
