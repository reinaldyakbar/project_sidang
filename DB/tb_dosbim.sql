-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2023 pada 06.28
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosbim`
--

CREATE TABLE `tb_dosbim` (
  `id` int(11) NOT NULL,
  `npp` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_dosbim`
--

INSERT INTO `tb_dosbim` (`id`, `npp`, `nama`, `bidang`, `gambar`) VALUES
(3, '0686.11.2013.536', 'Defri Kurniawan, M.Kom', 'RPLD', 'profil16.svg'),
(4, '0686.11.2013.536', 'Defri Kurniawan, M.Kom', 'RPLD', 'profil16.svg'),
(5, '0686.11.2013.536', 'Defri Kurniawan, M.Kom', 'RPLD', 'profil16.svg'),
(6, '0686.11.2013.536', 'Defri Kurniawan, M.Kom', 'RPLD', 'profil16.svg'),
(7, '0686.11.2013.536', 'Defri Kurniawan, M.Kom', 'RPLD', 'profil16.svg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dosbim`
--
ALTER TABLE `tb_dosbim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dosbim`
--
ALTER TABLE `tb_dosbim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
