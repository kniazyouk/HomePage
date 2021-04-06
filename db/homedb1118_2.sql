-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 11:32 PM
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
-- Table structure for table `registgarage`
--

CREATE TABLE `registgarage` (
  `ID` int(255) NOT NULL,
  `rentDate_db` date NOT NULL,
  `payDate_db` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount_db` int(100) NOT NULL,
  `leftAmount_db` int(100) NOT NULL,
  `paymentForm_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `notes_db` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registgarage`
--

INSERT INTO `registgarage` (`ID`, `rentDate_db`, `payDate_db`, `amount_db`, `leftAmount_db`, `paymentForm_db`, `state_db`, `notes_db`) VALUES
(1, '2020-04-15', '2021-02-21 07:20:54', 0, 1000, '', 'NO Pagado', '');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(99) NOT NULL,
  `nombre_db` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_db` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `task_ID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `nombre_db`, `cedula_db`, `task_ID`) VALUES
(1, 'kniazyouk', '4740919369', 1),
(2, 'garage', '758', 2),
(3, 'store', '861', 3),
(4, 'pb', '473', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registgarage`
--
ALTER TABLE `registgarage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `registgarage`
--
ALTER TABLE `registgarage`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
