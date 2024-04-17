-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2024-03-06 11:16:55
-- 伺服器版本： 8.2.0
-- PHP 版本： 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ss365`
--

-- --------------------------------------------------------

--
-- 資料表結構 `commodity`
--

DROP TABLE IF EXISTS `commodity`;
CREATE TABLE IF NOT EXISTS `commodity` (
  `com_no` int NOT NULL AUTO_INCREMENT,
  `com_name` varchar(50) DEFAULT NULL,
  `com_phone` int DEFAULT NULL,
  `com_people` int DEFAULT NULL,
  `com_class` varchar(50) DEFAULT NULL,
  `com_time` datetime(6) NOT NULL,
  PRIMARY KEY (`com_no`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `commodity`
--

INSERT INTO `commodity` (`com_no`, `com_name`, `com_phone`, `com_people`, `com_class`, `com_time`) VALUES
(43, 'aa', 911111111, 3, '01/14(日)陶土', '2024-03-06 19:12:57.000000');

-- --------------------------------------------------------

--
-- 資料表結構 `messageboard`
--

DROP TABLE IF EXISTS `messageboard`;
CREATE TABLE IF NOT EXISTS `messageboard` (
  `mes_no` int NOT NULL AUTO_INCREMENT,
  `mes_name` varchar(10) DEFAULT NULL,
  `mes_mes` varchar(100) DEFAULT NULL,
  `mes_date` datetime NOT NULL,
  PRIMARY KEY (`mes_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `messageboard`
--

INSERT INTO `messageboard` (`mes_no`, `mes_name`, `mes_mes`, `mes_date`) VALUES
(1, 'candy', '體驗很好\r\n', '2022-12-26 14:27:37'),
(7, 'carol', 'hiiiiiiii', '2022-12-30 20:43:05'),
(8, 'banana', '請留下訊息213', '2024-03-04 23:23:35'),
(9, 'banana', '請留下訊息123', '2024-03-04 23:26:53');

-- --------------------------------------------------------

--
-- 資料表結構 `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `reg_no` int NOT NULL AUTO_INCREMENT,
  `reg_name` varchar(50) NOT NULL,
  `reg_sex` varchar(5) NOT NULL,
  `reg_id` varchar(100) NOT NULL,
  `reg_pwd` varchar(100) NOT NULL,
  `reg_mail` varchar(100) NOT NULL,
  `reg_date` date NOT NULL,
  `reg_phone` varchar(10) NOT NULL,
  `reg_time` datetime NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `register`
--

INSERT INTO `register` (`reg_no`, `reg_name`, `reg_sex`, `reg_id`, `reg_pwd`, `reg_mail`, `reg_date`, `reg_phone`, `reg_time`) VALUES
(1, '陳小米', '2', '1234567', '7654321', '1234567@gmail.com', '2022-12-07', '0912345678', '2022-12-26 13:11:15'),
(2, '陳小花', '2', 'as108', 'sa108', 'as108@gmail.com', '2022-12-01', '0912312312', '2022-12-26 13:32:47'),
(19, 'aa', '1', 'aa', 'aa', 'apple@gmail.com', '2018-07-22', '0911111111', '2024-03-06 19:12:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
