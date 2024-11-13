-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2024 pada 15.39
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_najwa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_najwa_stok`
--

CREATE TABLE `tb_najwa_stok` (
  `id_barang` int(12) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(12) NOT NULL,
  `harga_beli` int(12) NOT NULL,
  `harga_jual` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_najwa_stok`
--

INSERT INTO `tb_najwa_stok` (`id_barang`, `nama_barang`, `stok`, `harga_beli`, `harga_jual`) VALUES
(1, 'penggaris', 5, 3000, 3500),
(2, 'pensil', 10, 2000, 2500),
(4, 'buku', 25, 2500, 3000),
(5, 'bolpoin', 12, 2000, 2500),
(6, 'penghapus', 25, 1000, 1500),
(7, 'Tempat Pensil', 15, 11500, 15000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_najwa_stok`
--
ALTER TABLE `tb_najwa_stok`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_najwa_stok`
--
ALTER TABLE `tb_najwa_stok`
  MODIFY `id_barang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
