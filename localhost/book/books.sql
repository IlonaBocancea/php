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

-- Дамп структуры для таблица book.books
CREATE TABLE IF NOT EXISTS `books` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Nr_Pages` smallint(6) DEFAULT NULL,
  `ID_Author` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Author` (`ID_Author`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы book.books: ~2 rows (приблизительно)
DELETE FROM `books`;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`ID`, `Title`, `Year`, `Nr_Pages`, `ID_Author`) VALUES
	(1, 'Перерождение', '2019', 637, 1),
	(2, 'Алета', '2013', 416, 2),
	(3, 'Детский сад', '2016', 588, 3),
	(4, 'Путешествие в мечту', '2019', 4, 4),
	(5, 'Singur pe lume', '0000', 100, 5);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
