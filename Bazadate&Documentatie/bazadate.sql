-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 23, 2021 la 09:08 PM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `bazadate`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tabel1`
--

CREATE TABLE `tabel1` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Parola` varchar(100) NOT NULL,
  `Nume` varchar(100) NOT NULL,
  `Comanda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `tabel1`
--

INSERT INTO `tabel1` (`ID`, `Email`, `Parola`, `Nume`, `Comanda`) VALUES
(69, 'posdaresculg@gmail.com', '123', 'Mihai Posdarescu', 'Pizza Margerita+Pizza Diavolo+Pizza Penne+Pizza Margerita+Pizza Diavolo+Pizza Casei'),
(70, 'mihai01@gmail.com', '1234', 'Mikai', ''),
(71, 'daniel@yahoo.com', '123', 'Dani', ''),
(72, 'nichitastan@gmail.com', 'parola123', 'Nichita', ''),
(73, 'floriplumb@gmail.com', 'oparola', 'Plumb', '');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `tabel1`
--
ALTER TABLE `tabel1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `tabel1`
--
ALTER TABLE `tabel1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
