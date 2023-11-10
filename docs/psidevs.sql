-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09/11/2023 às 05:34
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_psidevs_2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` char(36) NOT NULL,
  `id_usuario` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `id_usuario`) VALUES
('7561d960-f841-4d02-96d5-7f3cc1adbaf1', '34c6b927-3cb4-4c6a-a2d2-017cf316d16d'),
('6f28d026-2111-4be1-840f-9531c70dca6a', '36535a8d-f5ff-40fe-bdd7-d3f8c21bf8b8'),
('61a0abc0-05d7-4345-a354-a4caff8a0000', '5488588f-52e1-435b-a31a-d18628549100'),
('ba831b3d-1665-450d-a8b3-30c089aad100', 'b392dcdd-5a44-491a-bcaa-10ff178126b9');

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `id` char(36) NOT NULL,
  `id_profissional` char(36) NOT NULL,
  `id_cliente` char(36) NOT NULL,
  `data` datetime NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'agendada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `consulta`
--

INSERT INTO `consulta` (`id`, `id_profissional`, `id_cliente`, `data`, `valor`, `status`) VALUES
('0e9f13db-fbcc-4054-b445-90b3dd2efd98', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-15 10:00:00', 120.00, 'agendada'),
('1381d037-ba4e-4f38-b705-378aa51ef376', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-11 15:30:00', 120.00, 'agendada'),
('1bf80fc6-4a48-404e-9c94-c6608d209da0', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-13 10:00:00', 40.00, 'cancelada'),
('1f0ef025-7ad5-44cb-b652-e0d869f1f180', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-09 11:30:00', 95.00, 'agendada'),
('236dedb9-1feb-4e54-8bb9-783b870bf76a', '959be537-efce-444a-99e9-6602d9da9874', '6f28d026-2111-4be1-840f-9531c70dca6a', '2023-11-13 09:00:00', 120.00, 'agendada'),
('25b72c70-8d76-45ca-8d9c-66fa4a022ca4', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-14 09:00:00', 120.00, 'agendada'),
('2a4ad456-2bbb-4109-a22b-8d5bb5455519', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-10-30 20:00:00', 40.00, 'realizada'),
('31f49afc-e340-4c85-9523-6054b1c276d5', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-15 09:30:00', 50.00, 'cancelada'),
('3a3f6b3e-d971-41f5-b27a-5a5571a50116', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-11 19:00:00', 40.00, 'cancelada'),
('3c5ba6db-a365-4294-8929-d1bb4eca1583', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'ba831b3d-1665-450d-a8b3-30c089aad100', '2023-11-10 10:00:00', 75.00, 'agendada'),
('3c6dee19-f136-40a4-88dc-13f595a535e8', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', '6f28d026-2111-4be1-840f-9531c70dca6a', '2023-11-16 14:30:00', 75.00, 'agendada'),
('3ce897ba-b6ee-409d-bcae-497aa5c81ea0', '959be537-efce-444a-99e9-6602d9da9874', '6f28d026-2111-4be1-840f-9531c70dca6a', '2023-11-11 15:30:00', 120.00, 'agendada'),
('3f71982a-1e7f-47d4-aa6a-1ba1bfdb43b7', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-13 10:00:00', 120.00, 'cancelada'),
('42cccb50-da6d-4375-a8bb-22e8cc93a61b', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-09 15:00:00', 95.00, 'agendada'),
('4c09e483-47e8-4aeb-8667-e880df957be6', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'ba831b3d-1665-450d-a8b3-30c089aad100', '2023-11-11 21:30:00', 95.00, 'agendada'),
('5d2c289f-7c98-48ae-83e5-a351891c7425', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-15 12:00:00', 120.00, 'cancelada'),
('65164851-4dfb-4697-b963-f868d9c5fa76', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-15 11:00:00', 120.00, 'agendada'),
('6e5f8733-4257-4dbe-a03f-93313cebcfd8', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-18 17:00:00', 120.00, 'cancelada'),
('72865252-bb87-402b-a9b4-8ac20d8a6851', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-10-30 18:00:00', 50.00, 'realizada'),
('735d5bfe-7c38-44e4-9586-c046e1cd4593', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', '6f28d026-2111-4be1-840f-9531c70dca6a', '2023-11-09 14:00:00', 95.00, 'agendada'),
('746e2b80-ea60-4f26-90cd-d5293480dc75', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-08 20:00:00', 75.00, 'realizada'),
('74fcadd9-69e1-4986-908c-534120f2f420', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-18 15:00:00', 120.00, 'cancelada'),
('78fcc25e-781c-4616-9231-695fa8f5488e', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-30 06:30:00', 40.00, 'cancelada'),
('836d9d21-9f9d-4bff-9983-15a603acbd5a', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', '6f28d026-2111-4be1-840f-9531c70dca6a', '2023-11-08 09:00:00', 75.00, 'realizada'),
('8cdb0e2f-5e19-4893-9c88-28eadc3c9a5c', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'ba831b3d-1665-450d-a8b3-30c089aad100', '2023-11-09 11:30:00', 4000.00, 'agendada'),
('9f081c0c-b653-4f3f-b515-b00458710dca', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-14 09:30:00', 120.00, 'cancelada'),
('a2daf1de-f58e-4123-b76a-aa99ce9ab041', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-18 16:00:00', 120.00, 'cancelada'),
('ac023457-96d7-434b-ab42-6a4a1a97217c', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-18 03:30:00', 120.00, 'cancelada'),
('ace8a074-3b1a-4a6f-afd7-2811362d20c3', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-18 14:30:00', 120.00, 'cancelada'),
('ae472b03-9748-4fbc-b695-355f47004907', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'ba831b3d-1665-450d-a8b3-30c089aad100', '2023-11-10 08:00:00', 4000.00, 'agendada'),
('b350c2a8-1e42-4ff4-84c6-0016e3a239c1', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-10-28 14:00:00', 50.00, 'realizada'),
('b9df23ae-9783-4758-900f-3041b2844b16', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-15 10:30:00', 120.00, 'cancelada'),
('ba8d40fa-c11f-4b8c-a78a-82e528c1f2f1', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-08 19:00:00', 120.00, 'realizada'),
('baa913b7-bd7d-4445-a8f7-0a18a354d4fd', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-18 16:00:00', 120.00, 'cancelada'),
('bc9c79d3-23f2-4015-b513-e585abf6020f', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-06 09:30:00', 50.00, 'cancelada'),
('c4eb229a-d5c2-49f4-aede-6251bd3d4d35', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-30 08:30:00', 50.00, 'cancelada'),
('c6c5a37b-2b29-441b-8e10-09b83e282344', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-18 15:00:00', 120.00, 'cancelada'),
('d049b6ce-9195-4339-8862-0f5330ac5821', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-08 09:30:00', 120.00, 'realizada'),
('d5a911ed-6415-4e5f-a03b-29807bfc6116', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', '6f28d026-2111-4be1-840f-9531c70dca6a', '2023-11-07 15:00:00', 75.00, 'realizada'),
('d5dcb0f8-a369-40bd-980a-9400eb88504d', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-01 09:30:00', 50.00, 'realizada'),
('deffd5a0-3c15-4f5c-9707-e9f3b8d372be', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-14 09:30:00', 120.00, 'cancelada'),
('df281b64-b22b-49f3-bca6-48735d4e23b1', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'ba831b3d-1665-450d-a8b3-30c089aad100', '2023-11-11 14:30:00', 75.00, 'agendada'),
('e270ccb9-8eac-4eb2-a66d-bfa0c894cc44', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-10-30 21:30:00', 50.00, 'realizada'),
('f167de7f-bdcc-4ed3-a584-c0a952fcc624', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'ba831b3d-1665-450d-a8b3-30c089aad100', '2023-11-09 14:00:00', 4000.00, 'agendada'),
('f940d98b-1306-4451-99d4-dec50a62c128', '959be537-efce-444a-99e9-6602d9da9874', '61a0abc0-05d7-4345-a354-a4caff8a0000', '2023-11-04 16:00:00', 50.00, 'cancelada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `disponibilidade`
--

CREATE TABLE `disponibilidade` (
  `id` char(36) NOT NULL,
  `id_profissional` char(36) NOT NULL,
  `dia_semana` varchar(3) NOT NULL,
  `hora_inicio` varchar(255) NOT NULL,
  `hora_termino` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `disponibilidade`
--

INSERT INTO `disponibilidade` (`id`, `id_profissional`, `dia_semana`, `hora_inicio`, `hora_termino`) VALUES
('05fb8e75-1fc2-47ed-a9eb-4ccc485733dc', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Sex', '09:00', '18:00'),
('0bd0fea3-198a-4aa9-a25c-3896d05b64b7', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Ter', '09:00', '16:00'),
('0c9b8b1d-2ed7-4615-859e-70bff7532902', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'Qua', '09:30', '16:30'),
('11592207-b6cf-4ffc-966a-f10f79a968c0', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Seg', '06:30', '21:30'),
('12f4d153-1b2f-449f-8adf-b4daccdd1e04', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'Seg', '05:30', '14:00'),
('157d0b32-5332-4b93-afd2-775069b69bdb', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Qua', '08:30', '22:30'),
('16449ac9-1a97-4d1f-97c9-7a83ecb98b17', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Sab', '10:00', '14:30'),
('23893ccb-0a6d-4143-bf6b-65f03a49fe18', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Qui', '08:30', '17:00'),
('44a416d8-c962-44dd-9a23-fc4758be97f5', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Dom', '', ''),
('49643896-7e3a-4df3-90e6-c33f17040fac', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Qui', '08:30', '17:00'),
('4b330cb8-e10f-4dc0-b20d-b86f4d13a000', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'Dom', '12:30', '17:00'),
('51412063-f368-4dd5-93ed-8ffe8aa68ed2', '959be537-efce-444a-99e9-6602d9da9874', 'Ter', '08:00', '14:30'),
('55613986-ad74-4220-9f6d-ede2dbac5b3c', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'Sex', '07:00', '13:00'),
('65d1343b-3d36-4993-804e-fad129a0d098', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Seg', '09:00', '13:00'),
('6d7714f9-cad9-454e-baca-e2c3a33aaf12', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Sex', '09:00', '18:00'),
('7d4e28a4-3055-46c0-9cd5-79a0b4d523a0', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Dom', '', ''),
('8188b1bd-ec14-435e-9389-85cf575807f6', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Sab', '10:00', '14:30'),
('8aa4f8e7-532e-42b1-9e0b-476d55e924bc', '959be537-efce-444a-99e9-6602d9da9874', 'Qua', '09:00', '22:30'),
('8e28320c-a2c4-42c5-a778-16516841f45f', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'Ter', '08:30', '13:30'),
('8edeea32-82aa-4aa0-b178-ece4eb74220b', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Qua', '08:30', '22:30'),
('9e38d330-4b24-4058-96d9-8671c7216892', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Qui', '10:30', '15:00'),
('a0f7ed09-b284-45ec-97db-38cfda79d7ad', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Ter', '09:00', '16:00'),
('b803c3af-ca00-4369-a745-b69d875c09ba', '959be537-efce-444a-99e9-6602d9da9874', 'Sex', '', ''),
('c0000c2e-2617-4940-bccc-94a5be22e471', '959be537-efce-444a-99e9-6602d9da9874', 'Seg', '08:00', '22:00'),
('c09c1b3c-3d18-4be6-969e-9c1beb9fc6d4', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Seg', '09:00', '13:00'),
('c7486ccf-b0d9-4190-9994-3aab884dfc0b', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Sab', '18:00', '21:30'),
('d16f0bf6-2848-4d65-ba6f-16bb718289db', '959be537-efce-444a-99e9-6602d9da9874', 'Dom', '', ''),
('d2dc7ddf-cc74-45dc-99ef-296a634de1bb', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Dom', '', ''),
('d65bc038-9d72-45c7-921f-7432a1c80909', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Sex', '13:30', '18:30'),
('da5251d0-a3c3-4e2d-bc79-614ebe76f037', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'Qui', '07:00', '16:30'),
('e00be3c0-403c-4230-bec7-bd1bc3c820ff', '959be537-efce-444a-99e9-6602d9da9874', 'Qui', '', ''),
('e2cb50f2-5f97-4397-b558-5ed7325ed016', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Qua', '07:00', '10:00'),
('e3352149-cf21-426d-a8f9-cedffecfb272', '959be537-efce-444a-99e9-6602d9da9874', 'Sab', '14:00', '17:00'),
('e3b83e1d-4557-409f-bca2-2b15239c3610', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Ter', '08:30', '11:00'),
('f6696546-5c17-4ec2-aefc-270cb8ee264e', '92d92941-f09e-4a19-a136-5b66e6a071d5', 'Sab', '13:00', '19:30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `formacao`
--

CREATE TABLE `formacao` (
  `id` char(36) NOT NULL,
  `id_profissional` char(36) NOT NULL,
  `nome_curso` varchar(255) NOT NULL,
  `instituicao` varchar(255) NOT NULL,
  `tipo_curso` varchar(255) NOT NULL,
  `ano_conclusao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `formacao`
--

INSERT INTO `formacao` (`id`, `id_profissional`, `nome_curso`, `instituicao`, `tipo_curso`, `ano_conclusao`) VALUES
('3abf0ef1-e669-4f42-bd4f-82baa36ee993', 'dbdf1153-efab-4c8a-8a3d-61aef7a678e3', 'Medicina', 'Centro Universitário Ufbra', 'Graduação', '2017'),
('3e806689-1f72-40f7-91d6-d885d0b5f624', '959be537-efce-444a-99e9-6602d9da9874', 'Sistemas Embarcados', 'Centro Universitário Assis Gurgacz', 'Especialização', '2017'),
('5fc88a3f-12e9-4816-9d6d-88adc18c8253', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Engenharia De Software', 'Fiap - Centro Universitário', 'Graduação', '2022'),
('63b1fd1c-6cbd-46ad-8561-b0d3d292ca28', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Engenharia Agronômica', 'Universidade Paulista', 'Outros Cursos', '2013'),
('6db33b37-6f68-492c-86e9-f932b85bedeb', '959be537-efce-444a-99e9-6602d9da9874', 'Psicologia', 'Centro Universitário Leonardo Da Vinci', 'Graduação', '2017'),
('7595205b-69cc-423d-9299-1e40b1daef9e', '959be537-efce-444a-99e9-6602d9da9874', 'Criação Digital', 'Universidade Cesumar', 'Outros Cursos', '2021'),
('91887da1-7619-4f60-914b-1107fc553313', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Psicologia', 'Universidade Cruzeiro Do Sul', 'Graduação', '2019'),
('91b5fd9e-1b26-4459-b7ab-9aa3cd521c4f', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Design Musical', 'Faculdades Integradas Rio Branco', 'Outros Cursos', '2023'),
('97c14b5a-02b4-468d-af36-2c9f1dff2a07', 'a12627a2-5c30-4559-8f92-03c32e1f15d9', 'Design De Moda', 'Universidade Anhanguera', 'Outros Cursos', '2022'),
('ab19515d-c23e-4f11-808f-286205c95a29', 'b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', 'Manutenção Industrial', 'Faculdade Ietec', 'Outros Cursos', '2020'),
('f50a275d-37f6-4f17-95d9-586d06f67ce5', '959be537-efce-444a-99e9-6602d9da9874', 'Digital Security', 'Faculdade Escola De Ayurveda', 'Outros Cursos', '2022');

-- --------------------------------------------------------

--
-- Estrutura para tabela `profissional`
--

CREATE TABLE `profissional` (
  `id` char(36) NOT NULL,
  `id_usuario` char(36) NOT NULL,
  `especialidade` varchar(255) DEFAULT '',
  `registroCRP` varchar(13) NOT NULL,
  `experiencia` varchar(255) DEFAULT '',
  `descricao` varchar(255) DEFAULT '',
  `regiao` varchar(255) DEFAULT '',
  `valor_consulta` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `profissional`
--

INSERT INTO `profissional` (`id`, `id_usuario`, `especialidade`, `registroCRP`, `experiencia`, `descricao`, `regiao`, `valor_consulta`) VALUES
('92d92941-f09e-4a19-a136-5b66e6a071d5', '835ee8cf-7ee4-4660-9617-4febbd78be1e', 'Ansiedade social, Expressão da criatividade, Prática baseada em evidências', '90/123189-09', 'Estresse, Excesso de peso, Estudos e Aprendizados, Esportes, Desmotivação Profissional', 'Sou  Pietro Henrico, um profissional da psicologia cujo compromisso com o bem-estar emocional e a saúde mental é notável. Ela é uma verdadeira defensora da importância da mente e das emoções na jornada de autodescoberta e crescimento pessoal.', '', 4000.00),
('959be537-efce-444a-99e9-6602d9da9874', '206d096f-5892-4b7d-b3b3-0a774f93d2f4', 'Psicologia oncológica, Supervisão em psicologia, Psicossomática', '23/928329-83', 'Adoção de Filhos, Bullying, Autoestima, Ciúmes', 'Rafaela Morais é uma profissional da psicologia cujo compromisso com o bem-estar emocional e a saúde mental é notável. Ela é uma verdadeira defensora da importância da mente e das emoções na jornada de autodescoberta e crescimento pessoal.', 'goias', 120.00),
('a12627a2-5c30-4559-8f92-03c32e1f15d9', 'a2b73ca7-9019-4064-bab5-298b1148443d', 'Psicodrama, Supervisão em psicologia', '01/234567-30', 'Adoção de Filhos, Agressividade, Doenças Mentais, Educação Financeira', 'John Doe é um profissional da área da psicologia cuja paixão pela mente humana o guiou em uma jornada de autoconhecimento e transformação. Com um coração compassivo e uma mente analítica, John dedicou sua carreira a ajudar as pessoas a navegarem pelos des', 'sergipe', 95.00),
('b420f2a1-8baa-4689-8ad9-1a9ff2a8cf02', '89fbe217-0a74-434c-9a8e-8015af60881b', 'Coaching, Hipnose', '34/930492-13', 'Adoção de Filhos, Adolescência, Autoconhecimento, Estresse', 'Olá, sou a Dr. Eliseu Affonso, um psicólogo apaixonado pelo estudo da mente humana e pela busca do equilíbrio emocional. Minha jornada no campo da psicologia começou há muitos anos, quando percebi o poder transformador que a compreensão de nossos pensamen', 'rondonia', 75.00),
('dbdf1153-efab-4c8a-8a3d-61aef7a678e3', 'ab9b9507-0383-4f65-a585-d0a6943463c8', '', '04/981741-72', '', '', '', 40.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` char(36) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tipo_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `cpf`, `telefone`, `data_nascimento`, `genero`, `foto`, `tipo_usuario`) VALUES
('206d096f-5892-4b7d-b3b3-0a774f93d2f4', 'Rafaela Morais', 'rafelamorais@gmail.com', '$2y$10$u3CzWPJbdM6uhfQ6uIcfp.krVawc7hSnHUZ8a6QRzU7.Tpgt2x1iO', '754-839-287-58', '(11) 97362-5735', '1993-02-03', 'feminino', 'edward-cisneros-_H6wpor9mjs-unsplash.jpg', 'profissional'),
('34c6b927-3cb4-4c6a-a2d2-017cf316d16d', 'Agatha Nicolli', 'agatha@gmail.com', '$2y$10$GWOy8PYf34bBi7E56wdqtudmWhGj8oVXNHUOvkTUhY9XcPtLjwauq', '112-981-898-23', '(11) 98299-8281', '2006-12-01', 'feminino', '', 'cliente'),
('36535a8d-f5ff-40fe-bdd7-d3f8c21bf8b8', 'Evellin Diniz', 'evellin@gmail.com', '$2y$10$nuvQYaIBDSiN9l//VMnsoech2cRG72ki7zOhAQS9t.J/SMld8xEL.', '578-923-013-79', '(43) 94837-9482', '1997-01-01', 'feminino', '', 'cliente'),
('5488588f-52e1-435b-a31a-d18628549100', 'Nathan Figuredo', 'nathan@gmail.com', '$2y$10$HyBEJocvoqVXuO55k5Mk/eruI6uw.S7nTT/BVJ1bvMUg2NXPiA3Sy', '453-534-241-34', '(21) 91233-5312', '2001-12-26', 'masculino', 'images-5.jpeg', 'cliente'),
('835ee8cf-7ee4-4660-9617-4febbd78be1e', 'Pietro Henrico', 'pietrohenrico@gmail.com', '$2y$10$6RbINcI2vL/875e9k0eQJ.ppiucAZBg0Ufi.S4UJOsS25WCgIQPZG', '573-927-771-22', '(61) 92381-0993', '2008-09-20', 'nao_binario', 'images (64).jpeg', 'profissional'),
('89fbe217-0a74-434c-9a8e-8015af60881b', 'Eliseu Affonso', 'eliseuaff@gmail.com', '$2y$10$RNKGqA8Q/03c4re7sUHCt.MUxZPZ2s.mYBBk//oIqiqAgopNKg6OW', '748-398-401-92', '(11) 97229-4803', '2004-10-23', 'masculino', 'images.jpeg', 'profissional'),
('a2b73ca7-9019-4064-bab5-298b1148443d', 'John Doe', 'johndoe@example.com', '$2y$10$V9Ec8rMM1lSzRQdetCFMxe6ocjgjSx4aXFYFHCOGFgKolNWSnI6Em', '123-456-789-10', '(11) 98765-4321', '2000-07-07', 'nao_binario', 'omar-lopez-Gx5-zf_HE9w-unsplash.jpg', 'profissional'),
('ab9b9507-0383-4f65-a585-d0a6943463c8', 'Katia Regina', 'katiaregina05@gmail.com', '$2y$10$6bjdqadlsfm8NDAqQtSXKujiS5yHE86.t7B23ErZafOUi3wWWwzjy', '949-012-123-23', '(11) 97231-2111', '1966-05-22', 'feminino', '', 'profissional'),
('b392dcdd-5a44-491a-bcaa-10ff178126b9', 'Marcela Carvalho', 'marcela@gmail.com', '$2y$10$bbub8owD3bYl6MZSnSmNEOyBIgX9xj43XYa.NsrIwFdobJ2bqORHi', '942-817-231-23', '(11) 98329-8898', '2002-09-24', 'feminino', '', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F41C9B25FCF8192D` (`id_usuario`);

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A6FE3FDE2A813255` (`id_cliente`),
  ADD KEY `IDX_A6FE3FDEC7DB1397` (`id_profissional`);

--
-- Índices de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_44402DA8C7DB1397` (`id_profissional`);

--
-- Índices de tabela `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_41F0965FC7DB1397` (`id_profissional`);

--
-- Índices de tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E41A66E531FF4E37` (`registroCRP`),
  ADD UNIQUE KEY `UNIQ_E41A66E5FCF8192D` (`id_usuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2265B05DE7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_2265B05D3E3E11F0` (`cpf`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FK_F41C9B25FCF8192D` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Restrições para tabelas `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `FK_A6FE3FDE2A813255` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `FK_A6FE3FDEC7DB1397` FOREIGN KEY (`id_profissional`) REFERENCES `profissional` (`id`);

--
-- Restrições para tabelas `disponibilidade`
--
ALTER TABLE `disponibilidade`
  ADD CONSTRAINT `FK_44402DA8C7DB1397` FOREIGN KEY (`id_profissional`) REFERENCES `profissional` (`id`);

--
-- Restrições para tabelas `formacao`
--
ALTER TABLE `formacao`
  ADD CONSTRAINT `FK_41F0965FC7DB1397` FOREIGN KEY (`id_profissional`) REFERENCES `profissional` (`id`);

--
-- Restrições para tabelas `profissional`
--
ALTER TABLE `profissional`
  ADD CONSTRAINT `FK_E41A66E5FCF8192D` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
