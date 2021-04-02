-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 05:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas1_pi`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `datamahasiswaview`
-- (See below for the actual view)
--
CREATE TABLE `datamahasiswaview` (
`id` int(11) unsigned
,`nim` char(9)
,`nama` varchar(100)
,`jenis_kelamin` enum('Perempuan','Pria')
,`email` varchar(150)
,`usia` tinyint(2)
,`biografi` text
,`fakultas` varchar(150)
,`jurusan` varchar(150)
,`id_minat` varchar(50)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) UNSIGNED NOT NULL,
  `nim` char(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Pria') NOT NULL,
  `email` varchar(150) NOT NULL,
  `usia` tinyint(2) NOT NULL,
  `biografi` text NOT NULL,
  `kode_jurusan` char(4) NOT NULL,
  `id_minat` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nim`, `nama`, `jenis_kelamin`, `email`, `usia`, `biografi`, `kode_jurusan`, `id_minat`, `created_at`, `updated_at`) VALUES
(3, '181402100', 'Jecellyn Wong', 'Perempuan', 'jecellyn@gmail.com', 12, 'saffsdfsfsad', '0301', '1,3,6', '2021-03-31 17:30:12', '2021-03-31 17:30:12'),
(4, '181402092', 'Zaki Afifi', 'Pria', 'zaki@gmail.com', 20, 'dsghfsdgaga', '1402', '1,3,4', '2021-03-31 17:33:50', '2021-04-01 11:24:40'),
(5, '181402010', 'Firdha', 'Perempuan', 'fira@gmail.com', 20, 'ghkhgkadfaksfha', '1402', '1,4', '2021-03-31 17:36:31', '2021-03-31 17:36:31'),
(6, '181402140', 'Patrisia Tambunan', 'Perempuan', 'patrisiatambunan@gmail.com', 20, 'Halo aku patrisia panggilanku patty', '1402', '2', '2021-04-01 16:39:38', '2021-04-01 16:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `kode_fakultas` char(2) NOT NULL,
  `fakultas` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`kode_fakultas`, `fakultas`, `created_at`) VALUES
('01', 'Kedokteran', '2021-03-30 16:59:50'),
('02', 'Hukum', '2021-03-30 17:04:37'),
('03', 'Pertanian', '2021-03-30 17:04:37'),
('04', 'Teknik', '2021-03-30 17:04:37'),
('05', 'Ekonomi dan Bisnis', '2021-03-30 17:04:37'),
('06', 'Kedokteran Gigi', '2021-03-30 17:04:37'),
('07', 'Ilmu Budaya', '2021-03-30 17:04:37'),
('08', 'Matematika dan Ilmu Pengetahuan Alam', '2021-03-30 17:04:37'),
('09', 'Ilmu Sosial dan Ilmu Politik', '2021-03-30 17:04:37'),
('10', 'Kesehatan Masyarakat', '2021-03-30 17:04:37'),
('11', 'Keperawatan', '2021-03-30 17:04:37'),
('12', 'Kehutanan', '2021-03-30 17:04:37'),
('13', 'Psikologi', '2021-03-30 17:04:37'),
('14', 'Ilmu Komputer dan Teknologi Informasi', '2021-03-30 17:04:37'),
('15', 'Farmasi', '2021-03-30 17:04:37');

-- --------------------------------------------------------

--
-- Stand-in structure for view `fakultas_jurusan`
-- (See below for the actual view)
--
CREATE TABLE `fakultas_jurusan` (
`kode_jurusan` char(4)
,`jurusan` varchar(150)
,`kode_fakultas` char(2)
,`fakultas` varchar(150)
);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` char(4) NOT NULL,
  `jurusan` varchar(150) NOT NULL,
  `kode_fakultas` char(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `jurusan`, `kode_fakultas`, `created_at`) VALUES
('0100', 'Pendidikan Kedokteran', '01', '2021-03-30 17:18:13'),
('0200', 'Ilmu Hukum', '02', '2021-03-30 17:19:35'),
('0301', 'Agroteknologi', '03', '2021-03-30 17:19:35'),
('0302', 'Manajemen Sumber Daya Perairan', '03', '2021-03-30 17:19:35'),
('0304', 'Agribisnis', '03', '2021-03-30 17:21:45'),
('0305', 'Ilmu dan Teknologi Pangan', '03', '2021-03-30 17:21:45'),
('0306', 'Peternakan', '03', '2021-03-30 17:21:45'),
('0308', 'Keteknikan Pertanian', '03', '2021-03-30 17:21:45'),
('0401', 'Teknik Mesin', '04', '2021-03-31 05:31:20'),
('0402', 'Teknik Elektro', '04', '2021-03-31 05:31:20'),
('0403', 'Teknik Industri', '04', '2021-03-31 05:31:20'),
('0404', 'Teknik Sipil', '04', '2021-03-31 05:31:20'),
('0405', 'Teknik Kimia', '04', '2021-03-31 05:31:20'),
('0406', 'Arsitektur', '04', '2021-03-31 05:31:20'),
('0407', 'Teknik Lingkungan', '04', '2021-03-31 05:31:20'),
('0501', 'Ekonomi Pembangunan', '05', '2021-03-31 05:33:04'),
('0502', 'Manajemen', '05', '2021-03-31 05:33:04'),
('0503', 'Akuntansi', '05', '2021-03-31 05:33:04'),
('0600', 'Pendidikan Dokter Gigi', '06', '2021-03-31 05:38:10'),
('0701', 'Sastra Indonesia', '07', '2021-03-31 05:38:10'),
('0702', 'Sastra Daerah', '07', '2021-03-31 05:38:10'),
('0703', 'Sastra Arab', '07', '2021-03-31 05:38:10'),
('0704', 'Sastra Inggris', '07', '2021-03-31 05:38:10'),
('0705', 'Ilmu Sejarah', '07', '2021-03-31 05:38:10'),
('0706', 'Etnomusikologi', '07', '2021-03-31 05:38:10'),
('0707', 'Sastra Jepang', '07', '2021-03-31 05:38:10'),
('0708', 'Ilmu Perpustakaan', '07', '2021-03-31 05:38:10'),
('0709', 'Sastra Cina', '07', '2021-03-31 05:38:10'),
('0801', 'Fisika', '08', '2021-03-31 05:38:10'),
('0802', 'Kimia', '08', '2021-03-31 05:38:10'),
('0803', 'Matematika', '08', '2021-03-31 05:38:10'),
('0805', 'Biologi', '08', '2021-03-31 05:38:10'),
('0901', 'Sosiologi', '09', '2021-03-31 05:41:31'),
('0904', 'Ilmu Komunikasi', '09', '2021-03-31 05:41:31'),
('1000', 'Kesehatan Masyarakat', '10', '2021-03-31 05:41:31'),
('1100', 'Ilmu Keperawatan', '11', '2021-03-31 05:41:31'),
('1200', 'Kehutanan', '12', '2021-03-31 05:41:31'),
('1300', 'Psikologi', '13', '2021-03-31 05:41:31'),
('1401', 'Ilmu Komputer', '14', '2021-03-31 05:41:31'),
('1402', 'Teknologi Informasi', '14', '2021-03-31 05:41:31'),
('1500', 'Farmasi', '15', '2021-03-31 05:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `minat`
--

CREATE TABLE `minat` (
  `id` tinyint(2) NOT NULL,
  `minat` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minat`
--

INSERT INTO `minat` (`id`, `minat`, `created_at`) VALUES
(1, 'Teknik', '2021-03-31 05:48:55'),
(2, 'Bisnis', '2021-03-31 05:49:47'),
(3, 'Hukum', '2021-03-31 05:49:47'),
(4, 'Filosofi', '2021-03-31 05:49:47'),
(5, 'Ekonomi', '2021-03-31 05:49:47'),
(6, 'Teknologi', '2021-03-31 05:49:47');

-- --------------------------------------------------------

--
-- Structure for view `datamahasiswaview`
--
DROP TABLE IF EXISTS `datamahasiswaview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datamahasiswaview`  AS SELECT `d`.`id` AS `id`, `d`.`nim` AS `nim`, `d`.`nama` AS `nama`, `d`.`jenis_kelamin` AS `jenis_kelamin`, `d`.`email` AS `email`, `d`.`usia` AS `usia`, `d`.`biografi` AS `biografi`, `f`.`fakultas` AS `fakultas`, `j`.`jurusan` AS `jurusan`, `d`.`id_minat` AS `id_minat`, `d`.`created_at` AS `created_at`, `d`.`updated_at` AS `updated_at` FROM ((`data_mahasiswa` `d` join `jurusan` `j` on(`j`.`kode_jurusan` = `d`.`kode_jurusan`)) join `fakultas` `f` on(`f`.`kode_fakultas` = `j`.`kode_fakultas`)) ;

-- --------------------------------------------------------

--
-- Structure for view `fakultas_jurusan`
--
DROP TABLE IF EXISTS `fakultas_jurusan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fakultas_jurusan`  AS SELECT `j`.`kode_jurusan` AS `kode_jurusan`, `j`.`jurusan` AS `jurusan`, `f`.`kode_fakultas` AS `kode_fakultas`, `f`.`fakultas` AS `fakultas` FROM (`jurusan` `j` join `fakultas` `f` on(`j`.`kode_fakultas` = `f`.`kode_fakultas`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`,`nim`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`kode_fakultas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`,`kode_fakultas`),
  ADD KEY `kode_fakultas` (`kode_fakultas`);

--
-- Indexes for table `minat`
--
ALTER TABLE `minat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `minat`
--
ALTER TABLE `minat`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD CONSTRAINT `data_mahasiswa_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode_jurusan`) ON UPDATE CASCADE;

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`kode_fakultas`) REFERENCES `fakultas` (`kode_fakultas`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
