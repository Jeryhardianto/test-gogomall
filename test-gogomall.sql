-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2022 at 04:41 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-gogomall`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `id_sales` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `no_telpon`, `nama`, `id_sales`) VALUES
(1, '0812345678910', 'JeryH', '1'),
(2, '082312312312', 'Budi', '2'),
(3, '86576576', 'tertert', '86576576'),
(4, '878768678', 'Jery Hardianto', '878768678'),
(5, '878768678', 'Jery Hardianto', '1'),
(6, '323444444', 'Jery Hardianto', '2'),
(7, '8676765', 'tregregr', '4');

-- --------------------------------------------------------

--
-- Table structure for table `pelangan`
--

CREATE TABLE `pelangan` (
  `id_customer` varchar(11) NOT NULL,
  `nama_customer` varchar(255) DEFAULT NULL,
  `umur` varchar(3) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelangan`
--

INSERT INTO `pelangan` (`id_customer`, `nama_customer`, `umur`, `jenis_kelamin`) VALUES
('1', 'JeryH', '23', 'Lak-Laki'),
('2', 'Ani', '30', 'Perempuan'),
('3', 'Sella', '31', 'Perempuan'),
('4', 'Sandi', '34', 'Laki-Laki'),
('5', 'Lala', '40', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `nama_sales` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `nama_sales`) VALUES
(1, 'eko'),
(2, 'kurniawan'),
(3, 'Jery Hardianto'),
(4, 'jhon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
