-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2019 pada 05.06
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maipro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `proyek_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_proyek` varchar(1000) NOT NULL,
  `universitas` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `bidang` varchar(5000) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `jum_mahasiswa` int(11) NOT NULL,
  `tawaran_min` bigint(20) NOT NULL,
  `tawaran_max` bigint(20) NOT NULL,
  `opsi_tawaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`proyek_id`, `user_id`, `nama_proyek`, `universitas`, `fakultas`, `jurusan`, `deskripsi`, `bidang`, `keahlian`, `jum_mahasiswa`, `tawaran_min`, `tawaran_max`, `opsi_tawaran`) VALUES
(4, 0, 'Pembuatan Aplikasi Absensi', 'Telkom University', 'FRI', 'S1 Sistem Informasi', 'untuk keperluan belajar mengajar', 'pemograman', 'framework', 1, 3000000, 5000000, 'Yes'),
(5, 0, 'Pembuatan Aplikasi Absensi', 'Telkom University', 'FRI', 'S1 Sistem Informasi', 'untuk keperluan belajar mengajar', 'pemograman', 'framework', 1, 3000000, 5000000, 'Yes'),
(6, 0, 'Pembuatan Aplikasi Android', 'Telkom University', 'FRI', 'S1 Sistem Informasi', 'untuk keperluan belajar mengajar', 'pemograman mobile', 'android java', 2, 2000000, 3000000, 'Yes'),
(7, 0, 'Pembuatan Aplikasi Android', 'Telkom University', 'FRI', 'S1 Sistem Informasi', 'untuk keperluan belajar mengajar', 'pemograman mobile', 'android java', 2, 2000000, 3000000, 'Yes'),
(8, 0, 'Pembuatan web pengajaran', 'Telkom University', 'FRI', 'S1 Teknik Industri', 'untuk keperluan belajar mengajar', 'pemograman', 'php', 1, 2000000, 3000000, 'Yes'),
(9, 0, 'Pembuatan Aplikasi Android untuk absensi', 'Telkom University', 'FRI', 'S1 Sistem Informasi', 'untuk belajar mengajar', 'pemograman', 'framework', 6, 3000000, 5000000, 'Yes'),
(10, 7, 'Pembuatan Aplikasi Absensi', 'Telkom University', 'FRI', 'S1 Teknik Industri', 'asasas', 'asas', 'asas', 1, 100000, 3000000, 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `username`, `password`, `status`, `verification_key`, `is_email_verified`) VALUES
(3, 'retna', 'retna@gmail.com', 'retnataqiyyah', '12345', 'Mahasiswa', '', 'no'),
(4, 'safira', 'safira@gmail.com', 'fira', '45678', 'Mahasiswa', '', 'no'),
(5, 'chandra', 'chandra@gmail.com', 'chandra', '12345', 'Mahasiswa', '', 'no'),
(6, 'dhila', 'dhila@gmail.com', 'dhila', 'dualima', 'Mahasiswa', '', 'no'),
(7, 'jay', 'jay@gmail.com', 'jayy', 'dualima', 'Dosen', '', 'no'),
(8, 'retna', 'retna@gmail.com', 'retnataqiyyah', 'dualima', 'Mahasiswa', '', 'no'),
(9, 'retna', 'retnaaaaa@gmail.com', 'retna.taqiyyah', 'dualimaa', 'Mahasiswa', '', 'no'),
(15, 'kai', 'kai@gmail.com', 'kaixx', 'yyyy', 'Dosen', '', 'no'),
(16, 'andi', 'andi@gmail.com', 'andixx', 'andi123', 'Dosen', '', 'no'),
(30, 'retna taqiyyah', 'retnadiba@gmail.com', 'retna.taqiyyah', '4297f44b13955235245b2497399d7a93', 'Mahasiswa', '1f078cb2d2ff0f0cc29691ab974569d9', 'no'),
(31, 'hehehe', 'hehe@gmail.com', 'hehe', '1234', 'Mahasiswa', '', 'no'),
(32, 'siska andreswari', 'siska@gmail.com', 'siskaa', '123123', 'Dosen', '', 'no');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`proyek_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `proyek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
