-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Avril 2015 à 10:29
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
  `id_cli` int(2) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_cred` int(2) NOT NULL,
  `date_cred` date NOT NULL,
  `montant_cred` int(5) NOT NULL,
  `type_cred` int(1) NOT NULL,
  `id_cli` int(2) NOT NULL,
  PRIMARY KEY (`id_cred`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Structure de la table `lb_repas`
--

CREATE TABLE IF NOT EXISTS `lb_repas` (
  `id_repas` int(2) NOT NULL,
  `lib_repas` int(10) NOT NULL,
  `tarif_repas` int(5) NOT NULL,
  `serv_repas` varchar(10) NOT NULL,
  `valide_repas` int(1) NOT NULL,
  PRIMARY KEY (`id_repas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
