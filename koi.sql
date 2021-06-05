-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 04:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koi`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `id_parameter` varchar(10) NOT NULL,
  `id_fuzzyset` varchar(10) NOT NULL,
  `domain` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`id_parameter`, `id_fuzzyset`, `domain`) VALUES
('PAR001', 'FZ001', 22),
('PAR001', 'FZ001', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fuzzyset`
--

CREATE TABLE `tb_fuzzyset` (
  `id_fuzzyset` varchar(10) NOT NULL,
  `nama_fuzzyset` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fuzzyset`
--

INSERT INTO `tb_fuzzyset` (`id_fuzzyset`, `nama_fuzzyset`) VALUES
('FZ001', 'Excellent'),
('FZ002', 'Good'),
('FZ003', 'Bad'),
('FZ004', 'Very Bad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grade`
--

CREATE TABLE `tb_grade` (
  `id_grade` varchar(10) NOT NULL,
  `nama_grade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` varchar(10) NOT NULL,
  `id_grade` varchar(10) NOT NULL,
  `domain_output` varchar(20) NOT NULL,
  `input_temperatur` varchar(20) NOT NULL,
  `input_pH` varchar(20) NOT NULL,
  `input_TDS` varchar(20) NOT NULL,
  `input_DO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_parameter`
--

CREATE TABLE `tb_parameter` (
  `id_parameter` varchar(10) NOT NULL,
  `nama_parameter` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_parameter`
--

INSERT INTO `tb_parameter` (`id_parameter`, `nama_parameter`) VALUES
('PAR001', 'Temperature'),
('PAR002', 'pH'),
('PAR003', 'TDS'),
('PAR004', 'DO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD KEY `id_parameter` (`id_parameter`),
  ADD KEY `id_fuzzyset` (`id_fuzzyset`);

--
-- Indexes for table `tb_fuzzyset`
--
ALTER TABLE `tb_fuzzyset`
  ADD PRIMARY KEY (`id_fuzzyset`);

--
-- Indexes for table `tb_grade`
--
ALTER TABLE `tb_grade`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_grade` (`id_grade`);

--
-- Indexes for table `tb_parameter`
--
ALTER TABLE `tb_parameter`
  ADD PRIMARY KEY (`id_parameter`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `domain`
--
ALTER TABLE `domain`
  ADD CONSTRAINT `domain_ibfk_1` FOREIGN KEY (`id_parameter`) REFERENCES `tb_parameter` (`id_parameter`),
  ADD CONSTRAINT `domain_ibfk_2` FOREIGN KEY (`id_fuzzyset`) REFERENCES `tb_fuzzyset` (`id_fuzzyset`);

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`id_grade`) REFERENCES `tb_grade` (`id_grade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
