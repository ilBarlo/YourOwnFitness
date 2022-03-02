-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 17, 2021 alle 12:09
-- Versione del server: 10.1.26-MariaDB
-- Versione PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourownfitnessdb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `allenamenti_attrezzi`
--

CREATE TABLE `allenamenti_attrezzi` (
  `nome_allenamento` varchar(20) NOT NULL,
  `id_attrezzo` int(5) NOT NULL,
  `serie` int(2) NOT NULL,
  `ripetizioni` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `allenamenti_esercizi`
--

CREATE TABLE `allenamenti_esercizi` (
  `nome_allenamento` varchar(20) NOT NULL,
  `nome_esercizio` varchar(20) NOT NULL,
  `serie` int(2) NOT NULL,
  `ripetizioni` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `allenamento`
--

CREATE TABLE `allenamento` (
  `nome` varchar(20) NOT NULL,
  `durata` int(2) NOT NULL,
  `tipo` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `attrezzo`
--

CREATE TABLE `attrezzo` (
  `id` int(5) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `peso` int(3) DEFAULT NULL,
  `descrizione` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `dieta`
--

CREATE TABLE `dieta` (
  `nome` varchar(20) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `dieta_pasti`
--

CREATE TABLE `dieta_pasti` (
  `nome_dieta` varchar(20) NOT NULL,
  `nome_pasto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `esercizio`
--

CREATE TABLE `esercizio` (
  `nome` varchar(20) NOT NULL,
  `descrizione` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `pasto`
--

CREATE TABLE `pasto` (
  `nome` varchar(20) NOT NULL,
  `ricetta` varchar(50) DEFAULT NULL,
  `calorie` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `sesso` varchar(1) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `obiettivo` varchar(50) DEFAULT NULL,
  `imc` double DEFAULT NULL,
  `freq_all` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti_allenamenti`
--

CREATE TABLE `utenti_allenamenti` (
  `email_utente` varchar(30) NOT NULL,
  `nome_allenamento` varchar(20) NOT NULL,
  `g_s` int(1) DEFAULT NULL,
  `progresso` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti_diete`
--

CREATE TABLE `utenti_diete` (
  `email_utente` varchar(30) NOT NULL,
  `nome_dieta` varchar(20) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `allenamenti_attrezzi`
--
ALTER TABLE `allenamenti_attrezzi`
  ADD PRIMARY KEY (`nome_allenamento`,`id_attrezzo`);

--
-- Indici per le tabelle `allenamenti_esercizi`
--
ALTER TABLE `allenamenti_esercizi`
  ADD PRIMARY KEY (`nome_allenamento`,`nome_esercizio`);

--
-- Indici per le tabelle `allenamento`
--
ALTER TABLE `allenamento`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `attrezzo`
--
ALTER TABLE `attrezzo`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `dieta`
--
ALTER TABLE `dieta`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `dieta_pasti`
--
ALTER TABLE `dieta_pasti`
  ADD PRIMARY KEY (`nome_dieta`,`nome_pasto`);

--
-- Indici per le tabelle `esercizio`
--
ALTER TABLE `esercizio`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `pasto`
--
ALTER TABLE `pasto`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `utenti_allenamenti`
--
ALTER TABLE `utenti_allenamenti`
  ADD PRIMARY KEY (`email_utente`,`nome_allenamento`);

--
-- Indici per le tabelle `utenti_diete`
--
ALTER TABLE `utenti_diete`
  ADD PRIMARY KEY (`email_utente`,`nome_dieta`,`data_inizio`,`data_fine`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `attrezzo`
--
ALTER TABLE `attrezzo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
