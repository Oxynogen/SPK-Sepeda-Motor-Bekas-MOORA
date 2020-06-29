-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2020 pada 15.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkmotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_motor`
--

CREATE TABLE `data_motor` (
  `id_motor` int(11) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `jarak` varchar(20) NOT NULL,
  `mesin` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `data_motor`
--

INSERT INTO `data_motor` (`id_motor`, `motor`, `harga`, `kondisi`, `tahun`, `jarak`, `mesin`, `foto`) VALUES
(1, 'Honda Beat CW', '7200000', 'Baik', '2010', '36787', '110', ''),
(2, 'Honda Vario 125', '14000000', 'Baik', '2016', '10163', '125', ''),
(3, 'Mio Rusi', '5200000', 'Sedang', '2010', '23876', '110', ''),
(4, 'Beat Eco', '13300000', 'Baik', '2016', '13986', '110', ''),
(5, 'Mio Soul GT', '7600000', 'Sedang', '2014', '19289', '110', ''),
(6, 'Blade', '9000000', 'Sedang', '2014', '500000', '150', 'tabel-bobot.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fuzzytiapkriteria`
--

CREATE TABLE `fuzzytiapkriteria` (
  `id_fuzzykriteria` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fuzzytiapkriteria`
--

INSERT INTO `fuzzytiapkriteria` (`id_fuzzykriteria`, `kode`, `nilai`, `bilanganfuzzy`) VALUES
(1, 'SB1', '0', 'Sangat Buruk'),
(2, 'B1', '1', 'Buruk'),
(3, 'C', '2', 'Cukup'),
(4, 'B2', '3', 'Baik'),
(5, 'CB', '4', 'Cukup Baik'),
(6, 'SB2', '5', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriaharga`
--

CREATE TABLE `kriteriaharga` (
  `id_harga` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriaharga`
--

INSERT INTO `kriteriaharga` (`id_harga`, `harga`, `bilanganfuzzy`, `nilai`) VALUES
(1, '2000000 - 6000000', 'Baik', '3'),
(2, '6000001 - 10000000', 'Cukup', '2'),
(3, '10000001', 'Buruk', '1'),
(4, '10000', 'Sangat Baik', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriajarak`
--

CREATE TABLE `kriteriajarak` (
  `id_jarak` int(11) NOT NULL,
  `jarak` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriajarak`
--

INSERT INTO `kriteriajarak` (`id_jarak`, `jarak`, `bilanganfuzzy`, `nilai`) VALUES
(1, '2000 - 20000', 'Baik', '3'),
(2, '20001 - 35000', 'Cukup', '2'),
(3, '35001', 'Buruk', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriakondisi`
--

CREATE TABLE `kriteriakondisi` (
  `id_kondisi` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriakondisi`
--

INSERT INTO `kriteriakondisi` (`id_kondisi`, `kondisi`, `bilanganfuzzy`, `nilai`) VALUES
(1, 'Baik', 'Baik', '3'),
(2, 'Sedang', 'Cukup', '2'),
(3, 'Buruk', 'Buruk', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriamesin`
--

CREATE TABLE `kriteriamesin` (
  `id_mesin` int(11) NOT NULL,
  `mesin` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteriamesin`
--

INSERT INTO `kriteriamesin` (`id_mesin`, `mesin`, `bilanganfuzzy`, `nilai`) VALUES
(1, '250', 'Cukup Baik', '4'),
(2, '150', 'Baik', '3'),
(3, '125', 'Cukup', '2'),
(4, '110', 'Buruk', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriatahun`
--

CREATE TABLE `kriteriatahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriatahun`
--

INSERT INTO `kriteriatahun` (`id_tahun`, `tahun`, `bilanganfuzzy`, `nilai`) VALUES
(1, '2015 - 2019', 'Baik', '3'),
(2, '2013 - 2014', 'Cukup', '2'),
(3, '2009 - 2012', 'Buruk', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_admin`
--

CREATE TABLE `log_admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_admin`
--

INSERT INTO `log_admin` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_alternatif`
--

CREATE TABLE `moo_alternatif` (
  `id_alternatif` tinyint(3) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `mesin` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jarak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `moo_alternatif`
--

INSERT INTO `moo_alternatif` (`id_alternatif`, `id_motor`, `alternatif`, `kondisi`, `tahun`, `mesin`, `harga`, `jarak`) VALUES
(1, 1, 'Honda Beat CW', 'Baik', '2010', '110', '7200000', '36787'),
(2, 2, 'Honda Vario 125', 'Baik', '2016', '125', '14000000', '10163'),
(3, 3, 'Mio Rusi', 'Sedang', '2010', '110', '5200000', '23876'),
(4, 4, 'Beat Eco', 'Baik', '2016', '110', '13300000', '13986'),
(5, 5, 'Mio Soul GT', 'Sedang', '2014', '110', '7600000', '19289');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_kriteria`
--

CREATE TABLE `moo_kriteria` (
  `id_kriteria` tinyint(3) UNSIGNED NOT NULL,
  `kode` varchar(5) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `type` set('Benefit','Cost') NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `moo_kriteria`
--

INSERT INTO `moo_kriteria` (`id_kriteria`, `kode`, `kriteria`, `type`, `bobot`) VALUES
(1, 'K1', 'Harga', 'Cost', 25),
(2, 'K2', 'Kondisi', 'Benefit', 25),
(3, 'K3', 'Tahun', 'Benefit', 20),
(4, 'K4', 'Jarak', 'Cost', 15),
(5, 'K5', 'Mesin', 'Benefit', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_nilai`
--

CREATE TABLE `moo_nilai` (
  `id_nilai` int(11) UNSIGNED NOT NULL,
  `id_alternatif` tinyint(3) UNSIGNED DEFAULT NULL,
  `id_kriteria` tinyint(3) UNSIGNED DEFAULT NULL,
  `nilai` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `moo_nilai`
--

INSERT INTO `moo_nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(1, 1, 1, 3),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 2),
(5, 1, 5, 1),
(6, 2, 1, 3),
(7, 2, 2, 3),
(8, 2, 3, 2),
(9, 2, 4, 1),
(10, 2, 5, 3),
(11, 3, 1, 2),
(12, 3, 2, 1),
(13, 3, 3, 1),
(14, 3, 4, 3),
(15, 3, 5, 2),
(16, 4, 1, 3),
(17, 4, 2, 3),
(18, 4, 3, 1),
(19, 4, 4, 1),
(20, 4, 5, 3),
(21, 5, 1, 2),
(22, 5, 2, 2),
(23, 5, 3, 1),
(24, 5, 4, 2),
(25, 5, 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_motor`
--
ALTER TABLE `data_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `fuzzytiapkriteria`
--
ALTER TABLE `fuzzytiapkriteria`
  ADD PRIMARY KEY (`id_fuzzykriteria`);

--
-- Indeks untuk tabel `kriteriaharga`
--
ALTER TABLE `kriteriaharga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indeks untuk tabel `kriteriajarak`
--
ALTER TABLE `kriteriajarak`
  ADD PRIMARY KEY (`id_jarak`);

--
-- Indeks untuk tabel `kriteriakondisi`
--
ALTER TABLE `kriteriakondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `kriteriamesin`
--
ALTER TABLE `kriteriamesin`
  ADD PRIMARY KEY (`id_mesin`);

--
-- Indeks untuk tabel `kriteriatahun`
--
ALTER TABLE `kriteriatahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `id_motor` (`id_motor`) USING BTREE;

--
-- Indeks untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `moo_nilai`
--
ALTER TABLE `moo_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fuzzytiapkriteria`
--
ALTER TABLE `fuzzytiapkriteria`
  MODIFY `id_fuzzykriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteriaharga`
--
ALTER TABLE `kriteriaharga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriajarak`
--
ALTER TABLE `kriteriajarak`
  MODIFY `id_jarak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kriteriakondisi`
--
ALTER TABLE `kriteriakondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriatahun`
--
ALTER TABLE `kriteriatahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  MODIFY `id_kriteria` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `moo_nilai`
--
ALTER TABLE `moo_nilai`
  MODIFY `id_nilai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD CONSTRAINT `moo_alternatif_ibfk_1` FOREIGN KEY (`id_motor`) REFERENCES `data_motor` (`id_motor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
