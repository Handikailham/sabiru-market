-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2025 at 06:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarumarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1741574139),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1741574139;', 1741574139),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1741572135),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1741572135;', 1741572135);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'makanan', '2025-03-06 00:49:53', '2025-03-06 00:49:53'),
(2, 'minuman', '2025-03-06 00:51:16', '2025-03-06 00:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(10, '2025_03_05_075223_create_categories_table', 1),
(11, '2025_03_05_075309_create_products_table', 1),
(12, '2025_03_06_072139_create_contacts_table', 1),
(13, '2025_03_07_092914_add_harga_to_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` bigint UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `harga` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `id_kategori`, `gambar`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Coca Cola', 2, '01JNYWNRHWEN8TZ0J20CZN617D.png', 'Minuman berkarbonasi dengan perisa Cola', '5000.00', '2025-03-06 00:52:56', '2025-03-09 19:03:23'),
(2, 'Chicken Nugget', 1, '01JNYX2B2TB0BSGZ56ZA3GQME5.webp', 'Gurihnya Seperti Bisikan Malaikat, Renyahnya Lebih Setia dari Janji Kampanye, dan Sekali Gigit Bisa Bikin Lupa Diet, Mantan, serta Semua Masalah Hidup yang Gak Penting!', '10000.00', '2025-03-06 00:54:16', '2025-03-09 19:10:15'),
(3, 'Fruit Tea', 2, '01JNYX693DEPR6BD5A4QJV2ERT.png', 'Kesegarannya Lebih Nyata dari Janji Manis, Manisnya Lebih Pas dari Timing Chat Doi Pas Lagi Kangen, dan Seteguknya Bisa Bikin Pikiran Adem, Hati Tenang, serta Hidup Terasa Lebih Ringan Kayak Lagi Liburan Tanpa Beban!', '7000.00', '2025-03-06 01:43:21', '2025-03-09 19:12:24'),
(4, 'Chicken Burger', 1, '01JNWW382203MWDP8QPMJ66QKC.jpg', 'Roti Empuk yang Nggak Keras Kayak Hati Mantan, Ayam Crispy yang Lebih Renyah dari Obrolan Receh di Grup, Plus Saus Gurih yang Nyatu Sempurna Kayak Jodoh yang Akhirnya Ketemu, Bikin Sekali Gigit Langsung Lupa Diet dan Auto Bahagia!', '10000.00', '2025-03-06 01:44:35', '2025-03-09 19:13:37'),
(5, 'Ayam Spicy', 1, '01JNYXBZ1MCTPZYFMDP8ZXT0VD.webp', 'Pedasnya Bikin Lidah Joget, Renyahnya Lebih Garing dari Jawaban ‘Terserah’, dan Sekali Gigit Langsung Keringetan Kayak Ditanya ‘Kapan Nikah?’ di Acara Keluarga, Dijamin Nagih Sampai Lupa Masalah Hidup!', '10000.00', '2025-03-09 00:30:23', '2025-03-09 19:15:30'),
(6, 'Ayam Crispy', 1, '01JNYXGN6T8ZMY8FGY82SQZ90S.webp', 'Kulitnya Segaring Chat Ditinggal Centang Biru, Dagingnya Selembut Hati Pas Gajian, dan Sekali Gigit Bisa Bikin Lupa Segala Drama Hidup, Dijamin Renyahnya Real Tanpa PHP!', '10000.00', '2025-03-09 19:18:04', '2025-03-09 19:18:04'),
(7, 'Snack Wrap', 1, '01JNYXKTKGA88EVVPAYJH69KXY.jpg', 'Tortilla Lembut yang Nggak Sekeras Kenyataan, Ayam Crispy yang Lebih Renyah dari Debat di Grup WA, Plus Saus Creamy yang Nyatu Sempurna Kayak Kamu dan Mimpi Pengen Liburan, Bikin Sekali Gigit Auto Senyum Tanpa Beban!', '15000.00', '2025-03-09 19:19:48', '2025-03-09 19:19:48'),
(8, 'Fish Fillet Burger', 1, '01JNYXPSBJ1M2AEDTAPPTP1KCM.jpg', 'Roti Lembut yang Nggak Sekeras Hidup Tanpa WiFi, Ikan Crispy yang Lebih Gurih dari Gosip Tetangga, Plus Saus Lumer yang Nyatu Sempurna Kayak Lagu Galau dan Hujan, Bikin Sekali Gigit Langsung Auto Nyender Keenakan!', '10000.00', '2025-03-09 19:21:25', '2025-03-09 19:21:25'),
(9, 'Fanta', 2, '01JNYY9AET12DVPS326ET2TAWN.png', 'Sensasi Soda yang Lebih Nendang dari Alarm Subuh, Manisnya Lebih Bikin Happy dari Gajian Mendarat, dan Seteguknya Bisa Bikin Hari Makin Cerah Kayak Dapat Chat ‘Aku Kangen’ dari Orang yang Ditunggu!', '7000.00', '2025-03-09 19:31:32', '2025-03-09 19:31:32'),
(10, 'Sprite', 2, '01JNYYBJDQKWREB5C2ZH9CZJM3.png', '\"Sprite Super Nyegerin – Sensasi Soda yang Lebih Nampol dari Teguran Satpam Mall, Dingin Segernya Bikin Hati Adem Kayak Uang Kembalian Pas, dan Seteguknya Bisa Ngilangin Haus Plus Masalah Hidup dalam Sekejap!', '7000.00', '2025-03-09 19:32:46', '2025-03-09 19:32:46'),
(11, 'Air Mineral', 2, '01JNYYFNXV6B6G979EWV7DFFJP.png', '\"Air Mineral Murni – Kesegarannya Lebih Asli dari Janji Manis, Lebih Menyehatkan dari Scroll Drama di Medsos, dan Seteguknya Bisa Bikin Badan Fresh, Pikiran Jernih, serta Hati Lebih Tenang Kayak Abis Lihat Saldo Masih Aman!', '5000.00', '2025-03-09 19:35:00', '2025-03-09 19:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LzhiNoc4nBIlWiYm35ujYsI6aUrjKAtZHN4sWpF2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkN5bkVDcDZJM0VycWxUZWd1WndrOGFrREJ6T3V4ZDBlRE9aaUN2cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0LzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1741588286),
('PHjteUhDbOMVjnuyVROX427qgAWlIbqp0HLifwzo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiT0N6T28zSHBUalh5Y25YOUhFWDU5cnN1bGw2UU55MTF6bjFxVDN5OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0LzYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJGpiLlRvZUgxc0FtMU8zM3VZZVFDck9KRGl0T1FUL20wSHA1MDVQV2MvcDk2ZDJ3U3pEVUZ5IjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1741574699);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'admin', 'admin@example.com', NULL, '$2y$12$jb.ToeH1sAm1O33uYeQCrOJDitOQT/m0Hp505PWc/p96d2wSzDUFy', 'cOVyPtNUnYKtFOXeFKMVO4v1O4cNgkjCNs6q1TfrN574fEshe2OwBvhK7Of1', '2025-03-06 00:45:53', '2025-03-06 00:45:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
