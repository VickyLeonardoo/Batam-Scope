-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 10:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sislap`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `no` int(11) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `lokasi` enum('Kampus','Luar Kampus','','') NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('Proses','Batal','Selesai','teruskan') DEFAULT NULL,
  `tgl_kejadian` date DEFAULT NULL,
  `tgl_pengaduan` date DEFAULT NULL,
  `unit` enum('SBAK','SBKK','SBPK','SBUM','Jur Mesin','Jur Elektro','Jur Manajemen Bisnis','Jur Informatika','UPT PP','UPT SI','UPT PERPUS','UPT PENGADAAN','UPT PM','P2M','SPI','MKU','Other') DEFAULT NULL,
  `id_user` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`no`, `nik`, `nama`, `judul`, `lokasi`, `isi`, `foto`, `status`, `tgl_kejadian`, `tgl_pengaduan`, `unit`, `id_user`) VALUES
(56, '2171', 'Vicky Leonardo ', 'Buku Rusak', 'Kampus', 'Hola Pihak perpus,Rusak ', 'LostSagaShot_210527_200037.jpg', 'Selesai', '2021-07-06', '2021-07-06', 'UPT PERPUS', '81');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `no`, `tgl_tanggapan`, `tanggapan`, `id_user`) VALUES
(11, 56, '2021-07-06', 'Baik Laporan Akan Kami Tinjau,Silahkan Tunggu ', 76),
(12, 56, '2021-07-06', 'Laporan Sudah Kami tindak lanjutin,Laporan akan kami selesaikan \r\n-Admin', 76);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` enum('Masyarakat','Admin','SBAK','SBKK','SBPK','SBUM','Jur Mesin','Jur Elektro','Jur Manajemen Bisnis','Jur Informatika','UPT PP','UPT SI','UPT PERPUS','UPT PENGADAAN','UPT PM','P2M','SPI','MKU','Other','Manajemen','Administrator') NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `email`, `username`, `password`, `no_hp`, `alamat`, `level`, `tgl_lahir`) VALUES
(62, '124124', 'administrator', 'administrator@polibatam.ac.id', 'administrator', '123', '0812312312', '', 'Administrator', '2021-07-05'),
(66, '217191', 'SBAK - 1', '', 'sbak', '123', '', 'Batu Aji', 'SBAK', '0000-00-00'),
(67, '2191101', 'SBKK - 1', '', 'sbkk', '123', '', 'Bengkong ', 'SBKK', '0000-00-00'),
(68, '21312312', 'SBPK - 1', '', 'sbpk', '123', '', 'Batu Ampar', 'SBPK', '0000-00-00'),
(69, '2187384', 'SBUM - 1', '', 'sbum', '123', '', 'Sei Panas', 'SBUM', '0000-00-00'),
(70, '1212423', 'Jur Mesin - 1', '', 'jurmesin', '123', '', 'Sei Nayon', 'Jur Mesin', '0000-00-00'),
(71, '77636', 'Jur Manaj Bisnis - 1', '', 'jurmanajemenbisnis', '123', '', 'Bengkong', 'Jur Manajemen Bisnis', '0000-00-00'),
(72, '8888888', 'Admin - 1', '', 'admin', '123', '', 'Bengkkong', 'Admin', '0000-00-00'),
(73, '9102213', 'Jur Informatika - 1', '', 'jurinformatika', '123', '', 'Sei Panas', 'Jur Informatika', '0000-00-00'),
(74, '4324234', 'UPT PP - 1', '', 'uptsi', '123', '', 'Batam Centre', 'UPT PP', '0000-00-00'),
(75, '125845', 'UPT SI - 1', '', 'uptsi', '123', '', 'Pematang', 'UPT SI', '0000-00-00'),
(76, '3523523', 'UPT PERPUS - 1 ', '', 'uptperpus', '123', '', 'Sumut', 'UPT PERPUS', '0000-00-00'),
(77, '875435', 'UPT PENGADAAN - 1 ', '', 'uptpengadaan', '123', '', 'Sadai', 'UPT PENGADAAN', '0000-00-00'),
(78, '93424324', 'UPT PM - 1', '', 'uptpm', '123', '', 'Bengkong Sadai', 'UPT PM', '0000-00-00'),
(79, '54354356', 'P2M - 1 ', '', 'p2m', '123', '', 'Cipta Permata', 'P2M', '0000-00-00'),
(80, '5345432', 'SPI - 1', '', 'spi', '123', '', 'Bengkong Sadai', 'SPI', '0000-00-00'),
(81, '2171', 'Vicky Leonardo ', 'vickyleonardo@yahoo.com', 'pikimoy', '123', '081275528991', 'Bengkong Telaga Indah', 'Masyarakat', '2001-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
