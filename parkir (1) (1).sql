-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 06:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` varchar(8) NOT NULL,
  `no_kendaraan` varchar(20) NOT NULL,
  `biaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_parkir`
--

CREATE TABLE `data_parkir` (
  `id_parkir` int(8) NOT NULL,
  `no_kendaraan` varchar(12) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `jam_masuk` varchar(20) NOT NULL,
  `tempat_parkir` varchar(20) NOT NULL,
  `jam_keluar` varchar(20) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_parkir`
--

INSERT INTO `data_parkir` (`id_parkir`, `no_kendaraan`, `jenis_kendaraan`, `jam_masuk`, `tempat_parkir`, `jam_keluar`, `status`) VALUES
(1, '', '0', '0', '', '', ''),
(2, 'Z 4683 YP', 'Motor', '2022-05-18 23:34:20', 'B2 L25', '2022-05-19 18:34:19', ''),
(3, 'D 4683 YP', 'Mobil', '2022-05-18 23:34:20', 'B2 L20', '', ''),
(4, 'A 4683 YP', 'Lainnya', '2022-05-18 23:34:20', 'B2 L30', '2022-05-19 18:34:19', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(8) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Owner','Petugas','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nama`, `keterangan`, `username`, `password`, `level`) VALUES
(1, 'Nurul Dwi Pajriah', 'Owner', 'nuruldwipajriah', '838383', 'Owner'),
(2, 'Rian Anjar Hidayat', 'Petugas Parkir', 'riananjar', '121212', 'Petugas'),
(3, 'Nabila', 'Admin 1', 'nabilaa', '262626', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`),
  ADD UNIQUE KEY `no_kendaraan` (`no_kendaraan`);

--
-- Indexes for table `data_parkir`
--
ALTER TABLE `data_parkir`
  ADD PRIMARY KEY (`id_parkir`),
  ADD UNIQUE KEY `no_kendaraan` (`no_kendaraan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_parkir`
--
ALTER TABLE `data_parkir`
  MODIFY `id_parkir` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
