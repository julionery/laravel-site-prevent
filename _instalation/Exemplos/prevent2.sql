-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: prevent
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `cidades`
--

DROP TABLE IF EXISTS `cidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sigla_estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidades`
--

LOCK TABLES `cidades` WRITE;
/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracoes`
--

DROP TABLE IF EXISTS `configuracoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracoes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `google` text COLLATE utf8mb4_unicode_ci,
  `vimeo` text COLLATE utf8mb4_unicode_ci,
  `pinterest` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `github` text COLLATE utf8mb4_unicode_ci,
  `tituloFaleConosco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoFaleConosco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fraseRodape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemMenu1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemMenu2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemMenu3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemMenu4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemMenu5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemMenu6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracoes`
--

LOCK TABLES `configuracoes` WRITE;
/*!40000 ALTER TABLE `configuracoes` DISABLE KEYS */;
INSERT INTO `configuracoes` VALUES (1,'Prevent',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Fale Conosco','Contate-nos',' Copyright &copy; 2018 - Prevent Assessoria. All rights reserved.','Início','Institucional','Portfólio','Serviços','Equipe','Contato',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `configuracoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especializacao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicar` enum('sim','nao') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes`
--

LOCK TABLES `equipes` WRITE;
/*!40000 ALTER TABLE `equipes` DISABLE KEYS */;
INSERT INTO `equipes` VALUES (1,'Júlio','Engenheiro de Software','Graduado em Engenharia de Software pela UniRV (Universidade de Rio Verde)','img/equipe/_resize_106548_220620180010.jpg',NULL,NULL,'1231','sim',NULL,NULL,'2018-06-22 03:07:54','2018-06-22 03:11:38',NULL);
/*!40000 ALTER TABLE `equipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galerias`
--

DROP TABLE IF EXISTS `galerias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galerias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicado` enum('sim','nao') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `posicao_entrada` enum('center-align','left-align','right-align') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'center-align',
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galerias_portfolio_id_foreign` (`portfolio_id`),
  CONSTRAINT `galerias_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galerias`
--

LOCK TABLES `galerias` WRITE;
/*!40000 ALTER TABLE `galerias` DISABLE KEYS */;
INSERT INTO `galerias` VALUES (1,1,'Teste 123',NULL,'img/portfolio/portifolio//_img_109804_220620180039.jpeg','1','sim','center-align',NULL,NULL,'2018-06-22 03:39:25','2018-06-22 03:40:54',NULL),(2,1,NULL,NULL,'img/portfolio/portifolio//_img_105898_220620180039.jpeg','2','sim','center-align',NULL,NULL,'2018-06-22 03:39:25','2018-06-22 03:42:52',NULL),(3,1,NULL,NULL,'img/portfolio/portifolio//_img_107967_220620180039.jpeg','3','sim','center-align',NULL,NULL,'2018-06-22 03:39:25','2018-06-22 03:43:06',NULL),(4,1,NULL,NULL,'img/portfolio/portifolio//_img_107524_220620180039.jpeg','4','sim','center-align',NULL,NULL,'2018-06-22 03:39:25','2018-06-22 03:43:10',NULL),(5,1,NULL,NULL,'img/portfolio/portifolio//_img_102012_220620180039.jpeg','5','sim','center-align',NULL,NULL,'2018-06-22 03:39:25','2018-06-22 03:43:13',NULL),(6,1,NULL,NULL,'img/portfolio/portifolio//_img_106969_220620180039.jpeg','6','sim','center-align',NULL,NULL,'2018-06-22 03:39:25','2018-06-22 03:43:16',NULL);
/*!40000 ALTER TABLE `galerias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_03_18_200000_create_permissaos_table',1),(4,'2017_03_18_300000_create_papels_table',1),(5,'2017_03_18_400000_create_paginas_table',1),(6,'2017_03_18_500000_create_tipos_table',1),(7,'2017_03_18_600000_create_cidades_table',1),(8,'2017_03_19_700000_create_portfolios_table',1),(9,'2017_03_19_800000_create_galerias_table',1),(10,'2017_03_19_900000_create_servicos_table',1),(11,'2017_03_20_110000_create_sobre_table',1),(12,'2017_03_20_120000_create_equipes_table',1),(13,'2017_03_20_130000_create_configuracoes_table',1),(14,'2017_05_07_034338_create_social_accounts_table',1),(15,'2018_06_14_100000_create_testemunhos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paginas`
--

DROP TABLE IF EXISTS `paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paginas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci,
  `imagem` text COLLATE utf8mb4_unicode_ci,
  `mapa` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paginas`
--

LOCK TABLES `paginas` WRITE;
/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` VALUES (8,'INSTITUCIONAL','DEIXE SEU EMAIL PARA ENTRARMOS EM CONTATO!','A Prevent Assessoria em Segurança do Trabalho nasceu a partir de uma vontade de fazer com que a Segurança do Trabalho se tornasse acessível para todos, sempre com a preocupação voltada para o trabalhador, de forma a minimizar os impactos que o dia a dia de trabalho causa aos colaboradores a MA consultoria busca soluções simples de acordo com cada trabalho executado para diminuir ao máximo acidentes e doenças do trabalho.','img/paginas/8//_img_105255_210620182237.jpeg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sobre','2018-06-22 01:27:10','2018-06-22 01:37:16',NULL),(9,'VISÃO GERAL',NULL,'A Prevent Assessoria em Segurança do Trabalho encontra-se localizada na Avenida Indianópolis, 3214, \nna região do Bairro da Saúde em São Paulo, próximo ao Metrô São Judas, local de fácil acesso para nossos clientes.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'visaoGeral','2018-06-22 01:27:10','2018-06-22 01:27:10',NULL),(10,'Missão',NULL,'Texto adicional sobre a Missão','img/paginas/10//_img_103605_210620182247.jpeg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'missao','2018-06-22 01:27:10','2018-06-22 01:47:44',NULL),(11,'Visão',NULL,'Texto adicional sobre a visao','img/paginas/11//_img_106822_210620182247.jpeg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'visao','2018-06-22 01:27:10','2018-06-22 01:47:56',NULL),(12,'Valores',NULL,'Texto adicional sobre Valores','img/paginas/12//_img_106210_210620182248.jpeg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'valores','2018-06-22 01:27:10','2018-06-22 01:48:04',NULL),(13,'Nossos serviços',NULL,'A Prevent Assessoria em Segurança do Trabalho atua no ramo de Saúde e Segurança do Trabalho \noferecendo serviços de elaboração de programas como:',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'servicos','2018-06-22 01:27:10','2018-06-22 01:27:10',NULL),(14,'Nossas certificacoes',NULL,'Texto adicional sobre as certificacoes',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'certificacoes','2018-06-22 01:27:10','2018-06-22 01:27:10',NULL),(15,'Equipe',NULL,'Texto sobre a equipe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'equipe','2018-06-22 01:27:10','2018-06-22 01:27:10',NULL),(16,'PORQUE A PREVENT?',NULL,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate eligendi enim iusto tenetur, perspiciatis id tempore aliquid hic ducimus debitis natus quisquam commodi sint voluptas nesciunt laboriosam repellat laudantium placeat quidem quia velit fuga veritatis. Expedita voluptatem vitae totam iusto sequi odio dolor, soluta, omnis laboriosam labore minus excepturi reprehenderit consequuntur assumenda minima, ipsa? Molestias ex quod illum ea tempora quas quos quam ullam, perferendis, voluptatem quo aperiam dolorum fuga ab, aliquid facere saepe laudantium cum vitae deserunt? Nemo dolores blanditiis doloribus recusandae totam ad ex ratione fugit provident consequatur, dolor rem. Reprehenderit veniam nemo, commodi doloremque nisi dolor, illum.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'contato','2018-06-22 01:27:10','2018-06-22 01:27:10',NULL);
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papel_permissao`
--

DROP TABLE IF EXISTS `papel_permissao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papel_permissao` (
  `permissao_id` int(10) unsigned NOT NULL,
  `papel_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permissao_id`,`papel_id`),
  KEY `papel_permissao_papel_id_foreign` (`papel_id`),
  CONSTRAINT `papel_permissao_papel_id_foreign` FOREIGN KEY (`papel_id`) REFERENCES `papels` (`id`) ON DELETE CASCADE,
  CONSTRAINT `papel_permissao_permissao_id_foreign` FOREIGN KEY (`permissao_id`) REFERENCES `permissaos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papel_permissao`
--

LOCK TABLES `papel_permissao` WRITE;
/*!40000 ALTER TABLE `papel_permissao` DISABLE KEYS */;
/*!40000 ALTER TABLE `papel_permissao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papel_user`
--

DROP TABLE IF EXISTS `papel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papel_user` (
  `user_id` int(10) unsigned NOT NULL,
  `papel_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`papel_id`),
  KEY `papel_user_papel_id_foreign` (`papel_id`),
  CONSTRAINT `papel_user_papel_id_foreign` FOREIGN KEY (`papel_id`) REFERENCES `papels` (`id`) ON DELETE CASCADE,
  CONSTRAINT `papel_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papel_user`
--

LOCK TABLES `papel_user` WRITE;
/*!40000 ALTER TABLE `papel_user` DISABLE KEYS */;
INSERT INTO `papel_user` VALUES (1,1,NULL,NULL);
/*!40000 ALTER TABLE `papel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papels`
--

DROP TABLE IF EXISTS `papels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papels`
--

LOCK TABLES `papels` WRITE;
/*!40000 ALTER TABLE `papels` DISABLE KEYS */;
INSERT INTO `papels` VALUES (1,'admin','Administrado do Sistema',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(2,'gerente','Gerente do Sistema',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(3,'vendedor','Equipe de Vendas',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10');
/*!40000 ALTER TABLE `papels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissaos`
--

DROP TABLE IF EXISTS `permissaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissaos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissaos`
--

LOCK TABLES `permissaos` WRITE;
/*!40000 ALTER TABLE `permissaos` DISABLE KEYS */;
INSERT INTO `permissaos` VALUES (11,'usuario_listar','Listar Usuários',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(12,'usuario_adicionar','Adicionar Usuários',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(13,'usuario_editar','Editar Usuários',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(14,'usuario_deletar','Deletar Usuários',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(15,'usuario_papel','Listar Papéis',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(16,'usuario_adicionar_papel','Permite adicionar Papéis aos usuários',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(17,'papel_listar','Listar Papéis',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(18,'papel_adicionar','Adicionar Papéis',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(19,'papel_editar','Editar Papéis',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10'),(20,'papel_deletar','Deletar Papéis',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10');
/*!40000 ALTER TABLE `permissaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_id` int(10) unsigned DEFAULT NULL,
  `cidade_id` int(10) unsigned DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `imagem` text COLLATE utf8mb4_unicode_ci,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detalhes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` text COLLATE utf8mb4_unicode_ci,
  `visualizacoes` bigint(20) NOT NULL DEFAULT '0',
  `publicar` enum('sim','nao') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolios_tipo_id_foreign` (`tipo_id`),
  KEY `portfolios_cidade_id_foreign` (`cidade_id`),
  CONSTRAINT `portfolios_cidade_id_foreign` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`),
  CONSTRAINT `portfolios_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolios`
--

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` VALUES (1,NULL,NULL,'PORTIFÓLIO',NULL,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nisi ut aliquip ex ea commodo consequat.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'sim',NULL,NULL,'2018-06-22 03:31:21','2018-06-22 03:31:21',NULL);
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalhes` text COLLATE utf8mb4_unicode_ci,
  `lado` enum('direito','esquerdo') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'direito',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` text COLLATE utf8mb4_unicode_ci,
  `texto` text COLLATE utf8mb4_unicode_ci,
  `visualizacoes` bigint(20) NOT NULL DEFAULT '0',
  `publicar` enum('sim','nao') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (1,'PCMSO (Programa de  Controle Médico de Saúde Ocupacional)','NR 7 (PCMSO) Programa de Controle Médico de Saúde Ocupacional – O PCMSO Estabelece o controle de saúde físico e mental do trabalhador, em função de suas atividades, e obriga a realização de exames médicos admissionais, de mudança de função e de retorno ao trabalho, estabelecendo ainda a obrigatoriedade de um exame médico periódico.','direito',NULL,NULL,'Esta Norma Regulamentadora – NR estabelece a obrigatoriedade da elaboração e implementação, por parte de todos os empregadores e instituições que admitam trabalhadores com empregados, do Programa de Controle Médico de Saúde Ocupacional – PCMSO, com o objetivo de promoção e preservação da saúde do conjunto dos seus trabalhadores.',0,'sim',NULL,NULL,'2018-06-22 02:48:57','2018-06-22 02:52:24',NULL);
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sobre`
--

DROP TABLE IF EXISTS `sobre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sobre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci,
  `imagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoData` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicar` enum('sim','nao') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sobre`
--

LOCK TABLES `sobre` WRITE;
/*!40000 ALTER TABLE `sobre` DISABLE KEYS */;
/*!40000 ALTER TABLE `sobre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_accounts`
--

DROP TABLE IF EXISTS `social_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_accounts`
--

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testemunhos`
--

DROP TABLE IF EXISTS `testemunhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testemunhos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especializacao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicar` enum('sim','nao') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testemunhos`
--

LOCK TABLES `testemunhos` WRITE;
/*!40000 ALTER TABLE `testemunhos` DISABLE KEYS */;
/*!40000 ALTER TABLE `testemunhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos`
--

DROP TABLE IF EXISTS `tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos`
--

LOCK TABLES `tipos` WRITE;
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ativo` enum('sim','nao') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sim',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_inclusao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_alteracao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','$2y$10$d6LbSed8QCGNYVg9CvUorejezJxDxla.5OdIEcgSJa6sVAckbHbRa','sim','PUP8l6loKL',NULL,NULL,'2018-06-22 01:27:10','2018-06-22 01:27:10',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-22  0:45:55
