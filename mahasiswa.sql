-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 06:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `Prg_study` text NOT NULL,
  `fakultas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nama`, `nim`, `email`, `tgl_lahir`, `jenis_kelamin`, `Prg_study`, `fakultas`) VALUES
(1, 'M.  MUSYAHID ABROR', '6701174119', 'musyahid4@gmail.com', '2018-10-03', 'Laki-Laki', 'Manajemen Informatika', 'FAKULTAS ILMU TERAPA'),
(2, 'ILHAM RIZKI RAMDHANI', '6701174776', 'ilham@gmail.com', '2018-10-25', 'Laki-Laki', 'Teknik Telekomunikasi', 'FAKULTAS TEKNIK ELEK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
