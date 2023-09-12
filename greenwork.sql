-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 27 juin 2022 à 23:34
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `greenwork`
--

-- --------------------------------------------------------

--
-- Structure de la table `greenworkp`
--

CREATE TABLE `greenworkp` (
  `id` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `auteur` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `greenworkp`
--

INSERT INTO `greenworkp` (`id`, `Titre`, `description`, `image`, `auteur`) VALUES
(22, 'Pneu recyclé en pouf.', 'Intérieur renforcé pour une meilleure tenue du pneu. Assise en mousse et ouate. 4 patins sur le dessous. Pneu peint et vernis.', '.\\image\\e433469a912850bd93ea2ba14e8f3cb3.jpeg', 'omarch'),
(23, 'Transformez vos raquettes de tennis en miroirs ', 'Des raquettes de tennis en miroirs', '.\\image\\des-raquettes-de-tennis-en-miroir-1-750x410.jpeg', 'omarch'),
(24, 'Très pratique, ce pot légèrement conique possède une poignée, vous pourrez donc le poser sur une table ou l\'accrocher au mur. Il peut remplir plusieurs fonctions telles que pot à crayon, pour les brosses à dents, pour ranger des ustensiles de cuisine,...', 'Pot rond avec anse en pneu recyclé', '.\\image\\product_10646465b.jpeg', 'user2');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nomUtilisateur` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id`, `nom`, `prenom`, `email`, `nomUtilisateur`, `pass`) VALUES
(25, 'cherti', 'omar', 'omarcherti@gmail.com', 'omarch', 'OMAROMAR'),
(30, 'USER', 'USER', 'USER@USER.com', 'USER1', 'USERUSER'),
(31, 'user2', 'user2', 'user2@user.com', 'user2', 'Useruser2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `greenworkp`
--
ALTER TABLE `greenworkp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `greenworkp`
--
ALTER TABLE `greenworkp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
