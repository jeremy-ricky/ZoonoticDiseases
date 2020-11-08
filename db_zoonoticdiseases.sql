-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 08 nov. 2020 à 09:42
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_zoonoticdiseases`
--

-- --------------------------------------------------------

--
-- Structure de la table `alerts`
--

CREATE TABLE `alerts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeEnvoie` int(11) NOT NULL,
  `Jour` int(11) NOT NULL,
  `Frequence` int(11) NOT NULL,
  `Etat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom_locaux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Aspect` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Couleur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Taille` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Etat` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `Nom`, `Nom_locaux`, `Aspect`, `Couleur`, `Taille`, `Description`, `Picture`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'chimpanzé', 'Muvondo bleu', 'De la foret', 'Noir et Bleu', '56', 'Liste des oiseaux, rongeurs, insectes et autres animaux dont le nom commence par la lettre A', 'images/pics13.jpg', 0, '2020-11-07 12:32:25', '2020-11-07 12:32:25'),
(2, 'Liste des oiseaux', 'Kazonu', 'Ce qui vol', 'C depend', '22', 'Liste des oiseaux, rongeurs, insectes et autres animaux dont le nom commence par la lettre A', 'images/pics14.jpg', 0, '2020-11-07 12:34:04', '2020-11-07 12:34:04'),
(3, 'Rongeurs', 'Twana twa mikombe', 'Ca ronge', 'Gris', '15', 'Liste des oiseaux, rongeurs, insectes et autres animaux dont le nom commence par la lettre A', 'images/pics15.jpg', 0, '2020-11-07 12:35:32', '2020-11-07 12:35:32'),
(4, 'Autres animaux', 'Nu nsanya', 'A revoir', 'Couleur  a choix', '41', 'Liste des oiseaux, rongeurs, insectes et autres animaux dont le nom commence par la lettre A', 'images/pics16.jpg', 0, '2020-11-07 12:36:54', '2020-11-07 12:36:54');

-- --------------------------------------------------------

--
-- Structure de la table `bailleurs`
--

CREATE TABLE `bailleurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zone_id` int(11) NOT NULL,
  `Telephone` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Etat` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bailleurs`
--

INSERT INTO `bailleurs` (`id`, `Nom`, `Zone_id`, `Telephone`, `Email`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'ONU', 2, '22224455', 'msf@gmail.com', 0, '2020-11-07 19:00:55', '2020-11-07 19:11:17'),
(2, 'USA', 1, '78123123', 'jeremyricky06@yahoo.fr', 0, '2020-11-07 19:04:03', '2020-11-07 19:12:12');

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

CREATE TABLE `depenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateExpense` date NOT NULL,
  `Montant` double NOT NULL,
  `Project_id` int(11) NOT NULL,
  `Financement_id` int(11) NOT NULL,
  `Etat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `financements`
--

CREATE TABLE `financements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Montant` double NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bailleur_id` int(11) NOT NULL,
  `Domaine_expertise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Piece_jointe1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Piece_jointe2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Piece_jointe3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Etat` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `financements`
--

INSERT INTO `financements` (`id`, `Intitule`, `Montant`, `Description`, `Bailleur_id`, `Domaine_expertise`, `Piece_jointe1`, `Piece_jointe2`, `Piece_jointe3`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'Peche et elevage', 56000, 'C\'est un bon financement', 1, 'Sante et environnement', 'images/Introduction JDBC_Java.pdf', 'images/Introduction JDBC_Java.pdf', 'images/Introduction JDBC_Java.pdf', 0, '2020-11-07 16:00:58', '2020-11-07 17:24:14'),
(2, 'Agriculture et Elevage', 4500000, 'C super cool', 1, 'Education', 'images/Introduction JDBC_Java.pdf', 'images/Introduction JDBC_Java.pdf', 'images/Introduction JDBC_Java.pdf', 0, '2020-11-07 17:00:01', '2020-11-07 17:22:34');

-- --------------------------------------------------------

--
-- Structure de la table `maladies`
--

CREATE TABLE `maladies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `maladies`
--

INSERT INTO `maladies` (`id`, `Nom`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'Malarhia', 0, '2020-11-07 09:20:43', '2020-11-07 09:20:43'),
(2, 'Ebola', 0, '2020-11-07 09:35:10', '2020-11-07 10:14:50');

-- --------------------------------------------------------

--
-- Structure de la table `mentors`
--

CREATE TABLE `mentors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zone_id` int(11) NOT NULL,
  `Domaine_expertise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Etat` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mentors`
--

INSERT INTO `mentors` (`id`, `Nom`, `Zone_id`, `Domaine_expertise`, `Telephone`, `Email`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'Shikaneza', 1, 'Sante et environnement', '79866002', 'msfs@gmail.com', 0, '2020-11-08 06:37:52', '2020-11-08 06:37:52');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_07_055315_create_animals_table', 1),
(5, '2020_11_07_055401_create_maladies_table', 1),
(6, '2020_11_07_055420_create_symptomes_table', 1),
(7, '2020_11_07_055436_create_alerts_table', 1),
(8, '2020_11_07_055451_create_prisedecisions_table', 1),
(9, '2020_11_07_055505_create_personnes_table', 1),
(10, '2020_11_07_055519_create_zones_table', 1),
(11, '2020_11_07_055533_create_mentors_table', 1),
(12, '2020_11_07_055547_create_ongs_table', 1),
(13, '2020_11_07_055611_create_projects_table', 1),
(14, '2020_11_07_055624_create_financements_table', 1),
(15, '2020_11_07_055636_create_depenses_table', 1),
(16, '2020_11_07_055647_create_periodes_table', 1),
(17, '2020_11_07_055658_create_bailleurs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ongs`
--

CREATE TABLE `ongs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Domaine_expertise` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ongs`
--

INSERT INTO `ongs` (`id`, `Nom`, `Domaine_expertise`, `Email`, `Telephone`, `Adresse`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'MSF/Espagne', 'Sante et environnement', 'msfs@gmail.com', '78123123', 'Bagira', 0, '2020-11-07 14:19:59', '2020-11-07 14:30:51'),
(2, 'ACTED', 'Educations', 'acted@yahoo.fr', '22224455', 'KAMENGE', 0, '2020-11-07 14:22:09', '2020-11-07 14:22:09');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `periodes`
--

CREATE TABLE `periodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Mentor_id` int(11) NOT NULL,
  `Ong_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zone_id` int(11) NOT NULL,
  `Telephone` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `Etat` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `Nom`, `Zone_id`, `Telephone`, `Email`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'Arsene', 1, '22224455', 'jeremyricky06@yahoo.fr', 0, '2020-11-08 06:29:39', '2020-11-08 06:29:39');

-- --------------------------------------------------------

--
-- Structure de la table `prisedecisions`
--

CREATE TABLE `prisedecisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Symptome_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Maladie_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Probabilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Montant` double NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Piece_jointe1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Piece_jointe2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Piece_jointe3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `Intitule`, `Montant`, `Description`, `Piece_jointe1`, `Piece_jointe2`, `Piece_jointe3`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'Agriculture et Elevage', 56000000, 'un project pour soutenir la protection contre les érosions', 'images/0636-kali-linux.pdf', 'images/0636-kali-linux.pdf', 'images/0636-kali-linux.pdf', 0, '2020-11-08 06:46:04', '2020-11-08 06:46:04');

-- --------------------------------------------------------

--
-- Structure de la table `symptomes`
--

CREATE TABLE `symptomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Symptome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Daparition` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Animal_id` int(11) NOT NULL,
  `Maladie_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Probabilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `symptomes`
--

INSERT INTO `symptomes` (`id`, `Symptome`, `Daparition`, `Animal_id`, `Maladie_id`, `Probabilite`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'RougeVainqueur', '7 jrs avant contamination', 1, '1', '46', 0, '2020-11-07 11:33:54', '2020-11-08 06:19:53'),
(2, 'RougeVainqueur', '7 jrs apres contamination', 2, '2', '48', 0, '2020-11-07 11:36:38', '2020-11-07 11:36:38'),
(3, 'RougeVainqueurooo', '30 jrs apres contamination', 2, '2', '48', 0, '2020-11-07 11:50:37', '2020-11-07 11:50:37'),
(4, 'Viximmes', '56 Semaines', 2, '2', '60', 0, '2020-11-07 11:52:17', '2020-11-07 11:52:17'),
(5, 'Loissons', '20 Mois', 1, '2', '33', 0, '2020-11-07 11:53:49', '2020-11-07 11:53:49');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`id`, `Nom`, `Etat`, `created_at`, `updated_at`) VALUES
(1, 'Kadutu', 0, '2020-11-07 19:49:09', '2020-11-07 20:11:48'),
(2, 'Ibanda', 0, '2020-11-07 20:12:06', '2020-11-07 20:12:06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `financements`
--
ALTER TABLE `financements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maladies`
--
ALTER TABLE `maladies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ongs`
--
ALTER TABLE `ongs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prisedecisions`
--
ALTER TABLE `prisedecisions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `symptomes`
--
ALTER TABLE `symptomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `depenses`
--
ALTER TABLE `depenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `financements`
--
ALTER TABLE `financements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `maladies`
--
ALTER TABLE `maladies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `ongs`
--
ALTER TABLE `ongs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `prisedecisions`
--
ALTER TABLE `prisedecisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `symptomes`
--
ALTER TABLE `symptomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
