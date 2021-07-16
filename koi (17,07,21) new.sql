-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 07:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` char(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `role`) VALUES
('AD001', 'Lucas', 'lucas', 'dc53fc4f621c80bdc2fa0329a6123708', '1'),
('AD002', 'Sony', 'Sony', 'ae61fb71e6dd8cdb05d1a3c8a6a270a2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `suhu` varchar(25) NOT NULL,
  `ph` varchar(25) NOT NULL,
  `tds` varchar(25) NOT NULL,
  `hasil_perhitungan` varchar(25) NOT NULL,
  `grade` varchar(25) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `suhu`, `ph`, `tds`, `hasil_perhitungan`, `grade`, `tanggal`) VALUES
(199, '5', '5', '300', '300', 'C', '2021-07-16'),
(200, '25', '5', '300', '300', 'C', '2021-07-16'),
(201, '25', '7', '300', '100', 'A', '2021-07-16'),
(202, '25', '7.5', '290', '144.44', 'A', '2021-07-16'),
(203, '25', '7.5', '300', '144.44', 'A', '2021-07-16'),
(204, '25', '6', '300', '100', 'A', '2021-07-16'),
(205, '25', '8', '300', '100', 'A', '2021-07-16'),
(206, '25', '7', '300', '100', 'A', '2021-07-16'),
(207, '25', '6.5', '300', '100', 'A', '2021-07-16'),
(208, '25', '7.5', '300', '144.44', 'A', '2021-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` enum('Excellent','Good','Bad','Very Bad') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Excellent'),
(2, 'Good'),
(3, 'Bad'),
(4, 'Very Bad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ph`
--

CREATE TABLE `tb_ph` (
  `id_ph` varchar(10) NOT NULL,
  `fuzzy_set` enum('Excellent','Good','Bad','Very Bad') NOT NULL,
  `domain` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ph`
--

INSERT INTO `tb_ph` (`id_ph`, `fuzzy_set`, `domain`) VALUES
('PH001', 'Excellent', '22,5'),
('PH002', 'Excellent', '25'),
('PH003', 'Excellent', '26'),
('PH004', 'Excellent', '27'),
('PH005', 'Good', '17,5'),
('PH006', 'Good', '20'),
('PH007', 'Good', '22,5'),
('PH008', 'Good', '25'),
('PH009', 'Good', '26'),
('PH010', 'Good', '27'),
('PH011', 'Good', '28'),
('PH012', 'Good', '29'),
('PH013', 'Bad', '12,5'),
('PH014', 'Bad', '15'),
('PH015', 'Bad', '17,5'),
('PH016', 'Bad', '20'),
('PH017', 'Bad', '28'),
('PH018', 'Bad', '29'),
('PH019', 'Bad', '30'),
('PH020', 'Bad', '31'),
('PH021', 'Very Bad', '0'),
('PH022', 'Very Bad', '10'),
('PH023', 'Very Bad', '12,5'),
('PH024', 'Very Bad', '15'),
('PH025', 'Very Bad', '30'),
('PH026', 'Very Bad', '31'),
('PH027', 'Very Bad', '32'),
('PH028', 'Very Bad', '32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(10) NOT NULL,
  `rule` char(5) NOT NULL,
  `id_suhu` varchar(10) NOT NULL,
  `id_ph` varchar(10) NOT NULL,
  `id_tds` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rule`
--

INSERT INTO `tb_rule` (`id_rule`, `rule`, `id_suhu`, `id_ph`, `id_tds`, `grade`) VALUES
(1, 'R1', 'TP01', 'PH001', 'TD01', 'A'),
(2, 'R2', 'TP01', 'PH001', 'TD05', 'A'),
(3, 'R3', 'TP01', 'PH001', 'TD13', 'C'),
(4, 'R4', 'TP01', 'PH001', 'TD17', 'D'),
(5, 'R5', 'TP01', 'PH005', 'TD01', 'A'),
(6, 'R6', 'TP01', 'PH005', 'TD05', 'B'),
(7, 'R7', 'TP01', 'PH005', 'TD17', 'C'),
(8, 'R8', 'TP01', 'PH005', 'TD17', 'D'),
(9, 'R9', 'TP01', 'PH013', 'TD01', 'C'),
(10, 'R10', 'TP01', 'PH013', 'TD05', 'C'),
(11, 'R11', 'TP01', 'PH013', 'TD13', 'D'),
(12, 'R12', 'TP01', 'PH013', 'TD17', 'D'),
(13, 'R13', 'TP01', 'PH021', 'TD01', 'C'),
(14, 'R14', 'TP01', 'PH021', 'TD05', 'C'),
(15, 'R15', 'TP01', 'PH021', 'TD13', 'D'),
(16, 'R16', 'TP01', 'PH017', 'TD17', 'D'),
(17, 'R17', 'TP05', 'PH001', 'TD01', 'A'),
(18, 'R18', 'TP05', 'PH001', 'TD05', 'B'),
(19, 'R19', 'TP05', 'PH001', 'TD13', 'C'),
(20, 'R20', 'TP05', 'PH001', 'TD17', 'D'),
(21, 'R21', 'TP05', 'PH005', 'TD01', 'B'),
(22, 'R22', 'TP05', 'PH005', 'TD05', 'B'),
(23, 'R23', 'TP05', 'PH005', 'TD13', 'C'),
(24, 'R24', 'TP05', 'PH005', 'TD17', 'D'),
(25, 'R25', 'TP05', 'PH013', 'TD01', 'C'),
(26, 'R26', 'TP05', 'PH013', 'TD05', 'C'),
(27, 'R27', 'TP05', 'PH013', 'TD13', 'D'),
(28, 'R28', 'TP05', 'PH013', 'TD17', 'D'),
(29, 'R29', 'TP05', 'PH021', 'TD01', 'C'),
(30, 'R30', 'TP05', 'PH021', 'TD05', 'C'),
(31, 'R31', 'TP05', 'PH021', 'TD13', 'D'),
(32, 'R32', 'TP05', 'PH021', 'TD17', 'D'),
(33, 'R33', 'TP13', 'PH001', 'TD01', 'C'),
(34, 'R34', 'TP13', 'PH001', 'TD05', 'C'),
(35, 'R35', 'TP13', 'PH001', 'TD13', 'C'),
(36, 'R36', 'TP13', 'PH001', 'TD17', 'D'),
(37, 'R37', 'TP13', 'PH005', 'TD01', 'C'),
(38, 'R38', 'TP13', 'PH005', 'TD05', 'C'),
(39, 'R39', 'TP13', 'PH005', 'TD13', 'D'),
(40, 'R40', 'TP13', 'PH005', 'TD17', 'D'),
(41, 'R41', 'TP13', 'PH013', 'TD01', 'C'),
(42, 'R42', 'TP13', 'PH013', 'TD05', 'C'),
(43, 'R43', 'TP13', 'PH013', 'TD13', 'D'),
(44, 'R44', 'TP13', 'PH013', 'TD17', 'D'),
(45, 'R45', 'TP13', 'PH021', 'TD01', 'C'),
(46, 'R46', 'TP13', 'PH021', 'TD05', 'D'),
(47, 'R47', 'TP13', 'PH021', 'TD13', 'D'),
(48, 'R48', 'TP13', 'PH021', 'TD17', 'D'),
(49, 'R49', 'TP21', 'PH001', 'TD01', 'B'),
(50, 'R50', 'TP21', 'PH001', 'TD05', 'C'),
(51, 'R51', 'TP21', 'PH001', 'TD13', 'C'),
(52, 'R52', 'TP21', 'PH001', 'TD17', 'D'),
(53, 'R53', 'TP21', 'PH005', 'TD01', 'C'),
(54, 'R54', 'TP21', 'PH005', 'TD05', 'C'),
(55, 'R55', 'TP21', 'PH005', 'TD13', 'D'),
(56, 'R56', 'TP21', 'PH005', 'TD17', 'D'),
(57, 'R57', 'TP21', 'PH013', 'TD01', 'C'),
(58, 'R58', 'TP21', 'PH013', 'TD05', 'C'),
(59, 'R59', 'TP21', 'PH013', 'TD13', 'D'),
(60, 'R60', 'TP21', 'PH001', 'TD17', 'D'),
(61, 'R61', 'TP21', 'PH021', 'TD01', 'C'),
(62, 'R62', 'TP21', 'PH021', 'TD05', 'D'),
(63, 'R63', 'TP21', 'PH021', 'TD13', 'D'),
(64, 'R64', 'TP21', 'PH021', 'TD17', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suhu`
--

CREATE TABLE `tb_suhu` (
  `id_suhu` varchar(10) NOT NULL,
  `fuzzy_set` enum('Excellent','Good','Very Bad','Bad') NOT NULL,
  `domain` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suhu`
--

INSERT INTO `tb_suhu` (`id_suhu`, `fuzzy_set`, `domain`) VALUES
('TP01', 'Excellent', '55,2'),
('TP02', 'Excellent', '25'),
('TP03', 'Excellent', '26'),
('TP04', 'Excellent', '27'),
('TP05', 'Good', '17,5'),
('TP06', 'Good', '20'),
('TP07', 'Good', '22.5'),
('TP08', 'Good', '25'),
('TP09', 'Good', '26'),
('TP10', 'Good', '27'),
('TP11', 'Good', '28'),
('TP12', 'Good', '29'),
('TP13', 'Bad', '12,5'),
('TP14', 'Bad', '15'),
('TP15', 'Bad', '17,5'),
('TP16', 'Bad', '20'),
('TP17', 'Bad', '28'),
('TP18', 'Bad', '29'),
('TP19', 'Bad', '30'),
('TP20', 'Bad', '31'),
('TP21', 'Very Bad', '0'),
('TP22', 'Very Bad', '10'),
('TP23', 'Very Bad', '12,5'),
('TP24', 'Very Bad', '15'),
('TP25', 'Very Bad', '30'),
('TP26', 'Very Bad', '31'),
('TP27', 'Very Bad', '32'),
('TP28', 'Very Bad', '32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tds`
--

CREATE TABLE `tb_tds` (
  `id_tds` varchar(10) NOT NULL,
  `fuzzy_set` enum('Excellent','Good','Bad','Very Bad') NOT NULL,
  `domain` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tds`
--

INSERT INTO `tb_tds` (`id_tds`, `fuzzy_set`, `domain`) VALUES
('FZ001', 'Good', '22.5'),
('TD01', 'Excellent', '125'),
('TD02', 'Excellent', '250'),
('TD03', 'Excellent', '300'),
('TD04', 'Excellent', '325'),
('TD05', 'Good', '0'),
('TD06', 'Good', '0'),
('TD07', 'Good', '125'),
('TD08', 'Good', '250'),
('TD09', 'Good', '300'),
('TD10', 'Good', '325'),
('TD11', 'Good', '350'),
('TD12', 'Good', '400'),
('TD13', 'Bad', '350'),
('TD14', 'Bad', '400'),
('TD15', 'Bad', '450'),
('TD16', 'Bad', '475'),
('TD17', 'Very Bad', '450'),
('TD18', 'Very Bad', '475'),
('TD19', 'Very Bad', '500'),
('TD20', 'Very Bad', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_ph`
--
ALTER TABLE `tb_ph`
  ADD PRIMARY KEY (`id_ph`);

--
-- Indexes for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id_rule`),
  ADD KEY `id_temperatur` (`id_suhu`),
  ADD KEY `id_ph` (`id_ph`),
  ADD KEY `id_tds` (`id_tds`);

--
-- Indexes for table `tb_suhu`
--
ALTER TABLE `tb_suhu`
  ADD PRIMARY KEY (`id_suhu`);

--
-- Indexes for table `tb_tds`
--
ALTER TABLE `tb_tds`
  ADD PRIMARY KEY (`id_tds`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id_rule` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD CONSTRAINT `tb_rule_ibfk_1` FOREIGN KEY (`id_suhu`) REFERENCES `tb_suhu` (`id_suhu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rule_ibfk_2` FOREIGN KEY (`id_ph`) REFERENCES `tb_ph` (`id_ph`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rule_ibfk_3` FOREIGN KEY (`id_tds`) REFERENCES `tb_tds` (`id_tds`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
