-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 11 Septembre 2019 à 15:33
-- Version du serveur :  5.7.27-0ubuntu0.16.04.1
-- Version de PHP :  7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dutinfopw20163`
--

-- --------------------------------------------------------

--
-- Structure de la table `joueur_foot`
--

CREATE TABLE `joueur_foot` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur_foot`
--

INSERT INTO `joueur_foot` (`id`, `nom`, `description`) VALUES
(1, 'Zidane', 'Zinédine Zidane, né le 23 juin 1972 à Marseille, est un footballeur international français devenu entraîneur. Durant sa carrière de joueur, entre 1988 et 2006, il évolue au poste de milieu offensif, comme meneur de jeu. De janvier 2016 à fin mai 2018, et à partir de mars 2019, il est l\'entraîneur du Real Madrid CF, où il a terminé sa carrière de joueur.'),
(2, 'Henry', 'Thierry Henry, né le 17 août 1977 aux Ulis (France), est un footballeur international français qui évolue au poste d\'attaquant entre 1994 et 2014.'),
(3, 'Mbappé', 'Kylian Mbappé, de son nom complet Kylian Mbappé Lottin, né le 20 décembre 1998 dans le 19ème arrondissement de Paris, est un footballeur international français qui évolue au poste d\'attaquant au Paris Saint-Germain.'),
(4, 'Rami', 'Adil Rami, né le 27 décembre 1985 à Bastia (France), est un footballeur international français qui évolue au poste de défenseur au Fenerbahçe SK en Turquie.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `joueur_foot`
--
ALTER TABLE `joueur_foot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `joueur_foot`
--
ALTER TABLE `joueur_foot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
