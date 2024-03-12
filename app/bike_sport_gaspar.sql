-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/03/2024 às 21:32
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

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
  `descricao` longtext NOT NULL,
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
  `tamanho_GG` bit(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `nome`, `descricao`, `valor`, `categoria`, `qnt_estoque`, `tipo`, `modelo`, `cor`, `marca`, `peso`, `altura`, `largura`, `comprimento`, `especificacoes`, `tamanho_P`, `tamanho_M`, `tamanho_G`, `tamanho_GG`, `img`) VALUES
(1, 'Bicicleta Seminova', 'Ei você, sim, você... aquele com a balança vendo qual dos seis pneus idênticos na prateleira é o mais leve. Claro, alguns podem chamá-lo de um pouco obsessivo, mas não se preocupe, aqui a S-Works Epic LTD fala exatamente a mesma língua. Inúmeras horas de projeto, intermináveis voltas de teste, terabytes de dados de telemetria – tudo isso para garantir que não restasse um único grama de velocidade na mesa.\r\n\r\nCombinando eficiência hardtail e capacidade de suspensão total com resultados impressionantemente rápidos, a S-Works Epic LTD sempre foi definida pelo compromisso obsessivo com a velocidade. Bem, isso e mais de 100 vitórias e pódios em Copas do Mundo também.\r\n\r\nUm CÉREBRO MAIS INTELIGENTE\r\n\r\nFiel à sua forma, a mais recente Epic continua a tradição, aproveitando a suspensão BRAIN mais eficiente que já criamos para garantir que seja sempre rápida e pelo primeiro nome.\r\n\r\nReprojetado de mãos dadas com o novo Epic, o mais recente design BRAIN redefine a expectativa de eficiência, empregando uma nova plataforma de pedalada ajustada para corrida para garantir que cada watt possível seja traduzido em movimento para frente, enquanto absorve com facilidade as vibrações que matam o impulso. e grandes sucessos - tudo mais suavemente do que nunca.\r\n\r\nTrocador de quadros\r\n\r\nRedesenhado com foco na transferência eficiente de potência e melhor desempenho de manuseio, o quadro S-Works Epic LTD apresenta um triângulo traseiro 15% mais rígido para aproveitar ao máximo a nova plataforma de pedalada do BRAIN, ajustada para corrida. Um cronograma de disposição dedicado e o uso de nosso carbono FACT 12m de última geração levam a economia de peso ainda um passo além de seus companheiros estáveis, enquanto a pièce de résistance vem na forma de um elo de choque de fibra de carbono, combinado para raspar um total de mais de 100 gramas do quadro S-works da geração anterior - não é uma tarefa fácil, lembre-se.\r\n\r\nCombinando perfeitamente com o amortecedor traseiro Brain para o desempenho de suspensão mais equilibrado em uma Epic até agora, o garfo Brain sensível à posição da S-Works se beneficia do chassi SID SL Ultimate esbelto e rígido da RockShox, melhorando a rigidez frontal e a precisão de manuseio enquanto mantendo os gramas sob controle.\r\n\r\nO carro-chefe do grupo XX Eagle AXS da SRAM certamente se encaixa no projeto quando apenas o melhor serve, despachando turnos com autoridade eletrônica enquanto encarregamos Roval de criar um aro Control SL inteiramente novo que não seria apenas capaz de ir de igual para igual com o A nova velocidade e desempenho de manuseio da Epic, mas também adiciona um pouco à mistura.\r\n\r\n- Se a velocidade falasse, ela se apresentaria como o novo quadro S-Works Epic. Oferecendo 100 milímetros de deslocamento brilhantemente eficiente controlado pelo cérebro, o S-Work Epic aumenta a rigidez do triângulo traseiro para uma transferência de potência incomparável, enquanto o uso de carbono FACT 12m, uma disposição dedicada e um link de choque totalmente em carbono também o tornam o mais leve. quadro de suspensão que já criamos, ao mesmo tempo que oferece o manuseio mais capaz em uma Epic até agora. Prazer em conhecê-lo, rápido.\r\n- Combinando 100 milímetros do curso mais eficiente do planeta com o chassi SID SL Ultimate esbelto e rígido da RockShox, o garfo RockShox SID SL Ultimate BRAIN serve como o auge da perfeição da suspensão de corrida XC.\r\n- O XX Eagle AXS da SRAM não é apenas o grupo eletrônico de MTB mais leve do mercado, ele também foi projetado para suportar cargas de corrente vencedoras da Copa do Mundo enquanto faz mudanças instantâneas para garantir que você nunca seja pego com o pé atrás.\r\n- Criado especificamente para corresponder às capacidades aumentadas da Epic, o aro Roval Control SL apresenta um perfil de aro offset completamente novo que apresenta uma largura interna de 29 milímetros de largura e não apenas aumenta a resistência e reduz o peso, mas também melhora a resistência ao esmagamento. 22 por cento.', 10000.00, 'montain bike', 1, 'bike', 'Specialized Diverge S-Works 2020', 'preta', 'marca:(...)', 10, 10, 10, 10, 'especificações: (...)', b'1', b'1', b'1', b'1', 'c6016b180583b6a8889d3a289eb8932b.png'),
(128, 'Tênis 2', 'asdasd', 10000.00, 'montain bike', 3, 'bike', 'modelo teste', 'preto', 'marca teste', 10, 11, 12, 13, 'especificações teste', b'1', b'1', b'1', b'1', '2.png'),
(129, 'tenis 3', 'asdasdas', 10000.00, 'montain bike', 4, 'bike', 'asdasd', 'asdasd', 'asdasd', 10, 10, 10, 10, 'qweqweqwe', b'1', b'1', b'1', b'1', '3.png'),
(130, 'aro29', 'aro29', 100.00, 'aro29', 1, 'bike', 'aro29', 'preta', 'asad', 10, 10, 10, 10, 'asdasd', b'1', b'1', b'1', b'1', '3.png');

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
  MODIFY `codigo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
