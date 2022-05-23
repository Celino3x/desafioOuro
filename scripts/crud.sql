-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2022 às 14:46
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
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_empresa`
--

CREATE TABLE `cad_empresa` (
  `id` int(11) NOT NULL,
  `nome_fantasia` varchar(500) NOT NULL,
  `razao_social` varchar(500) NOT NULL,
  `cnpj_empresa` varchar(300) NOT NULL,
  `end_empresa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_empresa`
--

INSERT INTO `cad_empresa` (`id`, `nome_fantasia`, `razao_social`, `cnpj_empresa`, `end_empresa`) VALUES
(5, 'Márjoree Campos', 'Doce Marjô ', '35.300.907/0001-50', 'Travessa E'),
(6, 'C3x', 'C3x MEI', '24.526.736/0001-66', 'Rua Adolfo Lemos, 28');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_empresa`
--
ALTER TABLE `cad_empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_empresa`
--
ALTER TABLE `cad_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
