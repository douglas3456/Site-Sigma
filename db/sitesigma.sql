-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jul-2022 às 19:15
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`, `Ativo`) VALUES
(1, 'gatinhos', 1),
(2, 'cachorros\r\n', 1),
(3, 'Animais', 1),
(4, 'homens e mulheres', 1),
(5, 'animais selvagens', 1),
(6, 'Arte', 1),
(7, 'Sem noção', 1),
(8, 'comparação', 1),
(9, 'presidencia', 1),
(10, 'coisas do dia a dia', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produtoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` longtext NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `preco` float NOT NULL,
  `CategoriaID` int(11) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produtoID`, `Nome`, `Descricao`, `imagem`, `preco`, `CategoriaID`, `Ativo`) VALUES
(1, 'capivara legal', 'capivara legal', 'capivaralegal.JPG', 1200, 1, 1),
(2, 'leão sério ', 'leão sério', 'leãosério.jpg', 15000, 1, 1),
(3, 'Cachorro soriso', 'cachorro sorrindo', 'cachorrosoriso.jpg', 3000, 1, 1),
(4, 'Macaco filosofo', 'Macaco filosofo', 'macacofilosofo.jpg', 150000, 1, 1),
(5, 'Gato Emo', 'Gato Emo', 'gatoemo.jpeg', 15000, 1, 1),
(6, 'Coelho fofo ', 'Coelho fofo ', 'coelho.jpg', 3000, 1, 1),
(7, 'o grito', 'o grito', 'grito.jpg', 200, 1, 1),
(8, 'cartinha da obediência', 'cartinha da obediência', 'cartinha.jpg', 4000, 1, 1),
(9, 'homem vs mulher', 'Dessespero de cada um', 'desespero.jpg', 1340, 1, 1),
(10, 'Homens', 'O pensamento do homem', 'homens.jpg', 100, 1, 1),
(11, 'mulher', 'Mulher no volante', 'mulher.jpg', 300, 1, 1),
(12, 'presidente', 'palmeiras', 'palmerense.jpg', 20, 1, 1),
(13, 'Criancas', 'gerações', 'crianças.jpg', 300, 1, 1),
(14, 'Ostentando a riqueza', 'como se sentir ganhando na loteria', 'ostentação.jpg', 90, 1, 1),
(15, 'vingança', 'quem gosta do frio', 'cachorro.jpg', 90, 1, 1),
(16, 'Hipocrisia', 'hipocrisia vegana', 'hipocrisia.jpg', 1200, 1, 1),
(17, 'Investindo', 'investindo no marketing', 'investir.jpg', 12, 1, 1),
(18, 'Piada', 'comédia de ouro', 'piada.jpg', 700, 1, 1),
(19, 'Maquiagem ', 'teste a maquiagem', 'maquiagem.jpg', 800, 1, 1),
(20, 'Gato triste', 'Gato triste', 'triste.jpg', 10.9, 1, 1),
(21, 'beleza', 'como pensão e como realmente sou', 'beleza.jpg', 1.23, 1, 1),
(22, 'gasolina', 'não adianta', 'gsolina.jpeg', 960.9, 1, 1),
(23, 'Sad music', 'quando quer sofrer', 'sad.jpg', 814, 1, 1),
(24, 'arte', 'comtmplar', 'arte.jpg', 50, 1, 1),
(25, 'servir', 'mulher servido', 'servir.jpg', 1234, 1, 1),
(26, 'sacanagem', 'até as artes falando para pagar o boleto', 'sacanagem.jpg', 100, 1, 1),
(27, 'vacina', 'cadê?', 'vacina.jpg', 600, 1, 1),
(28, 'Mona Lisa', 'lição de moral', 'monalisa.jpg', 350, 1, 1),
(29, 'sapato', 'irrita', 'sapato.jpg', 730, 1, 1),
(30, 'Reflexo', 'quando quero melhorar minha auto estima', 'auto estima.jpg', 674, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produtoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produtoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
