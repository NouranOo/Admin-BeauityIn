-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2018 at 08:43 AM
-- Server version: 10.1.36-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bosta_beauity`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`) VALUES
(1, 'Alexandria', 1),
(2, 'Cairo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `slug` text NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `Name`, `slug`, `code`) VALUES
(1, 'Egypt', 'Eg', 20),
(2, 'SudiaArabia', 'Sud', 966);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `provider_id`, `created_at`, `updated_at`) VALUES
(1, 42, 3, '2018-10-28 18:10:50', '2018-10-28 18:10:50'),
(2, 42, 3, '2018-11-01 10:45:52', '2018-11-01 10:45:52'),
(3, 42, 1, '2018-11-01 10:47:01', '2018-11-01 10:47:01'),
(4, 42, 2, '2018-11-01 10:47:06', '2018-11-01 10:47:06'),
(5, 42, 18, '2018-11-01 10:48:58', '2018-11-01 10:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_07_182544_create_favourites_table', 1),
(4, '2018_10_07_182706_create_messages_table', 1),
(5, '2018_10_07_182726_create_orders_table', 1),
(6, '2018_10_07_182950_create_place_of_services_table', 1),
(7, '2018_10_07_183144_create_posters_table', 1),
(8, '2018_10_07_183206_create_providers_table', 1),
(9, '2018_10_07_183230_create_services_table', 1),
(10, '2018_10_07_183320_create_sub_service_of_places_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` int(11) NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `day`, `time`, `provider_id`, `note`, `user_id`, `status`, `created_at`, `updated_at`, `feedback`) VALUES
(14, '2', '2', 18, '', 42, 'pending', '2018-10-27 18:43:26', '2018-10-27 18:43:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_subservices`
--

CREATE TABLE `order_subservices` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `provider_subservice_id` int(11) NOT NULL,
  `number_peopels` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_subservices`
--

INSERT INTO `order_subservices` (`id`, `order_id`, `provider_subservice_id`, `number_peopels`, `created_at`, `updated_at`) VALUES
(28, 14, 11, 2, '2018-10-27 18:43:26', '2018-10-27 18:43:26'),
(29, 14, 12, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE `posters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `place_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `late` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_facebook` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApiToken` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fb_id` text COLLATE utf8mb4_unicode_ci,
  `tw_id` text COLLATE utf8mb4_unicode_ci,
  `go_id` text COLLATE utf8mb4_unicode_ci,
  `verify_code` text COLLATE utf8mb4_unicode_ci,
  `is_verified` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `email`, `password`, `name`, `phone`, `place_name`, `place_logo`, `image`, `lang`, `late`, `location`, `link_insta`, `link_twitter`, `link_facebook`, `description`, `other_information`, `home_service`, `ApiToken`, `Token`, `country_id`, `created_at`, `updated_at`, `fb_id`, `tw_id`, `go_id`, `verify_code`, `is_verified`, `city_id`) VALUES
(18, 'hossamyahia107@gmail.com', '$2y$10$3u4UujDLUcLXLuR7Z520cu.WalM90XcXxWgm0xQMK1LDMZJ9bvBwy', 'hossam', 2147483647, 'elzain', 'ProjectFiles/Provider_images/wMN3hb_1540409017_18342712_1666225970353625_8941508637663475297_n.jpg', 'ProjectFiles/Provider_images/wMN3hb_1540409017_18342712_1666225970353625_8941508637663475297_n.jpg', '24', '21', 'dcsd', 'nn@inta', 'nn@twitter', 'dasdasdasdsadsa', 'cvdzv x', 'xz zxvxz', '1', 'WXVJaEFEakZyVlFVN2tGcEo0eFQ5R2JTSjVpTVVVczh3MFpMTzY4bg==', 'sfagsdgbsrfb', 1, '2018-10-24 19:23:37', '2018-10-24 19:23:37', '0', '0', '0', 'Z0xiUkR1', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `provider_services`
--

CREATE TABLE `provider_services` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provider_services`
--

INSERT INTO `provider_services` (`id`, `provider_id`, `service_id`, `created_at`, `updated_at`) VALUES
(12, 18, 2, '2018-10-24 19:23:37', '2018-10-24 19:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `provider_subs`
--

CREATE TABLE `provider_subs` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provider_subs`
--

INSERT INTO `provider_subs` (`id`, `provider_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(11, 18, 'hair', 1, '2018-10-28 19:36:56', '2018-10-28 19:36:56'),
(12, 18, 'Saona', 400, '2018-10-28 19:46:47', '2018-10-28 19:46:47');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'salon', 'female', NULL, NULL),
(2, 'dsf', 'male', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subservices`
--

CREATE TABLE `subservices` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subservices`
--

INSERT INTO `subservices` (`id`, `name`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'hair', 1, NULL, NULL),
(2, 'face', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `ApiToken` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `late` double DEFAULT '0',
  `lang` double DEFAULT '0',
  `fb_id` int(11) DEFAULT '0',
  `tw_id` int(11) DEFAULT '0',
  `go_id` int(11) DEFAULT '0',
  `verify_code` text COLLATE utf8mb4_unicode_ci,
  `is_verified` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `country_id`, `user_type`, `image`, `ApiToken`, `Token`, `remember_token`, `created_at`, `updated_at`, `late`, `lang`, `fb_id`, `tw_id`, `go_id`, `verify_code`, `is_verified`) VALUES
(42, 'hossam', 'hossamyahia107@gmail.com', '$2y$10$belUUtazL/8377qG6cbjGev7AD6aYsK9B4AAbcrMr.9vjD.nm1dUG', 1006907818, 1, 'male', 'ProjectFiles/user_image/62pMkk_1540394616_44495373_323632638282940_8758502433346289664_n.jpg', 'YmZRcjkxZTRsa2tycE5ONEdWdzRSMTR1aktIbUxuUDQ3djVqemFIeQ==', 'q2wadas', NULL, '2018-10-24 15:23:36', '2018-10-24 21:07:56', 0, 0, 0, 0, 0, 'aE1Zc0Ro', 1),
(43, 'hossam', 'amrhossam12345@gmail.com', '$2y$10$UUy/rF5CjN6o7bUK7E82gO/R9Y/8ZuuSCJg0hJocoIDrISZrJ/SBC', 1069161563, 1, 'female', NULL, 'V3ZtdDBER1VMOEVrYjVENDVxMjA0VDNvWUtTb0R5WVNmWGhyUWFqZg==', 'q2wadas', NULL, '2018-10-24 20:46:40', '2018-10-29 13:21:58', 0, 0, 0, 0, 0, 'SWh4cktw', 1),
(44, 'Amr Hossam', 'amamr@gmail.com', '$2y$10$KUqwBK7hsNDYoQt0nGDJ/ejTU6laDv9gU48bg159Cxij1749kAfbO', 1069161562, 1, 'female', NULL, 'SWsyRGpoZUtsa1p6V0V2Q29IQm1OYVNhSkd1OGEwTTU4b2ZsN0QxRw==', 'dfvDZfxfsdb', NULL, '2018-10-24 22:51:42', '2018-10-24 22:51:42', 0, 0, 0, 0, 0, 'Q2EyM3d4', 0),
(45, 'zerir', 'omarzerir@gmail.com', '$2y$10$1M2zv/k./jBTh07lEG4jNeJE98UHywkQcVU5DcLmKhvDF0sOpl4xC', 1112267408, 1, 'male', NULL, 'N2hOMjlibVVlRkdLdzhQTU1PRDk4c1JZdjRYdEdOZllLZDRaZkJ6Zg==', 'q2wadas', NULL, '2018-10-25 17:29:56', '2018-10-30 17:47:42', 0, 0, 0, 0, 0, 'ajJOV1Zt', 1),
(46, 'Amr Hossam', 'amamr@1gmail.com', '$2y$10$NM98Pn6AEjhLOEv4vy6BU.K8724TYHLURSk/WrATpQOLgCQNTVgPy', 2147483647, 1, 'female', NULL, 'SXZzQ0tOeXNXNU0xYlpWVkJGZWdlaHlzVVNMUGJkbFM5UkcwWml4UQ==', 'dfvDZfxfsdb', NULL, '2018-10-26 16:52:26', '2018-10-26 16:52:26', 0, 0, 0, 0, 0, 'SDluWDBV', 0),
(47, 'test', 'amrhossam.dev@gmail.com', '$2y$10$JWKdCdrIZaKDjM3CWMQ9F.O9k4r0aSrHqPcUL7EFEdqoTQ06d7nDu', 1069161519, 1, 'male', NULL, 'ckd5R20yb1FrWXBNN0h3MWdLbkNLMUlqam9LTGQyZW55QzhaZHNrUQ==', 'dfvDZfxfsdb', NULL, '2018-10-26 18:02:24', '2018-10-26 18:35:15', 0, 0, 0, 0, 0, 'WXAyWjhJ', 1),
(48, 'مديحه', 'rabuwumu@patonce.com', '$2y$10$3XPb0Y6v0M1RRNDVvTiOUe5Y7WD91eczfHrgL287lRlolWhmYh8/S', 0, 1, 'female', NULL, 'THYwcUJmbjFJMFYzVUFJUm9kSFZFcWVnRXp5TU9pSWRHT0FKMk1iUQ==', 'dfvDZfxfsdb', NULL, '2018-10-26 18:43:59', '2018-10-26 18:50:09', 0, 0, 0, 0, 0, 'bVh3WkR1', 1),
(49, '8797979799', '8797979799', '$2y$10$XHLCGpxFY8l3cbx6Kir6yefzoxXBuIjx8flyxFOioEhSuBVdJhm8a', 646464994, 1, 'female', NULL, 'OHQ3Tm8weDdvYzJTMnV0eVpSQUp0T0ZaVWdoZ3A0WXd2U25XTURocA==', 'daskldjaslk', NULL, '2018-10-26 19:06:14', '2018-10-26 19:06:14', 0, 0, 0, 0, 0, 'VndTdU1y', 0),
(50, 'Amr Hossams', 'amamr@1sgmail.com', '$2y$10$1zQWzRx.DChKvn4VW1v7COs0KvY97nECCOnZnt4sDqibFYnmvYUV2', 2147483647, 1, 'female', NULL, 'ZmdqWW9zRTJFVUpidDc0enM2RURqdVlTQlhjRXljcUJxMzFtYjhGVA==', 'dfvDZfxfsdb', NULL, '2018-10-26 19:27:31', '2018-10-26 19:27:31', 0, 0, 0, 0, 0, 'SkRpNHMw', 0),
(51, 'mmmmmm', 'amrhossam123f45@gmail.com', '$2y$10$3ek54lZYZ5WhS5QSY7uPau4QvnTucYcCQw1GDGaFwY.4YB048aBBG', 1111, 1, 'male', NULL, 'b1J5YXE0Rk0zR0g0QlRWeTdlY1ZlYnpsV1F2M0c1NjNwZHY3bzNYZw==', 'daskldjaslk', NULL, '2018-10-26 19:50:51', '2018-10-26 19:50:51', 0, 0, 0, 0, 0, 'dFZYR0Vv', 0),
(52, 'mmm', 'amrhossam12345@fgmail.com', '$2y$10$uXsPrpzKq7KVEFNx6iQJZueHAq9laUCxUzpuZRFMrE692MvQRhdUS', 1119, 1, 'male', NULL, 'cjNBUG9STVFiNEFiVlk1RmVEOEtrUThSajFQWDlMRlpPYmFiSjVHZQ==', 'daskldjaslk', NULL, '2018-10-26 20:16:56', '2018-10-26 20:16:56', 0, 0, 0, 0, 0, 'ekxyRlBJ', 0),
(53, '111111', 'amrhossam12345@ghmail.com', '$2y$10$tw/TBEwafi1hShif7TReXOp.DvlGkKm5BDtu9JTcOCcR5Gf/1Rqca', 9999, 1, 'male', NULL, 'bjE4aUVybWxNVzM4Rzh1Y09qNllCR2E2bmFNWWRkWjJOdWtMZHZ5Ug==', 'daskldjaslk', NULL, '2018-10-26 20:18:36', '2018-10-26 20:18:36', 0, 0, 0, 0, 0, 'WGVLRVdX', 0),
(54, 'Amr Hossams', 'amasmr@1sgmail.com', '$2y$10$h6YcyS5dgdWnwbnYadAMBOmqHGOtcnuwHKWGufmbrGj/fSQTSTDuS', 2147483647, 1, 'female', NULL, 'MmVuY0VsNTM4aldlVHlQZm9KRmY3S2ttZ3phRXBkUUxEbG13dEhtMw==', 'dfvDZfxfsdb', NULL, '2018-10-26 20:21:13', '2018-10-26 20:21:13', 0, 0, 0, 0, 0, 'MUsxT0lk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_subservices`
--
ALTER TABLE `order_subservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_services`
--
ALTER TABLE `provider_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_subs`
--
ALTER TABLE `provider_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subservices`
--
ALTER TABLE `subservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_subservices`
--
ALTER TABLE `order_subservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `posters`
--
ALTER TABLE `posters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `provider_services`
--
ALTER TABLE `provider_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `provider_subs`
--
ALTER TABLE `provider_subs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subservices`
--
ALTER TABLE `subservices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
