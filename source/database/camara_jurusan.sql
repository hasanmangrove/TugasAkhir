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
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurusan` (
  `npsn` int(10) NOT NULL,
  `thn_ajaran` varchar(20) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `akreditasi` varchar(20) NOT NULL,
  `sk_akreditasi` varchar(20) NOT NULL,
  `tglsk_akreditasi` date NOT NULL,
  `tgl_habis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES (20403285,'2016/2017','Teknik Komputer dan Jarin','A','188 / Dikmen / 3061','2012-05-28','0000-00-00'),(20403285,'2016/2017','Akuntansi','A','MK.001275','2005-06-15','0000-00-00'),(20403285,'2016/2017','Pemasaran','A','MK.001276','2005-06-15','0000-00-00'),(20403285,'2016/2017','Multi Media','A','','0000-00-00','0000-00-00'),(20403285,'2016/2017','Teknik Komputer dan Jarin','A','188 / Dikmen / 3061','2012-05-28','0000-00-00'),(20403285,'2016/2017','Akuntansi','A','MK.001275','2005-06-15','0000-00-00'),(20403285,'2016/2017','Pemasaran','A','MK.001276','2005-06-15','0000-00-00'),(20403285,'2016/2017','Multi Media','A','','0000-00-00','0000-00-00'),(20403284,'2016/2017','ADMINISTRASI PERKANTORAN','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20403284,'2016/2017','AKUNTANSI','B','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20403284,'2016/2017','TEKNIK KOMPUTER DAN JARIN','A','','2007-12-19','2012-12-19'),(20400383,'2016/2017','Farmasi','','','2015-08-21','2016-08-21'),(20400383,'2016/2017','Teknik Gambar Bangunan','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20400383,'2016/2017','Teknik Audio Video','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20400383,'2016/2017','Teknik Instalasi Pemanfaa','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20400383,'2016/2017','Teknik Komputer Jaringan ','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20400383,'2016/2017','Teknik Kendaraan Ringan','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20400383,'2016/2018','Teknik permesinan','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20400383,'2016/2019','Teknik Sepeda Motor','A','16.01/BAP-SM/TU/XII/','2014-10-16','2019-10-16'),(20403276,'2016/2017','BUSANA BUTIK','B','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20403276,'2016/2018','BUSANA BUTIK','B','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20400383,'2016/2017','TEKNIK AUDIO VIDEO','A','Mk. 022313','2015-10-22','2020-10-22'),(20400383,'2016/2017','TEKNIK PEMESINAN','A','Mk. 022310','2015-10-22','2020-10-22'),(20400383,'2016/2017','TEKNIK KENDARAAN RINGAN','A','Mk. 022307','2015-10-22','2020-10-22'),(20400383,'2016/2017','REKAYASA PERANGKAT LUNAK','A','Mk. 022301','2015-10-22','2020-10-22'),(20400383,'2016/2017','TEKNIK SEPEDA MOTOR','BELUM','','0000-00-00','0000-00-00'),(20400383,'2016/2017','TEKNIK PEMESINAN','BELUM','','0000-00-00','0000-00-00'),(20400445,'2016/2017','ADMINISTRASI PERKANTORAN','A','Mk. 022312','2015-10-22','2020-10-22'),(20400445,'2016/2017','PEMASARAN','A','Mk. 022315','2015-10-22','2020-10-22'),(20400455,'2016/2017','REKAYASA PERANGKAT LUNAK','A','Mk. 016070','2013-12-21','2018-12-21'),(20400453,'2016/2017','TEKNIK KENDARAAN RINGAN ','A','10.01/BAP-SM/TU/XI/2','2012-11-10','0000-00-00'),(20400453,'2016/2017','TEKNIK SEPEDA MOTOR ','A','5.01/BAP-SM/TU/XI/20','2016-11-05','2021-11-04'),(20400453,'2016/2017','TEKNIK KOMPUTER &JARINGAN','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20400453,'2016/2017','BUSANA BUTIK ','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20400452,'2016/2017','AKUNTANSI','A','Mk 010683','2012-11-10','2017-01-01'),(20400452,'2016/2017','REKAYASA PERANGKAT LUNAK','B','Mk 006933','2011-10-28','2016-01-01'),(20400451,'2016/2017','Teknik Kendaraan Ringan','A','10.01//BAP-SM/TU/XI/','2012-11-10','2017-11-10'),(20400452,'2016/2017','Jasa Boga','B','5.01/BAP-SM/TU/XI/20','2016-11-05','2021-11-05'),(69775326,'2016/2017','Teknik Sepeda Motor','-','-','0000-00-00','0000-00-00'),(20402836,'2016/2017','Tteknik Kendaraan Ringan','A','12.01/BAP/TU/I/2011','2011-01-12','2016-01-12'),(20402836,'2016/2017','Teknik omputer dan Jaring','A','12.01/BAP/TU/I/2011','2011-01-12','2016-01-12'),(20402814,'2016/2017','KRIA KAYU','B','5.01/BAP-SM/TU/XI/20','2016-11-05','2021-11-04'),(20402814,'2016/2017','KRIA TEKSTIL','B','5.01/BAP-SM/TU/XI/20','2016-11-05','2021-11-04'),(20400435,'2016/2017','AKUNTANSI','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20400435,'2016/2017','ADM PERKANTORAN','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20400435,'2016/2017','PEMASARAN','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20400435,'2016/2017','TKJ','A','20-01/BAP-SM/TU/X/20','2014-10-16','2020-10-22'),(20402815,'2016/2017','TEKNIK PENGELASAN','A','MK. 006958','2011-10-28','2016-10-28'),(20402815,'2016/2017','TEKNIK KENDARAAN RINGAN','A','MK. 006959','2011-10-28','2016-10-28'),(20402815,'2016/2017','ADMINISTRASI PERKANTORAN','A','MK. 022337','2015-10-22','2020-10-22'),(20402838,'2016/2017','Teknik Kendaraan Ringan','A','Mk 010703','2012-11-10','2017-11-10'),(20402838,'2016/2017','Teknik Komputer Jaringan','A','Mk 010693','2012-11-10','2017-11-10'),(20402838,'2016/2017','Multimedia','A','Mk 006960','2011-10-28','2016-11-28'),(20402838,'2016/2017','Keperawatan','A','Mk 022339','2015-10-22','2020-10-22'),(20402838,'2016/2017','Farmasi','Dlm proses menunggu','','0000-00-00','0000-00-00'),(20402786,'2016/2017','AKUNTANSI','A','Mk 022342','2015-10-22','2020-10-22'),(20402786,'2016/2017','ADM PERKANTORAN','B','Mk 022347','2015-10-22','2020-10-22'),(20402786,'2016/2017','PEMASARAN','B','Mk 022349','2015-10-22','2020-10-22'),(20402839,'2016/2017','TEKNIK KENDARAAN RINGAN','C','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20402839,'2016/2017','TEKNIK KOMPUTER DAN JARIN','B','21/BAP-SM/TU/XII/201','2013-12-21','2018-12-21'),(20402840,'2016/2017','TAV','','','0000-00-00','0000-00-00'),(20402840,'2016/2017','TKJ','','','0000-00-00','0000-00-00'),(20402840,'2016/2017','TKR','','','0000-00-00','0000-00-00'),(20402840,'2016/2017','MM','','','0000-00-00','0000-00-00'),(20402840,'2016/2017','TSM','','','0000-00-00','0000-00-00'),(20409840,'2016/2017','TKR','B','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20402093,'2016/2017','TEKNIK KENDARAAN RINGAN','A','21-01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20402094,'2016/2017','TEKNIK SEPEDA MOTOR',' -',' -','0000-00-00','0000-00-00'),(20402095,'2016/2017','TEKNIK PEMESINAN','A','21-01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20402096,'2016/2017','TEKNIK FABRIKASI LOGAM','A','21-01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20402097,'2016/2017','TEKNIK AUDIO VIDEO','A','22-01/BAP/TU/XI/2008','2008-11-22','2013-12-22'),(20402098,'2016/2017','TEKNIK KOMPUTER DAN JARIN','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20402132,'2016/2017','ADMINISTRASI PERKANTORAN','A','16.01/BAP-SM/TU/X/20','2014-10-14','2018-10-14'),(20402132,'2016/2017','AKUNTANSI','A','16.01/BAP-SM/TU/X/20','2014-10-14','2018-10-14'),(20402132,'2016/2017','TEKNIK KENDARAAN RINGAN','A','16.01/BAP-SM/TU/X/20','2014-10-14','2018-10-14'),(20402131,'2016/2017','TEKNIK KENDARAAN RINGAN','B','-','2012-11-10','2017-12-20'),(20402131,'2016/2017','ADMINISTRASI PERKANTORAN','A','21.01/BAP-SM/TU/XII/','2013-12-21','2017-12-20'),(20402131,'2016/2017','AKUNTANSI','A','21.01/BAP-SM/TU/XII/','2013-12-21','2017-12-20'),(20402131,'2016/2017','PEMASARAN','A','21.01/BAP-SM/TU/XII/','2013-12-21','2017-12-20'),(20402134,'2016/2017','T.AUDIO VIDEO','B','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20402134,'2016/2017','T. OTOMOTIF','B','21.01/BAP-SM/TU/XII/','2013-12-22','2018-12-22'),(20402134,'2016/2017','AKUNTANSI','B','21.01/BAP-SM/TU/XII/','2013-12-23','2018-12-23'),(20402134,'2016/2017','MULTIMEDIA','-','-','0000-00-00','0000-00-00'),(20402105,'2016/2017','KEPERAWATAN','B','','0000-00-00','0000-00-00'),(20402105,'2016/2017','BUSANA BUTIK','B','12.01/BAP/TU/X/2009','2009-12-10','0000-00-00'),(20402105,'2016/2017','DESAIN DAN PRODUKSI KRIYA','B','12.1/BAP/TU/XI/2010','2010-12-11','2016-12-11'),(20407419,'2016/2017','MULTIMEDIA','A','','0000-00-00','0000-00-00'),(20402130,'2016/2017','Multimedia','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20402130,'2016/2017','Akuntansi','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20402130,'2016/2017','Pemasaran','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20402129,'2016/2017','TEKNIK SEPEDA MOTOR ','Belum Keluar ','','0000-00-00','0000-00-00'),(20402129,'2016/2017','AKUNTANSI ','B','','0000-00-00','0000-00-00'),(20402129,'2016/2017','PEMASARAN ','A','22.01/BAB-SM/TU/X/20','2015-10-22','2019-10-22'),(20402133,'2016/2017','AKUNTANSI','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20402133,'2016/2017','MULTIMEDIA','A',' -','2011-10-28','0000-00-00'),(20402133,'2016/2017','JASA BOGA','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20402133,'2016/2017','PERBANKAN SYARIAH','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20402133,'2016/2017','ANIMASI','A','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20402133,'2016/2017','FARMASI','-','-','0000-00-00','0000-00-00'),(20407359,'2016/2017','Teknik Kendaraan Ringan','B','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20407359,'2016/2017','Teknik Komputer Jaringan','B','16.01/BAP-SM/TU/X/20','2014-10-16','2019-10-16'),(20407434,'2016/2017','Teknik Komputer dan Jarin','B','','0000-00-00','0000-00-00'),(20407434,'2016/2017','Teknik Dan Bisnis Sepeda ','Belum Akreditasi','','0000-00-00','0000-00-00'),(20401176,'2016/2017','TEKNIK KENDARAAN RINGAN','A','16.01/BAP.SMT/TU/X/2','2014-10-16','2019-10-16'),(20401176,'2016/2017','TEKNIK KOMPUTER DAN JARIN','A','21.01/BAP-SM/TU/XII/','2013-12-21','2018-12-21'),(20401176,'2016/2017','JASA BOGA','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401176,'2016/2017','TEKNIK SEPEDA MOTOR','DALAM PROSES','-','0000-00-00','0000-00-00'),(20401198,'2016/2017','MULTIMEDIA','A','No : 21.01/BAP-SM/TU','2013-12-21','2018-12-21'),(20401198,'2016/2017','TEKNIK KENDARAAN RINGAN','A','No.12.01/BAP/TU/X/20','2013-10-16','2019-10-16'),(20401198,'2016/2017','TEKNIK SEPEDA MOTOR','DALAM PROSES','','0000-00-00','0000-00-00'),(20401142,'2016/2017','Administrasi Perkantoran','A','5.01/BAP-SM/TU/XI/20','2016-11-05','2021-11-04'),(20401142,'2016/2017','Akuntansi','B','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401142,'2016/2017','Tata Busana','B','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401140,'2016/2017','Akuntansi','A','5.01/BAP=SM/TU/XI/20','2016-11-08','2021-11-04'),(20401140,'2016/2017','Administrasi Perkantoran','A','8.01/BAP-SM/TU/XI/20','2016-11-08','2021-11-04'),(20401140,'2016/2017','Multimedia','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-11-08'),(20401175,'2016/2017','Teknik Kendaraan Ringan','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401175,'2016/2017','Teknik Sepeda Motor','','','0000-00-00','0000-00-00'),(20401174,'2016/2017','TKR','','','0000-00-00','0000-00-00'),(20401310,'2016/2017','TEKNIK AUDIO VIDEO','A','BAP-S/M No.22.01/BAP','2015-12-19','2020-12-19'),(20401310,'2016/2017','KEPERAWATAN','BELUM','','0000-00-00','0000-00-00'),(20401139,'2016/2017','Akuntansi','A','Mk 022369','2015-10-22','2020-10-22'),(20401139,'2016/2017','Busana Butik','A','Mk 018506','2014-10-16','2019-10-16'),(20401139,'2016/2017','Teknik Sepeda Motor','Belum','','0000-00-00','0000-00-00'),(20401138,'2016/2017','Akuntansi','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401138,'2016/2017','Pemasaran','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401138,'2016/2017','Teknik Kendaraan Ringan','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401138,'2016/2017','Teknik Sepeda Motor','A','22.01/BAP-SM/TU/X/20','2015-10-22','2020-10-22'),(20401138,'2016/2017','Busana Butik','A','5-01]BAP-SM/TU/XI/20','2016-11-05','2021-11-04'),(20407390,'2016/2017','Teknik Kendaraan Ringan','A','22.01/BAP-SM/TU/X/20','0000-00-00','0000-00-00'),(20407390,'2016/2017','Teknik Sepeda Motor','Belum','','0000-00-00','0000-00-00'),(20407390,'2016/2017','Tata Busana Butik','A','','0000-00-00','0000-00-00'),(20409728,'2016/2017','TITL','B','','0000-00-00','0000-00-00'),(20409729,'2016/2017','FARMASI','-','','0000-00-00','0000-00-00'),(20401319,'2016/2017','Teknik Kendaraan Ringan','A','16.01/BAP-SM/TU/X/20','2014-10-16','0000-00-00'),(20401319,'2016/2017','Farmasi ','','','0000-00-00','0000-00-00'),(20401319,'2016/2017','Teknik Sepeda Motor','','','0000-00-00','0000-00-00');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-01 11:10:27
