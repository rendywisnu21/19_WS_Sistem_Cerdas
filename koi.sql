-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Apr 2021 pada 16.54
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `tb_ikan`
--

CREATE TABLE `tb_ikan` (
  `id_ikan` varchar(10) NOT NULL,
  `nama_ikan` varchar(25) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ph`
--

CREATE TABLE `tb_ph` (
  `id_ph` varchar(10) NOT NULL,
  `nilai_ph` varchar(10) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tds`
--

CREATE TABLE `tb_tds` (
  `id_tds` varchar(10) NOT NULL,
  `nilai_tds` varchar(10) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_temperatur`
--

CREATE TABLE `tb_temperatur` (
  `id_temperatur` varchar(10) NOT NULL,
  `nilai_temperatur` varchar(10) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `tb_ph`
--
ALTER TABLE `tb_ph`
  ADD PRIMARY KEY (`id_ph`);

--
-- Indexes for table `tb_tds`
--
ALTER TABLE `tb_tds`
  ADD PRIMARY KEY (`id_tds`);

--
-- Indexes for table `tb_temperatur`
--
ALTER TABLE `tb_temperatur`
  ADD PRIMARY KEY (`id_temperatur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
