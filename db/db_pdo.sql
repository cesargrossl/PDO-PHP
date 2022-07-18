CREATE DATABASE `db_pdo`;
USE `db_pdo`;

DROP TABLE IF EXISTS `tb_teste`;
CREATE TABLE `tb_teste` (
  `tes_id` int(11) NOT NULL AUTO_INCREMENT,
  `tes_nome` varchar(200) DEFAULT "",
  `tes_del` char(1) DEFAULT "",
  PRIMARY KEY (`tes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `tb_teste` WRITE;

INSERT INTO `tb_teste` VALUES (1,'TESTE PDO',''),(2,'TESTE02',''),(3,'TESTE03',''),(4,'TESTE04','');

UNLOCK TABLES;
