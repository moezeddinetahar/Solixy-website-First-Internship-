-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 mai 2024 à 07:23
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `solixy_base`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `family` varchar(30) NOT NULL,
  `datebirth` date NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `firstname`, `family`, `datebirth`, `email`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user', '2024-01-01', 'user@user.com');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_adm`
--

DROP TABLE IF EXISTS `accounts_adm`;
CREATE TABLE IF NOT EXISTS `accounts_adm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `family` varchar(30) NOT NULL,
  `datebirth` date NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `accounts_adm`
--

INSERT INTO `accounts_adm` (`id`, `username`, `password`, `firstname`, `family`, `datebirth`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '2024-01-01', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int NOT NULL,
  `message` text NOT NULL,
  `remarque` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `type`, `email`, `phone`, `message`, `remarque`) VALUES
(4, 'Consulting', 'test@test.com', 99123456, 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `get_in_touch`
--

DROP TABLE IF EXISTS `get_in_touch`;
CREATE TABLE IF NOT EXISTS `get_in_touch` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` int NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `get_in_touch`
--

INSERT INTO `get_in_touch` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(5, 'med', 'med@gmail.com', 12345678, 'salut');

-- --------------------------------------------------------

--
-- Structure de la table `recup`
--

DROP TABLE IF EXISTS `recup`;
CREATE TABLE IF NOT EXISTS `recup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `datebirth` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `recup`
--

INSERT INTO `recup` (`id`, `email`, `datebirth`) VALUES
(59, 'test@test.com', '2011-01-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
