-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 03:38 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unugiri_2023_codeigniter4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kd_kategori` varchar(4) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kd_kategori`, `nama_kategori`, `keterangan`) VALUES
(2, 'aas', 'ss', 'ccc'),
(3, 'aas', 'ss', 'ccc'),
(4, 'aas', 'ss', 'ccc'),
(5, 'aas', 'ss', 'ccc');
INSERT INTO `kategori` (`id_kategori`, `kd_kategori`, `nama_kategori`, `keterangan`) VALUES (NULL, 'as', 'll', 'dddcc');
INSERT INTO `kategori` (`id_kategori`, `kd_kategori`, `nama_kategori`, `keterangan`) VALUES (NULL, 'as', 'll', 'dddcc');
INSERT INTO `kategori` (`id_kategori`, `kd_kategori`, `nama_kategori`, `keterangan`) VALUES (NULL, 'as', 'll', 'dddcc');
INSERT INTO `kategori` (`id_kategori`, `kd_kategori`, `nama_kategori`, `keterangan`) VALUES (NULL, 'as', 'll', 'dddcc');
INSERT INTO `kategori` (`id_kategori`, `kd_kategori`, `nama_kategori`, `keterangan`) VALUES (NULL, 'as', 'll', 'dddcc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nm_penerbit` varchar(50) NOT NULL,
  `kt_penerbit` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nm_penerbit`, `kt_penerbit`, `keterangan`) VALUES
(1, 'Informatika', 'Bandung', '-'),
(2, 'Andi', 'Yogyakarta', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(4) NOT NULL,
  `nm_penerbit` varchar(100) NOT NULL,
  `kt_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nm_penerbit`, `kt_penerbit`) VALUES
(1, 'Andi', 'Yogyakarta'),
(2, 'Informatika', 'Bandung'),
(3, 'Andi', 'Jakarta'),
(4, 'Andi', 'Surabaya'),
(5, 'Andi', 'Malang'),
(6, 'Andi', 'Solo'),
(7, 'Andi', 'Bojonegoro'),
(8, 'Andi', 'Blora'),
(9, 'Andi', 'Tuban'),
(10, 'Andi', 'Lamongan'),
(11, 'Andi', 'Tuban'),
(12, 'Andi', 'Lamongan'),
(13, 'Informatika', 'Jakarta'),
(14, 'Informatika', 'Malang'),
(15, 'Informatika', 'Malang'),
(16, 'Informatika', 'Surabaya'),
(17, 'Informatika', 'Bojonegoro'),
(18, 'Informatika', 'Tuban'),
(19, 'Informatika', 'Lamongan'),
(20, 'Lokomedia', 'Jakarta'),
(21, 'Lokomedia', 'bandung'),
(22, 'aaa', 'aaa'),
(24, 'informatika', 'malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nickname`, `firstname`, `lastname`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$/clmNLUUxGnREFHqraU7P.aVfJ5Mk0iEKRgKVz8.ZKOZIUGJGXlya', 'Admin', 'Super', 'Admin', '2023-12-12 14:51:35', '2023-12-12 14:51:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`) USING BTREE;

--
-- Indeks untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
