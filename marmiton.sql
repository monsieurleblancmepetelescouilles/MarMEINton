-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 08 Août 2015 à 15:15
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `marmiton`
--
CREATE DATABASE IF NOT EXISTS `marmiton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `marmiton`;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `author`, `date`) VALUES
(1, 'Lancement du site !', 'Le super site Marmiton ouvre aujourd''hui. Incroyable !', 'Jean Michel', '2015-08-07'),
(2, 'Une News beaucoup plus longue', 'En informatique, un fichier texte ou fichier texte brut ou fichier texte simple est un fichier dont le contenu représente uniquement une suite de caractères; il utilise nécessairement une forme particulière de codage de caractère qui peut être une variante ou une extension du standard local des États-Unis, l''ASCII. Il n''existe aucune définition officielle, et les différentes interprétations de ce qu''est un fichier texte partagent des propriétés essentielles. Les caractères considérés sont généralement les caractères imprimables, d''espaces et de retours à la ligne. Certains codages de caractères normalisés incluent également certains caractères de contrôleN 1, séquence d''échappementN 2ou marqueurs N 3 qui peuvent faire l''objet de différences d''appréciations. La notion de fichier texte est donc subjective et dépend notamment des systèmes de codage de caractère considérés (windows-1252 et ISO-8859-1 n''offrant pas les mêmes plages de valeurs «imprimables».)\r\nEn informatique, un fichier texte ou fichier texte brut ou fichier texte simple est un fichier dont le contenu représente uniquement une suite de caractères; il utilise nécessairement une forme particulière de codage de caractère qui peut être une variante ou une extension du standard local des États-Unis, l''ASCII. Il n''existe aucune définition officielle, et les différentes interprétations de ce qu''est un fichier texte partagent des propriétés essentielles. Les caractères considérés sont généralement les caractères imprimables, d''espaces et de retours à la ligne. Certains codages de caractères normalisés incluent également certains caractères de contrôleN 1, séquence d''échappementN 2ou marqueurs N 3 qui peuvent faire l''objet de différences d''appréciations. La notion de fichier texte est donc subjective et dépend notamment des systèmes de codage de caractère considérés (windows-1252 et ISO-8859-1 n''offrant pas les mêmes plages de valeurs «imprimables».)\r\nEn informatique, un fichier texte ou fichier texte brut ou fichier texte simple est un fichier dont le contenu représente uniquement une suite de caractères; il utilise nécessairement une forme particulière de codage de caractère qui peut être une variante ou une extension du standard local des États-Unis, l''ASCII. Il n''existe aucune définition officielle, et les différentes interprétations de ce qu''est un fichier texte partagent des propriétés essentielles. Les caractères considérés sont généralement les caractères imprimables, d''espaces et de retours à la ligne. Certains codages de caractères normalisés incluent également certains caractères de contrôleN 1, séquence d''échappementN 2ou marqueurs N 3 qui peuvent faire l''objet de différences d''appréciations. La notion de fichier texte est donc subjective et dépend notamment des systèmes de codage de caractère considérés (windows-1252 et ISO-8859-1 n''offrant pas les mêmes plages de valeurs «imprimables».)', 'Jean Bernard', '2015-08-08'),
(4, 'CrÃ©ation de news depuis le site.', 'Ceci est un test pour voir si on crÃ©er des news depuis le site. les tests c''est vraiment trop bien.', 'Jean FrÃ©deric', '2015-08-08'),
(5, 'Mise en place de l''utf8', 'UTF-8 pour les insert dans la base de données.', 'Jean Fréderic', '2015-08-08');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `recette` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
