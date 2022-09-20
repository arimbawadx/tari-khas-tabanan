-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 11:02 AM
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

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `gambar`, `nama_kategori`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'img_13092022022033.jpg', 'Tari Kreasi', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, repellendus. Eveniet repellendus hic sint quibusdam facere nemo, aspernatur vero laudantium porro natus nihil harum totam deleniti, eligendi voluptatum error dicta et sit accusantium aperiam? Sint quam, facilis repudiandae suscipit eaque, veritatis, qui vitae maiores itaque tempore inventore explicabo dicta molestias!', '2022-09-12 07:49:26', '2022-09-13 06:42:03'),
(2, 'img_13092022022135.jpg', 'Tari Tradisional', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, repellendus. Eveniet repellendus hic sint quibusdam facere nemo, aspernatur vero laudantium porro natus nihil harum totam deleniti, eligendi voluptatum error dicta et sit accusantium aperiam? Sint quam, facilis repudiandae suscipit eaque, veritatis, qui vitae maiores itaque tempore inventore explicabo dicta molestias!', '2022-09-12 07:49:37', '2022-09-13 06:41:39'),
(3, 'img_13092022022200.jpg', 'Tari Klasik', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, repellendus. Eveniet repellendus hic sint quibusdam facere nemo, aspernatur vero laudantium porro natus nihil harum totam deleniti, eligendi voluptatum error dicta et sit accusantium aperiam? Sint quam, facilis repudiandae suscipit eaque, veritatis, qui vitae maiores itaque tempore inventore explicabo dicta molestias!', '2022-09-12 07:49:56', '2022-09-13 06:42:14');

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

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `tarian_id`, `judul_foto`, `file_foto`, `sumber`, `created_at`, `updated_at`) VALUES
(1, 1, 'Foto 1 Untuk Tarian A', 'foto_12092022035811.JPG', 'test', '2022-09-12 07:58:11', '2022-09-12 07:58:11'),
(2, 1, 'Foto 2 Untuk Tarian A', 'foto_12092022035839.JPG', 'tests', '2022-09-12 07:58:39', '2022-09-12 07:58:59'),
(5, NULL, 'Banner 1', 'banner_12092022042606.png', 'sdsadfcf', '2022-09-12 08:26:06', '2022-09-12 08:26:06');

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

--
-- Dumping data for table `sanggars`
--

INSERT INTO `sanggars` (`id`, `logo`, `nama_sanggar`, `pemilik`, `no_telp`, `tahun_berdiri`, `alamat`, `titik_kordinat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'logo_12092022065057.jpg', 'Sanggar Tari Putra Ayu', 'I Nyoman Purna', '085847801933', '1993', 'Tabanan', '-8.523029,115.150065', 'sfsf', '2022-09-12 10:50:57', '2022-09-13 05:45:39'),
(3, 'logo_12092022065339.jpg', 'Sanggar Tari Tantra Dewata', 'Ayu Krisna Dewi', '085847801933', '1993', 'Tabanan', '-8.523029,115.150065', 'asdgjia', '2022-09-12 10:53:39', '2022-09-13 05:45:52');

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

--
-- Dumping data for table `tarians`
--

INSERT INTO `tarians` (`id`, `kategori_id`, `nama_tari`, `pencipta_tari`, `penata_tabuh`, `tahun_cipta`, `jenis_tarian`, `jumlah_penari`, `pakaian`, `properti`, `deskripsi`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tarian A', 'Pencipta A', 'Penata A', '2005', 'Tari Kreasi', '2', '<ol>\r\n<li>&nbsp;Kamen : kamen yang digunakanj diusj ijsudcf&nbsp; asij</li>\r\n<li>Angkid : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis optio, inventore et libero quam quisquam quidem, officia tenetur itaque ratione repellendus natus, fugiat corrupti recusandae soluta ipsum corporis dignissimos quas.</li>\r\n<li>Pending : digunakan untuk</li>\r\n<li>Badong : digunakan untuk</li>\r\n</ol>', 'test', 'Deskripsi A', 'Sejarah A', '2022-09-12 07:52:18', '2022-09-19 02:58:42'),
(2, 1, 'Tarian B', 'Pencipta B', 'Penata B', '1981', 'Tari Kreasi', '4', NULL, NULL, 'Desk B', NULL, '2022-09-12 07:53:08', '2022-09-12 07:53:08'),
(3, 2, 'Tarian C', 'Pencipta C', 'Penata C', '2017', 'Tari Tradisional', '5', NULL, NULL, 'Desk C', NULL, '2022-09-12 07:53:46', '2022-09-12 07:53:46'),
(4, 3, 'Tari Bungan Sandat', 'Pencipta D', 'Penatta D', '2017', 'Tari Klasik', '2', 'Pakaian D', NULL, 'Desk D', NULL, '2022-09-12 07:55:31', '2022-09-13 07:38:54');

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
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `tarian_id`, `judul_video`, `file_video`, `sumber`, `created_at`, `updated_at`) VALUES
(1, 1, 'Video untuk Tarian A', 'video_12092022035715.mp4', 'Sumber A', '2022-09-12 07:57:15', '2022-09-12 07:57:15');

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
