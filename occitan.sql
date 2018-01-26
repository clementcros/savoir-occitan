-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 jan. 2018 à 12:08
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `occitan`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `carouselle`
--

DROP TABLE IF EXISTS `carouselle`;
CREATE TABLE IF NOT EXISTS `carouselle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ville` int(11) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carouselle`
--

INSERT INTO `carouselle` (`id`, `id_ville`, `image_1`, `image_2`, `image_3`) VALUES
(1, 32, '83b40-xvm8f995910-f751-11e6-b182-27a8794d746f-805x453.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `type`) VALUES
(1, 'Charcuterie'),
(2, 'vin');

-- --------------------------------------------------------

--
-- Structure de la table `citys`
--

DROP TABLE IF EXISTS `citys`;
CREATE TABLE IF NOT EXISTS `citys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_post` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `img_1` varchar(100) DEFAULT NULL,
  `img_2` varchar(100) DEFAULT NULL,
  `img_3` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=344 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `citys`
--

INSERT INTO `citys` (`id`, `code_post`, `name`, `img_1`, `img_2`, `img_3`) VALUES
(1, 34290, 'Abeilhan', NULL, NULL, NULL),
(2, 34230, 'Adissan', NULL, NULL, NULL),
(3, 34300, 'Agde', NULL, NULL, NULL),
(4, 34210, 'Agel', NULL, NULL, NULL),
(5, 34190, 'Agonès', NULL, NULL, NULL),
(6, 34210, 'Aigne', NULL, NULL, NULL),
(7, 34210, 'Aigues-Vives', NULL, NULL, NULL),
(8, 34600, 'Les Aires', NULL, NULL, NULL),
(9, 34290, 'Alignan-du-Vent', NULL, NULL, NULL),
(10, 34150, 'Aniane', NULL, NULL, NULL),
(11, 34150, 'Arboras', NULL, NULL, NULL),
(12, 34380, 'Argelliers', NULL, NULL, NULL),
(13, 34800, 'Aspiran', NULL, NULL, NULL),
(14, 34820, 'Assas', NULL, NULL, NULL),
(15, 34360, 'Assignan', NULL, NULL, NULL),
(16, 34230, 'Aumelas', NULL, NULL, NULL),
(17, 34530, 'Aumes', NULL, NULL, NULL),
(18, 34480, 'Autignac', NULL, NULL, NULL),
(19, 34260, 'Avène', NULL, NULL, NULL),
(20, 34210, 'Azillanet', NULL, NULL, NULL),
(21, 34360, 'Babeau-Bouldoux', NULL, NULL, NULL),
(22, 34670, 'Baillargues', NULL, NULL, NULL),
(23, 34540, 'Balaruc-les-Bains', NULL, NULL, NULL),
(24, 34540, 'Balaruc-le-Vieux', NULL, NULL, NULL),
(25, 34290, 'Bassan', NULL, NULL, NULL),
(26, 34210, 'Beaufort', NULL, NULL, NULL),
(27, 34160, 'Beaulieu', NULL, NULL, NULL),
(28, 34600, 'Bédarieux', NULL, NULL, NULL),
(29, 34230, 'Bélarga', NULL, NULL, NULL),
(30, 34360, 'Berlou', NULL, NULL, NULL),
(31, 34550, 'Bessan', NULL, NULL, NULL),
(32, 34500, 'Béziers', '2dfa7-xvm8f995910-f751-11e6-b182-27a8794d746f-805x453.jpg', '9cc63-beziers.jpg', '981ea-marc-gerard-photography-cathedrale-st-nazaire-beziers-3-1024x682.jpg'),
(33, 34160, 'Boisseron', NULL, NULL, NULL),
(34, 34220, 'Boisset', NULL, NULL, NULL),
(35, 34150, 'La Boissière', NULL, NULL, NULL),
(36, 34700, 'Le Bosc', NULL, NULL, NULL),
(37, 34760, 'Boujan-sur-Libron', NULL, NULL, NULL),
(38, 34260, 'Le Bousquet-d\'Orb', NULL, NULL, NULL),
(39, 34140, 'Bouzigues', NULL, NULL, NULL),
(40, 34650, 'Brenas', NULL, NULL, NULL),
(41, 34800, 'Brignac', NULL, NULL, NULL),
(42, 34190, 'Brissac', NULL, NULL, NULL),
(43, 34160, 'Buzignargues', NULL, NULL, NULL),
(44, 34480, 'Cabrerolles', NULL, NULL, NULL),
(45, 34800, 'Cabrières', NULL, NULL, NULL),
(46, 34330, 'Cambon-et-Salvergues', NULL, NULL, NULL),
(47, 34230, 'Campagnan', NULL, NULL, NULL),
(48, 34160, 'Campagne', NULL, NULL, NULL),
(49, 34260, 'Camplong', NULL, NULL, NULL),
(50, 34130, 'Candillargues', NULL, NULL, NULL),
(51, 34800, 'Canet', NULL, NULL, NULL),
(52, 34310, 'Capestang', NULL, NULL, NULL),
(53, 34600, 'Carlencas-et-Levas', NULL, NULL, NULL),
(54, 34210, 'Cassagnoles', NULL, NULL, NULL),
(55, 34610, 'Castanet-le-Haut', NULL, NULL, NULL),
(56, 34120, 'Castelnau-de-Guers', NULL, NULL, NULL),
(57, 34170, 'Castelnau-le-Lez', NULL, NULL, NULL),
(58, 34160, 'Castries', NULL, NULL, NULL),
(59, 34210, 'La Caunette', NULL, NULL, NULL),
(60, 34380, 'Causse-de-la-Selle', NULL, NULL, NULL),
(61, 34490, 'Causses-et-Veyran', NULL, NULL, NULL),
(62, 34600, 'Caussiniojouls', NULL, NULL, NULL),
(63, 34720, 'Caux', NULL, NULL, NULL),
(64, 34520, 'Le Caylar', NULL, NULL, NULL),
(65, 34460, 'Cazedarnes', NULL, NULL, NULL),
(66, 34270, 'Cazevieille', NULL, NULL, NULL),
(67, 34190, 'Cazilhac', NULL, NULL, NULL),
(68, 34120, 'Cazouls-d\'Hérault', NULL, NULL, NULL),
(69, 34370, 'Cazouls-lès-Béziers', NULL, NULL, NULL),
(70, 34360, 'Cébazan', NULL, NULL, NULL),
(71, 34260, 'Ceilhes-et-Rocozels', NULL, NULL, NULL),
(72, 34700, 'Celles', NULL, NULL, NULL),
(73, 34420, 'Cers', 'a6576-800px-cers_mairie.jpg', 'c2ed9-2-vignoble-delonca-cuvee-rose.jpg', '4de5f-siti_vignoble-delonca-exterieur-web.jpg'),
(74, 34460, 'Cessenon-sur-Orb', NULL, NULL, NULL),
(75, 34210, 'Cesseras', NULL, NULL, NULL),
(76, 34800, 'Ceyras', NULL, NULL, NULL),
(77, 34830, 'Clapiers', NULL, NULL, NULL),
(78, 34270, 'Claret', NULL, NULL, NULL),
(79, 34800, 'Clermont-l\'Hérault', NULL, NULL, NULL),
(80, 34390, 'Colombières-sur-Orb', NULL, NULL, NULL),
(81, 34440, 'Colombiers', NULL, NULL, NULL),
(82, 34980, 'Combaillaux', NULL, NULL, NULL),
(83, 34240, 'Combes', NULL, NULL, NULL),
(84, 34490, 'Corneilhan', NULL, NULL, NULL),
(85, 34290, 'Coulobres', NULL, NULL, NULL),
(86, 34220, 'Courniou', NULL, NULL, NULL),
(87, 34660, 'Cournonsec', NULL, NULL, NULL),
(88, 34660, 'Cournonterral', NULL, NULL, NULL),
(89, 34370, 'Creissan', NULL, NULL, NULL),
(90, 34920, 'Le Crès', NULL, NULL, NULL),
(91, 34520, 'Le Cros', NULL, NULL, NULL),
(92, 34310, 'Cruzy', NULL, NULL, NULL),
(93, 34650, 'Dio-et-Valquières', NULL, NULL, NULL),
(94, 34290, 'Espondeilhan', NULL, NULL, NULL),
(95, 34690, 'Fabrègues', NULL, NULL, NULL),
(96, 34600, 'Faugères', NULL, NULL, NULL),
(97, 34210, 'Félines-Minervois', NULL, NULL, NULL),
(98, 34210, 'Ferrals-les-Montagnes', NULL, NULL, NULL),
(99, 34190, 'Ferrières-les-Verreries', NULL, NULL, NULL),
(100, 34360, 'Ferrières-Poussarou', NULL, NULL, NULL),
(101, 34510, 'Florensac', NULL, NULL, NULL),
(102, 34270, 'Fontanès', NULL, NULL, NULL),
(103, 34320, 'Fontès', NULL, NULL, NULL),
(104, 34320, 'Fos', NULL, NULL, NULL),
(105, 34480, 'Fouzilhon', NULL, NULL, NULL),
(106, 34700, 'Fozières', NULL, NULL, NULL),
(107, 34330, 'Fraisse-sur-Agout', NULL, NULL, NULL),
(108, 34110, 'Frontignan', NULL, NULL, NULL),
(109, 34320, 'Gabian', NULL, NULL, NULL),
(110, 34160, 'Galargues', NULL, NULL, NULL),
(111, 34190, 'Ganges', NULL, NULL, NULL),
(112, 34160, 'Garrigues', NULL, NULL, NULL),
(113, 34770, 'Gigean', NULL, NULL, NULL),
(114, 34150, 'Gignac', NULL, NULL, NULL),
(115, 34190, 'Gorniès', NULL, NULL, NULL),
(116, 34790, 'Grabels', NULL, NULL, NULL),
(117, 34260, 'Graissessac', NULL, NULL, NULL),
(118, 34280, 'La Grande-Motte', NULL, NULL, NULL),
(119, 34820, 'Guzargues', NULL, NULL, NULL),
(120, 34600, 'Hérépian', NULL, NULL, NULL),
(121, 34830, 'Jacou', NULL, NULL, NULL),
(122, 34650, 'Joncels', NULL, NULL, NULL),
(123, 34725, 'Jonquières', NULL, NULL, NULL),
(124, 34990, 'Juvignac', NULL, NULL, NULL),
(125, 34800, 'Lacoste', NULL, NULL, NULL),
(126, 34150, 'Lagamas', NULL, NULL, NULL),
(127, 34240, 'Lamalou-les-Bains', NULL, NULL, NULL),
(128, 34130, 'Lansargues', NULL, NULL, NULL),
(129, 34190, 'Laroque', NULL, NULL, NULL),
(130, 34970, 'Lattes', NULL, NULL, NULL),
(131, 34480, 'Laurens', NULL, NULL, NULL),
(132, 34270, 'Lauret', NULL, NULL, NULL),
(133, 34700, 'Lauroux', NULL, NULL, NULL),
(134, 34700, 'Lavalette', NULL, NULL, NULL),
(135, 34880, 'Lavérune', NULL, NULL, NULL),
(136, 34710, 'Lespignan', NULL, NULL, NULL),
(137, 34120, 'Lézignan-la-Cèbe', NULL, NULL, NULL),
(138, 34800, 'Liausson', NULL, NULL, NULL),
(139, 34800, 'Lieuran-Cabrières', NULL, NULL, NULL),
(140, 34290, 'Lieuran-lès-Béziers', NULL, NULL, NULL),
(141, 34490, 'Lignan-sur-Orb', NULL, NULL, NULL),
(142, 34210, 'La Livinière', NULL, NULL, NULL),
(143, 34700, 'Lodève', NULL, NULL, NULL),
(144, 34140, 'Loupian', NULL, NULL, NULL),
(145, 34650, 'Lunas', NULL, NULL, NULL),
(146, 34400, 'Lunel', NULL, NULL, NULL),
(147, 34400, 'Lunel-Viel', NULL, NULL, NULL),
(148, 34480, 'Magalas', NULL, NULL, NULL),
(149, 34370, 'Maraussan', NULL, NULL, NULL),
(150, 34320, 'Margon', NULL, NULL, NULL),
(151, 34340, 'Marseillan', NULL, NULL, NULL),
(152, 34590, 'Marsillargues', NULL, NULL, NULL),
(153, 34380, 'Mas-de-Londres', NULL, NULL, NULL),
(154, 34270, 'Les Matelles', NULL, NULL, NULL),
(155, 34130, 'Mauguio', NULL, NULL, NULL),
(156, 34370, 'Maureilhan', NULL, NULL, NULL),
(157, 34800, 'Mérifons', NULL, NULL, NULL),
(158, 34140, 'Mèze', NULL, NULL, NULL),
(159, 34210, 'Minerve', NULL, NULL, NULL),
(160, 34110, 'Mireval', NULL, NULL, NULL),
(161, 34390, 'Mons', NULL, NULL, NULL),
(162, 34310, 'Montady', NULL, NULL, NULL),
(163, 34530, 'Montagnac', NULL, NULL, NULL),
(164, 34570, 'Montarnaud', NULL, NULL, NULL),
(165, 34160, 'Montaud', NULL, NULL, NULL),
(166, 34560, 'Montbazin', NULL, NULL, NULL),
(167, 34290, 'Montblanc', NULL, NULL, NULL),
(168, 34310, 'Montels', NULL, NULL, NULL),
(169, 34320, 'Montesquieu', NULL, NULL, NULL),
(170, 34980, 'Montferrier-sur-Lez', NULL, NULL, NULL),
(171, 34310, 'Montouliers', NULL, NULL, NULL),
(172, 34190, 'Montoulieu', NULL, NULL, NULL),
(173, 34000, 'Montpellier', '00b5e-residence-etudiante-lobservatoire-montpellierplace-comedie.jpg', '8e961-montpellier_ville_nuit.jpg', '14699-maxresdefault.jpg'),
(174, 34150, 'Montpeyroux', NULL, NULL, NULL),
(175, 34190, 'Moulès-et-Baucels', NULL, NULL, NULL),
(176, 34800, 'Mourèze', NULL, NULL, NULL),
(177, 34130, 'Mudaison', NULL, NULL, NULL),
(178, 34980, 'Murles', NULL, NULL, NULL),
(179, 34490, 'Murviel-lès-Béziers', NULL, NULL, NULL),
(180, 34570, 'Murviel-lès-Montpellier', NULL, NULL, NULL),
(181, 34800, 'Nébian', NULL, NULL, NULL),
(182, 34320, 'Neffiès', NULL, NULL, NULL),
(183, 34120, 'Nézignan-l\'Évêque', NULL, NULL, NULL),
(184, 34440, 'Nissan-lez-Enserune', NULL, NULL, NULL),
(185, 34320, 'Nizas', NULL, NULL, NULL),
(186, 34380, 'Notre-Dame-de-Londres', NULL, NULL, NULL),
(187, 34800, 'Octon', NULL, NULL, NULL),
(188, 34390, 'Olargues', NULL, NULL, NULL),
(189, 34700, 'Olmet-et-Villecun', NULL, NULL, NULL),
(190, 34210, 'Olonzac', NULL, NULL, NULL),
(191, 34210, 'Oupia', NULL, NULL, NULL),
(192, 34490, 'Pailhès', NULL, NULL, NULL),
(193, 34250, 'Palavas-les-Flots', NULL, NULL, NULL),
(194, 34360, 'Pardailhan', NULL, NULL, NULL),
(195, 34230, 'Paulhan', NULL, NULL, NULL),
(196, 34380, 'Pégairolles-de-Buèges', NULL, NULL, NULL),
(197, 34700, 'Pégairolles-de-l\'Escalette', NULL, NULL, NULL),
(198, 34800, 'Péret', NULL, NULL, NULL),
(199, 34470, 'Pérols', NULL, NULL, NULL),
(200, 34120, 'Pézenas', NULL, NULL, NULL),
(201, 34600, 'Pézènes-les-Mines', NULL, NULL, NULL),
(202, 34360, 'Pierrerue', NULL, NULL, NULL),
(203, 34570, 'Pignan', NULL, NULL, NULL),
(204, 34850, 'Pinet', NULL, NULL, NULL),
(205, 34230, 'Plaissan', NULL, NULL, NULL),
(206, 34700, 'Les Plans', NULL, NULL, NULL),
(207, 34310, 'Poilhes', NULL, NULL, NULL),
(208, 34810, 'Pomérols', NULL, NULL, NULL),
(209, 34230, 'Popian', NULL, NULL, NULL),
(210, 34420, 'Portiragnes', NULL, NULL, NULL),
(211, 34230, 'Le Pouget', NULL, NULL, NULL),
(212, 34600, 'Le Poujol-sur-Orb', NULL, NULL, NULL),
(213, 34700, 'Poujols', NULL, NULL, NULL),
(214, 34560, 'Poussan', NULL, NULL, NULL),
(215, 34480, 'Pouzolles', NULL, NULL, NULL),
(216, 34230, 'Pouzols', NULL, NULL, NULL),
(217, 34600, 'Le Pradal', NULL, NULL, NULL),
(218, 34730, 'Prades-le-Lez', NULL, NULL, NULL),
(219, 34360, 'Prades-sur-Vernazobre', NULL, NULL, NULL),
(220, 34390, 'Prémian', NULL, NULL, NULL),
(221, 34700, 'Le Puech', NULL, NULL, NULL),
(222, 34150, 'Puéchabon', NULL, NULL, NULL),
(223, 34230, 'Puilacher', NULL, NULL, NULL),
(224, 34480, 'Puimisson', NULL, NULL, NULL),
(225, 34480, 'Puissalicon', NULL, NULL, NULL),
(226, 34620, 'Puisserguier', NULL, NULL, NULL),
(227, 34310, 'Quarante', NULL, NULL, NULL),
(228, 34160, 'Restinclières', NULL, NULL, NULL),
(229, 34220, 'Rieussec', NULL, NULL, NULL),
(230, 34220, 'Riols', NULL, NULL, NULL),
(231, 34520, 'Les Rives', NULL, NULL, NULL),
(232, 34650, 'Romiguières', NULL, NULL, NULL),
(233, 34460, 'Roquebrun', NULL, NULL, NULL),
(234, 34650, 'Roqueredonde', NULL, NULL, NULL),
(235, 34320, 'Roquessels', NULL, NULL, NULL),
(236, 34610, 'Rosis', NULL, NULL, NULL),
(237, 34380, 'Rouet', NULL, NULL, NULL),
(238, 34320, 'Roujan', NULL, NULL, NULL),
(239, 34190, 'Saint-André-de-Buèges', NULL, NULL, NULL),
(240, 34725, 'Saint-André-de-Sangonis', NULL, NULL, NULL),
(241, 34130, 'Saint-Aunès', NULL, NULL, NULL),
(242, 34230, 'Saint-Bauzille-de-la-Sylve', NULL, NULL, NULL),
(243, 34160, 'Saint-Bauzille-de-Montmel', NULL, NULL, NULL),
(244, 34190, 'Saint-Bauzille-de-Putois', NULL, NULL, NULL),
(245, 34670, 'Saint-Brès', NULL, NULL, NULL),
(246, 34360, 'Saint-Chinian', NULL, NULL, NULL),
(247, 34400, 'Saint-Christol', NULL, NULL, NULL),
(248, 34980, 'Saint-Clément-de-Rivière', NULL, NULL, NULL),
(249, 34160, 'Saint-Drézéry', NULL, NULL, NULL),
(250, 34270, 'Sainte-Croix-de-Quintillargues', NULL, NULL, NULL),
(251, 34390, 'Saint-Étienne-d\'Albagnan', NULL, NULL, NULL),
(252, 34700, 'Saint-Étienne-de-Gourgas', NULL, NULL, NULL),
(253, 34260, 'Saint-Étienne-Estréchoux', NULL, NULL, NULL),
(254, 34520, 'Saint-Félix-de-l\'Héras', NULL, NULL, NULL),
(255, 34725, 'Saint-Félix-de-Lodez', NULL, NULL, NULL),
(256, 34980, 'Saint-Gély-du-Fesc', NULL, NULL, NULL),
(257, 34480, 'Saint-Geniès-de-Fontedit', NULL, NULL, NULL),
(258, 34160, 'Saint-Geniès-des-Mourgues', NULL, NULL, NULL),
(259, 34610, 'Saint-Geniès-de-Varensal', NULL, NULL, NULL),
(260, 34680, 'Saint-Georges-d\'Orques', NULL, NULL, NULL),
(261, 34610, 'Saint-Gervais-sur-Mare', NULL, NULL, NULL),
(262, 34150, 'Saint-Guilhem-le-Désert', NULL, NULL, NULL),
(263, 34725, 'Saint-Guiraud', NULL, NULL, NULL),
(264, 34160, 'Saint-Hilaire-de-Beauvoir', NULL, NULL, NULL),
(265, 34380, 'Saint-Jean-de-Buèges', NULL, NULL, NULL),
(266, 34160, 'Saint-Jean-de-Cornies', NULL, NULL, NULL),
(267, 34270, 'Saint-Jean-de-Cuculles', NULL, NULL, NULL),
(268, 34150, 'Saint-Jean-de-Fos', NULL, NULL, NULL),
(269, 34700, 'Saint-Jean-de-la-Blaquière', NULL, NULL, NULL),
(270, 34360, 'Saint-Jean-de-Minervois', NULL, NULL, NULL),
(271, 34430, 'Saint-Jean-de-Védas', NULL, NULL, NULL),
(272, 34390, 'Saint-Julien', NULL, NULL, NULL),
(273, 34400, 'Saint-Just', NULL, NULL, NULL),
(274, 34390, 'Saint-Martin-de-l\'Arçon', NULL, NULL, NULL),
(275, 34380, 'Saint-Martin-de-Londres', NULL, NULL, NULL),
(276, 34270, 'Saint-Mathieu-de-Tréviers', NULL, NULL, NULL),
(277, 34520, 'Saint-Maurice-Navacelles', NULL, NULL, NULL),
(278, 34520, 'Saint-Michel', NULL, NULL, NULL),
(279, 34490, 'Saint-Nazaire-de-Ladarez', NULL, NULL, NULL),
(280, 34400, 'Saint-Nazaire-de-Pézan', NULL, NULL, NULL),
(281, 34230, 'Saint-Pargoire', NULL, NULL, NULL),
(282, 34570, 'Saint-Paul-et-Valmalle', NULL, NULL, NULL),
(283, 34520, 'Saint-Pierre-de-la-Fage', NULL, NULL, NULL),
(284, 34230, 'Saint-Pons-de-Mauchiens', NULL, NULL, NULL),
(285, 34220, 'Saint-Pons-de-Thomières', NULL, NULL, NULL),
(286, 34700, 'Saint-Privat', NULL, NULL, NULL),
(287, 34725, 'Saint-Saturnin-de-Lucian', NULL, NULL, NULL),
(288, 34400, 'Saint-Sériès', NULL, NULL, NULL),
(289, 34630, 'Saint-Thibéry', NULL, NULL, NULL),
(290, 34730, 'Saint-Vincent-de-Barbeyrargues', NULL, NULL, NULL),
(291, 34390, 'Saint-Vincent-d\'Olargues', NULL, NULL, NULL),
(292, 34800, 'Salasc', NULL, NULL, NULL),
(293, 34330, 'La Salvetat-sur-Agout', NULL, NULL, NULL),
(294, 34400, 'Saturargues', NULL, NULL, NULL),
(295, 34570, 'Saussan', NULL, NULL, NULL),
(296, 34160, 'Saussines', NULL, NULL, NULL),
(297, 34270, 'Sauteyrargues', NULL, NULL, NULL),
(298, 34410, 'Sauvian', NULL, NULL, NULL),
(299, 34410, 'Sérignan', NULL, NULL, NULL),
(300, 34290, 'Servian', NULL, NULL, NULL),
(301, 34200, 'Sète', NULL, NULL, NULL),
(302, 34210, 'Siran', NULL, NULL, NULL),
(303, 34520, 'Sorbs', NULL, NULL, NULL),
(304, 34700, 'Soubès', NULL, NULL, NULL),
(305, 34330, 'Le Soulié', NULL, NULL, NULL),
(306, 34700, 'Soumont', NULL, NULL, NULL),
(307, 34160, 'Sussargues', NULL, NULL, NULL),
(308, 34600, 'Taussac-la-Billière', NULL, NULL, NULL),
(309, 34820, 'Teyran', NULL, NULL, NULL),
(310, 34490, 'Thézan-lès-Béziers', NULL, NULL, NULL),
(311, 34120, 'Tourbes', NULL, NULL, NULL),
(312, 34260, 'La Tour-sur-Orb', NULL, NULL, NULL),
(313, 34230, 'Tressan', NULL, NULL, NULL),
(314, 34270, 'Le Triadou', NULL, NULL, NULL),
(315, 34230, 'Usclas-d\'Hérault', NULL, NULL, NULL),
(316, 34700, 'Usclas-du-Bosc', NULL, NULL, NULL),
(317, 34520, 'La Vacquerie-et-Saint-Martin-de-Castries', NULL, NULL, NULL),
(318, 34270, 'Vacquières', NULL, NULL, NULL),
(319, 34320, 'Vailhan', NULL, NULL, NULL),
(320, 34570, 'Vailhauquès', NULL, NULL, NULL),
(321, 34130, 'Valergues', NULL, NULL, NULL),
(322, 34270, 'Valflaunès', NULL, NULL, NULL),
(323, 34800, 'Valmascle', NULL, NULL, NULL),
(324, 34350, 'Valras-Plage', NULL, NULL, NULL),
(325, 34290, 'Valros', NULL, NULL, NULL),
(326, 34220, 'Vélieux', NULL, NULL, NULL),
(327, 34740, 'Vendargues', NULL, NULL, NULL),
(328, 34230, 'Vendémian', NULL, NULL, NULL),
(329, 34350, 'Vendres', NULL, NULL, NULL),
(330, 34400, 'Vérargues', NULL, NULL, NULL),
(331, 34220, 'Verreries-de-Moussans', NULL, NULL, NULL),
(332, 34450, 'Vias', NULL, NULL, NULL),
(333, 34110, 'Vic-la-Gardiole', NULL, NULL, NULL),
(334, 34390, 'Vieussan', NULL, NULL, NULL),
(335, 34600, 'Villemagne-l\'Argentière', NULL, NULL, NULL),
(336, 34420, 'Villeneuve-lès-Béziers', NULL, NULL, NULL),
(337, 34750, 'Villeneuve-lès-Maguelone', NULL, NULL, NULL),
(338, 34800, 'Villeneuvette', NULL, NULL, NULL),
(339, 34360, 'Villespassans', NULL, NULL, NULL),
(340, 34400, 'Villetelle', NULL, NULL, NULL),
(341, 34560, 'Villeveyrac', NULL, NULL, NULL),
(342, 34380, 'Viols-en-Laval', NULL, NULL, NULL),
(343, 34380, 'Viols-le-Fort', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `mail`, `user`, `password`, `info`) VALUES
(1, 'cros', 'clement', 'clemof34420@gmail.com', 'clement-cros', 'password1', 'je suis un petit producteur du numérique\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
CREATE TABLE IF NOT EXISTS `partenaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `lienv` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `nom`, `image`, `lienv`) VALUES
(1, 'CROS CORPORATION', 'http://www.hoganlovells.com/~/media/hogan-lovells/images/service-practice/corporate3.jpg', 'www.sitebetatest.fr');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_city` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `describe` text NOT NULL,
  `img_1` varchar(100) NOT NULL,
  `img_2` varchar(100) DEFAULT NULL,
  `img_3` varchar(100) DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `special_offer` varchar(150) DEFAULT NULL,
  `note` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_ville` (`id_city`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `id_city`, `id_client`, `name`, `describe`, `img_1`, `img_2`, `img_3`, `id_category`, `price`, `special_offer`, `note`) VALUES
(1, 50, 1, 'comcombres', 'Un joli comcombre qui viens du sud de la france\r\n', '', NULL, NULL, 1, 150, '1 acheter 2 a payer', 0),
(2, 32, 1, 'paté en croute', 'Un bon paté en croute qui vous feras le plus grand bien\r\n', '9bbbe-telecharge.jpg', 'cea01-4256.jpg', 'eec0e-i12176-pate-de-faisan-facile.jpg', 1, 25, 'y\'en a pas', 2),
(4, 32, 1, 'le produit', 'voici le produit qui défonce parce que oui on aime le paté :)', '658a0-4256.jpg', NULL, NULL, 1, 25, '1 acheter 1 offert !', 5),
(5, 32, 1, 'saucisson', 'Un saucisson est une charcuterie composée d\'un hachis d\'une ou plusieurs viandes, principalement du porc, que l\'on assaisonne de multiples façons suivant des traditions locales, régionales ou nationales.', 'a0cd0-saucisson-chasseur.jpg', NULL, NULL, 1, 30, '1 acheté le deuxième payant', 3),
(6, 32, 1, 'VIN rouge ', 'venez savourez notre nouveau cépage de l\'année 2016 au comptoir du pochtron \r\n', '48f98-vins-terrasses-du-larzac-caves-paul-riquet-beziers-1100x729.jpg', NULL, NULL, 2, 12, NULL, 3),
(7, 73, 1, 'paté', '<p>\r\n	un bon pat&eacute; &ccedil;a :)</p>\r\n', 'edacb-telecharge.jpg', NULL, NULL, 1, 12, NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
