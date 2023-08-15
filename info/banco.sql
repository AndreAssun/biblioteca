-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2023 às 21:35
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `nome_livro` varchar(255) NOT NULL,
  `preco` float DEFAULT NULL,
  `imagem` varchar(300) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `isbn` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `nome_livro`, `preco`, `imagem`, `autor`, `isbn`) VALUES
(18, 'CSS Avançado', 33, 'cssAvancado.jpg', 'João Azeitona', '2434'),
(19, 'JavaScript do básico ao avançado', 21, 'javascript.jpg', 'Pereira Neves', '12211'),
(20, 'HMTL Básico', 19, NULL, 'Fafá Samires', '3433'),
(21, 'PHP para iniciantes', 19, NULL, 'Rogério Marques', '1234'),
(22, 'JavaScript: O Guia Definitivo', 33, NULL, 'Fernando Marques', '1322'),
(23, 'Computação na Educação Básica: Fundamentos e Experiências Paulo Blikstein', 55, NULL, 'Paulo Blikstein', '5644'),
(24, 'Código limpo: Habilidades práticas do Agile Software', 29, NULL, 'Robert C. Martin', '5644'),
(25, 'Problemas Clássicos de Ciência da Computação com Python', 50, NULL, 'Dark Movies', '3243'),
(26, 'Algoritmos: Teoria e Prática', 45, NULL, 'Rogério Rodrigues', '2343'),
(27, 'Data Science do Zero - Primeiras Regras Com o Python', 44, NULL, 'Joel Grus', '4554'),
(28, 'Mestres do PHP e MySQL', 0, NULL, 'Pedro Pistol', '3232'),
(29, 'Capão Pecado', 99, NULL, 'Ferrez', '35556');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome`, `email`, `senha`) VALUES
(11, 'Andre', 'teste@teste', '1234'),



--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
