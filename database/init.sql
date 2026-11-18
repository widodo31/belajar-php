-- MySQL dump 10.13  Distrib 8.0.46, for Linux (x86_64)
--
-- Host: localhost    Database: belajar-php-db
-- ------------------------------------------------------
-- Server version	8.0.46

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `belajar-php-db`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `belajar-php-db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `belajar-php-db`;

--
-- Table structure for table `coba`
--

DROP TABLE IF EXISTS `coba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coba` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `alamat` varchar(22) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coba`
--

LOCK TABLES `coba` WRITE;
/*!40000 ALTER TABLE `coba` DISABLE KEYS */;
INSERT INTO `coba` VALUES (1,'Widodo','rwidodo@gmail.com','Podorejo','2026-10-28 04:29:18'),(2,'Maesaroh','maesaroh@gmail.com','Podorejo juga','2026-10-28 05:17:15');
/*!40000 ALTER TABLE `coba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_mahasiswa`
--

DROP TABLE IF EXISTS `tb_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int NOT NULL AUTO_INCREMENT,
  `nim_mhs` char(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nama_mhs` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `prodi_mhs` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` mediumint NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status_mhs` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_mahasiswa`
--

LOCK TABLES `tb_mahasiswa` WRITE;
/*!40000 ALTER TABLE `tb_mahasiswa` DISABLE KEYS */;
INSERT INTO `tb_mahasiswa` VALUES (1,'123456','Widodo','BD','zdsfb',5,'widodo@gmail.com','23456543',1),(2,'23412','Roziqin','DI','Podorejo',4,'roziqin@gmail.com','578978',1),(3,'8765','Zhafran','ARS','Podorejo',3,'zhafran@gmail.com','746354',2),(4,'0987','Zunaira','DKV','Kelurahan Podorejo',9,'zunaira@gmail.com','58998756',3),(5,'8543523','maesaroh','MBD','dukuh kaliancar podorejo',7,'maesaroh@gmail.com','456789',4);
/*!40000 ALTER TABLE `tb_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_prodi`
--

DROP TABLE IF EXISTS `tb_prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_prodi` (
  `kode_prodi` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_prodi` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_prodi`
--

LOCK TABLES `tb_prodi` WRITE;
/*!40000 ALTER TABLE `tb_prodi` DISABLE KEYS */;
INSERT INTO `tb_prodi` VALUES ('ARS','Arsitektur'),('BD','Bisnis Digital'),('DI','Desain Interior'),('DKV','Desain Komunikasi Visual'),('DM','Desain Mode'),('MBD','Magister Bisnis Digital');
/*!40000 ALTER TABLE `tb_prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_provinsi`
--

DROP TABLE IF EXISTS `tb_provinsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_provinsi` (
  `id_provinsi` smallint NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_provinsi`
--

LOCK TABLES `tb_provinsi` WRITE;
/*!40000 ALTER TABLE `tb_provinsi` DISABLE KEYS */;
INSERT INTO `tb_provinsi` VALUES (3,'Nusa Tenggara Barat'),(4,'Jawa Timur'),(5,'Jawa Tengah'),(7,'Jawa Barat'),(9,'DKi Jakarta');
/*!40000 ALTER TABLE `tb_provinsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rbac_menus`
--

DROP TABLE IF EXISTS `tb_rbac_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_rbac_menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `urutan` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_menu_parent` (`parent_id`),
  CONSTRAINT `fk_menu_parent` FOREIGN KEY (`parent_id`) REFERENCES `tb_rbac_menus` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rbac_menus`
--

LOCK TABLES `tb_rbac_menus` WRITE;
/*!40000 ALTER TABLE `tb_rbac_menus` DISABLE KEYS */;
INSERT INTO `tb_rbac_menus` VALUES (5,NULL,'Beranda','/?page=dashboard','bi bi-house',1,1,'2026-11-16 13:56:59',NULL),(6,NULL,'Input Mahasiswa','/?page=input-mahasiswa','bi bi-clipboard-data',2,1,'2026-11-16 13:56:59',NULL),(7,NULL,'Cari Mahasiswa','/?page=cari-mahasiswa','bi bi-search',3,1,'2026-11-16 13:56:59',NULL),(8,NULL,'Master Data',NULL,'bi bi-grid',4,1,'2026-11-16 13:56:59',NULL),(9,8,'Program Studi','/?page=program-studi','bi bi-building',1,1,'2026-11-16 13:58:29',NULL),(10,8,'Provinsi','/?page=provinsi','bi bi-geo-alt',2,1,'2026-11-16 13:59:26',NULL);
/*!40000 ALTER TABLE `tb_rbac_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rbac_permissions`
--

DROP TABLE IF EXISTS `tb_rbac_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_rbac_permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_permission` varchar(100) NOT NULL,
  `kode_permission` varchar(100) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_permission` (`kode_permission`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rbac_permissions`
--

LOCK TABLES `tb_rbac_permissions` WRITE;
/*!40000 ALTER TABLE `tb_rbac_permissions` DISABLE KEYS */;
INSERT INTO `tb_rbac_permissions` VALUES (1,'Melihat Pengguna','users.view','Melihat daftar pengguna','2026-11-15 03:49:53'),(2,'Menambah Pengguna','users.create','Menambahkan pengguna','2026-11-15 03:49:53'),(3,'Mengubah Pengguna','users.edit','Mengubah data pengguna','2026-11-15 03:49:53'),(4,'Menghapus Pengguna','users.delete','Menghapus pengguna','2026-11-15 03:49:53'),(5,'Melihat Obat','obat.view','Melihat data obat','2026-11-15 03:49:53'),(6,'Menambah Obat','obat.create','Menambahkan data obat','2026-11-15 03:49:53'),(7,'Mengubah Obat','obat.edit','Mengubah data obat','2026-11-15 03:49:53'),(8,'Menghapus Obat','obat.delete','Menghapus data obat','2026-11-15 03:49:53'),(9,'Melihat Laporan','laporan.view','Melihat laporan','2026-11-15 03:49:53'),(10,'Mengekspor Laporan','laporan.export','Mengekspor laporan','2026-11-15 03:49:53');
/*!40000 ALTER TABLE `tb_rbac_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rbac_role_menus`
--

DROP TABLE IF EXISTS `tb_rbac_role_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_rbac_role_menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_role_menu` (`role_id`,`menu_id`),
  KEY `fk_role_menus_menu` (`menu_id`),
  CONSTRAINT `fk_role_menus_menu` FOREIGN KEY (`menu_id`) REFERENCES `tb_rbac_menus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_role_menus_role` FOREIGN KEY (`role_id`) REFERENCES `tb_rbac_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rbac_role_menus`
--

LOCK TABLES `tb_rbac_role_menus` WRITE;
/*!40000 ALTER TABLE `tb_rbac_role_menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_rbac_role_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rbac_role_permissions`
--

DROP TABLE IF EXISTS `tb_rbac_role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_rbac_role_permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_role_permission` (`role_id`,`permission_id`),
  KEY `fk_role_permission_permission` (`permission_id`),
  CONSTRAINT `fk_role_permission_permission` FOREIGN KEY (`permission_id`) REFERENCES `tb_rbac_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_role_permission_role` FOREIGN KEY (`role_id`) REFERENCES `tb_rbac_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rbac_role_permissions`
--

LOCK TABLES `tb_rbac_role_permissions` WRITE;
/*!40000 ALTER TABLE `tb_rbac_role_permissions` DISABLE KEYS */;
INSERT INTO `tb_rbac_role_permissions` VALUES (1,1,10,'2026-11-15 03:52:45'),(2,1,9,'2026-11-15 03:52:45'),(3,1,6,'2026-11-15 03:52:45'),(4,1,8,'2026-11-15 03:52:45'),(5,1,7,'2026-11-15 03:52:45'),(6,1,5,'2026-11-15 03:52:45'),(7,1,2,'2026-11-15 03:52:45'),(8,1,4,'2026-11-15 03:52:45'),(9,1,3,'2026-11-15 03:52:45'),(10,1,1,'2026-11-15 03:52:45'),(16,2,6,'2026-11-15 03:54:50'),(17,2,7,'2026-11-15 03:54:50'),(18,2,5,'2026-11-15 03:54:50'),(19,2,2,'2026-11-15 03:54:50'),(20,2,1,'2026-11-15 03:54:50'),(23,3,10,'2026-11-15 03:55:29'),(24,3,9,'2026-11-15 03:55:29'),(25,3,5,'2026-11-15 03:55:29'),(26,3,1,'2026-11-15 03:55:29');
/*!40000 ALTER TABLE `tb_rbac_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rbac_roles`
--

DROP TABLE IF EXISTS `tb_rbac_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_rbac_roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(50) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_role` (`nama_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rbac_roles`
--

LOCK TABLES `tb_rbac_roles` WRITE;
/*!40000 ALTER TABLE `tb_rbac_roles` DISABLE KEYS */;
INSERT INTO `tb_rbac_roles` VALUES (1,'Administrator','Memiliki seluruh hak akses aplikasi','2026-11-15 03:47:40'),(2,'Pegawai','Memiliki hak akses operasional','2026-11-15 03:47:40'),(3,'Pengurus','Memiliki hak akses pengelolaan dan laporan','2026-11-15 03:47:40');
/*!40000 ALTER TABLE `tb_rbac_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rbac_users`
--

DROP TABLE IF EXISTS `tb_rbac_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_rbac_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_users_role` (`role_id`),
  CONSTRAINT `fk_users_role` FOREIGN KEY (`role_id`) REFERENCES `tb_rbac_roles` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rbac_users`
--

LOCK TABLES `tb_rbac_users` WRITE;
/*!40000 ALTER TABLE `tb_rbac_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_rbac_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Narendra Zhafran','zhafran','zhafran@gmail.com','$2y$10$tGph8DROS6aMED7fP53sE.5eWCKyS5fWnuKoL/.H2OqKgXIUSmmEC');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'belajar-php-db'
--

--
-- Dumping routines for database 'belajar-php-db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-11-18  3:54:42
