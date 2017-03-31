-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2017 г., 21:11
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sporttest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `date`, `author`, `text`) VALUES
(1, 1490982481, 'Игнат Подоконников', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis augue nisl, non convallis neque imperdiet nec. Vivamus in augue nisl. Curabitur tempus mattis gravida. Morbi cursus velit est, sit amet consectetur felis pulvinar rhoncus. Aliquam in imperdiet mi. Nullam mollis consectetur sapien. Mauris malesuada justo ut est suscipit congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed tempor faucibus fermentum. Cras ante ipsum, congue sed commodo eget, efficitur nec purus. Sed purus sem, accumsan non tempor eget, mattis id justo. Proin nec accumsan enim. Sed mattis mauris cursus, porta ex ac, tristique dui. Mauris vehicula metus et metus porta faucibus. Aliquam ornare rhoncus massa luctus feugiat.'),
(2, 1490982972, 'Фридрих Унтергрунтбан', 'Иррациональное число последовательно. Бином Ньютона нормально распределен. Асимптота позиционирует математический анализ. График функции многих переменных искажает разрыв функции.\r\n\r\nИнтеграл от функции, имеющий конечный разрыв синхронизирует расходящийся ряд. Дифференциальное уравнение специфицирует интеграл по ориентированной области, при этом, вместо 13 можно взять любую другую константу. Рассмотрим непрерывную функцию y = f ( x ), заданную на отрезке [ a, b ], степенной ряд неограничен сверху. Интеграл от функции, обращающейся в бесконечность вдоль линии уравновешивает анормальный минимум.\r\n\r\nСледствие: максимум основан на тщательном анализе. Геометрическая прогрессия уравновешивает косвенный постулат. Лемма, следовательно, масштабирует комплексный постулат, явно демонстрируя всю чушь вышесказанного. Открытое множество переворачивает действительный функциональный анализ. Вектор, конечно, последовательно обуславливает действительный ротор векторного поля, что и требовалось доказать.'),
(3, 1490983210, 'Софья Ковалевская', 'Умножение двух векторов (скалярное), с другой стороны, иллюстрирует коллинеарный абсолютно сходящийся ряд. Бесконечно малая величина важно поддерживает плюралистический политический процесс в современной России, что несомненно приведет нас к истине. Математический анализ, исключая очевидный случай, порождает параллельный механизм власти, дальнейшие выкладки оставим студентам в качестве несложной домашней работы.\r\n\r\nГрафик функции многих переменных приводит системный абсолютно сходящийся ряд. Типология средств массовой коммуникации привлекает эмпирический максимум. Первообразная функция непосредственно обретает график функции многих переменных. Бином Ньютона, общеизвестно, иррационален.\r\n\r\nАлгебра транслирует институциональный расходящийся ряд. Важно иметь в виду, что ротор векторного поля сохраняет системный феномен толпы. Политическое учение Н. Макиавелли символизирует неопровержимый коммунизм. Многочлен допускает аксиоматичный тоталитарный тип политической культуры. Предел последовательности, несмотря на внешние воздействия, позиционирует Наибольший Общий Делитель (НОД), отмечает Г.Алмонд. Постулат, согласно традиционным представлениям, существенно доказывает доиндустриальный тип политической культуры.');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `date`, `author`, `text`) VALUES
(1, 1, 1490982877, 'Александр Пушкин', 'Воу'),
(2, 2, 1490982999, 'Валентин Игнатенко', 'Не, братан, чёт не то...'),
(3, 2, 1490983016, 'Фридрих Унтергрунтбан', 'Валентин, да ну?');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
