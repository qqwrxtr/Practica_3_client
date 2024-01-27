-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 13 2023 г., 19:41
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `revenco`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `root` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `root`) VALUES
(24, '', 'teodorghirba1@gmail.com', '$2y$10$7UmnPHIy9DU0hEE.s2rem.fJ2Dzasl7MmC7103xNA/MnEexEHWaCO', 0),
(25, 'Bugatinca', 'asddsa@gmail.com', '$2y$10$EaMOQbbxl5jX.9hnwtsdy.ip/G0QtXkMHHpnow/T9CHTIV071LRka', 1),
(26, 'Bugatinca', 'asddsa@gmail.com', '$2y$10$Doa4GRG3bV8UlA4Y6RMMg.0NBl3Yn//QAguiajwPg4nRWmhXUepxq', 0),
(27, 'Bugatinca', 'asd@gmail.com', '$2y$10$q/tCKdatX.VoeKQ.gLMOT.dA6Nc.Dw6wH2FiN7kiJbJBLimAoPWmW', 1),
(28, 'NoName', 'da@gmail.com', '$2y$10$nalEwp.amuMmML3yzZdko.XtcS5tGgdalXTrhluoUgxF3s94VX8OO', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img`, `name`) VALUES
(2, '/revenco/img/poza2.2.jpg', 'Ceva'),
(3, '/revenco/img/poza3.jpg', 'Testor'),
(4, '/revenco/img/poza4.jpg', 'Mixer'),
(5, '/revenco/img/poza5.jpg', 'Fritura');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
