-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.38 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table Book.Books
DROP TABLE IF EXISTS `Books`;
CREATE TABLE IF NOT EXISTS `Books` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='4565';

-- Dumping data for table Book.Books: ~8 rows (approximately)
/*!40000 ALTER TABLE `Books` DISABLE KEYS */;
REPLACE INTO `Books` (`ID`, `Title`, `Author`, `Year`) VALUES
	(2, 'Singur pe lume', 'Hector Malot', '0000'),
	(3, 'Факультет уникальной магии', 'Екатерина Флат', '2016'),
	(4, 'Дверь ВНИТУДА', 'Юлия Фирсанова', '2014'),
	(5, 'Мечты и реальности', 'Котянова Наталия', '2017'),
	(6, 'Вопреки Всему!', 'Одесская Ариэлла', '2015'),
	(7, 'Алета', 'Милена Завойчинская', '2013'),
	(10, 'Гадкий утёнок. Преображение в лебедя!', 'Юлия Бум', '2019'),
	(11, 'gg', '5ty', '2066');
/*!40000 ALTER TABLE `Books` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
