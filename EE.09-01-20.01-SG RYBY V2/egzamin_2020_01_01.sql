-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2020 at 08:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egzamin_2020_01_01`
--
CREATE DATABASE IF NOT EXISTS `egzamin_2020_01_01` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `egzamin_2020_01_01`;

-- --------------------------------------------------------

--
-- Table structure for table `lowisko`
--

CREATE TABLE `lowisko` (
  `id` int(10) NOT NULL,
  `Ryby_id` int(10) NOT NULL,
  `akwen` text NOT NULL,
  `wojewodztwo` text NOT NULL,
  `rodzaj` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lowisko`
--

INSERT INTO `lowisko` (`id`, `Ryby_id`, `akwen`, `wojewodztwo`, `rodzaj`) VALUES
(5, 3, 'Akwen Łódzki', 'Łodzkie', 2),
(6, 2, 'Akwen Warszawski', 'Mazowieckie', 2),
(7, 1, 'Akwen Katowicki', 'Śląskie', 3),
(8, 1, 'Akwen Częstochowski', 'Śląskie', 5);

-- --------------------------------------------------------

--
-- Table structure for table `okres_ochronny`
--

CREATE TABLE `okres_ochronny` (
  `id` int(10) NOT NULL,
  `Ryby_id` int(10) NOT NULL,
  `od_miesiaca` int(10) NOT NULL,
  `do_miesiaca` int(10) NOT NULL,
  `wymiary_ochronny` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `okres_ochronny`
--

INSERT INTO `okres_ochronny` (`id`, `Ryby_id`, `od_miesiaca`, `do_miesiaca`, `wymiary_ochronny`) VALUES
(1, 1, 10, 12, 1),
(2, 2, 1, 12, 0),
(3, 3, 1, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ryby`
--

CREATE TABLE `ryby` (
  `id` int(10) NOT NULL,
  `nazwa` text NOT NULL,
  `wystepowanie` text NOT NULL,
  `styl_zycia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ryby`
--

INSERT INTO `ryby` (`id`, `nazwa`, `wystepowanie`, `styl_zycia`) VALUES
(1, 'Karp', 'stawy, jeziora', 1),
(2, 'Leszcz', 'jeziora', 1),
(3, 'Lin', 'jeziora', 1),
(4, 'Węgorz', 'rzeki', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wedkarze`
--

CREATE TABLE `wedkarze` (
  `id` int(10) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `punkty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lowisko`
--
ALTER TABLE `lowisko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ryby_id` (`Ryby_id`) USING BTREE;

--
-- Indexes for table `okres_ochronny`
--
ALTER TABLE `okres_ochronny`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Ryby_id` (`Ryby_id`);

--
-- Indexes for table `ryby`
--
ALTER TABLE `ryby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedkarze`
--
ALTER TABLE `wedkarze`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lowisko`
--
ALTER TABLE `lowisko`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `okres_ochronny`
--
ALTER TABLE `okres_ochronny`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ryby`
--
ALTER TABLE `ryby`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wedkarze`
--
ALTER TABLE `wedkarze`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lowisko`
--
ALTER TABLE `lowisko`
  ADD CONSTRAINT `lowisko_ibfk_1` FOREIGN KEY (`Ryby_id`) REFERENCES `ryby` (`id`);

--
-- Constraints for table `okres_ochronny`
--
ALTER TABLE `okres_ochronny`
  ADD CONSTRAINT `okres_ochronny_ibfk_1` FOREIGN KEY (`Ryby_id`) REFERENCES `ryby` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
