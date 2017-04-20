-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 19 Avril 2017 à 16:13
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
-- Structure de la table `carteinteractive`
--

DROP TABLE IF EXISTS `carteinteractive`;
CREATE TABLE `carteinteractive` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `categorie` smallint(6) NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `codepostal` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `ville` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `afficher` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `carteinteractive`
--

INSERT INTO `carteinteractive` (`id`, `nom`, `description`, `categorie`, `adresse`, `codepostal`, `ville`, `longitude`, `latitude`, `url`, `afficher`) VALUES
(1, 'Eric Martin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at incidunt voluptates est, qui, doloribus illo eligendi praesentium fugiat molestiae non, animi veniam totam exercitationem error laborum temporibus! Vitae, accusamus.', 1, '10 rue Marignan', '13007', 'Marseille', '5.3672202', '43.2875993', '', 0),
(2, 'André Dupont', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at incidunt voluptates est, qui, doloribus illo eligendi praesentium fugiat molestiae non, animi veniam totam exercitationem error laborum temporibus! Vitae, accusamus.', 1, '103 boulevard Chave', '13005', 'Marseille', '5.3930936', '43.2956375', '', 0),
(4, 'Association Untel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at incidunt voluptates est, qui, doloribus illo eligendi praesentium fugiat molestiae non, animi veniam totam exercitationem error laborum temporibus! Vitae, accusamus.', 1, '88 rue Chape', '13004', 'Marseille', '5.3935802', '43.3006686', '', 0),
(5, 'Cimade (siège social paris)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at incidunt voluptates est, qui, doloribus illo eligendi praesentium fugiat molestiae non, animi veniam totam exercitationem error laborum temporibus! Vitae, accusamus.', 1, '64 rue Clisson', '75013', 'Paris', '2.3658255', '48.8304639', 'http://www.lacimade.org/', 0),
(6, 'Cimade Marseille', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at incidunt voluptates est, qui, doloribus illo eligendi praesentium fugiat molestiae non, animi veniam totam exercitationem error laborum temporibus! Vitae, accusamus.', 1, '8 rue Jean-Marc Cathala', '13002', 'Marseille', '5.3701471', '43.3006069', 'http://www.lacimade.org/regions/sud-est/', 0),
(10, 'Pierre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '13 av Mazargues', '13008', 'Marseille', '5.3881384', '43.2694991', '', 0),
(11, 'Pédro', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '53 av de Montredon', '13008', 'Marseille', '5.3707509', '43.2435083', '', 0),
(12, 'Simona', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '141 bd Longchamp', '13001', 'Marseille', '5.3928951', '43.3034914', '', 0),
(13, 'Alain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '8 av Marechal Foch', '13004', 'Marseille', '5.3969375', '43.3022703', '', 0),
(14, 'Jean-Pierre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '8 bd Latil', '13008', 'Marseille', '5.3927059', '43.2744037', '', 0),
(15, 'Julien', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '18 r Payan d''Augery', '13014', 'Marseille', '5.3741634', '43.3281338', '', 0),
(16, 'Sebastien', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '9 bd Jean Labro', '13016', 'Marseille', '5.3424341', '43.3563695', '', 0),
(17, 'Patrick', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '85 bd Vauban', '13006', 'Marseille', '5.3748370', '43.2829894', '', 0),
(18, 'Denise', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '73 av Alexandre Ansaldi', '13014', 'Marseille', '5.4026856', '43.3335885', '', 0),
(19, 'Geneviève', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '18 r St Michel', '13006', 'Marseille', '5.3855900', '43.2935281', '', 0),
(20, 'Nathalie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '188 bd National', '13003', 'Marseille', '5.3801368', '43.3092718', '', 0),
(21, 'Claude', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '90 av Camille Pelletan', '13003', 'Marseille', '5.3739580', '43.3073672', '', 0),
(22, 'Henry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '153 r Felix Pyat', '13003', 'Marseille', '5.3746652', '43.3206193', '', 0),
(23, 'Hervé', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '51 bd Jean Eugene Cabassud', '13010', 'Marseille', '5.4134486', '43.2841462', '', 0),
(24, 'Gilbert', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '35 av Jules Cantini', '13006', 'Marseille', '5.3862458', '43.2847875', '', 0),
(26, 'Gram', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '170 av Toulon', '13010', 'Marseille', '5.3935370', '43.2848220', '', 0),
(27, 'Stam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '377 bd National', '13003', 'Marseille', '5.3732215', '43.3142042', '', 0),
(28, 'Am', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '34 r Lepante', '06000', 'Nice', '7.2687594', '43.7063533', '', 0),
(29, 'Gamma', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '7 bd Joseph Garnier', '06000', 'Nice', '7.2606933', '43.7099925', '', 0),
(30, 'Beta', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '27 r Paganini', '06000', 'Nice', '7.2637264', '43.7037626', '', 0),
(31, 'Alpha', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '13 bd Cessole', '06100', 'Nice', '7.2554080', '43.7114280', '', 0),
(32, 'Nassim', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '15 av Malaussena', '06000', 'Nice', '7.2633754', '43.7076459', '', 0),
(33, 'Anne', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '199 av Californie', '06200', 'Nice', '7.2311895', '43.6812877', '', 0),
(34, 'Johnny', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '59 r Barla', '06300', 'Nice', '7.2871159', '43.7006245', '', 0),
(35, 'Silvio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '4 r Raiberti', '06000', 'Nice', '7.2626019', '43.7103994', '', 0),
(36, 'Sylvie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '56 bd Joseph Garnier', '06000', 'Nice', '7.2551626', '43.7100572', '', 0),
(37, 'Gabriel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '31 bd Joseph Garnier', '06000', 'Nice', '7.2576634', '43.7099600', '', 0),
(38, 'Renaud', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '166 av St Lambert', '06100', 'Nice', '7.2629919', '43.7196609', '', 0),
(39, 'Emmanuellle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '60 r Arson', '06300', 'Nice', '7.2890699', '43.7044990', '', 0),
(40, 'Emmanuel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '59 chem Temple', '06100', 'Nice', '7.2539817', '43.7251754', '', 0),
(42, 'Raymond', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '54 r France', '06000', 'Nice', '7.2580579', '43.6956824', '', 0),
(43, 'Antoine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '27 r Pairoliere', '06300', 'Nice', '7.2786137', '43.6993379', '', 0),
(44, 'Emilie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '71 av de Hambourg', '13008', 'Marseille', '5.3881896', '43.2513238', '', 0),
(45, 'Amélie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '1 av Mazargues', '13008', 'Marseille', '5.3880248', '43.2699612', '', 0),
(47, 'Francis', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '137 bd Longchamp', '13001', 'Marseille', '5.3924256', '43.3037121', '', 0),
(49, 'Brigitte', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '2 A bd Latil', '13008', 'Marseille', '5.3913931', '43.2741215', '', 0),
(50, 'Rachel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '14 r Payan d''Augery', '13014', 'Marseille', '5.3740396', '43.3279679', '', 0),
(51, 'Florence', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '3 bd Jean Labro', '13016', 'Marseille', '5.3426705', '43.3565481', '', 0),
(54, 'Pete Townshend', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '16 r St Michel', '13006', 'Marseille', '5.3856010', '43.2935856', '', 0),
(55, 'Jarvis Cocker', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '180 bd National', '13003', 'Marseille', '5.3807182', '43.3090616', '', 0),
(57, 'Arthur Lee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '143 r Felix Pyat', '13003', 'Marseille', '5.3730123', '43.3177209', '', 0),
(58, 'David Bowie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '5 bd Jean Eugène Cabassud', '13010', 'Marseille', '5.4130892', '43.2866734', '', 0),
(59, 'Brian McLean', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '27 av Jules Cantini', '13006', 'Marseille', '5.3855602', '43.2853072', '', 0),
(60, 'John', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '52 bd Eugene Pierre', '13005', 'Marseille', '5.3904617', '43.2962495', '', 0),
(61, 'Paul', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '190 av Toulon', '13010', 'Marseille', '5.3946309', '43.2848280', '', 0),
(62, 'George', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '387 bd National', '13003', 'Marseille', '5.3724141', '43.3146344', '', 0),
(63, 'Boucherie Sanzo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '24 r Lepante', '06000', 'Nice', '7.2692772', '43.7055363', '', 0),
(65, 'Pépito Gomez', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '17 r Paganini', '06000', 'Nice', '7.2637768', '43.7028728', '', 0),
(66, 'Eric Petita', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '12 bd Cessole', '06100', 'Nice', '7.2559722', '43.7109603', '', 0),
(67, 'afpa nice', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '10 av Malaussena', '06000', 'Nice', '7.2640425', '43.7072624', '', 0),
(68, 'Véronique Edan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '209 av Californie', '06200', 'Nice', '7.2309880', '43.6808136', '', 0),
(69, 'Jean Neymar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '39 r Barla', '06300', 'Nice', '7.2871719', '43.7007185', '', 0),
(70, 'Louis Quinze', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '3 r Raiberti', '06000', 'Nice', '7.2624293', '43.7104699', '', 0),
(71, 'Léopold', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '46 bd Joseph Garnier', '06000', 'Nice', '7.2564251', '43.7102042', '', 0),
(72, 'Francis Blanche', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '21 bd Joseph Garnier', '06000', 'Nice', '7.2590906', '43.7099426', '', 0),
(73, 'Julia Torres', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '164 av St Lambert', '06100', 'Nice', '7.2628835', '43.7193838', '', 0),
(74, 'Guillaume Plisson', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '50 r Arson', '06300', 'Nice', '7.2884636', '43.7032862', '', 0),
(75, 'Laurent Ogier', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '70 chem Temple', '06100', 'Nice', '7.2539660', '43.7252495', '', 0),
(76, 'Jean-Michel Pinard', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '97 bd Gambetta', '06000', 'Nice', '7.2559090', '43.7053216', '', 0),
(78, 'Grégory House', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '39 r Pairolière', '06300', 'Nice', '7.2869017', '43.7190475', '', 0),
(79, 'Julie Virginie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 1, '10 r Dominique Paez', '06200', 'Nice', '7.2195004', '43.6706021', '', 0),
(80, 'François David', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem animi, architecto, nostrum beatae atque vel veritatis', 1, '5 bd Carlone', '06200', 'Nice', '7.2426269', '43.6936009', '', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `carteinteractive`
--
ALTER TABLE `carteinteractive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `carteinteractive`
--
ALTER TABLE `carteinteractive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
