-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 05:29 PM
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
-- Database: `pw_tubes_203040051`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `rilis` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `nama`, `img`, `rilis`, `deskripsi`, `genre`) VALUES
(1, 'PUBG Mobile', 'pubg.png', '23 Maret 2017', 'Intinya adalah bagaimana bisa bertahan hidup dan salah satu game online terbaik 2020 versi Tripzilla Indonesia ini menjadi salah satu game online paling populer untuk dimainkan saat ini. Sembari menunggu kesempatan yang tepat untuk jalan-jalan lagi, tidak ada salahnya menghabiskan waktu dengan memainkan PUBG Mobile. Dijamin seru, lho!', 'Battle Royal'),
(2, 'Mobile Legends', 'mobil-lejen.png', '14 Juli 2016', 'Ingin adu strategi dan menguji kesolidan tim kamu dalam bermain game, Mobile Legends adalah game online terbaik 2020 yang wajib kamu mainkan. Game yang sudah diunduh lebih dari empat juta orang ini juga menawarkan virtual joystick, yang memudahkan kamu memainkan game ini. Yang tertarik bisa mencoba langsung, ya!', 'MOBA'),
(3, 'Call of Duty Mobile', 'codm.png', '1 Oktober 2017', 'Game ini menjadi salah satu yang favorit di kalangan gamer online. Saat ini game online terbaik 2020 versi Tripzilla ini juga sudah tersedia versi mobile, jadi bisa dimainkan di smartphone kamu, meski dibutuhkan spesifikasi handphone yang lebih tinggi dari biasanya. Dengan grafis yang lebih tajam, banyak fitur yang ditawarkan, termasuk armory yang lebih canggih dan maps yang lengkap.', 'Battle Royal'),
(4, 'Arena of Valor', 'aov.png', '30 November 2016', 'Kualitas grafis yang mumpuni menjadikan game online ini terlihat lebih realistis. Dengan menampilkan lebih dari 80 hero yang bisa dimainkan di game ini, game multiplayer online battle arena ini mengandalkan tim dan strategi yang cakap untuk bisa meraih kemenangan.', 'MOBA'),
(5, 'Free Fire', 'freefire.png', '30 September 2017', 'Karena spek yang lebih ringan, grafis game Free Fire tidak setinggi PUBG atau game lainnya. Namun demikian, game online terbaik 2020 versi Tripzilla ini masih menawarkan keseruan kala memainkannya, mengingat banyak karakter dengan skill berbeda untuk dimainkan selama 10 menit. Cobain, deh!', 'Battle Royal'),
(6, 'Clash of Clans', 'coc.png', '2 Agustus 2012', 'Game online yang satu ini termasuk yang populer di kalangan gamer mobile, yang memberikan kesempatan untuk gamer membangun desa dan membentuk kelompok sebelum kemudian menyerang wilayah musuh. Dengan sistem multiplayer, game online terbaik 2020 ini sangat menarik dimainkan bersama-sama.', 'Strategi'),
(7, 'Ashphalt 9', 'ashphalt.png', '26 Juli 2018', 'Game balap mobil terbaik yang bisa kamu unduh secara gratis di Playstore adalah Asphalt 9. Dengan kualitas grafis yang mumpuni, game balap ini bisa dimainkan secara online, di mana kamu bisa bertarung melawan orang lain di seluruh dunia yang juga memainkan game yang sama. Dijamin seru!', 'Racing'),
(8, 'PES 2020 Mobile', 'pes.png', '10 September 2019', 'Siapa sih yang tidak suka sepakbola? Jika kamu salah satunya, memainkan game online terbaik 2020 ini bisa menjadi cara untuk mengatasi minimnya kesempatan untuk bermain bola di area terbuka. Game buatan Konami ini memiliki gameplay yang mirip dengan versi PC atau console. Kamu juga bisa bertanding secara online, sekaligus memainkan tim kesayangan dan bertemu dengan pemain favorit kamu.', 'Olahraga'),
(9, 'Lord Mobile', 'lord-mobile.png', '26 Februari 2016', 'Game strategi RPG lainnya yang bisa kamu mainkan adalah Lords Mobile: Battle of the Empires. Game online terbaik 2020 ini menawarkan gamer mobile untuk membangun kerajaan, membentuk pasukan dan menyerang kerajaan lainnya. Banyak monster dan hero yang bisa kamu pilih untuk membentuk pasukan terbaik kamu sebelum menyerang kerajaan lain. Game ini sudah dimainkan lebih dari 300 juta orang dari seluruh dunia, jadi kamu bisa menguji kemampuan menghadapi banyak orang.', 'RPG'),
(10, 'Slither.io', 'slither.png', '27 Maret 2016', 'Game online terbaik 2020 versi Tripzilla Indonesia ini termasuk salah satu game populer dan paling banyak dimainkan saat ini, mengalahkan PUBG dan yang lainnya. Meski memiliki tampilan yang sederhana, kamu bisa bermain dengan seru dan menghadapi lawan, mengatur strategi untuk membuat cacing kamu bertambah besar.', 'Arcade');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
