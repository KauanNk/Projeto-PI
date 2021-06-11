-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Maio-2021 às 19:25
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pet_db`
--
CREATE DATABASE IF NOT EXISTS `pet_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pet_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agendamento`
--

CREATE TABLE IF NOT EXISTS `tb_agendamento` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `cod_dadosC` int(11) NOT NULL,
  `dt_agenda` date NOT NULL,
  `local_agenda` varchar(30) NOT NULL,
  `data_agenda` date NOT NULL,
  `horario_agenda` varchar(5) NOT NULL,
  `status_agenda` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_agenda`),
  KEY `cod_dadosC` (`cod_dadosC`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `tb_agendamento`
--

INSERT INTO `tb_agendamento` (`id_agenda`, `cod_dadosC`, `dt_agenda`, `local_agenda`, `data_agenda`, `horario_agenda`, `status_agenda`) VALUES
(8, 2, '2021-05-19', 'TEUKUNAVARA', '2021-05-19', '8:00', 'Agendado'),
(19, 3, '2021-05-19', 'TEUKUNAVARA', '2021-05-19', '12:40', 'Agendado'),
(18, 3, '2021-05-19', 'TEUKUNAVARA', '2021-05-19', '11:20', 'Agendado'),
(17, 3, '2021-05-19', '', '0000-00-00', '', 'Agendado'),
(16, 3, '2021-05-19', 'TEUKUNAVARA', '2021-05-19', '10:00', 'Agendado'),
(15, 3, '2021-05-19', 'GOLEIRO BRUNO', '2021-05-19', '8:00', 'Agendado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dadoscliente`
--

CREATE TABLE IF NOT EXISTS `tb_dadoscliente` (
  `cod_dadosC` int(11) DEFAULT NULL,
  `login_dadosC` varchar(60) NOT NULL,
  `nome_dadosC` varchar(120) NOT NULL,
  `telefone_dadosC` varchar(11) NOT NULL,
  `rg_dadosC` varchar(9) NOT NULL,
  `dt_nasc_dadosC` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_dadoscliente`
--

INSERT INTO `tb_dadoscliente` (`cod_dadosC`, `login_dadosC`, `nome_dadosC`, `telefone_dadosC`, `rg_dadosC`, `dt_nasc_dadosC`) VALUES
(1, 'felipe', 'Luiz ', '991337550', '123132132', '2021-04-27'),
(2, 'felipe@', 'Luiz Felipe', '33613538', 'desgraça2', '2021-05-04'),
(3, '@', 'caiqqqaaaa2', '223213132', 'dog mal s', '2021-04-27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `data_login` date NOT NULL,
  `nome_login` varchar(120) DEFAULT NULL,
  `email_login` varchar(60) DEFAULT NULL,
  `senha_login` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `data_login`, `nome_login`, `email_login`, `senha_login`) VALUES
(1, '2021-05-19', 'Luiz', 'Felipe', 'Peres'),
(2, '2021-05-19', 'Luiz Felipe', 'felipe@', 'felipe'),
(3, '2021-05-19', 'Luiz Felipe peres', '@', 'f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_notificacoes`
--

CREATE TABLE IF NOT EXISTS `tb_notificacoes` (
  `id_notifica` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_notifica` varchar(30) NOT NULL,
  `texto_notifica` varchar(60) NOT NULL,
  `data_notifica` date NOT NULL,
  `status_notifica` varchar(20) NOT NULL,
  PRIMARY KEY (`id_notifica`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_notificacoes`
--

INSERT INTO `tb_notificacoes` (`id_notifica`, `titulo_notifica`, `texto_notifica`, `data_notifica`, `status_notifica`) VALUES
(1, 'Cadastros', 'Houve 3 cadastros na data hoje.', '2021-05-19', 'Não visualizado'),
(2, 'Agendamentos', '6 agendamentos foram realizados hoje.', '2021-05-19', 'Não visualizado'),
(3, 'Agendamentos', '6 agendamentos foram realizados hoje.', '2021-05-19', 'Não visualizado'),
(4, 'Mensagens', 'Há uma nova mensagem na caixa de entrada.', '2021-05-19', 'Não visualizado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
