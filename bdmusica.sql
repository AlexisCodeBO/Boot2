-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.2.3-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para musica
CREATE DATABASE IF NOT EXISTS `musica` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `musica`;

-- Volcando estructura para tabla musica.album
CREATE TABLE IF NOT EXISTS `album` (
  `id_album` smallint(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `lanzamiento` year(4) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `disquera` varchar(40) DEFAULT NULL,
  `premios` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla musica.album: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
REPLACE INTO `album` (`id_album`, `nombre`, `lanzamiento`, `genero`, `disquera`, `premios`) VALUES
	(1, 'Mi Gente', '2017', 'Moonbahton, Pop', 'Scorpio Music', NULL),
	(2, 'Bonita', '2017', 'Pop', 'Universal Music', NULL),
	(3, 'Despacito', '2017', 'Pop', 'Universal Music', NULL),
	(4, 'La Bicicleta', '2016', 'Pop', 'Sony Music', 'Premio Lo Nuestro'),
	(5, 'Pretty Boy, Dirty Boy', '2015', 'Pop', 'Sony Music', NULL),
	(6, 'Picky:Back to the roots', '2015', 'Pop	\r\n', 'Capitol Latin\r\n', NULL),
	(7, 'Fénix\r\n', '2017', 'Reguetón	\r\n', 'Sony Music\r\n', 'Grammy Latino\r\n'),
	(8, 'Juan Gabriel en el palacio de Bellas Artes\r\n', '1990', 'Pop	\r\n', 'Sony Music\r\n', NULL),
	(9, 'Íconos\r\n', '2010', 'Pop	\r\n', 'Sony Music\r\n', NULL),
	(10, 'Sex and love\r\n', '2015', 'Pop	\r\n', 'Universal int. Music\r\n', NULL);
/*!40000 ALTER TABLE `album` ENABLE KEYS */;

-- Volcando estructura para tabla musica.artista
CREATE TABLE IF NOT EXISTS `artista` (
  `id_artista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `genero` varchar(85) DEFAULT NULL,
  `cancion` varchar(60) DEFAULT NULL,
  `dueto` varchar(84) DEFAULT NULL,
  `lanzamiento` year(4) DEFAULT NULL,
  PRIMARY KEY (`id_artista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla musica.artista: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `artista` DISABLE KEYS */;
REPLACE INTO `artista` (`id_artista`, `nombre`, `genero`, `cancion`, `dueto`, `lanzamiento`) VALUES
	(1, 'J Balvin', 'Reggaeton y música urbana', 'Mi Gente', NULL, '2017'),
	(2, 'J Balvin', 'Reggaeton y música urbana', 'Bonita', 'Jowell & Randy', '2017'),
	(3, 'Luis Fonsi', 'Reggaeton, Dance, Pop latino, Dance/Mùsica Electrónica, Pop', 'Despacito', 'Daddy Yankee', '2017'),
	(4, 'Shakira', 'Pop', 'La Bicicleta', 'Carlos Vives', '2016'),
	(5, 'Maluma', 'Reggaeton', 'Pretextos', 'Cosculluela', '2015'),
	(6, 'Joey Montana', 'Pop', 'Picky', NULL, '2015'),
	(7, 'Nicky Jam', 'Reggaeton', 'El Amante', NULL, '2017'),
	(8, 'Juan Gabriel', 'Pop', 'Amor Eterno', NULL, '1990'),
	(9, 'Marc Anthony', 'Pop', 'A quién quiero mentirle', NULL, '2010'),
	(10, 'Enrique Iglesias', 'Pop', 'Bailando', 'Gente de Zona, Descemer Bueno', '2015');
/*!40000 ALTER TABLE `artista` ENABLE KEYS */;

-- Volcando estructura para tabla musica.cancion
CREATE TABLE IF NOT EXISTS `cancion` (
  `titulo` varchar(50) DEFAULT NULL,
  `id_cancion` int(11) NOT NULL AUTO_INCREMENT,
  `duracion` time DEFAULT NULL,
  `genero` varchar(70) DEFAULT NULL,
  `artista_principal` varchar(35) DEFAULT NULL,
  `artistas_secundarios` varchar(85) DEFAULT NULL,
  PRIMARY KEY (`id_cancion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla musica.cancion: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `cancion` DISABLE KEYS */;
REPLACE INTO `cancion` (`titulo`, `id_cancion`, `duracion`, `genero`, `artista_principal`, `artistas_secundarios`) VALUES
	('Mi Gente', 1, '00:03:09', 'Moonbahton,Pop', NULL, NULL),
	('Bonita', 2, '00:04:26', 'Pop', 'J Balvin', 'Jowell & Randy'),
	('Despacito', 3, '00:03:48', 'Pop', 'Luis Fonsi', 'Daddy Yankee'),
	('La Bicicleta', 4, '00:03:47', 'Pop', 'Shakira', 'Carlos Vives'),
	('Pretextos', 5, '00:03:48', 'Pop', 'Maluma', 'Cosculluela'),
	('Picky', 6, '00:03:01', 'Pop', 'Joey Montana', NULL),
	('El Amante', 7, '00:03:38', NULL, NULL, NULL),
	('Amor Eterno', 8, '00:07:08', 'Pop', 'Juan Gabriel', NULL),
	('A quién quiero mentirle', 9, '00:05:08', 'Pop', 'Marc Anthony', NULL),
	('Bailando', 10, '00:04:00', 'Pop', 'Enrique Iglesias', 'Gente de Zona, Descemer Bueno');
/*!40000 ALTER TABLE `cancion` ENABLE KEYS */;

-- Volcando estructura para tabla musica.disquera
CREATE TABLE IF NOT EXISTS `disquera` (
  `id_disquera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(50) DEFAULT NULL,
  `dueno` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_disquera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla musica.disquera: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `disquera` DISABLE KEYS */;
REPLACE INTO `disquera` (`id_disquera`, `nombre`, `dueno`) VALUES
	(1, 'Universal Music', 'Vivendi'),
	(2, 'Scorpio Music', 'Henry Belolo'),
	(3, 'Sony Music', 'Sony'),
	(4, 'Capitol Latin', 'EMI');
/*!40000 ALTER TABLE `disquera` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
