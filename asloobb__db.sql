-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2023 at 11:51 PM
-- Server version: 5.7.43-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asloobb__db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `comp_id` bigint(20) UNSIGNED NOT NULL,
  `comp_name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_name_arb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_email1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_email2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_phone1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_phone2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_mobile1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_mobile2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_support_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_hotline_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_vission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`comp_id`, `comp_name_en`, `comp_name_arb`, `comp_address`, `comp_email1`, `comp_email2`, `comp_phone1`, `comp_phone2`, `comp_mobile1`, `comp_mobile2`, `comp_support_number`, `comp_hotline_number`, `comp_description`, `comp_mission`, `comp_vission`, `facebook_url`, `linkedin_url`, `twitter_url`, `whatsapp_num`, `created_at`, `updated_at`) VALUES
(1, 'Asloob Bedaa Contracting Company', 'شركة اسلوب الدولية للمقاولات', 'Riyadh, Kingdom of saudi arabia', 'asloob@gmail.com', 'info@asloobb.com', '966506685890', '966 11 483 5783', '01521584922', '01687985344', '165464654', '455653', '<span style=\"background-color: rgb(255, 156, 0);\"><b>Asloob Bedaa Contracting Company</b></span><span style=\"background-color: rgb(239, 239, 239);\">&nbsp; is the one of the most renowned company in<b> <u>Saudi Arabia</u></b>.&nbsp;We</span> are the one of the<span style=\"background-color: rgb(156, 198, 239);\"> best construction</span> company in the <b>world</b>.', 'To be a leading construction company in the global market. To become the customers\' most preferred choice by attaining excellence in quality and timely completed value added projects. To provide the highest level of service in the construction industry while offering superior craftsmanship to every project, we handle. To continually innovate, develop and adopt state-of-the-art technology in methods and materials to enhance productivity and cost effectiveness. To continually improve the competence of our team, and employ diverse, innovative & results-oriented personals, motivated to deliver excellence. To build a safety culture aimed at continually reducing the frequency severity rate towards achieving zero accidents.To identify and mitigate all the environmental impacts arising from our activities, and comply with applicable environmental norms.', 'Today, we are going to recognized as leaders in the constraction industry, for our strength in traditional construction methods and for our creative, fresh approach to cutting edge technologies and delivery systems. Our success is driven not only by our ability to build some of the most advanced facilities for our corporate, institutional and governmental clients - more and more of our clients are turning to us for our distinctive ability to implement innovative project management techniques, as well as our ability to serve as a reliable provider of knowledge-driven solutions for their complex construction projects.To become the leading construction firm, while delivering projects that consistently exceed international standards and provide exceptional customer satisfaction. To continually deliver excellent value & innovative construction solutions to meet our clients\' requirements.Using modern principles and sophisticated technologies, Asloob Bedaa Contracting Company envisions being the primary preference at all times both nationally and globally, for their renowned excellence, quality, performance and reliability in all types of constructions.\r\n', 'https://www.facebook.com/profile.php?id=100088210302174', 'https://www.linkedin.com/company/asloobb_contrating_company/', 'https://twitter.com/?lang=en', '01783548453', '2022-11-29 00:05:17', '2022-11-29 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_subtitle`, `event_description`, `file_url`, `file_type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'New Event Title', 'New Event Sub Title', '<p>New Event Description</p>', 'uploads/events/1750988138169992.jpg', '1', 1, '2022-11-30 23:26:55', NULL),
(4, 'test', 'fsd', '<p>gdfgd</p>', 'uploads/events/1750998630609999.jpg', '1', 1, '2022-12-01 02:13:42', NULL);

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
-- Table structure for table `job_applicant_infos`
--

CREATE TABLE `job_applicant_infos` (
  `job_app_id` bigint(20) UNSIGNED NOT NULL,
  `applicant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_date` date NOT NULL DEFAULT '2022-12-05',
  `experiance_year` int(11) NOT NULL DEFAULT '0',
  `seen_by_id` int(11) NOT NULL DEFAULT '0',
  `review_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applicant_infos`
--

INSERT INTO `job_applicant_infos` (`job_app_id`, `applicant_name`, `job_title`, `email`, `phone`, `cv_path`, `app_date`, `experiance_year`, `seen_by_id`, `review_status`, `created_at`, `updated_at`) VALUES
(1, 'Waliul Hasan', 'Full Stack developer', 'waliul@gmail.com', '01521887522', 'C:\\xampp\\htdocs\\asloobb_website\\public\\uploads\\cv\\1670219397.html', '2022-12-05', 1, 0, 0, NULL, NULL),
(2, 'Hasan Waliul', 'Web Developer', 'hasan@gmail.com', '01546461546', 'C:\\xampp\\htdocs\\asloobb_website\\public\\uploads\\cv\\1670219738.pdf', '2022-12-05', 1, 0, 0, NULL, NULL),
(3, 'Ruhul', 'Intern', 'ruhul@gmail.com', '0154988975', 'C:\\xampp\\htdocs\\asloobb_website\\public\\uploads\\cv\\1670219984.pdf', '2022-12-05', 0, 0, 0, NULL, NULL),
(4, 'Noman', 'Intern', 'noman@gmail.com', '01521889654', 'C:\\xampp\\htdocs\\asloobb_website\\public\\uploads\\cv\\1670236183.pdf', '2022-12-05', 0, 0, 0, NULL, NULL),
(5, 'Fowmin Junaideen', 'Cost Controller', 'fowmin13@gmail.com', '55131201', '/home/gwja5bjpeq3x/asloobb_website/public/\\uploads\\cv/1692600841.pdf', '2022-12-05', 10, 0, 0, NULL, NULL),
(6, 'Ibrartatiq', 'Job Application for Land Surveyor Engineering And Civil Engineer -Site', 'ibrartariq285@gmail.com', '00923435560565', '/home/gwja5bjpeq3x/asloobb_website/public/\\uploads\\cv/1693961821.pdf', '2022-12-05', 7, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_circular_infos`
--

CREATE TABLE `job_circular_infos` (
  `jobCircularId` bigint(20) UNSIGNED NOT NULL,
  `jobtitleId` bigint(20) UNSIGNED NOT NULL,
  `openingDate` date NOT NULL,
  `closingDate` date NOT NULL,
  `noOfVacancy` int(11) NOT NULL,
  `approvedById` int(11) DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_circular_infos`
--

INSERT INTO `job_circular_infos` (`jobCircularId`, `jobtitleId`, `openingDate`, `closingDate`, `noOfVacancy`, `approvedById`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-12-04', '2023-01-02', 2, 1, 1, '2022-12-01 06:43:46', '2022-12-14 17:36:17'),
(2, 1, '2022-12-04', '2023-01-02', 1, 1, 1, '2022-12-01 07:32:12', '2022-12-14 17:36:30'),
(5, 4, '2022-12-29', '2023-01-06', 5, 1, 1, '2022-12-01 10:20:55', '2022-12-14 17:36:53'),
(6, 5, '2022-12-14', '2023-02-28', 4, 1, 1, '2022-12-14 17:38:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_title_infos`
--

CREATE TABLE `job_title_infos` (
  `jobtitleId` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_title_infos`
--

INSERT INTO `job_title_infos` (`jobtitleId`, `title`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Planning Engineer', 'PE-100', 1, NULL, NULL),
(2, 'Cost Controller', 'CC-100', 1, NULL, NULL),
(3, 'Project Manager', 'PM-100', 1, NULL, NULL),
(4, 'Site Engineer', 'SE-100', 1, NULL, NULL),
(5, 'Safety Officer', 'SAE-100', 1, NULL, NULL);

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
(5, '2021_09_16_155619_create_company_profiles_table', 1),
(6, '2022_11_28_151157_create_company_profiles_table', 2),
(7, '2022_11_29_040157_create_company_profiles_table', 3),
(12, '2022_11_30_104124_create_events_table', 4),
(13, '2022_12_01_072119_create_job_title_infos_table', 5),
(14, '2022_12_01_072139_create_job_circular_infos_table', 5),
(15, '2022_12_03_115839_create_project_infos_table', 6),
(16, '2022_12_03_120333_create_project_img_uploads_table', 7),
(17, '2022_12_01_093559_create_job_applicant_infos_table', 8);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_img_uploads`
--

CREATE TABLE `project_img_uploads` (
  `proj_img_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `photo_path` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_by_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_img_uploads`
--

INSERT INTO `project_img_uploads` (`proj_img_id`, `project_id`, `photo_path`, `uploaded_by_id`, `created_at`, `updated_at`) VALUES
(11, 3, 'uploads/project/multi-image/project_image16710240806399cdd0751fe.jpeg', 1, '2022-12-14 20:21:20', NULL),
(12, 3, 'uploads/project/multi-image/project_image16710240806399cdd08ddfe.jpeg', 1, '2022-12-14 20:21:20', NULL),
(13, 3, 'uploads/project/multi-image/project_image16710240806399cdd09bba7.jpeg', 1, '2022-12-14 20:21:20', NULL),
(14, 2, 'uploads/project/multi-image/project_image16710255126399d368297f8.jpeg', 1, '2022-12-14 20:45:12', NULL),
(15, 2, 'uploads/project/multi-image/project_image16710255126399d36841745.jpeg', 1, '2022-12-14 20:45:12', NULL),
(16, 2, 'uploads/project/multi-image/project_image16710255126399d3684bd00.jpeg', 1, '2022-12-14 20:45:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_infos`
--

CREATE TABLE `project_infos` (
  `proj_id` bigint(20) UNSIGNED NOT NULL,
  `proj_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_date` date NOT NULL,
  `proj_Incharge_id` int(11) DEFAULT NULL,
  `proj_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_budget` double(14,2) NOT NULL,
  `proj_deadline` date NOT NULL,
  `proj_main_thumb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `IsCompleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_infos`
--

INSERT INTO `project_infos` (`proj_id`, `proj_name`, `starting_date`, `proj_Incharge_id`, `proj_description`, `address`, `proj_code`, `proj_budget`, `proj_deadline`, `proj_main_thumb`, `status`, `IsCompleted`, `created_at`, `updated_at`) VALUES
(1, 'L &T Hydrocarbon Jafurah', '2022-12-02', NULL, 'This is for a first time project working with Aramco Saudi Arabia.', 'Building No 6883, King Abdul Aziz Road, Al Khobar, Ad Dammam, SA-04, 34428-2492, SA', 'ABCCP0', 1000000.00, '2022-12-31', 'uploads/project/Emp-profile-image-1670072971.jpg', 1, 0, '2022-12-03 07:09:31', '2022-12-14 19:30:24'),
(2, 'DIRIYAH GATE DEVELOPMENT AUTHORIT', '2022-11-16', NULL, 'Together, we can help to transform Diriyah into one of the world’s greatest destinations, a gathering place for the entire world and one which will become a source of even greater pride for all Saudis', '8500 Prince Sattam Ibn Abdulaziz St. - Al Shohda Dist. AD DIR\'IYAH-Riyadh 12572 – 4000, Kingdom of Saudi Arabia', 'ABCCP0', 78000000.00, '2022-12-31', 'uploads/project/Emp-profile-image-1670076499.jpg', 1, 0, '2022-12-03 08:08:19', '2022-12-14 19:27:11'),
(3, 'Avenues Mall, Riyadh', '2022-11-10', NULL, 'Riyadh, the capital of Saudi Arabia is also the country’s largest city. Being one of the fastest growing cities in the world, it is today a bustling metropolis. Apart from being a focal point for trade and travel, Riyadh is one of the richest cities in the Middle East. It is also one of those rare places in the world where tradition and modernity coexist effortlessly.Situated in the King Faizal Street, Riyadh Avenue Mall is a favourite shopping destination of the city dwellers. Lavishly spread across 1 million sqft, the mall has over 95 outlets and two six-storeyed towers. The very first LuLu Hypermarket in Riyadh is also located here. The mall offers an excellent mix of fashion stores, fine dining restaurants, coffee shops and family entertainment centres. It also has a spacious basement car parking facility.', 'Riyadh Avenue Mall\r\nPrince Faisal Bin Turki,\r\nAl Murabba, Riyadh 12612,\r\nSaudi Arabia', 'AVR-100', 10200000.00, '2023-01-05', 'uploads/project/Emp-profile-image-1670131873.jpg', 1, 0, '2022-12-03 23:31:14', '2022-12-14 19:24:34');

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
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_applicant_infos`
--
ALTER TABLE `job_applicant_infos`
  ADD PRIMARY KEY (`job_app_id`);

--
-- Indexes for table `job_circular_infos`
--
ALTER TABLE `job_circular_infos`
  ADD PRIMARY KEY (`jobCircularId`);

--
-- Indexes for table `job_title_infos`
--
ALTER TABLE `job_title_infos`
  ADD PRIMARY KEY (`jobtitleId`);

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
-- Indexes for table `project_img_uploads`
--
ALTER TABLE `project_img_uploads`
  ADD PRIMARY KEY (`proj_img_id`);

--
-- Indexes for table `project_infos`
--
ALTER TABLE `project_infos`
  ADD PRIMARY KEY (`proj_id`);

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
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `comp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applicant_infos`
--
ALTER TABLE `job_applicant_infos`
  MODIFY `job_app_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_circular_infos`
--
ALTER TABLE `job_circular_infos`
  MODIFY `jobCircularId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_title_infos`
--
ALTER TABLE `job_title_infos`
  MODIFY `jobtitleId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_img_uploads`
--
ALTER TABLE `project_img_uploads`
  MODIFY `proj_img_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project_infos`
--
ALTER TABLE `project_infos`
  MODIFY `proj_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
