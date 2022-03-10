-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 09 mars 2022 à 15:08
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
-- Structure de la table `objet1`
--

DROP TABLE IF EXISTS `objet1`;
CREATE TABLE IF NOT EXISTS `objet1` (
  `0` tinyint(1) NOT NULL,
  `1` tinyint(1) NOT NULL,
  `2` tinyint(1) NOT NULL,
  `3` tinyint(1) NOT NULL,
  `4` tinyint(1) NOT NULL,
  `5` tinyint(1) NOT NULL,
  `6` tinyint(1) NOT NULL,
  `7` tinyint(1) NOT NULL,
  `8` tinyint(1) NOT NULL,
  `9` tinyint(1) NOT NULL,
  `10` tinyint(1) NOT NULL,
  `11` tinyint(1) NOT NULL,
  `12` tinyint(1) NOT NULL,
  `13` tinyint(1) NOT NULL,
  `14` tinyint(1) NOT NULL,
  `15` tinyint(1) NOT NULL,
  `16` tinyint(1) NOT NULL,
  `17` tinyint(1) NOT NULL,
  `18` tinyint(1) NOT NULL,
  `19` tinyint(1) NOT NULL,
  `20` tinyint(1) NOT NULL,
  `21` tinyint(1) NOT NULL,
  `22` tinyint(1) NOT NULL,
  `23` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `objet1`
--

INSERT INTO `objet1` (`0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `objet2`
--

DROP TABLE IF EXISTS `objet2`;
CREATE TABLE IF NOT EXISTS `objet2` (
  `0` tinyint(4) NOT NULL,
  `1` tinyint(4) NOT NULL,
  `2` tinyint(4) NOT NULL,
  `3` tinyint(4) NOT NULL,
  `4` tinyint(4) NOT NULL,
  `5` tinyint(4) NOT NULL,
  `6` tinyint(4) NOT NULL,
  `7` tinyint(4) NOT NULL,
  `8` tinyint(4) NOT NULL,
  `9` tinyint(4) NOT NULL,
  `10` tinyint(4) NOT NULL,
  `11` tinyint(4) NOT NULL,
  `12` tinyint(4) NOT NULL,
  `13` tinyint(4) NOT NULL,
  `14` tinyint(4) NOT NULL,
  `15` tinyint(4) NOT NULL,
  `16` tinyint(4) NOT NULL,
  `17` tinyint(4) NOT NULL,
  `18` tinyint(4) NOT NULL,
  `19` tinyint(4) NOT NULL,
  `20` tinyint(4) NOT NULL,
  `21` tinyint(4) NOT NULL,
  `22` tinyint(4) NOT NULL,
  `23` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `objet2`
--

INSERT INTO `objet2` (`0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `objet3`
--

DROP TABLE IF EXISTS `objet3`;
CREATE TABLE IF NOT EXISTS `objet3` (
  `0` tinyint(4) NOT NULL,
  `1` tinyint(4) NOT NULL,
  `2` tinyint(4) NOT NULL,
  `3` tinyint(4) NOT NULL,
  `4` tinyint(4) NOT NULL,
  `5` tinyint(4) NOT NULL,
  `6` tinyint(4) NOT NULL,
  `7` tinyint(4) NOT NULL,
  `8` tinyint(4) NOT NULL,
  `9` tinyint(4) NOT NULL,
  `10` tinyint(4) NOT NULL,
  `11` tinyint(4) NOT NULL,
  `12` tinyint(4) NOT NULL,
  `13` tinyint(4) NOT NULL,
  `14` tinyint(4) NOT NULL,
  `15` tinyint(4) NOT NULL,
  `16` tinyint(4) NOT NULL,
  `17` tinyint(4) NOT NULL,
  `18` tinyint(4) NOT NULL,
  `19` tinyint(4) NOT NULL,
  `20` tinyint(4) NOT NULL,
  `21` tinyint(4) NOT NULL,
  `22` tinyint(4) NOT NULL,
  `23` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `objet3`
--

INSERT INTO `objet3` (`0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `objet4`
--

DROP TABLE IF EXISTS `objet4`;
CREATE TABLE IF NOT EXISTS `objet4` (
  `0` int(3) NOT NULL,
  `1` int(3) NOT NULL,
  `2` int(3) NOT NULL,
  `3` int(3) NOT NULL,
  `4` int(3) NOT NULL,
  `5` int(3) NOT NULL,
  `6` int(3) NOT NULL,
  `7` int(3) NOT NULL,
  `8` int(3) NOT NULL,
  `9` int(3) NOT NULL,
  `10` int(3) NOT NULL,
  `11` int(3) NOT NULL,
  `12` int(3) NOT NULL,
  `13` int(3) NOT NULL,
  `14` int(3) NOT NULL,
  `15` int(3) NOT NULL,
  `16` int(3) NOT NULL,
  `17` int(3) NOT NULL,
  `18` int(3) NOT NULL,
  `19` int(3) NOT NULL,
  `20` int(3) NOT NULL,
  `21` int(3) NOT NULL,
  `22` int(3) NOT NULL,
  `23` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `objet4`
--

INSERT INTO `objet4` (`0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Objet` varchar(255) COLLATE utf8_bin NOT NULL,
  `0` varchar(255) COLLATE utf8_bin NOT NULL,
  `1` varchar(255) COLLATE utf8_bin NOT NULL,
  `2` varchar(255) COLLATE utf8_bin NOT NULL,
  `3` varchar(255) COLLATE utf8_bin NOT NULL,
  `4` varchar(255) COLLATE utf8_bin NOT NULL,
  `5` varchar(255) COLLATE utf8_bin NOT NULL,
  `6` varchar(255) COLLATE utf8_bin NOT NULL,
  `7` varchar(255) COLLATE utf8_bin NOT NULL,
  `8` varchar(255) COLLATE utf8_bin NOT NULL,
  `9` varchar(255) COLLATE utf8_bin NOT NULL,
  `10` varchar(255) COLLATE utf8_bin NOT NULL,
  `11` varchar(255) COLLATE utf8_bin NOT NULL,
  `12` varchar(255) COLLATE utf8_bin NOT NULL,
  `13` varchar(255) COLLATE utf8_bin NOT NULL,
  `14` varchar(255) COLLATE utf8_bin NOT NULL,
  `15` varchar(255) COLLATE utf8_bin NOT NULL,
  `16` varchar(255) COLLATE utf8_bin NOT NULL,
  `17` varchar(255) COLLATE utf8_bin NOT NULL,
  `18` varchar(255) COLLATE utf8_bin NOT NULL,
  `19` varchar(255) COLLATE utf8_bin NOT NULL,
  `20` varchar(255) COLLATE utf8_bin NOT NULL,
  `21` varchar(255) COLLATE utf8_bin NOT NULL,
  `22` varchar(255) COLLATE utf8_bin NOT NULL,
  `23` varchar(255) COLLATE utf8_bin NOT NULL,
  `24` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Objet`, `0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`) VALUES
('Objet1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' TTUvv', ' 3u42Z', '', '', '', ' nOkpN', '', ' 9kSlH', ''),
('Objet2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ZSGIw', '', '', '', '', '', '', ' raIy9', ''),
('Objet3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' JzvZp', '', '', '', '', '', '', ' P3V7T', 'cft'),
('Objet4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' AndwJ', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8_bin NOT NULL,
  `RESERV` tinyint(1) NOT NULL,
  `QRCODE1` varchar(255) COLLATE utf8_bin NOT NULL,
  `HEURE1` int(255) DEFAULT NULL,
  `QRCODE2` varchar(255) COLLATE utf8_bin NOT NULL,
  `HEURE2` int(255) DEFAULT NULL,
  `QRCODE3` varchar(255) COLLATE utf8_bin NOT NULL,
  `HEURE3` int(255) DEFAULT NULL,
  `QRCODE4` varchar(255) COLLATE utf8_bin NOT NULL,
  `HEURE4` int(255) DEFAULT NULL,
  UNIQUE KEY `ID` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Nom`, `Prenom`, `Email`, `Password`, `RESERV`, `QRCODE1`, `HEURE1`, `QRCODE2`, `HEURE2`, `QRCODE3`, `HEURE3`, `QRCODE4`, `HEURE4`) VALUES
('Ro', 'Ve', 'vero', 'rove', 0, '', NULL, '', NULL, '', NULL, '', NULL),
('Bretzel', 'Max', 'mbella', 'mb', 0, '', NULL, '', NULL, '', NULL, '', NULL),
('gp', 'gp', 'gp', 'gp', 0, '', NULL, '', NULL, '', NULL, '', NULL),
('test', 'test', 'test', 'test', 0, '', NULL, '', NULL, '', NULL, '', NULL),
('testi', 'testi', 'testi', 'testi', 0, '', NULL, '', NULL, '', NULL, '', NULL),
('mar', 'ti', 'mart@dde', 'abc', 1, '', 19, '', 16, '', 17, '', NULL),
('Root', 'Root', 'root@root.com', '$2y$12$Sdq2argqZB9FATKLBHRG.e2XWGKU3LIGDEGKttKttA1UrHcrt.vf2', 1, ' ', 22, '', NULL, '', NULL, '', NULL),
('Carton', 'Antoine', 'ac@ac.com', '$2y$12$43wosH46R.22Y70UdxntuertCfiyZVBFP847tcrJ32Ep9KnLrNmIy', 1, ' 3u42Z', 17, ' ZSGIw', 16, ' JzvZp', 16, ' AndwJ', 16);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
