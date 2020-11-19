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
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'geladeira','Geladeira Brastemp Frost Free Duplex 375 litros',3479.00,2642.13,'imagens/Brastemp_Geladeira.webp'),(2,'geladeira','Geladeira Brastemp Frost Free Side by Side 3 Portas 540 Litros',5999.90,5299.90,'imagens/brastemp%202.jpg'),(3,'geladeira','Geladeira Brastemp Frost Free Inverse 573 litros',5229.00,4199.00,'imagens/geladeira%203.webp'),(4,'fogao','Fogão 5 Bocas Fenix com Mesa de Vidro Acendimento Automático Glass',1017.00,829.90,'imagens/Fog%C3%A3o%201.jpg'),(5,'fogao','Fogão Brastemp 5 Bocas Com Botões Removíveis E Exclusivo Aro Protetor',1769.00,1329.90,'imagens/fog%C3%A3o%202.webp'),(6,'microondas','Forno de Micro-ondas 31 Litros MEF41 Branco - Electrolux',745.00,549.00,'imagens/Microondas%201.webp'),(7,'microondas','Forno de Micro-ondas Panasonic 32 Litros',669.00,249.00,'imagens/microondas%202.webp'),(8,'microondas','Micro-ondas Electrolux 31 Litros',979.90,749.90,'imagens/microondas%203.jpg'),(9,'lavadoraderoupas','Lavadora de Roupas 16 Kg LAC16 Branca Electrolux',2499.99,1899.99,'imagens/lavadora%201.webp'),(10,'lavadoraderoupas','Lavadora de Roupas Electrolux 8,5Kg',1399.00,959.90,'imagens/lavadora%202.jpg'),(11,'lavaloucas','Lava-Louças de Embutir Panasonic',5399.00,3659.90,'imagens/lava-lou%C3%A7as%201.jpg'),(12,'lavaloucas','Lava-Louças Brastemp 14 serviços',3599.00,3139.90,'imagens/lava-lou%C3%A7as%202.webp');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
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
