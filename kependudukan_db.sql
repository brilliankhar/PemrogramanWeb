-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 03.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kependudukan_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(3) NOT NULL,
  `nama_kecamatan` int(3) NOT NULL,
  `nama_desa` varchar(30) NOT NULL,
  `kepala_desa` varchar(30) NOT NULL,
  `tahun_berdiri` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_kecamatan`, `nama_desa`, `kepala_desa`, `tahun_berdiri`) VALUES
(1, 0, '', '', 0),
(2, 3, 'polowijo', 'suratman', 1980),
(3, 1, 'sukajadi', 'sukmanto', 1990),
(4, 4, 'sukajadi', 'sukmanto', 1990);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` int(3) NOT NULL,
  `nama_kabupaten` varchar(30) NOT NULL,
  `ibukota_kabupaten` varchar(30) NOT NULL,
  `luas_wilayah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `nama_kabupaten`, `ibukota_kabupaten`, `luas_wilayah`) VALUES
(1, 'Ponorogo', 'Kab. Ponorogo', 5000),
(2, 'Magetan', 'Kab.magetan', 5000),
(4, 'Indragiri hilir', 'Tembilahan', 7000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(3) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL,
  `jumlah_desa` int(3) NOT NULL,
  `nama_kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kecamatan`, `jumlah_desa`, `nama_kabupaten`) VALUES
(1, 'Tempuling', 7, '1'),
(2, 'Tempuling', 7, '2'),
(3, 'Balong', 4, '1'),
(4, 'Tembilahan Kecamatan', 10, '4'),
(5, 'Tembilahan Kecamatan', 10, '4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kab` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
