-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dhurimi_i_gjakut`
--

CREATE TABLE `dhurimi_i_gjakut` (
  `gjakuID` int(11) NOT NULL,
  `dhuruesiID` int(11) NOT NULL,
  `dataDhurimit` datetime NOT NULL,
  `sasia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dhurimi_i_gjakut`
--

INSERT INTO `dhurimi_i_gjakut` (`gjakuID`, `dhuruesiID`, `dataDhurimit`, `sasia`) VALUES
(2, 4, '2021-11-25 15:27:46', '0.30'),
(3, 3, '2021-11-25 15:13:46', '0.20'),
(5, 5, '2021-11-23 12:13:46', '0.33'),
(6, 2, '2020-11-23 12:13:46', '0.29');

-- --------------------------------------------------------

--
-- Table structure for table `dhuruesi`
--

CREATE TABLE `dhuruesi` (
  `dhuruesiID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `adresa` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefoni` varchar(20) NOT NULL,
  `dtl` date NOT NULL,
  `tipiGjakut` varchar(3) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dhuruesi`
--

INSERT INTO `dhuruesi` (`dhuruesiID`, `emri`, `mbiemri`, `adresa`, `email`, `telefoni`, `dtl`, `tipiGjakut`, `password`) VALUES
(2, 'Artinmarrqa', 'Halili', 'Bislim Kameri', 'artinii@gmail.com', '044847058', '2000-06-23', '0-', '123456'),
(3, 'Shpetim', 'Shallci', 'Shehri Hood', 'shpetimi@gmail.com', '0448444444', '1999-05-20', 'A-', '12345'),
(4, 'Endrit', 'Hoxha', 'Drenica Hood', 'endriti@gmail.com', '04999234', '2003-01-20', 'A+', '12345'),
(5, 'Mufair', 'Rapqa', 'Suga Hood', 'mufair@gmail.com', '043334287', '1983-02-10', 'B-', '12345'),
(19, 'Leotrim', 'Mulaku', 'Ferit Mulaku', 'leotrimi@gmail.com', '043242342', '2000-01-01', '0-', '123456'),
(20, 'Marik', 'Mali', 'Azer Mulaku', 'marik@gmail.com', '043242342', '2000-01-01', '0+', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `marresi`
--

CREATE TABLE `marresi` (
  `marresiID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `adresa` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefoni` varchar(20) NOT NULL,
  `dtl` date NOT NULL,
  `tipiGjakut` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marresi`
--

INSERT INTO `marresi` (`marresiID`, `emri`, `mbiemri`, `adresa`, `email`, `telefoni`, `dtl`, `tipiGjakut`) VALUES
(2, 'Besim', 'Jashari', 'Avni Rrustemi', 'besimi@gmail.com', '049858494', '1968-05-13', 'B-'),
(3, 'Anton', 'Ceta', 'Hurlug Rrema', 'antoni@gmail.com', '04532414', '1980-07-19', '0-'),
(6, 'Kruela', 'Sefedini', 'Anton Zeka', 'feridi@gmail.com', '0412411', '2000-03-11', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `stafi_mjeksor`
--

CREATE TABLE `stafi_mjeksor` (
  `mjekuID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `adresa` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefoni` varchar(20) NOT NULL,
  `dtl` date NOT NULL,
  `roli` bit(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafi_mjeksor`
--

INSERT INTO `stafi_mjeksor` (`mjekuID`, `emri`, `mbiemri`, `adresa`, `email`, `telefoni`, `dtl`, `roli`, `password`) VALUES
(1, 'Ahmet', 'Ademi', 'Avni Rrustemi', 'ahmedi@gmail.com', '04544342', '1965-05-28', b'1', '123456'),
(2, 'Faik', 'Bllata', 'Edmond Imeri', 'faiku@gmail.com', '04985858', '1960-03-20', b'1', '123456'),
(3, 'Dren', 'Boshnjaku', 'Lirie Imeri', 'dreni@gmail.com', '04985858', '1990-04-20', b'0', '123456'),
(5, 'Labrik', 'Halili', 'Kadri Imeri', 'labriku@gmail.com', '049307029', '1997-04-20', b'0', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `transaksioni`
--

CREATE TABLE `transaksioni` (
  `transID` int(11) NOT NULL,
  `mjekuID` int(11) NOT NULL,
  `dataDhenies` datetime NOT NULL,
  `sasia` decimal(11,0) DEFAULT NULL,
  `marresiID` int(11) NOT NULL,
  `gjakuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksioni`
--

INSERT INTO `transaksioni` (`transID`, `mjekuID`, `dataDhenies`, `sasia`, `marresiID`, `gjakuID`) VALUES
(3, 2, '2021-11-25 15:38:19', '0', 2, 2),
(4, 3, '2021-11-25 15:38:19', '0', 3, 3),
(7, 5, '2021-11-29 00:00:00', '0', 6, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dhurimi_i_gjakut`
--
ALTER TABLE `dhurimi_i_gjakut`
  ADD PRIMARY KEY (`gjakuID`),
  ADD KEY `dhurimi_i_gjakut_ibfk_1` (`dhuruesiID`);

--
-- Indexes for table `dhuruesi`
--
ALTER TABLE `dhuruesi`
  ADD PRIMARY KEY (`dhuruesiID`);

--
-- Indexes for table `marresi`
--
ALTER TABLE `marresi`
  ADD PRIMARY KEY (`marresiID`);

--
-- Indexes for table `stafi_mjeksor`
--
ALTER TABLE `stafi_mjeksor`
  ADD PRIMARY KEY (`mjekuID`);

--
-- Indexes for table `transaksioni`
--
ALTER TABLE `transaksioni`
  ADD PRIMARY KEY (`transID`),
  ADD UNIQUE KEY `gjakuID` (`gjakuID`),
  ADD KEY `transaksioni_ibfk_1` (`mjekuID`),
  ADD KEY `transaksioni_ibfk_2` (`marresiID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dhurimi_i_gjakut`
--
ALTER TABLE `dhurimi_i_gjakut`
  MODIFY `gjakuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dhuruesi`
--
ALTER TABLE `dhuruesi`
  MODIFY `dhuruesiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `marresi`
--
ALTER TABLE `marresi`
  MODIFY `marresiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stafi_mjeksor`
--
ALTER TABLE `stafi_mjeksor`
  MODIFY `mjekuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksioni`
--
ALTER TABLE `transaksioni`
  MODIFY `transID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dhurimi_i_gjakut`
--
ALTER TABLE `dhurimi_i_gjakut`
  ADD CONSTRAINT `dhurimi_i_gjakut_ibfk_1` FOREIGN KEY (`dhuruesiID`) REFERENCES `dhuruesi` (`dhuruesiID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marresi`
--
ALTER TABLE `marresi`
  ADD CONSTRAINT `marresi_id` FOREIGN KEY (`marresiID`) REFERENCES `transaksioni` (`marresiID`);

--
-- Constraints for table `transaksioni`
--
ALTER TABLE `transaksioni`
  ADD CONSTRAINT `transaksioni_ibfk_1` FOREIGN KEY (`mjekuID`) REFERENCES `stafi_mjeksor` (`mjekuID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksioni_ibfk_2` FOREIGN KEY (`marresiID`) REFERENCES `marresi` (`marresiID`),
  ADD CONSTRAINT `transaksioni_ibfk_3` FOREIGN KEY (`gjakuID`) REFERENCES `dhurimi_i_gjakut` (`gjakuID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksioni_id` FOREIGN KEY (`marresiID`) REFERENCES `marresi` (`marresiID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
