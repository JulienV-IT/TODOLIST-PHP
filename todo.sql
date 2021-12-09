-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 déc. 2021 à 12:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

DROP TABLE IF EXISTS `todo`;
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `statut` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `todo`
--

INSERT INTO `todo` (`id`, `nom`, `statut`, `date`) VALUES
(1, 'Sauver le monde', '2', '2021-12-08 17:56:18'),
(2, 'Aller manger', '2', '2021-12-08 17:56:34'),
(3, 'Nettoyer', '2', '2021-12-08 18:07:31'),
(4, 'Balayer', '2', '2021-12-08 18:07:39'),
(5, 'Astiquer casa toujours pimpante', '2', '2021-12-08 18:07:55'),
(6, 'Boire du café', '2', '2021-12-08 22:50:25'),
(7, 'Descendre les poubelles', '2', '2021-12-08 22:50:42'),
(8, 'Faire sa déclaration', '2', '2021-12-08 22:50:51'),
(9, 'S\'actualiser sur pole emploi ( l\'horreur !!! )', '2', '2021-12-08 22:51:16'),
(14, 'Descendre les poubelles', '2', '2021-12-09 08:23:14'),
(15, 'TP avec Julien', '2', '2021-12-09 09:00:20'),
(16, 'Dom', '2', '2021-12-09 11:28:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
