# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: diskasdb
# Generation Time: 2019-11-15 13:37:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table banner
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_banner` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table event_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `event_status`;

CREATE TABLE `event_status` (
  `status_id` int(11) NOT NULL,
  `nama_status` varchar(255) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `event_status` WRITE;
/*!40000 ALTER TABLE `event_status` DISABLE KEYS */;

INSERT INTO `event_status` (`status_id`, `nama_status`)
VALUES
	(1,'Menunggu Verifikasi'),
	(2,'Event Terverifikasi'),
	(3,'Event Ditolak');

/*!40000 ALTER TABLE `event_status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table event_tiket
# ------------------------------------------------------------

DROP TABLE IF EXISTS `event_tiket`;

CREATE TABLE `event_tiket` (
  `event_tiket_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `nama_katagori_tiket` varchar(255) NOT NULL,
  `harga_tiket` decimal(10,0) NOT NULL,
  `kuota` int(11) NOT NULL,
  `is_sertifikat` int(1) NOT NULL,
  `is_snack` int(1) NOT NULL,
  PRIMARY KEY (`event_tiket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `event_tiket` WRITE;
/*!40000 ALTER TABLE `event_tiket` DISABLE KEYS */;

INSERT INTO `event_tiket` (`event_tiket_id`, `event_id`, `nama_katagori_tiket`, `harga_tiket`, `kuota`, `is_sertifikat`, `is_snack`)
VALUES
	(1,1,'silver',40000,50,1,1),
	(2,1,'gold',1000000,50,1,0);

/*!40000 ALTER TABLE `event_tiket` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `event_id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(50) NOT NULL,
  `users_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `diselenggarakan_oleh` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `poster` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `is_draft` int(1) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `fk_kategori` (`kategori_id`),
  CONSTRAINT `fk_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`event_id`, `nama_event`, `users_id`, `kategori_id`, `fakultas_id`, `diselenggarakan_oleh`, `lokasi`, `jam_mulai`, `jam_akhir`, `deskripsi`, `tanggal`, `poster`, `status_id`, `is_draft`)
VALUES
	(1,'sinaptika',2,1,1,'fakultas ilmu komputer','jl. meruya selatan gedung tower lt 7','10:00:00','12:00:00','tentang pengabdian masyarkaat','2019-10-10','',1,0),
	(2,'kewirausahaan',1,2,4,'alwi','auditorium','15:00:00','18:00:00','','2019-10-20','',0,1);

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fakultas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fakultas`;

CREATE TABLE `fakultas` (
  `fakultas_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(255) NOT NULL,
  PRIMARY KEY (`fakultas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `fakultas` WRITE;
/*!40000 ALTER TABLE `fakultas` DISABLE KEYS */;

INSERT INTO `fakultas` (`fakultas_id`, `nama_fakultas`)
VALUES
	(1,'Fakultas Ilmu Komputer'),
	(2,'Fakultas Ilmu Komunikasi'),
	(3,'Fakultas Ekonomi Bisnis'),
	(4,'Fakultas Bahasa'),
	(5,'Fakultas Tehnik'),
	(6,'Fakultas Psikologi');

/*!40000 ALTER TABLE `fakultas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table faq
# ------------------------------------------------------------

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan_faq` text NOT NULL,
  `jawaban_faq` text NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table jurusan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `jurusan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`jurusan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table kategori
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Seminar','2019-11-13 23:18:35',NULL,NULL),
	(2,'Non Seminar','2019-11-13 23:18:35',NULL,NULL),
	(3,'halah','2019-11-13 23:18:35','2019-11-14 00:01:04','2019-11-14 01:04:54'),
	(4,'sdad','2019-11-13 23:18:35',NULL,NULL),
	(5,'sdad','2019-11-13 23:18:35',NULL,NULL),
	(6,'sdad','2019-11-13 23:18:35',NULL,NULL),
	(7,'ubah ah jadi panjang gitu','2019-11-13 23:18:35',NULL,NULL),
	(8,'Seminar Musik','2019-11-13 23:18:35','2019-11-14 01:01:24',NULL),
	(9,'yo dong','2019-11-13 23:18:35',NULL,NULL),
	(10,'kasih lagi','2019-11-13 23:18:35',NULL,NULL),
	(11,'halak','2019-11-13 23:18:35',NULL,'2019-11-15 19:30:09'),
	(12,'halak','2019-11-13 23:18:35',NULL,'2019-11-15 19:30:15'),
	(13,'masuk gak nih terus','2019-11-13 23:18:35',NULL,'2019-11-13 23:18:16'),
	(14,'ooo','2019-11-13 23:18:35',NULL,'2019-11-13 23:18:18'),
	(15,'hayo loh','2019-11-13 23:18:35',NULL,'2019-11-13 23:18:20'),
	(16,'Apa ora emang ganti','2019-11-14 01:05:08','2019-11-14 01:05:13','2019-11-14 01:05:17'),
	(17,'Pensi edit','2019-11-15 19:53:37','2019-11-15 19:53:49','2019-11-15 19:53:57');

/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kontak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `kontak_id` int(11) NOT NULL AUTO_INCREMENT,
  `telpon_kontak` int(20) NOT NULL,
  `email_kontak` varchar(50) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  PRIMARY KEY (`kontak_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table pembayaran
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(50) NOT NULL,
  `norek` int(25) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  PRIMARY KEY (`pembayaran_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pembayaran` WRITE;
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;

INSERT INTO `pembayaran` (`pembayaran_id`, `nama_bank`, `norek`, `atas_nama`)
VALUES
	(1,'BNI',123458575,'Mecubuana'),
	(2,'BCA',32423423,'Diskas');

/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table transaksi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `tanggal_reservasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_bayar` int(1) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_tiket_id` int(11) NOT NULL,
  `pembayaran_id` int(11) NOT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;

INSERT INTO `transaksi` (`transaksi_id`, `users_id`, `tanggal_reservasi`, `is_bayar`, `event_id`, `event_tiket_id`, `pembayaran_id`)
VALUES
	(1,2,'2019-10-10 20:32:52',1,1,1,2),
	(2,1,'2019-10-10 20:32:56',0,1,2,1);

/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table universitas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `universitas`;

CREATE TABLE `universitas` (
  `universitas_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_universitas` varchar(255) NOT NULL,
  PRIMARY KEY (`universitas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan_id` int(11) NOT NULL,
  `universitas_id` int(11) NOT NULL,
  `nim` int(50) NOT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `nama`, `jurusan_id`, `universitas_id`, `nim`, `telepon`, `email`, `password`, `user_role_id`, `avatar`)
VALUES
	(4,'alfathony',0,0,0,NULL,'email.alfathony@gmail.com','',1,'https://lh3.googleusercontent.com/a-/AAuE7mAdccPEUpOk19bfdmMSuF-VOD5ZTRgG1SJTveAdUQ=s96-c'),
	(5,'Koondangin Aja',0,0,0,NULL,'koondangin@gmail.com','',1,'https://lh4.googleusercontent.com/-L6KBrrWMzBI/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rf_pctGO-22BaLw2AnsKYh6RqdkkA/s96-c/photo.jpg'),
	(6,'Rezky Rachmadi',0,0,0,NULL,'qq.fourr@gmail.com','',1,'https://lh3.googleusercontent.com/-DmTtb34gPp0/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfkMgOVGaXFE04rYfpmYOGekQnlsQ/s96-c/photo.jpg');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_role`;

CREATE TABLE `users_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users_role` WRITE;
/*!40000 ALTER TABLE `users_role` DISABLE KEYS */;

INSERT INTO `users_role` (`role_id`, `nama`)
VALUES
	(1,'user'),
	(2,'admin');

/*!40000 ALTER TABLE `users_role` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
