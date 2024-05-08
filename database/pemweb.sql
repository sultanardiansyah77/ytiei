-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 01:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'teamnts.com', 'teamnts.com', 'NTS Shop');

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE `bukti` (
  `id_bukti` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti`
--

INSERT INTO `bukti` (`id_bukti`, `id_game`, `bukti_pembayaran`) VALUES
(9, 1234567, 'carbon (18).png'),
(10, 1234567, 'erd (1).jpg'),
(11, 1234567, 'erd (1).jpg'),
(12, 2147483647, 'erd2 (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(25) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Mobile Legends'),
(2, 'Free Fire'),
(3, 'PUBG Mobile'),
(4, 'Valorant'),
(5, 'Genshin Impact'),
(6, 'Higgs Domino'),
(7, 'Clash Of Clans'),
(8, 'Stumble Guys'),
(9, 'Point Blank'),
(10, 'Apex Legend'),
(11, 'Counter Strike');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `tanggal_pembelian`, `total_pembelian`) VALUES
(1, 1, '2022-12-21', 300000),
(2, 2, '2022-12-22', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(25) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `nominal_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `nominal_produk`, `deskripsi_produk`) VALUES
(1, 1, 'Diamond Mobile Legends', 2000, 3, 'Diamond ML     '),
(2, 1, 'Diamond Mobile Legends', 2000, 5, 'Diamond ML'),
(4, 3, 'UC PUBG Mobile', 5000, 25, 'UC PUBG Mobile'),
(6, 2, 'Diamond Free Fire', 1000, 5, 'Diamond FF'),
(7, 2, 'Diamond Free Fire', 2000, 12, 'Diamond FF'),
(8, 2, 'Diamond Free Fire', 8000, 50, 'Diamond FF'),
(9, 2, 'Diamond Free Fire', 10000, 70, 'Diamond FF'),
(10, 2, 'Diamond Free Fire', 20000, 140, 'Diamond FF'),
(11, 2, 'Diamond Free Fire', 50000, 355, 'Diamond FF'),
(12, 2, 'Diamond Free Fire', 10000, 720, 'Diamond FF'),
(13, 2, 'Diamond Free Fire', 200000, 1450, 'Diamond FF'),
(14, 2, 'Diamond Free Fire', 300000, 2180, 'Diamond FF'),
(15, 2, 'Diamond Free Fire', 500000, 3640, 'Diamond FF'),
(16, 2, 'Diamond Free Fire', 1000000, 7290, 'Diamond FF'),
(17, 2, 'Diamond Free Fire', 5000000, 36500, 'Diamond FF'),
(18, 2, 'Diamond Free Fire', 10000000, 73000, 'Diamond FF'),
(20, 1, 'Diamond Mobile Legends', 4000, 12, 'Diamond ML'),
(21, 1, 'Diamond Mobile Legends', 6000, 19, 'Diamond ML'),
(22, 1, 'Diamond Mobile Legends', 9000, 28, 'Diamond ML'),
(23, 1, 'Diamond Mobile Legends', 13000, 44, 'Diamond ML'),
(24, 1, 'Diamond Mobile Legends', 17000, 59, 'Diamond ML'),
(25, 1, 'Diamond Mobile Legends', 25000, 85, 'Diamond ML'),
(26, 1, 'Diamond Mobile Legends', 50000, 170, 'Diamond ML'),
(27, 1, 'Diamond Mobile Legends', 70000, 250, 'Diamond ML'),
(28, 1, 'Diamond Mobile Legends', 85000, 296, 'Diamond ML'),
(29, 1, 'Diamond Mobile Legends', 116000, 408, 'Diamond ML'),
(30, 1, 'Diamond Mobile Legends', 160000, 568, 'Diamond ML'),
(31, 1, 'Diamond Mobile Legends', 250000, 875, 'Diamond ML'),
(33, 1, 'Diamond Mobile Legends', 530000, 2010, 'Diamond ML'),
(34, 1, 'Diamond Mobile Legend', 1265000, 4830, 'Diamond ML'),
(35, 3, 'UC PUBG Mobile', 7000, 36, 'UC PUBGM'),
(36, 3, 'UC PUBG Mobile', 10000, 52, 'UC PUBGM'),
(37, 3, 'UC PUBG Mobile', 14000, 73, 'UC PUBGM'),
(38, 3, 'UC PUBG Mobile', 25000, 131, 'UC PUBGM'),
(39, 3, 'UC PUBG Mobile', 50000, 263, 'UC PUBGM'),
(40, 3, 'UC PUBG Mobile', 100000, 530, 'UC PUBGM'),
(41, 3, 'UC PUBG Mobile', 250000, 1375, 'UC PUBGM'),
(42, 3, 'UC PUBG Mobile', 500000, 2875, 'UC PUBGM'),
(43, 3, 'UC PUBG Mobile', 1000000, 6000, 'UC PUBGM'),
(44, 9, 'Cash Point Blank', 10000, 1200, 'Cash PB'),
(45, 9, 'Cash Point Blank', 20000, 2400, 'Cash PB'),
(46, 9, 'Cash Point Blank', 50000, 6000, 'Cash PB'),
(47, 9, 'Cash Point Blank', 100000, 12000, 'Cash PB'),
(48, 9, 'Cash Point Blank', 310000, 36000, 'Cash PB'),
(49, 9, 'Cash Point Blank', 525000, 60000, 'Cash PB'),
(50, 5, 'Crystal Genshin Impact', 13000, 60, 'Genesis Crystal Genshin Impact'),
(51, 5, 'Crystal Genshin Impact', 66000, 330, 'Genesis Crystal Genshin Impact'),
(52, 5, 'Crystal Genshin Impact', 215000, 1990, 'Genesis Crystal Genshin Impact'),
(53, 5, 'Crystal Genshin Impact', 450000, 2240, 'Genesis Crystal Genshin Impact'),
(54, 5, 'Crystal Genshin Impact', 710000, 3880, 'Genesis Crystal Genshin Impact'),
(55, 5, 'Crystal Genshin Impact', 1410000, 8080, 'Genesis Crystal Genshin Impact'),
(56, 4, 'Valorant Points', 15000, 125, 'Valorant Points'),
(57, 4, 'Valorant Points', 48000, 420, 'Valorant Points'),
(58, 4, 'Valorant Points', 76000, 700, 'Valorant Points'),
(59, 4, 'Valorant Points', 145000, 1375, 'Valorant Points'),
(60, 4, 'Valorant Points', 240000, 2400, 'Valorant Points'),
(61, 4, 'Valorant Points', 380000, 4000, 'Valorant Points'),
(62, 4, 'Valorant Points', 760000, 8150, 'Valorant Points'),
(63, 6, 'Koin Emas ', 5000, 30, 'Koin Emas Higgs Domino'),
(64, 6, 'Koin Emas ', 10000, 60, 'Koin Emas Higgs Domino'),
(65, 6, 'Koin Emas ', 15000, 100, 'Koin Emas Higgs Domino'),
(66, 6, 'Koin Emas ', 30000, 200, 'Koin Emas Higgs Domino'),
(67, 6, 'Koin Emas ', 60000, 400, 'Koin Emas Higgs Domino'),
(68, 6, 'Koin Emas ', 250000, 2000, 'Koin Emas Higgs Domino'),
(69, 6, 'Koin Emas ', 50000, 4000, 'Koin Emas Higgs Domino'),
(70, 7, 'Gems COC', 25000, 500, 'Clash Of Clasn Gems'),
(71, 7, 'Gems COC', 60000, 1200, 'Clash Of Clasn Gems'),
(72, 7, 'Gems COC', 125000, 2500, 'Clash Of Clasn Gems'),
(73, 7, 'Gems COC', 325000, 6500, 'Clash Of Clasn Gems'),
(74, 7, 'Gems COC', 700000, 14000, 'Clash Of Clasn Gems'),
(75, 8, 'Stumble Guys Gems', 15000, 250, 'Stumble Guys Gems'),
(76, 8, 'Stumble Guys Gems', 35000, 800, 'Stumble Guys Gems'),
(77, 8, 'Stumble Guys Gems', 45000, 1000, 'Stumble Guys Gems'),
(78, 8, 'Stumble Guys Gems', 75000, 2000, 'Stumble Guys Gems'),
(79, 8, 'Stumble Guys Gems', 120000, 4000, 'Stumble Guys Gems'),
(80, 10, 'Coins Apex Legends', 160000, 1000, 'Coins Apex Legends'),
(81, 10, 'Coins Apex Legends', 300000, 2000, 'Coins Apex Legends'),
(82, 10, 'Coins Apex Legends', 600000, 4000, 'Coins Apex Legends'),
(83, 11, 'Counter Strike', 600000, 500, 'Steam Wallet'),
(84, 11, 'Counter Strike', 1000000, 800, 'Steam Wallet'),
(85, 11, 'Counter Strike', 1200000, 1000, 'Steam Wallet'),
(86, 11, 'Counter Strike', 2600000, 2200, 'Steam Wallet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `telepon_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `password_user`, `nama_user`, `telepon_user`) VALUES
(1, 'yoga@gmail.com', 'yoga', 'Yoga Nugroho', '085833532625'),
(2, 'ijal@gmail.com', 'ijal', 'Fahrizal Amri', '085536352263'),
(3, 'oddy@gmail.com', 'oddy', 'oddy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
