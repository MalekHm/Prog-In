-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 30 mars 2021 à 15:15
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

CREATE TABLE `activity` (
  `id` int NOT NULL,
  `likes` int NOT NULL,
  `title_activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_activity` double NOT NULL,
  `adress_activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  `description_activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activity`
--

INSERT INTO `activity` (`id`, `likes`, `title_activity`, `price_activity`, `adress_activity`, `category_id`, `description_activity`) VALUES
(2, 0, 'az', 120, 'az', 1, 'aaz'),
(4, 0, 'az', 120, 'az', 1, 'aaz'),
(5, 0, 'az', 120, 'az', 1, 'aaz');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Vélo', 'AAh'),
(2, 'Camping', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `categoryactivity`
--

CREATE TABLE `categoryactivity` (
  `id` int NOT NULL,
  `name_category_activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categoryactivity`
--

INSERT INTO `categoryactivity` (`id`, `name_category_activity`) VALUES
(1, 'azaff');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_persons` int NOT NULL,
  `price_event` double NOT NULL,
  `nb_views` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `place_disponible` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `category_id`, `titre`, `description`, `nb_persons`, `price_event`, `nb_views`, `start_date`, `end_date`, `place_disponible`) VALUES
(2, 1, 'Event', 'aaaaaaaaaaaaaaaaaa', 2555, 20, 19, '2021-03-27', '2021-03-31', 2535),
(3, 1, 'Event', 'orem Iprem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled i', 255, 10, 67, '2021-03-31', '2021-03-30', 243),
(4, 2, 'Eventqq', 'aaaaaaaaaaaaaaaaaa', 144, 30, 24, '2021-04-02', '2021-03-19', 91),
(5, 2, '555', 'aaaaaaaaaaaaaaaaaa', 55, 20, NULL, '2021-03-27', '2021-03-18', 55),
(6, 2, 'Event', 'aaaaaaaaaaaaaaaaaa', 55, 20, NULL, '2021-03-26', '2021-03-26', 55),
(7, 2, 'aaa', 'aaaaaaaaaaaaaaaaaaaaaa', 20, 20, NULL, '2021-03-18', '2021-03-31', 20),
(8, 2, 'aaa', 'aaaaaaaaaaaaaaaaaaaaaa', 20, 20, 1, '2021-03-18', '2021-03-31', 20);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int NOT NULL,
  `event_id` int DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `event_id`, `source`) VALUES
(1, 2, 'eve-60619cab70101Mar-2021-png'),
(2, 3, 'eve-60619caba51c8Mar-2021-png'),
(3, 3, 'eve-60619cabbd9d0Mar-2021-png'),
(4, 4, 'eve-6061a52f8b19cMar-2021-png'),
(5, 5, 'eve-6062d7926916cMar-2021-png'),
(6, 6, 'eve-6062d830d1bbcMar-2021-png'),
(7, 7, 'eve-6062dbf081284Mar-2021-png'),
(8, 8, 'eve-6062dc0908404Mar-2021-png');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_product` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_product` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name_product`, `description_product`, `category_product`, `price_product`) VALUES
(1, 'test', 'aa', 'aa', 250);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int NOT NULL,
  `event_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `descriptionpromotion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date_promotion` date DEFAULT NULL,
  `end_date_promotion` date DEFAULT NULL,
  `pourcentage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `event_id`, `product_id`, `descriptionpromotion`, `start_date_promotion`, `end_date_promotion`, `pourcentage`) VALUES
(1, 4, 1, 'aa', '2021-03-28', '2021-04-01', 25);

-- --------------------------------------------------------

--
-- Structure de la table `publicity`
--

CREATE TABLE `publicity` (
  `id` int NOT NULL,
  `start_date_pub` date DEFAULT NULL,
  `end_date_pub` date DEFAULT NULL,
  `description_pub` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_pub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_pub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publicity`
--

INSERT INTO `publicity` (`id`, `start_date_pub`, `end_date_pub`, `description_pub`, `picture_pub`, `title_pub`, `position`, `link`) VALUES
(1, '2021-03-24', '2021-03-26', 'aaaaa', 'pub-605af7176ae20Mar-2021-png', 'ma', 'BOTTOM', 'http://m'),
(2, '2021-03-25', '2021-03-28', 'zz', 'pub-605af9be3411dMar-2021-png', 'm', 'TOP', 'http://m');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `event_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `nb_participants` int NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `resteapayer` int DEFAULT NULL,
  `reduction` double DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `event_id`, `user_id`, `nb_participants`, `status`, `reservation_date`, `resteapayer`, `reduction`, `token`, `paid`) VALUES
(11, 4, 1, 2, 1, '2021-03-29', 60, 15, '6061e9e61b112', 0),
(12, 4, 1, 10, 1, '2021-03-30', 300, 75, '6062d2d1665ac', 0),
(13, 4, 1, 20, 0, '2021-03-30', 600, 150, '6062d3c1dc046', 0),
(14, 4, 1, 2, 1, '2021-03-30', 60, 15, '6062d400d8296', 1),
(15, 4, 1, 10, 1, '2021-03-30', 300, 75, '6062de30a9d3e', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` int NOT NULL,
  `birthday` date NOT NULL,
  `picture_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `identity`, `birthday`, `picture_user`, `phone`, `role`, `reset_token`) VALUES
(1, 'Seif Allah', 'Jallali', 'seifallah.jallali@esprit.tn', '$2y$13$SGxwhGH5PNH8E85Tv6lTs.z2VgPat.gbpG1B/p.VVortvreJeNCk.', 13001074, '2021-03-24', 'user-6052115b24e02Mar-2021-jpeg', 21554529, 'ROLE_ADMIN', NULL),
(3, 'hhsh', 'hshh', 'saifallah@pentabell.fr', '$2y$13$XnectThaKrZIltkDmy5AkOlMAei9cUHKM5reSBnvi.W6tcffcTk6u', 85978787, '1994-09-28', 'user-6052111ebac31Mar-2021-jpeg', 87878787, 'ROLE_CLIENT', NULL),
(13, '787878', '787878', 'seifallah.jallali@esprit.tn', '$2y$13$cv.CUWkcp74uQ6Une83GCO4TUQS6U.pG9p3x4zhLAoaE1awaWhe62', 13001074, '1994-09-28', 'user-6053296050b76Mar-2021-png', 23185019, 'ROLE_CLIENT', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AC74095A12469DE2` (`category_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categoryactivity`
--
ALTER TABLE `categoryactivity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3BAE0AA712469DE2` (`category_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C53D045F71F7E88B` (`event_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C11D7DD171F7E88B` (`event_id`),
  ADD KEY `IDX_C11D7DD14584665A` (`product_id`);

--
-- Index pour la table `publicity`
--
ALTER TABLE `publicity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C8495571F7E88B` (`event_id`),
  ADD KEY `IDX_42C84955A76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categoryactivity`
--
ALTER TABLE `categoryactivity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `publicity`
--
ALTER TABLE `publicity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `FK_AC74095A12469DE2` FOREIGN KEY (`category_id`) REFERENCES `categoryactivity` (`id`);

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_3BAE0AA712469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045F71F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `FK_C11D7DD14584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_C11D7DD171F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495571F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_42C84955A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
