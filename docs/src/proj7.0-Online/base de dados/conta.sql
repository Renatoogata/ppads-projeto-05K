-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Maio-2018 às 12:44
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorshelp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id` int(100) NOT NULL,
  `tipo` int(1) NOT NULL,
  `crm` text NOT NULL,
  `nome` text NOT NULL,
  `endereco` text NOT NULL,
  `cep` int(15) NOT NULL,
  `plano` text NOT NULL,
  `especializacao` text NOT NULL,
  `usuario` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id`, `tipo`, `crm`, `nome`, `endereco`, `cep`, `plano`, `especializacao`, `usuario`, `senha`) VALUES
(36, 2, '454212487', 'Carlos Alberto', 'Rua Iquiririm 400', 5586000, 'Amil', 'dermatologista', 'Carlos', 'senha'),
(1, 3, '7765656', 'Renato Ide Ogata', '', 5586000, '', '', 'Administrador', 'senha123'),
(39, 2, '7894548', 'Joana Alves', 'rua dasji', 5586000, 'Amil', 'dermatologista', 'Joana', 'senha'),
(42, 2, '4561238', 'Jailson Teste', 'rua adiojdasio', 5586000, 'Amil', 'dermatologista', 'Jailson', 'senha'),
(41, 2, '456451', 'Ronaldo Teste', 'iuiiouuio', 55138, 'Amil', 'cardiologista', 'Ronaldo', 'senha'),
(37, 1, '', 'Luydson Philipe', 'rua dxddxd', 5586000, 'Amil', '', 'Luydson', 'senha'),
(38, 1, '', 'Renato Ide Ogata', 'rua Iquiririm 125', 5586000, 'Amil', '', 'Renato', 'senha'),
(43, 2, '123456', 'Jilmar Nunes', 'rua teste123', 5586000, 'Amil', 'dermatologista', 'Jilmar', 'senha'),
(44, 2, '4545612', 'Jandir Gomes', 'rua alves 185', 5586000, 'Bradesco', 'cardiologista', 'Jandir', 'senha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
