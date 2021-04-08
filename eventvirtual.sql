-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 avr. 2021 à 11:10
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eventvirtual`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacter`
--

CREATE TABLE `contacter` (
  `id` int(150) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacter`
--

INSERT INTO `contacter` (`id`, `nom`, `email`, `message`) VALUES
(1, '', '', ''),
(6, 'mayssa', 'elmay@gmail.com', 'mmmm\r\n'),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `creercompte`
--

CREATE TABLE `creercompte` (
  `id` int(150) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nomf` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `num` int(8) NOT NULL,
  `dataN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creercompte`
--

INSERT INTO `creercompte` (`id`, `prenom`, `nomf`, `email`, `password`, `num`, `dataN`) VALUES
(1, 'mayssa', 'may', 'elmay@gmail.com', '$2y$10$D6WNv112mtdBqubZ7xIr2.8yFiexznxAfOZQXuR9UdW', 222, '2015-12-05'),
(2, 'mayssa', 'may', 'elmay@gmail.com', '$2y$10$aPuElELWztX36UdVJ6y9vuihM4z5bSZg6BBSnxmWQgI', 22336655, '2015-12-03'),
(3, 'mayssa', 'may', 'elmay@gmail.com', '', 22222222, '2018-07-22'),
(4, '', '', '', '', 0, ''),
(5, '', '', '', '', 0, ''),
(6, '', '', '', '', 0, ''),
(7, 'mayssa', 'may', 'elmay@gmail.com', 'mmm', 22336655, '2018-07-22'),
(8, '', '', '', '', 0, ''),
(9, '', '', '', '', 0, ''),
(10, '', '', '', '', 0, ''),
(11, '', '', '', '', 0, ''),
(12, '', '', '', '', 0, ''),
(13, '', '', '', '', 0, ''),
(14, '', '', '', '', 0, ''),
(15, 'mayssa', 'may', 'elmay@gmail.com', '%%MMMMMM', 22336655, '2018-07-22'),
(16, '', '', '', '', 0, ''),
(17, 'mayssa', 'may', 'elmay@gmail.com', 'mmmmmm', 22222222, '2018-07-22'),
(18, '', '', '', '', 0, ''),
(19, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `creerstand`
--

CREATE TABLE `creerstand` (
  `id` int(50) NOT NULL,
  `noms` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `position` int(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creerstand`
--

INSERT INTO `creerstand` (`id`, `noms`, `password`, `email`, `video`, `couleur`, `position`, `logo`) VALUES
(245, 'istic', '$2y$10$cozWiM7f00aEFURCTV3bSOT9AmQYvU4IwBcMTktV2Wp', 'elmay@gmail.com', 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '#234c8b', 4, 'image4.jpg'),
(246, '', '$2y$10$yDHeJ6JZwByfIFmnotT6eOVoh04WhBleUObTJY6muHY', '', '', '', 4, ''),
(247, '', '$2y$10$xFWHuwH0r168y.CWEALXc.4J9WDIKGRNbvfwKza4IWa', '', '', '', 4, ''),
(248, '', '$2y$10$OSeHzBqP6QAeod0C8yyfxe6.NgdDvgAKyJlrJSH8E2W', '', '', '', 4, ''),
(249, '', '$2y$10$MNKsdb963LZhkqb1QVaLCOxKbtf3zgChlY4PxwQ7Hnr', '', '', '', 4, ''),
(250, '', '$2y$10$8dBAgxEL6uEhtPlEGJRnUOtSWo1.8/GtVwl..OLo/pP', '', '', '', 4, ''),
(251, '', '$2y$10$VTOYndPoKJtvX5YqknmvHeNoxyhuuvAWm0mPevScn3Z', '', '', '', 4, ''),
(252, '', '$2y$10$KAUNf/m/qBMS4DRK524Wt.43M5aRRU045XmmAndPOla', '', '', '', 4, ''),
(253, '', '$2y$10$22eDZAFjGSKahmrDjCumZuvYvFSIJ.FNtUEPHMYut/3', '', '', '', 4, ''),
(254, 'adidas', '$2y$10$TDOHJF1V.671ImmFAcqGSuhbzeXQFTNvmM9SdeYktmL', 'adidas@gmail.com', 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '#4d4d4d', 4, 'aa.jpg'),
(255, '', '$2y$10$Cxw.IAtiI5aFW8jUQKaQrOz3fe1EoOidY2TX8RRrclP', '', '', '', 4, ''),
(256, '', '$2y$10$ISFAgHn744Xm2q0j7LratOKzej7rljhWqbigLtSTjNJ', '', '', '', 3, ''),
(257, 'istic1', '$2y$10$fe5AA0CswyjgGAixicI8wO5U8KD4zV18MLdevw5qZpv', 'elmay@gmail.com', 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '#1f66d1', 3, 'bb.jpg'),
(258, '', '$2y$10$tznQfx0JeB74QnuIZXTv0e5/4vO7W9rPS0Kuvb8EWuU', '', '', '', 0, ''),
(259, '', '$2y$10$ADCw6ZsNXg82PLNK9AYD3eJo9KRo98RHjGqCez321My', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nomEntreprise` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nomEntreprise`, `email`, `password`, `logo`) VALUES
(38, 'ISTIC', 'elmay@gmail.com', 'mmm', 'image4.jpg'),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, 'lllll', '', 'mmmm', ''),
(49, 'lllll', '', 'mmmm', ''),
(50, 'lllll', '', 'mmmm', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', 'elmay@gmail.com', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, '', '', '', ''),
(74, '', '', '', ''),
(75, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(50) NOT NULL,
  `nomEvent` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `dateD` date NOT NULL,
  `dateF` date NOT NULL,
  `heureD` datetime(6) NOT NULL,
  `heureF` datetime(6) NOT NULL,
  `programme` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nomEvent`, `email`, `password`, `logo`, `dateD`, `dateF`, `heureD`, `heureF`, `programme`) VALUES
(24, '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacter`
--
ALTER TABLE `contacter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `creercompte`
--
ALTER TABLE `creercompte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `creerstand`
--
ALTER TABLE `creerstand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacter`
--
ALTER TABLE `contacter`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `creercompte`
--
ALTER TABLE `creercompte`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `creerstand`
--
ALTER TABLE `creerstand`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
