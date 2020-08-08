-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Aug 2020 um 19:00
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webshopdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_bestellliste`
--

CREATE TABLE `t_bestellliste` (
  `Pos` int(11) NOT NULL,
  `FK_Prod_ID` int(11) NOT NULL,
  `FK_Re_Nr` int(11) NOT NULL,
  `Menge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_kunden`
--

CREATE TABLE `t_kunden` (
  `K_Nr` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Vorname` varchar(30) NOT NULL,
  `Adresse` varchar(45) NOT NULL,
  `FK_PLZ` varchar(5) NOT NULL,
  `E-Mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_plz`
--

CREATE TABLE `t_plz` (
  `PLZ` varchar(5) NOT NULL,
  `Ort` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_produkte`
--

CREATE TABLE `t_produkte` (
  `Prod_ID` int(11) NOT NULL,
  `Produkt_Name` varchar(20) NOT NULL,
  `Anzeige_Name` varchar(30) NOT NULL,
  `Kategorie` varchar(10) NOT NULL,
  `Nettopreis` float NOT NULL,
  `Lagerbestand` int(11) NOT NULL,
  `Sales` tinyint(1) NOT NULL,
  `Beschreibung` text DEFAULT NULL,
  `Kalorien` int(11) DEFAULT NULL,
  `Fett` float DEFAULT NULL,
  `Kohlenhydrate` float DEFAULT NULL,
  `Zucker` float DEFAULT NULL,
  `Protein` float DEFAULT NULL,
  `Herkunft` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `t_produkte`
--

INSERT INTO `t_produkte` (`Prod_ID`, `Produkt_Name`, `Anzeige_Name`, `Kategorie`, `Nettopreis`, `Lagerbestand`, `Sales`, `Beschreibung`, `Kalorien`, `Fett`, `Kohlenhydrate`, `Zucker`, `Protein`, `Herkunft`) VALUES
(1, 'Tomaten', 'Tomaten', 'Frucht', 0.21, 10, 0, 'Frische Rispentomaten, Stückpreis', 18, 0.2, 3.9, 2.6, 0.9, 'NLD'),
(2, 'Trauben_hell', 'Trauben hell', 'Frucht', 1.66, 5, 1, 'Trauben hell, 250g Packung', 76, 0.4, 17, 14, 0.5, 'GRC'),
(3, 'Banane', 'Banane', 'Frucht', 0.45, 25, 0, 'Vorgereifte Bananen, Stückpreis', 93, 0.18, 20, 20, 1.15, 'PAN'),
(4, 'Gurke', 'Gurke', 'Obst', 0.38, 2, 0, 'Knackige Salatgurken, Stückpreis', 16, 0.1, 3.6, 1.7, 0.7, 'NLD'),
(5, 'Zitronen', 'Zitronen', 'Frucht', 1.31, 100, 1, 'Saftige Zitronen, 500g Netz', 29, 0.3, 9, 2.5, 1.1, 'GRC'),
(6, 'Avocado', 'Avocado', 'Exotisch', 1, 25, 0, 'Vorgereifte Hass Avocado, Stückpreis', 160, 15, 9, 0.7, 2, 'PER'),
(7, 'Paprika_bunt', 'Bunte Paprika', 'Obst', 1.24, 7, 0, 'Frische bunte Paprika, 500g Packung', 225, 22, 1.6, 0.4, 4.5, 'ESP'),
(8, 'Lauchzwiebeln', 'Lauchzwiebeln', 'Gemuese', 0.31, 11, 0, 'Frische Lauchzwiebeln/ Frühlingszwiebeln, Bund', 34, 0.4, 7, 2.2, 1.9, 'DEU'),
(9, 'Suesskartoffel', 'Süßkartoffel', 'Exotisch', 0.88, 60, 1, 'Süßkartoffeln ideal für den Backofen, Stückpreis', 86, 0.1, 20, 4.2, 1.6, 'BRA'),
(10, 'Wassermelone', 'Wassermelone', 'Obst', 5.75, 85, 1, 'Fruchtig süße Wassermelone, ca. 6kg', 30, 0.2, 8, 6, 0.6, 'GRC'),
(11, 'Galiamelone', 'Galiamelone', 'Exotisch', 1.03, 55, 1, 'Süße Galiamelone, Stückpreis', 26, 0.1, 5.7, 4, 0.4, 'ISR'),
(12, 'Zwiebeln', 'Gemüsezwiebeln', 'Gemuese', 1.11, 22, 0, 'Gemüsezwiebeln, 1kg Netz', 40, 0.1, 9, 4.2, 1.1, 'DEU'),
(13, 'Knoblauch', 'Knoblauch', 'Gemuese', 1.04, 7, 0, 'Knoblauch, 250g Netz', 145, 0.1, 28.4, 11.7, 6, 'ITA'),
(14, 'Kartoffeln', 'Kartoffeln', 'Gemuese', 1.42, 12, 0, 'Kartoffeln festkochen, 2,5kg Netz', 69, 0, 14, 2, 2, 'DEU');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_rechnung`
--

CREATE TABLE `t_rechnung` (
  `Re_Nr` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `FK_K_Nr` int(11) NOT NULL,
  `Zahlungsart` varchar(20) NOT NULL,
  `Versandart` varchar(10) NOT NULL,
  `Versand_Name` varchar(30) NOT NULL,
  `Versand_Vorname` varchar(30) NOT NULL,
  `Versand_Strasse` varchar(40) NOT NULL,
  `Versand_PLZ` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `t_bestellliste`
--
ALTER TABLE `t_bestellliste`
  ADD PRIMARY KEY (`Pos`),
  ADD KEY `FK_bestelliste_rechnung` (`FK_Re_Nr`) USING BTREE,
  ADD KEY `FK_bestelliste_produkt` (`FK_Prod_ID`) USING BTREE;

--
-- Indizes für die Tabelle `t_kunden`
--
ALTER TABLE `t_kunden`
  ADD PRIMARY KEY (`K_Nr`),
  ADD KEY `FK_plz_kunde` (`FK_PLZ`) USING BTREE;

--
-- Indizes für die Tabelle `t_plz`
--
ALTER TABLE `t_plz`
  ADD PRIMARY KEY (`PLZ`);

--
-- Indizes für die Tabelle `t_produkte`
--
ALTER TABLE `t_produkte`
  ADD PRIMARY KEY (`Prod_ID`);

--
-- Indizes für die Tabelle `t_rechnung`
--
ALTER TABLE `t_rechnung`
  ADD PRIMARY KEY (`Re_Nr`),
  ADD KEY `FK_kunde_rechnung` (`FK_K_Nr`) USING BTREE,
  ADD KEY `FK_rechnung_PLZ` (`Versand_PLZ`) USING BTREE;

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `t_bestellliste`
--
ALTER TABLE `t_bestellliste`
  MODIFY `Pos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `t_kunden`
--
ALTER TABLE `t_kunden`
  MODIFY `K_Nr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `t_produkte`
--
ALTER TABLE `t_produkte`
  MODIFY `Prod_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `t_rechnung`
--
ALTER TABLE `t_rechnung`
  MODIFY `Re_Nr` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `t_bestellliste`
--
ALTER TABLE `t_bestellliste`
  ADD CONSTRAINT `bestellliste_produkt_FK` FOREIGN KEY (`FK_Prod_ID`) REFERENCES `t_produkte` (`Prod_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bestellliste_rechnung_FK` FOREIGN KEY (`FK_Re_Nr`) REFERENCES `t_rechnung` (`Re_Nr`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `t_kunden`
--
ALTER TABLE `t_kunden`
  ADD CONSTRAINT `plz_kunde_FK` FOREIGN KEY (`FK_PLZ`) REFERENCES `t_plz` (`PLZ`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `t_rechnung`
--
ALTER TABLE `t_rechnung`
  ADD CONSTRAINT `rechnung_Versand_plz_FK` FOREIGN KEY (`Versand_PLZ`) REFERENCES `t_plz` (`PLZ`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rechnung_kunde_FK` FOREIGN KEY (`FK_K_Nr`) REFERENCES `t_kunden` (`K_Nr`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
