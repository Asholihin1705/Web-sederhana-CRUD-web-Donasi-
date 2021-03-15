-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2020 pada 02.16
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(7, 'ashoi', 'ashoi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `doa` varchar(300) NOT NULL,
  `donasi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `telp`, `email`, `doa`, `donasi`) VALUES
(1, 'rahasia', '081255084235', 'asholeeqeen@gmail.com', 'semoga lekas sembuh', 15000000),
(9, 'ashoi', '081255101010', 'asholeeqeen41@gmail.com', 'semoga cepet berlalu', 10000000),
(10, 'likin', '12121212', 'ahmadsholihin1705@gmail.com', 'cepet sembuh', 20000500),
(11, 'ehem', '081255101010', 'ahmadsholihin1705@gmail.com', 'cuman mencintai ehem', 18000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `korban`
--

CREATE TABLE `korban` (
  `id` int(11) NOT NULL,
  `baru` int(11) NOT NULL,
  `positif` int(15) NOT NULL,
  `sembuh` int(13) NOT NULL,
  `meninggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `korban`
--

INSERT INTO `korban` (`id`, `baru`, `positif`, `sembuh`, `meninggal`) VALUES
(1, 300, 7790, 900, 600);

-- --------------------------------------------------------

--
-- Struktur dari tabel `relawan`
--

CREATE TABLE `relawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `umur` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `relawan`
--

INSERT INTO `relawan` (`id`, `nama`, `telp`, `umur`, `email`, `alamat`, `jenis_kelamin`) VALUES
(1, 'ashoi', '081255255134', 22, 'asholeeqeen@gmail.com', 'semarang', 'laki-laki'),
(4, 'ashoi', '081255101010', 0, 'asholeeqeen41@gmail.com', 'jalan anak2', 'laki-laki'),
(5, 'ashoi', '081255101010', 0, 'kevinmaulana914@gmail.com', 'jalan sepi', 'laki-laki'),
(6, 'likin', '081255101010', 0, 'ahmadsholihin1705ail.com', 'jalan anak2', 'laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `korban`
--
ALTER TABLE `korban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
