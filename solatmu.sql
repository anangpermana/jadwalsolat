-- MySQL dump 10.17  Distrib 10.3.15-MariaDB, for debian-linux-gnueabihf (armv8l)
--
-- Host: localhost    Database: solatmu
-- ------------------------------------------------------
-- Server version	10.3.15-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cctv`
--

DROP TABLE IF EXISTS `cctv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cctv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device_id` int(100) NOT NULL,
  `name` varchar(128) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `url_capture` varchar(100) NOT NULL,
  `user_cctv` varchar(100) NOT NULL,
  `pass_cctv` varchar(100) NOT NULL,
  `file_location` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL,
  `vendor` varchar(128) NOT NULL,
  `url_stream` varchar(128) NOT NULL,
  `last_cek` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cctv_fk0` (`device_id`),
  CONSTRAINT `cctv_fk0` FOREIGN KEY (`device_id`) REFERENCES `device` (`id_device`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cctv`
--

LOCK TABLES `cctv` WRITE;
/*!40000 ALTER TABLE `cctv` DISABLE KEYS */;
/*!40000 ALTER TABLE `cctv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device` (
  `id_device` int(100) NOT NULL AUTO_INCREMENT,
  `key_device` text NOT NULL,
  `name` varchar(128) NOT NULL,
  `ip_public` varchar(128) NOT NULL,
  `ip_local` varchar(128) NOT NULL,
  `location` varchar(256) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `longitude` varchar(128) NOT NULL,
  `kontak` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  PRIMARY KEY (`id_device`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device`
--

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
/*!40000 ALTER TABLE `device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filemanager`
--

DROP TABLE IF EXISTS `filemanager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filemanager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cctv_id` int(11) NOT NULL,
  `cctv_name` varchar(128) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_location` varchar(200) NOT NULL,
  `date` datetime(6) NOT NULL,
  `update_date` datetime NOT NULL,
  `size` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `filemanager_fk0` (`cctv_id`),
  CONSTRAINT `filemanager_fk0` FOREIGN KEY (`cctv_id`) REFERENCES `cctv` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filemanager`
--

LOCK TABLES `filemanager` WRITE;
/*!40000 ALTER TABLE `filemanager` DISABLE KEYS */;
/*!40000 ALTER TABLE `filemanager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal` (
  `today` varchar(255) NOT NULL,
  `yesterday` varchar(255) NOT NULL,
  `asr` varchar(255) NOT NULL,
  `dhuhr` varchar(255) NOT NULL,
  `fajr` varchar(255) NOT NULL,
  `imsak` varchar(255) NOT NULL,
  `isha` varchar(255) NOT NULL,
  `maghrib` varchar(255) NOT NULL,
  `midnight` varchar(255) NOT NULL,
  `sunrise` varchar(255) NOT NULL,
  `sunset` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
INSERT INTO `jadwal` VALUES ('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',73),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',74),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',75),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',76),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',77),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',78),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',79),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',80),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',81),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',82),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',83),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',84),('1-Nov-2019','31-Oct-2019','14:52','11:39','04:06','03:56','18:56','17:48','23:33','05:23','17:44',85);
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kas_mesjid`
--

DROP TABLE IF EXISTS `kas_mesjid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kas_mesjid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) NOT NULL,
  `pemasukan` int(255) NOT NULL,
  `pengeluaran` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kas_mesjid`
--

LOCK TABLES `kas_mesjid` WRITE;
/*!40000 ALTER TABLE `kas_mesjid` DISABLE KEYS */;
INSERT INTO `kas_mesjid` VALUES (3,'10/04/2019',504,100),(4,'10/02/2019',455,253),(5,'10/05/2019',500,200),(6,'11/02/2019',800,200),(7,'11/29/2019',1000,2000);
/*!40000 ALTER TABLE `kas_mesjid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motion`
--

DROP TABLE IF EXISTS `motion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motion`
--

LOCK TABLES `motion` WRITE;
/*!40000 ALTER TABLE `motion` DISABLE KEYS */;
INSERT INTO `motion` VALUES (1,'2019-04-27 08:20:01'),(2,'2019-04-27 08:20:36'),(3,'2019-04-27 08:28:57'),(4,'2019-04-27 08:29:03'),(5,'2019-04-27 08:29:04'),(6,'2019-04-27 08:29:04'),(7,'2019-04-27 08:29:04'),(8,'2019-04-27 08:29:05'),(9,'2019-04-27 08:29:05'),(10,'2019-04-27 08:29:06'),(11,'2019-04-27 08:29:06'),(12,'2019-04-27 08:29:06'),(13,'2019-04-27 08:29:07'),(14,'2019-04-27 08:29:07'),(15,'2019-04-27 08:29:07'),(16,'2019-04-27 08:29:07'),(17,'2019-04-27 08:29:08'),(18,'2019-04-27 08:43:25'),(19,'2019-04-27 08:43:31'),(20,'2019-04-27 08:43:31'),(21,'2019-04-27 08:43:32'),(22,'2019-04-27 08:43:32'),(23,'2019-05-24 15:59:07'),(24,'2019-05-24 15:59:12'),(25,'2019-05-24 15:59:12'),(26,'2019-05-24 15:59:13'),(27,'2019-05-24 15:59:13'),(28,'2019-05-24 15:59:13'),(29,'2019-05-24 15:59:13'),(30,'2019-05-24 15:59:13'),(31,'2019-05-24 15:59:13'),(32,'2019-05-24 15:59:14'),(33,'2019-05-24 15:59:14'),(34,'2019-05-24 15:59:14'),(35,'2019-05-24 15:59:14'),(36,'2019-05-24 15:59:14'),(37,'2019-05-24 15:59:14'),(38,'2019-05-24 15:59:14'),(39,'2019-05-24 15:59:15'),(40,'2019-05-24 15:59:15'),(41,'2019-05-24 15:59:15'),(42,'2019-05-24 15:59:15'),(43,'2019-05-24 15:59:15'),(44,'2019-05-24 15:59:15'),(45,'2019-05-24 16:05:16'),(46,'2019-05-24 16:11:53'),(47,'2019-05-24 16:18:00'),(48,'2019-05-24 16:18:06'),(49,'2019-05-24 22:50:18'),(50,'2019-05-24 22:50:24'),(51,'2019-05-24 22:50:25'),(52,'2019-05-24 22:50:25'),(53,'2019-05-24 22:53:21');
/*!40000 ALTER TABLE `motion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `panic`
--

DROP TABLE IF EXISTS `panic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `panic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panic`
--

LOCK TABLES `panic` WRITE;
/*!40000 ALTER TABLE `panic` DISABLE KEYS */;
INSERT INTO `panic` VALUES (1,'2019-04-25 09:14:33'),(2,'2019-04-25 09:18:08'),(3,'2019-04-25 09:26:14'),(4,'2019-04-25 09:30:51'),(5,'2019-04-25 09:33:48'),(6,'2019-04-25 09:34:19'),(7,'2019-04-25 09:35:41'),(8,'2019-04-25 09:36:35'),(9,'2019-04-25 09:37:23'),(10,'2019-04-25 09:41:13'),(11,'2019-04-25 09:55:14'),(12,'2019-04-25 09:56:51'),(13,'2019-04-25 09:58:19'),(14,'2019-04-25 10:00:10'),(15,'2019-04-25 10:01:28'),(16,'2019-04-25 10:02:11'),(17,'2019-04-25 10:02:32'),(18,'2019-04-25 10:13:07'),(19,'2019-04-25 10:17:31'),(20,'2019-04-25 10:19:45'),(21,'2019-04-25 10:23:53'),(22,'2019-04-25 10:28:05'),(23,'2019-04-26 10:51:38'),(24,'2019-04-26 10:54:39'),(25,'2019-04-26 13:21:07'),(26,'2019-04-26 14:21:25'),(27,'2019-04-26 14:29:29'),(28,'2019-04-26 16:06:37'),(29,'2019-05-24 13:53:48');
/*!40000 ALTER TABLE `panic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','anang143@gmail.com','raspi.png','$2y$10$J6/u4NvvCcltk3a3WcXYxeTHLV3U.kM045D915/u27WPMllnFFJeG','2019-04-05 15:52:00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_token`
--

DROP TABLE IF EXISTS `user_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_token`
--

LOCK TABLES `user_token` WRITE;
/*!40000 ALTER TABLE `user_token` DISABLE KEYS */;
INSERT INTO `user_token` VALUES (3,'anang143@gmail.com','pd9TvFz/MW7m939Jwqd3n/HbHIiqdsszbvsqWEQ1J90=',1556756854),(4,'anang143@gmail.com','VpQ8uf4mJVN1qop4sS2aoK/vx2S9iRiO69OcqX2PJwU=',1556757066),(5,'anang143@gmail.com','Rg3v+R0Ba6dmF0WE9gu5GowogC5ivRHmCSGRmoB6Brg=',1556757235);
/*!40000 ALTER TABLE `user_token` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-19 10:01:49
