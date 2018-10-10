-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 18 Mai 2015 à 17:13
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lb_self`
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
