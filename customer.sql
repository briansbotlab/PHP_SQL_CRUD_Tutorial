-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `customer`
--
CREATE DATABASE IF NOT EXISTS `customer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `customer`;

-- --------------------------------------------------------

--
-- 資料表結構 `basic`
--

CREATE TABLE `basic` (
  `cust_no` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `basic`
--

INSERT INTO `basic` (`cust_no`, `name`, `id`, `address`, `tel_no`) VALUES
(10723001, '李依', 'R208123548', '雲林縣斗六市大學路3段123號', '(05)534-2601');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`cust_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
