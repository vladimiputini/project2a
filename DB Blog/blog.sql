-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 jun 2018 om 12:56
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `takenlijst`
--

CREATE TABLE `takenlijst` (
  `titel` varchar(255) NOT NULL,
  `inhoud` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `takenlijst`
--

INSERT INTO `takenlijst` (`titel`, `inhoud`, `datum`, `id`) VALUES
('coderen', 'aan project blog werken', '2018-06-14 19:12:15', 1),
('coderen', 'aan project blog werken', '2018-06-14 19:12:21', 2),
('coderen', 'aan project blog werken', '2018-06-14 19:12:37', 3),
('coderen', 'aan project blog werken', '2018-06-14 19:13:36', 4),
('my', 'nigro', '2018-06-14 19:37:40', 5),
('afk', 'yabdis', '2018-06-14 20:00:57', 6),
('nafijd', 'yess', '2018-06-18 12:26:07', 7),
('sam', 'sima', '2018-06-18 12:28:02', 8);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `takenlijst`
--
ALTER TABLE `takenlijst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `takenlijst`
--
ALTER TABLE `takenlijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
