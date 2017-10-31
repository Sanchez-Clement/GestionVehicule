-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Octobre 2017 à 16:12
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GestionVehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `immatriculation` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `type`, `brand`, `modele`, `immatriculation`, `price`, `description`) VALUES
(1, 'Moto', 'Yamaha', '980', 'AZ-687-LR', 12000, 'Moto de pret'),
(4, 'Moto', 'Iveco', 'Truck 200', 'BC-580-ZX', 20000, 'Camion trop bien'),
(5, 'Voiture', 'Citroen', 'C3', 'TF-609-TH', 4500, 'Petite voiture maniable'),
(11, 'Voiture', 'Audi', 'A3', 'ZS-689-LV', 16000, 'Bon moteur'),
(12, 'Camion', 'mitsubischi', 'kkfff', 'AZ-689-LR', 345, 'xdddd');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`),
  ADD UNIQUE KEY `immatriculation` (`immatriculation`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
