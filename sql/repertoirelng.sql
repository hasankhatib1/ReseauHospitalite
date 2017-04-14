-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 13 Avril 2017 à 11:07
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reseauhospitalite`
--

-- --------------------------------------------------------

--
-- Structure de la table `repertoirelng`
--

CREATE TABLE `repertoirelng` (
  `id` int(10) NOT NULL,
  `arrondissement` int(5) NOT NULL,
  `structure` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `nomPec` varchar(255) NOT NULL,
  `telPec` varchar(20) NOT NULL,
  `mailPec` varchar(255) NOT NULL,
  `formation` text NOT NULL,
  `cotisation` text NOT NULL,
  `placesDispo` text NOT NULL,
  `hAteliers` text NOT NULL,
  `hPermanence` text NOT NULL,
  `infoComp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `repertoirelng`
--

INSERT INTO `repertoirelng` (`id`, `arrondissement`, `structure`, `adresse`, `tel`, `mail`, `nomPec`, `telPec`, `mailPec`, `formation`, `cotisation`, `placesDispo`, `hAteliers`, `hPermanence`, `infoComp`) VALUES
(1, 13001, 'Centre Social Bernard du Bois', '16, rue Bernard du Bois', '04 88 15 11 10', 'accueil.velten@ccocl13.fr', 'aaa', '00 00 00 00 00', 'mail@mail.com', 'FLE', 'gratuit', '10', 'matin', 'semaine (matin & après-midi)', 'rien'),
(2, 13002, 'Centre Social Baussenque', '34, rue Baussenque', '04 91 91 29 59', 'alpha@asso-baussenque.frcsbaussenque@wanadoo.fr centresocial@asso-baussenque.fr', 'Directeur : Alain Claret', '00 00 00 00 00', 'mail@mail.com', 'FLE', 'gratuit', '0', '9h - 12h et 14h - 18h, (fermé le mardi matin).', '9h - 12h et 14h - 18h, (fermé le mardi matin).', 'rien'),
(6, 13003, 'Association Mot à Mot', '36, rue Bernard, LoKal 36', '04 91 05 97 03,  07 ', 'associationmotamot@yahoo.fr', 'Adèle Rossignol, Javotte Chomel, Myriam El Marrakchi (formatrices coordinatrices).', '00 00 00 00 00', 'mail@mail.com', 'FLE / Illettrisme', 'gratuit', '5', 'Lundi et jeudi (14h-16h30).', 'Lundi et jeudi (14h-16h30).', '- Cours oral, écrit, code de la route, accompagnement à la scolarité. \r\n- Entrées et sorties permanentes.'),
(9, 13004, '', '2, avenue Maréchal Foch', 'Tél. 04 91 86 45 45', 'mail@mail.com', '- Directeur : Bernard Soriano.', '00 00 00 00 00', 'mail@mail.com', 'FLE', 'gratuit', '0', 'Cours le jeudi après-midi (oral/écrit)', 'semaine (matin & après-midi)', 'Prérequis : savoir parler et comprendre à minima.'),
(13, 13005, 'Croix-Rouge Marseille', '1, rue du Docteur Simone Sedan', '04 91 15 71 71', 'mail@mail.com', 'Dominique Malméja', '00 00 00 00 00', 'mail@mail.com', 'FLE / Illettrisme', 'gratuit', '0', 'adapté', 'semaine (matin & après-midi)', 'Ateliers face à face');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `repertoirelng`
--
ALTER TABLE `repertoirelng`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `repertoirelng`
--
ALTER TABLE `repertoirelng`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
