-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table clinic.appointments: ~10 rows (approximately)
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT IGNORE INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `date`, `message`, `status`, `userID`, `created_at`, `updated_at`) VALUES
	(1, 'Lewis Hardy', 'nutyko@mailinator.com', '+1 (554) 516-8174', 'khalid', '2003-05-28', 'Magni placeat et do', 'Approved', NULL, '2022-10-27 09:03:35', '2022-10-27 14:11:53'),
	(2, 'Sloane Dalton', 'haxasilod@mailinator.com', '+1 (704) 883-6266', 'khalid', '1994-03-27', 'Dolor sint dolor cu', 'Canceled', NULL, '2022-10-27 09:03:45', '2022-10-27 14:14:35'),
	(8, 'Teegan Herring', 'qipyjad@mailinator.com', '+1 (102) 837-7698', 'khalid', '1990-08-25', 'Totam fugiat lorem q', 'Approved', NULL, '2022-10-27 09:16:10', '2022-10-27 18:39:38'),
	(9, 'Jorden Woodard', 'rozeburive@mailinator.com', '+1 (471) 971-4518', 'livingstone kirui', '1999-05-30', 'Quibusdam nisi rerum', 'Canceled', NULL, '2022-10-27 10:26:16', '2022-10-27 18:39:50'),
	(10, 'Shellie Carver', 'jizyvywome@mailinator.com', '+1 (602) 609-6932', 'livingstone kirui', '2000-02-01', 'Odit et eligendi id', 'In Progress', NULL, '2022-10-27 10:26:25', '2022-10-27 10:26:25'),
	(11, 'Shellie Reed', 'wakotif@mailinator.com', '+1 (644) 744-6284', 'moses kuria', '1991-09-22', NULL, 'Canceled', NULL, '2022-10-27 10:26:33', '2022-10-27 18:40:01'),
	(12, 'Ocean Burris', 'gicareked@mailinator.com', '+1 (434) 225-5703', 'moses kuria', '2014-01-11', 'Sunt voluptatem dol', 'In Progress', NULL, '2022-10-27 10:28:38', '2022-10-27 10:28:38'),
	(15, 'Mona Martinez', 'qeqy@mailinator.com', '+1 (766) 479-3712', 'livingstone kirui', '1988-04-24', 'Quis voluptas non mo', 'Canceled', '1', '2022-10-27 14:19:26', '2022-10-27 14:20:39'),
	(16, 'Maxine Stone', 'rotuqa@mailinator.com', '+1 (386) 594-8016', 'khalid', '1995-05-04', 'Officiis vitae hic q', 'Approved', '1', '2022-10-27 14:19:37', '2022-10-27 14:20:45'),
	(17, 'Levi Woodward', 'cowenex@mailinator.com', '+1 (931) 536-4021', 'moses kuria', '1991-07-13', 'Cumque ipsa aut qui', 'In Progress', '1', '2022-10-27 14:19:47', '2022-10-27 14:19:47');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;

-- Dumping data for table clinic.doctors: ~7 rows (approximately)
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT IGNORE INTO `doctors` (`id`, `name`, `email`, `address`, `phone`, `speciality`, `room`, `created_at`, `updated_at`) VALUES
	(1, 'Doris Sandoval', 'zytar@mailinator.com', 'Necessitatibus duis', '+1 (973) 765-3032', 'General Health', '88', '2022-10-28 09:17:24', '2022-10-28 09:17:24'),
	(2, 'Ferris Norman', 'pyrovy@mailinator.com', 'Mollit incididunt mo', '+1 (308) 476-3922', 'Ophthalmologist', '56', '2022-10-28 09:17:37', '2022-10-28 09:17:37'),
	(3, 'Ezekiel Cervantes', 'jibydyp@mailinator.com', 'Consequatur at repr', '+1 (824) 187-9074', 'pediatrician', '65', '2022-10-28 09:17:51', '2022-10-28 09:17:51'),
	(4, 'Steel Bush', 'gegafawami@mailinator.com', 'Commodi id explicab', '+1 (975) 116-7585', 'Ophthalmologist', '45', '2022-10-28 09:18:01', '2022-10-28 09:18:01'),
	(5, 'Karleigh Perez', 'befa@mailinator.com', 'Consectetur at ipsa', '+1 (823) 415-9636', 'Dental', '423', '2022-10-28 09:18:11', '2022-10-28 09:18:11'),
	(6, 'Azalia Pratt1', 'kodovi@mailinator.com', 'Incididunt officiis32345', '+1 (375) 232-2806', 'leg', '35', '2022-10-28 09:18:24', '2022-10-28 16:41:22'),
	(7, 'Sasha Burks12', 'roriduqow12@mailinator.com', 'Ab laboris amet qua23', '+1 (358) 651-2639', 'Nose', '339', '2022-10-28 09:18:32', '2022-10-31 10:39:21');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;

-- Dumping data for table clinic.employees: ~12 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT IGNORE INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `gender`, `job`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Rina Sanford', 'vuhoxys@mailinator.com', '+1 (407) 769-3263', 'Voluptate voluptas q', '1', 'Officiis cum vel off', '2', '2022-10-31 18:26:38', '2022-10-31 18:26:38'),
	(2, 'Shelley Monroe', 'qehyjerefi@mailinator.com', '+1 (694) 524-1098', 'Sit nesciunt quo s', '2', 'A recusandae Facili', '1', '2022-10-31 18:26:49', '2022-10-31 18:26:49'),
	(3, 'Dean Lambert', 'cikomyv@mailinator.com', '+1 (224) 117-5673', 'Autem itaque deserun', '1', 'Ad optio qui asperi', '2', '2022-10-31 18:27:27', '2022-10-31 18:27:27'),
	(4, 'Cooper Morales', 'lexawih@mailinator.com', '+1 (741) 172-6233', 'Ipsam sunt minima et', '2', 'Maiores lorem odit q', '2', '2022-10-31 18:27:32', '2022-10-31 18:27:32'),
	(5, 'Tate Cardenas', 'tukyhut@mailinator.com', '+1 (212) 747-8986', 'Qui possimus tenetu', '2', 'Saepe repellendus A', '1', '2022-10-31 18:27:44', '2022-10-31 18:27:44'),
	(6, 'Dominic Benjamin', 'tazimaz@mailinator.com', '+1 (919) 596-7268', 'Mollitia non repelle', '2', 'Ut voluptas ut eos', '1', '2022-10-31 18:27:51', '2022-10-31 18:27:51'),
	(7, 'Colette Underwood', 'loposofep@mailinator.com', '+1 (773) 664-5877', 'Cumque eius quam nob', '2', 'Harum suscipit omnis', '2', '2022-10-31 18:28:50', '2022-10-31 18:28:50'),
	(8, 'Raymond Bradford', 'hevyfytes@mailinator.com', '+1 (719) 594-9098', 'Reprehenderit numqu', '1', 'Nisi et ullamco est', '2', '2022-10-31 18:28:55', '2022-10-31 18:28:55'),
	(9, 'Walker Mcneil', 'kyxukome@mailinator.com', '+1 (435) 365-2669', 'Doloremque natus ali', '2', 'Laboriosam ut sint', '2', '2022-10-31 18:29:00', '2022-10-31 18:29:00'),
	(10, 'Geraldine Sellers', 'qidefexu@mailinator.com', '+1 (578) 131-2963', 'Ut iure itaque imped', '2', 'Architecto ea dolore', '2', '2022-10-31 18:29:04', '2022-10-31 18:29:04'),
	(12, 'Daryl Marks', 'hylawocen@mailinator.com', '+1 (347) 714-1048', 'Exercitation culpa', '2', 'Perspiciatis non im', '2', '2022-10-31 19:10:48', '2022-10-31 19:10:48'),
	(13, 'Francis Yang', 'nopalizul@mailinator.com', '+1 (756) 784-2156', 'Quae ipsum fugiat p', '2', 'A rem porro quidem a', '2', '2022-10-31 19:10:56', '2022-10-31 19:10:56');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping data for table clinic.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table clinic.migrations: ~14 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2022_10_18_225912_create_sessions_table', 1),
	(7, '2022_10_21_224448_create_doctors_table', 2),
	(8, '2022_10_22_002418_create_doctors_table', 3),
	(9, '2022_10_22_003422_create_doctors_table', 4),
	(10, '2022_10_22_004625_create_doctors_table', 5),
	(11, '2022_10_27_081537_create_appointments_table', 6),
	(12, '2022_10_28_091617_create_doctors_table', 7),
	(13, '2022_10_31_083001_create_nurses_table', 8),
	(14, '2022_10_31_170642_create_employees_table', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table clinic.nurses: ~6 rows (approximately)
/*!40000 ALTER TABLE `nurses` DISABLE KEYS */;
INSERT IGNORE INTO `nurses` (`id`, `name`, `phone`, `gender`, `address`, `email`, `qualification`, `registered`, `position`, `created_at`, `updated_at`) VALUES
	(1, 'Maite Bray', '+1 (709) 557-4032', '1', 'Sunt nihil nostrum e', 'bimavyveto@mailinator.com', 'Id facere voluptas i', '2', 'Midlevel', '2022-10-31 09:43:36', '2022-10-31 09:43:36'),
	(2, 'Chiquita Sloan', '+1 (979) 316-4601', '2', 'Laborum Ratione in', 'xudif@mailinator.com', 'Enim ut id deserunt', '1', 'Entrylevel', '2022-10-31 09:53:13', '2022-10-31 09:53:13'),
	(3, 'Illiana Price', '+1 (869) 742-5305', '1', 'Et itaque error cons', 'selohibe@mailinator.com', 'Beatae sit ut occae', '2', 'Supervisorlevel', '2022-10-31 09:53:28', '2022-10-31 09:53:28'),
	(4, 'Neville Kirkland', '+1 (931) 326-1239', '1', 'Nihil ullamco conseq', 'caqefexy@mailinator.com', 'Et quis repudiandae', '1', 'Midlevel', '2022-10-31 09:53:50', '2022-10-31 09:53:50'),
	(5, 'Quentin Richards', '+1 (884) 887-2668', '1', 'Porro odit qui ipsum', 'buculul@mailinator.com', 'Quo quibusdam aut au', '1', 'Supervisorlevel', '2022-10-31 09:54:03', '2022-10-31 09:54:03'),
	(6, 'Maite Bray11', '+1 (709) 557-4032', '2', 'Sunt nihil nostrum ethhfgh', 'bimavyveto123@mailinator.com', 'bsc nursing', '1', 'Midlevel', '2022-10-31 10:24:48', '2022-10-31 10:24:48');
/*!40000 ALTER TABLE `nurses` ENABLE KEYS */;

-- Dumping data for table clinic.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table clinic.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table clinic.sessions: ~6 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT IGNORE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('CVGt4dlwLxbkTP95JPKfoS1VcdczByLlKliKEfhf', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ0p4dTlvVVVqcjhpdWxDZ0VTQlJPWlp1aUNhbzVYYUgzdktLVXg4VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9udXJzZV9saXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1667328535),
	('EnhsgOJi1JBJY1eBbKeq6XtNZ1n9OWySZctgKs1B', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTHpzUUxYbU1BVHRXZUdQQ2lFT1dVR1o3bzFSOFBKQ3FsNENWZUhDTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1667316309),
	('Ltj6RHo02dQ2AfqD7LtU0sKqFoL37DJJWPqeGxMz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEU5VWZzR0ZnYVpYU3RZeHZ4UmhXcWc0UWFDc3ZqUVI0b01XNjVMRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1667301883),
	('Oxd94M41N1lH31zDf7jhnQnnt8yfeYA0WpGDOAR8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHRmQVNlNGVUR1p0Q0xmZTg0NHoxS3RFMDlCZVZaRDl6b3g5Uk1uQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1667244990),
	('pvMDvqhvY9u6PKO7x30igqHIA1PLi0eGC13dRyum', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1ZqQjlsYTJTUWtuWWY0OUQ0N3RpSTdyWjhUa3liRldBRm90NWZ5eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1667300881),
	('X8KrVLzrTFsS2DP8vCqAZEe7W850iu90j30u7PoH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzhsNTlFVVpxMFEycllmenV0TkZmOG91cXd0aGh3djl5UkdhcTlQNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1667300916);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping data for table clinic.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `phone`, `address`, `userType`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'user', 'user@test.com', NULL, NULL, '0', NULL, '$2y$10$9sb3r4OnxBLEKu7v3c.NFO6Oup.skRwF6Vv/fC6F79iZCZkO9irnm', NULL, NULL, NULL, 'jihGxO9P5KmAhLo8LpEBvWMZ5wzo0eLLYcTjisfh3ujDQLBxEPruRuGN5v9X', NULL, NULL, '2022-10-18 23:29:56', '2022-10-18 23:29:56'),
	(2, 'admin', 'admintest@test.com', NULL, NULL, '1', NULL, '$2y$10$tSXPS9mDnTut2g94zCTof.Zxlis/9n1g204gXfGr2ceR4aJrpD0Ui', NULL, NULL, NULL, 'U2APO1wubGzz6EFGPLI2PZLO2Sp5x5V4LnoYuboUX6y6kce6eK2YzjheW8dC', NULL, NULL, '2022-10-18 23:30:47', '2022-10-18 23:30:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
