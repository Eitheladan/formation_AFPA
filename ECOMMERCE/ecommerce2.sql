-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 05 nov. 2021 à 15:10
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
-- Base de données : `ecommerce2`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date`, `id_user`) VALUES
(1, '2011-03-21', 2),
(2, '2011-03-21', 2),
(3, '2011-03-21', 2),
(4, '2011-04-21', 2),
(5, '2011-04-21', 2),
(6, '2021-11-04', 4),
(7, '2021-11-04', 2),
(8, '2021-11-04', 2),
(9, '2021-11-04', 2),
(10, '2021-11-04', 2),
(11, '2021-11-05', 2),
(12, '2021-11-05', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commande_valider`
--

CREATE TABLE `commande_valider` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande_valider`
--

INSERT INTO `commande_valider` (`id`, `id_user`, `id_commande`, `id_produit`, `quantite`) VALUES
(1, 2, 1, 3, 1),
(2, 2, 1, 3, 1),
(3, 2, 1, 4, 4),
(4, 2, 1, 5, 2),
(5, 2, 1, 6, 2),
(6, 2, 1, 9, 1),
(7, 2, 2, 1, 1),
(8, 2, 2, 2, 2),
(9, 2, 2, 3, 1),
(10, 2, 2, 5, 1),
(11, 2, 2, 7, 1),
(12, 2, 2, 9, 1),
(13, 2, 3, 1, 1),
(14, 2, 3, 2, 2),
(15, 2, 3, 5, 1),
(16, 2, 3, 6, 1),
(17, 2, 4, 8, 1),
(18, 2, 5, 1, 1),
(19, 2, 5, 2, 1),
(20, 2, 5, 8, 1),
(21, 2, 5, 9, 1),
(22, 4, 6, 1, 2),
(23, 4, 6, 2, 1),
(24, 4, 6, 5, 1),
(25, 4, 6, 6, 1),
(26, 4, 6, 8, 1),
(27, 4, 6, 9, 1),
(28, 2, 8, 1, 1),
(29, 2, 9, 3, 1),
(30, 2, 9, 4, 1),
(31, 2, 9, 5, 1),
(32, 2, 9, 6, 1),
(33, 2, 9, 9, 1),
(34, 2, 10, 9, 1),
(35, 2, 10, 10, 14),
(36, 2, 11, 1, 9),
(37, 2, 11, 4, 2),
(38, 2, 11, 5, 3),
(39, 2, 11, 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_tva` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `type`, `nom`, `prix`, `quantite`, `id_tva`, `image`) VALUES
(1, 'parfum', 'LA VIE EST BELLE', 55, 25, 1, 'lavieestbelle'),
(2, 'parfum', 'LA PETITE ROBE NOIRE', 55, 0, 1, 'lapetiterobenoire'),
(3, 'parfum', 'SCANDAL', 55, 17, 1, 'scandal'),
(4, 'gel douche', 'POIRE-ANNANAS', 5, 36, 1, 'geldouche'),
(5, 'gel douche', 'LA PETITE ROBE NOIRE', 7.5, 11, 2, 'geldouche'),
(6, 'gel douche', 'LA VIE EST BELLE', 7.5, 13, 2, 'geldouche2'),
(7, 'gel douche', 'HUGO BOSS', 7.5, 19, 2, 'geldouche3'),
(8, 'maquillage', 'OMBRE A PAUPIERE', 10, 22, 1, 'ombre a paupiere'),
(9, 'maquillage', 'ROUGE A LEVRE - ROUGE', 2.5, 14, 1, 'rouge-a-levre-rouge'),
(10, 'maquillage', 'ROUGE A LEVRE - BLEU', 3, 6, 1, 'rouge-a-levres-bleu-turquoise'),
(11, 'gel douche', 'A LA ROSE', 10, 25, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `type`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

CREATE TABLE `tva` (
  `id_tva` int(11) NOT NULL,
  `taux` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tva`
--

INSERT INTO `tva` (`id_tva`, `taux`) VALUES
(1, 1.196),
(2, 1.055);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `mail`, `password`, `id_role`) VALUES
(1, 'Eithel', 'ADAN', 'eithel.adan@gmail.com', '$2y$10$1gDykRDxlFvO0GR/dGoHe.Ex5Q6kQ9sX1sdJnl1TaIHbgLbPgdAVq', 1),
(2, 'BON', 'Jean', 'jean.bon@gmail.com', '$2y$10$E/zbtHfi.04XEJ45D9dTDOXUBugxEW437mcMVJGAkW9jd.qqeeFd2', 2),
(4, 'OSTIQUE', 'Diane', 'diane.ostique@gmail.com', '$2y$10$WPlgf5/2g5CPQK3BJ7b2ZOud.ywY08l2Vz2zqwAca4Tr/kEfRwBY6', 2),
(5, 'ULTASONBON', 'Thérèse', 'poupette@gmail.fr', '$2y$10$JEOCu7e2OJBGJ68AotJRa..D7uc9rHGV38ZJE5BvjLL21PsPnfTgK', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `commande_users_FK` (`id_user`);

--
-- Index pour la table `commande_valider`
--
ALTER TABLE `commande_valider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`id_commande`,`id_produit`),
  ADD KEY `contient_produit0_FK` (`id_produit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `produit_tva_FK` (`id_tva`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `tva`
--
ALTER TABLE `tva`
  ADD PRIMARY KEY (`id_tva`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`mail`),
  ADD KEY `users_role_FK` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `commande_valider`
--
ALTER TABLE `commande_valider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_users_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_commande_FK` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `contient_produit0_FK` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_tva_FK` FOREIGN KEY (`id_tva`) REFERENCES `tva` (`id_tva`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
