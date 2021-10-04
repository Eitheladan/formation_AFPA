-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 04 oct. 2021 à 14:42
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
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `numero` varchar(10) COLLATE utf8_bin NOT NULL,
  `voie` varchar(11) COLLATE utf8_bin NOT NULL,
  `adresse1` varchar(250) COLLATE utf8_bin NOT NULL,
  `adresse2` varchar(250) COLLATE utf8_bin NOT NULL,
  `code_post` varchar(5) COLLATE utf8_bin NOT NULL,
  `ville` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `id_utilisateur`, `numero`, `voie`, `adresse1`, `adresse2`, `code_post`, `ville`) VALUES
(3, 18, '45', 'Avenue', 'gal leclerc', '', '29870', 'TREGLONOU');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `motdepasse` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `role` varchar(20) COLLATE utf8_bin NOT NULL,
  `tph` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `motdepasse`, `nom`, `prenom`, `role`, `tph`) VALUES
(1, 'eithel57@gmail.com', 'test', 'MOCCATTI', 'François', 'Admin', '060606060606'),
(2, 'bob@hotmail.fr', '123456', 'BERTRAND', 'Bob', 'client', '0707070707'),
(3, 'jeannine@live.fr', '654321', 'DURAND', 'Jeannine', 'client', '0808080808'),
(4, 'bob@stp.fr', '888888888', 'BON', 'Jean', 'client', '0707070707'),
(5, 'anouch@sfr.fr', '6525369502', 'GRAND', 'Anouch', 'client', '0202020202'),
(6, 'jacky@gmail.com', 'sexe', 'DURAND', 'Jacky', 'client', '0607080910'),
(7, 'michel@gmail.com', '321654', 'MARTIN', 'Michel', 'client', '0205040610'),
(8, 'fdkslmfkdsml@sfr.fr', '213546456', 'PETIT', 'Caroline', 'client', '3256325632'),
(11, 'email@gmail.fr', 'pwd', 'Callagan', 'Jj', 'client', '6666666666'),
(12, 'Jeanne@php.fr', 'gdgdfg', 'Bob', 'ggdfgd', 'client', '213215456465'),
(13, 'camille@lelouche.inc', 'Jeanestmare', 'LELOUCHE', 'Camille', 'client', '1234567890'),
(14, 'test@bob.fr', '$2y$10$T4HdB0t4PXyhoW91PF0iUea9ugtEWddvMYAZI21wMhwHM9YRx0NzO', 'test', 'test', 'client', '1234567890'),
(15, 'test@test.fr', '$2y$10$XefJiwows66YHTncVTxOOOkOmCmHSXqT8tT/otrvkRcmvUui3z6Yq', 'test', 'test', 'client', 'test'),
(16, 'toto@msn.fr', '$2y$10$.yQuDlRmeYRHaiJMtGjgbuMypNW7ntonXmXD3qTGR4wQ4m8OrKPSq', 'TOTO', 'toto', 'client', 'toto'),
(17, 'moi@moi.com', '$2y$10$pbDMWKNfNoQrYa0h0tELquhsmkrD4hwkZQW89jJodiBjSfDPE2fhO', 'MOI', 'Toi', 'Admin', '1111111111'),
(18, 'jean@msn.fr', '$2y$10$2pbaS44VYygxQGXqQZjFxeOewG1.BC4Qmq/5DTqWCZJjWD7z1owwO', 'BON', 'Jean', 'client', '0658963521'),
(19, 'dqsdq', '$2y$10$DjvTWv16TYBug/wE6yqj7.s3gt2.wARVPyVvPVPgdehqV4UbKZMhO', 'dsqdqds', 'dqsd', 'client', 'dqssd');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
