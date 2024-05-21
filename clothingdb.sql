-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 08:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expensesName` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expensesName`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Daily Expenses', 100, '2024-05-07', '2024-05-20 05:09:01', '2024-05-20 05:09:01'),
(2, 'Daily Expenses', 1001, '2024-05-07', '2024-05-20 05:39:37', '2024-05-20 05:39:37'),
(3, 'Daily Expenses', 90, '2024-05-07', '2024-05-20 05:39:57', '2024-05-20 05:39:57'),
(4, 'Daily Expenses', 450, '2024-05-06', '2024-05-20 05:44:12', '2024-05-20 05:44:12'),
(5, 'Daily Expenses', 560, '2024-05-11', '2024-05-20 05:45:24', '2024-05-20 05:45:24'),
(6, 'Daily Expenses', 1000, '2024-05-11', '2024-05-20 08:55:42', '2024-05-20 08:55:42'),
(7, 'Weekly Expenses', 150, '2024-05-11', '2024-05-20 09:21:31', '2024-05-20 09:21:31'),
(8, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:13', '2024-05-20 09:38:13'),
(9, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:15', '2024-05-20 09:38:15'),
(10, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:15', '2024-05-20 09:38:15'),
(11, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:16', '2024-05-20 09:38:16'),
(12, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:17', '2024-05-20 09:38:17'),
(13, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:17', '2024-05-20 09:38:17'),
(14, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:17', '2024-05-20 09:38:17'),
(15, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:17', '2024-05-20 09:38:17'),
(16, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:18', '2024-05-20 09:38:18'),
(17, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:18', '2024-05-20 09:38:18'),
(18, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:18', '2024-05-20 09:38:18'),
(19, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:18', '2024-05-20 09:38:18'),
(20, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:30', '2024-05-20 09:38:30'),
(21, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:30', '2024-05-20 09:38:30'),
(22, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:31', '2024-05-20 09:38:31'),
(23, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:31', '2024-05-20 09:38:31'),
(24, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:31', '2024-05-20 09:38:31'),
(25, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:31', '2024-05-20 09:38:31'),
(26, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:31', '2024-05-20 09:38:31'),
(27, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:32', '2024-05-20 09:38:32'),
(28, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:32', '2024-05-20 09:38:32'),
(29, 'Daily Expenses', 100, '2024-05-11', '2024-05-20 09:38:32', '2024-05-20 09:38:32'),
(30, 'Daily Expenses', 1000, '2024-05-11', '2024-05-20 10:24:19', '2024-05-20 10:24:19'),
(31, 'Daily', 100, '2024-05-11', '2024-05-20 10:24:26', '2024-05-20 10:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Boy', '2024-05-20 11:23:47', '2024-05-20 11:23:47'),
(2, 'Girl', '2024-05-20 11:24:13', '2024-05-20 11:24:13'),
(3, 'Infant', '2024-05-20 11:24:17', '2024-05-20 11:24:17'),
(4, 'Men', '2024-05-20 11:24:20', '2024-05-20 11:24:20'),
(5, 'Women', '2024-05-20 11:24:24', '2024-05-20 11:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_13_051715_create_products_table', 1),
(6, '2024_05_13_110400_create_categorys_table', 2),
(7, '2024_05_14_103123_create_sub_categorys_table', 3),
(8, '2024_05_14_103123_create_subcategorys_table', 4),
(9, '2024_05_20_084617_create_expenses_table', 5),
(10, '2024_05_20_145951_create_subcategorys_table', 6),
(11, '2024_05_20_150311_create_categorys_table', 7),
(12, '2024_05_20_163057_create_others_table', 8),
(13, '2024_05_20_171015_create_groups_table', 9),
(14, '2024_05_20_173448_create_subgroups_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `name`, `uid`, `created_at`, `updated_at`) VALUES
(1, 'Jomsher Ali', 929904, '2024-05-20 10:40:40', '2024-05-20 10:40:40'),
(2, 'Jomsher Ali', 929904, '2024-05-20 10:41:31', '2024-05-20 10:41:31'),
(3, 'Jomsher Ali', 929904, '2024-05-20 10:41:33', '2024-05-20 10:41:33'),
(4, 'Jomsher Ali', 929904, '2024-05-20 10:41:34', '2024-05-20 10:41:34'),
(5, 'Jomsher Ali', 929904, '2024-05-20 10:41:35', '2024-05-20 10:41:35'),
(6, 'Jomsher Ali', 929904, '2024-05-20 10:41:36', '2024-05-20 10:41:36'),
(7, 'Shofiya Begum', 929905, '2024-05-20 10:42:29', '2024-05-20 10:42:29'),
(8, 'Adil Ahnaf', 929913, '2024-05-20 10:42:50', '2024-05-20 10:42:50'),
(9, 'Prothoma Akter', 9299015, '2024-05-20 11:08:51', '2024-05-20 11:08:51'),
(10, 'Riyad', 929916, '2024-05-20 11:09:07', '2024-05-20 11:09:07'),
(11, 'Sadiya', 929918, '2024-05-20 11:09:18', '2024-05-20 11:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `qty`, `isActive`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Girl Bottm', 2, 450, 400, 1, '/img/products/product-17155786541.jpg|/img/products/product-17155786542.jpg|/img/products/product-17155786543.jpg|/img/products/product-17155786544.jpg', '2024-05-12 23:37:34', '2024-05-12 23:37:34'),
(2, 'Men Joggers', 4, 500, 120, 1, '/img/products/product-17155788351.jpg|/img/products/product-17155788352.jpg|/img/products/product-17155788353.jpg|/img/products/product-17155788354.jpg', '2024-05-12 23:40:35', '2024-05-12 23:40:35'),
(3, 'Men Pant', 4, 450, 200, 1, '/img/products/product-17155842191.jpg|/img/products/product-17155842192.jpg|/img/products/product-17155842193.jpg|/img/products/product-17155842194.jpg', '2024-05-13 01:10:19', '2024-05-13 01:10:19'),
(4, 'Polo', 1, 220, 500, 1, '/img/products/product-17155897671.jpg|/img/products/product-17155897672.jpg|/img/products/product-17155897673.jpg|/img/products/product-17155897674.jpg', '2024-05-13 02:42:47', '2024-05-13 02:42:47'),
(5, 'Boys fashion able Polo Shirt', 1, 250, 1000, 1, '/img/products/product-17155903101.jpg|/img/products/product-17155903102.jpg|/img/products/product-17155903103.jpg|/img/products/product-17155903104.jpg', '2024-05-13 02:51:50', '2024-05-13 02:51:50'),
(6, 'Boys Solid T-shirt', 1, 120, 600, 1, '/img/products/product-17155903951.jpg|/img/products/product-17155903952.jpg|/img/products/product-17155903953.jpg|/img/products/product-17155903954.jpg', '2024-05-13 02:53:15', '2024-05-13 02:53:15'),
(7, 'Men Trouser', 4, 450, 800, 1, '/img/products/product-17155908291.jpg|/img/products/product-17155908292.jpg|/img/products/product-17155908293.jpg|/img/products/product-17155908294.jpg', '2024-05-13 03:00:29', '2024-05-13 03:00:29'),
(8, 'Boys T-shirt', 1, 120, 1200, 1, '/img/products/product-17155925821.jpg|/img/products/product-17155925822.jpg|/img/products/product-17155925823.jpg|/img/products/product-17155925824.jpg', '2024-05-13 03:29:42', '2024-05-13 03:29:42'),
(9, 'Boys Pant', 1, 500, 700, 1, '/img/products/product-17155926021.jpg|/img/products/product-17155926022.jpg|/img/products/product-17155926023.jpg|/img/products/product-17155926024.jpg', '2024-05-13 03:30:02', '2024-05-13 03:30:02'),
(10, 'Men Cargo Pant', 4, 500, 8000, 1, '/img/products/product-17155926241.jpg|/img/products/product-17155926242.jpg|/img/products/product-17155926243.jpg|/img/products/product-17155926244.jpg', '2024-05-13 03:30:24', '2024-05-13 03:30:24'),
(11, 'Girl Frock', 2, 220, 1000, 1, '/img/products/product-17155927341.jpg|/img/products/product-17155927342.jpg|/img/products/product-17155927343.jpg|/img/products/product-17155927344.jpg', '2024-05-13 03:32:14', '2024-05-13 03:32:14'),
(12, 'Kids Polo', 3, 80, 1200, 1, '/img/products/product-17155927541.jpg|/img/products/product-17155927542.jpg|/img/products/product-17155927543.jpg|/img/products/product-17155927544.jpg', '2024-05-13 03:32:34', '2024-05-13 03:32:34'),
(13, 'Kids Shirt', 3, 120, 1200, 1, '/img/products/product-17155927901.jpg|/img/products/product-17155927902.jpg|/img/products/product-17155927903.jpg|/img/products/product-17155927904.jpg', '2024-05-13 03:33:10', '2024-05-13 03:33:10'),
(14, 'Ladies Bottom', 5, 400, 1200, 1, '/img/products/product-17155981121.jpg|/img/products/product-17155981122.jpg|/img/products/product-17155981123.jpg|/img/products/product-17155981124.jpg', '2024-05-13 05:01:52', '2024-05-13 05:01:52'),
(15, 'Men Polo Shirt', 4, 400, 700, 1, '/img/products/product-17155981621.jpg|/img/products/product-17155981622.jpg|/img/products/product-17155981623.jpg|/img/products/product-17155981624.jpg', '2024-05-13 05:02:42', '2024-05-13 05:02:42'),
(16, 'Boys Solid t-shirt', 1, 150, 200, 1, '/img/products/product-17155982031.jpg|/img/products/product-17155982032.jpg|/img/products/product-17155982033.jpg|/img/products/product-17155982034.jpg', '2024-05-13 05:03:23', '2024-05-13 05:03:23'),
(17, 'Girl T-shirt', 2, 120, 1000, 1, '/img/products/product-17156813011.jpg|/img/products/product-17156813012.jpg|/img/products/product-17156813013.jpg|/img/products/product-17156813014.jpg', '2024-05-14 04:08:21', '2024-05-14 04:08:21'),
(18, 'Kids t-shirt set', 3, 230, 7000, 1, '/img/products/product-17156813291.jpg|/img/products/product-17156813292.jpg|/img/products/product-17156813293.jpg|/img/products/product-17156813294.jpg', '2024-05-14 04:08:49', '2024-05-14 04:08:49'),
(19, 'Kids Ramper', 3, 190, 10000, 1, '/img/products/product-17161942281.jpg|/img/products/product-17161942282.jpg|/img/products/product-17161942283.jpg|/img/products/product-17161942284.jpg', '2024-05-20 02:37:08', '2024-05-20 02:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `subgroups`
--

CREATE TABLE `subgroups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupid` int(11) NOT NULL,
  `subgroup` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subgroups`
--

INSERT INTO `subgroups` (`id`, `groupid`, `subgroup`, `created_at`, `updated_at`) VALUES
(1, 2, 'Tops', '2024-05-20 11:42:50', '2024-05-20 11:42:50'),
(2, 1, 'Thirt', '2024-05-20 11:43:03', '2024-05-20 11:43:03'),
(3, 4, 'Pant', '2024-05-20 11:43:10', '2024-05-20 11:43:10'),
(4, 5, 'Trouser', '2024-05-20 11:43:15', '2024-05-20 11:43:15'),
(5, 4, 'Polo', '2024-05-20 11:56:06', '2024-05-20 11:56:06'),
(6, 1, 'T-shirt set', '2024-05-20 11:56:16', '2024-05-20 11:56:16'),
(7, 1, 'Short', '2024-05-20 11:56:22', '2024-05-20 11:56:22'),
(8, 2, 'Ramper', '2024-05-20 11:56:31', '2024-05-20 11:56:31'),
(9, 4, 'Jacket', '2024-05-20 11:58:32', '2024-05-20 11:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subgroups`
--
ALTER TABLE `subgroups`
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
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subgroups`
--
ALTER TABLE `subgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
