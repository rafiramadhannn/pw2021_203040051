-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 09:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2021_203040051`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Mochamad Rafi Ramadhan', '203040051', 'rafiramadhan711@gmail.com', 'Teknik Informatika', 'rafi.jpg'),
(2, 'Yusuf Wahyu Syahroni', '203040052', 'yusufwahyu@gmail.com', 'Teknik Informatika', 'yusuf.jpg'),
(3, 'Muhammad Afrizal Fadillah', '203040075', 'afrizalfadillah@gmail.com', 'Teknik Informatika', 'afrizal.jpg'),
(4, 'Priyandi', '203040070', 'priyandii@gmail.com', 'Teknik Informatika', 'andi.jpg'),
(5, 'Alif Luqman Hakim', '203040046', 'alifluqmanhakim@gmail.com', 'Teknik Informatika', 'alif.jpg'),
(6, 'Egi Rahayu', '203040045', 'egirahayu@gmail.com', 'Teknik Informatika', 'egi.jpg'),
(7, 'Alfi Syahrin', '203040054', 'alfisyahrin@gmail.com', 'Teknik Informatika', 'alfi.jpg'),
(8, 'Febrian', '203040057', 'febrian33@gmail.com', 'Teknik Informatika', 'febrian.jpg'),
(9, 'Kelvin Ardiansyah', '203040062', 'kelvinfazzy@gmail.com', 'Teknik Informatika', 'kelvin.jpg'),
(10, 'Muhammad Rizky', '203040043', 'muhmmdrizky@gmail.com', 'Teknik Informatika', 'rizki.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
