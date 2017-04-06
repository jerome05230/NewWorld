-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2013 at 06:10 PM
-- Server version: 5.5.34-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbNewWorld`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255)  NOT NULL,
  `prenom` varchar(255)  NOT NULL,
  `sexe` varchar(1)  DEFAULT NULL,
  `departement_id` int(11)  NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville_id` mediumint(8) unsigned NOT NULL,
  `adresse` varchar(255)  NOT NULL,
  `type` varchar(1)  DEFAULT NULL,
  `mail` varchar(255)  NOT NULL,
  `telephone_fixe` varchar(15) DEFAULT NULL,
  `telephone_portable` varchar(15) DEFAULT NULL,
  `login` varchar(255)  NOT NULL,
  `password` varchar(255)  NOT NULL,
  `verification` varchar(1) DEFAULT '0',
  `question_secrete_id` int(1) NOT NULL,
  `reponse_secrete` varchar(1) NOT NULL,
  `id_pts_relai_demander`  varchar(255) DEFAULT NULL,
  `date_inscripion` date,
  `horraire_ouverture_point_de_vente` varchar(255) DEFAULT NULL,
  `iban` varchar(34) DEFAULT NULL,
  `rib` varchar(255) DEFAULT NULL,
 
  PRIMARY KEY (`id`), 
  FOREIGN KEY (`ville_id`) REFERENCES communes_france(`id`),
  FOREIGN KEY (`departement_id`) REFERENCES departements_france(`id`),
  FOREIGN KEY (`question_secrete_id`) REFERENCES questions_secrete(`id`)
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

