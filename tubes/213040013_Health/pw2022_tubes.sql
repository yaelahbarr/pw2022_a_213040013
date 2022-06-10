-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 01:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_medis`
--

CREATE TABLE `alat_medis` (
  `no_alat` int(11) NOT NULL,
  `nama_alat` varchar(20) NOT NULL,
  `jumlah_alat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_medis`
--

INSERT INTO `alat_medis` (`no_alat`, `nama_alat`, `jumlah_alat`) VALUES
(1, 'Kapas', 100),
(2, 'Suntik', 100);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_vaksin`
--

CREATE TABLE `jenis_vaksin` (
  `no_batch` int(11) NOT NULL,
  `nama_vaksin` varchar(50) NOT NULL,
  `jumlah_vaksin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_vaksin`
--

INSERT INTO `jenis_vaksin` (`no_batch`, `nama_vaksin`, `jumlah_vaksin`) VALUES
(1, 'T-Virus', 50),
(2, 'Z-Virus', 50);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tgl_lahir`, `alamat`, `gambar`) VALUES
(22001, 'Barra Alkhasyani Permana', '2003-08-27', 'Karisma Siliwangi Residence blok A 18, Tasikmalaya', '6299fa2c72645foto5.jpg'),
(22002, 'Syahnan Afifah Zahra', '2003-09-30', 'Jalan Karangsari Gang Mulyasari no 123, Cimahi', '6299fa1977c54cewe dari github.jpg'),
(22003, 'Usup Saipudin', '2022-05-01', 'Jalan Sirotol Mustaqim', '6299f9ba2ff47foto2.jpg'),
(22004, 'Muhammad Sova', '2003-01-31', 'Jalan Breeze kecamatan haven no 69', '6299f9ac8d65bfoto6.jpg'),
(22010, 'Shrek Tampan Sekali', '2012-08-17', 'Jalan Somebody wanna told me the world is gonna roll me', '6299f9a12daaffoto3.jpg'),
(22014, 'Supriadi Geming', '2005-04-29', 'Jalan warnet until turu', '629b075ede5f4pcgaming.png');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `no_batch` int(11) NOT NULL,
  `id_tenmed` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `no_alat` int(11) NOT NULL,
  `lok_vaksin` varchar(255) NOT NULL,
  `ket_vaksin` varchar(255) NOT NULL,
  `tgl_vaksin` date NOT NULL,
  `no_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`no_batch`, `id_tenmed`, `id_pasien`, `no_alat`, `lok_vaksin`, `ket_vaksin`, `tgl_vaksin`, `no_tiket`) VALUES
(1, 3, 22001, 2, 'Jalan Cikalang Girang no 69 ', 'Vaksin T-Virus dosis 1', '2022-05-30', 2),
(2, 3, 22002, 2, 'Rumah Sakit Jasa Kartini', 'Vaksin Z-Virus dosis 1', '2022-06-04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_medis`
--

CREATE TABLE `tenaga_medis` (
  `id_tenmed` int(11) NOT NULL,
  `nama_tenmed` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenaga_medis`
--

INSERT INTO `tenaga_medis` (`id_tenmed`, `nama_tenmed`, `tgl_lahir`) VALUES
(1, 'Dr. Muhammad Brimstone', '1995-02-13'),
(2, 'Dr. Asep Specter', '1991-08-17'),
(3, 'Dr. Ahmad Chamber', '1994-10-11'),
(4, 'Dr. Jonny Sins', '1997-01-07'),
(5, 'Dr. Jordy Ganteng', '1993-07-07'),
(6, 'Dra. Siti Nurbaya', '1997-12-19'),
(7, 'Dr. Fulan Geming', '1996-09-15'),
(8, 'Dra. Wulan Gimang', '1998-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(4, 'user@gmail.com', '1234567890', 'user'),
(5, 'admin@gmail.com', '1234567890', 'admin'),
(8, 'usup@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_medis`
--
ALTER TABLE `alat_medis`
  ADD PRIMARY KEY (`no_alat`);

--
-- Indexes for table `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  ADD PRIMARY KEY (`no_batch`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`no_tiket`),
  ADD KEY `no_batch` (`no_batch`),
  ADD KEY `id_tenmed` (`id_tenmed`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `no_alat` (`no_alat`);

--
-- Indexes for table `tenaga_medis`
--
ALTER TABLE `tenaga_medis`
  ADD PRIMARY KEY (`id_tenmed`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_medis`
--
ALTER TABLE `alat_medis`
  MODIFY `no_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  MODIFY `no_batch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22015;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `no_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tenaga_medis`
--
ALTER TABLE `tenaga_medis`
  MODIFY `id_tenmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sertifikat_ibfk_2` FOREIGN KEY (`id_tenmed`) REFERENCES `tenaga_medis` (`id_tenmed`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sertifikat_ibfk_3` FOREIGN KEY (`no_batch`) REFERENCES `jenis_vaksin` (`no_batch`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sertifikat_ibfk_4` FOREIGN KEY (`no_alat`) REFERENCES `alat_medis` (`no_alat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
