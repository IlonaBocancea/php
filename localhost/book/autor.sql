-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.1.73-community - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица book.autor
CREATE TABLE IF NOT EXISTS `autor` (
  `ID_Author` smallint(6) NOT NULL AUTO_INCREMENT,
  `Name_Author` varchar(50) NOT NULL DEFAULT '0',
  `Nr_Book` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `Age` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_Author`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы book.autor: ~4 rows (приблизительно)
DELETE FROM `autor`;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` (`ID_Author`, `Name_Author`, `Nr_Book`, `Age`, `id`) VALUES
	(1, 'Юлия Бум', 5, 19, 1),
	(2, 'Олинка', 13, 20, 2),
	(3, 'sdfde', 9, 35, 0),
	(4, 'sdfde', 7, 42, 0);
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
