-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 08:04 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `fpemesanan`
--

CREATE TABLE IF NOT EXISTS `fpemesanan` (
  `nama` text NOT NULL,
  `no_Idn` int(15) NOT NULL,
  `nohp` text NOT NULL,
  `klsPenumpang` text NOT NULL,
  `jwdPenumpang` date NOT NULL,
  `jmlPenumpang` text NOT NULL,
  `jmlPenumpangLansia` text NOT NULL,
  `hargaTiket` text NOT NULL,
  `totalBayar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4234242 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fpemesanan`
--

INSERT INTO `fpemesanan` (`nama`, `no_Idn`, `nohp`, `klsPenumpang`, `jwdPenumpang`, `jmlPenumpang`, `jmlPenumpangLansia`, `hargaTiket`, `totalBayar`) VALUES
('Security', 12345, '082332475550', 'Bisnis', '2022-10-13', '1', '1', '150000', '150000.9'),
('Security', 4234241, '082332475550', 'Eksekutif', '2022-10-29', '1', '1', '300000', '570000');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_bus`
--

CREATE TABLE IF NOT EXISTS `kelas_bus` (
  `id` int(5) NOT NULL,
  `nama` text NOT NULL,
  `harga_tiket` int(10) NOT NULL,
  `gambar_bus` text NOT NULL,
  `tampilan_kabin` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_bus`
--

INSERT INTO `kelas_bus` (`id`, `nama`, `harga_tiket`, `gambar_bus`, `tampilan_kabin`) VALUES
(1, 'Ekonomi', 100000, '', ''),
(2, 'Bisnis', 150000, '', ''),
(3, 'Eksekutif', 300000, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fpemesanan`
--
ALTER TABLE `fpemesanan`
  ADD PRIMARY KEY (`no_Idn`);

--
-- Indexes for table `kelas_bus`
--
ALTER TABLE `kelas_bus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fpemesanan`
--
ALTER TABLE `fpemesanan`
  MODIFY `no_Idn` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4234242;
--
-- AUTO_INCREMENT for table `kelas_bus`
--
ALTER TABLE `kelas_bus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
