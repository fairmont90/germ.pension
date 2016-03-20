-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pension.test
-- ------------------------------------------------------
-- Server version	5.5.25

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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_category_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_idx` (`user_id`),
  KEY `fk_question_idx` (`question_id`),
  KEY `fk_answer_category_idx` (`answer_category_id`),
  KEY `fk_answer_idx` (`answer_id`),
  CONSTRAINT `fk_answer` FOREIGN KEY (`answer_id`) REFERENCES `question_answers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_answer_category` FOREIGN KEY (`answer_category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_answer_question` FOREIGN KEY (`question_id`) REFERENCES `questions` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_answer_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'None','Not a category'),(2,'Pension','The pension is interesting to you'),(3,'Driving licence (Car)','You are interested the cars'),(4,'House','You are interested new house'),(5,'Wedding','You are interested marriage'),(6,'Children','You want to bring children'),(7,'Travel','You are interested in travels');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_answers`
--

DROP TABLE IF EXISTS `question_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `answer_image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_question_idx` (`question_id`),
  KEY `fk_categories_idx` (`category_id`),
  CONSTRAINT `fk_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_question` FOREIGN KEY (`question_id`) REFERENCES `questions` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_answers`
--

LOCK TABLES `question_answers` WRITE;
/*!40000 ALTER TABLE `question_answers` DISABLE KEYS */;
INSERT INTO `question_answers` VALUES (13,1,'chamomile','img/questions/flowers-1.png',1),(14,1,'rose','img/questions/flowers-2.png',1),(15,1,'tulips','img/questions/flowers-3.png',1),(16,1,'gladiolus','img/questions/flowers-4.png',1),(17,2,'Audi','img/questions/audi.png',1),(18,2,'Bmw','img/questions/bmw.png',1),(19,2,'Mercedes','img/questions/mercedes.png',1),(20,2,'Ford','img/questions/ford.png',1),(21,3,'Paris','img/questions/city_1.png',1),(22,3,'London','img/questions/city_2.png',1),(23,3,'Boston','img/questions/city_3.png',1),(24,3,'China','img/questions/city_4.png',1),(69,16,'With family','img/questions/1.1.png',5),(70,16,'Riding a car','img/questions/1.2.png',3),(71,16,'With childred','img/questions/1.3.png',7),(72,16,'Thinking about the future','img/questions/1.4.png',2),(73,17,'Outdoors','img/questions/2.1.png',7),(74,17,'Sport','img/questions/2.2.png',7),(75,17,'Shopping','img/questions/2.3.png',2),(76,17,'Walking in the park','img/questions/2.4.png',7),(77,18,'Career','img/questions/3.1.png',2),(78,18,'Family','img/questions/3.2.png',6),(80,18,'Friends','img/questions/3.4.png',1),(81,19,'Yes','img/questions/4.1.png',6),(82,19,'No','img/questions/4.2.png',1),(83,19,'Maybe','img/questions/4.3.png',1),(84,19,'I don\'t know','img/questions/4.4.png',1),(85,20,'Sports','img/questions/5.1.png',5),(86,20,'I am mostly working','img/questions/5.2.png',2),(87,20,'Spending time with my family','img/questions/5.3.png',5),(88,20,'Spending time with friends','img/questions/5.4.png',1),(89,18,'Relaxing','img/questions/3.3.png',7),(90,21,'Career','img/questions/5.2.png',2),(91,21,'Family','img/questions/1.1.png',4),(92,21,'Pension','img/questions/1.4.png',2),(93,21,'Friends','img/questions/5.4.png',1);
/*!40000 ALTER TABLE `question_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionanswers`
--

DROP TABLE IF EXISTS `questionanswers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionanswers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `QuestionId` int(11) NOT NULL,
  `AnswerText` tinytext NOT NULL,
  `AnswerImage` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionanswers`
--

LOCK TABLES `questionanswers` WRITE;
/*!40000 ALTER TABLE `questionanswers` DISABLE KEYS */;
INSERT INTO `questionanswers` VALUES (1,1,'chamomile','img/questions/flowers-1.png'),(2,1,'rose','img/questions/flowers-2.png'),(3,1,'tulips','img/questions/flowers-3.png'),(4,1,'gladiolus','img/questions/flowers-4.png'),(5,2,'Audi','img/questions/audi.png'),(6,2,'Bmw','img/questions/bmw.png'),(7,2,'Mercedes','img/questions/mercedes.png'),(8,2,'Ford','img/questions/ford.png'),(9,3,'Paris','img/questions/city_1.png'),(10,3,'London','img/questions/city_2.png'),(11,3,'Boston','img/questions/city_3.png'),(12,3,'China','img/questions/city_4.png');
/*!40000 ALTER TABLE `questionanswers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `question_icon` varchar(255) DEFAULT NULL,
  `is_active` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Which flowers do you like?','img/pic-1.png',0),(2,'What is your favorite car vendor?','img/pic-1.png',0),(3,'What is your favorite city?','img/pic-1.png',0),(15,'How do you like to spend time?','img/logos/logo_1.png',0),(16,'How do you like to spend time?','img/logos/logo_1.png',1),(17,'How would you like to spend time with your children','img/logos/logo_4.png',1),(18,'What is most important to you?','img/logos/logo_6.png',1),(19,'Have you thought about marriage?','img/logos/logo_4.png',1),(20,'How do you relax?','img/logos/logo_6.png',1),(21,'What do you prefere?','img/logos/logo_3.png',1);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_answers`
--

DROP TABLE IF EXISTS `user_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `q1_id` int(11) DEFAULT '1',
  `q2_id` int(11) DEFAULT '1',
  `q3_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_answers`
--

LOCK TABLES `user_answers` WRITE;
/*!40000 ALTER TABLE `user_answers` DISABLE KEYS */;
INSERT INTO `user_answers` VALUES (1,'mymail@mail.com',3,8,12),(2,'mymail@mail.com',3,8,12),(3,'pereskokow@gmail.com',1,8,10),(4,'asdf',4,8,12),(5,'asdf',4,8,12),(6,'asdf',4,8,12),(7,'pereskokow@gmail.com',4,8,11);
/*!40000 ALTER TABLE `user_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useranswers`
--

DROP TABLE IF EXISTS `useranswers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useranswers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `SessionId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `QuestionId` int(11) NOT NULL,
  `AnswerId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useranswers`
--

LOCK TABLES `useranswers` WRITE;
/*!40000 ALTER TABLE `useranswers` DISABLE KEYS */;
/*!40000 ALTER TABLE `useranswers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2016-03-20 17:57:09
