--
-- Tabellenstruktur für Tabelle `raume`
--

CREATE TABLE `raume` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Ebene` varchar(255) NOT NULL,
  `belegt` int(11) NOT NULL
)

--
-- Daten für Tabelle `raume`
--

INSERT INTO `raume` (`id`, `Name`, `Ebene`, `belegt`) VALUES
(1, 'TR01', 'EG', 0),
(2, 'TR02', 'EG', 0),
(3, 'TR03', 'EG', 0),
(4, 'TR04', '1.OG', 0),
(5, 'TR05', '1.OG', 0),
(6, 'TR06', '1.OG', 0),
(7, 'TR07', '2.OG', 1),
(8, 'TR08', '2.OG', 1),
(9, 'TR09', '2.OG', 1);

--
-- Indizes der Tabellen
--

--
-- Indizes für die Tabelle `raume`
--
ALTER TABLE `raume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `raume`
--
ALTER TABLE `raume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;