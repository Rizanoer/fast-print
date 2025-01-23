-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for fastprint
CREATE DATABASE IF NOT EXISTS `fastprint` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `fastprint`;

-- Dumping structure for table fastprint.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` text,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table fastprint.kategori: ~7 rows (approximately)
INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
	(1, 'L QUEENLY'),
	(2, 'L MTH AKSESORIS (IM)'),
	(3, 'L MTH TABUNG (LK)'),
	(4, 'SP MTH SPAREPART (LK)'),
	(5, 'CI MTH TINTA LAIN (IM)'),
	(6, 'L MTH AKSESORIS (LK)'),
	(7, 'S MTH STEMPEL (IM)');

-- Dumping structure for table fastprint.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `nama_produk` text,
  `harga` int DEFAULT NULL,
  `kategori_id` int DEFAULT NULL,
  `status_id` tinyint DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table fastprint.produk: ~32 rows (approximately)
INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `kategori_id`, `status_id`) VALUES
	(6, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', 12500, 1, 1),
	(9, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 1000, 2, 1),
	(11, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 1000, 2, 1),
	(12, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 12500, 2, 2),
	(15, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 12500, 2, 1),
	(17, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 1000, 2, 1),
	(18, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 13000, 2, 2),
	(19, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 1000, 2, 2),
	(22, 'ARM PENDEK MODEL U', 13000, 2, 1),
	(23, 'ARM SUPPORT KECIL', 13000, 3, 2),
	(24, 'ARM SUPPORT KOTAK PUTIH', 13000, 2, 2),
	(26, 'ARM SUPPORT PENDEK POLOS', 13000, 3, 1),
	(27, 'ARM SUPPORT S IM', 1000, 2, 2),
	(28, 'ARM SUPPORT T (IMPORT)', 13000, 2, 1),
	(29, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 10000, 1, 1),
	(50, 'BLACK LASER TONER FP-T3 (100gr)', 13000, 2, 2),
	(56, 'Masa ilang', 500, 4, 1),
	(58, 'BODY PRINTER T13X', 15000, 4, 1),
	(59, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 10000, 5, 1),
	(60, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 10000, 5, 2),
	(61, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 1500, 5, 1),
	(62, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 1500, 5, 2),
	(63, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 1500, 5, 2),
	(64, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 1000, 5, 1),
	(65, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 1500, 5, 2),
	(66, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 1500, 5, 1),
	(67, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 1000, 5, 2),
	(68, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 1500, 5, 2),
	(70, 'BOTOL KOTAK 100ML LK', 1000, 6, 1),
	(72, 'BOTOL 10ML IM', 1000, 7, 2);

-- Dumping structure for table fastprint.status
CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int NOT NULL,
  `nama_status` text,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table fastprint.status: ~2 rows (approximately)
INSERT INTO `status` (`id_status`, `nama_status`) VALUES
	(1, 'bisa dijual'),
	(2, 'tidak bisa dijual');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
