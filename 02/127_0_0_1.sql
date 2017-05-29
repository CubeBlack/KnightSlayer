-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Maio-2017 às 14:02
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ks`
--
CREATE DATABASE IF NOT EXISTS `ks` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ks`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `evento` varchar(200) NOT NULL,
  `dtevento` varchar(10) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hora` varchar(5) NOT NULL,
  `conteudo` text NOT NULL,
  `local` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `evento`, `dtevento`, `autor`, `data`, `hora`, `conteudo`, `local`) VALUES
(1, 'asdfas', '4-4-2011', 'dsaf', '2017-05-22 21:13:00', '08:30', 'adsf asdf', 'adsf'),
(2, 'asdfas', '22-5-2017', 'asdf', '2017-05-22 21:15:37', '08:30', '      adsf', 'asdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `tabuleiro` text,
  `player1` varchar(45) DEFAULT NULL,
  `player1msg` varchar(500) DEFAULT NULL,
  `player2` varchar(45) DEFAULT NULL,
  `player2msg` varchar(500) DEFAULT NULL,
  `historico` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `vez` int(2) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `tabuleiro`, `player1`, `player1msg`, `player2`, `player2msg`, `historico`, `status`, `vez`) VALUES
(24, '{"0":{"tipo":"2","posicao":"a1","situacao":""},"1":{"tipo":"3","posicao":"b1","situacao":""},"2":{"tipo":"4","posicao":"c1","situacao":""},"3":{"tipo":"5","posicao":"f3","situacao":"movido"},"4":{"tipo":"6","posicao":"e1","situacao":""},"5":{"tipo":"4","posicao":"h3","situacao":"movido"},"7":{"tipo":"2","posicao":"h1","situacao":""},"8":{"tipo":"1","posicao":"a2","situacao":""},"9":{"tipo":"1","posicao":"b2","situacao":""},"10":{"tipo":"1","posicao":"c2","situacao":""},"11":{"tipo":"1","posicao":"d2","situacao":""},"12":{"tipo":"1","posicao":"e4","situacao":"movido"},"13":{"tipo":"1","posicao":"f2","situacao":""},"14":{"tipo":"1","posicao":"g4","situacao":"movido"},"15":{"tipo":"1","posicao":"h2","situacao":""},"16":{"tipo":"8","posicao":"a8","situacao":""},"17":{"tipo":"9","posicao":"b8","situacao":""},"18":{"tipo":"10","posicao":"c8","situacao":""},"19":{"tipo":"11","posicao":"d8","situacao":"movido"},"20":{"tipo":"12","posicao":"e8","situacao":""},"21":{"tipo":"10","posicao":"f8","situacao":""},"22":{"tipo":"9","posicao":"f6","situacao":"movido"},"23":{"tipo":"8","posicao":"h8","situacao":""},"24":{"tipo":"7","posicao":"a7","situacao":""},"25":{"tipo":"7","posicao":"b7","situacao":""},"26":{"tipo":"7","posicao":"c7","situacao":""},"28":{"tipo":"7","posicao":"e6","situacao":"movido"},"29":{"tipo":"7","posicao":"f7","situacao":""},"30":{"tipo":"7","posicao":"g7","situacao":""},"31":{"tipo":"7","posicao":"h7","situacao":""}}', '1', 'VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.', '10', 'FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.', 'Jogo Desafiado', 'desafiando', 10),
(26, '{"0":{"tipo":"2","posicao":"a1","situacao":""},"1":{"tipo":"3","posicao":"b1","situacao":""},"2":{"tipo":"4","posicao":"c1","situacao":""},"3":{"tipo":"5","posicao":"d1","situacao":""},"4":{"tipo":"6","posicao":"e1","situacao":""},"5":{"tipo":"4","posicao":"f1","situacao":""},"6":{"tipo":"3","posicao":"g1","situacao":""},"7":{"tipo":"2","posicao":"h1","situacao":""},"8":{"tipo":"1","posicao":"a2","situacao":""},"9":{"tipo":"1","posicao":"b2","situacao":""},"10":{"tipo":"1","posicao":"c2","situacao":""},"11":{"tipo":"1","posicao":"d2","situacao":""},"12":{"tipo":"1","posicao":"e2","situacao":""},"13":{"tipo":"1","posicao":"f2","situacao":""},"14":{"tipo":"1","posicao":"g2","situacao":""},"15":{"tipo":"1","posicao":"h2","situacao":""},"16":{"tipo":"8","posicao":"a8","situacao":""},"17":{"tipo":"9","posicao":"b8","situacao":""},"18":{"tipo":"10","posicao":"c8","situacao":""},"19":{"tipo":"11","posicao":"d8","situacao":""},"20":{"tipo":"12","posicao":"e8","situacao":""},"21":{"tipo":"10","posicao":"f8","situacao":""},"22":{"tipo":"9","posicao":"g8","situacao":""},"23":{"tipo":"8","posicao":"h8","situacao":""},"24":{"tipo":"7","posicao":"a7","situacao":""},"25":{"tipo":"7","posicao":"b7","situacao":""},"26":{"tipo":"7","posicao":"c7","situacao":""},"27":{"tipo":"7","posicao":"d7","situacao":""},"28":{"tipo":"7","posicao":"e7","situacao":""},"29":{"tipo":"7","posicao":"f7","situacao":""},"30":{"tipo":"7","posicao":"g7","situacao":""},"31":{"tipo":"7","posicao":"h7","situacao":""}}', '1', 'VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.', '9', 'FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.', 'Jogo Desafiado', 'desafiando', 9),
(25, '{"0":{"tipo":"2","posicao":"a1","situacao":""},"1":{"tipo":"3","posicao":"b1","situacao":""},"2":{"tipo":"4","posicao":"c1","situacao":""},"3":{"tipo":"5","posicao":"d1","situacao":""},"4":{"tipo":"6","posicao":"e1","situacao":""},"5":{"tipo":"4","posicao":"f1","situacao":""},"6":{"tipo":"3","posicao":"g1","situacao":""},"7":{"tipo":"2","posicao":"h1","situacao":""},"8":{"tipo":"1","posicao":"a2","situacao":""},"9":{"tipo":"1","posicao":"c4","situacao":"movido"},"10":{"tipo":"1","posicao":"d5","situacao":"movido"},"11":{"tipo":"1","posicao":"d2","situacao":""},"12":{"tipo":"1","posicao":"e2","situacao":""},"13":{"tipo":"1","posicao":"f2","situacao":""},"14":{"tipo":"1","posicao":"g2","situacao":""},"15":{"tipo":"1","posicao":"h2","situacao":""},"16":{"tipo":"8","posicao":"a8","situacao":""},"17":{"tipo":"9","posicao":"b8","situacao":""},"18":{"tipo":"10","posicao":"c8","situacao":""},"19":{"tipo":"11","posicao":"d8","situacao":""},"20":{"tipo":"12","posicao":"e8","situacao":""},"21":{"tipo":"10","posicao":"f8","situacao":""},"22":{"tipo":"9","posicao":"g8","situacao":""},"23":{"tipo":"8","posicao":"h8","situacao":""},"24":{"tipo":"7","posicao":"a7","situacao":""},"25":{"tipo":"7","posicao":"b7","situacao":""},"28":{"tipo":"7","posicao":"e7","situacao":""},"29":{"tipo":"7","posicao":"f6","situacao":"movido"},"30":{"tipo":"7","posicao":"g7","situacao":""},"31":{"tipo":"7","posicao":"h7","situacao":""}}', '1', 'VocÃª Ã© o Player 1. PeÃ§as pretas. Aguarde o movimeto das brancas.', '9', 'FaÃ§a seu movimeto. VocÃª Ã© o Player2, PaÃ§as brancas.', 'Jogo Desafiado', 'desafiando', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `create_time`, `id`) VALUES
('CupBlack', 'danie_nerd@hotmail.com', '1', '2017-04-28 18:09:07', 1),
('asdf', 'asdf', 'asdf', NULL, 9),
('Cogitari', 'edson.vit0r@hotmail.com', '20101996yesman', NULL, 10),
('Edson', 'edson.vit0r@hotmail.com', 'yesman20101996', NULL, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;--
-- Database: `moiras`
--
CREATE DATABASE IF NOT EXISTS `moiras` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moiras`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id` int(11) NOT NULL,
  `evento` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `local` varchar(255) DEFAULT NULL,
  `descricao` text,
  `ativo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_agenda`
--

INSERT INTO `tb_agenda` (`id`, `evento`, `data`, `local`, `descricao`, `ativo`) VALUES
(1, 'sdfg', '0000-00-00 00:00:00', 'jkjk', 'jkjk', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
