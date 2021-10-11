-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-12-15 08:54:05
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `finalexam`
--

-- --------------------------------------------------------

--
-- 資料表結構 `atm`
--

CREATE TABLE `atm` (
  `account` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `atm`
--

INSERT INTO `atm` (`account`, `password`) VALUES
('tony', '1234'),
('marry', '4567'),
('bill', '3421'),
('aa', '1234'),
('qq', '1166'),
('ss', '22'),
('ssee', '2233'),
('ww', '22'),
('rr', '22'),
('rrtt', '22ttt'),
('yy', '555'),
('qq', '1166'),
('333', '22'),
('yy', '555'),
('1bill', '3421'),
('tttt', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
