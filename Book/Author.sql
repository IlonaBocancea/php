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

-- Dumping structure for table Book.Author
DROP TABLE IF EXISTS `Author`;
CREATE TABLE IF NOT EXISTS `Author` (
  `ID_Autor` int(11) NOT NULL AUTO_INCREMENT,
  `Nume_Autor` varchar(50) DEFAULT '0',
  `Nr_Carti` tinyint(5) DEFAULT NULL,
  PRIMARY KEY (`ID_Autor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table Book.Author: ~0 rows (approximately)
/*!40000 ALTER TABLE `Author` DISABLE KEYS */;
REPLACE INTO `Author` (`ID_Autor`, `Nume_Autor`, `Nr_Carti`) VALUES
	(1, 'Юлия Бум', 6);
/*!40000 ALTER TABLE `Author` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
