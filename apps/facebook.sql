-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 19 avr. 2023 à 15:39
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
-- Base de données : `facebook`
--

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

DROP TABLE IF EXISTS `amis`;
CREATE TABLE IF NOT EXISTS `amis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `host` int NOT NULL,
  `guest` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `host` (`host`),
  KEY `guest` (`guest`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

DROP TABLE IF EXISTS `demandes`;
CREATE TABLE IF NOT EXISTS `demandes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `demandeur_id` int NOT NULL,
  `concerne_id` int NOT NULL,
  `statut` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'en attente',
  PRIMARY KEY (`id`),
  KEY `demandeur_id` (`demandeur_id`),
  KEY `concerne_id` (`concerne_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ddn` date NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `ddn`, `email`, `mdp`, `photo`) VALUES
(1, 'Christ', 'Kuzanuka', '2023-03-30', 'kris@live.cd', 'papa', '20230419023251.png'),
(2, 'Ethberg', 'Muzola', '2023-03-29', 'ethy@live.cd', 'papa', '20230419033727.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
