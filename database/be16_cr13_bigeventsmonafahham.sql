-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Aug 2022 um 16:18
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be16_cr13_bigeventsmonafahham`
--
CREATE DATABASE IF NOT EXISTS `be16_cr13_bigeventsmonafahham` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be16_cr13_bigeventsmonafahham`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220805140207', '2022-08-05 16:02:42', 119);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `start_time` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_number` int(11) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `event_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `start_time`, `description`, `picture`, `capacity`, `email`, `phone_number`, `city`, `street_name`, `house_number`, `zip_code`, `event_url`, `event_type`) VALUES
(1, 'Valery Ponomarev & Franz Hackl Quintet', '2022-08-11 20:30:00', '2022-08-04 16:00:00', 'Valery Ponomarev, Franz Hackl: trumpet, fluegelhorn\r\nChristian Wegscheider: piano\r\nDragan Trajkovski: bass\r\nWolfgang Rainer: drums', 'music4.jpg', 1200, 'porgy@porgy.at', 431512881, 'Vienna', 'Riemergasse', 11, 1010, 'porgy.at/concert_info', 'Music'),
(2, 'Kahlenberg Forest Rope Park\r\n', '2022-10-31 15:00:00', '2022-08-31 18:00:00', 'Vienna\'s most popular local mountain - Kahlenberg - now has yet another attraction: in the Kahlenberg Forest Rope Park, you can climb, hang, swing, balance and just have fun.\r\nThe Kahlenberg Forest Rope Park is amongst the biggest of its kind anywhere in ', 'sport5.jpg', 100, 'office@waldseilpark.at', 431320047, 'Vienna', 'Josefsdorf', 47, 1190, 'http://www.josefinenhuette.at/', 'Sport'),
(3, 'Internationally celebrated musical thriller', '2022-08-04 19:00:00', '2022-08-01 16:00:00', 'Rebecca celebrated its premiere in 2006 at the Raimund Theater – now the musical finally returns to Vienna. The two most successful German-speaking musical writers of all time, Michael Kunze & Sylvester Levay (\"Elisabeth\", \"Mozart!\") have created a great ', 'theater3.jpg', 200, 'info@vbw.at', 43158885, 'Vienna', 'Wallgasse ', 18, 1060, 'http://www.musicalvienna.at', 'Theater'),
(4, 'Kammeroper', '2022-08-11 17:00:00', '2022-08-01 17:00:00', 'The second performance venue of the Theater an der Wien is the Kammeroper – an ideal setting for smaller works that blend music and theater. Highly talented next-generation artists appear on stage here alongside established actors. The audience and perfor', 'theater2.jpg', 150, 'office@halleneg.at', 431524332, 'Vienna', 'Museumsplatz', 1, 1070, 'http://www.halleneg.at', 'Theater'),
(5, 'Yoga in the Museum', '2022-08-08 12:00:00', '2022-07-02 12:00:00', 'Only here can you take up the unique opportunity to practice yoga in the ceremonial rooms of the Albertina. Once a month, you\'re invited to attend the yoga session of MISS YOGA – no prior knowledge required. After the physical training follows the spiritu', 'sport4.jpg', 60, 'info@belvedere.at', 43179557, 'Vienna', 'Prinz-Eugen-Straße', 27, 1030, 'http://www.belvedere.at', 'Sport'),
(6, 'Performances of every kind', '2022-08-05 21:30:00', '2022-06-05 17:00:00', 'On Vienna\'s many stages and in the city\'s museums, ImPulsTanz 2022 will sparkle with its unique range of activities: Highlights of dance history, revivals and premieres can be seen, from large stage shows to intimate formats, from icons to newcomers. Need', 'music5.jpg', 200, 'tickets@sargfabrik.at', 439889811, 'Vienna', 'Goldschlagstraße ', 10, 1010, 'http://www.sargfabrik.at', 'Music'),
(7, 'Movies from 1949 to 2001', '2022-08-03 16:00:00', '2022-07-03 16:00:00', 'The Third Man (1949): Thriller about the penicillin smuggler Harry Lime (Orson Welles) in a shattered post-war Vienna with world-famous title melody played on the zither.\r\nSissi trilogy (1955-57): Romy Schneider as the young empress in the grinders of the', 'movie.jpg', 300, 'tickets@movies.at', 431587262, 'Vienna', 'Mariahilfer Strasse', 57, 1060, 'http://www.haydnkino.at', 'Movie'),
(8, 'Music Film Festival at City Hall Square', '2022-08-18 17:30:00', '2022-08-01 17:30:00', 'For 65 days, City Hall Square is once again a pulsating open-air meeting point: The Music Film Festival presents musical highlights of opera, classical, pop, and rock as well as culinary delights from July 2. That\'s summer in Vienna. Free admission!\r\nIt i', 'movie2.jpg', 2000, 'ticket@festival.com', 431320052, 'Vienna', 'Rathausplatz', 3, 1010, 'www.filmfestival-rathausplatz.at', 'Movie'),
(9, 'Extensive sports offering for LGBT', '2022-08-22 13:00:00', '2022-06-22 13:00:00', 'The oldest and biggest LGBT sports association in Austria is Aufschlag Wien. The Vienna Beach Trophy, the biggest LGBT beach volleyball tournament in Europe, is held every year in August. The Vienna Valentine Swim Tournament is organized by the Kraulquapp', 'sport1.jpg', 150, 'champions.vienna@marriotthotels.com', 431515188, 'Vienna', 'Donauinsel', 5, 1220, 'https://www.champions-vienna.com', 'Sport'),
(10, 'Austrian Theatermuseum', '2022-08-15 20:30:00', '2022-05-15 20:30:00', 'Here, in the baroque Lobkowitz Palace near the Imperial Palace, highlights of the magic of stage are caught forever. More than 1,000 stage models, 600 costumes and props from three centuries, more than 100,000 drawings and prints as well as more than 700,', 'theatermuseum.jpg', 200, 'info@theatermuseum.at', 43152524, 'Vienna', 'Lobkowitzplatz', 2, 1010, 'http://www.theatermuseum.at', 'Theater'),
(11, 'Classical, jazz, musical, and more', '2022-08-17 16:00:00', '2022-07-17 23:00:00', 'The legendary \"Havana Moon\" concert (2016) of the Rolling Stones can be seen, as can the cult band Queen giving its memorable performance of \"Hungarian Rhapsody\" in Budapest in 1986, and David Bowie, who would have celebrated his 75th birthday this year. ', 'music2.jpg', 350, 'stadtinformations@post.wien.gv.at', 43140004, 'Vienna', 'Karlsplatz', 1, 1010, 'http://www.wien.gv.at', 'Music'),
(12, 'Vienna Orchester', '2022-08-12 00:00:00', '2022-08-04 00:00:00', 'Vienna Orchester', 'music3.jpg', 500, 'orchester@mail.com', 2147483647, 'Lower Austria', 'Karlsplatz', 5, 1010, 'http://www.orchester.com', 'Music'),
(15, 'Big house party', '2022-08-01 00:00:00', '2022-07-06 00:00:00', 'Big house party', 'theatermuseum.jpg', 123, 'monafaham@yahoo.com', 2147483647, 'Graz', 'Karlsplatz', 5, 1010, 'http://www.house.com', 'Theater'),
(20, 'DonauInselfest', '2022-08-03 00:00:00', '2022-08-10 00:00:00', 'sdcvxdvdvfdfsv', 'sport5.jpg', 3, 'monafahamv@yahoo.com', 2147483647, 'Upper Austria', 'Karlsplatzs', 5, 1010, 'http://www.orcshester.com', 'Sport');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT für Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
