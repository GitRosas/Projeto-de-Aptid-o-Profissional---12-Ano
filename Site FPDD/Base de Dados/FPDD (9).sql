-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2022 às 00:34
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fpdd_final1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `associacao_distrital`
--

CREATE TABLE `associacao_distrital` (
  `Cod_Associacao` int(11) NOT NULL,
  `Nome` varchar(60) DEFAULT NULL,
  `Local` varchar(40) DEFAULT NULL,
  `Email` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `associacao_distrital`
--

INSERT INTO `associacao_distrital` (`Cod_Associacao`, `Nome`, `Local`, `Email`) VALUES
(1, 'Associação de Dança Baixo Minho', 'Famalicão', 'associacaodancadesportiva@baixominho.pt'),
(2, 'Associação de Dança Portuense', 'Vila Nova de Gaia', 'addsdp@gmail.com'),
(3, 'Associação de Dança de Santarém', 'Tremez', 'presidenteadds@adds.pt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atletas_inscritos`
--

CREATE TABLE `atletas_inscritos` (
  `Dorsal` int(11) NOT NULL,
  `Nome_atleta` varchar(100) DEFAULT NULL,
  `Cod_Escola` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atletas_inscritos`
--

INSERT INTO `atletas_inscritos` (`Dorsal`, `Nome_atleta`, `Cod_Escola`) VALUES
(1, 'Tiago e Fernanda', 4),
(2, 'Luís e Joana', 4),
(3, 'Rogério e Maria', 1),
(4, 'António e Marcela', 1),
(5, 'Bernardo e Mariana', 2),
(6, 'Rui e Mafalda', 2),
(7, 'João e Matilde', 3),
(8, 'Miguel e Carolina', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atletas_prova`
--

CREATE TABLE `atletas_prova` (
  `Cod_Prova` int(11) NOT NULL,
  `Dorsal` int(11) DEFAULT NULL,
  `Cod_Danca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atletas_prova`
--

INSERT INTO `atletas_prova` (`Cod_Prova`, `Dorsal`, `Cod_Danca`) VALUES
(6, 7, 6),
(6, 7, 10),
(5, 3, 5),
(5, 4, 5),
(5, 4, 10),
(8, 4, 9),
(3, 3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `danca`
--

CREATE TABLE `danca` (
  `Cod_Danca` int(11) NOT NULL,
  `Nome_Danca` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `danca`
--

INSERT INTO `danca` (`Cod_Danca`, `Nome_Danca`) VALUES
(1, 'Samba'),
(2, 'ChaChaCha'),
(3, 'Rumba'),
(4, 'Passo Doble'),
(5, 'Jive'),
(6, 'Valsa Inglesa'),
(7, 'Tango'),
(8, 'Valsa Vianense'),
(9, 'Slow Foxtrot'),
(10, 'Quick Step');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `Cod_Escola` int(11) NOT NULL,
  `Nome_escola` varchar(30) DEFAULT NULL,
  `Morada` varchar(40) DEFAULT NULL,
  `Contacto` int(11) DEFAULT NULL,
  `Cod_Associacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`Cod_Escola`, `Nome_escola`, `Morada`, `Contacto`, `Cod_Associacao`) VALUES
(1, 'Amigos das Danças', 'São João da Madeira', 91, 2),
(2, 'Apolo Famalicão', 'Famalicão', 96, 1),
(3, 'Ritmo das Formas', 'Vagos', 92, 2),
(4, 'Alunos de Apolo ', 'Lisboa', 93, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `juris`
--

CREATE TABLE `juris` (
  `Cod_Juri` varchar(1) NOT NULL,
  `Nome` varchar(30) DEFAULT NULL,
  `Pais` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `juris`
--

INSERT INTO `juris` (`Cod_Juri`, `Nome`, `Pais`) VALUES
('A', 'António Almeida', 'Espanha'),
('B', 'Beatriz Rebelo', 'Jamaica'),
('C', 'Joaquim Oliveira', 'Portugal'),
('D', 'Margarida Pereira', 'Finlândia'),
('E', 'Inês Castro ', 'África do Sul'),
('F', 'Francisco Martins', 'França');

-- --------------------------------------------------------

--
-- Estrutura da tabela `juris_prova`
--

CREATE TABLE `juris_prova` (
  `Cod_Juri` varchar(1) NOT NULL,
  `Cod_Prova` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `juris_prova`
--

INSERT INTO `juris_prova` (`Cod_Juri`, `Cod_Prova`) VALUES
('A', 5),
('A', 6),
('B', 5),
('B', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `juris_prova_resultado`
--

CREATE TABLE `juris_prova_resultado` (
  `Cod_Juri` varchar(1) NOT NULL,
  `Dorsal` int(11) NOT NULL,
  `Cod_Prova` int(11) NOT NULL,
  `Cod_Danca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `juris_prova_resultado`
--

INSERT INTO `juris_prova_resultado` (`Cod_Juri`, `Dorsal`, `Cod_Prova`, `Cod_Danca`) VALUES
('A', 3, 5, 5),
('A', 4, 5, 10),
('B', 3, 5, 5),
('B', 4, 6, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `Cod_User` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`Cod_User`, `username`, `email`, `password`) VALUES
(11, 'admin', 'joaorosa.aveiro@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'teste', 'margaridajmsantos@hotmail.com', '698dc19d489c4e4db73e28a713eab07b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_juri`
--

CREATE TABLE `login_juri` (
  `Id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `N_cedula` int(11) NOT NULL,
  `Nome` varchar(30) DEFAULT NULL,
  `Idade` int(11) DEFAULT NULL,
  `Cod_Escola` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`N_cedula`, `Nome`, `Idade`, `Cod_Escola`) VALUES
(155, 'Sérgio Mendes', 45, 1),
(166, 'Ricardo Oliveira', 30, 2),
(199, 'Telmo Madeira', 32, 3),
(200, 'Vanessa Ferrão', 31, 1),
(500, 'André Pereira', 26, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas`
--

CREATE TABLE `provas` (
  `Cod_Prova` int(11) NOT NULL,
  `Nome_Prova` varchar(30) DEFAULT NULL,
  `Escalao` varchar(30) DEFAULT NULL,
  `Hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `provas`
--

INSERT INTO `provas` (`Cod_Prova`, `Nome_Prova`, `Escalao`, `Hora`) VALUES
(3, 'Final Juniores 1 Iniciados Sta', 'Juniores 1', '10:30:00'),
(4, 'Final Profissionais Standard', 'Profissionais', '21:20:00'),
(5, 'Séniores 2 Open Latinas', 'Séniores 2', '19:15:00'),
(6, 'Juniores 2 Open Standard', 'Juniores 2 Open ', '20:25:00'),
(7, 'Juventude Pré-Open Latinas', 'Juventude Pré-Open ', '16:30:00'),
(8, 'Juvenis Standard', 'Juvenil', '18:20:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova_danca`
--

CREATE TABLE `prova_danca` (
  `Cod_Prova` int(11) NOT NULL,
  `Cod_Danca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prova_danca`
--

INSERT INTO `prova_danca` (`Cod_Prova`, `Cod_Danca`) VALUES
(3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE `resultados` (
  `Dorsal_resultados` int(11) NOT NULL,
  `Colocacao_danca` int(11) NOT NULL,
  `Colocacao_final` int(11) NOT NULL,
  `Cod_Juri` varchar(1) NOT NULL,
  `Cod_Danca` int(11) NOT NULL,
  `Cod_Prova` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resultados`
--

INSERT INTO `resultados` (`Dorsal_resultados`, `Colocacao_danca`, `Colocacao_final`, `Cod_Juri`, `Cod_Danca`, `Cod_Prova`) VALUES
(3, 2, 4, 'A', 6, 6),
(3, 1, 1, 'B', 5, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `associacao_distrital`
--
ALTER TABLE `associacao_distrital`
  ADD PRIMARY KEY (`Cod_Associacao`);

--
-- Índices para tabela `atletas_inscritos`
--
ALTER TABLE `atletas_inscritos`
  ADD PRIMARY KEY (`Dorsal`),
  ADD KEY `Cod_Escola` (`Cod_Escola`);

--
-- Índices para tabela `atletas_prova`
--
ALTER TABLE `atletas_prova`
  ADD KEY `Dorsal` (`Dorsal`),
  ADD KEY `Cod_Danca` (`Cod_Danca`),
  ADD KEY `Cod_Prova` (`Cod_Prova`);

--
-- Índices para tabela `danca`
--
ALTER TABLE `danca`
  ADD PRIMARY KEY (`Cod_Danca`);

--
-- Índices para tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`Cod_Escola`),
  ADD KEY `Cod_Associacao` (`Cod_Associacao`);

--
-- Índices para tabela `juris`
--
ALTER TABLE `juris`
  ADD PRIMARY KEY (`Cod_Juri`);

--
-- Índices para tabela `juris_prova`
--
ALTER TABLE `juris_prova`
  ADD PRIMARY KEY (`Cod_Juri`,`Cod_Prova`),
  ADD KEY `Cod_Prova` (`Cod_Prova`),
  ADD KEY `Cod_Juri` (`Cod_Juri`);

--
-- Índices para tabela `juris_prova_resultado`
--
ALTER TABLE `juris_prova_resultado`
  ADD PRIMARY KEY (`Cod_Juri`,`Dorsal`,`Cod_Prova`,`Cod_Danca`),
  ADD KEY `Cod_Juri` (`Cod_Juri`,`Dorsal`,`Cod_Prova`),
  ADD KEY `Cod_Danca` (`Cod_Danca`),
  ADD KEY `Dorsal` (`Dorsal`),
  ADD KEY `Cod_Prova` (`Cod_Prova`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Cod_User`);

--
-- Índices para tabela `login_juri`
--
ALTER TABLE `login_juri`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`N_cedula`),
  ADD KEY `Cod_Escola` (`Cod_Escola`);

--
-- Índices para tabela `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`Cod_Prova`);

--
-- Índices para tabela `prova_danca`
--
ALTER TABLE `prova_danca`
  ADD KEY `Cod_Prova` (`Cod_Prova`),
  ADD KEY `Cod_Danca` (`Cod_Danca`);

--
-- Índices para tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`Dorsal_resultados`,`Cod_Juri`,`Cod_Danca`,`Cod_Prova`),
  ADD UNIQUE KEY `Cod_Danca` (`Cod_Danca`),
  ADD UNIQUE KEY `Cod_Prova` (`Cod_Prova`),
  ADD KEY `Cod_Juri` (`Cod_Juri`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `associacao_distrital`
--
ALTER TABLE `associacao_distrital`
  MODIFY `Cod_Associacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `atletas_inscritos`
--
ALTER TABLE `atletas_inscritos`
  MODIFY `Dorsal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `danca`
--
ALTER TABLE `danca`
  MODIFY `Cod_Danca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `escolas`
--
ALTER TABLE `escolas`
  MODIFY `Cod_Escola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `Cod_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `login_juri`
--
ALTER TABLE `login_juri`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `provas`
--
ALTER TABLE `provas`
  MODIFY `Cod_Prova` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atletas_inscritos`
--
ALTER TABLE `atletas_inscritos`
  ADD CONSTRAINT `atletas_inscritos_ibfk_1` FOREIGN KEY (`Cod_Escola`) REFERENCES `escolas` (`Cod_Escola`);

--
-- Limitadores para a tabela `atletas_prova`
--
ALTER TABLE `atletas_prova`
  ADD CONSTRAINT `atletas_prova_ibfk_1` FOREIGN KEY (`Cod_Prova`) REFERENCES `provas` (`Cod_Prova`),
  ADD CONSTRAINT `atletas_prova_ibfk_2` FOREIGN KEY (`Dorsal`) REFERENCES `atletas_inscritos` (`Dorsal`),
  ADD CONSTRAINT `atletas_prova_ibfk_3` FOREIGN KEY (`Cod_Danca`) REFERENCES `danca` (`Cod_Danca`);

--
-- Limitadores para a tabela `escolas`
--
ALTER TABLE `escolas`
  ADD CONSTRAINT `escolas_ibfk_1` FOREIGN KEY (`Cod_Associacao`) REFERENCES `associacao_distrital` (`Cod_Associacao`);

--
-- Limitadores para a tabela `juris_prova`
--
ALTER TABLE `juris_prova`
  ADD CONSTRAINT `juris_prova_ibfk_1` FOREIGN KEY (`Cod_Prova`) REFERENCES `provas` (`Cod_Prova`),
  ADD CONSTRAINT `juris_prova_ibfk_2` FOREIGN KEY (`Cod_Juri`) REFERENCES `juris` (`Cod_Juri`);

--
-- Limitadores para a tabela `juris_prova_resultado`
--
ALTER TABLE `juris_prova_resultado`
  ADD CONSTRAINT `juris_prova_resultado_ibfk_1` FOREIGN KEY (`Cod_Danca`) REFERENCES `atletas_prova` (`Cod_Danca`),
  ADD CONSTRAINT `juris_prova_resultado_ibfk_2` FOREIGN KEY (`Dorsal`) REFERENCES `atletas_prova` (`Dorsal`),
  ADD CONSTRAINT `juris_prova_resultado_ibfk_3` FOREIGN KEY (`Cod_Prova`) REFERENCES `atletas_prova` (`Cod_Prova`),
  ADD CONSTRAINT `juris_prova_resultado_ibfk_4` FOREIGN KEY (`Cod_Juri`) REFERENCES `juris_prova` (`Cod_Juri`);

--
-- Limitadores para a tabela `professores`
--
ALTER TABLE `professores`
  ADD CONSTRAINT `professores_ibfk_1` FOREIGN KEY (`Cod_Escola`) REFERENCES `escolas` (`Cod_Escola`);

--
-- Limitadores para a tabela `prova_danca`
--
ALTER TABLE `prova_danca`
  ADD CONSTRAINT `prova_danca_ibfk_1` FOREIGN KEY (`Cod_Prova`) REFERENCES `provas` (`Cod_Prova`),
  ADD CONSTRAINT `prova_danca_ibfk_2` FOREIGN KEY (`Cod_Danca`) REFERENCES `danca` (`Cod_Danca`);

--
-- Limitadores para a tabela `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`Dorsal_resultados`) REFERENCES `juris_prova_resultado` (`Dorsal`),
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`Cod_Prova`) REFERENCES `juris_prova_resultado` (`Cod_Prova`),
  ADD CONSTRAINT `resultados_ibfk_3` FOREIGN KEY (`Cod_Danca`) REFERENCES `juris_prova_resultado` (`Cod_Danca`),
  ADD CONSTRAINT `resultados_ibfk_4` FOREIGN KEY (`Cod_Juri`) REFERENCES `juris_prova_resultado` (`Cod_Juri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
