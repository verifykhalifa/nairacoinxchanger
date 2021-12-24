-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 07:59 PM
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
(1, 'jkjakhyrqwyy84184198', '/Barcodes/yIM61639761583QR-Code-to-clear-vinyl-page.png', '5', '5', '2021-11-30 10:25:20', '2021-12-17 20:28:27'),
(2, 'vagyyy21489708dehuwdhw', '/Barcodes/uO7e1638271556Han_Xin_2D_Barcode.svg.png', '7', '5', '2021-11-30 10:25:56', '2021-11-30 10:25:56'),
(3, 'fhgffguugwqq81881941', '/Barcodes/62hw1638271574Han_Xin_2D_Barcode.svg.png', '8', '5', '2021-11-30 10:26:14', '2021-11-30 10:26:14');

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
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `coin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `bankname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acctnumber` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `orderId`, `type`, `value`, `total`, `coin`, `status`, `bankname`, `acctnumber`, `user_id`, `firstname`, `lastname`, `created_at`, `updated_at`) VALUES
(1, '159024', 'Sell', '20', 10000, 'Bitcoin BTC', 0, 'Keystone Bank|082|KEYSTONE', 876876545, 6, 'Demo', 'User', '2021-12-20 19:40:08', '2021-12-20 19:40:08'),
(2, '286865', 'Buy', '123', 71094, 'Bitcoin BTC', 0, 'Keystone Bank|082|KEYSTONE', 876876545, 6, 'Demo', 'User', '2021-12-20 20:15:27', '2021-12-20 20:15:27'),
(3, '435733', 'Sell', '20', 10000, 'Bitcoin BTC', 0, 'Keystone Bank|082|KEYSTONE', 876876545, 6, 'Demo', 'User', '2021-12-21 06:23:06', '2021-12-21 06:23:06');

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
(2, 'Miguel', 'Djokovic', 'Guaranty Trust Bank|058|GTB', '0876876540', '5', '2021-11-26 17:22:46', '2021-12-17 20:28:03'),
(3, 'Ayodeji', 'Adekunle', 'Keystone Bank|082|KEYSTONE', '0876876545', '6', '2021-12-07 10:28:23', '2021-12-07 10:28:23'),
(4, 'taiwo', 'kunle', 'Stanbic IBTC Bank|221|STANBIC', '782739372', '2', '2021-12-13 02:44:05', '2021-12-13 02:44:05');

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
(34, '2021_11_26_183242_create_addresses_table', 9),
(38, '2021_12_04_144537_add_coin_to_histories', 11),
(57, '2021_11_10_113110_create_sales_table', 12),
(58, '2021_11_10_113224_create_purchases_table', 12),
(60, '2021_12_04_121841_create_histories_table', 13),
(62, '2021_12_21_102648_add_verify_user_to_users', 14),
(63, '2021_12_21_102704_add_code_to_users', 14),
(65, '2021_12_21_091032_create_verifies_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('userrole1@yahoo.com', '$2y$10$CMvA6VO2aifVs5dT2H3G6eY2yXvQab2xook.ebjSgLO6Wmoqo44Ce', '2021-12-13 01:14:55');

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
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `btcaddress`, `user_id`, `value`, `rate`, `type`, `status`, `method`, `total`, `orderId`, `created_at`, `updated_at`) VALUES
(1, 'hgjhgu878768', '6', 123, 'Bitcoin BTC', 'Buy', 0, 'bank', 71094, '631852', '2021-12-18 22:10:23', '2021-12-18 22:10:23'),
(2, 'hgjhgu878768', '6', 123, 'Bitcoin BTC', 'Buy', 0, 'bank', 71094, '263591', '2021-12-18 22:10:45', '2021-12-18 22:10:45'),
(3, 'hgjhgu878768', '6', 123, 'Bitcoin BTC', 'Buy', 0, 'bank', 71094, '363726', '2021-12-20 20:13:55', '2021-12-20 20:13:55'),
(4, 'hgjhgu878768', '6', 123, 'Bitcoin BTC', 'Buy', 0, 'bank', 71094, '103884', '2021-12-20 20:14:57', '2021-12-20 20:14:57'),
(5, 'hgjhgu878768', '6', 123, 'Bitcoin BTC', 'Buy', 0, 'bank', 71094, '286865', '2021-12-20 20:15:27', '2021-12-20 20:15:27');

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
(5, '/CoinImages/TbHT1639328487btc.png', 'Bitcoin BTC', 578, 500, '2021-12-12 23:01:27', '2021-12-12 23:01:27'),
(6, '/CoinImages/fW4d1639328566bnb.png', 'Binance Coin BNB', 567, 580, '2021-12-12 23:02:46', '2021-12-12 23:02:46'),
(7, '/CoinImages/qjpX1639328600eth.png', 'Etherium ETH', 568, 700, '2021-12-12 23:03:20', '2021-12-12 23:03:20'),
(8, '/CoinImages/TXR71639328627bch.png', 'Bitcoin Cash BCH', 450, 600, '2021-12-12 23:03:47', '2021-12-12 23:03:47'),
(9, '/CoinImages/6Ihj1639328662usdt.png', 'Tether USDT', 568, 432, '2021-12-12 23:04:22', '2021-12-12 23:04:22');

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
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(2, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User'),
(2, 11, 'App\\Models\\User'),
(2, 12, 'App\\Models\\User'),
(2, 13, 'App\\Models\\User'),
(2, 14, 'App\\Models\\User'),
(2, 15, 'App\\Models\\User'),
(2, 16, 'App\\Models\\User'),
(2, 17, 'App\\Models\\User'),
(2, 18, 'App\\Models\\User'),
(2, 19, 'App\\Models\\User'),
(2, 20, 'App\\Models\\User'),
(2, 21, 'App\\Models\\User'),
(2, 22, 'App\\Models\\User'),
(2, 23, 'App\\Models\\User'),
(2, 24, 'App\\Models\\User'),
(2, 25, 'App\\Models\\User'),
(2, 26, 'App\\Models\\User'),
(2, 27, 'App\\Models\\User'),
(2, 28, 'App\\Models\\User'),
(2, 29, 'App\\Models\\User'),
(2, 30, 'App\\Models\\User'),
(2, 31, 'App\\Models\\User'),
(2, 32, 'App\\Models\\User'),
(2, 33, 'App\\Models\\User'),
(2, 34, 'App\\Models\\User'),
(2, 35, 'App\\Models\\User'),
(2, 36, 'App\\Models\\User'),
(2, 37, 'App\\Models\\User'),
(2, 38, 'App\\Models\\User'),
(2, 39, 'App\\Models\\User'),
(2, 40, 'App\\Models\\User'),
(2, 41, 'App\\Models\\User'),
(2, 42, 'App\\Models\\User'),
(2, 43, 'App\\Models\\User'),
(2, 44, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `value`, `rate`, `rate_id`, `type`, `status`, `total`, `orderId`, `created_at`, `updated_at`) VALUES
(1, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '586157', '2021-12-18 22:07:49', '2021-12-18 22:07:49'),
(2, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '926121', '2021-12-18 22:08:37', '2021-12-18 22:08:37'),
(3, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '787595', '2021-12-18 22:10:03', '2021-12-18 22:10:03'),
(4, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '698064', '2021-12-19 20:53:28', '2021-12-19 20:53:28'),
(5, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '376427', '2021-12-19 21:05:26', '2021-12-19 21:05:26'),
(6, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '573144', '2021-12-20 19:37:40', '2021-12-20 19:37:40'),
(7, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '714396', '2021-12-20 19:39:26', '2021-12-20 19:39:26'),
(8, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '159024', '2021-12-20 19:40:08', '2021-12-20 19:40:08'),
(9, '6', 20, 'Bitcoin BTC', '5', 'Sell', 0, 10000, '435733', '2021-12-21 06:23:06', '2021-12-21 06:23:06');

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
  `verify_user` bigint(20) NOT NULL,
  `code` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `address`, `city`, `country`, `phone`, `verify_user`, `code`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hekdj', 'jdjdj', 'jdjdj@yahoo.com', 'hshfdh', 'jjdj', 'Bahamas', '2427288323', 0, 0, NULL, '$2y$10$LMbCW1g7z.HiphRqnq.suuj4LqF5C3YHetskYStJ9IgBztR7aA7LW', NULL, '2021-11-01 03:00:31', '2021-11-01 03:00:31'),
(2, 'user', 'role', 'userrole1@yahoo.com', '728 yahoo street', 'kola', 'Bahrain', '8928388723', 0, 0, NULL, '$2y$10$qGtudGcq0EmVQxyIEsIgX.ZtjYMJo8C8ZSj/MYZXLuCy8HDsy57Se', NULL, '2021-11-01 03:13:12', '2021-11-01 03:13:12'),
(4, 'user', 'seconduser', 'user2@yahoo.com', 'user address', 'user2 city', 'Azerbaijan', '782739343', 0, 0, NULL, '$2y$10$5KqMshP9zpPvjeeyqP3AVeLVTL0dvDN2LyVNiZWOOSdqgRtiIzQ8m', NULL, '2021-11-01 03:34:34', '2021-11-01 03:34:34'),
(5, 'Admin', 'Admin', 'admin@test.com', 'Kent', 'London', 'American Samoa', '09032345323', 1, 0, NULL, '$2y$10$/F7I/tEUo9enOvBZTIZ6su1tw6cN.GngLHnxyScUeLatrMcbvt/ye', NULL, '2021-11-13 18:01:53', '2021-11-13 18:01:53'),
(6, 'Demo', 'User', 'user@test.com', 'Kent', 'London', 'American Samoa', '09012323456', 1, 0, NULL, '$2y$10$LQ4NocqsDJZiu0W7ao.3iOinru3hZqJGGmRPx8rLH7fo5h9sjomcG', NULL, '2021-11-13 18:29:23', '2021-11-13 18:29:23'),
(7, 'KanayoO', 'Kanayo', 'kanayookanyo@gmail.com', 'Mangu local government', 'JOS', 'Cocos (Keeling) Islands', '09017129050', 0, 0, NULL, '$2y$10$GowM/7B2Z7.Fw5B6ILhmwO9ijdBL8a2kp9RKC29/OCoFJnvMUiumW', NULL, '2021-12-07 11:16:20', '2021-12-07 11:16:20'),
(8, 'Ayodeji', 'Adekunle', 'ayodejiadekunle@gmail.com', 'No 11 lanlehin layout Moniya ibadan', 'Lagos', 'Nigeria', '07037949021', 0, 0, NULL, '$2y$10$WfzVruLW1ryBjnOk3bXgUO9uICJAYLeYqQ62KXOSbkjMtZoRezsvS', NULL, '2021-12-17 13:22:12', '2021-12-17 13:22:12'),
(41, 'Yaqub', 'Adesola', 'yaqub@test.com', 'No 11 lanlehin layout Moniya ibadan', 'Ibadan', 'Nigeria', '09032345323', 1, 955627, NULL, '$2y$10$xblSET.fBFkp9PMDw2eu7eCpDOpV/G/WpaYDPmIAUGH.HyqgZ6K/a', NULL, '2021-12-24 07:45:02', '2021-12-24 07:46:51'),
(42, 'jfkfkj', 'kjkjk', 'user@tesjjjjt.com', 'jkskk', 'kjkjk', 'Antarctica', '07037949021', 1, 851498, NULL, '$2y$10$jHIvC.4qZCrgC/n2gRqOO.EbhRE11hO8RiSkpcM3S4hX8hlQwNheK', NULL, '2021-12-24 07:55:57', '2021-12-24 07:56:38'),
(43, 'Ayodeji', 'Adekunle', 'user@teccccst.com', 'No 11 lanlehin layout Moniya ibadan', 'Ibadan', 'Nigeria', '07037949021', 1, 181508, NULL, '$2y$10$eVIOIiSa5foprzOc5cJB7OMEUdhqgZNVuHkF5mvpiI2NrAPJnXpEm', NULL, '2021-12-24 08:00:08', '2021-12-24 08:01:27'),
(44, 'jfkfkj', 'kjkjk', 'user@testqqq.com', 'jkskk', 'kjkjk', 'Antarctica', '07037949021', 1, 728885, NULL, '$2y$10$NgmyL6hHVAaiAG9XixYspOCxxU9b8CAGTWYXuyMep/XwXLB3XEkPe', NULL, '2021-12-24 08:18:38', '2021-12-24 08:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `verifies`
--

CREATE TABLE `verifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifies`
--

INSERT INTO `verifies` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 34, '368215', '2021-12-24 06:55:45', '2021-12-24 06:55:45'),
(2, 35, '174404', '2021-12-24 07:02:30', '2021-12-24 07:02:30'),
(3, 36, '889289', '2021-12-24 07:05:38', '2021-12-24 07:05:38'),
(4, 37, '745665', '2021-12-24 07:11:36', '2021-12-24 07:11:36'),
(5, 38, '315408', '2021-12-24 07:14:13', '2021-12-24 07:14:13'),
(6, 39, '668753', '2021-12-24 07:17:12', '2021-12-24 07:17:12'),
(7, 40, '828432', '2021-12-24 07:22:03', '2021-12-24 07:22:03'),
(8, 41, '955627', '2021-12-24 07:45:02', '2021-12-24 07:45:02'),
(9, 42, '851498', '2021-12-24 07:55:57', '2021-12-24 07:55:57'),
(10, 43, '181508', '2021-12-24 08:00:08', '2021-12-24 08:00:08'),
(11, 44, '728885', '2021-12-24 08:18:38', '2021-12-24 08:18:38');

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
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `verifies`
--
ALTER TABLE `verifies`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `linkeds`
--
ALTER TABLE `linkeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `verifies`
--
ALTER TABLE `verifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
