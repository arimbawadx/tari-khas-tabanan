-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:00 PM
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
(5, 'img_20102022074452.jpg', 'Tari Tradisional', 'Tari tradisional adalah sebuah tata cara menari atau menyelenggarakan tarian yang dilakukan oleh sebuah komunitas etnik secara turun temurun dari satu generasi ke generasi selanjutnya.  tari tradisional adalah jenis tarian yang merupakan wujud sebuah budaya di suatu daerah. tari tradisional merupakan tarian yang berkembang dan dilestarikan secara turun-temurun di suatu daerah tertentu. Tarian ini biasanya memiliki berbagai ciri khas yang menonjolkan falsafah, budaya dan kearifan lokal setempat di mana tarian tersebut berkembang.', '2022-10-20 00:44:52', '2022-10-20 00:44:52'),
(6, 'img_20102022082659.jpg', 'Tari Wali', 'Tari tradisional adalah sebuah tata cara menari atau menyelenggarakan tarian yang dilakukan oleh sebuah komunitas etnik secara turun temurun dari satu generasi ke generasi selanjutnya.  tari tradisional adalah jenis tarian yang merupakan wujud sebuah budaya di suatu daerah. tari tradisional merupakan tarian yang berkembang dan dilestarikan secara turun-temurun di suatu daerah tertentu. Tarian ini biasanya memiliki berbagai ciri khas yang menonjolkan falsafah, budaya dan kearifan lokal setempat di mana tarian tersebut berkembang.', '2022-10-20 01:26:59', '2022-10-20 01:26:59'),
(7, 'img_20102022082731.jpg', 'Tari Kreasi', 'Tari ini merupakan pelebaran sayap dari tari tradisional yang gerakannya dipadukan dengan gerakan baru dari jenis tarian lain. tari kreasi adalah suatu gerakan tarian yang terlepas dari kaidah – kaidah yang sudah ada serta temanya dibebaskan sehingga menjadi tarian yang diciptakan sesuai dengan pengalaman dan keinginan yang membuat. Pada umumnya, tari kreasi baru ini dibedakan menjadi dua golongan, yaitu:\r\n1)	Tari kreasi baru berpola tradisi \r\nTari kreasi baru ini sangat berpedoman pada kaidah tari, baik itu kaidah musik, tata rias, koreografi, maupun teknik pementasannya.\r\n2)	Tari kreasi baru berpola non tradisi \r\nJenis tari kreasi baru ini tidak terikat dengan kaidah tari seperti halnya tari berpola tradisi. Namun, bukan berarti jenis tari ini tidak menggunakan pola tradisi sama sekali. Melainkan, penggunaan kaidah tari akan disesuaikan dengan konsep gagasan tari yang akan ditampilkan.', '2022-10-20 01:27:31', '2022-10-20 01:27:31');

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
(7, NULL, 'Pementasan Tari Legong Andir', 'banner_20102022080431.jpg', 'Sanggar Tari Tantra Dewata', '2022-10-20 01:04:31', '2022-10-20 01:04:31'),
(9, 5, 'Tari Kidang Kencana', 'foto_20102022082026.jpg', 'Ngetis Picture', '2022-10-20 01:20:26', '2022-10-20 01:20:26'),
(10, NULL, 'Lomba Tari', 'banner_20102022082247.jpeg', 'Info Seni', '2022-10-20 01:22:47', '2022-10-20 01:22:47'),
(11, 6, 'Tari Bungan Sandat Serasi', 'foto_20102022090106.jpeg', 'Ngetis Picture', '2022-10-20 02:01:06', '2022-10-20 02:01:06'),
(12, 6, 'Tari Bungan Sandat Serasi', 'foto_20102022090152.jpeg', 'Ngetis Picture', '2022-10-20 02:01:52', '2022-10-20 02:01:52'),
(13, 7, 'Tari Legong Andir', 'foto_20102022090622.jpeg', 'Sanggar Tari Tantra Dewata', '2022-10-20 02:06:22', '2022-10-20 02:06:22'),
(14, 7, 'Tari Legong Andir', 'foto_20102022090659.jpeg', 'Sanggar Tari Tantra Dewata', '2022-10-20 02:06:59', '2022-10-20 02:06:59'),
(15, 6, 'Tari Bungan Sandat', 'foto_20102022092847.jpg', 'Ngetis Picture', '2022-10-20 02:28:47', '2022-10-20 02:28:47'),
(16, 6, 'Tari Bungan Sandat Serasi', 'foto_24102022101053.jpg', 'Ngetis Picture', '2022-10-24 15:10:53', '2022-10-24 15:10:53');

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
(8, 'logo_20102022074311.png', 'Sanggar Tari Ayu', 'Ayu Trisna Dewi Prihatini S.Pd', '08123945364', '1985', 'Gg. IV, Delod Peken, Kec. Tabanan, Kabupaten Tabanan, Bali 82121', '-8.539767546804661,115.13752162554323', 'Sanggar tari ayu merupakan salah satu sanggar tari yang terdapat di Kabupaten Tabanan dimana sanggar ini berdiri sejak tahun 1985. Sanggar tari ini didirikan oleh Ayu Trisna Dewi Prihatini S.Pd sekaligus menjadi pembina pada sanggar tari tersebut. Sanggar Tari Ayu. Dengan bertambahnya peserta pada tahun 1988 di bangun tempat latihan dan dikelola secara profesional bertempat di jalan Diponegoro no 23 Tabanan dan tahun 2017 pindah ke Jln Debes Gang IV Tabanan yang masih beroprasi sampai sekarang.  Visi dari sanggar tari ayu yaitu Melestarikan budaya Bali melalui belajar menari tari Bali sejak dini.   Misi Sanggar tari ayu yaitu : 1.	Mengadakan latihan rutin 2.	Melaksanakan pementasan 3.	Mengikuti lomba-lomba 4.	Menanamkan nilai social dan spiritual melalui ngayah di pura 5.	Menjalin komunikasi dengan orang tua peserta didik Dengan Tujuan yang dimiliki untuk Membangkitkan minat ,bakat anak – anak  terhadap tari Bali mulai dari usia dini serta Melestarikan Budaya Bali khususnya tari Bali.', '2022-10-20 00:43:11', '2022-10-20 00:43:11'),
(9, 'logo_20102022082541.jpg', 'Sanggar Tari Putra Ayu', 'Nyoman Purna', '081337657997', '2009', 'Jl. Raya Alas Kedaton, Kukuh, Kec. Marga, Kabupaten Tabanan, Bali 82181.', '-8.522747814295114, 115.152307340887', 'Sejarah awal berdirinya sanggar ini dilatarbelakangi karena kegemaran dan kecintaan beliau terhadap seni tari.sanggar ini bergerak di bidang seni yang bertujuan untuk menyalurkan aspirasi, memberikan pembinaan, pelatihan-pelatihan, kursus-kursus terkait kesenian dan budaya bali khususnya seni tari seperti tarian tradisional bali maupun tarian kontemporer atau modern, seni vocal, seni music seperti seni music tradisional bali (tetabuhan) maupun seni music modern atau kontemporer. Sejak awal berdiri, sanggar Putra Ayu telah membina sekitar 300 an anak didik dan sekarang memiliki anak didik yang aktif sekitar 200 an orang, sebagai sanggar yang menawarkan wadah untuk belajar menari, sanggar ini juga menyediakan sewa pakaian tari bali. Sanggar Putra Ayu telah memiliki banyak prestasi di tingkat yang bergengsi, dalam berlomba tak jarang anak-anak sanggar Putra Ayu selalu menjadi juara. Saat ini sanggar putra ayu memiliki 4 orang tenaga pengajar yang sangat berkompeten di bidang tari, sehingga banyak menarik minat orang tua untuk mendaftarkan anak-anaknya di sanggar ini. I Nyoman Purna menuturkan bahwa anak-anak yang belajar di sanggar ini tidak hanya berasal dari Ds. Kukuh tetapi banyak yang berasal dari luar Desa meskipun jaraknya lumayan jauh, Sanggar Putra Ayu memiliki Visi yaitu menciptakan generasi muda yang berbudaya, mandiri, kreatif, motivatif dan memiliki keahlian di bidang seni serta membentuk pribadi yang lebih percaya diri untuk menjaga dan melestarikan seni budaya bali.', '2022-10-20 01:25:41', '2022-10-20 01:25:41');

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
(1, 'Digitalisasi Budaya Tarian Khas Kabupaten Tabanan', 'Budaya Tari Bali pada umumnya merupakan bagian dari aspek kehidupan masyarakat yang sudah ada serta telah diwariskan sejak zaman dahulu dan sampai saat ini masih melekat dengan masyarakat pada kehidupan sehari-hari. Seni Tari berkembang sebagai sarana pengabdian sosial baik itu dalam kepentingan upacara keagamaan maupun sebagai kegiatan sosial yang mengarah pada fungsi sebagai media komunikasi makna budaya dan sarana hiburan pada lingkungan masyarakat. Di Provinsi Bali persebaran Seni Tari memiliki ciri khas dan keunikan pada masing-masing daerah Kabupaten yang menjadi daya tarik tersendiri, salah satunya yaitu Kabupaten Tabanan. Keindahan dan keunikan dari unsur seni budaya ini juga sangat mempengaruhi perkembangan dan kemajuan di bidang pariwisata, dimana dapat menarik wisatawan asing dalam mengenal budaya Bali. Kabupaten Tabanan merupakan salah satu daerah yang dikenal dengan budaya seninya yang memiliki tarian-tarian khas dengan para seniman pencipta tarian.', NULL, '2022-10-20 02:15:04');

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
(5, 5, 'Tari Kidang Kencana', 'I Gusti Agung Ngurah Suparta', 'I Wayan Beratha', '1983', 'Tari Tradisional', '5 Orang', '<p><!-- [if !supportLists]--><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">1. Celana : Celana dengan bahan kain digunakan untuk menutupi area kaki sampai bawah</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">2. Baju : Baju dengan bahan kain digunakan untuk menutupi area badan</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">3. Gelang : Gelang yang digunakan pada kedua tangan dan kaki sebagai aksesoris</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">4. Ampok-ampok : Ampok - Ampok berbahan kulit digunakan pada bagian pinggang seperti sabuk </span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">5. Tutup Dada : Tutup dada berupa kain yang digunakan untuk menutupi area dada </span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">6. Badong : Badong dengan bahan kulit yang digunakan dari bahu ke dada yang befungsi untuk menutupi badan.</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">7. </span><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\">Sumping : Sumping digunakan di telinga sebagai aksesoris</span></p>\r\n<p><span style=\"font-size: 12pt; line-height: 150%; font-family: \'Times New Roman\', \'serif\';\"><span style=\"mso-list: Ignore;\"><span style=\"font-size: 12pt; line-height: 115%; font-family: \'Times New Roman\', \'serif\';\">8. Kalung Kace : Kalung Kace berupa aksesoris yang digunakan pada bagian leher.</span></span></span></p>', 'Tarian Kidang Kencana tidak menggunakan Property', 'Tari Kidang Kencana merupakan tarian yang \"merekam\" keceriaan sekawanan kijang di keluasan belantara raya. Saat purnama bersinar penuh,satwa bertanduk indah itu menumpahkan kegembiraannya. Berlari, melompat dan saling bercengkerama sambil bermandi cahaya bulan. Namun, keceriaan mereka mendadak berubah gaduh lantaran ada seekor kijang bertingkah yang berujung pada kesalah pahaman. Teman-temannya sepakat untuk mencelakainya. Beruntung, kesalah pahaman itu cepat teratasi dan mereka kembali rukun. Pesona satwa kijang itu sukses ditransformasikan ke dalam\"bahasa\" gerak yang ritmis, dinamis dan estetis oleh koreografer I Gusti Ngurah Supartha yang dipermanis dengan iringan gamelan gong kebyar yang ditata artistik oleh I Wayan Beratha dan sentuhan gegerongan oleh IGB Arsaja. Tari Kidang Kencana merupakan tari bertema binatang kijang yang berkarakter lincah dan gembira. Unsur tari Kidang di antaranya ada gerak tari, busana tari, tata rias tari, dan iringan tari. Baik gerak, busana, tata rias, dan iringan ditata sesuai dengan tema dan karakter tari, sehingga kelihatan bagus dan menarik.', NULL, '2022-10-20 00:52:07', '2022-10-21 02:49:08'),
(6, 7, 'Tari Bungan Sandat Serasi', 'Ni Nyoman Sri Suryati S.Sn', 'I Wayan Muder S.Sn', '2012', 'Tari Kreasi', '7', '<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">1. Gelungan : Gelungan berbentuk mengerucut dihiasi dengan bungan sandat palsu dan rambut terurai berfungsi sebagai penutup kepala yang ditempatkan di kepala&nbsp;</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">2. Tapih : Tapih berbentuk kain prade warna kuning dengan fungsi sebagai alas kamen agar terlihat lebih rapi yang digunakan dengan cara dililitkan di sepanjang badan kebawah</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">3. Kamen : Kamen berupa kain prade warna hijau seperti warna bungan sandat yang berfungsi sebagai penutup badan bagian bawah.</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">4. Rempel :<span style=\"mso-spacerun: yes;\">&nbsp; </span>Rempel berupa kain variasi lelancingan warna putih, kuning, dan pink berfungsi sebagai pemanis bentuk pakaian sehingga mirip seperti putri-putri raja yang digunakan sepanjang pinggang dan pinggul.</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">5. Angkin : Angkin berupa kain prade sebagai penutup badan yang berfungsi untuk menutup badan agar terlihat lekuk dari tubuh penari yang digunakan di badan</span></p>\r\n<p><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">6. Selendang : Selendang berupa kain prade warna hijau dibentuk seperti bunga didada yang berfungsi sebagai penutup dada dan memberikan aksen manis seperti kembang bunga digunakan dengan dililitkan dibagian dada</span><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\"><span style=\"mso-list: Ignore;\"><span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;</span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">Baju : Baju dengan bahan kaos berwarna kuning dipakai bentuk untuk menutupi dada dan punggung yang berfungsi untuk menutupi dada dan punggung agar terlihat rapi yang digunakan di area badan atas.</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">7. Badong : Badong dengan bahan kulit digunakan di dada yang berfungsi sebagai penutup leher agar tampak harmonis.</span></p>\r\n<p><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">8. Pending : Pending dengan bahan kulit yang berfungsi untuk mempertegas aksen lekukan tubuh penari yang digunakan pada pinggang</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-GB; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">9. Subeng : Subeng berbahan perak dengan memiliki fungsi untuk mempermanis telinga</span></p>', 'Sampian Cane yang terbuat dari kayu dengan hiasan ental dan bunga-bunga yang berfungsi sebagai ungkapan rasa syukur atas karunia Tuhan terhadap bungan sandat terkait keagungan, keharuman, dan keindahan. Sampian Cane ini dibawa ditangan penari saat menari.', 'Bungan sandat adalah Sebuah Pohon Bunga yang paling dekat hubungannya dengan manusia. Kebaikan dari Bunga Sandat pada intinya menyebrkan bau yang sangat harum sehingga idola dari setiap orang.\r\nTerkait dengan aktivitas masyarakat Hindu di Bali khususnya di Kabupaten Tabanan Bunga Sandat erat hubungannya dengan Upacara Agama. Secara Filosofi yang dilandasi dengan konsep Tri Hita Karana Bunga Sandat bermakna dan berfungsi sebagai sarana atau gambaran dalam kehidupan masyarakat.\r\n1. Parahyangan : Bunga Sandat sering di gunakan untuk persembahan kepada Ida Sang Hyang Widhi Wasa dan sering dipakai untuk merias Pratima (Simbol Keagungan Bungan Sandat)\r\n2. Pawongan : Bunga Sandat sering digunakan dalam Upacara manusia Yadnya (metatah, pawiwahan) dipakai untuk rias Agung (Simbol Keharuman Bunga Sandat sebagai cerminan berprilaku yang baik sesame manusia)\r\n3. Palemahan : Bunga Sandat sering ditanam di perkarangan rumah atau sekitarnya (Simbol Keindahan Bunga Sandat yang merupakan perwujudan keharmonisan dengan lingkungan sehingga menjadi sangat serasi.', NULL, '2022-10-20 01:38:14', '2022-10-20 01:38:14'),
(7, 6, 'Tari Legong Andir', 'Anonim', 'Anonim', '1985', 'Tari Wali', '2', '<h1 class=\"MsoListParagraphCxSpFirst\" style=\"margin-left: 0cm; mso-add-space: auto; text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">Kostum Condong</span></h1>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">1. Kamen : untuk menutupi area kaki kebawah penari.</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">2. Baju lengan panjang : digunakan untuk menutupi badan dan tangan dengan warna-warna yang mencolok seperti warna pink, merah dan hijau.</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">3. Sabuk prada : digunakan pada area badan untuk menutupi atas bawah badan</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">4. Oncer slendang&nbsp;<span style=\"mso-spacerun: yes;\">&nbsp;</span>: selendang yang digunakan pada pinggang kanan dan kiri&nbsp;</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">5. Ampok ampok : digunakan pada diperut seperti sabuk</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">6. Lamak :&nbsp;</span><span style=\"font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">sejenis kain selendang perada panjang sampai ke bawah, letaknya di bawah badong</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">7. Tutup Dada : kain yang digunakan untuk menutupi area dada</span> <span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">dengan tujuan hiasan sekaligus memperkuat pakaian yang dikenakan oleh para penarinya.</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">8. Badong beludru : perhiasan yang terbuat dari beludru dan dikenakan melingkar di leher sehingga menutupi bahu sang penari</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">9. Gelang kana : digunakan pada kedua lengan atas dan bawah&nbsp;</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">10. Gelungan yang disakralkan : dipakai di area kepala </span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">11. Subeng : aksesoris yang digunakan di telinga</span></p>\r\n<h1 class=\"MsoNormal\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">Kostum Legong :</span></h1>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">1. Kamen : untuk menutupi area kaki kebawah penari.</span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">2. Baju lengan panjang : digunakan untuk menutupi badan dan tangan dengan warna-warna yang mencolok seperti warna pink, merah dan hijau.</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">3. Sabuk prada : digunakan pada area badan untuk menutupi atas bawah badan</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">4. Oncer slendang : selendang yang digunakan pada pinggang kanan dan kiri </span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">5. Ampok ampok: digunakan pada diperut seperti sabuk</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">6. Simping : digunakan di lengan </span></p>\r\n<p><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">7. Lamak :&nbsp;</span><span style=\"font-size: 12.0pt; mso-bidi-font-size: 11.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">sejenis kain selendang perada panjang sampai ke bawah, letaknya di bawah badong</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">8. Tutup Dada : kain yang digunakan untuk menutupi area dada</span> <span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">dengan tujuan hiasan sekaligus memperkuat pakaian yang dikenakan oleh para penarinya.</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">9. Badong beludru : perhiasan yang terbuat dari beludru dan dikenakan melingkar di leher sehingga menutupi bahu sang penari</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">10. Gelang kana : digunakan pada kedua lengan atas dan bawah</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',\'serif\';\">11. Gelungan yang disakralkan : hiasan seperti mahkota yang dipakai di area kepala atau disebut gelungan yang dimana gelungan ini telah disakralkan atau disucikan.</span></p>\r\n<p><span style=\"font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-GB; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">12. Subeng : aksesoris yang digunakan di telinga</span></p>', 'Pada tarian ini penari menggunakan keris yang sakral atau keris yang disucikan serta menggunakan kipas/kepet sebagai property penari', 'Tari andir di Desa Tista adalah sebuah bentuk tari sejenis legong keraton yang oleh masyarakat Tista disebut dengan andir. Tari ini difungsikan sebagai seni wali dan bebali yang dalam pementasannya selalu melibatkan rangda sungsungan masyarakat, baik ditampilkan sebagai bagian dari cerita maupun hanya sebagai “saksi” pementasannya merupakan subjek yang dipandang sakral oleh masyarakat Desa Tista Kerambitan. Sakral diartikan keramat, suci, kerohanian. Penggunaan peralatan (benda keramat) berupa pelibatan rangda sungsungan (Ratu Ayu Lingsir dan Ratu Ayu Anom), yang dipercaya memiliki kekuatan magis yang dapat melindungi masyarakat Tista setiap kegiatan yang dilakukan selalu melewati suatu proses upacara dengan berbagai upakara yang melengkapinya, pelakunya adalah orang-orang pilihan (dipilih anak-anak gadis yang belum mengalami masa akil balik dan dipandang sebagai penari yang kesenengin yang dipilih dan direstui oleh Tuhan. Tempat pementasannya adalah tempat-tempat suci yang terkait dengan upacara yadnya di pura-pura setempat dan dilakukan tiap 210 hari sekali (tiap enam bulan Bali atau enam kali tiga puluh lima hari. Waktu pementasannya merupakan waktu yang dianggap kramat (sacred time) dan terkait dengan upacara yadnya dan masyarakat pendukung (yang meyakini bahwa tari andir merupakan tari sakral yang kesakralannya bersumber dari rangda sungsungan.', NULL, '2022-10-20 01:59:36', '2022-10-20 01:59:36');

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
(1, 'Yoga', 'ADMIN20220912031448', '$2y$10$83XnsGWYgdAyFR5HJEDyA.LriAQQqds8tubGeb9hSTXu9USu3.eba', '2022-09-12 07:14:49', '2022-09-12 07:14:49'),
(3, 'Dwi Lestari', 'ADMIN20221020080548', '$2y$10$mu9me/i6uuI8TpuBskYKyumbGjSgECpQu8af0JrhvSpR.KLIzWoe.', '2022-10-20 01:05:48', '2022-10-20 01:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tarian_id` bigint(20) UNSIGNED NOT NULL,
  `judul_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_youtube` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sanggars`
--
ALTER TABLE `sanggars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tarians`
--
ALTER TABLE `tarians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
