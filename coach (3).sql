-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 06 août 2021 à 12:13
-- Version du serveur :  8.0.26-0ubuntu0.20.04.2
-- Version de PHP : 7.3.29-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coach`
--

-- --------------------------------------------------------

--
-- Structure de la table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agendas`
--

INSERT INTO `agendas` (`id`, `user_id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(2, 1, 'Remse en forme', '2021-07-29', '2021-07-31', '2021-07-28 23:38:01', '2021-07-28 23:38:01'),
(4, 1, 'cml', '2021-06-30', '2021-07-09', '2021-07-28 23:40:59', '2021-07-28 23:40:59');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` bigint UNSIGNED NOT NULL,
  `coach_id` bigint UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `coach_id`, `is_active`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '40', 'Un cour unique', NULL, '2021-07-29 01:23:19', '2021-07-29 01:23:19');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `order` int NOT NULL DEFAULT '0',
  `featured` tinyint(1) DEFAULT NULL,
  `imageable_id` int UNSIGNED NOT NULL,
  `imageable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `path`, `name`, `extension`, `size`, `order`, `featured`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(28, 'images/D8GU33yDdrOLZpHuSynPkt8sfUbzxhA2aBWo0TtL.jpeg', 'rFIlerlCaGjvfn0MYtC4qSf8hL86vP3Mkn3FV1NS.jpeg', 'jpeg', '84069', 0, 1, 26, 'App\\Slider', '2021-02-09 14:46:42', '2021-02-09 14:46:42'),
(29, 'images/3nw06K1NV8J9j5heboXLpTcIKvcK1SGD4lxjsg2e.jpeg', 'rFIlerlCaGjvfn0MYtC4qSf8hL86vP3Mkn3FV1NS.jpeg', 'jpeg', '84069', 0, 0, 26, 'App\\Slider', '2021-02-09 14:46:42', '2021-02-09 14:46:42'),
(38, 'images/tQOg3SA1mnSMPpRyPyZ7QFme4mt2QkrFqRXwcyV9.jpeg', '2 Ban site 1200x300.jpg', 'jpg', '246089', 0, 1, 30, 'App\\Slider', '2021-03-01 14:14:39', '2021-03-01 14:14:39'),
(39, 'images/0lf5F8MFtl2iqK8ddwOm0h1WbB5rxIZRKs7z8ncJ.jpeg', '2 Ban site 1200x300.jpg', 'jpg', '246089', 0, 0, 30, 'App\\Slider', '2021-03-01 14:14:39', '2021-03-01 14:14:39'),
(40, 'images/eitSFAzKpAAyNfYIYud2LN51lrXILyPqqlS1htdx.jpeg', '3 Ban site 1200x300.jpg', 'jpg', '266460', 0, 1, 27, 'App\\Slider', '2021-03-01 14:15:12', '2021-03-01 14:15:12'),
(41, 'images/jKulWfvqPpJZXIw8XPn9fCTUCEaObbDeLrXerZhJ.jpeg', '3 Ban site 1200x300.jpg', 'jpg', '266460', 0, 0, 27, 'App\\Slider', '2021-03-01 14:15:12', '2021-03-01 14:15:12'),
(42, 'images/JJdts37x9386TtSdz3T4i3iPmLWQVptrouh3kied.jpeg', 'Ban site 1200x300.jpg', 'jpg', '238840', 0, 1, 28, 'App\\Slider', '2021-03-01 14:15:49', '2021-03-01 14:15:49'),
(43, 'images/sOXXJKfSdUC6kxSUbI7nQqnxEjSlY9lWS6laVGx8.jpeg', 'Ban site 1200x300.jpg', 'jpg', '238840', 0, 0, 28, 'App\\Slider', '2021-03-01 14:15:49', '2021-03-01 14:15:49'),
(44, 'images/8lmLPRKvEjKOzqYU9sHfF1Th2QAx7NPSrqBKUobv.jpeg', '4 Ban site 1200x300.jpg', 'jpg', '221403', 0, 1, 29, 'App\\Slider', '2021-03-01 14:16:39', '2021-03-01 14:16:39'),
(45, 'images/QhT3QyTU0wnNL9cWGlkfQiY0RXjv7WyIxHLvwYrW.jpeg', '4 Ban site 1200x300.jpg', 'jpg', '221403', 0, 0, 29, 'App\\Slider', '2021-03-01 14:16:39', '2021-03-01 14:16:39');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `collection_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '002014_10_12_04_create_users_table', 1),
(2, '012020_09_24_01_create_roles_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_12_09_141021_create_sponsorships_table', 1),
(6, '2020_12_09_141041_create_packs_table', 1),
(7, '2020_12_09_141305_create_earnings_table', 1),
(8, '2020_12_09_141405_create_markets_table', 1),
(9, '2020_12_09_141453_create_payments_table', 1),
(10, '2020_12_10_032925_create_notifications_table', 1),
(11, '2020_12_10_141159_create_investments_table', 1),
(12, '2020_12_16_114144_tmp_users', 1),
(13, '2020_12_17_233921_user_packs', 1),
(14, '2020_12_26_121823_update_user', 1),
(15, '2020_12_26_122301_update_tmp_user', 1),
(16, '2021_01_02_101741_update_user_and_tmp_user__adding_full_number', 1),
(17, '2021_01_04_120758_update_market_table', 1),
(18, '2021_01_07_121900_update_investment', 1),
(19, '2021_01_08_112343_update_user_pack_and_pack', 1),
(20, '2021_01_08_143731_create_media_table', 1),
(21, '2021_01_18_144732_update_payement_table', 1),
(22, '2021_02_02_152656_create_sliders_table', 1),
(23, '2021_02_02_234803_create_images_table', 2),
(26, '2021_02_16_153234_offer_categories__table', 3),
(27, '2021_02_16_153306_services__table', 3),
(28, '2021_02_16_153317_offers__table', 3),
(29, '2021_02_18_165236_update_status', 4),
(30, '2021_03_04_194917_create_abonnements_table', 5),
(34, '2021_07_22_210200_update_users_table', 6),
(35, '2021_07_26_182621_create_cours_table', 6),
(37, '2021_07_27_023850_update_usergeolocation_table', 7),
(40, '2021_07_28_123043_agenda', 8),
(41, '2021_07_31_115835_create_reviews_table', 9),
(42, '2021_07_31_115836_create_reservations_table', 10);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` json DEFAULT NULL,
  `read_at` date DEFAULT NULL,
  `notifiable_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `offer_category_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id`, `offer_category_id`, `service_id`, `title`, `icon`, `duration`, `description`, `sub_title`, `price`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, '12Mb/s', 'fa fa-home', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi', NULL, 30000, '2021-02-18 15:50:54', '2021-02-19 22:23:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `offer_categories`
--

CREATE TABLE `offer_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offer_categories`
--

INSERT INTO `offer_categories` (`id`, `title`, `icon`, `description`, `sub_title`, `price`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Offres Résidentielles', 'fa fa-home', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sed, repudiandae minima saepe officiis voluptate doloribus? Nemo consequatur, laborum optio nulla porro quae illum quibusdam, eaque, maiores voluptates quod iusto.\r\n', NULL, 15000, '2021-02-18 14:20:27', '2021-02-18 16:20:18', 1),
(2, 'Offres Partagées', 'fa fa-share', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sed, repudiandae minima saepe officiis voluptate doloribus? Nemo consequatur, laborum optio nulla porro quae illum quibusdam, eaque, maiores voluptates quod iusto.\r\n', NULL, 35000, '2021-02-18 16:22:43', '2021-02-18 16:22:43', 1),
(3, 'Offres Entreprises', 'fa fa-city', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sed, repudiandae minima saepe officiis voluptate doloribus? Nemo consequatur, laborum optio nulla porro quae illum quibusdam, eaque, maiores voluptates quod iusto.\r\n', NULL, 70000, '2021-02-18 16:25:53', '2021-02-18 16:27:31', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `customer_id` bigint UNSIGNED NOT NULL,
  `coach_id` bigint UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cour_id` bigint UNSIGNED NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`customer_id`, `coach_id`, `amount`, `cour_id`, `notification`, `created_at`, `updated_at`) VALUES
(4, 4, '1', 1, NULL, '2021-08-03 02:34:00', '2021-08-03 02:34:00'),
(4, 4, '1', 1, NULL, '2021-08-03 02:35:47', '2021-08-03 02:35:47');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `score` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `content`, `score`, `created_at`, `updated_at`) VALUES
(5, 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sed, repudiandae minima saepe officiis voluptate doloribus? Nemo consequatur, laborum optio nulla porro quae illum quibusdam, eaque, maiores voluptates quod iusto.', NULL, '2021-07-31 13:43:21', '2021-07-31 13:43:21'),
(6, 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sed, repudiandae minima saepe officiis voluptate doloribus? Nemo consequatur, laborum optio nulla porro quae illum quibusdam, eaque, maiores voluptates quod iusto.', NULL, '2021-07-31 13:47:22', '2021-07-31 13:47:22');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `label`, `is_admin`, `remarks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Administrateur', 'Super admin', 'administrateur', NULL, NULL, NULL, NULL, NULL),
(2, 'Admin', 'Admministrateur', 'Admministrateur', NULL, NULL, NULL, NULL, NULL),
(3, 'Manager', 'Manager', 'Manager', NULL, NULL, NULL, NULL, NULL),
(4, 'Partenaire', 'Partenaire ou Investisseur', 'Partenaire/Investisseur', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `description`, `sub_title`, `price`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Internet & Interco', 'a fa-internet-explorer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit atque earum, commodi vitae possimus, voluptatem minus optio dicta consectetur at dolor doloribus eum eius molestiae magni porro suscipit, quia repudiandae.', NULL, 15000, '2021-02-18 14:32:01', '2021-03-01 15:25:41', 1),
(2, 'Administration d\'infrastructures', 'fa', 'Déploiement de votre infrastructure réseaux et systèmes; Mise en place de vos différent serveurs d\'entreprises, DNS, DHCP, WEB, MAIL, etc...', NULL, NULL, '2021-03-01 15:27:49', '2021-03-01 15:27:49', 1),
(3, 'Hebergement Web', 'fa', 'Via vous offres une large gamme de services d\'hebergement web: Mutualisé, Dédié, VPS; des serveurs de mails également vous sont mis à disposition.', NULL, NULL, '2021-03-01 15:29:10', '2021-03-01 15:29:10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_color` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '#333333',
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_color` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '#b5b5b5',
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `title_color`, `sub_title`, `sub_title_color`, `link`, `order`, `created_at`, `updated_at`) VALUES
(26, 'Nos Chalet', '#333333', 'blablabla', '#b5b5b5', 'http://localhost:8000', 1, '2021-02-09 14:46:42', '2021-02-09 14:46:42'),
(27, NULL, '#333333', NULL, '#b5b5b5', NULL, 100, '2021-02-12 13:16:13', '2021-02-12 13:16:13'),
(28, NULL, '#333333', NULL, '#b5b5b5', NULL, 100, '2021-02-12 13:16:39', '2021-02-12 13:16:39'),
(29, NULL, '#333333', NULL, '#b5b5b5', NULL, 100, '2021-02-12 13:17:10', '2021-02-12 13:17:10'),
(30, NULL, '#333333', NULL, '#b5b5b5', NULL, 2, '2021-02-12 13:17:45', '2021-02-12 13:17:45');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `is_coach` tinyint DEFAULT '0',
  `birthdate` datetime DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agree_conditions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sexe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` int NOT NULL DEFAULT '0',
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `is_coach`, `birthdate`, `lastname`, `firstname`, `email`, `email_verified_at`, `password`, `role_id`, `avatar`, `phone_no`, `website_link`, `country`, `state`, `is_admin`, `agree_conditions`, `city`, `facebook_link`, `instagram_link`, `deleted_at`, `created_at`, `updated_at`, `sexe`, `level`, `department`, `ville`, `note`, `latitude`, `longitude`, `image`) VALUES
(1, NULL, NULL, 'DOE', 'John', 'admin@via.bj', '2021-02-08 11:19:49', '$2y$10$q0eHV9q4XjFhMkZByuRYY.XJX8TjRtM2E0w6H7EF1S9gYvlU2hES6', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(4, 1, '2021-07-22 00:00:00', 'Spero AMEY', 'Spero AMEY', 'ameyspero@gmail.com', '2021-02-08 11:19:49', '$2y$10$aMnc1HmKVLUQKkfA2e5jHerQT1MG8QKeQbrggw2iiV8MBFuxnxggC', 1, NULL, NULL, 'https://www.facebook.com/amey.espoir', NULL, NULL, NULL, 'on', NULL, 'https://www.facebook.com/amey.espoir', 'https://www.facebook.com/amey.espoir', NULL, '2021-07-23 07:03:55', '2021-07-23 07:03:55', 'M', NULL, NULL, NULL, 0, NULL, NULL, NULL),
(5, 1, '2021-07-23 00:00:00', 'AMEY', 'Spero', 'spero1@gmail.com', NULL, '$2y$10$VQnJB01OevLyOaQxCz2iV.VDaWBLcW6Kn40ud2tCBtwBLRFe405oq', NULL, NULL, NULL, 'https://www.facebook.com/', NULL, 'Aisne', NULL, 'on', 'Alaincourt', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, '2021-07-27 01:45:41', '2021-07-27 01:45:41', 'M', NULL, NULL, NULL, 0, '6.3914827999999995', '2.4110005', NULL),
(6, 1, '2021-07-17 00:00:00', 'Spero', 'Spidi', 'sip@gmail.com', NULL, '$2y$10$5p7c8tlFasLQMNRQFOaCYuHWAxja4e2WIekPm0RhJajvEEk9qhssW', NULL, NULL, NULL, 'originalImage', NULL, 'Alpes-de-Haute-Provence', NULL, 'on', 'Allos', 'originalImage', 'originalImage', NULL, '2021-07-27 02:04:57', '2021-07-27 02:04:57', 'M', NULL, NULL, NULL, 0, '6.3914827999999995', '2.4110005', '16273550962.png'),
(7, 0, '2021-08-27 00:00:00', 'TIBOT', 'JEAN', 'jean@gmail.com', '2021-08-03 22:24:54', '$2y$10$5p7c8tlFasLQMNRQFOaCYuHWAxja4e2WIekPm0RhJajvEEk9qhssW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, '2021-08-03 22:24:54', '2021-08-03 22:24:54', 'M', NULL, NULL, NULL, 0, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agendas_user_id_foreign` (`user_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cours_coach_id_foreign` (`coach_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_offer_category_id_foreign` (`offer_category_id`),
  ADD KEY `offers_service_id_foreign` (`service_id`);

--
-- Index pour la table `offer_categories`
--
ALTER TABLE `offer_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD KEY `reservations_customer_id_foreign` (`customer_id`),
  ADD KEY `reservations_coach_id_foreign` (`coach_id`),
  ADD KEY `reservations_cour_id_foreign` (`cour_id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `offer_categories`
--
ALTER TABLE `offer_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `agendas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_offer_category_id_foreign` FOREIGN KEY (`offer_category_id`) REFERENCES `offer_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offers_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_cour_id_foreign` FOREIGN KEY (`cour_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
