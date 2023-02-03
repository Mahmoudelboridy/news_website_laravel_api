-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 01:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_website`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_02_03_112141_create_news', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `category`, `created_at`, `updated_at`) VALUES
(4, 'صلاح افضل لاعب فى تاريخ مصر', 'صلاح هو افضل لاعب فى تاريخ مصر وهو من اهم هدافين فى تاريخ الليفربول', '/storage/pics/1675426447.jfif', 'sport', '2023-02-03 10:14:07', '2023-02-03 10:14:07'),
(6, 'رونالدو لاعب عظيم', 'انتقال رونالدو لنادى النصر السعودى', '/storage/pics/1675427267.jpg', 'sport', '2023-02-03 10:27:47', '2023-02-03 10:27:47'),
(8, 'Tech recap: a look back at the Valencia Test', 'Just a couple of days after Francesco Bagnaia (Ducati Lenovo Team) was crowned 2022 MotoGP™ World Champion in Valencia’s title decider, strenuous work began for 2023 as factories rolled out a number of new parts for their riders to test at the annual Valencia Test.   Plenty happened, so let’s look back at what we learned to get us warmed up for the upcoming Shakedown and Official Sepang pre-season tests.', '/storage/pics/1675428232.jpg', 'Tech', '2023-02-03 10:43:52', '2023-02-03 10:43:52'),
(9, 'بوتين يهدد رئيس وزراء بريطانيا بالقتل: لا أريد أن أؤذيك بصاروخ لن يستغرق الأمر دقيقة', 'بث تليفزيون اليوم السابع تغطية خاصة، حول التهديدات التى تلقاها بوريس جونسون رئيس الوزراء البريطاني من الرئيس الروسي فلاديمير بوتين.  مفاجأةٌ فجرها رئيس الوزراء البريطاني الأسبق بوريس جونسون، حيث قال إن الرئيس الروسي فلاديمير بوتين هدده في مكالمة هاتفية بالقتل بواسطة صاروخ، وذلك قبل أيام قليلة من الحرب الروسية على أوكرانيا، قال له :\"لا أريد أن أؤذيك، لكن بصاروخ فإن الأمر لن يستغرق سوى دقيقةٍ واحدة\".  وسائل الإعلام البريطانية نقلت عن بوريس جونسون، وصفه للحدث الذى حدث قبل عام تقريبا، قبل أيام قليلة من اندلاع الحرب، حيث وصف ما دار بانه محادثةٌ \"غير عادية\" جرت في فبراير الماضي بعد أن زار كييف في محاولة أخيرة لإظهار الدعم الغربي لأوكرانيا وسط مخاوف متزايدة من حدوث هجوم روسي.  وردد جونسون، الذي ظهر كداعم قوي لإدارة الرئيس الأوكراني فولوديمير زيلينسكي في الأشهر التي أعقبت الحرب الروسية، هذا الزعم في سلسلة وثائقية جديدة من 3 أجزاء لهيئة الإذاعة البريطانية \"بي بي سي\"، تبحث في كيفية تصارع الغرب مع بوتين خلال السنوات التي سبقت الحرب في أوكرانيا.  وقام رئيس الوزراء الأسبق، الذي أُجبر على ترك منصبه كرئيس لوزراء بريطانيا في سبتمبر الماضي، بزيارة كييف في أول فبراير لتحذير روسيا من أن الحرب على أوكرانيا ستكون كارثية.', '/storage/pics/1675428296.jfif', 'politics', '2023-02-03 10:44:56', '2023-02-03 10:44:56');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
