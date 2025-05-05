-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Bulan Mei 2025 pada 09.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco_treasure`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Admin Satu', 'admin@example.com', '$2y$10$BJRKEQdShfCP/nMISh8CquFtBggTxX5.I71twyypORPbXRylP5D16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL COMMENT 'Nama pengguna',
  `rt` varchar(10) NOT NULL COMMENT 'RT',
  `email` varchar(100) NOT NULL COMMENT 'Email'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `rt`, `email`) VALUES
(1, 'Ignacio Lauda', '04', 'ignlauda16@gmail.com'),
(8, 'Boboiboy', '01', 'bbbgalaxy@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penukaran_poin`
--

CREATE TABLE `penukaran_poin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL COMMENT 'Nama pengguna',
  `jumlah_poin` int(11) NOT NULL COMMENT 'Jumlah yang ditukar',
  `keterangan` text NOT NULL COMMENT 'Penukaran barang',
  `tanggal` date NOT NULL COMMENT 'Tanggal transaksi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penukaran_poin`
--

INSERT INTO `penukaran_poin` (`id`, `nama`, `jumlah_poin`, `keterangan`, `tanggal`) VALUES
(1, 'Boboiboy', 1000, 'Es batu', '2025-05-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poin`
--

CREATE TABLE `poin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL COMMENT 'Nama pengguna',
  `poin` int(11) NOT NULL COMMENT 'Jumlah poin',
  `tanggal` date NOT NULL COMMENT 'Tanggal input'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `poin`
--

INSERT INTO `poin` (`id`, `nama`, `poin`, `tanggal`) VALUES
(4, 'Boboiboy', 500, '2025-05-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampah`
--

CREATE TABLE `sampah` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL COMMENT 'Nama pengguna',
  `rt` varchar(10) NOT NULL COMMENT 'RT',
  `tanggal` date NOT NULL COMMENT 'Tanggal setoran',
  `jenis_sampah` varchar(50) NOT NULL COMMENT 'Jenis sampah',
  `jumlah` float NOT NULL COMMENT 'Berat (Kg)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sampah`
--

INSERT INTO `sampah` (`id`, `nama`, `rt`, `tanggal`, `jenis_sampah`, `jumlah`) VALUES
(1, 'Ignacio Lauda', '04', '2024-10-27', 'Plastik', 2),
(3, 'Boboiboy', '01', '2025-05-05', 'Kaleng', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penukaran_poin`
--
ALTER TABLE `penukaran_poin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `poin`
--
ALTER TABLE `poin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penukaran_poin`
--
ALTER TABLE `penukaran_poin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `poin`
--
ALTER TABLE `poin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
