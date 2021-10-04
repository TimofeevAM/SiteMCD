-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 26 2021 г., 23:44
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `date of birth` date NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `residence address` varchar(60) NOT NULL,
  `phone number` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time to call` varchar(10) NOT NULL,
  `e-mail` varchar(40) NOT NULL,
  `about me` text NOT NULL,
  `current employment` varchar(30) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `name`, `date of birth`, `nationality`, `residence address`, `phone number`, `time to call`, `e-mail`, `about me`, `current employment`, `time`) VALUES
(1, '123', '2021-07-05', 'asdasd', 'asdasd', '666666', '567567', 'fgh', 'sdfsdf', '567567', '14^00'),
(7, '123', '2021-07-05', 'asdasd', 'asdasd', '666666', '567567', 'fgh', 'sdfsdf', '567567', '14^00'),
(8, 'орватмотваомт', '2021-07-05', 'asdasd', 'asdasd', '666666', '567567', 'fgh', 'sdfsdf', '567567', '14^00'),
(9, 'ЕГОР ываы', '2021-06-30', 'Русский', 'фывфыв', '89650900712', '14:00', 'dima1337@gmail.com', 'сообщение', 'нет', '14:00'),
(10, 'егор', '2021-06-30', 'ываыаыа', 'фывфыв', 'смиси', '14:00', 'asdasd@asd.gfh', 'рпрапрыавынет', 'нет', '14:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
