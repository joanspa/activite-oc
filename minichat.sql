-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Novembre 2015 à 19:03
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `openclassrooms`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date_creation`) VALUES
(1, 'Alain Proust', 'Woaw, il était génial le Grand Prix de Formule 1 d''aujourd''''hui !', '2015-11-22 18:11:23'),
(2, 'vivalewis', 'Mouais, j''aurais préféré que Lewis Hamilton gagne !', '2015-11-22 18:11:48'),
(3, 'ferrariste', 'Rien n''arrive à la cheville de la Scuderia Ferrari !', '2015-11-22 18:12:17'),
(4, 'alonso14fan', 'Vivement l''année prochaine que le Samouraï regagne à nouveau !', '2015-11-22 18:13:37'),
(5, 'god_senna', 'La F1 m''ennuie sans Ayrton...', '2015-11-22 18:55:03'),
(6, 'schumi7777', 'Le Kaiser me manque mais je dois dire que y''a de très bons pilotes en F1 actuellement !!!', '2015-11-22 18:55:57'),
(7, 'alonso14fan', 'Comme Fernando Alonso ! :D', '2015-11-22 18:57:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
