-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 10:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dadangcor`
--
CREATE DATABASE IF NOT EXISTS `dadangcor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dadangcor`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `kode_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `kode_admin`, `nama_admin`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'ADM001', 'admin', 'admin', 'admin', 'admin', '$2y$10$zD8jp3SFhg0iKGapXuAO7.7UrNdHh8ec7rS0tnLq0tncw61DTYa42');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `kode_customer` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `kode_customer`, `nama_customer`, `alamat_customer`, `no_hp`, `username`, `password`, `created_at`, `updated_at`) VALUES
(2, 'CMD61b2098a2f52f', 'Julian Danny', 'Jalan Soreang Barat Daya', '089788712230', 'julian', '$2y$10$oLRexdrWd0ljN5lWE9RmzOjSaW66UDSJL.gvWar74I2HDOdrZRAy6', '2021-12-09 07:50:02', '2021-12-09 08:11:39'),
(5, 'CMD61b4fc32610f4', 'Edi', 'edi', '12', 'edi', '$2y$10$QI33eV2kSix.9M6eLDp/gejrzRlgVnnTkrmpdZooJpJX2EA9u3pKa', '2021-12-11 13:29:54', '2021-12-11 13:29:54'),
(6, 'CMD61b9acdd9594b', 'Budi', 'Jalan Kapungkur', '08123123123', 'budi', '$2y$10$pgfzCWd98eqUuAjfuYQVDu7CFt.wnwGdB4CM9YiMUXsIVN.CcfnNK', '2021-12-15 02:52:45', '2021-12-15 02:52:45'),
(7, 'CMD61b9ad1ab05b8', 'Suki', 'Jalan Kapungkuss', '08123132', 'suki', '$2y$10$1z.mtyi049jbSJe1/CrlEe2pyr3U8JbRQtVAHYo99VQQ9kUjNWGPW', '2021-12-15 02:53:46', '2021-12-15 02:53:46'),
(8, 'CMD61b9ad308a95f', 'Kolo', 'Jalan Kapungkussaa', '081231321', 'kolo', '$2y$10$gl12WCflQCn1zD/IP.zPfevQsNJVlV.HkMFovk163.86HfVP0ti7y', '2021-12-15 02:54:08', '2021-12-15 02:54:08'),
(9, 'CMD61b9ad5412bf9', 'Joni', 'Jalan Hebring Jangar', '0876128128', 'joni', '$2y$10$ySqPghc/BKmreCtNqd.BiOh0K6CbKorZlTm/WS56p88DG3pcNMLUG', '2021-12-15 02:54:44', '2021-12-15 02:54:44'),
(10, 'CMD61b9ad71f2280', 'Jizz', 'Jalan Kapungkursssss', '089788712231', 'jizz', '$2y$10$alDzm/CI/QcFdWMefaPYOuOaBRiOmesQMQsXiKi3AYQcYxyV5Y5EC', '2021-12-15 02:55:14', '2021-12-15 02:55:14'),
(11, 'CMD61c0acb86c419', 'dasd', 'asd', 'dasd', 'ads', '$2y$10$E3XsVepUMBOh9.GTV2xBs.xFRYH9B3QsfFIoKJbuKSIWN7zeh3XwS', '2021-12-20 10:18:00', '2021-12-20 10:18:00'),
(12, 'CMD61c0ad4077882', 'asdasdsadd', 'asd', 'sad', 'sad', '$2y$10$KJ4EVwCv0ZnYr0EppE3nsuojpTWEPvVUkEqpGf/n17UIx5GRk9bSC', '2021-12-20 10:20:16', '2021-12-20 10:20:16'),
(13, 'CMD61c0adf521d1a', 'asdsad', 'asdad', 'adsasd', 'adsad', '$2y$10$1TFC4.xa60O3iQzy33xoSuVBh0DURho8bfYb9/0TH1uL4PYu8AAd2', '2021-12-20 10:23:17', '2021-12-20 10:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `rowid` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jenis_spareparts` varchar(255) NOT NULL,
  `merek_spareparts` varchar(255) NOT NULL,
  `tanggal_booking` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL,
  `total_harga_transaksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `kode_transaksi`, `rowid`, `id`, `qty`, `name`, `jenis_spareparts`, `merek_spareparts`, `tanggal_booking`, `price`, `subtotal`, `total_harga_transaksi`) VALUES
(1, 'TRD61b70baf2426d', 'bf2f19c123bfec6a8b23246940b507f0', 'SPD80161', 1, 'Busi', 'Matic', 'Denso', '-', 15000, 15000, 465000),
(2, 'TRD61b70baf2426d', '5252cb7bf6ec6a1ae1721f5614b34c10', 'SPD36896', 1, 'Kampas Rem', 'Manual', 'Brembo', '-', 450000, 450000, 465000),
(3, 'TRD61b71776da8af', 'efc9e48a8bd616f8bbe4af8eed656a3b', 'SER16959', 1, 'Service', 'Manual', '-', '2021-12-18', 80000, 80000, 503000),
(4, 'TRD61b71776da8af', 'fe435e8f1df94be48831d867ffe9ef73', 'SPD15566', 1, 'Ban Luar', 'Matic', 'FDR', '-', 300000, 300000, 503000),
(5, 'TRD61b71776da8af', '9f60faa3046581de346ccf0ef16a6bfc', 'SPD23858', 1, 'Kabel Rem', 'Manual', 'YSS', '-', 8000, 8000, 503000),
(6, 'TRD61b71776da8af', 'b2d4d81d81337cf81e0e8d0e5cc609fd', 'SPD15925', 1, 'Van Belt', 'Matic', 'Honda', '-', 115000, 115000, 503000),
(7, 'TRD61b814119a902', '23c2a28da1d0f741633f71dbcd10b33c', 'SER41706', 1, 'Service', 'Manual', '-', '2021-12-16', 80000, 80000, 1831000),
(8, 'TRD61b814119a902', 'b1b127419ceb066ff151860032dcf907', 'SPD81635', 1, 'Oli Samping', 'Manual', 'IPONE', '-', 180000, 180000, 1831000),
(9, 'TRD61b814119a902', '2a2969c118ac574686328edf3cb3ca91', 'SPD44341', 1, 'Oli', 'Matic', 'Castrol', '-', 55000, 55000, 1831000),
(10, 'TRD61b814119a902', 'fe435e8f1df94be48831d867ffe9ef73', 'SPD15566', 2, 'Ban Luar', 'Matic', 'FDR', '-', 300000, 600000, 1831000),
(11, 'TRD61b814119a902', 'e25a6a0d3eb9348c315162b19a14a451', 'SPD07638', 2, 'Spion', 'Matic', 'Rizoma', '-', 450000, 900000, 1831000),
(12, 'TRD61b814119a902', '9f60faa3046581de346ccf0ef16a6bfc', 'SPD23858', 2, 'Kabel Rem', 'Manual', 'YSS', '-', 8000, 16000, 1831000),
(13, 'TRD61b816e3dde33', 'f812ceb281f8c5f86b5d539203c62980', 'SER67612', 1, 'Service', 'Manual', '-', '2021-12-24', 80000, 80000, 570000),
(14, 'TRD61b816e3dde33', 'bf2f19c123bfec6a8b23246940b507f0', 'SPD80161', 1, 'Busi', 'Matic', 'Denso', '-', 15000, 15000, 570000),
(15, 'TRD61b816e3dde33', '4992f695f21837823919f56df617de26', 'SPD05256', 1, 'Lampu Depan', 'Manual', 'Philips', '-', 25000, 25000, 570000),
(16, 'TRD61b816e3dde33', 'e25a6a0d3eb9348c315162b19a14a451', 'SPD07638', 1, 'Spion', 'Matic', 'Rizoma', '-', 450000, 450000, 570000),
(17, 'TRD61b996ace7a3c', 'edf043c488046f86e22485fe627e520b', 'SER31517', 1, 'Service', 'Manual', '-', '2021-12-17', 80000, 80000, 435000),
(18, 'TRD61b996ace7a3c', '2a2969c118ac574686328edf3cb3ca91', 'SPD44341', 1, 'Oli', 'Matic', 'Castrol', '-', 55000, 55000, 435000),
(19, 'TRD61b996ace7a3c', 'fe435e8f1df94be48831d867ffe9ef73', 'SPD15566', 1, 'Ban Luar', 'Matic', 'FDR', '-', 300000, 300000, 435000),
(20, 'TRD61b9a4611e093', '5252cb7bf6ec6a1ae1721f5614b34c10', 'SPD36896', 1, 'Kampas Rem', 'Manual', 'Brembo', '-', 450000, 450000, 450000),
(21, 'TRD61b9a53c5008e', '4992f695f21837823919f56df617de26', 'SPD05256', 1, 'Lampu Depan', 'Manual', 'Philips', '-', 25000, 25000, 313000),
(22, 'TRD61b9a53c5008e', 'dc737095846b1eb122e586076285d97a', 'SER45100', 1, 'Service', 'Manual', '-', '2021-12-18', 80000, 80000, 313000),
(23, 'TRD61b9a53c5008e', '9f9a6c330bc5119fd83c1e339e65a800', 'SPD85309', 1, 'Accu', 'Manual', 'GS Astra', '-', 200000, 200000, 313000),
(24, 'TRD61b9a53c5008e', '9f60faa3046581de346ccf0ef16a6bfc', 'SPD23858', 1, 'Kabel Rem', 'Manual', 'YSS', '-', 8000, 8000, 313000),
(25, 'TRD61b9aab0bf084', 'fe435e8f1df94be48831d867ffe9ef73', 'SPD15566', 1, 'Ban Luar', 'Matic', 'FDR', '-', 300000, 300000, 765000),
(26, 'TRD61b9aab0bf084', 'bf2f19c123bfec6a8b23246940b507f0', 'SPD80161', 1, 'Busi', 'Matic', 'Denso', '-', 15000, 15000, 765000),
(27, 'TRD61b9aab0bf084', 'e25a6a0d3eb9348c315162b19a14a451', 'SPD07638', 1, 'Spion', 'Matic', 'Rizoma', '-', 450000, 450000, 765000),
(28, 'TRD61c0ed3aec549', '6eeab85b48608d1912b37a427d22758d', 'SER34351', 1, 'Service', 'Manual', '-', '2021-12-23', 100000, 100000, 550000),
(29, 'TRD61c0ed3aec549', '5252cb7bf6ec6a1ae1721f5614b34c10', 'SPD36896', 1, 'Kampas Rem', 'Manual', 'Brembo', '-', 450000, 450000, 550000);

-- --------------------------------------------------------

--
-- Table structure for table `mekanik`
--

CREATE TABLE `mekanik` (
  `id` int(11) NOT NULL,
  `kode_mekanik` varchar(255) NOT NULL,
  `nama_mekanik` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mekanik`
--

INSERT INTO `mekanik` (`id`, `kode_mekanik`, `nama_mekanik`, `slug`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'MKD001', 'asd', 'asd', 'dsad', 'ddd', '2021-11-21 06:47:17', '2021-12-09 06:28:48'),
(4, 'MKD002', 'Jajang Kan', 'jajang-kan', 'Jalan Macet', '081111111112', '2021-11-21 12:22:50', '2021-11-21 12:22:50'),
(5, 'MKD003', 'Sakendayoo', 'sakendayoo', 'Jalan Kadungeuy', '081111111113', '2021-11-21 05:27:19', '2021-11-21 05:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `spareparts`
--

CREATE TABLE `spareparts` (
  `id` int(11) NOT NULL,
  `kode_spareparts` varchar(255) NOT NULL,
  `kategori_spareparts` varchar(255) NOT NULL,
  `merek_spareparts` varchar(255) NOT NULL,
  `jenis_spareparts` varchar(255) NOT NULL,
  `stok_spareparts` varchar(255) NOT NULL,
  `harga_spareparts` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spareparts`
--

INSERT INTO `spareparts` (`id`, `kode_spareparts`, `kategori_spareparts`, `merek_spareparts`, `jenis_spareparts`, `stok_spareparts`, `harga_spareparts`, `gambar`) VALUES
(19, 'SPD44341', 'Oli', 'Castrol', 'Matic', '40', '51000', 'img-oli.png'),
(20, 'SPD15566', 'Ban Luar', 'FDR', 'Matic', '200', '300000', 'img-banluar.png'),
(22, 'SPD36896', 'Kampas Rem', 'Brembo', 'Manual', '10', '450000', 'img-kampasrem.png'),
(23, 'SPD80161', 'Busi', 'Denso', 'Matic', '10', '15000', 'img-busi.png'),
(24, 'SPD05256', 'Lampu Depan', 'Philips', 'Manual', '10', '25000', 'img-lampudepan.png'),
(25, 'SPD81635', 'Oli Samping', 'IPONE', 'Manual', '40', '180000', 'img-olisamping.png'),
(26, 'SPD15925', 'Van Belt', 'Honda', 'Matic', '31', '115000', 'img-vanbelt.png'),
(27, 'SPD85309', 'Accu', 'GS Astra', 'Manual', '50', '200000', 'img-accu.png'),
(28, 'SPD23858', 'Kabel Rem', 'YSS', 'Manual', '100', '8000', 'img-kabelrem.png'),
(29, 'SPD07638', 'Spion', 'Rizoma', 'Matic', '122', '450000', 'img-spion.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `kode_customer` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `tanggal_transaksi` varchar(255) NOT NULL,
  `total_harga_transaksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_selesai`
--

CREATE TABLE `transaksi_selesai` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `kode_customer` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `tanggal_transaksi` varchar(255) NOT NULL,
  `total_harga_transaksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_selesai`
--

INSERT INTO `transaksi_selesai` (`id`, `kode_transaksi`, `kode_customer`, `nama_customer`, `tanggal_transaksi`, `total_harga_transaksi`) VALUES
(38, 'TRD61b816e3dde33', 'CMD61b2098a2f52f', 'Julian Danny', '2021-12-14', 570000),
(39, 'TRD61b71776da8af', 'CMD61b4fc32610f4', 'Edi', '2021-12-13', 503000),
(40, 'TRD61b70baf2426d', 'CMD61b2098a2f52f', 'Julian Danny', '2021-12-13', 465000),
(41, 'TRD61b996ace7a3c', 'CMD61b4fc32610f4', 'Edi', '2021-12-15', 435000),
(42, 'TRD61b9a4611e093', 'CMD61b4fc32610f4', 'Edi', '2021-12-15', 450000),
(43, 'TRD61b9a53c5008e', 'CMD61b4fc32610f4', 'Edi', '2021-12-15', 313000),
(44, 'TRD61b9aab0bf084', 'CMD61b4fc32610f4', 'Edi', '2021-12-15', 765000),
(45, 'TRD61c0ed3aec549', 'CMD61b4fc32610f4', 'Edi', '2021-12-20', 550000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `mekanik`
--
ALTER TABLE `mekanik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spareparts`
--
ALTER TABLE `spareparts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_selesai`
--
ALTER TABLE `transaksi_selesai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mekanik`
--
ALTER TABLE `mekanik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spareparts`
--
ALTER TABLE `spareparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `transaksi_selesai`
--
ALTER TABLE `transaksi_selesai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Database: `db_proposal`
--
CREATE DATABASE IF NOT EXISTS `db_proposal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_proposal`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `ttl_admin` date NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `no_hp_admin` varchar(13) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `ttl_admin`, `email_admin`, `no_hp_admin`, `alamat_admin`) VALUES
(26, 'asdad', '2021-12-30', 'asdsad@adsasd.com', '123123213', 'sssss'),
(29, 'asdadsads', '2021-12-28', 'victorjulsads@gmail.com', '098123121', 'sadasda');

-- --------------------------------------------------------

--
-- Table structure for table `dana`
--

CREATE TABLE `dana` (
  `id_dana` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `jumlah_dana` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dana`
--

INSERT INTO `dana` (`id_dana`, `id_proposal`, `jumlah_dana`) VALUES
(1, 19, 5500000);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_setuju`
--

CREATE TABLE `laporan_setuju` (
  `id_laporan_setuju` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_setuju`
--

INSERT INTO `laporan_setuju` (`id_laporan_setuju`, `id_proposal`) VALUES
(1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_uang`
--

CREATE TABLE `laporan_uang` (
  `id_laporan_uang` int(11) NOT NULL,
  `id_dana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_uang`
--

INSERT INTO `laporan_uang` (`id_laporan_uang`, `id_dana`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaju`
--

CREATE TABLE `pengaju` (
  `id_pengaju` int(11) NOT NULL,
  `ktm` varchar(20) NOT NULL,
  `nama_pengaju` varchar(100) NOT NULL,
  `ttl_pengaju` date NOT NULL,
  `email_pengaju` varchar(100) NOT NULL,
  `no_hp_pengaju` varchar(13) NOT NULL,
  `alamat_pengaju` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaju`
--

INSERT INTO `pengaju` (`id_pengaju`, `ktm`, `nama_pengaju`, `ttl_pengaju`, `email_pengaju`, `no_hp_pengaju`, `alamat_pengaju`) VALUES
(1, '11191010300', 'Heri Riyawan', '2001-08-14', 'heriyawan@gmail.com', '085643796542', 'Tanggerang');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `ktm` varchar(20) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `lampiran_proposal` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` enum('Lolos','Proses','Diterima','Ditolak') NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `ktm`, `nama_organisasi`, `nama_event`, `lampiran_proposal`, `created_at`, `updated_at`, `status`) VALUES
(19, '1', 'Himpunan Mahasiswa Jaya', 'WADAW!!!', 'wadaw.pdf', '2021-12-14 11:17:57', '2021-12-14 11:17:57', 'Proses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`id_dana`);

--
-- Indexes for table `laporan_setuju`
--
ALTER TABLE `laporan_setuju`
  ADD PRIMARY KEY (`id_laporan_setuju`);

--
-- Indexes for table `laporan_uang`
--
ALTER TABLE `laporan_uang`
  ADD PRIMARY KEY (`id_laporan_uang`);

--
-- Indexes for table `pengaju`
--
ALTER TABLE `pengaju`
  ADD PRIMARY KEY (`id_pengaju`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `dana`
--
ALTER TABLE `dana`
  MODIFY `id_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan_setuju`
--
ALTER TABLE `laporan_setuju`
  MODIFY `id_laporan_setuju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan_uang`
--
ALTER TABLE `laporan_uang`
  MODIFY `id_laporan_uang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengaju`
--
ALTER TABLE `pengaju`
  MODIFY `id_pengaju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'dadangcorrr', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"dadangcor\",\"db_proposal\",\"phpmyadmin\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"dadangcor\",\"table\":\"admin\"},{\"db\":\"dadangcor\",\"table\":\"customer\"},{\"db\":\"db_proposal\",\"table\":\"admin\"},{\"db\":\"dadangcor\",\"table\":\"transaksi\"},{\"db\":\"dadangcor\",\"table\":\"transaksi_selesai\"},{\"db\":\"dadangcor\",\"table\":\"detail_transaksi\"},{\"db\":\"dadangcor\",\"table\":\"dump\"},{\"db\":\"dadangcor\",\"table\":\"mekanik\"},{\"db\":\"dadangcor\",\"table\":\"spareparts\"},{\"db\":\"db_admin\",\"table\":\"user\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'dadangcor', 'spareparts', '{\"sorted_col\":\"`spareparts`.`kode_spareparts`  ASC\"}', '2021-12-08 08:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-12-20 21:56:53', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
