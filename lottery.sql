-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(0, '2020-11-30 00:00:00.0', '2020-12-02 23:59:59.0', '2020-12-03 20:00:00.0', 33, 500, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `period` int(10) NOT NULL,
  `num` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `sign` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `record`
--

INSERT INTO `record` (`id`, `uid`, `period`, `num`, `price`, `sign`) VALUES
(1, 1, 1, 10, 100, '');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `public key` varchar(1000) NOT NULL,
  `private key` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`uid`, `account`, `password`, `public key`, `private key`) VALUES
(1, 'test', 'test', '', '');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
