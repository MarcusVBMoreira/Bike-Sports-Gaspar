-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jul-2024 às 19:46
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

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
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_nascimento` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `CEP` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `saldo` decimal(38,2) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `CPF`, `email`, `senha`, `data_nascimento`, `telefone`, `CEP`, `estado`, `cidade`, `rua`, `bairro`, `numero`, `complemento`, `saldo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'teste', '', 'asddaasd', 'senha', '12-12-1230', '1239012390', '', '', '', '', '', '', '', NULL, '2024/06/17 19:07:34 America/Bahia\n2024/06/17 22:07:34 UTC', '2024/06/17 19:07:34 America/Bahia\n2024/06/17 22:07:34 UTC', '(2024/07/05 19:59:23 America/Bahia) - (2024/07/05 22:59:23 UTC)'),
(12, 'teste', '', 'outrousuario44@email.com', 'alsdkmalsdkm', '12389', '1203912038', '', '', '', '', '', '', '', NULL, '2024/06/17 19:20:24 America/Bahia\n2024/06/17 22:20:24 UTC', '(2024/07/05 16:59:08 America/Bahia) - (2024/07/05 19:59:08 UTC)', '(2024/07/05 19:59:43 America/Bahia) - (2024/07/05 22:59:43 UTC)'),
(13, 'teste', '', 'outrousuario2@email.com', 'senha', '12-12-1230', '1239012390', '', '', '', '', '', '', '', NULL, '(2024/06/17 19:24:18 America/Bahia) - (2024/06/17 22:24:18 UTC)', '(2024/06/17 19:24:18 America/Bahia) - (2024/06/17 22:24:18 UTC)', NULL),
(14, 'asd', '', 'asldkm@ala.com', 'senha generica sem segurança venha me roubar hackers', '10-12-2007', '10239110293', '', '', '', '', '', '', '', NULL, '(2024/06/17 21:54:16 America/Bahia) - (2024/06/18 00:54:16 UTC)', '(2024/06/17 21:54:16 America/Bahia) - (2024/06/18 00:54:16 UTC)', NULL),
(15, 'asd', '', 'asldkm@skibidisigma.com', 'senha generica sem segurança venha me roubar hackers', '10-12-2007', '10239110293', '', '', '', '', '', '', '', NULL, '(2024/06/17 21:55:01 America/Bahia) - (2024/06/18 00:55:01 UTC)', '(2024/06/17 21:55:01 America/Bahia) - (2024/06/18 00:55:01 UTC)', NULL),
(16, 'asd', '', 'asldkm@skibidisigma.combahia', 'senha generica sem segurança venha me roubar hackers', '10-12-2007', '10239110293', '', '', '', '', '', '', '', NULL, '(2024/07/05 20:03:48 America/Bahia) - (2024/07/05 23:03:48 UTC)', '(2024/07/05 20:03:48 America/Bahia) - (2024/07/05 23:03:48 UTC)', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `valor` decimal(38,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `expira` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `valor` float(10,2) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `quantidade` int(255) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `composicao` varchar(255) DEFAULT NULL,
  `compativel` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `dimensoes` varchar(50) DEFAULT NULL,
  `especificacoes` varchar(1000) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor`, `categoria`, `quantidade`, `cor`, `tipo`, `modelo`, `marca`, `composicao`, `compativel`, `peso`, `dimensoes`, `especificacoes`, `img1`, `img2`, `img3`, `img4`, `created_at`, `updated_at`, `deleted_at`) VALUES
(128, 'aro 20', 'asdasd', 10000.00, 'Aro 20', 3, '', 'Bicicletas', 'modelo teste', 'marca teste', '', 0, 10, '', 'especificações teste', 'download.jpeg', NULL, NULL, '', '', '', NULL),
(129, 'emailpatchasd@email.com', 'asdasdas', 10000.00, 'Cadeado', 4, '', 'Acessórios', 'asdasd', 'asdasd', '', 0, 10, '', 'qweqweqwe', 'bicicleta_aro_20_kog_quadro_vermelho_adesivo_branco_01.jpg', NULL, NULL, '', '', '', NULL),
(130, 'Bicicletinha de equilíbrio', 'aro29', 100.00, 'Bicicletinha de equilíbrio', 1, '', 'Bicicletas', 'aro29', 'asad', '', 0, 10, '', 'asdasd', '3.png', NULL, NULL, '', '', '', NULL),
(131, 'Cambio Traseiro Shimano TZ31 7v', 'O câmbio traseiro Shimano Tourney TZ31 foi desenvolvido para equipar bicicletas de 18 ou 21 velocidades, trazendo um ótimo custo benefício para Mountain Bike de entrada. Sua fabricação é feita totalmente em aço trás uma alta qualidade e durabilidade do produto.', 0.00, 'Cambio traseiro', 0, '', 'Componentes', '', '', '', 0, 0, '', 'Trocas de marchas precisas;\r\nCompatível com alavancas indexadas e não indexadas;​\r\nCompatível com: 6 e 7 Velocidades;​\r\nSistema: SIS INDEX – Polias com 12D;\r\nTamanho máximo de dentes da catraca: 28D;​\r\nCapacidade total do câmbio: 34D;\r\nDiferença máxima das coroas do pedivela: 20D;​\r\nFixação: Fixação diretamente na gancheira do quadro;', 'produto 1.jpg', NULL, NULL, '', '', '', NULL),
(132, 'prod api', '', 99999.99, '', 10, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '(2024/07/04 12:43:03 America/Bahia) - (2024/07/04 15:43:03 UTC)', '(2024/07/04 12:43:03 America/Bahia) - (2024/07/04 15:43:03 UTC)', NULL),
(133, 'prod api 2', '', 99999.99, '', 10, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '(2024/07/04 12:55:20 America/Bahia) - (2024/07/04 15:55:20 UTC)', '(2024/07/04 12:55:20 America/Bahia) - (2024/07/04 15:55:20 UTC)', NULL),
(134, 'teste', '', 12.12, '', 12, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '(2024/07/04 13:02:36 America/Bahia) - (2024/07/04 16:02:36 UTC)', '(2024/07/04 16:51:26 America/Bahia) - (2024/07/04 19:51:26 UTC)', NULL),
(135, 'prod api float', '', 123123.12, '', 10, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '(2024/07/17 13:43:35 America/Bahia) - (2024/07/17 16:43:35 UTC)', '(2024/07/17 13:43:35 America/Bahia) - (2024/07/17 16:43:35 UTC)', NULL),
(136, 'prod api float 2', '', 123123.12, '', 10, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '(2024/07/17 13:44:12 America/Bahia) - (2024/07/17 16:44:12 UTC)', '(2024/07/17 13:44:12 America/Bahia) - (2024/07/17 16:44:12 UTC)', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
