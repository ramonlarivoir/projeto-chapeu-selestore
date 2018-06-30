-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 30/06/2018 às 09:04
-- Versão do servidor: 5.7.22-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chapeuSelestore`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Mochila'),
(2, 'Blusa'),
(3, 'Caneca'),
(4, 'Livro'),
(5, 'Almofada'),
(6, 'Quadro'),
(7, 'Varinhas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `descricao` mediumtext,
  `url_imagem` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `nome_produto`, `preco`, `descricao`, `url_imagem`) VALUES
(24, 1, 'Mochila Gryffindor', 99.98, 'Confeccionada em material têxtil, a Mochila Grifinória Harry Potter possui compartimento interno, bolso externo com fechamento por zíper, alças duplas anatômicas e ajustáveis, estampa divertida por toda a peça e detalhes em material atanado. Confortável e estiloso, o acessório garante segurança para transportar seus itens do dia a dia.', '../../assets/img/5b36259292a423.60368833.jpg'),
(25, 4, 'Sketchbook - Harry Potter ', 35, 'Opções: Com Pauta ou Sem Pauta \r\n\r\n- Contracapa: Preta \r\n- Tamanho: 18 x 13 cm \r\n- Tipo: Moleskin \r\n- Bloco de anotações resinado \r\n- Páginas: 80 páginas em papel off-set amarelo \r\n- Detalhes: Elástico para fechar e fita marca página \r\n- Conteúdo da embalagem: 1 (uma) caderneta tipo sketchbook com capa dura resinada. ', '../../assets/img/5b362692026692.86965564.jpeg'),
(26, 1, 'Mochila Edwiges - Harry Potter', 75.5, 'Confeccionada em material têxtil, a Mochila Edwiges Harry Potter possui compartimento interno, bolso externo com fechamento por zíper, alças duplas anatômicas e ajustáveis, estampa divertida por toda a peça e detalhes em material atanado. Confortável e estiloso, o acessório garante segurança para transportar seus itens do dia a dia. ', '../../assets/img/5b3626f1981852.02552223.jpeg'),
(27, 2, 'Blusa Relíquias da Morte - Harry Potter', 35.9, 'Produzida em algodão e poliéster, a Blusa Relíquias da Morte HP conta com modelagem reta, manga curta e gola redonda. Na parte frontal possui bordado do símbolo das Relíquias da Morte. ', '../../assets/img/5b362730b7a604.34904276.jpeg'),
(28, 2, 'Moleton - Harry Potter', 70, 'Blusa confeccionada em moletinho confortável de algodão, apresenta modelagem ampla, mangas longas, decote redondo e padronagem lisa. Conta ainda com estampa temática localizada na parte frontal da peça. Ideal para compor diversas combinações de looks de inverno. ', '../../assets/img/5b36276d2018b9.72262214.jpeg'),
(29, 5, 'Almofada Mapa do Maroto', 35.99, 'Almofada Mapa do Maroto\r\n\r\n20x25cm', '../../assets/img/5b3627a6e3fdf5.76982605.jpeg'),
(30, 5, 'Almofada Harry Potter ', 39, 'Material de enchimento:\r\n Fibra de silicone, antialérgica', '../../assets/img/5b36283aebdb63.04539742.jpeg'),
(31, 3, 'Caneca Harry Potter Grifinória', 19.99, 'Caneca Harry Potter Grifinória\r\n\r\nFeitas em porcelana altamente resistente com sua alça e bordas arredondadas proporciona um encaixe perfeito para suas mãos, são perfeitas para deliciar sua bebida preferida! Linda caneca para você e para presentear quem você gosta. \r\n\r\nSão também totalmente resistente a micro-ondas. Pode aquecer, lavar, secar que não perde sua qualidade. ', '../../assets/img/5b3628e39032c5.26139032.jpeg'),
(32, 6, 'Poster Arte - Harry Potter', 100, 'Poster artístico de Harry Potter em material resistente ', '../../assets/img/5b362e367349b1.12044773.jpg'),
(33, 4, 'Livro HP e a Pedra Filosofal', 35.98, 'Livro Harry Potter e a Pedra Filosofal, disponível em diversas versões.', '../../assets/img/5b362fb4208592.85726970.png'),
(35, 7, 'Varinha Harry Potter', 59.9, 'Varinha Harry Potter realista em material resistente a água.', '../../assets/img/5b36316b636803.50816038.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`) VALUES
(17, 'ronaldinho', '698dc19d489c4e4db73e28a713eab07b'),
(19, 'root', '7b24afc8bc80e548d66c4e7ff72171c5'),
(20, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
