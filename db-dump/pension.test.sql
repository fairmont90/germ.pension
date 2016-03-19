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
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Question` tinytext NOT NULL,
  `QuestionIcon` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Which flowers do you like','img/pic-1.png'),(2,'Favorite car vendor','img/pic-1.png'),(3,'Favorite city','img/pic-1.png');
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
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `UserEmail` (`UserEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'pereskokow@gmail.com','123'),(2,'admin@mail.ru','123');
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

-- Dump completed on 2016-03-19 13:58:13
