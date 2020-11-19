-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: fullstackeletro
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idpedidos` int(11) NOT NULL AUTO_INCREMENT,
  `clientes` varchar(45) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `produto` varchar(150) NOT NULL,
  `valor` decimal(8,2) DEFAULT NULL,
  `quantidade` decimal(8,2) DEFAULT NULL,
  `valor total` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idpedidos`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,'João Pedro','Rua Lima Duarte, 67','(11) 92554-3874','Geladeira Brastemp Frost Free Duplex 375 litros',2642.13,1.00,2642.13),(2,'Patricia Medeiros','Rua Imperador Marcos, 341','(11) 92863-1502','Fogão Brastemp 5 Bocas Com Botões Removíveis E Exclusivo Aro Protetor',1329.90,1.00,1329.90),(3,'Matheus Duarte','Av Carneiro de Sá','(11) 3208-9534','Forno de Micro-ondas Panasonic 32 Litros',249.00,2.00,498.00),(4,'Pamela Vilela','Rua Vitória Pirez','(11) 92403-1794','Lavadora de Roupas 16 Kg LAC16 Branca Electrolux',1899.99,1.00,1899.99),(5,'Eduardo Lima','Rua Cordeiro Durval','(11) 3806-1207','Geladeira Brastemp Frost Free Side by Side 3 Portas 540 Litros',5299.90,1.00,5299.90),(6,'Ana Maria','Av Renato Cruz','(11) 92132-0079','Micro-ondas Electrolux 31 Litros',749.90,2.00,1499.80);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-26 22:37:39
