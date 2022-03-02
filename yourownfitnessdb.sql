-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 02, 2021 alle 09:29
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_barloserverweb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `allenamenti_attrezzi`
--

CREATE TABLE `allenamenti_attrezzi` (
  `nome_allenamento` varchar(20) NOT NULL,
  `id_attrezzo` int(5) NOT NULL,
  `serie` int(2) NOT NULL,
  `ripetizioni` int(2) NOT NULL,
  `week` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `allenamenti_attrezzi`
--

INSERT INTO `allenamenti_attrezzi` (`nome_allenamento`, `id_attrezzo`, `serie`, `ripetizioni`, `week`) VALUES
('dimagrimento 1', 1, 3, 12, 1),
('dimagrimento 1', 3, 3, 12, 1),
('dimagrimento 1', 4, 3, 12, 1),
('dimagrimento 1', 5, 3, 15, 2),
('dimagrimento 1', 7, 3, 15, 2),
('dimagrimento 1', 8, 3, 12, 1),
('dimagrimento 1', 9, 3, 15, 2),
('dimagrimento 2', 1, 3, 12, 1),
('dimagrimento 2', 2, 3, 15, 2),
('dimagrimento 2', 7, 3, 12, 1),
('dimagrimento 2', 10, 3, 15, 2),
('dimagrimento 2', 17, 3, 15, 2),
('dimagrimento 2', 20, 3, 12, 1),
('forma 1', 6, 3, 12, 1),
('forma 1', 13, 3, 12, 1),
('forma 1', 14, 3, 12, 1),
('forma 1', 17, 3, 15, 2),
('forma 1', 21, 3, 15, 2),
('forma 1', 25, 3, 15, 2),
('forma 2', 6, 3, 8, 1),
('forma 2', 13, 3, 8, 1),
('forma 2', 14, 3, 8, 1),
('forma 2', 17, 3, 10, 2),
('forma 2', 21, 3, 10, 2),
('forma 2', 25, 3, 10, 2),
('potenziamento 1', 3, 3, 15, 2),
('potenziamento 1', 5, 3, 12, 1),
('potenziamento 1', 7, 3, 15, 2),
('potenziamento 1', 10, 3, 15, 2),
('potenziamento 1', 13, 3, 15, 2),
('potenziamento 1', 17, 3, 12, 1),
('potenziamento 1', 18, 3, 12, 1),
('potenziamento 1', 20, 3, 12, 1),
('potenziamento 1', 22, 3, 12, 1),
('potenziamento 1', 23, 3, 15, 2),
('potenziamento 1', 25, 3, 15, 2),
('potenziamento 2', 3, 3, 15, 2),
('potenziamento 2', 5, 3, 12, 1),
('potenziamento 2', 7, 3, 15, 2),
('potenziamento 2', 18, 3, 12, 1),
('potenziamento 2', 22, 3, 12, 1),
('potenziamento 2', 23, 3, 15, 2),
('scheda 1', 6, 3, 8, 1),
('scheda 1', 13, 3, 8, 1),
('scheda 1', 14, 3, 8, 1),
('scheda 1', 17, 3, 10, 2),
('scheda 1', 21, 3, 10, 2),
('scheda 1', 25, 3, 10, 2),
('scheda 2', 9, 3, 8, 1),
('scheda 2', 11, 3, 8, 1),
('scheda 2', 15, 3, 8, 1),
('scheda 2', 16, 3, 10, 2),
('scheda 2', 23, 3, 10, 2),
('scheda 2', 24, 3, 10, 2),
('scheda 3', 3, 3, 15, 2),
('scheda 3', 5, 3, 12, 1),
('scheda 3', 7, 3, 15, 2),
('scheda 3', 18, 3, 12, 1),
('scheda 3', 22, 3, 12, 1),
('scheda 3', 23, 3, 15, 2),
('scheda 4', 3, 3, 15, 2),
('scheda 4', 7, 3, 15, 2),
('scheda 4', 9, 3, 12, 1),
('scheda 4', 12, 3, 12, 1),
('scheda 4', 14, 3, 12, 1),
('scheda 4', 23, 3, 15, 2),
('scheda 5', 9, 3, 8, 1),
('scheda 5', 11, 3, 8, 1),
('scheda 5', 15, 3, 8, 1),
('scheda 5', 16, 3, 10, 2),
('scheda 5', 23, 3, 10, 2),
('scheda 5', 24, 3, 10, 2),
('scheda 6', 3, 3, 15, 2),
('scheda 6', 7, 3, 15, 2),
('scheda 6', 9, 3, 12, 1),
('scheda 6', 12, 3, 12, 1),
('scheda 6', 14, 3, 12, 1),
('scheda 6', 23, 3, 15, 2),
('scheda 7', 2, 3, 12, 1),
('scheda 7', 3, 3, 15, 2),
('scheda 7', 4, 3, 12, 1),
('scheda 7', 13, 3, 15, 2),
('scheda 7', 17, 3, 15, 2),
('scheda 7', 19, 3, 12, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `allenamenti_esercizi`
--

CREATE TABLE `allenamenti_esercizi` (
  `nome_allenamento` varchar(20) NOT NULL,
  `nome_esercizio` varchar(20) NOT NULL,
  `serie` int(2) NOT NULL,
  `ripetizioni` int(2) NOT NULL,
  `week` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `allenamenti_esercizi`
--

INSERT INTO `allenamenti_esercizi` (`nome_allenamento`, `nome_esercizio`, `serie`, `ripetizioni`, `week`) VALUES
('dimagrimento 1', 'Affondi', 3, 12, 1),
('dimagrimento 1', 'Aperture laterali', 3, 15, 2),
('dimagrimento 1', 'Piegamenti', 3, 15, 2),
('dimagrimento 1', 'Squat bulgaro', 3, 12, 1),
('dimagrimento 1', 'Stretching braccia', 3, 15, 2),
('dimagrimento 1', 'Trazioni presa dritt', 3, 12, 1),
('dimagrimento 2', 'Aperture laterali', 3, 12, 1),
('dimagrimento 2', 'Bear crawl', 3, 15, 2),
('dimagrimento 2', 'Piegamenti', 3, 12, 1),
('dimagrimento 2', 'Squat bulgaro', 3, 15, 2),
('dimagrimento 2', 'Stretching braccia', 3, 15, 2),
('dimagrimento 2', 'Trazioni presa inver', 3, 12, 1),
('forma 1', 'Affondi', 3, 15, 2),
('forma 1', 'Estensioni mani', 3, 12, 1),
('forma 1', 'Push up', 3, 15, 2),
('forma 1', 'Squat', 3, 15, 2),
('forma 1', 'Stretching braccia', 3, 12, 1),
('forma 1', 'Trazioni presa inver', 3, 12, 1),
('forma 2', 'Aperture laterali', 3, 8, 1),
('forma 2', 'Bear crawl', 3, 10, 2),
('forma 2', 'Squat', 3, 10, 2),
('forma 2', 'Squat bulgaro', 3, 8, 1),
('forma 2', 'Trazioni presa dritt', 3, 8, 1),
('forma 2', 'Trazioni presa inver', 3, 10, 2),
('legpocalypse', 'Affondi', 3, 12, 1),
('legpocalypse', 'Aperture laterali', 3, 15, 2),
('legpocalypse', 'Piegamenti', 3, 15, 2),
('legpocalypse', 'Skip alto', 3, 12, 1),
('legpocalypse', 'Squat', 3, 12, 1),
('legpocalypse', 'Squat bulgaro', 3, 15, 2),
('potenziamento 1', 'Affondi', 3, 15, 2),
('potenziamento 1', 'Aperture laterali', 3, 12, 1),
('potenziamento 1', 'Piegamenti plus', 3, 12, 1),
('potenziamento 1', 'Squat bulgaro', 3, 12, 1),
('potenziamento 1', 'Stretching braccia', 3, 15, 2),
('scheda 1', 'Affondi', 3, 10, 2),
('scheda 1', 'Aperture laterali', 3, 8, 1),
('scheda 1', 'Bear crawl', 3, 8, 1),
('scheda 1', 'Jumping jack', 3, 10, 2),
('scheda 1', 'Push up', 3, 10, 2),
('scheda 1', 'Trazioni presa inver', 3, 8, 1),
('scheda 10', 'Aperture laterali', 3, 12, 1),
('scheda 10', 'Bear crawl', 3, 12, 1),
('scheda 10', 'Piegamenti', 3, 12, 1),
('scheda 10', 'Piegamenti plus', 3, 15, 2),
('scheda 10', 'Stretching braccia', 3, 15, 2),
('scheda 10', 'Trazioni presa inver', 3, 15, 2),
('scheda 2', 'Aperture laterali', 3, 8, 1),
('scheda 2', 'Estensioni busto', 3, 10, 2),
('scheda 2', 'Flessioni busto', 3, 8, 1),
('scheda 2', 'Squat bulgaro', 3, 8, 1),
('scheda 2', 'Trazioni presa dritt', 3, 10, 2),
('scheda 2', 'Trazioni presa inver', 3, 10, 2),
('scheda 3', 'Aperture laterali', 3, 15, 2),
('scheda 3', 'Estensioni busto', 3, 12, 1),
('scheda 3', 'Jumping jack', 3, 15, 2),
('scheda 3', 'Squat bulgaro', 3, 12, 1),
('scheda 3', 'Stretching polpacci', 3, 15, 2),
('scheda 3', 'Trazioni presa dritt', 3, 12, 1),
('scheda 4', 'Affondi', 3, 15, 2),
('scheda 4', 'Estensioni busto', 3, 15, 2),
('scheda 4', 'Estensioni mani', 3, 12, 1),
('scheda 4', 'Piegamenti', 3, 12, 1),
('scheda 4', 'Stretching polpacci', 3, 15, 2),
('scheda 4', 'Trazioni presa dritt', 3, 12, 1),
('scheda 5', 'Affondi', 3, 10, 2),
('scheda 5', 'Estensioni busto', 3, 8, 1),
('scheda 5', 'Estensioni mani', 3, 8, 1),
('scheda 5', 'Squat bulgaro', 3, 8, 1),
('scheda 5', 'Trazioni presa dritt', 3, 10, 2),
('scheda 5', 'Trazioni presa inver', 3, 10, 2),
('scheda 6', 'Aperture laterali', 3, 12, 1),
('scheda 6', 'Bear crawl', 3, 15, 2),
('scheda 6', 'Flessioni busto', 3, 12, 1),
('scheda 6', 'Jumping jack', 3, 12, 1),
('scheda 6', 'Squat bulgaro', 3, 15, 2),
('scheda 6', 'Stretching polpacci', 3, 15, 2),
('scheda 7', 'Affondi', 3, 12, 1),
('scheda 7', 'Bear crawl', 3, 15, 2),
('scheda 7', 'Estensioni busto', 3, 15, 2),
('scheda 7', 'Flessioni busto', 3, 12, 1),
('scheda 7', 'Squat bulgaro', 3, 12, 1),
('scheda 7', 'Stretching polpacci', 3, 15, 2),
('scheda 8', 'Affondi', 3, 12, 1),
('scheda 8', 'Aperture laterali', 3, 12, 1),
('scheda 8', 'Bear crawl', 3, 12, 1),
('scheda 8', 'Piegamenti', 3, 15, 2),
('scheda 8', 'Stretching braccia', 3, 15, 2),
('scheda 8', 'Trazioni presa dritt', 3, 15, 2),
('scheda 9', 'Affondi', 3, 12, 1),
('scheda 9', 'Bear crawl', 3, 12, 1),
('scheda 9', 'Push up', 3, 15, 2),
('scheda 9', 'Stretching braccia', 3, 15, 2),
('scheda 9', 'Trazioni presa dritt', 3, 15, 2),
('scheda 9', 'Trazioni presa inver', 3, 12, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `allenamento`
--

CREATE TABLE `allenamento` (
  `nome` varchar(20) NOT NULL,
  `durata` int(2) NOT NULL,
  `tipo` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `allenamento`
--

INSERT INTO `allenamento` (`nome`, `durata`, `tipo`) VALUES
('dimagrimento 1', 3, 'cardio'),
('dimagrimento 2', 3, 'cardio'),
('forma 1', 3, 'pesi'),
('forma 2', 3, 'pesi'),
('legpocalypse', 3, 'corpo libero'),
('potenziamento 1', 3, 'pesi'),
('potenziamento 2', 3, 'pesi'),
('scheda 1', 3, 'pesi'),
('scheda 10', 3, 'corpo libero'),
('scheda 2', 3, 'pesi'),
('scheda 3', 3, 'cardio'),
('scheda 4', 3, 'cardio'),
('scheda 5', 3, 'pesi'),
('scheda 6', 3, 'pesi'),
('scheda 7', 3, 'pesi'),
('scheda 8', 3, 'corpo libero'),
('scheda 9', 3, 'corpo libero');

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

--
-- Dump dei dati per la tabella `attrezzo`
--

INSERT INTO `attrezzo` (`id`, `nome`, `peso`, `descrizione`) VALUES
(1, 'bench press', 10, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(2, 'bench press', 20, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(3, 'bench press', 30, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(4, 'bench press', 40, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(5, 'bench press', 50, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(6, 'push press', 10, 'In piedi, controllare la discesa del bilanciere fino a toccare le spalle poi spingere fino alla massima estensione delle braccia'),
(7, 'push press', 20, 'In piedi, controllare la discesa del bilanciere fino a toccare le spalle poi spingere fino alla massima estensione delle braccia'),
(8, 'push press', 30, 'In piedi, controllare la discesa del bilanciere fino a toccare le spalle poi spingere fino alla massima estensione delle braccia'),
(9, 'bent row', 10, 'Partire dal basso, Sollevare il bilanciere fino a portarlo all altezza del petto'),
(10, 'bent row', 20, 'Partire dal basso, Sollevare il bilanciere fino a portarlo all altezza del petto'),
(11, 'bent row', 30, 'Partire dal basso, Sollevare il bilanciere fino a portarlo all altezza del petto'),
(12, 'Curl bilanciere', 10, 'In piedi, Sollevare il bilanciere con la spinta dei bicipiti'),
(13, 'Curl bilanciere', 20, 'In piedi, Sollevare il bilanciere con la spinta dei bicipiti'),
(14, 'Curl bilanciere', 30, 'In piedi, Sollevare il bilanciere con la spinta dei bicipiti'),
(15, 'Alzate laterali', 10, 'Partire con i pesi in posizione laterali e sollevarli fino all altezza delle spalle'),
(16, 'Alzate laterali', 20, 'Partire con i pesi in posizione laterali e sollevarli fino all altezza delle spalle'),
(17, 'Alzate laterali', 30, 'Partire con i pesi in posizione laterali e sollevarli fino all altezza delle spalle'),
(18, 'Leg press', 10, 'Contrarre i muscoli della gamba per la spinta'),
(19, 'Alzate posterio', 10, 'Alzate posteriori'),
(20, 'Panca inclinata', 10, 'Spinta petto con panca inclinata 45 gradi'),
(21, 'Panca inclinata', 10, 'Spinta petto con panca inclinata 35 gradi'),
(22, 'Croci manubri', 10, 'Panca piana, aprire le braccia a formare una croce e poi chiudere le braccia in posizione verticale'),
(23, 'Rematore manubr', 10, 'Un braccio alla volta, Posizione orizzontale, sollevare il manubrio lateralmente fino a formare un angolo di 90 gradi con il corpo'),
(24, 'Pull down corda', 10, 'Spingere energicamente la corda'),
(25, 'Alzate laterali', 10, 'Un braccio alla volta, partendo dalla posizione distesa contrarre il bicipite fino alla completa contrazione'),
(26, 'Panca inclinata', 10, 'Spinta petto con panca inclinata 45 gradi'),
(27, 'Leg press', 10, 'Spinta petto con panca inclinata 45 gradi'),
(28, 'Military press', 10, 'Spinta petto con panca inclinata 45 gradi'),
(29, 'Chest press', 10, 'Spinta petto con panca inclinata 45 gradi'),
(30, 'Dragon flag', 10, 'Spinta petto'),
(31, 'Spinte panca 90', 10, 'Spinta petto con panca inclinata 90 gradi'),
(32, 'Spinte 45', 10, 'Spinta petto con panca inclinata 45 gradi'),
(33, 'Leg extension', 10, 'Piegare la gamba fino a completa contrazione'),
(34, 'French press', 10, 'Spinta french');

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
-- Struttura stand-in per le viste `esercizi`
-- (Vedi sotto per la vista effettiva)
--
CREATE TABLE `esercizi` (
`nome` varchar(20)
,`tipo` varchar(14)
,`durata` int(2)
,`nome_esercizio_attrezzo` varchar(20)
,`peso` varchar(4)
,`serie` int(2)
,`ripetizioni` int(2)
);

-- --------------------------------------------------------

--
-- Struttura della tabella `esercizio`
--

CREATE TABLE `esercizio` (
  `nome` varchar(20) NOT NULL,
  `descrizione` varchar(50) DEFAULT NULL,
  `peso` varchar(4) NOT NULL DEFAULT 'Body'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `esercizio`
--

INSERT INTO `esercizio` (`nome`, `descrizione`, `peso`) VALUES
('Affondi', 'Passo lungo, scendere mantenendo la schiena dritta', 'Body'),
('Aperture laterali', 'Aperture laterali braccio', 'Body'),
('Bear crawl', 'Piegare le gambe fino a raggiungere la posizione s', 'Body'),
('Estensioni busto', 'Estensioni busto in posizione prona', 'Body'),
('Estensioni mani', 'Estensioni mani e polsi da in ginocchio', 'Body'),
('Flessioni busto', 'Flessioni busto in avanti', 'Body'),
('Good morning', 'Piegare le braccia fino a raggiungere la posizione', 'Body'),
('Jumping jack', 'Salti alternati con gambe aperte e chiuse', 'Body'),
('Piegamenti', 'Piegamenti classici con presa larghezza spalle', 'Body'),
('Piegamenti plus', 'Piegamenti con presa larghezza spalle', 'Body'),
('Piegamenti stretti', 'Piegamenti classici con presa stretta', 'Body'),
('Piegate in avanti', 'Spingere il corpo in avanti tenendo la gamba di di', 'Body'),
('Push up', 'Piegamenti classici con piedi su sedia', 'Body'),
('Skip alto', 'Skip alto sul posto', 'Body'),
('Skip basso', 'Skip basso sul posto', 'Body'),
('Squat', 'Piegare le gambe fino a raggiungere la posizione s', 'Body'),
('Squat bulgaro', 'Piegare le gambe fino a raggiungere la posizione s', 'Body'),
('Stretching braccia', 'Stendere e ripiegare le braccia', 'Body'),
('Stretching polpacci', 'Stendere e ripiegare le gambe', 'Body'),
('Stretching quadricip', 'Stendere e ripiegare le gambe', 'Body'),
('Trazioni presa dritt', 'Piegare le braccia per sollevare il proprio corpo ', 'Body'),
('Trazioni presa inver', 'Piegare le braccia per sollevare il proprio corpo ', 'Body');

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
-- Struttura stand-in per le viste `pesi`
-- (Vedi sotto per la vista effettiva)
--
CREATE TABLE `pesi` (
`nome` varchar(20)
,`tipo` varchar(14)
,`durata` int(2)
,`nome_esercizio_attrezzo` varchar(15)
,`peso` int(3)
,`serie` int(2)
,`ripetizioni` int(2)
);

-- --------------------------------------------------------

--
-- Struttura stand-in per le viste `schede_complete`
-- (Vedi sotto per la vista effettiva)
--
CREATE TABLE `schede_complete` (
`nome` varchar(20)
,`tipo` varchar(14)
,`durata` int(11)
,`nome_esercizio_attrezzo` varchar(20)
,`peso` varchar(11)
,`serie` int(11)
,`ripetizioni` int(11)
);

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

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`email`, `password`, `nome`, `cognome`, `sesso`, `telefono`, `obiettivo`, `imc`, `freq_all`) VALUES
('antus.longo@gmail.com', 'antonello', 'Antonello', 'Longo', 'M', '3884460133', 'Potenziare', 18.5185, 5),
('io.antonello@live.it', 'ciao', 'Antonello', 'Longo', 'M', '3288235282', 'Potenziare', 18.5185, 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti_allenamenti`
--

CREATE TABLE `utenti_allenamenti` (
  `email_utente` varchar(30) NOT NULL,
  `nome_allenamento` varchar(20) NOT NULL,
  `g_s` int(1) DEFAULT NULL,
  `progresso` int(1) NOT NULL DEFAULT 0,
  `data_start` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `utenti_allenamenti` (`email_utente`, `allenamento`, `g_s`, `progresso`, `data_start`) VALUES
('antoniocamposeo99@gmail.com', 'dimagrimento 1',5,0,2021-05-07),
('antoniocamposeo99@gmail.com', 'potenziamento 1',5,0,2021-05-07);
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

-- --------------------------------------------------------

--
-- Struttura per vista `esercizi`
--
DROP TABLE IF EXISTS `esercizi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `esercizi`  AS  (select `a`.`nome` AS `nome`,`a`.`tipo` AS `tipo`,`a`.`durata` AS `durata`,`ae`.`nome_esercizio` AS `nome_esercizio_attrezzo`,`e`.`peso` AS `peso`,`ae`.`serie` AS `serie`,`ae`.`ripetizioni` AS `ripetizioni` from ((`allenamento` `a` join `allenamenti_esercizi` `ae` on(`a`.`nome` = `ae`.`nome_allenamento`)) join `esercizio` `e` on(`ae`.`nome_esercizio` = `e`.`nome`)) order by `a`.`nome`) ;

-- --------------------------------------------------------

--
-- Struttura per vista `pesi`
--
DROP TABLE IF EXISTS `pesi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pesi`  AS  (select `a`.`nome` AS `nome`,`a`.`tipo` AS `tipo`,`a`.`durata` AS `durata`,`attr`.`nome` AS `nome_esercizio_attrezzo`,`attr`.`peso` AS `peso`,`alat`.`serie` AS `serie`,`alat`.`ripetizioni` AS `ripetizioni` from ((`allenamento` `a` join `allenamenti_attrezzi` `alat` on(`a`.`nome` = `alat`.`nome_allenamento`)) join `attrezzo` `attr` on(`alat`.`id_attrezzo` = `attr`.`id`)) order by `a`.`nome`) ;

-- --------------------------------------------------------

--
-- Struttura per vista `schede_complete`
--
DROP TABLE IF EXISTS `schede_complete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `schede_complete`  AS SELECT `esercizi`.`nome` AS `nome`, `esercizi`.`tipo` AS `tipo`, `esercizi`.`durata` AS `durata`, `esercizi`.`nome_esercizio_attrezzo` AS `nome_esercizio_attrezzo`, `esercizi`.`peso` AS `peso`, `esercizi`.`serie` AS `serie`, `esercizi`.`ripetizioni` AS `ripetizioni` FROM `esercizi` ;

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
  ADD PRIMARY KEY (`email_utente`,`nome_allenamento`,`data_start`);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
