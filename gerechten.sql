-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 apr 2023 om 10:27
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
-- Database: `gerechten`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `heertgerechten`
--

CREATE TABLE `heertgerechten` (
  `id` int(15) NOT NULL,
  `naam` varchar(300) NOT NULL,
  `prijs` varchar(10) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `heertgerechten`
--

INSERT INTO `heertgerechten` (`id`, `naam`, `prijs`, `img`) VALUES
(73, 'steak', '30$', 'inlogimg3.jpg'),
(74, 'Steak met PPQ saus', '20$', 'inlogimg2.jfif');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerker`
--

CREATE TABLE `medewerker` (
  `naam` varchar(70) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `medewerker`
--

INSERT INTO `medewerker` (`naam`, `wachtwoord`) VALUES
('hussein', '1234'),
('tobey', '1234'),
('hussein', '1234'),
('tobey', '1234');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveren`
--

CREATE TABLE `reserveren` (
  `id` int(10) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `mensen` varchar(20) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winkle`
--

CREATE TABLE `winkle` (
  `orderid` int(100) NOT NULL,
  `naam` varchar(200) NOT NULL,
  `prijs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `winkle`
--

INSERT INTO `winkle` (`orderid`, `naam`, `prijs`) VALUES
(73, ' steak', '30$'),
(74, ' Steak met PPQ saus', '20$');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `heertgerechten`
--
ALTER TABLE `heertgerechten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reserveren`
--
ALTER TABLE `reserveren`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `heertgerechten`
--
ALTER TABLE `heertgerechten`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT voor een tabel `reserveren`
--
ALTER TABLE `reserveren`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
