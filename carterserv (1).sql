-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 07:00 AM
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
-- Database: `carterserv`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `no_people` varchar(255) NOT NULL,
  `food` enum('veg','non_veg','','') NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` int(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `email`, `phone`, `event_type`, `no_people`, `food`, `country`, `city`, `place`, `date`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'herouser@yopmail.com', '+1 (232) 577-6464', 'big_event', '300-400', 'non_veg', '1', 1, '2', '2024-01-15 00:00:00', 0, '2024-01-04 07:16:48', '2024-01-04 07:16:48'),
(7, 'herouser@yopmail.com', '+1 (232) 577-6464', 'big_event', '300-400', 'veg', '8', 9, '11', '2024-01-25 00:00:00', 0, '2024-01-05 05:21:30', '2024-01-05 05:21:30'),
(8, 'zekysuceb@mailinator.com', '+1 (714) 837-1251', 'Small Event', '300-400', 'veg', '5', 2, '4', '2008-12-20 00:00:00', 3, '2024-01-19 07:13:47', '2024-01-19 07:13:47'),
(9, 'herouser@yopmail.com', '+1 (155) 734-2448', 'Corporate', '1000+', 'veg', '8', 7, '10', '2024-01-24 00:00:00', 3, '2024-01-19 09:01:40', '2024-01-19 09:01:40'),
(10, 'herouser@yopmail.com', '9687918371', 'Corporate', '100-200', 'non_veg', '5', 3, '7', '2024-01-30 00:00:00', 3, '2024-01-19 11:06:31', '2024-01-19 11:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `country_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `country_id`, `updated_at`, `created_at`) VALUES
(2, 'Ahemedabad', 5, '2024-01-04 11:06:27', '11:06:27'),
(3, 'Surat', 5, '2024-01-04 11:06:35', '11:06:35'),
(4, 'Bharuch', 5, '2024-01-04 11:06:42', '11:06:42'),
(5, 'Somnath', 5, '2024-01-04 11:06:50', '11:06:50'),
(6, 'Baroda', 5, '2024-01-04 11:07:00', '11:07:00'),
(7, 'Chicago', 8, '2024-01-04 11:09:14', '11:09:14'),
(8, 'Houston', 8, '2024-01-04 11:09:24', '11:09:24'),
(9, 'Los Angeles', 8, '2024-01-04 11:09:35', '11:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `updated_at`, `created_at`) VALUES
(5, 'India', '2024-01-04 10:16:04', '2024-01-04 04:46:04'),
(7, 'UK', '2024-01-04 10:17:22', '2024-01-04 04:47:22'),
(8, 'USA', '2024-01-04 10:17:27', '2024-01-04 04:47:27'),
(9, 'Canada', '2024-01-04 10:17:33', '2024-01-04 04:47:33');

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `category`, `updated_at`, `created_at`) VALUES
(9, 'images/1651cf0d2f737d7adeab84d339dbabd3.jpg', 'Corporate', NULL, NULL),
(10, 'images/4734ba6f3de83d861c3176a6273cac6d.jpg|images/0efe32849d230d7f53049ddc4a4b0c60.jpg', 'Wedding', '2024-01-08 05:24:38', NULL),
(11, 'images/192fc044e74dffea144f9ac5dc9f3395.jpg|images/2ba596643cbbbc20318224181fa46b28.jpg|images/7ef605fc8dba5425d6965fbd4c8fbe1f.jpg|images/7eacb532570ff6858afd2723755ff790.jpg', 'Buffer', NULL, NULL),
(12, 'images/5f0f5e5f33945135b874349cfbed4fb9.jpg|images/31839b036f63806cba3f47b93af8ccb5.jpg|images/979d472a84804b9f647bc185a877a8b5.jpg|images/68053af2923e00204c3ca7c6a3150cf7.jpg', 'Cocktail', '2024-01-08 06:01:37', NULL),
(13, 'images/94c7bb58efc3b337800875b5d382a072.jpg|images/2b24d495052a8ce66358eb576b8912c8.jpg|images/f1c1592588411002af340cbaedd6fc33.jpg', 'Cocktail', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `price`, `image`, `description`, `category`, `created_at`, `updated_at`) VALUES
(3, 'Paneer', '$90', 'images\\php3859.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Starter', '2024-01-08 01:30:37', '07:00:37'),
(5, 'Sweet', '$90', 'images\\php72D8.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Starter', '2024-01-08 08:12:59', '08:12:59'),
(6, 'Sabudana Tikki', '$110', 'images\\php41D1.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Starter', '2024-01-08 01:38:18', '07:08:18'),
(7, 'Pizza', '$200', 'images\\phpDB82.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Main Course', '2024-01-08 01:38:58', '07:08:58'),
(8, 'Sweet', '$150', 'images\\php7060.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Main Course', '2024-01-08 01:39:36', '07:09:36'),
(9, 'Apple Juice', '$50', 'images\\php3BA1.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Drinks', '2024-01-08 01:40:28', '07:10:28'),
(10, 'Sweet Water', '$60', 'images\\phpD590.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Drinks', '2024-01-08 01:41:07', '07:11:07'),
(11, 'Argentinian', '$90', 'images\\php25E7.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Offers', '2024-01-08 02:52:28', '08:22:28'),
(12, 'Blooming', '$400', 'images\\phpC92D.tmp.jpg', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'Our Special', '2024-01-08 02:53:09', '08:23:09');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_id` varchar(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `city_id`, `updated_at`, `created_at`) VALUES
(2, 'Pizza Hunt', '2', '2024-01-04 11:23:48', '2024-01-04 05:53:48'),
(4, 'octen', '2', '2024-01-04 11:24:26', '2024-01-04 05:54:26'),
(5, 'LOve PIzza', '2', '2024-01-04 11:29:45', '2024-01-04 05:59:45'),
(6, 'AnOkHa', '4', '2024-01-04 11:30:01', '2024-01-04 06:00:01'),
(7, 'New Pizza', '3', '2024-01-04 11:30:14', '2024-01-04 06:00:14'),
(8, 'Pizzagram', '6', '2024-01-04 11:30:23', '2024-01-04 06:00:23'),
(9, 'Pizza Lover', '3', '2024-01-04 11:30:33', '2024-01-04 06:00:33'),
(10, 'LOVER Points', '7', '2024-01-04 11:30:50', '2024-01-04 06:00:50'),
(11, 'Couple Cafe', '9', '2024-01-04 11:31:14', '2024-01-04 06:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(6, 'Dustbin', 'Dustbin', 'fa-trash', '2024-01-19 06:20:54', '06:20:54'),
(8, 'Pizza Slice', 'Pizza Lover', 'fa-pizza-slice', '2024-01-19 06:20:27', '06:20:27'),
(11, 'Family Party', 'Family Love', 'fa-heart', '2024-01-18 23:58:52', '05:28:52');

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
  `phone` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_type` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Gay Gillespie', 'zekyr@mailinator.com', NULL, '$2y$12$h07r9l0eayEGZIRyDS181u79yQZGNNxW59Vgl4HqNOx/1ynleGOEG', '+1 (439) 951-5426', NULL, '0', '2024-01-03 01:01:47', '2024-01-03 01:01:47'),
(2, 'Brandon Hendrix', 'debovatir@mailinator.com', NULL, '$2y$12$WwsD2JCflnDm9xlpGeOEE.kx7ihsJ6xltuvbFg9BFAdjP5K0uIDqq', '+1 (771) 475-4129', NULL, '0', '2024-01-03 01:04:06', '2024-01-03 01:04:06'),
(3, 'Brenden Cox', 'jackdeveloper100@gmail.com', NULL, '$2y$12$Skkxihk6Q/UDzsViZCgP0Ob3juHv0Nr5Ghm.zW2wjplMTyqEdOlF2', '+1 (685) 395-6653', NULL, '0', '2024-01-03 01:33:50', '2024-01-03 01:33:50'),
(4, 'Sohil Patel', 'jackdeveloper100+admin@gmail.co', NULL, '$2y$12$YlDeUSE.MtbU/OMBAUMFN.2RKLaz2gARoA3pRS/wtqb7PdlM97udy', '+1 (232) 577-6464', NULL, '1', '2024-01-04 03:09:03', '2024-01-04 03:09:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
