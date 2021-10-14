-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 14 oct. 2021 à 14:57
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
-- Base de données : `mon_e_commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_commande` int(250) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_produit`, `id_commande`, `qte`) VALUES
(5, 9, 5, 8),
(6, 9, 5, 8),
(7, 9, 6, 2),
(8, 10, 6, 5),
(9, 10, 6, 3),
(10, 9, 7, 1),
(11, 10, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `comporter`
--

CREATE TABLE `comporter` (
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `quantite` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `list_commande`
--

CREATE TABLE `list_commande` (
  `id_commande` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `list_commande`
--

INSERT INTO `list_commande` (`id_commande`, `id_utilisateur`) VALUES
(6, 4),
(7, 4);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `qte` int(11) NOT NULL,
  `prix` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `ref_produit` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `prix_unitaire` int(11) NOT NULL,
  `img` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `ref_produit`, `nom`, `prix_unitaire`, `img`) VALUES
(8, 'PARF001_100', 'GABRIELLE CHANEL 100ml', 65, 'gabriellechanel.jfif'),
(9, 'PARF002_100', 'IRRESISTIBLE 100ml', 75, 'irresistible.jfif'),
(10, 'PARF003_100', 'LA VIE EST BELLE 100ml', 55, 'lavieestbelle.jfif'),
(11, 'PARF004_100', 'LIBRE100ml', 65, 'libre.jfif'),
(12, 'PARF005_100', 'NINA 100ml', 78, 'nina.jfif'),
(13, 'PARF006_100', 'ORMETA 100ml', 71, 'omerta.jfif');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `type`) VALUES
(1, 'Admin'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `entreprise` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `mdp` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_client`, `nom`, `prenom`, `email`, `entreprise`, `mdp`, `id_role`) VALUES
(2, 'ADAN', 'Eithel', 'eithel@adan.fr', 'JeanBoss', '$2y$10$HiiLscWb9WQejxMgvOebj.zO4h6iTS4cEhvJ1DqUQ0LuAP4SxM78m', 1),
(3, '', '', '', '', '$2y$10$2N1m0.VMlUnDObtt8/7GjONoG.Wri.hfEbhZEFD/apbPiGtppGoSO', 2),
(4, 'BON', 'Jean', 'cochonou@porcinet.fr', 'AuCochonDoux', '$2y$10$TGvYLX1Ho1xlLfj7GpDIDORvLuRGjsCJWDkwZNHuL4mTizDAa1GJ6', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comporter`
--
ALTER TABLE `comporter`
  ADD PRIMARY KEY (`id_produit`,`id_commande`),
  ADD KEY `comporter_commande0_FK` (`id_commande`);

--
-- Index pour la table `list_commande`
--
ALTER TABLE `list_commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PASSER` (`id_client`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `utilisateur_ROLE_FK` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `list_commande`
--
ALTER TABLE `list_commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comporter`
--
ALTER TABLE `comporter`
  ADD CONSTRAINT `comporter_commande0_FK` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `comporter_produit_FK` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `PASSER` FOREIGN KEY (`id_client`) REFERENCES `utilisateur` (`id_client`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ROLE_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
