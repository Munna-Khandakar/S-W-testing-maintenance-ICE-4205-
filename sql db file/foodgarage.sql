-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 07:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodgarage`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rice', NULL, NULL),
(2, 'Snacks', NULL, NULL),
(3, 'Dessert', NULL, NULL),
(4, 'Icecream', NULL, NULL),
(5, 'Preorder', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_02_144722_laratrust_setup_tables', 1),
(5, '2021_05_06_141120_create_restaurents_table', 1),
(6, '2021_05_13_054601_create_products_table', 2),
(7, '2021_05_13_055509_create_categories_table', 3),
(8, '2021_05_13_060654_create_products_table', 4),
(9, '2021_05_19_090854_create_orders_table', 5),
(10, '2021_05_20_103925_create_jobs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `restaurant_id`, `customer_name`, `mobile`, `address`, `quantity`, `payment`, `cost`, `coupon`, `admin_action`, `seller_action`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Morog Polau', '1', 'Munna', '012', 'Professorpara, Palashbari, Gaibandha', '1', 'Cash on Delivery', '200', 'qwer1234', 'cancelled', 'not_seen', 'admin has cancelled the order', '2021-05-19 09:34:39', '2021-05-19 10:46:18'),
(2, 'Teheri', '1', 'Shiasd', '01794807577', 'Professorpara, Palashbari, Gaibandha', '4', '12345678', '540', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-19 03:37:58', '2021-05-19 03:37:58'),
(3, 'Pedis', '2', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '2', 'Cash on Delivery', '170', NULL, 'cancelled', 'not_seen', 'admin has cancelled the order', '2021-05-19 10:31:16', '2021-05-19 11:01:49'),
(4, 'Lassi', '3', 'Abir', '9206126491', '4853  Tail Ends Road', '2', 'Cash on Delivery', '120', NULL, 'approved', 'not_seen', 'admin has placed the order to restaurant', '2021-05-19 11:00:51', '2021-05-19 11:01:52'),
(5, 'Morog Polau', '1', 'Abir', '01710519031', 'Bahnaa', '1', 'Cash on Delivery', '110', NULL, 'approved', 'not_seen', 'admin has placed the order to restaurant', '2021-05-19 13:18:40', '2021-05-19 13:20:41'),
(6, 'Pedis', '2', 'Gggg', '397642266', 'Bhhbb', '1', 'Cash on Delivery', '95', NULL, 'approved', 'not_seen', 'admin has placed the order to restaurant', '2021-05-19 13:50:05', '2021-05-19 13:52:20'),
(7, 'Morog Polau', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '2', 'Cash on Delivery', '200', NULL, 'approved', 'finished', 'order is ready for delivery', '2021-05-20 05:45:21', '2021-05-20 15:18:12'),
(8, 'Kacchi', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '150', NULL, 'approved', 'finished', 'order is ready for delivary', '2021-05-20 06:07:08', '2021-05-20 10:56:52'),
(9, 'Morog Polau', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '110', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 12:47:09', '2021-05-20 12:47:09'),
(10, 'Kacchi', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '150', NULL, 'cancelled', 'not_seen', 'admin has cancelled the order', '2021-05-20 12:47:59', '2021-05-20 13:44:33'),
(11, 'Morog Polau', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '110', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 12:50:41', '2021-05-20 12:50:41'),
(12, 'Kacchi', '1', 'Munna', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '150', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 12:53:24', '2021-05-20 12:53:24'),
(13, 'Kacchi', '1', 'Munna', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '150', NULL, 'cancelled', 'not_seen', 'admin has cancelled the order', '2021-05-20 12:54:09', '2021-05-20 13:44:30'),
(14, 'Lassi', '3', 'Abir', '01710519031', 'Nsnanaj', '1', 'Cash on Delivery', '70', NULL, 'approved', 'finished', 'order is ready for delivary', '2021-05-20 13:47:12', '2021-05-20 13:50:58'),
(15, 'Morog Polau', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '110', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 14:11:40', '2021-05-20 14:11:40'),
(16, 'Lassi', '3', 'Vvvvv', '6689875', 'Vvvb', '1', 'Cash on Delivery', '70', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 14:12:33', '2021-05-20 14:12:33'),
(17, 'Morog Polau', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '110', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 14:16:02', '2021-05-20 14:16:02'),
(18, 'Kacchi', '1', 'Homer R Shield', '9206126491', '4853  Tail Ends Road', '1', 'Cash on Delivery', '150', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 14:18:56', '2021-05-20 14:18:56'),
(19, 'Kacchi', '1', 'Munna', '01794807577', 'Professorpara, Palashbari, Gaibandha', '1', 'Cash on Delivery', '150', NULL, 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-20 14:23:41', '2021-05-20 14:23:41'),
(20, 'Morog Polau', '1', 'A', '01751003800', 'P', '1', 'Cash on Delivery', '110', NULL, 'approved', 'finished', 'order is ready for delivery', '2021-05-20 15:11:14', '2021-05-20 15:18:27'),
(21, 'Morog Polau', '1', 'Asif', '98789', 'Professorpara, Palashbari, Gaibandha', '2', 'Cash on Delivery', '200', NULL, 'approved', 'finished', 'order is ready for delivery', '2021-05-20 15:45:08', '2021-05-20 15:46:36'),
(22, 'Kacchi', '1', 'Munna Khandakar', '01794807577', 'Professorpara, Palashbari, Gaibandha', '1', 'Cash on Delivery', '150', 'trailbonus', 'not_seen', 'not_seen', 'item is not placed to restaurant', '2021-05-21 04:57:44', '2021-05-21 04:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-05-07 00:05:57', '2021-05-07 00:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `offer` int(11) DEFAULT NULL,
  `disable` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `restaurant_id`, `image`, `ratings`, `price`, `offer`, `disable`, `created_at`, `updated_at`) VALUES
(5, '1', 'Morog Polau', '1', 'img/products/1699713279638180.jpg', '2', 110, 20, 1, '2021-05-14 00:15:00', '2021-05-20 15:47:29'),
(9, '1', 'Kacchi', '1', 'img/products/1700124050233871.jpg', '3', 140, 10, 0, '2021-05-18 13:04:01', '2021-05-20 15:20:09'),
(10, '3', 'Lassi', '3', 'img/products/1700166806538219.jpg', '2', 50, 0, 0, '2021-05-19 00:23:37', '2021-05-20 13:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `restaurents`
--

CREATE TABLE `restaurents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurents`
--

INSERT INTO `restaurents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Village Restaurant', '2021-05-07 10:10:46', '2021-05-07 10:10:46'),
(2, 'Star Roy Cafe', '2021-05-07 10:11:02', '2021-05-07 10:11:02'),
(3, 'Labib Restaurant', '2021-05-07 10:11:09', '2021-05-07 10:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(2, 'seller', 'Seller', 'Seller', '2021-05-07 00:05:57', '2021-05-07 00:05:57'),
(3, 'user', 'User', 'User', '2021-05-07 00:05:57', '2021-05-07 00:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(2, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(1, 7, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(2, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `restaurant_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Munna Khandakar', 'munnashisad@gmail.com', NULL, NULL, '$2y$10$r8gENUPXw157AHf/1EW0KefjsOx1DrT5IS1jexoXWOG8S.0D/Je.e', NULL, '2021-05-07 00:06:35', '2021-05-07 00:06:35'),
(2, 'Limon', 'village@gmail.com', '1', NULL, '$2y$10$A1Bs1oS8HgqtMsejdEm6n.wLY0Ot0Mt6khV1PVvKo/U2d0SHKVaN6', NULL, '2021-05-07 10:17:22', '2021-05-07 10:17:22'),
(3, 'Limon 01', 'villageuser01@gmail.com', '1', NULL, '$2y$10$OjqCNEOSQobiddB69xbcc.1MdDbRZMXW8lcuCOfHKIG7IgP9yNoDu', NULL, '2021-05-07 10:49:22', '2021-05-07 10:49:22'),
(4, 'Limon 02', 'villageuser02@gmail.com', '1', NULL, '$2y$10$TmSbX95z.jFq5gE19Od3gehEPWpJ716uwmMEOgKl1IBXqeSDl1p6W', NULL, '2021-05-07 10:54:43', '2021-05-07 10:54:43'),
(5, 'Roy User', 'royuser@gmail.com', '2', NULL, '$2y$10$GAh4rR42DVB/qF8uwUZryeHEYD4mWV7lPuS8xk.A/1clQIUNVFJWm', NULL, '2021-05-07 11:11:38', '2021-05-07 11:11:38'),
(6, 'Roy User 01', 'royuser01@gmail.com', '2', NULL, '$2y$10$3ahj5D.ay5KaFIUZ5GzCzOI6lTIPCpVU7Ibhkj8U9JpKlV4urx9ry', NULL, '2021-05-07 11:12:28', '2021-05-07 11:12:28'),
(7, 'Abir', 'tarikulabir931@gmail.com', NULL, NULL, '$2y$10$uKJBpYA/GYjllDHMd/z7veEsDz80.Q22ttV8KLxt6RdWA9pJuCXXW', NULL, '2021-05-19 13:55:16', '2021-05-19 13:55:16'),
(8, 'Roy  03', 'royuser03@gmail.com', '2', NULL, '$2y$10$IYuqYiWf1AorbEAB5mGZ8uQibw4SfospRtgzj3cDIH1RyvkxewcA6', NULL, '2021-05-19 14:05:23', '2021-05-19 14:05:23'),
(9, 'Labib Restaurant', 'labibuser01@gmail.com', '3', NULL, '$2y$10$S9cZnioWLbz8HvYWsSZ4SOZG4Lxb0uaLPS2NVxonU/PhqcUQ3P7qy', NULL, '2021-05-20 11:12:10', '2021-05-20 11:12:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurents`
--
ALTER TABLE `restaurents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restaurents_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `restaurents`
--
ALTER TABLE `restaurents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
