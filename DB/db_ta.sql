-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 11:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'reinaldy', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosbim`
--

CREATE TABLE `tb_dosbim` (
  `id` int(11) NOT NULL,
  `npp` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `kuota` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosbim`
--

INSERT INTO `tb_dosbim` (`id`, `npp`, `nama`, `bidang`, `kuota`, `gambar`) VALUES
(23, '0686.11.1996.101', 'Dr. AHMAD ZAINUL FANANI, SSi, M.Kom', 'SC', '10', 'Dr_AHMAD_ZAINUL_FANANI_SSi_M_Kom_0686_11_1996.jpg'),
(24, '0686.11.1996.106', 'Dr. BUDI HARJO M.Kom', 'RPLD', '10', 'Dr_BUDI_HARJO_M_Kom_0686_11_1996.jpg'),
(25, '0686.11.1996.103', 'Dr. HERIBERTUS HIMAWAN, M.Kom', 'RPLD', '10', 'Dr_HERIBERTUS_HIMAWAN_S_Kom_M_Kom_0686_11_19963.jpg'),
(26, '0686.11.1996.104', 'Dr. MULJONO, S.Si, M.Kom', 'SC', '10', 'Dr_MULJONO_S_Si_M_Kom_0686_11_1996_1.jpg'),
(27, '0686.11.1997.130', 'DR SOLICHUL HUDA, M.Kom', 'SKKKD', '10', 'DR_SOLICHUL_HUDA_M_Kom_0686_11_1997.jpg'),
(28, '0686.11.1997.132', 'ERNA ZUNI ASTUTI, M.Kom', 'SC', '10', 'ERNA_ZUNI_ASTUTI_M_Kom_0686_11_1997.jpg'),
(29, '0686.11.1996.097', 'HERU LESTIAWAN, M.Kom', 'RPLD', '10', 'HERU_LESTIAWAN_M_Kom_0686_11_1996.jpg'),
(30, '0686.11.1997.125', 'NOOR AGENG SETIYANTO, M.Kom', 'RPLD', '10', 'NOOR_AGENG_SETIYANTO_M_Kom_0686_11_1997.jpg'),
(31, '0686.11.1996.094', 'T. SUTOJO, S.Si, M.Kom', 'SC', '10', 'T_SUTOJO_S_Si_M_Kom_0686_11_1996.jpg'),
(32, '0686.11.1996.100', 'USMAN SUDIBYO, SSi.,M.KOM', 'SC', '10', 'USMAN_SUDIBYO_SSi_M_KOM_0686_11_1996.jpg'),
(33, '0686.11.2013.536', 'DEFRI KURNIAWAN, M.Kom', 'RPLD', '10', 'Defri_kurniawan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi_ta1`
--

CREATE TABLE `tb_informasi_ta1` (
  `id` int(11) NOT NULL,
  `berkas_reguler` text NOT NULL,
  `syarat_admin_ta1` text NOT NULL,
  `syarat_akademik_ta1` text NOT NULL,
  `berkas_publikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_informasi_ta1`
--

INSERT INTO `tb_informasi_ta1` (`id`, `berkas_reguler`, `syarat_admin_ta1`, `syarat_akademik_ta1`, `berkas_publikasi`) VALUES
(12, 'Mahasiswa sudah menyelesaikan minimal 120 SKS', 'Mahasiswa tersebut terdaftar sebagai mahasiswa aktif', 'Mengirimkan Laporan Tugas Akhir-1 dengan menyertakan Halaman Sampul, Bab I, II, III dan Daftar Pustaka', 'Mengirimkan bukti pubikasi pada Jurnal Nasional Terakreditasi Sinta 3 atau Internasional\r\nConference berupa file jurnal atau prosiding, link publikasi (apabila Jurnal atau Prosiding belum\r\npublish, maka dapat mengirimkan lembar bukti penerimaan (letter of acceptance), '),
(13, 'Mahasiswa lulus mata kuliah Metodologi Penelitian dengan nilai minimal C', 'Mahasiswa tersebut sudah menginput KRS Tugas Akhir I', 'Mengisi Log Bimbingan (Google Spreadsheet) minimal 3x bimbingan dan telah telah disetujui\r\n(tercentang pada kolom Checklist)', 'Bukti revisi yang dikerjakan Jurnal atau Prosiding wajib ditunjukkan'),
(14, 'Dalam daftar KHS tidak boleh ada nilai E', '', 'Lembar Persetujuan Tugas Akhir 1 (download dari siadin) yang ditandatangani oleh Dosen\r\nPembimbing (ttd basah / ttd digital) sebagai bukti persetujuan dari Dosen Pembimbing untuk\r\nmendaftar Sidang TA-1', 'Mengisi Log Bimbingan (Google Spreadsheet) minimal 3x bimbingan dan telah disetujui\r\n(tercentang pada kolom Checklist)'),
(15, 'IPK minimal 2.00', '', 'Mahasiswa peserta sidang regular wajib mendaftar Ujian TA-1 di Siadin dan wajib datang saat Ujian TA-1 sesuai jadwal', 'Lembar Persetujuan Tugas Akhir 1 (download dari siadin) yang ditandatangani oleh Dosen Pembimbing (ttd basah / ttd digital) sebagai bukti persetujuan dari Dosen Pembimbing untuk mendaftar Sidang TA-1'),
(16, '', '', '', 'Mahasiswa peserta sidang jalur Karya Ilmiah tidak perlu datang saat Ujian TA-1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi_ta2`
--

CREATE TABLE `tb_informasi_ta2` (
  `id` int(11) NOT NULL,
  `berkas_ta2_reguler` text NOT NULL,
  `berkas_ta2_publikasi` text NOT NULL,
  `syarat_admin_ta2` text NOT NULL,
  `syarat_akademik_ta2` text NOT NULL,
  `pasca_reguler` text NOT NULL,
  `pasca_publikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_ta1`
--

CREATE TABLE `tb_jadwal_ta1` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(50) NOT NULL,
  `pendaftaran` varchar(128) NOT NULL,
  `estimasi_sidang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jadwal_ta1`
--

INSERT INTO `tb_jadwal_ta1` (`id`, `gelombang`, `pendaftaran`, `estimasi_sidang`) VALUES
(1, 'I', '27 s.d 31 Maret 2023', 'Mulai 05 April 2023'),
(2, 'II', '16 s.d 25 Mei 2023\r\n                        ', 'Mulai 29 Mei 2023'),
(3, 'III', '05 s.d 14 Juni 2023', 'Mulai 19 Juni 2023'),
(4, 'IV', '03 s.d 14 Juli 2023', 'Mulai 20 Juli 2023');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_ta2`
--

CREATE TABLE `tb_jadwal_ta2` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(50) NOT NULL,
  `pendaftaran` varchar(128) NOT NULL,
  `waktu_sidang` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jadwal_ta2`
--

INSERT INTO `tb_jadwal_ta2` (`id`, `gelombang`, `pendaftaran`, `waktu_sidang`, `keterangan`) VALUES
(1, 'I', '03 s.d 15 Mei 2023', 'Mulai 22 Mei 2023', '(mhs TA-2 non UAS)'),
(2, 'II', '29 Mei s.d 07 Juni 2023', 'Mulai 12 Juni 2023', '(mhs TA-2 non UAS)'),
(3, 'III', '19 s.d 28 Juni 2023', 'Mulai 03 Juli 2023', '(mhs TA-2 non UAS)'),
(4, 'IV', '18 s.d 30 Juli 2023', 'Mulai 01 Agustus 2023', '(mhs TA-2 & MK UAS)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `koordinator` varchar(128) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul`, `isi_pengumuman`, `koordinator`, `tanggal`) VALUES
(1, 'Info Pemilihan Dosen Pembimbing TA TI S-1 Ganjil 2022/2023', 'Diberitahukan kepada mahasiswa program studi TI S-1 yang mengambil Tugas Akhir yang belum memiliki Dosen Pembimbing TA dapat mengajukan permohonan Dosen Pembimbing melalui Sistem Pengajuan Dosen Pembimbing (SPDP) TA di alamat https://tatis1.dinus.web.id/. Silahkan buat account terlebih dahulu menggunakan email mahasiswa. Pengajuan Dosen Pembimbing TA dimulai dari hari Senin, tanggal 12 s.d hari Kamis tanggal 14 September 2022. Lampirkan bukti permohonan berupa Surat Permohonan (format pdf) sebagai bukti keseriusan mengajukan permohonan ke dosbim yang dituju dan bukti pendukung screenshot percakapan sudah menghubungi dosbim yang dituju (jika ada, jika tidak ada dapat melampirkan surat permohonan).\r\nSebelumnya kami telah melakukan rekap data terhadap surat permohonan yang dikirim melalui wa ke Koordinator 1 maupun Koordinator 2 TA sampai dengan pengiriman hari Jumat, tanggal 9 September 2022. Adapun rekap surat permohonan yang telah dikirimkan tersebut dapat dilihat melalui https://bit.ly/cekPengajuan\r\nDemikian informasi ini disampaikan, diucapkan terima kasih.', 'Defri Kurniawan, M.Kom', '2023-07-10'),
(2, 'Pengajuan Dosen Pembimbing TA/Skripsi TI S1 Semester Gasal 2021/2022', 'Diberitahukan kepada mahasiswa program studi Teknik Informatika S1 yang belum diplot/mendapatkan Dosen Pembimbing TA di siadin.\r\n\r\nHarap dapat mengajukan permohonannya melalui aplikasi web SPDP TA yang dapat diakses di alamat https://tatis1.dinus.web.id/ . Silahkan daftar melalui email mahasiswa dan unggah surat serta bukti pendukung.\r\n\r\nSurat wajib disertakan yang berisi identitas mahasiswa serta minat/topik/keinginan terhadap tugas akhir/skripsi yang akan dibuat. Sedangkan Bukti Pendukung bersifat opsional dapat diisi dengan bukti screenshot percakapan atas konsultasi yang pernah dilakukan / persetujuan dari dosen yang dituju. Surat dibuat sendiri oleh mahasiswa. Pengajuan dilakukan mulai hari Selasa tgl 7 s.d Sabtu tgl 11 September 2021.\r\n\r\nDemikian informasi ini disampaikan, atas perhatiannya diucapkan terima kasih.', 'DANANG WAHYU UTOMO, M.Kom', '2023-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dosbim`
--
ALTER TABLE `tb_dosbim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_informasi_ta1`
--
ALTER TABLE `tb_informasi_ta1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_informasi_ta2`
--
ALTER TABLE `tb_informasi_ta2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal_ta1`
--
ALTER TABLE `tb_jadwal_ta1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal_ta2`
--
ALTER TABLE `tb_jadwal_ta2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dosbim`
--
ALTER TABLE `tb_dosbim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_informasi_ta1`
--
ALTER TABLE `tb_informasi_ta1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_informasi_ta2`
--
ALTER TABLE `tb_informasi_ta2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jadwal_ta1`
--
ALTER TABLE `tb_jadwal_ta1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jadwal_ta2`
--
ALTER TABLE `tb_jadwal_ta2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
