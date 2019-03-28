-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 02:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_smdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_laptop`
--

CREATE TABLE `daftar_laptop` (
  `No` int(5) NOT NULL,
  `Merek` varchar(30) NOT NULL,
  `Seri` varchar(30) NOT NULL,
  `Prosesor` varchar(100) NOT NULL,
  `Chipset` varchar(50) NOT NULL,
  `Memori` varchar(50) NOT NULL,
  `Sistem_Operasi` varchar(50) NOT NULL,
  `Harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_laptop`
--

INSERT INTO `daftar_laptop` (`No`, `Merek`, `Seri`, `Prosesor`, `Chipset`, `Memori`, `Sistem_Operasi`, `Harga`) VALUES
(33, 'Asus', ' A456UQ', 'Intel Core i7-7500U dual-core 2,7GHz TurboBoost 3,5GHz', 'Intel', 'RAM 8GB DDR4 2133MHz, upgradeable max 16GB DDR4', 'DOS', '9.599.000'),
(34, 'Lenovo', 'IdeaPad Y700', 'Intel core i7 6700 HQ Quad-Core 2,6 GHz,Â 6M Cache TurboBoost up to 3,5 GHz', 'Intel', '16 GB DDR 3', 'Windows 10Â Home 64 bit (pre installed)', '16.999.000'),
(35, 'MSI', 'GL62m 7RDX', 'Intel core i7-7700HQ+HM175', 'Intel', 'DDR4 8G', 'DOS', '11.999.000'),
(36, 'Acer', 'Predator Nitro 5 AN515 - 51 71', 'Intel Core i7-7700HQ quad-core 2,8GHz TurboBoost hingga 3,8GHz', 'Intel', 'Ram 16gb DDR4', 'Endless OS', '16.499.000'),
(37, 'Asus', 'Asus ROG Strix GL503', 'Intel Core i7 2.8GHz Intel Core i7-7700HQ (quad-core, 6MB cache, up to 3.8GHz)', 'Intel', 'DDR4 16GB', 'Windows 10', '14.299.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_laptop`
--
ALTER TABLE `daftar_laptop`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_laptop`
--
ALTER TABLE `daftar_laptop`
  MODIFY `No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
