-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 01:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdpessoas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `imagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `imagem`) VALUES
(17, 'Teste', 'teste@teste.com', 'localhost/cimol2021sites2/211130/img/test.jpeg'),
(19, 'Pessoa nova', 'pcespaco@gmail.com', 'localhost/cimol2021sites2/211130/img/image006.png'),
(20, 'Graziela Couto', 'graziela@gmail.com', 'localhost/cimol2021sites2/211130/img/batman-avatar.png'),
(21, 'Ana Carolina', 'anacarol@yahoo.com', 'localhost/cimol2021sites2/211130/img/batman-avatar.png'),
(22, 'Juliana Camelo', 'jcamelo@outlook.com', 'localhost/cimol2021sites2/211130/img/batman-avatar.png'),
(23, 'Juliana Camelo', 'jcamelo@outlook.com', 'localhost/cimol2021sites2/211130/img/batman-avatar.png'),
(24, 'Rubervan Agnaldo', 'agvan@gmai.com', 'localhost/cimol2021sites2/211130/img/batman-avatar.png'),
(25, 'Quemily Juliana', 'jujuqueminha@baby.poo', 'localhost/cimol2021sites2/211130/img/batman-avatar.png'),
(26, 'Jeverton Skarsgard', 'js@skar.com', 'localhost/cimol2021sites2/211130/img/batman-avatar.png'),
(27, 'Xena Band', 'xb@gmail.com', 'localhost/cimol2021sites2/211130/img/batman-avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
