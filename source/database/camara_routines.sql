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
-- Temporary view structure for view `v_wakasek_profil`
--

DROP TABLE IF EXISTS `v_wakasek_profil`;
/*!50001 DROP VIEW IF EXISTS `v_wakasek_profil`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_wakasek_profil` AS SELECT 
 1 AS `npsn`,
 1 AS `tahun_ajaran`,
 1 AS `nbm`,
 1 AS `wakil_kepala`,
 1 AS `waka_bidang`,
 1 AS `sk_pengangkatan`,
 1 AS `tgl_sk`,
 1 AS `asal_sk`,
 1 AS `tmt_jabatan`,
 1 AS `masa_tugaske`,
 1 AS `tgl_habis`,
 1 AS `kec`,
 1 AS `kab`,
 1 AS `prov`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_user`
--

DROP TABLE IF EXISTS `v_user`;
/*!50001 DROP VIEW IF EXISTS `v_user`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_user` AS SELECT 
 1 AS `id`,
 1 AS `username`,
 1 AS `email`,
 1 AS `password`,
 1 AS `Nama`,
 1 AS `level`,
 1 AS `Foto`,
 1 AS `npsn`,
 1 AS `nama_sekolah`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_siswa_profil`
--

DROP TABLE IF EXISTS `v_siswa_profil`;
/*!50001 DROP VIEW IF EXISTS `v_siswa_profil`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_siswa_profil` AS SELECT 
 1 AS `npsn`,
 1 AS `tahun_ajaran`,
 1 AS `kelas`,
 1 AS `jurusan`,
 1 AS `rombel`,
 1 AS `jumlah_putra`,
 1 AS `jumlah_putri`,
 1 AS `kms`,
 1 AS `non_kms`,
 1 AS `jumlah_siswa`,
 1 AS `kec`,
 1 AS `kab`,
 1 AS `prov`,
 1 AS `nama_sekolah`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_wakasek_profil`
--

/*!50001 DROP VIEW IF EXISTS `v_wakasek_profil`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_wakasek_profil` AS select `wakasek`.`npsn` AS `npsn`,`wakasek`.`tahun_ajaran` AS `tahun_ajaran`,`wakasek`.`nbm` AS `nbm`,`wakasek`.`wakil_kepala` AS `wakil_kepala`,`wakasek`.`waka_bidang` AS `waka_bidang`,`wakasek`.`sk_pengangkatan` AS `sk_pengangkatan`,`wakasek`.`tgl_sk` AS `tgl_sk`,`wakasek`.`asal_sk` AS `asal_sk`,`wakasek`.`tmt_jabatan` AS `tmt_jabatan`,`wakasek`.`masa_tugaske` AS `masa_tugaske`,`wakasek`.`tgl_habis` AS `tgl_habis`,`profil`.`kec` AS `kec`,`profil`.`kab` AS `kab`,`profil`.`prov` AS `prov` from (`wakasek` join `profil` on((`wakasek`.`npsn` = `profil`.`npsn`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_user`
--

/*!50001 DROP VIEW IF EXISTS `v_user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_user` AS select `user`.`id` AS `id`,`user`.`username` AS `username`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`Nama` AS `Nama`,`user`.`level` AS `level`,`user`.`Foto` AS `Foto`,`user`.`npsn` AS `npsn`,`profil`.`nama_sekolah` AS `nama_sekolah` from (`user` join `profil` on((`profil`.`npsn` = `user`.`npsn`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_siswa_profil`
--

/*!50001 DROP VIEW IF EXISTS `v_siswa_profil`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_siswa_profil` AS select `siswa`.`npsn` AS `npsn`,`siswa`.`tahun_ajaran` AS `tahun_ajaran`,`siswa`.`kelas` AS `kelas`,`siswa`.`jurusan` AS `jurusan`,`siswa`.`rombel` AS `rombel`,`siswa`.`jumlah_putra` AS `jumlah_putra`,`siswa`.`jumlah_putri` AS `jumlah_putri`,`siswa`.`kms` AS `kms`,`siswa`.`non_kms` AS `non_kms`,`siswa`.`jumlah_siswa` AS `jumlah_siswa`,`profil`.`kec` AS `kec`,`profil`.`kab` AS `kab`,`profil`.`prov` AS `prov`,`profil`.`nama_sekolah` AS `nama_sekolah` from (`siswa` join `profil` on((`siswa`.`npsn` = `profil`.`npsn`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Dumping events for database 'camara'
--

--
-- Dumping routines for database 'camara'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-07 12:50:01
