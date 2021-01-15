-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2021 at 12:13 PM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medafk_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertises`
--

INSERT INTO `expertises` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Hart- en longziekten', '2021-01-08 00:19:16', '2021-01-15 08:40:20', '<p>U heeft hart- en longziekten geselecteerd. Hier vind u verklarende woorden, ziektebeelden. Tevens kunt u deze afzonderlijk of als gecombineerd geheel op eenvoudige wijze kopieren en gebruiken in uw rapportages.</p>'),
(8, 'test', '2021-01-15 04:44:49', '2021-01-15 04:44:49', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_24_101451_create_expertises_table', 1),
(5, '2020_12_25_094449_create_shorts_table', 1),
(6, '2020_12_28_065804_add_multiple_column_to_expertises', 1),
(7, '2021_01_05_122712_add_lname_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('patidarmohan59@gmail.com', '$2y$10$h0RDbpdvZdEGcF1hKh0gv.6QMPP8MTLlmRIW5/BvPA6SOwB/ZxcB.', '2021-01-12 09:00:36'),
('balmukund1998@gmail.com', '$2y$10$Ej9gJBNfqwf13.8MnoJnrugUaluLkCvzRSB5PrSBNzSA1go4Bp/Ri', '2021-01-12 09:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `shorts`
--

CREATE TABLE `shorts` (
  `id` int(10) UNSIGNED NOT NULL,
  `expertise_id` int(10) UNSIGNED NOT NULL,
  `short_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shorts`
--

INSERT INTO `shorts` (`id`, `expertise_id`, `short_code`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '4F', 'Tetralogie van Fallot', 'Aangeboren hartafwijking', '2021-01-08 06:32:46', '2021-01-08 23:26:39'),
(7, 1, '6 MWT', '6 minutes walk test', '6 minuten loop test. Afstand die patiënten in 6 minuten wandelen maximaal kunnen afleggen.', '2021-01-08 06:33:20', '2021-01-08 23:42:24'),
(8, 1, 'AAI/AAIR', 'Nomenclatuur voor het type en/of de instelling van een pace-maker', 'Bij een pacemaker met instelling AAI of AAIR vindt pacing en sensing alleen in de rechter boezem plaats', '2021-01-08 06:33:45', '2021-01-14 20:42:35'),
(14, 1, 'ABG', 'Arteriële bloedgassen', 'Meting van zuurstof en koolzuurgasconcentratie uit slagaderlijk bloed', '2021-01-14 20:43:52', '2021-01-14 20:43:52'),
(15, 1, 'Abrams bioptie', 'biopt (hapje) uit pleura parietalis', 'Procedure waarbij uitwendig onder echogeleiding en locale verdoving een biopt (hapje) wordt genomen van het buitenste longvlies (pleura parietalis)', '2021-01-14 20:44:52', '2021-01-14 20:44:52'),
(16, 1, 'ACC', 'American College of Cardiology', 'American College of Cardiology', '2021-01-14 20:45:56', '2021-01-14 20:45:56'),
(17, 1, 'ACS', 'Acuut Coronair Syndroom', 'Ziektebeeld dat zowel het acute myocardin-farct met en zonder ST elevatie, als instabiele angina pectoris (IAP) omvat', '2021-01-14 20:46:24', '2021-01-14 20:46:24'),
(18, 1, 'MIP (MEP) SNIP', 'Ademkracht', 'Maximum inspiratory /expiratory pressure: maximale druk bij inademing en uitademing. SNIP: sniff nasal inspiratory pressure: kortdurende krachtige inademing met de meting aan de neus. Meting waarbij de ademkracht (grotendeels bepaald door het middenrif) met een simpele me-ting wordt bepaald.', '2021-01-14 20:47:40', '2021-01-14 20:47:40'),
(19, 1, 'AED', 'Automatische externe defibrillator', 'Draagbaar toestel dat wordt gebruikt bij een persoon met een circulatiestilstand, waardoor op een geautomatiseerde manier een elektrische shock wordt toegediend, indien VF of VT wordt geregistreerd.', '2021-01-14 20:49:24', '2021-01-14 20:49:24'),
(20, 1, 'AF', 'Atriumfibrilleren', 'Atriumfibrilleren', '2021-01-14 20:49:53', '2021-01-14 20:49:53'),
(22, 8, 'HCB', 'hdhhttdeh', 'as de', '2021-01-15 06:39:28', '2021-01-15 06:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Medische Afkortingen', '2021-01-08 05:00:40', '2021-01-14 19:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lname`) VALUES
(1, 'Patrick', 'office@minebytes.com', NULL, '$2y$10$hW1Snen.7i97uPGmUdmj3OlcKzQPffEYjq/nRRaOMLWQK2AGhIxk.', NULL, '2021-01-06 06:11:15', '2021-01-14 19:13:26', 'Hira'),
(7, 'Ram', 'balmukund1998@gmail.com', NULL, '$2y$10$RN6Dva0/7kHzh4UbIjr6L.Vnu.fgZCoveiQYEUvIGpC2Rv5/OcZDq', NULL, '2021-01-12 09:01:30', '2021-01-12 09:01:30', 'Patidar'),
(6, 'Ram', 'patidarmohan59@gmail.com', NULL, '$2y$10$QmilsR2Nh/0Z5Px5pJe7v.s6sXcQ99AHvJdM5FtI5oBJgvoYlG4ym', NULL, '2021-01-08 05:35:53', '2021-01-08 05:38:51', 'Patidar'),
(4, 'Ram', 'krikironline786@gmail.com', NULL, '$2y$10$ez8hIm2rAq/q9sjAU5u3ven7wy.TSh30n36u1ZRSs2ES.JYKKM17a', NULL, '2021-01-07 10:25:07', '2021-01-07 11:27:42', 'Patidar'),
(5, 'Monu', 'krikironline1234@gmail.com', NULL, '$2y$10$Kdazk4YDsQ6KFFvt6ynkB.yD4rM.Mi6D5EbhlRYYUJoQnoMQVxKgK', NULL, '2021-01-08 04:28:12', '2021-01-08 05:20:33', 'Patidar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `shorts`
--
ALTER TABLE `shorts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shorts_expertise_id_foreign` (`expertise_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
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
-- AUTO_INCREMENT for table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shorts`
--
ALTER TABLE `shorts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
