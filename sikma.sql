-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2018 pada 03.39
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikma`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Login` (IN `Nim1` VARCHAR(15), IN `PASSWORD` VARCHAR(35))  BEGIN
    SELECT
        *
    FROM
        pendaftar u
    WHERE
        (u.Nim = Nim1) AND (u.password=PASSWORD) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LOGINADMIN` (IN `usernameA` VARCHAR(15), IN `pass` VARCHAR(15))  NO SQL
BEGIN
    SELECT
        *
    FROM
        admin u
    WHERE
        (u.Username = usernameA) AND (u.password=pass) ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(25) NOT NULL,
  `Password` int(25) NOT NULL,
  `kontak` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `kontak`) VALUES
('adit', 12345, 89777999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_pendaftar`
--

CREATE TABLE `form_pendaftar` (
  `id_form` int(15) NOT NULL,
  `pilihan_devisi` varchar(25) NOT NULL,
  `alasan_memilih_divis` varchar(500) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `id_kegiatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form_pendaftar`
--

INSERT INTO `form_pendaftar` (`id_form`, `pilihan_devisi`, `alasan_memilih_divis`, `nim`, `id_kegiatan`) VALUES
(7, 'Humas', 'Suka aja', '165150201110900', 'kegiatan2'),
(8, 'Acara', 'Ingin tambah pengalaman', '165150201110900', 'kegiatan1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` varchar(25) NOT NULL,
  `nama_lso` varchar(50) NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `tgl_mulai_daftar` date NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `devisi` int(25) NOT NULL,
  `Username_admin` varchar(15) NOT NULL,
  `Nama_Kegiatan` varchar(50) NOT NULL,
  `namaFile` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_lso`, `tgl_berakhir`, `tgl_mulai_daftar`, `deskripsi`, `devisi`, `Username_admin`, `Nama_Kegiatan`, `namaFile`) VALUES
('kegiatan1', 'BEM FILKOM', '2018-05-30', '2018-05-03', 'Pengenalan Kehidupan Kampus Fakultas Ilmu Komputer', 8, 'adit', 'STARUP FILKOM', ''),
('kegiatan2', 'KRISMA', '2018-05-18', '2018-05-17', 'Seminar PKM untuk membahas apa itu PKM dan menuju PKM Dikti', 5, 'adit', 'Seminar PKM', '8.jpg'),
('kegiatan3', 'BIOS', '2018-06-05', '2018-06-01', 'Sebuah perlombaan cabang olahraga pada Fakultas Ilmu Komputer', 7, 'adit', 'Olimpiade FILKOM', '7.jpg'),
('ututf', 'dcsc', '0000-00-00', '2018-05-29', 'dcsdcdsccd', 0, 'adit', 'dcsd', 'MapingERD.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `Nama` varchar(50) NOT NULL,
  `Nim` varchar(15) NOT NULL,
  `prodi` varchar(25) DEFAULT NULL,
  `ttl` varchar(25) DEFAULT NULL,
  `NoHp` varchar(12) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Password` varchar(20) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`Nama`, `Nim`, `prodi`, `ttl`, `NoHp`, `Alamat`, `email`, `Password`, `type`) VALUES
('Abror', '165150201110900', 'teknik informatika', '09-08-1997', '085111222555', 'kerto', 'abror123@gmail.com', 'abror1234', 0),
('juni kartika', '165150201111991', 'teknik_informatika', '02-06-1999', '085123455666', 'sumbersari gang4', 'junikartika@gmail.com', 'juni1234', 0),
('novi', '165150208811229', 'teknik informatika', '04-11-1997', '085707999090', 'sembersari dalam', 'novi456@gmail.com', 'novi123', 0),
('admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `form_pendaftar`
--
ALTER TABLE `form_pendaftar`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `Username_admin` (`Username_admin`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`Nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_pendaftar`
--
ALTER TABLE `form_pendaftar`
  MODIFY `id_form` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `form_pendaftar`
--
ALTER TABLE `form_pendaftar`
  ADD CONSTRAINT `form_pendaftar_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `pendaftar` (`Nim`),
  ADD CONSTRAINT `form_pendaftar_ibfk_2` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
