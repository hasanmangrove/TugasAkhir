-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: camara
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kecamatan` (
  `kode_kec` int(11) NOT NULL,
  `nama_kec` varchar(30) NOT NULL,
  `kode_kab` int(11) NOT NULL,
  PRIMARY KEY (`kode_kec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kecamatan`
--

LOCK TABLES `kecamatan` WRITE;
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
INSERT INTO `kecamatan` VALUES (1,'Sanden',1),(2,'Kretek',1),(3,'Pundong',1),(4,'Imogiri',1),(5,'Dlingo',1),(6,'Pleret',1),(7,'Jetis',1),(8,'Bambanglipuro',1),(9,'Pandak',1),(10,'Pajangan',1),(11,'Bantul',1),(12,'Sewon',1),(13,'Banguntapan',1),(14,'Piyungan',1),(15,'Sedayu',1),(16,'Kasihan',1),(17,'Srandakan',1),(18,'Gedangsari',2),(19,'Girisubo',2),(20,'Karangmojo',2),(21,'Ngawen',2),(22,'Nglipar',2),(23,'Paliyan',2),(24,'Panggang',2),(25,'Patuk',2),(26,'Playen',2),(27,'Ponjong',2),(28,'Purwosari',2),(29,'Rongkop',2),(30,'Saptosari',2),(31,'Semanu',2),(32,'Semin',2),(33,'Tanjungsari',2),(34,'Tepus',2),(35,'Wonosari',2),(49,'Girimulyo',3),(50,'Galur',3),(51,'Kalibawang',3),(52,'Kokap',3),(53,'Lendah',3),(54,'Nanggulan',3),(55,'Panjatan',3),(56,'Pengassih',3),(57,'Samigaluh',3),(58,'Sentolo',3),(59,'Temon',3),(60,'Wates',3),(61,'Berbah',4),(62,'Cangkringan',4),(63,'Depok',4),(64,'Gamping',4),(65,'Godean',4),(66,'Kalasan',4),(67,'Minggir',4),(68,'Mlati',4),(69,'Moyudan',4),(70,'Ngaglik',4),(71,'Ngemplak',4),(72,'Pakem',4),(73,'Prambanan',4),(74,'Seyegan',4),(75,'Sleman',4),(76,'Tempel',4),(77,'Turi',4),(78,'Danurejan',5),(79,'Gedongtengen',5),(80,'Gondokusuman',5),(81,'Gondomanan',5),(82,'Jetis',5),(83,'Kotagede',5),(84,'Kraton',5),(85,'Mantrijeron',5),(86,'Mergangsan',5),(87,'Ngampilan',5),(88,'Pakualaman',5),(89,'Tegalrejo',5),(90,'Umbulharjo',5),(91,'Wirobrajan',5),(92,'Bagelan',6);
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-01 16:21:04
