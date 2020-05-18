-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 18.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040115`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `Foto` varchar(50) NOT NULL,
  `Nama Barang` varchar(50) NOT NULL,
  `Merk barang` varchar(50) NOT NULL,
  `Official Store Online` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `Foto`, `Nama Barang`, `Merk barang`, `Official Store Online`, `Harga`) VALUES
(1, '1.jpg', 'Topi', 'Converse', 'convers.id', 'Rp.150.000'),
(2, '2.png', 'Jaket', 'H&M', 'id.hm.com', 'Rp.300.000'),
(3, '3.jpg', 'Sepatu', 'Ventela', 'ventela.com', 'Rp.250.000'),
(4, '4.jpg', 'Celana', 'zara', 'zara.com', 'Rp.500.000'),
(5, '5.jpg', 'Baju', 'Uniqlo', 'uniqlo.com', 'Rp.150.000'),
(6, '6.jpg', 'Jam Tangan', 'Daniel Welington', 'danielwellington.com', 'Rp.1.500.000'),
(7, '7.jpg', 'Gelang', 'Guten Inc', 'guteninc.com', 'Rp.150.000'),
(8, '8.jpg', 'Kalung', 'Bape', 'Bape.com', 'Rp.100.000.000'),
(9, '9.jpeg', 'Kaos Kaki', 'Converse', 'converse.id', 'Rp.100.000'),
(10, '10.jpg', 'T-shirt', 'Moutley', '3second.co.id', 'Rp.250.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, '', '$2y$10$aB5ZLfqDMzIxVNLlBlCC1.xTnW0/eqegYQ3QWVtnsletA4Okh0Fjq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
