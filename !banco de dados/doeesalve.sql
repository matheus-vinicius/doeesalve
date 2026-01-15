-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15/01/2026 às 17:02
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doeesalve`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendar`
--

DROP TABLE IF EXISTS `agendar`;
CREATE TABLE IF NOT EXISTS `agendar` (
  `id_doacao` smallint NOT NULL AUTO_INCREMENT,
  `id_usuario` smallint NOT NULL,
  `hemocentro` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'I',
  PRIMARY KEY (`id_doacao`),
  KEY `id_usuario_fk.agendar_idx` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliar`
--

DROP TABLE IF EXISTS `avaliar`;
CREATE TABLE IF NOT EXISTS `avaliar` (
  `id_avaliar` smallint NOT NULL AUTO_INCREMENT,
  `estrela` enum('1','2','3','4','5') NOT NULL,
  `opiniao` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_avaliar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro01`
--

DROP TABLE IF EXISTS `cadastro01`;
CREATE TABLE IF NOT EXISTS `cadastro01` (
  `id_usuario` smallint NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` char(11) NOT NULL,
  `cns` char(16) NOT NULL,
  `datanasc` date NOT NULL,
  `abo` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `sexo` enum('M','F','O') NOT NULL,
  `pais` varchar(45) NOT NULL,
  `cep` char(9) NOT NULL,
  `logradouro` varchar(75) NOT NULL,
  `num` varchar(4) NOT NULL,
  `compl` varchar(45) DEFAULT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` char(2) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `rg_UNIQUE` (`rg`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  UNIQUE KEY `cns_UNIQUE` (`cns`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro02`
--

DROP TABLE IF EXISTS `cadastro02`;
CREATE TABLE IF NOT EXISTS `cadastro02` (
  `id_usuario` smallint NOT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `telcom` varchar(10) DEFAULT NULL,
  `cel` char(11) NOT NULL,
  `nomeem1` varchar(30) NOT NULL,
  `rgem1` char(12) NOT NULL,
  `celem1` char(11) NOT NULL,
  `emailem1` varchar(60) NOT NULL,
  `nomeem2` varchar(30) DEFAULT NULL,
  `rgem2` char(12) DEFAULT NULL,
  `celem2` char(11) DEFAULT NULL,
  `emailem2` varchar(60) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_adm`
--

DROP TABLE IF EXISTS `login_adm`;
CREATE TABLE IF NOT EXISTS `login_adm` (
  `id_loginuser` smallint NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_loginuser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `login_adm`
--

INSERT INTO `login_adm` (`id_loginuser`, `usuario`, `nome`, `senha`) VALUES
(1, 'Matheus', 'Matheus Vinicius dos Santos da Silva', '28282828');

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendar`
--
ALTER TABLE `agendar`
  ADD CONSTRAINT `id_usuario_fk.agendar` FOREIGN KEY (`id_usuario`) REFERENCES `cadastro01` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `cadastro02`
--
ALTER TABLE `cadastro02`
  ADD CONSTRAINT `id_usuario_fk.Cadastro02` FOREIGN KEY (`id_usuario`) REFERENCES `cadastro01` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
