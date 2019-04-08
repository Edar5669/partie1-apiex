-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2019 at 04:49 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbapiex`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionnaires`
--

CREATE TABLE `actionnaires` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `montant` int(11) NOT NULL,
  `part` float NOT NULL,
  `entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `communes`
--

CREATE TABLE `communes` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `communes`
--

INSERT INTO `communes` (`id`, `designation`, `departement`) VALUES
(1, 'Banikoara', 1),
(2, 'Gogounou', 1),
(3, 'Kandi', 1),
(4, 'Karimama', 1),
(5, 'Malanville', 1),
(6, 'Segbana', 1),
(7, 'Boukoumbé', 2),
(8, 'Cobly', 2),
(9, 'Kérou', 2),
(10, 'Kouandé', 2),
(11, 'Matéri', 2),
(12, 'Natitingou', 2),
(13, 'Pehonko', 2),
(14, 'Tanguiéta', 2),
(15, 'Toucountouna', 2),
(16, 'Abomey-Calavi', 3),
(17, 'Allada', 3),
(18, 'Kpomassè', 3),
(19, 'Ouidah', 3),
(20, 'Sô-Ava', 3),
(21, 'Toffo', 3),
(22, 'Tori-Bossito', 3),
(23, 'Zè', 3),
(24, 'Bembéréké', 4),
(25, 'Kalalé', 4),
(26, 'N\'Dali', 4),
(27, 'Nikki', 4),
(28, 'Sinendé', 4),
(29, 'Parakou', 4),
(30, 'Pèrèrè', 4),
(31, 'Tchaourou', 4),
(32, 'Bantè', 5),
(33, 'Dassa-Zoumè', 5),
(34, 'Glazoué', 5),
(35, 'Ouèssè', 5),
(36, 'Savalou', 5),
(37, 'Savè', 5),
(38, 'Aplahoué', 6),
(39, 'Djakotomey', 6),
(40, 'Dogbo', 6),
(41, 'Klouékanmè', 6),
(42, 'Lalo', 6),
(43, 'Toviklin', 6),
(44, 'Bassila', 7),
(45, 'Copargo', 7),
(46, 'Djougou ', 7),
(47, 'Ouaké', 7),
(48, 'Cotonou', 8),
(49, 'Athiémé', 9),
(50, 'Bopa', 9),
(51, 'Comè', 9),
(52, 'Grand-Popo', 9),
(53, 'Houéyogbé', 9),
(54, 'Lokossa', 9),
(55, 'Adjarra', 10),
(56, 'Adjohoun', 10),
(57, 'Aguégués', 10),
(58, 'Akpro-Missérété', 10),
(59, 'Avrankou', 10),
(60, 'Bonou', 10),
(61, 'Dangbo', 10),
(62, 'Porto-Novo', 10),
(63, 'Sèmè-Kpodji', 10),
(64, 'Ifangni', 11),
(65, 'Adja-Ouèrè', 11),
(66, 'Kétou', 11),
(67, 'Pobè', 11),
(68, 'Sakété', 11),
(69, 'Abomey', 12),
(70, 'Agbangnizoun', 12),
(71, 'Bohicon', 12),
(72, 'Covè', 12),
(73, 'Djidja', 12),
(74, 'Ouinhi', 12),
(75, 'Za-Kpota', 12),
(76, 'Zagnanado', 12),
(77, 'Zogbodomey', 12);

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `designation`) VALUES
(1, 'Alibori‎'),
(2, 'Atacora‎'),
(3, 'Atlantique'),
(4, 'Borgou'),
(5, 'Collines'),
(6, 'Couffo'),
(7, 'Donga'),
(8, 'Littoral'),
(9, 'Mono'),
(10, 'Ouémé'),
(11, 'Plateau'),
(12, 'Zou');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `rccm` longtext NOT NULL,
  `statutdesociete` longtext NOT NULL,
  `oce` longtext NOT NULL,
  `pges` longtext NOT NULL,
  `autorisationinstallation` longtext NOT NULL,
  `documentprojet` longtext NOT NULL,
  `declarationetablissement` longtext NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `projet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(11) NOT NULL,
  `denomination` varchar(255) NOT NULL,
  `capital` int(11) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `naturejuridique` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `lieudecompta` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `numrcm` varchar(255) NOT NULL,
  `datercm` date NOT NULL,
  `numifu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nature_juridiques`
--

CREATE TABLE `nature_juridiques` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nature_juridiques`
--

INSERT INTO `nature_juridiques` (`id`, `type`) VALUES
(1, 'ETABLISSEMENT'),
(2, 'SARL'),
(3, 'SAS'),
(4, 'SA'),
(5, 'SNC'),
(6, 'GIE');

-- --------------------------------------------------------

--
-- Table structure for table `plan_appro_production`
--

CREATE TABLE `plan_appro_production` (
  `id` int(11) NOT NULL,
  `annee` varchar(45) NOT NULL,
  `matierepremiere` float NOT NULL,
  `production` float NOT NULL,
  `capacite` float NOT NULL,
  `projet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `objetproj` varchar(255) NOT NULL,
  `departement` int(11) NOT NULL,
  `commune` int(11) NOT NULL,
  `ville` int(11) NOT NULL,
  `quartier` varchar(255) DEFAULT NULL,
  `complementadres` varchar(255) DEFAULT NULL,
  `regimespecial` int(11) NOT NULL,
  `duree` int(11) DEFAULT NULL,
  `regim` int(11) NOT NULL,
  `fondpropre` int(11) NOT NULL,
  `emprunt` int(11) NOT NULL,
  `chifmanuel` float NOT NULL,
  `valeurajout` float NOT NULL,
  `massesalariale` int(11) NOT NULL,
  `nbremploi` int(11) NOT NULL,
  `rentafinance` int(11) NOT NULL,
  `syscohada` varchar(4) NOT NULL,
  `entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regimes`
--

CREATE TABLE `regimes` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `montant` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regime_specials`
--

CREATE TABLE `regime_specials` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regime_specials`
--

INSERT INTO `regime_specials` (`id`, `type`, `prix`) VALUES
(1, 'REGIME-A', 100000),
(2, 'REGIME-B', 300000),
(3, 'REGIME-C', 500000),
(4, 'REGIME-D', 500000),
(5, 'REGIME-E', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `departement` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`id`, `designation`, `departement`) VALUES
(1, 'Malanville', '1'),
(2, 'Banikoara', '1'),
(3, 'Segbana', '1'),
(4, 'Kandi', '1'),
(5, 'Natitingou', '2'),
(6, 'Kérou', '2'),
(7, 'Tanguiéta', '2'),
(8, 'Kouandé', '2'),
(9, 'Abomey-Calavi', '3'),
(10, 'Ouidah', '3'),
(11, 'Allada', '3'),
(12, 'Parakou', '4'),
(13, 'Nikki', '4'),
(14, 'Bembéréké', '4'),
(15, 'Tchaourou', '4'),
(16, 'N\'Dali', '4'),
(17, 'Savé', '5'),
(18, 'Savalou', '5'),
(19, 'Dassa-Zoumè', '5'),
(20, 'Dogbo-Tota', '6'),
(21, 'Aplahoué', '6'),
(22, 'Djougou', '7'),
(23, 'Bassila', '7'),
(24, 'Cotonou', '8'),
(25, 'Athiémé', '9'),
(26, 'Grand Popo', '9'),
(27, 'Lokossa', '9'),
(28, 'Comè', '9'),
(33, 'Porto-Novo', '10'),
(34, 'Pobé', '11'),
(35, 'Sakété', '11'),
(36, 'Kétou', '11'),
(37, 'Bohicon', '12'),
(38, 'Abomey', '12'),
(39, 'Cové', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionnaires`
--
ALTER TABLE `actionnaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `denomination_UNIQUE` (`denomination`);

--
-- Indexes for table `nature_juridiques`
--
ALTER TABLE `nature_juridiques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_appro_production`
--
ALTER TABLE `plan_appro_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regimes`
--
ALTER TABLE `regimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regime_specials`
--
ALTER TABLE `regime_specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actionnaires`
--
ALTER TABLE `actionnaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nature_juridiques`
--
ALTER TABLE `nature_juridiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `plan_appro_production`
--
ALTER TABLE `plan_appro_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regimes`
--
ALTER TABLE `regimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regime_specials`
--
ALTER TABLE `regime_specials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
