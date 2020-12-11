-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-11 06:45:35
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `is`
--

-- --------------------------------------------------------

--
-- 資料表結構 `lottery_list`
--

CREATE TABLE `lottery_list` (
  `period` int(10) NOT NULL,
  `startTime` datetime(1) NOT NULL,
  `endTime` datetime(1) NOT NULL,
  `showDate` datetime(1) NOT NULL,
  `winNum` int(5) NOT NULL,
  `bonus` int(5) NOT NULL,
  `count` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `lottery_list`
--

INSERT INTO `lottery_list` (`period`, `startTime`, `endTime`, `showDate`, `winNum`, `bonus`, `count`) VALUES
(1, '2020-11-30 00:00:00.0', '2020-12-02 23:59:59.0', '2020-12-03 20:00:00.0', 33, 500, 0),
(2, '2020-12-03 00:00:00.0', '2020-12-05 23:59:59.0', '2020-12-06 20:00:00.0', 20, 1000, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `id` int(10) NOT NULL,
  `account` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(10) NOT NULL,
  `period` int(10) NOT NULL,
  `num` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `sign` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `record`
--

INSERT INTO `record` (`id`, `account`, `uid`, `period`, `num`, `price`, `sign`, `status`) VALUES
(1, '', 1, 1, 10, 100, '', 0),
(2, '', 0, 1, 11, 100, '', 0),
(3, '', 0, 1, 15, 100, '', 0),
(4, '', 0, 1, 12, 100, '', 0),
(5, 'test', 0, 1, 10, 100, '', 0),
(6, '', 0, 1, 14, 100, '', 0),
(7, '', 0, 1, 16, 100, '', 0),
(9, 'yo', 0, 1, 18, 200, '', 0),
(10, '', 0, 1, 18, 100, '', 0),
(11, '', 0, 1, 15, 100, '', 0),
(12, '', 0, 1, 18, 100, '', 0),
(13, '', 0, 1, 16, 100, '', 0),
(16, '', 0, 1, 41, 100, '', 0),
(17, '', 0, 1, 41, 100, '', 0),
(18, '', 0, 1, 19, 100, '', 0),
(19, '', 0, 1, 18, 200, '', 0),
(22, '', 0, 1, 20, 100, '', 0),
(23, '', 0, 1, 21, 100, '', 0),
(24, '', 0, 1, 20, 100, '', 0),
(25, '', 0, 1, 19, 100, '', 0),
(27, 'yo', 0, 1, 20, 300, '', 0),
(28, 'yo', 0, 1, 21, 300, '', 0),
(29, 'yo', 0, 1, 17, 200, '', 0),
(30, 'yo', 0, 0, 17, 300, '', 0),
(31, 'yo', 0, 0, 19, 100, '', 0),
(32, 'circle', 0, 0, 41, 200, '', 0),
(33, 'yo', 0, 0, 18, 100, '', 0),
(34, 'yo', 0, 0, 0, 100, '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `public key` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `private key` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`uid`, `name`, `account`, `password`, `phone`, `public key`, `private key`) VALUES
(1, 'yoyo', 'test', 'test', '0977323123', '', ''),
(2, '陳侑萱', 'yo', '123', '0912345633', '', ''),
(3, '章羲元', 'circle', '123', '0933475666', '', ''),
(4, '李', 'lee', '123', '0988788778', '', ''),
(5, '汪', 'wang', '123', '0933448449', '', ''),
(6, '張', 'HI', '123', '0977888888', '', ''),
(7, '陳', 'chen', '123', '0988763833', '', ''),
(8, '林', 'lin', '123', '0983733849', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `lottery_list`
--
ALTER TABLE `lottery_list`
  ADD PRIMARY KEY (`period`);

--
-- 資料表索引 `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lottery_list`
--
ALTER TABLE `lottery_list`
  MODIFY `period` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
