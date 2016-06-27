-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.1.73-community - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных MarEngWithMyRoles
CREATE DATABASE IF NOT EXISTS `marengwithmyroles` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `MarEngWithMyRoles`;


-- Дамп структуры для таблица MarEngWithMyRoles.global_tests
CREATE TABLE IF NOT EXISTS `global_tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.global_tests: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `global_tests` DISABLE KEYS */;
INSERT INTO `global_tests` (`id`, `created_at`, `updated_at`, `name`, `level`) VALUES
	(101, '2016-06-25 08:56:00', '2016-06-25 08:56:00', 'АБВГДЕЙКА', 3),
	(102, '2016-06-26 06:57:37', '2016-06-26 06:57:37', 'Тест 8 класса английского', 2);
/*!40000 ALTER TABLE `global_tests` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.migrations: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_06_17_113637_create_roles_table', 2),
	('2016_06_17_135110_create_study_materials_table', 3),
	('2016_06_17_184521_create_tests_table', 4),
	('2016_06_17_184558_create_questions_table', 4),
	('2016_06_17_190757_update_tests', 5),
	('2016_06_18_150754_create_global_tests_table', 6),
	('2016_06_18_151122_drop_level_tests', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `test_id` int(11) unsigned NOT NULL,
  `question` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `answer4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `scores` int(11) NOT NULL,
  `answer` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_test_id_foreign` (`test_id`),
  CONSTRAINT `questions_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.questions: ~11 rows (приблизительно)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `created_at`, `updated_at`, `test_id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `scores`, `answer`) VALUES
	(87, '2016-06-25 08:56:36', '2016-06-25 08:56:36', 60, 'Какая буква идет после "Е"', 'Ж', 'З', 'Й', 'Ё', 15, 'Ё'),
	(88, '2016-06-25 08:56:58', '2016-06-25 08:56:58', 60, 'Сколько раз Илью можно лизнуть в нос', '0\'', '1', '2', '100', 15, '0\''),
	(89, '2016-06-25 08:57:55', '2016-06-25 08:57:55', 61, 'Какой файл загрузили?', 'Золотые купола', 'Время и стекло', 'Я проститука я дочь камергера', 'Я не проститука я не', 15, 'Время и стекло'),
	(90, '2016-06-25 08:58:17', '2016-06-25 08:58:17', 61, 'КТо поёт', 'мальчик', 'девочка', 'упырь', 'два упыря', 15, 'два упыря'),
	(91, '2016-06-25 08:58:51', '2016-06-25 08:58:51', 60, 'Сколько мишек у Алисы', 'много', 'мало', 'чуцть чуть', 'очень много', 15, 'много'),
	(92, '2016-06-26 06:58:09', '2016-06-26 06:58:09', 62, 'I __ travelling down the river', 'am', 'is', 'are', 'you', 15, 'am'),
	(93, '2016-06-26 06:58:24', '2016-06-26 06:58:24', 62, 'He __ playing the ball', 'am', 'is', 'are', 'your', 15, 'is'),
	(94, '2016-06-26 06:58:38', '2016-06-26 06:58:38', 62, 'You ___ good students.', 'is', 'your', 'are', 'ar', 15, 'are'),
	(95, '2016-06-26 06:59:42', '2016-06-26 06:59:42', 63, 'To __ or not to __ it is the question', 'be', 'b', 'e', 'are', 15, 'be'),
	(96, '2016-06-26 07:00:06', '2016-06-26 07:00:06', 63, 'Hamlet ___ prince of Denmark', 'the', 'this', 'that', 'a', 15, 'the'),
	(97, '2016-06-26 07:00:53', '2016-06-26 07:00:53', 63, 'Friends ____ be friends.', 'shall', 'shoud', 'shan\'t', 'will', 15, 'will');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.roles: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
	(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'студент', 'student role example'),
	(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'преподаватель', 'tutor role example'),
	(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'не присвоена', 'not assined yet');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.statistics
CREATE TABLE IF NOT EXISTS `statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  `test_id` int(10) unsigned NOT NULL,
  `result` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_statistics_fk` (`user_id`),
  KEY `test_id_statistics_fk` (`test_id`),
  CONSTRAINT `test_id_statistics_fk` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_id_statistics_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы MarEngWithMyRoles.statistics: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `statistics` DISABLE KEYS */;
INSERT INTO `statistics` (`id`, `created_at`, `updated_at`, `user_id`, `test_id`, `result`) VALUES
	(12, '2016-06-26 10:17:30', '2016-06-26 10:17:30', 1, 60, 30),
	(13, '2016-06-26 10:18:42', '2016-06-26 10:18:42', 1, 60, 30),
	(14, '2016-06-26 10:19:01', '2016-06-26 10:19:01', 1, 60, 45),
	(15, '2016-06-26 10:19:35', '2016-06-26 10:19:35', 1, 62, 45),
	(16, '2016-06-26 10:20:56', '2016-06-26 10:20:56', 3, 62, 45),
	(17, '2016-06-26 10:21:06', '2016-06-26 10:21:06', 3, 63, 45),
	(18, '2016-06-26 12:54:41', '2016-06-26 12:54:41', 1, 63, 15);
/*!40000 ALTER TABLE `statistics` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.study_materials
CREATE TABLE IF NOT EXISTS `study_materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.study_materials: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `study_materials` DISABLE KEYS */;
/*!40000 ALTER TABLE `study_materials` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.tests
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `global_test_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tests_global_test_id_foreign` (`global_test_id`),
  CONSTRAINT `tests_global_test_id_foreign` FOREIGN KEY (`global_test_id`) REFERENCES `global_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.tests: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` (`id`, `created_at`, `updated_at`, `name`, `description`, `type`, `link`, `time`, `global_test_id`) VALUES
	(60, '2016-06-25 08:56:05', '2016-06-25 08:56:05', 'Грамматика', 'New grammar test description 101', 'grammar', '', 0, 101),
	(61, '2016-06-25 08:57:16', '2016-06-25 08:57:16', 'Аудирование', 'New grammar test description ', 'listening', '33379.mp3', 0, 101),
	(62, '2016-06-26 06:57:47', '2016-06-26 06:57:47', 'Аудирование', 'New grammar test description ', 'listening', '23681.mp3', 0, 102),
	(63, '2016-06-26 06:59:05', '2016-06-26 06:59:05', 'Грамматика', 'New grammar test description 102', 'grammar', '', 0, 102);
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;


-- Дамп структуры для таблица MarEngWithMyRoles.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tutor_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `FK_users_users` (`tutor_id`),
  CONSTRAINT `FK_users_users` FOREIGN KEY (`tutor_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы MarEngWithMyRoles.users: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `tutor_id`) VALUES
	(1, 1, 'Ilya', 'il-kow@mail.ru', '$2y$10$bpm2M.gkS1LJwCdVFfYB7uJjvR69qTK3BQE5PKxqsUT93ySzLivbu', 'pSFBZILDqKeXvWD0BmWut258mGUECQcdSjTTkzIml2dDWQ5P80z1HpSuUciX', '2016-06-17 10:57:58', '2016-06-26 16:18:51', 2),
	(2, 2, 'Alisa', 'alisa@mail.ru', '$2y$10$TAhrMzCBClq81cB59WyXM.awMgKWmYBcNWxultvIOIL2oS9eI1BDC', 'pnDn0ttsnb74uPD48VyNAzwwKFOaAn3w2R7TFFsdZMw334YpHHh204MwJakC', '2016-06-17 11:21:55', '2016-06-17 11:21:58', NULL),
	(3, 1, 'Святослав', 'svyat@mail.ru', '$2y$10$AP4l1sBU/HWxRaDbPd1Lee.azavPhxAd0KP/GwQl41gK5H3dxT5Bm', '63tdoMPfc5yBII6DCqmKFaI4tlhxortHhEKFJX0PTP9v06GZLiUEps7sJDwb', '2016-06-25 15:44:49', '2016-06-26 16:19:54', 2),
	(5, 3, 'Агент Смит', 'agent@mail.ru', '$2y$10$sYkC3cUNCig31hDObXn6meqfYFRMLQ9fV2NATwHlKLSRCvkM3x3YS', 'zF8QngeXlhzy9myg3z3eKsaEfZonps0TSsfX4o5oq8fgkKM6WJo6VvH609yr', '2016-06-26 15:54:55', '2016-06-26 16:09:48', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
