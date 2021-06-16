-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306 
-- Généré le : mer. 31 mars 2021 à 16:55
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensaj`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_c` int(11) NOT NULL,
  `code_c` varchar(50) DEFAULT NULL,
  `id_f` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_c`, `code_c`, `id_f`) VALUES
(5, '2ére année', 4),
(6, '3ére année', 4),
(7, '1ére année', 3),
(8, '2ére année', 3),
(9, '3ére année', 3),
(10, '1ére année', 2),
(11, '2ére année', 2),
(12, '3ére année', 2),
(65, '1ére année', 1),
(66, '1ére année', 4),
(67, '2ére année', 1),
(68, '3ére année', 1);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id_f` int(11) NOT NULL,
  `Code_f` varchar(50) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id_f`, `Code_f`, `libelle`) VALUES
(1, '2ITE', 'ingénierie d\'informatique et techniques émergentes'),
(2, 'ISIC', 'ingénierie des systémes informatiques et communica'),
(3, 'GI', 'génie industriel '),
(4, 'G2E', 'génie électrique et énergetique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `idf` (`id_f`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id_f`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`id_f`) REFERENCES `filiere` (`id_f`),
  ADD CONSTRAINT `classe_ibfk_2` FOREIGN KEY (`id_f`) REFERENCES `filiere` (`id_f`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
