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
  `Firstname_Author` varchar(50) NOT NULL DEFAULT '0',
  `Lastname_Author` varchar(50) NOT NULL DEFAULT '0',
  `Nr_Book` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_Author`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы book.autor: ~4 rows (приблизительно)
DELETE FROM `autor`;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` (`ID_Author`, `Firstname_Author`, `Lastname_Author`, `Nr_Book`, `id`) VALUES
	(1, 'Олинка', 'п', 4, 1),
	(2, 'Милена ', 'Завойчинская', 26, 2),
	(3, 'Ульяна', 'Каршева', 14, 3),
	(4, 'Ольга', 'Фроленкова', 54, 4),
	(5, 'Hector', 'Malot', 70, 5);
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
