-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_animais
DROP DATABASE IF EXISTS `db_animais`;
CREATE DATABASE IF NOT EXISTS `db_animais` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_animais`;

-- Copiando estrutura para tabela db_animais.animal
DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `codanimal` int(11) NOT NULL AUTO_INCREMENT,
  `nome_dono` varchar(50) DEFAULT NULL,
  `nome_animal` varchar(50) DEFAULT NULL,
  `raca` varchar(50) DEFAULT NULL,
  `peso` decimal(3,1) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  PRIMARY KEY (`codanimal`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela db_animais.animal: ~4 rows (aproximadamente)
INSERT INTO `animal` (`codanimal`, `nome_dono`, `nome_animal`, `raca`, `peso`, `idade`) VALUES
	(3, 'Renata Borba', 'Luna', 'Vira-lata', 11.0, 8),
	(4, 'Lavinya', 'Lua', 'Boxer', 30.0, 2),
	(6, 'Luiz Paulo', 'Raquete', 'Pitbull', 15.0, 2),
	(7, 'Tamires Bretz', 'Marley', 'Labrador', 25.0, 9);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
