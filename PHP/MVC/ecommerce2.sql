-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 08 nov. 2021 à 20:18
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
(12, '2021-11-05', 2),
(13, '2021-11-05', 2),
(14, '2021-11-05', 2),
(15, '2021-11-05', 2),
(16, '2021-11-05', 2),
(17, '2021-11-06', 2),
(18, '2021-11-06', 2),
(19, '2021-11-06', 4),
(20, '2021-11-06', 2),
(21, '2021-11-06', 4),
(26, '2021-11-07', 8),
(27, '2021-11-07', 2),
(28, '2021-11-07', 2),
(29, '2021-11-08', 2),
(30, '2021-11-08', 2),
(31, '2021-11-08', 2),
(32, '2021-11-08', 2),
(33, '2021-11-08', 2);

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
(39, 2, 11, 6, 2),
(40, 2, 13, 1, 1),
(41, 2, 13, 3, 1),
(42, 2, 13, 6, 1),
(43, 2, 13, 7, 1),
(44, 2, 14, 1, 1),
(45, 2, 14, 2, 5),
(46, 2, 14, 3, 5),
(47, 2, 16, 1, 1),
(48, 2, 16, 2, 1),
(49, 2, 16, 3, 1),
(50, 2, 16, 5, 1),
(51, 2, 16, 6, 3),
(52, 2, 16, 7, 2),
(53, 2, 17, 1, 3),
(54, 2, 17, 2, 2),
(55, 2, 17, 3, 1),
(56, 2, 17, 4, 2),
(57, 2, 17, 5, 2),
(58, 2, 17, 6, 1),
(59, 2, 17, 11, 1),
(60, 4, 19, 2, 1),
(61, 4, 19, 3, 1),
(62, 4, 19, 8, 1),
(63, 4, 19, 9, 1),
(64, 2, 20, 1, 1),
(65, 2, 20, 6, 1),
(66, 2, 20, 9, 1),
(67, 2, 20, 10, 1),
(68, 2, 20, 11, 2),
(69, 4, 21, 1, 1),
(70, 4, 21, 2, 1),
(71, 4, 21, 3, 1),
(72, 4, 21, 10, 1),
(73, 4, 21, 2, 1),
(74, 4, 21, 3, 1),
(75, 4, 21, 1, 1),
(76, 4, 21, 2, 1),
(77, 4, 21, 3, 1),
(78, 4, 21, 2, 1),
(79, 4, 21, 3, 1),
(86, 8, 26, 2, 1),
(87, 8, 26, 4, 1);

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
  `id_type` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_tva` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `id_type`, `nom`, `prix`, `quantite`, `id_tva`, `image`, `stat`) VALUES
(1, 1, 'LA VIE EST BELLE', 30, 13, 1, 'parfum_femme', 100),
(2, 1, 'LA PETITE ROBE NOIRE', 30, 15, 1, 'parfum_femme', 85),
(3, 1, 'SCANDAL', 30, 4, 1, 'parfum_femme', 90),
(4, 2, 'POIRE-ANANAS', 5, 32, 1, 'geldouche', 50),
(5, 2, 'LA PETITE ROBE NOIRE', 7.5, 8, 2, 'geldouche', 80),
(6, 2, 'LA VIE EST BELLE', 7.5, 6, 2, 'geldouche2', 100),
(7, 2, 'THE SCENT', 7.5, 16, 2, 'geldouche3', 65),
(8, 3, 'OMBRE A PAUPIERE', 10, 21, 1, 'ombre a paupiere', 33),
(9, 3, 'ROUGE A LEVRE - ROUGE', 2.5, 10, 1, 'rouge-a-levre-rouge', 40),
(10, 3, 'ROUGE A LEVRE - BLEU', 3, 4, 1, 'rouge-a-levres-bleu-turquoise', 0),
(11, 2, 'A LA ROSE', 10, 22, 2, 'geldouche', 76);

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
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `nom_type`) VALUES
(1, 'parfum'),
(2, 'gel_douche'),
(3, 'maquillage');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `genre` varchar(2) NOT NULL DEFAULT 'M',
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `genre`, `mail`, `password`, `id_role`) VALUES
(1, 'Eithel', 'ADAN', 'M', 'eithel.adan@gmail.com', '$2y$10$1gDykRDxlFvO0GR/dGoHe.Ex5Q6kQ9sX1sdJnl1TaIHbgLbPgdAVq', 1),
(2, 'BON', 'Jean', 'M', 'jean.bon@gmail.com', '$2y$10$I0CtIEJ6aa3dEeJTuoTG2OMF/OW5127p5Z9jspJWgFI18t29VWADu', 2),
(4, 'OSTIQUE', 'Diane', 'F', 'diane.ostique@gmail.com', '$2y$10$WPlgf5/2g5CPQK3BJ7b2ZOud.ywY08l2Vz2zqwAca4Tr/kEfRwBY6', 2),
(5, 'ULTASONBON', 'Thérèse', 'F', 'poupette@gmail.com', '$2y$10$JEOCu7e2OJBGJ68AotJRa..D7uc9rHGV38ZJE5BvjLL21PsPnfTgK', 2),
(6, 'NICOUVERTURE', 'Sandra', 'F', 'sandra.nicouverture@gmail.com', '$2y$10$rtMWYpkbAeUmADE5BBUxCOVRgYWSdM55hBpgU9qkN0AO2d2zO0hEu', 2),
(8, 'De la Fraise', 'Fraisy', 'F', 'fraisy.delafraise@gmail.com', '$2y$10$JwFiKjbh4311W11YvTcquumX6l4EnCtTmtVFwLkMczUjut8tSmwbi', 2),
(9, 'Letparballes', 'Gilles', 'M', 'gilles.letparballes@gmail.com', '$2y$10$SQgk7iJrfNjpWQVX0QQdoeblFALxVQIOAINgdGLZRFfHOqhwjmypu', 2);

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
  ADD KEY `produit_tva_FK` (`id_tva`),
  ADD KEY `produit_type_FK` (`id_type`);

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
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

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
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `commande_valider`
--
ALTER TABLE `commande_valider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

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
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
