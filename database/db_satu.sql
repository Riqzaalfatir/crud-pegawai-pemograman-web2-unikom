-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2026 at 03:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_satu`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kodejabatan` varchar(5) NOT NULL,
  `namajabatan` text DEFAULT NULL,
  `level` varchar(5) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kodejabatan`, `namajabatan`, `level`, `gaji`) VALUES
('J001', 'CEO', '0', 25000000),
('J025', 'Staff', '4', 5000000),
('J0912', 'Direktur Utama', 'Eklus', 45000000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatanpegawai`
--

CREATE TABLE `jabatanpegawai` (
  `idjp` int(15) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `kodejabatan` varchar(5) NOT NULL,
  `status` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `periode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatanpegawai`
--

INSERT INTO `jabatanpegawai` (`idjp`, `nip`, `kodejabatan`, `status`, `periode`) VALUES
(1, '10125901', 'J001', '1', '2025-2030'),
(2, '10125904', 'J011', '1', '2025-2029'),
(4, '10125907', 'J025', '0', '2025-2027'),
(5, '10102', 'adasa', 'aktif', '2025-206'),
(7, '10102', 'J0912', 'aktif', '2025-2028'),
(8, '10102', 'J0912', 'aktif', '2025-2029'),
(9, '10102', 'J0912', 'aktif', '2025-2028'),
(10, '10125901', 'J0912', 'aktif', '2025-2028'),
(11, '10102', 'J0912', 'aktif', '2025-2028'),
(13, '10125908', 'J0912', 'aktif', '2025-2028');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(15) NOT NULL COMMENT 'Nomor Induk Pegawai',
  `namalengkap` varchar(60) DEFAULT NULL,
  `jeniskelamin` char(3) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel pegawai';

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `namalengkap`, `jeniskelamin`, `tanggallahir`, `alamat`, `nohp`, `email`) VALUES
('10125908', 'Maulana Riqza AlFatir Edit', '1', '2007-12-12', 'Komp.Griya Bandung Indah', '083102851438', 'riqzapersonal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kodejabatan`);

--
-- Indexes for table `jabatanpegawai`
--
ALTER TABLE `jabatanpegawai`
  ADD PRIMARY KEY (`idjp`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatanpegawai`
--
ALTER TABLE `jabatanpegawai`
  MODIFY `idjp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
