-- MariaDB dump 10.17  Distrib 10.4.10-MariaDB, for Win64 (AMD64)
--
-- Host: 134.209.23.129    Database: pravopravo
-- ------------------------------------------------------
-- Server version	10.1.44-MariaDB-0ubuntu0.18.04.1

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
-- Table structure for table `dokument`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokument` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(150) NOT NULL,
  `vrijemeKreiranja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `URLdokumenta` varchar(123) DEFAULT NULL,
  `korisnik` int(11) NOT NULL,
  PRIMARY KEY (`sifra`),
  KEY `korisnik` (`korisnik`),
  CONSTRAINT `dokument_ibfk_1` FOREIGN KEY (`korisnik`) REFERENCES `korisnik` (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokument`
--

LOCK TABLES `dokument` WRITE;
/*!40000 ALTER TABLE `dokument` DISABLE KEYS */;
INSERT INTO `dokument` VALUES (1,'Žalba 1','2019-11-28 13:58:27','../dokumenti/123.docx',2),(2,'Prigovor 1','2019-11-28 13:58:27','../dokumenti/321.docx',3);
/*!40000 ALTER TABLE `dokument` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uloga`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uloga` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(250) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uloga`
--

LOCK TABLES `uloga` WRITE;
/*!40000 ALTER TABLE `uloga` DISABLE KEYS */;
INSERT INTO `uloga` VALUES (1,'korisnik','objave, komentari i read dokument'),(2,'admin','korisnik + dodaje, briše, uređuje dokument'),(3,'root','sve može');
/*!40000 ALTER TABLE `uloga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `korisnik`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `korisnik` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `korisnickoIme` varchar(50) NOT NULL,
  `lozinka` varchar(100) NOT NULL,
  `eMail` varchar(100) NOT NULL,
  `uloga` int(11) NOT NULL,
  `vrijemeKreiranja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `URLavatar` varchar(250) DEFAULT NULL,
  `aktivan` tinyint(1) NOT NULL,
  PRIMARY KEY (`sifra`),
  KEY `uloga` (`uloga`),
  CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`uloga`) REFERENCES `uloga` (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `korisnik`
--

LOCK TABLES `korisnik` WRITE;
/*!40000 ALTER TABLE `korisnik` DISABLE KEYS */;
INSERT INTO `korisnik` VALUES (1,'pperic','123','pperic@qwert.com',1,'2019-11-28 13:58:27','http://bla',1),(2,'iivic','1234','iivic@qwert.com',2,'2019-11-28 13:58:27','http://blabla',1),(3,'jjozic','12345','jjozic@qwert.com',3,'2019-11-28 13:58:27','http://blablabla',1);
/*!40000 ALTER TABLE `korisnik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objava`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objava` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `korisnik` int(11) NOT NULL,
  `naslov` varchar(100) NOT NULL,
  `tekst` text NOT NULL,
  `vrijemeKreiranja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dokument` int(11) DEFAULT NULL,
  `odgovorNa` int(11) DEFAULT NULL,
  PRIMARY KEY (`sifra`),
  KEY `odgovorNa` (`odgovorNa`),
  KEY `korisnik` (`korisnik`),
  KEY `dokument` (`dokument`),
  CONSTRAINT `objava_ibfk_1` FOREIGN KEY (`odgovorNa`) REFERENCES `objava` (`sifra`),
  CONSTRAINT `objava_ibfk_2` FOREIGN KEY (`korisnik`) REFERENCES `korisnik` (`sifra`),
  CONSTRAINT `objava_ibfk_3` FOREIGN KEY (`dokument`) REFERENCES `dokument` (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objava`
--

LOCK TABLES `objava` WRITE;
/*!40000 ALTER TABLE `objava` DISABLE KEYS */;
INSERT INTO `objava` VALUES (1,1,'test','ja sam rekao nešto pametno','2019-11-28 13:58:27',NULL,NULL),(2,2,'test2','nije pametno','2019-11-28 13:58:27',NULL,1),(3,3,'test3','riba ribi grize rep','2019-11-28 13:58:27',NULL,2),(4,1,'test4','super dokument','2019-11-28 13:58:27',1,NULL);
/*!40000 ALTER TABLE `objava` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-10 14:36:32
