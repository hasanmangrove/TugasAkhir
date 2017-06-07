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
-- Table structure for table `wakasek`
--

DROP TABLE IF EXISTS `wakasek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wakasek` (
  `id_wakasek` int(10) NOT NULL AUTO_INCREMENT,
  `npsn` int(10) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  `nbm` int(10) NOT NULL,
  `wakil_kepala` varchar(30) NOT NULL,
  `waka_bidang` varchar(20) NOT NULL,
  `sk_pengangkatan` varchar(30) NOT NULL,
  `tgl_sk` date NOT NULL,
  `asal_sk` varchar(10) NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `masa_tugaske` varchar(2) NOT NULL,
  `tgl_habis` date NOT NULL,
  PRIMARY KEY (`id_wakasek`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wakasek`
--

LOCK TABLES `wakasek` WRITE;
/*!40000 ALTER TABLE `wakasek` DISABLE KEYS */;
INSERT INTO `wakasek` VALUES (1,20400282,'2016/2017',0,'IS SUMIYATI, S.Pd','Kurikulum','18/KEP/II.4/D/2015','2015-05-12','PWM','2015-05-12','1','2019-05-12'),(2,20400309,'2016/2017',0,'Drs. Sumaryanta','Kurikulum','001/III.4.AU/B/2016','2016-07-18','Sekolah','2016-07-18','1','2017-07-17'),(3,20400311,'2016/2017',1058251,'Mugi Satoto S.Pd','Kurikulum','003KEP/IV.4/2016','2016-07-16','Sekolah','2016-07-16','1','2019-07-16'),(4,20400312,'2016/2017',999252,'Dania Rithma Danti,S.Pd','Kurikulum','IIIA/1.a/001/2017','2017-01-03','Sekolah','2017-01-03','1','2020-07-01'),(5,20400383,'2016/2017',978,'Kustejo','Kurikulum','444/KEP/III.4.AU.403/A/2014','2006-02-01','PWM','2015-07-17','1','2016-07-17'),(6,20400397,'2016/2017',0,'Wakir, M.Pd','Kurikulum','79/KEP/III.4.AU/D/2016','2016-07-18','Sekolah','2016-12-17','2','2016-12-17'),(7,20400398,'2016/2017',893053,'Nur Kholifah, S.Pd','Kurikulum','','2016-07-18','Sekolah','2016-07-18','1','2017-07-17'),(8,20400399,'2016/2017',636,'Dra. Siwuh Sri Bailah','Kurikulum','1/KEP/III.4/D/2016','2016-07-01','Sekolah','2017-06-30','1','2017-06-30'),(9,20400411,'2016/2017',507498,'JAKA ASMARA WIDADA','Kesiswaan','56 /SK.KS /III.A/2.b/VII/2016','2016-07-18','Sekolah','2016-07-18','2','2017-07-18'),(10,20400412,'2016/2017',0,'Dalsana, S.Pd','Kurikulum','063 a/SK.PD/III.A/2.b/2014','2014-07-08','Sekolah','2014-07-01','2','2018-06-30'),(11,20400445,'2016/2017',873589,'Dra. Etty Erawati','Kurikulum','278/SK.PD/III.A/2.b/2016','2016-07-16','Sekolah','2016-07-16','1','2017-07-10'),(12,20400451,'2016/2017',551003,'Drs. SUHARDI','Kurikulum','III.A/2.a/138/VII/2016','2016-07-21','Sekolah','2016-07-21','1','2017-06-30'),(13,20400452,'2016/2017',834328,'Riana Heri Pratiwi, S.Pd.','Kurikulum','455/KEP/III.4/D/1998','1998-07-16','PDM','2016-07-18','1','2017-07-18'),(14,20400459,'2016/2017',1038397,'Emi Estiningsih,S.Pd','Kurikulum','422/067/KA.D.33','2016-08-05','Sekolah','2016-07-18','2','2018-08-05'),(15,20400489,'2016/2017',949625,'Suci Setyo Ningsih','Kurikulum','422/483/BNG.D.25','2016-08-10','Sekolah','2016-06-01','2','2017-06-02'),(16,20401013,'2016/2017',962160,'Abidin Fuadi Nugroho, M.S.I','Kurikulum','191/KEP/III.4/F/2016','2016-08-24','PDM','2012-01-02','2','2018-01-02'),(17,20401014,'2016/2017',0,'Siti Anjar Rukmini, S.Pd.','Waka Sekolah','187/A-3/e.1/VII/2016','2016-07-16','Sekolah','2016-07-16','1','2017-06-16'),(18,20401018,'2016/2017',1149115,'Isdiyanta','Kurikulum','02/04/SMPMT/VII/2016','2016-07-15','Sekolah','2016-07-15','2','2017-07-14'),(19,20401033,'2016/2017',763790,'Hj. Zuny Pramudiyanti, S.Pd','Kurikulum','E-1/063/e.21/IX/2011','2011-09-28','Sekolah','2011-09-28','1','2016-06-30'),(20,20401034,'2016/2017',1052957,'Yulia Rachmawati, S.Pd. Si.','Kurikulum','E-2/e-19/002/VII/2016','2016-07-18','Sekolah','2016-07-18','1','2017-06-18'),(21,20401049,'2016/2017',1203,'Fabi Khairul Hakim, S.Pd','Kurikulum','E-2/SMPM/VII/735.1/2016','2016-07-18','Sekolah','2016-07-18','1','2017-06-30'),(22,20401052,'2016/2017',1,'Susanti Nurhayati, S.Pd','Kurikulum','E-2/001/e-10/2016','2016-07-16','Sekolah','2016-07-16','1','2017-07-16'),(23,20401054,'2016/2017',1009809,'Watini, S.Pd.Si','Kurikulum','E-4/4603/e.18/IX/2016','2016-09-26','Sekolah','2016-09-01','2','2018-08-31'),(24,20401138,'2016/2017',2147483647,'TITIK SUNARTI','Kurikulum','01/III.4.AU/F/2016','2016-06-16','Sekolah','2016-06-16','1','2017-05-30'),(25,20401139,'2016/2017',1048992,'Rahmaningsih Kartikarini, S.E.','Kurikulum','002/e.53/VII/2016','2016-07-18','Sekolah','2016-07-18','1','2017-07-18'),(26,20401140,'2016/2017',1118711,'Dra.Nuraini Subahastuti','Kurikulum',' 3/KEP/IV.4/A/2016','2016-07-18','Sekolah','2016-07-18','1','2017-06-30'),(27,20401142,'2016/2017',0,'Cihna Riastara, S.Pd.Ek','Kurikulum','E-2/SK.008/VIII/2016','2016-07-15','Sekolah','2016-07-18','2','2017-06-30'),(28,20401147,'2016/2017',0,'Drs. Gunawan Suharyana','Kurikulum','092/KEP/1.4.AU/D/2017','2017-01-02','Sekolah','2017-01-02','2','2018-01-02'),(29,20401151,'2016/2017',0,'Dra. Sri Undaryati','Kurikulum','E.2/2673/I.13/e.33/VII/2016','2016-07-16','Sekolah','2016-07-16','2','2017-07-16'),(30,20401169,'2016/2017',1055403,'Sumarsih, S. Pd','Kurikulum','E-6/96/e.49/VII/2016','2016-07-18','Sekolah','2016-07-18','1','2017-07-18'),(31,20401176,'2016/2017',1120964,'Fardian Imam Muttaqin, S.Pd, S','Kurikulum','51/KEP/II.4/D/2015','2015-09-04','PWM','2015-09-04','1','2019-09-04'),(32,20401493,'2016/2017',1158573,'Ary Widyasuryani, S. Pd.','Bendahara','051/V.4.AU/KEP/2015','2015-07-31','Sekolah','2015-07-31','1','2019-07-31'),(33,20401946,'2016/2017',1017897,'Sudadi, M.Pd.','Kurikulum','E.5/284.b/d.14/2016','2016-07-01','Sekolah','2016-07-01','2','2017-07-01'),(34,20401947,'2016/2017',0,'Firman Supriyadi','Kurikulum','E-1/392/VII/2014','2014-07-17','Sekolah','2014-07-17','1','2018-07-17'),(35,20401960,'2016/2017',0,'Anna Revi Nurutami, S.Pd.','Kurikulum','046/III.4/A.U.F/KEP/2016','2016-07-18','Sekolah','2016-07-18','1','2017-06-17'),(36,20401979,'2016/2017',1092243,'Nasar Riyanto, S.Pd.','Kurikulum','496/KEP/III.4/D/2016','2016-07-18','PDM','2016-07-01','2','2017-06-01'),(37,20401980,'2016/2017',1071861,'Atik Artati, S Pd Si','Kurikulum','E-1/052/d.4/VII/2008','2008-07-14','Sekolah','2008-07-14','1','2018-07-14'),(38,20401983,'2016/2017',808790,'Esti Fatimah','Kurikulum','E-1/080/d.1/VII/2016','2016-07-18','Sekolah','2016-07-18','2','2017-06-17'),(39,20401984,'2016/2017',1214038,'DESTIKA SETYA PRATIWI','Kurikulum','E-1/24/d.7/VII/2016','2016-07-16','Sekolah','2016-07-01','1','2019-07-01'),(40,20402060,'2016/2017',875572,'Sarjuni, S.Pd.','Kurikulum','1192/III.4.AU/KPTS/2015','2015-07-25','Sekolah','2015-07-25','2','2018-07-25'),(41,20402093,'2016/2017',594219,'Drs.H.HERIYANTO','Ketenagaan','015.A/III.4.AU/Kep./2016','2016-07-18','Sekolah','2016-07-18','2','2017-07-18'),(42,20402132,'2016/2017',0,'Drs. Moh Rokhis','Kurikulum','290/KEP/III.4.AU/D/2016','2016-06-28','Sekolah','2016-06-28','2','2017-06-28'),(43,20402134,'2016/2017',0,'Tumon, S.E.','Kurikulum','002/KEP/III.4.AU/F/2016','2016-07-01','Sekolah','2016-07-01','2','2017-07-01'),(44,20402170,'2016/2017',937526,'Anita Suryani','Kurikulum','02/III.4.AU/F/KEP/2016','2016-07-18','Sekolah','2016-07-18','1','2017-06-30'),(45,20402274,'2016/2017',1096328,'Susanto, S. Pd. I','Kurikulum','107/MIM/W/VII/2014','2014-07-19','Sekolah','2014-07-19','1','2018-07-01'),(46,20402710,'2016/2017',0,'SRI PUJI WAHYUNI,S.Pd','Kurikulum','E.2/193/C.14/VII/2015','2015-07-27','Sekolah','2015-07-27','2','2018-07-27'),(47,20402722,'2016/2017',959115,'SUYATNA,S.Pd','Kurikulum','428/KEP/III.4/D/2014','2014-07-01','PDM','2014-07-01','2','2017-07-01'),(48,20402730,'2016/2017',751986,'PUJO KARYANTO','Kurikulum','E-1/80/C.2/VII/2014','2014-06-01','Sekolah','2014-06-01','2','2018-06-01'),(49,20402733,'2016/2017',0,'Supadmi, S.Pd.','Kurikulum','E-2/2/C.17/VII/2016','2016-07-16','Sekolah','2016-07-16','1','2017-07-15'),(50,20402736,'2016/2017',0,'Drs. SUPARJIYO','Humas','035/KPTS/SMPM/I/2015','2015-01-05','Sekolah','2015-01-05','2','2019-01-05'),(51,20402738,'2016/2017',0,'Warih Budiarti,Ss','Kurikulum','E-2/67/C.7/VII/2016','2016-07-16','Sekolah','2016-07-16','2','2017-07-01'),(52,20402800,'2016/2017',678,'Naryo,S.Pd','Kurikulum','001/KEP/II.4.AU/D/2016','2016-07-18','Sekolah','2016-08-01','1','2017-07-01'),(53,20402801,'2016/2017',973904,'Parjilah,S.Pd.','Kurikulum','005/III.4/F/2008','2012-07-17','Sekolah','2012-01-17','2','2022-07-17'),(54,20402814,'2016/2017',975,'TRI WAHYUNI, S.Pd','Kurikulum','55/KEP/II.4/D/2015','2015-10-30','PWM','2015-10-30','1','2019-10-30'),(55,20402815,'2016/2017',0,'SUGENG RIYANTO, S.Pd.','Kurikulum','31/KEP/II.4/D/2015','2015-06-26','PWM','2015-06-26','1','2019-06-26'),(56,20402838,'2016/2017',0,'Widi Astuti, S.Pd','Kurikulum','006/III.4/KEP/2016','2016-07-11','Sekolah','2016-07-01','1','2016-06-30'),(57,20403147,'2016/2017',1115370,'Asep Nurcahyanto, S.Pd','Kurikulum','61 KEP/III.4.AU.305/F/2016','2016-07-16','Sekolah','2016-07-17','2','2016-07-17'),(58,20403242,'2016/2017',829,'Asfandi, M.Pd.','Kurikulum','365/III.4/KEP/2014','2014-05-01','PDM','2014-05-01','2','2018-05-01'),(59,20403244,'2016/2017',858280,'Naning Hidayati, S.Pd','Kurikulum','170/III.4/KEP/2016','2016-03-14','PDM','2016-03-14','1','2020-03-14'),(60,20403248,'2016/2017',627974,'Drs. Suramiyo','Kurikulum','002/KEP/III.4.AU.206/M/2016','2017-01-02','Sekolah','2017-01-02','2','2017-07-31'),(61,20403276,'2016/2017',20403276,'ANY RAHMAWATI','Kurikulum','008/KEP/III.4.AU/404/2016','2016-07-18','Sekolah','2016-07-18','1','2017-07-18'),(62,20403284,'2016/2017',700,'Kusni Setyowati, S. Kom','Kurikulum','32/KEP/II.4/D/2016','2016-09-06','PWM','2016-09-06','1','2020-09-06'),(63,20404124,'2016/2017',0,'Dra. Sri Wartiyah','Kurikulum','E-6/C.24//VII/2016','2016-07-16','Sekolah','2016-07-16','2','2017-07-16'),(64,20404174,'2016/2017',1208612,'Hanik Hifdhiyah, S. Pd.','Kurikulum','27/KEP/11.4/D/2015','2015-05-12','PWM','2015-05-12','1','2019-05-12'),(65,20407328,'2016/2017',1194220,'Ani Masruroh','Kurikulum','E-1/196/Kep./d.2/VII/14','2014-07-23','Sekolah','2014-07-23','1','2018-07-23'),(66,20407354,'2016/2017',1,'MURJIYANTO, S.Pd','Kurikulum','E-2/683/d.1/VII/2016','2016-07-18','Sekolah','2016-07-18','1','2017-07-18'),(67,20407359,'2016/2017',875572,'Sarjuni, S.Pd.','Kurikulum','1000/III.4.AU/B/2016','2016-07-16','Sekolah','2016-07-16','2','2019-07-16'),(68,20407390,'2016/2017',1080290,'Assarika Fajarini,Ss','Kurikulum','007/A-5/e.41/VII/2016','2016-07-18','Sekolah','2016-07-18','1','1905-07-12'),(69,20409728,'2016/2017',812,'Rr.Diana Tike S. S.Si','Kurikulum','156/III.4/F/VII/2016','2016-07-01','Sekolah','2016-07-01','2','2017-07-01'),(70,20409840,'2016/2017',889426,'Siti Imzanah, S.Ag, MSI','Kurikulum','103.a/KEP/III.4.AU/F/2016','2016-07-18','Sekolah','2016-07-18','2','2017-07-17'),(71,20411881,'2016/2017',1115391,'Sukir, S.Pd., M.PKim., M.Sc','Kurikulum','099.ist /KEP/II.4.AU/F/2016','2016-07-16','Sekolah','2016-07-18','1','2016-12-31'),(72,20411922,'2016/2017',975,'Muhammad Ihsan Nurrahman, S.Pd','Kurikulum','560/KEP/III.4.AU/D/2015','2015-12-30','Sekolah','2016-01-01','1','2020-01-01'),(73,20411959,'2016/2017',1138612,'Basuki Widiyanto, S.Pd.I','Kurikulum','E-5/02/VII/d.35/2016','2016-07-16','Sekolah','2016-07-16','1','2017-06-30'),(74,20411963,'2016/2017',1071970,'Hj. Anyta Kurniawati, S.Ag., S','Kurikulum','73  / KPTS /MTs. M /VII / 2016','2016-07-18','Sekolah','2016-07-18','1','2016-12-31'),(75,20411973,'2016/2017',1032948,'Erma Suryani, S.Pd I','Kurikulum','45/KEP/E-6/d.37/VII/2016','2016-07-18','Sekolah','2016-07-18','2','2017-07-18'),(76,20411981,'2016/2017',798907,'Ifa Solikatin,S.Pd.I','Kurikulum','E.1/d.34/002.A/VII/2016','2016-07-16','Sekolah','2016-07-16','2','2019-07-16'),(77,60713986,'2016/2017',0,'Puji Astuti, S.Ag','Kurikulum','07/KPTS/MI-S/VII/2016','2016-07-16','Sekolah','2016-07-16','1','2017-06-27'),(78,69830190,'2016/2017',877162,'SALEH SANTOSO','Kurikulum','03/KEP/III.4.AU136/D/2015','2015-01-10','Sekolah','2015-01-10','1','2019-01-10'),(79,69830190,'2016/2017',124113,'Didik Eko Pramono, S.Ag','Kesiswaan','04/KEP/III.4.AU136/D/2015','2015-01-10','Sekolah','2015-01-10','1','2019-01-10');
/*!40000 ALTER TABLE `wakasek` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-07 12:50:01
