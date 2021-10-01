-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 01 oct. 2021 à 10:02
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `role` varchar(20) COLLATE utf8_bin NOT NULL,
  `tph` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `password`, `nom`, `prenom`, `role`, `tph`) VALUES
(1, 'eithel57@gmail.com', 'test', 'MOCCATTI', 'François', 'Admin', '060606060606'),
(2, 'bob@hotmail.fr', '123456', 'BERTRAND', 'Bob', 'client', '0707070707'),
(3, 'jeannine@live.fr', '654321', 'DURAND', 'Jeannine', 'client', '0808080808'),
(4, 'bob@stp.fr', '888888888', 'BON', 'Jean', 'client', '0707070707'),
(5, 'anouch@sfr.fr', '6525369502', 'GRAND', 'Anouch', 'client', '0202020202'),
(6, 'jacky@gmail.com', 'sexe', 'DURAND', 'Jacky', 'client', '0607080910'),
(7, 'michel@gmail.com', '321654', 'MARTIN', 'Michel', 'client', '0205040610'),
(8, 'fdkslmfkdsml@sfr.fr', '213546456', 'PETIT', 'Caroline', 'client', '3256325632'),
(11, 'email@gmail.fr', 'pwd', 'Callagan', 'Jj', 'User', '6666666666'),
(12, 'Jeanne@php.fr', 'gdgdfg', 'Bob', 'ggdfgd', 'client', '213215456465');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `i_email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
