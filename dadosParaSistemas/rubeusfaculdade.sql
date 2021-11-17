-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2021 às 15:30
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rubeusfaculdade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin_usuarios`
--

CREATE TABLE `tb_admin_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin_usuarios`
--

INSERT INTO `tb_admin_usuarios` (`id`, `usuario`, `senha`, `nome`) VALUES
(1, 'contato@dropscode.com.br', 'admin', 'Drops.code'),
(2, 'edmurgsjr@hotmail.com', 'admin', 'Edmur G silva Jr'),
(20, 'geraldosilvajr@gmail.com', 'admin', 'Geraldo Silva Jr'),
(21, 'edmurgilvajr@gmail.com', 'admin', 'EDMUR GERALDO DA SILVA JUNIOR'),
(22, 'edmurglvajr@gmail.com', 'admin', 'EDMUR GERALDO DA SILVA JUNIOR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_alunos`
--

CREATE TABLE `tb_site_alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_alunos`
--

INSERT INTO `tb_site_alunos` (`id`, `nome`) VALUES
(12, 'teste'),
(13, 'dfdffdfdsf'),
(14, 'dfdffdfdsf'),
(15, 'dfdsfdfsd'),
(16, 'dsfdsfdsf'),
(17, 'dfsdfdsfsd'),
(18, 'fgdfgfdg'),
(19, 'erwerewrwe'),
(20, 'erwerewrwe'),
(21, 'dsdfsfsdfds'),
(22, 'dsdfsfsdfds'),
(23, 'ewrwerewrwewer'),
(24, 'ddfgfgd'),
(25, 'gdfgdfgdf'),
(26, 'gfghghfghfg'),
(27, 'hfghfghfg'),
(28, 'gffghfdhfd'),
(29, 'fdgfdgdfgdfg'),
(30, 'dfdfgfdgfdgdf'),
(31, 'dfsdffsd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_area_conhecimentos`
--

CREATE TABLE `tb_site_area_conhecimentos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_area_conhecimentos`
--

INSERT INTO `tb_site_area_conhecimentos` (`id`, `descricao`) VALUES
(1, 'Ciências Exatas'),
(2, 'Ciências Biológicas'),
(3, 'Engenharias'),
(4, 'Ciências da Saúde'),
(5, 'Ciências Agrárias'),
(6, 'Linguística, Letras e Artes'),
(7, 'Ciências Sociais Aplicadas'),
(8, 'Ciências Humanas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_cidades`
--

CREATE TABLE `tb_site_cidades` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_cidades`
--

INSERT INTO `tb_site_cidades` (`id`, `descricao`) VALUES
(1, 'São Paulo'),
(2, 'Campinas'),
(3, 'São Bernardo do Campo'),
(4, 'São José dos Campos'),
(5, 'Santo André'),
(6, 'Ribeirão Preto'),
(7, ' Osasco'),
(8, 'Sorocaba'),
(9, 'Mauá'),
(10, 'São José do Rio Preto'),
(11, 'Mogi das Cruzes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_cursos`
--

CREATE TABLE `tb_site_cursos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_cursos`
--

INSERT INTO `tb_site_cursos` (`id`, `descricao`) VALUES
(1, 'Administração'),
(2, 'Arquitetura e Urbanismo'),
(3, 'Ciências Farmaceuticas'),
(4, 'Direito'),
(5, 'Educação Física'),
(6, 'Tecnologia da Informação'),
(7, 'Ciência de Dados'),
(8, 'Jornalismo'),
(9, 'Medicina'),
(10, 'Odontologia'),
(11, 'Nutrição');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_curso_seletivos`
--

CREATE TABLE `tb_site_curso_seletivos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_curso_seletivos`
--

INSERT INTO `tb_site_curso_seletivos` (`id`, `descricao`) VALUES
(1, 'Extensão Comunitária'),
(2, 'Graduação'),
(3, 'Programas de Especialização e MBAs'),
(4, 'Programas de Mestrado e Doutorado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_estados`
--

CREATE TABLE `tb_site_estados` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_estados`
--

INSERT INTO `tb_site_estados` (`id`, `descricao`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapá'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceará'),
(7, 'Distrito Federal'),
(8, 'Espírito Santo'),
(9, 'Goiás'),
(10, 'Maranhão'),
(11, 'Mato Grosso'),
(12, 'Mato Grosso do Sul'),
(13, 'Minas Gerais'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Paraná'),
(17, 'Pernambuco'),
(18, 'Piauí'),
(19, 'Rio de Janeiro'),
(20, 'Rio Grande do Norte'),
(21, 'Rio Grande do Sul'),
(22, 'Rondônia'),
(23, 'Roraima'),
(24, 'Santa Catarina'),
(25, 'São Paulo'),
(26, 'Sergipe'),
(27, 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_modalidades`
--

CREATE TABLE `tb_site_modalidades` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_modalidades`
--

INSERT INTO `tb_site_modalidades` (`id`, `descricao`) VALUES
(1, 'Presencial'),
(2, 'Flex'),
(3, 'Digital (EAD)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site_nacionalidades`
--

CREATE TABLE `tb_site_nacionalidades` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site_nacionalidades`
--

INSERT INTO `tb_site_nacionalidades` (`id`, `descricao`) VALUES
(1, 'angolano'),
(2, 'argentino'),
(3, 'australiano'),
(4, 'austríaco'),
(5, 'belga'),
(6, 'boliviano'),
(7, 'brasileiro'),
(8, 'búlgaro'),
(9, 'canadense'),
(10, 'chinês'),
(11, 'chileno'),
(12, 'colombiano'),
(13, 'croata'),
(14, 'cubano'),
(15, 'dinamarquês'),
(16, 'dominicano'),
(17, 'equatoriano'),
(18, 'egípcio'),
(19, 'inglês'),
(20, 'finlandês'),
(21, 'francês'),
(22, 'alemão'),
(23, 'grego'),
(24, 'guineano'),
(25, 'haitiano'),
(26, 'holandês'),
(27, 'húngaro'),
(28, 'islandês'),
(29, 'indiano'),
(30, 'indonésio'),
(31, 'iraniano'),
(32, 'irlandês'),
(33, 'israelita'),
(34, 'italiano'),
(35, 'jamaicano'),
(36, 'japonês'),
(37, 'queniano');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin_usuarios`
--
ALTER TABLE `tb_admin_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_alunos`
--
ALTER TABLE `tb_site_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_area_conhecimentos`
--
ALTER TABLE `tb_site_area_conhecimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_cidades`
--
ALTER TABLE `tb_site_cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_cursos`
--
ALTER TABLE `tb_site_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_curso_seletivos`
--
ALTER TABLE `tb_site_curso_seletivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_estados`
--
ALTER TABLE `tb_site_estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_modalidades`
--
ALTER TABLE `tb_site_modalidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site_nacionalidades`
--
ALTER TABLE `tb_site_nacionalidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin_usuarios`
--
ALTER TABLE `tb_admin_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `tb_site_alunos`
--
ALTER TABLE `tb_site_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `tb_site_area_conhecimentos`
--
ALTER TABLE `tb_site_area_conhecimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_site_cidades`
--
ALTER TABLE `tb_site_cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_site_cursos`
--
ALTER TABLE `tb_site_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_site_curso_seletivos`
--
ALTER TABLE `tb_site_curso_seletivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_site_estados`
--
ALTER TABLE `tb_site_estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2223;

--
-- AUTO_INCREMENT de tabela `tb_site_modalidades`
--
ALTER TABLE `tb_site_modalidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_site_nacionalidades`
--
ALTER TABLE `tb_site_nacionalidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
