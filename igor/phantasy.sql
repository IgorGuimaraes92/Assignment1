-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 12:45 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `phantasy`
--

CREATE TABLE `phantasy` (
  `stnumber` int(6) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `stprogram` varchar(100) NOT NULL,
  `stterm` int(2) NOT NULL,
  `stage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phantasy`
--

INSERT INTO `phantasy` (`stnumber`, `stname`, `stprogram`, `stterm`, `stage`) VALUES
(123456, 'okokok', 'okokok', 6, 25),
(200569, 'John Smith', 'Inter. Trades', 7, 26),
(371674, 'dhxcfdwfe', 'sadweqweq', 5, 25),
(654321, 'nononono', 'nonono', 8, 75),
(666333, 'Aaron Black', 'Computer Programming', 4, 33),
(854679, 'lllllllllll', 'kkkkkkk', 8, 61),
(987654, 'wqweqwe', 'qwsdfsd', 6, 35),
(999999, 'lolololol', 'lololol', 7, 52);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phantasy`
--
ALTER TABLE `phantasy`
  ADD PRIMARY KEY (`stnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phantasy`
--
ALTER TABLE `phantasy`
  MODIFY `stnumber` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
