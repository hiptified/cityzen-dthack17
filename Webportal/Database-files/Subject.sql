-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 21. Sep 2017 um 11:10
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
-- Tabellenstruktur für Tabelle `Subject`
--

CREATE TABLE IF NOT EXISTS `Subject` (
  `SubjectId` int(11) NOT NULL AUTO_INCREMENT,
  `BeaconId` varchar(255) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `ImageLink` varchar(100) NOT NULL,
  PRIMARY KEY (`SubjectId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `Subject`
--

INSERT INTO `Subject` (`SubjectId`, `BeaconId`, `Subject`, `Description`, `ImageLink`) VALUES
(1, 'jkgjalsdjgajsd', 'Parkbank an der Bushaltestelle \"Am Klostergarten\"?!', 'An der Bushaltestelle „Am Klostergarten“ gibt es momentan keine Parkbank. Zwar wurde bereits 1987 eine Bank installiert, diese musste jedoch aufgrund von Schäden wieder abgebaut werden. Nun überlegt die Stadtverwaltung an derselben Stelle eine neue, moderne Parkbank aus rostfreiem Edelstahl zu errichten. \r\n<br/><br/>\r\n<p><strong>Soll an der Bushaltstelle „Am Klostergarten“ eine neue Parkbank installiert werden?</strong></p>\r\n', '/images/testimage.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
