-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 24 Agu 2017 pada 07.53
-- Versi Server: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_diagnosa-ayam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail-user`
--

CREATE TABLE `detail-user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `usia` int(5) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `gejala_awal_ya` varchar(10) DEFAULT NULL,
  `gejala_awal_tidak` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kd_gejala`, `nama_gejala`, `gejala_awal_ya`, `gejala_awal_tidak`) VALUES
(9, 'G004', 'Sulit bernafas mengap mengap', NULL, NULL),
(10, 'G005', 'Depresi', NULL, NULL),
(11, 'G006', 'Rongga hidung dan mulut berisi cairan lendir', NULL, NULL),
(12, 'G007', 'Produksi telur menurun', NULL, NULL),
(13, 'G008', 'Diare berwarna hijau', NULL, NULL),
(14, 'G009', 'Pembengkakan dibagian kepala dan leher', NULL, NULL),
(15, 'G010', 'Muka, jengger, dan piar pucat', NULL, NULL),
(16, 'G011', 'Bulu kotor dan kusam', NULL, NULL),
(17, 'G012', 'Ngorok', NULL, NULL),
(18, 'G013', 'Pertumbuhan lambat', NULL, NULL),
(19, 'G014', 'Mata selalu basah', NULL, NULL),
(20, 'G015', 'Batuk', NULL, NULL),
(21, 'G016', 'Mengantuk dan menggigil', NULL, NULL),
(22, 'G017', 'Pendarahan pada otot dan paha', NULL, NULL),
(23, 'G018', 'Bersin bersin', NULL, NULL),
(24, 'G019', 'Dehidrasi', NULL, NULL),
(25, 'G020', 'Sayap terkulai kulai', NULL, NULL),
(26, 'G021', 'Pembengkakan rongga mata dan berdarah', NULL, NULL),
(27, 'G022', 'Bengkak pada paha', NULL, NULL),
(28, 'G023', 'Nafas cepat', NULL, NULL),
(29, 'G024', 'Kelumpuhan', NULL, NULL),
(30, 'G025', 'Keluar lendir dengan bau pada hidung', NULL, NULL),
(31, 'G026', 'Menggeleng gelengkan kepalanya', NULL, NULL),
(32, 'G027', 'Terjadi pembengkakan pada mata dan muka', NULL, NULL),
(33, 'G028', 'Luka keropeng dibagian kulit', NULL, NULL),
(34, 'G029', 'Tingkat produktivitas menurun', NULL, NULL),
(35, 'G030', 'Kurus', NULL, NULL),
(36, 'G031', 'Muka bengkak', NULL, NULL),
(37, 'G032', 'Kualitas telur buruk', NULL, NULL),
(38, 'G033', 'Lesuh', NULL, NULL),
(39, 'G034', 'Bulu jarang', NULL, NULL),
(40, 'G035', 'Mengibaskan kepalanya secara kuat', NULL, NULL),
(41, 'G036', 'Kepala dijulurkan kedepan', NULL, NULL),
(43, 'G037', 'Mata buta', '_', '_'),
(44, 'G038', 'Kaki memborok', '_', '_'),
(46, 'G001', 'Diare berwarna putih', '_', '_'),
(47, 'G002', 'Mengantuk dan lemah', '_', '_'),
(48, 'G003', 'Nafsu makan berkurang', '_', '_'),
(49, 'G039', 'Tidak ada gejala', '_', '_');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_solusi`
--

CREATE TABLE `gejala_solusi` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `kd_solusi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_diagnosa`
--

CREATE TABLE `hasil_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `kd_penyakit` varchar(5) NOT NULL,
  `hasil_identifikasi` varchar(255) NOT NULL,
  `pengobatan` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `jenis_penyakit` varchar(100) NOT NULL,
  `nama_latin` varchar(255) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `kd_penyakit`, `jenis_penyakit`, `nama_latin`, `keterangan`) VALUES
(5, 'P001', 'Berak kapur', 'Pullorium disease', '-'),
(6, 'P002', 'Kolero unggas', 'Fowl cholera', '-'),
(7, 'P003', 'Tetelo', 'Newcastle disease', '-'),
(8, 'P004', 'Tipus ayam', 'Fowl typhoid', '-'),
(9, 'P005', 'Ngorok', 'Chronic respiratory disease', '-'),
(10, 'P006', 'Gumboro', 'Gumboro disease', '-'),
(11, 'P007', 'Batuk ayam menahun', 'Infectious bronchitis', '-'),
(12, 'P008', 'Paratipus', 'Paratyphoid infection', '-'),
(13, 'P009', 'Batuk darah', 'Infectious laryngotracheitis', '-'),
(15, 'P011', 'Salesma ayam', 'Infectious coryza', '-'),
(16, 'P012', 'Cacar', 'Fowl fox', '-'),
(18, 'P010', 'Mareks', 'Mareks disease', '-'),
(19, 'P013', 'Tidak ada penyakit', 'Tidak ada nama latin', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_gejala`
--

CREATE TABLE `penyakit_gejala` (
  `id` int(11) NOT NULL,
  `kd_penyakit` varchar(10) DEFAULT NULL,
  `kd_gejala` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit_gejala`
--

INSERT INTO `penyakit_gejala` (`id`, `kd_penyakit`, `kd_gejala`) VALUES
(10, 'P003', 'G007'),
(11, 'P003', 'G008'),
(12, 'P003', 'G009'),
(13, 'P003', 'G033'),
(15, 'P004', 'G010'),
(16, 'P004', 'G011'),
(17, 'P004', 'G032'),
(18, 'P007', 'G012'),
(19, 'P005', 'G013'),
(20, 'P009', 'G014'),
(21, 'P009', 'G015'),
(22, 'P005', 'G031'),
(24, 'P008', 'G016'),
(25, 'P006', 'G017'),
(28, 'P007', 'G012'),
(29, 'P009', 'G015'),
(30, 'P007', 'G018'),
(31, 'P008', 'G016'),
(32, 'P008', 'G019'),
(33, 'P010', 'G020'),
(34, 'P010', 'G037'),
(35, 'P009', 'G014'),
(36, 'P009', 'G015'),
(37, 'P009', 'G021'),
(38, 'P009', 'G035'),
(39, 'P009', 'G036'),
(40, 'P010', 'G020'),
(41, 'P010', 'G022'),
(42, 'P011', 'G023'),
(43, 'P010', 'G024'),
(44, 'P010', 'G037'),
(45, 'P011', 'G023'),
(46, 'P011', 'G025'),
(47, 'P011', 'G026'),
(48, 'P011', 'G027'),
(49, 'P012', 'G028'),
(50, 'P012', 'G029'),
(51, 'P012', 'G030'),
(63, 'P002', 'G001'),
(64, 'P001', 'G002'),
(65, 'P001', 'G003'),
(66, 'P001', 'G001'),
(67, 'P002', 'G004'),
(68, 'P002', 'G005'),
(69, 'P002', 'G006'),
(70, 'P002', 'G034'),
(71, 'P002', 'G038');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `kd_pertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `kd_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(10) DEFAULT NULL,
  `jika_ya` varchar(10) DEFAULT NULL,
  `jika_tidak` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`id`, `kd_gejala`, `jika_ya`, `jika_tidak`) VALUES
(1, 'G001', 'G002', 'G005'),
(2, 'G002', 'G003', 'G004'),
(3, 'G003', 'P001', '_'),
(4, 'G004', 'G034', 'G010'),
(5, 'G034', 'G038', '_'),
(6, 'G010', 'G011', 'G016'),
(7, 'G011', 'G032', '_'),
(8, 'G038', 'P002', '_'),
(9, 'G032', 'P004', '_'),
(10, 'G016', 'G017', '_'),
(11, 'G017', 'P006', '_'),
(12, 'G005', 'G006', 'G007'),
(13, 'G006', 'G015', '_'),
(14, 'G015', 'G018', '_'),
(15, 'G018', 'P007', '_'),
(16, 'G007', 'G008', 'G012'),
(17, 'G008', 'G009', '_'),
(18, 'G009', 'G033', '_'),
(19, 'G033', 'P003', '_'),
(20, 'G012', 'G013', 'G014'),
(21, 'G013', 'G031', '_'),
(22, 'G031', 'P005', '_'),
(23, 'G014', 'G021', '_'),
(24, 'G021', 'G035', '_'),
(25, 'G035', 'G036', '_'),
(26, 'G036', 'P009', '_'),
(27, 'G016', 'G019', 'G020'),
(28, 'G019', 'G032', '_'),
(29, 'G032', 'P008', '_'),
(30, 'G020', 'G022', 'G023'),
(31, 'G022', 'G024', '_'),
(32, 'G024', 'G038', '_'),
(33, 'G038', 'P010', '_'),
(34, 'G023', 'G025', 'G028'),
(35, 'G025', 'G026', '_'),
(36, 'G026', 'G027', '_'),
(37, 'G027', 'P011', '_'),
(38, 'G028', 'G029', 'P013'),
(39, 'G029', 'G030', '_'),
(40, 'G030', 'P012', '_');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `kd_solusi` varchar(10) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id`, `kd_solusi`, `solusi`) VALUES
(1, 'S0000001', 'dfdsfdszfdsgzfvdz'),
(2, 'S0000002', 'zfgdfgsdrfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_diagnosa`
--

CREATE TABLE `tmp_diagnosa` (
  `username` varchar(10) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `username` varchar(10) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_penyakit`
--

CREATE TABLE `tmp_penyakit` (
  `username` varchar(10) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('pakar','pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'pakar', '87b7cf2448de01f22b0c016b272f2ec0', 'pakar'),
(2, 'iqbal', 'eedae20fc3c7a6e9c5b1102098771c70', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail-user`
--
ALTER TABLE `detail-user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `gejala_awal_ya` (`gejala_awal_ya`),
  ADD KEY `gejala_awal_tidak` (`gejala_awal_tidak`);

--
-- Indexes for table `gejala_solusi`
--
ALTER TABLE `gejala_solusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `kd_solusi` (`kd_solusi`);

--
-- Indexes for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_penyakit` (`kd_penyakit`);

--
-- Indexes for table `penyakit_gejala`
--
ALTER TABLE `penyakit_gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_penyakit` (`kd_penyakit`),
  ADD KEY `kd_gejala` (`kd_gejala`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`kd_pertanyaan`),
  ADD KEY `kd_gejala` (`kd_gejala`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `jika_ya` (`jika_ya`),
  ADD KEY `jika_tidak` (`jika_tidak`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_solusi` (`kd_solusi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail-user`
--
ALTER TABLE `detail-user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `gejala_solusi`
--
ALTER TABLE `gejala_solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `penyakit_gejala`
--
ALTER TABLE `penyakit_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `kd_pertanyaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
