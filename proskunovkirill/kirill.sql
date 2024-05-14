-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2024 г., 20:21
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kirill`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `about` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `title`, `about`, `price`, `img`) VALUES
(1, 'RTX 4060', '8ГБ GDDR6', 32.999, 'det1.jpg'),
(3, 'I5 12400F', '6 ядер 12 потоков', 13.999, 'det2.jpg'),
(4, 'Powercase', 'Vision white', 8.999, 'det3.jpg'),
(5, 'Kingston FURY', '16ГБ 3200МГЦ', 4.999, 'det4.jpg'),
(6, 'Core i7 12700k', '12 ядер 20 потоков', 37.999, 'det6.jpg'),
(7, 'RTX 3060', '8ГБ GDDR6', 30.799, 'det5.jpg'),
(13, 'G.skill DDR5 Trident', '32 ГБ 6400 МГЦ', 14.999, 'det7.jpg'),
(15, 'ADATA', '16 ГБ DDR4 3200 MГЦ', 5.999, 'det8.jpg'),
(17, 'ADATA XPG Gammix', '16 ГБ 3200 МГЦ', 8.999, 'det9.jpg'),
(18, 'RTX 4080 ASUS', '16 ГБ (PROART-RTX4080-O16G)', 158.999, 'det10.jpg'),
(19, 'RTX 3060', '12 ГБ GDDR6', 29.999, 'det11.jpg'),
(20, 'i3-12100f', '12 ядер 20 потоков', 7.799, 'det13.jpg'),
(31, 'i9 12900k', 'i9 12900k', 40.89, 'det18.jpg'),
(32, 'RTX 3050', 'ASUS DUAL-RTX3050-O8G-V2', 25, 'det19.jpg'),
(33, 'Hyper x', 'FURY HX316C10FWK2/8', 6, 'det21.jpg'),
(34, 'HYTE Y60', 'Современный эстетический корпус для игрового ПК Mid-Tower ATX', 12, 'det17.jpg'),
(35, 'Игровой корпус для ПК Аквариум', 'WJCOOLMAN белый', 9.5, 'det16.jpg'),
(36, 'Игровой корпус для ПК Аквариум', 'WJCOOLMAN розовый', 9.799, 'det15.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(355) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(6, 'саня', 'sanches@gmail.com', '1ae816429e3eb9b80089bd7b60f4a975'),
(7, 'df', 'df@df', '96e79218965eb72c92a549dd5a330112'),
(8, '', 'df@df', '96e79218965eb72c92a549dd5a330112');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
