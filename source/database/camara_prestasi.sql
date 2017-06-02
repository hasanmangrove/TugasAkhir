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
-- Table structure for table `prestasi`
--

DROP TABLE IF EXISTS `prestasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestasi` (
  `npsn` int(10) NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `jns_prestasi` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `hasil` varchar(30) NOT NULL,
  `ket` mediumtext NOT NULL,
  `pemegang` mediumtext NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  UNIQUE KEY `npsn` (`npsn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestasi`
--

LOCK TABLES `prestasi` WRITE;
/*!40000 ALTER TABLE `prestasi` DISABLE KEYS */;
INSERT INTO `prestasi` VALUES (20400321,'2016/2017','Juara 1 Bulu Tangkis Putri','Kabupaten','Harapan 2','','1.SANCAY PUSPA DEWI2.... 3....','2016-12-11'),(20400451,'','Kaligrafi Putra','Kecamatan','Juara 3','','Bima Cesar Kusuma Yuda','2016-09-17'),(20400453,'','Lomba Desain Batik','Nasional ','Juara 3','','Rita Utama','2014-12-10'),(20400466,'','Renang Tingk SD (POR)','Kecamatan','Juara 1','','Birda Nayaka Hadi','2016-04-30'),(20400468,'2015/2016','TAEKWONDO UNDER 20 Kg SD PUTRA','Nasional','Juara 2','','MUHAMMAD KANA SYAFA PRADITYA','2015-12-20'),(20400598,'2016/2017','CERDAS CERMAT SAINS','Kecamatan','Juara 3','','AIDA RAJWA AL BARIK','2016-01-18'),(20401014,'','Tapak Suci','Kabupaten','Juara 2','PORDA Tk. Remaja Putra','Taufik Hidayat','2016-03-09'),(20401033,'2014/2015','Olahraga','Propinsi','Harapan 1','Drumband','Kelompok','2015-05-10'),(20401049,'2013/2014','Taekwondo','Propinsi','Juara 3','Pra Junior under 45 kg Putra Y','Zidhan Putra Rizqiawan','2014-06-23'),(20401326,'2016/2017','MTQ Putra','Kecamatan','Juara 1','','Ananda Aditiya Latif','2016-09-10'),(20401330,'2015/2016','MTQ Cab. MTQ Pa','Kecamatan','Juara 1','','Priyanbada','2015-10-03'),(20401343,'2016/2017','CCA','Kecamatan','Juara 1','','1. Abidah Ardelia Nurtin, 2. F','2016-09-10'),(20401345,'2016/2018','CCA','Kabupaten','Juara 3','','Abidah Ardelia Nurtin','2016-09-22'),(20401371,'2014/2015','MTQ Cab. MTQ Pi','Kecamatan','Juara 2','','Intan Nugraheni Pawestri','2015-03-02'),(20401480,'','MTQ','Kecamatan','Juara 3','','1. Hanung Ja\'far Pujianto','2016-09-07'),(20401979,'2016/2017','MTQ','Kecamatan','Juara 1','Meningkatkan Percaya Diri Anak','Ulfa Puji Lestari','2016-09-15'),(20401981,'2014/2015','Olahraga','Kabupaten','Juara 2','Tenis Meja Tunggal Putra Tingk','Yordan Putra Kurniawan','2015-05-26'),(20401983,'2015/2016','Lomba Paramandi LBB SMP','Kabupaten','Juara 1','','Grup Drum Band SMP Muh 1 Wonos','2016-05-26'),(20402093,'2016/2017','RENANG','Kabupaten','Juara 1','','1. FEBRI ANDREAN 2. MUHAMMAD R','2016-08-24'),(20402156,'2015/2016','MTQ cabang Pidato','Kecamatan','Juara 1','','Yoga Dwi Prayoga','2015-09-05'),(20402219,'','Lukis Pa','Kecamatan','Juara 3','','Maulid Nur Fauziah','2011-09-22'),(20402838,'2016/2017','MTTQ','Provinsi','Juara 1','','Karman','2016-10-19'),(20402869,'2015/2016','MHQ','Kabupaten','Juara 1','','Hasna Atqya Khalela','2015-10-13'),(20402870,'2016/2017','MTQ','Kabupaten','Juara 2','','Hasna Atqya Khalela','2016-03-05'),(20404085,'2011/2012','Pildacil','Provinsi','Juara 2','','Annisa Amalia','2012-09-08'),(20407341,'2014/2015','Festival Dolanan Anak','Kecamatan','Juara 1','','Tim Sanggar Seni Pelangi SD Mu','2015-03-02'),(69775326,'','Jemparingan','Provinsi','Juara 1','Olimpiade Bahasa Jawa','','2016-09-19');
/*!40000 ALTER TABLE `prestasi` ENABLE KEYS */;
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
