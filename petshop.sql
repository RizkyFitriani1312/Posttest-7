-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 15.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id` int(11) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `beli` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL,
  `telpon` varchar(25) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `pesan` varchar(225) NOT NULL,
  `produk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `email`, `password`, `telpon`, `lokasi`, `pesan`, `produk`) VALUES
(1, 'Rizky', 'fitri@gmail.com', 'fsrtg', '08466786', 'Samarinda', 'Bolt Salmonnya 1 yaa', 'Bolt Salmon'),
(2, 'Rizky Ramadhani', 'andini@gmail.com', 'fdjxux6t65', '08466786', 'Samarinda', 'Toto Cat Litter 1 yaa', 'Toto Cat Litter'),
(3, 'Rizky Fitriani', 'fitrianirizky@gmail.com', 'jzgjzhfgdr', '0822854689', 'Samarinda', 'Cat Choize Kitten Tuna 3 yaa', 'Cat Choize Kitten Tuna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(25) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `harga_produk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`) VALUES
(1, 'Bolt Salmon', '23000'),
(2, 'Cat Choize Kitten Tuna', '26000'),
(3, 'Cat Choize Salmon', '25000'),
(4, 'Catnip Cat', '25000'),
(5, 'Toto Cat Litter', '56000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
