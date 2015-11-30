CREATE DATABASE  IF NOT EXISTS `games` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `games`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: games
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `unit_no` varchar(20) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address_users1_idx` (`user_id`),
  CONSTRAINT `fk_address_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Weapons','2015-11-28 18:24:35','2015-11-28 18:24:35'),(2,'Armor','2015-11-28 18:24:52','2015-11-28 18:24:52'),(3,'Potions','2015-11-28 18:25:07','2015-11-28 18:25:07');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_order_details_products1_idx` (`product_id`),
  KEY `fk_order_details_orders1_idx` (`order_id`,`id`),
  CONSTRAINT `fk_order_details_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_details_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,2,1,1),(2,4,1,1),(3,7,1,1),(4,9,1,1),(5,8,2,1),(6,11,3,1),(7,10,3,1),(8,5,4,3),(9,20,4,2),(10,5,5,3),(11,20,5,2),(12,12,5,1),(13,26,5,1),(14,15,6,4),(15,3,6,4),(16,2,6,2),(17,14,7,3),(18,7,8,3);
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_users1_idx` (`user_id`),
  KEY `fk_orders_status1_idx` (`status_id`),
  CONSTRAINT `fk_orders_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'2015-11-28 18:30:04','2015-11-28 18:54:12',1,1),(2,'2015-11-28 18:33:56','2015-11-28 18:33:56',1,2),(3,'2015-11-28 18:35:05','2015-11-28 18:35:05',2,2),(4,'2015-11-29 22:36:38','2015-11-29 22:36:38',2,2),(5,'2015-11-29 22:40:31','2015-11-29 22:40:31',2,2),(6,'2015-11-29 22:55:51','2015-11-29 22:55:51',2,2),(7,'2015-11-29 23:04:43','2015-11-29 23:04:43',2,2),(8,'2015-11-29 23:37:56','2015-11-29 23:37:56',2,2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `description` text,
  `specifications` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `quantity_sold` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_styles1_idx` (`category_id`),
  CONSTRAINT `fk_products_styles1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'Steel Broadsword',11,200.00,'The standard sword purchased by new adventurers','15 ATK','4',3,'2015-11-24 15:55:58','2015-11-24 15:55:58',1),(3,'Dagger of Stabbing',14,150.00,'A blade infused with pure evil. It was once used by Lance in a game of volleyball.','10 ATK','5',1,'2015-11-24 16:01:32','2015-11-24 16:01:32',1),(4,'Chain Mail',5,300.00,'A shirt of linked metal rings effective at defending against slashing attacks','10 DEF','16',3,'2015-11-24 16:17:34','2015-11-24 16:17:34',2),(5,'Great Helm',7,400.00,'Great minds think alike and great minds protect their brains with magnificent Great Helms like this one.','16 DEF','12',2,'2015-11-24 16:22:48','2015-11-24 16:22:48',2),(6,'Lesser Health Potion',55,30.00,'Replenishes 20% of health','20% HP','22',22,'2015-11-24 16:24:36','2015-11-24 16:24:36',3),(7,'Razor of Occam',10,70.00,'The simplest of cutting weapons.','5 ATK','3',4,'2015-11-24 16:31:17','2015-11-24 16:31:17',1),(8,'Holy Hand Grenade of Antioch',10,777.00,'3 shall be the number of thy counting, and the number of thy counting shall be 3.','500 ATK','1',20,'2015-11-24 16:33:05','2015-11-24 16:33:05',1),(9,'Chipped Axe',30,75.00,'The cutting edge may be chipped but it can still lop off the chip on your shoulder... and your arm off your shoulder.','13 ATK','8',0,'2015-11-25 11:48:29','2015-11-25 11:48:29',1),(10,'Bottle of Emptying',12,20.00,'This bottomless bottle can accept unlimited amounts of fluids, including the blood of your enemies.','5 ATK','6',0,'2015-11-25 12:18:13','2015-11-25 12:18:13',1),(11,'Staff of Volleyball Net',2,100.00,'Made of unbreakable materials, the business end of this staff has nearly destroyed the faces of several volley ball players.','16 ATK','7',0,'2015-11-25 12:30:47','2015-11-25 12:30:47',1),(12,'Bola Enfuego',7,500.00,'Great balls of fire that can entangle an opponent\'s legs... while burning them.','40 ATK','9',0,'2015-11-25 12:41:17','2015-11-25 12:41:17',1),(13,'Bolt Action Crossbow',42,300.00,'While not nearly as accurate as a bolt action rifle this Bolt Action Crossbow can dispatch an enemy at range.','25 ATK','10',0,'2015-11-25 12:43:20','2015-11-25 12:43:20',1),(14,'This Is Spartan Helmet',300,300.00,'Descended from Hercules himself, when this helmet is worn the only other armor required is a shield and a leather speedo.','30 DEF','13',0,'2015-11-25 12:47:17','2015-11-25 12:47:17',2),(15,'Tricera Helmet',33,350.00,'Enhancing headbutts into head stabs since the late Maastrichtian stage of the late Cretaceous period.','25 DEF','14',0,'2015-11-25 12:56:09','2015-11-25 12:56:09',2),(16,'Cuirass of Sixpack',36,19.95,'Get six pack abs FAST!! Only one easy payment of $19.95 (plus shipping and handling)','35 DEF','15',0,'2015-11-25 12:59:26','2015-11-25 12:59:26',2),(17,'Greaves of Grieving',5,200.00,'Protects from shin injury. Side effects may include, denial, anger, bargaining, depression and acceptance.','20 DEF','17',0,'2015-11-28 13:20:23','2015-11-28 13:20:23',2),(18,'Singing Shoulder Scales of Song',77,450.00,'Modeled after the great Sydney opera house, these shoulder scales can absorb and emit acoustical energies.','30 DEF','18',0,'2015-11-28 13:35:36','2015-11-28 13:35:36',2),(19,'Plate Scale Greaves',45,299.99,'Essential armor for protecting the most vital of organs.','35 DEF','19',0,'2015-11-28 13:40:41','2015-11-28 13:40:41',2),(20,'Gauntlets of Fist Bump',55,85.99,'Smite thine enemies and proceed to bump thy ally\'s fist with a mighty clank.','15 DEF','20',0,'2015-11-28 13:44:29','2015-11-28 13:44:29',2),(21,'Flask of Spirits',12,24.00,'Enjoy a swig of potent potables or summon a ghostly familiar to aide you.','-5 HP','21',0,'2015-11-28 13:53:53','2015-11-28 13:53:53',3),(22,'Flask of Erlenmeyer',200,35.00,'This flask can be used in the process of making one\'s own potions. ','0 HP','23',0,'2015-11-28 14:07:44','2015-11-28 14:07:44',3),(23,'Speed Potion',200,50.00,'Increases attack speed by 200% for 30 seconds.','2x SPD','24',0,'2015-11-28 14:44:58','2015-11-28 14:44:58',3),(24,'Potion of Strength',55,100.00,'+25% to strength for 5 minutes','+25% STR','25',0,'2015-11-28 14:51:12','2015-11-28 14:51:12',3),(25,'Poison Elixir',60,75.00,'Apply to weapons for increased damage over time. 5 damage per second for 10 seconds.','5 DOT','26',0,'2015-11-28 14:56:39','2015-11-28 14:56:39',3),(26,'Ale of Awakening',99,8.99,'Half beer half redbull, the Ale of Awakening grants +5 to focus throws.','+5 FCS','27',0,'2015-11-28 15:05:52','2015-11-28 15:05:52',3),(27,'Potion of Transformation',50,100.00,'This genetically modified potion allows the user to transform into a giant badger for up to 1 hour.','1 BGR','28',0,'2015-11-28 15:07:44','2015-11-28 15:07:44',3),(28,'Rejuvenation Potion',77,500.00,'Bring allies back to life.','1 LFE','29',0,'2015-11-28 15:09:39','2015-11-28 15:09:39',3),(29,'Hot Sauce',47,9.99,'Try it on burritos, pizzas, sandwiches, burgers, hotdogs and MORE!!','4 ATK','30',0,'2015-11-28 15:10:59','2015-11-28 15:10:59',3),(30,'Cocktail of Molotov',55,29.00,'The poor man\'s grenade.','35 ATK','2',0,'2015-11-28 15:22:46','2015-11-28 15:22:46',1),(31,'Adventurer Starter Kit',20,49.99,'This short sword, helmet, and shield is all the beginning adventurer needs to confidently die.','10 ATK  20 DEF','11',0,'2015-11-28 15:26:52','2015-11-28 15:26:52',2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Shipping'),(2,'Order In Progress'),(3,'Cancelled');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `roles` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'George Washington','Washy','2015-11-18','GWash@dc.com','asdf;lkj','0',1,'2015-11-28 18:26:41','2015-11-28 18:26:41'),(2,'Chuck Norris','CNorr','2015-08-05','Roundhouse@norris.com','asdf;lkj','0',1,'2015-11-28 18:32:53','2015-11-28 18:32:53'),(3,'Abraham Lincoln','Abe','2015-11-17','Abe@dc.com','asdf;lkj','1',1,'2015-11-28 18:52:39','2015-11-28 18:52:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-29 23:41:36
