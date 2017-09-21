-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 21. Sep 2017 um 11:11
-- Server-Version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP-Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bhesse_db3`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `VotingOption`
--

CREATE TABLE IF NOT EXISTS `VotingOption` (
  `VotingOptionId` int(11) NOT NULL AUTO_INCREMENT,
  `VotingText` varchar(255) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  PRIMARY KEY (`VotingOptionId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `VotingOption`
--

INSERT INTO `VotingOption` (`VotingOptionId`, `VotingText`, `SubjectId`) VALUES
(1, 'Ja', 1),
(2, 'Nein', 1),
(3, 'Keine Meinung', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
