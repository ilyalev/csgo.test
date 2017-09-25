-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 15 2017 г., 18:19
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
-- Структура таблицы `livematches`
--

CREATE TABLE IF NOT EXISTS `livematches` (
  `id` int(11) NOT NULL,
  `dateTime` varchar(4) NOT NULL,
  `team1Logo` varchar(255) NOT NULL,
  `team1Name` varchar(255) NOT NULL,
  `team2Logo` varchar(255) NOT NULL,
  `team2Name` varchar(255) NOT NULL,
  `eventLogo` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Дамп данных таблицы `matches`
--

INSERT INTO `matches` (`id`, `dateTime`, `team1Logo`, `team1Name`, `team2Logo`, `team2Name`, `eventLogo`, `eventName`, `format`) VALUES
(2314741, '1505296800', 'https://static.hltv.org/images/team/logo/8008', 'Grayhound', 'https://static.hltv.org/images/team/logo/7517', 'Tainted Minds', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'ovp'),
(2314742, '1505300400', 'https://static.hltv.org/images/team/logo/7517', 'Tainted Minds', 'https://static.hltv.org/images/team/logo/8008', 'Grayhound', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'cbl'),
(2314725, '1505304000', 'https://static.hltv.org/images/team/logo/8347', 'ex-Outlaws', 'https://static.hltv.org/images/team/logo/7020', 'Spirit', 'https://static.hltv.org/images/eventLogos/3121.png', 'WCA 2017 Europe Closed Qualifier', 'bo3'),
(2314743, '1505304000', 'https://static.hltv.org/images/team/logo/7354', 'MVP PK', 'https://static.hltv.org/images/team/logo/8211', 'NASR', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'trn'),
(2314744, '1505307600', 'https://static.hltv.org/images/team/logo/8211', 'NASR', 'https://static.hltv.org/images/team/logo/7354', 'MVP PK', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'inf'),
(2314751, '1505314800', 'https://static.hltv.org/images/team/logo/7367', 'Quantum Bellator Fire', 'https://static.hltv.org/images/team/logo/6896', 'PRIDE', 'https://static.hltv.org/images/eventLogos/3121.png', 'WCA 2017 Europe Closed Qualifier', 'bo3'),
(2314766, '1505314800', 'https://static.hltv.org/images/team/logo/8380', 'forZe.FY', 'https://static.hltv.org/images/team/logo/7900', 'Spirit Academy', '/img/static/event/logo/noLogo.png', 'Stream.me Gauntlet: CIS vs EU #13', 'tba'),
(2314337, '1505318400', 'https://static.hltv.org/images/team/logo/7175', 'Heroic', 'https://static.hltv.org/images/team/logo/6855', 'Fragsters', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314730, '1505318400', 'https://static.hltv.org/images/team/logo/6959', 'MK', 'https://static.hltv.org/images/team/logo/7713', 'North Academy', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2313935, '1505322000', 'https://static.hltv.org/images/team/logo/5310', 'HellRaisers', 'https://static.hltv.org/images/team/logo/4674', 'LDLC', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'cch'),
(2314731, '1505322000', 'https://static.hltv.org/images/team/logo/6959', 'MK', 'https://static.hltv.org/images/team/logo/6745', 'eXtatus', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2314768, '1505322000', 'https://static.hltv.org/images/team/logo/8347', 'ex-Outlaws', 'https://static.hltv.org/images/team/logo/7586', 'VeritasAequitas', '/img/static/event/logo/noLogo.png', 'Stream.me Gauntlet: CIS vs EU #13', 'tba'),
(2314338, '1505325600', 'https://static.hltv.org/images/team/logo/6651', 'Gambit', 'https://static.hltv.org/images/team/logo/4602', 'Tricked', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314724, '1505325600', 'https://static.hltv.org/images/team/logo/7898', 'pro100', 'https://static.hltv.org/images/team/logo/6745', 'eXtatus', 'https://static.hltv.org/images/eventLogos/3121.png', 'WCA 2017 Europe Closed Qualifier', 'bo3'),
(2314732, '1505325600', 'https://static.hltv.org/images/team/logo/8120', 'AVANGAR', 'https://static.hltv.org/images/team/logo/7713', 'North Academy', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2314767, '1505325600', 'https://static.hltv.org/images/team/logo/7820', 'GoodJob', 'https://static.hltv.org/images/team/logo/7489', 'EPG', '/img/static/event/logo/noLogo.png', 'Stream.me Gauntlet: CIS vs EU #13', 'tba'),
(2313936, '1505326200', 'https://static.hltv.org/images/team/logo/4674', 'LDLC', 'https://static.hltv.org/images/team/logo/5310', 'HellRaisers', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'ovp'),
(2314733, '1505329200', 'https://static.hltv.org/images/team/logo/7020', 'Spirit', 'https://static.hltv.org/images/team/logo/8242', 'ARES', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2313937, '1505330400', 'https://static.hltv.org/images/team/logo/7532', 'BIG', 'https://static.hltv.org/images/team/logo/6902', 'GODSENT', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'cch'),
(2314734, '1505332800', 'https://static.hltv.org/images/team/logo/8120', 'AVANGAR', 'https://static.hltv.org/images/team/logo/8242', 'ARES', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2313938, '1505334600', 'https://static.hltv.org/images/team/logo/6902', 'GODSENT', 'https://static.hltv.org/images/team/logo/7532', 'BIG', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'mrg'),
(2314252, '1505340000', 'https://static.hltv.org/images/team/logo/4643', 'Denial', 'https://static.hltv.org/images/team/logo/6301', 'Splyce', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2313849, '1505343600', 'https://static.hltv.org/images/team/logo/7157', 'Rogue', 'https://static.hltv.org/images/team/logo/7801', 'Ghost', 'https://static.hltv.org/images/eventLogos/2867.png', 'ESL Pro League Season 6 North America', 'cch'),
(2314251, '1505347200', 'https://static.hltv.org/images/team/logo/7924', 'Rise Nation', 'https://static.hltv.org/images/team/logo/6301', 'Splyce', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2313850, '1505347800', 'https://static.hltv.org/images/team/logo/7801', 'Ghost', 'https://static.hltv.org/images/team/logo/7157', 'Rogue', 'https://static.hltv.org/images/eventLogos/2867.png', 'ESL Pro League Season 6 North America', 'inf'),
(2313851, '1505352000', 'https://static.hltv.org/images/team/logo/7557', 'Misfits', 'https://static.hltv.org/images/team/logo/6301', 'Splyce', 'https://static.hltv.org/images/eventLogos/2867.png', 'ESL Pro League Season 6 North America', 'trn'),
(2313852, '1505356200', 'https://static.hltv.org/images/team/logo/6301', 'Splyce', 'https://static.hltv.org/images/team/logo/7557', 'Misfits', 'https://static.hltv.org/images/eventLogos/2867.png', 'ESL Pro League Season 6 North America', 'nuke'),
(2314745, '1505383200', 'https://static.hltv.org/images/team/logo/5680', 'Athletico', 'https://static.hltv.org/images/team/logo/8021', 'Kings', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'tba'),
(2314746, '1505386800', 'https://static.hltv.org/images/team/logo/8021', 'Kings', 'https://static.hltv.org/images/team/logo/5680', 'Athletico', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'tba'),
(2314747, '1505390400', 'https://static.hltv.org/images/team/logo/6248', 'TheMongolz', 'https://static.hltv.org/images/team/logo/7092', '5POWER', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'tba'),
(2314748, '1505394000', 'https://static.hltv.org/images/team/logo/7092', '5POWER', 'https://static.hltv.org/images/team/logo/6248', 'TheMongolz', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'tba'),
(2314706, '1505395800', 'https://static.hltv.org/images/team/logo/8120', 'AVANGAR', 'https://static.hltv.org/images/team/logo/8369', 'SMOKE CRIMINALS', '/img/static/event/logo/noLogo.png', 'MakeMy.Bet Cup #1 Closed Qualifier', 'tba'),
(2314735, '1505401200', 'https://static.hltv.org/images/team/logo/7856', 'EnVyUs Academy', 'https://static.hltv.org/images/team/logo/7489', 'EPG', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2314765, '1505401200', 'https://static.hltv.org/images/team/logo/6745', 'eXtatus', 'https://static.hltv.org/images/team/logo/6896', 'PRIDE', 'https://static.hltv.org/images/eventLogos/3002.png', 'Mother Russia 1xBet', 'bo3'),
(2314339, '1505404800', 'https://static.hltv.org/images/team/logo/7175', 'Heroic', 'https://static.hltv.org/images/team/logo/6651', 'Gambit', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314736, '1505404800', 'https://static.hltv.org/images/team/logo/8347', 'ex-Outlaws', 'https://static.hltv.org/images/team/logo/7489', 'EPG', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2314707, '1505408400', 'https://static.hltv.org/images/team/logo/7187', 'Nexus', 'https://static.hltv.org/images/team/logo/8127', 'KlikTech', 'https://static.hltv.org/images/eventLogos/3014.png', 'Esports Balkan League Season 1', 'bo3'),
(2314737, '1505408400', 'https://static.hltv.org/images/team/logo/7856', 'EnVyUs Academy', 'https://static.hltv.org/images/team/logo/7969', 'Nemiga', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2314340, '1505412000', 'https://static.hltv.org/images/team/logo/6651', 'Gambit', 'https://static.hltv.org/images/team/logo/4674', 'LDLC', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314738, '1505412000', 'https://static.hltv.org/images/team/logo/6669', 'Binary Dragons', 'https://static.hltv.org/images/team/logo/7900', 'Spirit Academy', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'tba'),
(2314708, '1505415600', 'https://static.hltv.org/images/team/logo/7497', 'RESISTANCE', 'https://static.hltv.org/images/team/logo/8347', 'ex-Outlaws', 'https://static.hltv.org/images/eventLogos/3014.png', 'Esports Balkan League Season 1', 'bo3'),
(2314344, '1505419200', 'https://static.hltv.org/images/team/logo/6855', 'Fragsters', 'https://static.hltv.org/images/team/logo/4674', 'LDLC', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2');

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

--
-- Дамп данных таблицы `result`
--

INSERT INTO `result` (`id`, `team1Logo`, `team1Name`, `team1Score`, `team2Score`, `team2Logo`, `team2Name`, `eventLogo`, `eventName`, `format`) VALUES
(2314204, 'https://static.hltv.org/images/team/logo/8321', 'SIN', 2, 16, 'https://static.hltv.org/images/team/logo/5680', 'Athletico', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'mrg'),
(2314237, 'https://static.hltv.org/images/team/logo/5005', 'compLexity', 2, 0, 'https://static.hltv.org/images/team/logo/4643', 'Denial', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2314236, 'https://static.hltv.org/images/team/logo/7557', 'Misfits', 1, 1, 'https://static.hltv.org/images/team/logo/6301', 'Splyce', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2314480, 'https://static.hltv.org/images/team/logo/7726', 'Swole Patrol', 0, 2, 'https://static.hltv.org/images/team/logo/6290', 'Luminosity', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 Americas Qualifier #1', 'bo3'),
(2314322, 'https://static.hltv.org/images/team/logo/6978', 'Singularity', 2, 0, 'https://static.hltv.org/images/team/logo/8064', 'undefined', 'https://static.hltv.org/images/eventLogos/3002.png', 'Mother Russia 1xBet', 'bo3'),
(2314326, 'https://static.hltv.org/images/team/logo/5929', 'Space Soldiers', 1, 1, 'https://static.hltv.org/images/team/logo/6855', 'Fragsters', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314479, 'https://static.hltv.org/images/team/logo/8135', 'forZe', 0, 2, 'https://static.hltv.org/images/team/logo/7367', 'Quantum Bellator Fire', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 CIS Qualifier #1', 'bo3'),
(2314464, 'https://static.hltv.org/images/team/logo/6290', 'Luminosity', 2, 1, 'https://static.hltv.org/images/team/logo/6673', 'NRG', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 Americas Qualifier #1', 'bo3'),
(2314465, 'https://static.hltv.org/images/team/logo/7882', 'Guerrilla Tactics', 0, 2, 'https://static.hltv.org/images/team/logo/7726', 'Swole Patrol', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 Americas Qualifier #1', 'bo3'),
(2314454, 'https://static.hltv.org/images/team/logo/7367', 'Quantum Bellator Fire', 2, 1, 'https://static.hltv.org/images/team/logo/7898', 'pro100', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 CIS Qualifier #1', 'bo3'),
(2313913, 'https://static.hltv.org/images/team/logo/5995', 'G2', 2, 0, 'https://static.hltv.org/images/team/logo/7533', 'North', 'https://static.hltv.org/images/eventLogos/2684.png', 'DreamHack Masters Malmö 2017', 'bo3'),
(2314325, 'https://static.hltv.org/images/team/logo/4602', 'Tricked', 2, 0, 'https://static.hltv.org/images/team/logo/6134', 'Kinguin', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314474, 'https://static.hltv.org/images/team/logo/7640', 'Dignitas fe', 2, 1, 'https://static.hltv.org/images/team/logo/7418', 'expert fe', '/img/static/event/logo/noLogo.png', 'GIRLGAMER Esports Festival 2017', 'bo3'),
(2314478, 'https://static.hltv.org/images/team/logo/7187', 'Nexus', 1, 2, 'https://static.hltv.org/images/team/logo/8120', 'AVANGAR', '/img/static/event/logo/noLogo.png', 'WCA 2017 Europe Qualifier #2', 'bo3'),
(2314477, 'https://static.hltv.org/images/team/logo/7367', 'Quantum Bellator Fire', 2, 0, 'https://static.hltv.org/images/team/logo/8339', 'Dream', '/img/static/event/logo/noLogo.png', 'WCA 2017 Europe Qualifier #2', 'bo3'),
(2314473, 'https://static.hltv.org/images/team/logo/7939', 'Riot fe', 7, 16, 'https://static.hltv.org/images/team/logo/7418', 'expert fe', '/img/static/event/logo/noLogo.png', 'GIRLGAMER Esports Festival 2017', 'ovp'),
(2313912, 'https://static.hltv.org/images/team/logo/6651', 'Gambit', 0, 2, 'https://static.hltv.org/images/team/logo/7533', 'North', 'https://static.hltv.org/images/eventLogos/2684.png', 'DreamHack Masters Malmö 2017', 'bo3'),
(2314475, 'https://static.hltv.org/images/team/logo/4494', 'mousesports', 0, 2, 'https://static.hltv.org/images/team/logo/5929', 'Space Soldiers', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 Europe Qualifier #1', 'bo3'),
(2314471, 'https://static.hltv.org/images/team/logo/7798', 'wNv', 0, 2, 'https://static.hltv.org/images/team/logo/7660', 'Flash', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 China Closed Qualifier', 'bo3'),
(2314470, 'https://static.hltv.org/images/team/logo/7606', 'ViCi', 2, 0, 'https://static.hltv.org/images/team/logo/8345', 'Bravery', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 China Closed Qualifier', 'bo3'),
(2314472, 'https://static.hltv.org/images/team/logo/7418', 'expert fe', 16, 6, 'https://static.hltv.org/images/team/logo/8334', 'eLixir fe', '/img/static/event/logo/noLogo.png', 'GIRLGAMER Esports Festival 2017', 'cch'),
(2314353, 'https://static.hltv.org/images/team/logo/7640', 'Dignitas fe', 16, 3, 'https://static.hltv.org/images/team/logo/7939', 'Riot fe', '/img/static/event/logo/noLogo.png', 'GIRLGAMER Esports Festival 2017', 'mrg'),
(2314468, 'https://static.hltv.org/images/team/logo/7024', 'EHOME', 1, 2, 'https://static.hltv.org/images/team/logo/8143', 'WG', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 China Closed Qualifier', 'bo3'),
(2314456, 'https://static.hltv.org/images/team/logo/5929', 'Space Soldiers', 2, 0, 'https://static.hltv.org/images/team/logo/6669', 'Binary Dragons', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 Europe Qualifier #1', 'bo3'),
(2314352, 'https://static.hltv.org/images/team/logo/7939', 'Riot fe', 16, 6, 'https://static.hltv.org/images/team/logo/8334', 'eLixir fe', '/img/static/event/logo/noLogo.png', 'GIRLGAMER Esports Festival 2017', 'mrg'),
(2314210, 'https://static.hltv.org/images/team/logo/8225', 'GoldenMix', 2, 1, 'https://static.hltv.org/images/team/logo/8228', 'Action Live', 'https://static.hltv.org/images/eventLogos/3102.png', 'ROG MASTERS 2017 TW, HK &amp; MO Regional Finals', 'bo3'),
(2313911, 'https://static.hltv.org/images/team/logo/5995', 'G2', 2, 0, 'https://static.hltv.org/images/team/logo/4411', 'NiP', 'https://static.hltv.org/images/eventLogos/2684.png', 'DreamHack Masters Malmö 2017', 'bo3'),
(2314455, 'https://static.hltv.org/images/team/logo/8064', 'undefined', 0, 2, 'https://static.hltv.org/images/team/logo/4494', 'mousesports', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 Europe Qualifier #1', 'bo3'),
(2314446, 'https://static.hltv.org/images/team/logo/8008', 'Grayhound', 3, 1, 'https://static.hltv.org/images/team/logo/8021', 'Kings', '/img/static/event/logo/noLogo.png', 'ROG MASTERS 2017 Australian Open Qualifier', 'bo5'),
(2314351, 'https://static.hltv.org/images/team/logo/7640', 'Dignitas fe', 16, 6, 'https://static.hltv.org/images/team/logo/7418', 'expert fe', '/img/static/event/logo/noLogo.png', 'GIRLGAMER Esports Festival 2017', 'mrg'),
(2314463, 'https://static.hltv.org/images/team/logo/6774', 'Signature', 2, 0, 'https://static.hltv.org/images/team/logo/7839', 'NSPR', 'https://static.hltv.org/images/eventLogos/3080.png', 'GEXT Thailand 2017', 'bo3'),
(2314466, 'https://static.hltv.org/images/team/logo/7893', 'Eclipse.o', 0, 2, 'https://static.hltv.org/images/team/logo/7479', 'EMP', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 China Closed Qualifier', 'bo3'),
(2314467, 'https://static.hltv.org/images/team/logo/4865', 'New4', 2, 0, 'https://static.hltv.org/images/team/logo/8344', 'EHOME.SP', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 China Closed Qualifier', 'bo3'),
(2314453, 'https://static.hltv.org/images/team/logo/8135', 'forZe', 1, 0, 'https://static.hltv.org/images/team/logo/7900', 'Spirit Academy', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 CIS Qualifier #1', 'bo3'),
(2314469, 'https://static.hltv.org/images/team/logo/6908', 'FIVE', 0, 1, 'https://static.hltv.org/images/team/logo/7092', '5POWER', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 China Closed Qualifier', 'bo3'),
(2314462, 'https://static.hltv.org/images/team/logo/6353', 'MiTH', 0, 2, 'https://static.hltv.org/images/team/logo/8220', 'Maple', 'https://static.hltv.org/images/eventLogos/3080.png', 'GEXT Thailand 2017', 'bo3'),
(2314211, 'https://static.hltv.org/images/team/logo/8177', 'Anti Eco Eco Club', 0, 2, 'https://static.hltv.org/images/team/logo/8175', 'ERACOST', 'https://static.hltv.org/images/eventLogos/3102.png', 'ROG MASTERS 2017 TW, HK &amp; MO Regional Finals', 'bo3'),
(2314444, 'https://static.hltv.org/images/team/logo/5680', 'Athletico', 1, 2, 'https://static.hltv.org/images/team/logo/8021', 'Kings', '/img/static/event/logo/noLogo.png', 'ROG MASTERS 2017 Australian Open Qualifier', 'bo3'),
(2314443, 'https://static.hltv.org/images/team/logo/8021', 'Kings', 2, 0, 'https://static.hltv.org/images/team/logo/6010', 'Chiefs', '/img/static/event/logo/noLogo.png', 'ROG MASTERS 2017 Australian Open Qualifier', 'bo3'),
(2314432, 'https://static.hltv.org/images/team/logo/5680', 'Athletico', 1, 2, 'https://static.hltv.org/images/team/logo/8008', 'Grayhound', '/img/static/event/logo/noLogo.png', 'ROG MASTERS 2017 Australian Open Qualifier', 'bo3'),
(2314235, 'https://static.hltv.org/images/team/logo/5005', 'compLexity', 2, 0, 'https://static.hltv.org/images/team/logo/7616', 'FRENCH CANADIANS', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2314434, 'https://static.hltv.org/images/team/logo/8341', 'deStiny &amp; co.', 0, 2, 'https://static.hltv.org/images/team/logo/6010', 'Chiefs', '/img/static/event/logo/noLogo.png', 'ROG MASTERS 2017 Australian Open Qualifier', 'bo3'),
(2314435, 'https://static.hltv.org/images/team/logo/7517', 'Tainted Minds', 0, 2, 'https://static.hltv.org/images/team/logo/8021', 'Kings', '/img/static/event/logo/noLogo.png', 'ROG MASTERS 2017 Australian Open Qualifier', 'bo3'),
(2314234, 'https://static.hltv.org/images/team/logo/5005', 'compLexity', 2, 0, 'https://static.hltv.org/images/team/logo/6707', 'RONIN', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2313910, 'https://static.hltv.org/images/team/logo/7533', 'North', 2, 0, 'https://static.hltv.org/images/team/logo/7010', 'Immortals', 'https://static.hltv.org/images/eventLogos/2684.png', 'DreamHack Masters Malmö 2017', 'bo3'),
(2314461, 'https://static.hltv.org/images/team/logo/7880', 'Gorilla Core', 10, 16, 'https://static.hltv.org/images/team/logo/7726', 'Swole Patrol', '/img/static/event/logo/noLogo.png', 'EPICENTER 2017 Americas Qualifier #1', 'inf'),
(2314268, 'https://static.hltv.org/images/team/logo/5680', 'Athletico', 13, 16, 'https://static.hltv.org/images/team/logo/5293', 'AVANT', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'mrg'),
(2314267, 'https://static.hltv.org/images/team/logo/7517', 'Tainted Minds', 16, 3, 'https://static.hltv.org/images/team/logo/8321', 'SIN', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'mrg'),
(2314266, 'https://static.hltv.org/images/team/logo/8321', 'SIN', 16, 13, 'https://static.hltv.org/images/team/logo/7517', 'Tainted Minds', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'cch'),
(2314539, 'https://static.hltv.org/images/team/logo/4494', 'mousesports', 3, 2, 'https://static.hltv.org/images/team/logo/5973', 'Liquid', 'https://static.hltv.org/images/eventLogos/3061.png', 'ESG Tour Mykonos 2017', 'bo5'),
(2314701, 'https://static.hltv.org/images/team/logo/7425', 'DIVIZON', 1, 2, 'https://static.hltv.org/images/team/logo/5121', 'Berzerk', 'https://static.hltv.org/images/eventLogos/3164.png', 'German Clash Season 2 Finals', 'bo3'),
(2314559, 'https://static.hltv.org/images/team/logo/7010', 'Immortals', 0, 2, 'https://static.hltv.org/images/team/logo/7533', 'North', 'https://static.hltv.org/images/eventLogos/2572.png', 'DreamHack Open Montreal 2017', 'bo3'),
(2314695, 'https://static.hltv.org/images/team/logo/5579', 'volgare', 1, 2, 'https://static.hltv.org/images/team/logo/7820', 'GoodJob', 'https://static.hltv.org/images/eventLogos/3162.png', 'Vreecase Cup #1', 'bo3'),
(2314558, 'https://static.hltv.org/images/team/logo/7533', 'North', 2, 0, 'https://static.hltv.org/images/team/logo/5752', 'Cloud9', 'https://static.hltv.org/images/eventLogos/2572.png', 'DreamHack Open Montreal 2017', 'bo3'),
(2314702, 'https://static.hltv.org/images/team/logo/7340', 'Wolsung', 2, 0, 'https://static.hltv.org/images/team/logo/8238', 'CK$', '/img/static/event/logo/noLogo.png', 'HyperX GOEXANIMO CS:GO 5x5 #5', 'bo3'),
(2314666, 'https://static.hltv.org/images/team/logo/7956', 'WiseWizards', 1, 2, 'https://static.hltv.org/images/team/logo/5121', 'Berzerk', 'https://static.hltv.org/images/eventLogos/3164.png', 'German Clash Season 2 Finals', 'bo3'),
(2314699, 'https://static.hltv.org/images/team/logo/5310', 'HellRaisers', 2, 1, 'https://static.hltv.org/images/team/logo/6896', 'PRIDE', 'https://static.hltv.org/images/eventLogos/3145.png', 'EPICENTER 2017 Europe Qualifier #2', 'bo3'),
(2314689, 'https://static.hltv.org/images/team/logo/8330', 'Vikings', 0, 2, 'https://static.hltv.org/images/team/logo/7655', 'Ultimate', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Vietnam Regional Finals', 'bo3'),
(2314557, 'https://static.hltv.org/images/team/logo/7010', 'Immortals', 2, 0, 'https://static.hltv.org/images/team/logo/5974', 'CLG', 'https://static.hltv.org/images/eventLogos/2572.png', 'DreamHack Open Montreal 2017', 'bo3'),
(2314694, 'https://static.hltv.org/images/team/logo/7340', 'Wolsung', 2, 0, 'https://static.hltv.org/images/team/logo/8377', 'Superbia', '/img/static/event/logo/noLogo.png', 'HyperX GOEXANIMO CS:GO 5x5 #5', 'bo3'),
(2314700, 'https://static.hltv.org/images/team/logo/8238', 'CK$', 2, 0, 'https://static.hltv.org/images/team/logo/7927', 'aesthetic', '/img/static/event/logo/noLogo.png', 'HyperX GOEXANIMO CS:GO 5x5 #5', 'bo3'),
(2314698, 'https://static.hltv.org/images/team/logo/6745', 'eXtatus', 2, 0, 'https://static.hltv.org/images/team/logo/4602', 'Tricked', 'https://static.hltv.org/images/eventLogos/2973.png', 'Cross Border Esport 2017', 'bo3'),
(2314692, 'https://static.hltv.org/images/team/logo/7606', 'ViCi', 2, 1, 'https://static.hltv.org/images/team/logo/7660', 'Flash', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals', 'bo3'),
(2314538, 'https://static.hltv.org/images/team/logo/5378', 'Virtus.pro', 1, 2, 'https://static.hltv.org/images/team/logo/6137', 'SK', 'https://static.hltv.org/images/eventLogos/3061.png', 'ESG Tour Mykonos 2017', 'bo3'),
(2314663, 'https://static.hltv.org/images/team/logo/5121', 'Berzerk', 1, 2, 'https://static.hltv.org/images/team/logo/7425', 'DIVIZON', 'https://static.hltv.org/images/eventLogos/3164.png', 'German Clash Season 2 Finals', 'bo3'),
(2314583, 'https://static.hltv.org/images/team/logo/7733', 'BOOM', 0, 2, 'https://static.hltv.org/images/team/logo/7344', 'Recca', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Indonesia Regional Finals', 'bo3'),
(2314688, 'https://static.hltv.org/images/team/logo/7655', 'Ultimate', 2, 1, 'https://static.hltv.org/images/team/logo/8191', '24BHB', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Vietnam Regional Finals', 'bo3'),
(2314690, 'https://static.hltv.org/images/team/logo/7800', '5Love', 2, 1, 'https://static.hltv.org/images/team/logo/8334', 'eLixir fe', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals Female', 'bo3'),
(2314697, 'https://static.hltv.org/images/team/logo/7820', 'GoodJob', 1, 2, 'https://static.hltv.org/images/team/logo/7900', 'Spirit Academy', 'https://static.hltv.org/images/eventLogos/3147.png', 'EPICENTER 2017 CIS Qualifier #2', 'bo3'),
(2314664, 'https://static.hltv.org/images/team/logo/7864', 'TTFU', 0, 2, 'https://static.hltv.org/images/team/logo/6959', 'MK', 'https://static.hltv.org/images/eventLogos/3163.png', 'OMEN by HP ComicCon Bulgaria 2017', 'bo3'),
(2314682, 'https://static.hltv.org/images/team/logo/7713', 'North Academy', 1, 2, 'https://static.hltv.org/images/team/logo/4602', 'Tricked', 'https://static.hltv.org/images/eventLogos/2973.png', 'Cross Border Esport 2017', 'bo3'),
(2314265, 'https://static.hltv.org/images/team/logo/7212', 'Dark Sided', 7, 16, 'https://static.hltv.org/images/team/logo/6010', 'Chiefs', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'cbl'),
(2314693, 'https://static.hltv.org/images/team/logo/4865', 'New4', 2, 0, 'https://static.hltv.org/images/team/logo/8118', 'MAX', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals', 'bo3'),
(2314662, 'https://static.hltv.org/images/team/logo/8367', 'TEAMPLAY', 1, 2, 'https://static.hltv.org/images/team/logo/6896', 'PRIDE', 'https://static.hltv.org/images/eventLogos/3145.png', 'EPICENTER 2017 Europe Qualifier #2', 'bo3'),
(2314264, 'https://static.hltv.org/images/team/logo/6010', 'Chiefs', 16, 7, 'https://static.hltv.org/images/team/logo/7212', 'Dark Sided', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'trn'),
(2314636, 'https://static.hltv.org/images/team/logo/8262', 'Beyond.Maple', 2, 1, 'https://static.hltv.org/images/team/logo/6774', 'Signature', 'https://static.hltv.org/images/eventLogos/3077.png', 'eXTREMESLAND 2017 Thailand Regional Finals', 'bo3'),
(2314582, 'https://static.hltv.org/images/team/logo/7344', 'Recca', 2, 0, 'https://static.hltv.org/images/team/logo/8204', 'Darayu Delta Squad', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Indonesia Regional Finals', 'bo3'),
(2314263, 'https://static.hltv.org/images/team/logo/8021', 'Kings', 10, 16, 'https://static.hltv.org/images/team/logo/8008', 'Grayhound', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'inf'),
(2314681, 'https://static.hltv.org/images/team/logo/6745', 'eXtatus', 2, 0, 'https://static.hltv.org/images/team/logo/8113', 'Sharks', 'https://static.hltv.org/images/eventLogos/2973.png', 'Cross Border Esport 2017', 'bo3'),
(2314660, 'https://static.hltv.org/images/team/logo/7898', 'pro100', 0, 2, 'https://static.hltv.org/images/team/logo/7820', 'GoodJob', 'https://static.hltv.org/images/eventLogos/3147.png', 'EPICENTER 2017 CIS Qualifier #2', 'bo3'),
(2314659, 'https://static.hltv.org/images/team/logo/8370', 'CT', 0, 2, 'https://static.hltv.org/images/team/logo/7900', 'Spirit Academy', 'https://static.hltv.org/images/eventLogos/3147.png', 'EPICENTER 2017 CIS Qualifier #2', 'bo3'),
(2314661, 'https://static.hltv.org/images/team/logo/7865', 'HAVU', 0, 2, 'https://static.hltv.org/images/team/logo/5310', 'HellRaisers', 'https://static.hltv.org/images/eventLogos/3145.png', 'EPICENTER 2017 Europe Qualifier #2', 'bo3'),
(2314262, 'https://static.hltv.org/images/team/logo/8008', 'Grayhound', 16, 13, 'https://static.hltv.org/images/team/logo/8021', 'Kings', 'https://static.hltv.org/images/eventLogos/3129.png', 'AOC CyberGamer Premier League Spring 2017', 'cch'),
(2314687, 'https://static.hltv.org/images/team/logo/8330', 'Vikings', 2, 0, 'https://static.hltv.org/images/team/logo/8191', '24BHB', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Vietnam Regional Finals', 'bo3'),
(2314673, 'https://static.hltv.org/images/team/logo/7660', 'Flash', 2, 1, 'https://static.hltv.org/images/team/logo/8118', 'MAX', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals', 'bo3'),
(2314691, 'https://static.hltv.org/images/team/logo/8375', 'LLG', 2, 1, 'https://static.hltv.org/images/team/logo/8374', 'Etab', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals Female', 'bo3'),
(2314672, 'https://static.hltv.org/images/team/logo/7606', 'ViCi', 2, 0, 'https://static.hltv.org/images/team/logo/4865', 'New4', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals', 'bo3'),
(2314581, 'https://static.hltv.org/images/team/logo/8208', 'AKARA', 1, 2, 'https://static.hltv.org/images/team/logo/7733', 'BOOM', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Indonesia Regional Finals', 'bo3'),
(2314635, 'https://static.hltv.org/images/team/logo/7839', 'NSPR', 0, 2, 'https://static.hltv.org/images/team/logo/6774', 'Signature', 'https://static.hltv.org/images/eventLogos/3077.png', 'eXTREMESLAND 2017 Thailand Regional Finals', 'bo3'),
(2314686, 'https://static.hltv.org/images/team/logo/7229', 'Rebellion', 13, 16, 'https://static.hltv.org/images/team/logo/7655', 'Ultimate', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Vietnam Regional Finals', 'trn'),
(2314676, 'https://static.hltv.org/images/team/logo/7800', '5Love', 0, 2, 'https://static.hltv.org/images/team/logo/8374', 'Etab', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals Female', 'bo3'),
(2314675, 'https://static.hltv.org/images/team/logo/8334', 'eLixir fe', 0, 2, 'https://static.hltv.org/images/team/logo/8375', 'LLG', '/img/static/event/logo/noLogo.png', 'WESG 2017 China Finals Female', 'bo3'),
(2314634, 'https://static.hltv.org/images/team/logo/6353', 'MiTH', 0, 2, 'https://static.hltv.org/images/team/logo/8262', 'Beyond.Maple', 'https://static.hltv.org/images/eventLogos/3077.png', 'eXTREMESLAND 2017 Thailand Regional Finals', 'bo3'),
(2314685, 'https://static.hltv.org/images/team/logo/7655', 'Ultimate', 14, 16, 'https://static.hltv.org/images/team/logo/8191', '24BHB', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Vietnam Regional Finals', 'cbl'),
(2314684, 'https://static.hltv.org/images/team/logo/7229', 'Rebellion', 13, 16, 'https://static.hltv.org/images/team/logo/8330', 'Vikings', '/img/static/event/logo/noLogo.png', 'eXTREMESLAND 2017 Vietnam Regional Finals', 'trn'),
(2314683, 'https://static.hltv.org/images/team/logo/6673', 'NRG', 2, 0, 'https://static.hltv.org/images/team/logo/5479', 'Mythic', 'https://static.hltv.org/images/eventLogos/3149.png', 'EPICENTER 2017 Americas Qualifier #2', 'bo3'),
(2314670, 'https://static.hltv.org/images/team/logo/7699', 'AEON', 0, 2, 'https://static.hltv.org/images/team/logo/8125', 'Hafnet', '/img/static/event/logo/noLogo.png', 'LCG Copa Invierno 2017', 'bo3'),
(2314679, 'https://static.hltv.org/images/team/logo/6118', 'Tempo Storm', 1, 2, 'https://static.hltv.org/images/team/logo/5479', 'Mythic', 'https://static.hltv.org/images/eventLogos/3149.png', 'EPICENTER 2017 Americas Qualifier #2', 'bo3'),
(2314556, 'https://static.hltv.org/images/team/logo/5752', 'Cloud9', 2, 0, 'https://static.hltv.org/images/team/logo/6290', 'Luminosity', 'https://static.hltv.org/images/eventLogos/2572.png', 'DreamHack Open Montreal 2017', 'bo3'),
(2314495, 'https://static.hltv.org/images/team/logo/4608', 'Natus Vincere', 0, 2, 'https://static.hltv.org/images/team/logo/5995', 'G2', 'https://static.hltv.org/images/eventLogos/3016.png', 'ELEAGUE CS:GO Premier 2017', 'bo3'),
(2314680, 'https://static.hltv.org/images/team/logo/6673', 'NRG', 2, 0, 'https://static.hltv.org/images/team/logo/8373', 'kr0nikz', 'https://static.hltv.org/images/eventLogos/3149.png', 'EPICENTER 2017 Americas Qualifier #2', 'bo3'),
(2314643, 'https://static.hltv.org/images/team/logo/4602', 'Tricked', 2, 0, 'https://static.hltv.org/images/team/logo/6855', 'Fragsters', 'https://static.hltv.org/images/eventLogos/2973.png', 'Cross Border Esport 2017', 'bo3'),
(2314255, 'https://static.hltv.org/images/team/logo/7924', 'Rise Nation', 2, 0, 'https://static.hltv.org/images/team/logo/4643', 'Denial', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2313846, 'https://static.hltv.org/images/team/logo/6301', 'Splyce', 16, 9, 'https://static.hltv.org/images/team/logo/7157', 'Rogue', 'https://static.hltv.org/images/eventLogos/2867.png', 'ESL Pro League Season 6 North America', 'nuke'),
(2314250, 'https://static.hltv.org/images/team/logo/6118', 'Tempo Storm', 1, 1, 'https://static.hltv.org/images/team/logo/4643', 'Denial', 'https://static.hltv.org/images/eventLogos/3056.png', 'ECS Season 4 NA Development League', 'bo2'),
(2313845, 'https://static.hltv.org/images/team/logo/7157', 'Rogue', 14, 16, 'https://static.hltv.org/images/team/logo/6301', 'Splyce', 'https://static.hltv.org/images/eventLogos/2867.png', 'ESL Pro League Season 6 North America', 'trn'),
(2314722, 'https://static.hltv.org/images/team/logo/6896', 'PRIDE', 2, 0, 'https://static.hltv.org/images/team/logo/6978', 'Singularity', 'https://static.hltv.org/images/eventLogos/3002.png', 'Mother Russia 1xBet', 'bo3'),
(2313934, 'https://static.hltv.org/images/team/logo/7175', 'Heroic', 1, 16, 'https://static.hltv.org/images/team/logo/7532', 'BIG', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'ovp'),
(2313933, 'https://static.hltv.org/images/team/logo/7532', 'BIG', 19, 15, 'https://static.hltv.org/images/team/logo/7175', 'Heroic', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'trn'),
(2314336, 'https://static.hltv.org/images/team/logo/6651', 'Gambit', 1, 1, 'https://static.hltv.org/images/team/logo/6134', 'Kinguin', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314728, 'https://static.hltv.org/images/team/logo/6669', 'Binary Dragons', 16, 11, 'https://static.hltv.org/images/team/logo/7331', 'iGame.com', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'mrg'),
(2313932, 'https://static.hltv.org/images/team/logo/6902', 'GODSENT', 8, 16, 'https://static.hltv.org/images/team/logo/4674', 'LDLC', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'ovp'),
(2314727, 'https://static.hltv.org/images/team/logo/8347', 'ex-Outlaws', 13, 16, 'https://static.hltv.org/images/team/logo/7969', 'Nemiga', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'cbl'),
(2314565, 'https://static.hltv.org/images/team/logo/6978', 'Singularity', 2, 0, 'https://static.hltv.org/images/team/logo/4602', 'Tricked', 'https://static.hltv.org/images/eventLogos/3002.png', 'Mother Russia 1xBet', 'bo3'),
(2313931, 'https://static.hltv.org/images/team/logo/4674', 'LDLC', 16, 9, 'https://static.hltv.org/images/team/logo/6902', 'GODSENT', 'https://static.hltv.org/images/eventLogos/2866.png', 'ESL Pro League Season 6 Europe', 'inf'),
(2314335, 'https://static.hltv.org/images/team/logo/6651', 'Gambit', 1, 1, 'https://static.hltv.org/images/team/logo/6855', 'Fragsters', 'https://static.hltv.org/images/eventLogos/3055.png', 'ECS Season 4 EU Development League', 'bo2'),
(2314726, 'https://static.hltv.org/images/team/logo/6896', 'PRIDE', 16, 7, 'https://static.hltv.org/images/team/logo/7969', 'Nemiga', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'trn'),
(2314729, 'https://static.hltv.org/images/team/logo/6896', 'PRIDE', 16, 11, 'https://static.hltv.org/images/team/logo/7900', 'Spirit Academy', 'https://static.hltv.org/images/eventLogos/3157.png', 'Hellcase Cup 6', 'trn'),
(2314723, 'https://static.hltv.org/images/team/logo/6959', 'MK', 0, 2, 'https://static.hltv.org/images/team/logo/7856', 'EnVyUs Academy', 'https://static.hltv.org/images/eventLogos/3121.png', 'WCA 2017 Europe Closed Qualifier', 'bo3'),
(2314720, 'https://static.hltv.org/images/team/logo/7567', 'B.O.O.T-d[S]', 16, 2, 'https://static.hltv.org/images/team/logo/7344', 'Recca', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'mrg'),
(2314719, 'https://static.hltv.org/images/team/logo/7344', 'Recca', 16, 11, 'https://static.hltv.org/images/team/logo/7567', 'B.O.O.T-d[S]', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'cch'),
(2314718, 'https://static.hltv.org/images/team/logo/6468', 'Legacy', 12, 16, 'https://static.hltv.org/images/team/logo/6010', 'Chiefs', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'ovp'),
(2314717, 'https://static.hltv.org/images/team/logo/6010', 'Chiefs', 16, 8, 'https://static.hltv.org/images/team/logo/6468', 'Legacy', 'https://static.hltv.org/images/eventLogos/3134.png', 'ZEN League Season 2', 'cbl'),
(2314704, 'https://static.hltv.org/images/team/logo/7669', 'Squared', 1, 2, 'https://static.hltv.org/images/team/logo/6959', 'MK', 'https://static.hltv.org/images/eventLogos/3014.png', 'Esports Balkan League Season 1', 'bo3');

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
