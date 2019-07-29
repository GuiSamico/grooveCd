-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Jul-2019 às 17:09
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groovecd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Higor', 'higuin', 'e4062cb706430cc1c7e14ef1aaeea4ff'),
(2, 'Nathan', 'nathan', '9db74df32b6cc2ac52be584bf279972b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

DROP TABLE IF EXISTS `artista`;
CREATE TABLE IF NOT EXISTS `artista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cd`
--

DROP TABLE IF EXISTS `cd`;
CREATE TABLE IF NOT EXISTS `cd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artista` varchar(20) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `genero` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cd`
--

INSERT INTO `cd` (`id`, `artista`, `preco`, `genero`) VALUES
(6, 'Thiago Matheus', '10.00', 'Sertanejo'),
(7, 'Melim', '10.00', 'Romance'),
(8, 'Jorge e Mateus', '10.00', 'Sertanejo'),
(9, 'Legiao Urbana', '15.00', 'Rock'),
(10, 'Racionais Mc\'s', '15.00', 'Rap'),
(11, 'Ferrugem', '10.00', 'Pagode'),
(12, 'Alok', '15.00', 'Eletronica'),
(13, 'Delacruz', '10.00', 'Rap');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `cpf`, `telefone`, `login`, `senha`) VALUES
(2, 'Nathan', 'nathan@gmail.com', '154.878.878-78', '(84) 84548-4548', 'nathan', '9db74df32b6cc2ac52be584bf279972b'),
(13, 'Higor Medeiros', 'higor@gmail.com', '475.545.415-36', '(85) 47878-4564', 'higuin', 'e4062cb706430cc1c7e14ef1aaeea4ff');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formaPagamento` varchar(15) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `valorTotal` varchar(20) NOT NULL,
  `cpfCliente` varchar(15) NOT NULL,
  `tituloCd` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id`, `formaPagamento`, `endereco`, `valorTotal`, `cpfCliente`, `tituloCd`) VALUES
(2, 'boleto', 'Rua Alves de Lima', '10.00', '154.878.878-78', 'Thiago Matheus'),
(3, 'cartao', 'Rua Alves de Lima', '10.00', '154.878.878-78', 'Melim'),
(4, 'dinheiro', 'Rua Alves de Lima', '15.00', '154.878.878-78', 'Alok'),
(5, 'dinheiro', 'Rua Alves de Lima', '15.00', '154.878.878-78', 'Racionais Mc\'s'),
(6, 'cartao', 'Dona Mendina', '15.00', '154.878.878-78', 'Legiao Urbana'),
(7, 'dinheiro', 'Rua TomÃ¡s Gonzaga, 158', '15.00', '154.878.878-78', 'Alok'),
(12, 'dinheiro', 'Vicente Saboia', '10.00', '475.545.415-36', 'Jorge e Mateus'),
(11, 'dinheiro', 'Vicente Saboia', '15.00', '475.545.415-36', 'Alok');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

DROP TABLE IF EXISTS `musica`;
CREATE TABLE IF NOT EXISTS `musica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cd` varchar(30) NOT NULL,
  `artista` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
