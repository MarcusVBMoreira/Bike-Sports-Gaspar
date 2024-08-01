-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Ago-2024 às 03:54
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
(16, 'asd', '', 'asldkm@skibidisigma.combahia', 'senha generica sem segurança venha me roubar hackers', '10-12-2007', '10239110293', '', '', '', '', '', '', '', NULL, '(2024/07/05 20:03:48 America/Bahia) - (2024/07/05 23:03:48 UTC)', '(2024/07/05 20:03:48 America/Bahia) - (2024/07/05 23:03:48 UTC)', NULL),
(18, 'Miguel', '', 'user_bsg@a.com', '$2y$10$IP/aSeD3gmEah7Zf1uDnEOimMzsYh.EsI9eOMhwfXDabC/cn5LKEa', '', '(11)93021-2781', '', '', '', '', '', '', '', NULL, '(2024/07/31 18:36:46 America/Bahia) - (2024/07/31 21:36:46 UTC)', '(2024/07/31 18:36:46 America/Bahia) - (2024/07/31 21:36:46 UTC)', NULL),
(19, 'Miguel', '', 'user_bsg@aa.com', '$2y$10$mMRrN8.mgYEBO/uEikLjjeGNQjUBQ.xsBFq4qIX/vuwmIG6Eeph/u', '', '(11)93021-2781', '', '', '', '', '', '', '', NULL, '(2024/07/31 18:50:26 America/Bahia) - (2024/07/31 21:50:26 UTC)', '(2024/07/31 18:50:26 America/Bahia) - (2024/07/31 21:50:26 UTC)', NULL),
(20, 'Miguel', '', 'user_bsg@2.com', '$2y$10$T0mKG26H3V3xhPPHZHQVme8QWbq2PYjGcM9StSw4SrIRNrsBtGZ5m', '', '(11)93021-2781', '', '', '', '', '', '', '', NULL, '(2024/07/31 19:24:28 America/Bahia) - (2024/07/31 22:24:28 UTC)', '(2024/07/31 19:24:28 America/Bahia) - (2024/07/31 22:24:28 UTC)', NULL);

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
  `especificacoes` longtext DEFAULT NULL,
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
(139, 'Selim Ddk D-245 P/ Bmx Dirt Dh Wheeling Similar Ao Ddk 243', 'O selim DDK D-245 DJ é bastante usado no BMX, Dirt Jump,Freestyle e Wheeling Bike. Este modelo é revestido com um material sintético que dificulta a penetração de água em dias de chuva, possui ótimo acabamento com costuras bem reforçadas sendo um boa opção para quem busca mais performance sem perder o estilo da bike. Dispomos para pronta entrega e o preço se refere a 1 unidade.', 154.99, 'SELIM', 20, 'Preto', 'COMPONENTES', 'D-245', 'DDK', '', 0, 500, '15x12x10', '<br> - ATENÇÃO: Este modelo D-245 possui um forro e bico mais estreitos em comparação com o modelo D-243 Fofão, a diferença é de aproxidamente 5mm. O modelo 243 também possui uma etiqueta DDK na lateral e o DDK-245 não possui. Ambos possuem a mesma construção e utilizam os mesmos materiais. <br> - Não acompanha carrinho para fixação. <br>- Indicação: BMX, DIRT JUMP, FREESTYLE e WHEELING BIKE. Apropriado para manobras radicais e de impacto. <br>- Revestimento resistente a impactos e a água. <br>- Espuma de alta qualidade. <br>', 'selimddk1.jpeg', 'selimddk2.jpeg', 'selimddk3.jpeg', 'selimddk4.jpeg', '(2024/07/31 17:09:29 America/Bahia) - (2024/07/31 20:09:29 UTC)', '(2024/07/31 17:09:29 America/Bahia) - (2024/07/31 20:09:29 UTC)', NULL),
(140, 'Pato Brother Catavento Bike Patinho Moto Mtb Ciclismo Cor Amarelo', 'Pato Brother feito de borracha, acompanha óculos corrente e suporte para guidão ou carro. <br> Antes de finalizar a compra peça uma foto do seu patinho.', 14.50, 'SUPORTE PARA BIKE', 0, 'Vários', 'ACESSORIOS', '', '', '', 0, 30, '5x5x5', '', 'cataventopato1.jpeg', 'cataventopato2.jpeg', 'cataventopato3.jpeg', 'cataventopato4.jpeg', '(2024/07/31 17:45:42 America/Bahia) - (2024/07/31 20:45:42 UTC)', '(2024/07/31 17:45:42 America/Bahia) - (2024/07/31 20:45:42 UTC)', NULL),
(141, 'Banco Selim Ddk 243 Dirt Jump Bmx Cross Freeride Downhill\n\n', 'Selim da marca DDK, modelo 243 Dirt Jump, na cor preta. Estofamento altamente durável e confortável. Com ótimo acabamento e resistência, este selim oferece excelente custo-benefício aos praticantes do Downhill, BMX e Free Ride.', 148.99, 'SELIM', 0, 'Preto', 'COMPONENTES', '243 Dirt Jump', 'DDK', '', 0, 500, '12x15x18', '- Para ser usado em BMX, Downhill e Freeride\n<br> - Selim BMX Manobras', 'selimpreto-1.jpeg', 'selimpreto-2.jpeg', 'selimpreto-3.jpeg', 'selimpreto-4.jpeg', '(2024/07/31 17:57:48 America/Bahia) - (2024/07/31 20:57:48 UTC)', '(2024/07/31 17:57:48 America/Bahia) - (2024/07/31 20:57:48 UTC)', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
