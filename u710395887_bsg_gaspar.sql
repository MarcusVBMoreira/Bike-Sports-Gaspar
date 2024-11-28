-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Nov-2024 às 21:01
-- Versão do servidor: 10.11.10-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u710395887_bsg_gaspar`
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
  `video` varchar(255) NOT NULL,
  `imgs` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor`, `categoria`, `quantidade`, `cor`, `tipo`, `modelo`, `marca`, `composicao`, `compativel`, `peso`, `dimensoes`, `especificacoes`, `video`, `imgs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(139, 'Selim Ddk D-245 P/ Bmx Dirt Dh Wheeling Similar Ao Ddk 243', 'O selim DDK D-245 DJ é bastante usado no BMX, Dirt Jump,Freestyle e Wheeling Bike. Este modelo é revestido com um material sintético que dificulta a penetração de água em dias de chuva, possui ótimo acabamento com costuras bem reforçadas sendo um boa opção para quem busca mais performance sem perder o estilo da bike. Dispomos para pronta entrega e o preço se refere a 1 unidade.', 154.99, 'Selim', 0, 'Preto', 'COMPONENTES', 'D-245', 'DDK', 'Alumínio ', 0, 500, '15x12x10', '<br> - ATENÇÃO: Este modelo D-245 possui um forro e bico mais estreitos em comparação com o modelo D-243 Fofão, a diferença é de aproxidamente 5mm. O modelo 243 também possui uma etiqueta DDK na lateral e o DDK-245 não possui. Ambos possuem a mesma construção e utilizam os mesmos materiais. <br> - Não acompanha carrinho para fixação. <br>- Indicação: BMX, DIRT JUMP, FREESTYLE e WHEELING BIKE. Apropriado para manobras radicais e de impacto. <br>- Revestimento resistente a impactos e a água. <br>- Espuma de alta qualidade. <br>', '', '|DDK 245 FRENTE.png|DDK 245 FUNDO.jpg|DDK 245 LADO.png', '(2024/07/31 17:09:29 America/Bahia) - (2024/07/31 20:09:29 UTC)', '(2024/10/24 19:41:33 America/Bahia) - (2024/10/24 22:41:33 UTC)', NULL),
(141, 'Banco Selim Ddk 243 Dirt Jump Bmx Cross Freeride Downhill', 'Selim da marca DDK, modelo 243 Dirt Jump, na cor preta. Estofamento altamente durável e confortável. Com ótimo acabamento e resistência, este selim oferece excelente custo-benefício aos praticantes do Downhill, BMX e Free Ride.', 148.99, 'Selim', 0, 'Preto', 'COMPONENTES', '243 Dirt Jump', 'DDK', '', 0, 500, '12x15x18', '- Para ser usado em BMX, Downhill e Freeride<br> - Selim BMX Manobras', '', '|WhatsApp Image 2023-11-08 at 15.20.44.jpeg|WhatsApp Image 2023-11-08 at 15.20.44 (1).jpeg|WhatsApp Image 2023-11-08 at 15.20.44 (2).jpeg|WhatsApp Image 2023-11-08 at 15.20.45.jpeg', '(2024/07/31 17:57:48 America/Bahia) - (2024/07/31 20:57:48 UTC)', '(2024/10/24 19:41:54 America/Bahia) - (2024/10/24 22:41:54 UTC)', NULL),
(145, 'Guidão Absolute Prime EX 31.8 x 780mm 9° Grau ', '     \r\n\r\n  GUIDÃO MTB RETO 31.8 ALUM. ABSOLUTE PRIME EX PRETO\r\n                                                  31.8 X 780MM \r\n\r\n\r\nMaterial : Alumínio\r\nMedida : 31.8mm \r\nComprimento : 780mm\r\nEnvergadura : 9º\r\nPeso : Peso: 335g ', 127.00, 'Guidão', 0, '', 'COMPONENTES', 'Prime Ex', 'Absolute', 'Alumínio ', 0, 335, '780 mm x9 grau x2 cm ', '', '', '|guidao ex prime.jpg|guidao ex prime 2.jpg', '(2024/08/20 18:02:05 America/Bahia) - (2024/08/20 21:02:05 UTC)', '(2024/10/24 19:40:17 America/Bahia) - (2024/10/24 22:40:17 UTC)', NULL),
(147, 'Meia  Oggi  Braco  Tamanho ', '                                                    Descrição\r\n\r\nAs meias de ciclismo da marca OGGI Bikes combinam estilo e desempenho para proporcionar uma experiência de pedal excepcional. Projetadas com atenção aos detalhes e fabricadas com materiais de alta qualidade, essas meias foram desenvolvidas para atender às necessidades específicas dos ciclistas.\r\n\r\nConfeccionadas com tecidos técnicos, as meias proporcionam excelente respirabilidade e gerenciamento de umidade. Isso mantém os pés secos e confortáveis, mesmo durante pedaladas intensas. Além disso, a composição dos materiais ajuda a prevenir o acúmulo de suor e a formação de bolhas, garantindo uma experiência de uso mais agradável.\r\n\r\nDuráveis e resistentes, as meias OGGI Bikes foram projetadas para enfrentar os desafios do ciclismo, garantindo uma longa vida útil. Seja para pedaladas curtas ou longas jornadas, essas meias são a escolha ideal para ciclistas que valorizam a qualidade, o conforto e o estilo em suas aventuras sobre duas rodas.\r\n\r\nCaracterísticas:\r\nCano médio: 17cm\r\nVestem do 38 ao 43\r\n\r\nComposição:\r\nPoliamida: 88%\r\nElastano: 02%\r\nElastodiano: 10%', 19.00, 'Meias', 0, 'branco', 'VESTUARIO', 'Ciclismo ', 'Oggi ', 'Poliamida', 0, 200, 'x17 cmx', '', '', '|todas.jpg|Vermelho.jpg|verde.jpg|amarelo.jpg|azul celeste oggi.jpg|azul marinho.jpg|branco.jpg|laranja.jpg|roxo.jpg|tabela.png', '(2024/08/22 18:08:42 America/Bahia) - (2024/08/22 21:08:42 UTC)', '(2024/10/24 19:43:12 America/Bahia) - (2024/10/24 22:43:12 UTC)', NULL),
(148, 'Meia Skin Cano Longo ', '                                                  Descrição\r\n\r\n\r\nAs meias de ciclismo da marca SKIN Bikes combinam estilo e desempenho para proporcionar uma experiência de pedal excepcional. Projetadas com atenção aos detalhes e fabricadas com materiais de alta qualidade, essas meias foram desenvolvidas para atender às necessidades específicas dos ciclistas.\r\n\r\nConfeccionadas com tecidos técnicos, as meias proporcionam excelente respirabilidade e gerenciamento de umidade. Isso mantém os pés secos e confortáveis, mesmo durante pedaladas intensas. Além disso, a composição dos materiais ajuda a prevenir o acúmulo de suor e a formação de bolhas, garantindo uma experiência de uso mais agradável.\r\n\r\nCaracterísticas:\r\nCano médio: 17cm\r\nVestem do 38 ao 43\r\n\r\n', 19.00, 'Meias', 0, 'branco', 'VESTUARIO', 'Ciclismo ', 'SKIN ', 'Poliamida', 0, 200, '15x17 cmx15', 'Meia Skin Cano Longo ', 'todos skin.jpg', '|skin laranja.jpg|skin branco.jpg|skin azul marinho.JPG|skin preto.jpg|skin rosa.jpg|skin vermelho.jpg|tabela.png', '(2024/08/22 18:21:21 America/Bahia) - (2024/08/22 21:21:21 UTC)', '(2024/10/24 19:21:13 America/Bahia) - (2024/10/24 22:21:13 UTC)', NULL),
(157, 'Guidão Alfameq Enduro 31.8mm 720mm ', 'Guidão Alfameq em alumínio 6061, diâmetro de 31.8mm, curvo com 30mm de elevação, comprimento de 720mm.\r\n\r\n• Fabricado em alumínio | Não enferruja | Maior resistência e durabilidade;• Marca conceituada, ALFAMEQ referência em qualidade;• Possui o formato curvo, com aproximadamente 30mm de elevação;• Proporciona melhor controle e estabilidade na pilotagem graças a seu comprimento.', 39.00, 'Guidão', 0, '', 'COMPONENTES', 'Enduro ', 'Alfameq', 'Alumínio ', 0, 380, '720 mmx12x12', 'Guidão Alfameq Enduro', '', 'alfameq 1.jpg|WhatsApp Image 2024-08-28 at 14.53.12.jpeg|mesa gios 1.jpg', '(2024/09/11 17:15:26 America/Bahia) - (2024/09/11 20:15:26 UTC)', '(2024/10/25 10:16:56 America/Bahia) - (2024/10/25 13:16:56 UTC)', NULL),
(158, 'Selim Gios GI1109 ', 'O modelo de selim Gios GI-1109-1 é uma excelente opção para quem busca conforto nas manobras, mais utilizado nas modalidades  BMX, Wheeling, Dirt, Freeride, DH, XC e MTB  -\r\n\r\n Modelo: GI-1109,- Marca: GIOSBR - Material: Courvin e Espuma - Trilho Aço de 14mm (Reforçado) - Costura resistente - Tecido em couro sintético - Courvin - \r\n\r\nLargura Aproximada: 15cm - Comprimento aproximado: 22 cm - \r\nIndicações:| BMX | FREERIDE | WHELLING | DIRT | FREE - Peso Aproximado: 312 gramas. - NÃO acompanha castanha (carrinho de selim) - Compatível com canotes de carrinho integrado e também com castanhas avulsas (carrinho de selim).', 69.00, 'Selim', 0, 'PRETO', 'COMPONENTES', 'GI1109 ', 'Gios ', 'Curvim ', 0, 312, '15x20x20', 'Selim Gios ', '', 'selim gios 1.jpg|selim hios 2.jpg', '(2024/09/11 17:57:33 America/Bahia) - (2024/09/11 20:57:33 UTC)', '(2024/10/24 19:43:41 America/Bahia) - (2024/10/24 22:43:41 UTC)', NULL),
(159, 'Cubo Absolute Prime 36 Furos ', 'Cubo Prime Absolute 6 Pawls Colorido - Lançamento no mercado!!!\r\n\r\nTraseiro:\r\n\r\nPara eixo 9x135mm QR (com blocagem) ou 12x142mm (acompanha ponteiras)\r\nCorpo em alumínio usinado em CNC\r\nSistema com 6 engates (6 pawl)\r\nFreehub padrão Shimano HG\r\nCompatível com freehubs SRAM XD e Shimano Microspline (vendidos a parte)\r\n4 Rolamentos\r\nPara discos de 6 furos\r\n\r\nDianteiro:\r\n\r\nPara eixo de 9x100mm QR (com blocagem) ou 15x100mm (acompanha ponteiras)\r\nCorpo em alumínio usinado em CNC\r\n2 Rolamentos\r\nPara discos de 6 Furos', 499.00, 'Cubos', 0, '', 'COMPONENTES', 'Prime 36 Furos ', 'ABSOLUTE ', 'Alumínio ', 0, 0, 'xx', 'Cubo Absolute Prime ', '', 'CUBO PRIME 5.jpg|CUBO PRIME 4.jpg|CUBO PRIME 3.jpg|CUBO PRIME 2.jpg|CUBO PRIME 1.png', '(2024/09/11 18:49:49 America/Bahia) - (2024/09/11 21:49:49 UTC)', '(2024/10/24 19:44:04 America/Bahia) - (2024/10/24 22:44:04 UTC)', NULL),
(161, 'Quadro Absolute Brutos 26', 'O quadro de bike Absolute Brutus aro 26 foi desenvolvido para as modalidades Freeride, Downhill, Pumptrack, Dirt Jump ou até mesmo para passear pela cidade com estilo. Sua geometria foi totalmente reformulada visando proporcionar agilidade, velocidade e controle em trilhas extremas, estradas de chão, asfalto, saltos e nos mais diversificados tipos de terreno.\r\n\r\nFabricado em alumínio 6061 T6, o quadro ficou com a traseira ainda menor com apenas 400mm que facilita levantar a frente da bike ou puxar manual. O reach (alcance) de 420mm permite uma posição ideal para saltos, jump e manobras quando utiliadas mesas mais curtas. Sua caixa de 69 proporciona segurança, agilidade e estabilidade com garfos 100mm, onde esse número diminui bastante quando usados garfos com cursos maiores em situações mais extremas.\r\n\r\nO quadro foi testado e aprovado pelo atual campeão brasileiro de Downhill Wallace Miranda, que possui mais de 20 anos de experiência na modalidade.\r\n\r\nA marca Absolute entrou no mercado de ciclismo com a intenção de revolucionar o segmento de bicicletas, peças e acessórios para iniciantes, amadores e profissionais oferecendo os mais diversificados produtos com qualidade e preços acessíveis. Sua ideologia é custo x benefício sendo uma das marcas que mais crescem no Brasil. Sua gama de produtos é tão grande que é possível montar uma bicicleta 99% Absolute.\r\n\r\nCaracterísticas:\r\n- Marca: Absolute;\r\n- Modelo: Brutus;\r\n- Material: Alumínio 6061 T6 com dupla espessura;\r\n- Peso aproximado: 2200 gramas;\r\n- Tamanho: Único 13”;\r\n- Caixa de Direção: 44 / 44mm;\r\n- Suspensão Garfo: Espiga reta 1-1/8” (suporta de 100mm a 150mm);\r\n- Eixo traseiro: padrão 135x9mm;\r\n- Movimento Central: 34.5mm e BSA;\r\n- Câmbio dianteiro: Puxada por cima (31.8mm);\r\n- Suporte de freio: a disco padrão IS;\r\n- Canote: 27.2mm e abraçadeira 31.8mm;\r\n- Rodas: Aro 26 com pneus de até 26x2.40;\r\n- Sistema de elevação que evita a queda da corrente\r\n- Acompanha gancheira sendo apenas para uso de câmbio traseiro \r\n\r\n\r\n', 749.00, 'Quadros', 0, 'VERDE', 'COMPONENTES', 'Brutos ', 'Absolute', 'Alumínio ', 0, 1.8, 'xx', 'Quadro Absolute Brutos 26', '', 'qyadro brutos.jpg|brutos 5-Photoroom.png|brutos 4-Photoroom.png', '(2024/09/11 19:13:32 America/Bahia) - (2024/09/11 22:13:32 UTC)', '(2024/10/24 19:45:59 America/Bahia) - (2024/10/24 22:45:59 UTC)', NULL),
(171, 'CÂMARA  DE AR 29', '                                              Descrição\r\n\r\n\r\nCâmara de Ar para Bicicleta Aro 29X1.95/2.125 Bico Grosso 48mm\r\n\r\nA Câmara de Ar Paco para Bicicletas Aro 29 é feita com Borracha Butyl, garantindo maior duração e impermeabilidade. Possui boas propriedades de flexão, resistência ao calor, ao envelhecimento provocado pela intempérie, a produtos químicos, gorduras e a substâncias fortemente oxidantes.\r\n\r\nEspecificações Técnicas:\r\nMarca: Paco\r\nModelo: Câmara de Ar Aro 29\r\nVálvula: Bico Grosso (Schrader/ Americana)\r\n48MM\r\nMaterial: Borracha Butyl\r\nMedida: 29X1.95/2.125\r\nPeso Aproximado: 286g', 19.00, 'Câmeras', 0, 'PRETO', 'ACESSORIOS', 'ARO 29', 'VELOFORCE', 'BORRACHA', 0, 286, '15x15x15', 'CÂMARA  DE AR 29', 'CAMARA 29.webp', 'CAMARA 29 2.webp', '(2024/10/11 13:18:24 America/Bahia) - (2024/10/11 16:18:24 UTC)', '(2024/10/24 19:46:46 America/Bahia) - (2024/10/24 22:46:46 UTC)', NULL),
(172, 'CÂMBIO DIANTEIRO YAMADA PUXA P/ BAIXO ', '                      \r\n\r\n\r\nSegurança e Qualidade é o sinônimo da Yamada\r\nCâmbio de Transmissão para Bicicleta de 18 ou 21 Marchas.\r\nCompatíveis com quadros de aço ou alumínio.\r\n\r\nDianteiro 3v: Puxa por Baixo (Abraçadeira 28,6mm)\r\nMarca: Yamada\r\nCor: Preto\r\n\r\n', 24.00, 'Câmbio dianteiro', 0, 'PRETO', 'COMPONENTES', 'Q25', 'YAMADA ', 'AÇO', 0, 220, '20x15x15', 'CÂMBIO DIANTEIRO YAMADA PUXA P/ BAIXO ', '', 'CAMBIO YAMADA BAIXO.webp|YAMADA CIMA 1.webp|YAMADA CIMA 2.webp|YAMADA 3.webp|YAMADA 4.webp|YAMADA 5.webp', '(2024/10/11 13:31:31 America/Bahia) - (2024/10/11 16:31:31 UTC)', '(2024/10/24 19:46:59 America/Bahia) - (2024/10/24 22:46:59 UTC)', NULL),
(173, 'CÂMBIO DIANTEIRO OVER PUXA P/ CIMA YAMADA ', 'Cambio Dianteiro Mtb 31,8 Over Cima Preto - Yamada\r\n\r\nO Câmbio Dianteiro é o total responsável pela troca de marchas das coroas \r\n\r\n(engrenagens), que pode ocorrer para a 02 ou a 03 coroa\r\n. Cambio Dianteiro Mtb 31,8 Over Cima Preto\r\nO Câmbio Dianteiro Mtb 31,8 Over Cima, foi projetado a fim de realizar transmissões mais suaves com trocas de marchas mais confiáveis no cambio dianteiro.\r\nPrincipais Características:\r\n- Marca: Yamada\r\n- Modelo: Q30 Over Cima\r\n- Material: Aço\r\n-Medida: 31,8\r\n- Cor: Preto\r\n-Peso aproximado: 230g', 24.00, 'Câmbio dianteiro', 0, 'PRETO', 'COMPONENTES', 'Q25', 'YAMADA ', 'AÇO', 0, 230, '20x15x15', '        Cambio Dianteiro Over Puxa P Cima Yamada 6/7v Bike Mtb Speed', 'YAMADA CIMA 1.webp', 'YAMADA CIMA 2.webp|YAMADA CIMA 1.webp|YAMADA 3.webp|YAMADA 4.webp|YAMADA 5.webp', '(2024/10/11 13:48:13 America/Bahia) - (2024/10/11 16:48:13 UTC)', '(2024/10/24 19:47:20 America/Bahia) - (2024/10/24 22:47:20 UTC)', NULL),
(177, 'CÂMBIO TRASEIRO YAMADA 6v', 'Cambio Traseiro,\r\nVelocidade 6V,\r\nCom Gancheira,.\r\n', 24.00, 'Câmbio traseiro', 0, 'PRETO', 'COMPONENTES', 'YAMADA', 'YAMADA', 'AÇO', 0, 284, '20x15x15', 'CÂMBIO TRASEIRO YAMADA 6v', '', 'CAMBIO TRA 1.webp', '(2024/10/11 14:23:34 America/Bahia) - (2024/10/11 17:23:34 UTC)', '(2024/10/24 19:47:34 America/Bahia) - (2024/10/24 22:47:34 UTC)', NULL),
(178, 'CÂMBIO TRASEIRO YAMADA S/GANCHEIRA', '-Marca: Yamada\r\n-Modelo: H60 (Sem gancheira)\r\n-Material: Aço e plástico de alta resistência\r\n-Cor: Preto com roldanas vermelhas\r\n-Cage longo\r\n-Compatível com cassetes / roda livres de 7 velocidades\r\n-Peso: 310g\r\n ', 24.00, 'Câmbio traseiro', 0, 'PRETO', 'COMPONENTES', 'YAMADA', 'YAMADA ', 'AÇO', 0, 310, '20x15x15', 'CÃMBIO TRASEIRO YAMADA S/GANCHEIRA 6y', '', 'GUINCHEIRA YAMADA 1.webp', '(2024/10/11 14:51:34 America/Bahia) - (2024/10/11 17:51:34 UTC)', '(2024/10/24 19:47:46 America/Bahia) - (2024/10/24 22:47:46 UTC)', NULL),
(179, 'CÂMBIO TRASEIRO SHIMANO TOURNEY S/GANCHEIRA', 'Modelo: RD-TZ31A\r\nRoldanas Em Nylon: 11 Dentes. (Menos Desgaste, Mais Velocidade)\r\nParafuso Regulador do Cabo\r\nEspecífico Para Cassete/Catraca de Rosca: 11/28, 11/30, 11/32, 11/34, 12/32, 14/28 ou 14/34\r\nPara Catraca ou Roda Livre de 6v / 7v\r\nCambio Sem Gancheira\r\n', 24.00, 'Câmbio traseiro', 0, 'PRETO', 'COMPONENTES', 'SHIMANO', 'SHIMANO ', 'AÇO', 0, 251, '20x15x15', '              CÂMBIO TRASEIRO SHIMANO TOURNEY S/GANCHEIRA ', '', 'TURNEY 1.webp', '(2024/10/11 15:20:29 America/Bahia) - (2024/10/11 18:20:29 UTC)', '(2024/10/24 19:48:00 America/Bahia) - (2024/10/24 22:48:00 UTC)', NULL),
(180, 'CÂMBIO TRASEIRO SHINAMO TOURNEY C/GANCHEIRA ', '- Modelo: TZ31 GS\r\n- Para: 6 e 7 Velocidades\r\n- Material: Aço e Alumínio\r\n- Sistema Com Gancheira\r\n- Part. Number: ARDTZ31AGSB\r\n', 24.00, 'Câmbio traseiro', 0, 'PRETO', 'COMPONENTES', 'SHIMANO', 'SHIMANO ', 'AÇO', 0, 310, '20x15x15', 'CÂMBIO TRASEIRO SHINAMO TOURNEY C/GANCHEIRA ', '', 'SHIMANO GANCHEIRA 1.webp', '(2024/10/11 15:32:49 America/Bahia) - (2024/10/11 18:32:49 UTC)', '(2024/10/24 19:48:15 America/Bahia) - (2024/10/24 22:48:15 UTC)', NULL),
(182, 'CÂMBIO DIANTEIRO  SHIMANO TOURNEY TX  /TZ500', '   Modelo: FD-TZ500.\r\n - Série: TOURNEY TZ500.\r\n-  Sistema para coroa tripla de até 42 dentes.\r\n - Compatível com sistema de marchas de 18, 21 ou 24 velocidades.\r\n-  Troca de marchas rápidas e suave.', 24.00, 'CAMBIODIANTEIRO', 0, 'PRETO', 'COMPONENTES', 'FDTZ/500 ', 'TORNEY', 'AÇO', 0, 180, '20x15x15', '                 CÂMBIO DIANTEIRO SHIMANO TOURNEY TX / TZ500 ', '', 'TZ500  1.webp', '(2024/10/11 16:02:31 America/Bahia) - (2024/10/11 19:02:31 UTC)', '(2024/10/23 11:59:38 America/Bahia) - (2024/10/23 14:59:38 UTC)', NULL),
(195, 'CÂMBIO DIANTEIRO YAMADA FD-TX 800 ', '- Modelo: Tourney Fd-Tx800\r\n- Medida: 34,9mm\r\n- Abraçadeira Baixa “Top swing”\r\n- Puxada do cabo por cima ou por baixo “Dual Push”\r\n- Fabricação: Japão\r\n', 24.00, 'Câmbio dianteiro', 0, 'PRETO', 'COMPONENTES', 'FD-TX800', 'YAMADA ', 'AÇO', 0, 215, '20x15x15', 'CÂMBIO DIANTEIRO YAMADA FD-TX 800 ', '', '800.webp', '(2024/10/11 16:22:14 America/Bahia) - (2024/10/11 19:22:14 UTC)', '(2024/10/24 19:48:53 America/Bahia) - (2024/10/24 22:48:53 UTC)', NULL),
(196, 'CORRENTE SHIMANO CN-HG40/ 8s', '- Modelo: CN-HG40\r\n- Compatível: Relações de 6V / 7V / 8V e suas variações de quantidade de coroas\r\n- Sistema: HG - HyperGlide\r\n- Emenda Com Pino De Conexão\r\n- Medida: 116L - ELOS', 24.00, 'CORRENTES', 0, 'CINZA', 'COMPONENTES', 'CN-HG40/8s', 'SHIMANO ', 'Alumínio ', 0, 330, '20x15x15', 'CORRENTE SHIMANO CHAIN CN-HG40/8S', '', 'D_NQ_NP_912519-MLU75436699384_042024-O.webp', '(2024/10/11 16:44:48 America/Bahia) - (2024/10/11 19:44:48 UTC)', '(2024/10/23 11:57:39 America/Bahia) - (2024/10/23 14:57:39 UTC)', NULL),
(197, 'CORRENTE SHIMANO CN-HG53/9s', '- Linha: Alivio;\r\n- Modelo: CN-HG53 9s;\r\n- Corrente de 9 velocidades;\r\n- Pino reforçado;\r\n- Mais Leve em comparação com modelos mais antigos;\r\n- Corrente HG para trocas SIS/Dual SIS indexadas precisa;\r\n- Construção precisa;\r\n- Compatível com as linhas Altus, Acera, Alivio, Sora, Tiagra ou qualquer relação de 9v;', 24.00, 'CORRENTES', 0, '', 'COMPONENTES', 'CN-HG53/9s', 'SHIMANO ', 'Alumínio ', 0, 304, '20x15x15', 'CORENTE SHIMANO CHAIN CN-HG53/9s', '', '9S 1.webp', '(2024/10/11 16:51:10 America/Bahia) - (2024/10/11 19:51:10 UTC)', '(2024/10/23 11:57:51 America/Bahia) - (2024/10/23 14:57:51 UTC)', NULL),
(198, 'CORRENTE SHIMANO CN-HG601-11/11s', '-MODELO N: CN-HG601-11\r\n\r\n\r\n- SÉRIE: DEORE M5100 Série\r\n\r\n\r\n- Placa de elo de rolete: SIL-TEC\r\n\r\n\r\n- Tipo: HG-X11\r\n- 138 links\r\n- Compatível com sistema E-BIKE RD\r\n- Compatível com transmissões de 11 velocidades\r\n', 24.00, 'CORRENTES', 0, 'CINZA', 'COMPONENTES', 'CN-HG601-11/11s', 'SHIMANO ', 'Alumínio ', 0, 340, '20x15x15', 'CORRENTE SHINAMO CHAIN CN-HG601-11/11s', '', '11s.webp|11s 2.webp', '(2024/10/11 16:56:11 America/Bahia) - (2024/10/11 19:56:11 UTC)', '(2024/10/23 11:58:05 America/Bahia) - (2024/10/23 14:58:05 UTC)', NULL),
(200, 'MANETE NYLON MIRIM', '      \r\n\r\n    Par de Maçaneta Manete V-Brake Nylon Freio Bicicleta Preto com Regulagem\r\n  \r\n    Manete (Par) - Empunhadura: 2 Dedos \r\n\r\n    Cor: Preto - \r\n\r\n    Material: Nylon ', 6.00, 'Manetes', 0, 'PRETO', 'COMPONENTES', 'MTB ', 'Logan ', 'Nylon ', 0, 215, '15x15x20', 'MANETE NYLON MIRIM', 'mANETE MIRIM 1.jpg', 'mANETE MIRIM 2.webp', '(2024/10/16 14:28:14 America/Bahia) - (2024/10/16 17:28:14 UTC)', '(2024/10/24 19:49:38 America/Bahia) - (2024/10/24 22:49:38 UTC)', NULL),
(201, 'MANETE ALUMINIO ', 'Manetes De Freio Bike Maçaneta V-brake Logan Alumínio (par) Par de Manetes de Freio Alumínio Direito e Esquerdo Preto \r\n\r\nPar de Manetes de Freio, feito em alumínio para freio v-brake ou disco mecânico. \r\n\r\nManetes para freios de excelente aceitação, desenvolvido em alumínio, na cor preta. ', 18.00, 'Manetes', 0, 'PRETO', 'COMPONENTES', 'MTB', 'Logan ', 'Alumínio ', 0, 150, '15x15x20', 'MANETE ALUMINIO ', 'manete aluminio 1.jfif', 'manete aluminio 2.jpg', '(2024/10/16 16:55:00 America/Bahia) - (2024/10/16 19:55:00 UTC)', '(2024/10/23 17:04:59 America/Bahia) - (2024/10/23 20:04:59 UTC)', NULL),
(202, 'PEDEVELA SHIMANO TOURNEY TRIPLO  FC-TY 301 28-38-48 DENTES ', '\r\nO Pedivela Shimano Tourney Ty301 é um produto de alta qualidade, projetado para oferecer um desempenho excepcional. Com um comprimento de braço de 175 mm, este pedivela é robusto e durável, garantindo uma longa vida útil. Ele é feito de alumínio, um material conhecido por sua resistência e leveza, o que contribui para a eficiência do pedivela.\r\n\r\nEste modelo Ty301 possui uma relação de dentes de 28-38-48, permitindo uma ampla gama de velocidades para se adequar a diferentes condições de ciclismo. Ele é compatível apenas com eixos de ponta quadrada e correntes de 116 elos fina e indexada.\r\n\r\nO Pedivela Shimano Tourney Ty301 não inclui movimento central, permitindo que você escolha o que melhor se adapta às suas necessidades. Com um peso de 1150 gr, este pedivela é fácil de manusear e instalar.\r\n\r\nEle vem na cor preta, adicionando um toque de estilo à sua bicicleta. Este pedivela é uma excelente escolha para quem busca melhorar o desempenho de sua bicicleta.', 149.00, 'PEDIVELAS', 0, 'PRETO', 'COMPONENTES', 'FC- TY 301 28-38-48 DENTES ', 'SHIMANO ', 'Alumínio ', 0, 1150, '20x15x35', 'PEDIVELA SHIMANO FC-TY 301', '', 'pedv shimano 48 2.webp', '(2024/10/16 17:22:00 America/Bahia) - (2024/10/16 20:22:00 UTC)', '(2024/10/16 17:24:02 America/Bahia) - (2024/10/16 20:24:02 UTC)', NULL),
(203, 'PEDEVELA SHIMANO TOURNEY TRIPLO  FC-TY 301 24-34-42 DENTES ', '\r\nEste produto é um Pedal de Vela Shimano FC-TY301 7/8v 42//34/24 175mm Alumínio, uma peça de alta qualidade da renomada marca Shimano. O modelo FC-TY301 42/34/24D 175mm é compatível apenas com o Movimento Central com Ponta Quadrada. Este pedal de vela é feito de braços de alumínio e coroas de aço, materiais duráveis e resistentes que garantem um excelente desempenho e longevidade. \r\n\r\nA cor preta dá um toque elegante e sofisticado. O produto não inclui parafusos de fixação e movimento central. O peso aproximado é de 910 gramas, o que o torna leve e fácil de manusear. O comprimento do braço é de 175 mm, o que proporciona uma pedalada confortável e eficiente. A quantidade máxima de dentes é de 42 e a mínima de 24, permitindo uma ampla gama de velocidades. Este modelo tem 3 velocidades, oferecendo versatilidade para diferentes tipos de terreno. ', 149.00, 'PEDIVELAS', 0, 'PRETO', 'COMPONENTES', 'TOURNEY TRIPLO  FC-TY 301 24-34-42 DENTES ', 'SHIMANO ', 'Alumínio ', 0, 1125, '30x15x20', 'PEDEVELA SHIMANO ', '', 'pedv shimano 42 2.webp', '(2024/10/16 17:28:53 America/Bahia) - (2024/10/16 20:28:53 UTC)', '(2024/10/23 17:07:31 America/Bahia) - (2024/10/23 20:07:31 UTC)', NULL),
(204, 'MOVIMENTO CENTRAL SHIMANO 110MM ', '\r\nApresentamos o Movimento Central Shimano Un300 122.5mm 34.7 Ponta Quadrada, um produto de alta qualidade da renomada marca Shimano.\r\n\r\n Este modelo, BB-UN300, é novo e vem com um sistema de encaixe do pedivela de ponta quadrada, proporcionando uma instalação fácil e segura.\r\n\r\n O corpo do centro mede 68mm, um tamanho padrão que se adapta a uma ampla gama de bicicletas. O eixo tem um comprimento de 122.5 mm e uma rosca inglesa de 34.7 mm, garantindo um ajuste perfeito e uma performance excepcional. \r\n\r\nEste produto pesa aproximadamente 320 gramas, tornando-o leve e fácil de manusear. O part number é ABBUN300B22B, uma identificação única que confirma a autenticidade do produto. \r\n\r\n', 119.00, 'MOVIMENTOCENTRAL', 0, '', 'COMPONENTES', 'BB ', 'SHIMANO ', 'AÇO', 0, 320, '15x15x20', 'Movimento Central Shimano Un300 122.5mm 34.7 ', '', 'MOVIMENTO CENTRAL 110 SHIMANO  2.webp', '(2024/10/16 17:38:06 America/Bahia) - (2024/10/16 20:38:06 UTC)', '(2024/10/16 17:38:06 America/Bahia) - (2024/10/16 20:38:06 UTC)', NULL),
(205, 'MOVIMENTO CENTRAL ABSOLUT 122,5MM ', '\r\nMovimento central ponta quadrada Absolute 34,7mm x 122,5mm rolamento selado\r\n\r\n- Diâmetro da rosca: 34,7mm (padrão)\r\n- Tipo da ponta: quadrada (padrão)\r\n- Comprimento total: 122,5mm (padrão)\r\n- Comprimento do cartucho sem eixo: 68mm\r\n- Movimento Central Rolamentado (Blindado/Selado)\r\n- Acompanha 2 parafusos para fixação do pedivela\r\n- Muito resistente e selado, o que impede a entrada de sujeira que comprometa o seu funcionamento', 29.00, 'MOVIMENTOCENTRAL', 0, 'PRETO', 'COMPONENTES', 'MOVIMENO CENTRAL PONTA QUADRADA ', 'ABSOLUTE ', 'AÇO', 0, 340, '15x15x20', 'MOVIMENTO CENTRAL ABSOLUT 122,5MM ', '', 'mov. absolut 1 122,5.webp', '(2024/10/16 17:47:13 America/Bahia) - (2024/10/16 20:47:13 UTC)', '(2024/10/16 18:10:00 America/Bahia) - (2024/10/16 21:10:00 UTC)', NULL),
(206, 'MOVIMENTO CENTRAL ABSOLUT 125,5MM ', '\r\nMovimento central ponta quadrada Absolute 34,7mm x 125,5mm rolamento selado\r\n\r\n- Diâmetro da rosca: 34,7mm (padrão)\r\n- Tipo da ponta: quadrada (padrão)\r\n- Comprimento total: 125,5mm (padrão)\r\n- Comprimento do cartucho sem eixo: 68mm\r\n- Movimento Central Rolamentado (Blindado/Selado)\r\n- Acompanha 2 parafusos para fixação do pedivela\r\n- Muito resistente e selado, o que impede a entrada de sujeira que comprometa o seu funcionamento', 29.00, 'MOVIMENTOCENTRAL', 0, '', 'COMPONENTES', '08A', 'ABSOLUTE ', 'AÇO', 0, 340, '15x15x20', 'MOVIMENTO CENTRAL ABSOLUT 122,5MM ', '', 'mov. absolut 2 122,5.webp', '(2024/10/16 17:54:51 America/Bahia) - (2024/10/16 20:54:51 UTC)', '(2024/10/16 18:08:51 America/Bahia) - (2024/10/16 21:08:51 UTC)', NULL),
(207, 'MOVIMENTO CENTRAL ABSOLUT 127,5MM', '\r\nMovimento central ponta quadrada Absolute 34,7mm x 127,5mm rolamento selado\r\n\r\n- Diâmetro da rosca: 34,7mm (padrão)\r\n- Tipo da ponta: quadrada (padrão)\r\n- Comprimento total: 127,5mm (padrão)\r\n- Comprimento do cartucho sem eixo: 68mm\r\n- Movimento Central Rolamentado (Blindado/Selado)\r\n- Acompanha 2 parafusos para fixação do pedivela\r\n- Muito resistente e selado, o que impede a entrada de sujeira que comprometa o seu funcionamento', 24.00, 'MOVIMENTOCENTRAL', 0, 'PRETO', 'COMPONENTES', '08A', 'ABSOLUTE ', 'AÇO', 0, 340, '15x15x20', 'MOVIMENTO CENTRAL ABSOLUT 127,5MM', '', 'mov. absolut 2 122,5.webp', '(2024/10/16 18:08:06 America/Bahia) - (2024/10/16 21:08:06 UTC)', '(2024/10/16 18:08:06 America/Bahia) - (2024/10/16 21:08:06 UTC)', NULL),
(208, 'MOV. CENTRAL ABSOLUTE 118MM', '\r\nMovimento Central 34.7mm Absolute Ponta Quadrada Rolamentado\r\nMovimento central ponta quadrada Absolute 34,7mm x 118mm rolamento selado\r\n\r\n- Diâmetro da rosca: 34,7mm (padrão)\r\n- Tipo da ponta: quadrada (padrão)\r\n- Comprimento total: 118mm (padrão)\r\n- Comprimento do cartucho sem eixo: 68mm\r\n- Movimento Central Rolamentado (Blindado/Selado)\r\n- Acompanha 2 parafusos para fixação do pedivela\r\n- Muito resistente e selado, o que impede a entrada de sujeira que comprometa o seu funcionamento', 29.00, 'MOVIMENTOCENTRAL', 0, 'PRETO', 'COMPONENTES', '08A', 'ABSOLUTE ', 'AÇO', 0, 340, '15x15x20', 'MOV. CENTRAL ABSOLUTE 118MM', '', 'mov. absolut 1 122,5.webp', '(2024/10/16 18:13:42 America/Bahia) - (2024/10/16 21:13:42 UTC)', '(2024/10/16 18:13:42 America/Bahia) - (2024/10/16 21:13:42 UTC)', NULL);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
