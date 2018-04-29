-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/08/2017 às 16:45
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petiscaria`
--
DROP DATABASE IF EXISTS `petiscaria`;
CREATE DATABASE IF NOT EXISTS `petiscaria` DEFAULT CHARACTER SET utf16 COLLATE utf16_unicode_520_ci;
USE `petiscaria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Caixa`
--

CREATE TABLE `Caixa` (
  `idCaixa` int(5) NOT NULL,
  `saldoInicial` float NOT NULL,
  `saldoFinal` float DEFAULT NULL,
  `lucroFinal` float DEFAULT NULL,
  `dateInicial` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateFinal` datetime DEFAULT NULL,
  `statusCaixa` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Caixa`
--

INSERT INTO `Caixa` (`idCaixa`, `saldoInicial`, `saldoFinal`, `lucroFinal`, `dateInicial`, `dateFinal`, `statusCaixa`) VALUES
(1, 50, NULL, NULL, '2017-07-06 15:29:51', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Cargo`
--

CREATE TABLE `Cargo` (
  `idCargo` int(4) NOT NULL,
  `cargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Cargo`
--

INSERT INTO `Cargo` (`idCargo`, `cargo`) VALUES
(0, 'Administrador'),
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Categoria`
--

CREATE TABLE `Categoria` (
  `idCategoria` int(2) NOT NULL,
  `name` varchar(25) COLLATE utf16_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_520_ci;

--
-- Fazendo dump de dados para tabela `Categoria`
--

INSERT INTO `Categoria` (`idCategoria`, `name`) VALUES
(1, 'Bebidas'),
(2, 'Carnes'),
(3, 'Entradas'),
(4, 'Petiscos'),
(5, 'Sobremesas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Complemento`
--

CREATE TABLE `Complemento` (
  `idComplemento` int(4) NOT NULL,
  `name` varchar(45) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Controle_Mesa`
--

CREATE TABLE `Controle_Mesa` (
  `idControlMesa` int(4) NOT NULL,
  `dataAbertura` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataFechado` datetime DEFAULT NULL,
  `idMesa` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Couvert`
--

CREATE TABLE `Couvert` (
  `id_couvert` int(2) NOT NULL,
  `couvert` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_520_ci;

--
-- Fazendo dump de dados para tabela `Couvert`
--

INSERT INTO `Couvert` (`id_couvert`, `couvert`) VALUES
(1, 25);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Dividas`
--

CREATE TABLE `Dividas` (
  `idDividas` int(5) NOT NULL,
  `price` float NOT NULL,
  `dateVencimento` date NOT NULL,
  `dateR` date NOT NULL,
  `idFornecedor` int(4) NOT NULL,
  `nfe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Estabelecimento`
--

CREATE TABLE `Estabelecimento` (
  `name` varchar(25) NOT NULL,
  `phone` int(9) NOT NULL,
  `cnpj` int(20) NOT NULL,
  `adress` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Estabelecimento`
--

INSERT INTO `Estabelecimento` (`name`, `phone`, `cnpj`, `adress`) VALUES
('Petiscaria da Estrada', 999999999, 123456789, 'Fortaleza');

-- --------------------------------------------------------

--
-- Estrutura para tabela `FormPagamento`
--

CREATE TABLE `FormPagamento` (
  `idFormPag` int(11) NOT NULL,
  `formPag` varchar(45) NOT NULL,
  `tipoFormPag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Fornecedores`
--

CREATE TABLE `Fornecedores` (
  `idFornecedores` int(4) NOT NULL,
  `name` varchar(45) NOT NULL,
  `adress` varchar(60) NOT NULL,
  `phone` int(9) NOT NULL,
  `cnpj` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Fornecedores`
--

INSERT INTO `Fornecedores` (`idFornecedores`, `name`, `adress`, `phone`, `cnpj`) VALUES
(1, 'Brasil Kirin', 'BR-116, km 40', 99999999, 123456789),
(2, 'Friboi', 'Rua Papelao', 11111111, 987654321),
(3, 'Fazenda Boa Vista', 'BR 222, km 20', 232524612, 74185296);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Icon`
--

CREATE TABLE `Icon` (
  `idIcon` int(2) NOT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Icon`
--

INSERT INTO `Icon` (`idIcon`, `path`) VALUES
(1, 'images/person.jpg'),
(2, 'images/table.png'),
(3, 'images/pagamento.jpg'),
(4, 'images/order.png'),
(5, 'images/fornecedor.png'),
(6, 'images/food.png'),
(7, 'images/caixa.png'),
(8, 'images/relatorio.jpg'),
(9, 'images/category.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Menu`
--

CREATE TABLE `Menu` (
  `idMenu` int(2) NOT NULL,
  `name` varchar(25) CHARACTER SET utf16 COLLATE utf16_unicode_520_ci NOT NULL,
  `href` varchar(60) NOT NULL,
  `idIcon` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Menu`
--

INSERT INTO `Menu` (`idMenu`, `name`, `href`, `idIcon`) VALUES
(1, 'Usuário', '', 1),
(2, 'Mesas', 'table_menu.php', 2),
(3, 'Produtos', 'product_menu.php', 6),
(4, 'Fornecedores', 'providers_menu.php', 5),
(5, 'Caixa', 'cashier_menu.php', 7),
(6, 'Pagamentos', 'debt_menu.php', 3),
(7, 'Relatórios', '', 8),
(8, 'Categorias', 'category_menu.php', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Mesa`
--

CREATE TABLE `Mesa` (
  `idMesa` int(2) NOT NULL,
  `statusMesa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Mesa`
--

INSERT INTO `Mesa` (`idMesa`, `statusMesa`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 0),
(5, 1),
(6, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Nav`
--

CREATE TABLE `Nav` (
  `idNav` int(2) NOT NULL,
  `pageId` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Nav`
--

INSERT INTO `Nav` (`idNav`, `pageId`) VALUES
(1, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Pagamento`
--

CREATE TABLE `Pagamento` (
  `idPagamento` int(11) NOT NULL,
  `idMesa` int(2) NOT NULL,
  `idUsuario` int(4) NOT NULL,
  `val_Pedido` float NOT NULL,
  `idF_Pagamento1` int(3) NOT NULL,
  `valF_Pagamento1` float NOT NULL,
  `idF_Pagamento2` int(3) DEFAULT NULL,
  `valF_Pagamento2` float DEFAULT NULL,
  `idF_Pagamento3` int(3) DEFAULT NULL,
  `valF_Pagamento3` float DEFAULT NULL,
  `datePagamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Page`
--

CREATE TABLE `Page` (
  `idPage` int(2) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `idIcon` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Page`
--

INSERT INTO `Page` (`idPage`, `name`, `title`, `idIcon`) VALUES
(1, 'index', 'Entrar', NULL),
(2, 'main_menu', 'Início', NULL),
(3, 'menu_profile', 'Usuário', NULL),
(4, 'table_menu', 'Mesas', NULL),
(5, 'product_menu', 'Produtos', NULL),
(6, 'order_menu', 'Pedidos', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Pedidos`
--

CREATE TABLE `Pedidos` (
  `idPedido` int(10) NOT NULL,
  `idProduto` int(10) NOT NULL,
  `qtdProduto` int(2) NOT NULL,
  `total_value` float NOT NULL,
  `total_profit` float DEFAULT NULL,
  `idComplemento` int(4) DEFAULT NULL,
  `dateP` datetime NOT NULL,
  `idMesa` int(2) NOT NULL,
  `idUsuario` int(4) NOT NULL,
  `idStatusPedido` int(1) NOT NULL,
  `nfe` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Pedidos`
--

INSERT INTO `Pedidos` (`idPedido`, `idProduto`, `qtdProduto`, `total_value`, `total_profit`, `idComplemento`, `dateP`, `idMesa`, `idUsuario`, `idStatusPedido`, `nfe`) VALUES
(27, 1, 1, 5, NULL, NULL, '2017-08-18 13:12:29', 3, 1, 1, NULL),
(28, 2, 3, 57, NULL, NULL, '2017-08-18 13:12:39', 3, 1, 1, NULL),
(29, 2, 3, 57, NULL, NULL, '2017-08-18 13:18:18', 3, 1, 1, NULL),
(30, 2, 3, 57, NULL, NULL, '2017-08-18 13:29:17', 3, 1, 1, NULL),
(31, 2, 3, 57, NULL, NULL, '2017-08-18 13:32:38', 3, 1, 1, NULL),
(32, 2, 3, 57, NULL, NULL, '2017-08-18 13:37:17', 3, 1, 1, NULL),
(40, 4, 2, 50, NULL, NULL, '2017-08-22 16:45:02', 1, 1, 1, NULL),
(41, 4, 2, 50, NULL, NULL, '2017-08-22 16:45:02', 1, 1, 1, NULL),
(42, 4, 2, 50, NULL, NULL, '2017-08-22 16:45:02', 1, 1, 1, NULL),
(60, 3, 1, 35, NULL, NULL, '2017-08-22 16:52:12', 2, 1, 1, NULL),
(61, 3, 1, 35, NULL, NULL, '2017-08-22 16:52:12', 2, 1, 1, NULL),
(62, 3, 1, 35, NULL, NULL, '2017-08-22 16:52:15', 2, 1, 1, NULL),
(63, 3, 1, 35, NULL, NULL, '2017-08-22 16:52:15', 2, 1, 1, NULL),
(64, 3, 1, 35, NULL, NULL, '2017-08-22 16:52:16', 2, 1, 1, NULL),
(65, 4, 2, 50, NULL, NULL, '2017-08-23 12:47:48', 1, 1, 1, NULL),
(66, 2, 2, 38, NULL, NULL, '2017-08-23 12:48:09', 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Produto`
--

CREATE TABLE `Produto` (
  `idProduto` int(10) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `buy_price` float DEFAULT NULL,
  `stock` int(3) NOT NULL,
  `min_stock` int(3) NOT NULL,
  `profit` float NOT NULL,
  `idCategoria` int(2) NOT NULL,
  `idFornecedor` int(4) DEFAULT NULL,
  `barcode` varchar(24) DEFAULT NULL,
  `description` varchar(144) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Produto`
--

INSERT INTO `Produto` (`idProduto`, `name`, `price`, `buy_price`, `stock`, `min_stock`, `profit`, `idCategoria`, `idFornecedor`, `barcode`, `description`) VALUES
(2, 'Carne do Sol', 19, 10, 30, 0, 9, 2, NULL, '2000100522', '450g, acompanha Arroz branco'),
(3, 'Camarão', 35, 15, 893, 0, 20, 4, NULL, NULL, NULL),
(4, 'Picanha', 25, 15, 264, 0, 10, 2, NULL, NULL, NULL),
(5, 'Bolinho Brownie', 2, 1, 120, 0, 1, 5, NULL, NULL, NULL),
(7, 'Rosquinhas', 3.5, 1.25, 100, 10, 2.25, 5, NULL, '43520', 'Cobertura de Açúcar (muito)');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Produtos_Dividas`
--

CREATE TABLE `Produtos_Dividas` (
  `idProdDividas` int(4) NOT NULL,
  `prodName` varchar(60) COLLATE utf16_unicode_520_ci NOT NULL,
  `prodQtd` int(2) NOT NULL,
  `prodVal` float NOT NULL,
  `idDividas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `StatusPedido`
--

CREATE TABLE `StatusPedido` (
  `idStatusPedido` int(1) NOT NULL,
  `statusName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `StatusPedido`
--

INSERT INTO `StatusPedido` (`idStatusPedido`, `statusName`) VALUES
(1, 'Aberto'),
(2, 'Em preparo'),
(3, 'Entregue'),
(4, 'Fechado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuario`
--

CREATE TABLE `Usuario` (
  `idUsuario` int(4) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `rg` bigint(11) DEFAULT NULL,
  `dateNasc` date DEFAULT NULL,
  `phone` int(9) DEFAULT NULL,
  `idCargo` int(4) DEFAULT NULL,
  `adress` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `username`, `password`, `name`, `cpf`, `rg`, `dateNasc`, `phone`, `idCargo`, `adress`) VALUES
(1, 'admin', 'qwe123', 'Gilmario', 99999999999, 99999999999, '2000-00-01', 999999999, 1, 'Fortaleza');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Caixa`
--
ALTER TABLE `Caixa`
  ADD PRIMARY KEY (`idCaixa`);

--
-- Índices de tabela `Cargo`
--
ALTER TABLE `Cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Índices de tabela `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `Complemento`
--
ALTER TABLE `Complemento`
  ADD PRIMARY KEY (`idComplemento`);

--
-- Índices de tabela `Controle_Mesa`
--
ALTER TABLE `Controle_Mesa`
  ADD PRIMARY KEY (`idControlMesa`);

--
-- Índices de tabela `Couvert`
--
ALTER TABLE `Couvert`
  ADD PRIMARY KEY (`id_couvert`);

--
-- Índices de tabela `Dividas`
--
ALTER TABLE `Dividas`
  ADD PRIMARY KEY (`idDividas`),
  ADD KEY `fk_Dividas_Fornecedores1_idx` (`idFornecedor`);

--
-- Índices de tabela `Estabelecimento`
--
ALTER TABLE `Estabelecimento`
  ADD PRIMARY KEY (`name`);

--
-- Índices de tabela `FormPagamento`
--
ALTER TABLE `FormPagamento`
  ADD PRIMARY KEY (`idFormPag`);

--
-- Índices de tabela `Fornecedores`
--
ALTER TABLE `Fornecedores`
  ADD PRIMARY KEY (`idFornecedores`);

--
-- Índices de tabela `Icon`
--
ALTER TABLE `Icon`
  ADD PRIMARY KEY (`idIcon`);

--
-- Índices de tabela `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Índices de tabela `Pedidos`
--
ALTER TABLE `Pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Índices de tabela `Produto`
--
ALTER TABLE `Produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `idCategoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `Couvert`
--
ALTER TABLE `Couvert`
  MODIFY `id_couvert` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `Fornecedores`
--
ALTER TABLE `Fornecedores`
  MODIFY `idFornecedores` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `Icon`
--
ALTER TABLE `Icon`
  MODIFY `idIcon` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `Menu`
--
ALTER TABLE `Menu`
  MODIFY `idMenu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `Pedidos`
--
ALTER TABLE `Pedidos`
  MODIFY `idPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de tabela `Produto`
--
ALTER TABLE `Produto`
  MODIFY `idProduto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
