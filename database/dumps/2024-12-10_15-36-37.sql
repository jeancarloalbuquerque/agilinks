-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: agilinks
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `links` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) DEFAULT NULL,
  `url` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'Como aprender Python','Tutorial completo para iniciantes em Python, desde o básico até conceitos avançados.','https://www.exemplo.com/como-aprender-python'),(2,'10 dicas para melhorar sua produtividade','Aprenda a ser mais eficiente com essas dicas práticas para melhorar sua produtividade no dia a dia.','https://www.exemplo.com/10-dicas-produtividade'),(3,'Os melhores livros de 2024','Uma lista dos livros mais recomendados e bem avaliados de 2024.','https://www.exemplo.com/melhores-livros-2024'),(4,'Como montar um currículo atrativo','Guia passo a passo para criar um currículo impressionante e aumentar suas chances de conseguir um emprego.','https://www.exemplo.com/como-montar-curriculo'),(5,'A evolução da inteligência artificial','Artigo sobre o impacto da IA na sociedade e como ela tem mudado as indústrias ao longo dos anos.','https://www.exemplo.com/evolucao-da-ia'),(6,'Viagem dos sonhos para a Europa','Roteiro detalhado com dicas para uma viagem inesquecível pela Europa, incluindo as melhores cidades e atrações.','https://www.exemplo.com/viagem-europa'),(7,'Receitas rápidas para o dia a dia','Uma coleção de receitas simples e deliciosas para quem tem pouco tempo na cozinha.','https://www.exemplo.com/receitas-rapidas'),(8,'Como investir em ações com segurança','Estratégias de investimento para quem quer começar a investir em ações com segurança e confiança.','https://www.exemplo.com/investir-em-acoes'),(9,'Guia completo de SEO para iniciantes','Aprenda os conceitos fundamentais de SEO e como aplicar técnicas para melhorar o ranking do seu site.','https://www.exemplo.com/guia-seo'),(10,'As últimas tendências em design gráfico','Descubra as tendências mais recentes em design gráfico, incluindo novas ferramentas e estilos criativos.','https://www.exemplo.com/tendencias-design-grafico');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-10 15:36:37
