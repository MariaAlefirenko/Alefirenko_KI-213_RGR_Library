-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2023 г., 11:43
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `answers_id` bigint(20) UNSIGNED NOT NULL,
  `requests_id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `date_of_answer` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `authors_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`authors_id`, `name`) VALUES
(1, 'Світлий Імператор'),
(2, 'Темний Володар'),
(3, 'Безсмертний Кондрат Кондратович'),
(4, 'Присталова Світлана Ігорівна'),
(5, 'Савельєв Ігор Володимирович'),
(6, 'Вілбур Сміт'),
(7, 'Джеймс Фенімор Купер'),
(8, 'Вальтер Скотт'),
(9, 'Вільям Шекспір'),
(10, 'Крістофер Паоліні');

-- --------------------------------------------------------

--
-- Структура таблицы `authors_books`
--

CREATE TABLE `authors_books` (
  `authors_books_id` bigint(20) UNSIGNED NOT NULL,
  `authors_id` bigint(20) UNSIGNED NOT NULL,
  `books_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `authors_books`
--

INSERT INTO `authors_books` (`authors_books_id`, `authors_id`, `books_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 3, 3),
(6, 4, 5),
(5, 5, 4),
(7, 6, 6),
(8, 7, 7),
(9, 8, 8),
(10, 9, 9),
(11, 10, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `books_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `number_of_copies` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`books_id`, `title`, `description`, `price`, `number_of_copies`) VALUES
(1, 'Як правити світом, що б не дізналися санітари', '   Світлий Імператор, Темний Володар  Як правити світом, що б не дізналися санітари.  Ч.: Менеджмент, 1994. 666 с.   ', 999, 15),
(2, 'Психологія Безсмертних. Як не збожеволіти?', 'Психологія Безсмертних. В 2 кн. Кн 1. Як не збожеволіти? / К.К. Безсмертний. М.: Психологія, 2012. 696 с.', 1000, 5),
(3, 'Психологія Безсмертних. Як знайти себе у вічності?', 'Психологія Безсмертних. В 2 кн. Кн 2.  Як знайти себе у вічності? / К.К. Безсмертний. М.: Психологія, 2012. 1500 с.', 3366, 5),
(4, 'Електрика та магнетизм. Хвилі. Оптика', 'Савельєв І.В. Курс загальної фізики: Учебн. посібник. В 3-х т. Т. 2. Електрика та магнетизм. Хвилі. Оптика. - 3-є вид., випр. - М.: Наука. Гол. ред. фіз.-мат. літ., 1988. - 496 с., іл.', 350, 30),
(5, 'Як розвинути суперпам\'ять, інтелект і увагу', 'Як розвинути суперпам\'ять, інтелект і увагу / Світлана Ігорівна Присталова. - Харьків : Книжковий Клуб \"Клуб Сімейного Дозвілля\"; Белгород : ООО\"Книжковий Клуб \"Клуб Сімейного Дозвілля\"\", 2013. 320 с.: іл.', 250, 10),
(6, 'Сьомий сувій', 'Сьомий сувій : [роман]/Вілбур Сміт; переклад з англ. М.С. Рижкової. - М.: АСТ: Транзиткнига, 2005. - 638, [2]с.', 300, 15),
(7, 'Останній із могікан', 'Останній із могікан / Джеймс Фенімор Купер. - Харьків : Книжковий Клуб \"Клуб Сімейного Дозвілля\"; Белгород : ООО\"Книжковий Клуб \"Клуб Сімейного Дозвілля\"\", 2013. 238 с.', 100, 15),
(8, 'Айвенго', 'Айвенго / Вальтер Скотт. - Харьків : Книжковий Клуб \"Клуб Сімейного Дозвілля\"; Белгород : ООО\"Книжковий Клуб \"Клуб Сімейного Дозвілля\"\", 2012. 238 с.', 100, 15),
(9, 'Гамлет ', 'Гамлет : Вільям Шекспір; переклад з англ. Б. Пастернака. - М.: \"Художня література\", 1964. - 254 с.', 150, 10),
(10, 'Ерагон', '  К. Паоліні Ерагон: Роман/Пер. з англ. І.А. Тогоєвой. - М.: ЗАО \"РОСМЕН-ПРЕСС\", 2013. - 640 с.  ', 200, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `readers_id` bigint(20) UNSIGNED NOT NULL,
  `books_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `date_of_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`orders_id`, `readers_id`, `books_id`, `price`, `date_of_order`) VALUES
(1, 1, 1, 699, '2022-05-13 13:13:13'),
(2, 3, 2, 700, '2022-08-01 21:20:14'),
(3, 3, 3, 2356, '2022-08-01 21:25:30'),
(4, 4, 10, 140, '2022-11-08 11:25:30'),
(5, 2, 5, 175, '2023-01-08 13:25:30');

-- --------------------------------------------------------

--
-- Структура таблицы `readers`
--

CREATE TABLE `readers` (
  `readers_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `readers`
--

INSERT INTO `readers` (`readers_id`, `name`, `birthdate`, `address`, `phone`, `email`) VALUES
(1, 'Інтелигентний Павло Тарасович', '1950-01-01', 'м. Фантазійне, вул. Вигадана 1', '0996660069', 'p.t.intelegent@gmail.com'),
(2, 'Читанько Валерій Андрійович', '2003-04-03', 'м. Фантазійне, вул. Вигадана 45', '0667845370', 'chit_vuv@gmail.com'),
(3, 'Борщ Тарас Андрійович', '1980-06-25', 'м. Фантазійне, вул. Уявна 35', '0987685623', 'borshch.t.a@gmail.com'),
(4, 'Богиня Степан Миколайович', '2004-01-01', 'м. Фантазійне, вул. Уявна 25', '0654356770', 'god_of_war@gmail.com'),
(5, 'Голубецька Анастасія Василівна', '2003-12-31', 'м. Фантазійне, вул. Вигадана 16А', '0674061239', 'golubka_33@gmail.com'),
(6, 'Біблінець Софія Андріївна', '1970-05-13', 'м. Фантазійне, вул. Бібліотечна 1', '0685674323', 'biblin@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE `records` (
  `records_id` bigint(20) UNSIGNED NOT NULL,
  `readers_id` bigint(20) UNSIGNED NOT NULL,
  `books_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_issue` date NOT NULL,
  `date_of_delivery` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`records_id`, `readers_id`, `books_id`, `date_of_issue`, `date_of_delivery`) VALUES
(1, 1, 2, '2013-01-03', '2013-01-17'),
(2, 1, 3, '2013-01-03', '2013-01-17'),
(3, 2, 4, '2020-09-08', '2020-09-24'),
(4, 2, 9, '2020-09-08', '2020-09-24'),
(5, 3, 9, '2020-02-08', '2020-02-24'),
(6, 3, 5, '2020-02-08', '2020-02-24'),
(7, 4, 10, '2021-02-08', '2021-02-24'),
(8, 5, 6, '2022-05-05', '2022-05-19'),
(9, 5, 8, '2023-01-03', '2023-01-17'),
(10, 5, 3, '2023-01-03', '2023-01-17');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `requests_id` bigint(20) UNSIGNED NOT NULL,
  `readers_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `date_of_request` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answers_id`),
  ADD UNIQUE KEY `answers_id` (`answers_id`),
  ADD KEY `requests_id` (`requests_id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authors_id`),
  ADD UNIQUE KEY `authors_id` (`authors_id`);

--
-- Индексы таблицы `authors_books`
--
ALTER TABLE `authors_books`
  ADD PRIMARY KEY (`authors_books_id`),
  ADD UNIQUE KEY `authors_books_id` (`authors_books_id`),
  ADD KEY `authors_id` (`authors_id`,`books_id`),
  ADD KEY `books_id` (`books_id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`books_id`),
  ADD UNIQUE KEY `books_id` (`books_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD UNIQUE KEY `orders_id` (`orders_id`),
  ADD KEY `readers_id` (`readers_id`,`books_id`),
  ADD KEY `books_id` (`books_id`);

--
-- Индексы таблицы `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`readers_id`),
  ADD UNIQUE KEY `readers_id` (`readers_id`);

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`records_id`),
  ADD UNIQUE KEY `records_id` (`records_id`),
  ADD KEY `readers_id` (`readers_id`,`books_id`),
  ADD KEY `books_id` (`books_id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`requests_id`),
  ADD UNIQUE KEY `requests_id` (`requests_id`),
  ADD KEY `readers_id` (`readers_id`),
  ADD KEY `readers_id_2` (`readers_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `answers_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `authors_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `authors_books`
--
ALTER TABLE `authors_books`
  MODIFY `authors_books_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `books_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `readers`
--
ALTER TABLE `readers`
  MODIFY `readers_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `records`
--
ALTER TABLE `records`
  MODIFY `records_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `requests_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`requests_id`) REFERENCES `requests` (`requests_id`);

--
-- Ограничения внешнего ключа таблицы `authors_books`
--
ALTER TABLE `authors_books`
  ADD CONSTRAINT `authors_books_ibfk_1` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`authors_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authors_books_ibfk_2` FOREIGN KEY (`books_id`) REFERENCES `books` (`books_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`readers_id`) REFERENCES `readers` (`readers_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`books_id`) REFERENCES `books` (`books_id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`readers_id`) REFERENCES `readers` (`readers_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`books_id`) REFERENCES `books` (`books_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`readers_id`) REFERENCES `readers` (`readers_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
