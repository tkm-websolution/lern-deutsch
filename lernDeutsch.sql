-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: lernDeutsch
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `imgset`
--

DROP TABLE IF EXISTS `imgset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imgset` (
  `imgID` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `meaning` varchar(100) DEFAULT NULL,
  `fieldID` int(11) DEFAULT NULL,
  `genus` int(11) DEFAULT NULL,
  PRIMARY KEY (`imgID`),
  KEY `fieldID` (`fieldID`),
  CONSTRAINT `imgset_ibfk_1` FOREIGN KEY (`fieldID`) REFERENCES `lernfield` (`fieldID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imgset`
--

LOCK TABLES `imgset` WRITE;
/*!40000 ALTER TABLE `imgset` DISABLE KEYS */;
INSERT INTO `imgset` VALUES (1,'bilder-tibs-at-24895.jpg','Zitrone',1,3),(2,'bilder-tibs-at-111.jpg','Aubergine',1,3),(3,'bilder-tibs-at-77.jpg','Ananas',1,3),(4,'Sonne.jpg','Sonne',2,3),(5,'Regen.jpg','Regen',2,2),(6,'Wind.jpg','Wind',2,2),(7,'Schnee.jpg','Schnee',2,2),(8,'Mechaniker.jpg','Mechaniker',4,2),(9,'Schneider.jpg','Schneider',4,2),(10,'Lehrerin.jpg','Lehrerin',4,3),(11,'Baecker.jpg','Bäcker',4,2),(12,'Husten.jpg','Husten',5,2),(13,'Fieber.jpg','Fieber',5,1),(14,'Bauchschmerzen.jpg','Bauchschmerzen',5,3),(15,'Kopfschmerzen.jpg','Kopfschmerzen',5,3),(16,'Mutter_Mama_Maria.jpg','Mutter',6,3),(17,'Kinder_Enkel.jpg','Kinder',6,4),(18,'Vater_Papa_Anton.jpg','Vater',6,2),(22,'Brot.jpg','Brot',1,1),(23,'Frisoerin.jpg','Frisörin',4,3),(24,'Suppe.jpg','Suppe',1,3),(25,'Tochter_Schwester_Klara.jpg','Tochter',6,3),(26,'Sohn_Bruder_Junge_Paul.jpg','Sohn',6,2),(27,'Eltern.jpg','Eltern',6,4),(28,'Gewitter.jpg','Gewitter',2,1),(29,'Bus.jpg','Bus',7,2),(30,'Flugzeug.jpg','Flugzeug',7,1),(32,'Auto.jpg','Auto',7,1),(33,'Zug.jpg','Zug',7,2),(34,'Fahrrad.jpg','Fahrrad',7,1),(35,'U-Bahn.jpg','U-Bahn',7,3),(36,'Baby.jpg','Baby',6,1),(37,'Apfel.jpg','Apfel',1,2),(38,'Auge.jpg','Auge',8,1),(39,'Arm.jpg','Arm',8,2),(40,'Ohr.jpg','Ohr',8,1),(41,'Nase.jpg','Nase',8,3),(42,'Bein.jpg','Bein',8,1),(43,'Mund.jpg','Mund',8,2),(44,'Bauch.jpg','Bauch',8,2),(45,'Fuss.jpg','FuÃŸ',8,2),(46,'Hand.jpg','Hand',8,3),(47,'Kopf.jpg','Kopf',8,2),(48,'Oma.jpg','Oma',6,3),(50,'Opa.jpg','Opa',6,2),(51,'Stuhl.jpg','Stuhl',9,2),(52,'Tisch.jpg','Tisch',9,2),(53,'Bett.jpg','Bett',9,1),(54,'Sofa.jpg','Sofa',9,1),(55,'Schrank.jpg','Schrank',9,2),(56,'Lampe.jpg','Lampe',9,3);
/*!40000 ALTER TABLE `imgset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lernfield`
--

DROP TABLE IF EXISTS `lernfield`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lernfield` (
  `fieldID` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(100) NOT NULL,
  PRIMARY KEY (`fieldID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lernfield`
--

LOCK TABLES `lernfield` WRITE;
/*!40000 ALTER TABLE `lernfield` DISABLE KEYS */;
INSERT INTO `lernfield` VALUES (1,'Essen'),(2,'Wetter'),(4,'Arbeit'),(5,'Krank'),(6,'Familie'),(7,'Verkehr'),(8,'Körper'),(9,'Möbel');
/*!40000 ALTER TABLE `lernfield` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-07 19:46:33
