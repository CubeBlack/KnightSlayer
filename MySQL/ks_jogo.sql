-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: ks
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `jogo`
--

DROP TABLE IF EXISTS `ks_jogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ks_jogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tabuleiro` text,
  `player1` varchar(45) DEFAULT NULL,
  `player1msg` varchar(500) DEFAULT NULL,
  `player2` varchar(45) DEFAULT NULL,
  `player2msg` varchar(500) DEFAULT NULL,
  `historico` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `vez` int(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogo`
--

LOCK TABLES `ks_jogo` WRITE;
/*!40000 ALTER TABLE `jogo` DISABLE KEYS */;
INSERT INTO `ks_jogo` VALUES (24,'{\"0\":{\"tipo\":\"2\",\"posicao\":\"a1\",\"situacao\":\"\"},\"1\":{\"tipo\":\"3\",\"posicao\":\"b1\",\"situacao\":\"\"},\"2\":{\"tipo\":\"4\",\"posicao\":\"c1\",\"situacao\":\"\"},\"3\":{\"tipo\":\"5\",\"posicao\":\"f3\",\"situacao\":\"movido\"},\"4\":{\"tipo\":\"6\",\"posicao\":\"e1\",\"situacao\":\"\"},\"5\":{\"tipo\":\"4\",\"posicao\":\"h3\",\"situacao\":\"movido\"},\"7\":{\"tipo\":\"2\",\"posicao\":\"h1\",\"situacao\":\"\"},\"8\":{\"tipo\":\"1\",\"posicao\":\"a2\",\"situacao\":\"\"},\"9\":{\"tipo\":\"1\",\"posicao\":\"b2\",\"situacao\":\"\"},\"10\":{\"tipo\":\"1\",\"posicao\":\"c2\",\"situacao\":\"\"},\"11\":{\"tipo\":\"1\",\"posicao\":\"d2\",\"situacao\":\"\"},\"12\":{\"tipo\":\"1\",\"posicao\":\"e4\",\"situacao\":\"movido\"},\"13\":{\"tipo\":\"1\",\"posicao\":\"f2\",\"situacao\":\"\"},\"14\":{\"tipo\":\"1\",\"posicao\":\"g4\",\"situacao\":\"movido\"},\"15\":{\"tipo\":\"1\",\"posicao\":\"h2\",\"situacao\":\"\"},\"16\":{\"tipo\":\"8\",\"posicao\":\"a8\",\"situacao\":\"\"},\"17\":{\"tipo\":\"9\",\"posicao\":\"b8\",\"situacao\":\"\"},\"18\":{\"tipo\":\"10\",\"posicao\":\"c8\",\"situacao\":\"\"},\"19\":{\"tipo\":\"11\",\"posicao\":\"d8\",\"situacao\":\"movido\"},\"20\":{\"tipo\":\"12\",\"posicao\":\"e8\",\"situacao\":\"\"},\"21\":{\"tipo\":\"10\",\"posicao\":\"f8\",\"situacao\":\"\"},\"22\":{\"tipo\":\"9\",\"posicao\":\"f6\",\"situacao\":\"movido\"},\"23\":{\"tipo\":\"8\",\"posicao\":\"h8\",\"situacao\":\"\"},\"24\":{\"tipo\":\"7\",\"posicao\":\"a7\",\"situacao\":\"\"},\"25\":{\"tipo\":\"7\",\"posicao\":\"b7\",\"situacao\":\"\"},\"26\":{\"tipo\":\"7\",\"posicao\":\"c7\",\"situacao\":\"\"},\"28\":{\"tipo\":\"7\",\"posicao\":\"e6\",\"situacao\":\"movido\"},\"29\":{\"tipo\":\"7\",\"posicao\":\"f7\",\"situacao\":\"\"},\"30\":{\"tipo\":\"7\",\"posicao\":\"g7\",\"situacao\":\"\"},\"31\":{\"tipo\":\"7\",\"posicao\":\"h7\",\"situacao\":\"\"}}','1','VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.','10','FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.','Jogo Desafiado','desafiando',10),(26,'{\"3\":{\"tipo\":\"3\",\"posicao\":\"g6\",\"situacao\":\"movido\"},\"28\":{\"tipo\":\"10\",\"posicao\":\"f1\",\"situacao\":\"movido\"}}','1','VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.','9','FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.','Jogo Desafiado','9',1),(25,'{\"0\":{\"tipo\":\"2\",\"posicao\":\"a1\",\"situacao\":\"\"},\"1\":{\"tipo\":\"3\",\"posicao\":\"b1\",\"situacao\":\"\"},\"2\":{\"tipo\":\"4\",\"posicao\":\"c1\",\"situacao\":\"\"},\"3\":{\"tipo\":\"5\",\"posicao\":\"d1\",\"situacao\":\"\"},\"4\":{\"tipo\":\"6\",\"posicao\":\"e1\",\"situacao\":\"\"},\"5\":{\"tipo\":\"4\",\"posicao\":\"f1\",\"situacao\":\"\"},\"6\":{\"tipo\":\"3\",\"posicao\":\"g1\",\"situacao\":\"\"},\"7\":{\"tipo\":\"2\",\"posicao\":\"h1\",\"situacao\":\"\"},\"8\":{\"tipo\":\"1\",\"posicao\":\"a2\",\"situacao\":\"\"},\"9\":{\"tipo\":\"1\",\"posicao\":\"c4\",\"situacao\":\"movido\"},\"10\":{\"tipo\":\"1\",\"posicao\":\"d6\",\"situacao\":\"movido\"},\"11\":{\"tipo\":\"1\",\"posicao\":\"d2\",\"situacao\":\"\"},\"12\":{\"tipo\":\"1\",\"posicao\":\"e2\",\"situacao\":\"\"},\"13\":{\"tipo\":\"1\",\"posicao\":\"f2\",\"situacao\":\"\"},\"14\":{\"tipo\":\"1\",\"posicao\":\"g2\",\"situacao\":\"\"},\"15\":{\"tipo\":\"1\",\"posicao\":\"h2\",\"situacao\":\"\"},\"16\":{\"tipo\":\"8\",\"posicao\":\"a8\",\"situacao\":\"\"},\"17\":{\"tipo\":\"9\",\"posicao\":\"b8\",\"situacao\":\"\"},\"18\":{\"tipo\":\"10\",\"posicao\":\"c8\",\"situacao\":\"\"},\"19\":{\"tipo\":\"11\",\"posicao\":\"d8\",\"situacao\":\"\"},\"20\":{\"tipo\":\"12\",\"posicao\":\"e8\",\"situacao\":\"\"},\"21\":{\"tipo\":\"10\",\"posicao\":\"f8\",\"situacao\":\"\"},\"22\":{\"tipo\":\"9\",\"posicao\":\"g8\",\"situacao\":\"\"},\"23\":{\"tipo\":\"8\",\"posicao\":\"h8\",\"situacao\":\"\"},\"24\":{\"tipo\":\"7\",\"posicao\":\"a7\",\"situacao\":\"\"},\"25\":{\"tipo\":\"7\",\"posicao\":\"b7\",\"situacao\":\"\"},\"28\":{\"tipo\":\"7\",\"posicao\":\"e7\",\"situacao\":\"\"},\"29\":{\"tipo\":\"7\",\"posicao\":\"f6\",\"situacao\":\"movido\"},\"30\":{\"tipo\":\"7\",\"posicao\":\"g7\",\"situacao\":\"\"},\"31\":{\"tipo\":\"7\",\"posicao\":\"h7\",\"situacao\":\"\"}}','1','VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.','9','FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.','Jogo Desafiado','desafiando',1),(27,'{\"0\":{\"tipo\":\"2\",\"posicao\":\"a1\",\"situacao\":\"\"},\"1\":{\"tipo\":\"3\",\"posicao\":\"b1\",\"situacao\":\"\"},\"2\":{\"tipo\":\"4\",\"posicao\":\"c1\",\"situacao\":\"\"},\"3\":{\"tipo\":\"5\",\"posicao\":\"d1\",\"situacao\":\"\"},\"4\":{\"tipo\":\"6\",\"posicao\":\"e1\",\"situacao\":\"\"},\"5\":{\"tipo\":\"4\",\"posicao\":\"f1\",\"situacao\":\"\"},\"6\":{\"tipo\":\"3\",\"posicao\":\"g1\",\"situacao\":\"\"},\"7\":{\"tipo\":\"2\",\"posicao\":\"h1\",\"situacao\":\"\"},\"8\":{\"tipo\":\"1\",\"posicao\":\"a2\",\"situacao\":\"\"},\"9\":{\"tipo\":\"1\",\"posicao\":\"b2\",\"situacao\":\"\"},\"10\":{\"tipo\":\"1\",\"posicao\":\"c2\",\"situacao\":\"\"},\"11\":{\"tipo\":\"1\",\"posicao\":\"d2\",\"situacao\":\"\"},\"12\":{\"tipo\":\"1\",\"posicao\":\"e2\",\"situacao\":\"\"},\"13\":{\"tipo\":\"1\",\"posicao\":\"f2\",\"situacao\":\"\"},\"14\":{\"tipo\":\"1\",\"posicao\":\"g2\",\"situacao\":\"\"},\"15\":{\"tipo\":\"1\",\"posicao\":\"h2\",\"situacao\":\"\"},\"16\":{\"tipo\":\"8\",\"posicao\":\"a8\",\"situacao\":\"\"},\"17\":{\"tipo\":\"9\",\"posicao\":\"b8\",\"situacao\":\"\"},\"18\":{\"tipo\":\"10\",\"posicao\":\"c8\",\"situacao\":\"\"},\"19\":{\"tipo\":\"11\",\"posicao\":\"d8\",\"situacao\":\"\"},\"20\":{\"tipo\":\"12\",\"posicao\":\"e8\",\"situacao\":\"\"},\"21\":{\"tipo\":\"10\",\"posicao\":\"f8\",\"situacao\":\"\"},\"22\":{\"tipo\":\"9\",\"posicao\":\"g8\",\"situacao\":\"\"},\"23\":{\"tipo\":\"8\",\"posicao\":\"h8\",\"situacao\":\"\"},\"24\":{\"tipo\":\"7\",\"posicao\":\"a7\",\"situacao\":\"\"},\"25\":{\"tipo\":\"7\",\"posicao\":\"b7\",\"situacao\":\"\"},\"26\":{\"tipo\":\"7\",\"posicao\":\"c7\",\"situacao\":\"\"},\"27\":{\"tipo\":\"7\",\"posicao\":\"d7\",\"situacao\":\"\"},\"28\":{\"tipo\":\"7\",\"posicao\":\"e7\",\"situacao\":\"\"},\"29\":{\"tipo\":\"7\",\"posicao\":\"f7\",\"situacao\":\"\"},\"30\":{\"tipo\":\"7\",\"posicao\":\"g7\",\"situacao\":\"\"},\"31\":{\"tipo\":\"7\",\"posicao\":\"h7\",\"situacao\":\"\"}}','9','VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.','1','FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.','Jogo Desafiado','desafiando',1),(28,'{\"0\":{\"tipo\":\"2\",\"posicao\":\"a1\",\"situacao\":\"\"},\"1\":{\"tipo\":\"3\",\"posicao\":\"b1\",\"situacao\":\"\"},\"2\":{\"tipo\":\"4\",\"posicao\":\"c1\",\"situacao\":\"\"},\"3\":{\"tipo\":\"5\",\"posicao\":\"a4\",\"situacao\":\"movido\"},\"6\":{\"tipo\":\"3\",\"posicao\":\"h3\",\"situacao\":\"movido\"},\"7\":{\"tipo\":\"2\",\"posicao\":\"h1\",\"situacao\":\"\"},\"8\":{\"tipo\":\"1\",\"posicao\":\"a2\",\"situacao\":\"\"},\"9\":{\"tipo\":\"1\",\"posicao\":\"b2\",\"situacao\":\"\"},\"10\":{\"tipo\":\"1\",\"posicao\":\"c3\",\"situacao\":\"movido\"},\"11\":{\"tipo\":\"1\",\"posicao\":\"d2\",\"situacao\":\"\"},\"14\":{\"tipo\":\"5\",\"posicao\":\"g8\",\"situacao\":\"movido\"},\"15\":{\"tipo\":\"1\",\"posicao\":\"h2\",\"situacao\":\"\"},\"16\":{\"tipo\":\"8\",\"posicao\":\"a8\",\"situacao\":\"\"},\"17\":{\"tipo\":\"9\",\"posicao\":\"b8\",\"situacao\":\"\"},\"18\":{\"tipo\":\"10\",\"posicao\":\"c8\",\"situacao\":\"\"},\"19\":{\"tipo\":\"11\",\"posicao\":\"d8\",\"situacao\":\"\"},\"20\":{\"tipo\":\"12\",\"posicao\":\"e8\",\"situacao\":\"\"},\"21\":{\"tipo\":\"10\",\"posicao\":\"f8\",\"situacao\":\"\"},\"23\":{\"tipo\":\"8\",\"posicao\":\"h8\",\"situacao\":\"\"},\"24\":{\"tipo\":\"7\",\"posicao\":\"a7\",\"situacao\":\"\"},\"25\":{\"tipo\":\"7\",\"posicao\":\"b7\",\"situacao\":\"\"},\"26\":{\"tipo\":\"7\",\"posicao\":\"c7\",\"situacao\":\"\"},\"27\":{\"tipo\":\"7\",\"posicao\":\"d6\",\"situacao\":\"movido\"},\"28\":{\"tipo\":\"7\",\"posicao\":\"e5\",\"situacao\":\"movido\"},\"29\":{\"tipo\":\"7\",\"posicao\":\"f5\",\"situacao\":\"movido\"},\"30\":{\"tipo\":\"11\",\"posicao\":\"e1\",\"situacao\":\"movido\"}}','9','VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.','1','FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.','Jogo Desafiado','9',1);
/*!40000 ALTER TABLE `jogo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-30 11:34:29
