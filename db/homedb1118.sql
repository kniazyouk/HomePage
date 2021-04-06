-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 08:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homedb1118`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `rentDate_db` date NOT NULL,
  `amount_db` int(11) NOT NULL,
  `leftAmount_db` int(11) NOT NULL,
  `paymentForm_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state_db` text COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentgarage`
--

CREATE TABLE `rentgarage` (
  `ID` int(255) NOT NULL,
  `rentDate_db` date NOT NULL,
  `paidAmount_db` int(11) NOT NULL,
  `balanceAmount_db` int(11) NOT NULL,
  `wayToPay_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paymentCondition_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentDate_db` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Only Rent';

--
-- Dumping data for table `rentgarage`
--

INSERT INTO `rentgarage` (`ID`, `rentDate_db`, `paidAmount_db`, `balanceAmount_db`, `wayToPay_db`, `paymentCondition_db`, `notes_db`, `paymentDate_db`) VALUES
(1, '2020-04-01', 0, 1000, 'Ninguno', 'NO Pagado', '', '2021-04-05 20:09:09'),
(2, '2020-05-01', 0, 1000, 'Ninguno', 'NO Pagado', '', '2021-04-05 20:09:13'),
(3, '2021-01-10', 1000, 950, 'Efectivo', 'Pagado', 'Pagara 450bs a mediados del 2021', '2021-04-05 18:41:59'),
(4, '2021-02-10', 1500, 450, 'Efectivo', 'Pagado', 'Pagara 450bs a mediados del 2021', '2021-04-05 18:41:44'),
(5, '2021-03-08', 0, 1950, 'Ninguno', 'NO Pagado', 'Pagara 450bs a mediados del 2021', '2021-04-05 20:09:19'),
(6, '2021-04-10', 0, 1950, '', 'NO Pagado', '', '2021-04-06 05:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `rentpb`
--

CREATE TABLE `rentpb` (
  `ID` int(11) NOT NULL,
  `rentDate_db` date NOT NULL,
  `paidAmount_db` int(11) NOT NULL,
  `balanceAmount_db` int(11) NOT NULL,
  `wayToPay_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paymentCondition_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentDate_db` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentshop`
--

CREATE TABLE `rentshop` (
  `ID` int(255) NOT NULL,
  `rentDate_db` date NOT NULL,
  `paidAmount_db` int(11) NOT NULL,
  `balanceAmount_db` int(11) NOT NULL,
  `wayToPay_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paymentCondition_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentDate_db` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `role` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `role`) VALUES
(1, 'admin'),
(2, 'garag'),
(3, 'store'),
(4, 'PB');

-- --------------------------------------------------------

--
-- Table structure for table `servicegarage`
--

CREATE TABLE `servicegarage` (
  `ID` int(255) NOT NULL,
  `servDate_db` date NOT NULL,
  `balanceLightAmount_db` float NOT NULL,
  `balanceWaterAmount_db` float NOT NULL,
  `paymentCondition_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentDate_db` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `servicegarage`
--

INSERT INTO `servicegarage` (`ID`, `servDate_db`, `balanceLightAmount_db`, `balanceWaterAmount_db`, `paymentCondition_db`, `notes_db`, `paymentDate_db`) VALUES
(1, '2020-10-15', 15, 5, 'NO Pagado', 'Tiene un saldo a favor de 7.10bs', '2021-03-10 05:01:31'),
(2, '2020-11-15', 11.3, 5, 'NO Pagado', '', '2021-03-10 05:19:03'),
(4, '2020-10-01', 15, 5, 'NO Pagado', '', '2021-03-10 06:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `servicepb`
--

CREATE TABLE `servicepb` (
  `ID` int(11) NOT NULL,
  `servDate_db` date NOT NULL,
  `balanceLightAmount_db` float NOT NULL,
  `balanceWaterAmount_db` float NOT NULL,
  `paymentCondition_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentDate_db` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serviceshop`
--

CREATE TABLE `serviceshop` (
  `ID` int(255) NOT NULL,
  `servDate_db` date NOT NULL,
  `balanceLightAmount_db` float NOT NULL,
  `balanceWaterAmount_db` float NOT NULL,
  `paymentCondition_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentDate_db` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(99) NOT NULL,
  `nombre_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_db` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `task_ID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `nombre_db`, `password_db`, `task_ID`) VALUES
(1, 'kniazyouk', '4740919369', 1),
(2, 'garage', '758', 2),
(3, 'store', '861', 3),
(4, 'pb', '473', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentgarage`
--
ALTER TABLE `rentgarage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rentpb`
--
ALTER TABLE `rentpb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rentshop`
--
ALTER TABLE `rentshop`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `servicegarage`
--
ALTER TABLE `servicegarage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `servicepb`
--
ALTER TABLE `servicepb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `serviceshop`
--
ALTER TABLE `serviceshop`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `restrictions` (`task_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rentgarage`
--
ALTER TABLE `rentgarage`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rentpb`
--
ALTER TABLE `rentpb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentshop`
--
ALTER TABLE `rentshop`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servicegarage`
--
ALTER TABLE `servicegarage`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servicepb`
--
ALTER TABLE `servicepb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceshop`
--
ALTER TABLE `serviceshop`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `restrictions` FOREIGN KEY (`task_ID`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
