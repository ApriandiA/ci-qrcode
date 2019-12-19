-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 04:55 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `key` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `role`, `key`) VALUES
(5, 'Apriandi', 'aapri', '$2y$10$54kQk21zuGl3KosvbxsWreXLRYsMJVie4fx5xZMyuAUghMXOZHhfm', 'admin', '$2y$10$g4Zsv30Hi.IESEEp1NRinuGYkAy/ytG0zo0KOlFmPWMwZTDnC.h42'),
(11, 'finda', 'rian', '$2y$10$hka3BtpmTWfyi2qo6P1Y2.K3oKghLFZp7L8ceB2AoJJ008uwyEYBq', 'user', '$2y$10$crtGWANmh8y88FUL9cOQtuIO/Fe70RKHnKzh6gl86awVFXZRREUaW'),
(12, 'haha', 'aapri45', '$2y$10$Vfnn2VJYU2bS0LBU.m2F/eMgE4JGmS4abPW8Jx2FPHtb6VJcJ9UA.', 'admin', '$2y$10$PuUnVYQVzweJl5VdOkAKrO1de.7354waxmYuiNPl4VSPInhza46my'),
(13, 'apri', 'apriandi', '$2y$10$pSjzaDUblsI4Cr9QJ8oe2e1vhTBzp/byADsHPNotjHN7.lqcKSV3e', 'admin', '$2y$10$SWaQxTT8k3EcASlaxH6ln.QmDaxtH6vvIpedcbIOdu3OkJfBQ0nfy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
