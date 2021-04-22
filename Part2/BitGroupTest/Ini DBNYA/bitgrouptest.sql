-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 06:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitgrouptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_aktor`
--

CREATE TABLE `b_aktor` (
  `id_aktor` int(20) NOT NULL,
  `name_aktor` varchar(100) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_aktor`
--

INSERT INTO `b_aktor` (`id_aktor`, `name_aktor`, `last_update`) VALUES
(1, 'afffsdwd', '2021-04-22 08:30:00'),
(3, 'fefffe', '2021-04-22 09:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `b_film`
--

CREATE TABLE `b_film` (
  `id_film` int(20) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `release_year` year(4) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `rental_rate` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_film`
--

INSERT INTO `b_film` (`id_film`, `title`, `release_year`, `description`, `rental_rate`) VALUES
(1, '1wdwd', 2001, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `b_kategori`
--

CREATE TABLE `b_kategori` (
  `id_kat` int(20) NOT NULL,
  `name_kat` varchar(100) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_kategori`
--

INSERT INTO `b_kategori` (`id_kat`, `name_kat`, `last_update`) VALUES
(1, 'errw', '2021-04-22 08:17:53'),
(3, 'fewfwess', '2021-04-22 09:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `b_user`
--

CREATE TABLE `b_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`id_user`, `username`, `password`) VALUES
(1, 'Admin', 'e3afed0047b08059d0fada10f400c1e5');

-- --------------------------------------------------------

--
-- Table structure for table `film_actor`
--

CREATE TABLE `film_actor` (
  `id_fa` int(20) NOT NULL,
  `film_id` int(20) DEFAULT NULL,
  `aktor_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film_actor`
--

INSERT INTO `film_actor` (`id_fa`, `film_id`, `aktor_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `film_category`
--

CREATE TABLE `film_category` (
  `id_fc` int(20) NOT NULL,
  `film__id` int(20) DEFAULT NULL,
  `category_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film_category`
--

INSERT INTO `film_category` (`id_fc`, `film__id`, `category_id`) VALUES
(2, 1, 1),
(3, 1, 3),
(4, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_aktor`
--
ALTER TABLE `b_aktor`
  ADD PRIMARY KEY (`id_aktor`);

--
-- Indexes for table `b_film`
--
ALTER TABLE `b_film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `b_kategori`
--
ALTER TABLE `b_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `b_user`
--
ALTER TABLE `b_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `film_actor`
--
ALTER TABLE `film_actor`
  ADD PRIMARY KEY (`id_fa`);

--
-- Indexes for table `film_category`
--
ALTER TABLE `film_category`
  ADD PRIMARY KEY (`id_fc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_aktor`
--
ALTER TABLE `b_aktor`
  MODIFY `id_aktor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `b_film`
--
ALTER TABLE `b_film`
  MODIFY `id_film` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `b_kategori`
--
ALTER TABLE `b_kategori`
  MODIFY `id_kat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `b_user`
--
ALTER TABLE `b_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film_actor`
--
ALTER TABLE `film_actor`
  MODIFY `id_fa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `film_category`
--
ALTER TABLE `film_category`
  MODIFY `id_fc` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
