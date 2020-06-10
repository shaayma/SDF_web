-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 10 juin 2020 à 00:37
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.1.33

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
  `idProd` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCmd`),
  KEY `clicom` (`idClient`),
  KEY `aaa` (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

DROP TABLE IF EXISTS `commander`;
CREATE TABLE IF NOT EXISTS `commander` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpanier` int(11) NOT NULL,
  `prix` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kkkk` (`idpanier`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commander`
--

INSERT INTO `commander` (`id`, `idpanier`, `prix`, `date`) VALUES
(1, 1, NULL, NULL),
(2, 1, 5, '2020-06-09 22:05:03'),
(3, 1, 10, '2020-06-09 22:21:50'),
(4, 1, 22000, '2020-06-09 22:45:49'),
(5, 1, 22000, '2020-06-09 22:47:37'),
(6, 1, 22000, '2020-06-09 22:52:48'),
(7, 1, 22000, '2020-06-10 00:17:03'),
(8, 1, 22000, '2020-06-10 00:18:29');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idpanier` int(11) NOT NULL AUTO_INCREMENT,
  `idprod` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`idpanier`),
  KEY `ffff` (`idclient`),
  KEY `vvvvv` (`idprod`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`idpanier`, `idprod`, `idclient`, `qte`) VALUES
(1, 56, 2, 5),
(2, 58, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idproduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomproduit` varchar(255) NOT NULL,
  `imageproduit` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `prixpromo` float DEFAULT NULL,
  `dateajout` date NOT NULL,
  `marque` varchar(255) NOT NULL,
  PRIMARY KEY (`idproduit`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `nomproduit`, `imageproduit`, `quantite`, `description`, `prix`, `prixpromo`, `dateajout`, `marque`) VALUES
(56, 'Samsung galaxy S8 plus', 'S8-Galaxy.png', 77, 'Samsung galaxy s8 plus Exynos 64Gb UFHD', 2100, 1680, '2018-05-03', 'android'),
(58, 'iPhone 8', 'iphone8.jpg', 49, 'iPhone 8 128GB Black Mat', 2300, 1380, '2018-05-03', 'iphone');

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
  `etat` int(11) DEFAULT 0,
  PRIMARY KEY (`id_Rec`),
  KEY `clirec` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_client`, `date_ajout`, `sujet`, `description`, `id_Rec`, `etat`) VALUES
(9, '2020-05-22', 'aaaaaaaaa', 'aaaaaaaaaa', 26, 2),
(9, '2020-06-09', 'aaaaaaaaa', 'jkloik;ol', 27, 2),
(9, '2020-06-09', 'azazaz', 'azzazaz', 28, 0),
(9, '2020-06-09', 'aaaaaaaaa', 'azazazizaziz', 29, 0),
(9, '2020-06-09', 'wewe', '                                        wewe', 30, 2),
(9, '2020-06-09', 'wewe222', '                                        wewe', 31, 0),
(9, '2020-06-09', 'wewe33', '                                        zzzz', 32, 0),
(9, '2020-06-09', 'wewe33444', '                                      fingnfynhi  ', 33, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `dateajout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `password`, `email`, `adresse`, `age`, `type`, `dateajout`) VALUES
(2, 'ahmed', 'derbel', 'ahmedderbel', '12345', 'ahmed.derbel@esprit.tn', 'ariana', 25, 2, '0000-00-00'),
(6, 'admin', 'admin', 'admin', 'admin', 'admin@esprit.tn', 'sfax', 25, 1, '0000-00-00'),
(9, 'wiw', 'derbel', 'wiw', '12345', 'malek.guermazi@esprit.tn', 'rbaaa', 25, 2, '0000-00-00'),
(10, 'bouden', 'rym', 'BoudenRym', 'esprit', 'rym.bouden@esprit.tn', 'hfhjhdi', 20, 2, '2018-05-02');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `aaa` FOREIGN KEY (`idProd`) REFERENCES `produit` (`idproduit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `kkkk` FOREIGN KEY (`idpanier`) REFERENCES `panier` (`idpanier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `ffff` FOREIGN KEY (`idclient`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vvvvv` FOREIGN KEY (`idprod`) REFERENCES `produit` (`idproduit`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `clirec` FOREIGN KEY (`id_client`) REFERENCES `user` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
