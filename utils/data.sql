-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dauphineexam
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `annonce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imageUrl` varchar(250) DEFAULT NULL,
  `contenu` text NOT NULL,
  `titre` varchar(250) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `datePublication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `annonce_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annonce`
--

/*!40000 ALTER TABLE `annonce` DISABLE KEYS */;
INSERT INTO `annonce` VALUES (12,'http://localhost/SimoneauHugoDauphine/img/gintama.webp','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quam quis nibh dapibus lobortis id posuere felis. Vivamus eget tortor malesuada lacus egestas elementum. Maecenas a purus sed massa interdum accumsan. Sed gravida, ante sed iaculis suscipit, metus enim finibus metus, sed auctor diam velit sed risus. Fusce ante libero, mollis quis ex in, eleifend posuere tortor. Sed blandit malesuada faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque gravida consequat arcu, facilisis commodo justo bibendum sed.\r\n\r\nCras pretium orci ligula, tempus molestie enim maximus fermentum. Aenean auctor lorem ut scelerisque dapibus. Mauris non lectus eu lacus eleifend dapibus. Curabitur vel eros in quam rutrum pellentesque. Proin vel ultricies ligula. Aenean pulvinar blandit neque, id maximus justo venenatis ut. Nunc scelerisque, velit vel tincidunt vulputate, sem turpis laoreet metus, ac blandit ex ante et urna. Ut vulputate consectetur metus non dignissim. Suspendisse potenti. Integer auctor velit magna, ut porta diam tincidunt eget. Quisque eget varius augue, ac faucibus ipsum. Ut ac accumsan magna. Aenean et nisl erat.\r\n\r\nCras et velit fringilla, ultrices nulla at, laoreet turpis. Morbi in quam aliquam, vehicula mauris a, tempus ipsum. Donec orci orci, auctor eget ullamcorper varius, vestibulum non nulla. Aliquam quis velit neque. Donec non eros eget nibh facilisis maximus et sit amet orci. Proin blandit malesuada ex vel elementum. Duis dignissim, erat luctus pulvinar auctor, velit urna auctor orci, quis hendrerit odio magna sit amet urna. Nulla pretium, ex vel tincidunt vehicula, lorem neque tincidunt purus, condimentum imperdiet ipsum elit ut justo.','J\'ai perdu mon Lorem','Hugo','2024-04-26 16:26:06'),(13,'http://localhost/SimoneauHugoDauphine/img/tiramisu.webp','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quam quis nibh dapibus lobortis id posuere felis. Vivamus eget tortor malesuada lacus egestas elementum. Maecenas a purus sed massa interdum accumsan. Sed gravida, ante sed iaculis suscipit, metus enim finibus metus, sed auctor diam velit sed risus. Fusce ante libero, mollis quis ex in, eleifend posuere tortor. Sed blandit malesuada faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque gravida consequat arcu, facilisis commodo justo bibendum sed.\r\n\r\nCras pretium orci ligula, tempus molestie enim maximus fermentum. Aenean auctor lorem ut scelerisque dapibus. Mauris non lectus eu lacus eleifend dapibus. Curabitur vel eros in quam rutrum pellentesque. Proin vel ultricies ligula. Aenean pulvinar blandit neque, id maximus justo venenatis ut. Nunc scelerisque, velit vel tincidunt vulputate, sem turpis laoreet metus, ac blandit ex ante et urna. Ut vulputate consectetur metus non dignissim. Suspendisse potenti. Integer auctor velit magna, ut porta diam tincidunt eget. Quisque eget varius augue, ac faucibus ipsum. Ut ac accumsan magna. Aenean et nisl erat.\r\n\r\nCras et velit fringilla, ultrices nulla at, laoreet turpis. Morbi in quam aliquam, vehicula mauris a, tempus ipsum. Donec orci orci, auctor eget ullamcorper varius, vestibulum non nulla. Aliquam quis velit neque. Donec non eros eget nibh facilisis maximus et sit amet orci. Proin blandit malesuada ex vel elementum. Duis dignissim, erat luctus pulvinar auctor, velit urna auctor orci, quis hendrerit odio magna sit amet urna. Nulla pretium, ex vel tincidunt vehicula, lorem neque tincidunt purus, condimentum imperdiet ipsum elit ut justo.','J\'ai retrouvé mon Lorem','John','2024-04-26 16:26:55'),(14,'http://localhost/SimoneauHugoDauphine/img/Luffy.webp','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quam quis nibh dapibus lobortis id posuere felis. Vivamus eget tortor malesuada lacus egestas elementum. Maecenas a purus sed massa interdum accumsan. Sed gravida, ante sed iaculis suscipit, metus enim finibus metus, sed auctor diam velit sed risus. Fusce ante libero, mollis quis ex in, eleifend posuere tortor. Sed blandit malesuada faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque gravida consequat arcu, facilisis commodo justo bibendum sed.\r\n\r\nCras pretium orci ligula, tempus molestie enim maximus fermentum. Aenean auctor lorem ut scelerisque dapibus. Mauris non lectus eu lacus eleifend dapibus. Curabitur vel eros in quam rutrum pellentesque. Proin vel ultricies ligula. Aenean pulvinar blandit neque, id maximus justo venenatis ut. Nunc scelerisque, velit vel tincidunt vulputate, sem turpis laoreet metus, ac blandit ex ante et urna. Ut vulputate consectetur metus non dignissim. Suspendisse potenti. Integer auctor velit magna, ut porta diam tincidunt eget. Quisque eget varius augue, ac faucibus ipsum. Ut ac accumsan magna. Aenean et nisl erat.\r\n\r\nCras et velit fringilla, ultrices nulla at, laoreet turpis. Morbi in quam aliquam, vehicula mauris a, tempus ipsum. Donec orci orci, auctor eget ullamcorper varius, vestibulum non nulla. Aliquam quis velit neque. Donec non eros eget nibh facilisis maximus et sit amet orci. Proin blandit malesuada ex vel elementum. Duis dignissim, erat luctus pulvinar auctor, velit urna auctor orci, quis hendrerit odio magna sit amet urna. Nulla pretium, ex vel tincidunt vehicula, lorem neque tincidunt purus, condimentum imperdiet ipsum elit ut justo.','J\'ai encore perdu mon Lorem','Roger','2024-04-26 16:27:23');
/*!40000 ALTER TABLE `annonce` ENABLE KEYS */;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateur_id_uindex` (`id`),
  UNIQUE KEY `utilisateur_login_uindex` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'jose','bove','jose','$2y$10$tdaX6gU8bw2s4.FmXHuUW.7zQHytQNrF8mz4RCDCw.h285NHX8foi');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;

--
-- Dumping routines for database 'dauphineexam'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-26 16:30:28
