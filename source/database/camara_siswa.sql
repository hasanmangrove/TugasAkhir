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
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `npsn` int(10) NOT NULL,
  `tahun_ajaran` varchar(12) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `rombel` int(3) NOT NULL,
  `jumlah_putra` int(3) NOT NULL,
  `jumlah_putri` int(3) NOT NULL,
  `kms` int(3) NOT NULL,
  `non_kms` int(3) NOT NULL,
  `jumlah_siswa` int(4) NOT NULL,
  UNIQUE KEY `npsn` (`npsn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (2040868,'2016/2017','1','',1,3,5,0,0,8),(20363279,'2016/2017','3','IPS',3,22,18,9,31,40),(20400282,'2016/2017','10','UMUM',3,42,23,0,0,65),(20400305,'2016/2017','8','',8,19,11,15,15,30),(20400307,'2016/2017','7','',4,86,45,50,25,131),(20400309,'2016/2017','7','SMP',5,104,40,42,102,144),(20400311,'2016/2017','7','',1,11,14,12,13,25),(20400314,'2016/2017','7','',3,51,25,28,48,76),(20400315,'2016/2017','7','',6,91,71,32,130,162),(20400321,'2016/2017','7','',2,0,0,0,0,34),(20400322,'2016/2017','7','',2,38,29,0,0,67),(20400323,'2016/2017','0','',1,20,12,0,0,32),(20400383,'2016/2017','10','Farmasi',1,3,31,4,2,34),(20400397,'2016/2017','10','Umum',1,17,14,9,22,31),(20400398,'2016/2017','3','Umum/IPA/IPS',5,45,35,33,42,80),(20400399,'2016/2017','10','Umum',1,14,19,21,12,33),(20400411,'2016/2017','0','UMUM',1,5,15,15,5,20),(20400412,'2016/2017','7','',3,63,29,54,38,92),(20400435,'2016/2017','10','AKUNTANSI',2,0,36,0,0,36),(20400436,'2016/2021','11','AKUNTANSI',1,0,21,0,0,21),(20400437,'2016/2022','11','ADM PERKANTORAN',3,3,52,0,0,55),(20400438,'2016/2023','11','PEMASARAN',1,0,15,0,0,15),(20400439,'2016/2024','11','TKJ',1,6,10,0,0,16),(20400440,'2016/2025','12','AKUNTANSI',1,0,23,0,0,23),(20400441,'2016/2026','12','ADM PERKANTORAN',4,0,83,0,0,83),(20400442,'2016/2027','12','PEMASARAN',1,0,25,0,0,25),(20400443,'2016/2028','12','TKJ',1,6,18,0,0,24),(20400445,'2016/2017','10','Administrasi Perkantoran',1,2,32,11,23,34),(20400451,'2016/2017','10','Teknik Kendaraan ringan',2,38,1,18,21,39),(20400452,'2016/2017','10','Rekayasa Perangkat Lunak',1,7,9,3,13,16),(20400459,'2016/2017','1','',1,14,14,0,14,28),(20400460,'2016/2017','1','',1,10,15,0,0,25),(20400463,'2016/2017','1','',1,12,6,0,18,18),(20400466,'2016/2017','1','',1,9,5,0,14,14),(20400468,'2016/2017','0','',1,10,12,13,9,22),(20400476,'2016/2017','1','',1,14,22,30,6,36),(20400477,'2016/2017','1','',3,22,24,2,44,46),(20400478,'2016/2017','0','',1,5,12,0,0,17),(20400479,'2016/2017','1','',1,3,10,0,0,13),(20400480,'2016/2017','1','',1,11,14,0,0,25),(20400483,'2016/2017','0','',1,8,5,3,8,13),(20400485,'2016/2017','1','',6,15,5,0,0,102),(20400486,'2016/2017','1','',4,42,46,0,0,88),(20400487,'2016/2017','6','',1,22,21,27,16,43),(20400489,'2016/2017','0','',2,42,20,12,50,62),(20400490,'2016/2017','9','',9,139,122,89,172,261),(20400495,'2016/2017','0','',2,33,24,0,0,57),(20400496,'2016/2017','0','',1,18,14,12,20,32),(20400543,'2016/2017','1','',1,4,3,0,7,7),(20400551,'2016/2017','6','',6,38,29,0,0,67),(20400586,'2016/2017','1','',1,7,12,8,11,19),(20400598,'2016/2017','1','',1,0,7,0,7,7),(20400599,'2016/2017','1','',1,3,7,0,10,10),(20400602,'2016/2017','0','',2,26,26,0,0,52),(20400603,'2016/2017','1','',1,24,13,0,37,37),(20400604,'2016/2017','1','',4,65,63,1,5,128),(20400605,'2016/2017','0','',1,18,14,3,29,32),(20401011,'2016/2017','8','',6,110,70,132,48,180),(20401013,'2016/2017','0','',4,75,45,18,2,120),(20401014,'2016/2017','7','',3,58,45,53,50,103),(20401015,'2016/2017','7','',3,62,20,42,40,82),(20401017,'2016/2017','7','',1,13,12,6,19,25),(20401018,'2016/2017','7','',3,51,30,0,0,81),(20401033,'2016/2017','7','',5,106,73,48,132,179),(20401034,'2016/2017','0','',2,31,19,31,19,50),(20401049,'2016/2017','7','',4,72,34,17,53,106),(20401052,'2016/2017','0','Umum',9,144,87,0,0,231),(20401054,'2016/2017','7','',5,99,68,36,131,167),(20401056,'2016/2017','0','',5,112,59,0,0,171),(20401057,'2016/2017','7','',3,40,31,16,65,71),(20401138,'2016/2017','10','Akuntansi',2,7,41,0,0,48),(20401139,'2016/2017','10','Akuntansi',1,3,22,0,0,25),(20401140,'2016/2017','10','Akuntansi',2,0,25,14,1,25),(20401147,'2016/2017','10','UMUM',1,10,12,15,7,22),(20401151,'2016/2017','10','UMUM',1,8,9,7,10,17),(20401158,'2016/2017','0','',1,11,7,6,6,18),(20401169,'2016/2017','0','Umum / IPA / IPS ',6,25,65,16,74,90),(20401174,'2016/2017','0','Teknik Kendaraan Ringan',3,72,0,25,47,72),(20401175,'2016/2017','10','Teknik Kendaraan ringan',3,109,0,0,0,472),(20401177,'2016/2017','10','Teknika Kapal Niaga',2,53,5,0,0,58),(20401198,'2016/2017','10','TSM',1,27,2,0,0,29),(20401248,'2016/2017','2','',1,11,7,1,17,18),(20401310,'2016/2017','10','TEKNIK AUDIO VIDEO',1,16,0,6,10,16),(20401317,'2016/2017','0','MULTI MEDIA',1,21,10,5,26,31),(20401319,'2016/2017','10','Teknik Kendaraan ringan',2,51,0,0,0,51),(20401325,'2016/2017','1','',1,20,18,0,38,38),(20401326,'2016/2017','1','',1,13,23,0,0,36),(20401329,'2016/2017','1','',1,9,8,1,16,17),(20401330,'2016/2017','1','',1,13,13,0,26,26),(20401331,'2016/2017','1','',1,18,6,0,24,24),(20401332,'2016/2017','1','',1,17,20,2,35,37),(20401336,'2016/2017','1','',1,20,12,2,0,32),(20401343,'2016/2017','1','',1,6,15,4,17,21),(20401346,'2016/2017','1','',1,4,2,1,5,6),(20401347,'2016/2017','0','',1,6,12,7,11,18),(20401348,'2016/2017','1','',1,19,12,0,31,31),(20401354,'2016/2017','1','',2,28,22,2,48,50),(20401357,'2016/2017','1','',1,17,11,2,26,28),(20401358,'2016/2017','1','',1,12,8,0,20,20),(20401360,'2016/2017','1','',1,19,20,0,0,39),(20401363,'2016/2017','1','',2,27,27,0,54,54),(20401364,'2016/2017','2','',1,21,13,3,31,34),(20401365,'2016/2017','3','',1,16,18,7,27,34),(20401366,'2016/2017','4','',1,16,12,3,25,28),(20401367,'2016/2017','5','',1,18,18,0,36,36),(20401368,'2016/2017','6','',1,15,19,2,32,34),(20401370,'2016/2017','1','',1,7,4,0,0,11),(20401372,'2016/2017','0','',1,13,7,1,18,20),(20401480,'2016/2017','1','',1,15,18,1,2,33),(20401493,'2016/2017','1','',1,18,10,1,0,28),(20401495,'2016/2017','1','',1,15,8,0,0,24),(20401496,'2016/2017','1','',1,15,19,3,15,34),(20401501,'2016/2017','1','',1,13,15,0,7,28),(20401502,'2016/2017','1','',1,8,6,0,14,14),(20401946,'2016/2017','7','',4,66,48,55,59,114),(20401947,'2016/2017','7','',1,16,15,21,10,31),(20401960,'2016/2017','7','',2,21,29,19,31,50),(20401961,'2016/2017','7','',2,28,26,0,0,54),(20401973,'2016/2017','0','',1,14,6,0,0,20),(20401975,'2016/2017','7','',3,38,28,0,0,66),(20401977,'2016/2017','7','',1,1,1,1,1,2),(20401978,'2016/2017','7','',1,8,0,8,0,8),(20401979,'2016/2017','0','',1,16,15,6,25,31),(20401980,'2016/2017','7','UMUM',2,24,17,17,24,41),(20401981,'2016/2017','7','',2,28,13,0,0,41),(20401983,'2016/2017','7','',4,87,58,24,121,145),(20401984,'2016/2017','7','',1,12,8,0,6,20),(20402057,'2016/2017','10','UMUM',2,12,33,40,5,45),(20402060,'2016/2017','10','UMUM',2,5,45,31,19,50),(20402093,'2016/2017','10','Teknik Kendaraan ringan',3,113,1,42,72,114),(20402105,'2016/2017','3','KEPERAWATAN',3,4,24,0,0,28),(20402129,'2016/2017','10','TEKNIK SEPEDA MOTOR ',1,33,0,15,18,33),(20402130,'2016/2017','10','Multiedia',2,31,26,0,0,57),(20402131,'2016/2017','10','Teknik Kendaraan ringan',3,77,0,0,0,77),(20402132,'2016/2017','10','Administrasi Perkantoran',1,0,22,12,10,22),(20402134,'2016/2017','10','Teknik Audio Video',1,5,1,3,3,6),(20402135,'2016/2018','13','Multimedia',1,4,15,9,10,19),(20402140,'2016/2017','0','',1,13,12,0,25,25),(20402141,'2016/2017','6','',1,6,4,3,7,10),(20402143,'2016/2017','1','',1,1,2,1,2,3),(20402144,'2016/2017','1','',1,5,5,0,0,10),(20402145,'2016/2017','3','',1,1,1,2,0,2),(20402146,'2016/2017','1','',1,4,3,1,6,7),(20402148,'2016/2017','1','',2,29,20,1,48,49),(20402150,'2016/2017','1','',1,9,6,0,7,15),(20402154,'2016/2017','6','',6,31,30,25,36,61),(20402156,'2016/2017','1','',1,4,6,0,10,10),(20402157,'2016/2017','1','',1,11,8,0,0,19),(20402158,'2016/2017','1','',12,6,6,1,11,12),(20402159,'2016/2017','1','',1,6,7,3,10,13),(20402162,'2016/2017','1','',1,16,13,3,26,29),(20402170,'2016/2017','1','',4,64,57,0,121,121),(20402217,'2016/2017','6','',9,109,82,84,107,191),(20402218,'2016/2017','1','',1,4,4,0,0,8),(20402219,'2016/2017','1','',1,11,8,1,5,19),(20402230,'2016/2017','1','',1,2,1,3,0,3),(20402231,'2016/2017','1','',12,65,55,19,91,120),(20402232,'2016/2017','1','',1,6,7,0,13,13),(20402233,'2016/2017','0','',1,11,17,0,0,18),(20402248,'2016/2017','1','',1,7,4,0,11,11),(20402257,'2016/2017','6','',1,9,9,3,15,18),(20402258,'2016/2017','1','',1,9,6,0,0,15),(20402274,'2016/2017','1','',1,8,4,2,10,12),(20402288,'2016/2017','1','',1,5,5,1,9,10),(20402290,'2016/2017','1','',1,9,3,0,12,12),(20402611,'2016/2017','0','Tunagrahita',1,0,2,0,2,2),(20402612,'2016/2017','1','Tunadaksa',1,0,1,0,1,1),(20402613,'2016/2017','2','Tunagrahita',1,3,3,2,4,6),(20402614,'2016/2017','3','Tunagrahita',1,1,1,1,1,2),(20402615,'2016/2017','3','Tunagrahita',1,2,1,1,2,3),(20402616,'2016/2017','4','Tunarunguwicara',1,1,1,1,1,2),(20402617,'2016/2017','4','Tunagrahita',1,1,2,2,1,3),(20402618,'2016/2017','4','Tunagrahita',1,2,1,1,2,3),(20402619,'2016/2017','5','Autis',1,1,0,0,1,1),(20402620,'2016/2017','5','Tunagrahita',1,0,1,1,0,1),(20402621,'2016/2017','7','Tunagrahita',1,0,2,0,2,2),(20402622,'2016/2017','8','Tunarunguwicara',1,2,0,0,2,2),(20402623,'2016/2017','8','Tunagrahita',1,1,1,1,1,2),(20402624,'2016/2017','8','Tunagrahita',1,3,0,1,2,3),(20402625,'2016/2017','8','Tunagrahita',1,4,1,0,5,5),(20402626,'2016/2017','9','Tunanetra',1,1,0,1,0,1),(20402627,'2016/2017','9','Tunagrahita',1,2,1,0,3,3),(20402628,'2016/2017','9','Tunagrahita',1,1,1,0,2,2),(20402629,'2016/2017','10','Tunarunguwicara',1,2,0,1,1,2),(20402630,'2016/2017','10','Tunarunguwicara',1,1,1,0,2,2),(20402631,'2016/2017','10','Tunagrahita',1,2,0,1,1,2),(20402632,'2016/2017','10','Tunagrahita',1,2,0,0,2,2),(20402633,'2016/2017','11','Tunagrahita',1,1,1,0,2,2),(20402634,'2016/2017','12','Tunagrahita',1,0,2,0,2,2),(20402707,'2016/2017','7','',1,4,1,3,2,5),(20402709,'2016/2017','7','',2,21,19,0,0,40),(20402710,'2016/2017','0','',1,4,5,0,0,9),(20402711,'2016/2017','7','',1,21,12,14,19,33),(20402721,'2016/2017','7','',1,3,0,0,0,3),(20402722,'2016/2017','7','',1,10,6,16,0,16),(20402731,'2016/2017','7','',1,12,7,17,2,19),(20402732,'2016/2017','7','',1,7,9,0,0,16),(20402733,'2016/2017','7','',2,23,22,26,24,45),(20402736,'2016/2017','7','',1,9,13,11,11,22),(20402737,'2016/2017','7','',8,115,79,129,3,194),(20402738,'2016/2017','7','',1,11,15,6,21,26),(20402786,'2016/2017','10','Akuntansi',1,5,14,0,0,19),(20402800,'2016/2017','10','UMUM',1,6,8,3,5,14),(20402814,'2016/2017','10','DESAIN DAN PRODUKSI KRIA KAYU',1,10,0,0,0,10),(20402815,'2016/2017','10','TEKNIK PENGELASAN',1,33,0,0,0,33),(20402836,'2016/2017','10','Teknik Kendaraan Ringan',3,93,1,0,0,94),(20402838,'2016/2017','10','Teknik Kendaraan ringan',3,83,3,63,23,86),(20402839,'2016/2017','10','Teknik Kendaraan ringan',1,8,0,2,1,8),(20402840,'2016/2017','10','Teknik Audio Video',1,5,0,3,5,5),(20402849,'2016/2017','1','',1,6,4,0,0,10),(20402850,'2016/2017','1','',1,13,14,0,0,27),(20402852,'2016/2017','1','',1,9,7,0,16,16),(20402854,'2016/2017','0','',1,9,12,9,0,21),(20402856,'2016/2017','1','',1,13,13,3,23,26),(20402857,'2016/2017','1','',1,17,10,0,0,27),(20402864,'2016/2017','0','',1,3,1,4,0,4),(20402866,'2016/2017','1','',1,3,1,3,1,4),(20402867,'2016/2017','1','',1,8,8,3,13,16),(20402869,'2016/2017','0','',1,7,6,0,0,13),(20402870,'2016/2017','1','',1,9,13,0,0,22),(20402872,'2016/2017','1','',1,9,6,0,0,15),(20402873,'2016/2017','1','',1,9,9,2,16,18),(20402880,'2016/2017','1','',1,5,4,0,9,9),(20402966,'2016/2017','1','',1,2,4,6,0,6),(20402967,'2016/2017','1','',1,7,6,0,13,13),(20402968,'2016/2017','1','',1,7,13,0,0,20),(20402970,'2016/2017','1','',1,14,20,0,0,34),(20402971,'2016/2017','1','',1,7,5,1,11,12),(20402990,'2016/2017','1','',1,10,7,0,17,17),(20403147,'2016/2017','10','',6,90,96,0,0,186),(20403148,'2016/2017','10','Umum',6,108,78,12,46,186),(20403244,'2016/2017','7','',7,106,80,0,0,186),(20403245,'2016/2017','7','REG',8,151,84,0,0,235),(20403248,'2016/2017','7','',4,63,50,35,78,113),(20403249,'2016/2017','7','',21,131,63,37,0,194),(20403285,'2016/2017','10','Teknik Komputer Jaringan',1,38,4,0,0,42),(20403320,'2016/2017','6','',6,64,51,0,0,115),(20403323,'2016/2017','1','',3,53,39,0,92,92),(20403325,'2016/2017','6','',12,164,154,37,281,318),(20403326,'2016/2017','0','',1,18,15,0,0,33),(20403342,'2016/2017','1','SD',2,17,27,0,0,44),(20403343,'2016/2017','1','',1,18,14,0,32,32),(20403347,'2016/2017','1','',3,47,45,1,91,92),(20403348,'2016/2017','12','',2,156,156,2,10,312),(20403349,'2016/2017','1','',1,17,12,1,0,29),(20403350,'2016/2017','0','',1,17,12,0,0,29),(20403351,'2016/2017','1','',3,46,55,0,0,101),(20403352,'2016/2017','1','',3,46,53,0,0,99),(20403365,'2016/2017','1',' ',1,10,10,0,0,20),(20403367,'2016/2017','1','',1,9,11,0,0,20),(20403368,'2016/2017','1','',1,14,13,0,0,27),(20403374,'2016/2017','1','',1,5,8,1,12,13),(20403378,'2016/2017','7','',5,85,61,0,0,146),(20403587,'2016/2017','1','',1,11,8,0,0,19),(20403597,'2016/2017','1','',1,1,5,0,6,6),(20403600,'2016/2017','1','',1,16,8,4,20,24),(20403615,'2016/2017','0','',6,8,3,5,6,11),(20404088,'2016/2017','1','',1,5,9,4,10,14),(20404090,'2016/2017','1','',1,17,19,0,0,36),(20404124,'2016/2017','7','',3,95,55,83,67,150),(20404126,'2016/2017','7','',2,36,20,30,26,56),(20404127,'2016/2017','7','',4,83,66,35,114,149),(20404132,'2016/2017','7','',7,21,12,0,0,33),(20404154,'2016/2017','1','',3,51,54,0,0,105),(20404155,'2016/2018','2','',3,35,31,0,0,66),(20404156,'2016/2019','3','',3,36,28,0,0,64),(20404157,'2016/2020','4','',3,44,37,0,0,81),(20404158,'2016/2021','5','',3,29,35,0,0,64),(20404159,'2016/2022','6','',3,36,21,0,0,57),(20407314,'2016/2017','1','',1,10,13,2,0,23),(20407318,'2016/2017','1','',1,7,6,1,12,13),(20407328,'2016/2017','0','',1,4,0,2,2,4),(20407353,'2016/2017','0','',1,12,10,0,0,22),(20407354,'2016/2017','7','',1,10,13,10,13,23),(20407359,'2016/2017','10','Teknik Kendaraan Ringan',2,73,2,23,52,75),(20407405,'2016/2017','1','',1,6,2,0,0,8),(20407419,'2016/2017','10','Teknik Sepeda Motor',2,39,2,10,31,41),(20407430,'2016/2017','1','',1,5,5,1,9,10),(20407434,'2016/2017','10','Teknik Komputer Dan Jaringan',2,18,24,18,4,42),(20409728,'2016/2017','10','TITL',1,5,0,2,0,5),(20409840,'2016/2017','10','Teknik Kendaraan ringan',1,14,0,3,11,14),(20411840,'2016/2017','0','',3,30,30,33,27,60),(20411841,'2016/2018','0','',2,38,21,31,28,59),(20411842,'2016/2019','0','',2,32,18,31,19,50),(20411843,'2016/2020','0','',2,32,25,38,19,57),(20411844,'2016/2021','0','',2,18,19,22,15,37),(20411845,'2016/2022','0','',2,15,14,19,10,29),(20411881,'2016/2017','10','MIPA',1,4,16,2,18,20),(20411927,'2016/2017','7','',2,21,13,15,19,34),(20411931,'2016/2017','7','',2,30,22,0,0,52),(20411942,'2016/2017','7','',4,47,45,0,0,92),(20411959,'2016/2017','7','',1,14,12,14,12,26),(20411973,'2016/2017','7','',2,20,27,0,0,47),(20411976,'2016/2017','7','',1,20,14,0,0,34),(20411978,'2016/2017','7','',1,7,9,9,7,16),(20411981,'2016/2017','7','',3,55,29,31,53,84),(60713982,'2016/2017','1','',1,4,7,1,0,11),(60713986,'2016/2017','1','',1,4,9,0,0,13),(60714003,'2016/2017','1','',1,4,8,0,0,12),(60714007,'2016/2017','1','',1,9,6,5,10,15),(60714047,'2016/2017','1','',6,15,8,8,15,23),(60714054,'2016/2017','1','',1,8,7,0,15,15),(60714071,'2016/2017','6','',6,17,15,9,23,32),(60714095,'2016/2017','0','',6,41,31,23,49,72),(60714098,'2016/2017','1','',1,9,10,4,15,19),(60724851,'2016/2017','10','',8,116,113,0,0,229),(69775326,'2016/2017','10','Teknik Kendaraan ringan',2,55,0,20,30,55),(69786845,'2016/2017','7','',4,36,48,0,0,84),(69788558,'2016/2017','1','',1,19,14,0,33,33),(69830190,'2016/2017','1','',3,55,49,0,0,104),(69945435,'2016/2017','1','',1,16,15,0,0,31);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-04 14:28:53
