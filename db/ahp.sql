-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mar 2018 pada 04.19
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pw_kriteria`
--

CREATE TABLE `pw_kriteria` (
  `id` int(2) NOT NULL,
  `pw1` varchar(5) NOT NULL,
  `pw2` varchar(5) NOT NULL,
  `pw3` varchar(5) NOT NULL,
  `pw4` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pw_kriteria`
--

INSERT INTO `pw_kriteria` (`id`, `pw1`, `pw2`, `pw3`, `pw4`) VALUES
(1, '0.35', '0.25', '0.3', '0.1'),
(2, '0.28', '0.35', '0.21', '0.17'),
(3, '0.35', '0.35', '0.21', '0.1'),
(4, '0.28', '0.35', '0.21', '0.17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_data` varchar(7) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_data`, `nama_alternatif`) VALUES
('dta-001', 'Asus'),
('dta-002', 'Acer'),
('dta-003', 'Dell'),
('dta-004', 'Toshiba'),
('dta-005', 'Axioo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` varchar(7) NOT NULL,
  `kd_kriteria` int(7) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`) VALUES
('krt-001', 201, 'Spesifikasi'),
('krt-002', 202, 'Budget'),
('krt-003', 203, 'Baterai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perb_alternatif`
--

CREATE TABLE `tb_perb_alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `nb_db` int(5) NOT NULL,
  `alternatif1` varchar(30) NOT NULL,
  `alternatif2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perb_alternatif`
--

INSERT INTO `tb_perb_alternatif` (`id_alternatif`, `nm_banding`, `nb_db`, `alternatif1`, `alternatif2`) VALUES
('A01 ', '1. Sama penting dengan', 1, 'Asus', 'Asus'),
('A02 ', '1. Sama penting dengan', 1, 'Acer', 'Acer'),
('A03 ', '1. Sama penting dengan', 1, 'Dell', 'Dell'),
('A04 ', '1. Sama penting dengan', 1, 'Toshiba', 'Toshiba'),
('A05 ', '1. Sama penting dengan', 1, 'Axioo', 'Axioo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perb_kriteria`
--

CREATE TABLE `tb_perb_kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nilai_banding` int(5) NOT NULL,
  `kriteria1` varchar(30) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `kriteria2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perb_kriteria`
--

INSERT INTO `tb_perb_kriteria` (`id_kriteria`, `nilai_banding`, `kriteria1`, `nm_banding`, `kriteria2`) VALUES
('B01 ', 1, 'Spesifikasi', '1. Sama penting dengan', 'Spesifikasi'),
('B02 ', 1, 'Budget', '1. Sama penting dengan', 'Budget'),
('B03 ', 1, 'Baterai', '1. Sama penting dengan', 'Baterai'),
('B04 ', 1, 'Sistem Operasi', '1. Sama penting dengan', 'Sistem Operasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_perb_alternatif`
--
ALTER TABLE `tb_perb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_perb_kriteria`
--
ALTER TABLE `tb_perb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
