-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 05:27 PM
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
-- Database: `beuty_concept`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `store_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mumbai', NULL, NULL),
(2, 1, 'New Delhi', NULL, NULL),
(3, 2, 'Nagpur', NULL, NULL),
(4, 2, 'Jaipur', NULL, NULL),
(5, 2, 'Vadodara', NULL, NULL),
(6, 3, 'Kolkata', NULL, NULL),
(7, 3, 'Kochi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Bhautik', 'dpprajapati1905@gmail.com', '2485165161', 'Retail Partnership', 'test', '2022-06-13 07:34:51', '2022-06-13 07:34:51'),
(2, 'Bhautik', 'dpprajapati1905@gmail.com', '2485165161', 'Retail Partnership', 'test', '2022-06-13 07:34:56', '2022-06-13 07:34:56'),
(9, 'Bhautik', 'dpprajapati1905@gmail.com', '2485165161', 'Retail Partnership', 'test', '2022-06-13 07:35:09', '2022-06-13 07:35:09'),
(10, 'Bhautik', 'dpprajapati1905@gmail.com', '2485165161', 'Retail Partnership', 'test', '2022-06-13 07:35:09', '2022-06-13 07:35:09'),
(11, 'Bhautik', 'dpprajapati1905@gmail.com', '2485165161', 'Retail Partnership', 'test', '2022-06-13 07:35:09', '2022-06-13 07:35:09'),
(12, 'Bhautik', 'dpprajapati1905@gmail.com', '2485165161', 'Retail Partnership', 'test', '2022-06-13 07:35:10', '2022-06-13 07:35:10'),
(14, 'Bhautik', 'dpprajapati1905@gmail.com', '4584596585', 'Career Options', 'test', '2022-06-13 07:39:19', '2022-06-13 07:39:19');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `ifram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `store_id`, `city_id`, `ifram`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1e5OORoNW99uuzb2sDJ-S03Bw-oTSyZo&ehbc=2E312F\" width=\"100%\" height=\"600\"></iframe>', NULL, NULL),
(4, 1, 2, '<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1ZcR4hfgYrQyVX-s_QwqXkemsqlj6RXo&ehbc=2E312F\" width=\"100%\" height=\"600\"></iframe>', NULL, NULL),
(5, 2, 3, '<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1GFkhx54BAUOfAD9c8-oh8fbxRZqlux4&ehbc=2E312F\" width=\"100%\" height=\"600\"></iframe>\r\n\r\n', NULL, NULL),
(6, 2, 4, '<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1dfqoS6560wMtpKaQZsK1Yx3m1BsJ1sI&ehbc=2E312F\" width=\"100%\" height=\"600\"></iframe>', NULL, NULL),
(7, 2, 5, '<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=19gtqEMfa2eyJLCAAZLw3j0wU2Rw2Xbs&ehbc=2E312F\" width=\"100%\" height=\"600\"></iframe>\r\n', NULL, NULL),
(8, 3, 6, '<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1CWx5WzneF4PabFAD8rvc1oU1QgjmIlc&ehbc=2E312F\" width=\"100%\" height=\"600\"></iframe>', NULL, NULL),
(9, 3, 7, '\r\n<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1qKwLLty34mamYl-SSy7CuQpgeW3thdU&ehbc=2E312F\" width=\"100%\" height=\"600\"></iframe>', NULL, NULL);

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
(5, '2022_04_15_100256_create_contacts_table', 1),
(6, '2022_05_27_161247_create_storecities_table', 1),
(8, '2022_05_27_161336_create_stores_table', 1),
(9, '2022_05_27_161710_create_storeaddresses_table', 1),
(10, '2022_05_28_100934_create_maps_table', 2),
(11, '2022_05_27_161311_create_cities_table', 3),
(12, '2022_06_01_162005_create_jobs_table', 3);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `storeaddresses`
--

CREATE TABLE `storeaddresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `storename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storeaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storeaddresses`
--

INSERT INTO `storeaddresses` (`id`, `store_id`, `city_id`, `storename`, `storeaddress`, `pincode`, `email`, `no`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'SELECT CITY WALK\r\n\r\n\r\n', 'G – 55, Ground Floor, Select City Walk, New Delhi ', NULL, NULL, NULL, NULL, NULL),
(2, 1, 1, 'PALLADIUM MUMBAI\r\n\r\n', 'F-15A, 1st Floor, Palladium Mall, Lower Parel, Mumbai - 400013', NULL, NULL, NULL, NULL, NULL),
(3, 1, 1, 'JIO WORLD DRIVE\r\n\r\n', 'F-32, 1st Floor, Jio World Drive Mall, Bandra Kurla Complex, Bandra East, Mumbai - 400051', NULL, NULL, NULL, NULL, NULL),
(4, 2, 3, 'VR MALL NAGPUR\r\n\r\n', 'VR Mall unit no. K03 Upper Ground Floor Medical Square Nagpur: 440003', NULL, NULL, NULL, NULL, NULL),
(5, 2, 4, 'WORLD TRADE PARK JAIPUR\r\n', 'World Trade Park, B-Block, 1st Floor, Near to Shoppers Stop, Jawahar Lal Nehru Marg, Jaipur – 302017.', NULL, NULL, NULL, NULL, NULL),
(6, 2, 5, 'INORBIT MALL – VADODARA\r\n', 'Ground Floor Alembic Rd, Opposite to Alembic School, Gorwa, Vadodara, Gujarat-390023 ', NULL, NULL, NULL, NULL, NULL),
(7, 3, 6, 'Beaute Luxe, Kolkata :', 'Domestic Airport\r\nJessore Rd, Dum Dum, Kolkata, West Bengal', NULL, NULL, NULL, NULL, NULL),
(8, 3, 7, 'Beaute Luxe, Kochi:', 'SHOP NO 8, DOMESTIC DEPARTURE TERMINAL, \r\nCOCHIN INTERNATIONAL AIRPORT LIMITED, \r\nALUVA, ERNAKULAM, KERALA - 683111', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storecities`
--

CREATE TABLE `storecities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Maison des parfums', NULL, NULL),
(2, 'Beauty Scentiments', NULL, NULL),
(3, 'Baute Luxe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_store_id_foreign` (`store_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maps_store_id_foreign` (`store_id`),
  ADD KEY `maps_city_id_foreign` (`city_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `storeaddresses`
--
ALTER TABLE `storeaddresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storeaddresses_store_id_foreign` (`store_id`),
  ADD KEY `storeaddresses_city_id_foreign` (`city_id`);

--
-- Indexes for table `storecities`
--
ALTER TABLE `storecities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storeaddresses`
--
ALTER TABLE `storeaddresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `storecities`
--
ALTER TABLE `storecities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `maps_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `maps_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`);

--
-- Constraints for table `storeaddresses`
--
ALTER TABLE `storeaddresses`
  ADD CONSTRAINT `storeaddresses_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `storeaddresses_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
