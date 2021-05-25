-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 08 月 05 日 07:07
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

--
-- 資料表的匯出資料 `station`
--

INSERT INTO `station` (`kn`, `name`, `name_en`) VALUES
(3, '台北站', 'Taipei'),
(4, '台中站', 'Taichung'),
(6, '台南站', 'Tainan'),
(7, '高雄站', 'Kaohsiung');

-- --------------------------------------------------------

--
-- 資料表結構 `torder`
--

CREATE TABLE `torder` (
  `kn` int(11) NOT NULL,
  `orderid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `ride_time` date NOT NULL,
  `num` int(5) NOT NULL,
  `firststation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `finalstation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `t_amount` int(5) NOT NULL,
  `t_price` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `orderdate` datetime NOT NULL,
  `useful` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `torder`
--

INSERT INTO `torder` (`kn`, `orderid`, `phone`, `ride_time`, `num`, `firststation`, `finalstation`, `t_amount`, `t_price`, `total`, `orderdate`, `useful`) VALUES
(1, '23S8kOK69E', 922112233, '2018-08-04', 1103, '台北站', '台中站', 2, 200, 400, '2018-08-04 04:11:25', 'Y'),
(2, 'VnNJS17uQO', 922112233, '2018-08-04', 1103, '台北站', '台中站', 2, 200, 400, '2018-08-04 04:14:04', 'Y'),
(3, 'Ts6iBzypLj', 925998877, '2018-08-04', 1522, '台北站', '台中站', 2, 300, 600, '2018-08-04 04:20:35', 'Y'),
(4, 'RY9qd43O3L', 925998851, '2018-08-04', 1522, '台中站', '台北站', 2, 500, 1000, '2018-08-04 05:12:25', 'Y'),
(5, 'P1Qc85RnEm', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 05:38:11', 'Y'),
(6, 'IyBDqyjZFe', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:44:50', 'Y'),
(7, 'kyQCI7JU9P', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:45:48', 'Y'),
(8, '2z0l449vkd', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:46:23', 'Y'),
(9, 'qYDYkMSozF', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:48:34', 'Y'),
(10, 'pyX7KGheCV', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:49:14', 'Y'),
(11, 'u6oyxD7eJJ', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:51:03', 'Y'),
(12, 'gKK8WWJicD', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:52:00', 'Y'),
(13, 'mEKlMt6XmW', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 06:53:41', 'Y'),
(14, 'df5qFirRKW', 911090909, '2018-08-04', 1522, '台南站', '高雄站', 3, 500, 1500, '2018-08-04 07:00:07', 'Y'),
(15, 'hcEd7bEzkN', 911070809, '2018-08-04', 1522, '台南站', '高雄站', 5, 500, 2500, '2018-08-04 07:10:44', 'Y'),
(16, '4thVr97iL9', 911070809, '2018-08-04', 1522, '台南站', '高雄站', 5, 500, 2500, '2018-08-04 07:11:53', 'Y'),
(17, 'kRMZCwZC54', 911070809, '2018-08-04', 1522, '台南站', '高雄站', 5, 500, 2500, '2018-08-04 07:12:37', 'Y'),
(18, 'CxRdHChsPQ', 911070809, '2018-08-04', 1522, '台南站', '高雄站', 5, 500, 2500, '2018-08-04 07:15:46', 'Y'),
(19, '6KdaA2mIYN', 911070809, '2018-08-04', 1522, '台南站', '高雄站', 5, 500, 2500, '2018-08-04 07:17:12', 'Y'),
(20, '0DhbMVGcUQ', 911070809, '2018-08-04', 1522, '台南站', '高雄站', 5, 500, 2500, '2018-08-04 07:22:28', 'Y'),
(21, 'WHa54GjzvA', 919111222, '2018-08-04', 1522, '台北站', '高雄站', 2, 500, 1000, '2018-08-04 07:28:49', 'Y'),
(30, 'By7hRKTCjS', 911090909, '2018-08-05', 3109, '台北站', '台中站', 3, 500, 1500, '2018-08-05 04:42:38', 'Y');

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
  `train_kind` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `boxamount` int(10) NOT NULL,
  `box` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `t_price` int(10) NOT NULL,
  `s_time` int(10) NOT NULL,
  `useful` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `train`
--

INSERT INTO `train` (`kn`, `num`, `week`, `starttime`, `firststation`, `finalstation`, `train_kind`, `boxamount`, `box`, `total`, `t_price`, `s_time`, `useful`) VALUES
(1, '1101', '日', '11:50:00', '台中站', '台北站', '區間列車', 50, 12, 600, 199, 180, 1),
(5, '1103', '五', '13:20:00', '台中站', '台南站', '區間列車', 25, 10, 250, 260, 230, 1),
(6, '3109', '三', '12:00:05', '台南站', '台中站', '磁浮列車', 50, 12, 600, 540, 31, 1),
(7, '1522', '一', '06:00:00', '台北站', '高雄站', '自強號', 55, 18, 990, 850, 250, 1),
(8, '1101', '五', '11:06:00', '台北站', '台中站', '區間列車', 50, 12, 600, 199, 185, 1),
(9, '1083', '六', '06:08:00', '高雄站', '台中站', '快速列車', 25, 10, 250, 700, 123, 1),
(10, '6630', '日', '20:00:00', '台中站', '台北站', '自強號', 50, 7, 350, 420, 121, 1),
(11, '108', '三', '11:00:00', '高雄站', '台南站', '區間列車', 40, 7, 280, 39, 35, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `train_kind`
--

CREATE TABLE `train_kind` (
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `speed` int(3) NOT NULL,
  `kn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `train_kind`
--

INSERT INTO `train_kind` (`name`, `speed`, `kn`) VALUES
('區間列車', 55, 2),
('快速列車', 120, 3),
('磁浮列車', 280, 5),
('自強號', 160, 7);

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
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表 AUTO_INCREMENT `torder`
--
ALTER TABLE `torder`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用資料表 AUTO_INCREMENT `train`
--
ALTER TABLE `train`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表 AUTO_INCREMENT `train_kind`
--
ALTER TABLE `train_kind`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
