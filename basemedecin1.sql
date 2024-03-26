-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 26 mars 2024 à 17:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `basemedecin1`
--

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id_med` int(11) NOT NULL,
  `structure` varchar(250) DEFAULT NULL,
  `nom_prenom` varchar(250) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `date_1ere_rdv` date DEFAULT NULL,
  `source` varchar(250) DEFAULT NULL,
  `statut` varchar(250) DEFAULT NULL,
  `action1` longtext DEFAULT NULL,
  `action2` longtext DEFAULT NULL,
  `remarque` varchar(50) DEFAULT NULL,
  `del_med` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id_med`, `structure`, `nom_prenom`, `adresse`, `telephone`, `email`, `date_1ere_rdv`, `source`, `statut`, `action1`, `action2`, `remarque`, `del_med`) VALUES
(17, '', 'Fatoumata dite nana Diarra', '', 90656160, 'fatoumata.nanadiarra@gmail.com', '0000-00-00', NULL, '', '', '', 'Interesse', '1'),
(15, '', 'Malamine Traore', '', 70003678, 'malamineg2@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(16, 'erg', 'dsfg', 'esdf', 66511149, 'keneyatonplus2019@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(18, '', 'Tidiane Traore', '', 76147257, 'trawore@keneya.net', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(19, '', 'Dramane Traore', '', 79146633, 'dtraore@certesmali.org', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(20, '', 'Cheick abba Sogodogo', '', 0, 'cheicksogodogo009@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(21, '', 'Assistance Keneya', '', 0, 'contact@keneya-assistance.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(22, '', 'KHADY FALL', '', 0, 'dyfallkha@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(23, '', 'Fode Sidibe', '', 73417928, 'fodeking@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(24, '', 'Juliette Hazart', '', 2147483647, 'juliette.hazart@hotmail.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(25, '', 'Oumar Fofana', '', 70883844, 'oumarf433@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(26, '', 'Moussa Bathily', '', 76067586, 'bathilymo2000@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(27, '', 'Fatoumata Sylla', '', 0, 'syllaf@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(28, '', 'Mariam Sangare', '', 0, 'sangaremariam1008@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(29, '', 'Cheich Hamala keita', '', 66851330, 'kcheich120@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(30, '', 'Yamadou Sidibe', '', 0, 'dr.yamadou@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(31, '', 'Siritio Yafong Berthe', '', 0, 'sirito_b@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(32, '', 'Mamadou Yacouba Keita', '', 78816182, 'mamadouyacouba76@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(33, '', 'Moussa Fane', '', 0, 'moussafane01@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(34, '', 'Idrissa Malamine Traore', '', 2147483647, 'tridfr@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(35, '', 'Djeneba Coulibaly', '', 2147483647, 'c.djeneba@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(36, '', 'Soumaila Diallo', '', 2147483647, 'disco772003@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(37, '', 'Bagouma Traore', '', 2147483647, 'bagoumatraore@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(74, 'erdfg', 'dfgdate ', 'erdfg', 785855555, 'almamy_haidara@yahoo.com', '2024-03-26', NULL, 'En cours', NULL, NULL, 'rtyghj', '1'),
(39, '', 'Ousmane Oumar Konipo', '', 2147483647, 'ookonipo@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(73, 'erdfg', 'dfgdate ', 'erdfg', 785855555, 'almamy_haidara@yahoo.com', '2024-03-26', NULL, 'En cours', NULL, NULL, 'rtyghj', '1'),
(41, '', 'Ousmane Gakou', '', 0, 'gakouousmane2021@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(42, '', 'Sid Bekaye Diakite', '', 2147483647, 'bekayesid@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(43, '', 'Birama Sidibe', '', 73733791, 'sidibebirama1992@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(72, 'erdfg', 'dfgdate ', 'erdfg', 785855555, 'almamy_haidara@yahoo.com', '2024-03-26', NULL, 'En cours', NULL, NULL, 'rtyghj', '1'),
(45, '', 'Mariam Coulibaly', '', 76661425, 'mariamcoul423@gmail.com', '0000-00-00', NULL, 'En cours', '', '', '', '1'),
(46, '', 'Yacouba Seydou Traore', '', 2147483647, 'yacoubaseydoutraore83@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(47, '', 'Mahamadou Traore', '', 2147483647, 'yacoubaseydoutraore83@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(48, '', 'Moussa Coumare', '', 2147483647, 'm.coumar14@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(49, '', 'Louckman Tellou', '', 79096522, 'telloulouckman8@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(50, '', 'Bakary Kampo', '', 2147483647, 'kampoz08@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(51, '', 'Siaka Sako', '', 76028060, 'sako0042@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(52, 'ASACODRAB ', 'Lassana  Kante', 'BOLIBANA', 76087010, 'kantuslassine@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(53, '', 'Lassine Cisse', '', 0, 'lacissenet@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(54, '', 'Moussa Cisse ', '', 2147483647, 'moussacisse26@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(56, '', 'Yacouba Karamoko Bengaly', '', 2147483647, 'byacoubakaramoko@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(57, '', 'Boubacar Nanacasse', '', 2147483647, 'boubacarnanacasse@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(58, '', 'Zoumana Coulibaly', '', 2147483647, 'zcoulibaly727@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(59, '', 'Djigui Camara', '', 2147483647, 'cdjgui483@gmail.com', '0000-00-00', NULL, 'En cours', '', '', '', '1'),
(60, '', 'Salamata Sidibe', '', 0, 'salamatasidibe6@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(61, '', 'Mamadou Traore', '', 77042672, 'tramao1042@yahoo.fr', '0000-00-00', NULL, '', '', '', '', '1'),
(62, '', 'Daouda Bagayoko', '', 2147483647, 'daoudabagayoko791@yahoo.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(63, '', 'Jean Marie Kone', '', 0, 'jeanmariekone755@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(64, '', 'Selim Ben Jaafar', '', 2147483647, 'benjaafarsel@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(65, '', 'Habibou Diakite', '', 2147483647, 'drhabiboudiakite@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(66, '', 'Moussa Mariko', '', 0, 'mariko_moussa2003@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(67, 'Hopital Mali', 'Arouna Coulibaly', 'Bamako', 2147483647, 'arouna7681@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(68, '', 'Nouhoum Diakite', '', 2147483647, 'nouhoumdiakit@yahoo.fr', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(69, '', 'Yacouba Traore', '', 2147483647, 'yacotraore55@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(70, '', 'Diahara ousmane Toure', '', 2147483647, 'nouhoumdiakit@gmail.com', '0000-00-00', NULL, 'En cours', '', '', 'Interesse', '1'),
(71, 'hawa', 'dembele', 'bougouba', 76505760, 'hd7340858@gmail.com', '2024-02-21', NULL, 'Non inscrit', '                        llllll', '                        555555555555555', '                        ', '1'),
(75, 'erg', 'rtfg', 'rtfg', 79079577, 'fg@gmail.com', '2024-03-26', NULL, 'Valider', NULL, NULL, 'yuhjnm', '1');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Almamy', 'Haidara', 'almamy@test.com', '1234'),
(2, 'Dembele', 'Hawa', 'hd7340858@gmail.com', '$2y$10$dn68Ca6oOe7Mxv.yA5983.D5cjZzc0GT3DktLP3zKbv0f8/ZZaJRu'),
(3, 'Abdoulaye', 'Cisse', 'test@gmail.com', '$2y$10$dn68Ca6oOe7Mxv.yA5983.D5cjZzc0GT3DktLP3zKbv0f8/ZZaJRu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id_med`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
