-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Février 2015 à 17:17
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_etu`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `NumEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Specilite` varchar(20) NOT NULL,
  PRIMARY KEY (`NumEtudiant`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`NumEtudiant`, `Nom`, `Prenom`, `Specilite`) VALUES
(1, 'Ghannam', 'Meriem', 'Danseuse orientale '),
(2, 'Wagon', 'Matthieu', 'DÃ©veloppeur PHP - E'),
(3, 'Boubou', 'Dihya', 'Astronome'),
(4, 'Tuyen ', 'Soleil', 'GÃ©ologie nuclÃ©aire'),
(5, 'Boubou', 'Matthieu', 'Danseuse orientale');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
