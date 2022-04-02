-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 02 avr. 2022 à 17:10
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

DROP TABLE IF EXISTS `objet`;
CREATE TABLE IF NOT EXISTS `objet` (
  `DESCRIPTION` text NOT NULL,
  `URL_IMAGE` varchar(500) NOT NULL,
  `ID_OBJET` int(11) NOT NULL,
  PRIMARY KEY (`ID_OBJET`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`DESCRIPTION`, `URL_IMAGE`, `ID_OBJET`) VALUES
('Aspi', 'https://media.istockphoto.com/photos/vacuum-cleaner-isolated-on-white-background-picture-id927031764?k=20&m=927031764&s=612x612&w=0&h=qOj8SoWcD62Zal8ab3pbd2WOsnmzzh7yS9VRNJCCoXg=', 1),
('raclette', 'aa', 2),
('fondue', 'aa', 3),
('pinces', 'aaa', 4),
('jeedom', 'non', 5);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ID_RESERVATION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) NOT NULL,
  `ID_OBJET` int(11) NOT NULL,
  `QRCODE` varchar(255) NOT NULL,
  `JOUR` date DEFAULT NULL,
  `HEURE_DEBUT` time(2) NOT NULL,
  `HEURE_FIN` time(2) NOT NULL,
  PRIMARY KEY (`ID_RESERVATION`),
  KEY `ID_USER` (`ID_USER`),
  KEY `ID_OBJET` (`ID_OBJET`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`ID_RESERVATION`, `ID_USER`, `ID_OBJET`, `QRCODE`, `JOUR`, `HEURE_DEBUT`, `HEURE_FIN`) VALUES
(125, 7, 3, ' pHis1', '2022-04-02', '21:00:00.00', '22:00:00.00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(255) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID_USER`, `NOM`, `PRENOM`, `MAIL`, `MOT_DE_PASSE`) VALUES
(7, 'Cockedey', 'Maxence', 'mcockedey@gmail.com', '$2y$12$O1s5kcQheB5yKHoPdRW7iOjQ9QXmzzyT9UHok4opO4k2kUJCpCaBK'),
(8, 'Azyey', 'Antoine', 'ac@ac.aom', '$2y$12$pjakUQHCP1Od8Rp9pwNSB.b6Om6jdtf8qSGMHEvA/mSkq2/u/I17.'),
(15, 'test', 'test', 'test@test.com', '$2y$12$IeHZ93bYNKtqK8GC1f4IEuWiQfrXNLer/KwDuaEnsXXNThiagI8Au'),
(16, 'tr', 'tr', 'tr@tr.com', '$2y$12$/eTZl0paoYa8LDX4lcf0U.4u31ALiem/cE168FJEuIQo8LruG2vfu'),
(17, 'mt', 'mt', 'mt@mt.com', '$2y$12$aVi.MbWZj/ivBfy1wb.TJOWWBQW6iX3Ik5du1HBNEZ8rnLbyEJ47G');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Reserver` FOREIGN KEY (`ID_OBJET`) REFERENCES `objet` (`ID_OBJET`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Reserveur` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
