-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Avril 2017 à 15:10
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
-- Structure de la table `agendapublic`
--

DROP TABLE IF EXISTS `agendapublic`;
CREATE TABLE `agendapublic` (
  `id` int(10) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `titreUrl` varchar(255) NOT NULL,
  `dateEvent` date NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `docTelecharge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `agendapublic`
--

INSERT INTO `agendapublic` (`id`, `titre`, `titreUrl`, `dateEvent`, `resume`, `description`, `photo`, `docTelecharge`) VALUES
(1, 'concert « Un violon sans frontières »', 'concert-un-violon-sans-frontieres', '2017-04-21', 'la Maison des Associations de Colmar (6, route d''Ingersheim) salle 6, batiment C, entrée 2\r\n\r\nLes associations du collectif « comprendre les migrations » vous invite au concert « Un violon sans frontières »\r\n', 'Les associations du collectif « comprendre les migrations »* vous invite au concert  « Un violon sans frontières »\r\n               vendredi  21 avril  à 20h30\r\n\r\nà la Maison des Associations de Colmar (6, route d’Ingersheim) salle 6, batiment C, entrée 2\r\n\r\nentrée libre, plateau\r\n\r\nLe musicien, François Requet offre bénévolement ce concert au profit des associations qui, à Colmar, aident les exilés.\r\n\r\nVenez nombreux à cette soirée pour découvrir un panorama du violon à travers le monde.\r\n\r\nNous avons besoin de vous.\r\n\r\nVous trouverez en pièces jointes une affichette A4 présentant le concert ainsi que des flyers A5.\r\n\r\nDiffusez cette information autour de vous, auprès de vos amis, auprès de vos réseaux.\r\n\r\n* Le collectif de « Comprendre les migrations » :\r\n\r\nAsti, Cercle de Silence, D’ailleurs D’ici, Espoir, La Cimade, Licra, LDH.', 'concert _Un violon sans frontières.jpg', 'concert _Un violon sans frontières.jpg'),
(2, 'Concert lyrique au profit de la CIMADE / Plateau Asile Solidarité', 'concert-lyrique-au-profit-de-la-cimade-plateau-asile-solidarite', '2017-03-21', 'Dimanche 12 Mars 2017 à  16h. Temple du Chambon sur Lignon (43) Concert lyrique au profit de la CIMADE / Plateau Asile Solidarité « Vendetta di mezzo » Chant Chystèle Chovelon et Myriam Laïdouni-Denis Accordéon Jean-Luc Manca htttp://vendettadimezzo.wixsite.com/musique Libre participation', 'Dimanche 12 Mars 2017 à  16h. Temple du Chambon sur Lignon (43)\r\n\r\nConcert lyrique au profit de la CIMADE / Plateau Asile Solidarité\r\n\r\n« Vendetta di mezzo »\r\nChant Chystèle Chovelon et Myriam Laïdouni-Denis\r\n\r\nAccordéon\r\nJean-Luc Manca\r\n\r\nhtttp://vendettadimezzo.wixsite.com/musique\r\n\r\nLibre participation', 'Concert lyrique au profit de la CIMADE_Plateau Asile Solidarité.jpg', 'Concert lyrique au profit de la CIMADE_Plateau Asile Solidarité.jpg'),
(3, 'Invitation pour la 2ème rencontre générale du réseau hospitalité - samedi 3 juin 2017 à Gap', 'invitation-2eme-rencontre-generale-RH-03-06-17-Gap', '2017-06-03', '<h3><strong><em>Cette rencontre est ouverte &agrave; tous les collectifs et toutes les personnes de la r&eacute;gion sud-est, mais &eacute;galement au-del&agrave;, qui agissent en faveur d&rsquo;une hospitalit&eacute; concr&egrave;te et sans discrimination, notamment &agrave; l&rsquo;&eacute;gard des r&eacute;fugi&eacute;s/migrants.</em></strong></h3>', 'Notre première rencontre s’est tenue le 30 avril 2016. Beaucoup d’événements se sont passé depuis : « vidage » du bidonville de Calais et création des CAO qui ont donné lieu à de nombreuses mobilisations ; actions courageuses de nombreuses personnes dans la vallée de la Roya et procès en conséquence ayant donné lieu à de spectaculaires manifestations ; le très large collectif associatif autour du manifeste des « délinquants solidaires » ; sans compter quantité d’initiatives locales plus ou moins visibles. Un an après, nous voulons nous retrouver pour nous informer sur le travail réalisé, voir ce qui marche et ce qui coince, les demandes collectives et les actions que nous pouvons mener ensemble. Dans une France où la xénophobie s’affiche sans honte et semble devenir majoritaire, nous continuons à penser que le désir d’hospitalité l’emporte, mais il doit devenir visible comme mouvement et projet de société. Le but du réseau est d’y concourir. Programme proposé : 9h30 : Accueil des participant-e-s 10h00 – 10h45 : Mot d’accueil, puis rapide présentation des différents collectifs 10h45 – 12h45 : Travail en commissions sur le travail réalisé et les projets (objectifs, moyens, échéances) Communication et site – Hébergement – Travail, activité et formation – Sensibilisation, conscientisation Accompagnement social et juridique – Apprentissage de la langue et soutien scolaire - autres 12h45 – 14h15 : Repas partagé (chacun-e apporte quelque chose et on partage) 14h15 – 16h15 : Rapport des commissions et décisions d’actions. 16h15 – 16h30 : Pause 16h30 – 17h30 : Mode de gouvernance et de communication du réseau. 17h30 – 18h00 : Conclusion. N.B. : Vous pouvez faire des propositions de modifications. Pensez à préparer la présentation de votre collectif, le temps sera minuté (2 mn) Informations pratiques Rencontre à La Romettine – route de Champ forain – Romette 05000 Gap Déjeuner sur place : nous partagerons les plats que chacun aura confectionnés Inscription en ligne : rencontre2017@reseauhospitalite.org Contact : 06 40 71 37 45 Plus d’infos sur www.reseauhospitalite.org', 'LogoReseauHospitalite.png', ''),
(4, 'Invitation pour la 3ème rencontre du réseau Langue', 'invitation-3eme-rencontre-réseau-langue', '2017-05-20', 'Cette rencontre est ouverte à tous les collectifs et toutes les personnes de la région sud-est, mais également au-delà, qui agissent en faveur d’une hospitalité concrète', 'Notre première rencontre s’est tenue le 30 avril 2016. Beaucoup d’événements se sont passé depuis : « vidage » du bidonville de Calais et création des CAO qui ont donné lieu à de nombreuses mobilisations ; actions courageuses de nombreuses personnes dans la vallée de la Roya et procès en conséquence ayant donné lieu à de spectaculaires manifestations ; le très large collectif associatif autour du manifeste des « délinquants solidaires » ; sans compter quantité d’initiatives locales plus ou moins visibles.\r\nUn an après, nous voulons nous retrouver pour nous informer sur le travail réalisé, voir ce qui marche et ce qui coince, les demandes collectives et les actions que nous pouvons mener ensemble.\r\nDans une France où la xénophobie s’affiche sans honte et semble devenir majoritaire, nous continuons à penser que le désir d’hospitalité l’emporte, mais il doit devenir visible comme mouvement et projet de société. Le but du réseau est d’y concourir.\r\n\r\n\r\nInformations pratiques\r\nRencontre à La Romettine – route de Champ forain – Romette 05000 Gap\r\nDéjeuner sur place : nous partagerons les plats que chacun aura confectionnés\r\nInscription en ligne : rencontre2017@reseauhospitalite.org\r\nContact : 06 40 71 37 45\r\nPlus d’infos sur www.reseauhospitalite.org', 'LogoReseauHospitalite.png', 'Invitation Rencontre régionale RH 3.6.17.docx');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agendapublic`
--
ALTER TABLE `agendapublic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agendapublic`
--
ALTER TABLE `agendapublic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
