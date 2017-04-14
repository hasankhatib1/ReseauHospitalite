-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Avril 2017 à 16:59
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
-- Structure de la table `cartecontacts`
--

DROP TABLE IF EXISTS `cartecontacts`;
CREATE TABLE `cartecontacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `categorie` smallint(6) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` varchar(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `url` varchar(255) NOT NULL,
  `afficher` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `cartecontacts`
--

INSERT INTO `cartecontacts` (`id`, `nom`, `categorie`, `adresse`, `codepostal`, `ville`, `longitude`, `latitude`, `url`, `afficher`) VALUES
(1, 'Eric Martin', 1, '10 rue Marignan', '13007', 'Marseille', '5.3672202', '43.2875993', '', 0),
(2, 'André Dupont', 1, '103 boulevard Chave', '13005', 'Marseille', '5.3930936', '43.2956375', '', 0),
(3, 'Françoise Azerty', 2, '1 avenue des Chartreux', '13004', 'Marseille', '5.3970491', '43.3031792', '', 1),
(4, 'Association Untel', 1, '88 rue Chape', '13004', 'Marseille', '5.3935802', '43.3006686', '', 0),
(5, 'Cimade (siège social)', 1, '64 rue Clisson', '75013', 'Paris', '2.3658170', '48.8305190', 'http://www.lacimade.org/', 0),
(6, 'Cimade', 1, '8 rue Jean-Marc Cathala', '13002', 'Marseille', '5.3701360', '43.3008260', 'http://www.lacimade.org/regions/sud-est/', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cartecontacts`
--
ALTER TABLE `cartecontacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cartecontacts`
--
ALTER TABLE `cartecontacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
