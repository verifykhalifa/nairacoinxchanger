-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 09:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xchangesnaira`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `barcode`, `coin`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'jkjakhyrqwyy841841208', '/Barcodes/mKcz1638271520Han_Xin_2D_Barcode.svg.png', 'Bitcoin', '5', '2021-11-30 10:25:20', '2021-11-30 10:25:20'),
(2, 'vagyyy21489708dehuwdhw', '/Barcodes/uO7e1638271556Han_Xin_2D_Barcode.svg.png', 'Ethereum', '5', '2021-11-30 10:25:56', '2021-11-30 10:25:56'),
(3, 'fhgffguugwqq81881941', '/Barcodes/62hw1638271574Han_Xin_2D_Barcode.svg.png', 'Perfect Money', '5', '2021-11-30 10:26:14', '2021-11-30 10:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkeds`
--

CREATE TABLE `linkeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acctnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linkeds`
--

INSERT INTO `linkeds` (`id`, `firstname`, `lastname`, `bankname`, `acctnumber`, `userid`, `created_at`, `updated_at`) VALUES
(2, 'Miguel', 'Djokovic', 'Guaranty Trust Bank|058|GTB', '0876876545', '5', '2021-11-26 17:22:46', '2021-11-26 17:22:46');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2021_10_31_143655_laratrust_setup_tables', 1),
(17, '2021_11_13_190436_add_coin_image_to_rates', 2),
(25, '2021_11_13_115652_create_rates_table', 4),
(26, '2021_11_23_001207_create_linkeds_table', 5),
(32, '2021_11_10_113224_create_purchases_table', 7),
(33, '2021_11_10_113110_create_sales_table', 8),
(34, '2021_11_26_183242_create_addresses_table', 9);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-11-13 17:58:59', '2021-11-13 17:58:59'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-11-13 17:58:59', '2021-11-13 17:58:59'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-11-13 17:58:59', '2021-11-13 17:58:59'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-11-13 17:59:00', '2021-11-13 17:59:00'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-11-13 17:59:00', '2021-11-13 17:59:00'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-11-13 17:59:00', '2021-11-13 17:59:00'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-11-13 17:59:00', '2021-11-13 17:59:00'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-11-13 17:59:00', '2021-11-13 17:59:00'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-11-13 17:59:00', '2021-11-13 17:59:00'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-11-13 17:59:00', '2021-11-13 17:59:00');

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
(10, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `btcaddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `btcaddress`, `user_id`, `value`, `rate`, `method`, `total`, `orderId`, `created_at`, `updated_at`) VALUES
(1, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a259e2b87bd', '2021-11-27 15:16:34', '2021-11-27 15:16:34'),
(2, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a25a39009a6', '2021-11-27 15:18:01', '2021-11-27 15:18:01'),
(3, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a25df74e500', '2021-11-27 15:33:59', '2021-11-27 15:33:59'),
(4, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a25e49ca4e1', '2021-11-27 15:35:21', '2021-11-27 15:35:21'),
(5, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a25fb36b1ee', '2021-11-27 15:41:23', '2021-11-27 15:41:23'),
(6, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a25fec48ec2', '2021-11-27 15:42:20', '2021-11-27 15:42:20'),
(7, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a260210f327', '2021-11-27 15:43:13', '2021-11-27 15:43:13'),
(8, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a2603510b36', '2021-11-27 15:43:33', '2021-11-27 15:43:33'),
(9, 'hgjhgu878768', '6', 565, 'Bitcoin', 'bank', 322050, '61a2608ad55be', '2021-11-27 15:44:58', '2021-11-27 15:44:58'),
(10, 'hgjhgu878768', '6', 233, 'Bitcoin', 'bank', 132810, '61a2721963e80', '2021-11-27 16:59:53', '2021-11-27 16:59:53'),
(11, 'hgjhgu878768', '6', 233, 'Bitcoin', 'bank', 132810, '61a272422d0d2', '2021-11-27 17:00:34', '2021-11-27 17:00:34'),
(12, 'hgjhgu878768', '6', 233, 'Bitcoin', 'bank', 132810, '61a272b253a9e', '2021-11-27 17:02:26', '2021-11-27 17:02:26'),
(13, 'hgjhgu878768', '6', 233, 'Bitcoin', 'bank', 132810, '61a2768c7187d', '2021-11-27 17:18:52', '2021-11-27 17:18:52'),
(14, 'hgjhgu878768', '6', 233, 'Bitcoin', 'master', 132810, '61a276b14b654', '2021-11-27 17:19:29', '2021-11-27 17:19:29'),
(15, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, '61a27eebdd7f6', '2021-11-27 17:54:35', '2021-11-27 17:54:35'),
(16, 'hgjhgu878768', '6', 123, '[\"Perfect Money\"]', 'bank', 69495, '61a28005410af', '2021-11-27 17:59:17', '2021-11-27 17:59:17'),
(17, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, '61a2820469141', '2021-11-27 18:07:48', '2021-11-27 18:07:48'),
(18, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, '61a2825661fef', '2021-11-27 18:09:10', '2021-11-27 18:09:10'),
(19, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, '61a282a0d55f0', '2021-11-27 18:10:24', '2021-11-27 18:10:24'),
(20, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, '61a282c45222e', '2021-11-27 18:11:00', '2021-11-27 18:11:00'),
(21, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, '61a4ce82518ef', '2021-11-29 11:58:42', '2021-11-29 11:58:42'),
(22, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, '61a5d41e2cfb2', '2021-11-30 06:34:54', '2021-11-30 06:34:54'),
(23, 'hgjhgu878768', '6', 123, '[\"Bitcoin\"]', 'bank', 70110, 'a1f54bd0-51e9-11ec-817c-fb480955dc2e', '2021-11-30 13:27:22', '2021-11-30 13:27:22'),
(24, 'hgjhgu878768', '6', 123, 'Perfect Money', 'bank', 69495, '669a75e0-51ea-11ec-8310-4bbadae7c004', '2021-11-30 13:32:52', '2021-11-30 13:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coin_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy` bigint(20) DEFAULT NULL,
  `sell` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `coin_image`, `coin`, `buy`, `sell`, `created_at`, `updated_at`) VALUES
(1, '/CoinImages/xs581637674267images (11).jfif', 'Bitcoin', 570, 550, '2021-11-23 12:31:07', '2021-11-23 12:31:07'),
(2, '/CoinImages/TobN1637674359download (64).png', 'Perfect Money', 565, 510, '2021-11-23 12:32:39', '2021-11-23 12:32:39'),
(3, '/CoinImages/Dq3R1637674404qhglut5m3ovzm92frajd.png', 'Bitcoin Cash', 600, NULL, '2021-11-23 12:33:24', '2021-11-23 12:33:24'),
(4, '/CoinImages/YjDI1637674424800px-Ethereum-icon-purple.svg.png', 'Ethereum', 500, NULL, '2021-11-23 12:33:44', '2021-11-23 12:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-11-13 17:58:59', '2021-11-13 17:58:59'),
(2, 'user', 'User', 'User', '2021-11-13 17:59:01', '2021-11-13 17:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 2, 'App\\Models\\User'),
(1, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(1, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `value`, `rate`, `total`, `orderId`, `created_at`, `updated_at`) VALUES
(1, '6', 222, '[\"Perfect Money\"]', 113220, 'a762c630-51c9-11ec-b384-cfca2f8a97c3', '2021-11-30 09:38:28', '2021-11-30 09:38:28'),
(2, '6', 222, '[\"Bitcoin\"]', 122100, '8b95e230-51d2-11ec-b754-9bb0124d4533', '2021-11-30 10:42:06', '2021-11-30 10:42:06'),
(3, '6', 222, '[\"Perfect Money\"]', 113220, '3c213c50-51d5-11ec-8da9-65e62a58638b', '2021-11-30 11:01:22', '2021-11-30 11:01:22'),
(4, '6', 222, '[\"Perfect Money\"]', 113220, '9eb15720-51d5-11ec-83c5-97effd4b80ca', '2021-11-30 11:04:07', '2021-11-30 11:04:07'),
(5, '6', 222, '[\"Perfect Money\"]', 113220, 'eb0f3860-51de-11ec-ad8f-a7c6302cbcf9', '2021-11-30 12:10:41', '2021-11-30 12:10:41'),
(6, '6', 222, 'Bitcoin', 122100, 'fa9f9d60-51e6-11ec-95d9-bf57dcf23e35', '2021-11-30 13:08:23', '2021-11-30 13:08:23'),
(7, '6', 222, 'Perfect Money', 113220, '6c356980-51e7-11ec-bf9d-2385ddb7bbd0', '2021-11-30 13:11:33', '2021-11-30 13:11:33'),
(8, '6', 222, 'Bitcoin', 122100, '354c3600-51e9-11ec-91d2-33cbcff43916', '2021-11-30 13:24:20', '2021-11-30 13:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `address`, `city`, `country`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hekdj', 'jdjdj', 'jdjdj@yahoo.com', 'hshfdh', 'jjdj', 'Bahamas', '2427288323', NULL, '$2y$10$LMbCW1g7z.HiphRqnq.suuj4LqF5C3YHetskYStJ9IgBztR7aA7LW', NULL, '2021-11-01 03:00:31', '2021-11-01 03:00:31'),
(2, 'user', 'role', 'userrole1@yahoo.com', '728 yahoo street', 'kola', 'Bahrain', '8928388723', NULL, '$2y$10$qGtudGcq0EmVQxyIEsIgX.ZtjYMJo8C8ZSj/MYZXLuCy8HDsy57Se', NULL, '2021-11-01 03:13:12', '2021-11-01 03:13:12'),
(3, 'Admin', 'Admin', 'admin@admin.com', 'admin address', 'admin city', 'Nigeria', '809282827', NULL, '$2y$10$gA3ZKp1rlwGNxs0aaQsMSudKtemt/gVPoAIeGyAqsvmojC/53yiHS', NULL, '2021-11-01 03:32:42', '2021-11-01 03:32:42'),
(4, 'user', 'seconduser', 'user2@yahoo.com', 'user address', 'user2 city', 'Azerbaijan', '782739343', NULL, '$2y$10$5KqMshP9zpPvjeeyqP3AVeLVTL0dvDN2LyVNiZWOOSdqgRtiIzQ8m', NULL, '2021-11-01 03:34:34', '2021-11-01 03:34:34'),
(5, 'Admin', 'Admin', 'admin@test.com', 'Kent', 'London', 'American Samoa', '09032345323', NULL, '$2y$10$/F7I/tEUo9enOvBZTIZ6su1tw6cN.GngLHnxyScUeLatrMcbvt/ye', NULL, '2021-11-13 18:01:53', '2021-11-13 18:01:53'),
(6, 'Demo', 'User', 'user@test.com', 'Kent', 'London', 'American Samoa', '09012323456', NULL, '$2y$10$LQ4NocqsDJZiu0W7ao.3iOinru3hZqJGGmRPx8rLH7fo5h9sjomcG', NULL, '2021-11-13 18:29:23', '2021-11-13 18:29:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `linkeds`
--
ALTER TABLE `linkeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkeds`
--
ALTER TABLE `linkeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
