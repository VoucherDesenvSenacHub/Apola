-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Jul-2025 às 05:07
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `140p1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `id_usuario`, `foto_perfil`) VALUES
(1, 2, NULL),
(4, 9, '6880fcad62777.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_loja`
--

CREATE TABLE `avaliacao_loja` (
  `id_avaliacao_loja` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `notas` enum('1','2','3','4','5') NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `avaliacao_loja`
--

INSERT INTO `avaliacao_loja` (`id_avaliacao_loja`, `comentario`, `notas`, `id_cliente`) VALUES
(47, 'Tive uma ótima experiência. Amei os Produtos e super indico para Demais Pessoas', '5', 27),
(48, 'Só coisa fina. Se eu pudesse eu levava tudo dessa lojaa!! Levava Tudoooooooo!\nAmo os produtossss, ta', '3', 27),
(49, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '3', 27),
(50, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.', '4', 27),
(51, 'uma maravilha', '4', 27),
(52, 'tgrgtgtrgrt', '2', 27),
(53, 'Muito diverso. Amei esse site!', '2', 27),
(54, ',jyg,hufjy,f', '5', 27),
(55, 'Apola E-commerce Artesanatos é um verdadeiro encanto! Cada peça reflete carinho, dedicação e muito talento. É maravilhoso ver como o artesanato ganha vida com tanta sensibilidade e beleza. Parabéns! ', '5', 35),
(56, 'adadad', '1', 27),
(57, 'sddas', '3', 27),
(58, 'sdsds', '3', 27),
(59, 'sdadad', '3', 27),
(60, 'dddsdddfs', '3', 27),
(61, 'sdfsdfs', '3', 27),
(62, '76fft7fty', '3', 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_produto`
--

CREATE TABLE `avaliacao_produto` (
  `id_avaliacao_produto` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `notas` enum('1','2','3','4','5') NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners_mobile`
--

CREATE TABLE `banners_mobile` (
  `id_banner` int(11) NOT NULL,
  `caminho` varchar(250) NOT NULL,
  `posicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banners_mobile`
--

INSERT INTO `banners_mobile` (`id_banner`, `caminho`, `posicao`) VALUES
(11, '../../src/imagens/banner/bannerCadastrado/bannersMobile/banner_686fb6eccce868.03841951.jpg', 1),
(12, '../../src/imagens/banner/bannerCadastrado/bannersMobile/banner_686fba57d80860.73009266.jpg', 2),
(13, '../../src/imagens/banner/bannerCadastrado/bannersMobile/banner_686fb4234772d5.12156541.jpeg', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners_principais`
--

CREATE TABLE `banners_principais` (
  `id_banner` int(11) NOT NULL,
  `caminho` varchar(250) NOT NULL,
  `posicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banners_principais`
--

INSERT INTO `banners_principais` (`id_banner`, `caminho`, `posicao`) VALUES
(4, '../../src/imagens/banner/bannerCadastrado/bannersPrincipais/banner_687f95f300d9e5.57109723.jfif', 1),
(5, '../../src/imagens/banner/bannerCadastrado/bannersPrincipais/banner_687f95f30b8546.19833829.jfif', 2),
(6, '../../src/imagens/banner/bannerCadastrado/bannersPrincipais/banner_687f95f31a49d0.91222825.jfif', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners_promocionais`
--

CREATE TABLE `banners_promocionais` (
  `id_banner` int(11) NOT NULL,
  `caminho` varchar(250) NOT NULL,
  `posicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banners_promocionais`
--

INSERT INTO `banners_promocionais` (`id_banner`, `caminho`, `posicao`) VALUES
(1, '../../src/imagens/banner/bannerCadastrado/bannersPromocionais/banner_6880fd0bcf4384.51777667.jpg', 1),
(2, '../../src/imagens/banner/bannerCadastrado/bannersPromocionais/banner_684ac96a42ad75.28700318.jpg', 2),
(3, '../../src/imagens/banner/bannerCadastrado/bannersPromocionais/banner_684ac96a49a9a9.87147833.jpg', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners_secundarios`
--

CREATE TABLE `banners_secundarios` (
  `id_banner` int(11) NOT NULL,
  `caminho` varchar(250) NOT NULL,
  `posicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `banners_secundarios`
--

INSERT INTO `banners_secundarios` (`id_banner`, `caminho`, `posicao`) VALUES
(3, '../../src/imagens/banner/bannerCadastrado/bannersSecundarios/banner_683d9f69c81ba9.89697888.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `status_categoria` char(1) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`, `status_categoria`, `imagem`) VALUES
(36, 'Cachêpo', 'a', '../../src/imagens/categorias/ImagemCategoria_686e663e44d306.01342446.jpg'),
(37, 'Porta Chaves', 'a', '../../src/imagens/categorias/ImagemCategoria_686e666bd69e84.53897443.jpg'),
(38, 'Amigurumi', 'a', '../../src/imagens/categorias/ImagemCategoria_686e6602287d28.43717567.jpg'),
(39, 'Bordado', 'a', '../../src/imagens/categorias/ImagemCategoria_686e661fbe83e7.98325555.jpg'),
(41, 'Bijuterias', 'i', 'cat_bijuterias.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cep` char(9) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `numero_casa` int(5) DEFAULT NULL,
  `rua` varchar(150) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `sobrenome`, `cep`, `cpf`, `telefone`, `numero_casa`, `rua`, `bairro`, `estado`, `cidade`, `complemento`, `id_usuario`, `foto_perfil`) VALUES
(1, 'Oliveira', '12345-678', '12345678901', '55999999999', 100, 'Rua das Flores', 'Centro', 'RS', 'Porto Alegre', 'Casa 1', 1, NULL),
(2, 'Araujo', '79062380', '4559121745', '67985236565', 440, 'rua romulo capp', 'itamaraca', 'ms', 'campo grande', NULL, 4, NULL),
(3, 'Lima', '98765-432', '98765432100', '57199999999', 200, 'Avenida Brasil', 'Jardim América', 'SP', 'São Paulo', 'Apto 101', 4, NULL),
(4, 'Dias', '54321-987', '12345098765', '57198888888', 150, 'Rua São José', 'Centro', 'RJ', 'Rio de Janeiro', 'Casa', 6, NULL),
(5, 'Silva', '11223-445', '11122233344', '55119999999', 300, 'Rua das Palmeiras', 'Bela Vista', 'MG', 'Belo Horizonte', '', 7, NULL),
(6, 'Rodrigues', '79009090', '22233344455', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL),
(7, 'Pereira de Souza', '79071190', '14785236912', '67559854123', 666, 'torta', 'grande', 'MS', 'CAMPO GRANDE', NULL, 10, NULL),
(8, 'Peido fino', '25635410', '56895477124', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL),
(9, 'doe', '515615151', '5615615', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL),
(10, 'Sena', '79003363', '11792849419', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL),
(11, 'da Silva Gomes', '78074693', '45698712', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL),
(12, 'gomes', '790711630', '478569321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL),
(13, 'rassun moreno', '256398741', '147852369', '8569742233', 566, 'caverna', 'CARAMURU', 'PB', 'arapongas', NULL, 16, NULL),
(14, 'a', '842659713', '84265971301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, NULL),
(15, 'de miranda', '878945612', '78945612301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL),
(16, 'CARDOSO', '79114170', '84295376194', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL),
(17, 'A Doreto', '79114-170', '87954161912', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL),
(18, 'henrique', '78114170', '74185296301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL),
(20, 'Jhon', '79094020', '12345678978', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, NULL),
(21, 'da silva', '79000000', '1478523656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, NULL),
(22, 'Silva', '12345-678', '12345678900', '11999999999', 123, 'Rua A', 'Bairro B', 'SP', 'São Paulo', 'Casa perto da praça', 1, NULL),
(24, 'dos santos', '79072563', '96374125823', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, NULL),
(25, 'Rodrigues dos Santos', '77202723', '11412834142', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, NULL),
(26, 'gianotti', '19832816', '27076945096', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35, NULL),
(27, 'Nascimento', '12342123', '23454322121', '132234234', 3242, 'dfvdfv', 'vdfdfvd', 'MS', 'dfvdfv', NULL, 36, NULL),
(29, 'Oliveira', '98765-432', '98765432107', '11988887777', 202, 'Av. Central', 'Jardins', 'RJ', 'Rio de Janeiro', 'Casa Verde', 2, NULL),
(30, 'padrao', '79070230', '25896314785', '', 0, '', '', '', '', NULL, 39, NULL),
(31, 'de oliveira', '79062385', '4559137146', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, NULL),
(32, 'Santos', '79062380', '4523145674', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, NULL),
(33, 'silva', '79062351', '4559137156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, NULL),
(34, 'fernandes', '79100580', '7760805128', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 43, NULL),
(35, 'rodrigues', '79100200', '12345678910', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45, NULL),
(36, 'araujo', '79062385', '4559137412', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 46, NULL),
(37, 'França', '12343213', '32143211212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 47, NULL),
(38, 'ramalho', '79000000', '25896314723', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 48, NULL),
(39, 'rocha', '79072000', '14785236987', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 49, NULL),
(40, 'silva', '79062380', '3850104455', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, NULL),
(41, 'Pereira', '56987414', '15478955687', '121212121', 123, 'rasdasadad', 'sadasdasda', 'BA', 'sdaasdsdasd', NULL, 51, NULL),
(44, 'Oliveira', '98765-432', '98765432175', '11988888477', 456, 'Rua das Flores', 'Jardim das Rosas', 'RJ', 'Rio de Janeiro', 'Casa 2', 10, NULL),
(45, 'silva', '79000000', '100200304', '42424242', 24, 'caverna', 'grande', 'ms', 'CAMPO GRANDE', NULL, 54, NULL),
(46, 'seu ze', '79000000', '1342850181', '212121', 121, 'cheia de buraco', 'grande', 'hg', 'CAMPO GRANDE', NULL, 55, NULL),
(47, 'ze da manga', '79841000', '1342850182', '67991067366', 24, 'AV AFONSO PENA', 'CENTRO', 'MS', 'CG', NULL, 56, NULL),
(48, 'MADEN', '79000000', '14785236900', '65874523266', 745, 'torta', 'CARAMURU', 'ms', 'arapongas', NULL, 57, NULL),
(50, 'joao', '79071190', '47125896365', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, NULL),
(51, 'Barros de Souza', '79071130', '96325874132', ' 8193338172', 566, 'AV AFONSO PENA', 'CARAMURU', 'MS', 'CAMPO GRANDE', NULL, 61, NULL),
(52, 'sdcsdcsdcsdc', '32423423', '23234234242', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 62, NULL),
(53, 'darc', '79071190', '14785269369', '6666666', 66, '666666', '66666', '66', '66666', NULL, 63, NULL),
(54, 'wedwedwedwe', '12312312', '12131232131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 72, NULL),
(55, 'almeida', '79000880', '33333333312', '77777777777', 77, 'AV AFONSO PENA', 'ok', 'ok', 'ok', NULL, 73, NULL),
(56, 'de barros', '79071190', '25874196358', '81933381723', 566, 'caverna', 'CENTRO', 'MS', 'campo grande', NULL, 74, NULL),
(57, 'odfivndfonodfinv', '68498494', '12312312312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75, NULL),
(58, 'ghnghngn', '23423423', '23423424243', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 77, NULL),
(59, 'vdfvdfv', '65464651', '56684654165', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, NULL),
(60, 'santos', '79062400', '45612378912', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 83, NULL),
(62, 'medeiros', '79114170', '74185296312', '67982177691', 842, 'marcelo roberto ', 'jose abrao', 'MS', 'camo grande', NULL, 86, NULL),
(63, 'Gomes', '79072000', '36978912356', ' 6799134618', 322, 'AV AFONSO PENA', 'CENTRO', 'MS', 'CAMPO GRANDE', NULL, 87, NULL),
(64, 'sla', '79114-170', '855.952.552-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 88, NULL),
(65, 'junior', '79114-170', '521.595.595-59', '(67) 98569-6625', NULL, NULL, NULL, NULL, NULL, NULL, 90, NULL),
(66, 'souza', '79071200', '85236974132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 91, NULL),
(67, 'novaes', '79071300', '14732185269', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 94, NULL),
(68, 'poeta', '79071300', '36974125856', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 97, NULL),
(69, 'abreu', '79071200', '85214796356', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, NULL),
(70, 'Ricardo', '79071200', '36974125878', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 101, NULL),
(71, 'Rodrigues dos Santos', '35355353', '33333333333', '43434354', 343, 'ftafdad', 'fsfsffs', 'MS', 'sdfsfsfs', NULL, 102, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `id_favoritos` int(11) NOT NULL,
  `cliente_id_cliente` int(11) NOT NULL,
  `produto_id_produto` int(11) NOT NULL,
  `status_favoritos` enum('a','i') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `favoritos`
--

INSERT INTO `favoritos` (`id_favoritos`, `cliente_id_cliente`, `produto_id_produto`, `status_favoritos`) VALUES
(292, 27, 42, 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_produto_perso`
--

CREATE TABLE `imagens_produto_perso` (
  `id_imagens_produto_perso` int(11) NOT NULL,
  `imagem1` text DEFAULT NULL,
  `imagem2` text DEFAULT NULL,
  `imagem3` text DEFAULT NULL,
  `imagem4` text DEFAULT NULL,
  `id_produto_perso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imagens_produto_perso`
--

INSERT INTO `imagens_produto_perso` (`id_imagens_produto_perso`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `id_produto_perso`) VALUES
(1, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 1),
(2, 'colar1.jpg', 'colar2.jpg', 'colar3.jpg', 'colar4.jpg', 2),
(3, 'caneca1.jpg', 'caneca2.jpg', 'caneca3.jpg', 'caneca4.jpg', 3),
(4, 'adesivo1.jpg', 'adesivo2.jpg', 'adesivo3.jpg', 'adesivo4.jpg', 4),
(5, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863e04573f658.49741138.jpg', NULL, NULL, NULL, 11),
(6, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ebfbb96f94.46535983.jpg', NULL, NULL, NULL, 12),
(7, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ebfea2ce11.72050012.jpg', NULL, NULL, NULL, 13),
(8, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ec3a695e75.24940239.jpg', NULL, NULL, NULL, 14),
(9, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ec3c333e17.33843117.jpg', NULL, NULL, NULL, 15),
(10, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ec40b9ef59.59724079.jpg', NULL, NULL, NULL, 16),
(11, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ec8b0fbd14.98544704.jpg', NULL, NULL, NULL, 17),
(12, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ed674ec292.38297238.jpg', NULL, NULL, NULL, 18),
(13, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ed7188f0d0.28980119.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ed71892ef6.59553113.png', NULL, NULL, 19),
(14, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863edac8c74f2.27872772.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863edac8ccbb1.90453008.jpg', NULL, NULL, 20),
(15, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863edf7ee3340.75608423.jpg', NULL, NULL, NULL, 21),
(16, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ee6b3c62a8.47074251.jpg', NULL, NULL, NULL, 22),
(17, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ef66b33e47.53962767.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ef66b377b1.50814306.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ef66b3aeb5.59749243.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863ef66b42df7.45121469.jpg', 23),
(18, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f1d9d31235.86028916.png', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f1d9d32e71.33863608.jpg', NULL, NULL, 24),
(19, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f252f11885.44318996.jpg', NULL, NULL, NULL, 25),
(20, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f32386bfa5.40039051.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f323870746.95150618.jpg', NULL, NULL, 26),
(21, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f3766595b2.95694787.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f37665db87.52113022.jpg', NULL, NULL, 27),
(22, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f3958292c3.17860075.jpg', NULL, NULL, NULL, 28),
(23, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f3c0a9e383.18733115.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f3c0aa77b4.30797377.jpg', NULL, NULL, 29),
(24, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f40266bd14.63018112.jpg', NULL, NULL, NULL, 30),
(25, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f41c13dbf2.79860533.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f41c141f70.84087957.png', NULL, NULL, 31),
(26, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f52cac7ef0.38066120.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f52cacb5c7.23839775.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f52cacf324.31353170.jpg', NULL, 32),
(27, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6863f8da8027f0.46035896.jpg', NULL, NULL, NULL, 33),
(28, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6865166daf1944.57893468.jpg', NULL, NULL, NULL, 34),
(29, 'quadro1.jpg', 'quadro2.jpg', NULL, NULL, 2),
(30, 'quadro1.jpg', 'quadro2.jpg', NULL, NULL, 2),
(31, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68652408c54419.46011559.jpg', NULL, NULL, NULL, 37),
(32, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6865309a7084d5.17303168.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6865309a711857.22037385.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6865309a718400.75283335.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6865309a71f2b3.51064946.jpg', 38),
(33, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6865349b3de722.58061395.jpg', NULL, NULL, NULL, 39),
(34, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68666d793c15b4.95996266.jpg', NULL, NULL, NULL, 40),
(35, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686675438b0d50.43594903.jpg', NULL, NULL, NULL, 41),
(36, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6866754fef86e8.10848804.jpg', NULL, NULL, NULL, 42),
(37, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6866757353f124.59058504.jpg', NULL, NULL, NULL, 43),
(38, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686675a3650e23.14819675.jpg', NULL, NULL, NULL, 44),
(39, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6866763cc49a54.92027764.jpg', NULL, NULL, NULL, 45),
(40, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686676691ec431.48556904.jpg', NULL, NULL, NULL, 46),
(41, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6866767c784db3.70287502.jpg', NULL, NULL, NULL, 47),
(42, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686676d6b61621.94017970.jpg', NULL, NULL, NULL, 48),
(43, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68667738647386.52476492.jpg', NULL, NULL, NULL, 49),
(44, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68667780562126.56292569.jpg', NULL, NULL, NULL, 50),
(45, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68667b4f6409e7.34616973.jpg', NULL, NULL, NULL, 51),
(46, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68667d2aec2e05.67546092.jpg', NULL, NULL, NULL, 52),
(47, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68667f734cf793.97049663.jpg', NULL, NULL, NULL, 53),
(48, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68667f9eefde00.85676317.jpg', NULL, NULL, NULL, 54),
(49, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_68668048b951b2.48416641.jpg', NULL, NULL, NULL, 55),
(50, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6866809130f781.17656652.png', NULL, NULL, NULL, 56),
(51, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686680e67a9e05.83816801.png', NULL, NULL, NULL, 57),
(52, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6866811f3e0270.10659685.jpg', NULL, NULL, NULL, 58),
(53, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686681296b2852.68686593.jpg', NULL, NULL, NULL, 59),
(54, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686681ae0b5503.48504745.jpg', NULL, NULL, NULL, 60),
(55, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686681d30048d8.54873147.jpg', NULL, NULL, NULL, 61),
(56, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6866824345cb87.28472319.jpg', NULL, NULL, NULL, 62),
(57, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686682594d6d99.82439968.jpg', NULL, NULL, NULL, 63),
(58, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686bd937bb4da3.54897201.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686bd937bb6228.04840247.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686bd937bb72d5.19758013.jpg', NULL, 64),
(59, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686e6a6f94a346.97295496.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686e6a6f94e998.67130921.png', NULL, NULL, 65),
(60, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686e8177abec30.34447979.jpg', NULL, NULL, NULL, 66),
(61, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686e82681b4e52.36846761.jpg', NULL, NULL, NULL, 67),
(62, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_686fd46a8ba1c2.98915916.jpg', NULL, NULL, NULL, 68),
(63, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_687f93bdd02586.91640501.png', NULL, NULL, NULL, 69),
(64, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880d1e418c361.14983034.jpg', NULL, NULL, NULL, 70),
(65, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e3ba543276.22479945.jfif', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e3ba546340.88663551.jfif', NULL, NULL, 71),
(66, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e3fc98fc28.66145021.jfif', NULL, NULL, NULL, 72),
(67, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e4d1786e91.49351533.jfif', NULL, NULL, NULL, 73),
(68, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e4d9879dd6.06558924.jfif', NULL, NULL, NULL, 74),
(69, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e5009eb7c9.42958075.jfif', NULL, NULL, NULL, 75),
(70, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e534806319.38447602.jfif', NULL, NULL, NULL, 76),
(71, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e541cfd1d0.54119485.jfif', NULL, NULL, NULL, 77),
(72, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e555eaf188.30319968.jfif', NULL, NULL, NULL, 78),
(73, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e5c0459bc5.28333267.jfif', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e5c045d9b4.75904445.jfif', NULL, NULL, 79),
(74, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e57846f0b5.36226918.png', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880e578473009.64222442.png', NULL, NULL, 80),
(75, '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880f4bf035bd9.25952462.jpg', '../../src/imagens/imagens_prod_perso/ImagemProdutoPerso_6880f4bf03daa9.36092782.jpg', NULL, NULL, 81);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `url_whatsapp` varchar(100) NOT NULL,
  `status_pagamento` char(1) NOT NULL,
  `telefone` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `url_whatsapp`, `status_pagamento`, `telefone`) VALUES
(1, 'https://wa.me/5599999999999', 'A', '55999999999'),
(2, 'https://wa.me/5588888888888', 'I', '55888888888'),
(3, 'https://wa.me/5571999999999', 'A', '57199999999'),
(4, 'https://wa.me/5571888888888', 'A', '57188888888'),
(5, 'https://wa.me/5511999999999', 'I', '51199999999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(64) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`id`, `email`, `key`, `expDate`) VALUES
(6, 'felix@gmail.com', '6ed403823322b8e410cc488adf603df9e441dac899d5a33fd7ef80220485266c', '2025-05-27 10:15:54'),
(36, 'vitor@gmail.com', '67300b9bbf6aef99bc543a93d600aaa87555cbdb1da08c630d8cbe6c5643d9a4', '2025-07-04 16:23:14'),
(57, 'gabrielfhelixx@gmail.com', 'a1e5d3a8e9ccf6f03c93b47a261160dea70b9535a36e4dbfb391229250290cb4', '2025-07-04 12:38:39'),
(70, 'vitorvitor@gmail.com', '2645af6ea05e05267bb20142ec82675a511dd9ee62b19db2b562f45538881c72', '2025-07-04 18:02:51'),
(71, 'adm@gmail.com', 'c36cbf0f2b487d15a2e5494fce215ee1fca7ad1c29eea92edb743ef664c62ee2', '2025-07-04 18:11:20'),
(72, 'guilherme54185786@aluno.ms.senac.br', 'dda02344e21274afcbc3889009405d1d6695f7fa8f1134b01e0145dfba1a7ede', '2025-07-04 18:13:18'),
(74, 'loureirovitornascimento@gmail.com', '0fec7786959eabdcda2d532db7b11ab87d9d336aeb95726de8afcabd424d2a1c', '2025-07-09 14:39:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `data_pedido` datetime NOT NULL,
  `tipo` enum('disponivel','personalizado') NOT NULL,
  `status_pedido` enum('A pagar','Produção','Envio','Entregue') NOT NULL,
  `codigo_rastreio` varchar(50) DEFAULT NULL,
  `sacola_id_sacola` int(11) DEFAULT NULL,
  `sacola_produto_id_produto` int(11) DEFAULT NULL,
  `sacola_cliente_id_cliente` int(11) DEFAULT NULL,
  `produto_perso_id_produto_perso` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `valor_total_perso` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `data_pedido`, `tipo`, `status_pedido`, `codigo_rastreio`, `sacola_id_sacola`, `sacola_produto_id_produto`, `sacola_cliente_id_cliente`, `produto_perso_id_produto_perso`, `id_cliente`, `valor_total_perso`) VALUES
(4, '2025-07-09 15:11:11', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 65, NULL, NULL),
(5, '2025-07-09 16:49:27', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 66, NULL, NULL),
(6, '2025-07-09 16:53:28', 'personalizado', 'Entregue', 'BRL', NULL, NULL, NULL, 67, 27, NULL),
(7, '2025-07-10 16:55:38', 'personalizado', 'Produção', 'janfkadn asc', NULL, NULL, NULL, 68, 27, NULL),
(12, '2025-07-11 11:54:43', 'disponivel', 'Entregue', 'BRL578GBNJIK', 3, 37, 5, NULL, 15, NULL),
(13, '2025-07-22 15:35:57', 'personalizado', 'A pagar', 'BRL851562995', NULL, NULL, NULL, 69, 2, NULL),
(14, '2025-07-23 14:13:24', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 70, 27, NULL),
(15, '2025-07-23 15:29:30', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 71, 27, NULL),
(16, '2025-07-23 15:30:36', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 72, 27, NULL),
(17, '2025-07-23 15:34:09', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 73, 27, NULL),
(18, '2025-07-23 15:34:17', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 74, 27, NULL),
(19, '2025-07-23 15:34:56', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 75, 27, NULL),
(20, '2025-07-23 15:35:48', 'personalizado', 'A pagar', '0', NULL, NULL, NULL, 76, 27, NULL),
(21, '2025-07-23 15:36:01', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 77, 27, NULL),
(22, '2025-07-23 15:36:21', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 78, 27, NULL),
(23, '2025-07-23 15:38:08', 'personalizado', 'A pagar', NULL, NULL, NULL, NULL, 79, 27, NULL),
(24, '2025-07-23 15:36:56', 'personalizado', 'A pagar', 'BRLjokndkpok ', NULL, NULL, NULL, 80, 7, 100.00),
(25, '2025-07-23 16:42:07', 'personalizado', 'A pagar', 'BRLLKJHIOIJHOPO', NULL, NULL, NULL, 81, 27, 50.70),
(40, '0000-00-00 00:00:00', 'disponivel', 'A pagar', NULL, NULL, NULL, NULL, NULL, 27, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `avaliacao` longtext DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `categoria_id_categoria` int(11) NOT NULL,
  `status_produto` char(1) NOT NULL,
  `tipo` varchar(80) NOT NULL,
  `largura` float NOT NULL,
  `altura` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `avaliacao`, `quantidade`, `cor`, `imagem`, `descricao`, `categoria_id_categoria`, `status_produto`, `tipo`, `largura`, `altura`) VALUES
(37, 'Cachêpo Decorativo de Madeira', 89.90, '', 100, '#000000', 'src/imagens/produtos/ImagemProduto_6880fcf8b03e50.59644026.png', 'Cachêpo artesanal feito com madeira de reflorestamento. Perfeito para vasos pequenos.', 36, 'i', 'Da loja', 15, 20),
(38, 'Cachêpo de Madeira', 50.00, '', 2, '#966613', 'src/imagens/produtos/ImagemProduto_6880f8e00928b5.41587256.jfif', 'Produto artesanal feito em madeira', 36, 'a', 'Da loja', 10, 15),
(39, 'Cachêpo de Croche', 60.00, '', 3, '#000000', 'src/imagens/produtos/ImagemProduto_6880fa9644e742.05913886.png', 'Cachêpo de croche ideal para colocar flores', 36, 'a', 'Da loja', 15, 20),
(40, 'Cachêpo de gatinhos', 22.00, '', 2, '#6b0000', '../../src/imagens/produtos/ImagemProduto_686e6737ed4ac6.68265336.jpg', 'Muito bonito e decorativo para ambientes fantasiados etc.', 36, 'a', 'Da loja', 68, 50),
(41, 'cachêpo de aluminio', 250.00, '', 4, '#8c8c8c', '../../src/imagens/produtos/ImagemProduto_686e67ae35b607.02599089.jpg', 'Ótimo para ambientes com eletrodomésticos de inox ', 36, 'a', 'Da loja', 20, 120),
(42, 'Porta Chaves Home Sweet', 89.00, '', 5, '#a3861f', '../../src/imagens/produtos/ImagemProduto_686e68439e3e18.08985545.jpg', 'Perfeito e muito bonito!!!!', 37, 'a', 'Da loja', 10, 8),
(43, 'Porta chaves - Cadê a Chave ???', 45.44, '', 4, '#000000', '../../src/imagens/produtos/ImagemProduto_686e6b0bdf6a98.31642853.jpg', 'Lindo e pequeno, se encaixa em qualquer lugar!!!', 37, 'a', 'Da loja', 2, 23),
(44, 'Porta chave - Emoji ', 34.00, '', 4, '#000000', '../../src/imagens/produtos/ImagemProduto_686e6b6862ed00.15730398.jpeg', 'Lindo, combina em um quarto infantil!!!', 37, 'a', 'Da loja', 4, 7),
(45, 'Porta chave - Mario Broos', 100.00, '', 2, '#0007d1', '../../src/imagens/produtos/ImagemProduto_686e6bccbadb81.95148932.jpg', 'infantil', 37, 'a', 'Da loja', 4, 4),
(55, 'Colar de Pérolas', 79.90, '', 5, '#000000', 'colar_perolas.jpg', 'Colar elegante feito com pérolas naturais.', 36, 'i', 'Da loja', 5, 10),
(56, 'Colar de Pérolas', 79.90, '', 5, '#000000', 'colar_perolas.jpg', 'Colar elegante feito com pérolas naturais.', 36, 'i', 'Da loja', 5, 10),
(57, 'Colar de Pérolas', 79.90, '', 5, '#000000', 'colar_perolas.jpg', 'Colar elegante feito com pérolas naturais.', 36, 'i', 'Da loja', 5, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_perso`
--

CREATE TABLE `produto_perso` (
  `id_produto_perso` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto_perso`
--

INSERT INTO `produto_perso` (`id_produto_perso`, `tipo`, `descricao`) VALUES
(1, 'Pulseira personalizada', 'Pulseira feita à mão com nome gravado'),
(2, 'Quadro artesanal', 'Quadro de MDF pintado à mão'),
(3, 'Colar personalizado', 'Colar feito sob medida com nome gravado'),
(4, 'Caneca artesanal', 'Caneca pintada à mão com design exclusivo'),
(5, 'Adesivo personalizado', 'Adesivo para decoração com nome ou frase'),
(6, 'Personalizado', 'Olaaaaaaaa'),
(7, 'Personalizado', 'fbgggggggggggggggggggggggggg'),
(8, 'Personalizado', 'fbggggggggggggggggggggggdfvsfvsfvsvsvgggg'),
(9, 'Personalizado', 'dfvdfvdfvvdvdfvdvfvv'),
(10, 'Personalizado', 'Olha lá'),
(11, 'Personalizado', 'gbfgbfgbfbfbfb'),
(12, 'Personalizado', 'ddsvsdsfvsvf'),
(13, 'Personalizado', 'ddsvsdsfvsvf'),
(14, 'Personalizado', 'fnfhnfhnfnfh'),
(15, 'Personalizado', 'fnfhnfhnfnfh'),
(16, 'Personalizado', 'hfnfhnfghnfnn'),
(17, 'Personalizado', 'fgbbdbgggbgbbgb'),
(18, 'Personalizado', 'bxgbdsgbfbb'),
(19, 'Personalizado', 'vfdfzvdfvfdvdfvdfvfvdv'),
(20, 'Personalizado', 'gbdgbdbgdb'),
(21, 'Personalizado', 'dfvdfvdfvddfv'),
(22, 'Personalizado', 'dfvdfvdfvdfvvd'),
(23, 'Personalizado', 'fdvdfvdv'),
(24, 'Personalizado', 'sdcsdvfvsfvsffv'),
(25, 'Personalizado', 'vdfvdfvddv'),
(26, 'Personalizado', 'dfvdfvdvggdgdvdv'),
(27, 'Personalizado', 'gnhgnfgngnghnnn'),
(28, 'Personalizado', 'dfvdvfd'),
(29, 'Personalizado', 'fdvdvvv'),
(30, 'Personalizado', 'fzvfvuhbgjbjhbjbibil'),
(31, 'Personalizado', 'bfgbfgbfgbfgbfgbbfbfbfgbfggbfbfbfbfgb'),
(32, 'Personalizado', 'fvbdfhvbdfvjhdfvhbdfhbvihdbvidbvdfvbdyv'),
(33, 'Personalizado', 'gdbdbdgbd'),
(34, 'Personalizado', 'fvfvdfvddv'),
(35, 'Quadro Personalizado', 'Personalização com nome, data especial e frase escolhida.'),
(36, 'Quadro Personalizado', 'Personalização com nome, data especial e frase escolhida.'),
(37, 'Personalizado', 'sssonocndoncd'),
(38, 'Personalizado', 'mandiocaaaaaaaaaaaaaaa'),
(39, 'Personalizado', 'ubububuhbu'),
(40, 'personalizado', 'vvtvtvrvrvrvrv'),
(41, 'personalizado', 'bgfgbfbfbfgbgfbf'),
(42, 'personalizado', 'fgnfnfhnbhn'),
(43, 'personalizado', 'fvfvvunfviufnviufn'),
(44, 'personalizado', 'gdgdgdfggg'),
(45, 'personalizado', 'hcbjhvbjhbfjkhbjbjkb jcbjhbjfjhbfbnub'),
(46, 'personalizado', 'gertgtregfrtrtrtgtrgtr'),
(47, 'personalizado', 'vdfjjvbdjhvbfdjbfjkbjfbh'),
(48, 'personalizado', 'vdfdvfvdvvf'),
(49, 'personalizado', 'vdfdvfvdvvfdscfwccerc'),
(50, 'personalizado', 'aqui'),
(51, 'personalizado', 'bbbfdbff'),
(52, 'personalizado', 'fsdfsdf'),
(53, 'personalizado', 'sadad'),
(54, 'personalizado', 'djkfvnkdnvdkjfvj'),
(55, 'personalizado', 'svfvsfv'),
(56, 'personalizado', 'dfvfvfdsv'),
(57, 'personalizado', 'cv dfvddg'),
(58, 'personalizado', 'vddvdfvd'),
(59, 'personalizado', 'fbbfbbfbf'),
(60, 'personalizado', 'bfbfgbfbfg'),
(61, 'personalizado', 'fghfh'),
(62, 'personalizado', 'fvdvdvdvdfvvdfvdf'),
(63, 'personalizado', 'vdvfd'),
(64, 'personalizado', 'lari lari ieeeee'),
(65, 'personalizado', 'Quero assim assim assado!'),
(66, 'personalizado', 'dfvdfvdfvdfvdfvdfvdf'),
(67, 'personalizado', 'cvnsicndfivndfivbdfuvbdfuyvbduivbduiv'),
(68, 'personalizado', 'quero um copo com a cara do professor'),
(69, 'personalizado', 'da cor marron com branco.'),
(70, 'personalizado', 'asdsssvcvc'),
(71, 'personalizado', 'dasdadasdad'),
(72, 'personalizado', 'OLA MUNDO'),
(73, 'personalizado', 'eeaw'),
(74, 'personalizado', 'adad'),
(75, 'personalizado', 'ddd'),
(76, 'personalizado', 'dddsfsdf'),
(77, 'personalizado', 'dadasd'),
(78, 'personalizado', 'dsdsd'),
(79, 'personalizado', 'dssds'),
(80, 'personalizado', 'bordado em linha azul'),
(81, 'personalizado', 'dsqdfgfwdbnbdadfg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sacola`
--

CREATE TABLE `sacola` (
  `id_sacola` int(11) NOT NULL,
  `preco_frete` decimal(10,2) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `cep` char(9) NOT NULL,
  `quant_produto` int(11) NOT NULL,
  `produto_id_produto` int(11) NOT NULL,
  `cliente_id_cliente` int(11) NOT NULL,
  `pedido_id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sacola`
--

INSERT INTO `sacola` (`id_sacola`, `preco_frete`, `valor_total`, `cep`, `quant_produto`, `produto_id_produto`, `cliente_id_cliente`, `pedido_id_pedido`) VALUES
(13, 15.65, 45.44, '12342123', 1, 43, 27, 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `id_perfil` enum('cli','adm') NOT NULL,
  `foto_perfil` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `id_perfil`, `foto_perfil`) VALUES
(1, 'Ana Oliveira', 'ana@gmail.com', 'senha123', 'cli', 'teste.png'),
(2, 'Carlos Souza', 'carlos@gmail.com', 'admin456', 'adm', NULL),
(3, 'Guilherme', 'Guilherme@gmail.com', '842659713', 'adm', NULL),
(4, 'mayara', 'mayara18.santos@gmail.com', '$2y$10$p0v/NPknaa.iKHpXjlHZCuiN1AuUG9U8ZVz2MaCEOkahP4sH24MRi', 'cli', '../../src/imagens/cadastro/perfil/687f8c820b94d.png'),
(5, 'Fernanda Lima', 'fernanda@gmail.com', 'fernanda789', 'cli', NULL),
(6, 'Roberto Carlos', 'roberto@gmail.com', 'roberto123', 'adm', NULL),
(7, 'Mariana Dias', 'mariana@gmail.com', 'mariana456', 'cli', NULL),
(8, 'Lourdes Rodrigues', 'lourdesdecdic@gmail.com', '$2y$10$gZfM772FZ7nLadKBIlOFM.jFVLSTEfMxErDoQMeKrS4SDY4MsTd2q', 'cli', NULL),
(9, 'Juliana POKKK', 'adm@gmail.com', '$2y$10$1OxI.LBORVHk62tJHGtP0.iEUErjW7hI/b1iOp3VbaopTbO5oeTnG', 'adm', '6880fcad62777.png'),
(10, 'Adriane ', 'adriane333@gmail.com.br', '$2y$10$MqAoXk6W5H4BO5X5fCPeHuB1T/zFispYciWrSl5LZCIhnoC7pDE66', 'cli', '../../src/imagens/cadastro/perfil/68821fdaa9280.png'),
(11, 'Felix', 'asdasdasd@gmail.com', '$2y$10$k1PC5FsLFmxHeabzQlD2wenBCCxaPI7rZVFCYG7Pf135j0qB7KYEy', 'cli', NULL),
(12, 'felix', 'gabrielfhelixx@gmail.com', '$2y$10$NI12.BTUxyLxjAfwF.Hu6.IdXtUcxSchnVnTKlkoTH9KXZ1458AfS', 'cli', NULL),
(13, 'Beatriz ', 'beatrizsena.ux@gmail.com', '$2y$10$BOWOI3ZUBR0hKAdrUIjRb.jZq6/STj6rC5DDOeKeyCLPHs9O6JBbK', 'cli', NULL),
(14, 'Jose ', 'jg@gmail.com', '$2y$10$6pZBdCVDOHfyYkOD6iwj/.YFvDN3arjlcwlR3cSk9u4zF5gPLExem', 'cli', NULL),
(15, 'joao', 'gomes@gmail.com', '$2y$10$wNS/R2FVfCJsM1NQM1DmlelzXNfwWtirQx.VcKIAwWGJMHZ15GYVe', 'cli', NULL),
(16, 'leandro', 'rassun@gmail.com', '$2y$10$9VjyKW2I3pFohknlgIh0zu7f5VmKmTakWNwqW/8G8EKJqpZZfht8W', 'cli', '../../src/imagens/cadastro/perfil/68711bfcd3667.png'),
(17, 'g', 'guilherme54185786@aluno.ms.senac.br', '$2y$10$NizBrbDs47TtoKrzOBDctuG5veTAnw1Fh7TkyR3dOxDfo4cZBxjxu', 'cli', NULL),
(22, 'Guilherme', 'oii@gmail.com', '$2y$10$hhebfg6uI/yPap3LICkivuHqKbRja/XLnrso.LLvJAnJ7VyZGFD3q', 'cli', NULL),
(23, 'GUILHERME', 'guilhermemiranda1080@gmail.com', '$2y$10$KpDsvVUZBAEmeRg0809rYexGs9PDnv9cUj92957ZfdXN5Z/DzPUuG', 'cli', NULL),
(25, 'Luiz', 'papapapapa', '$2y$10$3RGqvzbeoodqpuc.5RDj2ebPU1rmp1TpR3f4h3OPhc/CdIgZoxgNe', 'cli', NULL),
(27, 'Luiz', 'luizhenrique@gmail.com', '$2y$10$QXSCwyzjDQTw8QKcZbWAVucNc6.ZZJCMcK4bIuhuLFGX34WKGBzjm', 'cli', NULL),
(29, 'Jhon', 'jhondoe@gmail.com', '$2y$10$pzVGExqo3kZud9XBPAnafuiVEO/f8q9hAMolWjT76Gg6cmKpOe3ey', 'cli', NULL),
(30, 'joaquim jose', 'jj@gmail.com', '$2y$10$OQK/Ih6JP5TyW7UIkpsQr.9rs1uXNN/UifXyJ5kWaizSizwv.voVO', 'cli', NULL),
(32, 'João Silva', 'joao@email.com', '123456', 'cli', NULL),
(33, 'maria paula', 'mari@gmail.com', '$2y$10$WvqtLw8u26c43V7x9nns5ODRyUi9prnr4yIFcYj7N6J1lFkYQqn/W', 'cli', NULL),
(34, 'Rafael', 'rafa34@gmail.com', '$2y$10$UVPfLT/QDH2zMA24D7y/geRdFLaNSc5/vc/CgxoqU91buGSsuZiwC', 'cli', NULL),
(35, 'henrique', 'henrique@gmail.com', '$2y$10$HEN7TUZjonZxd8VD0HeabuIeM0Zi2KQxH.juk0cDA.IC2.IVALev6', 'cli', NULL),
(36, 'Vitor ', 'vitorvitor@gmail.com', '$2y$10$.R58AbxaqgmZlrfVzCScA.tpZkdIBmy5s4/CEgEYwxiyiJoLCgkxW', 'cli', '../../src/imagens/cadastro/perfil/68823fa7a0433.jfif'),
(38, 'Maria Oliveira', 'maria.oliveira@email.com', 'senhaSegura456', 'cli', NULL),
(39, 'ana paula', 'aninha@gmail.com', '$2y$10$ywnBgWvWqLc0a.WX.8tf1Ofr8XC044p/fMGop6YPn83gZS7oWc2Jm', 'cli', NULL),
(40, 'maria alice', 'mariaalice@gmail.com', '$2y$10$9Mag9XSFgF3Ah59FS0e18OazJ/e15kPWHaoEbKVPI/VdoUUMVwjK2', 'cli', NULL),
(41, 'JOSE APARECIDO', 'joseaparecido@gmail.com', '$2y$10$2jnax9YPxMRfh4RHbyaXj.G6raVG.FzaLt8JpWXACb9aTVDqfh/T2', 'cli', NULL),
(42, 'joão gomes', 'joao@gmail.com', '$2y$10$l25PIKAcWcoF2GbAnxWd3uft74rFXqWfoYrClzYaW27imbYnYuXJa', 'cli', NULL),
(43, 'caique ', 'caique@email.com', '$2y$10$/0SQnBurAlC.nYiVL.2RZO3WIGU4R4Xl2y9LYSNi6OLeRvgv0.Hz.', 'cli', NULL),
(45, 'lourdes', 'lourdes@email.com', '$2y$10$8vpX27l1xgxEEauLowDGpurQXvv4V6BbUrk3w54iYbQfUKQOVCo5a', 'cli', NULL),
(46, 'rita', 'rita@gmail.com', '$2y$10$MXKO6oKsykZYXgPBXQrAa.uP/zv8TeuJ96eP4ui47FHHJjpwwNuxu', 'cli', NULL),
(47, 'Vitão', 'loureirovitornascimento@gmail.com', '$2y$10$EOoEkPVS32DXSQ6STKHqweMFctDKyyp24KrmNFPJP9qfJIW04okZK', 'cli', NULL),
(48, 'ze ', 'zeca@gmail.com', '$2y$10$vkfWg3gh/inVKycHdLy8I.ST4YV02pWmMP4CFsAm8V2ewhhtQL0WS', 'cli', NULL),
(49, 'carlos', 'caze@gmail.com', '$2y$10$EkcGy6mXIVMW.6fy2zVxv.tmu5HZhHstqW.nsLH9Ll2MHqaIsD02O', 'cli', NULL),
(50, 'aline', 'aline@gmail.com', '$2y$10$SsGcDRHCVhGdH3NJFDxC.uDGxZimexzl.pnO0gzVCV1aJl5RJ74x2', 'cli', NULL),
(51, 'Joaquim', 'joaquim@gmail.com', '$2y$10$fgd2jl0NgZe1Ovpta5xENuf5MG20rmhQMi55BK5HaN7omvtYV3YTe', 'cli', NULL),
(53, 'Maria Oliveira', 'maria@exemplo.com', 'senhaTeste1', 'cli', NULL),
(54, 'ZE DA MANGA', 'zedamanga@gmail.com', '$2y$10$sD07Picedw2Y1Yo54SausOLcYr04P3pgiRMP3wsXFpfbpUOQMvg8C', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(55, 'Zedamanga SEgundo', 'zedamanga2@gmail.com', '$2y$10$FQBCnjo.OPw0YKqsxy6J5udFIDAkzsXM/lYzAiB/IdZ6KnjxmoTMy', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(56, 'zedamanga terceiro', 'zedamanga3@gmail.com', '$2y$10$P5.sutTChqCVHW.yaKs3feb59sox37cOy/u5e3JTvfIyIXgUUkYiW', 'cli', '../../src/imagens/cadastro/perfil/68710362c4501.png'),
(57, 'BRUCE DICKSON', 'maden@gmail.com', '$2y$10$v7klkjYBYXjznYpkPPRio.QDYeCj5pVXA4hCeMjxH7liDgfUnvHXu', 'cli', '../../src/imagens/cadastro/perfil/6871047cd7c93.png'),
(58, 'amelia', 'amelia@gmail.com', '$2y$10$aZuN3iaBFCnEFbLur4GacuE3UPOnbQKJSOvzHxYZOGUxdyHUEKl3S', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(60, 'antonio', 'jojo@gmail.com', '$2y$10$HZoUKO8Edib0lQsFOM3QDOZyOEw6CO6mUspFfj7pnQZjFRmHwu58a', 'cli', '../../src/imagens/cadastro/perfil/6871058393a39.png'),
(61, 'Gabriel', 'gabs@gmail.com', '$2y$10$JTvbNcMa/DwH01fqjRMKiO3ORETMWpmPWu6P3XhjOszCfD39Aefyy', 'cli', '../../src/imagens/cadastro/perfil/68710700676d1.png'),
(62, 'sdcscsdcsdcsdc', 'dcsdcsd@gmail.com', '$2y$10$9FcQ1i.OeUXBJGITr7NZPOJowifTAyN2BgZ6skzmr9jTMnln51Pie', 'cli', NULL),
(63, 'joana', 'darc@gmail.com', '$2y$10$fgdr2ezN2agOnCz/hVtU2OAZoDgTUxKqDCnGA8YLzJfldTemmZony', 'cli', '../../src/imagens/cadastro/perfil/687107d432e61.png'),
(72, 'dewedwewe', 'wedwed@gmail.com', '$2y$10$rmbD4b.fbxcQEoERZk0qS.aQa/p.LmgDiWURvzbrB/nbM7d8QChNy', 'cli', NULL),
(73, 'thiagoalmeida', 'thiagoalmeida@live.com', '$2y$10$QDWezoT092i1UsS/K3dZcOUZvI9yi1aTE5rPfIrVty/CHRGtKsm36', 'cli', '../../src/imagens/cadastro/perfil/687e64827cf61.jpg'),
(74, 'manoel ', 'neco@gmail.com', '$2y$10$3cXa2mIZPDEQYm99gP/5PeHBiUUN9O2zRJpXDZkVgGBWizb1AVZwa', 'cli', '../../src/imagens/cadastro/perfil/68711cfdea5c9.png'),
(75, 'efovronn', 'fvnfon@gmail.com', '$2y$10$IlnbV3Syh8s16sywvZJKf.xOIw3IagIoHUEvYr8M394ZBQ.YWW8Cy', 'cli', NULL),
(77, 'ghgnhn', 'nghngn@gmail.com', '$2y$10$T3HUYfTTksRXrNJXHY7Ul.nZhzzCQGnsrAkV/AfDG3aLzxUlGbD1G', 'cli', NULL),
(80, 'sfvdfdvdfdv', 'sfivndfiv@gmail.com', '$2y$10$1hzSXlKPUYLEXaXNQ6X3tuIDUlkpcuaJUuEjXUZXJRkBKFr.7u8Bi', 'cli', NULL),
(83, 'olivia', 'olivia@gmail.com', '$2y$10$0SMVAytc.Sqcd.F.9EDFyePxYhwBtW.XKlz.ujfopblntNou7rcGC', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(85, 'olivia', 'oliviaaraujo@gmail.com', '$2y$10$bzcLzx6jniPVAh1sSngCbuG6yEatdBjuLykn1K5p2/5mhvA.BJsGu', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(86, 'Igor', 'igor@gmal.com', '$2y$10$X8gKP1.sudAQm38erprCHOphVDVb6vIKmmLxEKbCPEp2M3TcssaFS', 'cli', '../../src/imagens/cadastro/perfil/687fa88f4f20a.png'),
(87, 'Camila ', 'kaka@gmail.com', '$2y$10$1WacqVtnWMZhaWWPwRhDJOQr6FPwiRiLWabx1ZOhQpWlS05tgKnEe', 'cli', '../../src/imagens/cadastro/perfil/6882215d4130c.png'),
(88, 'maria de lourdes', 'maria5959525952@gmail.com', '$2y$10$mvSBtdlEx9IXY1B1E7fMlOSZ7wGuDHKkI3zJMz.dLikt.Utc.7QIS', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(90, 'lucas', 'lucas95015952259@gmail.com', '$2y$10$3FtAnVr.yd74ljGIJVbHBeyYx9isakYVloLKln5cJMMgpUBE/Irzq', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(91, 'fabiola', 'fafa@gmail.com', '$2y$10$MmA8wkJmLU3NjiAO6SvUG.431u/xXv45ve138kaOMinNPfUyQ8uj.', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(94, 'marcelo', 'celo@gmail.com', '$2y$10$RFWbQLgaYDC4X5kiRAkewuWRKuY0yyjjRuMoJ2kB9GpzWtDIA3aIu', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(97, 'patricia', 'paty@gmail.com', '$2y$10$5aoEApJzZz7w1DzdFcCHK.GoOsFYMErhXJRFqA3cMIxNe2ySvRNn6', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(100, 'fernanda ', 'fefe@gmail.com', '$2y$10$pmrYdak9NEr.eCMp1CRp1OkOc9/mccbE1/ZUAzWaZsBQ9J5PDhI/i', 'cli', '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg'),
(101, 'Paulo ', 'paulo@gmail.com', '$2y$10$hm5OTHpfB/d65QI147QvGeyvNKz4.7U0G2A27kPdapogDWTTS66j2', 'cli', '../../src/imagens/cadastro/perfil/68823d81b240e.png'),
(102, 'Rafael', 'rafa.rodriques12@gmail.com', '$2y$10$ZYbcpPIYVYnLgBIPMXiha.SR4QDtPgZ4RjCHS.oh7EQ15Lr6vZgDO', 'cli', '../../src/imagens/cadastro/perfil/688240318c623.jfif');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `avaliacao_loja`
--
ALTER TABLE `avaliacao_loja`
  ADD PRIMARY KEY (`id_avaliacao_loja`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `avaliacao_produto`
--
ALTER TABLE `avaliacao_produto`
  ADD PRIMARY KEY (`id_avaliacao_produto`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `banners_mobile`
--
ALTER TABLE `banners_mobile`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices para tabela `banners_principais`
--
ALTER TABLE `banners_principais`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices para tabela `banners_promocionais`
--
ALTER TABLE `banners_promocionais`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices para tabela `banners_secundarios`
--
ALTER TABLE `banners_secundarios`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `id_categoria` (`id_categoria`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `id_cliente` (`id_cliente`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `cpf_2` (`cpf`),
  ADD UNIQUE KEY `telefone` (`telefone`),
  ADD UNIQUE KEY `telefone_2` (`telefone`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_favoritos`),
  ADD UNIQUE KEY `id_favoritos` (`id_favoritos`),
  ADD UNIQUE KEY `produto_id_produto` (`produto_id_produto`),
  ADD KEY `cliente_id_cliente` (`cliente_id_cliente`);

--
-- Índices para tabela `imagens_produto_perso`
--
ALTER TABLE `imagens_produto_perso`
  ADD PRIMARY KEY (`id_imagens_produto_perso`),
  ADD KEY `id_produto_perso` (`id_produto_perso`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`),
  ADD UNIQUE KEY `id_pagamento` (`id_pagamento`),
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- Índices para tabela `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD UNIQUE KEY `id_pedido` (`id_pedido`),
  ADD KEY `sacola_id_sacola` (`sacola_id_sacola`),
  ADD KEY `sacola_produto_id_produto` (`sacola_produto_id_produto`),
  ADD KEY `sacola_cliente_id_cliente` (`sacola_cliente_id_cliente`),
  ADD KEY `produto_perso_id_produto_perso` (`produto_perso_id_produto_perso`),
  ADD KEY `fk_pedido_cliente` (`id_cliente`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD UNIQUE KEY `id_produto` (`id_produto`),
  ADD KEY `categoria_id_categoria` (`categoria_id_categoria`);

--
-- Índices para tabela `produto_perso`
--
ALTER TABLE `produto_perso`
  ADD PRIMARY KEY (`id_produto_perso`);

--
-- Índices para tabela `sacola`
--
ALTER TABLE `sacola`
  ADD PRIMARY KEY (`id_sacola`),
  ADD UNIQUE KEY `id_sacola` (`id_sacola`),
  ADD KEY `produto_id_produto` (`produto_id_produto`),
  ADD KEY `cliente_id_cliente` (`cliente_id_cliente`),
  ADD KEY `pedido_id_pedido` (`pedido_id_pedido`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `avaliacao_loja`
--
ALTER TABLE `avaliacao_loja`
  MODIFY `id_avaliacao_loja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `avaliacao_produto`
--
ALTER TABLE `avaliacao_produto`
  MODIFY `id_avaliacao_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `banners_mobile`
--
ALTER TABLE `banners_mobile`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `banners_principais`
--
ALTER TABLE `banners_principais`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `banners_promocionais`
--
ALTER TABLE `banners_promocionais`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `banners_secundarios`
--
ALTER TABLE `banners_secundarios`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id_favoritos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT de tabela `imagens_produto_perso`
--
ALTER TABLE `imagens_produto_perso`
  MODIFY `id_imagens_produto_perso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `produto_perso`
--
ALTER TABLE `produto_perso`
  MODIFY `id_produto_perso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `sacola`
--
ALTER TABLE `sacola`
  MODIFY `id_sacola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `avaliacao_loja`
--
ALTER TABLE `avaliacao_loja`
  ADD CONSTRAINT `avaliacao_loja_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Limitadores para a tabela `avaliacao_produto`
--
ALTER TABLE `avaliacao_produto`
  ADD CONSTRAINT `avaliacao_produto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `avaliacao_produto_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`cliente_id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`produto_id_produto`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `imagens_produto_perso`
--
ALTER TABLE `imagens_produto_perso`
  ADD CONSTRAINT `imagens_produto_perso_ibfk_1` FOREIGN KEY (`id_produto_perso`) REFERENCES `produto_perso` (`id_produto_perso`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`sacola_id_sacola`) REFERENCES `sacola` (`id_sacola`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`sacola_produto_id_produto`) REFERENCES `sacola` (`produto_id_produto`),
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`sacola_cliente_id_cliente`) REFERENCES `sacola` (`cliente_id_cliente`),
  ADD CONSTRAINT `pedido_ibfk_4` FOREIGN KEY (`produto_perso_id_produto_perso`) REFERENCES `produto_perso` (`id_produto_perso`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`categoria_id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Limitadores para a tabela `sacola`
--
ALTER TABLE `sacola`
  ADD CONSTRAINT `sacola_ibfk_1` FOREIGN KEY (`produto_id_produto`) REFERENCES `produto` (`id_produto`),
  ADD CONSTRAINT `sacola_ibfk_2` FOREIGN KEY (`cliente_id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `sacola_pedido_2fk` FOREIGN KEY (`pedido_id_pedido`) REFERENCES `pedido` (`id_pedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
