drop database if exists edunovapp20;
create database edunovapp20 default character set utf8;
use edunovapp20;

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
LOCK TABLES `dokument` WRITE;
INSERT INTO `dokument` VALUES (1,'Žalba 1','2019-11-28 13:58:27','../dokumenti/123.docx',2),(2,'Prigovor 1','2019-11-28 13:58:27','../dokumenti/321.docx',3);
UNLOCK TABLES;

CREATE TABLE `uloga` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(250) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


LOCK TABLES `uloga` WRITE;
INSERT INTO `uloga` VALUES (1,'korisnik','objave, komentari i read dokument'),(2,'admin','korisnik + dodaje, briše, uređuje dokument'),(3,'root','sve može');
UNLOCK TABLES;

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

LOCK TABLES `korisnik` WRITE;

INSERT INTO `korisnik` VALUES (1,'pperic','123','pperic@qwert.com',1,'2019-11-28 13:58:27','http://bla',1),(2,'iivic','1234','iivic@qwert.com',2,'2019-11-28 13:58:27','http://blabla',1),(3,'jjozic','12345','jjozic@qwert.com',3,'2019-11-28 13:58:27','http://blablabla',1);

UNLOCK TABLES;


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

LOCK TABLES `objava` WRITE;
INSERT INTO `objava` VALUES (1,1,'test','ja sam rekao nešto pametno','2019-11-28 13:58:27',NULL,NULL),(2,2,'test2','nije pametno','2019-11-28 13:58:27',NULL,1),(3,3,'test3','riba ribi grize rep','2019-11-28 13:58:27',NULL,2),(4,1,'test4','super dokument','2019-11-28 13:58:27',1,NULL);
UNLOCK TABLES;
