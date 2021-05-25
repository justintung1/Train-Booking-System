-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 08 月 01 日 09:21
-- 伺服器版本: 10.1.28-MariaDB
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `01_module_e`
--

-- --------------------------------------------------------

--
-- 資料表結構 `station`
--

CREATE TABLE `station` (
  `kn` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `torder`
--

CREATE TABLE `torder` (
  `kn` int(11) NOT NULL,
  `orderid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `trainnum` int(5) NOT NULL,
  `firststation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `finalstation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `orderdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `train`
--

CREATE TABLE `train` (
  `kn` int(11) NOT NULL,
  `num` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `week` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `firststation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `finalstation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `boxamount` int(10) NOT NULL,
  `box` int(11) NOT NULL,
  `useful` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `train_kind`
--

CREATE TABLE `train_kind` (
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `speed` int(3) NOT NULL,
  `kn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `kn` int(11) NOT NULL,
  `account` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`kn`, `account`, `password`) VALUES
(1, 'admin', '1234');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`kn`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_en` (`name_en`);

--
-- 資料表索引 `torder`
--
ALTER TABLE `torder`
  ADD PRIMARY KEY (`kn`);

--
-- 資料表索引 `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`kn`);

--
-- 資料表索引 `train_kind`
--
ALTER TABLE `train_kind`
  ADD PRIMARY KEY (`kn`),
  ADD UNIQUE KEY `name` (`name`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kn`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `station`
--
ALTER TABLE `station`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `torder`
--
ALTER TABLE `torder`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `train`
--
ALTER TABLE `train`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `train_kind`
--
ALTER TABLE `train_kind`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
