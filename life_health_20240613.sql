-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2024 às 00:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `life_health`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `signup`
--

CREATE TABLE `signup` (
  `Primeiro_Nome` varchar(30) NOT NULL,
  `Ultimo_Nome` varchar(30) NOT NULL,
  `NoCidadao` int(8) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `signup`
--

INSERT INTO `signup` (`Primeiro_Nome`, `Ultimo_Nome`, `NoCidadao`, `Password`) VALUES
('Rui', 'Inacio', 1234, '96f0f08c0188ba04898ce8cc465c19c4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utentes`
--

CREATE TABLE `utentes` (
  `Nome` varchar(150) NOT NULL,
  `Idade` int(3) NOT NULL,
  `NoCidadao` int(20) NOT NULL,
  `Número` int(13) NOT NULL,
  `Morada` varchar(100) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `Diabetes` int(5) NOT NULL,
  `Colesterol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`NoCidadao`);

--
-- Índices para tabela `utentes`
--
ALTER TABLE `utentes`
  ADD PRIMARY KEY (`NoCidadao`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `utentes`
--
ALTER TABLE `utentes`
  ADD CONSTRAINT `utentes_ibfk_1` FOREIGN KEY (`NoCidadao`) REFERENCES `signup` (`NoCidadao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
