-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 05:43 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mobilenumber` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `guests` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`firstname`, `lastname`, `mobilenumber`, `email`, `guests`, `type`, `date`, `address`, `ID`) VALUES
('Nur', 'Afiqah', '0197822768', 'ahmad@gmail.com', '1', 'Traditional Herba', '2019-05-23', 'Kota Bharu', 29),
('Siti', 'Suhairi', '0128971689', 'siti@gmail.com', '2', 'The Fruit Spa', '2019-05-26', 'Kota Bharu', 30),
('Nur', 'Darus', '0197822768', 'nur@gmail.com', '1', 'The Fruit Spa', '2019-05-26', 'Kuala Lumpur', 31),
('Nur', 'Nabilah', '0128990199', 'nur@gmail.com', '1', 'The Fruit Spa', '2019-05-27', 'Kota Bharu', 32),
('Nur', 'Nabilah', '0128990199', 'nur@gmail.com', '2', 'Balinese Aromatic Sp', '2019-05-27', 'joho', 33),
('Siti', 'Afiqah', '0128990199', 'siti@gmail.com', '2', 'Traditional Herba', '2019-05-27', 'Kuala Lumpur', 34),
('Siti', 'Afiqah', '0178998765', 'siti@gmail.com', '2', 'Balinese Aromatic Sp', '2019-05-24', 'Kota Bharu', 36),
('Kema', 'Darus', '0128990199', 'kema@gmail.com', '2', 'The Fruit Spa', '2019-05-28', 'Kuala Lumpur', 37),
('maryam', 'hana', '0128976578', 'hana@gmail.com', '2', 'The Cofee Spa', '2019-05-29', 'Kota Bharu', 38);

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`username`, `email`, `mothername`, `password`, `user_type`, `ID`) VALUES
('Nur', 'ain@gmail.com', 'nur', '123', 'user', 13),
('Nurul', 'nur@gmail.com', 'Fasha', '123', 'user', 14),
('Siti', 'ahmad@gmail.com', 'Fathia', '123', 'admin', 15),
('syahirah', 'syahir@gmail.com', 'ain', '123456', 'admin', 16),
('nurul', 'nurul@gmail.com', 'nur', '1234', 'admin', 17),
('syakila', 'sya@gmail.com', 'nur', '1234', 'staff', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
