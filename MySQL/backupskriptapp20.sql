-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: edunovapp20
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

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
-- Table structure for table `clan`
--

DROP TABLE IF EXISTS `clan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clan` (
  `grupa` int(11) NOT NULL,
  `polaznik` int(11) NOT NULL,
  KEY `grupa` (`grupa`),
  KEY `polaznik` (`polaznik`),
  CONSTRAINT `clan_ibfk_1` FOREIGN KEY (`grupa`) REFERENCES `grupa` (`sifra`),
  CONSTRAINT `clan_ibfk_2` FOREIGN KEY (`polaznik`) REFERENCES `polaznik` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clan`
--

LOCK TABLES `clan` WRITE;
/*!40000 ALTER TABLE `clan` DISABLE KEYS */;
INSERT INTO `clan` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21);
/*!40000 ALTER TABLE `clan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupa`
--

DROP TABLE IF EXISTS `grupa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupa` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(20) NOT NULL,
  `smjer` int(11) NOT NULL,
  `predavac` int(11) DEFAULT NULL,
  `brojpolaznika` int(11) NOT NULL,
  `datumpocetka` datetime DEFAULT NULL,
  PRIMARY KEY (`sifra`),
  KEY `smjer` (`smjer`),
  KEY `predavac` (`predavac`),
  CONSTRAINT `grupa_ibfk_1` FOREIGN KEY (`smjer`) REFERENCES `smjer` (`sifra`),
  CONSTRAINT `grupa_ibfk_2` FOREIGN KEY (`predavac`) REFERENCES `predavac` (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupa`
--

LOCK TABLES `grupa` WRITE;
/*!40000 ALTER TABLE `grupa` DISABLE KEYS */;
INSERT INTO `grupa` VALUES (1,'PP20',1,1,18,'2019-10-28 17:00:00');
/*!40000 ALTER TABLE `grupa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logiranje`
--

DROP TABLE IF EXISTS `logiranje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logiranje` (
  `tko` varchar(255) DEFAULT NULL,
  `sto` varchar(255) DEFAULT NULL,
  `kada` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logiranje`
--

LOCK TABLES `logiranje` WRITE;
/*!40000 ALTER TABLE `logiranje` DISABLE KEYS */;
INSERT INTO `logiranje` VALUES ('osoba','Pero','2019-11-27 18:46:12'),('osoba promjena','Pero - Perica','2019-11-27 18:48:32'),('obrisao osobu','Perica Perić','2019-11-27 18:50:09');
/*!40000 ALTER TABLE `logiranje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `osoba`
--

DROP TABLE IF EXISTS `osoba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `osoba` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `oib` char(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `osoba`
--

LOCK TABLES `osoba` WRITE;
/*!40000 ALTER TABLE `osoba` DISABLE KEYS */;
INSERT INTO `osoba` VALUES (1,'Tomislav','Jakopec',NULL,'tjakopec@gmail.com'),(2,'Damir','Škrebljin',NULL,'skrebljin@hotmail.com'),(3,'Mirza','Deagić',NULL,'mirza.delagic@gmail.com'),(4,'Marko','Biskupić',NULL,'biskupicmarko4@gmail.com'),(5,'Filip','Poslek',NULL,'fposlek@gmail.com'),(6,'Kristijan','Vidaković',NULL,'kristijan.vidakovic111@gmail.com'),(7,'Matej','Malčić',NULL,'matej.malcic3@gmail.com'),(8,'Antonio','Grbeša',NULL,'agrbesa995@gmail.com'),(9,'Ivan','Jozing',NULL,'ivan.jozing1@gmail.com'),(10,'Ivan','Damjanović',NULL,'damjanovic.ivan87@gmail.com'),(11,'Stjepan','Perišin',NULL,'stjepan@xenios.hr'),(12,'Luka','Vuk',NULL,'luka.vuk456@gmail.com'),(13,'Vedran','Stojnović',NULL,'phidrho@gmail.com'),(14,'Ivor','Ćelić',NULL,'ivorcelic@gmail.com'),(15,'Matija','Špoljar',NULL,'spoljo1122@gmail.com'),(16,'Anita','Račman',NULL,'racmananita@gmail.com'),(17,'Tomislav','Zidar',NULL,'zidarto@hotmail.com'),(18,'Renato','Topić',NULL,'renato.topic@gmail.com'),(19,'Tomislav','Grebenar',NULL,'tomislav.grebenarlb@gmail.com'),(20,'Vladimir','Grebenar',NULL,'vladimir.grebenar@gmail.com'),(21,'David','Čiček',NULL,'official.davidcicek@gmail.com'),(22,'Dijana','Pandurević',NULL,'dijana.pandurevic@gmail.com'),(23,'Mirko','Rešetar',NULL,'reso28@gmail.com'),(24,'Filip','Gelenčir',NULL,'stoka199@gmail.com'),(25,'Bruno','Gelenčir',NULL,'gelencirbruno@gmail.com'),(26,'Filip','Volarević',NULL,'voki095@gmail.com'),(27,'Marko','Milić',NULL,'marko.milic224@gmail.com'),(28,'Azinić','Andrija',NULL,'azinic1999@gmail.com'),(29,'Zvonimir','Mesinger',NULL,'zvonimir.mesinger@gmail.com'),(30,'Boris','Lasović',NULL,'lasovic@gmail.com'),(31,'Maksima','Mijatović',NULL,'maxima.mijatovic@gmail.com'),(32,'Nikola','Juzbašić',NULL,'nikolajuzbasic70@gmail.com'),(33,'Sven','Čevapović',NULL,'svencevapovic77@gmail.com'),(34,'Luka','Poznić',NULL,'lpoznic@net.hr'),(35,'Dario','Perišić',NULL,'perisicdario2702@gmail.com'),(36,'Dario','Trtanj',NULL,'trtanjd@gmail.com'),(37,'Božena','Palić Cerić',NULL,'bozena.palic@gmail.com'),(38,'Nikola','Milić',NULL,'nikk.mil@gmail.com'),(39,'David','Petrić',NULL,'petricdavid@protonmail.ch'),(40,'Goran','Maras',NULL,'goran.maras77@gmail.com'),(41,'Marko','Grbeš',NULL,'marko.grbes1@gmail.com'),(42,'Matej','Šapina',NULL,'sapina.matej@yahoo.com'),(43,'Josip','Dasović',NULL,'josip.dasovic22@gmail.com'),(44,'Goran','Kovač',NULL,'gokovac@gmail.com'),(45,'Shaquille','O\'Neal',NULL,'shaki@gmail.com');
/*!40000 ALTER TABLE `osoba` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER insert_osoba
before INSERT
   ON osoba FOR EACH ROW
BEGIN

insert into logiranje values('osoba',new.ime,now());

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER update_osoba
before update
   ON osoba FOR EACH ROW
BEGIN

insert into logiranje values('osoba promjena',concat(old.ime, ' - ', new.ime),now());

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER delete_osoba
after delete
   ON osoba FOR EACH ROW
BEGIN

insert into logiranje values('obrisao osobu',concat(old.ime, ' ', old.prezime),now());

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `polaznik`
--

DROP TABLE IF EXISTS `polaznik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polaznik` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `osoba` int(11) NOT NULL,
  `brojugovora` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sifra`),
  KEY `osoba` (`osoba`),
  CONSTRAINT `polaznik_ibfk_1` FOREIGN KEY (`osoba`) REFERENCES `osoba` (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polaznik`
--

LOCK TABLES `polaznik` WRITE;
/*!40000 ALTER TABLE `polaznik` DISABLE KEYS */;
INSERT INTO `polaznik` VALUES (1,2,NULL),(2,3,NULL),(3,4,NULL),(4,5,NULL),(5,6,NULL),(6,7,NULL),(7,8,NULL),(8,9,NULL),(9,10,NULL),(10,11,NULL),(11,12,NULL),(12,13,NULL),(13,14,NULL),(14,15,NULL),(15,16,NULL),(16,17,NULL),(17,18,NULL),(18,19,NULL),(19,20,NULL),(20,21,NULL),(21,22,NULL),(22,23,NULL),(23,24,NULL),(24,25,NULL),(25,26,NULL),(26,27,NULL),(27,28,NULL),(28,29,NULL),(29,30,NULL),(30,31,NULL),(31,32,NULL),(32,33,NULL),(33,34,NULL),(34,35,NULL),(35,36,NULL),(36,37,NULL),(37,38,NULL),(38,39,NULL),(39,40,NULL),(40,41,NULL),(41,42,NULL),(42,43,NULL),(43,44,NULL);
/*!40000 ALTER TABLE `polaznik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `predavac`
--

DROP TABLE IF EXISTS `predavac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `predavac` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `osoba` int(11) NOT NULL,
  `iban` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sifra`),
  KEY `osoba` (`osoba`),
  CONSTRAINT `predavac_ibfk_1` FOREIGN KEY (`osoba`) REFERENCES `osoba` (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `predavac`
--

LOCK TABLES `predavac` WRITE;
/*!40000 ALTER TABLE `predavac` DISABLE KEYS */;
INSERT INTO `predavac` VALUES (1,1,NULL),(2,45,NULL);
/*!40000 ALTER TABLE `predavac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privremeno`
--

DROP TABLE IF EXISTS `privremeno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privremeno` (
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privremeno`
--

LOCK TABLES `privremeno` WRITE;
/*!40000 ALTER TABLE `privremeno` DISABLE KEYS */;
INSERT INTO `privremeno` VALUES ('Tomislav','Jakopec'),('Damir','Škrebljin'),('Mirza','Deagić'),('Marko','Biskupić'),('Filip','Poslek'),('Kristijan','Vidaković'),('Matej','Malčić'),('Antonio','Grbeša'),('Ivan','Jozing'),('Ivan','Damjanović'),('Stjepan','Perišin'),('Luka','Vuk'),('Vedran','Stojnović'),('Ivor','Ćelić'),('Matija','Špoljar'),('Anita','Račman'),('Tomislav','Zidar'),('Renato','Topić'),('Tomislav','Grebenar'),('Vladimir','Grebenar'),('David','Čiček'),('Dijana','Pandurević'),('Mirko','Rešetar'),('Filip','Gelenčir'),('Bruno','Gelenčir'),('Filip','Volarević'),('Marko','Milić'),('Azinić','Andrija'),('Zvonimir','Mesinger'),('Boris','Lasović'),('Maksima','Mijatović'),('Nikola','Juzbašić'),('Sven','Čevapović'),('Luka','Poznić'),('Dario','Perišić'),('Dario','Trtanj'),('Božena','Palić Cerić'),('Nikola','Milić'),('David','Petrić'),('Goran','Maras'),('Marko','Grbeš'),('Matej','Šapina'),('Josip','Dasović'),('Goran','Kovač'),('Shaquille','O\'Neal');
/*!40000 ALTER TABLE `privremeno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smjer`
--

DROP TABLE IF EXISTS `smjer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smjer` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `trajanje` int(11) DEFAULT NULL,
  `cijena` decimal(18,2) NOT NULL,
  `upisnina` decimal(18,2) NOT NULL,
  `verificiran` tinyint(1) DEFAULT 1,
  `tip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smjer`
--

LOCK TABLES `smjer` WRITE;
/*!40000 ALTER TABLE `smjer` DISABLE KEYS */;
INSERT INTO `smjer` VALUES (1,'PHP programiranje',130,4999.99,500.00,0,'informatika'),(3,'Računalni operator',NULL,2000.00,500.00,1,'informatika'),(4,'Knjigovodstveni operater',180,8000.00,500.00,1,'informatika'),(5,'aaaaa',100,2512.00,100.00,1,'informatika'),(6,'aaaaa',100,3496.00,100.00,1,'informatika'),(7,'aaaaa',100,4945.00,100.00,1,'informatika'),(8,'aaaaa',100,3237.00,100.00,1,'informatika'),(9,'aaaaa',100,2352.00,100.00,1,'informatika'),(10,'aaaaa',100,3049.00,100.00,1,'jezici'),(11,'aaaaa',100,3191.00,100.00,1,'jezici'),(12,'aaaaa',100,4806.00,100.00,1,'jezici'),(13,'aaaaa',100,3457.00,100.00,1,'jezici'),(14,'aaaaa',100,3870.00,100.00,1,'jezici'),(15,'aaaaa',100,3980.00,100.00,1,'jezici'),(16,'aaaaa',100,3290.00,100.00,1,'jezici'),(17,'aaaaa',100,2511.00,100.00,1,'jezici'),(18,'aaaaa',100,3686.00,100.00,1,'jezici'),(19,'aaaaa',100,2895.00,100.00,1,'jezici');
/*!40000 ALTER TABLE `smjer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-27 18:54:29
