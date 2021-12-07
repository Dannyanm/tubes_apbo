-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 03:14 PM
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
  `id` int(11) NOT NULL,
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

INSERT INTO `admin` (`id`, `kode_admin`, `nama_admin`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'ADM001', 'admin', 'admin', 'admin', 'admin', '$2y$10$zD8jp3SFhg0iKGapXuAO7.7UrNdHh8ec7rS0tnLq0tncw61DTYa42');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `kode_customer` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `kode_customer`, `nama_customer`, `alamat`, `no_hp`, `username`, `password`, `created_at`, `updated_at`) VALUES
(12, 'CMD001', 'admin', 'admin', 'admin', 'admin', '$2y$10$dc48uTXvv5kbbn4EtLOnCeYrZri5n9yqex1cElWBrl/fJSh1FI.9a', '2021-11-24 09:11:29', '2021-11-24 09:11:29'),
(13, 'CMD002', 'Rudi', 'Jalan Petamburan', '087999980098', 'rudi123', '$2y$10$a1tp757NA3FCbI7LD5DbS.CFqkgwyUU/GBtIgM34epa73YkCg.SWO', '2021-11-24 02:40:32', '2021-11-24 02:40:32');

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
(1, 'MKD001', 'Alan Sujana', 'alan-sujana', 'Jalan Rerengwulung', '081111111111', '2021-11-21 06:47:17', '2021-11-21 06:47:17'),
(4, 'MKD002', 'Jajang Kan', 'jajang-kan', 'Jalan Macet', '081111111112', '2021-11-21 12:22:50', '2021-11-21 12:22:50'),
(5, 'MKD003', 'Sakendayoo', 'sakendayoo', 'Jalan Kadungeuy', '081111111113', '2021-11-21 05:27:19', '2021-11-21 05:27:19'),
(6, 'MKD004', 'Edi Suryadi', 'edi-suryadi', 'Jalan Ujung', '081111111114', '2021-11-21 05:34:56', '2021-11-21 05:34:56'),
(8, 'MKD005', 'Danny Aulia', 'danny-aulia', 'Soreang', '081111111115', '2021-11-21 05:44:11', '2021-11-21 05:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `spareparts`
--

CREATE TABLE `spareparts` (
  `id` int(11) NOT NULL,
  `kode_spareparts` varchar(255) NOT NULL,
  `nama_spareparts` varchar(255) NOT NULL,
  `merek_spareparts` varchar(255) NOT NULL,
  `jenis_spareparts` varchar(255) NOT NULL,
  `stok_spareparts` varchar(255) NOT NULL,
  `harga_spareparts` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spareparts`
--

INSERT INTO `spareparts` (`id`, `kode_spareparts`, `nama_spareparts`, `merek_spareparts`, `jenis_spareparts`, `stok_spareparts`, `harga_spareparts`) VALUES
(1, 'SPD001', 'Oli', 'Castrol', 'Matic', '42', '50000'),
(5, 'SPD002', 'Ban Luar', 'FDR', 'Manual', '40', '350000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `jenis_transaksi` varchar(255) NOT NULL,
  `tanggal_transaksi` varchar(255) NOT NULL,
  `harga_transaksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_transaksi`, `nama_customer`, `jenis_transaksi`, `tanggal_transaksi`, `harga_transaksi`) VALUES
(1, 'TRD001', 'Joko', 'Service', '2021-12-07', 50000),
(2, 'TRD002', 'Julian', 'Service', '2021-12-07', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_selesai`
--

CREATE TABLE `transaksi_selesai` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `jenis_transaksi` varchar(255) NOT NULL,
  `tanggal_transaksi` varchar(255) NOT NULL,
  `harga_transaksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mekanik`
--
ALTER TABLE `mekanik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spareparts`
--
ALTER TABLE `spareparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi_selesai`
--
ALTER TABLE `transaksi_selesai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
