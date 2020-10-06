-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2020 pada 07.03
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kereta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bus`
--

CREATE TABLE `tbl_bus` (
  `bus_id` int(11) NOT NULL,
  `nama bus` varchar(30) NOT NULL,
  `jadwal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bus`
--

INSERT INTO `tbl_bus` (`bus_id`, `nama bus`, `jadwal_id`) VALUES
(1, 'damri', 1),
(2, 'damri', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `berangkat` date NOT NULL,
  `tiba` date NOT NULL,
  `stasiun_awal` varchar(50) NOT NULL,
  `stasiun_ajir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stasiun`
--

CREATE TABLE `tbl_stasiun` (
  `stasiun_id` int(11) NOT NULL,
  `nama_stasiun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_stasiun`
--

INSERT INTO `tbl_stasiun` (`stasiun_id`, `nama_stasiun`) VALUES
(1, 'cirebon'),
(2, 'bandung'),
(3, 'jogja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `level` varchar(20) NOT NULL,
  `created` date NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `nip`, `username`, `password`, `email`, `address`, `level`, `created`, `updated`) VALUES
(1, 1234567890, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 'jl batikan', 'admin', '2020-09-22', '2020-09-22 01:15:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bus`
--
ALTER TABLE `tbl_bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `tbl_stasiun`
--
ALTER TABLE `tbl_stasiun`
  ADD PRIMARY KEY (`stasiun_id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bus`
--
ALTER TABLE `tbl_bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_stasiun`
--
ALTER TABLE `tbl_stasiun`
  MODIFY `stasiun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
