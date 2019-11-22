-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `toogas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `toogas`;

-- --------------------------------------------------------

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` text COLLATE utf8mb4_unicode_ci NOT NULL, 
  `desconto` text COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `descricao`, `preco`) VALUES 
(1, 'IPhone 8', 'Celular com alta técnologia e grande desenpenho', '1200'),
(2, 'Computador', 'i7 com 8 GB de memória RAM...', '800'),
(3, 'O que é Metodologia Ágil?', 'Uma vez fui contratada por uma empresa que desenvolvia softwares e aplicativos para outras empresas. Nela, um dos meus primeiros trabalhos era auxiliar no desenvolvimento de um aplicativo que visa permitir que as pessoas encontrem restaurantes baratos perto de onde ela se encontra.', '500');
