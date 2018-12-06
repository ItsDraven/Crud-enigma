-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2018 às 11:41
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcao_caixa`
--

CREATE TABLE `recepcao_caixa` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `localidade` text NOT NULL,
  `departamento` text NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `processador` text NOT NULL,
  `motherboard` text NOT NULL,
  `tipo_gpu` text NOT NULL,
  `nome_grafica` text NOT NULL,
  `megas_grafica` text NOT NULL,
  `tipo_hd` text NOT NULL,
  `quant_hd` text NOT NULL,
  `ram` text NOT NULL,
  `stick_ram` text NOT NULL,
  `ram_total` text NOT NULL,
  `Slot_DIMM0` text NOT NULL,
  `Slot_DIMM1` text NOT NULL,
  `Slot_DIMM2` text NOT NULL,
  `Slot_DIMM3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recepcao_caixa`
--

INSERT INTO `recepcao_caixa` (`id`, `firstname`, `localidade`, `departamento`, `lastname`, `address`, `processador`, `motherboard`, `tipo_gpu`, `nome_grafica`, `megas_grafica`, `tipo_hd`, `quant_hd`, `ram`, `stick_ram`, `ram_total`, `Slot_DIMM0`, `Slot_DIMM1`, `Slot_DIMM2`, `Slot_DIMM3`) VALUES
(2, 'Dum-Celeste2018', 'Dume', 'RecepÃ§Ã£o e Caixa', '192.168.26.46', 'Windows 10 Professional (x64) Version 1709', 'Intel Core i3-7100', 'H110M-A/M.2', 'gddr3', 'NVIDIA GeForce GT 710', '2 gb', 'SSD', '1', 'DDR4', '1', '8 gb', 'Inutilizado', '8192 mb', 'Inutilizado', 'Inutilizado'),
(3, 'Dume-Mjose', 'Dume', 'RecepÃ§Ã£o e Caixa', '192.168.26.44', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i5-2320', 'P8B WS', 'onboard', ' ', ' ', 'HDD', '1', 'DDR3', '1', '4 gb', 'Inutilizado', '4096 mb', 'Inutilizado', 'Inutilizado'),
(4, 'Dum-Julia15', 'Dume', 'RecepÃ§Ã£o e Caixa', '192.168.26.81', 'Windows 7 Professional Service Pack 1', 'Intel Pentium 4', 'P5P800-MX', 'onboard', ' ', ' ', 'HDD', '1', 'DDR', '4', '2 gb', '512 mb', '512 mb', '512 mb', '512 mb'),
(5, 'Dum-Rext0', 'Dume', 'RecepÃ§Ã£o e Caixa', '192.168.26.42', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Pentium 4', 'G41C-GS', 'onboard', ' ', ' ', 'HDD', '1', 'DDR3 1333(OC) + DDR2 800', '1', '4 gb', '4096 mb', 'Inutilizado', 'Inutilizado', 'Inutilizado'),
(6, 'Dum-Rext1', 'Dume', 'RecepÃ§Ã£o e Caixa', '192.168.26.40', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Pentium 4', 'G41C-GS', 'onboard', ' ', ' ', 'HDD', '1', 'DDR3 1333(OC) + DDR2 800', '1', '4 gb', '4096 mb', 'Inutilizado', 'Inutilizado', 'Inutilizado'),
(7, 'DUM-Arm01', 'Dume', 'Armazem de pneus', '192.168.26.16', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core 2 Duo 4300', 'P5L-VM 1394', 'onboard', ' ', ' ', 'HDD', '1', 'DDR2', '2', '2 gb', '1024', '1024', 'Inutilizado', 'Inutilizado'),
(8, 'Dum-Bino2015', 'Dume', 'Armazem de pneus', '192.168.26.18', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i3-4160', 'H81M-D PLUS Rev', 'onboard', ' ', ' ', 'SSD', '1', 'DDR3', '1', '4', '4096 mb', 'Inutilizado', 'NÃ£o tem', 'NÃ£o tem'),
(9, 'Francisco2018', 'Palmeira', 'Contabilidade', '192.168.26.28', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i3-4170', 'H81M-K', 'onboard', ' ', ' ', 'SSD', '1', 'DDR3', '1', '4 gb', '4096 mb', 'Inutilizado', 'Inutilizado', 'Inutilizado'),
(10, 'Sed-marisa2017', 'Palmeira', 'Contabilidade', '192.168.26.22', 'Windows 7 Professional Service Pack 1', 'Intel Pentium D', 'P5LD2-SE', 'gddr3', 'GeForce 9500 GT', '512 mb', 'HDD', '1', 'DDR2', '4', '6 gb', '2048 mb', '2048 mb', '1024 mb', '1024 mb'),
(11, 'sed-jluis2016', 'Palmeira', 'Contabilidade', '192.168.26.20', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i5-2320', 'P8B WS', 'onboard', ' ', ' ', 'SSD e HDD', '2', 'DDR3', '1', '4 gb', '4096 mb', 'Inutilizado', 'Inutilizado', 'Inutilizado'),
(12, 'sed-hugo2012', 'Palmeira', 'Contabilidade', '192.168.26.19', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core 2 Duo E7400', 'P5KPL-AM SE', 'gddr3', 'ATI Radeon HD 4550', '512 mb', 'HDD', '1', 'DDR2', '2', '4 gb', '2048 mb', '2048 mb', 'Inutilizado', 'Inutilizado'),
(13, 'sed-ruif2014', 'Palmeira', 'Contabilidade', '192.168.26.15', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i3 530', 'P7H55-M PRO', 'onboard', ' ', ' ', 'SSD', '1', 'DDR3', '3', '8 gb', 'Inutilizado', '2048 mb', '4096 mb', '2048 mb'),
(14, 'sed-filo2015', 'Palmeira', 'Contabilidade', '192.168.26.110', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i3-4170', 'H81M-K', 'onboard', ' ', ' ', 'SSD', '1', 'DDR2', '1', '4 gb', '4096 mb', 'Inutilizado', 'NÃ£o tem', 'NÃ£o tem'),
(15, 'Plm-Bomba2018', 'Palmeira', 'Bomba de Palmeira', '192.168.26.126', 'Windows 10 Professional (x64) Version 1709', 'Intel Core i3-7100', 'H110M-A/M.2', 'gddr3', 'NVIDIA GeForce GT 710', '2 gb', 'SSD', '1', 'DDR4 ', '1', '8 gb', 'Inutilizado', '8192 mb', 'Inutilizado', 'Inutilizado'),
(16, 'Vigi-2018', 'Palmeira', 'Zona servidores', '192.168.26.95', 'Windows xp pack 3', 'Intel Pentium D', 'P5LD2', 'gddr3', '8500 gt', '256 mb', 'HDD', '3', 'DDR2', '4', '3 gb', '1024 mb', '512 mb', '1024 mb', '512 mb'),
(17, 'vigi-201512', 'Palmeira', 'Stock Computadores', '192.168.26.50', 'windows 7 Profissional Service Pack 1', 'Intel Pentium 4', 'P5GC-MX', 'onboard', ' ', ' ', 'HDD', '2', 'DDR2 ', '2', '2 gb', '1024 mb', '1024 mb', 'NÃ£o tem', 'NÃ£o tem'),
(18, 'PLM-Carla2015', 'Palmeira', 'Entrada Principal', '192.168.26.152', 'Windows XP Professional Service Pack 3', 'Intel Celeron', 'P4P800-VM', 'onboard', ' ', ' ', 'HDD', '1', 'DDR', '4', '2 gb', '512 mb', '512 mb', '512 mb', '512 mb'),
(19, 'PLM-Dora16', 'Palmeira', 'Entrada Principal', '192.168.26.105', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i3-4170', 'H81M-K', 'onboard', ' ', ' ', 'SSD', '1', 'DDR3', '1', '4 gb', '4096 mb', 'Inutilizado', 'NÃ£o tem', 'NÃ£o tem'),
(20, 'Plm-Hern2015', 'Palmeira', 'Zona Pesados Palmeira', '192.168.26.107', 'Windows 7 Professional (x64) Service Pack 1', 'Intel Core i3 530', 'P7H55D-M PRO', 'onboard', ' ', ' ', 'SSD', '1', 'DDR3', '1', '2 gb', 'Inutilizado', 'Inutilizado', '2048 mb', 'Inutilizado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recepcao_caixa`
--
ALTER TABLE `recepcao_caixa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recepcao_caixa`
--
ALTER TABLE `recepcao_caixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
