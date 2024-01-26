-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 04:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopifydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `followtb`
--

CREATE TABLE `followtb` (
  `followers_id` int(11) NOT NULL,
  `following_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followtb`
--

INSERT INTO `followtb` (`followers_id`, `following_id`, `user_id`) VALUES
(0, 0, 'fanzeloshopbyjaffan'),
(3, 0, 'day070');

-- --------------------------------------------------------

--
-- Table structure for table `itemtb`
--

CREATE TABLE `itemtb` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image_path` varchar(30) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itemtb`
--

INSERT INTO `itemtb` (`item_id`, `item_name`, `description`, `price`, `category`, `image_path`, `owner_id`, `owner_name`) VALUES
(1, 'SSD RX7 128 GB RESMI GARANSI 3 TAHUN', 'Selamat Datang di AURELIO STORE.\r\nBarang Baru Kualitas terjamin.\r\n\r\nBergaransi Apabila Barang Rusak bisa langsung Retur, kami ganti dengan yang (Baru)\r\n\r\n* Free Bublewarp & Plastik Hitam Packing Tebal dan Aman\r\n* Perkiraan Berat Sudah di hitung Termasuk Packing yang aman.', 151000, 'Teknologi', 'ssd.jpg', 2, 'aurelio123'),
(2, 'ZOTAC GAMING GeForce GTX 1650 AMP CORE | 4GB GDDR6', 'ZT-T16520J-10L\r\n\r\nGPU : GeForce® GTX 1650\r\nCUDA cores : 896\r\nVideo Memory : 4GB GDDR6\r\nMemory Bus : 128-bit\r\nEngine Clock Boost: 1650 MHz\r\nMemory Clock : 12 Gbps\r\nPCI Express : 3.0\r\n\r\nDisplay Outputs\r\nDisplayPort 1.4\r\nHDMI 2.0b\r\nDual Link DVI-D\r\nHDCP Support : Yes\r\nMulti Display Capability : Triple Display\r\n\r\nRecommended Power Supply : 350W\r\nPower Consumption : 75W\r\nPower Input : 6-pin\r\n\r\nDirectX12 API feature level  : 12_1\r\nOpenGL : 4.6\r\n\r\nCooling : Dual Fan\r\nSlot Size : Dual Slot\r\nSLI : N/A\r\n\r\nSupported OS : Windows 10 / 7 64-bit\r\nCard Length : 162.4mm x 115.2mm x 35.3mm / 6.39in x 4.54in x 1.39in\r\nAccessories : User Manual', 2042000, 'Teknologi', 'vga.jpg', 1, 'day070'),
(3, 'Jersey PERSIB BANDUNG Musim 2023/2024 Ori Pabrik', 'Jersey PersibBandung musim baru\r\n\r\nSize \r\nX\r\nXL\r\nM\r\nS\r\nXXS\r\nharga 150.000rb + ongkir\r\n\r\nPacking lakban', 150000, 'Pakaian', 'psb.jpg', 3, 'fanzeloshopbyjaffan'),
(4, 'Seagate Barracuda 1TB - Hardisk Internal 3.5\" SATA', 'GARANSI TOKO 1 TAHUN\r\n\r\nForm Factor: 3.5Inch\r\nInterface: SATA 6Gb/s\r\nTransfer Data Rate: Up to 190MB/s\r\nCache: 256MB\r\n\r\nSeagate BarraCuda sangat sesuai untuk Penyimpanan desktop, Penyimpanan all-in-one, Server Rumah, Perangkat DAS.\r\n\r\nSemua harddisk dalam famili BarraCuda dilengkapi dengan Multi-Tier Caching (MTC) Technology. MTC memaksimalkan tingkat kinerja PC Anda, sehingga Anda dapat memuat aplikasi dan file dengan lebih cepat dari sebelumnya. Dengan menerapkan lapisan cerdas teknologi Flash NAND, DRAM, dan cache media, BarraCuda menghadirkan kinerja baca dan tulis yang lebih baik dengan mengoptimalkan aliran data.', 550000, 'Teknologi', 'hdd.jpg', 2, 'aurelio123');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`userid`, `username`, `password`) VALUES
(1, 'day070', '12='),
(2, 'aurelio123', '222'),
(3, 'fanzeloshopbyjaffan', 'hanin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemtb`
--
ALTER TABLE `itemtb`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemtb`
--
ALTER TABLE `itemtb`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
