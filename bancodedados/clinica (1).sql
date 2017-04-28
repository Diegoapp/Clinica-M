-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Abr-2017 às 03:51
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cbo`
--

CREATE TABLE `cbo` (
  `id_cbo` int(50) NOT NULL,
  `nome_cbo` varchar(50) NOT NULL,
  `num_cbo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cbo`
--

INSERT INTO `cbo` (`id_cbo`, `nome_cbo`, `num_cbo`) VALUES
(1, 'Médico infectologista', '225103'),
(2, 'Médico nefrologista', '225109'),
(3, 'Médico neurocirurgião', '225260'),
(4, 'Médico neurologista', '225112');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cid`
--

CREATE TABLE `cid` (
  `id_medico` int(100) NOT NULL,
  `codigo_cid` varchar(100) NOT NULL,
  `descricao_cid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cid`
--

INSERT INTO `cid` (`id_medico`, `codigo_cid`, `descricao_cid`) VALUES
(666, '098182', 'diego');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cid10`
--

CREATE TABLE `cid10` (
  `id_medico` int(100) NOT NULL,
  `codigo_cid` varchar(100) NOT NULL,
  `descricao_cid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cid10`
--

INSERT INTO `cid10` (`id_medico`, `codigo_cid`, `descricao_cid`) VALUES
(666, '098182', 'sei la to com saco cheio ja ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(250) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `convenio` int(50) NOT NULL,
  `atendimento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `convenio`, `atendimento`) VALUES
(8, 'diego nunes vieira', 32, 0),
(9, 'karlane socorro de brito pereira', 34, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(50) NOT NULL,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ans` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `nome`, `ans`) VALUES
(1, 'Clinica São paulo', 2042);

-- --------------------------------------------------------

--
-- Estrutura da tabela `convenios`
--

CREATE TABLE `convenios` (
  `id_convenios` int(50) NOT NULL,
  `nome_convenio` varchar(50) NOT NULL,
  `logo_convenio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `convenios`
--

INSERT INTO `convenios` (`id_convenios`, `nome_convenio`, `logo_convenio`) VALUES
(30, 'Bradesco', 'img_convenios / 1485268135588764a7ba4e4jpg'),
(31, 'amil', 'img_convenios / 1485268483588766035430ejpg'),
(32, 'unimed', 'img_convenios / 1485494248588ad7e8d484cjpg'),
(33, 'assefaz', 'img_convenios / 14858948125890f49c0378djpg'),
(34, 'furnas', 'img_convenios / 14858950755890f5a3d596fjpeg'),
(35, 'medprev', 'img_convenios / 14858953065890f68a6d238jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(50) NOT NULL,
  `crm_medico` int(50) NOT NULL,
  `nome_medico` varchar(50) NOT NULL,
  `conselho_medico` varchar(30) NOT NULL,
  `uf_crm_medico` varchar(50) NOT NULL,
  `cbo_medico` varchar(50) NOT NULL,
  `senha_medico` varchar(30) NOT NULL,
  `medico_on/of` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id_medico`, `crm_medico`, `nome_medico`, `conselho_medico`, `uf_crm_medico`, `cbo_medico`, `senha_medico`, `medico_on/of`) VALUES
(18, 666, 'Diego nunes vieira', '06', 'AM', '225109', '2663', 0),
(19, 999, 'mÃ¡rcus paranÃ¡', '06', 'AL', '225109', '2663', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `id_procedimento` int(250) NOT NULL,
  `tabel_procedimento` varchar(50) NOT NULL,
  `codigo_procedimento` varchar(50) NOT NULL,
  `descricao_procedimento` varchar(250) NOT NULL,
  `unica` int(10) NOT NULL,
  `atalho` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `procedimento`
--

INSERT INTO `procedimento` (`id_procedimento`, `tabel_procedimento`, `codigo_procedimento`, `descricao_procedimento`, `unica`, `atalho`) VALUES
(0, '01', '0000000001', 'exame 1', 0, ''),
(2, '02', '0000000002', 'exame 2', 1, ''),
(3, '03', '0000000003', 'exame 3', 1, ''),
(5, '04', '0000000004', 'exame 4', 0, ''),
(6, '05', '0000000005', 'exame 5', 0, ''),
(12, '55', '2625889710', 'exame parental do cú para crescimento do anús', 0, 'Sangue'),
(13, '01', '2508251', 'exame para Prostata', 0, 'SG'),
(14, '02', '000000098', 'exame numero 5 para fazer exame completo do anus', 0, 'SG'),
(15, '12', '123456789', 'exame 11', 0, ''),
(16, '12', '0000000987', 'exame 12', 0, ''),
(17, '11', '1234567890', 'exame 15', 0, ''),
(18, '22', '2929384567', 'exame 16', 0, ''),
(19, '11', '1234567890', 'exame 18', 0, ''),
(20, '22', '2929384567', 'exame 17', 0, ''),
(21, '44', '9876543291', 'exame 20', 0, ''),
(22, '99', '4543221457', 'exame 30', 0, ''),
(23, '99', '987632908', 'exame 2424', 0, ''),
(24, '00', '888888888', 'exame 88', 0, ''),
(25, '24', '2424242424', 'exame 2424', 0, ''),
(26, '42', '420', 'exame 420', 0, 'Sangue');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

CREATE TABLE `secretaria` (
  `id_secretaria` int(50) NOT NULL,
  `nome_secretaria` varchar(50) NOT NULL,
  `senha_secretaria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `secretaria`
--

INSERT INTO `secretaria` (`id_secretaria`, `nome_secretaria`, `senha_secretaria`) VALUES
(1, 'secretaria', '123456'),
(2, 'karlane', '2779');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(30) NOT NULL,
  `crm` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `crm`, `password`) VALUES
(1, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbo`
--
ALTER TABLE `cbo`
  ADD PRIMARY KEY (`id_cbo`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`id_convenios`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indexes for table `procedimento`
--
ALTER TABLE `procedimento`
  ADD PRIMARY KEY (`id_procedimento`);

--
-- Indexes for table `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbo`
--
ALTER TABLE `cbo`
  MODIFY `id_cbo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `convenios`
--
ALTER TABLE `convenios`
  MODIFY `id_convenios` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `procedimento`
--
ALTER TABLE `procedimento`
  MODIFY `id_procedimento` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
