-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 0.0.0.0    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.60

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
-- Table structure for table `CALLE`
--

DROP TABLE IF EXISTS `CALLE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CALLE` (
  `ID_CALLE` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCalle` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `numeroCalle` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_CALLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CALLE`
--

LOCK TABLES `CALLE` WRITE;
/*!40000 ALTER TABLE `CALLE` DISABLE KEYS */;
/*!40000 ALTER TABLE `CALLE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CIUDAD`
--

DROP TABLE IF EXISTS `CIUDAD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CIUDAD` (
  `ID_CIUDAD` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCiudad` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `localidadCiudad` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CIUDAD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CIUDAD`
--

LOCK TABLES `CIUDAD` WRITE;
/*!40000 ALTER TABLE `CIUDAD` DISABLE KEYS */;
/*!40000 ALTER TABLE `CIUDAD` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COMENTARIO`
--

DROP TABLE IF EXISTS `COMENTARIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `COMENTARIO` (
  `ID_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT,
  `fechaComentario` datetime DEFAULT NULL,
  `LECTOR_ID_LECTOR` int(11) NOT NULL,
  `NOTICIA_ID_NOTICIA` int(11) NOT NULL,
  `comentarioComentario` text COLLATE latin1_spanish_ci,
  PRIMARY KEY (`ID_COMENTARIO`),
  KEY `fk_COMENTARIO_LECTOR_idx` (`LECTOR_ID_LECTOR`),
  KEY `fk_COMENTARIO_NOTICIA1_idx` (`NOTICIA_ID_NOTICIA`),
  CONSTRAINT `fk_COMENTARIO_LECTOR` FOREIGN KEY (`LECTOR_ID_LECTOR`) REFERENCES `LECTOR` (`ID_LECTOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_COMENTARIO_NOTICIA1` FOREIGN KEY (`NOTICIA_ID_NOTICIA`) REFERENCES `NOTICIA` (`ID_NOTICIA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMENTARIO`
--

LOCK TABLES `COMENTARIO` WRITE;
/*!40000 ALTER TABLE `COMENTARIO` DISABLE KEYS */;
/*!40000 ALTER TABLE `COMENTARIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CONTACTO`
--

DROP TABLE IF EXISTS `CONTACTO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CONTACTO` (
  `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT,
  `telefonoContacto` int(11) DEFAULT NULL,
  `correoContacto` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `USUARIO_ID_USUARIO` int(11) NOT NULL,
  `LECTOR_ID_LECTOR` int(11) NOT NULL,
  PRIMARY KEY (`ID_CONTACTO`),
  KEY `fk_CONTACTO_USUARIO1_idx` (`USUARIO_ID_USUARIO`),
  KEY `fk_CONTACTO_LECTOR1_idx` (`LECTOR_ID_LECTOR`),
  CONSTRAINT `fk_CONTACTO_USUARIO1` FOREIGN KEY (`USUARIO_ID_USUARIO`) REFERENCES `USUARIO` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CONTACTO_LECTOR1` FOREIGN KEY (`LECTOR_ID_LECTOR`) REFERENCES `LECTOR` (`ID_LECTOR`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CONTACTO`
--

LOCK TABLES `CONTACTO` WRITE;
/*!40000 ALTER TABLE `CONTACTO` DISABLE KEYS */;
/*!40000 ALTER TABLE `CONTACTO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LECTOR`
--

DROP TABLE IF EXISTS `LECTOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LECTOR` (
  `ID_LECTOR` int(11) NOT NULL AUTO_INCREMENT,
  `nombreLector` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_LECTOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LECTOR`
--

LOCK TABLES `LECTOR` WRITE;
/*!40000 ALTER TABLE `LECTOR` DISABLE KEYS */;
/*!40000 ALTER TABLE `LECTOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NOTICIA`
--

DROP TABLE IF EXISTS `NOTICIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NOTICIA` (
  `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT,
  `referenciaImagenNoticia` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaNoticia` date NOT NULL,
  `secionNoticia` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `noticiaNoticia` text COLLATE latin1_spanish_ci NOT NULL,
  `tituloNoticia` text COLLATE latin1_spanish_ci NOT NULL,
  `USUARIO_ID_USUARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID_NOTICIA`),
  KEY `fk_NOTICIA_USUARIO1_idx` (`USUARIO_ID_USUARIO`),
  CONSTRAINT `fk_NOTICIA_USUARIO1` FOREIGN KEY (`USUARIO_ID_USUARIO`) REFERENCES `USUARIO` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NOTICIA`
--

LOCK TABLES `NOTICIA` WRITE;
/*!40000 ALTER TABLE `NOTICIA` DISABLE KEYS */;
/*!40000 ALTER TABLE `NOTICIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `REGION`
--

DROP TABLE IF EXISTS `REGION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `REGION` (
  `ID_REGION` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRegion` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `numeroRegion` int(11) NOT NULL,
  `comunaRegion` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_REGION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `REGION`
--

LOCK TABLES `REGION` WRITE;
/*!40000 ALTER TABLE `REGION` DISABLE KEYS */;
/*!40000 ALTER TABLE `REGION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USUARIO`
--

DROP TABLE IF EXISTS `USUARIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USUARIO` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `administrador` bit(1) DEFAULT NULL,
  `nombreUsuario` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellidoPaternoUsuario` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellidoMaternoUsuario` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `usuarioUsuario` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `passwordUsuario` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaModificacionUsuario` datetime DEFAULT NULL,
  `REGION_ID_REGION` int(11) NOT NULL,
  `CIUDAD_ID_CIUDAD` int(11) NOT NULL,
  `CALLE_ID_CALLE` int(11) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `fk_USUARIO_REGION1_idx` (`REGION_ID_REGION`),
  KEY `fk_USUARIO_CIUDAD1_idx` (`CIUDAD_ID_CIUDAD`),
  KEY `fk_USUARIO_CALLE1_idx` (`CALLE_ID_CALLE`),
  CONSTRAINT `fk_USUARIO_REGION1` FOREIGN KEY (`REGION_ID_REGION`) REFERENCES `REGION` (`ID_REGION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIO_CIUDAD1` FOREIGN KEY (`CIUDAD_ID_CIUDAD`) REFERENCES `CIUDAD` (`ID_CIUDAD`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIO_CALLE1` FOREIGN KEY (`CALLE_ID_CALLE`) REFERENCES `CALLE` (`ID_CALLE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USUARIO`
--

LOCK TABLES `USUARIO` WRITE;
/*!40000 ALTER TABLE `USUARIO` DISABLE KEYS */;
/*!40000 ALTER TABLE `USUARIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mydb'
--

--
-- Dumping routines for database 'mydb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-11  8:52:48
