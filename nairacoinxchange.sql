-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nairacoinxchange`
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `orderId`, `type`, `coin`, `status`, `user_id`, `firstname`, `lastname`, `created_at`, `updated_at`) VALUES
(1, 'INV-000040', 'Sell', 'Bitcoin', 1, 6, 'Demo', 'User', '2021-12-12 15:33:08', '2021-12-12 15:37:35'),
(2, 'INV-000009', 'Buy', 'Bitcoin', 1, 6, 'Demo', 'User', '2021-12-12 15:40:35', '2021-12-12 15:43:47'),
(3, '210001', 'Buy', 'Bitcoin', 1, 6, 'Demo', 'User', '2021-12-12 15:41:15', '2021-12-12 15:43:50'),
(4, '210001', 'Sell', 'Bitcoin', 1, 6, 'Demo', 'User', '2021-12-12 15:42:42', '2021-12-12 15:43:54'),
(5, '210001', 'Buy', 'Binance Coin BNB', 0, 2, 'user', 'role', '2021-12-13 02:44:24', '2021-12-13 02:44:24'),
(6, '210001', 'Buy', 'Binance Coin BNB', 0, 2, 'user', 'role', '2021-12-13 02:46:16', '2021-12-13 02:46:16');

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
(2, 'Miguel', 'Djokovic', 'Guaranty Trust Bank|058|GTB', '0876876545', '5', '2021-11-26 17:22:46', '2021-11-26 17:22:46'),
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
(35, '2021_11_10_113110_create_sales_table', 10),
(36, '2021_11_10_113224_create_purchases_table', 10),
(38, '2021_12_04_144537_add_coin_to_histories', 11),
(41, '2021_12_04_121841_create_histories_table', 12);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'hgjhgu878768', '6', 123, 'Bitcoin', 'buy', 0, 'bank', 70110, '235fa9a0-54ff-11ec-a3d0-37a797d14294', '2021-12-04 11:38:52', '2021-12-04 11:38:52'),
(2, 'hgjhgu878768', '6', 123, 'Bitcoin', 'buy', 0, 'bank', 70110, 'CPT-000001', '2021-12-07 10:47:58', '2021-12-07 10:47:58'),
(3, 'hgjhgu878768', '6', 123, 'Bitcoin', 'buy', 0, 'bank', 70110, 'CPT-000002', '2021-12-07 10:52:52', '2021-12-07 10:52:52'),
(4, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Purchase', 0, 'bank', 70110, 'INV-000003', '2021-12-11 19:40:44', '2021-12-11 19:40:44'),
(5, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Purchase', 0, 'bank', 70110, 'INV-000004', '2021-12-12 11:13:39', '2021-12-12 11:13:39'),
(6, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Purchase', 0, 'bank', 70110, 'INV-000005', '2021-12-12 12:47:07', '2021-12-12 12:47:07'),
(7, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Purchase', 0, 'bank', 70110, 'INV-000006', '2021-12-12 13:51:09', '2021-12-12 13:51:09'),
(8, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Purchase', 0, 'bank', 70110, 'INV-000007', '2021-12-12 13:52:59', '2021-12-12 13:52:59'),
(9, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Purchase', 0, 'bank', 70110, 'INV-000008', '2021-12-12 14:03:50', '2021-12-12 14:03:50'),
(10, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Buy', 0, 'bank', 70110, 'INV-000009', '2021-12-12 15:40:35', '2021-12-12 15:40:35'),
(11, 'hgjhgu878768', '6', 123, 'Bitcoin', 'Buy', 0, 'bank', 70110, '210001', '2021-12-12 15:41:15', '2021-12-12 15:41:15'),
(12, 'jksj8w73', '2', 34, 'Binance Coin BNB', 'Buy', 0, 'bank', 19278, '210001', '2021-12-13 02:44:23', '2021-12-13 02:44:23'),
(13, 'jksj8w73', '2', 34, 'Binance Coin BNB', 'Buy', 0, 'bank', 19278, '210001', '2021-12-13 02:46:16', '2021-12-13 02:46:16');

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
(2, 7, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `sales` (`id`, `user_id`, `value`, `rate`, `type`, `status`, `total`, `orderId`, `created_at`, `updated_at`) VALUES
(1, '6', 222, 'Perfect Money', 'sell', 0, 113220, '43e2d210-54ff-11ec-aca7-ad5ec076ca1b', '2021-12-04 11:39:47', '2021-12-04 11:39:47'),
(2, '6', 20, 'Bitcoin', 'sell', 0, 11000, 'cf911680-5515-11ec-a716-31affcdbda2d', '2021-12-04 14:21:10', '2021-12-04 14:21:10'),
(3, '6', 20, 'Bitcoin', 'sell', 0, 11000, 'eb4233a0-5515-11ec-8c08-d7cdaf61a5c8', '2021-12-04 14:21:57', '2021-12-04 14:21:57'),
(4, '6', 20, 'Bitcoin', 'sell', 0, 11000, 'CPT-000034', '2021-12-07 10:43:10', '2021-12-07 10:43:10'),
(5, '6', 20, 'Bitcoin', 'sell', 0, 11000, 'INV-000034', '2021-12-07 10:55:12', '2021-12-07 10:55:12'),
(6, '6', 45, 'Bitcoin', 'Sale', 0, 24750, 'INV-000035', '2021-12-11 18:42:02', '2021-12-11 18:42:02'),
(7, '6', 20, 'Bitcoin', 'Sale', 0, 11000, 'INV-000036', '2021-12-11 19:19:49', '2021-12-11 19:19:49'),
(8, '6', 20, 'Bitcoin', 'Sell', 0, 11000, 'INV-000037', '2021-12-12 15:27:41', '2021-12-12 15:27:41'),
(9, '6', 20, 'Bitcoin', 'Sell', 0, 11000, 'INV-000038', '2021-12-12 15:30:46', '2021-12-12 15:30:46'),
(10, '6', 20, 'Bitcoin', 'Sell', 0, 11000, 'INV-000039', '2021-12-12 15:32:00', '2021-12-12 15:32:00'),
(11, '6', 20, 'Bitcoin', 'Sell', 0, 11000, 'INV-000040', '2021-12-12 15:33:07', '2021-12-12 15:33:07'),
(12, '6', 20, 'Bitcoin', 'Sell', 0, 11000, '210001', '2021-12-12 15:42:42', '2021-12-12 15:42:42');

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
(4, 'user', 'seconduser', 'user2@yahoo.com', 'user address', 'user2 city', 'Azerbaijan', '782739343', NULL, '$2y$10$5KqMshP9zpPvjeeyqP3AVeLVTL0dvDN2LyVNiZWOOSdqgRtiIzQ8m', NULL, '2021-11-01 03:34:34', '2021-11-01 03:34:34'),
(5, 'Admin', 'Admin', 'admin@test.com', 'Kent', 'London', 'American Samoa', '09032345323', NULL, '$2y$10$/F7I/tEUo9enOvBZTIZ6su1tw6cN.GngLHnxyScUeLatrMcbvt/ye', NULL, '2021-11-13 18:01:53', '2021-11-13 18:01:53'),
(6, 'Demo', 'User', 'user@test.com', 'Kent', 'London', 'American Samoa', '09012323456', NULL, '$2y$10$LQ4NocqsDJZiu0W7ao.3iOinru3hZqJGGmRPx8rLH7fo5h9sjomcG', NULL, '2021-11-13 18:29:23', '2021-11-13 18:29:23'),
(7, 'KanayoO', 'Kanayo', 'kanayookanyo@gmail.com', 'Mangu local government', 'JOS', 'Cocos (Keeling) Islands', '09017129050', NULL, '$2y$10$GowM/7B2Z7.Fw5B6ILhmwO9ijdBL8a2kp9RKC29/OCoFJnvMUiumW', NULL, '2021-12-07 11:16:20', '2021-12-07 11:16:20');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `linkeds`
--
ALTER TABLE `linkeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
