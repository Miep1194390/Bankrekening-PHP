-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 mrt 2023 om 18:38
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankrekeningen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bankrekeningen`
--

CREATE TABLE `bankrekeningen` (
  `id` int(11) NOT NULL,
  `persoon` varchar(255) NOT NULL,
  `rekeningnummer` varchar(255) NOT NULL,
  `saldo` decimal(10,2) NOT NULL,
  `kredietlimiet` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bankrekeningen`
--

INSERT INTO `bankrekeningen` (`id`, `persoon`, `rekeningnummer`, `saldo`, `kredietlimiet`) VALUES
(1, 'awdawd', '5', '1.00', '1.00'),
(2, 'Pik halloddwadwa', '2134', '16.00', '12.00'),
(3, 'Pik halloddwadwa', '2134', '16.00', '12.00'),
(4, 'awdaw', '213', '122.00', '1.00'),
(5, 'Pik halloooo', '444', '333.00', '111.00'),
(6, 'Pik hallo', '1', '544.00', '5.00'),
(7, 'TestTest', '1000', '1000.00', '0.00'),
(8, 'Pik hallo', '1', '12.00', '14.00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bankrekeningen`
--
ALTER TABLE `bankrekeningen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bankrekeningen`
--
ALTER TABLE `bankrekeningen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
