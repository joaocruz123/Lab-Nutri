-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2016 às 20:53
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labnutri`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idAgendamento` int(11) NOT NULL,
  `turnoAgend` varchar(15) NOT NULL,
  `diaAgend` date NOT NULL,
  `statusAgend` varchar(12) NOT NULL,
  `razaoAgend` varchar(45) NOT NULL,
  `responsavelProf` int(11) NOT NULL,
  `analise_idanalise` int(11) NOT NULL,
  `analise_experimento_idexperimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nomeAluno` varchar(45) NOT NULL,
  `cpfAluno` int(15) NOT NULL,
  `emailAluno` varchar(50) NOT NULL,
  `matAluno` int(15) NOT NULL,
  `cursoAluno` varchar(45) NOT NULL,
  `faculAluno` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nomeAluno`, `cpfAluno`, `emailAluno`, `matAluno`, `cursoAluno`, `faculAluno`) VALUES
(1, 'Rafael Souza', 1898754370, 'rafa@gmail.com', 1234567, 'Engenharia da Computação', 'Universidade Federal do Pará'),
(2, 'Lucas Silveira', 1858756320, 'lsilveira@email.com', 9876543, 'Sistemas de Informação', 'Faculdade de Castanhal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `analise`
--

CREATE TABLE `analise` (
  `idanalise` int(11) NOT NULL,
  `tipoAnali` varchar(45) DEFAULT NULL,
  `descricaoAnali` varchar(45) DEFAULT NULL,
  `dataRealAnali` date DEFAULT NULL,
  `experimento_idexperimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `idequipamento` int(11) NOT NULL,
  `nomeEquip` varchar(45) DEFAULT NULL,
  `descEquip` varchar(45) DEFAULT NULL,
  `qtdEquip` varchar(45) DEFAULT NULL,
  `statusEquip` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento_has_analise`
--

CREATE TABLE `equipamento_has_analise` (
  `equipamento_idequipamento` int(11) NOT NULL,
  `analise_idanalise` int(11) NOT NULL,
  `qtdUtlEquip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experimento`
--

CREATE TABLE `experimento` (
  `idexperimento` int(11) NOT NULL,
  `nomeExp` varchar(45) NOT NULL,
  `dataInicioExp` date NOT NULL,
  `dataFinalExp` date NOT NULL,
  `qtdAnimaisExp` int(11) NOT NULL,
  `qtdTratExp` int(11) NOT NULL,
  `dispTratExp` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experimento_has_aluno`
--

CREATE TABLE `experimento_has_aluno` (
  `aluno_idAluno` int(11) NOT NULL,
  `experimento_idexperimento` int(11) NOT NULL,
  `professor_idprofessor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `idLocal` int(11) NOT NULL,
  `nomeLocal` varchar(45) NOT NULL,
  `descLocal` varchar(45) NOT NULL,
  `dataCriaLocal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local_has_agendamento`
--

CREATE TABLE `local_has_agendamento` (
  `local_idLocal` int(11) NOT NULL,
  `agendamento_idAgendamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reagente`
--

CREATE TABLE `reagente` (
  `idreagente` int(11) NOT NULL,
  `nomeReag` varchar(45) NOT NULL,
  `formulaReag` varchar(45) NOT NULL,
  `qtdReag` int(11) NOT NULL,
  `dataValReag` date NOT NULL,
  `proprietarioReag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reagente_has_analise`
--

CREATE TABLE `reagente_has_analise` (
  `reagente_idreagente` int(11) NOT NULL,
  `analise_idanalise` int(11) NOT NULL,
  `qtdUtilReag` int(11) DEFAULT NULL,
  `reagente_has_analisecol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultadoexp`
--

CREATE TABLE `resultadoexp` (
  `experimento_idexperimento` int(11) NOT NULL,
  `prazoExp` tinyint(1) NOT NULL,
  `DescResul` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(45) NOT NULL,
  `mat/siapUser` varchar(12) NOT NULL,
  `dataNacsUser` date NOT NULL,
  `emailUser` varchar(45) NOT NULL,
  `senhaUser` varchar(32) NOT NULL,
  `tipoUser` varchar(20) NOT NULL,
  `subNomeUser` varchar(45) NOT NULL,
  `cpfUser` varchar(11) NOT NULL,
  `rgUser` varchar(10) NOT NULL,
  `foneUser` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUser`, `nomeUser`, `mat/siapUser`, `dataNacsUser`, `emailUser`, `senhaUser`, `tipoUser`, `subNomeUser`, `cpfUser`, `rgUser`, `foneUser`) VALUES
(1, 'João Paulo Franco da Cruz', '1234567', '1993-03-20', 'joaofranco.cruz@gmail.com', '123456', 'adm', 'joaocruz', '01859686273', '5140860', '99999999999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vidraria`
--

CREATE TABLE `vidraria` (
  `idvidraria` int(11) NOT NULL,
  `nomeVid` varchar(45) DEFAULT NULL,
  `qtdVid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vidraria_has_analise`
--

CREATE TABLE `vidraria_has_analise` (
  `vidraria_idvidraria` int(11) NOT NULL,
  `analise_idanalise` int(11) NOT NULL,
  `qtdUtilVid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idAgendamento`),
  ADD KEY `fk_agendamento_analise1_idx` (`analise_idanalise`,`analise_experimento_idexperimento`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Indexes for table `analise`
--
ALTER TABLE `analise`
  ADD PRIMARY KEY (`idanalise`,`experimento_idexperimento`),
  ADD KEY `fk_analise_experimento1_idx` (`experimento_idexperimento`);

--
-- Indexes for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`idequipamento`);

--
-- Indexes for table `equipamento_has_analise`
--
ALTER TABLE `equipamento_has_analise`
  ADD PRIMARY KEY (`equipamento_idequipamento`,`analise_idanalise`),
  ADD KEY `fk_equipamento_has_analise_analise1_idx` (`analise_idanalise`),
  ADD KEY `fk_equipamento_has_analise_equipamento1_idx` (`equipamento_idequipamento`);

--
-- Indexes for table `experimento`
--
ALTER TABLE `experimento`
  ADD PRIMARY KEY (`idexperimento`);

--
-- Indexes for table `experimento_has_aluno`
--
ALTER TABLE `experimento_has_aluno`
  ADD PRIMARY KEY (`aluno_idAluno`,`experimento_idexperimento`),
  ADD KEY `fk_experimento_has_aluno_aluno1_idx` (`aluno_idAluno`),
  ADD KEY `fk_experimento_has_aluno_experimento1_idx` (`experimento_idexperimento`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`idLocal`);

--
-- Indexes for table `local_has_agendamento`
--
ALTER TABLE `local_has_agendamento`
  ADD PRIMARY KEY (`local_idLocal`,`agendamento_idAgendamento`),
  ADD KEY `fk_local_has_agendamento_agendamento1_idx` (`agendamento_idAgendamento`),
  ADD KEY `fk_local_has_agendamento_local1_idx` (`local_idLocal`);

--
-- Indexes for table `reagente`
--
ALTER TABLE `reagente`
  ADD PRIMARY KEY (`idreagente`);

--
-- Indexes for table `reagente_has_analise`
--
ALTER TABLE `reagente_has_analise`
  ADD PRIMARY KEY (`reagente_idreagente`,`analise_idanalise`),
  ADD KEY `fk_reagente_has_analise_analise1_idx` (`analise_idanalise`),
  ADD KEY `fk_reagente_has_analise_reagente1_idx` (`reagente_idreagente`);

--
-- Indexes for table `resultadoexp`
--
ALTER TABLE `resultadoexp`
  ADD PRIMARY KEY (`experimento_idexperimento`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `vidraria`
--
ALTER TABLE `vidraria`
  ADD PRIMARY KEY (`idvidraria`);

--
-- Indexes for table `vidraria_has_analise`
--
ALTER TABLE `vidraria_has_analise`
  ADD PRIMARY KEY (`vidraria_idvidraria`,`analise_idanalise`),
  ADD KEY `fk_vidraria_has_analise_analise1_idx` (`analise_idanalise`),
  ADD KEY `fk_vidraria_has_analise_vidraria1_idx` (`vidraria_idvidraria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
