-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 mai 2020 à 12:20
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ranaweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCmd` int(11) NOT NULL AUTO_INCREMENT,
  `dateCmd` date NOT NULL,
  `idClient` int(11) NOT NULL,
  `Qt_cmd` int(11) NOT NULL,
  PRIMARY KEY (`idCmd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_client` int(11) NOT NULL,
  `date_ajout` date NOT NULL,
  `sujet` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `id_Rec` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_Rec`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_client`, `date_ajout`, `sujet`, `description`, `id_Rec`) VALUES
(5, '2020-04-28', 'dddddddddddd', 'VVdVVddd', 1),
(5, '2020-04-28', 'kadjkadaaaa', 'LLLLLLLL', 2),
(5, '2020-04-28', 'kadjkadaaaafff', 'kkkkkkkkkkkkkkkkk', 3),
(5, '2020-05-21', 'kadjkadaaaafff', 'aaaaaaaaaa', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
