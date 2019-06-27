-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 25 2019 г., 16:07
-- Версия сервера: 5.7.24
-- Версия PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `posts`
--

-- --------------------------------------------------------

--
-- Структура таблицы `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'storage/profiles/default_avatar.png',
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `profiles`
--

INSERT INTO `profiles` (`id`, `first_name`, `last_name`, `gender`, `icon`, `birth_date`, `phone`, `adress`, `about`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'name', 'lname', 'male', 'storage/profiles/9UsZz5m6EIrauK94ClhwicY0IFWrNSyz2v3Lqmbz.jpeg', '89', '98989', 'srt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.', 1, '2019-06-25 05:17:23', '2019-06-25 05:18:00'),
(2, 'name', 'lname', 'male', 'storage/profiles/02krlTomTBuvdkzD6R8DkKEEIllR2InodbNF7v5q.jpeg', '89', '98989', 'srt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.', 2, '2019-06-25 05:20:48', '2019-06-25 05:25:38'),
(3, 'name', 'lname', 'female', 'storage/profiles/nUDkUVZxUlkec4xjhi3hGWAiQ6tFMoU8nkltLOVJ.jpeg', '89', '98989', 'srt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi venenatis, ultricies ex nec, elementum eros. Nunc a ligula nibh. Sed suscipit quis purus ut commodo. Nunc sit amet justo venenatis, pellentesque dui vitae, elementum neque. Aliquam erat volutpat. Vivamus egestas, diam vitae semper ultrices, tortor massa venenatis nibh, in aliquam mi est fermentum lorem. Integer luctus nulla enim, nec feugiat mi interdum vel. Nulla sollicitudin, leo id venenatis tincidunt, tortor lacus consectetur mauris, a pellentesque odio lorem a augue.', 3, '2019-06-25 05:26:20', '2019-06-25 05:26:48');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
