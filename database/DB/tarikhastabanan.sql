-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 07:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarikhastabanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2022_09_12_150808_create_kategoris_table', 1),
(2, '2022_09_12_150808_create_photos_table', 1),
(3, '2022_09_12_150808_create_sanggars_table', 1),
(4, '2022_09_12_150808_create_tarians_table', 1),
(5, '2022_09_12_150808_create_users_table', 1),
(6, '2022_09_12_150808_create_videos_table', 1),
(7, '2022_09_13_152726_create_settings_table', 2),
(8, '2022_09_14_144424_create_kategoris_table', 0),
(9, '2022_09_14_144424_create_photos_table', 0),
(10, '2022_09_14_144424_create_sanggars_table', 0),
(11, '2022_09_14_144424_create_settings_table', 0),
(12, '2022_09_14_144424_create_tarians_table', 0),
(13, '2022_09_14_144424_create_users_table', 0),
(14, '2022_09_14_144424_create_videos_table', 0),
(15, '2022_09_19_110016_create_kategoris_table', 0),
(16, '2022_09_19_110016_create_photos_table', 0),
(17, '2022_09_19_110016_create_sanggars_table', 0),
(18, '2022_09_19_110016_create_settings_table', 0),
(19, '2022_09_19_110016_create_tarians_table', 0),
(20, '2022_09_19_110016_create_users_table', 0),
(21, '2022_09_19_110016_create_videos_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tarian_id` bigint(20) UNSIGNED DEFAULT NULL,
  `judul_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanggars`
--

CREATE TABLE `sanggars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sanggar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_berdiri` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_kordinat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_kami` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `judul_header`, `tentang_kami`, `created_at`, `updated_at`) VALUES
(1, 'Digitalisasi Budaya Tarian Khas Kabupaten Tabanan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum voluptatibus veniam iure labore corporis dolor repudiandae assumenda laborum fugit consequuntur debitis voluptatum modi voluptas magnam sapiente, error quia? Dolor consectetur quam, assumenda recusandae tenetur quos est repellat quo, sit, blanditiis voluptates? Vitae facere sit veniam deleniti nulla vel perspiciatis. anu', NULL, '2022-09-13 08:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `tarians`
--

CREATE TABLE `tarians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `nama_tari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pencipta_tari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penata_tabuh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_cipta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_tarian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_penari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakaian` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properti` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_user`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Yoga', 'ADMIN20220912031448', '$2y$10$83XnsGWYgdAyFR5HJEDyA.LriAQQqds8tubGeb9hSTXu9USu3.eba', '2022-09-12 07:14:49', '2022-09-12 07:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tarian_id` bigint(20) UNSIGNED NOT NULL,
  `judul_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_tarian_id_foreign` (`tarian_id`);

--
-- Indexes for table `sanggars`
--
ALTER TABLE `sanggars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarians`
--
ALTER TABLE `tarians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarians_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_tarian_id_foreign` (`tarian_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanggars`
--
ALTER TABLE `sanggars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tarians`
--
ALTER TABLE `tarians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
