-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 14 Avril 2017 à 09:45
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
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE `evenements` (
  `id` int(11) NOT NULL,
  `nomEven` varchar(100) NOT NULL,
  `libEven` varchar(100) NOT NULL,
  `dateEven` date NOT NULL,
  `descriptionEven` varchar(400) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`id`, `nomEven`, `libEven`, `dateEven`, `descriptionEven`, `photo`) VALUES
(1, 'even 1', 'premier événement', '2017-04-14', 'lorem ipsum hhhh  jdhjdf hfejhrfujr hrhurg rughu rhguhgu  uhrvgrf', 'photo2.jpg'),
(2, 'even 2', 'second événement', '2017-04-15', 'lorem ipsum hhhh  jdhjdf hfejhrfujr hrhurg rughu rhguhgu  uhrvgrf', 'photo2.jpg'),
(3, 'even 3', 'troisième événement', '2017-04-06', 'lorem ipsum hhhh  jdhjdf hfejhrfujr hrhurg rughu rhguhgu  uhrvgrf', 'photo2.jpg'),
(4, 'even 4', 'quatrième événement', '2017-04-07', 'lorem ipsum hhhh  jdhjdf hfejhrfujr hrhurg rughu rhguhgu  uhrvgrf', 'photo2.jpg'),
(5, 'even 5', 'cinquième événement', '2017-04-18', 'lorem ipsum hhhh  jdhjdf hfejhrfujr hrhurg rughu rhguhgu  uhrvgrf', 'photo2.jpg'),
(6, 'even 6', 'sixième événement', '2017-04-19', 'lorem ipsum hhhh  jdhjdf hfejhrfujr hrhurg rughu rhguhgu  uhrvgrf', 'photo2.jpg'),
(7, 'even 7', 'septième événement', '2017-04-14', 'lorem ipsum hhhh  jdhjdf hfejhrfujr hrhurg rughu rhguhgu  uhrvgrfgffffffffffffff', 'photo2.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
