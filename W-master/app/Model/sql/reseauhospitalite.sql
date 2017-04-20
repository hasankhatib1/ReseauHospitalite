-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Avril 2017 à 15:08
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
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE `actualites` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(3000) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `libelle`, `date`, `description`, `photo`) VALUES
(1, 'DEMANDE D’ASILE', 'CARTOGRAPHIE DE LA DEMANDE D’ASILE EN 2016', '2017-04-14', 'L’année 2016 a été l’année de tous les records en matière d’asile.  Selon les statistiques publiées par le ministère de l’intérieur, par EUROSTAT, et par l’OFPRA dont le rapport d’activité a été publié le 7 avril, plus de 85 700 demandes d’asile ont été enregistrées à l’OFPRA, plus de 26 000 […]', 'aasile.png'),
(2, 'CENTRE DE LA CHAPELLE', ' FACE À L’ACCUEIL DÉFAILLANT, LA SOLIDARITÉ S’ORGANISE', '2017-04-15', 'Près du camp, un groupe d’hommes d’une cinquantaine d’année cherchent à se procurer tentes et couvertures. Venus du Koweït et d’Iraq, ils sont en France depuis quelques semaines. À force de passer leurs nuits sous une pluie glaciale, certains sont tombés malade. Seuls trois d’entre eux ont pu obtenir une place dans le camp et lorsqu’ils ont demandé l’admission de leurs camarades, tout ce qu’on leur a répondu « c’est qu’il n’y aura pas d’entrée durant le week-end ! » s’étonne Sélim*. Ceux qui dorment à présent au chaud ne sont pas rassurés pour autant, mal accompagnés, très peu d’informations leur sont distillées.', 'act2.jpg'),
(3, 'CONDAMNER ET ENFERMER', 'CONDAMNER ET ENFERMER PLUTÔT QUE SOIGNER', '2017-04-06', 'Originaire du Sénégal, Monsieur N. est arrivé en France en 2008. Huit ans plus tard, alors que son épouse enceinte de 8 mois et son fils sont présents sur le territoire français, il fait l’objet d’une première tentative de renvoi dans son pays d’origine, qu’il parvient à éviter avant que la préfecture de l’Essonne ne décide de l’enfermer au centre de rétention du Mesnil-Amelot dans l’attente d’un prochain avion.\r\nOr, Monsieur N. est gravement malade et sa pathologie ne peut être soignée au Sénégal. Comme dans chaque situation où est signalée la présence d’un étranger gravement malade en rétention, l’Agence Régionale de Santé (ARS) est saisie d’une demande de maintien sur le territoire français afin que cette personne bénéficie de soins médicaux idoines. Toutefois, cette procédure est des plus opaques, si bien que rien ne vient expliquer pourquoi Monsieur N. n’est pas libéré dans les semaines qui suivent ; une opacité qui se double d’une aberration : les avis de l’ARS ne sont que consultatifs. Le préfet n’est aucunement tenu de les suivre, et ce alors même qu’il n’a naturellement aucune compétence médicale. Monsieur N. est ainsi resté enfermé 45 jours, la durée maximale de rétention.\r\nMais Monsieur N. n’est pour autant pas au bout de ses peines. A la fin de son maintien en rétention, l’administration a en effet décidé de le placer en garde-à-vue afin d’être présenté en comparution immédiate devant le tribunal correctionnel ; il encourt ainsi une peine d’emprisonnement pour s’être opposé à son renvoi, un renvoi qui mettrait sa vie gravement en danger et le séparerait de sa compagne et de son enfant. A l’heure qu’il est, nous ignorons si Monsieur N. se trouve derrière d’autres barreaux.', 'act3.jpg'),
(4, 'PAPA OÙ T’ES ?', 'Interpellation à domicile d’une famille avec deux enfants', '2017-04-07', 'Le 23 août 2016, deux enfants (de 8 ans et 19 mois) et leurs parents ont été interpellés à leur domicile et enfermés au centre de rétention administrative (CRA) de Metz, en violation des droits fondamentaux des enfants et leur famille sous le coup d’une expulsion. Arrivés en fin de journée au CRA, ils n’ont même pas eu le temps d’y exercer leurs droits. En effet, quelques heures plus tard, ils sont réveillés en pleine nuit, pour être emmenés à l’aéroport de Roissy-Charles de Gaulle où ils doivent embarquer pour l’Allemagne.\r\nLa famille parvient à refuser de monter dans l’avion. La préfecture décide alors de séparer la  famille et de ne replacer que le père en rétention, à des centaines de kilomètres de son domicile, au CRA du Mesnil-Amelot.\r\nDès le refus de vol, Monsieur K. est pris à part et amené au CRA, privé d’information quant au destin de sa femme et de ses enfants, sans savoir s’ils ont embarqué sur un autre vol ou s’ils sont toujours en France. Ce n’est qu’après plusieurs heures d’angoisse qu’il parvient à joindre sa femme : les policiers les ont relâchés  à proximité de l’aéroport de Roissy-CDG. Il faut dire que l’administration n’était plus responsable de leur sort, ils n’étaient plus sous le coup d’un arrêté de placement en rétention, alors laisser une mère et ses enfants de 8 ans et 19 mois au milieu d’une zone inconnue, à pied avec leurs bagages, à des kilomètres de chez eux quoi de plus normal ? De retour en Moselle, Madame K. et les enfants ont perdu leur hébergement du fait de leur interpellation et se retrouvent donc à la rue et sans argent le 24 août au soir.\r\nEn 24 heures, la préfecture de Moselle a réussi à faire preuve d’une inhumanité et d’une violence inouïes : la famille est actuellement séparée, le père est en rétention et peut être expulsé à tout moment tandis que la mère et les enfants, bien que remis en liberté, restent aujourd’hui sans domicile et totalement isolés.', 'act4.jpg'),
(5, 'PÈRE RESTE AVEC SA FILLE ', ':CONTRE L’EXPULSION DE MARC, PARENT D’ENFANT FRANÇAIS', '2017-04-18', 'Marc[i], ressortissant haïtien de trente-quatre ans, réside en France depuis février 2010. De sa relation avec une ressortissante française, naît Laura, une petite fille, le 20 décembre 2010. Marc obtient un titre de séjour en sa qualité de parent d’enfant français, régulièrement renouvelé jusqu’en 2014. Cette année-là, des difficultés contraignent […]\r\n Crédit photo : Rafael Flichman\r\nMarc[i], ressortissant haïtien de trente-quatre ans, réside en France depuis février 2010. De sa relation avec une ressortissante française, naît Laura, une petite fille, le 20 décembre 2010. Marc obtient un titre de séjour en sa qualité de parent d’enfant français, régulièrement renouvelé jusqu’en 2014.', 'act5.jpg'),
(6, 'EXPULSION D’UN ÉTRANGER', 'PLUS VITE QUE LA JUSTICE:EXPULSION D’UN ÉTRANGER PROTÉGÉ', '2017-04-19', 'Entré en France à l’âge de 8 ans et père d’un enfant Français, Dany a été expulsé dans un pays où il n’a pas mis les pieds depuis 25 ans. Trois jours après son expulsion, le juge des référés, estimant qu’il existe un doute sérieux sur la légalité de la mesure d’expulsion, ordonne sa suspension.\r\n CRAMesnil2Sept2009_Avion02_600\r\nParti du Congo pour la France en 1991 à l’âge de 8 ans et demi, Dany est orphelin. Il grandit à Paris, chez son oncle français qui l’élève avec ses cousins. Scolarisé  jusqu’en CAP, il occupe ensuite divers emploi précaires. En situation régulière, Dany s’installe avec sa concubine française et devient père d’un enfant français en 2014.\r\nEn avril 2014, Dany est condamné à trois ans de prison ferme pour vol aggravé ; le magistrat choisit de ne pas assortir cette peine d’une interdiction de territoire. C’est la préfecture de police (Paris) qui décide de prendre un arrêté d’expulsion à son encontre, le 16 juin 2014. La préfecture ayant envoyé ledit arrêté à son domicile alors que Dany est incarcéré, celui-ci ne lui sera jamais notifié. Ignorant ainsi pendant deux ans qu’il fait l’objet de cette mesure, Dany sollicite et obtient des autorisations de sortie pour se rendre en préfecture renouveler son titre de séjour. ', 'act6.jpg'),
(7, 'CHARTER AWARDS', 'C’EST ARRIVÉ PRÈS DE CHEZ VOUS', '2017-04-14', 'Les équipiers de la Cimade Ile de France ainsi que les associations partenaires de l’action ont investi ce matin l’esplanade de la préfecture de Seine-Saint-Denis en vue de la récompenser. En effet à l’issue d’un suspense haletant, la préfecture de Seine Saint Denis, nominée dans trois catégories, remporte le Prix « Very Bad Trip » pour avoir enfermé au centre de rétention du Mesnil Amelot en janvier 2015, un ressortissant français !\r\nPriver une personne de liberté est une décision grave, que la loi ne permet d’utiliser en principe qu’en dernier ressort. Après avoir bien examiné sa situation. Bien trop souvent, poussée par une politique générale, l’administration ne s’embarrasse pas de ce préalable. Elle enferme sans trop chercher à comprendre, prenant mécaniquement des décisions stéréotypées et s’en remettant à une éventuelle libération par un juge, pour les personnes qui ont la chance d’en voir un avant de monter dans l’avion.', 'act7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `description`, `start`, `end`) VALUES
(34, 'rdv 11/04', ' 1 er rdv', '2017-04-11 01:00:00', '2017-04-11 11:01:00'),
(35, 'rdv 13/04', '2 er rdv', '2017-04-13 03:00:00', '2017-04-13 05:30:00'),
(63, ' cs v', '  c', '2017-04-12 02:30:00', '2017-04-12 04:00:00'),
(64, 'Soutenance projet WebForce3', ' Projet Réseau Hospitalité', '2017-04-21 09:00:00', '2017-04-21 14:00:00');

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

-- --------------------------------------------------------

--
-- Structure de la table `repertoirelng`
--

DROP TABLE IF EXISTS `repertoirelng`;
CREATE TABLE `repertoirelng` (
  `id` int(10) NOT NULL,
  `arrondissement` int(5) NOT NULL,
  `structure` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contact` text NOT NULL,
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

INSERT INTO `repertoirelng` (`id`, `arrondissement`, `structure`, `adresse`, `tel`, `mail`, `contact`, `formation`, `cotisation`, `placesDispo`, `hAteliers`, `hPermanence`, `infoComp`) VALUES
(1, 13001, 'Centre Social Bernard du Bois', '16, rue Bernard du Bois', '04 88 15 11 10', 'accueil.velten@ccocl13.fr', 'aaa', 'FLE', 'gratuit', '10', 'matin', 'semaine (matin & après-midi)', 'rien....'),
(2, 13002, 'Centre Social Baussenque', '34, rue Baussenque', '04 91 91 29 59', 'alpha@asso-baussenque.frcsbaussenque@wanadoo.fr centresocial@asso-baussenque.fr', 'Directeur : Alain Claret', 'FLE', 'gratuit', '0', '9h - 12h et 14h - 18h, (fermé le mardi matin).', '9h - 12h et 14h - 18h, (fermé le mardi matin).', 'rien.........'),
(6, 13003, 'Association Mot à Mot', '36, rue Bernard, LoKal 36', '04 91 05 97 03,  07 ', 'associationmotamot@yahoo.fr', 'Adèle Rossignol, Javotte Chomel, Myriam El Marrakchi (formatrices coordinatrices).', 'FLE / Illettrisme', 'gratuit', '5', 'Lundi et jeudi (14h-16h30).', 'Lundi et jeudi (14h-16h30).', '- Cours oral, écrit, code de la route, accompagnement à la scolarité. \r\n- Entrées et sorties permanentes.'),
(9, 13004, '', '2, avenue Maréchal Foch', 'Tél. 04 91 86 45 45', 'mail@mail.com', '- Directeur : Bernard Soriano.', 'FLE', 'gratuit', '0', 'Cours le jeudi après-midi (oral/écrit)', 'semaine (matin & après-midi)', 'Prérequis : savoir parler et comprendre à minima.'),
(13, 13005, 'Croix-Rouge Marseille', '1, rue du Docteur Simone Sedan', '04 91 15 71 71', 'mail@mail.com', 'Dominique Malméja', 'FLE / Illettrisme', 'gratuit', '0', 'adapté', 'semaine (matin & après-midi)', 'Ateliers face à face');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'hasan', 'hasankhatib@hotmail.com', '$2y$10$QZog3.hgwkoT/WM4mV8GfuH4C9rg5qeCZfU8p2zTGy11yPGOAMOKO', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agendapublic`
--
ALTER TABLE `agendapublic`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carteinteractive`
--
ALTER TABLE `carteinteractive`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repertoirelng`
--
ALTER TABLE `repertoirelng`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT pour la table `agendapublic`
--
ALTER TABLE `agendapublic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `carteinteractive`
--
ALTER TABLE `carteinteractive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `repertoirelng`
--
ALTER TABLE `repertoirelng`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
