-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2023 pada 14.57
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
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `koordinator` varchar(128) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul`, `isi_pengumuman`, `koordinator`, `tanggal`) VALUES
(1, 'Info Pemilihan Dosen Pembimbing TA TI S-1 Ganjil 2022/2023', 'Diberitahukan kepada mahasiswa program studi TI S-1 yang mengambil Tugas Akhir yang belum memiliki Dosen Pembimbing TA dapat mengajukan permohonan Dosen Pembimbing melalui Sistem Pengajuan Dosen Pembimbing (SPDP) TA di alamat https://tatis1.dinus.web.id/. Silahkan buat account terlebih dahulu menggunakan email mahasiswa. Pengajuan Dosen Pembimbing TA dimulai dari hari Senin, tanggal 12 s.d hari Kamis tanggal 14 September 2022. Lampirkan bukti permohonan berupa Surat Permohonan (format pdf) sebagai bukti keseriusan mengajukan permohonan ke dosbim yang dituju dan bukti pendukung screenshot percakapan sudah menghubungi dosbim yang dituju (jika ada, jika tidak ada dapat melampirkan surat permohonan).\r\nSebelumnya kami telah melakukan rekap data terhadap surat permohonan yang dikirim melalui wa ke Koordinator 1 maupun Koordinator 2 TA sampai dengan pengiriman hari Jumat, tanggal 9 September 2022. Adapun rekap surat permohonan yang telah dikirimkan tersebut dapat dilihat melalui https://bit.ly/cekPengajuan\r\nDemikian informasi ini disampaikan, diucapkan terima kasih.', 'Defri Kurniawan, M.Kom', '2023-07-10'),
(2, 'Pengajuan Dosen Pembimbing TA/Skripsi TI S1 Semester Gasal 2021/2022', 'Diberitahukan kepada mahasiswa program studi Teknik Informatika S1 yang belum diplot/mendapatkan Dosen Pembimbing TA di siadin.\r\n\r\nHarap dapat mengajukan permohonannya melalui aplikasi web SPDP TA yang dapat diakses di alamat https://tatis1.dinus.web.id/ . Silahkan daftar melalui email mahasiswa dan unggah surat serta bukti pendukung.\r\n\r\nSurat wajib disertakan yang berisi identitas mahasiswa serta minat/topik/keinginan terhadap tugas akhir/skripsi yang akan dibuat. Sedangkan Bukti Pendukung bersifat opsional dapat diisi dengan bukti screenshot percakapan atas konsultasi yang pernah dilakukan / persetujuan dari dosen yang dituju. Surat dibuat sendiri oleh mahasiswa. Pengajuan dilakukan mulai hari Selasa tgl 7 s.d Sabtu tgl 11 September 2021.\r\n\r\nDemikian informasi ini disampaikan, atas perhatiannya diucapkan terima kasih.', 'DANANG WAHYU UTOMO, M.Kom', '2023-07-19'),
(3, 'Udinus', 'Ini contoh Pengumuman\r\n', 'Fikri', '2023-07-07'),
(4, 'Udinus', 'wwwwwwwww', 'Fikriw', '0000-00-00'),
(5, 'Udinus', 'qqqqqq', 'Fikri', '0000-00-00'),
(6, 'qqqqqqqqqqqqqqq', 'wwwwwwwwwwwwwwwwww', 'DANANG WAHYU UTOMO, M.Kom', '0000-00-00'),
(7, 'PSOSJOJSOJS', 'wwwwwwwwwwwwww', 'DANANG WAHYU UTOMO, M.Kom', '0000-00-00'),
(8, 'Udinus', 'wwwwwww', 'DANANG WAHYU UTOMO, M.Kom', '0000-00-00'),
(9, 'PSOSJOJSOJS', 'wwwwwwwwwwwwwww', 'DANANG WAHYU UTOMO, M.Kom', '0000-00-00'),
(10, 'Pengumuman Tugas Akhir Universitas Dian Nuswantoro', 'ssssssaaaaaaaaaaaaaaaaaaaaasssssssssssssss', 'DANANG WAHYU UTOMO, M.Kom', '0000-00-00'),
(11, 'Hahaha', 'Hayioo', 'Wildan', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dosbim`
--
ALTER TABLE `tb_dosbim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_dosbim`
--
ALTER TABLE `tb_dosbim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
