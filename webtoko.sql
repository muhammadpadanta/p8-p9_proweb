-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 09:59 AM
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
-- Database: `webtoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltoko`
--

CREATE TABLE `tbltoko` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbltoko`
--

INSERT INTO `tbltoko` (`product_id`, `name`, `description`, `price`) VALUES
(1, 'Pepsodent', 'Pasta gigi terpopuler di Indonesia', '10000'),
(2, 'Lux', 'Merek sabun paling wangy di Indonesia', '12000'),
(3, 'Mama Lemon', 'Sabun cuci piring paling Bersih di Indonesia', '16000'),
(4, 'Hayat (Minyak Goreng)', 'Kurang tau kalo merek ini.', '18000'),
(5, 'Indomie Goreng', 'Mi instan goreng favorit', '12000'),
(6, 'SilverQueen', 'Cokelat kacang mete lezat', '25000'),
(7, 'Kopi Kapal Api', 'Kopi bubuk premium', '20000'),
(8, 'Tolak Angin', 'Jamu herbal penangkal masuk angin', '15000'),
(9, 'Lifebuoy', 'Sabun mandi antibakteri', '18000'),
(10, 'Bango Kecap Manis', 'Kecap manis legendaris', '21000'),
(11, 'ABC Sambal', 'Sambal pedas mantap', '14000'),
(12, 'Aqua', 'Air mineral kemasan', '6000'),
(13, 'Mie Sedaap', 'Mi instan rasa ayam bawang', '12000'),
(14, 'Teh Botol Sosro', 'Teh manis dalam botol', '8000'),
(15, 'Sari Roti', 'Roti manis isi cokelat', '7000'),
(16, 'Wardah Lip Cream', 'Lip cream tahan lama', '45000'),
(17, 'Le Minerale', 'Air mineral sehat', '5000'),
(18, 'Buavita', 'Jus buah segar', '15000'),
(19, 'Tango Wafer', 'Wafer renyah berlapis cokelat', '10000'),
(20, 'Milo', 'Minuman cokelat bernutrisi', '17000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbltoko`
--
ALTER TABLE `tbltoko`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbltoko`
--
ALTER TABLE `tbltoko`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
