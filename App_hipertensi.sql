-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2020 pada 02.33
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_hipertensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kategori_dm` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id`, `nama_warga`, `sistol`, `diastol`, `gula_darah`, `kategori_dm`, `kategori`, `tanggal_periksa`) VALUES
(1, 'Hajriansyah  ', 153, 67, 123, 'Sedang', 'Ringan', '2020-01-26'),
(4, 'hajroot        ', 187, 76, 120, 'Sedang', 'Tinggi', '2020-01-29'),
(6, 'hajroot    ', 150, 34, 115, 'Normal', 'Ringan', '2020-01-28'),
(8, 'Hajriansyah    ', 123, 45, 78, 'Rendah', 'Normal', '2020-01-26'),
(9, 'Hajriansyah   ', 180, 90, 50, 'Rendah', 'Tinggi', '2020-01-26'),
(11, 'Hajriansyah  ', 165, 45, 134, 'Tinggi', 'Sedang', '2020-01-27'),
(14, 'Feby  ', 154, 100, 200, 'Tinggi', 'Ringan', '2020-01-28'),
(15, 'Jufrini  ', 90, 60, 180, 'Tinggi', '', '2020-01-28'),
(18, 'Nama Warga  ', 154, 34, 134, 'Tinggi', 'Ringan', '2020-01-28'),
(19, 'hajroot     ', 164, 90, 135, 'Tinggi', 'Sedang', '2020-01-28'),
(20, 'Ny. Mulyani ', 130, 90, 130, 'Tinggi', 'PraHipertensi', '2020-01-31'),
(21, 'Ny. Rukiah ', 180, 110, 0, '', 'Rendah', '2020-01-31'),
(22, 'Ny. Rosmi ', 170, 90, 0, '', 'Rendah', '2020-01-31'),
(23, 'Ny.Pujiati ', 120, 80, 90, 'Normal', 'Normal', '2020-01-31'),
(24, 'Ny.Mariam ', 130, 80, 100, 'Normal', 'PraHipertensi', '2020-01-31'),
(25, 'kamisan  ', 170, 100, 180, 'Tinggi', 'Sedang', '2020-01-31'),
(26, 'wafda ', 144, 100, 118, 'Normal', 'Ringan', '2020-06-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_rt2`
--

CREATE TABLE `pemeriksaan_rt2` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kategori_dm` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan_rt2`
--

INSERT INTO `pemeriksaan_rt2` (`id`, `nama_warga`, `sistol`, `diastol`, `gula_darah`, `kategori_dm`, `kategori`, `tanggal_periksa`) VALUES
(1, 'Nama Warga    ', 190, 45, 115, 'Normal', 'Tinggi', '2020-01-28'),
(2, 'Ny.Suriam ', 170, 100, 98, 'Normal', 'Sedang', '2020-01-31'),
(3, 'Ny.Warohma ', 150, 94, 100, 'Normal', 'Ringan', '2020-01-31'),
(4, 'Ny.Sutiatun ', 150, 90, 98, 'Normal', 'Ringan', '2020-01-31'),
(5, 'Ny.Kasimah ', 160, 80, 134, 'Tinggi', 'Sedang', '2020-01-31'),
(6, 'Tn.Solihin ', 170, 80, 180, 'Tinggi', 'Sedang', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_rt3`
--

CREATE TABLE `pemeriksaan_rt3` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kategori_dm` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pemeriksaan_rt3`
--

INSERT INTO `pemeriksaan_rt3` (`id`, `nama_warga`, `sistol`, `diastol`, `gula_darah`, `kategori_dm`, `kategori`, `tanggal_periksa`) VALUES
(3, 'Tn.Muharor   ', 140, 80, 100, 'Normal', 'Ringan', '2020-01-31'),
(4, 'Tn.Ngasimin ', 150, 90, 120, 'Sedang', 'Ringan', '2020-01-31'),
(5, 'Tn.Kasmiran ', 160, 90, 110, 'Normal', 'Sedang', '2020-01-31'),
(6, 'Ny.Kasmoah ', 180, 100, 100, 'Normal', 'Tinggi', '2020-01-31'),
(7, 'Ny.Ngaimah ', 120, 90, 100, 'Normal', 'Normal', '2020-01-31'),
(8, 'Ny.Sumiatun ', 130, 90, 110, 'Normal', 'PraHipertensi', '2020-01-31'),
(9, 'Tn.Sriyono ', 150, 100, 100, 'Normal', 'Ringan', '2020-01-31'),
(10, 'Tn.Arifin ', 120, 80, 90, 'Normal', 'Normal', '2020-01-31'),
(11, 'Tn.Shodik ', 160, 90, 100, 'Normal', 'Sedang', '2020-01-31'),
(12, 'Tn.Sukiran ', 160, 100, 100, 'Normal', 'Sedang', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_rt4`
--

CREATE TABLE `pemeriksaan_rt4` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kategori_dm` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan_rt4`
--

INSERT INTO `pemeriksaan_rt4` (`id`, `nama_warga`, `sistol`, `diastol`, `gula_darah`, `kategori_dm`, `kategori`, `tanggal_periksa`) VALUES
(2, 'Ny.wakinah  ', 140, 90, 98, 'Normal', 'Ringan', '2020-01-31'),
(3, 'Ny.Rohmah ', 150, 90, 90, 'Normal', 'Ringan', '2020-01-31'),
(4, 'Ny.musapah ', 150, 100, 98, 'Normal', 'Ringan', '2020-01-31'),
(5, 'Ny.Pujiyo ', 140, 90, 90, 'Normal', 'Ringan', '2020-01-31'),
(6, 'Ny.Sarian ', 150, 90, 94, 'Normal', 'Ringan', '2020-01-31'),
(7, 'M farkhani  ', 120, 80, 0, 'Rendah', 'Normal', '2020-02-22'),
(8, 'M Eko s ', 130, 90, 0, 'Rendah', 'PraHipertensi', '2020-02-22'),
(9, 'Dartutik ', 110, 80, 0, 'Rendah', 'Normal', '2020-02-23'),
(10, 'Andi suprayitno ', 120, 90, 0, 'Rendah', 'Normal', '2020-02-23'),
(11, 'Mustofiah ', 110, 70, 0, 'Rendah', 'Normal', '2020-02-23'),
(12, 'M.surip ', 120, 90, 0, 'Rendah', 'Normal', '2020-02-23'),
(13, 'Siti mulyanah ', 160, 110, 0, 'Rendah', 'Sedang', '2020-02-23'),
(14, 'Musarofah ', 120, 80, 0, 'Rendah', 'Normal', '2020-02-23'),
(15, 'Kamisan ', 120, 80, 0, 'Rendah', 'Normal', '2020-02-23'),
(16, 'Siti Rohmah  ', 120, 70, 0, 'Rendah', 'Normal', '2020-02-23'),
(17, 'Zubaidi ', 130, 80, 0, 'Rendah', 'PraHipertensi', '2020-02-23'),
(18, 'Kanipah ', 130, 100, 0, 'Rendah', 'PraHipertensi', '2020-02-23'),
(19, 'Alinayah ', 140, 70, 0, 'Rendah', 'Ringan', '2020-02-23'),
(20, 'Supiyah ', 120, 90, 0, 'Rendah', 'Normal', '2020-02-23'),
(21, 'Zumrotus ', 110, 70, 0, 'Rendah', 'Normal', '2020-02-23'),
(22, 'Ngarini ', 120, 90, 0, 'Rendah', 'Normal', '2020-02-23'),
(23, 'Siti khatijah ', 130, 80, 0, 'Rendah', 'PraHipertensi', '2020-02-23'),
(24, 'Asmanah ', 160, 100, 0, 'Rendah', 'Sedang', '2020-02-23'),
(25, 'Yatemi ', 110, 70, 0, 'Rendah', 'Normal', '2020-02-23'),
(26, 'Jumini ', 140, 90, 0, 'Rendah', 'Ringan', '2020-02-23'),
(27, 'Wardi ', 110, 70, 0, 'Rendah', 'Normal', '2020-02-23'),
(28, 'Kusni ', 160, 100, 0, 'Rendah', 'Sedang', '2020-02-23'),
(29, 'Suratmi ', 120, 80, 0, 'Rendah', 'Normal', '2020-02-23'),
(30, 'Tadho ', 110, 90, 0, 'Rendah', 'Normal', '2020-02-23'),
(31, 'Sariyan ', 110, 80, 0, 'Rendah', 'Normal', '2020-02-23'),
(32, 'Mbahe heri ', 130, 100, 0, 'Rendah', 'PraHipertensi', '2020-02-23'),
(33, 'Fauzan ', 110, 80, 0, 'Rendah', 'Normal', '2020-02-23'),
(34, 'Faiz ', 110, 90, 0, 'Rendah', 'Normal', '2020-02-23'),
(35, 'Masudah ', 110, 70, 0, 'Rendah', 'Normal', '2020-02-23'),
(36, 'Fatkhul ', 130, 100, 0, 'Rendah', 'PraHipertensi', '2020-02-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_rt5`
--

CREATE TABLE `pemeriksaan_rt5` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kategori_dm` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan_rt5`
--

INSERT INTO `pemeriksaan_rt5` (`id`, `nama_warga`, `sistol`, `diastol`, `gula_darah`, `kategori_dm`, `kategori`, `tanggal_periksa`) VALUES
(1, 'Ny. Suparmi ', 160, 90, 98, 'Normal', 'Sedang', '2020-01-31'),
(2, 'Ny.Maryati ', 160, 100, 90, 'Normal', 'Sedang', '2020-01-31'),
(4, 'Ny.Suminah  ', 150, 100, 100, 'Normal', 'Ringan', '2020-01-31'),
(5, 'Ny.Mariam ', 180, 100, 100, 'Normal', 'Tinggi', '2020-01-31'),
(6, 'Ny.Suyati ', 150, 90, 98, 'Normal', 'Ringan', '2020-01-31'),
(7, 'Ny.juminah ', 170, 100, 98, 'Normal', 'Sedang', '2020-01-31'),
(8, 'Ny.Mukodimah ', 160, 100, 90, 'Normal', 'Sedang', '2020-01-31'),
(9, 'Mudayaah   ', 150, 90, 0, 'Rendah', 'Ringan', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_rt6`
--

CREATE TABLE `pemeriksaan_rt6` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kategori_dm` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan_rt6`
--

INSERT INTO `pemeriksaan_rt6` (`id`, `nama_warga`, `sistol`, `diastol`, `gula_darah`, `kategori_dm`, `kategori`, `tanggal_periksa`) VALUES
(1, 'Nama Warga ', 123, 45, 123, 'Sedang', 'Normal', '2020-01-31'),
(2, 'Nama Warga ', 178, 56, 165, 'Tinggi', 'Sedang', '2020-01-31'),
(3, 'Ny.Jaminah  ', 130, 80, 90, 'Normal', 'PraHipertensi', '2020-01-31'),
(4, 'Ny.Samirah', 120, 70, 104, 'Normal', 'Normal', '2020-01-31'),
(5, 'Ny.Sugiarti ', 140, 90, 90, 'Normal', 'Ringan', '2020-01-31'),
(6, 'Ny.juriah ', 170, 90, 99, 'Normal', 'Sedang', '2020-01-31'),
(7, 'Ny.Siti Juariah ', 200, 100, 100, 'Normal', 'Tinggi', '2020-01-31'),
(8, 'Ny.Ningsih ', 120, 80, 98, 'Normal', 'Normal', '2020-01-31'),
(9, 'Ny.Pujianti ', 110, 70, 98, 'Normal', '', '2020-01-31'),
(10, 'Ny.Sanimah ', 120, 80, 99, 'Normal', 'Normal', '2020-01-31'),
(11, 'Ny.Karsipah ', 150, 90, 97, 'Normal', 'Ringan', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_rw5`
--

CREATE TABLE `pemeriksaan_rw5` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `gula_darah` int(11) NOT NULL,
  `kategori_dm` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pemeriksaan_rw5`
--

INSERT INTO `pemeriksaan_rw5` (`id`, `nama_warga`, `sistol`, `diastol`, `gula_darah`, `kategori_dm`, `kategori`, `tanggal_periksa`) VALUES
(1, 'Namakamu23 ', 156, 54, 123, 'Sedang', 'Ringan', '2020-01-29'),
(2, 'Tn. Jaenuri          ', 155, 86, 118, 'Normal', 'Ringan', '2020-06-09'),
(3, 'Tn. Fajar   ', 143, 99, 114, 'Normal', 'Ringan', '2020-01-31'),
(4, 'Ny. Tuminah  ', 150, 90, 88, 'Normal', 'Ringan', '2020-01-31'),
(5, 'Tn. Saroni ', 180, 100, 130, 'Tinggi', 'Tinggi', '2020-01-31'),
(6, 'Ny. Siti muayanah       ', 110, 70, 132, 'Tinggi', 'Normal', '2020-02-08'),
(7, 'Ny. Mugiyati ', 120, 70, 150, 'Tinggi', 'Normal', '2020-01-31'),
(8, 'Ny. Zamrotun ', 130, 70, 134, 'Tinggi', 'PraHipertensi', '2020-01-31'),
(9, 'Ny.Ngasipah  ', 178, 100, 136, 'Tinggi', 'Sedang', '2020-06-09'),
(10, 'Ny.Atun ', 120, 80, 152, 'Tinggi', 'Normal', '2020-01-31'),
(11, 'Ny. Muzarobah ', 126, 73, 133, 'Tinggi', 'Normal', '2020-01-31'),
(12, 'Ny. Suminah ', 115, 75, 137, 'Tinggi', '', '2020-01-31'),
(13, 'Ny. Istianah ', 120, 80, 132, 'Tinggi', 'Normal', '2020-01-31'),
(14, 'Ny. Sri wangi ', 120, 80, 161, 'Tinggi', 'Normal', '2020-01-31'),
(15, 'Ny. Patimah ', 101, 64, 147, 'Tinggi', '', '2020-01-31'),
(16, 'Ny. Siti rohmah ', 130, 80, 448, 'Tinggi', 'PraHipertensi', '2020-01-31'),
(17, 'Ny. Sumarni ', 120, 70, 152, 'Tinggi', 'Normal', '2020-01-31'),
(18, 'Ny. Juariah ', 126, 72, 523, 'Tinggi', 'Normal', '2020-01-31'),
(19, 'Ny. Mariam', 130, 70, 162, 'Tinggi', 'PraHipertensi', '2020-01-31'),
(20, 'Ny. ponimah ', 110, 70, 139, 'Tinggi', '', '2020-01-31'),
(21, 'Ny.maryam ', 130, 70, 162, 'Tinggi', 'PraHipertensi', '2020-01-31'),
(22, 'Ny.Suparti ', 120, 80, 153, 'Tinggi', 'Normal', '2020-01-31'),
(23, 'Ny. Meifi ', 120, 80, 175, 'Tinggi', 'Normal', '2020-01-31'),
(24, 'Ny.ngatminah ', 90, 60, 102, 'Normal', '', '2020-01-31'),
(25, 'Ny.Siti Aminah ', 130, 70, 103, 'Normal', 'PraHipertensi', '2020-01-31'),
(26, 'Ny.jumani ', 140, 90, 139, 'Tinggi', 'Ringan', '2020-01-31'),
(27, 'Tn.Kasman ', 160, 90, 134, 'Tinggi', 'Sedang', '2020-01-31'),
(28, 'Tn.Domini ', 180, 110, 158, 'Tinggi', 'Tinggi', '2020-01-31'),
(29, 'Ny.Suliah ', 153, 83, 163, 'Tinggi', 'Ringan', '2020-01-31'),
(30, 'Ny.Sutijah ', 140, 86, 174, 'Tinggi', 'Ringan', '2020-01-31'),
(31, 'Ny.Munawaroh ', 150, 100, 134, 'Tinggi', 'Ringan', '2020-01-31'),
(32, 'Suparmi ', 180, 110, 100, 'Normal', 'Tinggi', '2020-02-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt1`
--

CREATE TABLE `rt1` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt1`
--

INSERT INTO `rt1` (`id`, `nama_warga`, `tanggal_periksa`) VALUES
(10, 'Ny. Mulyani', '2020-01-31'),
(11, 'Ny. Rukiah', '2020-01-31'),
(12, 'Ny. Rosmi', '2020-01-31'),
(13, 'Ny.Pujiati', '2020-01-31'),
(14, 'Ny.Mariam', '2020-01-31'),
(15, 'kamisan', '2020-01-31'),
(16, 'wafda', '2020-06-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt2`
--

CREATE TABLE `rt2` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt2`
--

INSERT INTO `rt2` (`id`, `nama_warga`, `tanggal_periksa`) VALUES
(4, 'Ny.Suriam', '2020-01-31'),
(5, 'Ny.Warohma', '2020-01-31'),
(6, 'Ny.Sutiatun', '2020-01-31'),
(7, 'Ny.Kasimah', '2020-01-31'),
(8, 'Tn.Solihin', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt3`
--

CREATE TABLE `rt3` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt3`
--

INSERT INTO `rt3` (`id`, `nama_warga`, `tanggal_periksa`) VALUES
(3, 'Tn.Muharor   ', '2020-02-01'),
(4, 'Tn.Ngasimin', '2020-01-31'),
(5, 'Tn.Kasmiran', '2020-01-31'),
(6, 'Ny.Kasmoah', '2020-01-31'),
(7, 'Ny.Ngaimah ', '2020-01-31'),
(8, 'Ny.Sumiatun', '2020-01-31'),
(9, 'Tn.Sriyono', '2020-01-31'),
(10, 'Tn.Arifin', '2020-01-31'),
(11, 'Tn.Shodik', '2020-01-31'),
(12, 'Tn.Sukiran', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt4`
--

CREATE TABLE `rt4` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rt4`
--

INSERT INTO `rt4` (`id`, `nama_warga`, `tanggal_periksa`) VALUES
(1, 'Ny.wakinah  ', '2020-02-16'),
(2, 'Ny.musapah ', '2020-02-16'),
(3, 'Ny.Pujiyo', '2020-01-31'),
(4, 'Ny.Sarian', '2020-01-31'),
(5, 'Ny.Rohmah', '2020-01-31'),
(6, 'M farkhani ', '2020-02-22'),
(7, 'M Eko s', '2020-02-22'),
(8, 'Dartutik', '2020-02-23'),
(9, 'Andi suprayitno', '2020-02-23'),
(10, 'M.surip', '2020-02-23'),
(11, 'Mustofiah', '2020-02-23'),
(12, 'Siti mulyanah', '2020-02-23'),
(13, 'Musarofah', '2020-02-23'),
(14, 'Kamisan', '2020-02-23'),
(15, 'Zubaidi', '2020-02-23'),
(16, 'Alinayah', '2020-02-23'),
(17, 'Siti Rohmah ', '2020-02-23'),
(18, 'Kanipah', '2020-02-23'),
(19, 'Supiyah', '2020-02-23'),
(20, 'Zumrotus', '2020-02-23'),
(21, 'Ngarini', '2020-02-23'),
(22, 'Siti khatijah', '2020-02-23'),
(23, 'Asmanah', '2020-02-23'),
(24, 'Yatemi', '2020-02-23'),
(25, 'Jumini', '2020-02-23'),
(26, 'Wardi', '2020-02-23'),
(27, 'Kusni', '2020-02-23'),
(28, 'Suratmi', '2020-02-23'),
(29, 'Tadho', '2020-02-23'),
(30, 'Sariyan', '2020-02-23'),
(31, 'Mbahe heri', '2020-02-23'),
(32, 'Fauzan', '2020-02-23'),
(33, 'Faiz', '2020-02-23'),
(34, 'Fatkhul', '2020-02-23'),
(35, 'Masudah', '2020-02-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt5`
--

CREATE TABLE `rt5` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rt5`
--

INSERT INTO `rt5` (`id`, `nama_warga`, `tanggal_periksa`) VALUES
(1, 'Ny.Maryati ', '2020-02-09'),
(2, 'Ny.Suminah', '2020-01-31'),
(3, 'Ny.Mukodimah', '2020-01-31'),
(4, 'Ny.juminah', '2020-01-31'),
(5, 'Ny.Suyati', '2020-01-31'),
(6, 'Ny. Suparmi', '2020-01-31'),
(7, 'Ny.Mariam', '2020-01-31'),
(8, 'Mudayaah  ', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt6`
--

CREATE TABLE `rt6` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt6`
--

INSERT INTO `rt6` (`id`, `nama_warga`, `tanggal_periksa`) VALUES
(3, 'Ny.Jaminah  ', '2020-02-01'),
(4, 'Ny.Samirah', '2020-02-01'),
(5, 'Ny.Sugiarti', '2020-01-31'),
(6, 'Ny.juriah', '2020-01-31'),
(7, 'Ny.Siti Juariah', '2020-01-31'),
(8, 'Ny.Ningsih', '2020-01-31'),
(9, 'Ny.Pujianti', '2020-01-31'),
(10, 'Ny.Jumiati', '2020-02-01'),
(11, 'Ny.Sanimah', '2020-01-31'),
(12, 'Ny.Karsipah', '2020-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw5`
--

CREATE TABLE `rw5` (
  `id` int(11) NOT NULL,
  `nama_warga` varchar(128) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rw5`
--

INSERT INTO `rw5` (`id`, `nama_warga`, `tanggal_periksa`) VALUES
(2, 'Tn. Jaenuri  ', '2020-01-31'),
(3, 'Tn. Fajar  ', '2020-01-31'),
(4, 'Ny. Tuminah ', '2020-01-31'),
(5, 'Tn. Saroni', '2020-01-31'),
(6, 'Ny. Siti muayanah', '2020-01-31'),
(7, 'Ny. Mugiyati', '2020-01-31'),
(8, 'Ny. Zamrotun', '2020-01-31'),
(9, 'Ny.Ngasipah', '2020-01-31'),
(10, 'Ny.Atun', '2020-01-31'),
(11, 'Ny. Muzarobah', '2020-01-31'),
(12, 'Ny. Suminah', '2020-01-31'),
(13, 'Ny. Istianah', '2020-01-31'),
(14, 'Ny. Sri wangi', '2020-01-31'),
(15, 'Ny. Patimah', '2020-01-31'),
(16, 'Ny. Siti rohmah', '2020-01-31'),
(17, 'Ny. Sumarni', '2020-01-31'),
(18, 'Ny. Juariah', '2020-01-31'),
(19, 'Ny. Mariam', '2020-01-31'),
(20, 'Ny. ponimah', '2020-01-31'),
(21, 'Ny.maryam', '2020-01-31'),
(22, 'Ny.Suparti', '2020-01-31'),
(23, 'Ny. Meifi', '2020-01-31'),
(24, 'Ny.ngatminah', '2020-01-31'),
(25, 'Ny.Siti Aminah', '2020-01-31'),
(26, 'Ny.jumani', '2020-01-31'),
(27, 'Tn.Kasman', '2020-01-31'),
(28, 'Tn.Domini', '2020-01-31'),
(29, 'Ny.Suliah', '2020-01-31'),
(30, 'Ny.Sutijah', '2020-01-31'),
(31, 'Ny.Munawaroh', '2020-01-31'),
(32, 'Suhartono', '2020-01-31'),
(33, 'Suparmi', '2020-02-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`) VALUES
(1, 'Aisyah', 'aisyah@gmail.com', '$2y$10$T8BTys3bkw8TmAhWAwr8aONG/2vxD7eMPAAmO46Rvo1vltFRft3Iu', 1, 1),
(2, 'RT1', 'rt1@gmail.com', '$2y$10$Z0qWXybdvN9VawlLkZpWDO9U7r3EsOlGgWJhi8iycr8EbM0ZOzI4e', 3, 1),
(6, 'RT2', 'rt2@gmail.com', '$2y$10$.tlr1KNNGNKp21WzLpBHceCT1jHK3youmk18e8J7DYNyqX0MmtGES', 4, 1),
(7, 'RT3', 'rt3@gmail.com', '$2y$10$.IDXBWiYZ6CUubMAc3WbRefnMc5QPbRNtKs4cE4/Z2OviquxcxdGi', 5, 1),
(8, 'admin', 'admin@admin.com', '$2y$10$vBN9R9TG/sHXT/DyAMsRL.RqeCiP2OvxbCo46otY4rhpNlVV6Q3wy', 1, 1),
(9, 'RT4', 'rt4@gmail.com', '$2y$10$WloOsS7MkLhGdnRy8cmS5u.8WnzcXdFZmewGd6JUGBT9krtrTfkbq', 6, 1),
(10, 'RT5', 'rt5@gmail.com', '$2y$10$ub7qSi.0bDgsaNNWnhUDI.CdeV0I7mTemtBbDFbvfDnSUJEWeGAuq', 7, 1),
(11, 'RT6', 'rt6@gmail.com', '$2y$10$thlZz/ukeuHAbWFsaW5ZHOoWdtoyfzA1TgsB.OxE2igh9qeXgZ50m', 8, 1),
(12, 'RW05', 'rw5@gmail.com', '$2y$10$C2XVNiceHYdzBW0wdlaMFOMoO/lfdV6rfkEwWY3GBc8OXdvu//4ou', 9, 1),
(13, 'RW05_1', 'rw5_1@gmail.com', '$2y$10$B0wzTn0NHkwBPDwzaPnEluPF0j4wn7.m9Sspa9ZNO5lPPUdEWZkNi', 9, 1),
(14, 'RW05_2', 'rw5_2@gmail.com', '$2y$10$SGb/CF8UoJXP1ac/.bMpAOD6XFuCpMDAUhntNxhlzTa7sNer3BVeW', 9, 1),
(15, 'admin1', 'admin1@admin.com', '$2y$10$5mPamscaJvoRrg5qNkn6.eFaK8Ijlepd.pNFh1B43ae0XA9q3nxTK', 10, 1),
(16, 'admin2', 'admin2@admin.com', '$2y$10$.htwN7UajYUeJar8ESCsN.GKe6EFUCMp6OBvef4VHPIeFF5xkVwTG', 11, 1),
(22, 'admin', 'rw6@admin.com', '$2y$10$iBEER9H.hhQQukFmrJZjme7FZuZOpq8QlVWA0f6MNc9u8j6CHCfsK', 11, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(4, 2, 3),
(5, 3, 3),
(6, 4, 4),
(7, 5, 5),
(8, 6, 6),
(9, 7, 7),
(10, 8, 8),
(11, 3, 2),
(12, 4, 2),
(13, 5, 2),
(14, 6, 2),
(15, 7, 2),
(16, 8, 2),
(17, 9, 2),
(18, 9, 9),
(21, 10, 10),
(22, 11, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Asisten'),
(3, 'rt1'),
(4, 'rt2'),
(5, 'rt3'),
(6, 'rt4'),
(7, 'rt5'),
(8, 'rt6'),
(9, 'rw5'),
(10, 'admin_rw5'),
(11, 'admin_rw6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'rt1'),
(4, 'rt2'),
(5, 'rt3'),
(6, 'rt4'),
(7, 'rt5'),
(8, 'rt6'),
(9, 'rw5'),
(10, 'admin_rw5'),
(11, 'admin_rw6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 2, 'Dashboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(5, 1, 'RW5', 'admin/rw5', 'fas fa-fw fa-users', 1),
(16, 9, 'RW5', 'user/rw5', 'fas fa-fw fa-users', 1),
(17, 1, 'RT1', 'admin/rt1', 'fas fa-fw fa-users', 1),
(18, 3, 'RT1', 'user/rt1', 'fas fa-fw fa-users', 1),
(19, 4, 'RT2', 'user/rt2', 'fas fa-fw fa-users', 1),
(20, 5, 'RT3', 'user/rt3', 'fas fa-fw fa-users', 1),
(21, 6, 'RT4', 'user/rt4', 'fas fa-fw fa-users', 1),
(22, 7, 'RT5', 'user/rt5', 'fas fa-fw fa-users', 1),
(23, 8, 'RT6', 'user/rt6', 'fas fa-fw fa-users', 1),
(24, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-user-edit', 1),
(26, 1, 'RT2', 'admin/rt2', 'fas fa-fw fa-users', 1),
(27, 1, 'RT3', 'admin/rt3', 'fas fa-fw fa-users', 1),
(28, 1, 'RT4', 'admin/rt4', 'fas fa-fw fa-users', 1),
(29, 1, 'RT5', 'admin/rt5', 'fas fa-fw fa-users', 1),
(30, 1, 'RT6', 'admin/rt6', 'fas fa-fw fa-users', 1),
(31, 1, 'Config User', 'admin/user', 'fas fa-fw fa-users-cog', 1),
(32, 1, 'Change Password', 'admin/changepassword', 'fas fa-fw fa-user-edit', 1),
(33, 2, 'Modul Hipertensi', 'user/modul_hipertensi', 'fas fa-fw fa-file-word', 1),
(34, 1, 'Modul Hipertensi', 'admin/modul_hipertensi', 'fas fa-fw fa-file-word', 1),
(35, 1, 'Modul Diabetes', 'admin/modul_diabetes', 'fas fa-fw fa-file-word', 1),
(36, 2, 'Modul Diabetes', 'user/modul_diabetes', 'fas fa-fw fa-file-word', 1),
(38, 10, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt\r\n', 1),
(39, 10, 'RW5', 'admin/rw5', 'fas fa-fw fa-users', 1),
(40, 10, 'Modul Hipertensi', 'admin/modul_hipertensi', 'fas fa-fw fa-file-word', 1),
(41, 10, 'Modul Diabetes', 'admin/modul_diabetes', 'fas fa-fw fa-file-word', 1),
(42, 10, 'Change Password', 'admin/changepassword', 'fas fa-fw fa-user-edit', 1),
(43, 10, 'Config User', 'admin/user', 'fas fa-fw fa-users-cog', 1),
(54, 11, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt\r\n', 1),
(55, 11, 'RT1', 'admin/rt1', 'fas fa-fw fa-users', 1),
(56, 11, 'RT2', 'admin/rt2', 'fas fa-fw fa-users', 1),
(57, 11, 'RT3', 'admin/rt3', 'fas fa-fw fa-users', 1),
(58, 11, 'RT4', 'admin/rt4', 'fas fa-fw fa-users', 1),
(59, 11, 'RT5', 'admin/rt5', 'fas fa-fw fa-users', 1),
(60, 11, 'RT6', 'admin/rt6', 'fas fa-fw fa-users', 1),
(61, 11, 'Modul Hipertensi', 'admin/modul_hipertensi', 'fas fa-fw fa-file-word', 1),
(62, 11, 'Modul Diabetes', 'admin/modul_diabetes', 'fas fa-fw fa-file-word', 1),
(63, 11, 'Config User', 'admin/user', 'fas fa-fw fa-users-cog', 1),
(64, 11, 'Change Password', 'admin/changepassword', 'fas fa-fw fa-user-edit', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeriksaan_rt2`
--
ALTER TABLE `pemeriksaan_rt2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeriksaan_rt3`
--
ALTER TABLE `pemeriksaan_rt3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeriksaan_rt4`
--
ALTER TABLE `pemeriksaan_rt4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeriksaan_rt5`
--
ALTER TABLE `pemeriksaan_rt5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeriksaan_rt6`
--
ALTER TABLE `pemeriksaan_rt6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeriksaan_rw5`
--
ALTER TABLE `pemeriksaan_rw5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt1`
--
ALTER TABLE `rt1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt2`
--
ALTER TABLE `rt2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt3`
--
ALTER TABLE `rt3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt4`
--
ALTER TABLE `rt4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt5`
--
ALTER TABLE `rt5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt6`
--
ALTER TABLE `rt6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rw5`
--
ALTER TABLE `rw5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_rt2`
--
ALTER TABLE `pemeriksaan_rt2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_rt3`
--
ALTER TABLE `pemeriksaan_rt3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_rt4`
--
ALTER TABLE `pemeriksaan_rt4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_rt5`
--
ALTER TABLE `pemeriksaan_rt5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_rt6`
--
ALTER TABLE `pemeriksaan_rt6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_rw5`
--
ALTER TABLE `pemeriksaan_rw5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `rt1`
--
ALTER TABLE `rt1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `rt2`
--
ALTER TABLE `rt2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rt3`
--
ALTER TABLE `rt3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rt4`
--
ALTER TABLE `rt4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `rt5`
--
ALTER TABLE `rt5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rt6`
--
ALTER TABLE `rt6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rw5`
--
ALTER TABLE `rw5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
