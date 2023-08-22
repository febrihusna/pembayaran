-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2021 pada 05.52
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran_febri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_transaksi`
--

CREATE TABLE `det_transaksi` (
  `id` int(11) NOT NULL,
  `nis` varchar(4) NOT NULL,
  `id_bayar` int(11) NOT NULL,
  `nota` varchar(8) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `det_transaksi`
--

INSERT INTO `det_transaksi` (`id`, `nis`, `id_bayar`, `nota`, `tanggal`, `status`, `id_petugas`) VALUES
(1, '01', 1, '', '0000-00-00', 1, 0),
(2, '01', 3, '', '0000-00-00', 1, 0),
(5, '01', 1, '', '0000-00-00', 1, 0),
(6, '01', 3, '', '0000-00-00', 1, 0),
(8, '01', 1, '', '0000-00-00', 1, 0),
(11, '01', 3, '', 'd', 1, 0),
(16, '01', 1, '', '20-04-2021', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bayar`
--

CREATE TABLE `jenis_bayar` (
  `id` int(11) NOT NULL,
  `uraian` varchar(45) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_bayar`
--

INSERT INTO `jenis_bayar` (`id`, `uraian`, `nominal`) VALUES
(1, 'SPP Januari', 100000),
(3, 'Prakerin', 300000),
(4, 'Lks ', 100000),
(5, 'SPP Februari', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_transaksi`
--

CREATE TABLE `m_transaksi` (
  `nota` varchar(7) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_transaksi`
--

INSERT INTO `m_transaksi` (`nota`, `tanggal`, `status`) VALUES
('003', '2021-04-20', 1),
('004', '2021-04-20', 1),
('YAN001', '2021-04-17', 1),
('YAN002', '2021-04-17', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `username`, `password`, `nama_petugas`, `level`) VALUES
(12, 'febri', 'febri', 'Febri Husna', 1),
(13, 'admin', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `telpon`, `kelas`) VALUES
('01', 'Desi', 'Kuwon', '', ''),
('02', 'Febri Husna Pradila', 'magetan', '', ''),
('03', 'Rosita', 'madiun', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_bayar`
--
ALTER TABLE `jenis_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_transaksi`
--
ALTER TABLE `m_transaksi`
  ADD PRIMARY KEY (`nota`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `jenis_bayar`
--
ALTER TABLE `jenis_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
