-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Avril 2017 à 15:09
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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
