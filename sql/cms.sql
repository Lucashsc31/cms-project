-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Abr-2017 às 01:47
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(3) NOT NULL,
  `cat_nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nome`) VALUES
(1, 'PHP'),
(2, 'Mobile'),
(3, 'Marketing'),
(4, 'Empreendedorismo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_categoria_id` int(3) NOT NULL,
  `post_nome` varchar(255) NOT NULL,
  `post_autor` varchar(100) NOT NULL,
  `post_data` date NOT NULL,
  `post_imagem` text NOT NULL,
  `post_conteudo` text NOT NULL,
  `post_tags` varchar(100) NOT NULL,
  `post_status` varchar(100) NOT NULL DEFAULT 'rascunho'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_categoria_id`, `post_nome`, `post_autor`, `post_data`, `post_imagem`, `post_conteudo`, `post_tags`, `post_status`) VALUES
(1, 1, 'Eu amo a aula de PHP', 'Lucas Henrique', '2017-04-03', 'cms_post_image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada sodales nisi, ac pulvinar neque posuere ac. Suspendisse molestie a odio in porta.', 'fiap;php;aula;', 'rascunho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
