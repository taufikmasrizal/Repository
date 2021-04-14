-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Apr 2021 pada 08.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repasitory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(90) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `nama`) VALUES
('admin', '$2y$10$lXdcR9uT4bg3P7ZuoBUNE.NUS6wkOOsIUMMWOlLtULSE6s2hZfhaG', 'admin'),
('andi', '$2y$10$TY10O/.Ny/eDoNSsgH7GtOGWeIiKFXVld90Z5qHPkGmrPOsAd5A3y', 'andi'),
('taufik', '$2y$10$iWqnuGQdS5Z/dw7q.oa.1ud3KnZDxIlbRRmmu13HDMLwczISmqlHy', 'taufik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulisan`
--

CREATE TABLE `penulisan` (
  `id_penulisan` int(11) NOT NULL,
  `judul_penulisan` varchar(255) NOT NULL,
  `nama_pembuat` varchar(30) NOT NULL,
  `tahun_penulisan` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `file_penulisan` varchar(70) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penulisan`
--

INSERT INTO `penulisan` (`id_penulisan`, `judul_penulisan`, `nama_pembuat`, `tahun_penulisan`, `jurusan`, `file_penulisan`) VALUES
(10001, 'test', 'test', '2021-04-14', 'test', ''),
(12131, 'ssd', 'sdsd', '2021-04-13', 'dsds', ''),
(333333, 'dsfdsf', 'fsfsfd', '2021-04-21', 'fdsfsd', ''),
(1111111, 'dds', 'fdfd', '2021-04-13', 'fdfdf', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `penulisan`
--
ALTER TABLE `penulisan`
  ADD PRIMARY KEY (`id_penulisan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
