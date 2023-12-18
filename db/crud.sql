-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jun 2022 pada 16.07
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE peserta (
  id_peserta int(11) NOT NULL,
  nama varchar(50) NOT NULL,
  sekolah varchar(50) NOT NULL,
  jurusan varchar(50) NOT NULL,
  no_hp char(13) NOT NULL,
  alamat varchar(50) NOT NULL
);

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO peserta (id_peserta, nama, sekolah, jurusan, no_hp, alamat) VALUES
(1, 'John Doe', 'SMA 1 Jakarta', 'IPA', '081234567890', 'Jl. Merdeka No. 123'),
(2, 'Jane Smith', 'SMA 2 Surabaya', 'IPS', '085678912345', 'Jl. Jendral Sudirman No. 45'),
(3, 'Michael Johnson', 'SMK 3 Bandung', 'Teknik Mesin', '081112223344', 'Jl. Pahlawan No. 67'),
(4, 'Amanda Lee', 'SMK 4 Medan', 'Teknik Elektro', '082334455667', 'Jl. Kebon Sirih No. 89'),
(5, 'David Wang', 'SMA 5 Semarang', 'Bahasa', '083556677889', 'Jl. Gajah Mada No. 101'),
(6, 'Sophia Kim', 'SMA 6 Makassar', 'Sastra', '081234567890', 'Jl. Agus Salim No. 111'),
(7, 'Daniel Chen', 'SMK 7 Denpasar', 'Teknik Informatika', '085678912345', 'Jl. Diponegoro No. 121'),
(8, 'Olivia Tan', 'SMK 8 Palembang', 'Kimia', '081112223344', 'Jl. Mangkubumi No. 131'),
(9, 'Ethan Nguyen', 'SMA 9 Bandar Lampung', 'Matematika', '082334455667', 'Jl. Sudirman No. 143'),
(10, 'Isabella Wong', 'SMA 10 Pontianak', 'Fisika', '083556677889', 'Jl. Thamrin No. 155');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE peserta
  ADD PRIMARY KEY (id_peserta);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table peserta
--
ALTER TABLE peserta
  MODIFY id_peserta int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
