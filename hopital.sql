-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 07 Janvier 2022 à 21:14
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `Code_cham` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `nom_departement` varchar(30) NOT NULL,
  `surface` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`Code_cham`, `libelle`, `nom_departement`, `surface`) VALUES
(230, 'gfhg', 'vgvgh', 330),
(96, 'fhgf', 'jjh', 6),
(23, 'ppoo', 'tttt', 7),
(30, 'ooo', 'zzzz', 6);

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

CREATE TABLE `composer` (
  `Code_med` int(11) NOT NULL,
  `ID_pharm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `composer`
--

INSERT INTO `composer` (`Code_med`, `ID_pharm`) VALUES
(12, 89),
(222, 10);

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `Code_cons` int(11) NOT NULL,
  `type_cons` varchar(30) NOT NULL,
  `date_cons` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dossier_hospitaliser`
--

CREATE TABLE `dossier_hospitaliser` (
  `ID_dos` int(11) NOT NULL,
  `ID_Labo` int(11) NOT NULL,
  `CIN` int(11) NOT NULL,
  `nom_depa` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `dossier_hospitaliser`
--

INSERT INTO `dossier_hospitaliser` (`ID_dos`, `ID_Labo`, `CIN`, `nom_depa`) VALUES
(36, 25, 5, 'rrtt'),
(9, 6, 3, 'rrr');

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--

CREATE TABLE `employer` (
  `CIN_emp` int(11) NOT NULL,
  `ID_Labo` int(11) NOT NULL,
  `ID_pharm` int(11) NOT NULL,
  `Code_metier` int(11) NOT NULL,
  `Nom_complet` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `employer`
--

INSERT INTO `employer` (`CIN_emp`, `ID_Labo`, `ID_pharm`, `Code_metier`, `Nom_complet`) VALUES
(6, 8, 1, 23, 'fhgf'),
(354, 147, 12, 33, 'lll');

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `Code_equi` int(11) NOT NULL,
  `libelle_equi` varchar(30) NOT NULL,
  `etat_equi` varchar(30) NOT NULL,
  `prix_equi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipement`
--

INSERT INTO `equipement` (`Code_equi`, `libelle_equi`, `etat_equi`, `prix_equi`) VALUES
(3, '9', 'pp', 8),
(312, 'mm', 'ppp', 10);

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE `faire` (
  `CIN_emp` int(11) NOT NULL,
  `ID_trai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `faire`
--

INSERT INTO `faire` (`CIN_emp`, `ID_trai`) VALUES
(6, 8);

-- --------------------------------------------------------

--
-- Structure de la table `fournir`
--

CREATE TABLE `fournir` (
  `Code_equi` int(11) NOT NULL,
  `ID_pharm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fournir`
--

INSERT INTO `fournir` (`Code_equi`, `ID_pharm`) VALUES
(8, 6),
(23, 5),
(42, 235);

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

CREATE TABLE `laboratoire` (
  `ID_Labo` int(11) NOT NULL,
  `libelle_Labo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lit`
--

CREATE TABLE `lit` (
  `Code_lit` int(11) NOT NULL,
  `Code_cham` int(11) NOT NULL,
  `etat_lit` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lit`
--

INSERT INTO `lit` (`Code_lit`, `Code_cham`, `etat_lit`) VALUES
(40, 230, 'jhghg'),
(4, 23, 'jhghg'),
(32, 96, 'rrrtt'),
(45, 23, 'uuu'),
(6, 30, 'lkk');

-- --------------------------------------------------------

--
-- Structure de la table `maladie`
--

CREATE TABLE `maladie` (
  `Code_mala` int(11) NOT NULL,
  `Libelle_mala` varchar(30) NOT NULL,
  `Nom_Dipartement` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `maladie`
--

INSERT INTO `maladie` (`Code_mala`, `Libelle_mala`, `Nom_Dipartement`) VALUES
(8, 'mmm', 'lll'),
(1, 'pp', 'lll');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `Code_med` int(11) NOT NULL,
  `Libelle_med` varchar(30) NOT NULL,
  `pays_origine` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medicament`
--

INSERT INTO `medicament` (`Code_med`, `Libelle_med`, `pays_origine`) VALUES
(12, 'pp', 'lll'),
(222, 'ikk', 'jkj');

-- --------------------------------------------------------

--
-- Structure de la table `metier`
--

CREATE TABLE `metier` (
  `Code_metier` int(11) NOT NULL,
  `Libelle_met` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `metier`
--

INSERT INTO `metier` (`Code_metier`, `Libelle_met`) VALUES
(23, 'fhgf'),
(33, 'ooo');

-- --------------------------------------------------------

--
-- Structure de la table `noter`
--

CREATE TABLE `noter` (
  `Code_mala` int(11) NOT NULL,
  `ID_dos` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `noter`
--

INSERT INTO `noter` (`Code_mala`, `ID_dos`) VALUES
(78, 89),
(32, 80),
(33, 5),
(5, 7),
(1, 9),
(8, 36);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `Billet` int(11) NOT NULL,
  `Montant` int(11) NOT NULL,
  `Mode_paiement` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `paiement`
--

INSERT INTO `paiement` (`Billet`, `Montant`, `Mode_paiement`) VALUES
(6, 8, 'mmm'),
(23, 99, 'yyuu');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `CIN` int(11) NOT NULL,
  `ID_trai` int(11) NOT NULL,
  `Code_lit` int(11) NOT NULL,
  `Nom_complet` varchar(30) NOT NULL,
  `type_patient` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`CIN`, `ID_trai`, `Code_lit`, `Nom_complet`, `type_patient`) VALUES
(90, 60, 40, 'klkl', 'jgjhg'),
(9, 6, 4, 'klkl', 'jgjhg'),
(89, 8, 32, 'kkkk', 'uuuu'),
(36, 56, 45, 'lll', 'mmm'),
(4, 7, 6, 'hh', 'qqq'),
(1, 1, 1, 'a', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `pharmacie`
--

CREATE TABLE `pharmacie` (
  `ID_pharm` int(11) NOT NULL,
  `Libelle_pharm` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pharmacie`
--

INSERT INTO `pharmacie` (`ID_pharm`, `Libelle_pharm`) VALUES
(5, 'iii'),
(235, 'ppp');

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE `possede` (
  `Code_cham` int(11) NOT NULL,
  `Code_equi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `ID_Poste` int(11) NOT NULL,
  `Code_metier` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `poste`
--

INSERT INTO `poste` (`ID_Poste`, `Code_metier`, `libelle`) VALUES
(56, 23, 'jljlkj'),
(89, 33, 'mmm');

-- --------------------------------------------------------

--
-- Structure de la table `representant`
--

CREATE TABLE `representant` (
  `CIN_rep` int(11) NOT NULL,
  `CIN` int(11) NOT NULL,
  `Code_cons` int(11) NOT NULL,
  `Nom_complet` varchar(30) NOT NULL,
  `liaison_familiale` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `representant`
--

INSERT INTO `representant` (`CIN_rep`, `CIN`, `Code_cons`, `Nom_complet`, `liaison_familiale`) VALUES
(45, 45, 4577, 'yyyy', 'brother'),
(122, 415, 452, 'hhg', 'brother in law'),
(12, 125, 55, 'ghh', 'brother in law'),
(9, 12, 23, 'gfhgf', 'jfhh'),
(333, 555, 666, 'ooo', 'pppp'),
(5, 7, 45, 'badr', 'brother'),
(36, 555, 888, 'nhh', 'lklkl'),
(89, 3, 56, 'hhh', 'kjj'),
(7, 5, 9, 'ppp', 'mmm'),
(1, 2, 1, 'mmm', 'ppp');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `billet_sortie` int(11) NOT NULL,
  `date_sortie` date NOT NULL,
  `type_sortie` varchar(30) NOT NULL,
  `etat_sante` varchar(30) NOT NULL,
  `lieu_transf` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sortie`
--

INSERT INTO `sortie` (`billet_sortie`, `date_sortie`, `type_sortie`, `etat_sante`, `lieu_transf`) VALUES
(5, '2000-01-02', 'hjh', 'yy', 'uuu'),
(45, '0200-02-03', 'hh', 'hh', 'hh');

-- --------------------------------------------------------

--
-- Structure de la table `traitement_medico`
--

CREATE TABLE `traitement_medico` (
  `ID_trai` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `type_trait` varchar(30) NOT NULL,
  `degres_complexiter` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `traitement_medico`
--

INSERT INTO `traitement_medico` (`ID_trai`, `libelle`, `type_trait`, `degres_complexiter`) VALUES
(60, 'gfhg', 'hjjh', 7),
(8, 'fhgf', 'gfdgfdg', 10),
(56, 'ppoo', 'hhyy', 10),
(7, 'ooo', 'ttt', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`Code_cham`);

--
-- Index pour la table `composer`
--
ALTER TABLE `composer`
  ADD KEY `ID_pharm` (`ID_pharm`),
  ADD KEY `Code_med` (`Code_med`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`Code_cons`);

--
-- Index pour la table `dossier_hospitaliser`
--
ALTER TABLE `dossier_hospitaliser`
  ADD PRIMARY KEY (`ID_dos`),
  ADD KEY `ID_Labo` (`ID_Labo`),
  ADD KEY `CIN` (`CIN`);

--
-- Index pour la table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`CIN_emp`),
  ADD KEY `ID_pharm` (`ID_pharm`),
  ADD KEY `ID_Labo` (`ID_Labo`),
  ADD KEY `Code_metier` (`Code_metier`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`Code_equi`);

--
-- Index pour la table `faire`
--
ALTER TABLE `faire`
  ADD KEY `CIN_emp` (`CIN_emp`),
  ADD KEY `ID_trai` (`ID_trai`);

--
-- Index pour la table `fournir`
--
ALTER TABLE `fournir`
  ADD KEY `Code_equi` (`Code_equi`),
  ADD KEY `ID_pharm` (`ID_pharm`);

--
-- Index pour la table `laboratoire`
--
ALTER TABLE `laboratoire`
  ADD PRIMARY KEY (`ID_Labo`);

--
-- Index pour la table `lit`
--
ALTER TABLE `lit`
  ADD PRIMARY KEY (`Code_lit`),
  ADD KEY `Code_cham` (`Code_cham`);

--
-- Index pour la table `maladie`
--
ALTER TABLE `maladie`
  ADD PRIMARY KEY (`Code_mala`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`Code_med`);

--
-- Index pour la table `metier`
--
ALTER TABLE `metier`
  ADD PRIMARY KEY (`Code_metier`);

--
-- Index pour la table `noter`
--
ALTER TABLE `noter`
  ADD KEY `ID_dos` (`ID_dos`),
  ADD KEY `Code_mala` (`Code_mala`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`Billet`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`CIN`),
  ADD KEY `ID_trai` (`ID_trai`),
  ADD KEY `Code_lit` (`Code_lit`);

--
-- Index pour la table `pharmacie`
--
ALTER TABLE `pharmacie`
  ADD PRIMARY KEY (`ID_pharm`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
  ADD KEY `Code_cham` (`Code_cham`),
  ADD KEY `Code_equi` (`Code_equi`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`ID_Poste`),
  ADD KEY `Code_metier` (`Code_metier`);

--
-- Index pour la table `representant`
--
ALTER TABLE `representant`
  ADD PRIMARY KEY (`CIN_rep`),
  ADD KEY `CIN` (`CIN`),
  ADD KEY `Code_cons` (`Code_cons`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`billet_sortie`);

--
-- Index pour la table `traitement_medico`
--
ALTER TABLE `traitement_medico`
  ADD PRIMARY KEY (`ID_trai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
