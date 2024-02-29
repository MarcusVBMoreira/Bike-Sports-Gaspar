-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/02/2024 às 01:13
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bike_sport_gaspar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `senha`, `data_nascimento`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `qnt_estoque` int(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `peso` double NOT NULL,
  `altura` double NOT NULL,
  `largura` double NOT NULL,
  `comprimento` double NOT NULL,
  `especificacoes` varchar(1000) NOT NULL,
  `tamanho_P` bit(1) NOT NULL,
  `tamanho_M` bit(1) NOT NULL,
  `tamanho_G` bit(1) NOT NULL,
  `tamnho_GG` bit(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `nome`, `descricao`, `valor`, `categoria`, `qnt_estoque`, `tipo`, `modelo`, `cor`, `marca`, `peso`, `altura`, `largura`, `comprimento`, `especificacoes`, `tamanho_P`, `tamanho_M`, `tamanho_G`, `tamnho_GG`, `img`) VALUES
(1, 'Bicicleta Seminova', 'produto de altíssima qualidade .....', 10000.00, 'montain bike', 1, 'bike', 'Specialized Diverge S-Works 2020', 'preta', 'marca:(...)', 10, 10, 10, 10, 'especificações: (...)', b'1', b'1', b'1', b'1', 'c6016b180583b6a8889d3a289eb8932b.png'),
(128, 'Tênis 2', 'asdasd', 10000.00, 'montain bike', 3, 'bike', 'modelo teste', 'preto', 'marca teste', 10, 11, 12, 13, 'especificações teste', b'1', b'1', b'1', b'1', '2.png'),
(129, 'tenis 3', 'asdasdas', 10000.00, 'montain bike', 4, 'bike', 'asdasd', 'asdasd', 'asdasd', 10, 10, 10, 10, 'qweqweqwe', b'1', b'1', b'1', b'1', '3.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
