-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Mai 2015 à 17:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lb_self`
--

-- --------------------------------------------------------

--
-- Structure de la table `lb_clients`
--

CREATE TABLE IF NOT EXISTS `lb_clients` (
  `id_cli` int(2) NOT NULL AUTO_INCREMENT,
  `nom_cli` varchar(20) NOT NULL,
  `prenom_cli` varchar(30) NOT NULL,
  `reg_cli` varchar(20) NOT NULL,
  `classe_cli` varchar(15) NOT NULL,
  `lun_cli` int(1) NOT NULL,
  `mar_cli` int(1) NOT NULL,
  `merc_cli` int(1) NOT NULL,
  `jeu_cli` int(1) NOT NULL,
  `ven_cli` int(1) NOT NULL,
  `solde_cli` int(5) NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=411010 ;

--
-- Contenu de la table `lb_clients`
--

INSERT INTO `lb_clients` (`id_cli`, `nom_cli`, `prenom_cli`, `reg_cli`, `classe_cli`, `lun_cli`, `mar_cli`, `merc_cli`, `jeu_cli`, `ven_cli`, `solde_cli`) VALUES
(411001, 'Chaud', 'François-Emile', '2', 'TS2SIO', 1, 1, 1, 1, 1, 30),
(411002, 'Norris', 'Chuck', '3', 'TS2SIO', 1, 0, 1, 0, 0, 265),
(411003, 'Robuchon', 'Joël', '3', 'TS2SIO', 0, 0, 0, 0, 0, 800),
(411004, 'Durand', 'Jeanne', '1', 'TS1ASG', 0, 0, 0, 0, 0, 240),
(411005, 'Dupont', 'Bertrand', '2', 'TL1', 0, 0, 0, 0, 0, 10),
(411006, 'Dupuis', 'Jean-Luc', '4', '', 0, 0, 0, 0, 0, 1505),
(411007, 'Fort', 'Juliette', '1', 'TL2', 0, 0, 0, 0, 0, 400),
(411008, 'Lahaye', 'Brigitte', '1', 'TS1TOUR', 0, 0, 0, 0, 0, 750),
(411009, 'Belhani', 'Saoud', '2', 'TS1SIO', 0, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `lb_connect`
--

CREATE TABLE IF NOT EXISTS `lb_connect` (
  `id_connect` int(11) NOT NULL AUTO_INCREMENT,
  `nom_connect` varchar(30) NOT NULL,
  `prenom_connect` varchar(30) NOT NULL,
  `type_connect` varchar(30) NOT NULL,
  `log_connect` varchar(30) NOT NULL,
  `mdp_connect` varchar(30) NOT NULL,
  PRIMARY KEY (`id_connect`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `lb_connect`
--

INSERT INTO `lb_connect` (`id_connect`, `nom_connect`, `prenom_connect`, `type_connect`, `log_connect`, `mdp_connect`) VALUES
(1, 'Sageau', 'Pierre', 'superadmin', 'superadmin', 'superadmin'),
(2, 'Comptable', 'Comptable', 'comptabilite', 'compta', 'compta'),
(3, 'Surveillant', 'Surveillant', 'surveillant', 'surveillant', 'surveillant');

-- --------------------------------------------------------

--
-- Structure de la table `lb_credit`
--

CREATE TABLE IF NOT EXISTS `lb_credit` (
  `id_cred` int(2) NOT NULL AUTO_INCREMENT,
  `date_cred` date NOT NULL,
  `montant_cred` int(5) NOT NULL,
  `type_cred` int(1) NOT NULL,
  `id_cli` int(2) NOT NULL,
  PRIMARY KEY (`id_cred`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `lb_credit`
--

INSERT INTO `lb_credit` (`id_cred`, `date_cred`, `montant_cred`, `type_cred`, `id_cli`) VALUES
(1, '2015-04-16', 15, 1, 411001),
(2, '2015-04-16', 150, 2, 411002);

-- --------------------------------------------------------

--
-- Structure de la table `lb_passage`
--

CREATE TABLE IF NOT EXISTS `lb_passage` (
  `id_passage` int(2) NOT NULL,
  `date_passage` date NOT NULL,
  `serv_passage` varchar(10) NOT NULL,
  `mont_repas` int(2) NOT NULL,
  `id_repas` int(2) NOT NULL,
  `id_client` int(2) NOT NULL,
  PRIMARY KEY (`id_passage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lb_regime`
--

CREATE TABLE IF NOT EXISTS `lb_regime` (
  `id_regime` int(2) NOT NULL,
  `nom_regime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lb_regime`
--

INSERT INTO `lb_regime` (`id_regime`, `nom_regime`) VALUES
(1, 'externe'),
(2, 'interne'),
(3, 'demi-pensionnaire'),
(4, 'personnel');

-- --------------------------------------------------------

--
-- Structure de la table `lb_repas`
--

CREATE TABLE IF NOT EXISTS `lb_repas` (
  `id_repas` int(2) NOT NULL,
  `lib_repas` varchar(40) NOT NULL,
  `tarif_repas` int(5) NOT NULL,
  `valide_repas` varchar(3) NOT NULL DEFAULT 'oui',
  PRIMARY KEY (`id_repas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lb_repas`
--

INSERT INTO `lb_repas` (`id_repas`, `lib_repas`, `tarif_repas`, `valide_repas`) VALUES
(1, 'Repas Complet', 8, 'oui'),
(2, 'Cafe', 1, 'oui'),
(3, 'Petit Dejeuner', 4, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `lb_service`
--

CREATE TABLE IF NOT EXISTS `lb_service` (
  `id_service` int(1) NOT NULL,
  `nom_service` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lb_service`
--

INSERT INTO `lb_service` (`id_service`, `nom_service`) VALUES
(1, 'Matin'),
(2, 'Midi'),
(3, 'Soir');

-- --------------------------------------------------------

--
-- Structure de la table `lb_typereglement`
--

CREATE TABLE IF NOT EXISTS `lb_typereglement` (
  `id_typereglement` int(1) NOT NULL,
  `libelle_typereglement` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lb_typereglement`
--

INSERT INTO `lb_typereglement` (`id_typereglement`, `libelle_typereglement`) VALUES
(1, 'Espèce'),
(2, 'Chèque');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
