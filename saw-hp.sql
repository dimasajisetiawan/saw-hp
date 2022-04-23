-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2022 at 05:54 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw-hp`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_harga`
--

CREATE TABLE `kriteria_harga` (
  `id_kriteria_harga` bigint(20) UNSIGNED NOT NULL,
  `pilihan_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_harga`
--

INSERT INTO `kriteria_harga` (`id_kriteria_harga`, `pilihan_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, '2-3 Juta', 2, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(2, '3-4 Juta', 3, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(3, '4-5 Juta', 4, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(4, '>5 Juta', 5, '2022-04-19 07:33:58', '2022-04-20 03:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_penyimpanan`
--

CREATE TABLE `kriteria_penyimpanan` (
  `id_kriteria_penyimpanan` bigint(20) UNSIGNED NOT NULL,
  `pilihan_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_penyimpanan`
--

INSERT INTO `kriteria_penyimpanan` (`id_kriteria_penyimpanan`, `pilihan_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, '64 GB', 1, '2022-04-19 07:33:58', '2022-04-21 05:38:58'),
(2, '128 GB', 3, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(3, '256 GB', 5, '2022-04-19 07:33:58', '2022-04-20 23:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_processor`
--

CREATE TABLE `kriteria_processor` (
  `id_kriteria_processor` bigint(20) UNSIGNED NOT NULL,
  `pilihan_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_processor`
--

INSERT INTO `kriteria_processor` (`id_kriteria_processor`, `pilihan_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'QUAD-CORE PROCESSOR', 1, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(2, 'HEXA-CORE PROCESSOR', 3, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(3, 'OCTA-CORE PROCESSOR', 5, '2022-04-19 07:33:58', '2022-04-20 03:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_ram`
--

CREATE TABLE `kriteria_ram` (
  `id_kriteria_ram` bigint(20) UNSIGNED NOT NULL,
  `pilihan_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_ram`
--

INSERT INTO `kriteria_ram` (`id_kriteria_ram`, `pilihan_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, '4 GB', 2, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(2, '6 GB', 3, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(3, '8 GB', 4, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(4, '12 GB', 5, '2022-04-19 07:33:58', '2022-04-20 03:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_slot_sim`
--

CREATE TABLE `kriteria_slot_sim` (
  `id_kriteria_slot_sim` bigint(20) UNSIGNED NOT NULL,
  `pilihan_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_slot_sim`
--

INSERT INTO `kriteria_slot_sim` (`id_kriteria_slot_sim`, `pilihan_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Dual Slim Only', 1, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(2, 'Dual Slim Hybrid', 3, '2022-04-19 07:33:58', '2022-04-19 07:33:58'),
(3, 'Triple Slot', 5, '2022-04-19 07:33:58', '2022-04-20 03:30:18');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_30_081516_kriteria_processor', 1),
(6, '2022_03_30_081536_kriteria_ram', 1),
(7, '2022_03_30_081604_kriteria_penyimpanan', 1),
(8, '2022_03_30_081645_kriteria_slot_sim', 1),
(9, '2022_03_30_081709_kriteria_harga', 1),
(10, '2022_03_30_081743_smartphone', 1),
(11, '2022_03_30_081759_nilai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) UNSIGNED NOT NULL,
  `id_smartphone` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria_processor` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria_ram` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria_penyimpanan` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria_slot_sim` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria_harga` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_smartphone`, `id_kriteria_processor`, `id_kriteria_ram`, `id_kriteria_penyimpanan`, `id_kriteria_slot_sim`, `id_kriteria_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 2, 1, 4, '2022-04-22 19:43:54', '2022-04-22 19:43:54'),
(2, 4, 2, 3, 3, 2, 2, '2022-04-22 19:49:56', '2022-04-22 19:49:56');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smartphone`
--

CREATE TABLE `smartphone` (
  `id_smartphone` bigint(20) UNSIGNED NOT NULL,
  `merek_handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartphone`
--

INSERT INTO `smartphone` (`id_smartphone`, `merek_handphone`, `type_handphone`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Xiaomi', 'Mi 12 Pro', 1, '2022-04-21 06:48:29', '2022-04-21 06:48:29'),
(2, 'Xiaomi', 'Poco X3 GT', 1, '2022-04-21 06:48:29', '2022-04-21 06:48:29'),
(3, 'Xiaomi', 'Poco X4 Pro', 1, '2022-04-21 06:48:29', '2022-04-21 06:48:29'),
(4, 'Xiaomi', 'Poco X3 Pro', 1, '2022-04-21 06:48:29', '2022-04-21 06:48:29'),
(5, 'Xiaomi', 'Poco M4 Pro', 1, '2022-04-21 06:48:29', '2022-04-21 06:48:29'),
(6, 'Xiaomi', 'Redmi Note 3 Pro', 1, '2022-04-21 11:59:50', '2022-04-21 11:59:50'),
(7, 'Lenovo', 'A6000', 1, '2022-04-21 12:00:50', '2022-04-21 12:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id_user`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dimas Aji Setiawan', 'admin', 'dimazaji619@gmail.com', NULL, '$2y$10$6lE.kbCoowK4yWZy5/MEzeUCMVK20e/6VJRHdQ/PoSq869BvXAYUO', NULL, '2022-04-19 07:33:58', '2022-04-19 07:33:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kriteria_harga`
--
ALTER TABLE `kriteria_harga`
  ADD PRIMARY KEY (`id_kriteria_harga`);

--
-- Indexes for table `kriteria_penyimpanan`
--
ALTER TABLE `kriteria_penyimpanan`
  ADD PRIMARY KEY (`id_kriteria_penyimpanan`);

--
-- Indexes for table `kriteria_processor`
--
ALTER TABLE `kriteria_processor`
  ADD PRIMARY KEY (`id_kriteria_processor`);

--
-- Indexes for table `kriteria_ram`
--
ALTER TABLE `kriteria_ram`
  ADD PRIMARY KEY (`id_kriteria_ram`);

--
-- Indexes for table `kriteria_slot_sim`
--
ALTER TABLE `kriteria_slot_sim`
  ADD PRIMARY KEY (`id_kriteria_slot_sim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nilai_id_smartphone_foreign` (`id_smartphone`),
  ADD KEY `nilai_id_kriteria_processor_foreign` (`id_kriteria_processor`),
  ADD KEY `nilai_id_kriteria_ram_foreign` (`id_kriteria_ram`),
  ADD KEY `nilai_id_kriteria_penyimpanan_foreign` (`id_kriteria_penyimpanan`),
  ADD KEY `nilai_id_kriteria_slot_sim_foreign` (`id_kriteria_slot_sim`),
  ADD KEY `nilai_id_kriteria_harga_foreign` (`id_kriteria_harga`);

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
-- Indexes for table `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id_smartphone`),
  ADD KEY `smartphone_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria_harga`
--
ALTER TABLE `kriteria_harga`
  MODIFY `id_kriteria_harga` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria_penyimpanan`
--
ALTER TABLE `kriteria_penyimpanan`
  MODIFY `id_kriteria_penyimpanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria_processor`
--
ALTER TABLE `kriteria_processor`
  MODIFY `id_kriteria_processor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria_ram`
--
ALTER TABLE `kriteria_ram`
  MODIFY `id_kriteria_ram` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria_slot_sim`
--
ALTER TABLE `kriteria_slot_sim`
  MODIFY `id_kriteria_slot_sim` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id_smartphone` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_id_kriteria_harga_foreign` FOREIGN KEY (`id_kriteria_harga`) REFERENCES `kriteria_harga` (`id_kriteria_harga`),
  ADD CONSTRAINT `nilai_id_kriteria_penyimpanan_foreign` FOREIGN KEY (`id_kriteria_penyimpanan`) REFERENCES `kriteria_penyimpanan` (`id_kriteria_penyimpanan`),
  ADD CONSTRAINT `nilai_id_kriteria_processor_foreign` FOREIGN KEY (`id_kriteria_processor`) REFERENCES `kriteria_processor` (`id_kriteria_processor`),
  ADD CONSTRAINT `nilai_id_kriteria_ram_foreign` FOREIGN KEY (`id_kriteria_ram`) REFERENCES `kriteria_ram` (`id_kriteria_ram`),
  ADD CONSTRAINT `nilai_id_kriteria_slot_sim_foreign` FOREIGN KEY (`id_kriteria_slot_sim`) REFERENCES `kriteria_slot_sim` (`id_kriteria_slot_sim`),
  ADD CONSTRAINT `nilai_id_smartphone_foreign` FOREIGN KEY (`id_smartphone`) REFERENCES `smartphone` (`id_smartphone`);

--
-- Constraints for table `smartphone`
--
ALTER TABLE `smartphone`
  ADD CONSTRAINT `smartphone_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
