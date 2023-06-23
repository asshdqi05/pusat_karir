-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 12:59 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusat_karir`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `nobp` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `foto_alumni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_lowongan`
--

CREATE TABLE `daftar_lowongan` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pelatihan`
--

CREATE TABLE `daftar_pelatihan` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_pelatihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Sistem Komputer'),
(2, 'Sistem Informasi'),
(3, 'Manajemen Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_lowongan`
--

CREATE TABLE `kriteria_lowongan` (
  `id` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE `level_user` (
  `id_level` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Perusahaan'),
(3, 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `nama_lowongan` varchar(255) NOT NULL,
  `area_penempatan` varchar(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `deskripsi_lowongan` varchar(255) NOT NULL,
  `keterangan_lowongan` varchar(255) NOT NULL,
  `batas_lowongan` date NOT NULL,
  `gambar_lowongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_pelatihan` varchar(255) NOT NULL,
  `tanggal_pelatihan` date NOT NULL,
  `jam_pelatihan` varchar(10) NOT NULL,
  `lokasi_pelatihan` varchar(255) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `gambar_pelatihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email_perusahaan` varchar(255) NOT NULL,
  `website_perusahaan` varchar(255) NOT NULL,
  `deskripsi_perusahaan` varchar(255) NOT NULL,
  `logo_perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `syarat_lowongan`
--

CREATE TABLE `syarat_lowongan` (
  `id` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `syarat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_kriteria`
--

CREATE TABLE `temp_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_syarat`
--

CREATE TABLE `temp_syarat` (
  `id` int(11) NOT NULL,
  `syarat` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f1`
--

CREATE TABLE `ts_f1` (
  `id_f1` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `no_mahasiswa` varchar(15) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `kode_prodi` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f2`
--

CREATE TABLE `ts_f2` (
  `id_f2` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `perkuliahan` varchar(255) DEFAULT NULL,
  `demonstrasi` varchar(255) DEFAULT NULL,
  `partisipasi_dalam_proyek_riset` varchar(255) DEFAULT NULL,
  `magang` varchar(255) DEFAULT NULL,
  `praktikum` varchar(255) DEFAULT NULL,
  `kerja_lapangan` varchar(255) DEFAULT NULL,
  `diskusi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f3`
--

CREATE TABLE `ts_f3` (
  `id_f3` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `posisi` varchar(255) NOT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f4`
--

CREATE TABLE `ts_f4` (
  `id_f4` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f5`
--

CREATE TABLE `ts_f5` (
  `id_f5` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `posisi` varchar(255) NOT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f6`
--

CREATE TABLE `ts_f6` (
  `id_f6` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f7`
--

CREATE TABLE `ts_f7` (
  `id_f7` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f7a`
--

CREATE TABLE `ts_f7a` (
  `id_f7a` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f8`
--

CREATE TABLE `ts_f8` (
  `id_f8` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f9`
--

CREATE TABLE `ts_f9` (
  `id_f9` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f10`
--

CREATE TABLE `ts_f10` (
  `id_f10` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f11`
--

CREATE TABLE `ts_f11` (
  `id_f11` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f13`
--

CREATE TABLE `ts_f13` (
  `id_f13` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `pekerjaan_utama` varchar(255) DEFAULT NULL,
  `lembur_dan_tip` varchar(255) DEFAULT NULL,
  `pekerjaan_lainnya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f14`
--

CREATE TABLE `ts_f14` (
  `id_f14` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f15`
--

CREATE TABLE `ts_f15` (
  `id_f15` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f16`
--

CREATE TABLE `ts_f16` (
  `id_f16` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f17_1`
--

CREATE TABLE `ts_f17_1` (
  `id_f17_1` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `j1` varchar(255) DEFAULT NULL,
  `j2` varchar(255) DEFAULT NULL,
  `j3` varchar(255) DEFAULT NULL,
  `j4` varchar(255) DEFAULT NULL,
  `j5` varchar(255) DEFAULT NULL,
  `j6` varchar(255) DEFAULT NULL,
  `j7` varchar(255) DEFAULT NULL,
  `j8` varchar(255) DEFAULT NULL,
  `j9` varchar(255) DEFAULT NULL,
  `j10` varchar(255) DEFAULT NULL,
  `j11` varchar(255) DEFAULT NULL,
  `j12` varchar(255) DEFAULT NULL,
  `j13` varchar(255) DEFAULT NULL,
  `j14` varchar(255) DEFAULT NULL,
  `j15` varchar(255) DEFAULT NULL,
  `j16` varchar(255) DEFAULT NULL,
  `j17` varchar(255) DEFAULT NULL,
  `j18` varchar(255) DEFAULT NULL,
  `j19` varchar(255) DEFAULT NULL,
  `j20` varchar(255) DEFAULT NULL,
  `j21` varchar(255) DEFAULT NULL,
  `j22` varchar(255) DEFAULT NULL,
  `j23` varchar(255) DEFAULT NULL,
  `j24` varchar(255) DEFAULT NULL,
  `j25` varchar(255) DEFAULT NULL,
  `j26` varchar(255) DEFAULT NULL,
  `j27` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ts_f17_2`
--

CREATE TABLE `ts_f17_2` (
  `id_f17_2` int(11) NOT NULL,
  `id_alumni` int(11) DEFAULT NULL,
  `j1` varchar(255) DEFAULT NULL,
  `j2` varchar(255) DEFAULT NULL,
  `j3` varchar(255) DEFAULT NULL,
  `j4` varchar(255) DEFAULT NULL,
  `j5` varchar(255) DEFAULT NULL,
  `j6` varchar(255) DEFAULT NULL,
  `j7` varchar(255) DEFAULT NULL,
  `j8` varchar(255) DEFAULT NULL,
  `j9` varchar(255) DEFAULT NULL,
  `j10` varchar(255) DEFAULT NULL,
  `j11` varchar(255) DEFAULT NULL,
  `j12` varchar(255) DEFAULT NULL,
  `j13` varchar(255) DEFAULT NULL,
  `j14` varchar(255) DEFAULT NULL,
  `j15` varchar(255) DEFAULT NULL,
  `j16` varchar(255) DEFAULT NULL,
  `j17` varchar(255) DEFAULT NULL,
  `j18` varchar(255) DEFAULT NULL,
  `j19` varchar(255) DEFAULT NULL,
  `j20` varchar(255) DEFAULT NULL,
  `j21` varchar(255) DEFAULT NULL,
  `j22` varchar(255) DEFAULT NULL,
  `j23` varchar(255) DEFAULT NULL,
  `j24` varchar(255) DEFAULT NULL,
  `j25` varchar(255) DEFAULT NULL,
  `j26` varchar(255) DEFAULT NULL,
  `j27` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_profil_user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_profil_user`, `level`, `status`) VALUES
(5, 'admin', '$2y$10$6zkJAh8.eRxR1rd53qfvFONgaarxa4uwA9uzdpYh14b1gbW4sqdTK', 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `daftar_lowongan`
--
ALTER TABLE `daftar_lowongan`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `daftar_pelatihan`
--
ALTER TABLE `daftar_pelatihan`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kriteria_lowongan`
--
ALTER TABLE `kriteria_lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `syarat_lowongan`
--
ALTER TABLE `syarat_lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_kriteria`
--
ALTER TABLE `temp_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_syarat`
--
ALTER TABLE `temp_syarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_f1`
--
ALTER TABLE `ts_f1`
  ADD PRIMARY KEY (`id_f1`);

--
-- Indexes for table `ts_f2`
--
ALTER TABLE `ts_f2`
  ADD PRIMARY KEY (`id_f2`);

--
-- Indexes for table `ts_f3`
--
ALTER TABLE `ts_f3`
  ADD PRIMARY KEY (`id_f3`);

--
-- Indexes for table `ts_f4`
--
ALTER TABLE `ts_f4`
  ADD PRIMARY KEY (`id_f4`);

--
-- Indexes for table `ts_f5`
--
ALTER TABLE `ts_f5`
  ADD PRIMARY KEY (`id_f5`);

--
-- Indexes for table `ts_f6`
--
ALTER TABLE `ts_f6`
  ADD PRIMARY KEY (`id_f6`);

--
-- Indexes for table `ts_f7`
--
ALTER TABLE `ts_f7`
  ADD PRIMARY KEY (`id_f7`);

--
-- Indexes for table `ts_f7a`
--
ALTER TABLE `ts_f7a`
  ADD PRIMARY KEY (`id_f7a`);

--
-- Indexes for table `ts_f8`
--
ALTER TABLE `ts_f8`
  ADD PRIMARY KEY (`id_f8`);

--
-- Indexes for table `ts_f9`
--
ALTER TABLE `ts_f9`
  ADD PRIMARY KEY (`id_f9`);

--
-- Indexes for table `ts_f10`
--
ALTER TABLE `ts_f10`
  ADD PRIMARY KEY (`id_f10`);

--
-- Indexes for table `ts_f11`
--
ALTER TABLE `ts_f11`
  ADD PRIMARY KEY (`id_f11`);

--
-- Indexes for table `ts_f13`
--
ALTER TABLE `ts_f13`
  ADD PRIMARY KEY (`id_f13`);

--
-- Indexes for table `ts_f14`
--
ALTER TABLE `ts_f14`
  ADD PRIMARY KEY (`id_f14`);

--
-- Indexes for table `ts_f15`
--
ALTER TABLE `ts_f15`
  ADD PRIMARY KEY (`id_f15`);

--
-- Indexes for table `ts_f16`
--
ALTER TABLE `ts_f16`
  ADD PRIMARY KEY (`id_f16`);

--
-- Indexes for table `ts_f17_1`
--
ALTER TABLE `ts_f17_1`
  ADD PRIMARY KEY (`id_f17_1`);

--
-- Indexes for table `ts_f17_2`
--
ALTER TABLE `ts_f17_2`
  ADD PRIMARY KEY (`id_f17_2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_lowongan`
--
ALTER TABLE `daftar_lowongan`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar_pelatihan`
--
ALTER TABLE `daftar_pelatihan`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria_lowongan`
--
ALTER TABLE `kriteria_lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `syarat_lowongan`
--
ALTER TABLE `syarat_lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `temp_kriteria`
--
ALTER TABLE `temp_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temp_syarat`
--
ALTER TABLE `temp_syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ts_f1`
--
ALTER TABLE `ts_f1`
  MODIFY `id_f1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f2`
--
ALTER TABLE `ts_f2`
  MODIFY `id_f2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f3`
--
ALTER TABLE `ts_f3`
  MODIFY `id_f3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f4`
--
ALTER TABLE `ts_f4`
  MODIFY `id_f4` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f5`
--
ALTER TABLE `ts_f5`
  MODIFY `id_f5` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f6`
--
ALTER TABLE `ts_f6`
  MODIFY `id_f6` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f7`
--
ALTER TABLE `ts_f7`
  MODIFY `id_f7` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f7a`
--
ALTER TABLE `ts_f7a`
  MODIFY `id_f7a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f8`
--
ALTER TABLE `ts_f8`
  MODIFY `id_f8` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f9`
--
ALTER TABLE `ts_f9`
  MODIFY `id_f9` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f10`
--
ALTER TABLE `ts_f10`
  MODIFY `id_f10` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f11`
--
ALTER TABLE `ts_f11`
  MODIFY `id_f11` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f13`
--
ALTER TABLE `ts_f13`
  MODIFY `id_f13` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f14`
--
ALTER TABLE `ts_f14`
  MODIFY `id_f14` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f15`
--
ALTER TABLE `ts_f15`
  MODIFY `id_f15` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f16`
--
ALTER TABLE `ts_f16`
  MODIFY `id_f16` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f17_1`
--
ALTER TABLE `ts_f17_1`
  MODIFY `id_f17_1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_f17_2`
--
ALTER TABLE `ts_f17_2`
  MODIFY `id_f17_2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
