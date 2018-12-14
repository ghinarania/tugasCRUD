-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2018 pada 15.16
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudpegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(5) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `name`, `email`, `address`, `phone`) VALUES
(14100, 'Ghina Syukriyah Rania', 'ghinarania14@gmail.com', 'Jl. Dg Tata no. 14, Makassar', '082349801410'),
(14101, 'Dhinda Fitri Wiludjeng', 'dhindafw@gmail.com', 'Jl. Perintis Kemerdekaan no. 19, Makassar', '082399000119'),
(14102, 'Putri Angriani', 'putriangriani14@gmail.com', 'Jl. Hertasning no. 14, Makassar', '082589211014'),
(14103, 'Andi Marimar Muchtamar', 'andinoni16@gmail.com', 'Jl. Malengkeri no. 16, Makassar', '082599201016'),
(14104, 'Sitti Nur Fadillah', 'sittinurfadillah1312@gmail.com', 'Jl. Ahmad Yani no. 13, Makassar', '082578217013'),
(14105, 'Cici Purnamasari', 'cicipurnamasari14@gmail.com', 'Jl. Ratulangi no. 14, Makassar', '082219710014');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
