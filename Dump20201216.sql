-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: bienesraices
-- ------------------------------------------------------
-- Server version	5.7.22-log

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'Terraza en el Techo de tu casa','Consejos para construir una terraza en el techo de tu casa','Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni suscipit, quae ipsam expedita aspernatur autem sapiente incidunt obcaecati porro saepe doloremque consequatur libero sint cum temporibus omnis quaerat laborum blanditiis.\n\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nisi autem! Et beatae magnam eveniet sunt blanditiis minima a libero exercitationem. Sunt ipsa dolorum voluptates aliquam laudantium ex, temporibus sequi!','blog1.jpg','1'),(2,'Construye una alberca en tu hogar','Consejos para la construccion de una alberca en tu casa','Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni suscipit, quae ipsam expedita aspernatur autem sapiente incidunt obcaecati porro saepe doloremque consequatur libero sint cum temporibus omnis quaerat laborum blanditiis.\n\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nisi autem! Et beatae magnam eveniet sunt blanditiis minima a libero exercitationem. Sunt ipsa dolorum voluptates aliquam laudantium ex, temporibus sequi!','blog2.jpg','1'),(3,'Decora tu sala con estilo y elegancia','Consejos para decorar tu sala con estilo y un toque hogareño','Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni suscipit, quae ipsam expedita aspernatur autem sapiente incidunt obcaecati porro saepe doloremque consequatur libero sint cum temporibus omnis quaerat laborum blanditiis.\n\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nisi autem! Et beatae magnam eveniet sunt blanditiis minima a libero exercitationem. Sunt ipsa dolorum voluptates aliquam laudantium ex, temporibus sequi!','blog3.jpg','1'),(4,'Guia para la decoracion de tu habitacion','Consejos para decorar la habitacion de tus sueños','Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni suscipit, quae ipsam expedita aspernatur autem sapiente incidunt obcaecati porro saepe doloremque consequatur libero sint cum temporibus omnis quaerat laborum blanditiis.\n\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, nisi autem! Et beatae magnam eveniet sunt blanditiis minima a libero exercitationem. Sunt ipsa dolorum voluptates aliquam laudantium ex, temporibus sequi!','blog4.jpg','1');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` VALUES (1,6,1);
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'a@a.com','12345','Samuel'),(3,'m@m.m','11111','Moises David');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 NOT NULL,
  `banios` int(20) NOT NULL DEFAULT '0',
  `cocheras` int(20) NOT NULL DEFAULT '0',
  `recamaras` int(20) NOT NULL DEFAULT '0',
  `precio` double NOT NULL DEFAULT '0',
  `fecha_publicacion` date NOT NULL DEFAULT '0000-00-00',
  `en_venta` tinyint(1) NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (1,'Casas de Lujo en el Lago','Casa en el lago con exelente vista, acabados de lujo a un exelente precio','anuncio1.jpg',3,2,3,3000000,'2020-12-09',1,1),(2,'Casa con Terminados de Lujo Modernos','Casa con diseño moderno, asi como tecnologia inteligente y amueblada','anuncio2.jpg',3,2,2,2000000,'2020-12-09',1,1),(3,'Casa con Alberca y Enorme Jardin','Casa con alberca y acabados modernos muy cerca de zonas top de la ciudad','anuncio3.jpg',3,2,3,3000000,'2020-12-09',1,1),(4,'Casa Fuera de la Ciudad con Alberca','Casa con alberca y acabados modernos a unos cuantos minutos fuera de la ciudad','anuncio4.jpg',2,2,3,2000000,'2020-12-09',1,1),(5,'Casa Frente al Bosque Colomos','Casa con alberca frente al bosque con lago y parques','anuncio5.jpg',3,2,3,3000000,'2020-12-09',1,1),(6,'Casa con Alberca y Salon de Eventos','Casa con alberca y acabados modernos en hermosa zona residencial','anuncio6.jpg',3,2,3,4000000,'2020-12-09',0,3);
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-16  8:38:00
