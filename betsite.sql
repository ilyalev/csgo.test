-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 10 2017 г., 18:35
-- Версия сервера: 5.5.50-log
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `betsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(11) NOT NULL,
  `dateTime` varchar(10) NOT NULL,
  `team1Logo` varchar(255) NOT NULL,
  `team1Name` varchar(255) NOT NULL,
  `team2Logo` varchar(255) NOT NULL,
  `team2Name` varchar(255) NOT NULL,
  `eventLogo` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `format` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL,
  `team1Logo` varchar(255) NOT NULL,
  `team1Name` varchar(255) NOT NULL,
  `team1Score` int(11) NOT NULL,
  `team2Score` int(11) NOT NULL,
  `team2Logo` varchar(255) NOT NULL,
  `team2Name` varchar(255) NOT NULL,
  `eventLogo` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `format` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `steamID` varchar(20) NOT NULL,
  `tradeLink` varchar(150) NOT NULL,
  `balance` float NOT NULL,
  `promoCode` varchar(20) NOT NULL,
  `affilate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `steamID`, `tradeLink`, `balance`, `promoCode`, `affilate`) VALUES
(0, '76561198011179745', '', 100, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
