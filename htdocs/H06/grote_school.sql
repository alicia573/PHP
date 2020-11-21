-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host:localhost    Database: school 
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `c_regel`
--

DROP TABLE IF EXISTS `c_regel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c_regel` (
  `curs_code` varchar(8) DEFAULT NULL,
  `cursistnr` varchar(4) DEFAULT NULL,
  `cijfer` decimal(2,0) DEFAULT NULL,
  `betaald` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_regel`
--

LOCK TABLES `c_regel` WRITE;
/*!40000 ALTER TABLE `c_regel` DISABLE KEYS */;
INSERT INTO `c_regel` VALUES ('DB3','64',8,3300.00),('DB3','2',6,NULL),('DB3','68',9,3300.00),('OA2','14',5,2400.00),('OA2','88',7,2000.00),('OA2','2',9,NULL),('DB4','14',6,3600.00),('DB3','64',8,3300.00),('DB3','2',6,NULL),('DB3','68',9,3300.00),('OA2','14',5,2400.00),('OA2','88',7,2000.00),('OA2','2',9,NULL),('DB4','14',6,3600.00);
/*!40000 ALTER TABLE `c_regel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursisten`
--

DROP TABLE IF EXISTS `cursisten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursisten` (
  `cursistnr` varchar(4) DEFAULT NULL,
  `naam` varchar(25) DEFAULT NULL,
  `roepnaam` varchar(25) DEFAULT NULL,
  `straat` varchar(25) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL,
  `plaats` varchar(25) DEFAULT NULL,
  `geslacht` varchar(1) DEFAULT NULL,
  `geb_datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursisten`
--

LOCK TABLES `cursisten` WRITE;
/*!40000 ALTER TABLE `cursisten` DISABLE KEYS */;
INSERT INTO `cursisten` VALUES ('64','Broeken','Bram','Drimmelseweg 8','4395 XX','Made','M','1988-03-24'),('88','Vos','Henk','Besbeemd 64','4142 CE','Oosterhout','M','1989-09-22'),('2','Krimpen','Tanja','Tilburgseweg 2','4222 BB','Goirle','V','1990-02-08'),('14','Norbart','Niels','Gershof 8','4841 PL','Breda','M','1987-12-06');
/*!40000 ALTER TABLE `cursisten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursus`
--

DROP TABLE IF EXISTS `cursus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursus` (
  `curs_code` varchar(8) DEFAULT NULL,
  `curs_plts` varchar(25) DEFAULT NULL,
  `curs_dat` date DEFAULT NULL,
  `omschr` varchar(25) DEFAULT NULL,
  `doc_code` varchar(2) DEFAULT NULL,
  `curs_prijs` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursus`
--

LOCK TABLES `cursus` WRITE;
/*!40000 ALTER TABLE `cursus` DISABLE KEYS */;
INSERT INTO `cursus` VALUES ('DB3','Breda','1993-12-04','Dbase III Plus','WI',3300.00),('DB4','Etten','1993-12-11','Dbase IV','HM',3600.00),('OA2','Made','1993-11-13','Open Access 2.1','PE',2400.00),('OA3','Breda','1993-11-13','Open Access 3.0','GR',2600.00),('FW','Breda','1993-11-20','Framework','WI',850.00),('WP','Breda','1993-11-20','Wordperfect','GR',1450.00),('NO','Breda','1993-12-06','Normaliseren','MO',3000.00),('C++','Made','1993-11-27','Programmeren in C++','MO',1450.00),('DB3','Breda','1993-12-04','Dbase III Plus','WI',3300.00),('DB4','Etten','1993-12-11','Dbase IV','HM',3600.00),('OA2','Made','1993-11-13','Open Access 2.1','PE',2400.00),('OA3','Breda','1993-11-13','Open Access 3.0','GR',2600.00),('FW','Breda','1993-11-20','Framework','WI',850.00),('WP','Breda','1993-11-20','Wordperfect','GR',1450.00),('NO','Breda','1993-12-06','Normaliseren','MO',3000.00),('C++','Made','1993-11-27','Programmeren in C++','MO',1450.00);
/*!40000 ALTER TABLE `cursus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docent`
--

DROP TABLE IF EXISTS `docent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docent` (
  `doc_code` varchar(2) DEFAULT NULL,
  `doc_naam` varchar(25) DEFAULT NULL,
  `straat` varchar(25) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL,
  `plaats` varchar(25) DEFAULT NULL,
  `telefoon` varchar(12) DEFAULT NULL,
  `uurloon` decimal(5,2) DEFAULT NULL,
  `geb_datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docent`
--

LOCK TABLES `docent` WRITE;
/*!40000 ALTER TABLE `docent` DISABLE KEYS */;
INSERT INTO `docent` VALUES ('WI','Witlok','Madeseweg 8','4841 PT','Oosterhout','071-123378',100.00,'1957-04-25'),('HM','Hooymayers','Ignatiusstr 6','4847 EZ','Breda','076-442786',200.00,'1952-09-01'),('GR','Grond','Bolwerk 10','4541 CC','Tilburg','013-426786',150.00,'1958-10-25'),('PE','Peters','Breedonk 64','4142 EC','Oosterhout','01620-3429',185.50,'1963-10-08'),('SE','Sengers','Bredaseweg 2','4344 DE','Bavel',NULL,110.00,'1955-05-17'),('MO','Mol','Waterstr 8','4841 KA','Breda','076-227788',300.00,'1948-11-30'),('WI','Witlok','Madeseweg 8','4841 PT','Oosterhout','071-123378',100.00,'1957-04-25'),('HM','Hooymayers','Ignatiusstr 6','4847 EZ','Breda','076-442786',200.00,'1952-09-01'),('GR','Grond','Bolwerk 10','4541 CC','Tilburg','013-426786',150.00,'1958-10-25'),('PE','Peters','Breedonk 64','4142 EC','Oosterhout','01620-3429',185.50,'1963-10-08'),('SE','Sengers','Bredaseweg 2','4344 DE','Bavel',NULL,110.00,'1955-05-17'),('MO','Mol','Waterstr 8','4841 KA','Breda','076-227788',300.00,'1948-11-30');
/*!40000 ALTER TABLE `docent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opleiding`
--

DROP TABLE IF EXISTS `opleiding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `opleiding` (
  `opleidingscode` varchar(3) NOT NULL,
  `naam` varchar(30) DEFAULT NULL,
  `niveau` char(1) DEFAULT NULL,
  PRIMARY KEY (`opleidingscode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opleiding`
--

LOCK TABLES `opleiding` WRITE;
/*!40000 ALTER TABLE `opleiding` DISABLE KEYS */;
INSERT INTO `opleiding` VALUES ('AO','ApplicatieOntwikkeling','4'),('DT2','DeskTopPublishing','2'),('DT3','DeskTopPublishing','3'),('IB','ICT Beheerder','4'),('MBI','Medewerker Beheer ICT','3'),('MV','MediaVormgeving','4');
/*!40000 ALTER TABLE `opleiding` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `studentnr` varchar(5) NOT NULL,
  `roepnaam` varchar(10) DEFAULT NULL,
  `voorletters` varchar(10) DEFAULT NULL,
  `tussenvoegsels` varchar(8) DEFAULT NULL,
  `achternaam` varchar(25) DEFAULT NULL,
  `adres` varchar(25) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL,
  `woonplaats` varchar(25) DEFAULT NULL,
  `geslacht` char(1) DEFAULT NULL,
  `telefoon` varchar(11) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `uitgeschreven` date DEFAULT NULL,
  `schoolgeld` decimal(6,2) DEFAULT NULL,
  `betaald` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`studentnr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('111','Alicia','A','','Fernandes','Parkwijklaan 1','1111BS','Almere','V','061234567','2003-07-05',NULL,500.00,500.00),('131','Janneke','J','','Simonsen','Revestraat 2','2222 VR','Almere','V','0365467890','1995-10-04',NULL,500.00,200.00),('212','Anton(ton)','A','van','Zetten','Revestraat 44','2121 VR','Almere','M','03667654321','1995-10-02',NULL,500.00,500.00),('222','Piet','P','','Pietersen','Pietstraat 2','1211PP','Almere','M','0361234567','1995-02-20',NULL,500.00,500.00),('323','Annemiek','A','de','Groot','Januaristraat 15','1335 RT','Almere','V','0368912765','1995-10-03',NULL,500.00,500.00),('333','Jan','J','','Jansen','janstraat 34','2222JJ','Almere','M','0369876543','1995-11-20','2020-01-22',500.00,500.00),('444','Willem','W','','Willemsen','Willemstraat 45','3333 WW','Almere','M','','1998-10-02',NULL,200.00,200.00),('555','Berend','B','van der','Tol','Lotstraat 5','4455 BT','Lelystad','M','','1994-04-03','2015-09-06',500.00,0.00),('666','Cynthia','C','de','Bruin','Almerestraat 10','1553 CW','Zeewolde','','','1996-05-05',NULL,500.00,500.00),('777','Angelique','A','de','Hoed','Hoedenstraat 12','1663 LW','Lelystad','V','0320654378','1998-06-06',NULL,200.00,100.00);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentopleiding`
--

DROP TABLE IF EXISTS `studentopleiding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studentopleiding` (
  `studentnr` varchar(5) DEFAULT NULL,
  `opleidingscode` varchar(3) DEFAULT NULL,
  `startdatum` date DEFAULT NULL,
  `einddatum` date DEFAULT NULL,
  `diploma` tinyint(1) DEFAULT '0',
  KEY `studentnr` (`studentnr`),
  KEY `opleidingscode` (`opleidingscode`),
  CONSTRAINT `studentopleiding_ibfk_1` FOREIGN KEY (`studentnr`) REFERENCES `student` (`studentnr`),
  CONSTRAINT `studentopleiding_ibfk_2` FOREIGN KEY (`opleidingscode`) REFERENCES `opleiding` (`opleidingscode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentopleiding`
--

LOCK TABLES `studentopleiding` WRITE;
/*!40000 ALTER TABLE `studentopleiding` DISABLE KEYS */;
INSERT INTO `studentopleiding` VALUES ('111','AO','2015-08-01','2000-01-01',0),('222','MV','2015-08-01','2000-01-01',0),('555','MBI','2015-08-01','2000-01-01',0),('666','IB','2015-08-01','2000-01-01',0),('333','DT3','2015-08-01','2000-01-01',0),('444','DT2','2015-08-01','2000-01-01',0),('777','DT3','2015-02-01','2000-01-01',0);
/*!40000 ALTER TABLE `studentopleiding` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-16 13:35:44
