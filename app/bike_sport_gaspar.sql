-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Maio-2024 às 23:31
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
  `sobrenome` varchar(255) NOT NULL,
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
  `complemento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `CPF`, `sobrenome`, `email`, `senha`, `data_nascimento`, `telefone`, `CEP`, `estado`, `cidade`, `rua`, `bairro`, `numero`, `complemento`) VALUES
(1, 'asd', '0', '0', 'asd', 'asd', '0000-00-00', '0', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(2, 'Teste de seguranca', '123455', 'num1', 'abc@a.com', '$2y$10$PGyXIShpk7z/q0vVDq.QGODiMl0LEhzqiF.zl.ezxBpxoWbfEnr8K', '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'kladmklasdkasl', '123123', 'masdklasdmkldmk', '1klmasdmkl@lmkasd.com', '$2y$10$YeN4J.gND5FXoGB0doUGmOJ6yAN0lCWzR59H9V2SgS9mS3GSrWfWm', '0000-00-00', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Michel', '1029312', 'sobrenome', 'michel@email.com', 'dasmldasmkl', '0000-00-00', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'alsdkm', '930192', 'sobrenomesdal', 'alsdkm@alsdkm>com', 'testenhakjn123', '0000-00-00', '12039', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'alsdkm', '9301929', 'sobrenomesdal', 'alsdkm@alsdkm.com', 'testenhakjn123', '0000-00-00', '12039', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo` int(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `valor` decimal(7,2) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `qnt_estoque` int(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `composicao` varchar(255) DEFAULT NULL,
  `compativel` varchar(255) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `largura` double DEFAULT NULL,
  `comprimento` double DEFAULT NULL,
  `especificacoes` varchar(1000) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) NOT NULL,
  `cor1` varchar(255) DEFAULT NULL,
  `qnt_cor1` int(11) NOT NULL,
  `tamanho_cor1` varchar(255) DEFAULT NULL,
  `qnt_cor1_P` varchar(255) DEFAULT NULL,
  `qnt_cor1_M` varchar(255) DEFAULT NULL,
  `qnt_cor1_G` varchar(255) DEFAULT NULL,
  `qnt_cor1_GG` varchar(255) DEFAULT NULL,
  `cor2` varchar(255) DEFAULT NULL,
  `qnt_cor2` int(11) NOT NULL,
  `tamanho_cor2` varchar(255) DEFAULT NULL,
  `qnt_cor2_P` varchar(255) DEFAULT NULL,
  `qnt_cor2_M` varchar(255) DEFAULT NULL,
  `qnt_cor2_G` varchar(255) DEFAULT NULL,
  `qnt_cor2_GG` varchar(255) DEFAULT NULL,
  `cor3` varchar(255) DEFAULT NULL,
  `qnt_cor3` int(11) NOT NULL,
  `tamanho_cor3` varchar(255) DEFAULT NULL,
  `qnt_cor3_P` varchar(255) DEFAULT NULL,
  `qnt_cor3_M` varchar(255) DEFAULT NULL,
  `qnt_cor3_G` varchar(255) DEFAULT NULL,
  `qnt_cor3_GG` varchar(255) DEFAULT NULL,
  `cor4` varchar(255) DEFAULT NULL,
  `qnt_cor4` int(11) NOT NULL,
  `tamanho_cor4` varchar(255) DEFAULT NULL,
  `qnt_cor4_P` varchar(255) DEFAULT NULL,
  `qnt_cor4_M` varchar(255) DEFAULT NULL,
  `qnt_cor4_G` varchar(255) DEFAULT NULL,
  `qnt_cor4_GG` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `nome`, `descricao`, `valor`, `categoria`, `qnt_estoque`, `tipo`, `modelo`, `marca`, `composicao`, `compativel`, `peso`, `altura`, `largura`, `comprimento`, `especificacoes`, `img1`, `img2`, `img3`, `img4`, `cor1`, `qnt_cor1`, `tamanho_cor1`, `qnt_cor1_P`, `qnt_cor1_M`, `qnt_cor1_G`, `qnt_cor1_GG`, `cor2`, `qnt_cor2`, `tamanho_cor2`, `qnt_cor2_P`, `qnt_cor2_M`, `qnt_cor2_G`, `qnt_cor2_GG`, `cor3`, `qnt_cor3`, `tamanho_cor3`, `qnt_cor3_P`, `qnt_cor3_M`, `qnt_cor3_G`, `qnt_cor3_GG`, `cor4`, `qnt_cor4`, `tamanho_cor4`, `qnt_cor4_P`, `qnt_cor4_M`, `qnt_cor4_G`, `qnt_cor4_GG`) VALUES
(1, 'Bicicleta Seminova aro 29', 'Uma bicicleta seminova aro 29 é um tipo de bicicleta que possui rodas com um diâmetro de 29 polegadas, tornando-a adequada para diversos tipos de terrenos, desde trilhas off-road até passeios urbanos. Essas bicicletas são conhecidas por oferecerem uma boa estabilidade e conforto ao pedalar, além de uma maior capacidade de enfrentar obstáculos no terreno devido ao tamanho maior das rodas.\r\n\r\nGeralmente, uma bicicleta seminova significa que ela foi usada por algum tempo, mas ainda está em boas condições de funcionamento. Pode apresentar alguns sinais de desgaste ou uso, mas nada que comprometa sua performance. Dependendo do modelo e da manutenção que recebeu, uma bicicleta seminova pode oferecer um ótimo custo-benefício para quem procura uma alternativa mais acessível em comparação com uma bicicleta totalmente nova.\r\n\r\nAs bicicletas aro 29 são populares entre ciclistas de diferentes níveis de habilidade devido à sua versatilidade e capacidade de adaptação a diferentes tipos de terreno. Elas podem ser utilizadas tanto para atividades recreativas quanto para deslocamentos diários, proporcionando uma experiência de pedalada confortável e eficiente.', 10000.00, 'Aro 29', 1, 'Bicicletas', 'Specialized Diverge S-Works 2020', 'marca:(...)', '', '', 10, 10, 10, 10, 'especificações: (...)', 'c6016b180583b6a8889d3a289eb8932b.png', '2.png', '3.png', '', 'preto', 2, NULL, '1', NULL, NULL, '1', 'cinza', 0, NULL, NULL, NULL, NULL, NULL, 'azul', 2, NULL, NULL, '1', '1', NULL, '', 0, NULL, NULL, NULL, NULL, NULL),
(128, 'aro 20', 'asdasd', 10000.00, 'Aro 20', 3, 'Bicicletas', 'modelo teste', 'marca teste', '', '', 10, 11, 12, 13, 'especificações teste', '2.png', NULL, NULL, '', 'preto', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL),
(129, 'Cadeado', 'asdasdas', 10000.00, 'Cadeado', 4, 'Acessórios', 'asdasd', 'asdasd', '', '', 10, 10, 10, 10, 'qweqweqwe', '3.png', NULL, NULL, '', 'preto', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL),
(130, 'Bicicletinha de equilíbrio', 'aro29', 100.00, 'Bicicletinha de equilíbrio', 1, 'Bicicletas', 'aro29', 'asad', '', '', 10, 10, 10, 10, 'asdasd', '3.png', NULL, NULL, '', '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL),
(131, 'Cambio Traseiro Shimano TZ31 7v', 'O câmbio traseiro Shimano Tourney TZ31 foi desenvolvido para equipar bicicletas de 18 ou 21 velocidades, trazendo um ótimo custo benefício para Mountain Bike de entrada. Sua fabricação é feita totalmente em aço trás uma alta qualidade e durabilidade do produto.', 0.00, 'Cambio traseiro', 0, 'Componentes', '', '', '', '', 0, 0, 0, 0, 'Trocas de marchas precisas;\r\nCompatível com alavancas indexadas e não indexadas;​\r\nCompatível com: 6 e 7 Velocidades;​\r\nSistema: SIS INDEX – Polias com 12D;\r\nTamanho máximo de dentes da catraca: 28D;​\r\nCapacidade total do câmbio: 34D;\r\nDiferença máxima das coroas do pedivela: 20D;​\r\nFixação: Fixação diretamente na gancheira do quadro;', 'produto 1.jpg', NULL, NULL, '', '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
