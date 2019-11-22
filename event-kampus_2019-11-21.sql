# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.25)
# Database: event-kampus
# Generation Time: 2019-11-21 12:14:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Seminar',NULL,NULL),
	(2,'Music',NULL,NULL),
	(3,'Exhibition',NULL,NULL),
	(4,'Public Lecture',NULL,NULL);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table event_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `event_status`;

CREATE TABLE `event_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table event_tickets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `event_tickets`;

CREATE TABLE `event_tickets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `ticket_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quota` int(11) DEFAULT NULL,
  `is_certificate` int(11) DEFAULT NULL,
  `is_snack` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `event_tickets` WRITE;
/*!40000 ALTER TABLE `event_tickets` DISABLE KEYS */;

INSERT INTO `event_tickets` (`id`, `event_id`, `ticket_name`, `price`, `quota`, `is_certificate`, `is_snack`, `created_at`, `updated_at`)
VALUES
	(1,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:31:06','2019-11-17 23:31:06'),
	(2,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:31:06','2019-11-17 23:31:06'),
	(3,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:36:45','2019-11-17 23:36:45'),
	(4,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:42:22','2019-11-17 23:42:22'),
	(5,NULL,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(6,NULL,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(7,NULL,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(8,NULL,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(9,NULL,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(10,NULL,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(11,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:44:08','2019-11-17 23:44:08'),
	(12,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:44:22','2019-11-17 23:44:22'),
	(13,NULL,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(14,NULL,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(15,NULL,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(16,NULL,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(17,NULL,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(18,NULL,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(19,NULL,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(20,NULL,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(21,28,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(22,28,'dua',200,NULL,NULL,NULL,NULL,NULL),
	(23,29,'satu',100,NULL,NULL,NULL,NULL,NULL),
	(24,29,'dua',200,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `event_tickets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `major_id` int(11) DEFAULT NULL,
  `publisher` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` text COLLATE utf8mb4_unicode_ci,
  `event_date` date DEFAULT NULL,
  `starting_time` time DEFAULT NULL,
  `ending_time` time DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cover` text COLLATE utf8mb4_unicode_ci,
  `status_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`id`, `title`, `user_id`, `category_id`, `faculty_id`, `major_id`, `publisher`, `place`, `event_date`, `starting_time`, `ending_time`, `description`, `cover`, `status_id`, `is_active`, `created_at`, `updated_at`)
VALUES
	(1,'asd asd ad',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 21:36:47','2019-11-17 21:36:47'),
	(2,'tiket seminar',NULL,NULL,NULL,NULL,'himpunan',NULL,NULL,NULL,NULL,'in deskripsi',NULL,NULL,NULL,'2019-11-17 21:37:57','2019-11-17 21:37:57'),
	(3,'Seminar nasional kewirausahaan',NULL,3,NULL,NULL,'himpunan mahasiwa','gedung pramuka','2019-11-18','09:00:00','13:00:00','raih seminar exhibition saja','bhinneka-logo.png',NULL,NULL,'2019-11-17 22:10:46','2019-11-17 22:10:46'),
	(4,'lagi terus',NULL,1,NULL,NULL,'hipunan','kajsd akjdakjd','2019-11-18','10:11:00','23:00:00','kasdkajd aksjd',NULL,NULL,NULL,'2019-11-17 22:57:46','2019-11-17 22:57:46'),
	(5,'lagi terus',NULL,1,NULL,NULL,'hipunan','kajsd akjdakjd','2019-11-18','10:11:00','23:00:00','kasdkajd aksjd',NULL,NULL,NULL,'2019-11-17 22:57:53','2019-11-17 22:57:53'),
	(6,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:31:06','2019-11-17 23:31:06'),
	(7,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:31:06','2019-11-17 23:31:06'),
	(8,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:31:41','2019-11-17 23:31:41'),
	(9,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:35:31','2019-11-17 23:35:31'),
	(10,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:36:07','2019-11-17 23:36:07'),
	(11,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:36:45','2019-11-17 23:36:45'),
	(12,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:41:34','2019-11-17 23:41:34'),
	(13,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:42:22','2019-11-17 23:42:22'),
	(14,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:42:37','2019-11-17 23:42:37'),
	(15,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:43:07','2019-11-17 23:43:07'),
	(16,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:43:57','2019-11-17 23:43:57'),
	(17,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:44:08','2019-11-17 23:44:08'),
	(18,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:44:22','2019-11-17 23:44:22'),
	(19,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:47:23','2019-11-17 23:47:23'),
	(20,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:47:59','2019-11-17 23:47:59'),
	(21,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:49:32','2019-11-17 23:49:32'),
	(22,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:49:45','2019-11-17 23:49:45'),
	(23,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:50:06','2019-11-17 23:50:06'),
	(24,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:50:40','2019-11-17 23:50:40'),
	(25,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:52:14','2019-11-17 23:52:14'),
	(26,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:52:21','2019-11-17 23:52:21'),
	(27,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:52:23','2019-11-17 23:52:23'),
	(28,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:52:30','2019-11-17 23:52:30'),
	(29,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:54:17','2019-11-17 23:54:17'),
	(30,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-17 23:54:36','2019-11-17 23:54:36'),
	(31,'event lagi',NULL,1,NULL,NULL,'maskdmasd','askdlaksd','2019-11-18','11:11:00','11:11:00','aksdaksd',NULL,NULL,NULL,'2019-11-17 23:55:52','2019-11-17 23:55:52'),
	(32,'event lagi',NULL,1,NULL,NULL,'maskdmasd','askdlaksd','2019-11-18','11:11:00','11:11:00','aksdaksd',NULL,NULL,NULL,'2019-11-17 23:56:23','2019-11-17 23:56:23'),
	(33,'event lagi',NULL,1,NULL,NULL,'maskdmasd','askdlaksd','2019-11-18','11:11:00','11:11:00','aksdaksd',NULL,NULL,NULL,'2019-11-17 23:57:10','2019-11-17 23:57:10'),
	(34,'event lagi',NULL,1,NULL,NULL,'maskdmasd','askdlaksd','2019-11-18','11:11:00','11:11:00','aksdaksd',NULL,NULL,NULL,'2019-11-17 23:58:14','2019-11-17 23:58:14'),
	(35,'event lagi',NULL,1,NULL,NULL,'maskdmasd','askdlaksd','2019-11-18','11:11:00','11:11:00','aksdaksd',NULL,NULL,NULL,'2019-11-17 23:58:15','2019-11-17 23:58:15'),
	(36,'mari',NULL,1,NULL,NULL,'asdasda','aksjdkajd','2019-11-18','11:11:00','11:11:00','askjdkj',NULL,NULL,NULL,'2019-11-17 23:58:55','2019-11-17 23:58:55'),
	(37,'mari',NULL,1,NULL,NULL,'asdasda','aksjdkajd','2019-11-18','11:11:00','11:11:00','askjdkj',NULL,NULL,NULL,'2019-11-18 00:00:05','2019-11-18 00:00:05'),
	(38,'mari',NULL,1,NULL,NULL,'asdasda','aksjdkajd','2019-11-18','11:11:00','11:11:00','askjdkj',NULL,NULL,NULL,'2019-11-18 00:00:28','2019-11-18 00:00:28'),
	(39,'mari',NULL,1,NULL,NULL,'asdasda','aksjdkajd','2019-11-18','11:11:00','11:11:00','askjdkj',NULL,NULL,NULL,'2019-11-18 00:01:39','2019-11-18 00:01:39'),
	(40,'mari',NULL,1,NULL,NULL,'asdasda','aksjdkajd','2019-11-18','11:11:00','11:11:00','askjdkj',NULL,NULL,NULL,'2019-11-18 00:02:04','2019-11-18 00:02:04'),
	(41,'ayo',NULL,1,NULL,NULL,'asd','asd','2019-11-18','11:11:00','11:11:00',',amsdasd',NULL,NULL,NULL,'2019-11-18 00:02:49','2019-11-18 00:02:49');

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_banners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_banners`;

CREATE TABLE `master_banners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_contacts`;

CREATE TABLE `master_contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `telephone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_faculties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_faculties`;

CREATE TABLE `master_faculties` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_faqs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_faqs`;

CREATE TABLE `master_faqs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_majors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_majors`;

CREATE TABLE `master_majors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_payment_methods
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_payment_methods`;

CREATE TABLE `master_payment_methods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_relation_campuses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_relation_campuses`;

CREATE TABLE `master_relation_campuses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `master_universities_id` int(11) DEFAULT NULL,
  `master_faculty_id` int(11) DEFAULT NULL,
  `master_major_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table master_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_roles`;

CREATE TABLE `master_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `master_roles` WRITE;
/*!40000 ALTER TABLE `master_roles` DISABLE KEYS */;

INSERT INTO `master_roles` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'user',NULL,NULL),
	(2,'administrator',NULL,NULL);

/*!40000 ALTER TABLE `master_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_universities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_universities`;

CREATE TABLE `master_universities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(7,'2014_10_12_000000_create_users_table',1),
	(8,'2014_10_12_100000_create_password_resets_table',1),
	(9,'2019_08_19_000000_create_failed_jobs_table',1),
	(23,'2019_11_16_095120_create_events_table',2),
	(24,'2019_11_16_095202_create_event_statuses_table',2),
	(25,'2019_11_16_095251_create_event_tickets_table',2),
	(26,'2019_11_16_095323_create_categories_table',2),
	(27,'2019_11_16_095525_create_transactions_table',2),
	(28,'2019_11_16_095650_create_master_payment_methods_table',2),
	(29,'2019_11_16_095704_create_master_faqs_table',2),
	(30,'2019_11_16_095738_create_master_universities_table',2),
	(31,'2019_11_16_095751_create_master_faculties_table',2),
	(32,'2019_11_16_095800_create_master_majors_table',2),
	(33,'2019_11_16_095907_create_master_relation_campuses_table',2),
	(34,'2019_11_16_100146_create_master_contacts_table',2),
	(38,'2019_11_17_104614_update_users_table',5),
	(39,'2019_11_16_100154_create_master_banners_table',6),
	(40,'2019_11_17_095359_update_users_table',7),
	(41,'2019_11_17_100159_create_master_roles_table',7);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table transactions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `is_paid` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `event_ticket_id` int(11) DEFAULT NULL,
  `master_payment_method_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_token` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_logged_in` datetime DEFAULT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `provider`, `provider_id`, `provider_token`, `remember_token`, `avatar`, `created_at`, `updated_at`, `last_logged_in`, `role_id`)
VALUES
	(9,'Alfathony','tony.ospek@gmail.com',NULL,NULL,'facebook','3044949732187553',NULL,'O6zZ3Zy8ZU2pDN83gGgYuCsPWqDHhKDsT30RirzDUM3jtGsoJlFCk4o3Y02S',NULL,'2019-10-24 20:33:50','2019-10-24 20:33:50',NULL,1),
	(14,'alfathony','email.alfathony@gmail.com',NULL,NULL,'google','110941303556741375099',NULL,'10lK4dSmOZ0Utvyd1M8Mi0wC67CHM3v9Gh6WBWm74qRJAofChoiTGYoj0nPZ','https://lh3.googleusercontent.com/a-/AAuE7mAdccPEUpOk19bfdmMSuF-VOD5ZTRgG1SJTveAdUQ','2019-11-17 11:17:17','2019-11-17 11:17:17',NULL,1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
