-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 05:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `info`, `image`, `book`, `created_at`, `updated_at`, `user_id`, `category_id`) VALUES
(1, 'test', 'testtest', 'rrrrr', '1579471741thuminal.jpg', '1579471741thuminal.pdf', '2020-01-19 20:09:01', '2020-01-19 20:09:01', 1, 1),
(2, 'test', 'ddddddd', 'dddddd', '1579471915thuminal.jpg', '1579471915thuminal.pdf', '2020-01-19 20:11:55', '2020-01-19 20:11:55', 1, 2),
(3, 'test', 'adel moheb', 'comdey novel', '1579550025thuminal.jpg', '1579550025thuminal.pdf', '2020-01-20 17:53:45', '2020-01-20 17:53:45', 1, 5),
(4, 'test', 'ahmed', 'computing book', '1579550072thuminal.jpg', '1579550072thuminal.pdf', '2020-01-20 17:54:32', '2020-01-20 17:54:32', 1, 6),
(5, 'test', 'ali', 'about love', '1579550112thuminal.jpg', '1579550112thuminal.pdf', '2020-01-20 17:55:12', '2020-01-20 17:55:12', 1, 7),
(6, 'test', 'lila', 'good book', '1579550183thuminal.jpg', '1579550183thuminal.pdf', '2020-01-20 17:56:23', '2020-01-20 17:56:23', 1, 9),
(7, 'test', 'lila ahmed', 'good story', '1579561650thuminal.jpg', '1579561650thuminal.pdf', '2020-01-20 21:07:30', '2020-01-20 21:07:30', 1, 7),
(8, 'test', 'ali', 'exciting story', '1579561850thuminal.jpg', '1579561850thuminal.pdf', '2020-01-20 21:10:51', '2020-01-20 21:10:51', 1, 8),
(9, 'test', 'jack', 'good designing book', '1579562355thuminal.jpg', '1579562355thuminal.pdf', '2020-01-20 21:19:15', '2020-01-20 21:19:15', 1, 11),
(10, 'test', 'aaaaaa', 'good developping book', '1579562457thuminal.jpg', '1579562457thuminal.pdf', '2020-01-20 21:20:58', '2020-01-20 21:20:58', 1, 10),
(11, 'test', 'ali', 'kkkkkkkkk', '1579562692thuminal.jpg', '1579562692thuminal.pdf', '2020-01-20 21:24:52', '2020-01-20 21:24:52', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sience fiction', '2020-01-19 16:39:30', '2020-01-19 16:39:30'),
(2, 'historic', '2020-01-19 16:41:20', '2020-01-19 16:41:20'),
(5, 'comedy', '2020-01-20 17:51:35', '2020-01-20 17:51:35'),
(6, 'mathmatical', '2020-01-20 17:52:00', '2020-01-20 17:52:00'),
(7, 'emotional', '2020-01-20 17:52:18', '2020-01-20 17:52:18'),
(8, 'crimes', '2020-01-20 17:52:28', '2020-01-20 17:52:28'),
(9, 'ploticis', '2020-01-20 17:52:39', '2020-01-20 17:52:39'),
(10, 'developing', '2020-01-20 21:17:12', '2020-01-20 21:17:12'),
(11, 'designing', '2020-01-20 21:17:33', '2020-01-20 21:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `created_at`, `updated_at`, `user_id`, `book_id`) VALUES
(1, 'fffffff', '2020-01-20 20:12:22', '2020-01-20 20:12:22', 1, 2),
(2, 'second comment', '2020-01-20 20:56:06', '2020-01-20 20:56:06', 1, 2),
(3, 'first comment', '2020-01-20 20:56:58', '2020-01-20 20:56:58', 1, 1),
(4, 'second comment', '2020-01-20 20:57:27', '2020-01-20 20:57:27', 1, 1),
(5, 'hello guys', '2020-01-20 21:12:20', '2020-01-20 21:12:20', 3, 1);

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2020_01_18_184857_create_roles_table', 1),
(11, '2020_01_18_185122_create_role_user_table', 1),
(14, '2020_01_18_193746_create_comments_table', 1),
(15, '2020_01_18_185334_create_categories_table', 2),
(16, '2020_01_18_185417_create_books_table', 3);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admins', NULL, NULL),
(2, 'users', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, NULL, NULL, 2, 2),
(2, NULL, NULL, 1, 1),
(3, NULL, NULL, 3, 2),
(4, NULL, NULL, 4, 2),
(5, NULL, NULL, 5, 2),
(8, NULL, NULL, 1, 2000),
(9, NULL, NULL, 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'ahmed@ahmed.com', NULL, '$2y$10$8n6BbEiE4A280svzWIc79.mgqIwOsUBRfa8eYKOKO8j4am6CBVcMS', 'Z0UHbRmPglUpGUpOg5gBuSYhhFV8gW8yuuuRHD0iLpVHv95iSpKq0bH4bnLG', '2020-01-18 18:42:34', '2020-01-18 18:42:34'),
(2, 'lila', 'lila@lila.com', NULL, '$2y$10$kaodqmiWDTWxCuFFSwVkee1s9FskoOt1ukMKVXP8OrRgSZUEsQSsy', 't3Ke4IscTPdMo66BRZkkIvIED2D5wukJcUabVIdrThYbo5DtCqa5NcyQlgkR', '2020-01-18 18:49:40', '2020-01-18 18:49:40'),
(3, 'nada', 'nada@nada.com', NULL, '$2y$10$8Wyo6E7m00/F.ZCPlDJxa.zVN8J/MQYEeKrK4UBGJxz8BwH5W1QKG', 'mgXeZAvuEmR17AbHOAQ6rE1i24PBIfL3yn3viuIOwTGwtrtjGezOZ4u50Ico', '2020-01-18 18:51:38', '2020-01-18 18:51:38'),
(4, 'aya', 'aya@aya.com', NULL, '$2y$10$JWcACcZ9q8crYqQ2iglp/O2IOHZcbhZvSmPTJSnwfsAm5VlN8YTXi', NULL, '2020-01-18 19:03:48', '2020-01-18 19:03:48'),
(5, 'hend', 'hend@hend.com', NULL, '$2y$10$JNX/ztcAsZodDtk.CyXgy.1LuOvmxLy3RD5tfqygsGPE0wxorp.QC', 'npAMl6k8omR6UTbXGx2UXGl9Hb0c177gDdkZKeYmK1nyPgjVpgvHaE4EcWeD', '2020-01-18 19:06:20', '2020-01-18 19:06:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
